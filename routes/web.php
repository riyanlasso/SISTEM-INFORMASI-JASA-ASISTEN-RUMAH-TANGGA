<?php

use App\Http\Controllers\homecontroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\logincontroller;
use App\Http\Controllers\pilihcontroller;
use App\Http\Controllers\registercontroller;





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

Route::get('/', [logincontroller::class, 'index']);
Route::get('/pilih', [pilihcontroller::class, 'index']);
Route::get('/register_agen', [registercontroller::class, 'agen']);
Route::get('/register_customer', [registercontroller::class, 'customer']);
Route::get('/home', [homecontroller::class, 'index']);