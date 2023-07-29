<?php

namespace App\Models;

use App\Models\Game;
use App\Models\Team;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Score extends Model
{
    use HasFactory;

    public function game()
    {
        return $this->belongsTo(Game::class);
    }

    public function team()
    {
        return $this->belongsTo(Team::class);
    }

}
