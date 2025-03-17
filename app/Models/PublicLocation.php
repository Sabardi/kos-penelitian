<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PublicLocation extends Model
{
    protected $fillable = ['property_id', 'location_id', 'distance'];

    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    public function scopeFilter($query, $params)
    {
        // search for budget item
        $query->when(@$params['keyword'], function ($query, $search) {
            $query->where('name', 'LIKE', "%{$search}%");
        });
    }
}
