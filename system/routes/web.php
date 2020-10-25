<?php

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


Route::get('/welcom', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});
Route::get('/beranda', function () {
    return view('beranda');
});

Route::get('/Categori', function () {
    return view('Categori');
});
Route::get('/produk', function () {
    return view('produk');
});

Route::get('/produk-detail', function () {
    return view('produk-detail');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/registrasi', function () {
    return view('registrasi');
});

Route::get('template', function () {
    return view('template.base');
});


