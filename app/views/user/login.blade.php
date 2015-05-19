<!DOCTYPE html>
<html>
<head>
	<title>Iniciar sesión</title>
	<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading">Inicio de sesión</div>
					<div class="panel-body">
						<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">
							<input type="hidden" name="_token" value="{{ csrf_token() }}">

							<div class="form-group">
							<label class="col-md-4 control-label">Correo electŕónico</label>
								<div class="col-md-6">
									<input type="email" class="form-control" name="email">
								</div>
							</div>

							<div class="form-group">
								<label class="col-md-4 control-label">Contraseña</label>
								<div class="col-md-6">
									<input type="password" class="form-control" name="password">
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-6 col-md-offset-4">
									<button type="submit" class="btn btn-primary">Login</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>