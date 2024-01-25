<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Tarea;

class UsuarioController extends Controller
{
    public function main(){
        return view("usuario.main", ["tareas" => Tarea::where('idUsu',10)->get()]);
    }

    public function perfil (Request $request, $id = 4){
        $usuario = Usuario::findOrFail($id);
        $fondo = $request->input("fondo", "black");
        $tinta = $request->input("tinta", "white");
        return view("usuario.perfil", ["usuario" => $usuario, "fondo" => $fondo, "tinta" => $tinta]);
    }
}
