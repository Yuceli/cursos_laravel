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
				<a class="navbar-brand" href="{{URL::to('workshop')}}"> Workshop</a>
			</div>

			<ul class="nav navbar-nav">
				<li><a href="{{ URL::to('workshop') }}">Ver todos los talleres</a></li>
				<li><a href="{{ URL::to('workshop/create')}}">Crear nuevo taller</a></li>
			</ul>
		</nav>

		<h1>Editar {{ $workshop->name}}</h1>

		{{ HTML::ul($errors->all()) }}
		{{ Form::model($workshop, array('route' => array('workshop.update', $workshop->id), 'method' => 'PUT')) }}

		<div class="form-group">
			{{ Form::label('title', 'Título')}}
		    {{ Form::text('title', null, array('class' => 'form-control')) }}
		</div>

		<div class="form-group">
			{{ Form::label('description', 'Descripción')}}
			{{ Form::text('description', null, array('class' => 'form-control')) }}
		</div>

		<div class="form-group">
			{{ Form::label('begin_date', 'Fecha de inicio')}}
			{{ Form::text('begin_date', null, array('class' => 'form-control')) }}
		</div>

		<div class="form-group">
			{{ Form::label('end_date', 'Fecha de finalización')}}
			{{ Form::text('end_date', null, array('class' => 'form-control')) }}
		</div>


		{{ Form::submit('Cambios guardados con exito', array('class' => 'btn btn-primary')) }}

		{{ Form::close() }}
	</div>
	
</body>
</html>