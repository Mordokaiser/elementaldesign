<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginApi extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return json_encode(['message' => 'Has iniciado sesion'],200);
        }

        return back()->withErrors([
            'email' => 'no se encuentra el wons',
        ]);
    }


    //funcion de logout
    public function logout(Request $request)
    {
        auth()->guard('web')->logout();
        return json_encode(['message' => 'Deslogiado'],200);
    }
}
