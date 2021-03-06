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
        return view('articles.create');
    }

    public function store($value='')
    {
        request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required',
        ]);

        $article = new Article();

        $article->title=request('title');
        $article->excerpt=request('excerpt');
        $article->body=request('body');

        $article->save();

        return redirect('/articles');

    }

    public function edit($id)
    {
        $article = Article::find($id);

        return view('articles.edit', compact('article'));
    }

    public function update($id)
    {
        request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required',
        ]);

        $article = Article::find($id);

        $article->title=request('title');
        $article->excerpt=request('excerpt');
        $article->body=request('body');

        $article->save();

        return redirect('/articles/' . $article->id);
    }

    public function destroy($value='')
    {
        // code...
    }
}
