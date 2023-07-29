<?php

namespace App\Models;

use App\Models\Game;
use App\Models\User;
use App\Models\Score;
use App\Models\Subscription;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Team extends Model
{
    use HasFactory;

    public function creator()
    {
        return $this->belongsTo(User::class, 'creator_id');
    }

    public function members()
    {
        return $this->belongsToMany(User::class, 'team_members');
    }

    public function subscriptions()
    {
        return $this->hasOne(Subscription::class);
    }

    public function games()
    {
        return $this->hasMany(Game::class, 'team1_id')->union($this->hasMany(Game::class, 'team2_id'));
    }

    public function scores()
    {
        return $this->hasMany(Score::class);
    }

}
