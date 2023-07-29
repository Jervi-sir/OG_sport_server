<?php

namespace Database\Factories;

use App\Models\Team;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Subscription>
 */
class SubscriptionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'team_id' => Team::inRandomOrder()->first()->id,
            'start_date' => $this->faker->date(),
            'end_date' => $this->faker->date(),
            'payment_status' => $this->faker->randomElement(['paid', 'unpaid']),
            'payment_details' => $this->faker->paragraph,
        ];
    }
}
