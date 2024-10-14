<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BestSeller>
 */
class BestSellerFactory extends Factory
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
            'price' => $this->faker->randomFloat(2, 10, 100), // Precio entre 10 y 100
            'image_url' => $this->faker->imageUrl(640, 480, 'books', true), // Cambia 'books' a tu gusto
        ];
    }
}
