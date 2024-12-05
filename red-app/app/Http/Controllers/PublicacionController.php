<?php

namespace App\Http\Controllers;

use App\Models\Publicacion;
use App\Models\Usuario;
use Illuminate\Http\Request;
date_default_timezone_set("America/Guatemala");

class PublicacionController extends Controller
{
    //
    public function list(){
        $publicaciones = Publicacion::with('comentarios')->get();
        return view('publicaciones')->with('publicaciones', $publicaciones);
    }

    public function create(Request $request){
        $publicacion = new Publicacion();
        $publicacion->titulo = $request['titulo'];
        $publicacion->descripcion = $request['descripcion'];
        $publicacion->id_usuario = $request['id'];
        $publicacion->fecha = date("Y-m-d");
        $imagen = $request->file;
        $nombreImagen = time().'.'.$imagen->getClientOriginalExtension();
        $publicacion->img = $nombreImagen;
        $request->file->move(public_path('img'), $publicacion->img);
        $publicacion->save();
        return view('usuarios')->with('usuarios',Usuario::all());
    }

    public function update(Request $request)
    {
        $id = $request['id'];
        $publicacion = Publicacion::find($id);
        $publicacion->titulo = $request['titulo'];
        $publicacion->descripcion = $request['descripcion'];
        $imagen = $request->file;
        $nombreImagen = time().'.'.$imagen->getClientOriginalExtension();
        $publicacion->img = $nombreImagen;
        $request->file->move(public_path('img'), $publicacion->img);
        $publicacion->save();
        return view('publicaciones')->with('publicaciones', Publicacion::all());

    }

    public function delete($id){
        $p = Publicacion::find($id);
        $p->delete();
        return view('usuarios')->with('usuarios',Usuario::all());
    }

}
