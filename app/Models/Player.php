<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;
    
    protected $fillable = ['team_id', 'player_name', 'jersey_number', 'age', 'position', 'is_captain_ball'];

    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}
