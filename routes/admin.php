<?php

use App\Http\Controllers\Admin\AllRoomController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\FacilyController;
use App\Http\Controllers\Admin\LocationController;
use App\Http\Controllers\Admin\PropertyController;
use App\Http\Controllers\Admin\UserOwnertController;
use App\Http\Controllers\Admin\UserTenantController;
use Illuminate\Support\Facades\Route;


Route::middleware(['auth', 'role:admin'])->group(function () {

Route::get('/admin/dashboard', DashboardController::class)->name('dashboard');
Route::resource('/property', PropertyController::class);
Route::resource('property.rooms', AllRoomController::class);
Route::resource('/location', LocationController::class);
Route::resource('/facility', FacilyController::class);

Route::get('/rooms', [AllRoomController::class, 'allrooms'])->name('all.room');

// tanant
Route::resource('/user/tenant', UserTenantController::class);
Route::get('/user/tenant/room/booking', [UserTenantController::class, 'booking'])->name('tenant.all.booking');
Route::get('/user/tenant/room/review', [UserTenantController::class, 'review'])->name('tenant.all.review');

// ownership
Route::resource('/user/owner', UserOwnertController::class);
Route::get('/user/owner/room/booking', [UserTenantController::class, 'booking'])->name('owner.all.booking');
});
