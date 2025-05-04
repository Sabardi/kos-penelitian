<?php

namespace App\Console\Commands;

use App\Models\Review;
use App\Models\Room;
use App\Models\RoomSimilarity;
use Illuminate\Console\Command;

class GenerateRoomSimilarity extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:generate-room-similarity';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $rooms = Room::all();

        foreach ($rooms as $r1) {
            foreach ($rooms as $r2) {
                if ($r1->id >= $r2->id) continue;

                // Ambil rating user terhadap kedua room
                $ratings1 = Review::where('room_id', $r1->id)->pluck('rating', 'user_id');
                $ratings2 = Review::where('room_id', $r2->id)->pluck('rating', 'user_id');

                $sim = $this->cosineSimilarity($ratings1, $ratings2);

                // Simpan ke tabel similarity_room misalnya
                RoomSimilarity::updateOrCreate([
                    'room_id_1' => $r1->id,
                    'room_id_2' => $r2->id
                ], [
                    'similarity' => $sim
                ]);
            }
        }

        $this->info('Room similarity updated.');
    }

    private function cosineSimilarity($ratingsA, $ratingsB)
    {
        $dotProduct = 0;
        $magnitudeA = 0;
        $magnitudeB = 0;

        foreach ($ratingsA as $userId => $ratingA) {
            $ratingB = $ratingsB[$userId] ?? null;

            if ($ratingB !== null) {
                // Dot product (∑ A_i * B_i)
                $dotProduct += $ratingA * $ratingB;

                // Magnitude masing-masing vektor (∑ A_i^2 dan ∑ B_i^2)
                $magnitudeA += $ratingA ** 2;
                $magnitudeB += $ratingB ** 2;
            }
        }

        // Jika salah satu magnitude nol (tidak ada user yang memberi rating ke kedua room)
        if ($magnitudeA == 0 || $magnitudeB == 0) {
            return 0;
        }

        // Rumus cosine similarity
        return $dotProduct / (sqrt($magnitudeA) * sqrt($magnitudeB));
    }
}
