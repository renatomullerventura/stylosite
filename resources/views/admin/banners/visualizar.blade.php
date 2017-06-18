
@extends('layouts.admin')

@section('content')

<div class="container">
    <div class="row titulo">
        <div class="col-md-offset-3 col-sm-offset-3 col-sm-6 text-center">
            <h2>Visualização do banner de ordem #'{{$banner->ordem}}'</h2>
            
        </div>
    </div>
</div>

<div class="row fotoperfil">
    <div class="col-sm-12">
        <label for="image">
        <img src={{ asset($banner->imagem) }} width="100%">
        </label>
    </div>
</div>

@endsection