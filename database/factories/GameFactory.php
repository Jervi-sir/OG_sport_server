<?php

namespace Database\Factories;

use App\Models\Team;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Game>
 */
class GameFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'team1_id' => Team::inRandomOrder()->first()->id,
            'team2_id' => Team::inRandomOrder()->first()->id,
            'scheduled_date' => $this->faker->date(),
            'scheduled_time' => $this->faker->time(),
            'location' => $this->faker->city,
            'status' => $this->faker->randomElement(['scheduled', 'completed', 'cancelled']),
        ];
    }
}
