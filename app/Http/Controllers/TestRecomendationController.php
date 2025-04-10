<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Room;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TestRecomendationController extends Controller
{
    public function showRecommendations(Request $request)
    {
        $user = Auth::user();

        if ($user) {
            // Cek apakah sudah ada rekomendasi sebelumnya
            $recommendations = Recommendation::where('user_id', $user->id)->first();

            if (!$recommendations) {
                // Jika belum ada rekomendasi, hitung rekomendasi berdasarkan Collaborative Filtering
                $recommendations = $this->generateRecommendations($user);

                // Simpan rekomendasi baru
                Recommendation::create([
                    'user_id' => $user->id,
                    'recommendations' => json_encode($recommendations),
                ]);
            }

            return view('recommendations', ['recommendations' => $recommendations]);
        } else {
            // Tampilkan rekomendasi berdasarkan sebelum login
            $recommendations = $this->generateRecommendations(null);
            return view('recommendations', ['recommendations' => $recommendations]);
        }
    }

    private function generateRecommendations($user = null)
    {
        // Implementasi Collaborative Filtering untuk menghasilkan rekomendasi
        $recommendations = [];

        // Jika user tersedia, lakukan User-Based atau Item-Based Filtering
        if ($user) {
            // Misalnya, hitung berdasarkan User-Based Filtering
            $userRatings = $this->getUserRatings($user);

            // Lakukan perhitungan kemiripan dan generate rekomendasi
            $recommendations = $this->getUserRecommendations($userRatings);
        } else {
            // Lakukan rekomendasi umum berdasarkan data kamar yang ada
            $recommendations = $this->getGeneralRecommendations();
        }

        return $recommendations;
    }

}
