<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Ini adalah tempat di mana kamu bisa mendaftarkan route web untuk aplikasi.
| Route ini akan dimuat oleh RouteServiceProvider dalam grup yang
| berisi middleware "web".
|
*/

// Route untuk halaman utama (welcome)
Route::get('/', function () {
    return view('welcome');
});

// Route untuk halaman profil pengguna
Route::get('/profile', [ProfileController::class, 'showProfile'])->name('profile');