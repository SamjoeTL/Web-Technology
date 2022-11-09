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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Promo', function () {
    return view('Promo');
})->middleware(['auth', 'verified'])->name('Promo');

Route::get('/Guidy', function () {
    return view('Guidy');
})->middleware(['auth', 'verified'])->name('Guidy');

require __DIR__.'/auth.php';


