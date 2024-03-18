<?php

namespace App\Http\Controllers;

use App\Models\Event;

class DashboardController extends Controller
{
    public function index() 
    {
        $events = Event::all();

        return view('dash.event.index', compact('events'));
    }
}
