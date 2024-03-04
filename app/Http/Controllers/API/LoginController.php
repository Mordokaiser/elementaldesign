<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginApiController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('api')->attempt($credentials)) {
            $user = Auth::guard('api')->user();
            $token = $user->createToken('AuthToken')->accessToken;

            return response()->json([
                'message' => 'Has iniciado sesión correctamente',
                'token' => $token,
            ], 200);
        }

        return response()->json([
            'message' => 'Credenciales incorrectas',
        ], 401);
    }

    public function logout(Request $request)
    {
        $user = Auth::guard('api')->user();
        $user->token()->revoke();
        
        return response()->json([
            'message' => 'Has cerrado sesión correctamente',
        ], 200);
    }
}
