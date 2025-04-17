<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserPreference extends Model
{
    protected $fillable = [
        'user_id', 'location', 'min_price', 'max_price', 'facilities', 'gender_type',
    ];


    protected $casts = [
        'facilities' => 'array',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
