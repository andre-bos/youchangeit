<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $comuni = ["Roma", "Milano", "Napoli", "Torino", "Palermo", "Genova", "Bologna", "Firenze", "Bari", "Catania","Venezia", "Verona", "Trieste", "Messina", "Padova", "Brescia", "Taranto", "Prato", "Modena", "Reggio Calabria"];
        $province = ["AG", "AL", "AN", "AO", "AR", "AP", "AT", "AV", "BA", "BT", "BL", "BN", "BG", "BI", "BO", "BZ", "BS","BR", "CA", "CL"];
        $indirizzi = ["Via Roma", "Corso Vittorio Emanuele", "Via Garibaldi", "Piazza del Popolo", "Via Nazionale", "Corso Umberto I", "Via Dante", "Piazza San Carlo", "Via Veneto", "Corso Buenos Aires", "Piazza della Repubblica", "Via Milano", "Corso Italia", "Via XX Settembre", "Piazza Duomo", "Via Po", "Corso Mazzini", "Via Marconi", "Piazza Matteotti", "Via Giuseppe Verdi"];
        $cap = ["00100", "20100", "80100", "10100", "90100", "30100", "50100", "40100", "60100", "70100", "12100", "16100", "34100", "26100", "50123"];
        $status = ["attivo", "sospeso"];
        $role = ["admin", "user"];

        return [
            'nome' => fake()->name(),
            'cognome' => fake()->lastName(),
            'email' => fake()->unique()->safeEmail(),
            'password' => static::$password ??= Hash::make('password'),
            'paese_residenza' => fake()->country(),
            'comune_residenza' => fake()->randomElement($comuni),
            'provincia_residenza' => fake()->randomElement($province),
            'citta_residenza' => fake()->city(),
            'indirizzo_residenza' => fake()->randomElement($indirizzi),
            'cap_residenza' => fake()->randomElement($cap),
            'num_civico' => fake()->buildingNumber(),
            'cellulare' => fake()->phoneNumber(),
            'img_url' => 'https://picsum.photos/id/'.fake()->randomNumber(2).'/200/300',
            'status' => fake()->randomElement($status),
            'role' => fake()->randomElement($role),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
