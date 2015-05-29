@include('welcome.layouts.header')

<div class="container">
    <div class="wrapper">
        {{ Form::open(['url' => 'login', 'autocomplete' => 'off', 'class'=> 'form-signin', 'role' => 'form']) }}

        @if(Session::has('error_message'))
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            {{ Session::get('error_message') }}
        </div>    
        @endif   
        <h2 class="form-signin-heading">Iniciar sesión</h2>


        <p>{{ Form::text('nickname', '',['class' => 'form-control', 'placeholder' => 'Usuario']) }} </p>

        <p>{{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Contraseña']) }} </p>

        <p>{{ Form::submit('Iniciar', ['class' => 'btn btn-lg btn-primary btn-block']) }} </p>

        <div class="checkbox">
            <label> {{ Form::checkbox('remember', true) }} Recordarme </label>
        </div>

        <a href="{{ url('/register') }}"> ¿Necesitas una cuenta?</a>
        {{ Form::close() }}
    </div>
</div>
@include('layouts.footer')

