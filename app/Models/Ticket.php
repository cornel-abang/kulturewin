<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 * @property string $event_id
 * @property string $qty
 * @property string $price
 * @property CarbonInterface $created_at
 * @property CarbonInterface $updated_at
 */
class Ticket extends Model
{
    use HasFactory;

    protected $fillable = ['event_id', 'qty', 'price'];

    public function event(): BelongsTo
    {
        return $this->belongsTo(Event::class);
    }
}
