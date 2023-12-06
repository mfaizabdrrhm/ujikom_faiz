<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
    {
        function index(Request $request){
            return view("login");
        }
        function login(Request $request){
            $dataLogin = $request->only("username","password");
            if(Auth::attempt($dataLogin)){
                return redirect('/home');
            }
            else {
                return redirect('/login ')->with("error","ke pasar beli buah, username/password salah");
            }
        }

        function logout(){
            Auth::logout();

            return redirect('/login');
        }
    }
