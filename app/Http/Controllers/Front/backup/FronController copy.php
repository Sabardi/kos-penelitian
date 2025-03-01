<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Review;
use App\Models\Room;
use App\Models\UserRoomInteractions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FronController extends Controller
{

    public function index()
    {
        // rekomendasi
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

        $rooms = Room::with(['reviews', 'property', 'facilities'])
        ->withAvg('reviews', 'rating')
        ->where('availability', true)
        ->get();

        return view('welcome', compact('rooms', 'recommendedRooms'));
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

        // return $recommendedRooms;
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
        // $recommendedRooms = UserRoomInteractions::whereIn('user_id', $topUsers)
        //     ->whereNotIn('room_id', array_keys($currentUserVector))
        //     ->groupBy('room_id')
        //     ->orderByDesc(DB::raw('SUM(interaction_value)'))
        //     ->take(5)
        //     ->pluck('room_id');

        // return Room::whereIn('id', $recommendedRooms)->get();


        // Ambil kamar yang diminati oleh pengguna mirip tetapi belum diinteraksikan oleh pengguna saat ini
        $recommendedRoomIds = UserRoomInteractions::whereIn('user_id', $topUsers)
            ->whereNotIn('room_id', array_keys($currentUserVector))
            ->groupBy('room_id')
            ->orderByDesc(DB::raw('SUM(interaction_value)'))
            ->pluck('room_id');

        // Filter hanya kamar yang tersedia
        $availableRooms = Room::whereIn('id', $recommendedRoomIds)
            ->where('availability', true)
            ->take(5)
            ->get();

        return $availableRooms;
    }

    public function show(Room $room)
    {
        $cacheKey = 'visited_room_' . $room->id . '_' . request()->ip();

        if (!cache()->has($cacheKey)) {
            $room->increment('count_visitor');
            cache()->put($cacheKey, true, now()->addHours(1)); // Cache selama 1 jam
        }

        if (Auth::check()) {
            UserRoomInteractions::updateOrCreate(
                ['user_id' => Auth::id(), 'room_id' => $room->id, 'interaction_type' => 'view'],
                ['interaction_value' => DB::raw('interaction_value + 1')]
            );
        }

        return view('detail', [
            'room' => $room->load('reviews'),
            'reviews' => $room->reviews,
        ]);
    }




    public function search(Request $request)
    {
        // Ambil parameter pencarian dari request
        $location = $request->input('location');
        $type = $request->input('type');
        $priceRange = $request->input('price_range');

        // Query dasar untuk kamar yang tersedia
        $query = Room::where('availability', true);

        // Filter berdasarkan lokasi (nama kos atau alamat properti)
        if ($location) {
            $query->whereHas('property', function ($q) use ($location) {
                $q->where('name', 'like', "%$location%")
                    ->orWhere('address', 'like', "%$location%");
            });
        }

        // Filter berdasarkan jenis kos
        if ($type) {
            $query->whereHas('property', function ($q) use ($type) {
                $q->where('type', $type);
            });
        }

        // Filter berdasarkan harga
        if ($priceRange) {
            [$minPrice, $maxPrice] = explode('-', $priceRange);
            $query->whereBetween('price', [(int)$minPrice, (int)$maxPrice]);
        }

        // Ambil hasil pencarian
        $rooms = $query->with('property')->paginate(10);

        return $rooms;

        // Kirim hasil pencarian ke view
        return view('rooms.search', compact('rooms'));
    }
}
