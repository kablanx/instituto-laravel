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
                    <option value="3?page=1">3</option>
                    <option value="5?page=1">5</option>
            </select>

            

        </div>

        <div class="card-body">
            @if(session("status"))
            <div class="alert alert-success">{{session("status")}}</div>
            @endif

            <style>
                td.tde {
                    vertical-align: middle !important;
                }
                a:visited {
                    color: white;
                }
            </style>
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
                    <td class="tde">{{$user->name}}</td>
                    <td class="tde">{{$user->usuario}}</td>
                    <td class="tde">{{$user->email}}</td>
                    <td class="tde">{{$user->rol}}</td>
                    <td class="tde">{{$user->updated_at}}</td>
                    
                    <td>
                        @if(Auth::user()->rol=="administrador")
                        <a class="btn btn-info" href="{{route("user.detalles",["id"=>$user->id])}}">Detalles</a>
                        <a  class="btn btn-success " href="{{route("user.editarUsuario",["id"=>$user->id])}}">  Editar  </a>
                        <a class="btn btn-danger" href="{{route("user.eliminar",["id"=>$user->id])}}" onclick="return confirm('Are you sure?')">Eliminar</a>
                        @endif
                        <a class="btn btn-info" href="{{route("mensajes.crear",["id"=>$user->id])}}">Enviar mensaje</a>
                    </td>
                    
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

