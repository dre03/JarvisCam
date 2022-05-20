<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function registrasi(){
        return view('register');
    }


    public function welcome(Request $request){
        $namadpn = $request->namadepan;
        $namabkg = $request->namabelakang;

        return view('welcome', ['namadepan'=>$namadpn, 'namabelakang'=>$namabkg]);
    }
}
?>