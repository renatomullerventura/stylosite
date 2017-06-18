@extends('layouts.admin')

@section('content')
    
    <div class="row">
        <div class="col-sm-12 text-center">
            <h2>Listagem de banners</h2>
        </div>
    </div>
    
    <div class="col-sm-6 col-sm-offset-3">
        
        <ul class="list-group">
            @forelse($banners as $banner)
                <li class="list-group-item">
                    <strong>#{{ $banner->idbanners }}</strong>
                    <img src={{ asset($banner->imagem) }} width="250">
                    <div class="pull-right">
                        {!! link_to_action('Admin\BannersController@Visualizar', 'Visualizar', $parameters = array('id'=>$banner->idbanners), $attributes = array('class'=>'btn btn-default btn-xs')) !!}
                        {!! link_to_action('Admin\BannersController@Alterar', 'Alterar', $parameters = array('id'=>$banner->idbanners), $attributes = array('class'=>'btn btn-default btn-xs')) !!}
                        
                    </div>
                </li>
            
            @empty
                <p>Sem banners cadastrados...</p>
            @endforelse
        </ul>
    
    </div>
    
@endsection