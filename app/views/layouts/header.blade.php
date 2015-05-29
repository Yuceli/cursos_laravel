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
  <link href="{{ URL::asset('assets/css/bootstrap.css') }}" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{ URL::asset('assets/css/main.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('assets/css/login.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ URL::asset('assets/css/icomoon.css') }}">
  <link href="{{ URL::asset('assets/css/animate-custom.css') }}" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>

  <script src="{{ URL::asset('assets/js/jquery.min.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('assets/js/modernizr.custom.js')}}"></script>

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="assets/js/html5shiv.js"></script>
<script src="assets/js/respond.min.js"></script>
<![endif]-->
</head>

<body>

  <div id="navbar-main">
    <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon icon-shield" style="font-size:30px; color:#3498db;"></span>
          </button>
          <a class="navbar-brand hidden-xs hidden-sm" href="/home"><span class="icon icon-shield" style="font-size:18px; color:#3498db;"></span></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            @if(Auth::user()->role == 'admin')
            <li class="active"><a>Panel de administración</a></li>
            <li> <a href="{{ URL::to('user') }}" class="smoothScroll"> Usuarios</a></li>
            @endif
            <li> <a href="{{ URL::to('workshops') }}" class="smoothScroll"> Talleres</a></li>
          </ul>

          <ul class="nav navbar-nav pull-right">
            <li><a href="" class="smoothScroll"> Hola:</a></li>
            <li><a href="{{ action('LoginController@doLogout') }}" class="smoothScroll"> Cerrar sesión</a></li>
          </ul> 
        </div><!--/.nav-collapse -->
      </div>
    </div>
  </div>