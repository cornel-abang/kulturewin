<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property string $brand
 * @property string $email
 * @property string $phone
 * @property string|null $reasons
 * @property string $message
 * @property CarbonInterface $created_at
 * @property CarbonInterface $updated_at
 */
class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'brand',
        'email', 'phone',
        'reasons', 'message'
    ];
}
