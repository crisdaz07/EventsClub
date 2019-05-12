<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Catgoria
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
        $categorias = Catgoria::all(); 
        $imagenes = Imagen::getImagenForAll("c"); //Primera imagen de todos los eventos
        return view('home', compact('categorias','imagenes'));
    }
	
	
}
