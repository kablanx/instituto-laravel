<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Incidencia;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;

class IncidenciaController extends Controller
{
    //
    public function __contructe(){ // Solo pueden los usuarios identificados.
        $this->middleware('auth');
    }

    public function crear(){
        return view('incidencias.crear');
    }

    public function save(Request $request){
        /* var_dump($request);
        die(); */

        $incidencia=new Incidencia();

        $validate = $this->validate($request, [
            'descripcion' => 'required|max:255',
            'aula' => 'required|max:3',
        ]);

        $aula = $request->input('aula');
        $descripcion = $request->input('descripcion');
        $importancia = $request->input('importancia');
        $id_usuario=\Auth::user();
        $id_usuario=$id_usuario->id;
        

        $incidencia->id_usuario=$id_usuario;
        $incidencia->aula=$aula;
        $incidencia->descripcion=$descripcion;
        $incidencia->gravedad=$importancia;
        
        /* var_dump($incidencia);
        die();
        */
        $true=$incidencia->save();
        if($true){
            DB::table('logs')->insert(array('id_usuario'=>\Auth::user()->id,
            'descripcion'=>'Ha creado una incidencia',
            'created_at' =>date('Y-m-d H:i:s') )
            );
        }
        return redirect()->route("incidencias.crear")
        ->with(["message"=>"Incidencia enviada correctamente!"]);
    }

    public function listado($regsxpag){

        /* $users= DB::select('select * from users')->paginate(1);; */
        $incidencias=Incidencia::paginate($regsxpag);
        /* var_dump($users);
        die(); */
        return view("incidencias.listado", ['incidencias'=>$incidencias]);
    }

    public function detalle($id){
        $incidencia=array_first(DB::select("select * from incidencias where id=:id", ["id"=>$id] ));
        return view("incidencias.detalle", ["incidencia"=>$incidencia]);
    }
    public function editarIncidencia($id){
        
        $incidencia=array_first(DB::select("select * from incidencias where id=:id", ["id"=>$id] ));
        /* var_dump($incidencia);
        die(); */
        return view("incidencias.editarIncidencia", ["incidencia"=>$incidencia]);
    }

    public function eliminar($id){
        $true=DB::delete("delete from incidencias where id=:id", ["id"=>$id]);
        if($true){
            DB::table('logs')->insert(array('id_usuario'=>\Auth::user()->id,
            'descripcion'=>'Ha eliminado una incidencia',
            'created_at' =>date('Y-m-d H:i:s') )
            );
        }
        \Session::flash("status", "Incidencia borrada correctamente!");
        return redirect()->action("IncidenciaController@listado", ["regsxpag" => 2]);
    }
    
    public function updateIncidencia(Request $request){

        $id=$request->input("id_incidencia");
        /* var_dump($id);
        die(); */
        
        $validate = $this->validate($request, [
            'descripcion' => 'required|max:255',
            'aula' => 'required|max:3',
        ]);
        
        $aula=$request->input("aula");
        $descripcion=$request->input("descripcion");
        $gravedad=$request->input("importancia");
        $fecha = new \DateTime();
        $fecha->format('d-m-Y H:i:s');

        
        $true=DB::update("Update incidencias SET aula=:aula, descripcion=:descripcion, gravedad=:gravedad, updated_at=:fecha WHERE id=:id",[
            "id"=>$id,
            "aula"=>$aula,
            "descripcion"=>$descripcion,
            "gravedad"=>$gravedad,
            "fecha"=>$fecha,
        ]);

        if($true){
            DB::table('logs')->insert(array('id_usuario'=>\Auth::user()->id,
            'descripcion'=>'Ha editado una incidencia',
            'created_at' =>date('Y-m-d H:i:s') )
            );
        }
        
        \Session::flash("status", "Incidencia editado correctamente!!");
        return redirect()->action("IncidenciaController@listado",["regsxpag" => 2]);
    }
}
