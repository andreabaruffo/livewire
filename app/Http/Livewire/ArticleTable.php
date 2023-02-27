<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;

class ArticleTable extends Component
{
    public function render()
    {
        return view('livewire.article-table', ['articles'=>Article::all()]);
    }

    public function deleteArticle($id){
        Article::findOrFail($id)->delete();
    }
}
