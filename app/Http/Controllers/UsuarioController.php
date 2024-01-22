<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    public function perfil (Request $request, $id = 4){
        $usuario = Usuario::findOrFail($id);
        echo "Hola {$usuario->nombre}";
        dd($request);
    }
}
