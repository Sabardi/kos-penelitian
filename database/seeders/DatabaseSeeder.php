<?php

namespace Database\Seeders;

use App\Models\Facility;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        User::updateOrCreate(
            ['email' => 'admin@example.com'],
            [
            'name' => 'admin',
            'role' => 'admin',
            ]
        );

        $this->call([
            UserOwnerSeeder::class,
            UserTenantSeeder::class,
            LocationSeeder::class,
            FacilitySeeder::class,
        //     PropertySeeder::class,
        //     PublicLocationSeeder::class,
        //     UserSeeder::class,
        ]);


    }
}
