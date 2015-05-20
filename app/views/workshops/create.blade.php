<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Women Who Code</title>
	<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<nav class="navbar navbar-inverse">
			<div class="navbar-header">
				<a class="navbar-brand" href="{{URL::to('workshop')}}">Talleres</a>
			</div>
			<ul class="nav navbar-nav">
				<li><a href="{{URL::to('workshop') }}">Ver todos los talleres</a></li>
				<li><a href="{{URL::to('workshop/create')}}">Crear nuevo taller</a></li>
			</ul>
		</nav>

		<h1>Crear nuevo taller</h1>

		{{ HTML::ul($errors->all()) }}
		{{ Form::open(array('url' => 'workshop')) }}

		<div class="form-group">
			{{ Form::label('title', 'Título')}}
			{{ Form::text('title', Input::old('title'), array('class' => 'form-control')) }}
		</div>

		<div class="form-group">
			{{ Form::label('description', 'Descripción') }}
			{{ Form::text('description', Input::old('description'), array('class' => 'form-control')) }}
		</div>

		<div class="form-group">
			{{ Form::label('begin_date', 'Fecha de inicio') }}
			{{ Form::text('begin_date', Input::old('begin_date'), array('class' => 'form-control', 'onfocus'=>"(this.type='date')", 'onblur'=>"(this.type='text')", 'required'=>'required')) }}
		</div>

		<div class="form-group">
			{{ Form::label('end_date', 'Fecha de finalización') }}
			{{ Form::text('end_date', Input::old('end_date'), array('class' => 'form-control', 'onfocus'=>"(this.type='date')", 'onblur'=>"(this.type='text')", 'required'=>'required')) }}
		</div>

		{{ Form::submit('Guardar', array('class' => 'btn btn-primary')) }}
		{{ Form::close() }}
	</div>
	
</body>
</html>