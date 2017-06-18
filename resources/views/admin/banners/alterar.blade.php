
@extends('layouts.admin')

@section('content')

<div class="container">
    <div class="row titulo">
        <div class="col-md-offset-3 col-sm-offset-3 col-sm-6 text-center">
            <h2>Alteração do banner de ordem <strong>#{{$banner->ordem}}</strong></h2>
        </div>
    </div>
    
    {!! Form::open(array('url' => 'admin/banners/salvar', 'files'=>true)) !!}
    
        <div class="row imagem">
            <div class="col-sm-12">
                <label for="image">
                <img src={{ asset($banner->imagem) }} width="100%">
                {{ Form::file('imagem', ['class'=>'hidden', 'id'=>'image']) }}
                </label>
            </div>
        </div>
        
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
        {{ Form::hidden('idbanners', $banner->idbanners) }}
        
        {{ Form::token() }}
        
        <div class="row">
            {{ Form::submit('Alterar', ['class'=>'btn btn-warning']) }}
        </div>
    {!! Form::close() !!}
    
</div>

@endsection