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
                PDF de usuarios
            </div>
            <br><br>
            <div class="card-body ">
                <table class="table table-striped text-center" border="1">
                    <tr>
                        <th>Nombre</th>
                        <th>Usuario</th>
                        <th>Email</th>
                        <th>rol</th>
                        <th>Fecha de creación</th>
                        <th>Fecha modificación</th>
                    </tr>
                    @foreach ($users as $user)
                    <tr>
                        <td>{{$user->name}}</td>
                        <td>{{$user->usuario}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->rol}}</td>
                        <td>{{$user->created_at}}</td>
                        <td>{{$user->updated_at}}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</body>
</html>