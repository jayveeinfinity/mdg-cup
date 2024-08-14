@extends('layouts.app')

@section('header-content')
<div class="banner banner1">
    <div class="inner-page-banner banner-bg">
        <div class="container">
            <div class="banner-content">
                <div class="page-path">
                    <ul>
                        <li><a class="home-page-link" href="/">Home</a></li>
                        <li><a class="current-page" href="#">Team</a></li>
                    </ul>
                </div>
                <h1 class="banner-heading">{{ $myTeam->team_name }}</h1>
            </div>
        </div>
    </div>
</div>
@endsection

@section('main-content')
<div class="container">
    <section class="p-5">
        <div class="rts-team-section inner section-gap">
            <div class="container">
                <div class="team-section-inner inner">
                    <div class="row">
                        @foreach($team->players()->get() as $player)
                        <div class="col-xl-3 col-md-4 col-sm-6">
                            <div class="team-wraper">
                                <div class="player-card">
                                    <a class="image" href="team-details.html"><img src="storage/images/players/default.png" alt=""></a>
                                    <div class="number">{{ toLongPos($player->position) }}</div>
                                    <!-- <ul class="social-area">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul> -->
                                </div>
                                <div class="profile">
                                    <p class="position">{{ $player->position }}</p>
                                    <a href="#" class="name text-uppercase">{{ $player->player_name }}</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection