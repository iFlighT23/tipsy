<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Step>
 */
class StepFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'step_number' => $this->faker->numberBetween(1,5),
            'step_desc' => $this->faker->word,
            'dose' => $this->faker->numberBetween(1,4),
            'ingredient_id' => $this->faker->numberBetween(1,28),
            'recipe_id' => $this->faker->numberBetween(1,100)
        ];
    }
}
