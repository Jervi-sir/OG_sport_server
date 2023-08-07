<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\User;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function getMyTeams()
    {
        return view('captain.myTeams');
    }

    public function getThisTeam()
    {
        return view('captain.thisTeam');
    }

    public function membersSearch(Request $request)
    {
        $user = User::all();

    }

    public function inviteMemeber(Request $request)
    {

    }


    //--------------------------------------------
    // List all teams
    public function index()
    {
        $teams = Team::with('members')->get();
        return view('teams.index', compact('teams'));
    }

    // Show form to create a new team
    public function create()
    {
        $users = User::all(); // You might want to select only users who are not in a team yet
        return view('teams.create', compact('users'));
    }

    // Store a new team
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'members' => 'required|array|min:8',
        ]);

        $team = new Team;
        $team->name = $request->name;
        $team->save();

        // Attach members to the team
        $team->members()->attach($request->members);

        return redirect()->route('teams.index')
                            ->with('success', 'Team created successfully.');
    }

    // Show a single team
    public function show(Team $team)
    {
        return view('teams.show', compact('team'));
    }

    // Show form to edit a team
    public function edit(Team $team)
    {
        $users = User::all(); // Again, you might want to select only users who are not in a team yet
        return view('teams.edit', compact('team', 'users'));
    }

    // Update a team
    public function update(Request $request, Team $team)
    {
        $request->validate([
            'name' => 'required',
            'members' => 'required|array|min:8',
        ]);

        $team->name = $request->name;
        $team->save();

        // Update team members
        $team->members()->sync($request->members);

        return redirect()->route('teams.index')
                            ->with('success', 'Team updated successfully.');
    }

    // Delete a team
    public function destroy(Team $team)
    {
        $team->delete();

        return redirect()->route('teams.index')
                            ->with('success', 'Team deleted successfully.');
    }
}
