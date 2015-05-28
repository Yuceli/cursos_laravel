@include('layouts.header')
<br><br><br><br>
<div class="container">
<div class="col-md-12">

		<h1>Editar {{ $user->name}}</h1>

		{{ HTML::ul($errors->all()) }}
		{{ Form::model($user, array('route' => array('user.update', $user->id), 'method' => 'PUT')) }}

		<div class="form-group">
			{{ Form::label('name', 'Nombre')}}
		    {{ Form::text('name', null, array('class' => 'form-control')) }}
		</div>

		<div class="form-group">
			{{ Form::label('nickname', 'Nickname')}}
		    {{ Form::text('nickname', null, array('class' => 'form-control')) }}
		</div>

		<div class="form-group">
			{{ Form::label('password', 'Password')}}
			{{ Form::password('password', Input::old('password'), array('class' => 'form-control')) }}
		</div>

		<div class="form-group">
			{{ Form::label('email', 'Email')}}
			{{ Form::text('email', null, array('class' => 'form-control')) }}
		</div>

		<div class="form-group">
			{{ Form::label('level', 'Nivel')}}
			{{ Form::select('level', array('0' => "Selecciona nivel", '1' => 'Bajo', '2' => 'Medio', '3' => 'Alto'),
			  null, array('class' => 'form-control')) }}
		</div>

		<div class="form-group">
			{{ Form::label('role', 'Rol') }}
			{{ Form::select('role', array('0' => 'Elegir rol', 'admin' => 'Administrador', 'coder' => 'Programadora'),
			 null, array ('class' => 'form-control')) }}
		</div>

		{{ Form::submit('Cambios guardados con exito', array('class' => 'btn btn-primary')) }}

		{{ Form::close() }}
	</div>
	</div>
	
</body>
</html>