<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlayerImage extends Model
{
    use HasFactory;
    
    protected $fillable = ['player_id', 'filename', 'filepath', 'filetype', 'filesize'];

    public function player()
    {
        return $this->belongsTo(Player::class);
    }
}
