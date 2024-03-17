<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\OnboardArtistRequest;
use App\Models\Artist;

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

    public function showArtistOnboardingFormPage()
    {
        return view('artist-onboarding');
    }

    public function submitArtistOnboardingForm(OnboardArtistRequest $request)
    {
        $data = $request->validated();
        $data['photo'] = $this->uploadImage($request->photo);
        
        Artist::create($data);

        session()->flash('artist_onboarded', true);

        return redirect()->back();
    }
}
