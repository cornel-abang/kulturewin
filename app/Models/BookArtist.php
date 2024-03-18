<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property integer $artist_id
 * @property string $message
 * @property string $book_date
 * @property string $book_name
 * @property string $book_email
 * @property string $book_phone
 * @property CarbonInterface $created_at
 * @property CarbonInterface $updated_at
 */
class BookArtist extends Model
{
    use HasFactory;

    protected $fillable = [
        'artist_id', 
        'message', 
        'book_date',
        'book_name',
        'book_email',
        'book_phone',
    ];
    protected $with = ['artist'];

    public function artist()
    {
        return $this->belongsTo(Artist::class);
    }
}
