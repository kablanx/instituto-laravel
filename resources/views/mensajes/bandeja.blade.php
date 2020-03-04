@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Mensajes enviados') }}</div>

                <div class="card-body">
                    <table class="table table-striped text-center">
                        <tr>
                            <th>Id</th>
                            <th>Id remitente</th>
                            <th>Id destinatario</th>
                            <th>Mensaje</th>
                            <th>Fecha</th>
                            <th>Operaciones</th>
                        </tr>
                        @foreach ($mensajes as $mensaje)
                        @if($mensaje->id_usuario_e==Auth::user()->id)
                            <tr>
                                <td class="tde">{{$mensaje->id}}</td>
                                <td class="tde">{{$mensaje->id_usuario_e}}</td>
                                <td class="tde">{{$mensaje->id_usuario_r}}</td>
                                <td class="tde">{{$mensaje->texto}}</td>
                                <td class="tde">{{$mensaje->created_at}}</td>
                                <td><a class="btn btn-danger" href="{{route("mensajes.eliminar",["id"=>$mensaje->id])}}" onclick="return confirm('Are you sure?')">Eliminar</a></td>
                            </tr>
                        @endif
                        @endforeach
                    </table>
                </div>
            </div>
            <div class="card">
                <div class="card-header">{{ __('Mensajes recibidos') }}</div>

                <div class="card-body">
                    <table class="table table-striped text-center">
                        <tr>
                            <th>Id</th>
                            <th>Id remitente</th>
                            <th>Id destinatario</th>
                            <th>Mensaje</th>
                            <th>Fecha</th>
                        </tr>
                        @foreach ($mensajes as $mensaje)
                        @if($mensaje->id_usuario_r==Auth::user()->id)
                        <tr>
                            <td class="tde">{{$mensaje->id}}</td>
                            <td class="tde">{{$mensaje->id_usuario_e}}</td>
                            <td class="tde">{{$mensaje->id_usuario_r}}</td>
                            <td class="tde">{{$mensaje->texto}}</td>
                            <td class="tde">{{$mensaje->created_at}}</td>
                        </tr>
                        @endif
                        @endforeach
                    </table>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection