@extends('layout')

@section('title', 'Home page')

@section('content')
    <h1>Articles</h1>
    <a href="/admin/create" class="btn btn-primary">New Article</a>
    {{$articles->links()}}
        <table class="table table-striped">
            <thead>
                <th>Id</th>
                <th>Title</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Actions</th>
            </thead>
            <tbody>
                @foreach($articles as $article)
                    <tr>
                        <td>{{$article->id}}</td>
                        <td>{{$article->title}}</td>
                        <td>{{$article->created_at}}</td>
                        <td>{{$article->updated_at}}</td>
                        <td>
                            <a href="#" class="btn btn-primary">view</a>
                            <a href="/admin/{{$article->id}}" class="btn btn-warning">edit</a>
                            <a href="/admin/{{$article->id}}/delete" class="btn btn-danger">delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    {{$articles->links()}}
@endsection