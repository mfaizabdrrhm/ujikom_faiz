<?php
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KasirController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PelangganController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/login', [LoginController::class,'login'])->name("login");
Route::get('/login', [LoginController::class,'index']);

Route::get('/register', function () {
    return view('register');
});

Route::post('register', [RegisterController::class,'proses_registrasi']);

Route::middleware(['auth'])->group(function () {
    
Route::get('/logout', [LoginController::class,'logout']);
Route::get('/home', [KasirController::class, 'home']);
Route::get('/tambah_pe', [KasirController::class, 'tambah_pe']);
Route::get('/tambah_pro', [KasirController::class, 'tambah_pro']);
Route::get('/penjualan', [KasirController::class, 'penjualan']);
Route::get('/detail', [KasirController::class, 'detail']);
Route::get('/detail', [ProdukController::class, 'detail']);

Route::post('register', [RegisterController::class,'proses_registrasi']);

Route::get('/hapus_produk/{ProdukID}', [ProdukController::class,'hapus']);
Route::get('/home', [ProdukController::class, 'pro']);
Route::get('/penjualan', [ProdukController::class, 'penjualan']);
Route::post('/tambah_pro', [ProdukController::class,'proses_tambah']);
Route::get ('/update_produk/{ProdukID}', [ProdukController::class,'update']);
Route::post('/update_produk/{ProdukID}', [ProdukController::class,'proses_update']);

Route::get('/pelanggan', [PelangganController::class,'index']);
Route::get('/pelanggan', [PelangganController::class, 'po']);
Route::get('/hapus_pelanggan/{PelangganID}', [PelangganController::class,'hapus']);
Route::get('/update_pelanggan/{PelangganID}', [PelangganController::class,'update']);
Route::post('/update_pelanggan/{PelangganID}', [PelangganController::class,'proses_update']);


Route::post('/tambah_pe', [PelangganController::class, 'proses_tambah_pelanggan']);
});