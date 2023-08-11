<?php

use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('user.index');
});

Route::get('/single',function(){
    return view('user.single');
});

Route::get('/login',function(){
    return view('user.Login.login');
});

Route::get('/register',function(){
    return view('user.Login.register');
});
