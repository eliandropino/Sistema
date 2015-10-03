@extends('layout.principal')

@section('conteudo')
    <h1>Form de Contato</h1>
    <div class="row">

        <div class="col-lg-6">
    {!!Form::open(array('action'=>'IndexController@postContato','method'=>'POST'))!!}
    <div class="form-group">
        {!!Form::text('nome',null,['class'=>'form-control','required','placeholder'=>'Insira o Nome'])!!}
    </div>
    <div class="form-group">
        {!!Form::text('sobrenome',null,['class'=>'form-control','required','placeholder'=>'Insira Sobrenome'])!!}
    </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                {!!Form::number('idade',null,['class'=>'form-control','required','placeholder'=>'Insira a idade'])!!}
            </div>
            <div class="form-group">
                {!!Form::text('cidade',null,['class'=>'form-control','required','placeholder'=>'Insira a cidade'])!!}
            </div>

        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        {!!Form::submit('Salvar',['class'=>'btn btn-primary'])!!}

    {!!Form::close()!!}
            </div>
    </div>
@stop



