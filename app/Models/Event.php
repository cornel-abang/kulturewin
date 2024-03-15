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
}
