<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class CommentFactory extends Factory
{
    public function definition(): array
    {
        return [
            'content' => fake()->paragraph(2),
            'post_id' => fake()->numberBetween(1, 10),
        ];
    }
    public function unverified(): static
    {
        return $this->state(fn(array $attributes) => [
            //  'email_verified_at' => null,
        ]);
    }
}
