@extends('layouts.admin')

@section('content')
    
    <div class="row">
        <div class="col-sm-12 text-center">
            <h2>Listagem de ritmos</h2>
        </div>
    </div>
    
    <div class="col-sm-6 col-sm-offset-3 text-center">
        <a href="ritmos/incluir" class="btn btn-success">Incluir ritmos</a>
        <br /><br />
    </div>
    
    <div class="col-sm-6 col-sm-offset-3">
        
        <ul class="list-group">
            @forelse($ritmos as $ritmo)
                <li class="list-group-item">
                    <strong>#{{ $ritmo->idritmos}} </strong>
                    {{ $ritmo->nome}} 
                    <div class="pull-right">
                        {!! link_to_action('Admin\RitmosController@Visualizar', 'Visualizar', $parameters = array('id'=>$ritmo->idritmos), $attributes = array('class'=>'btn btn-default btn-xs')) !!}
                        {!! link_to_action('Admin\RitmosController@Alterar', 'Alterar', $parameters = array('id'=>$ritmo->idritmos), $attributes = array('class'=>'btn btn-default btn-xs')) !!}
                        <a href="#" class="btn btn-default btn-xs" onclick="confirmaexclusao('{{route('admin.ritmos.excluir', ['id'=>$ritmo->idritmos])}}', '{{$ritmo->nome}}')" >
                            Excluir
                        </a>
                    </div>
                </li>
            
            @empty
                <p>Sem ritmos cadastrados...</p>
            @endforelse
        </ul>
    
    </div>
    
@endsection