<?php

use App\Http\Controllers\aboutuscontroller;
use App\Http\Controllers\agencontroller;
use App\Http\Controllers\artcontroller;
use App\Http\Controllers\homecontroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\logincontroller;
use App\Http\Controllers\lowongancontroller;
use App\Http\Controllers\pilihcontroller;
use App\Http\Controllers\registercontroller;
use App\Http\Controllers\MahasiswaController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\registeragensiController;
use App\Http\Controllers\customerscontroller;
use App\Http\Controllers\kontrakcontroller;

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

// Route::get('/register_agen', [registercontroller::class, 'agen']);
// Route::get('/register_customer', [registercontroller::class, 'customer']);
// Route::resource('agens', agencontroller::class);

//admin
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/about', [aboutuscontroller::class, 'index']);

Route::resource('mahasiswas', MahasiswaController::class);
Route::resource('lowongans', lowongancontroller::class);

Route::resource('daftaragensi', registeragensiController::class);

//customer

Route::resource('customers', customerscontroller::class);

Route::get('/aboutcustomers', [customerscontroller::class, 'about']);
Route::resource('kontrak1', kontrakcontroller::class);
Route::get('kontrak', [customerscontroller::class, 'kontrak'])->name('kontrak');

//ART
Route::resource('daftarart', artcontroller::class);
Route::get('profil', [artcontroller::class, 'profil']);
Route::resource('editart', artcontroller::class);
