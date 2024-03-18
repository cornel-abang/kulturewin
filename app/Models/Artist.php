<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $first_name
 * @property string $middle_name
 * @property string $last_name
 * @property string $stage_name
 * @property string $phone
 * @property string $email
 * @property string $dob
 * @property string $street
 * @property string $city
 * @property string $state
 * @property string $zip_code
 * @property string $country
 * @property bool $with_label
 * @property string|null $label_name
 * @property string $pro_affil
 * @property string|null $website
 * @property string|null $youtube
 * @property string|null $facebook
 * @property string|null $twitter
 * @property string|null $instagram
 * @property string|null $songs_url
 * @property string $photo
 * @property CarbonInterface $created_at
 * @property CarbonInterface $updated_at
 */
class Artist extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name', 'middle_name',
        'last_name', 'stage_name',
        'phone', 'email', 'dob',
        'street', 'city', 'state',
        'zip_code', 'country',
        'with_label', 'label_name',
        'pro_affil', 'website',
        'youtube', 'facebook',
        'twitter', 'instagram',
        'songs_url', 'photo'
    ];

    public function getFullNameAttribute()
    {
        return $this->attributes['first_name'].' '.
               $this->attributes['middle_name'].' '.
               $this->attributes['last_name'];
    }
}
