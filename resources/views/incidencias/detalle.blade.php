@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Información detallada de la incidencia con id '. $incidencia->id) }}</div>

                <div class="card-body">
                    <h4><strong>Id:</strong> {{$incidencia->id}}</h4>
                    <h4><strong>Id usuario:</strong> {{$incidencia->id_usuario}}</h4>
                    <h4><strong>Aula:</strong> {{$incidencia->aula}}</h4>
                    <h4><strong>Descripción:</strong> {{$incidencia->descripcion}}</h4>
                    <h4><strong>Gravedad:</strong> {{$incidencia->gravedad}}</h4>
                    <h4><strong>Creado en:</strong> {{$incidencia->created_at}}</h4>
                    <h4><strong>Modificado en:</strong> {{$incidencia->updated_at}}</h4>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection