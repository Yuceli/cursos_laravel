@include('layouts.header')
<br><br><br><br>
<div class="container">
<div class="col-md-12">

  		 <h1>Ver usuario: {{$user->name}}</h1>
  		 <div class="jumbotron text-center">
  		 	<h2>{{ $user->name}}</h2>
  		 	<p>
          <strong>Nickname:</strong>{{ $user->nickname}}<br>
  		 		<strong>Email:</strong>{{ $user->email}}<br>
  		 		<strong>Level:</strong>{{ $user->level}}
  		 	</p>
  		 </div>
  </div>
</div>
	
</body>
</html>