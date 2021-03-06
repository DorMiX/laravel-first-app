@extends('simplework')

@section('head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.8.0/css/bulma.min.css">
@endsection

@section('content')
    <div id="wrapper">
        <div class="container" id="page">
            <h1 class="heading has-text-weight-bold is-size-3">New Article</h1>
            <form class="" action="/articles" method="post">
                @csrf

                <div class="field">
                    <label for="" class="label">Title</label>
                    <div class="control">
                        <input
                            type="text" name="title" id="title"
                            class="input @error ('title') is-danger @enderror"
                            value="{{ old('title') }}">
                        @error ('title')
                            <p class="help is-danger">{{ $errors->first('title') }}</p>
                        @enderror
                    </div>
                </div>

                <div class="field">
                    <label for="" class="label">Excerpt</label>
                    <div class="control">
                        <textarea name="excerpt" id="excerpt" class="textarea {{ $errors->has('excerpt') ? 'is-danger' : '' }}">{{ old('excerpt') }}</textarea>
                        @if ($errors->has('excerpt'))
                            <p class="help is-danger">{{ $errors->first('excerpt') }}</p>
                        @endif
                    </div>
                </div>

                <div class="field">
                    <label for="" class="label">Body</label>
                    <div class="control">
                        <textarea name="body" id="body" class="textarea {{ $errors->has('body') ? 'is-danger' : '' }}">{{ old('body') }}</textarea>
                        <p class="help is-danger">{{ $errors->first('body') }}</p>
                    </div>
                </div>

                <div class="field is-grouped">
                    <div class="control">
                        <button type="submit" name="button" class="button is-link">Submit</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection
