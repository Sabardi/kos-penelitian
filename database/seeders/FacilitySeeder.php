<?php

namespace Database\Seeders;

use App\Models\Facility;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FacilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $facilities = [
            'AC',
            'Kamar Mandi Dalam',
            'Dapur Bersama',
            'Keamanan 24 Jam',
            'Wifi',
            'kasur'
        ];

        foreach ($facilities as $facility) {
            Facility::updateOrCreate(
                ['name' => $facility],
                ['name' => $facility]
            );
        }
    }
}
