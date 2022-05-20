<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\HomeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('halo', function() {
//     return ('Selamat datang ayo berjuang jangan malas');
// });

// Route::get('blog', function(){
//     return view('blog');

// });

// Route::get('dosen', [DosenController::class,'index']);

Route::get('/', [HomeController::class, 'index']);

Route::get('/register', [AuthController::class, 'registrasi']);

Route::post('/welcome', [AuthController::class, 'welcome']);