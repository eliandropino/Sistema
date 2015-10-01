@extends('layout.principal')

@section('formnome')
<div class="div text-center">
    <div class="row">
        <h1>Ola {{$nome}}</h1>
    </div>
    <p>{!! link_to('/', $title ='Voltar')!!}</p>

</div>
    @stop