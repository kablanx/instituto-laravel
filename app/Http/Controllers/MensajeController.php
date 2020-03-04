<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mensaje;
use Illuminate\Support\Facades\DB;

class MensajeController extends Controller
{
    //
    public function listado($regsxpag){

        /* $users= DB::select('select * from users')->paginate(1);; */
        $mensajes=Mensaje::paginate($regsxpag);
        /* var_dump($users);
        die(); */
        return view("mensajes.listado", ['mensajes'=>$mensajes]);
    }
    public function detalle($id){
        $mensaje=array_first(DB::select("select * from mensajes where id=:id", ["id"=>$id] ));
        return view("mensajes.detalle", ["mensaje"=>$mensaje]);
    }
    public function crear($id){
        return view('mensajes.crear', ["id_usuario_r"=>$id]);
    }
    public function save(Request $request){
        /* var_dump($request);
        die(); */

        $mensaje=new Mensaje();

        $validate = $this->validate($request, [
            'mensaje' => 'required|max:255',
        ]);

        $id_usuario_r=$request->input('id_usuario_r');
        $texto = $request->input('mensaje');
        $fecha = new \DateTime();
        $fecha->format('d-m-Y H:i:s');
        
        
        
        $mensaje->id_usuario_e=\Auth::user()->id;
        $mensaje->id_usuario_r=$id_usuario_r;
        $mensaje->texto=$texto;
        
        /* var_dump($incidencia);
        die();
        */
        $true=$mensaje->save();
        if($true){
            DB::table('logs')->insert(array('id_usuario'=>\Auth::user()->id,
            'descripcion'=>'Ha enviado un mensaje',
            'created_at' =>date('Y-m-d H:i:s') )
            );
        }
        return redirect()->route("user.listado")
        ->with(["message"=>"Mensaje enviado correctamente!"]);
    }

    public function eliminar($id){
        $true=DB::delete("delete from mensajes where id=:id", ["id"=>$id]);
        if($true){
            DB::table('logs')->insert(array('id_usuario'=>\Auth::user()->id,
            'descripcion'=>'Ha eliminado un mensaje',
            'created_at' =>date('Y-m-d H:i:s') )
            );
        }
        \Session::flash("status", "Mensaje borrado correctamente!");
        return redirect()->action("MensajeController@listado", ["regsxpag" => 2]);
    }

    public function imprimirPDF(){
        $mensajes = Mensaje::all();
        $pdf = \PDF::loadView('mensajes.pdf', ['mensajes' => $mensajes])->setPaper("a4", "portrait");
        return $pdf->stream('mensajes.pdf');
    }

    public function bandeja($id){
        $mensajes = Mensaje::all();
        return view("mensajes.bandeja", ["mensajes"=>$mensajes], ["id"=>$id]);
    }
}
