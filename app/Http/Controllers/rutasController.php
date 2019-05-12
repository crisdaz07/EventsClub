<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Evento;
use App\Categoria;
use App\Imagen;
class rutasController extends Controller{
	

    /**
     * Where to redirect users after login.
     *
     * @var string
     */


    /**
     * Create a new controller instance.
     *
     * @return void
     */
	
	public function index(){

		$eventos = Evento::all();  //todos los eventos para mostrar unos cuantos
		
		return view('welcome', compact('eventos'));
		
	}

	public function file(){ //TODO borrar esta funcion
		
		return view('filepicker');
		
	}

	public function getRoutes(Request $request){ //TODO borrar esta funcion
		return $request->input('fileUpload');
		//return view('filepicker');
		
	}


	
	public function categorias(){
		
		$eventos = Evento::all();
		
		$categorias = Categoria::all();  //todos las cateogiras para events

		//$imagenes = Imagen::getImagenForAll("e"); //Primera imagen de todos los eventos
		
				
		return view('categorias', compact('categorias','eventos'));
		
	}
	
	public function blog(){
		
		return view('blog');
		
	}
	
	public function galeria(){
		
		return view('gallery');
		
	}
	
	public function acerca(){
		
		return view('about');
		
	}
	
	public function contacto(){
		
		return view('contact');
		
	}
	
	public function registro(){
		
		return view('register');
		
	}
	public function login(){
		
		return view('login');
		
	}
	
	
}

?>


