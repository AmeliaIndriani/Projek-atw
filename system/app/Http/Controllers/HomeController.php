<?php

namespace App\Http\Controllers;
use App\Models\produk;
use App\Models\kategori;

class HomeController extends Controller {

    function showwelcome(){
        return view('welcome');
    }
    function checkout(){
        // return view('checkout');

        $dataa['list_kategori'] = kategori:: all();
        return view('checkout',  $dataa);
    }

    function showhome(){
        $dataa['list_kategori'] = kategori:: all();
        $data ['list_produk'] = produk:: all();
        return view('home', $data, $dataa);
    }
     
    function showberanda(){
        return view('beranda');
    }
    function showkategori(){
        return view('kategori');
    }
    function showproduk(){
        return view('produk');
    }
    // jjjj
 
    function  showprodukdetail(produk $produkDetail){
        $data ['produk'] = $produkDetail;
        return view ('produk-detail', $data);
    
    }



}
