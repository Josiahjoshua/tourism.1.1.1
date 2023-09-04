<?php

namespace App\Http\Livewire;

use App\Models\CarouselItem;
use App\Models\User;
use App\Service\FileUploadService;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class CarouselItemsList extends Component
{
    use WithFileUploads;
    use WithPagination;

    public $viewForm = false;

    public $keywords;
    public $carouselItem;
    public $user;
    
    public $file;

    public $isEditMode = false;

    public $rules = [
        'carouselItem.text' => ['required'],
        'file' => ['nullable','required_if:isEditMode,false', 'image']
    ];

    public function mount()
    {
        $this->carouselItem = new CarouselItem();
    }

    public function save()
    {
        $this->validate();

        if ($this->isEditMode){

            if (!empty($file_path)){
                $file_path = ((new FileUploadService())->upload("carousel-items", $this->file));
                $this->carouselItem->image = $file_path;
            }
            $this->carouselItem->save();

            $this->dispatchBrowserEvent('success_alert', 'Carousel Item  updated.');

        }else{
            $file_path = ((new FileUploadService())->upload("carousel-items", $this->file));

            $this->carouselItem->created_by = Auth::user()->id;
            $this->carouselItem->image = $file_path;

            $this->carouselItem->save();

            $this->dispatchBrowserEvent('success_alert', 'Carousel Item saved.');
        }

        $this->closeForm();

      }

    public function showForm()
    {
        $this->viewForm = true;
        $this->carouselItem = new CarouselItem();
        $this->isEditMode = false;
        $this->file = "";
    }

    public function closeForm()
    {
        $this->viewForm = false;
        $this->isEditMode = false;
        $this->carouselItem = new CarouselItem();
    }

    public function render()
    {
        $carouselItems = CarouselItem::when(!empty($this->keywords), function ($query){
            $query->where('text', 'like', '%'. $this->keywords . '%');
        })->latest()->paginate('15');
        return view('livewire.carousel-items-list', ['carouselItems' => $carouselItems]);
    }

    public function showViewModal(CarouselItem $item)
    {
        $this->carouselItem = $item;
        $created_by = $this->carouselItem->created_by;
        $this->user = User::find($created_by);
        $this->carouselItem->created_by = $this->user->name;
        $this->emit('showViewModal');
    }

    public function deleteCarouselItem()
    {
        $this->carouselItem->delete();
        $this->emit('closeDeleteModal');
        $this->dispatchBrowserEvent('success_alert', 'Successful.');
        $this->carouselItem = new CarouselItem();
    }

    public function showDeleteModal(CarouselItem $item)
    {
        $this->carouselItem = $item;
        $this->emit('showDeleteModal');
    }

    public function prepareEditCarouselItem($id)
    {
        $this->viewForm = true;
        $this->isEditMode = true;
        $this->carouselItem = CarouselItem::find($id);

    }
}
