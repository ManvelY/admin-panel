<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Member>
 */
class MemberFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'email' => fake()->unique()->safeEmail(),
            'firstName' => fake()->firstName(),
            'lastName' => fake()->lastName(),
            'slug' => fake()->slug(),
            'avatar' => fake()->imageUrl(0),
            'position' => fake()-> jobTitle(),
            'salary' => fake()-> numberBetween(100000,1000000),
            'gender' => fake()->randomElement(['male', 'female']),
            'age' => fake()->numberBetween(18,63),
            'startedAt' => fake()->date()
        ];
    }
}

