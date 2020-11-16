<?php

namespace App\Http\Controllers;
use Auth;

class AuthController extends Controller
{
    function showloginadmin(){
        return view('loginadmin');
    }

    function loginprocess(){
        if (Auth::attempt(['email'=> request('email'),'password' => request('password')])){
            return redirect('beranda')->with ('success','login berhasil');
        }else{
            return back()->with('danger','login gagal, silahkan cek Email dan password');
        }
    }
    function showlogout(){
        Auth::logout();
        return redirect('beranda');
    }

    function showregistrasi(){
        return view('registrasi');
    }

    function showcheckout(){
        return view('checkout');
    }

}