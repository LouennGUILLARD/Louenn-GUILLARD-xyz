<?php

namespace Database\Factories;

use Database\Samples\CategoriesSamples;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Categories>
 */
class CategoriesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word(),
            'track_count' => $this->faker->randomNumber(2),
        ];
    }

    public function sample()
    {
        return $this->state(function (array $attributes) {
            return app(CategoriesSamples::class)->collect()->random();
        });
    }
}
