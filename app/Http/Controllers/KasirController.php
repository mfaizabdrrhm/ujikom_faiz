<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KasirController extends Controller
{
    function home(){
        return view('home');
    }
    function tambah_pro(){
        return view('tambah_pro');
    }
}
