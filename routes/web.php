<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PortfolioController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::controller(AuthController::class)->group(function () {
    Route::get('login', 'showLoginForm')->name('login');
    Route::post('login', 'submitLoginForm');
});

Route::prefix('dashboard')
->middleware('auth:web')
->group(function () {
    // Dashboard
    Route::controller(DashboardController::class)
    ->group(function () {
        Route::get('/', 'index')->name('dash.index');
    });

    // Events
    Route::controller(EventController::class)
    ->group(function () {
        Route::get('event/create', 'createEventForm')->name('event.create');
        Route::post('event/create', 'submitEventForm');
        Route::get('events', 'eventIndex')->name('event.index');
        Route::get('event/{id}/edit', 'fetchEvent')->name('event.edit');
        Route::post('event/{id}/edit', 'updateEvent');
        Route::get('event/{id}/delete', 'deleteEvent')->name('event.delete');
    });

    // Portfolio
    Route::controller(PortfolioController::class)
    ->prefix('portfolio')
    ->group(function () {
        Route::get('create', 'createPortfolioForm')->name('portfolio.create');
        Route::post('create', 'submitPortfolioForm');
        Route::get('portfolio', 'portfolioIndex')->name('portfolio.index');
        Route::get('{id}/edit', 'fetchPortfolio')->name('portfolio.edit');
        Route::post('{id}/edit', 'updatePortfolio');
        Route::get('{id}/delete', 'deletePortfolio')->name('portfolio.delete');
    });
});

/* 
    Route::get('blog', function () {
        return view('blog-list');
    );
*/