<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class SocioFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
   // protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => fake()->numerify('##'),
            'nome' => fake()->name(),
            'cc' => fake()->numerify('##########'),
            'morada' => fake()->address(),
            'codigo_Postal' => fake()->numerify('##########'),
            'localidade' => fake()->address(),
            'email' => fake()->unique()->safeEmail(),
            'telefone' => fake()->numerify('##########'),
           


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
