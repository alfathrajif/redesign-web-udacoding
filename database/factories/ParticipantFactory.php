<?php

namespace Database\Factories;

use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ParticipantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "name" => fake()->name(),
            "school" => fake()->company(),
            "program_id" => Arr::random([1, 2, 3, 4, 5]),
            "generation" => Arr::random(['Batch 2', 'Batch 5', 'Batch 9']),
            "score" => fake()->randomNumber(4, false)
        ];
    }
}
