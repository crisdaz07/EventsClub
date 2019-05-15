<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Evento;
use App\Categoria;
use App\Imagen;
use Illuminate\Support\Facades\Input;
use DB;
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

		//$categorias = Categoria::all();  //todos los eventos para mostrar unos cuantos
		//$categorias1 = $categorias->splice(0,3);

		//$imagenes = Imagen::getImagenForAll("c"); //Primera imagen de todos los eventos
        //$imagenes1 = $imagenes->splice(0,3);

		$categorias =	DB::table('imagenes')->join('categorias', 'imagenes.id_tipo','=','categorias.id')->select('categorias.nombre','categorias.descripcion','ruta','id_tipo')
											->where('tipo','=','c')
											->groupBy('id_tipo')
											->get();
		$categorias1 = $categorias->splice(0,3);
		
		
		return view('welcome', compact('categorias','categorias1'));
		
	}

	public function file(){ //TODO borrar esta funcion
		
		return view('filepicker');
		
	}

	public function getRoutes(Request $request){ //TODO borrar esta funcion
		$files = $request->file('files');
		foreach ($files as $file) {
			$fileName = $file->getClientOriginalName();
			$file->move(public_path('multiple-picker/imgs'),$fileName);
		}
		
		$evento = new Evento;
        $evento->id_usuario = 44; //TODO obtener id del usuario real
        $evento->id_categoria = 34;
        $evento->nombre = $request->nombre;
        $evento->descripcion = $request->descripcion;
        $evento->ubicacion = $request->ubicacion;
        $evento->fecha_inicio = $request->fecha_inicio;
        $evento->fecha_fin = $request->fecha_fin;
        $evento->hora_inicio = $request->hora_inicio;
        $evento->hora_fin = $request->hora_fin;

        $evento->save();




		//$fileName = $request->file->getClientOriginalName();
		//$request->file->move('multiple-picker/imgs',$fileName);








		// $evento = new Evento;
		// $imagen = new Imagen;
  //       $imagen->ruta = "multiple-picker/imgs/".$fileName;
  //       $imagen->tipo = "e";
  //       $imagen->id_tipo = 545;
  //       $imagen->save();

		// return response()->json(['uploaded'=>'multiple-picker/imgs/'.$fileName]);

	}


	
	public function categorias(){
		
		
		
	  	//todos las cateogiras para events

		//$imagenes = Imagen::getImagenForAll("e"); //Primera imagen de todos los eventos
		
		
		$eventos =	DB::table('imagenes')->join('eventos', 'imagenes.id_tipo','=','eventos.id')->select('eventos.nombre','eventos.descripcion','ruta','id_tipo','eventos.id_categoria','eventos.id','eventos.fecha_inicio','eventos.fecha_fin','eventos.hora_inicio', 'eventos.hora_fin')
											->where('tipo','=','e')
											->groupBy('id_tipo')
											->get();
		$categorias = DB::table('categorias')->join('eventos','eventos.id_categoria', '=', 'categorias.id')->select('categorias.*')->distinct()->get();
		
		
		
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


