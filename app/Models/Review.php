<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = ['room_id', 'user_id', 'booking_id', 'rating', 'comment'];

    public function room()
    {
        return $this->belongsTo(Room::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }

    // Event untuk update rating setelah review disimpan
    protected static function boot()
    {
        parent::boot();

        // Ketika review baru ditambahkan atau diperbarui
        static::saved(function ($review) {
            $review->updateRoomRating($review->room_id);
        });

        // Ketika review dihapus
        static::deleted(function ($review) {
            $review->updateRoomRating($review->room_id);
        });
    }

    // Fungsi untuk memperbarui rata-rata rating kamar
    public function updateRoomRating($roomId)
    {
        $averageRating = self::where('room_id', $roomId)->avg('rating');
        $room = Room::find($roomId);
        if ($room) {
            $room->rating = $averageRating;
            $room->save();
        }
    }
}
