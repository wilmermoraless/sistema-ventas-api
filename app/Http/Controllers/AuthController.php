<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
//metodo para iniciar sesion
    public function login(Request $request)
    {
        public function logout(Request $request)
        {
            //revocamos el token de acceso
            auth()->user()->tokens()->delete();

            return response()->json(['message' => 'Sesión cerrada correctamente']);
        }
        
        //validamos los datos de entrada
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        //verificamos las credenciales del usuario
        if (!auth()->attempt($request->only('email', 'password'))) {
            return response()->json(['message' => 'Credenciales incorrectas'], 401);
        }

        //generamos el token de acceso
        $token = auth()->user()->createToken('access_token')->plainTextToken;

        return response()->json(['token' => $token]);
    }

}
