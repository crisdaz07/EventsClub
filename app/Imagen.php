<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
    protected $table = 'imagenes';
    
    public $timestamps = false;


    public static function getImagenForAll($tipo){
    	return Imagen::select('ruta','id_tipo')
											->where('tipo','=',$tipo)
											->groupBy('id_tipo')
											->get();
    }
}
