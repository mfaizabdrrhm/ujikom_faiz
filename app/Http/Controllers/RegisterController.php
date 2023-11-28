<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\hash;

class RegisterController extends Controller
{
    function proses_registrasi(Request $request){
        $nama = $request->nama;
        $username = $request->username;
        $password = $request->password;
        $telp = $request->telp;
        $level = $request->level;

        DB::table('pegawai')->insert([
            'nama' => $nama,
            'username' => $username,
            'password' => hash::make($password),
            'telp' => $telp,
            'level' => $level, 
        ]);
        return redirect('/login ');
    }
}
