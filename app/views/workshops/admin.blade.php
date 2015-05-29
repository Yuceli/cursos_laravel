@include('layouts.header')
<br>
<br>
<br>
<br>
<div class="container">
	<h1 class="text-center">Lista de talleres</h1>
    <a  href="{{ URL::to('workshops/create') }}" type="button" class="btn btn-primary">Crear nuevo taller</a>
    <br><br>
	<div class="row">
		@foreach($courses as $course)
		<div class="col-md-4">
			<div class="thumbnail">
				<div class="caption">
					<h3>{{ $course->title }}</h3>
					<p>{{ $course->description }}</p>
			        {{ Form::open(array('url' => 'workshops/' . $course->id, 'class' => 'pull-right')) }}
	                {{ Form::hidden('_method', 'DELETE') }}
	                {{ Form::submit('Eliminar taller', array('class'=> 'btn btn-danger')) }}
	                {{ Form::close() }}
	                <a class="btn btn-small btn-success" href="{{ URL::to('workshops/' .$course->id) }}">Mostrar detalles</a>
	                <a class="btn btn-small btn-info" href=" {{ URL::to('workshops/' .$course->id .'/edit') }}">Editar taller</a>
                </div>
			</div>
		</div>
		@endforeach
	</div>
	{{ $courses->links() }}
</div>