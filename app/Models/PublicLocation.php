<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PublicLocation extends Model
{
    protected $fillable = ['property_id', 'location_id', 'distance'];
}
