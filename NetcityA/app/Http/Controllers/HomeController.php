<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $kategoris = Kategori::with('modul')->latest()->take(3)->get();
        return view('pages.user.content.home',compact('kategoris'));

    }

    public function kategorinavbar(){
        $kategoris = Kategori::all();
        return view('partials.user.navbar',compact('kategoris'));
    }
}
