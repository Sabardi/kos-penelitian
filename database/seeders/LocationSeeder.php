<?php

namespace Database\Seeders;

use App\Models\Location;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $locations = [
           'Universitas',
           'Pusat Perbelanjaan',
           'Tempat Ibadah',
           'Pasar Tradisional',
           'Kantor Pemerintahan',
        ];

        // foreach ($locations as $location) {
        //     Location::create([
        //         'name' => $location,
        //     ]);
        // }
        foreach ($locations as $location) {
            Location::updateOrCreate(
                ['name' => $location],
                ['name' => $location]
            );
        }
    }
}
