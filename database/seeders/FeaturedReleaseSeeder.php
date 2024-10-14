<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\FeaturedRelease;

class FeaturedReleaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FeaturedRelease::factory()->count(10)->create(); // Cambia 10 a la cantidad que necesites
    }
}
