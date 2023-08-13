<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LoginController;
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
Route::middleware(['guest'])->group(function(){
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
Route::get('/', [UserController::class, 'indexUser'])->name('user.home');
});

Route::middleware(['auth'])->group(function () {

});
Route::get('/', [UserController::class, 'indexUser'])->name('user.home');
Route::get('/admin',[UserController::class,'indexAdmin'])->name('admin.home');

// Login & Register

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/single', function () {
    return view('user.single');
});


Route::get('/kategori',[KategoriController::class,'index'])->name('kategori.index');



//---------------------------------------------------------------
