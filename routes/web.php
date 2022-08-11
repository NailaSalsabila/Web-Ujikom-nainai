<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'ujikombisa@home')-> name('home');

Route::get('/login', 'ujikombisa@login')-> name('login');
Route::get('/detail/{produk}', 'ujikombisa@detail')->name('pelanggan.detail');