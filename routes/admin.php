<?php

use App\Http\Controllers\Admin\AllRoomController;
use App\Http\Controllers\Admin\BookingController;
use App\Http\Controllers\Admin\ColaboratifFilteringController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\FacilyController;
use App\Http\Controllers\Admin\LocationController;
use App\Http\Controllers\Admin\PropertyController;
use App\Http\Controllers\Admin\RoomReviewController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function () {

    Route::get('/dashboard', DashboardController::class)->name('dashboard');
    Route::resource('/users', UserController::class);
    Route::resource('/property', PropertyController::class);
    Route::resource('property.rooms', AllRoomController::class);
    Route::resource('rooms', AllRoomController::class);
    Route::resource('rooms.boking', AllRoomController::class);
    Route::resource('/location', LocationController::class);
    Route::resource('/facility', FacilyController::class);

    Route::get('/owner', [UserController::class, 'owner'])->name('all.owner');
    Route::get('/rooms', [AllRoomController::class, 'allrooms'])->name('all.room');
    Route::get('/booking', [AllRoomController::class, 'allbooking'])->name('all.booking');

    Route::get('/booking-user', [BookingController::class, 'index'])->name('all.booking.user');
    Route::get('/rating/review', [RoomReviewController::class, 'index'])->name('all.review');

    Route::get('/colaboratif-filtering', [ColaboratifFilteringController::class, 'index'])->name('colaboratif.filtering');
    Route::get('/similarity', [ColaboratifFilteringController::class, 'similarity'])->name('colaboratif.filtering.similarity');
});
