<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class TeamCreatorMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $team = Team::findOrFail($request->route('team_id'));

        if (Auth::id() !== $team->creator_id) {
            return redirect()->route('home')->withErrors('You are not authorized to perform this action.');
        }

        return $next($request);
    }
}
