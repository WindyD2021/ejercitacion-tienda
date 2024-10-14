<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\BestSeller;

class BestSellerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BestSeller::factory()->count(10)->create(); // Cambia 10 a la cantidad que necesites
    }
}
