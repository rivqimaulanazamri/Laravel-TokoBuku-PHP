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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/buku', [App\Http\Controllers\BukuController::class, 'index'])->name('buku');

Route::get('/buku/create', [App\Http\Controllers\BukuController::class, 'create']);
Route::post('/buku', [App\Http\Controllers\BukuController::class, 'store'])->name('buku');

Route::get('buku/{id}/lihat', [App\Http\Controllers\BukuController::class, 'lihat']);

Route::get('buku/search', [App\Http\Controllers\BukuController::class, 'search'])->name('search');

Route::get('buku/{id}/edit', [App\Http\Controllers\BukuController::class, 'edit']);
Route::patch('buku/{id}', [App\Http\Controllers\BukuController::class, 'update']);

Route::delete('buku/{id}', [App\Http\Controllers\BukuController::class, 'destroy'])->name('buku');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');