<?php

use Illuminate\Support\Facades\Route;


Route::get('/tenant/dashboard', function () {
    return "tentan";
})->middleware('role:tenant'); // Hanya tenant yang bisa akses
