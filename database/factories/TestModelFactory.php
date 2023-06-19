<?php

namespace Database\Factories;

use App\Models\TestModel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TestModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'email' => fake()->safeEmail(),
            'first_name' => fake()->firstName,
            'last_name' => fake()->lastName,
        ];
    }
}
