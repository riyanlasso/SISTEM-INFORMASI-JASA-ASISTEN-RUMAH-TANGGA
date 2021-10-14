<?php

use App\Http\Controllers\aboutuscontroller;
use App\Http\Controllers\agencontroller;
use App\Http\Controllers\homecontroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\logincontroller;
use App\Http\Controllers\lowongancontroller;
use App\Http\Controllers\pilihcontroller;
use App\Http\Controllers\registercontroller;
use App\Http\Controllers\MahasiswaController;


use Illuminate\Support\Facades\Auth;





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

// Route::get('/', [logincontroller::class, 'index']);


// Route::get('/home', [homecontroller::class, 'index']);
// Route::get('/loginerror', [errorloginController::class, 'index']);

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/about', [aboutuscontroller::class, 'index']);
// Route::resource('agens', agencontroller::class);
Route::resource('mahasiswas', MahasiswaController::class);
Route::resource('lowongans', lowongancontroller::class);
Route::get('/pilih', [pilihcontroller::class, 'index']);
Route::get('/register_agen', [registercontroller::class, 'agen']);
Route::get('/register_customer', [registercontroller::class, 'customer']);
