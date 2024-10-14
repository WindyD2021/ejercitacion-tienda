<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(ComicSeeder::class);
        $this->call(BookSeeder::class);
        $this->call(MangaSeeder::class);
        $this->call(BestSellerSeeder::class);
        $this->call(FeaturedReleaseSeeder::class);
        $this->call(MarvelItemSeeder::class);
    }
}
