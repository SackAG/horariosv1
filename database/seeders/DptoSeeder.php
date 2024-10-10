<?php

namespace Database\Seeders;

use App\Models\Carrera;
use App\Models\Dpto;
use Illuminate\Database\Seeder;
use Database\Factories\DptoFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DptoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Dpto::factory(1)->has(
            Carrera::factory()->count(3)
        )->create();
    }
}
