@include('layouts.header')

<br><br><br><br>
<div class="container">
<div class="col-md-12">        
<h1>Talleres disponibles al público</h1>
<a  href="{{ URL::to('workshop/create') }}" type="button" class="btn btn-primary">Crear nuevo taller</a>
        @if (Session::has('message'))
        <div class="alert alert-info">{{Session::get('message')}}</div>
        @endif
        <br>
        <table class="table table-striped table-bordered">
                <thead>
                        <tr>
                                <td>ID</td>
                                <td>Título</td>
                                <td>Descripción</td>
                                <td>Fecha de inicio</td>
                                <td>Fecha de término</td>
                                <td>Opciones</td>
                        </tr>
                </thead>

                <tbody>
                        @foreach($workshops as $key => $value)
                        <tr>
                                <td>{{ $value->id }}</td>
                                <td>{{ $value->title }}</td>
                                <td>{{ $value->description }}</td>
                                <td>{{ $value->begin_date }}</td>
                                <td>{{ $value->end_date }}</td>

                                <td>
                                        {{ Form::open(array('url' => 'workshop/' . $value->id, 'class' => 'pull-right')) }}
                                        {{ Form::hidden('_method', 'DELETE') }}
                                        {{ Form::submit('Eliminar taller', array('class'=> 'btn btn-danger')) }}
                                        {{ Form::close() }}
                                        <a class="btn btn-small btn-success" href="{{ URL::to('workshop/' .$value->id) }}">Mostrar detalles</a>
                                        <a class="btn btn-small btn-info" href=" {{ URL::to('workshop/' .$value->id .'/edit') }}">Editar taller</a>
                                </td>
                        </tr>
                        @endforeach
                </tbody>
        </table>
</div>
</div>

</body>
</html>