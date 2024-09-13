<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route untuk halaman welcome (default route)
Route::get('/', function () {
    return view('welcome');
});

// Route untuk halaman profile dengan parameter nama, kelas, dan npm
Route::get('/profile/{nama}/{kelas}/{npm}', [ProfileController::class, 'profile']);