<div class="form-group">
    <label>Situação</label>
    @if($enabled)
    <div class="radio">
        <label class="">
            {{ Form::radio('ativo', '1', $ativo) }} <strong>Ativo</strong>
        </label>
        <label class="">
            {{ Form::radio('ativo', '0', !$ativo) }} <strong>Inativo</strong>
        </label>
    </div>
    @else
        : {{ $enabled?'Ativo':'Inativo'}}
    @endif
</div>