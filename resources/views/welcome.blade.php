@extends('layout')

@section('title', 'Home page')

@section('content')
    <h1>Articles</h1>
    {{$articles->links()}}
    <div class="row row-cols-4">
        @foreach($articles as $article)
            <div class="col mb-3">
                <div class="card h-100">
                    <div class="card-body">
                      <h5 class="card-title">{{$article->title}}</h5>
                      <p class="card-text">{{$article->content}}</p>
                      <a href="#" class="card-link">Read more</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    {{$articles->links()}}
@endsection