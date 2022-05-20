@extends('layout')

@section('title', 'New Article')

@section('content')
    <form action="/admin" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" placeholder="title" name="title">
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea class="form-control" id="content" rows="12" name="content"></textarea>
        </div>
        <input type="submit" class="btn btn-primary">
    </form>
@endsection