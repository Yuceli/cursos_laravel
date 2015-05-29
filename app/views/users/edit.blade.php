@include('layouts.header')

<div class="container">
<div class="wrapper">	
<div class="col-md-12">

		<h1>Editar: {{ $user->name}}</h1>

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
			{{Form::password('password', array('id'=>'password','class'=>'form-control','placeholder'=>'Nueva Contraseña','tabindex'=>'7','required'))}}
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
        
        <div class="form-group">
		{{ Form::submit('Guardar cambios', array('class' => 'btn btn-primary')) }}
		</div>

		{{ Form::close() }}
	</div>
	</div>
	</div>
	

@include('layouts.footer')