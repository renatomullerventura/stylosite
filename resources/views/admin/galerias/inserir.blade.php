
@extends('layouts.admin')

@section('content')

<div class="container">
    <div class="row titulo">
        <div class="col-md-offset-3 col-sm-offset-3 col-sm-6 text-center">
            <h2>Inserção de galeria</h2>
        </div>
    </div>
    
    <hr />
    
    {!! Form::open(array('url' => 'admin/galerias/salvar', 'files'=>true)) !!}
        
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif  
        
        
        <div class="row">
            <div class="col-sm-4 col-md-6">
                {{ Form::tbText('Título', 'titulo', '', $errors) }}
            </div>
            <div class="col-sm-4 col-md-3">
                {{ Form::tbDate('Data', 'data', date('d/m/Y')) }}
            </div>
            <div class="col-sm-4 col-md-3">
                {{ Form::tbAtivo('Ativo', 'ativo', 1, []) }}
            </div>
            <div class="col-sm-12 col-md-12">
                {{ Form::tbTextArea('Descrição', 'descricao', '', ['class'=>'summernote']) }}
            </div>
        </div>
        
        
        {{ Form::token() }}
        
        <div class="row">
            {{ Form::submit('Inserir', ['class'=>'btn btn-success']) }}
        </div>
    {!! Form::close() !!}
    
</div>

@endsection