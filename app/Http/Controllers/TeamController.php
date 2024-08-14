<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Player;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeamController extends Controller
{
    public function index() {
        $team = Team::where('user_id', Auth::id())->first();
        return view('team.index', compact('team'));
    }
    
    public function create()
    {
        return view('team.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'team_name' => 'required|string|max:255',
            'coach_name' => 'required|string|max:255',
            'players.*.player_name' => 'required|string|max:255',
            'players.*.jersey_number' => 'required|integer',
            'players.*.age' => 'required|integer',
            'players.*.position' => 'required|string|max:255',
        ]);

        $team = Team::create([
            'user_id' => Auth::id(),
            'team_name' => $request->team_name,
            'coach_name' => $request->coach_name
        ]);

        foreach ($request->players as $player) {
            Player::create([
                'team_id' => $team->id,
                'player_name' => $player['player_name'],
                'jersey_number' => $player['jersey_number'],
                'age' => $player['age'],
                'position' => $player['position']
            ]);
        }

        $captainBall = Player::where('player_name', $request->players[0]['player_name'])->first();
        $captainBall->is_captain_ball = true;
        $captainBall->save();

        return redirect()->route('team.index')->with('success', 'Team registered successfully!');
    }
}
