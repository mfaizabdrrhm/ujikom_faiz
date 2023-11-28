<?php

use App\Http\Controllers\KasirController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;


Route::get('/', function () {
    return view('welcome');
});

Route::post('/login', [LoginController::class,'login'])->name("login");
Route::get('/login', [LoginController::class,'index']);

Route::get('/register', function () {
    return view('register');
});

Route::get('/home', [KasirController::class, 'home']);

Route::post('register', [RegisterController::class,'proses_registrasi']);