<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'team_id' => 'required|integer',
            'players.player_name' => 'required|string|max:255',
            'players.jersey_number' => 'required|integer',
            'players.age' => 'required|integer',
            'players.position' => 'required|string|max:255'
        ]);

        $team = Team::where('id', $request->team_id)->first();

        if(!$team) {
            return response()->json([
                'message' => "Team not exists"
            ]);
        }

        $player = Player::create([
            'team_id' => $team->id,
            'player_name' => $request->player_name,
            'jersey_number' => $request->jersey_number,
            'age' => $request->age,
            'position' => $request->position,
            'is_captain_ball' => 0
        ]);

        return response()->json([
            'message' => "Player successfully added"
        ]);
    }
}