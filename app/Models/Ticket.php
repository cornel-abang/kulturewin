<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 * @property integer $event_id
 * @property integer $qty
 * @property integer $price
 * @property integer $sold_amount
 * @property string $img_url
 * @property CarbonInterface $created_at
 * @property CarbonInterface $updated_at
 */
class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'event_id', 'qty', 
        'price', 'img_url', 
    ];

    public function event(): BelongsTo
    {
        return $this->belongsTo(Event::class);
    }
}
