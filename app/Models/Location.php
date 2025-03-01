<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable = ['name'];

    // public function properties()
    // {
    //     return $this->belongsToMany(Property::class, 'public_location')->withPivot('distance');
    // }

    // public function properties()
    // {
    //     return $this->belongsToMany(Properties::class, 'public_locations')
    //         ->withPivot('distance');
    // }

    public function properties()
    {
        return $this->belongsToMany(Properties::class, 'public_locations', 'location_id', 'property_id')->withPivot('distance');
    }


}
