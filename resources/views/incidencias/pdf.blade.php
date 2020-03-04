<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDF</title>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                PDF de incidencias
            </div>
            <br><br>
            <div class="card-body ">
                <table class="table table-striped text-center" border="1">
                    <tr>
                        <th>Id</th>
                        <th>Aula</th>
                        <th>Descripción</th>
                        <th>Gravedad</th>
                        <th>Fecha</th>
                    </tr>
                    @foreach ($incidencias as $incidencia)
                    <tr>
                        <td>{{$incidencia->id}}</td>
                        <td>{{$incidencia->aula}}</td>
                        <td>{{$incidencia->descripcion}}</td>
                        <td>{{$incidencia->gravedad}}</td>
                        <td>{{$incidencia->updated_at}}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</body>
</html>