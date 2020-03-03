@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card">
        <div class="card-header">
            Listado de acciones!
            <select id="regsxpag"class="browser-default custom-select" onchange="window.location" name="regsxpag">
                    <option value="5?page=1">5</option>    
                    <option value="7" selected>Paginación por defecto 7</option>
                    {{-- <option value="2" onchange="header('Location: practica-laravel.devel/user/listado/1?page=1');" selected>2</option> --}}
                    <option value="10?page=1">10</option>
                    <option value="25?page=1">25</option>
            </select>
        </div>
        <div class="card-body">
            <table class="table table-striped text-center">
                <tr>
                    <th>Id</th>
                    <th>Id_usuario</th>
                    <th>Descripción</th>
                    <th>Created_at</th>
                </tr>
                @foreach ($logs as $log)
                <tr>
                    <td>{{$log->id}}</td>
                    <td>{{$log->id_usuario}}</td>
                    <td>{{$log->descripcion}}</td>
                    <td>{{$log->created_at}}</td>
                </tr>
                @endforeach
            </table>
            {{$logs->links()}}
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

