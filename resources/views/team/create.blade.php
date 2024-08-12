@extends('layouts.app')

@section('header-content')
<div class="banner banner1 nfl">
    <div class="inner-page-banner banner-bg">
        <div class="container">
            <div class="banner-content">
                <div class="page-path">
                    <ul>
                        <li><a class="home-page-link" href="/">Home</a></li>
                        <li><a class="current-page" href="#">Team</a></li>
                    </ul>
                </div>
                <h1 class="banner-heading">TEAM REGISTRATION</h1>
            </div>
        </div>
    </div>
</div>
@endsection

@section('main-content')
<div class="container">
    <section class="p-5">
        <form action="{{ route('team.store') }}" method="POST">
            @csrf
            <div class="row mb-3">
                <div class="col-6">
                    <label for="team_name">Team Name:</label>
                    <input class="form-control form-control-lg" type="text" name="team_name" required>
                </div>
                <div class="col-6">
                    <label for="coach_name">Coach Name:</label>
                    <input class="form-control form-control-lg" type="text" name="coach_name" required>
                </div>
            </div>
            <h3>Players: <button type="button" class="btn btn-warning" id="addPlayer">Add Another Player</button></h3>
            <hr>
            <div class="mb-3" id="players">
                <h6>Captain Ball</h6>
                    <div class="row">
                        <div class="col-4">
                            <label label for="players[0][player_name]">Name:</label>
                            <input class="form-control form-control-lg" type="text" name="players[0][player_name]" required>
                        </div>
                        <div class="col-4">
                            <label for="players[0][position]">Position:</label>
                            <select class="form-control form-control-lg" name="players[0][position]" required>
                                <option value="" selected disabled>Choose position...</option>
                                <option value="PG">PG - Point Guard</option>
                                <option value="SG">SG - Shooting Guard</option>
                                <option value="SF">SF - Small Forward</option>
                                <option value="PF">PF - Power Forward</option>
                                <option value="C">C - Center</option>
                            </select>
                        </div>
                        <div class="col-2">
                            <label for="players[0][age]">Age:</label>
                            <input class="form-control form-control-lg" type="number" name="players[0][age]" required>
                        </div>
                        <div class="col-2">
                            <label for="players[0][jersey_number]">Jersey Number:</label>
                            <input class="form-control form-control-lg" type="number" name="players[0][jersey_number]" required>
                        </div>
                    </div>
                    <hr>
                <h6>Player#1</h6>
                <div class="row">
                    <div class="col-4">
                        <label label for="players[1][player_name]">Name:</label>
                        <input class="form-control form-control-lg" type="text" name="players[1][player_name]" required>
                    </div>
                    <div class="col-4">
                        <label for="players[1][position]">Position:</label>
                        <select class="form-control form-control-lg" name="players[1][position]" required>
                            <option value="" selected disabled>Choose position...</option>
                            <option value="PG">PG - Point Guard</option>
                            <option value="SG">SG - Shooting Guard</option>
                            <option value="SF">SF - Small Forward</option>
                            <option value="PF">PF - Power Forward</option>
                            <option value="C">C - Center</option>
                        </select>
                    </div>
                    <div class="col-2">
                        <label for="players[0][age]">Age:</label>
                        <input class="form-control form-control-lg" type="number" name="players[0][age]" required>
                    </div>
                    <div class="col-2">
                        <label for="players[0][jersey_number]">Jersey Number:</label>
                        <input class="form-control form-control-lg" type="number" name="players[0][jersey_number]" required>
                    </div>
                </div>
                <hr>
            </div>
            <button type="submit" class="btn btn-warning">Submit</button>
        </form>
    </section>
</div>
<script>
    let playerIndex = 1;
    document.getElementById('addPlayer').addEventListener('click', function(e) {
        e.preventDefault();
        if(playerIndex == 14) {
            alert("Maximum of 15 players only.");
            return;
        }
        let playerTemplate = `
        <h6>Player#${playerIndex + 1}</h6>
        <div class="row">
            <div class="col-4">
                <label label for="players[0][player_name]">Name:</label>
                <input class="form-control form-control-lg" type="text" name="players[${playerIndex}][player_name]" required>
            </div>
            <div class="col-4">
                <label for="players[0][position]">Position:</label>
                <select class="form-control form-control-lg" name="players[${playerIndex}][position]" required>
                    <option value="" selected disabled>Choose position...</option>
                    <option value="PG">PG - Point Guard</option>
                    <option value="SG">SG - Shooting Guard</option>
                    <option value="SF">SF - Small Forward</option>
                    <option value="PF">PF - Power Forward</option>
                    <option value="C">C - Center</option>
                </select>
            </div>
            <div class="col-2">
                <label for="players[0][age]">Age:</label>
                <input class="form-control form-control-lg" type="number" name="players[${playerIndex}][age]" required>
            </div>
            <div class="col-2">
                <label for="players[0][jersey_number]">Jersey Number:</label>
                <input class="form-control form-control-lg" type="number" name="players[${playerIndex}][jersey_number]" required>
            </div>
        </div><hr>`;
        document.getElementById('players').insertAdjacentHTML('beforeend', playerTemplate);
        playerIndex++;
    });
</script>
@endsection