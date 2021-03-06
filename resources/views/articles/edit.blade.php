@extends('simplework')

@section('head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.8.0/css/bulma.min.css">
@endsection

@section('content')
    <div id="wrapper">
        <div class="container" id="page">
            <h1 class="heading has-text-weight-bold is-size-3">Update Article</h1>
            <form class="" action="/articles/{{ $article->id }}" method="POST">
                @csrf
                @method('PUT')

                <div class="field">
                    <label for="" class="label">Title</label>
                    <div class="control">
                        <input type="text" name="title" id="title" class="input" value="{{ $article->title }}">
                    </div>
                </div>

                <div class="field">
                    <label for="" class="label">Excerpt</label>
                    <div class="control">
                        <textarea name="excerpt" id="excerpt" class="textarea">{{ $article->excerpt }}</textarea>
                    </div>
                </div>

                <div class="field">
                    <label for="" class="label">Body</label>
                    <div class="control">
                        <textarea name="body" id="body" class="textarea">{{ $article->body }}</textarea>
                    </div>
                </div>

                <div class="field is-grouped">
                    <div class="control">
                        <button type="submit" name="button" class="button is-link">Save</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection
