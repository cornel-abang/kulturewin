<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use App\Http\Requests\EditEventRequest;
use App\Http\Requests\CreateEventRequest;

class EventController extends Controller
{
    public function createEventForm()
    {
        return view('dash.event.create');
    }

    public function submitEventForm(CreateEventRequest $request)
    {
        $image = $this->uploadImage($request->event_img);
        $data = $request->validated();
        $data['event_img'] = $image;

        Event::create($data);

        session()->flash('event_created', true);

        return redirect()->route('event.index');
    }

    public function eventIndex()
    {
        $events = Event::all();

        return view('dash.event.index', compact('events'));
    }

    public function fetchEvent(int $id)
    {
        $event = Event::find($id);

        return view('dash.event.edit', compact('event'));
    }

    public function updateEvent(int $id, EditEventRequest $request)
    {
        $event = Event::find($id);
        $data = $request->validated();
       
        if ($request->hasFile('event_image')) {
            $image = $this->uploadImage($request->event_image);
            $data['event_img'] = $image;
        }

        $event->update($data);

        session()->flash('event_updated', true);

        return redirect()->route('event.index');
    }

    public function deleteEvent(int $id)
    {
        $event = Event::find($id);
        $event->delete();

        session()->flash('event_deleted', true);

        return redirect()->route('event.index');
    }

    public function stopTicketSale(int $id)
    {
        $event = Event::find($id);
        $event->tickets_on_sale = false;
        $event->save();

        session()->flash('ticket_sales_stopped', true);

        return redirect()->back();
    }
    
    public function putTicketOnSale(int $id)
    {
        $event = Event::find($id);
        $event->tickets_on_sale = true;
        $event->save();

        session()->flash('ticket_put_sale', true);

        return redirect()->back();
    }
}
