<?php

namespace App\Http\Livewire;

use App\Models\ResourcesProduct;
use App\Models\User;
use App\Service\FileUploadService;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class ResourceProductsList extends Component
{
    use WithFileUploads;
    use WithPagination;

    public $viewForm = false;

    public $keywords;
    public $product;
    public $user;
    public $file;

    public $isEditMode = false;

    public $rules = [
        'product.name' => ['required'],
        'product.preview_desc' => ['required'],
        'file' => ['nullable','required_if:isEditMode,false', 'image']
    ];

    public function mount()
    {
        $this->product = new ResourcesProduct();
    }

    public function save()
    {
        $this->validate();

        if ($this->isEditMode){

            if (!empty($file_path)){
                $file_path = ((new FileUploadService())->upload("resources", $this->file));
                $this->product->img = $file_path;
            }
            $this->product->save();

            $this->dispatchBrowserEvent('success_alert', 'Product updated.');

        }else{
            $file_path = ((new FileUploadService())->upload("resources", $this->file));

            $this->product->created_by = Auth::user()->id;
            $this->product->img = $file_path;

            $this->product->save();

            $this->dispatchBrowserEvent('success_alert', 'Product saved.');
        }

        $this->closeForm();

    }

    public function showForm()
    {
        $this->viewForm = true;
        $this->product = new ResourcesProduct();
        $this->isEditMode = false;
        $this->file = "";
    }

    public function closeForm()
    {
        $this->viewForm = false;
        $this->isEditMode = false;
        $this->product = new ResourcesProduct();
    }
    public function render()
    {
        $products = ResourcesProduct::when(!empty($this->keywords), function ($query){
            $query->where('name', 'like', '%'. $this->keywords . '%')
                ->orWhere('preview_desc', 'like', '%'. $this->keywords . '%');
        })->latest()->paginate('15');
        return view('livewire.resource-products-list', ['products' => $products]);
    }

    public function showViewModal(ResourcesProduct $product)
    {
        $this->product = $product;
        $created_by = $this->product->created_by;
        $this->user = User::find($created_by);
        $this->product->created_by = $this->user->name;
        $this->emit('showViewModal');
    }

    public function deleteProduct()
    {
        $this->product->delete();
        $this->emit('closeDeleteModal');
        $this->dispatchBrowserEvent('success_alert', 'Successful.');
        $this->product = new ResourcesProduct();
    }

    public function showDeleteModal(ResourcesProduct $product)
    {
        $this->product = $product;
        $this->emit('showDeleteModal');
    }

    public function prepareEditProduct($id)
    {
        $this->viewForm = true;
        $this->isEditMode = true;
        $this->product = ResourcesProduct::find($id);

    }


}
