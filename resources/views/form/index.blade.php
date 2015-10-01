@extends('layout.principal')

@section('formnome')
    {!!Form::open(array('action'=>'IndexController@exemploNome','method'=>'POST'))!!}
    <div class="form-group">
        {!!Form::text('nome',null,['class'=>'form-control','required','placeholder'=>'Insira o Nome'])!!}
    </div>


        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        {!!Form::submit('Salvar',['class'=>'btn btn-primary'])!!}

    {!!Form::close()!!}
@stop



