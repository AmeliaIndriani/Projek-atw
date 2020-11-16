<?php

namespace App\Http\Controllers;
use App\Models\kategori;



class kategoriController extends Controller {
    function index () { 
        $data ['list_kategori'] = kategori:: all();
        return view('kategori.index', $data);
        
    }
    function create(){
        return view('kategori.create');
    }
    function store(){
        $kategori= new kategori;
        $kategori->nama= request('nama');
        $kategori->save();

        return redirect('kategori')->with('succes','Data berhasil ditambahkan');

    }
    function show(kategori $kategori){
        $data ['kategori'] = $kategori;
        return view ('kategori.show', $data);

    } 
    function edit(kategori $kategori){
        $data ['kategori'] = $kategori;
        return view ('kategori.edit', $data);

    }
    function update(kategori $kategori){
        $kategori->nama= request('nama');
        $kategori->save();

        return redirect('kategori')->with('succes','Data berhasil diedit');

    }
    function destroy(kategori $kategori){
        $kategori ->delete();
        return redirect('kategori')->with('danger','Data berhasil dihapus');

    }




}



