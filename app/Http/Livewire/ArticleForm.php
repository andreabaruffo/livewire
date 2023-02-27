<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;

class ArticleForm extends Component
{
    public $title;
    public $subtitle;
    public $body;

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

// public function updateTitle(){
//     $this->validateOnly('title');
// }
    public function updated($proppertyName){
        $this->validateOnly($proppertyName);
    }

    public function save(){
        $this->validate();
        Article::create(
            [
                'title'=>$this->title,
                'subtitle'=>$this->subtitle,
                'body'=>$this->body
            ]
        ); 

        $this->reset();
    }

    public function render()
    {
        return view('livewire.article-form');
    }
}
