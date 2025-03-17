<?php

namespace App\Models;

use App\Enums\AvibleRoomEnum;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Room extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'property_id',
        'availability',
        'count_visitor',
        'size',
        'price',
        'foto_room',
    ];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($room) {
            $room->slug = Str::slug($room->name); // Buat slug dari name
        });

        static::updating(function ($room) {
            $room->slug = Str::slug($room->name); // Perbarui slug jika name berubah
        });
    }


    public function scopeFilter($query, $params)
    {


        // Filter berdasarkan rentang harga
        $query->when(!empty($params['price']), function ($query) use ($params) {
            switch ($params['price']) {
                case '100k-500k':
                    $query->whereBetween('price', [100000, 500000]);
                    break;
                case '500k-1m':
                    $query->whereBetween('price', [500000, 1000000]);
                    break;
                case '1m-2m':
                    $query->whereBetween('price', [1000000, 2000000]);
                    break;
                case '2m+':
                    $query->where('price', '>=', 2000000);
                    break;
            }
        });
    }

    public function property()
    {
        return $this->belongsTo(Properties::class);
    }

    public function AvibleRoomDescription(): Attribute
    {
        return Attribute::make(fn() => $this->availability ? AvibleRoomEnum::getDescription((string) $this->availability) : null);
    }
    public function facilities()
    {
        return $this->belongsToMany(Facility::class, 'rooms_facilities')->withTimestamps();
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }

    public function interactions()
    {
        return $this->hasMany(UserRoomInteractions::class);
    }



    // Accessor untuk mendapatkan rata-rata rating
    public function getAverageRatingAttribute()
    {
        return $this->reviews()->avg('rating') ?? 0;
    }
}
