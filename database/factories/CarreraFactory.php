<?php

namespace Database\Factories;

use App\Models\Dpto;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Carrera>
 */
class CarreraFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $titulo=fake()->jobTitle();
        $idDpto=Dpto::factory()->create()->idDpto;
        return [
            'idCarrera'=>fake()->bothify('????####'),
            'nombreCarrera'=>$titulo,
            'nombreMid'=>fake()->lexify(str_repeat('?',15)),
            'nombreCorto'=>substr($titulo,0,5),
            'idDpto'=>$idDpto,
        ];
    }
}
