<?php

use App\Http\Controllers\front\homepage;
use App\Http\Controllers\front\Posts;
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


// . Normal
Route::get('/', [homepage::class, 'index'])->name('home');


// . İletişim
Route::get('/contact', [homepage::class, 'contact'])->name('contact');

// . Kategori
Route::get('/kategori/{category}', [homepage::class, 'category'])->name('category');
Route::get('/{category}/{slug}', [homepage::class, 'single'])->name('single');

// . Sayfalar
Route::get('/{page}', [homepage::class, 'page'])->name('page');


// . Posts

Route::post('/contact',[Posts::class,'contact']);
