<?php

namespace App\Console\Commands;

use App\Models\Review;
use App\Models\Similarity;
use App\Models\User;
use Illuminate\Console\Command;

class GenerateSimilarity extends Command
{
    protected $signature = 'similarity:generate';
    protected $description = 'Generate cosine similarity antar user';


    public function handle()
    {
        $users = User::where('role', 'tenant')->get();

        foreach ($users as $u1) {
            foreach ($users as $u2) {
                if ($u1->id >= $u2->id) continue; // Hindari duplikasi dan diri sendiri
                // Ambil rating yang diberikan user terhadap room (item)
                $ratings1 = Review::where('user_id', $u1->id)->pluck('rating', 'room_id');
                $ratings2 = Review::where('user_id', $u2->id)->pluck('rating', 'room_id');

                // Hitung cosine similarity untuk pasangan pengguna/user
                // $sim = $this->cosineSimilarity($ratings1, $ratings2);
                // Simpan skor kemiripan ke dalam tabel similarity/ jika sudah ada maka update
                Similarity::updateOrCreate(
                    ['user_id_1' => $u1->id, 'user_id_2' => $u2->id],
                    ['similarity' => $this->cosineSimilarity($ratings1, $ratings2)]
                    // ['similarity' => $sim]
                );
            }
        }

        $this->info('Similarity updated.');
    }

    private function cosineSimilarity($vectorA, $vectorB)
    {
        // dotItem = merupakan variable yang menyimpan rating
        $dotItem = 0;
        $magnitudeA = 0;
        $magnitudeB = 0;
        foreach ($vectorA as $key => $valA) {
            $valB = $vectorB[$key] ?? null;
            if ($valB !== null) {
                // Bagian atas (dot product): ∑ A_i * B_i
                $dotItem += $valA * $valB;
                // Bagian bawah: ∑ A_i^2 dan ∑ B_i^2
                // $magA += $valA * $valA;
                $magnitudeA += $valA ** 2;
                $magnitudeB += $valB ** 2;
            }
        }
        if ($magnitudeA == 0 || $magnitudeB == 0) return 0;

        // Rumus cosine similarity
        return $dotItem / (sqrt($magnitudeA) * sqrt($magnitudeB));
    }
}
