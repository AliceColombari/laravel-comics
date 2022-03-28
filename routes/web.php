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

// HOME
Route::get('/', function () {
    $movie_array = config('comics');
    $data = ['movie_array' => $movie_array];
    return view('home', $data);
})->name('home');

// FILM
Route::get('/movie_details/{id}', function ($id) {
    $movie_array = config('comics');
    $movie_to_show = false;

    foreach($movie_array as $movie) {
        if($movie['id'] == $id) {
            $movie_to_show = $movie;
        }
    }
    if(!$movie_to_show) {
        abort('404');
    }

    $data = [
        'movie_to_show' => $movie_to_show
    ];

    return view('movie_details', $data);
})->name('movie-details');