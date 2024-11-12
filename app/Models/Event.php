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
        return $this->tickets->sum('qty');
    }

    public function ticketsSold()
    {
        return $this->tickets->sum('sold_amount');
    }

    public function amountSold()
    {
        return $this->tickets->sum(function ($ticket) {
            return $ticket->sold_amount * $ticket->price;
        });
    }

    public function isSoldOut()
    {
        $totalAlloted = $this->ticketsAlloted();
        $totalSold = $this->ticketsSold();

        return $totalAlloted > 0 && $totalAlloted == $totalSold;
    }

    public function expectedSales()
    {
        return $this->tickets->sum(function ($ticket) {
            return $ticket->price * $ticket->qty;
        });
    }

}
