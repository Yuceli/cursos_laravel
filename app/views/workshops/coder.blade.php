@include('welcome.layouts.header')
<br>
<br>
<br>
<br>
<!-- 
$subscribed
	$course
		title
		description
$unsuscribed
	$course
		title
		description
-->
<div class="container main-container">

	<div role="tabpanel">

		<!-- Nav tabs -->
		<ul class="nav nav-tabs" role="tablist">
			<li role="presentation" class="active"><a href="#panel-1" aria-controls="panel-1" role="tab" data-toggle="tab">Cursos a los que estoy inscrita</a></li>
			<li role="presentation"><a href="#panel-2" aria-controls="panel-2" role="tab" data-toggle="tab">Cursos a los que no estoy inscrita</a></li>
		</ul>

		<!-- Tab panes -->
		<div class="tab-content">

			<div role="tabpanel" class="tab-pane active" id="panel-1">
				<div class="row masonry-container">
					@if(sizeof($subscribed) == 0 )
					<div class="item">
						<h1>No estas inscrita a ningún curso</h1>
					</div>
					@else
						@foreach($subscribed as $course)
						<div class="col-md-4 col-sm-6 item">
							<div class="thumbnail">
								<div class="caption">
									<h3>{{ $course->title }}</h3>
									<p>{{ $course->description }}</p>
									<p><a href="{{ url('quit',$course->id) }}" class="btn btn-warning" role="button">Salir</a></p>
								</div>
							</div>
						</div><!--/.item  -->
						@endforeach
					@endif
				</div> <!--/.masonry-container  -->
			</div><!--/.tab-panel -->

			<div role="tabpanel" class="tab-pane" id="panel-2">

				<div class="row masonry-container">
					@foreach($unsuscribed as $course)
					<div class="col-md-4 col-sm-6 item">
						<div class="thumbnail">
							<div class="caption">
								<h3>{{ $course->title }}</h3>
								<p>{{ $course->description }}</p>
								<p><a href="{{ url('sign',$course->id) }}" class="btn btn-success" role="button">Inscribirme</a></p>
							</div>
						</div>
					</div><!--/.item  -->
					@endforeach
				</div> <!--/.masonry-container  -->

			</div><!--/.tab-panel -->
		</div> <!--/.tab-content -->

	</div> <!--/.tab-panel  -->

</div><!-- /.container -->
@include('layouts.footer')
