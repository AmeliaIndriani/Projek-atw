<?php

namespace App\Http\Controllers;
use App\Models\categori;



class categoriController extends Controller {
    function index () { 
        $data ['list_categori'] = categori:: all();
        return view('categori.index', $data);
        
    }
    function create(){
        return view('categori.create');
    }
    function store(){
        $categori= new categori;
        $categori->nama= request('nama');
        $categori->save();

        return redirect('categori')->with('succes','Data berhasil ditambahkan');

    }
    function show(categori $categori){
        $data ['categori'] = $categori;
        return view ('categori.show', $data);

    } 
    function edit(categori $categori){
        $data ['categori'] = $categori;
        return view ('categori.edit', $data);

    }
    function update(categori $categori){
        $categori->nama= request('nama');
        $categori->save();

        return redirect('categori')->with('succes','Data berhasil diedit');

    }
    function destroy(categori $categori){
        $categori ->delete();
        return redirect('categori')->with('danger','Data berhasil dihapus');

    }




}



