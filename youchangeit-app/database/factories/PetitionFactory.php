<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\DecMaker;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Petition>
 */
class PetitionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $province = ["AG", "AL", "AN", "AO", "AR", "AP", "AT", "AV", "BA", "BT", "BL", "BN", "BG", "BI", "BO", "BZ", "BS","BR", "CA", "CL"];
        $areeInteresse = ["locale", "globale"];
        $status = ["attiva", "sospesa", "vinta"];

        return [
            //
            'titolo' => fake()->text(10),
            'descrizione' => fake()->text(100),
            'area_interesse' => fake()->randomElement($areeInteresse),
            'paese_interesse' => fake()->country(),
            'citta_interesse' => fake()->city(),
            'provincia_interesse' => fake()->randomElement($province),
            'img_url' => 'https://picsum.photos/id/'.fake()->randomNumber(2).'/200/300',
            'status' => fake()->randomElement($status),
            'user_id' => User::get()->random()->id,
            'category_id' => Category::get()->random()->id,
            'dec_maker_id' => DecMaker::get()->random()->id,
            'created_at' => fake()->dateTime()
        ];
    }
}
