<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use App\Models\Modul;

class UserController extends Controller
{
    public function indexUser(){
        $kategoris = Kategori::with('modul')->take(4)->get();
        foreach ($kategoris as $kategori) {
            // Ambil 3 modul pertama untuk setiap kategori
            $kategori->modul = $kategori->modul->take(3);
        }
        return view('pages.user.content.home',compact('kategoris'));
    }

    public function indexAdmin(){
        return view('pages.admin.content.home');
    }


}


