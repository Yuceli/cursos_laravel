@include('layouts.header')
<div class="container">
	<div class="wrapper">
		<div class="col-md-12 wrap-workshop">

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

			<div class="form-group">
				{{ Form::label('begin_date', 'Fecha de inicio') }}
				{{ Form::text('begin_date', Input::old('begin_date'), array('class' => 'form-control', 'onfocus'=>"(this.type='date')", 'onblur'=>"(this.type='text')", 'required'=>'required')) }}
			</div>

			<div class="form-group">
				{{ Form::label('end_date', 'Fecha de finalización') }}
				{{ Form::text('end_date', Input::old('end_date'), array('class' => 'form-control', 'onfocus'=>"(this.type='date')", 'onblur'=>"(this.type='text')", 'required'=>'required')) }}
			</div>

			{{ Form::submit('Guardar taller', array('class' => 'btn btn-primary')) }}
			{{ Form::close() }}
		</div>
	</div>
</div>
@include('layouts.footer')