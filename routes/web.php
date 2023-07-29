<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('myTeams')->middleware('auth')->group(function() {
    Route::get('list-all', [TeamController::class, 'getMyTeams'])->name('myTeams.all');
    Route::get('id/{team_id}/get-members', [TeamController::class, 'getThisTeamMembers'])->name('myTeams.thisMembers');
    Route::get('membersSearch', [TeamController::class, 'searchMembers'])->name('myTeam.searchMembers');
    Route::post('invite-member', [TeamController::class, 'inviteMemeber'])->name('myTeam.inviteMember');
});

Route::prefix('games')->middleware('auth')->group(function() {
    Route::get('search-team', [GameController::class, 'searchTeam'])->name('games.searchTeam');
    Route::post('invite-team/{team_id}', [GameController::class, 'inviteTeam'])->name('games.inviteTeam');
    Route::get('create-game', [GameController::class, 'createGame'])->name('games.create');
    Route::get('store-game', [GameController::class, 'storeGame'])->name('games.store');
    Route::get('game-score/{game_id}', [GameController::class, 'gameScore'])->name('games.gameScore');
    Route::post('set-score/{game_id}', [GameController::class, 'setMyScore'])->name('games.setMyScore');
    Route::get('get-score', [GameController::class, 'getScore'])->name('games.getScore');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


require __DIR__.'/auth.php';

