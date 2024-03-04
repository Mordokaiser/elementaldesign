<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\Clients;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
    
        if (Auth::attempt($credentials)) {
            $user = Auth::user(); // Cambiado de Auth::users() a Auth::user()
            $token = $user->createToken('AuthToken')->accessToken;
    
            return response()->json([
                'message' => 'Login successful',
                'token' => $token,
            ], 200);
        }
    
        throw ValidationException::withMessages([
            'email' => ['The provided credentials are incorrect.'],
        ]);
    }

    /**
 * Register a new user.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return \Illuminate\Http\JsonResponse
 */
public function register(Request $request)
{
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'last_name2' => 'required|string|max:255',
        'rut' => 'required|string|max:12|unique:clients',
        'birth_date' => 'required|date',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:8',
        'city' => 'required|string|max:255',
        'address' => 'required|string|max:255',
        'phone_number' => 'required|string|max:20',
    ]);

    $client = Clients::create([
        'name' => $validatedData['name'],
        'last_name' => $validatedData['last_name'],
        'last_name2' => $validatedData['last_name2'],
        'birthday_date' => $validatedData['birth_date'],
        'city' => $validatedData['city'],
        'address' => $validatedData['address'],
        'rut' => $validatedData['rut'],
        'phone_number' => $validatedData['phone_number'],
        'birthday_date' => $validatedData['birth_date'],
    ]);

    $user = Users::create([
        'email' => $validatedData['email'],
        'password' => Hash::make($validatedData['password']),
        'client_id' => $client->id,
        'role_id' => 1, // Aquí debes establecer el ID del rol adecuado
    ]);

    $token = $user->createToken('AuthToken')->accessToken;

    return response()->json([
        'message' => 'User registered successfully',
        'token' => $token,
    ], 201);
}


    /**
     * Log the user out.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout(Request $request)
    {
        $user = Auth::user();
        $user->token()->revoke();

        return response()->json([
            'message' => 'Logout successful',
        ], 200);
    }
}
