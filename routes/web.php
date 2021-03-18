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
    return view('pages/home');
});

Route::get('/about', function () {
    return view('pages/about');
});

Route::get('/fanclubs', function () {
    return view('pages/fanclubs');
});

Route::get('/my-profile', function () {
    return view('pages/my-profile');
});

Route::get('/create-fanclub', function () {
    return view('pages/create-fanclub');
});

Route::get('/fanclub', function () {
    return view('pages/fanclub-example');
});

// Quando visto por um owner
Route::get('/fanclub-owner', function () {
    return view('pages/fanclub-as-owner');
});

// Quando visto por um owner
Route::get('/event', function () {
    return view('pages/event');
});

