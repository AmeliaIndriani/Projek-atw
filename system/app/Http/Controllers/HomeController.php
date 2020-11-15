<?php

namespace App\Http\Controllers;
class HomeController extends Controller {

    function showwelcome(){
        return view('welcome');
    }

    function showhome(){
        return view('home');
    }
     
    function showberanda(){
        return view('beranda');
    }
    function showcategori(){
        return view('categori');
    }
    function showproduk(){
        return view('produk');
    }
    function showprodukdetail(){
        return view('produk-detail');
    }



}
