<div class="{{ wrapper($attributes) }}">

    {!! \Form::label($name, $label, $required) !!}

    {!! \Form::email($name, $default, $required, $attributes) !!}

    {!! \Form::error($name . '[]') !!}
</div>
