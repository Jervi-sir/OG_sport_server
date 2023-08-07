<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\MyGameController;
use App\Http\Controllers\ProfileController;

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

Route::prefix('myTeams')->group(function() {
    Route::get('list-all', [TeamController::class, 'getMyTeams'])->name('myTeams.all');     //[linked]
    Route::get('id/{team_id}', [TeamController::class, 'getThisTeam'])->name('myTeams.thisTeam');     //[no view]
    Route::get('membersSearch', [TeamController::class, 'searchMembers'])->name('myTeam.searchMembers');        //[api set]
    Route::post('invite-member', [TeamController::class, 'inviteMemeber'])->name('myTeam.inviteMember');        //[api set]
});

Route::prefix('myGames')->group(function() {
    Route::get('list-all', [MyGameController::class, 'getMyGames'])->name('myGames.all');     //[linked]
    Route::get('id/{game_id}/get-members', [MyGameController::class, 'getThisGameMembers'])->name('myGames.thisMembers');     //[]
    Route::get('membersSearch', [MyGameController::class, 'searchMembers'])->name('myTeam.searchMembers');        //[]
    Route::post('invite-member', [MyGameController::class, 'inviteMemeber'])->name('myTeam.inviteMember');        //[]
});

Route::prefix('games')->group(function() {
    Route::get('search-team', [GameController::class, 'searchTeam'])->name('games.searchTeam');     //[]
    Route::post('invite-team/{team_id}', [GameController::class, 'inviteTeam'])->name('games.inviteTeam');      //[]
    Route::get('create-game', [GameController::class, 'createGame'])->name('games.create');         //[]
    Route::get('store-game', [GameController::class, 'storeGame'])->name('games.store');            //[]
    Route::get('game-score/{game_id}', [GameController::class, 'gameScore'])->name('games.gameScore');          //[]
    Route::post('set-score/{game_id}', [GameController::class, 'setMyScore'])->name('games.setMyScore');        //[]
    Route::get('get-score', [GameController::class, 'getScore'])->name('games.getScore');           //[]
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/complete-registery', [ProfileController::class, 'completeRegsitery'])->middleware('auth')->name('completeRegistery');
Route::post('/complete-registery', [ProfileController::class, 'storeRegsitery'])->middleware('auth')->name('storeRegsitery');
require __DIR__.'/auth.php';

