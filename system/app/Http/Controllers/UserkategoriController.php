<?php

namespace App\Http\Controllers;
use App\Models\kategori;



class UserkategoriController extends Controller {
    function index () { 
        $data ['list_kategori'] = kategori:: all();
        return view('kategori.index', $data);
        
    }
    function show(kategori $kategori){
        $data ['kategori'] = $kategori;
        return view ('kategori.show', $data);

    } 




}



