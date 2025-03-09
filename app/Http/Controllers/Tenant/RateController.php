<?php

namespace App\Http\Controllers\Tenant;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Review;
use App\Models\UserRoomInteractions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function create(Booking $booking, $room)
    {
        return view('tenant.review.review', compact('room', 'booking'));
    }

    public function storeRating(Request $request, $room)
    {
        $room->rating()->create([
            'rating' => $request->input('rating'),
            'user_id' => Auth::user()->id,
        ]);

        return redirect()->back()->with('success', 'Terima kasih atas penilaian Anda!');
    }

    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {
    //     //
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $booking, $room)
    {
        // return $request->all();
        $validated = $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'nullable|string|max:255',
        ]);

        $validated['booking_id'] = $booking;
        $validated['user_id'] = Auth::id();
        $validated['room_id'] = $room;
        Review::create($validated);

        if (Auth::check()) {
            $userId = Auth::id();
            $interaction = UserRoomInteractions::firstOrNew([
                'user_id' => $userId,
                'room_id' => $validated['room_id'],
                'interaction_type' => 'review',
            ]);

            // Nilai interaksi untuk review (misalnya, rating dikali 2)
            $interaction->interaction_value = ($interaction->interaction_value ?? 0) + ($validated['rating'] * 2);
            $interaction->save();
        }


        return 'ok';

        return back()->with('success', 'Rating berhasil dikirim!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
