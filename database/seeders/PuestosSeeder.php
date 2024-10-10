<?php

namespace Database\Seeders;

use App\Models\puestos;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PuestosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        puestos::factory(10)->create();
    }
}
