<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    //
    protected $table="logs";

    public function user(){
        // Devuelve el objeto usuario que ha creado la incidencia
        return $this->belongsTo('App\User','user_id');
    }
}
