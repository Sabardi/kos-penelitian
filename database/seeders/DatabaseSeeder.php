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
        // User::updateOrCreate(
        //     ['email' => 'admin@example.com'],
        //     [
        //     'name' => 'admin',
        //     'role' => 'admin',
        //     'password' => bcrypt('password'),
        //     ]
        // );

        $data = [
            ['admin', 'admin@example.com', NULL, '$2y$12$SvSsJyPYokQfgZmTNGSI0.7IBbnN/HSm56L44AOZZZeUrZcA0tI8S', 'admin', NULL, NULL, NULL, '2025-05-06 21:27:20', '2025-05-06 21:27:20'],
            ['Cahyo Latupono', 'cahyo-latupono@gmail.com', '2025-05-06 21:27:20', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, '6raieRp80ftnAa5PTRsCzHVnd3jsZMJwSYDm7L2yNppIRpuaL0ciJASDcPmA', '2025-05-06 21:27:21', '2025-05-06 21:27:21'],
            ['Muhammad Raditya Rajendra', 'gina-icha-kusmawati@gmail.com', '2025-05-06 21:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', '2', 'Kecamatan Selaparang', 'ZHpXoeYJy2kWIARMv8PAvP3BjIvkIzpyJL3SP78km1SJ4RX9qvt0EK7tQs3Y', '2025-05-06 21:27:21', '2025-05-06 22:21:31'],
            ['Zulfa Mandasari', 'zulfa-mandasari@gmail.com', '2025-05-06 21:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, 'pjjb1eBVJsMFucho1osiYruXn2yTMYCj36seyHR6UZaNol5AiONgQTuahSl0', '2025-05-06 21:27:21', '2025-05-06 21:27:21'],
            ['Damu Waluyo S.Kom', 'damu-waluyo-skom@gmail.com', '2025-05-06 21:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, 'ZkclZVhAn8OfbxEVDEUJ1bRSEfFXscW8Z5MGCwj0SKusTqYg81jNlngp31A6', '2025-05-06 21:27:21', '2025-05-06 21:27:21'],
            ['Clara Mardhiyah', 'clara-mardhiyah@gmail.com', '2025-05-06 21:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, 'Bdysm8NGBP', '2025-05-06 21:27:21', '2025-05-06 21:27:21'],
            ['Maria Astuti M.Kom.', 'maria-astuti-mkom@gmail.com', '2025-05-06 21:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, 'YPC7nrqRoBywJd5o4Q9Rhad13hOyJnxKcuWMl4nTkGrbcRx3tE28rGVxXVML', '2025-05-06 21:27:21', '2025-05-06 21:27:21'],
            ['Uchita Raina Pertiwi S.T.', 'uchita-raina-pertiwi-st@gmail.com', '2025-05-06 21:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, 'EaWjjTvMoSND3s6ZoKkJjl6NoLZ5HZ3dZUOQgoELVllRpujiaqZZSDSu1SLp', '2025-05-06 21:27:21', '2025-05-06 21:27:21'],
            ['Asirwada Iswahyudi', 'asirwada-iswahyudi@gmail.com', '2025-05-06 21:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, 'os0DZK8aDfPTUHY63smY7ou165BuFD9vknLDA1c1bkeSplUu8tVc9gQCWVGm', '2025-05-06 21:27:21', '2025-05-06 21:27:21'],
            ['Lidya Nasyiah', 'lidya-nasyiah@gmail.com', '2025-05-06 21:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, 'faYtIHbKbJNEBIA4Jyn0pzlZLb89yKQj1cBdUwBB1hfPW1LdelYdhBwL72Hc', '2025-05-06 21:27:21', '2025-05-06 21:27:21'],
            ['Marsito Mahendra', 'marsito-mahendra@gmail.com', '2025-05-06 21:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, 'jpEYzCqjU1UvwsQyvuPeceFo1hrkTyuBGGKjckCyJ0lXTKeyxhvP7ukVbJbH', '2025-05-06 21:27:21', '2025-05-06 21:27:21'],
            ['Aswani Nainggolan', 'aswani-nainggolan@gmail.com', '2025-05-06 21:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, 'OmF0EIMVTZqEdTu4Mj849yhTK3LomlKx9qZoszLWOAqwDXXQm12Xn48pgdXb', '2025-05-06 21:27:21', '2025-05-06 21:27:21'],
            ['Cawisadi Prayitna Siregar', 'cawisadi-prayitna-siregar@gmail.com', '2025-05-06 21:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, 'iwGvw38bjzOFiiLcDMpUhsTq1sFoWrm9MdboWfngOTUuccCF6jiN1dDbLSt0', '2025-05-06 21:27:21', '2025-05-06 21:27:21'],
            ['Nugraha Najmudin', 'nugraha-najmudin@gmail.com', '2025-05-06 21:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, 'M03NBmjEP8PFa7Yvaj8Nml2rBsTWXqcGub3Wyg6np9kiXIJDy7aZgSwFa6qf', '2025-05-06 21:27:21', '2025-05-06 21:27:21'],
            ['Mila Eka Agustina', 'mila-eka-agustina@gmail.com', '2025-05-06 21:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, 'XzFdqmox3AkeGwrPZptM4nS0htlhpqpYAP0XTFAwT7ekvmzU4bQHOUF0OG6J', '2025-05-06 21:27:21', '2025-05-06 21:27:21'],
            ['Karna Latupono', 'karna-latupono@gmail.com', '2025-05-06 21:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, 'z0rfGqSi4rInFmssLHtBZUAybciKBMJGHpvfwErsZzC1xsamDMj3IkciMtYO', '2025-05-06 21:27:21', '2025-05-06 21:27:21'],
            ['Nabila Maimunah Nasyidah', 'nabila-maimunah-nasyidah@gmail.com', '2025-05-06 21:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, 'BvDmeSU141', '2025-05-06 21:27:21', '2025-05-06 21:27:21'],
            ['Bagya Paiman Thamrin', 'bagya-paiman-thamrin@gmail.com', '2025-05-06 21:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, '1IaB4Hn71i', '2025-05-06 21:27:21', '2025-05-06 21:27:21'],
            ['Yunita Ana Nuraini', 'yunita-ana-nuraini@gmail.com', '2025-05-06 21:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, '2oDSthW0g8', '2025-05-06 21:27:21', '2025-05-06 21:27:21'],
            ['Raina Yuliarti', 'raina-yuliarti@gmail.com', '2025-05-06 21:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, 'uXsQKrbsWi', '2025-05-06 21:27:21', '2025-05-06 21:27:21'],
            ['Marsito Nababan', 'marsito-nababan@gmail.com', '2025-05-06 21:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, 'oXM3PbbPqQ', '2025-05-06 21:27:21', '2025-05-06 21:27:21'],
            ['Harsaya Teddy Mandala S.T.', 'harsaya-teddy-mandala-st@gmail.com', '2025-05-06 21:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, 'nQjloRqzdW', '2025-05-06 21:27:21', '2025-05-06 21:27:21'],
            ['Jabal Sitorus', 'jabal-sitorus@gmail.com', '2025-05-06 21:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, 'QYRZW5oyZL', '2025-05-06 21:27:21', '2025-05-06 21:27:21'],
            ['Patricia Winda Kusmawati', 'patricia-winda-kusmawati@gmail.com', '2025-05-06 21:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, 'vNB6B9ckUs', '2025-05-06 21:27:21', '2025-05-06 21:27:21'],
            ['Galak Maryadi S.Pd', 'galak-maryadi-spd@gmail.com', '2025-05-06 21:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, 'VzCErmqh5w', '2025-05-06 21:27:21', '2025-05-06 21:27:21'],
            ['Latika Rahmi Yuliarti S.Pt', 'latika-rahmi-yuliarti-spt@gmail.com', '2025-05-06 21:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, 'Vlc378eah0', '2025-05-06 21:27:21', '2025-05-06 21:27:21'],
            ['Vicky Puspita', 'vicky-puspita@gmail.com', '2025-05-06 21:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, 'gXBpmN32h8', '2025-05-06 21:27:21', '2025-05-06 21:27:21'],
            ['Eka Rahmawati', 'eka-rahmawati@gmail.com', '2025-05-06 21:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, 'kCr7Tgg3Ko', '2025-05-06 21:27:21', '2025-05-06 21:27:21'],
            ['Betania Tantri Aryani M.Ak', 'betania-tantri-aryani-mak@gmail.com', '2025-05-06 21:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, 'qwIuTVkb6c', '2025-05-06 21:27:21', '2025-05-06 21:27:21'],
            ['Hana Hartati', 'hana-hartati@gmail.com', '2025-05-06 21:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, 'stUPiRfWie', '2025-05-06 21:27:21', '2025-05-06 21:27:21'],
            ['Ella Rahayu', 'ella-rahayu@gmail.com', '2025-05-06 21:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, 'Wiv0Ftnk0j', '2025-05-06 21:27:21', '2025-05-06 21:27:21'],
            ['Edison Irawan S.Pd', 'edison-irawan-spd@gmail.com', '2025-05-06 21:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, 'ynZMW2Jxt5', '2025-05-06 21:27:21', '2025-05-06 21:27:21'],
            ['Ciaobella Puti Susanti S.T.', 'ciaobella-puti-susanti-st@gmail.com', '2025-05-06 21:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, 'CwVD8X0eXX', '2025-05-06 21:27:21', '2025-05-06 21:27:21'],
            ['Jagapati Widodo', 'jagapati-widodo@gmail.com', '2025-05-06 21:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, '8kQUVSL20N', '2025-05-06 21:27:21', '2025-05-06 21:27:21'],
            ['Ami Fujiati', 'ami-fujiati@gmail.com', '2025-05-06 21:27:21', '$2y$12$n244o3k9EBPqM7uvWP9S9OeJMGSctGniU9MidjdhZPUYWUilKzNA2', 'owner', NULL, NULL, 'jvGUDr1Q5P', '2025-05-06 21:27:21', '2025-05-06 21:27:21'],
            ['Zainul Fahmi', 'fahmisundel@gmail.com', NULL, '$2y$12$8Gc/5UFrCoF7lKLRbFUtbekwYFFMvmavjQyXHGLpIvx3B3M9M7mWy', 'tenant', '083894823865', 'Pringgarata lombok tengah', NULL, '2025-05-07 10:11:06', '2025-05-07 10:11:06'],
            ['adli naufal ramadhan', 'adliggh124@icloud.com', NULL, '$2y$12$q0Noh5YdMMGIjK7xkgpcveDr5hE1v9e0QYKCm0wc1MrB1mU8QlYkC', 'tenant', '087761145082', 'mataram lombok barat', NULL, '2025-05-07 10:14:59', '2025-05-07 10:14:59'],
            ['Puspita rini', 'rinip3578@gmail.com', NULL, '$2y$12$XPtB4omTnUh28yW4lJZatueXN3TjSRmIaKC2rEoXE0Q93m2MSVl4O', 'tenant', '081703538397', 'Karang ide 2', NULL, '2025-05-07 12:07:38', '2025-05-07 12:07:38'],
            ['Arjun', 'rekisrama76@gmail.com', NULL, '$2y$12$u5cMh.EHKXt/aYvqCSf30O3LDA60nv0.57KpgROUAeuRgTJCoooDi', 'tenant', '085333008902', 'Bagu', NULL, '2025-05-07 13:41:51', '2025-05-07 13:41:51']
        ];

        foreach( $data as $a ){
                  User::updateOrCreate($a);
        }
        $this->call([
            // UserOwnerSeeder::class,
            // UserTenantSeeder::class,
            LocationSeeder::class,
            FacilitySeeder::class,
            //     PropertySeeder::class,
            //     PublicLocationSeeder::class,
            //     UserSeeder::class,
        ]);
    }
}
