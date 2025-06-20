<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Facility;
use App\Models\Review;
use App\Models\Room;
use App\Models\UserRoomInteractions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FronController extends Controller
{
    public function index(Request $request)
    {
        return $request;
        $userId = Auth::id();

        // Ambil pengguna yang paling mirip
        $topUsers = $this->getUserSimilarities($userId);
        $currentUserVector = $this->getCurrentUserVector($userId);

        // Ambil rekomendasi kamar
        $recommendedRooms = $this->getRecommendedRooms($topUsers, $currentUserVector)
            ->loadAvg('reviews', 'rating');

        // Ambil semua kamar yang tersedia dengan rating
        $rooms = Room::with(['reviews', 'property', 'facilities'])
            ->withAvg('reviews', 'rating')
            ->where('availability', true)
            ->get();


            $facilities = Facility::all();

        return view('welcome', compact('rooms', 'recommendedRooms', 'facilities'));
    }

    public function allroom()
    {
        $rooms = Room::with(['reviews', 'property', 'facilities'])->where('availability', true)->get();
        return view('allkos', compact('rooms'));
    }

    public function allrecommendedRoom()
    {
        $userId = Auth::id();

        // Ambil pengguna yang paling mirip
        $topUsers = $this->getUserSimilarities($userId);
        $currentUserVector = $this->getCurrentUserVector($userId);

        // Ambil rekomendasi kamar
        $recommendedRooms = $this->getRecommendedRooms($topUsers, $currentUserVector)
            ->loadAvg('reviews', 'rating');

            return view('recommendations', compact('recommendedRooms'));
    }

    public function recommendation()
    {
        $userId = Auth::id();

        $topUsers = $this->getUserSimilarities($userId);
        $currentUserVector = $this->getCurrentUserVector($userId);

        $recommendedRooms = $this->getRecommendedRooms($topUsers, $currentUserVector)
            ->loadAvg('reviews', 'rating');

        return view('recommendations.index', compact('recommendedRooms'));
    }

    private function getUserSimilarities($userId)
    {
        $userRoomMatrix = UserRoomInteractions::select('user_id', 'room_id', 'interaction_value')
            ->get()
            ->groupBy('user_id')
            ->mapWithKeys(fn($interactions, $userId) => [
                $userId => $interactions->pluck('interaction_value', 'room_id')->toArray(),
            ]);

        $currentUserVector = $userRoomMatrix[$userId] ?? [];
        $similarities = [];

        foreach ($userRoomMatrix as $otherUserId => $otherUserVector) {
            if ($otherUserId === $userId) continue;
            $similarities[$otherUserId] = $this->cosineSimilarity($currentUserVector, $otherUserVector);
        }

        arsort($similarities);
        return array_slice(array_keys($similarities), 0, 5);
    }

    private function getCurrentUserVector($userId)
    {
        return UserRoomInteractions::where('user_id', $userId)
            ->pluck('interaction_value', 'room_id')
            ->toArray();
    }

    private function cosineSimilarity($vectorA, $vectorB)
    {
        $dotProduct = 0;
        foreach ($vectorA as $key => $valueA) {
            $dotProduct += $valueA * ($vectorB[$key] ?? 0);
        }

        $normA = sqrt(array_sum(array_map(fn($x) => $x * $x, $vectorA)));
        $normB = sqrt(array_sum(array_map(fn($x) => $x * $x, $vectorB)));

        return ($normA == 0 || $normB == 0) ? 0 : $dotProduct / ($normA * $normB);
    }

    private function getRecommendedRooms($topUsers, $currentUserVector)
    {
        // Ambil daftar room_id terlebih dahulu
        $recommendedRoomIds = UserRoomInteractions::whereIn('user_id', $topUsers)
            ->whereNotIn('room_id', array_keys($currentUserVector))
            ->groupBy('room_id')
            ->orderByDesc(DB::raw('SUM(interaction_value)'))
            ->limit(5)
            ->pluck('room_id')
            ->toArray(); // Convert ke array agar bisa digunakan dalam whereIn()

        // Query untuk mengambil data Room
        return Room::whereIn('id', $recommendedRoomIds)
            ->where('availability', true)
            ->get();
    }


    public function show(Room $room)
    {
        $cacheKey = 'visited_room_' . $room->id . '_' . request()->ip();

        if (!cache()->has($cacheKey)) {
            $room->increment('count_visitor');
            cache()->put($cacheKey, true, now()->addHours(1));
        }

        if (Auth::check()) {
            UserRoomInteractions::updateOrCreate(
                ['user_id' => Auth::id(), 'room_id' => $room->id, 'interaction_type' => 'view'],
                ['interaction_value' => DB::raw('interaction_value + 1')]
            );
        }

        $reviews = $room->reviews()->with('user')->paginate(5);
        $title = $room->slug;
        // return $title;
        return view('detail', compact('room', 'reviews', 'title' ));
    }

    public function search(Request $request)
    {
        $query = Room::with('property')->where('availability', true);

        if ($location = $request->input('location')) {
            $query->whereHas(
                'property',
                fn($q) =>
                $q->where('name', 'like', "%$location%")
                    ->orWhere('address', 'like', "%$location%")
            );
        }

        if ($type = $request->input('type')) {
            $query->whereHas('property', fn($q) => $q->where('type', $type));
        }

        if ($priceRange = $request->input('price_range')) {
            [$minPrice, $maxPrice] = explode('-', $priceRange);
            $query->whereBetween('price', [(int)$minPrice, (int)$maxPrice]);
        }

        return view('rooms.search', ['rooms' => $query->paginate(10)]);
    }
}
