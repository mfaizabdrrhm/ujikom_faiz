<?php

use App\Http\Controllers\KasirController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProdukController;

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
Route::get('/hapus_produk/{ProdukID}', [ProdukController::class,'hapus']);
Route::get('/tambah_pro', [KasirController::class, 'tambah_pro']);
Route::get('/penjualan', [KasirController::class, 'penjualan']);
Route::get('/home', [ProdukController::class, 'pro']);

Route::post('/tambah_pro', [ProdukController::class,'proses_tambah']);
Route::get ('/update_produk/{ProdukID}', [ProdukController::class,'update']);
Route::post('/update_produk/{ProdukID}', [ProdukController::class,'proses_update']);