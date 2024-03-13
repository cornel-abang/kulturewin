<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('about-us', function () {
    return view('about');
});

Route::get('our-services', function () {
    return view('services');
});

Route::get('contact-us', function () {
    return view('contact');
});

Route::get('our-portfolio', function () {
    return view('portfolio');
});

Route::get('book-artist', function () {
    return view('book-artist');
});