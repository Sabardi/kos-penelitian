<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
    protected $fillable = ['name'];

    public function rooms()
    {
        return $this->belongsToMany(Room::class, 'rooms_facilities')->withTimestamps();
    }

    public function scopeFilter($query, $params)
    {
        $query->when(@$params['facilities'], function ($query, $search) {
            $query->where('name', 'LIKE', "%{$search}%");
        });

        $query->when(@$params['keyword'], function ($query, $search) {
            $query->where('name', 'LIKE', "%{$search}%");
        });
    }
}
