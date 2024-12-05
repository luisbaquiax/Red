<?php

namespace App\Http\Controllers;

use App\Models\Comentario;
use Illuminate\Http\Request;

class ComentarioController extends Controller
{
    //
    public function comentariosPorPublicacion($id){
        $comentarios = Comentario::where('id_publicacion', '=', $id)->get();
        return view('comentarios')->with('comentarios', $comentarios);
    }
}
