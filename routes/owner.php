<?php

use Illuminate\Support\Facades\Route;


Route::group(['middleware' => ['auth', 'role:owner']], function () {
    Route::get('/owner/dashboard', function () {
        return view('owner.dashboard');
    })->name('owner.dashboard');

    Route::get('/owner/rooms', function () {
        return view('owner.room.index');
    })->name('owner.rooms');


    Route::get('/owner/rooms/booking', function () {
        return view('owner.booking.index');
    })->name('owner.rooms.bookings');
    Route::get('/owner/rooms/review', function () {
        return view('owner.room.index');
    })->name('owner.rooms.reviews');
});
