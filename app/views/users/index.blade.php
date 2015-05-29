
@include('layouts.header')

<div class="container">
        <div class="wrapper">
                <div class="row">
                        <div class="col-md-4"><h1>Lista de usuarios</h1></div>       
                        <div class="col-md-2 wrapper-user"><a href="{{ URL::to('user/create') }}" type="button" class="btn btn-primary">Dar de alta nuevo usuario</a></div></div>
                        <div class="row">
                                <div class="col-xs-4 col-sm-6 col-md-12">  
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
                </div>
        </div>

@include('layouts.footer')