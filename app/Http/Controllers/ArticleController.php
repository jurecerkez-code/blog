<?php

namespace App\Http\Controllers;

use App\Models\Article;

class ArticleController extends Controller
{
    public function show($id)
{
    $article = \App\Models\Article::find($id);

    return view('articles.show', compact('article'));
}

}
