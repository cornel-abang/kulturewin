<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function showWelcomePage()
    {
        return view('welcome');
    }

    public function showAboutUsPage()
    {
        return view('about');
    }

    public function showOurServicesPage()
    {
        return view('services');
    }

    public function showContactUsPage()
    {
        return view('contact');
    }

    public function showPortfolioPage()
    {
        return view('portfolio');
    }

    public function showBookArtistPage()
    {
        return view('book-artist');
    }

    public function showBookArtistFormPage()
    {
        return view('book-artist-form');
    }
}
