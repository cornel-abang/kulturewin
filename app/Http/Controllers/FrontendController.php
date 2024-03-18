<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use App\Http\Requests\BookArtistRequest;
use App\Http\Requests\OnboardArtistRequest;
use App\Models\BookArtist;
use App\Models\Event;

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
        $portfolios = Portfolio::all();

        return view('portfolio', compact('portfolios'));
    }

    public function showBookArtistPage()
    {
        $artists = Artist::all();

        return view('book-artist', compact('artists'));
    }

    public function showBookArtistFormPage(int $id)
    {
        $artist = Artist::find($id);

        return view('book-artist-form', compact('artist'));
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

    public function submitBookArtistForm(BookArtistRequest $request)
    {
        if ($this->artistIsBooked($request->artist_id, $request->book_date)) {
            return redirect()->back()
                ->withInput($request->validated())
                ->withErrors(['book_date' => 'Artist is already booked on this date']);
        }

        BookArtist::create($request->validated());

        session()->flash('artist_booked', true);

        return redirect()->back();
    }

    public function artistIsBooked(int $id, string $date)
    {
        return Artist::find($id)->isBookedOn($date);

    }

    public function buyEventTicket(int $id)
    {
        $event = Event::find($id);
    }
}
