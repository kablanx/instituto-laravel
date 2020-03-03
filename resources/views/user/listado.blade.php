@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card">
        <div class="card-header">
            Listado de usuarios!
            <select id="regsxpag"class="browser-default custom-select" onchange="window.location" name="regsxpag">
                    <option value="1?page=1">1</option>    
                    <option value="" selected>Paginación por defecto 2</option>
                    {{-- <option value="2" onchange="header('Location: practica-laravel.devel/user/listado/1?page=1');" selected>2</option> --}}
                    <option value="2?page=1">3</option>
                    <option value="3?page=1">5</option>
            </select>

            

        </div>

        <div class="card-body">
            @if(session("status"))
            <div class="alert alert-success">{{session("status")}}</div>
            @endif
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
                    <td><a href="{{route("user.detalles",["id"=>$user->id])}}">Detalles</a> <a href="{{route("user.editarUsuario",["id"=>$user->id])}}">Editar</a> <a href="{{route("user.eliminar",["id"=>$user->id])}}" onclick="return confirm('Are you sure?')">Eliminar</a></td>
                    @endif
                </tr>
                @endforeach
            </table>
            {{$users->links()}}
        </div>
    </div>
</div>
<script>
    $(function(){
      // bind change event to select
      $('#regsxpag').on('change', function () {
          var url = $(this).val(); // get selected value
          if (url) { // require a URL
              window.location = url // redirect
          }
          return false;
      });
    });
</script>

@endsection

