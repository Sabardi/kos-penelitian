<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Room;
use App\Models\Similarity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RekomendasiController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        if (!$user) return redirect('/login');

        $userRatings = Review::where('user_id', $user->id)->pluck('rating', 'room_id');

        $similarUsers = Similarity::where('user_id_1', $user->id)
            ->orWhere('user_id_2', $user->id)
            ->orderByDesc('similarity')
            ->get();

        $rekomendasi = [];

        foreach ($similarUsers as $sim) {
            $otherId = $sim->user_id_1 == $user->id ? $sim->user_id_2 : $sim->user_id_1;
            $otherRatings = Review::where('user_id', $otherId)->get();

            foreach ($otherRatings as $rating) {
                // Jika user belum rating kos ini
                if (!isset($userRatings[$rating->room_id])) {
                    if (!isset($rekomendasi[$rating->room_id])) {
                        $rekomendasi[$rating->room_id] = [
                            'score' => 0,
                            'totalSim' => 0
                        ];
                    }

                    $rekomendasi[$rating->room_id]['score'] += $rating->rating * $sim->similarity;
                    $rekomendasi[$rating->room_id]['totalSim'] += $sim->similarity;
                }
            }
        }

        $final = [];

        foreach ($rekomendasi as $room_id => $data) {
            if ($data['totalSim'] > 0) {
                $predicted = $data['score'] / $data['totalSim'];
                $room = Room::find($room_id);
                if ($room) {
                    $final[] = [
                        'room_id' => $room,
                        'score' => round($predicted, 2)
                    ];
                }
            }
        }

        usort($final, fn($a, $b) => $b['score'] <=> $a['score']);

        // return $final;
        return view('rekomendasi.index', [
            'rekomendasi' => $final,
            'similarUsers' => $similarUsers
        ]);
    }
}
