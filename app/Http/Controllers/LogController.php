<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Log;

class logController extends Controller
{
    //
    public function login($id){
        DB::table('logs')->insert(array('id_usuario'=>$id,
        'descripcion'=>'Se ha logueado',
        'created_at' =>date('Y-m-d') )
    );

    }

    public function listado($regsxpag){
        $logs=Log::paginate($regsxpag);
        /* var_dump($users);
        die(); */
        return view("logs.listado", ['logs'=>$logs]);
    }
    public function imprimirPDF(){
        $logs = Log::all();
        $pdf = \PDF::loadView('logs.pdf', ['logs' => $logs])->setPaper("a4", "portrait");
        return $pdf->stream('logs.pdf');
    }
}
