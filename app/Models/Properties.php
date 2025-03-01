<?php

namespace App\Models;

use App\Enums\PeriodeKosEnum;
use App\Enums\TypeKosEnum;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Properties extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'name', 'description', 'type', 'time_period', 'address', 'regency'];

    public function periodeKosDescription(): Attribute
    {
        return Attribute::make(fn() => $this->time_period ? PeriodeKosEnum::getDescription((string) $this->time_period) : null);
    }

    public function typeKosDescription(): Attribute
    {
        return Attribute::make(fn() => $this->type ? PeriodeKosEnum::getDescription((string) $this->type) : null);
    }



    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function rooms()
    {
        return $this->hasMany(Room::class);
    }

    // public function locations()
    // {
    //     return $this->belongsToMany(Location::class, 'public_locations')
    //                 ->withPivot('distance');
    // }

    public function locations()
    {
        return $this->belongsToMany(Location::class, 'public_locations', 'property_id', 'location_id')->withPivot('distance');
    }

    // public function publicLocations()
    // {
    //     return $this->hasMany(PublicLocation::class);
    // }
}
