<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function indexUser(){
        return view('pages.user.content.home');
    }

    public function indexAdmin(){
        return view('pages.admin.home');
    }
}
