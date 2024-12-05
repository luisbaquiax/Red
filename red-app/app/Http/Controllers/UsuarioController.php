<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    //
    public function list(){
        return view('usuarios')->with('usuarios', Usuario::all());
    }

    public function create(Request $request){
        $usuario = new Usuario();
        $usuario->nombre1 = $request['nombre1'];
        $usuario->nombre2 = $request['nombre2'];
        $usuario->apellido1 = $request['apellido1'];
        $usuario->apellido2 = $request['apellido2'];
        $usuario->correo = $request['correo'];
        $usuario->telefono = $request['telefono'];
        $usuario->password = bcrypt($request['contraseña']);
        $usuario->save();
        return view('usuarios')->with('usuarios', Usuario::all());
    }
    public function update(Request $request){
        $usuario = Usuario::find($request['id']);
        $usuario->nombre1 = $request['nombre1'];
        $usuario->nombre2 = $request['nombre2'];
        $usuario->apellido1 = $request['apellido1'];
        $usuario->apellido2 = $request['apellido2'];
        $usuario->correo = $request['correo'];
        $usuario->telefono = $request['telefono'];
        $usuario->save();
        return view('usuarios')->with('usuarios', Usuario::all());
    }

    public function delete($id){
        $usuario = Usuario::find($id);
        $usuario->delete();
        return view('usuarios')->with('usuarios', Usuario::all());
    }
}
