@extends('layout.principal')

@section('conteudo')
    @foreach($notas as $nota)
        <ul>
            <li>nota{{$nota}}</li>
        </ul>
    @endforeach
@stop