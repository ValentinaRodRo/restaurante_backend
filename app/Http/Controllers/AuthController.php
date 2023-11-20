<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Login;

class AuthController extends Controller
{
    public function autenticar(Request $request)
    {
        $request->header('Access-Control-Allow-Origin', '*');

        // Obtener datos del formulario
        $username = $request->input('USER');
        $password = $request->input('PW');

        // Realizar la lógica de autenticación
        $usuarioAutenticado = Login::where('username', $username)->where('password', $password)->first();

        if ($usuarioAutenticado) {
            // El usuario está autorizado
            return response()->json(['message' => 'Autenticación exitosa'], 200);
        } else {
            // El usuario no está autorizado
            return response()->json(['message' => 'Credenciales incorrectas'], 401);
        }
    }
}