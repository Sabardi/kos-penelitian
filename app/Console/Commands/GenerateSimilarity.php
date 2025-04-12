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

                $ratings1 = Review::where('user_id', $u1->id)->pluck('rating', 'room_id');
                $ratings2 = Review::where('user_id', $u2->id)->pluck('rating', 'room_id');

                $sim = $this->cosineSimilarity($ratings1, $ratings2);

                Similarity::updateOrCreate(
                    ['user_id_1' => $u1->id, 'user_id_2' => $u2->id],
                    ['similarity' => $sim]
                );
            }
        }

        $this->info('Similarity updated.');
    }

    private function cosineSimilarity($a, $b)
    {
        $dot = 0; $magA = 0; $magB = 0;
        foreach ($a as $key => $valA) {
            $valB = $b[$key] ?? null;
            if ($valB !== null) {
                $dot += $valA * $valB;
                $magA += $valA ** 2;
                $magB += $valB ** 2;
            }
        }
        if ($magA == 0 || $magB == 0) return 0;

        return $dot / (sqrt($magA) * sqrt($magB));
    }
}
