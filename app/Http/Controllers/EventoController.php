<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Evento;
use App\Categoria;
use App\Imagen;
use DB;

class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       //$categorias = Categoria::all();
       //$eventos = Evento::all();
       //return view('categorias', compact('categorias','eventos'));
        return "seems like you're lost";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('eventos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $evento = new Evento;
        $evento->id_usuario = $request->usuario; //TODO obtener id del usuario real
        $evento->id_categoria = Categoria::getCategoria($request->categoria);
        $evento->nombre = $request->nombre;
        $evento->descripcion = $request->descripcion;
        $evento->ubicacion = $request->ubicacion;
        $evento->fecha_inicio = $request->fecha_inicio;
        $evento->fecha_fin = $request->fecha_fin;
        $evento->hora_inicio = $request->hora_inicio;
        $evento->hora_fin = $request->hora_fin;
        $evento->save();

        $files = $request->file('files');
        foreach ($files as $file) {
            $fileName = $file->getClientOriginalName();
            $file->move(public_path('imagenesEventos'),$fileName);
           
            $imagen = new Imagen;
            $imagen->ruta = "imagenesEventos/".$fileName;
            $imagen->tipo = "e";
            $imagen->id_tipo = $evento->id;
            $imagen->save();            
        }        




        return redirect('categorias');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $evento = Evento::find($id);
		$imagenes = DB::table('imagenes')->select('ruta')->where('tipo', '=', 'e')->where('id_tipo', '=', $id)->get();
		
        return view('eventovista', compact('evento', 'imagenes'));
		
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
