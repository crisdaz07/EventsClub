<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    public $timestamps = false;

    public static function getCategoria($nombre){
    	return Categoria::select('id')->where('nombre','=',$nombre)->value('id');
    }
}
