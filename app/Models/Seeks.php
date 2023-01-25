<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seeks extends Model
{
    use HasFactory;

    protected $fillable = [
        'gender', 'sexual_orientation', 'height',
        'body_type', 'hair_color', 'eye_color', 'ethnicity',
        'religion', 'zodiac_sign', 'date_pet_owner', 'date_drug',
        'date_drink', 'date_smoker', 'income', 'profession'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
