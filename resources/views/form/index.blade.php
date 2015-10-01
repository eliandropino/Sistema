@extends('layout.principal')

@section('formnome')
    {!!Form::open(array('exemploNome'=>'IndexController@exemploNome','method'=>'POST'))!!}
    <div class="form-group">
        {!!Form::text('descricao',null,['class'=>'form-control','required','placeholder'=>'Insira a Descrição'])!!}
    </div>

    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        {!!Form::submit('Salvar',['class'=>'btn btn-primary'])!!}
    </div>
    {!!Form::close()!!}
@stop



