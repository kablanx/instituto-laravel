@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card">
        <div class="card-header">
            Listado de mensajes!
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
                    <th>Id</th>
                    <th>Id remitente</th>
                    <th>Id destinatario</th>
                    <th>Mensaje</th>
                    <th>Fecha</th>
                    @if(Auth::user()->rol=="administrador")
                    <th>Operaciones</th>
                    @endif
                </tr>
                @foreach ($mensajes as $mensaje)
                <tr>
                    <td class="tde">{{$mensaje->id}}</td>
                    <td class="tde">{{$mensaje->id_usuario_e}}</td>
                    <td class="tde">{{$mensaje->id_usuario_r}}</td>
                    <td class="tde">{{$mensaje->texto}}</td>
                    <td class="tde">{{$mensaje->created_at}}</td>
                    @if(Auth::user()->rol=="administrador")
                    <td><a class="btn btn-info" href="{{route("mensajes.detalles",["id"=>$mensaje->id])}}">Detalles</a><a class="btn btn-danger" href="{{route("mensajes.eliminar",["id"=>$mensaje->id])}}" onclick="return confirm('Are you sure?')">Eliminar</a></td>
                    @endif
                </tr>
                @endforeach
            </table>
            {{$mensajes->links()}}
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

