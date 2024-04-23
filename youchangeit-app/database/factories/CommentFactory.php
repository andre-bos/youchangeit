<?php

namespace Database\Factories;

use App\Models\Petition;
use App\Models\Signature;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //

            'approvato' => $this->faker->boolean,
            'contenuto' => fake()->text(200),
            'user_id' => User::get()->random()->id,
            'petition_id' => Petition::get()->random()->id,
            'signature_id' => Signature::factory(),
            'created_at' => fake()->dateTime()
        ];
    }
}
