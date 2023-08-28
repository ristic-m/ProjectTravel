<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Package>
 */
class PackageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'destination_id' => fake()->numberBetween(1, 12),
            'name' => fake()->word(),
            'start_date' => fake()->dateTimeBetween('+30 days', '+40 days'),
            'end_date' => fake()->dateTimeBetween('+50 days', '+60 days'),
            'price' => fake()->numberBetween(800, 2000),
            'description' => fake()->paragraph(40, true)
        ];
    }
}
