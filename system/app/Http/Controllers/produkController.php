<?php

namespace App\Http\Controllers;
use App\Models\produk;



class produkController extends Controller {
    function index () { 
        $data ['list_produk'] = produk:: all();
        return view('produk.index', $data);
        

    }
    function create(){
        return view('produk.create');
    }
    function store(){
        $produk= new produk;
        $produk->nama= request('nama');
        $produk->harga= request('harga');
        $produk->berat= request('berat');
        $produk->stok= request('stok');
        $produk->deskripsi= request('deskripsi');
        $produk->save();

        return redirect('produk')->with('succes','Data berhasil ditambahkan');

    }
    function show(produk $produk){
        $data ['produk'] = $produk;
        return view ('produk.show', $data);

    } 
    function edit(produk $produk){
        $data ['produk'] = $produk;
        return view ('produk.edit', $data);

    }
    function update(produk $produk){
        $produk->nama= request('nama');
        $produk->harga= request('harga');
        $produk->berat= request('berat');
        $produk->stok= request('stok');
        $produk->deskripsi= request('deskripsi');
        $produk->save();

        return redirect('produk')->with('succes','Data berhasil diedit');

    }
    function destroy(produk $produk){
        $produk ->delete();
        return redirect('produk')->with('danger','Data berhasil dihapus');

    }




}


