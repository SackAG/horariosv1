<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\puestos>
 */
class PuestosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'puestos'=>fake()->randomNumber(null,10),
            'nombre'=>fake()->name(),
            'tipo'=>fake()->jobTitle()
        ];
    }
}
