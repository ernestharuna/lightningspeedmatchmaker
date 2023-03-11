<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matches extends Model
{
    use HasFactory;

    protected $fillable = [
        'matchedUser_id',
        'match_info',
        'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function matched_user()
    {
        return $this->belongsTo(User::class, 'matchedUser_id');
    }
}
