<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;

class RoomReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::orderBy('id')->get();
        return view('admin.review.index', compact('reviews'));
    }
}
