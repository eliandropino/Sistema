@extends('layout.principal')

@section('conteudo')
<h1>Posts</h1>
    @foreach($posts as $post)
        <ul>
            <li><h3>{{$post->title}}</h3></li>
            <li>{{$post->content}}</li>
        </ul>
    @endforeach
@endsection