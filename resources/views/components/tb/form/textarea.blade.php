<div class="form-group">
    {{ Form::label($name, null, ['class' => 'control-label']) }}
    @if($enabled)
    {{ Form::textarea($name, $value, array_merge(['class' => 'form-control'], $attributes)) }}
    @else
    : {!! $value !!}
    @endif
    
</div>