<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Eleve>
 */
class EleveFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "nom" => $this->faker->name(),
            "prenom" => $this->faker->lastName(),
            "age" => $this->faker->numberBetween(16,30),
            "etat" => $this->faker->boolean()
        ];
    }
}
