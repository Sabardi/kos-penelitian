<?php

namespace App\Http\Controllers\Tenant;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TenantController extends Controller
{
    public function index()
    {

        $bookings = Booking::where('user_id', Auth::id())
            ->with('room.property', 'reviews')
            ->orderBy('created_at', 'desc')
            ->get();

        // return $bookings;
        return view('tenant.pesanan', compact('bookings'));
    }
}
