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

        if(!$team) {
            return redirect()->route('team-registration');
        }

        return view('team.index', compact('team'));
    }
    
    public function create()
    {
        $team = Team::where('user_id', Auth::id())->first();

        if($team) {
            return redirect()->route('team.index');
        }

        return view('team.create');
    }
    
    public function show(Team $team)
    {
        dd($team->first());
    }

    public function store(Request $request)
    {
        $request->validate([
            'team_name' => 'required|string|max:255',
            'coach_name' => 'required|string|max:255'
        ]);

        $team = Team::create([
            'user_id' => Auth::id(),
            'team_name' => $request->team_name,
            'coach_name' => $request->coach_name
        ]);

        return redirect()->route('team.index')->with('success', 'Team registered successfully!');
    }
}
