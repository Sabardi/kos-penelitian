<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\UserRoomInteractions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Ui\Presets\React;

class BookingController extends Controller
{

    public function index($property)
    {


        $bookings = Booking::whereHas('room', function ($query) use ($property) {
            $query->where('property_id', $property);
        })->with('room')->get();

        // return $bookings;
        return view('owner.booking.index', compact('bookings'));
    }
    public function booking(Request $request, $room)
    {
        // return $request->all();
        $authUser = Auth::user()->id;
        $validated = $request->validate([
            // 'user_id' => 'required|exists:users,id',
            // 'room_id' => 'required|exists:rooms,id',
            'name' => 'required|string',
            'number' => 'required|string',
            'check_in' => 'required|date',
        ]);

        $validated['user_id'] = $authUser;
        $validated['room_id'] = $room;

        $booking = Booking::create($validated);

        // Catat interaksi "booking"
        if (Auth::check()) {
            $userId = Auth::id();
            $interaction = UserRoomInteractions::firstOrNew([
                'user_id' => $userId,
                'room_id' => $validated['room_id'],
                'interaction_type' => 'booking',
            ]);

            // Nilai interaksi untuk booking (misalnya, bernilai 5)
            $interaction->interaction_value = ($interaction->interaction_value ?? 0) + 5;
            $interaction->save();
        }

        return redirect()->route('home')->with('success', 'Booking berhasil!');
    }

    public function updateStatus(Request $request, $id)
    {
        // Cari booking berdasarkan ID
        $booking = Booking::findOrFail($id);

        // Update status booking berdasarkan tombol yang diklik
        if ($request->status == 'accepted') {
            $booking->status = 'accepted';
        } elseif ($request->status == 'rejected') {
            $booking->status = 'rejected';
        }

        $booking->save();

        return redirect()->back()->with('success', 'Status booking berhasil diperbarui.');
    }
}
