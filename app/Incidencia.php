<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Incidencia extends Model
{
    //
    protected $table="incidencias";

    // Definición de la relacion Many to One con la tabla usuarios
    public function user(){
        // Devuelve el objeto usuario que ha creado la incidencia
        return $this->belongsTo('App\User','user_id');
    }
    

}
