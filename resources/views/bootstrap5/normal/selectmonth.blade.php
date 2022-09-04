<div class="form-group">
    {!! \Form::label($name, $label, $required) !!}

    @php
        $options = ['class' => 'form-control custom-select'];

        if (isset($required) && $required == true) {
            $options['required'] = 'required';
        }
    @endphp

    {!! \Form::selectMonth($name, $selected, $required, $attributes) !!}

    {!! \Form::error($name) !!}
</div>
