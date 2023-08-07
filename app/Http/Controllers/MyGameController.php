<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyGameController extends Controller
{
    public function getMyGames() 
    {
        return view('captain.myGames');
    }
}
