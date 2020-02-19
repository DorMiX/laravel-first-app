<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Article;

class ArticlesController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->get();

        return view('articles.index', [
            'articles' => $articles
        ]);
    }

    public function show($id)
    {
        $article = Article::find($id);

        return view('articles.show', [
            'article' => $article
        ]);
    }

    public function create($value='')
    {
        // code...
    }

    public function store($value='')
    {
        // code...
    }

    public function edit($value='')
    {
        // code...
    }

    public function update($value='')
    {
        // code...
    }

    public function destroy($value='')
    {
        // code...
    }
}
