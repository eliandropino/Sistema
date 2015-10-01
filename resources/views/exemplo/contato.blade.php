@extends('layout.principal')

@section('listainjection')
<div class="div">
    <div class="row">


            <h1> Ola {{$nome}} {{$sobrenome}}</h1>
            <h1>Idade:{{$idade}}</h1>
            <h1>Cidade:{{$cidade}}</h1>

    </div>
    <p>{!! link_to('/', $title ='Voltar')!!}</p>

</div>
    @stop