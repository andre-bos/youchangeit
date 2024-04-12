<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $categorie = ["Ambiente", "Diritti umani", "Animali", "Salute", "Educazione", "Lavoro", "Giustizia", "Trasporti","Tecnologia", "Cultura", "Sviluppo sostenibile", "Politica", "Economia", "Immigrazione", "Sport"];
        return [
            //
            'nome' => $this->faker->unique()->randomElement($categorie),
            'descrizione' => fake()->sentence(),
            'img_url' => 'https://picsum.photos/id/'.fake()->randomNumber(2).'/200/300',
            'created_at' => fake()->dateTime()
        ];
    }
}
