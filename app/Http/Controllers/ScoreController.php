<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;

class ScoreController extends Controller
{
    // Show form to create a new score
    public function create(Game $game)
    {
        return view('scores.create', compact('game'));
    }

    // Store a new score
    public function store(Request $request, Game $game)
    {
        $request->validate([
            'score' => 'required|string', // validate score format as per your need
        ]);

        $game->score = $request->score;
        $game->save();

        return redirect()->route('games.show', $game)
                         ->with('success', 'Score created successfully.');
    }

    // Show form to edit a score
    public function edit(Game $game)
    {
        return view('scores.edit', compact('game'));
    }

    // Update a score
    public function update(Request $request, Game $game)
    {
        $request->validate([
            'score' => 'required|string', // validate score format as per your need
        ]);

        $game->score = $request->score;
        $game->save();

        return redirect()->route('games.show', $game)
                         ->with('success', 'Score updated successfully.');
    }
}
