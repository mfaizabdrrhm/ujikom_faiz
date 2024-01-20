<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PenjualanController extends Controller
{
   function index(){
    $produk = DB::table("produk")->get();
    $pelanggan = DB::table("pelanggan")->get();

    return view("tambah_penjualan",['produk' => $produk,'pelanggan'=> $pelanggan]);
   }
}
