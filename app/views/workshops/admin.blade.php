@include('layouts.header')
<div class="container">
	<div class="wrapper">
	<div class="row">
	<div class="col-md-4"><h1 class="text-center">Lista de talleres</h1></div>	
	<div class="col-md-2 wrapper-user">
    <a href="{{ URL::to('workshops/create') }}" type="button" class="btn btn-primary">Crear nuevo taller</a>
</div>
    </div>
	<div class="row">
		@foreach($courses as $course)
		<div class="col-md-6">
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
</div>
@include('layouts.footer')