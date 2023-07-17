<?php

use App\Http\Controllers\TmdbmoviesController;
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

Route::get('/dbconn', function () {
    return view('test_db');
});

Route::get('/fetchData', function () {
    return view('fetch');
});

Route::get('/fetch',[tmdbmoviesController::class,'fetchMovies']);
Route::get('/',[tmdbmoviesController::class,'showMovies']);
Route::get('/edit/{id}',[tmdbmoviesController::class,'editMovies']);
Route::get('/update/{id}',[tmdbmoviesController::class,'updateMovies']);
Route::get('/delete/{id}',[tmdbmoviesController::class,'removeMovies']);
