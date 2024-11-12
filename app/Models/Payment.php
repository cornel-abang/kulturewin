<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

// This class table is added directly to db
/**
 * @property int $id
 * @property string $ref
 * @property string $email
 * @property string $phone
 * @property integer $amount
 * @property integer $event_id
 * @property string $ticket_type
 * @property CarbonInterface $created_at
 * @property CarbonInterface $updated_at
 */
class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'event_id', 'ref', 
        'amount', 'email',
        'phone', 'ticket_type'
    ];

    public function event(): BelongsTo
    {
        return $this->belongsTo(Event::class);
    }
}
