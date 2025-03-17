<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {


        $property = Auth::user()->properties;

        if (!$property) {
            return redirect()->route('owner.dashboard')->with('error', 'Anda sudah memiliki properti.');
        }
        // Ambil semua ID kamar (rooms) yang dimiliki oleh property user
        $rooms = $property->rooms->pluck('id');


        // Ambil review yang hanya berasal dari kamar dalam property user
        $reviews = Review::whereIn('room_id', $rooms)->get();

        // return $reviews;

        return view('owner.review.index', compact('reviews'));
    }
}
