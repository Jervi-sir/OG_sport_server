<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Game;
use App\Models\Role;
use App\Models\Team;
use App\Models\User;
use App\Models\Score;
use App\Models\Skill;
use App\Models\Profile;
use App\Models\Position;
use App\Models\Subscription;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        Role::factory()->count(3)->create();
        Skill::factory()->count(10)->create();
        Position::factory()->count(8)->create();

        User::factory()->count(500)->create();
        $roles = ['forward', 'midfield', 'defense', 'goalkeeper'];

        // Create teams
        Team::factory()->count(50)->create()->each(function ($team) use ($roles) {
            // Each team should have 8 members
            $members = User::inRandomOrder()->limit(8)->get();
            foreach ($members as $member) {
                $team->members()->attach($member->id, ['role' => $roles[array_rand($roles)]]);
            }
        });

        Profile::factory()->count(500)->create();

        Subscription::factory()->count(10)->create();

        Game::factory()->count(10)->create();

        Score::factory()->count(20)->create();
    }
}
