<div class="form-group">
    {!! \Form::label($name, $label, $required) !!}

    @php
        $options = ['class' => 'form-control custom-select' . ($errors->has($name) ? ' is-invalid' : null)];
        
        if (isset($required) && $required == true) {
            $options['required'] = 'required';
        }
    @endphp

    {!! \Form::selectMonth($name, $selected, array_merge($options, $attributes)) !!}

    {!! \Form::error($name) !!}
</div>
