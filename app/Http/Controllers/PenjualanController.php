<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PenjualanController extends Controller
{
   function index(){
    $produk = DB::table("produk")->get();
    $pelanggan = DB::table("pelanggan")->get();
    
    $penjualan = DB::table("penjualan")->latest()->first();

    $idPenjualan = "";
    if(!$penjualan){$idPenjualan = '1';
   }else{
      $idPenjualan = $penjualan->PenjualanID;
   }

   // return $idPenjualan;

     return view("tambah_penjualan",['idPenjualan' => $idPenjualan,'produk' => $produk,'pelanggan'=> $pelanggan]);
    }
    function store(Request $request){
      $penjualan = DB::table("penjualan")->insert([
         'PenjualanID' => $request->idPenjualan,
         'TanggalPenjualan' => date("Y-m-d"),
         'TotalHarga' => 0,
         'PelangganID' => $request->pelanggan,
         'status' => "pending"
      ]);
    return "ini cerita";}
}
