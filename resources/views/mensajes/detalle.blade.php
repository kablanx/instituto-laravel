@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Información detallada de la incidencia con id '. $mensaje->id) }}</div>

                <div class="card-body">
                    <h4><strong>Id:</strong> {{$mensaje->id}}</h4>
                    <h4><strong>Id remitente:</strong> {{$mensaje->id_usuario_e}}</h4>
                    <h4><strong>Id destinatario:</strong> {{$mensaje->id_usuario_r}}</h4>
                    <h4><strong>Mensaje:</strong> {{$mensaje->texto}}</h4>
                    <h4><strong>Fecha:</strong> {{$mensaje->updated_at}}</h4>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection