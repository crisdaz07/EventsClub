<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;
use App\Imagen;
use DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
	
	

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categorias =	DB::table('imagenes')->join('categorias', 'imagenes.id_tipo','=','categorias.id')->select('categorias.nombre','categorias.descripcion','ruta','id_tipo')
											->where('tipo','=','c')
											->groupBy('id_tipo')
											->get();
		$categorias1 = $categorias->splice(0,3);
		
		
		return view('home', compact('categorias','categorias1'));
        
    }
	
	
}
