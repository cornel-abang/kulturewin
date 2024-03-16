<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $title
 * @property string $youtube_link
 * @property string $fe_image
 * @property string $description
 * @property CarbonInterface $created_at
 * @property CarbonInterface $updated_at
 */
class Portfolio extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'youtube_link',
        'fe_image', 'description'
    ];
}
