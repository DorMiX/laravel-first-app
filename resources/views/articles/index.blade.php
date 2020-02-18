@extends('simplework')

@section('content-about')

    <div id="wrapper">
        <div class="container">
            <h2>List of Articles</h2>
            <span class="byline">from latest to oldest</span>
        </div>

        <div id="wrapper">
        	<div id="page" class="container">
        		<ul class="style1">
                    @foreach ($articles as $article)
                        <li class="first">
        					<h3><a href="/articles/{{ $article->id }}"> {{ $article->title }}</a></h3>
        					<p>{{ $article->excerpt }}</p>
        				</li>
                    @endforeach
        		</ul>
        	</div>
        </div>
    </div>

@endsection
