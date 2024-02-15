<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\View\View;

class usuariocontroller extends Controller
{
    public function traerusuarios()
    {
        $usuarios = Usuario::all();
        dd($usuarios);

    }


    public function traerusuario($idusuario): View
    {
        $user = Usuario::find($idusuario);
        return view("index", ["user" => $user]);
    }


    public function mostrarindex(): View
    {
        return view("index");
    }

    public function crearusuario(Request $request)
    {
        $usuario = Usuario::find($request->id);

        if ($usuario) {
            return "El usuario ya existe";
        } else {
            $user = new Usuario();
            $user->idusuario = $request->id;
            $user->nombreusuario = $request->nombre;
            $user->apellidousuario = $request->apellido;
            $user->correousuario = $request->correo;
            $user->telefonousuario = $request->telefono;
            $user->save();

            return view('index')->with('user', $user);
        }
    }


    public function actualizar(Request $request)
    {
        $usuario = Usuario::find($request->id);

        if ($usuario) {
            $usuario->nombreusuario = $request->nombre;
            $usuario->apellidousuario = $request->apellido;
            $usuario->correousuario = $request->correo;
            $usuario->telefonousuario = $request->telefono;
            $usuario->save();

            return "Usuario actualizado exitosamente";
        } else {
            return "El usuario no existe";
        }
    }


    public function eliminar(Request $request)
    {
        $usuario = Usuario::find($request->id);

        if ($usuario) {
            // Si el usuario existe, eliminarlo
            $usuario->delete();
            return "Usuario eliminado exitosamente";
        } else {
            // Si el usuario no existe, retornar un mensaje de error
            return "El usuario no existe";
        }

    }


}
