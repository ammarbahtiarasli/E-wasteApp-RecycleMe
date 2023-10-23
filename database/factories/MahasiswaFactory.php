<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mahasiswa>
 */
class MahasiswaFactory extends Factory
{

    public function definition(): array
    {
        return [
            'nama' => $this->faker->name(),
            'npm' => $this->faker->unique()->numerify('##########'),
            'email' => $this->faker->unique()->safeEmail(),
            'jurusan' => $this->faker->randomElement(['Teknik Informatika', 'Teknik Mesin', 'Teknik Elektro', 'Teknik Sipil']),
        ];
    }
}
