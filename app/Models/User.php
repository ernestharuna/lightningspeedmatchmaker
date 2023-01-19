<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',

        'date_of_birth',
        'gender',
        'orientation',
        'relationship_status',
        'looking_for',

        'height',
        'weight',
        'body_type',
        'hair_color',
        'eye_color',
        'ethnicity',
        'religion',
        'zodiac_sign',

        'first_language',
        'second_language',
        'employed',
        'income',
        'profession',

        'pets',
        'smokes',
        'drinks',
        'drugs',
        'date_drug',
        'profile_pic',
        'country',
        'city',
        'extra'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function seek()
    {
        return $this->hasOne(Seek::class);
    }
}
