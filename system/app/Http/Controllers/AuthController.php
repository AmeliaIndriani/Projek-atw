<?php

namespace App\Http\Controllers;
use Auth;

class AuthController extends Controller
{
    function showlogin(){
        return view('login');
    }

    function loginprocess(){
        if (Auth::attempt(['email'=> request('email'),'password' => request('password')])){
            return redirect('beranda')->with ('succes','login berhasil');

        }else{
            return back()->with('danger','login gagal, silahkan cek username dan password');
        }
        
    }
    function showregistrasi(){
        return view('registrasi');
    }

    function showcheckout(){
        return view('checkout');
    }

}