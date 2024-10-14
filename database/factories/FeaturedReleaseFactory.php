<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\FeaturedRelease>
 */
class FeaturedReleaseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(3),
            'description' => $this->faker->paragraph,
            'release_date' => $this->faker->date(),
            'image_url' => $this->faker->imageUrl(640, 480, 'nature', true), // Cambia 'nature' a tu gusto
        ];
    }
}
