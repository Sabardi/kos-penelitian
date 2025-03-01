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
            'WiFi Gratis',
            'Kolam Renang',
            'Parkir Luas',
            'AC',
            'Sarapan Gratis',
        ];

        foreach ($facilities as $facility) {
            Facility::updateOrCreate(
                ['name' => $facility],
                ['name' => $facility]
            );
        }
    }
}
