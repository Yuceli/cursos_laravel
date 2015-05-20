<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CRUD YUCELI</title>
	<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
  	<nav class="navbar navbar-inverse">
  		<div class="navbar-header">
  			<a class="navbar-brand" href="{{URL::to('workshop')}}">Talleres</a>
  		</div>

  		 <ul class="nav navbar-nav">
  		 	<li><a href="{{ URL::to('workshop') }}">Ver todos los talleres</a></li>
  		 	<li><a href="{{ URL::to('workshop/create') }}">Crear nuevo taller</a></li>
  		 </ul>
  		 </nav>

  		 <h1>Ver {{$workshop->title}}</h1>
  		 <div class="jumbotron text-center">
  		 	<h2>{{ $workshop->name}}</h2>
  		 	<p>
  		 		<strong>Descripción:</strong>{{ $workshop->description}}<br>
  		 		<strong>Fecha de inicio:</strong>{{ $workshop->begin_date}}<br>
          <strong>Fecha de finalización:</strong>{{ $workshop->end_date}}<br>
  		 	</p>
  		 </div>
  </div>
	
</body>
</html>