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
                        <li><a href="login"> Iniciar sesión</a></li>
                        <li> <a href="register" class="smoothScroll"> Registro</a></li>
                    </ul> 
                </div>
            </div>
        </div>
    </div>

      <br><br><br><br><br><br><br>
      <div class="container">
      <div class="row"> 
      {{Form::open(array('action' => 'RegisterController@registerUser', 'method' => 'post', 'class'=> 'form', 'role' => 'form'))}}
       
        <h2 class="form-signin-heading text-center">Únete a Women Who Code</h2>


        <div class="form-group">
            @if($errors -> has("name"))
                                    @foreach ($errors->get('name') as $message)
                                        {{$message}} <br>
                                    @endforeach
                            @endif
                            {{Form::text('name', '',array('class' => 'form-control input-lg', 'placeholder' => 'Nombre' , 'required' => 'required' , 'tabindex' => '1'))}}
        </div>


                        <div class="form-group">
                            @if($errors -> has("nickname"))
                                    @foreach ($errors->get('nickname') as $message)
                                        {{$message}} <br>
                                    @endforeach
                            @endif
                            {{Form::text('nickname', '',array('class' => 'form-control input-lg', 'placeholder' => 'Nickname' , 'required' => 'required', 'tabindex' => '2'))}}
                        </div>
                    

        <div class="form-group">
                    @if($errors -> has("email"))
                            @foreach ($errors->get('email') as $message)
                                {{$message}} <br>
                            @endforeach
                    @endif
                    {{Form::text('email', '',array('class' => 'form-control input-lg', 'placeholder' => 'Email' , 'required' => 'required','tabindex' => '4'))}}
                </div>


                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group">
                            @if($errors -> has("password"))
                                @foreach ($errors->get('password') as $message)
                                    {{$message}} <br>
                                @endforeach
                            @endif
                            <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Contraseña" required="required" tabindex="5">
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group">
                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-lg" required="required" placeholder="Confirmar contraseña" tabindex="6">
                        </div>
                    </div>
                    </div> 


                <div class="row">
                    <div class="col-xs-12 col-md-6 btn-wrap"><input type="submit" value="Registrar" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
                    <div class="col-xs-12 col-md-6"><a href="login" class="btn btn-success btn-block btn-lg">Login</a></div>
                </div>
            {{Form::close()}}
        
    </div>

    <body>
</html>    