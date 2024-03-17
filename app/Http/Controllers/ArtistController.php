<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Artist;

class ArtistController extends Controller
{
    public function artistIndex() 
    {
        $artists = Artist::all();

        return view('dash.artist.index', compact('artists'));
    }
}
