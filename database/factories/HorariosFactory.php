<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\horarios>
 */
class HorariosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'idhorario'=>fake()->randomNumber(),
            'noTrabajador'=>fake()->randomNumber(),
            'idPeriodo'=>fake()->randomNumber(),
            'Fecha'=>fake()->date()

        ];
    }
}
