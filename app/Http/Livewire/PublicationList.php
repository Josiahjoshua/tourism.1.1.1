<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Publications;
use App\Models\User;
use App\Service\FileUploadService;
use Illuminate\Support\Facades\Auth;
use Livewire\WithFileUploads;
use Livewire\WithPagination;


class PublicationList extends Component
{
    use WithFileUploads;
    use WithPagination;

    public $viewForm = false;

    public $keywords;
    public $publication;

    public $user;

    public $file;

    public $isEditMode = false;

    public $rules = [
        'publication.name' => ['required'],
        'file' => ['nullable','required_if:isEditMode,false']
    ];

    public function mount()
    {
        $this->publication = new Publications();
    }

    public function save()
    {
        // dd('hello');

        $this->validate();

        if ($this->isEditMode){

            if (!empty($file_path)){
                $file_path = ((new FileUploadService())->upload("publications", $this->file));
                $this->publication->file = $file_path;
            }
            $this->publication->save();

            $this->dispatchBrowserEvent('success_alert', 'Publication updated.');

        }else{
            $file_path = ((new FileUploadService())->upload("publications", $this->file));

            $this->publication->created_by = Auth::user()->id;
            $this->publication->file = $file_path;

            $this->publication->save();

            $this->dispatchBrowserEvent('success_alert', 'Publication saved.');
        }

        $this->closeForm();

    }

    public function showForm()
    {
        $this->viewForm = true;
        $this->publication = new Publications();
        $this->isEditMode = false;
        $this->file = "";
    }

    public function closeForm()
    {
        $this->viewForm = false;
        $this->isEditMode = false;
        $this->publication = new Publications();
    }

    public function render()
    {
        $publications = Publications::when(!empty($this->keywords), function ($query){
            $query->where('name', 'like', '%'. $this->keywords . '%');
        })->latest()->paginate('15');
        return view('livewire.publication-list', ['publications' => $publications]);
    }


    public function showViewModal(Publications $publc)
    {
        $this->publication = $publc;
        $created_by = $this->publication->created_by;
        $this->user = User::find($created_by);
        $this->publication->created_by = $this->user->name;
        $this->emit('showViewModal');
    }


    public function deletePublication()
    {
        $this->publication->delete();
        $this->emit('closeDeleteModal');
        $this->dispatchBrowserEvent('success_alert', 'Successful.');
        $this->publication = new Publications();
    }


    public function showDeleteModal(Publications $publc)
    {
        $this->publication = $publc;
        $this->emit('showDeleteModal');
    }

    public function prepareEditPublication($id)
    {
        $this->viewForm = true;
        $this->isEditMode = true;
        $this->publication = Publications::find($id);

    }

}

