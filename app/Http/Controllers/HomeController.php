<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;
use App\Imagen;
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
        $categorias = Categoria::all(); 
        $categorias1 = $categorias->splice(0,3);
        
        /*$imagenes = Imagen::getImagenForAll("c"); //Primera imagen de todos los eventos
        $imagenes1 = $imagenes->splice(0,3)*/;

        return view('home', compact('categorias','categorias1'));
    }
	
	
}
