<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Women Who Code Mérida">
    <meta name="author" content="Yuceli Polanco, Javier Ojeda">
    <link rel="shortcut icon" href="assets/ico/favicon.png">

    <title> Women Who Code Mérida</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/main.css" rel="stylesheet">
    <link href="assets/css/login.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="assets/css/icomoon.css">
    <script src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/modernizr.custom.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="assets/js/html5shiv.js"></script>
<script src="assets/js/respond.min.js"></script>
<![endif]-->
</head>

<br><br>
<body>
    <div id="navbar-main">
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon icon-shield" style="font-size:30px; color:#3498db;"></span>
                    </button>
                    <a class="navbar-brand hidden-xs hidden-sm" href="/"><span class="icon icon-shield" style="font-size:18px; color:#3498db;"></span></a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li> <a href="{{ url('/#home') }}" class="smoothScroll">Inicio</a></li>
                        <li> <a href="{{ url('/#about') }}" class="smoothScroll">Nosotros</a></li>
                        <li> <a href="{{ url('/#courses') }}" class="smoothScroll">Cursos</a></li>
                        <li> <a href="{{ url('/#events') }}" class="smoothScroll">Eventos</a></li>
                        <li> <a href="{{ url('/#contact') }}" class="smoothScroll">Contacto</a></li>
                    </ul>
                    <ul class="nav navbar-nav pull-right">
                        @if(Auth::check())
                        <li><a href="logout" class="navbar-right pull-right">Cerrar sesión</a></li>
                        @else
                        <li><a href="login"> Iniciar sesión</a></li>
                        <li> <a href="register" class="smoothScroll"> Registro</a></li>
                        @endif
                    </ul> 
                </div>
            </div>
        </div>
    </div>

    <div class="wrapper">
        {{ Form::open(['url' => 'login', 'autocomplete' => 'off', 'class'=> 'form-signin', 'role' => 'form']) }}

        @if(Session::has('error_message'))
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            {{ Session::get('error_message') }}
        </div>    
        @endif   
        <h2 class="form-signin-heading">Iniciar sesión</h2>


        <p>
            {{ Form::text('nickname', '',['class' => 'form-control', 'placeholder' => 'usuario']) }}
        </p>

        <p>
            {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'contraseña']) }}
        </p>

        <div class="checkbox">
            <label>
                {{ Form::submit('Iniciar', ['class' => 'btn btn-lg btn-primary btn-block'])  }}</p>
                {{ Form::checkbox('remember', true) }} Recordarme
            </label>
        </div>
        <a href="{{ url('/#register') }}" class="smoothScroll"> Registro</a>
        {{ Form::close() }}
    </div>

   <div id="footerwrap">
            <div class="container">
                <h4>Creado por <a href="https://www.facebook.com/WomenWhoCodeMerida">Women Who Code</a> - Copyright 2015</h4>
            </div>
        </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
        

    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="assets/js/smoothscroll.js"></script>
    <script type="text/javascript" src="assets/js/jquery-func.js"></script>
  </body>
</html>
