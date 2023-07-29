<?php

namespace Database\Factories;

use App\Models\Position;
use App\Models\Role;
use App\Models\Skill;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => bcrypt('password'),

            'position_id' => Position::inRandomOrder()->first()->id,
            
            'role_id' => Role::inRandomOrder()->first()->id,
            'skill_id' => Skill::inRandomOrder()->first()->id,
            'skill_level' => $this->faker->numberBetween(1, 10),
            'contact_details' => $this->faker->paragraph,
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
