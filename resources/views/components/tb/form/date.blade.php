<div class="form-group">
    {{ Form::label($name, $label, ['class' => 'control-label']) }}
    @if($enabled)
        <div class="input-group date">
            <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
            {{ Form::text($name, $value, array_merge(['class' => 'form-control'], $attributes)) }}
        </div>
    @else
    : {{ $value }}
    @endif
</div>