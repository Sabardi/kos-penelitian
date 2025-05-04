<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RoomSimilarity extends Model
{
    protected $fillable = [
        'room_id_1',
        'room_id_2',
        'similarity',
    ];
       
}
