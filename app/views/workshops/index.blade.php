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
				<a class="navbar-brand" href="{{URL::to('workshop')}} ">Talleres</a>
			</div>

			<ul class="nav navbar-nav">
				<li><a href="{{ URL::to('workshop') }}">Ver todos los talleres</a></li>
				<li><a href="{{ URL::to('workshop/create') }}">Crear nuevo taller</a>
                                <li><a href="{{ action('UserController@doLogout') }}">Cerrar sesión</a>
			</ul>
		</nav>

		<h1>Talleres disponibles al público</h1>
        @if (Session::has('message'))
        <div class="alert alert-info">{{Session::get('message')}}</div>
        @endif

        <table class="table table-striped table-bordered">
        	<thead>
        		<tr>
        			<td>ID</td>
        			<td>Título</td>
        			<td>Descripción</td>
        			<td>Fecha de inicio</td>
        			<td>Fecha de término</td>
                                <td>Opciones</td>
        		</tr>
        	</thead>

        	<tbody>
        		@foreach($workshops as $key => $value)
        		<tr>
        			<td>{{ $value->id }}</td>
        			<td>{{ $value->title }}</td>
        			<td>{{ $value->description }}</td>
        			<td>{{ $value->begin_date }}</td>
                                <td>{{ $value->end_date }}</td>

        			<td>
                                        {{ Form::open(array('url' => 'workshop/' . $value->id, 'class' => 'pull-right')) }}
                                        {{ Form::hidden('_method', 'DELETE') }}
                                        {{ Form::submit('Eliminar taller', array('class'=> 'btn btn-warning')) }}
                                        {{ Form::close() }}
        				<a class="btn btn-small btn-success" href="{{ URL::to('workshop/' .$value->id) }}">Mostrar detalles</a>
        				<a class="btn btn-small btn-info" href=" {{ URL::to('workshop/' .$value->id .'/edit') }}">Editar taller</a>
        			</td>
        		</tr>
        		@endforeach
        	</tbody>
        </table>
	</div>
	
</body>
</html>