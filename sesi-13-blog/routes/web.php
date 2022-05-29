<?php

use App\Http\Controllers\PostController;
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

Route::get('/', [PostController::class, 'index']);

Route::get('/post/create', [PostController::class, 'create']);

Route::get('/post/edit/{id}', [PostController::class, 'edit']);

Route::get('/post/detail/{id}', [PostController::class, 'show']);

Route::post('/post/store', [PostController::class, 'store']);

Route::get('/post/delete/{id}', [PostController::class, 'destroy']);

Route::post('/post/update/{id}', [PostController::class, 'update']);