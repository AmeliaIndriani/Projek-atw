<?php

namespace App\Http\Controllers;
use App\Models\produk;



class UserprodukController extends Controller {
    function index () { 
        $data ['list_produk'] = produk:: all();
        return view('produk.index', $data);
    
    }
    function show(produk $produk){
        $data ['produk'] = $produk;
        return view ('produk.show', $data);

    } 


}



