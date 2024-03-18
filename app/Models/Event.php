<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $title
 * @property string $event_date
 * @property string $event_img
 * @property string $description
 * @property string $tickets_on_sale
 * @property CarbonInterface $created_at
 * @property CarbonInterface $updated_at
 */
class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'event_date', 
        'event_img', 'description'
    ];

    protected $with = ['tickets'];

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }

    public function ticketsAlloted()
    {
        return $this->tickets->count();
    }

    public function ticketsSold()
    {
        return $this->tickets->filter(function($ticket)
        {
          return $ticket->sold_amount == $ticket->qty;
        });
    }

    public function amountSold()
    {
        return $this->ticketsSold()->sum('price');
    }

    public function isSoldOut()
    {
        return $this->ticketsAlloted() == $this->ticketsSold()->count() ? true:false;
    }
}
