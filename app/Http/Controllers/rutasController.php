<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Evento;
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
		
		return view('welcome');
		
	}
	
	public function eventos(){
		
		return view('events');
		
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