<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    public $timestamps = false;


    public static function eventos($id_categoria){
    	return Evento::where('id_categoria','=',$id_categoria)->get();
    }

    public static function ubicaciones($id_categoria){
    	return Evento::select('ubicacion')
    									->where('id_categoria','=', $id_categoria)
    									->distinct()->get();

    }
   
}
