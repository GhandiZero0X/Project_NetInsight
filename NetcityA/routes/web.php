<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ModulController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
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

// ----------------------   USER  -----------------------------

//homepage
Route::middleware(['guest'])->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/register', [RegisterController::class, 'register']);
    Route::get('/', [UserController::class, 'indexUser'])->name('user.home');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/admin', [UserController::class, 'indexAdmin'])->name('admin.home');
    Route::get('/', [UserController::class, 'indexUser'])->name('user.home');


    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    Route::get('/single', function () {
        return view('user.single');
    });

//kategori
    Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori.index');

//CREATE
    Route::get('/kategori/create',[KategoriController::class,'create'])->name('kategori.create');
    Route::post('/kategori/create',[KategoriController::class,'store'])->name('kategori.store');

//UPDATE
    Route::get('/kategori/{id}',[KategoriController::class,'edit'])->name('kategori.edit');
    Route::put('/kategori/{id}',[KategoriController::class,'update'])->name('kategori.update');
    Route::delete('/kategori/{id}',[KategoriController::class,'destroy'])->name('kategori.destroy');


// MDOUL
    Route::get('/modul', [ModulController::class, 'index'])->name('modul.index');
    Route::get('/modul/create',[ModulController::class,'create'])->name('modul.create');
    Route::post('/modul/store',[ModulController::class,'store'])->name('modul.store');

//CREATE
});
Route::get('/', [UserController::class, 'indexUser'])->name('user.home');




//---------------------------------------------------------------
