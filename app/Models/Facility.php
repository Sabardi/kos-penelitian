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
        // Gabungkan pencarian berdasarkan fasilitas dan keyword dalam satu scope
        $query->when(@$params['facilities'], function ($query, $search) {
            $query->where('name', 'LIKE', "%{$search}%");
        })
        ->when(@$params['keyword'], function ($query, $search) {
            $query->orWhere('name', 'LIKE', "%{$search}%");
        });
    }

}
