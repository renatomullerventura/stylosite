<div class="form-group {{$errors->has($name)?'has-error':'' }}" data-toggle="tooltip" data-placement="top" @if ($errors->has($name)) title="{{ $errors->first($name) }}" @endif >
    {{ Form::label($label, null, ['class' => 'control-label']) }} 
    @if($enabled)
    {{ Form::text($name, $value, array_merge(['class' => 'form-control'], $attributes)) }}
    @else
    : {{ $value }}
    @endif
</div>