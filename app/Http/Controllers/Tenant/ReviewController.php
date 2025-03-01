<?php

namespace App\Http\Controllers\Tenant;

use App\Http\Controllers\Controller;
use App\Models\Review;
use App\Models\Room;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, $property)
    {
        $roomsWithReviews = Room::where('property_id', $property)
            ->whereHas('reviews')
            ->with('reviews')
            ->get();

        return $roomsWithReviews;
    }
}
