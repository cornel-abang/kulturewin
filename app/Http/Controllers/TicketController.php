<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Ticket;
use App\Http\Requests\EditTicketRequest;
use App\Http\Requests\SubmitTicketRequest;

class TicketController extends Controller
{
    public function createTicketForm() 
    {
        $events = Event::all();

        return view('dash.ticket.create', compact('events'));
    }

    public function submitTicketForm(SubmitTicketRequest $request)
    {
        $data = $request->validated();
        $data['img_url'] = $this->uploadImage($request->img);
        Ticket::create($data);

        session()->flash('ticket_created', true);

        return redirect()->route('ticket.index');
    }

    function generateTicketNumber() {
        $number = mt_rand(1000000000, 9999999999);
    
        // call the same function if the barcode exists already
        if ($this->ticketNumberExists($number)) {
            return $this->generateTicketNumber();
        }
    
        return $number;
    }
    
    function ticketNumberExists($number) {
        // return User::whereBarcodeNumber($number)->exists();
    }

    public function ticketIndex()
    {
        $tickets = Ticket::all();

        return view('dash.ticket.index', compact('tickets'));
    }

    public function fetchTicket(int $id)
    {
        $events = Event::all();
        $ticket = Ticket::find($id);

        return view('dash.ticket.edit', compact('ticket','events'));
    }

    public function updateTicket(int $id, EditTicketRequest $request)
    {
        $ticket = Ticket::find($id);

        $ticket->update($request->validated());

        session()->flash('ticket_updated', true);

        return redirect()->route('ticket.index');
    }

    public function deleteTicket(int $id)
    {
        $ticket = Ticket::find($id);
        $ticket->delete();

        session()->flash('ticket_deleted', true);

        return redirect()->route('ticket.index');
    }
}
