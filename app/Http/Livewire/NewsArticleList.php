<?php

namespace App\Http\Livewire;

use App\Models\NewsArticle;
use App\Service\FileUploadService;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class NewsArticleList extends Component
{
    use WithFileUploads;
    use WithPagination;

    public $viewForm = false;

    public $keywords;
    public $article;
    public $file;

    public $isEditMode = false;

    public $rules = [
        'article.name' => ['required'],
        'article.preview_desc' => ['required'],
        'file' => ['required', 'image']
    ];

    public function mount()
    {
        $this->article = new NewsArticle();
    }

    public function save()
    {
        $this->validate();

        if ($this->isEditMode){

            if (!empty($file_path)){
                $file_path = ((new FileUploadService())->upload("article", $this->file));
                $this->article->img = $file_path;
            }
            $this->article->save();

            $this->dispatchBrowserEvent('success_alert', 'Article updated.');

        }else{
            $file_path = ((new FileUploadService())->upload("article", $this->file));

            $this->article->created_by = Auth::user()->id;
            $this->article->img = $file_path;

            $this->article->save();

            $this->dispatchBrowserEvent('success_alert', 'Article saved.');
        }

        $this->closeForm();
    }

    public function showForm()
    {
        $this->viewForm = true;
        $this->article = new NewsArticle();
        $this->file = "";
    }

    public function closeForm()
    {
        $this->viewForm = false;
    }
    public function render()
    {
        $articles = NewsArticle::when(!empty($this->keywords), function ($query){
            $query->where('name', 'like', '%'. $this->keywords . '%')
                ->orWhere('preview_desc', 'like', '%'. $this->keywords . '%');
        })->paginate('15');
        return view('livewire.news-article-list', ['articles' => $articles]);
    }
}
