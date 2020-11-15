<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\produkController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserprodukController;
use App\Http\Controllers\categoriController;



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



Route::get('/welcome', [HomeController::class, 'showwelcome']);
Route::get('/home', [HomeController::class, 'showhome']);
Route::get('/beranda', [HomeController::class, 'showberanda']);
Route::get('/Categori', [HomeController::class, 'showCategori']);


Route::get('/produk', [produkController::class, 'index']);
Route::get('/produk/create', [produkController::class,'create']);
Route::post('/produk', [produkController::class,'store']);
Route::get('/produk/{produk}', [produkController::class,'show']);
Route::get('/produk/{produk}/edit', [produkController::class,'edit']);
Route::put('/produk/{produk}', [produkController::class,'update']);
Route::delete('/produk/{produk}', [produkController::class,'destroy']);


Route::get('/user', [UserController::class, 'index']);
Route::get('/user/create', [UserController::class,'create']);
Route::post('/user', [UserController::class,'store']);
Route::get('/user/{user}', [UserController::class,'show']);
Route::get('/user/{user}/edit', [UserController::class,'edit']);
Route::put('/user/{user}', [UserController::class,'update']);
Route::delete('/user/{user}', [UserController::class,'destroy']);

Route::get('/login', [AuthController::class, 'showlogin']);
Route::post('/login', [AuthController::class, 'loginprocess']);

Route::get('/categori', [categoriController::class, 'index']);
Route::get('/categori/create', [categoriController::class,'create']);
Route::post('/categori', [categoriController::class,'store']);
Route::get('/categori/{categori}', [categoriController::class,'show']);
Route::get('/categori/{categori}/edit', [categoriController::class,'edit']);
Route::put('/categori/{categori}', [CategoriController::class,'update']);
Route::delete('/categori/{categori}', [categoriController::class,'destroy']);


Route::get('/produkdetail', [HomeController::class, 'showprodukdetail']);
Route::get('/login', [AuthController::class, 'showlogin']);
Route::get('/registrasi', [AuthController::class, 'showregistrasi']);
Route::get('/checkout', [AuthController::class, 'showcheckout']);

  




