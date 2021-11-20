<div class="form-group row">
    {!! Form::nLabel($name . '[]', $label, $required) !!}

    @php
    $options = ['class' => 'form-control custom-select' . ($errors->has($name) ? ' is-invalid' : NULL ), "multiple" => "multiple"];

    $msg = $errors->first($name) ?? null;

    if(isset($required) && $required == true)
    $options['required'] = 'required';
    @endphp

    {!! Form::select($name . '[]', $data, $selected, array_merge($options, $attributes)) !!}

    {!! Form::nError($name . '[]', $msg) !!}
</div>
