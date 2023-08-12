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

// ROUTE AUTH USER
Route::get('/login', function () {
    return view('pages.user.auth.login');
});

Route::get('/register', function () {
    return view('pages.user.auth.register');
});


// ROUTE CONTENT USER
Route::get('/', function () {
    return view('pages.user.content.home');
});

Route::get('/modul', function () {
    return view('pages.user.content.modul');
});
