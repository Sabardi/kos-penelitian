<?php

namespace Database\Factories;

use App\Models\Properties;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PropertyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = Properties::class;
    public function definition(): array
    {
        return [
            'name' => $this->faker->company, //kos kosana
            'description' => $this->faker->text, //description
            'type' => $this->faker->randomElement(['putri', 'putra', 'campur']), //type putri, putra, campur
            'time_period' => $this->faker->randomElement(['bulanan', 'harian', 'mingguan']), //time_period bulanan harian, mingguan
            'address' => $this->faker->address, //address alamat id
            'regency' => $this->faker->city, // daerah mataram
        ];
    }
}
