<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return view('login');
});

Route::post('/login', [PageController::class, 'login'])->name('login.submit');
Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');
Route::get('/tentang', [PageController::class, 'tentang'])->name('tentang');
Route::get('/produk', [PageController::class, 'produk'])->name('produk');
Route::get('/profil', [PageController::class, 'profil'])->name('profil');