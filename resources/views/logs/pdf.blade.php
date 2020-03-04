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
               Log's PDF
            </div>
            <br><br>
            <div class="card-body ">
                <table class="table table-striped text-center" border="1">
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
            </div>
        </div>
    </div>
</body>
</html>