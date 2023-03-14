<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Mahasiswa;   // <-- Add this line


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mahasiswa>
 */
class MahasiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nim' => $this->faker->numberBetween(100000000000, 999999999999),
            'nama' => $this->faker->word,
            'kelas' => $this->faker->word,
            'jurusan' => $this->faker->word,
            'no_handphone' => $this->faker->numberBetween(100000000000, 999999999999),
            'email' => fake()->unique()->safeEmail(),
            'tanggal_lahir' => $this->faker->date('Y-m-d'),
            // BadMethodCallException: all to undefined method Database\Factories\MahasiswaFactory::unique()
            // 'nim' => $this->faker->unique()->numberBetween(100000000000, 999999999999),
            // 'no_handphone' => $this->faker->unique()->number_format(12),

        ];
    }
}
