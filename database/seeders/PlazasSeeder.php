<?php

namespace Database\Seeders;

use App\Models\plazas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlazasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        plazas::factory(10)->create();
    }
}
