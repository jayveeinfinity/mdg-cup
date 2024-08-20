<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Player;
use App\Models\PlayerImage;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class PlayerController extends Controller
{
    public function show(Player $player) {
        dd($player);
    }

    public function store(Request $request)
    {
        $request->validate([
            'team_id' => 'required|integer',
            'player_name' => 'required|string|max:255',
            'jersey_number' => 'required|integer',
            'age' => 'required|integer',
            'position' => 'required|string|max:255',
            'image' => 'required|image|max:5120', // 5MB max
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

        if ($request->hasFile('image') && $player->id > 0) {
            $image = $request->file('image');

            // Open the image file
            // $img = Image::make($image->getRealPath());

            // // Get the dimensions of the image
            // $width = $img->width();
            // $height = $img->height();

            // // Determine the size of the square (1:1 ratio)
            // $size = min($width, $height);

            // // Crop the image centered
            // $img->crop($size, $size, ($width - $size) / 2, ($height - $size) / 2);

            // // Optionally, resize the cropped image to a specific size (e.g., 500x500)
            // $img->resize(457, 539);

            $filename  = time().'.png';
            $image->storeAs('public/images/players', $filename);
            
            $filepath = 'storage/images/players/' . $filename;
            $filesize = $image->getSize();
            $filetype = 'image/jpeg';
    
            // Save image details to the database or perform other actions
            $player = PlayerImage::create([
                'player_id' => $player->id,
                'filename' => $filename,
                'filepath' => $filepath,
                'filetype' => $filetype,
                'filesize' => $filesize
            ]);
        }

        return response()->json([
            'message' => "Player successfully added!"
        ]);
    }
}