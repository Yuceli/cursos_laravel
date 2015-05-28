
@include('layouts.header')
<br><br><br><br>
<div class="container">
<div class="col-md-12">
<h1>Todos los usuarios</h1>
<a  href="{{ URL::to('user/create') }}" type="button" class="btn btn-primary">Dar de alta nuevo usuario</a>
        @if (Session::has('message'))
        <div class="alert alert-info">{{Session::get('message')}}</div>
        @endif
        {{ $user->links() }}
        <table class="table table-striped table-bordered">
                <thead>
                        <tr>
                                <td>ID</td>
                                <td>Nombre</td>
                                <td>Nickname</td>
                                <td>Email</td>
                                <td>Nivel</td>
                                <td>Acción</td>
                        </tr>
                </thead>

                <tbody>
                        @foreach($user as $key => $value)
                        <tr>
                                <td>{{ $value->id }}</td>
                                <td>{{ $value->name }}</td>
                                <td>{{ $value->nickname }}</td>
                                <td>{{ $value->email }}</td>
                                <td>{{ $value->level }}</td>

                                <td>
                                        {{ Form::open(array('url' => 'user/' . $value->id, 'class' => 'pull-right')) }}
                                        {{ Form::hidden('_method', 'DELETE') }}
                                        {{ Form::submit('Eliminar usuario', array('class'=> 'btn btn-danger')) }}
                                        {{ Form::close() }}
                                        <a class="btn btn-small btn-success" href="{{ URL::to('user/' .$value->id) }}">Mostrar usuario</a>
                                        <a class="btn btn-small btn-info" href=" {{ URL::to('user/' .$value->id .'/edit') }}">Editar usuario</a>
                                </td>
                        </tr>
                        @endforeach
                </tbody>
        </table>
        {{ $user->links() }}
</div>
</div>

</body>
</html>