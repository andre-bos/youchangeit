<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DecMaker>
 */
class DecMakerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $positions = ["Presidente", "Primo Ministro", "Segretario Generale delle Nazioni Unite", "Presidente del Parlamento", "Ministro", "Governatore", "Sindaco", "Ambasciatore", "Presidente di Commissione", "Rettore Universitario", "Direttore Generale", "Capo della Polizia", "Comandante delle Forze Armate", "Direttore Sanitario","Capo di Stato Maggiore", "Prefetto"];
        $entityTypes = ["individual", "institution"];

        return [
            //

            'nome' => fake()->name(),
            'cognome' => fake()->lastName(),
            'posizione' => fake()->randomElement($positions),
            'bio' => fake()->text(200),
            'img_url' => 'https://picsum.photos/id/'.fake()->randomNumber(2).'/200/300',
            'active' => $this->faker->boolean,
            'entity_type' => fake()->randomElement($entityTypes),
            'created_at' => fake()->dateTime()
        ];
    }
}
