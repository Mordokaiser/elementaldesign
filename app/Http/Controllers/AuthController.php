<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Auth\RequestGuard;

class AuthController extends Controller
{
    /**
     * Display the specified resource.
     */
    public function show()
    {
        return view('welcome');
    }

    //funcion de login
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }


    //funcion de logout
    public function logout(Request $request): RedirectResponse
    {
        auth()->guard('web')->logout();
        return redirect('/');
    }
}
