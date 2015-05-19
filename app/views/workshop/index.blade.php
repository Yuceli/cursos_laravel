	<!DOCTYPE html>
	<html>
	<head>
		<title>Talleres</title>
		<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
	</head>
	<body>
		<div class="container">
			<h1 class="text-center">Todos nuestros cursos</h1>
			<div class="row">
				<div class="col-md-5 well">
					<h3>Cursos a los que estoy inscrita</h3>
					@foreach($subscribed as $workshop)
						<div class="thumbnail">
							<div class="caption">
								<h3>{{ $workshop->title }}</h3>
								<p>{{ $workshop->description }}</p>
								<p><a href="{{ url('/workshops/quit',$workshop->id) }}" class="btn btn-warning" role="button">Salir del curso</a> </p>
							</div>
						</div>
						<br>
					@endforeach
				</div>
				<div class="col-md-5 col-md-offset-2 well">
					<h3>Cursos a los que no estoy inscrita</h3>
					@foreach($unsuscribed as $workshop)
						<div class="thumbnail">
							<div class="caption">
								<h3>{{ $workshop->title }}</h3>
								<p>{{ $workshop->description }}</p>
								<p><a href="{{ url('/workshops/sign',$workshop->id) }}" class="btn btn-info" role="button">Inscribirse</a> </p>
							</div>
						</div>
						<br>
					@endforeach
				</div>
			</div>
		</div>
	</body>

	</html>