
@extends('layouts.admin')

@section('content')

<div class="container">
    <div class="row titulo">
        <div class="col-md-offset-3 col-sm-offset-3 col-sm-6 text-center">
            <h2>Alteração do ritmo <br />'{{$ritmo->nome}}'</h2>
        </div>
    </div>
    
    {!! Form::open(array('url' => 'admin/ritmos/salvar', 'files'=>true)) !!}
    
        <hr />
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif  
        {{ Form::hidden('idritmos', $ritmo->idritmos) }}
        
        <div class="row">
            <div class="nome col-sm-6 col-md-4">
                {{ Form::tbText('Nome', 'nome', $ritmo->nome, $errors) }}
            </div>
        </div>
        <div class="row">
            <div class="descricao col-md-6">
                {{ Form::tbTextArea('Descrição', 'descricao', $ritmo->descricao, ['class'=>'summernote']) }}
            </div>
        </div>
        
        {{ Form::token() }}
        
        <div class="row">
            {{ Form::submit('Alterar', ['class'=>'btn btn-warning']) }}
        </div>
    {!! Form::close() !!}
    
</div>

@endsection