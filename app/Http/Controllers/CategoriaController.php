<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;
use App\Evento;
use App\Imagen;
class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        echo "hola mundo desde la categoria";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('categorias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $categoria = new Categoria;
        $categoria->nombre = $request->nombre;
        $categoria->descripcion = $request->descripcion;
        $categoria->save();

        $files = $request->file('files');
        foreach ($files as $file) {
            $fileName = $file->getClientOriginalName();
            $file->move(public_path('imagenesCategorias'),$fileName);
           
            $imagen = new Imagen;
            $imagen->ruta = "imagenesCategorias/".$fileName;
            $imagen->tipo = "c";
            $imagen->id_tipo = $categoria->id;
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
    public function show($nombre)
    {
        $id_categoria = Categoria::getCategoria($nombre);
        $eventos = Evento::eventos($id_categoria);

        //return $eventos->all(); test
        $ubicaciones = Evento::ubicaciones($id_categoria);

        
        return view('categoriavista', compact('eventos','nombre','ubicaciones'));


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
?>