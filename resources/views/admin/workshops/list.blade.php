@extends('layouts.admin')

@section('content')
    
    <div class="row">
        <div class="col-sm-12 text-center">
            <h2>Listagem de workshops</h2>
        </div>
    </div>
    
    <div class="col-sm-6 col-sm-offset-3 text-center">
        <a href="workshops/incluir" class="btn btn-success">Incluir workshops</a>
        <br /><br />
    </div>
    
    <div class="col-sm-6 col-sm-offset-3">
        
        <ul class="list-group">
            @forelse($workshops as $workshop)
                <li class="list-group-item">
                    <img src={{ asset($workshop->imagem_url) }} width="50">
                    {{ $workshop->titulo}}
                    <strong>({{ date( "d/m/Y", strtotime($workshop->data)) }})</strong>
                    
                    
                    <div class="pull-right">
                        {!! link_to_action('Admin\WorkshopsController@Visualizar', 'Visualizar', $parameters = array('id'=>$workshop->idworkshops), $attributes = array('class'=>'btn btn-default btn-xs')) !!}
                        {!! link_to_action('Admin\WorkshopsController@Alterar', 'Alterar', $parameters = array('id'=>$workshop->idworkshops), $attributes = array('class'=>'btn btn-default btn-xs')) !!}
                        <a href="#" class="btn btn-default btn-xs" onclick="confirmaexclusao('{{route('admin.workshops.excluir', ['id'=>$workshop->idworkshops])}}', '{{$workshop->titulo}}')" >
                            Excluir
                        </a>
                    </div>
                </li>
            
            @empty
                <p>Sem workshops cadastrados...</p>
            @endforelse
        </ul>
    
    </div>
    
@endsection