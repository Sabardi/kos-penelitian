<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Review;
use App\Models\Similarity;
use App\Models\User;
use Illuminate\Http\Request;

class ColaboratifFilteringController extends Controller
{
    // public function index()
    // {
    //     $reviews = Review::with('user', 'room')->get();
    //     return view('admin.dataReview', compact('reviews'));
    // }

    public function index()
    {
        // 1. Ambil semua review dengan relasi user dan room
        $reviews = Review::with('user', 'room')->get();

        // 2. Dapatkan daftar room unik dan urutkan berdasarkan nama
        // ->filter() digunakan untuk memastikan room tidak null sebelum di-pluck
        $rooms = $reviews->filter(function ($review) {
            return $review->room != null;
        })->pluck('room')->unique('id')->sortBy('name');

        // 3. Dapatkan daftar user unik dan urutkan berdasarkan nama
        // ->filter() digunakan untuk memastikan user tidak null sebelum di-pluck
        $users = $reviews->filter(function ($review) {
            return $review->user != null;
        })->pluck('user')->unique('id')->sortBy('id');

        // 4. Buat lookup table untuk ratings: $ratingsLookup[roomId][userId] = rating
        $ratingsLookup = [];
        foreach ($reviews as $review) {
            // Pastikan room dan user pada review tidak null
            if ($review->room && $review->user) {
                $ratingsLookup[$review->room->id][$review->user->id] = $review->rating;
            }
        }

        // 5. Kirim data ke view
        return view('admin.dataReview', compact('rooms', 'users', 'ratingsLookup'));
    }

    // public function similarity()
    // {
    //     $similarity = Similarity::all();

    //     return view('admin.similarity', compact('similarity'));
    // }

    public function similarity()
    {
        // 1. Ambil semua record similaritas dari tabel
        $similarityRecords = Similarity::all();
    
        // 2. Kumpulkan semua user ID yang unik dari kolom user_id_1 dan user_id_2
        $userIdsCollect = $similarityRecords->flatMap(function($record) {
            return [$record->user_id_1, $record->user_id_2];
        })->unique()->filter()->values();
    
        // 3. Ambil model User untuk setiap ID unik
        $uniqueUsers = User::whereIn('id', $userIdsCollect)
            ->orderBy('id')
            ->get()
            ->keyBy('id'); // Create a keyBy map for easier access
    
        // 4. Buat matriks similaritas, diindeks dengan ID pengguna
        $similarityMatrix = [];
    
        foreach ($similarityRecords as $record) {
            $u1_id = $record->user_id_1;
            $u2_id = $record->user_id_2;
    
            // Pastikan kedua user ID ada dalam daftar $uniqueUsers yang kita ambil
            if (!isset($uniqueUsers[$u1_id]) || !isset($uniqueUsers[$u2_id])) {
                continue;
            }
    
            $score = (float) $record->similarity; // Ambil skor dari kolom 'similarity'
    
            // Inisialisasi array dalam jika belum ada
            if (!isset($similarityMatrix[$u1_id])) {
                $similarityMatrix[$u1_id] = [];
            }
            if (!isset($similarityMatrix[$u2_id])) {
                $similarityMatrix[$u2_id] = [];
            }
    
            // Set score in both directions to ensure symmetry
            $similarityMatrix[$u1_id][$u2_id] = $score;
            $similarityMatrix[$u2_id][$u1_id] = $score;
        }
    
        // 5. Atur nilai diagonal matriks menjadi 1.00 (similaritas pengguna dengan dirinya sendiri)
        foreach ($uniqueUsers as $user) {
            $userId = $user->id;
            if (!isset($similarityMatrix[$userId])) {
                $similarityMatrix[$userId] = [];
            }
            $similarityMatrix[$userId][$userId] = 1.00;
        }
    
        // 6. Kirim data ke view
        return view('admin.similarity', compact('uniqueUsers', 'similarityMatrix'));
    }
}
