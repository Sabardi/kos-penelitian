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

    public function index()
    {

        // // Ambil semua room yang dimiliki oleh property user yang login
        $bookings = Booking::whereHas('room.property', function ($query) {
            $query->where('user_id', Auth::id());
        })->with('room', 'user')->get();

        if (!$bookings) {
            return redirect()->route('owner.dashboard')->with('error', 'Anda sudah memiliki properti.');
        }
        // return $bookings;
        return view('owner.booking.index', compact('bookings'));
    }
    public function booking(Request $request, $room)
    {
        // return $request->all();
        // $authUser = Auth::user()->id;
        $orderNumber = 'ORD-' . now()->format('Ymd') . '-' . str_pad(Booking::max('id') + 1, 5, '0', STR_PAD_LEFT);
        $validated = $request->validate([
            // 'user_id' => 'required|exists:users,id',
            // 'room_id' => 'required|exists:rooms,id',
            'name' => 'required|string',
            'number' => 'required|string',
            'check_in' => 'required|date',
        ]);

        $validated['user_id'] = Auth::user()->id;;
        $validated['room_id'] = $room;
        $validated['order_number'] = $orderNumber;


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

        return redirect()->route('front.pesanan')->with('success', 'Booking berhasil!');
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
