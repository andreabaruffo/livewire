<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;

class ArticleEditForm extends Component
{
    public $title;
    public $subtitle;
    public $body;
    public $articleId;

    protected $rules = [
        'title'=>'required|min:6',
        'subtitle'=>'required|min:10',
        'body'=>'required|min:25',
    ];


    protected $message =[
   
        'title.required'=>'Il titolo è richiesto',
        'subtitle.required'=>'Il sottotitolo è richiesto',
        'body.required'=>'Il corpo serve',
        'title.min'=>'Il titolo richiesto è di almeno 6 Caratteri',
        'subtitle.min'=>'Il sottotitolo richiesto è di almeno 10',
        'body.min'=>'Il corpo serve più lungo'
    ];

    public function updated($proppertyName){
        $this->validateOnly($proppertyName);
    }

    public function mount($articleId){
        $article = Article::findOrFail($articleId);
        $this->articleId = $articleId;
        $this->title = $article->title;
        $this->subtitle = $article->subtitle;
        $this->body = $article->body;
    }

    public function updateArticle(){
        $this->validate();
        $article = Article::findOrFail($this->articleId);
        $article->update(
            [
                'title'=>$this->title,
                'subtitle'=>$this->subtitle,
                'body'=>$this->body
            ]
        );
        return redirect()->route('article.index');
    }

    public function render()
    {
        return view('livewire.article-edit-form');
    }
}
