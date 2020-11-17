<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\produkController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserprodukController;
use App\Http\Controllers\kategoriController;
use App\Http\Controllers\UserkategoriController;




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
Route::get('/beranda', [HomeController::class, 'showberanda']);





// khusus user
Route::get('home', [HomeController::class, 'showhome']);
Route::get('produkDetail/{produkDetail}', [HomeController::class, 'showprodukdetail']);
Route::get('/checkout', [HomeController::class, 'checkout']);
// Login dan register dan logout
Route::get('/loginadmin', [AuthController::class, 'showloginadmin']);
Route::post('/loginadmin', [AuthController::class, 'loginprocess']);
Route::get('logout', [AuthController::class, 'logout']);
Route::get('registrasi', [AuthController::class, 'showregistrasi']);
Route::post('registrasi', [AuthController::class, 'storeRegister']);





Route::resource('produk',produkController::class);
Route::resource('kategori',kategoriController::class);
Route::resource('user',UserController::class);

// khusus login dan kawan2
// Route::get('login', [AuthController::class, 'showLogin'])->name('login');
// Route::post('login', [AuthController::class, 'loginProcess']);

// Route::get('register', [AuthController::class, 'showRegister']);
// Route::post('register', [AuthController::class, 'storeRegister']);








  




