<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;

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

Route::controller(FrontendController::class)->group(function () {
    Route::get('/', 'showWelcomePage')->name('home');
    Route::get('about-us', 'showAboutUsPage')->name('about');
    Route::get('services', 'showOurServicesPage')->name('services');
    Route::get('contact', 'showContactUsPage')->name('contact');
    Route::get('portfolio', 'showPortfolioPage')->name('portfolio');
    Route::get('book/artist', 'showBookArtistPage')->name('book.artist');
    Route::get('book/artist-form', 'showBookArtistFormPage')->name('book.artist.form');
});

/* 
    Route::get('blog', function () {
        return view('blog-list');
    );
*/