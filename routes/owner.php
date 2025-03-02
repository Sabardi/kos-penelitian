<?php

use App\Http\Controllers\Front\BookingController;
use App\Http\Controllers\Owner\DashboardOwnerController;
use App\Http\Controllers\Owner\KosController;
use App\Http\Controllers\Owner\RoomController;
use App\Http\Controllers\Tenant\ReviewController;
use Illuminate\Support\Facades\Route;


Route::middleware(['auth', 'role:owner'])->group(function () {

    // Route::get('/owner/dashboard',DashboardOwnerController::class)
    // })->name('owner.dashboard');

    Route::get('/owner/dashboard', DashboardOwnerController::class)->name('owner.dashboard');

    Route::get('/owner/rooms/booking', function () {
        return view('owner.booking.index');
    })->name('owner.rooms.bookings');
    Route::get('/owner/rooms/review', function () {
        return view('owner.room.index');
    })->name('owner.rooms.reviews');

    Route::get('/register/kos', [KosController::class, 'showFillKosForm'])->name('owner.fill-kos');
    Route::post('/store/kos', [KosController::class, 'store'])->name('owner.save-kos');
    Route::get('/edit/kos/{property}', [KosController::class, 'showEditKosForm'])->name('owner.edit-kos');
    Route::put('/update/kos/{property}', [KosController::class, 'update'])->name('owner.update-kos');

    // booking
    Route::get('/booking/{property}', [BookingController::class, 'index'])->name('owner.booking');
    Route::post('/bookings/{id}/update-status', [BookingController::class, 'updateStatus'])->name('bookings.updateStatus');


    // room
    Route::get('/owner/rooms/{property}', [RoomController::class, 'index'])->name('owner.rooms');
    Route::get('/rooms/create/{property}', [RoomController::class, 'create'])->name('owner.room.create');
    Route::post('/rooms/store/{property}', [RoomController::class, 'store'])->name('owner.room.store');
    Route::get('/rooms/property/{property}/edit/{room}', [RoomController::class, 'edit'])->name('owner.room.edit');
    Route::put('/rooms/property/{property}/update/{room}', [RoomController::class, 'update'])->name('owner.room.update');
    Route::delete('/rooms/property/{property}/delete/{room}', [RoomController::class, 'destroy'])->name('owner.room.delete');

    // Review
    Route::get('/review/{property}', ReviewController::class,)->name('owner.review');
});
