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

    protected $with = ['ticket'];

    public function ticket()
    {
        return $this->hasOne(Ticket::class);
    }

    public function ticketsAlloted()
    {
        return $this->ticket?->qty ?? 0;
    }

    public function ticketsSold()
    {
        return $this->ticket?->sold_amount ?? 0;
    }

    public function amountSold()
    {
        return $this->ticketsSold() * $this->ticket?->price ?? 0;
    }

    public function isSoldOut()
    {
        if (
            $this->ticketsAlloted() == $this->ticketsSold() && 
            $this->ticketsAlloted() != 0
        ) {
            return true;
        }
        return false;
    }

    public function expecetedSales()
    {
        if ($this->ticket) {
            return $this->ticket->price * $this->ticket->qty;
        }
        return 0;
    }
}
