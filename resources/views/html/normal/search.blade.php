<div class="form-group">
    {!! \Laraflow\Form\Facades\Form::label($name, $label, $required) !!}

    @php

        if (isset($required) && $required == true) {
            $options['required'] = 'required';
        }
    @endphp

    {!! \Laraflow\Form\Facades\Form::search($name, $default, $required, $attributes) !!}

    {!! \Laraflow\Form\Facades\Form::error($name) !!}
</div>
