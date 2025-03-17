<?php

use App\Http\Controllers\Front\FronController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// })->name('home');


Route::get('/', [FronController::class, 'index'])->name('home');
Route::get('/semua-kamar-kos', [FronController::class, 'allroom'])->name('semua-kamar-kos');
Route::get('/rekomendasi-kamar-kos', [FronController::class, 'allrecommendedRoom'])->name('rekomendasi-kamar-kos');

Route::get('/room/{room}/{slug}', [FronController::class, 'show'])->name('front.detail');

Route::get('/storage-link', function () {
    Artisan::call('storage:link');
    return 'Storage link has been created successfully!';
});


Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/syarat-dan-ketentuan', function () {
    return view('syarat&ketentuan');
})->name('syarat&ketentuan');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified', 'role:owner'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/search', [SearchController::class, 'index'])->name('search');

require __DIR__ . '/auth.php';
require __DIR__ . '/admin.php';
require __DIR__ . '/owner.php';
require __DIR__ . '/tenant.php';
