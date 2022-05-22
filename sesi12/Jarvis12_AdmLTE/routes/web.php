<?php

use App\Http\Controllers\datatabelController;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\tabelController;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/tabel', [tabelController::class, 'getTabel']);

Route::get('/datatabel', [datatabelController::class, 'getDataTabel']);

Route::get('/', [MasterController::class, 'getMaster']);

// Route::get('/', function () {
//     return view('layouts.master');
// });

// Route::get('/tabel', function(){
//     return view('/layouts.tabel');
// });

// Route::get('/datatabel', function(){
//     return view('/layouts.datatabel');
// });