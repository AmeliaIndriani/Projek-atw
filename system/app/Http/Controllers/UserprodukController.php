<?php

namespace App\Http\Controllers;
use App\Models\Userproduk;



class UserprodukController extends Controller {
    function index () { 
        $data ['list_produk'] = produk:: all();
        return view('userproduk.index', $data);   
    }
    
    function show(produk $userproduk){

        $data ['produk'] = $userproduk;
        return view ('userproduk.show', $data);

    } 
    
    




}








