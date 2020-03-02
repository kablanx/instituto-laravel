<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Incidencia;

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
            'descripcion' => 'required',
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
        $incidencia->save();
        return redirect()->route("incidencias.crear")
        ->with(["message"=>"Incidencia enviada correctamente!"]);
        

    }

    
}
