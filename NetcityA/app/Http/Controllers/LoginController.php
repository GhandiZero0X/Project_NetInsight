<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    public function index(){
        return view('user.login.login');
    }

    public function login(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ],
        [
            'email.required'=>'Email wajib diisi',
            'password.required'=>'Password wajib diisi',
        ]);

        $infologin=[
            'email'=>$request->email,
            'password'=>$request->password,
        ];

        if(Auth::attempt($infologin)){
            if(Auth::user()->role == '0'){
            return redirect()->route('home')->with('success','Berhasil login');
        }
            if(Auth::user()->role=='1'){
                return redirect()->route('admin')->with('success','Berhasil Login');
            }
    }

        else{
            return redirect('')->withErrors('Email dan Password salah')->withInput();
        }
    }
}
