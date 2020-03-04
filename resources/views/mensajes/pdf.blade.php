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
                PDF de mensajes
            </div>
            <br><br>
            <div class="card-body ">
                <table class="table table-striped text-center" border="1">
                    <tr>
                        <th>Id</th>
                        <th>Id remitente</th>
                        <th>Id destinatario</th>
                        <th>Mensaje</th>
                        <th>Created_at</th>
                    </tr>
                    @foreach ($mensajes as $mensaje)
                    <tr>
                        <td>{{$mensaje->id}}</td>
                        <td>{{$mensaje->id_usuario_e}}</td>
                        <td>{{$mensaje->id_usuario_r}}</td>
                        <td>{{$mensaje->texto}}</td>
                        <td>{{$mensaje->created_at}}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</body>
</html>