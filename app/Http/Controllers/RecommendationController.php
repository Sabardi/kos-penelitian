<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\UserRoomInteractions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RecommendationController extends Controller
{
    // public function recommend()
    // {
    //     // Ambil ID pengguna saat ini
    //     $userId = Auth::id();

    //     // Ambil semua interaksi pengguna dengan kamar
    //     $interactions = UserRoomInteractions::with('room')
    //         ->where('user_id', $userId)
    //         ->get();

    //     // Jika pengguna belum memiliki interaksi, tampilkan kamar secara acak
    //     if ($interactions->isEmpty()) {
    //         $recommendedRooms = Room::inRandomOrder()->take(5)->get();
    //         return view('recommendations.index', compact('recommendedRooms'));
    //     }

    //     // Buat matriks pengguna-kamar
    //     $userRoomMatrix = [];
    //     foreach ($interactions as $interaction) {
    //         $roomId = $interaction->room_id;
    //         $value = $interaction->interaction_value;

    //         if (!isset($userRoomMatrix[$roomId])) {
    //             $userRoomMatrix[$roomId] = 0;
    //         }
    //         $userRoomMatrix[$roomId] += $value;
    //     }

    //     // Temukan kamar yang paling relevan berdasarkan interaksi
    //     $topRoomIds = array_keys($userRoomMatrix, max($userRoomMatrix));
    //     $recommendedRooms = Room::whereIn('id', $topRoomIds)->get();

    //     return $recommendedRooms;

    //     return view('recommendations.index', compact('recommendedRooms'));
    // }


    public function recommend()
    {
        // Ambil ID pengguna saat ini
        $userId = Auth::id();

        // Ambil semua interaksi pengguna dengan kamar
        $userInteractions = UserRoomInteractions::where('user_id', $userId)->get();

        // Jika pengguna belum memiliki interaksi, tampilkan kamar secara acak
        if ($userInteractions->isEmpty()) {
            $recommendedRooms = Room::inRandomOrder()->take(5)->get();

            return $recommendedRooms;
            return view('recommendations.index', compact('recommendedRooms'));
        }

        // Buat matriks pengguna-kamar
        $userRoomMatrix = [];
        foreach ($userInteractions as $interaction) {
            $roomId = $interaction->room_id;
            $value = $interaction->interaction_value;

            if (!isset($userRoomMatrix[$roomId])) {
                $userRoomMatrix[$roomId] = 0;
            }
            $userRoomMatrix[$roomId] += $value;
        }

        // Temukan kamar yang paling relevan berdasarkan interaksi
        $topRoomIds = array_keys($userRoomMatrix, max($userRoomMatrix));

        // Ambil kamar yang mirip dengan kamar yang sudah diinteraksikan
        $similarRooms = $this->findSimilarRooms($topRoomIds);

        // Gabungkan hasilnya
        $recommendedRooms = Room::whereIn('id', $similarRooms)->get();

        return $recommendedRooms;

        // return view('recommendations.index', compact('recommendedRooms'));
    }

    private function findSimilarRooms($roomIds)
    {
        // Ambil semua interaksi untuk kamar-kamar tersebut
        $allInteractions = UserRoomInteractions::whereIn('room_id', $roomIds)->get();

        // Hitung similaritas antar kamar
        $similarityScores = [];
        foreach ($roomIds as $roomId) {
            $similarityScores[$roomId] = 0;
            foreach ($allInteractions as $interaction) {
                if ($interaction->room_id === $roomId) {
                    $similarityScores[$roomId] += $interaction->interaction_value;
                }
            }
        }

        // Urutkan berdasarkan skor similaritas
        arsort($similarityScores);

        // Ambil 5 kamar teratas
        return array_slice(array_keys($similarityScores), 0, 5);
    }




    public function recommendation()
    {
        // Ambil ID pengguna saat ini
        $userId = Auth::id();

        // Bangun matriks pengguna-kamar (hanya ambil interaksi yang relevan)
        $userRoomMatrix = UserRoomInteractions::select('user_id', 'room_id', 'interaction_value')
            ->get()
            ->groupBy('user_id')
            ->mapWithKeys(function ($interactions, $userId) {
                return [
                    $userId => $interactions->pluck('interaction_value', 'room_id')->toArray(),
                ];
            });

        // Ambil vektor interaksi pengguna saat ini
        $currentUserVector = $userRoomMatrix[$userId] ?? [];

        // return $currentUserVector;

        // Hitung similaritas dengan pengguna lain
        $similarities = [];
        foreach ($userRoomMatrix as $otherUserId => $otherUserVector) {
            if ($otherUserId === $userId) {
                continue; // Lewati diri sendiri
            }

            $similarity = $this->cosineSimilarity($currentUserVector, $otherUserVector);
            $similarities[$otherUserId] = $similarity;
        }

        // Urutkan pengguna berdasarkan similaritas tertinggi
        arsort($similarities);

        // return $similarities;

        // Ambil 5 pengguna teratas
        $topUsers = array_slice(array_keys($similarities), 0, 5);

        // return $topUsers;

        // Rekomendasikan kamar dari pengguna mirip
        $recommendedRooms = $this->getRecommendedRooms($topUsers, $currentUserVector);

        return $recommendedRooms;
        return view('recommendations.index', compact('recommendedRooms'));
    }

    private function cosineSimilarity($vectorA, $vectorB)
    {
        // Hitung dot product
        $dotProduct = 0;
        foreach ($vectorA as $key => $valueA) {
            $valueB = $vectorB[$key] ?? 0;
            $dotProduct += $valueA * $valueB;
        }

        // Hitung norma vektor A
        $normA = sqrt(array_sum(array_map(fn($x) => $x * $x, $vectorA)));

        // Hitung norma vektor B
        $normB = sqrt(array_sum(array_map(fn($x) => $x * $x, $vectorB)));

        // Hindari pembagian dengan nol
        if ($normA == 0 || $normB == 0) {
            return 0;
        }

        // Hitung cosine similarity
        return $dotProduct / ($normA * $normB);
    }

    private function getRecommendedRooms($topUsers, $currentUserVector)
    {
        // Ambil kamar yang diminati oleh pengguna mirip tetapi belum diinteraksikan oleh pengguna saat ini
        $recommendedRooms = UserRoomInteractions::whereIn('user_id', $topUsers)
            ->whereNotIn('room_id', array_keys($currentUserVector))
            ->groupBy('room_id')
            ->orderByDesc(DB::raw('SUM(interaction_value)'))
            ->take(5)
            ->pluck('room_id');

        return Room::whereIn('id', $recommendedRooms)->get();
    }
}
