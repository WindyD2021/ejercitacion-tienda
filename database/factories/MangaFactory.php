<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Manga>
 */
class MangaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(3), // Un título de 3 palabras
            'description' => $this->faker->paragraph, // Descripción aleatoria
            'author' => $this->faker->name(), // Genera un nombre completo
            'price' => $this->faker->randomFloat(2, 1, 100), // Precio entre 1.00 y 100.00
            'number_pages' => $this->faker->numberBetween(50, 500), // Número de páginas entre 50 y 500
            'year_publication' => $this->faker->year, // Año aleatorio
            'month_publication' => $this->faker->numberBetween(1, 12), // Mes entre 1 y 12
            'collection' => $this->faker->word, // Nombre de una colección
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
