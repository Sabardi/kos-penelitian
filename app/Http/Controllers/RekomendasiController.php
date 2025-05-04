<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Room;
use App\Models\RoomSimilarity;
use App\Models\Similarity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RekomendasiController extends Controller
{
    /**
     * Menampilkan daftar rekomendasi kamar untuk user yang sedang login
     * berdasarkan kemiripan rating dengan user lain (User-Based Collaborative Filtering).
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Ambil data user yang sedang login
        $user = Auth::user();

        // Jika belum login, redirect ke halaman login
        if (!$user) return redirect('/login');

        // Ambil rating kamar yang sudah diberikan oleh user ini
        // Format: [room_id => rating]
        $userRatings = Review::where('user_id', $user->id)->pluck('rating', 'room_id');

        // Ambil daftar user yang mirip dengan user ini dari tabel similarity
        // Disusun dari yang paling mirip ke yang paling tidak
        $similarUsers = Similarity::where('user_id_1', $user->id)
            ->orWhere('user_id_2', $user->id)
            ->orderByDesc('similarity')
            ->get();

        // Array untuk menyimpan skor prediksi rating kamar
        $rekomendasi = [];

        // Proses menghitung prediksi rating kamar berdasarkan user yang mirip
        foreach ($similarUsers as $sim) {
            // Tentukan user pembanding (bukan user yang sedang login)
            $otherId = $sim->user_id_1 == $user->id ? $sim->user_id_2 : $sim->user_id_1;

            // Ambil semua rating dari user pembanding
            $otherRatings = Review::where('user_id', $otherId)->get();

            foreach ($otherRatings as $rating) {
                // Jika user aktif belum pernah menilai kamar ini
                if (!isset($userRatings[$rating->room_id])) {
                    // Inisialisasi data jika belum ada
                    if (!isset($rekomendasi[$rating->room_id])) {
                        $rekomendasi[$rating->room_id] = [
                            'score' => 0,
                            'totalSim' => 0
                        ];
                    }

                    // Hitung skor prediksi menggunakan rumus:
                    // rating_user_lain * similarity
                    $rekomendasi[$rating->room_id]['score'] += $rating->rating * $sim->similarity;
                    $rekomendasi[$rating->room_id]['totalSim'] += $sim->similarity;
                }
            }
        }

        // Hitung prediksi akhir (rata-rata tertimbang)
        $final = [];

        foreach ($rekomendasi as $room_id => $data) {
            // Cegah pembagian nol
            if ($data['totalSim'] > 0) {
                $predicted = $data['score'] / $data['totalSim'];

                // Ambil data kamar dari database
                $room = Room::find($room_id);
                if ($room) {
                    $final[] = [
                        'room_id' => $room, // objek Room, bukan hanya ID
                        'score' => round($predicted, 2) // Bulatkan skor prediksi
                    ];
                }
            }
        }

        // Urutkan hasil rekomendasi berdasarkan skor tertinggi
        usort($final, fn($a, $b) => $b['score'] <=> $a['score']);

        // Kirim data ke view rekomendasi
        return view('rekomendasi.index', [
            'rekomendasi' => $final,
            'similarUsers' => $similarUsers // juga bisa ditampilkan untuk debugging
        ]);
    }




    public function recommendItemBased()
    {
        $user = Auth::user();
        if (!$user) return redirect('/login');

        // Ambil rating user saat ini
        $userRatings = Review::where('user_id', $user->id)->pluck('rating', 'room_id');

        $recommendations = [];

        // Untuk setiap room yang belum dirating user
        $allRooms = Room::all()->pluck('id');
        $unratedRooms = $allRooms->diff($userRatings->keys());

        foreach ($unratedRooms as $roomId) {
            $similarities = RoomSimilarity::where('room_id_1', $roomId)
                ->orWhere('room_id_2', $roomId)
                ->get();

            $score = 0;
            $totalSim = 0;

            foreach ($similarities as $sim) {
                // Tentukan id room pembanding
                $otherRoomId = $sim->room_id_1 == $roomId ? $sim->room_id_2 : $sim->room_id_1;

                // Cek apakah user pernah merating room pembanding
                if (isset($userRatings[$otherRoomId])) {
                    $simValue = $sim->similarity;
                    $userRating = $userRatings[$otherRoomId];

                    $score += $simValue * $userRating;
                    $totalSim += $simValue;
                }
            }

            if ($totalSim > 0) {
                $predictedScore = $score / $totalSim;
                $recommendations[] = [
                    'room' => Room::find($roomId),
                    'score' => round($predictedScore, 2)
                ];
            }
        }

        // Urutkan berdasarkan skor prediksi tertinggi
        usort($recommendations, fn($a, $b) => $b['score'] <=> $a['score']);

        return $recommendations;
        // return view('rekomendasi.item', [
        //     'recommendations' => $recommendations
        // ]);
    }
}
