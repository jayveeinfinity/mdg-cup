<?php

namespace App\Http\ViewComposers;

use App\Models\Team;
use Illuminate\Contracts\View\View;

class MyTeam {

    public function compose(View $view) {
        $authUser = auth()->user();
        if($authUser) {
            $myTeam = Team::where('user_id', $authUser->id)->first();

            $view->with('myTeam', $myTeam);
        }
    }
}