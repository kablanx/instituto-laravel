<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // 
    public function editarUsuarioPropio(){
        return view("user.editarUsuarioPropio");
    }

    public function cambiarAvatar(){
        return view("user.cambiarAvatar");
    }
    
    public function update(Request $request){
        $user=\Auth::user();
        $id=$user->id;

        // 1.- Validación del formulario
        $validate=$this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            // Aplicando la siguiente regla lo que conseguimos es permitir mantener los mismos valores en dichos campos
            'email' => /* "required|string|max:255|unique:users,email,".$id, */['required', 'string', 'email', 'max:255', 'unique:users,email,'.$id],
            "usuario"=>["required", "string", "min:8", "max:12", 'unique:users,usuario,'.$id ],
            'password' => ['required', 'string', 'min:6', 'confirmed']
        ]);

        // 2.- Recogida de datos del formulario
        $name=$request->input("name");
        $usuario=$request->input("usuario");
        $email=$request->input("email");
        $password=$request->input("password");

        var_dump($name);
        var_dump($usuario);
        var_dump($email);
        var_dump($password);
        // 3.- Se asigna nuevos valores al objeto Usuario
        $user->name=$name;
        $user->usuario=$usuario;
        $user->email=$email;
        $user->password=bcrypt($password);

        // 4.- Se ejecuta la consulta en la BD
        $user->update();

        return redirect()->route("editarUsuarioPropio")
        ->with(["message"=>"Usuario actualizado correctamente!"]);
    }
    
}
