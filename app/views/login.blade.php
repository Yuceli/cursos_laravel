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

  <script src="assets/js/jquery.min.js"></script>
  <script type="text/javascript" src="assets/js/modernizr.custom.js"></script>

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="assets/js/html5shiv.js"></script>
  <script src="assets/js/respond.min.js"></script>
  <![endif]-->
</head>

<body>

  <div class="wrapper">
    {{ Form::open(['url' => 'login', 'autocomplete' => 'off', 'class'=> 'form-signin', 'role' => 'form']) }}

    @if(Session::has('error_message'))
    <div class="alert alert-danger">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      {{ Session::get('error_message') }}
    </div>    
    @endif    
    <h2 class="form-signin-heading">Please login</h2>


    <p>
      {{ Form::text('nickname', 'Nickname', ['class' => 'form-control']) }}
    </p>

    <p>
      {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'password']) }}
    </p>

    <div class="checkbox">
      <label>
        {{ Form::checkbox('remember', true) }} Remember me
      </label>
    </div>

    <p>{{ Form::submit('Login', ['class' => 'btn btn-lg btn-primary btn-block'])  }}</p>
    {{ Form::close() }}
  </div>

  <body>
    </html>    