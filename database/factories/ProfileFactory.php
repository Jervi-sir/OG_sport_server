<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Skill;
use App\Models\Position;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profile>
 */
class ProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::inRandomOrder()->first()->id,
            'position_id' => Position::inRandomOrder()->first()->id,
            'skill_id' => Skill::inRandomOrder()->first()->id,
            'skill_level' => $this->faker->numberBetween(1, 10),
            'contact_details' => $this->faker->paragraph,
        ];
    }
}
