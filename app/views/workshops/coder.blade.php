@include('layouts.header')
<br>
<br>
<br>
<br>
<div class="container">
	<div class="row">
		<div class="col-md-5 well">
			<h3>Cursos a los que estoy inscrita</h3>
			<div class="row">
				@foreach($subscribed as $course)
				<div class="col-md-4">
					<div class="thumbnail">
						<div class="caption">
							<h3>{{ $course->title }}</h3>
							<p>{{ $course->description }}</p>
							<p><a href="{{ url('quit',$course->id) }}" class="btn btn-warning" role="button">Salir</a> </p>
						</div>
					</div>
					<br>
				</div>
				@endforeach
			</div>
		</div>
		<div class="col-md-5 col-md-offset-2 well">
			<h3>Cursos a los que no estoy inscrita</h3>
			<div class="row">
				@foreach($unsuscribed as $course)
				<div class="col-md-4">
					<div class="thumbnail">
						<div class="caption">
							<h3>{{ $course->title }}</h3>
							<p>{{ $course->description }}</p>
							<p><a href="{{ url('sign',$course->id) }}" class="btn btn-info" role="button">Inscribirse</a> </p>
						</div>
					</div>
					<br>
				</div>
				@endforeach
			</div>
		</div>
	</div>
</div>