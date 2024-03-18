<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $question
 * @property string $answer
 * @property CarbonInterface $created_at
 * @property CarbonInterface $updated_at
 */
class FAQ extends Model
{
    use HasFactory;

    protected $fillable = ['question', 'answer'];
}
