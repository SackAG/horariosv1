<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dpto>
 */
class DptoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $titulo=fake()->unique()->jobTitle();
        return [
            'idDpto'=>fake()->unique()->bothify('?#'),
            'nombreDpto'=>$titulo,
            'nombreMid'=>fake()->unique()->lexify(str_repeat('?',15)),
            'nombreCorto'=>substr($titulo,0,5)
        ];
    }
}
