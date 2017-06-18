
@extends('layouts.admin')

@section('content')

<div class="container">
    <div class="row titulo">
        <div class="col-md-offset-3 col-sm-offset-3 col-sm-6 text-center">
            <h2>Visualização do ritmo <br />'{{$ritmo->nome}}'</h2>
        </div>
    </div>
    
    {!! Form::open(array('url' => 'admin/ritmos/salvar', 'files'=>true)) !!}
    
        <hr />
        
        <div class="row">
            <div class="nome col-sm-6 col-md-4">
                {{ Form::tbText('Nome', 'nome', $ritmo->nome, $errors, [], false) }}
            </div>
        </div>
        <div class="row">
            <div class="descricao col-md-6">
                {{ Form::tbTextArea('Descrição', 'descricao', $ritmo->descricao, ['class'=>'summernote'], false) }}
            </div>
        </div>
        
    {!! Form::close() !!}
    
</div>

@endsection