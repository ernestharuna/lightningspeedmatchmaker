<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matches extends Model
{
    use HasFactory;

    protected $fillable = [
        'matchedUser_id',
        'match_info'
    ];

    public function user()
    {
        return $this->hasOne(User::class);
    }
}
