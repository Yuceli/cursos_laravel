@include('layouts.header')
<br><br><br><br>
<div class="container">
<div class="col-md-12">

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
	</div>
	
</body>
</html>