<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use App\Models\BookArtist;

class ArtistController extends Controller
{
    public function artistIndex() 
    {
        $artists = Artist::all();

        return view('dash.artist.index', compact('artists'));
    }

    public function getArtist(int $id)
    {
        $artist = Artist::find($id);
        $artist->append('full_name');

        return response()->json(compact('artist'));
    }

    public function getBookedArtists()
    {
        $bookedArtists = BookArtist::all();

        return view('dash.artist.booked', compact('bookedArtists'));
    }

    public function getBooking(int $id)
    {
        $booking = BookArtist::find($id);
        // $booking->append('full_name');

        return response()->json(compact('booking'));
    }
}