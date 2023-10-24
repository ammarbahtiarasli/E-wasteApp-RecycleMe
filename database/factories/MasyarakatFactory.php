<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Masyarakat>
 */
class MasyarakatFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => $this->faker->name(),
            'nohp' => $this->faker->unique()->numerify('##########'),
            'email' => $this->faker->unique()->safeEmail(),
            'alamat' => $this->faker->randomElement(['Jl. Alun - Alun Bandung', 'Jl. Setiabudhi', 'Jl. Soekarno Hatta', 'Jl. Dago']),
            'status' => $this->faker->randomElement(['belum disetujui', 'sudah disetujui', 'ditolak']),
        ];
    }
}
