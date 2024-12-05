<?php

namespace App\Http\Controllers;

use App\Models\Comentario;
use Illuminate\Http\Request;
date_default_timezone_set("America/Guatemala");

class ComentarioController extends Controller
{
    //
    public function comentariosPorPublicacion($id){
        $comentarios = Comentario::where('id_publicacion', '=', $id)->get();
        return view('comentarios')->with('comentarios', $comentarios);
    }

    public function create(Request $request)
    {
        $id =  $request['id'];
        $comentario = new Comentario();
        $comentario->contenido = $request['comentario'];
        $comentario->id_publicacion = $id;
        $comentario->estado = true;
        $comentario->fecha = date("Y-m-d");
        $comentario->save();
        return redirect()->route('publicaciones');
    }
}
