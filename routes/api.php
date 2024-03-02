<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\LoginApi;

Route::post('login', [LoginApi::class, 'login']);
Route::post('logout',  [LoginApi::class, 'logout']);
