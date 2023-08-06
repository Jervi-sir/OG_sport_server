<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;
use App\Models\Team;

class GameController extends Controller
{

    public function searchTeam () {
        
    }
    // List all games
    public function index()
    {
        $games = Game::with(['team1', 'team2'])->get();
        return view('games.index', compact('games'));
    }

    // Show form to create a new game
    public function create()
    {
        $teams = Team::all();
        return view('games.create', compact('teams'));
    }

    // Store a new game
    public function store(Request $request)
    {
        $request->validate([
            'team1_id' => 'required|exists:teams,id',
            'team2_id' => 'required|exists:teams,id|different:team1_id',
            'game_date' => 'required|date',
        ]);

        $game = new Game;
        $game->team1_id = $request->team1_id;
        $game->team2_id = $request->team2_id;
        $game->game_date = $request->game_date;
        $game->save();

        return redirect()->route('games.index')
                         ->with('success', 'Game created successfully.');
    }

    // Show a single game
    public function show(Game $game)
    {
        return view('games.show', compact('game'));
    }

    // Show form to edit a game
    public function edit(Game $game)
    {
        $teams = Team::all();
        return view('games.edit', compact('game', 'teams'));
    }

    // Update a game
    public function update(Request $request, Game $game)
    {
        $request->validate([
            'team1_id' => 'required|exists:teams,id',
            'team2_id' => 'required|exists:teams,id|different:team1_id',
            'game_date' => 'required|date',
        ]);

        $game->team1_id = $request->team1_id;
        $game->team2_id = $request->team2_id;
        $game->game_date = $request->game_date;
        $game->save();

        return redirect()->route('games.index')
                         ->with('success', 'Game updated successfully.');
    }

    // Delete a game
    public function destroy(Game $game)
    {
        $game->delete();

        return redirect()->route('games.index')
                         ->with('success', 'Game deleted successfully.');
    }
}
