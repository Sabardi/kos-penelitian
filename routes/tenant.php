<?php

use App\Http\Controllers\Front\BookingController;
use App\Http\Controllers\Tenant\RateController;
use App\Http\Controllers\Tenant\TenantController;
use Illuminate\Support\Facades\Route;


Route::group(['middleware' => 'role:tenant'], function () {
    Route::get('/tenant/dashboard', function () {
        return "tentan";
    });


    Route::post('/rooms/booking/{room}', [BookingController::class, 'booking'])->name('front.booking');

    // pesanan / booking
    Route::get('/pesanan', [TenantController::class, 'index'])->name('front.pesanan');
    Route::get('/rating/room/{room}', [RateController::class, 'create'])->name('front.pesanan.rating');
    Route::post('/rating/room/{booking}/{room}', [RateController::class, 'store'])->name('front.rating.store');
});
