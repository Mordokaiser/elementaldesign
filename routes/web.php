<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/login', function () {
    return view('Auth.login');
});
Route::get('/register', function () {
    return view('Auth.register');
});



//rutas protegidas con auth
/*
 Route::group(['middleware' => ['auth:sanctum']], function () {
    //cambiar
     Route::get('/dashboard', function () {
        return view('dashboard');
     });
     Route::get('/logout', [AuthController::class,'logout'])->name('logout');
 });
*/

