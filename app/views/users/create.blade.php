@include('layouts.header')
<br><br><br><br>
<div class="container">
<div class="col-md-12">
		<h1>Crear nuevo usuario</h1>

		{{ HTML::ul($errors->all()) }}
		{{ Form::open(array('url' => 'user')) }}

		<div class="form-group">
			{{ Form::label('name', 'Nombre')}}
			{{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
		</div>

		<div class="form-group">
			{{ Form::label('nickname', 'Nickname')}}
			{{ Form::text('nickname', Input::old('nickname'), array('class' => 'form-control')) }}
		</div>

		<div class="form-group">
			{{ Form::label('password', 'Password')}}
			{{ Form::password('password', array('class' => 'form-control')) }}
		</div>

		<div class="form-group">
			{{ Form::label('email', 'Email') }}
			{{ Form::email('email', Input::old('email'), array('class' => 'form-control')) }}
		</div>

		<div class="form-group">
			{{ Form::label('level', 'Nivel') }}
			{{ Form::select('level', array('0' => 'Elegir nivel', '1' => 'Bajo', '2' => 'Medio' , '3' =>'Alto'),
			 Input::old('level'), array ('class' => 'form-control')) }}
		</div>

		{{ Form::submit('Guardar', array('class' => 'btn btn-primary')) }}
		{{ Form::close() }}
	</div>
	</div>
	
</body>
</html>