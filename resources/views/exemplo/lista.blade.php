@extends('layout.principal')

@section('conteudo')
<div class="div">
    <div class="row">
        <h1>Ola </h1>
    </div>
    <h2>Apresentação de Lista com Dependence Injection</h2>
    <ul>
        @foreach($listas as $lista)
            <li>{{$lista}}</li>
            @endforeach
    </ul>
    <p>{!! link_to('/', $title ='Voltar')!!}</p>

</div>
    @stop