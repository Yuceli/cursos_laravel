@include('layouts.header')
<div class="container">
  <div class="wrapper"></div>
  <div class="col-md-12 wrap-workshop">
    <h1>Ver detalles del taller: {{$workshop->title}}</h1>
    <div class="jumbotron text-center">
      <h2>{{ $workshop->name}}</h2>
      <p>
        <strong>Descripción:</strong>{{ $workshop->description}}<br>
        <strong>Fecha de inicio:</strong>{{ $workshop->begin_date}}<br>
        <strong>Fecha de finalización:</strong>{{ $workshop->end_date}}<br>
      </p>
    </div>
  </div>
</div>
</div>
@include('layouts.footer')