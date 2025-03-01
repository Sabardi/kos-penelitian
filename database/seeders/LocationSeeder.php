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
            'Kampus',
            'Kantor',
            'Kampus UMMAT',
            'Gacoan',
            'kampus, poltekkes mataram kampus B',
            'Dekat kampus universitas pendidikan mandalika',
            'Universitas Mataram',
            'Kampus unram',
            'Dekat dengan kampus universitas Mataram',
            'UIN MATARAM',
            'Kampus STKIP yapis dompu',
            'UIN Mataram',
            'Fakultas Kedokteran',
            'Pusat perbelanjaan dan kampus',
            'Kampus uniqhba',
            'Di tengah perumahan masyarakat',
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
