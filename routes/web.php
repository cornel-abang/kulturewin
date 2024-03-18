<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\TicketController;
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
    Route::get('book/artist/{id}', 'showBookArtistFormPage')->name('book.artist.form');
    Route::post('book/artist/{id}', 'submitBookArtistForm');
    Route::get('artist/onboarding', 'showArtistOnboardingFormPage')->name('artist.onboarding');
    Route::post('artist/onboarding', 'submitArtistOnboardingForm');
    Route::get('event/{id}/ticket', 'buyEventTicket')->name('ticket.get');
    Route::get('event/{id}', 'getEvent')->name('event.get');
    Route::post('event/pay', 'initiatePayment')->name('event.pay');
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
        Route::get('ticket/{id}/stop-sale', 'stopTicketSale')->name('event.stopSale');
        Route::get('ticket/{id}/put-on-sale', 'putTicketOnSale')->name('event.putOnSale');
    });

    // Tickekts
    Route::controller(TicketController::class)
    ->group(function () {
        Route::get('ticket/create', 'createTicketForm')->name('ticket.create');
        Route::post('ticket/create', 'submitTicketForm');
        Route::get('tickets', 'ticketIndex')->name('ticket.index');
        Route::get('ticket/{id}/edit', 'fetchTicket')->name('ticket.edit');
        Route::post('ticket/{id}/edit', 'updateTicket');
        Route::get('ticket/{id}/delete', 'deleteTicket')->name('ticket.delete');
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

    // Artist
    Route::controller(ArtistController::class)
    ->prefix('artist')
    ->group(function () {
        Route::get('onboarded', 'artistIndex')->name('artist.index');
        Route::get('onboarded/{id}', 'getArtist')->name('artist.fetch');
        Route::get('booked', 'getBookedArtists')->name('artist.booked');
        Route::get('booking/{id}', 'getBooking')->name('booking.fetch');
    });

    // FAQ
    Route::controller(FAQController::class)
    ->prefix('faq')
    ->group(function () {
        Route::get('create', 'createFAQForm')->name('faq.create');
        Route::post('create', 'submitCreateFAQForm');
        Route::get('all', 'allFAQ')->name('faq.index');
        Route::get('{id}/edit', 'fetchFAQ')->name('faq.edit');
        Route::post('{id}/edit', 'updateFAQ');
        Route::get('{id}', 'deleteFAQ')->name('faq.delete');
    });
});

/* 
    Route::get('blog', function () {
        return view('blog-list');
    );
*/