<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Review;
use App\Models\User;
use Illuminate\Http\Request;

class UserTenantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::where('role', 'tenant')->get();

        return view('admin.users.tenant', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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

    public function booking()
    {
        $bookings = Booking::with('room.property', 'user')
            ->whereHas('room.property')
            ->orderBy('created_at', 'desc')
            ->paginate(100);

        return view('admin.booking', compact('bookings'));
    }

    public function review()
    {
        $reviews = Review::with('room', 'user')->orderBy('created_at', 'desc')
        ->get();
        return view('admin.review', compact('reviews'));
    }
}
