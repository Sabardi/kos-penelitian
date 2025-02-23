<?php

use Illuminate\Support\Facades\Route;

Route::get('/admin/dashboard', function () {
    return "admin";
})->middleware('role:admin');

// Route::get('/admin/users', function () {
//     return view('admin.users');
// })->middleware('role:admin');

// Route::get('/admin/roles', function () {
//     return view('admin.roles');
// })->middleware('role:admin');

// Route::get('/admin/permissions', function () {
//     return view('admin.permissions');
// })->middleware('role:admin');

// Route::get('/admin/logs', function () {
//     return view('admin.logs');
// })->middleware('role:admin');

// Route::get('/admin/settings', function () {
//     return view('admin.settings');
// })->middleware('role:admin');

// Route::get('/admin/tenants', function () {
//     return view('admin.tenants');
// })->middleware('role:admin');

// Route::get('/admin/subscriptions', function () {
//     return view('admin.subscriptions');
// })->middleware('role:admin');

// Route::get('/admin/invoices', function () {
//     return view('admin.invoices');
// })->middleware('role:admin');

// Route::get('/admin/payments', function () {
//     return view('admin.payments');
// })->middleware('role:admin');

// Route::get('/admin/refunds', function () {
//     return view('admin.refunds');
// })->middleware('role:admin');

// Route::get('/admin/transactions', function () {
//     return view('admin.transactions');
// })->middleware('role:admin');
