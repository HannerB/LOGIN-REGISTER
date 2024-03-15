<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use GuzzleHttp\Middleware;

Route::get('/', function () {
    return view('register');
});

Route::view('/login', 'login')->name('login');
Route::view('/registro', 'register')->name('registro');
Route::view('/privada', 'secret')->Middleware('auth')->name('privada');

Route::post('/validar-registro', [LoginController::class, 'register'])->name('validar-registro');
Route::post('/inicia-sesion', [loginController::class, 'login'])->name('inicia-sesion');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');