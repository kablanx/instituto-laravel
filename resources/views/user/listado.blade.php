@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card">
        <div class="card-header">Listado de usuarios!</div>

        <div class="card-body">
            <table class="table table-striped text-center">
                <tr>
                    <th>Nombre</th>
                    <th>Usuario</th>
                    <th>Email</th>
                    <th>rol</th>
                    <th>Fecha modificación</th>
                    @if(Auth::user()->rol=="administrador")
                    <th>Operaciones</th>
                    @endif
                </tr>
                @foreach ($users as $user)
                <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->usuario}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->rol}}</td>
                    <td>{{$user->updated_at}}</td>
                    @if(Auth::user()->rol=="administrador")
                    <td><a href="">Detalles</a> <a href="">Editar</a> <a href="">Eliminar</a></td>
                    @endif
                </tr>
                @endforeach
            </table>
            {{$users->links()}}
        </div>
    </div>
</div>
</div>
</div>


@endsection

