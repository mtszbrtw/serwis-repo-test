<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
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



Route::get('/',[PostController::class,'index'])->name('index.post');
Route::post('/post',[PostController::class,'create']);
Route::get('/post/{id}',[PostController::class,'read'])->name('edit.post');
Route::put('/post/{id}',[PostController::class,'update'])->name('update.post');
Route::delete('/post/{id}',[PostController::class,'delete'])->name('destroy.post');
