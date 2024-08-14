@extends('layouts.app')

@section('header-content')
<section class="banner banner3 home-four">
    <div class="banner-single banner-bg banner-single-2">
        <div class="video-section-inner text-center">
            <div class="play-video">
                <a class="popup-video" href="https://www.youtube.com/watch?v=G4t6TqG5LM8"><i class="fas fa-play"></i></a>
            </div>
        </div>
        <div class="container">
            <div class="banner-content">
                <div class="flex-wrap d-flex">
                    <span class="blog-catagory-tag">BASKETBALL</span>
                </div>
                <h1 class="banner-heading">Welcome to the MDG Cup!</h1>
                <p class="desc mb-3">Bounce to Greatness: Tanza's Premier Basketball League Awaits!</p>
                <a href="{{ route('team-registration') }}" class="btn btn-outline-warning">REGISTER YOUR TEAM NOW!</a>
            </div>
        </div>
    </div>
</section>
@endsection

@section('main-content')
    <!--================= Next Match Section Start Here =================-->
    <section class="rts-next-match home-four pt--100 pb-5">
        <div class="container">
            <div class="section-inner">
                <div class="section-title-area text-center section-ttile-area2">
                    <h1 class="section-title">HOW TO JOIN?</h1>
                    <h5>This steps must complete to become officially participate the MDG Cup - Mulawin Open League Basketball</h5>
                </div>
                <section class="how-to-join">
                    <h3>Step 1: Team Registration</h3>
                    <ul>
                        <li><p>To register, sign in using one (1) gmail account of the representative of the team. In this step, you need to fill up all the information needed such as <strong>Team name</strong>, <strong>Coach name</strong>, <strong>Contact Information</strong>, <strong>Player Details</strong> and etc.</p></li>
                    </ul>
                    <h3>Step 2: Registration Fee</h3>
                    <ul>
                        <li><p>MDG Cup has a registration fee of <strong>Php 5,000.00</strong>.<br>You can pay full amount (Php 5,000.00) or 50% partial amount (Php 2,500.00) as reservation fee through GCash and upload the receipt.</li></p>
                    </ul>
                    <h3>Step 3: Fill up Jersey Forms</h3>
                    <ul>
                        <li><p>Fill up all the information needed such as <strong>players name at the back</strong>, <strong>jersey number</strong>, <strong>sizes of top and down jersey</strong>. You will also need to upload the design of jersey on the website.</li></p>
                    </ul>
                </section>
            </div>
        </div>
    </section>
    <!--================= Next Match Section End Here =================-->
@endsection