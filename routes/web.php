<?php

use App\Http\Controllers\Front\FronController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RekomendasiController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\TestRecomendationController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FronController::class, 'index'])->name('home');
Route::get('/semua-kamar-kos', [FronController::class, 'allroom'])->name('semua-kamar-kos');
Route::get('/rekomendasi-kamar-kos', [FronController::class, 'allrecommendedRoom'])->name('rekomendasi-kamar-kos');

Route::get('/room/{room}/{slug}', [FronController::class, 'show'])->name('front.detail');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/syarat-dan-ketentuan', function () {
    return view('syarat&ketentuan');
})->name('syarat&ketentuan');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/search', [SearchController::class, 'index'])->name('search');

Route::get('/rekomendasi', [RekomendasiController::class, 'index'])->name('rekomendasi');
Route::get('/rekomendasi/room', [RekomendasiController::class, 'recommendItemBased'])->name('recommend.ItemBased');
require __DIR__ . '/auth.php';
require __DIR__ . '/admin.php';
require __DIR__ . '/owner.php';
require __DIR__ . '/tenant.php';
