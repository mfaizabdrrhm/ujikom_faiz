<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ProdukController extends Controller
{
        function pro(){
            $produk = DB::table('produk')-> get();

    
            return view('home',['produk'=> $produk]);
        }
        
        function hapus($produkID){
            DB::table('produk')->where('ProdukID','=',$produkID)->delete();
    
            return redirect()->back();
        }
        function update($produkID){
            $produk = DB::table('produk')->where('ProdukID','=',$produkID)->first();
                
            return view('update',['produk'=> $produk]);
        }
        function proses_update(Request $request,$produkID){

            $nama_produk = $request->nama_produk ;
            $harga = $request->harga;
            $stok = $request->stok;
                
            DB::table('produk')->where('produkID',$produkID) -> update([
                
                'nama_produk' => $nama_produk,
                'Harga' => $harga,
                'stok' => $stok,
            ]);
            return redirect('/home');
        }
        function proses_tambah(Request $request){
            $nama_produk = $request->nama_produk;
            $harga = $request->harga;
            $stok = $request->stok;
           
    
            DB::table('produk')->insert([
                'nama_produk' => $nama_produk,
                'harga' => $harga,
                'stok' => $stok,
            ]);
            return redirect('/home');
        }
        function penjualan(){
            $penjualan = DB::table('penjualan')-> get();

    
            return view('penjualan',['penjualan'=> $penjualan]);
        }
       
    }   