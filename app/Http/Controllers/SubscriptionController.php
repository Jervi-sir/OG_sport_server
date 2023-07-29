<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscription;
use App\Models\Team;

class SubscriptionController extends Controller
{
    // List all subscriptions
    public function index()
    {
        $subscriptions = Subscription::with('team')->get();
        return view('subscriptions.index', compact('subscriptions'));
    }

    // Show form to create a new subscription
    public function create()
    {
        $teams = Team::all(); 
        return view('subscriptions.create', compact('teams'));
    }

    // Store a new subscription
    public function store(Request $request)
    {
        $request->validate([
            'team_id' => 'required|exists:teams,id',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
        ]);

        $subscription = new Subscription;
        $subscription->team_id = $request->team_id;
        $subscription->start_date = $request->start_date;
        $subscription->end_date = $request->end_date;
        $subscription->save();

        return redirect()->route('subscriptions.index')
                         ->with('success', 'Subscription created successfully.');
    }

    // Show a single subscription
    public function show(Subscription $subscription)
    {
        return view('subscriptions.show', compact('subscription'));
    }

    // Show form to edit a subscription
    public function edit(Subscription $subscription)
    {
        $teams = Team::all();
        return view('subscriptions.edit', compact('subscription', 'teams'));
    }

    // Update a subscription
    public function update(Request $request, Subscription $subscription)
    {
        $request->validate([
            'team_id' => 'required|exists:teams,id',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
        ]);

        $subscription->team_id = $request->team_id;
        $subscription->start_date = $request->start_date;
        $subscription->end_date = $request->end_date;
        $subscription->save();

        return redirect()->route('subscriptions.index')
                         ->with('success', 'Subscription updated successfully.');
    }

    // Delete a subscription
    public function destroy(Subscription $subscription)
    {
        $subscription->delete();

        return redirect()->route('subscriptions.index')
                         ->with('success', 'Subscription deleted successfully.');
    }
}
