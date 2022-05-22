<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class datatabelController extends Controller
{
    public function getDataTabel(){
        return view('layouts.datatabel');
    }
}
