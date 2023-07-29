<?php

namespace Database\Factories;

use App\Models\Game;
use App\Models\Team;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Score>
 */
class ScoreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'game_id' => Game::inRandomOrder()->first()->id,
            'team_id' => Team::inRandomOrder()->first()->id,
            'score' => $this->faker->randomNumber(2),
            'confirmed' => $this->faker->boolean,
        ];
    }
}
