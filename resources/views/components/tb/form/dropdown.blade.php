<div class="form-group {{$errors->has($name)?'has-error':'' }}" data-toggle="tooltip" data-placement="top" @if ($errors->has($name)) title="{{ $errors->first($name) }}" @endif >
    {{ Form::label($name, $label, ['class' => 'control-label']) }}
    
    @if($enabled)
    <select class="form-control" name="{{ $name }}" {{ implode(' ', $attributes) }} >
        <option value="">-- Escolha --</option>
        @foreach($value as $key => $nome)
            @if($key == $selected)
                <option value="{{ $key }}" selected="selected">{{ $nome }} </option>
            @else
                <option value="{{ $key }}">{{ $nome }} </option>
            @endif
        @endforeach
        
    </select>
    @else
        @foreach($value as $key => $nome)
            @if($key == $selected)
                : {{ $nome }}
            @endif
        @endforeach
    @endif
</div>