<?php

use App\Http\Controllers\control_authors;
use App\Http\Controllers\Control_home;
use App\Http\Controllers\control_news;
use App\Http\Controllers\tolController;
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
Route::get('/', [Control_Home::class, 'index']);

route::get('tol', [tolController::class, 'index']);


Route::get('/admin', [control_authors::class, 'index']);
Route::resource('admin', control_authors::class);
Route::get('/gambar/{image}', [control_authors::class, 'load_image']);
Route::get('/hapus/{id}', [control_authors::class, 'destroy']);
Route::get('/edit/{id}', [control_authors::class, 'edit']);
Route::get('/update/{id}', [control_authors::class, 'update']);

Route::get('/news', [control_news::class, 'index']);
Route::resource('news', control_news::class);
Route::get('/gambar/news/{image}', [control_news::class, 'load_image']);
Route::get('/hapus/news/{id}', [control_news::class, 'destroy']);


