<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use App\User;


class UserController extends Controller
{
    // 
    public function editarUsuarioPropio(){
        return view("user.editarUsuarioPropio");
    }

    public function editarUsuario($id){
        $user=array_first(DB::select("select * from users where id=:id", ["id"=>$id] ));
        return view("user.editarUsuario", ["user"=>$user]);
    }

    public function detalle($id){
        $user=array_first(DB::select("select * from users where id=:id", ["id"=>$id] ));
        return view("user.detalle", ["user"=>$user]);
    }

    public function updateUsuario(Request $request){

        $id=$request->input("id_usuario");

        /* var_dump($id);
        die(); */

        $validate=$this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            // Aplicando la siguiente regla lo que conseguimos es permitir mantener los mismos valores en dichos campos
            'email' => /* "required|string|max:255|unique:users,email,".$id, */['required', 'string', 'email', 'max:255', 'unique:users,email,'.$id],
            "usuario"=>["required", "string", "min:8", "max:12", 'unique:users,usuario,'.$id ],
            'password' => ['required', 'string', 'min:6', 'confirmed']
        ]);

       
        $name=$request->input("name");
        $usuario=$request->input("usuario");
        $email=$request->input("email");
        $password=$request->input("password");
        $rol=$request->input("rol");
        $fecha = new \DateTime();
        $fecha->format('d-m-Y H:i:s');

        DB::update("Update users SET name=:name, usuario=:usuario, email=:email, password=:password, updated_at=:fecha, rol=:rol WHERE id=:id",[
            "id"=>$id,
            "name"=>$name,
            "usuario"=>$usuario,
            "email"=>$email,
            "password"=>$password,
            "fecha"=>$fecha,
            "rol"=>$rol,
        ]);
        \Session::flash("status", "Usuario editado correctamente!!");
        return redirect()->action("UserController@listado");
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
        $image_path=$request->file('image_path');

        /* var_dump($name);
        var_dump($usuario);
        var_dump($email);
        var_dump($password);
        var_dump($image_path);
        die(); */
        // 3.- Se asigna nuevos valores al objeto Usuario
        $user->name=$name;
        $user->usuario=$usuario;
        $user->email=$email;
        $user->password=bcrypt($password);

        // Asignamos la imagen
        if($image_path){
            $image_path_name=time().$image_path->getClientOriginalName();

            Storage::disk("users")->put($image_path_name,File::get($image_path));
            $user->imagen=$image_path_name;
        }

        // 4.- Se ejecuta la consulta en la BD
        $user->update();

        return redirect()->route("editarUsuarioPropio")
        ->with(["message"=>"Usuario actualizado correctamente!"]);
    }
    
    public function getImage($filename){
        $file=Storage::disk("users")->get($filename);
        return new Response($file,200);
    }

    public function listado(){

        /* $users= DB::select('select * from users')->paginate(1);; */
        $users=User::paginate(2);
        /* var_dump($users);
        die(); */
        return view("user.listado", ['users'=>$users]);
    }

    public function eliminar($id){
        $user=DB::delete("delete from users where id=:id", ["id"=>$id]);
        \Session::flash("status", "Usuario borrado correctamente!");
        return redirect()->action("UsuarioController@listado");
    }
    
}
