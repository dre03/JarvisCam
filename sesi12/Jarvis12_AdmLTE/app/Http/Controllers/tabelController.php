<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tabelController extends Controller
{
    public function getTabel(){
        return view('layouts.tabel');
    }
}
