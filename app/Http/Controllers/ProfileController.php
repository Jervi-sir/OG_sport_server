<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Models\Profile;
use App\Models\Position;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ProfileUpdateRequest;

class ProfileController extends Controller
{

    public function completeRegsitery() 
    {
        $user = Auth::user();
        if($user->hasCompletedRegistery == 1) {
            return redirect(RouteServiceProvider::HOME);
        }

        $positions = Position::all();
        $skills = Skill::all();

        foreach ($positions as $index => $position) {
            $data['positions'][$index] = [
                'id' => $position->id,
                'name' => $position->name,
            ];
        }

        foreach ($skills as $index => $skill) {
            $data['skills'][$index] = [
                'id' => $skill->id,
                'name' => $skill->name,
            ];
        }

        $data['user'] = [
            'name' => $user->name,
            'email' => $user->email,
        ];

        return view('auth.completeRegistery',[
            'user' => $data['user'],
            'positions' => $data['positions'],
            'skills' => $data['skills'],
        ]);
    }

    
    public function storeRegsitery(Request $request) 
    {
        $user = Auth::user();
        if($user->hasCompletedRegistery == 1) {
            return redirect(RouteServiceProvider::HOME);
        }

        $contact_details = $request->contact_details;

        $profile = new Profile();
        $profile->user_id = $user->id;
        $profile->position_id = $request->position_id;
        $profile->skill_id = $request->skill_id;
        $profile->skill_level = $request->skill_level;
        $profile->contact_details = $contact_details;
        $profile->save();

       // return view('auth.completeRegistery');
    }

    

    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
