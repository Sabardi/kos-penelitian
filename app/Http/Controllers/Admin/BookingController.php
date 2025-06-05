<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::with('user', 'room')
            ->select('room_id')
            ->distinct()
            ->with('room')
            ->get();
        return view('admin.booking.index', compact('bookings'));
    }
}
