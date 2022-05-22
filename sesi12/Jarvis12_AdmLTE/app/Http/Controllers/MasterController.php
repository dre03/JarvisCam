<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function getMaster(){
        return view('layouts.master');
    }
}
