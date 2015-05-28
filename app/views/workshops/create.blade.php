@include('layouts.header')
<br><br><br><br>
<div class="container">
<div class="col-md-12">

		<h1>Crear nuevo taller</h1>

		{{ HTML::ul($errors->all()) }}
		{{ Form::open(array('url' => 'workshops')) }}

		<div class="form-group">
			{{ Form::label('title', 'Título')}}
			{{ Form::text('title', Input::old('title'), array('class' => 'form-control')) }}
		</div>

		<div class="form-group">
			{{ Form::label('description', 'Descripción') }}
			{{ Form::text('description', Input::old('description'), array('class' => 'form-control')) }}
		</div>

		<div class="row">
			<div class="col-md-6 form-group">
				{{ Form::label('begin_date', 'Fecha de inicio') }}
				{{ Form::text('begin_date', Input::old('begin_date'), array('class' => 'form-control', 'onfocus'=>"(this.type='date')", 'onblur'=>"(this.type='text')", 'required'=>'required')) }}
			</div>

			<div class="col-md-6 form-group">
				{{ Form::label('end_date', 'Fecha de finalización') }}
				{{ Form::text('end_date', Input::old('end_date'), array('class' => 'form-control', 'onfocus'=>"(this.type='date')", 'onblur'=>"(this.type='text')", 'required'=>'required')) }}
			</div>
		</div>
		{{ Form::submit('Guardar', array('class' => 'btn btn-primary')) }}
		{{ Form::close() }}
	</div>
	</div>
	
</body>
</html>