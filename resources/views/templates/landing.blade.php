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
                <a href="#" class="btn btn-outline-warning">REGISTER YOUR TEAM NOW!</a>
            </div>
        </div>
    </div>
</section>
@endsection

@section('main-content')
    <!--================= Trending News Section Start Here =================-->
    <!-- <section class="rts-trending-news-section2 home-four pt--100 pb--100">
        <div class="container">
            <div class="section-inner">
                <div class="section-title-area section-ttile-area2">
                    <h1 class="section-title">LATEST NEWS</h1>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="left-post-inner">
                            <div class="post-inner small">
                                <div class="item small-post">
                                    <a href="blog-details.html" class="gallery-picture">
                                    </a>
                                    <div class="contents-wrapper">
                                        <div class="contents text-start">
                                            <div class="d-block">
                                                <div class="heading d-flex">
                                                    <p class="tag">BASKETBALL</p>
                                                    <span class="blog-date">JULY 21, 2023</span>
                                                </div>
                                                <div class="gallery-title">
                                                    <a href="blog-details.html">Clash of Titans in the Upcoming
                                                        Basketball Battle match</a>
                                                </div>
                                            </div>
                                            <div class="author-info">
                                                <div class="content">
                                                    <a href="blog-details.html" class="read-more">READ MORE</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="post-inner small">
                                <div class="item small-post two">
                                    <a href="blog-details.html" class="gallery-picture">
                                    </a>
                                    <div class="contents-wrapper">
                                        <div class="contents text-start">
                                            <div class="d-block">
                                                <div class="heading d-flex">
                                                    <p class="tag">PLAYER</p>
                                                    <span class="blog-date">JULY 21, 2023</span>
                                                </div>
                                                <div class="gallery-title">
                                                    <a href="blog-details.html">Clash of Titans in the Upcoming
                                                        Basketball Battle match</a>
                                                </div>
                                            </div>
                                            <div class="author-info">
                                                <div class="content">
                                                    <a href="blog-details.html" class="read-more">READ MORE</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="post-inner">
                            <div class="item">
                                <a href="blog-details.html" class="gallery-picture"></a>
                                <div class="contents-wrapper">
                                    <div class="contents text-start">
                                        <div class="d-block">
                                            <div class="heading d-flex">
                                                <p class="tag">BASKETBALL</p>
                                                <span class="blog-date">JULY 21, 2023</span>
                                            </div>
                                            <div class="gallery-title">
                                                <a href="blog-details.html">You're going to want to hop on
                                                    the Yandi bandwagon</a>
                                            </div>
                                        </div>
                                        <div class="author-info">
                                            <div class="content">
                                                <a href="blog-details.html" class="read-more">READ MORE</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="premier-league-area side-table-item side-item">
                            <div class="side-item-inner">
                                <h3 class="side-content-title">PREMIER LEAGUE</h3>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr class="head-tr">
                                            <th scope="col">Rank</th>
                                            <th scope="col">Player</th>
                                            <th scope="col">PTS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><span class="position-number">1</span></td>
                                            <td><span class="player"><img src="assets/images/icons/flag-1.svg" alt="flag">rON eMRICH</span></td>
                                            <td><span class="win-count">125</span></td>
                                        </tr>
                                        <tr>
                                            <td><span class="position-number">2</span></td>
                                            <td><span class="player"><img src="assets/images/icons/flag-2.svg" alt="flag">Henry</span></td>
                                            <td><span class="win-count">121</span></td>
                                        </tr>
                                        <tr>
                                            <td><span class="position-number">3</span></td>
                                            <td><span class="player"><img src="assets/images/icons/flag-3.svg" alt="flag">Benjamin</span></td>
                                            <td><span class="win-count">113</span></td>
                                        </tr>
                                        <tr>
                                            <td><span class="position-number">4</span></td>
                                            <td><span class="player"><img src="assets/images/icons/flag-4.svg" alt="flag">Alexander</span></td>
                                            <td><span class="win-count">109</span></td>
                                        </tr>
                                        <tr>
                                            <td><span class="position-number">5</span></td>
                                            <td><span class="player"><img src="assets/images/icons/flag-5.svg" alt="flag">Jackson</span></td>
                                            <td><span class="win-count">102</span></td>
                                        </tr>
                                        <tr>
                                            <td><span class="position-number">6</span></td>
                                            <td><span class="player"><img src="assets/images/icons/flag-6.svg" alt="flag">Gabriel</span></td>
                                            <td><span class="win-count">99</span></td>
                                        </tr>
                                        <tr>
                                            <td><span class="position-number">7</span></td>
                                            <td><span class="player"><img src="assets/images/icons/flag-7.svg" alt="flag">Maverick</span></td>
                                            <td><span class="win-count">91</span></td>
                                        </tr>
                                        <tr>
                                            <td><span class="position-number">8</span></td>
                                            <td><span class="player"><img src="assets/images/icons/flag-8.svg" alt="flag">Thomas</span></td>
                                            <td><span class="win-count">86</span></td>
                                        </tr>
                                        <tr>
                                            <td><span class="position-number">9</span></td>
                                            <td><span class="player"><img src="assets/images/icons/flag-9.svg" alt="flag">Christopher</span></td>
                                            <td><span class="win-count">78</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!--================= Trending News Section End Here =================-->


    <!--================= Player Static Section Start Here =================-->
    <!-- <section class="rts-player-static pt--100 pb--100">
        <div class="container">
            <div class="section-inner">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="left-side-content">
                            <div class="section-title-area section-ttile-area2">
                                <h1 class="section-title">PLAYER STATISTICS</h1>
                            </div>
                            <div class="content-area">
                                <div class="image">
                                    <img src="assets/images/team/team09.png" alt="">
                                </div>
                                <div class="stat-table">
                                    <div class="table-area">
                                        <div class="table-top">
                                            <div class="player">
                                                <span class="tag">NAME</span>
                                                <h2 class="name">
                                                    <a href="team.html">NICK CELIS</a>
                                                </h2>
                                            </div>
                                            <div class="point">
                                                <span class="tag">RANKING POINTS</span>
                                                <div class="number">1,176,768</div>
                                            </div> 
                                        </div>
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr class="head-tr">
                                                    <th scope="col">BY YEAR</th>
                                                    <th scope="col">TEAM</th>
                                                    <th scope="col">GP</th>
                                                    <th scope="col">MIN</th>
                                                    <th scope="col">PTS</th>
                                                    <th scope="col">FGM</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><span class="position-number">2022-23</span></td>
                                                    <td><span class="player">MAN</span></td>
                                                    <td><span class="win-count">7</span></td>
                                                    <td><span class="win-count">41.0</span></td>
                                                    <td><span class="win-count">14.0</span></td>
                                                    <td><span class="win-count">2.1</span></td>
                                                </tr>
                                                <tr>
                                                    <td><span class="position-number">2020-21</span></td>
                                                    <td><span class="player">WES</span></td>
                                                    <td><span class="win-count">5</span></td>
                                                    <td><span class="win-count">48.4</span></td>
                                                    <td><span class="win-count">17.0</span></td>
                                                    <td><span class="win-count">8.1</span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <a href="#" class="table-btn btn">VIEW PROFILE</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="right-side-content">
                            <div class="section-title-area section-ttile-area2">
                                <h1 class="section-title">POINT TABLE</h1>
                                <a href="#" class="view-btn">VIEW ALL <svg xmlns="http://www.w3.org/2000/svg" width="7" height="10" viewBox="0 0 7 10" fill="none">
                                    <path d="M0.722898 0.000164177C0.581981 -0.0029352 0.443599 0.0379148 0.326992 0.117098C0.210385 0.196281 0.121345 0.309883 0.0722539 0.442009C0.0231624 0.574135 0.0164578 0.718253 0.0530719 0.854366C0.0896861 0.990478 0.1678 1.11175 0.276553 1.20141L4.4261 4.75627L0.276553 8.30988C0.201323 8.36517 0.13832 8.43536 0.0914884 8.51613C0.0446573 8.5969 0.0150075 8.6865 0.00439536 8.77925C-0.00621682 8.87201 0.00243752 8.96594 0.0298163 9.0552C0.0571951 9.14446 0.102708 9.22713 0.163506 9.29799C0.224304 9.36884 0.299077 9.42631 0.383142 9.46693C0.467206 9.50755 0.558753 9.53036 0.652047 9.53396C0.745341 9.53756 0.838373 9.52191 0.925317 9.48789C1.01226 9.45387 1.09125 9.40227 1.15732 9.33631L5.90818 5.27148C5.98278 5.20781 6.04269 5.12879 6.08377 5.03973C6.12485 4.95066 6.14613 4.85372 6.14613 4.75564C6.14613 4.65756 6.12485 4.56063 6.08377 4.47156C6.04269 4.3825 5.98278 4.3034 5.90818 4.23973L1.15732 0.170989C1.03731 0.064389 0.883374 0.00394085 0.722898 0.000164177Z" fill="white"></path>
                                    </svg>
                                </a>
                            </div>
                            <div class="table-area">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr class="head-tr">
                                            <th scope="col">POS</th>
                                            <th scope="col">TEAM</th>
                                            <th scope="col">W</th>
                                            <th scope="col">L</th>
                                            <th scope="col">PTS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><span class="position-number">1</span></td>
                                            <td><span class="player"><img src="assets/images/icons/club-1.svg" alt=""> Mancon</span></td>
                                            <td><span class="win-count">9</span></td>
                                            <td><span class="win-count">2</span></td>
                                            <td><span class="win-count">0.912</span></td>
                                        </tr>
                                        <tr>
                                            <td><span class="position-number">2</span></td>
                                            <td><span class="player"><img src="assets/images/icons/club-2.svg" alt="">Weston</span></td>
                                            <td><span class="win-count">7</span></td>
                                            <td><span class="win-count">3</span></td>
                                            <td><span class="win-count">0.833</span></td>
                                        </tr>
                                        <tr>
                                            <td><span class="position-number">3</span></td>
                                            <td><span class="player"><img src="assets/images/icons/club-3.svg" alt="">Bulls</span></td>
                                            <td><span class="win-count">5</span></td>
                                            <td><span class="win-count">4</span></td>
                                            <td><span class="win-count">0.945</span></td>
                                        </tr>
                                        <tr>
                                            <td><span class="position-number">4</span></td>
                                            <td><span class="player"><img src="assets/images/icons/club-4.svg" alt="">Manhut</span></td>
                                            <td><span class="win-count">5</span></td>
                                            <td><span class="win-count">4</span></td>
                                            <td><span class="win-count">0.879</span></td>
                                        </tr>
                                        <tr>
                                            <td><span class="position-number">5</span></td>
                                            <td><span class="player"><img src="assets/images/icons/club-5.svg" alt="">Miland</span></td>
                                            <td><span class="win-count">4</span></td>
                                            <td><span class="win-count">2</span></td>
                                            <td><span class="win-count">0.912</span></td>
                                        </tr>
                                        <tr>
                                            <td><span class="position-number">6</span></td>
                                            <td><span class="player"><img src="assets/images/icons/club-6.svg" alt="">Interko</span></td>
                                            <td><span class="win-count">3</span></td>
                                            <td><span class="win-count">2</span></td>
                                            <td><span class="win-count">0.912</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!--================= Player Static Section End Here =================-->


    <!--================= Next Match Section Start Here =================-->
    <section class="rts-next-match home-four pt--100">
        <div class="container">
            <div class="section-inner">
                <div class="section-title-area text-center section-ttile-area2">
                    <h1 class="section-title">HOW TO JOIN?</h1>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="match-wrapper">
                            <div class="logo">
                                <img src="assets/images/icons/club-7.svg" alt="">
                            </div>
                            <div class="content">
                                <p class="date">August 11, 2023</p>
                                <p class="time">5:45 Pm</p>
                                <h3 class="team">Dragons <span>VS</span>  Manhut</h3>
                            </div>
                            <div class="logo">
                                <img src="assets/images/icons/club-8.svg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="match-wrapper">
                            <div class="logo">
                                <img src="assets/images/icons/club-9.svg" alt="">
                            </div>
                            <div class="content">
                                <p class="date">August 11, 2023</p>
                                <p class="time">5:45 Pm</p>
                                <h3 class="team">Weston <span>VS</span>  Miland</h3>
                            </div>
                            <div class="logo">
                                <img src="assets/images/icons/club-10.svg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="match-wrapper">
                            <div class="logo">
                                <img src="assets/images/icons/club-11.svg" alt="">
                            </div>
                            <div class="content">
                                <p class="date">August 11, 2023</p>
                                <p class="time">5:45 Pm</p>
                                <h3 class="team">Bulls <span>VS</span>  Interko</h3>
                            </div>
                            <div class="logo">
                                <img src="assets/images/icons/club-12.svg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================= Next Match Section End Here =================-->


    <!--================= Newsletter Start Here =================-->
    <!-- <section class="rts-newsletter-section2 home-four section-gap-100">
        <div class="container">
            <div class="newsletter-inner">
                <div class="row">
                    <div class="col-lg-6">
                        <h3 class="title">Watch The Basketball Finals game replay</h3>
                        <form>
                            <div class="form">
                                <input type="text" class="form-control" id="username" placeholder="Enter Your Email" required="">
                            </div>
                            <div class="button">
                                <button type="submit" class="btn">SUBSCRIBE</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-6"></div>
                </div>
            </div>
        </div>
    </section> -->
    <!--================= Newsletter End Here =================-->


    <!--================= Team Section Start Here =================-->
    <!-- <div class="rts-team-section home-four pb--100">
        <div class="container">
            <div class="section-title-area section-title-area1 mb--50">
                <h1 class="title">PLAYERS</h1>
                <div class="swiper-slider-btn">
                    <div class="slider-btn slide-prev" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-10b4d93b942fd7080">
                        <i class="fal fa-chevron-left"></i>
                    </div>
                    <div class="slider-btn slide-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-10b4d93b942fd7080">
                        <i class="fal fa-chevron-right"></i>
                    </div>
                </div>
            </div>
            <div class="team-section-inner">
                <div class="swiper rts-teamSlider2 swiper-initialized swiper-horizontal swiper-pointer-events">
                    <div class="swiper-wrapper" id="swiper-wrapper-6b1001b868e892c81" aria-live="off" style="transition-duration: 0ms; transform: translate3d(-2640px, 0px, 0px);"><div class="swiper-slide swiper-slide-duplicate" role="group" aria-label="1 / 4" style="width: 300px; margin-right: 30px;" data-swiper-slide-index="0">
                            <div class="team-wraper">
                                <div class="player-card">
                                    <a class="image" href="team-details.html"><img src="assets/images/team/team10.png" alt=""></a>
                                    <ul class="social-area">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li><a href="#">
                                                <svg width="18" height="13" viewBox="0 0 18 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M14.5781 1.66406C16.3828 4.34375 17.2852 7.35156 16.957 10.8242C16.957 10.8242 16.957 10.8516 16.9297 10.8516C15.7266 11.7539 14.3594 12.4375 12.9102 12.875C12.8828 12.9023 12.8828 12.875 12.8555 12.875C12.5547 12.4375 12.2812 12 12.0352 11.5352C12.0352 11.5078 12.0352 11.4805 12.0625 11.4531C12.5 11.2891 12.9102 11.0977 13.3203 10.8516C13.3477 10.8516 13.3477 10.7969 13.3203 10.7695C13.2383 10.7148 13.1562 10.6602 13.0742 10.5781C13.0469 10.5781 13.0469 10.5781 13.0195 10.5781C10.4219 11.7812 7.57812 11.7812 4.95312 10.5781C4.92578 10.5781 4.89844 10.5781 4.89844 10.5781C4.81641 10.6602 4.73438 10.7148 4.65234 10.7695C4.59766 10.7969 4.625 10.8516 4.65234 10.8516C5.03516 11.0977 5.47266 11.2891 5.91016 11.4531C5.9375 11.4805 5.9375 11.5078 5.9375 11.5352C5.69141 12 5.41797 12.4375 5.11719 12.875C5.08984 12.875 5.0625 12.9023 5.0625 12.875C3.61328 12.4375 2.24609 11.7539 1.04297 10.8516C1.01562 10.8516 1.01562 10.8242 1.01562 10.8242C0.742188 7.81641 1.31641 4.78125 3.39453 1.66406C3.39453 1.66406 3.39453 1.66406 3.42188 1.66406C4.46094 1.17188 5.55469 0.84375 6.67578 0.652344C6.70312 0.625 6.73047 0.652344 6.73047 0.652344C6.89453 0.925781 7.03125 1.22656 7.14062 1.5C8.37109 1.30859 9.60156 1.30859 10.832 1.5C10.9414 1.22656 11.0781 0.925781 11.2422 0.652344C11.2422 0.652344 11.2695 0.625 11.2969 0.652344C12.418 0.84375 13.5117 1.17188 14.5508 1.66406C14.5781 1.66406 14.5781 1.66406 14.5781 1.66406ZM6.32031 8.99219C7.11328 8.99219 7.76953 8.25391 7.76953 7.37891C7.76953 6.47656 7.14062 5.76562 6.32031 5.76562C5.52734 5.76562 4.87109 6.47656 4.87109 7.37891C4.87109 8.25391 5.52734 8.99219 6.32031 8.99219ZM11.6523 8.99219C12.4727 8.99219 13.1016 8.25391 13.1016 7.37891C13.1289 6.47656 12.4727 5.76562 11.6523 5.76562C10.8594 5.76562 10.2305 6.47656 10.2305 7.37891C10.2305 8.25391 10.8594 8.99219 11.6523 8.99219Z" fill="white"></path>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="profile">
                                    <a href="team-details.html" class="name">DAVID WILLIAM</a>
                                </div>
                            </div>
                        </div><div class="swiper-slide swiper-slide-duplicate" role="group" aria-label="2 / 4" style="width: 300px; margin-right: 30px;" data-swiper-slide-index="1">
                            <div class="team-wraper">
                                <div class="player-card">
                                    <a class="image" href="team-details.html"><img src="assets/images/team/team11.png" alt=""></a>
                                    <ul class="social-area">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li><a href="#">
                                            <svg width="18" height="13" viewBox="0 0 18 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M14.5781 1.66406C16.3828 4.34375 17.2852 7.35156 16.957 10.8242C16.957 10.8242 16.957 10.8516 16.9297 10.8516C15.7266 11.7539 14.3594 12.4375 12.9102 12.875C12.8828 12.9023 12.8828 12.875 12.8555 12.875C12.5547 12.4375 12.2812 12 12.0352 11.5352C12.0352 11.5078 12.0352 11.4805 12.0625 11.4531C12.5 11.2891 12.9102 11.0977 13.3203 10.8516C13.3477 10.8516 13.3477 10.7969 13.3203 10.7695C13.2383 10.7148 13.1562 10.6602 13.0742 10.5781C13.0469 10.5781 13.0469 10.5781 13.0195 10.5781C10.4219 11.7812 7.57812 11.7812 4.95312 10.5781C4.92578 10.5781 4.89844 10.5781 4.89844 10.5781C4.81641 10.6602 4.73438 10.7148 4.65234 10.7695C4.59766 10.7969 4.625 10.8516 4.65234 10.8516C5.03516 11.0977 5.47266 11.2891 5.91016 11.4531C5.9375 11.4805 5.9375 11.5078 5.9375 11.5352C5.69141 12 5.41797 12.4375 5.11719 12.875C5.08984 12.875 5.0625 12.9023 5.0625 12.875C3.61328 12.4375 2.24609 11.7539 1.04297 10.8516C1.01562 10.8516 1.01562 10.8242 1.01562 10.8242C0.742188 7.81641 1.31641 4.78125 3.39453 1.66406C3.39453 1.66406 3.39453 1.66406 3.42188 1.66406C4.46094 1.17188 5.55469 0.84375 6.67578 0.652344C6.70312 0.625 6.73047 0.652344 6.73047 0.652344C6.89453 0.925781 7.03125 1.22656 7.14062 1.5C8.37109 1.30859 9.60156 1.30859 10.832 1.5C10.9414 1.22656 11.0781 0.925781 11.2422 0.652344C11.2422 0.652344 11.2695 0.625 11.2969 0.652344C12.418 0.84375 13.5117 1.17188 14.5508 1.66406C14.5781 1.66406 14.5781 1.66406 14.5781 1.66406ZM6.32031 8.99219C7.11328 8.99219 7.76953 8.25391 7.76953 7.37891C7.76953 6.47656 7.14062 5.76562 6.32031 5.76562C5.52734 5.76562 4.87109 6.47656 4.87109 7.37891C4.87109 8.25391 5.52734 8.99219 6.32031 8.99219ZM11.6523 8.99219C12.4727 8.99219 13.1016 8.25391 13.1016 7.37891C13.1289 6.47656 12.4727 5.76562 11.6523 5.76562C10.8594 5.76562 10.2305 6.47656 10.2305 7.37891C10.2305 8.25391 10.8594 8.99219 11.6523 8.99219Z" fill="white"></path>
                                            </svg>
                                        </a>
                                    </li>
                                    </ul>
                                </div>
                                <div class="profile">
                                    <a href="team-details.html" class="name">Robert Horry</a>
                                </div>
                            </div>
                        </div><div class="swiper-slide swiper-slide-duplicate" role="group" aria-label="3 / 4" style="width: 300px; margin-right: 30px;" data-swiper-slide-index="2">
                            <div class="team-wraper">
                                <div class="player-card">
                                    <a class="image" href="team-details.html"><img src="assets/images/team/team12.png" alt=""></a>
                                    <ul class="social-area">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li><a href="#">
                                            <svg width="18" height="13" viewBox="0 0 18 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M14.5781 1.66406C16.3828 4.34375 17.2852 7.35156 16.957 10.8242C16.957 10.8242 16.957 10.8516 16.9297 10.8516C15.7266 11.7539 14.3594 12.4375 12.9102 12.875C12.8828 12.9023 12.8828 12.875 12.8555 12.875C12.5547 12.4375 12.2812 12 12.0352 11.5352C12.0352 11.5078 12.0352 11.4805 12.0625 11.4531C12.5 11.2891 12.9102 11.0977 13.3203 10.8516C13.3477 10.8516 13.3477 10.7969 13.3203 10.7695C13.2383 10.7148 13.1562 10.6602 13.0742 10.5781C13.0469 10.5781 13.0469 10.5781 13.0195 10.5781C10.4219 11.7812 7.57812 11.7812 4.95312 10.5781C4.92578 10.5781 4.89844 10.5781 4.89844 10.5781C4.81641 10.6602 4.73438 10.7148 4.65234 10.7695C4.59766 10.7969 4.625 10.8516 4.65234 10.8516C5.03516 11.0977 5.47266 11.2891 5.91016 11.4531C5.9375 11.4805 5.9375 11.5078 5.9375 11.5352C5.69141 12 5.41797 12.4375 5.11719 12.875C5.08984 12.875 5.0625 12.9023 5.0625 12.875C3.61328 12.4375 2.24609 11.7539 1.04297 10.8516C1.01562 10.8516 1.01562 10.8242 1.01562 10.8242C0.742188 7.81641 1.31641 4.78125 3.39453 1.66406C3.39453 1.66406 3.39453 1.66406 3.42188 1.66406C4.46094 1.17188 5.55469 0.84375 6.67578 0.652344C6.70312 0.625 6.73047 0.652344 6.73047 0.652344C6.89453 0.925781 7.03125 1.22656 7.14062 1.5C8.37109 1.30859 9.60156 1.30859 10.832 1.5C10.9414 1.22656 11.0781 0.925781 11.2422 0.652344C11.2422 0.652344 11.2695 0.625 11.2969 0.652344C12.418 0.84375 13.5117 1.17188 14.5508 1.66406C14.5781 1.66406 14.5781 1.66406 14.5781 1.66406ZM6.32031 8.99219C7.11328 8.99219 7.76953 8.25391 7.76953 7.37891C7.76953 6.47656 7.14062 5.76562 6.32031 5.76562C5.52734 5.76562 4.87109 6.47656 4.87109 7.37891C4.87109 8.25391 5.52734 8.99219 6.32031 8.99219ZM11.6523 8.99219C12.4727 8.99219 13.1016 8.25391 13.1016 7.37891C13.1289 6.47656 12.4727 5.76562 11.6523 5.76562C10.8594 5.76562 10.2305 6.47656 10.2305 7.37891C10.2305 8.25391 10.8594 8.99219 11.6523 8.99219Z" fill="white"></path>
                                            </svg>
                                        </a>
                                    </li>
                                    </ul>
                                </div>
                                <div class="profile">
                                    <a href="team-details.html" class="name">John Havlicek</a>
                                </div>
                            </div>
                        </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" role="group" aria-label="4 / 4" style="width: 300px; margin-right: 30px;" data-swiper-slide-index="3">
                            <div class="team-wraper">
                                <div class="player-card">
                                    <a class="image" href="team-details.html"><img src="assets/images/team/team13.png" alt=""></a>
                                    <ul class="social-area">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li><a href="#">
                                            <svg width="18" height="13" viewBox="0 0 18 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M14.5781 1.66406C16.3828 4.34375 17.2852 7.35156 16.957 10.8242C16.957 10.8242 16.957 10.8516 16.9297 10.8516C15.7266 11.7539 14.3594 12.4375 12.9102 12.875C12.8828 12.9023 12.8828 12.875 12.8555 12.875C12.5547 12.4375 12.2812 12 12.0352 11.5352C12.0352 11.5078 12.0352 11.4805 12.0625 11.4531C12.5 11.2891 12.9102 11.0977 13.3203 10.8516C13.3477 10.8516 13.3477 10.7969 13.3203 10.7695C13.2383 10.7148 13.1562 10.6602 13.0742 10.5781C13.0469 10.5781 13.0469 10.5781 13.0195 10.5781C10.4219 11.7812 7.57812 11.7812 4.95312 10.5781C4.92578 10.5781 4.89844 10.5781 4.89844 10.5781C4.81641 10.6602 4.73438 10.7148 4.65234 10.7695C4.59766 10.7969 4.625 10.8516 4.65234 10.8516C5.03516 11.0977 5.47266 11.2891 5.91016 11.4531C5.9375 11.4805 5.9375 11.5078 5.9375 11.5352C5.69141 12 5.41797 12.4375 5.11719 12.875C5.08984 12.875 5.0625 12.9023 5.0625 12.875C3.61328 12.4375 2.24609 11.7539 1.04297 10.8516C1.01562 10.8516 1.01562 10.8242 1.01562 10.8242C0.742188 7.81641 1.31641 4.78125 3.39453 1.66406C3.39453 1.66406 3.39453 1.66406 3.42188 1.66406C4.46094 1.17188 5.55469 0.84375 6.67578 0.652344C6.70312 0.625 6.73047 0.652344 6.73047 0.652344C6.89453 0.925781 7.03125 1.22656 7.14062 1.5C8.37109 1.30859 9.60156 1.30859 10.832 1.5C10.9414 1.22656 11.0781 0.925781 11.2422 0.652344C11.2422 0.652344 11.2695 0.625 11.2969 0.652344C12.418 0.84375 13.5117 1.17188 14.5508 1.66406C14.5781 1.66406 14.5781 1.66406 14.5781 1.66406ZM6.32031 8.99219C7.11328 8.99219 7.76953 8.25391 7.76953 7.37891C7.76953 6.47656 7.14062 5.76562 6.32031 5.76562C5.52734 5.76562 4.87109 6.47656 4.87109 7.37891C4.87109 8.25391 5.52734 8.99219 6.32031 8.99219ZM11.6523 8.99219C12.4727 8.99219 13.1016 8.25391 13.1016 7.37891C13.1289 6.47656 12.4727 5.76562 11.6523 5.76562C10.8594 5.76562 10.2305 6.47656 10.2305 7.37891C10.2305 8.25391 10.8594 8.99219 11.6523 8.99219Z" fill="white"></path>
                                            </svg>
                                        </a>
                                    </li>
                                    </ul>
                                </div>
                                <div class="profile">
                                    <a href="team-details.html" class="name">Sam Jones</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-duplicate-active" role="group" aria-label="1 / 4" style="width: 300px; margin-right: 30px;" data-swiper-slide-index="0">
                            <div class="team-wraper">
                                <div class="player-card">
                                    <a class="image" href="team-details.html"><img src="assets/images/team/team10.png" alt=""></a>
                                    <ul class="social-area">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li><a href="#">
                                                <svg width="18" height="13" viewBox="0 0 18 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M14.5781 1.66406C16.3828 4.34375 17.2852 7.35156 16.957 10.8242C16.957 10.8242 16.957 10.8516 16.9297 10.8516C15.7266 11.7539 14.3594 12.4375 12.9102 12.875C12.8828 12.9023 12.8828 12.875 12.8555 12.875C12.5547 12.4375 12.2812 12 12.0352 11.5352C12.0352 11.5078 12.0352 11.4805 12.0625 11.4531C12.5 11.2891 12.9102 11.0977 13.3203 10.8516C13.3477 10.8516 13.3477 10.7969 13.3203 10.7695C13.2383 10.7148 13.1562 10.6602 13.0742 10.5781C13.0469 10.5781 13.0469 10.5781 13.0195 10.5781C10.4219 11.7812 7.57812 11.7812 4.95312 10.5781C4.92578 10.5781 4.89844 10.5781 4.89844 10.5781C4.81641 10.6602 4.73438 10.7148 4.65234 10.7695C4.59766 10.7969 4.625 10.8516 4.65234 10.8516C5.03516 11.0977 5.47266 11.2891 5.91016 11.4531C5.9375 11.4805 5.9375 11.5078 5.9375 11.5352C5.69141 12 5.41797 12.4375 5.11719 12.875C5.08984 12.875 5.0625 12.9023 5.0625 12.875C3.61328 12.4375 2.24609 11.7539 1.04297 10.8516C1.01562 10.8516 1.01562 10.8242 1.01562 10.8242C0.742188 7.81641 1.31641 4.78125 3.39453 1.66406C3.39453 1.66406 3.39453 1.66406 3.42188 1.66406C4.46094 1.17188 5.55469 0.84375 6.67578 0.652344C6.70312 0.625 6.73047 0.652344 6.73047 0.652344C6.89453 0.925781 7.03125 1.22656 7.14062 1.5C8.37109 1.30859 9.60156 1.30859 10.832 1.5C10.9414 1.22656 11.0781 0.925781 11.2422 0.652344C11.2422 0.652344 11.2695 0.625 11.2969 0.652344C12.418 0.84375 13.5117 1.17188 14.5508 1.66406C14.5781 1.66406 14.5781 1.66406 14.5781 1.66406ZM6.32031 8.99219C7.11328 8.99219 7.76953 8.25391 7.76953 7.37891C7.76953 6.47656 7.14062 5.76562 6.32031 5.76562C5.52734 5.76562 4.87109 6.47656 4.87109 7.37891C4.87109 8.25391 5.52734 8.99219 6.32031 8.99219ZM11.6523 8.99219C12.4727 8.99219 13.1016 8.25391 13.1016 7.37891C13.1289 6.47656 12.4727 5.76562 11.6523 5.76562C10.8594 5.76562 10.2305 6.47656 10.2305 7.37891C10.2305 8.25391 10.8594 8.99219 11.6523 8.99219Z" fill="white"></path>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="profile">
                                    <a href="team-details.html" class="name">DAVID WILLIAM</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-duplicate-next" role="group" aria-label="2 / 4" style="width: 300px; margin-right: 30px;" data-swiper-slide-index="1">
                            <div class="team-wraper">
                                <div class="player-card">
                                    <a class="image" href="team-details.html"><img src="assets/images/team/team11.png" alt=""></a>
                                    <ul class="social-area">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li><a href="#">
                                            <svg width="18" height="13" viewBox="0 0 18 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M14.5781 1.66406C16.3828 4.34375 17.2852 7.35156 16.957 10.8242C16.957 10.8242 16.957 10.8516 16.9297 10.8516C15.7266 11.7539 14.3594 12.4375 12.9102 12.875C12.8828 12.9023 12.8828 12.875 12.8555 12.875C12.5547 12.4375 12.2812 12 12.0352 11.5352C12.0352 11.5078 12.0352 11.4805 12.0625 11.4531C12.5 11.2891 12.9102 11.0977 13.3203 10.8516C13.3477 10.8516 13.3477 10.7969 13.3203 10.7695C13.2383 10.7148 13.1562 10.6602 13.0742 10.5781C13.0469 10.5781 13.0469 10.5781 13.0195 10.5781C10.4219 11.7812 7.57812 11.7812 4.95312 10.5781C4.92578 10.5781 4.89844 10.5781 4.89844 10.5781C4.81641 10.6602 4.73438 10.7148 4.65234 10.7695C4.59766 10.7969 4.625 10.8516 4.65234 10.8516C5.03516 11.0977 5.47266 11.2891 5.91016 11.4531C5.9375 11.4805 5.9375 11.5078 5.9375 11.5352C5.69141 12 5.41797 12.4375 5.11719 12.875C5.08984 12.875 5.0625 12.9023 5.0625 12.875C3.61328 12.4375 2.24609 11.7539 1.04297 10.8516C1.01562 10.8516 1.01562 10.8242 1.01562 10.8242C0.742188 7.81641 1.31641 4.78125 3.39453 1.66406C3.39453 1.66406 3.39453 1.66406 3.42188 1.66406C4.46094 1.17188 5.55469 0.84375 6.67578 0.652344C6.70312 0.625 6.73047 0.652344 6.73047 0.652344C6.89453 0.925781 7.03125 1.22656 7.14062 1.5C8.37109 1.30859 9.60156 1.30859 10.832 1.5C10.9414 1.22656 11.0781 0.925781 11.2422 0.652344C11.2422 0.652344 11.2695 0.625 11.2969 0.652344C12.418 0.84375 13.5117 1.17188 14.5508 1.66406C14.5781 1.66406 14.5781 1.66406 14.5781 1.66406ZM6.32031 8.99219C7.11328 8.99219 7.76953 8.25391 7.76953 7.37891C7.76953 6.47656 7.14062 5.76562 6.32031 5.76562C5.52734 5.76562 4.87109 6.47656 4.87109 7.37891C4.87109 8.25391 5.52734 8.99219 6.32031 8.99219ZM11.6523 8.99219C12.4727 8.99219 13.1016 8.25391 13.1016 7.37891C13.1289 6.47656 12.4727 5.76562 11.6523 5.76562C10.8594 5.76562 10.2305 6.47656 10.2305 7.37891C10.2305 8.25391 10.8594 8.99219 11.6523 8.99219Z" fill="white"></path>
                                            </svg>
                                        </a>
                                    </li>
                                    </ul>
                                </div>
                                <div class="profile">
                                    <a href="team-details.html" class="name">Robert Horry</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" role="group" aria-label="3 / 4" style="width: 300px; margin-right: 30px;" data-swiper-slide-index="2">
                            <div class="team-wraper">
                                <div class="player-card">
                                    <a class="image" href="team-details.html"><img src="assets/images/team/team12.png" alt=""></a>
                                    <ul class="social-area">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li><a href="#">
                                            <svg width="18" height="13" viewBox="0 0 18 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M14.5781 1.66406C16.3828 4.34375 17.2852 7.35156 16.957 10.8242C16.957 10.8242 16.957 10.8516 16.9297 10.8516C15.7266 11.7539 14.3594 12.4375 12.9102 12.875C12.8828 12.9023 12.8828 12.875 12.8555 12.875C12.5547 12.4375 12.2812 12 12.0352 11.5352C12.0352 11.5078 12.0352 11.4805 12.0625 11.4531C12.5 11.2891 12.9102 11.0977 13.3203 10.8516C13.3477 10.8516 13.3477 10.7969 13.3203 10.7695C13.2383 10.7148 13.1562 10.6602 13.0742 10.5781C13.0469 10.5781 13.0469 10.5781 13.0195 10.5781C10.4219 11.7812 7.57812 11.7812 4.95312 10.5781C4.92578 10.5781 4.89844 10.5781 4.89844 10.5781C4.81641 10.6602 4.73438 10.7148 4.65234 10.7695C4.59766 10.7969 4.625 10.8516 4.65234 10.8516C5.03516 11.0977 5.47266 11.2891 5.91016 11.4531C5.9375 11.4805 5.9375 11.5078 5.9375 11.5352C5.69141 12 5.41797 12.4375 5.11719 12.875C5.08984 12.875 5.0625 12.9023 5.0625 12.875C3.61328 12.4375 2.24609 11.7539 1.04297 10.8516C1.01562 10.8516 1.01562 10.8242 1.01562 10.8242C0.742188 7.81641 1.31641 4.78125 3.39453 1.66406C3.39453 1.66406 3.39453 1.66406 3.42188 1.66406C4.46094 1.17188 5.55469 0.84375 6.67578 0.652344C6.70312 0.625 6.73047 0.652344 6.73047 0.652344C6.89453 0.925781 7.03125 1.22656 7.14062 1.5C8.37109 1.30859 9.60156 1.30859 10.832 1.5C10.9414 1.22656 11.0781 0.925781 11.2422 0.652344C11.2422 0.652344 11.2695 0.625 11.2969 0.652344C12.418 0.84375 13.5117 1.17188 14.5508 1.66406C14.5781 1.66406 14.5781 1.66406 14.5781 1.66406ZM6.32031 8.99219C7.11328 8.99219 7.76953 8.25391 7.76953 7.37891C7.76953 6.47656 7.14062 5.76562 6.32031 5.76562C5.52734 5.76562 4.87109 6.47656 4.87109 7.37891C4.87109 8.25391 5.52734 8.99219 6.32031 8.99219ZM11.6523 8.99219C12.4727 8.99219 13.1016 8.25391 13.1016 7.37891C13.1289 6.47656 12.4727 5.76562 11.6523 5.76562C10.8594 5.76562 10.2305 6.47656 10.2305 7.37891C10.2305 8.25391 10.8594 8.99219 11.6523 8.99219Z" fill="white"></path>
                                            </svg>
                                        </a>
                                    </li>
                                    </ul>
                                </div>
                                <div class="profile">
                                    <a href="team-details.html" class="name">John Havlicek</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-prev" role="group" aria-label="4 / 4" style="width: 300px; margin-right: 30px;" data-swiper-slide-index="3">
                            <div class="team-wraper">
                                <div class="player-card">
                                    <a class="image" href="team-details.html"><img src="assets/images/team/team13.png" alt=""></a>
                                    <ul class="social-area">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li><a href="#">
                                            <svg width="18" height="13" viewBox="0 0 18 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M14.5781 1.66406C16.3828 4.34375 17.2852 7.35156 16.957 10.8242C16.957 10.8242 16.957 10.8516 16.9297 10.8516C15.7266 11.7539 14.3594 12.4375 12.9102 12.875C12.8828 12.9023 12.8828 12.875 12.8555 12.875C12.5547 12.4375 12.2812 12 12.0352 11.5352C12.0352 11.5078 12.0352 11.4805 12.0625 11.4531C12.5 11.2891 12.9102 11.0977 13.3203 10.8516C13.3477 10.8516 13.3477 10.7969 13.3203 10.7695C13.2383 10.7148 13.1562 10.6602 13.0742 10.5781C13.0469 10.5781 13.0469 10.5781 13.0195 10.5781C10.4219 11.7812 7.57812 11.7812 4.95312 10.5781C4.92578 10.5781 4.89844 10.5781 4.89844 10.5781C4.81641 10.6602 4.73438 10.7148 4.65234 10.7695C4.59766 10.7969 4.625 10.8516 4.65234 10.8516C5.03516 11.0977 5.47266 11.2891 5.91016 11.4531C5.9375 11.4805 5.9375 11.5078 5.9375 11.5352C5.69141 12 5.41797 12.4375 5.11719 12.875C5.08984 12.875 5.0625 12.9023 5.0625 12.875C3.61328 12.4375 2.24609 11.7539 1.04297 10.8516C1.01562 10.8516 1.01562 10.8242 1.01562 10.8242C0.742188 7.81641 1.31641 4.78125 3.39453 1.66406C3.39453 1.66406 3.39453 1.66406 3.42188 1.66406C4.46094 1.17188 5.55469 0.84375 6.67578 0.652344C6.70312 0.625 6.73047 0.652344 6.73047 0.652344C6.89453 0.925781 7.03125 1.22656 7.14062 1.5C8.37109 1.30859 9.60156 1.30859 10.832 1.5C10.9414 1.22656 11.0781 0.925781 11.2422 0.652344C11.2422 0.652344 11.2695 0.625 11.2969 0.652344C12.418 0.84375 13.5117 1.17188 14.5508 1.66406C14.5781 1.66406 14.5781 1.66406 14.5781 1.66406ZM6.32031 8.99219C7.11328 8.99219 7.76953 8.25391 7.76953 7.37891C7.76953 6.47656 7.14062 5.76562 6.32031 5.76562C5.52734 5.76562 4.87109 6.47656 4.87109 7.37891C4.87109 8.25391 5.52734 8.99219 6.32031 8.99219ZM11.6523 8.99219C12.4727 8.99219 13.1016 8.25391 13.1016 7.37891C13.1289 6.47656 12.4727 5.76562 11.6523 5.76562C10.8594 5.76562 10.2305 6.47656 10.2305 7.37891C10.2305 8.25391 10.8594 8.99219 11.6523 8.99219Z" fill="white"></path>
                                            </svg>
                                        </a>
                                    </li>
                                    </ul>
                                </div>
                                <div class="profile">
                                    <a href="team-details.html" class="name">Sam Jones</a>
                                </div>
                            </div>
                        </div>
                    <div class="swiper-slide swiper-slide-duplicate swiper-slide-active" role="group" aria-label="1 / 4" style="width: 300px; margin-right: 30px;" data-swiper-slide-index="0">
                            <div class="team-wraper">
                                <div class="player-card">
                                    <a class="image" href="team-details.html"><img src="assets/images/team/team10.png" alt=""></a>
                                    <ul class="social-area">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li><a href="#">
                                                <svg width="18" height="13" viewBox="0 0 18 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M14.5781 1.66406C16.3828 4.34375 17.2852 7.35156 16.957 10.8242C16.957 10.8242 16.957 10.8516 16.9297 10.8516C15.7266 11.7539 14.3594 12.4375 12.9102 12.875C12.8828 12.9023 12.8828 12.875 12.8555 12.875C12.5547 12.4375 12.2812 12 12.0352 11.5352C12.0352 11.5078 12.0352 11.4805 12.0625 11.4531C12.5 11.2891 12.9102 11.0977 13.3203 10.8516C13.3477 10.8516 13.3477 10.7969 13.3203 10.7695C13.2383 10.7148 13.1562 10.6602 13.0742 10.5781C13.0469 10.5781 13.0469 10.5781 13.0195 10.5781C10.4219 11.7812 7.57812 11.7812 4.95312 10.5781C4.92578 10.5781 4.89844 10.5781 4.89844 10.5781C4.81641 10.6602 4.73438 10.7148 4.65234 10.7695C4.59766 10.7969 4.625 10.8516 4.65234 10.8516C5.03516 11.0977 5.47266 11.2891 5.91016 11.4531C5.9375 11.4805 5.9375 11.5078 5.9375 11.5352C5.69141 12 5.41797 12.4375 5.11719 12.875C5.08984 12.875 5.0625 12.9023 5.0625 12.875C3.61328 12.4375 2.24609 11.7539 1.04297 10.8516C1.01562 10.8516 1.01562 10.8242 1.01562 10.8242C0.742188 7.81641 1.31641 4.78125 3.39453 1.66406C3.39453 1.66406 3.39453 1.66406 3.42188 1.66406C4.46094 1.17188 5.55469 0.84375 6.67578 0.652344C6.70312 0.625 6.73047 0.652344 6.73047 0.652344C6.89453 0.925781 7.03125 1.22656 7.14062 1.5C8.37109 1.30859 9.60156 1.30859 10.832 1.5C10.9414 1.22656 11.0781 0.925781 11.2422 0.652344C11.2422 0.652344 11.2695 0.625 11.2969 0.652344C12.418 0.84375 13.5117 1.17188 14.5508 1.66406C14.5781 1.66406 14.5781 1.66406 14.5781 1.66406ZM6.32031 8.99219C7.11328 8.99219 7.76953 8.25391 7.76953 7.37891C7.76953 6.47656 7.14062 5.76562 6.32031 5.76562C5.52734 5.76562 4.87109 6.47656 4.87109 7.37891C4.87109 8.25391 5.52734 8.99219 6.32031 8.99219ZM11.6523 8.99219C12.4727 8.99219 13.1016 8.25391 13.1016 7.37891C13.1289 6.47656 12.4727 5.76562 11.6523 5.76562C10.8594 5.76562 10.2305 6.47656 10.2305 7.37891C10.2305 8.25391 10.8594 8.99219 11.6523 8.99219Z" fill="white"></path>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="profile">
                                    <a href="team-details.html" class="name">DAVID WILLIAM</a>
                                </div>
                            </div>
                        </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-next" role="group" aria-label="2 / 4" style="width: 300px; margin-right: 30px;" data-swiper-slide-index="1">
                            <div class="team-wraper">
                                <div class="player-card">
                                    <a class="image" href="team-details.html"><img src="assets/images/team/team11.png" alt=""></a>
                                    <ul class="social-area">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li><a href="#">
                                            <svg width="18" height="13" viewBox="0 0 18 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M14.5781 1.66406C16.3828 4.34375 17.2852 7.35156 16.957 10.8242C16.957 10.8242 16.957 10.8516 16.9297 10.8516C15.7266 11.7539 14.3594 12.4375 12.9102 12.875C12.8828 12.9023 12.8828 12.875 12.8555 12.875C12.5547 12.4375 12.2812 12 12.0352 11.5352C12.0352 11.5078 12.0352 11.4805 12.0625 11.4531C12.5 11.2891 12.9102 11.0977 13.3203 10.8516C13.3477 10.8516 13.3477 10.7969 13.3203 10.7695C13.2383 10.7148 13.1562 10.6602 13.0742 10.5781C13.0469 10.5781 13.0469 10.5781 13.0195 10.5781C10.4219 11.7812 7.57812 11.7812 4.95312 10.5781C4.92578 10.5781 4.89844 10.5781 4.89844 10.5781C4.81641 10.6602 4.73438 10.7148 4.65234 10.7695C4.59766 10.7969 4.625 10.8516 4.65234 10.8516C5.03516 11.0977 5.47266 11.2891 5.91016 11.4531C5.9375 11.4805 5.9375 11.5078 5.9375 11.5352C5.69141 12 5.41797 12.4375 5.11719 12.875C5.08984 12.875 5.0625 12.9023 5.0625 12.875C3.61328 12.4375 2.24609 11.7539 1.04297 10.8516C1.01562 10.8516 1.01562 10.8242 1.01562 10.8242C0.742188 7.81641 1.31641 4.78125 3.39453 1.66406C3.39453 1.66406 3.39453 1.66406 3.42188 1.66406C4.46094 1.17188 5.55469 0.84375 6.67578 0.652344C6.70312 0.625 6.73047 0.652344 6.73047 0.652344C6.89453 0.925781 7.03125 1.22656 7.14062 1.5C8.37109 1.30859 9.60156 1.30859 10.832 1.5C10.9414 1.22656 11.0781 0.925781 11.2422 0.652344C11.2422 0.652344 11.2695 0.625 11.2969 0.652344C12.418 0.84375 13.5117 1.17188 14.5508 1.66406C14.5781 1.66406 14.5781 1.66406 14.5781 1.66406ZM6.32031 8.99219C7.11328 8.99219 7.76953 8.25391 7.76953 7.37891C7.76953 6.47656 7.14062 5.76562 6.32031 5.76562C5.52734 5.76562 4.87109 6.47656 4.87109 7.37891C4.87109 8.25391 5.52734 8.99219 6.32031 8.99219ZM11.6523 8.99219C12.4727 8.99219 13.1016 8.25391 13.1016 7.37891C13.1289 6.47656 12.4727 5.76562 11.6523 5.76562C10.8594 5.76562 10.2305 6.47656 10.2305 7.37891C10.2305 8.25391 10.8594 8.99219 11.6523 8.99219Z" fill="white"></path>
                                            </svg>
                                        </a>
                                    </li>
                                    </ul>
                                </div>
                                <div class="profile">
                                    <a href="team-details.html" class="name">Robert Horry</a>
                                </div>
                            </div>
                        </div><div class="swiper-slide swiper-slide-duplicate" role="group" aria-label="3 / 4" style="width: 300px; margin-right: 30px;" data-swiper-slide-index="2">
                            <div class="team-wraper">
                                <div class="player-card">
                                    <a class="image" href="team-details.html"><img src="assets/images/team/team12.png" alt=""></a>
                                    <ul class="social-area">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li><a href="#">
                                            <svg width="18" height="13" viewBox="0 0 18 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M14.5781 1.66406C16.3828 4.34375 17.2852 7.35156 16.957 10.8242C16.957 10.8242 16.957 10.8516 16.9297 10.8516C15.7266 11.7539 14.3594 12.4375 12.9102 12.875C12.8828 12.9023 12.8828 12.875 12.8555 12.875C12.5547 12.4375 12.2812 12 12.0352 11.5352C12.0352 11.5078 12.0352 11.4805 12.0625 11.4531C12.5 11.2891 12.9102 11.0977 13.3203 10.8516C13.3477 10.8516 13.3477 10.7969 13.3203 10.7695C13.2383 10.7148 13.1562 10.6602 13.0742 10.5781C13.0469 10.5781 13.0469 10.5781 13.0195 10.5781C10.4219 11.7812 7.57812 11.7812 4.95312 10.5781C4.92578 10.5781 4.89844 10.5781 4.89844 10.5781C4.81641 10.6602 4.73438 10.7148 4.65234 10.7695C4.59766 10.7969 4.625 10.8516 4.65234 10.8516C5.03516 11.0977 5.47266 11.2891 5.91016 11.4531C5.9375 11.4805 5.9375 11.5078 5.9375 11.5352C5.69141 12 5.41797 12.4375 5.11719 12.875C5.08984 12.875 5.0625 12.9023 5.0625 12.875C3.61328 12.4375 2.24609 11.7539 1.04297 10.8516C1.01562 10.8516 1.01562 10.8242 1.01562 10.8242C0.742188 7.81641 1.31641 4.78125 3.39453 1.66406C3.39453 1.66406 3.39453 1.66406 3.42188 1.66406C4.46094 1.17188 5.55469 0.84375 6.67578 0.652344C6.70312 0.625 6.73047 0.652344 6.73047 0.652344C6.89453 0.925781 7.03125 1.22656 7.14062 1.5C8.37109 1.30859 9.60156 1.30859 10.832 1.5C10.9414 1.22656 11.0781 0.925781 11.2422 0.652344C11.2422 0.652344 11.2695 0.625 11.2969 0.652344C12.418 0.84375 13.5117 1.17188 14.5508 1.66406C14.5781 1.66406 14.5781 1.66406 14.5781 1.66406ZM6.32031 8.99219C7.11328 8.99219 7.76953 8.25391 7.76953 7.37891C7.76953 6.47656 7.14062 5.76562 6.32031 5.76562C5.52734 5.76562 4.87109 6.47656 4.87109 7.37891C4.87109 8.25391 5.52734 8.99219 6.32031 8.99219ZM11.6523 8.99219C12.4727 8.99219 13.1016 8.25391 13.1016 7.37891C13.1289 6.47656 12.4727 5.76562 11.6523 5.76562C10.8594 5.76562 10.2305 6.47656 10.2305 7.37891C10.2305 8.25391 10.8594 8.99219 11.6523 8.99219Z" fill="white"></path>
                                            </svg>
                                        </a>
                                    </li>
                                    </ul>
                                </div>
                                <div class="profile">
                                    <a href="team-details.html" class="name">John Havlicek</a>
                                </div>
                            </div>
                        </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" role="group" aria-label="4 / 4" style="width: 300px; margin-right: 30px;" data-swiper-slide-index="3">
                            <div class="team-wraper">
                                <div class="player-card">
                                    <a class="image" href="team-details.html"><img src="assets/images/team/team13.png" alt=""></a>
                                    <ul class="social-area">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li><a href="#">
                                            <svg width="18" height="13" viewBox="0 0 18 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M14.5781 1.66406C16.3828 4.34375 17.2852 7.35156 16.957 10.8242C16.957 10.8242 16.957 10.8516 16.9297 10.8516C15.7266 11.7539 14.3594 12.4375 12.9102 12.875C12.8828 12.9023 12.8828 12.875 12.8555 12.875C12.5547 12.4375 12.2812 12 12.0352 11.5352C12.0352 11.5078 12.0352 11.4805 12.0625 11.4531C12.5 11.2891 12.9102 11.0977 13.3203 10.8516C13.3477 10.8516 13.3477 10.7969 13.3203 10.7695C13.2383 10.7148 13.1562 10.6602 13.0742 10.5781C13.0469 10.5781 13.0469 10.5781 13.0195 10.5781C10.4219 11.7812 7.57812 11.7812 4.95312 10.5781C4.92578 10.5781 4.89844 10.5781 4.89844 10.5781C4.81641 10.6602 4.73438 10.7148 4.65234 10.7695C4.59766 10.7969 4.625 10.8516 4.65234 10.8516C5.03516 11.0977 5.47266 11.2891 5.91016 11.4531C5.9375 11.4805 5.9375 11.5078 5.9375 11.5352C5.69141 12 5.41797 12.4375 5.11719 12.875C5.08984 12.875 5.0625 12.9023 5.0625 12.875C3.61328 12.4375 2.24609 11.7539 1.04297 10.8516C1.01562 10.8516 1.01562 10.8242 1.01562 10.8242C0.742188 7.81641 1.31641 4.78125 3.39453 1.66406C3.39453 1.66406 3.39453 1.66406 3.42188 1.66406C4.46094 1.17188 5.55469 0.84375 6.67578 0.652344C6.70312 0.625 6.73047 0.652344 6.73047 0.652344C6.89453 0.925781 7.03125 1.22656 7.14062 1.5C8.37109 1.30859 9.60156 1.30859 10.832 1.5C10.9414 1.22656 11.0781 0.925781 11.2422 0.652344C11.2422 0.652344 11.2695 0.625 11.2969 0.652344C12.418 0.84375 13.5117 1.17188 14.5508 1.66406C14.5781 1.66406 14.5781 1.66406 14.5781 1.66406ZM6.32031 8.99219C7.11328 8.99219 7.76953 8.25391 7.76953 7.37891C7.76953 6.47656 7.14062 5.76562 6.32031 5.76562C5.52734 5.76562 4.87109 6.47656 4.87109 7.37891C4.87109 8.25391 5.52734 8.99219 6.32031 8.99219ZM11.6523 8.99219C12.4727 8.99219 13.1016 8.25391 13.1016 7.37891C13.1289 6.47656 12.4727 5.76562 11.6523 5.76562C10.8594 5.76562 10.2305 6.47656 10.2305 7.37891C10.2305 8.25391 10.8594 8.99219 11.6523 8.99219Z" fill="white"></path>
                                            </svg>
                                        </a>
                                    </li>
                                    </ul>
                                </div>
                                <div class="profile">
                                    <a href="team-details.html" class="name">Sam Jones</a>
                                </div>
                            </div>
                        </div></div>
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
            </div>
        </div>
    </div> -->
    <!--================= Team Section End Here =================-->


    <!--================= Gallery Section Start Here =================-->
    <!-- <div class="rts-gallery-section home-four">
        <div class="container">
            <div class="top-wrap">
                <div class="section-title-area section-title-area1">
                    <h1 class="title">MEDIA</h1>
                </div>
                <div class="filter-button-group">
                    <button class="filter-btn active" data-show=".home">ALL</button>
                    <button class="filter-btn" data-show=".highlights">HIGHLIGHTS</button>
                    <button class="filter-btn" data-show=".interview">INTERVIEWS</button>
                    <button class="filter-btn" data-show=".video">VIDEO</button>
                    <button class="filter-btn" data-show=".audio">AUDIO</button>
                </div>
            </div>
            <div class="filterd-items home">
                <div class="gallery-grid">
                    <div class="row">
                        <div class="col-lg-4 col-md-12">
                            <div class="item small-post">
                                <span class="post-icon">
                                    <img src="assets/images/icons/volume.svg" alt="">
                                </span>
                                <a href="blog-details.html" class="gallery-picture"></a>
                                <div class="contents-wrapper">
                                    <div class="contents text-start">
                                        <div class="d-block">
                                            <div class="heading d-flex">
                                                <p class="tag">HIGHLIGHTS</p>
                                            </div>
                                            <div class="gallery-title">
                                                <a href="blog-details.html">Clash of Titans in the Upcoming
                                                    Basketball Battle match</a>
                                            </div>
                                        </div>
                                        <div class="author-info">
                                            <div class="content">
                                                <a href="blog-details.html" class="read-more">READ MORE</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item small-post two">
                                <span class="post-icon">
                                    <img src="assets/images/icons/camera.svg" alt="">
                                </span>
                                <a href="blog-details.html" class="gallery-picture"></a>
                                <div class="contents-wrapper">
                                    <div class="contents text-start">
                                        <div class="d-block">
                                            <div class="heading d-flex">
                                                <p class="tag">HIGHLIGHTS</p>
                                            </div>
                                            <div class="gallery-title">
                                                <a href="blog-details.html">Clash of Titans in the Upcoming
                                                    Basketball Battle match</a>
                                            </div>
                                        </div>
                                        <div class="author-info">
                                            <div class="content">
                                                <a href="blog-details.html" class="read-more">READ MORE</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="item">
                                <a href="blog-details.html" class="gallery-picture"></a>
                                <div class="video-section-inner text-center">
                                    <div class="play-video">
                                        <a class="popup-video" href="https://www.youtube.com/watch?v=G4t6TqG5LM8"><i class="fas fa-play"></i></a>
                                    </div>
                                </div>
                                <div class="contents-wrapper">
                                    <div class="contents text-start">
                                        <div class="d-block">
                                            <div class="heading d-flex">
                                                <p class="tag">HIGHLIGHTS</p>
                                            </div>
                                            <div class="gallery-title">
                                                <a href="blog-details.html">You're going to want to hop on
                                                    the Yandi bandwagon</a>
                                            </div>
                                        </div>
                                        <div class="author-info">
                                            <div class="content">
                                                <a href="blog-details.html" class="read-more">READ MORE</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="item small-post three">
                                <span class="post-icon">
                                    <img src="assets/images/icons/volume.svg" alt="">
                                </span>
                                <a href="blog-details.html" class="gallery-picture"></a>
                                <div class="contents-wrapper">
                                    <div class="contents text-start">
                                        <div class="d-block">
                                            <div class="heading d-flex">
                                                <p class="tag">HIGHLIGHTS</p>
                                            </div>
                                            <div class="gallery-title">
                                                <a href="blog-details.html">Clash of Titans in the Upcoming
                                                    Basketball Battle match</a>
                                            </div>
                                        </div>
                                        <div class="author-info">
                                            <div class="content">
                                                <a href="blog-details.html" class="read-more">READ MORE</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item small-post two four">
                                <span class="post-icon">
                                    <img src="assets/images/icons/camera.svg" alt="">
                                </span>
                                <a href="blog-details.html" class="gallery-picture"></a>
                                <div class="contents-wrapper">
                                    <div class="contents text-start">
                                        <div class="d-block">
                                            <div class="heading d-flex">
                                                <p class="tag">HIGHLIGHTS</p>
                                            </div>
                                            <div class="gallery-title">
                                                <a href="blog-details.html">Clash of Titans in the Upcoming
                                                    Basketball Battle match</a>
                                            </div>
                                        </div>
                                        <div class="author-info">
                                            <div class="content">
                                                <a href="blog-details.html" class="read-more">READ MORE</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="filterd-items highlights hide">
                <div class="gallery-grid">
                    <div class="row">
                        <div class="col-lg-4 col-md-12">
                            <div class="item small-post">
                                <span class="post-icon">
                                    <img src="assets/images/icons/volume.svg" alt="">
                                </span>
                                <a href="blog-details.html" class="gallery-picture"></a>
                                <div class="contents-wrapper">
                                    <div class="contents text-start">
                                        <div class="d-block">
                                            <div class="heading d-flex">
                                                <p class="tag">HIGHLIGHTS</p>
                                            </div>
                                            <div class="gallery-title">
                                                <a href="blog-details.html">Clash of Titans in the Upcoming
                                                    Basketball Battle match</a>
                                            </div>
                                        </div>
                                        <div class="author-info">
                                            <div class="content">
                                                <a href="blog-details.html" class="read-more">READ MORE</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item small-post two">
                                <span class="post-icon">
                                    <img src="assets/images/icons/camera.svg" alt="">
                                </span>
                                <a href="blog-details.html" class="gallery-picture"></a>
                                <div class="contents-wrapper">
                                    <div class="contents text-start">
                                        <div class="d-block">
                                            <div class="heading d-flex">
                                                <p class="tag">HIGHLIGHTS</p>
                                            </div>
                                            <div class="gallery-title">
                                                <a href="blog-details.html">Clash of Titans in the Upcoming
                                                    Basketball Battle match</a>
                                            </div>
                                        </div>
                                        <div class="author-info">
                                            <div class="content">
                                                <a href="blog-details.html" class="read-more">READ MORE</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="item">
                                <a href="blog-details.html" class="gallery-picture"></a>
                                <div class="video-section-inner text-center">
                                    <div class="play-video">
                                        <a class="popup-video" href="https://www.youtube.com/watch?v=G4t6TqG5LM8"><i class="fas fa-play"></i></a>
                                    </div>
                                </div>
                                <div class="contents-wrapper">
                                    <div class="contents text-start">
                                        <div class="d-block">
                                            <div class="heading d-flex">
                                                <p class="tag">HIGHLIGHTS</p>
                                            </div>
                                            <div class="gallery-title">
                                                <a href="blog-details.html">You're going to want to hop on
                                                    the Yandi bandwagon</a>
                                            </div>
                                        </div>
                                        <div class="author-info">
                                            <div class="content">
                                                <a href="blog-details.html" class="read-more">READ MORE</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="item small-post three">
                                <span class="post-icon">
                                    <img src="assets/images/icons/volume.svg" alt="">
                                </span>
                                <a href="blog-details.html" class="gallery-picture"></a>
                                <div class="contents-wrapper">
                                    <div class="contents text-start">
                                        <div class="d-block">
                                            <div class="heading d-flex">
                                                <p class="tag">HIGHLIGHTS</p>
                                            </div>
                                            <div class="gallery-title">
                                                <a href="blog-details.html">Clash of Titans in the Upcoming
                                                    Basketball Battle match</a>
                                            </div>
                                        </div>
                                        <div class="author-info">
                                            <div class="content">
                                                <a href="blog-details.html" class="read-more">READ MORE</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item small-post two four">
                                <span class="post-icon">
                                    <img src="assets/images/icons/camera.svg" alt="">
                                </span>
                                <a href="blog-details.html" class="gallery-picture"></a>
                                <div class="contents-wrapper">
                                    <div class="contents text-start">
                                        <div class="d-block">
                                            <div class="heading d-flex">
                                                <p class="tag">HIGHLIGHTS</p>
                                            </div>
                                            <div class="gallery-title">
                                                <a href="blog-details.html">Clash of Titans in the Upcoming
                                                    Basketball Battle match</a>
                                            </div>
                                        </div>
                                        <div class="author-info">
                                            <div class="content">
                                                <a href="blog-details.html" class="read-more">READ MORE</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="filterd-items interview hide">
                <div class="gallery-grid">
                    <div class="row">
                        <div class="col-lg-4 col-md-12">
                            <div class="item small-post">
                                <span class="post-icon">
                                    <img src="assets/images/icons/volume.svg" alt="">
                                </span>
                                <a href="blog-details.html" class="gallery-picture"></a>
                                <div class="contents-wrapper">
                                    <div class="contents text-start">
                                        <div class="d-block">
                                            <div class="heading d-flex">
                                                <p class="tag">HIGHLIGHTS</p>
                                            </div>
                                            <div class="gallery-title">
                                                <a href="blog-details.html">Clash of Titans in the Upcoming
                                                    Basketball Battle match</a>
                                            </div>
                                        </div>
                                        <div class="author-info">
                                            <div class="content">
                                                <a href="blog-details.html" class="read-more">READ MORE</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item small-post two">
                                <span class="post-icon">
                                    <img src="assets/images/icons/camera.svg" alt="">
                                </span>
                                <a href="blog-details.html" class="gallery-picture"></a>
                                <div class="contents-wrapper">
                                    <div class="contents text-start">
                                        <div class="d-block">
                                            <div class="heading d-flex">
                                                <p class="tag">HIGHLIGHTS</p>
                                            </div>
                                            <div class="gallery-title">
                                                <a href="blog-details.html">Clash of Titans in the Upcoming
                                                    Basketball Battle match</a>
                                            </div>
                                        </div>
                                        <div class="author-info">
                                            <div class="content">
                                                <a href="blog-details.html" class="read-more">READ MORE</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="item">
                                <a href="blog-details.html" class="gallery-picture"></a>
                                <div class="video-section-inner text-center">
                                    <div class="play-video">
                                        <a class="popup-video" href="https://www.youtube.com/watch?v=G4t6TqG5LM8"><i class="fas fa-play"></i></a>
                                    </div>
                                </div>
                                <div class="contents-wrapper">
                                    <div class="contents text-start">
                                        <div class="d-block">
                                            <div class="heading d-flex">
                                                <p class="tag">HIGHLIGHTS</p>
                                            </div>
                                            <div class="gallery-title">
                                                <a href="blog-details.html">You're going to want to hop on
                                                    the Yandi bandwagon</a>
                                            </div>
                                        </div>
                                        <div class="author-info">
                                            <div class="content">
                                                <a href="blog-details.html" class="read-more">READ MORE</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="item small-post three">
                                <span class="post-icon">
                                    <img src="assets/images/icons/volume.svg" alt="">
                                </span>
                                <a href="blog-details.html" class="gallery-picture"></a>
                                <div class="contents-wrapper">
                                    <div class="contents text-start">
                                        <div class="d-block">
                                            <div class="heading d-flex">
                                                <p class="tag">HIGHLIGHTS</p>
                                            </div>
                                            <div class="gallery-title">
                                                <a href="blog-details.html">Clash of Titans in the Upcoming
                                                    Basketball Battle match</a>
                                            </div>
                                        </div>
                                        <div class="author-info">
                                            <div class="content">
                                                <a href="blog-details.html" class="read-more">READ MORE</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item small-post two four">
                                <span class="post-icon">
                                    <img src="assets/images/icons/camera.svg" alt="">
                                </span>
                                <a href="blog-details.html" class="gallery-picture"></a>
                                <div class="contents-wrapper">
                                    <div class="contents text-start">
                                        <div class="d-block">
                                            <div class="heading d-flex">
                                                <p class="tag">HIGHLIGHTS</p>
                                            </div>
                                            <div class="gallery-title">
                                                <a href="blog-details.html">Clash of Titans in the Upcoming
                                                    Basketball Battle match</a>
                                            </div>
                                        </div>
                                        <div class="author-info">
                                            <div class="content">
                                                <a href="blog-details.html" class="read-more">READ MORE</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="filterd-items video hide">
                <div class="gallery-grid">
                    <div class="row">
                        <div class="col-lg-4 col-md-12">
                            <div class="item small-post">
                                <span class="post-icon">
                                    <img src="assets/images/icons/volume.svg" alt="">
                                </span>
                                <a href="blog-details.html" class="gallery-picture"></a>
                                <div class="contents-wrapper">
                                    <div class="contents text-start">
                                        <div class="d-block">
                                            <div class="heading d-flex">
                                                <p class="tag">HIGHLIGHTS</p>
                                            </div>
                                            <div class="gallery-title">
                                                <a href="blog-details.html">Clash of Titans in the Upcoming
                                                    Basketball Battle match</a>
                                            </div>
                                        </div>
                                        <div class="author-info">
                                            <div class="content">
                                                <a href="blog-details.html" class="read-more">READ MORE</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item small-post two">
                                <span class="post-icon">
                                    <img src="assets/images/icons/camera.svg" alt="">
                                </span>
                                <a href="blog-details.html" class="gallery-picture"></a>
                                <div class="contents-wrapper">
                                    <div class="contents text-start">
                                        <div class="d-block">
                                            <div class="heading d-flex">
                                                <p class="tag">HIGHLIGHTS</p>
                                            </div>
                                            <div class="gallery-title">
                                                <a href="blog-details.html">Clash of Titans in the Upcoming
                                                    Basketball Battle match</a>
                                            </div>
                                        </div>
                                        <div class="author-info">
                                            <div class="content">
                                                <a href="blog-details.html" class="read-more">READ MORE</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="item">
                                <a href="blog-details.html" class="gallery-picture"></a>
                                <div class="video-section-inner text-center">
                                    <div class="play-video">
                                        <a class="popup-video" href="https://www.youtube.com/watch?v=G4t6TqG5LM8"><i class="fas fa-play"></i></a>
                                    </div>
                                </div>
                                <div class="contents-wrapper">
                                    <div class="contents text-start">
                                        <div class="d-block">
                                            <div class="heading d-flex">
                                                <p class="tag">HIGHLIGHTS</p>
                                            </div>
                                            <div class="gallery-title">
                                                <a href="blog-details.html">You're going to want to hop on
                                                    the Yandi bandwagon</a>
                                            </div>
                                        </div>
                                        <div class="author-info">
                                            <div class="content">
                                                <a href="blog-details.html" class="read-more">READ MORE</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="item small-post three">
                                <span class="post-icon">
                                    <img src="assets/images/icons/volume.svg" alt="">
                                </span>
                                <a href="blog-details.html" class="gallery-picture"></a>
                                <div class="contents-wrapper">
                                    <div class="contents text-start">
                                        <div class="d-block">
                                            <div class="heading d-flex">
                                                <p class="tag">HIGHLIGHTS</p>
                                            </div>
                                            <div class="gallery-title">
                                                <a href="blog-details.html">Clash of Titans in the Upcoming
                                                    Basketball Battle match</a>
                                            </div>
                                        </div>
                                        <div class="author-info">
                                            <div class="content">
                                                <a href="blog-details.html" class="read-more">READ MORE</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item small-post two four">
                                <span class="post-icon">
                                    <img src="assets/images/icons/camera.svg" alt="">
                                </span>
                                <a href="blog-details.html" class="gallery-picture"></a>
                                <div class="contents-wrapper">
                                    <div class="contents text-start">
                                        <div class="d-block">
                                            <div class="heading d-flex">
                                                <p class="tag">HIGHLIGHTS</p>
                                            </div>
                                            <div class="gallery-title">
                                                <a href="blog-details.html">Clash of Titans in the Upcoming
                                                    Basketball Battle match</a>
                                            </div>
                                        </div>
                                        <div class="author-info">
                                            <div class="content">
                                                <a href="blog-details.html" class="read-more">READ MORE</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="filterd-items audio hide">
                <div class="gallery-grid">
                    <div class="row">
                        <div class="col-lg-4 col-md-12">
                            <div class="item small-post">
                                <span class="post-icon">
                                    <img src="assets/images/icons/volume.svg" alt="">
                                </span>
                                <a href="blog-details.html" class="gallery-picture"></a>
                                <div class="contents-wrapper">
                                    <div class="contents text-start">
                                        <div class="d-block">
                                            <div class="heading d-flex">
                                                <p class="tag">HIGHLIGHTS</p>
                                            </div>
                                            <div class="gallery-title">
                                                <a href="blog-details.html">Clash of Titans in the Upcoming
                                                    Basketball Battle match</a>
                                            </div>
                                        </div>
                                        <div class="author-info">
                                            <div class="content">
                                                <a href="blog-details.html" class="read-more">READ MORE</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item small-post two">
                                <span class="post-icon">
                                    <img src="assets/images/icons/camera.svg" alt="">
                                </span>
                                <a href="blog-details.html" class="gallery-picture"></a>
                                <div class="contents-wrapper">
                                    <div class="contents text-start">
                                        <div class="d-block">
                                            <div class="heading d-flex">
                                                <p class="tag">HIGHLIGHTS</p>
                                            </div>
                                            <div class="gallery-title">
                                                <a href="blog-details.html">Clash of Titans in the Upcoming
                                                    Basketball Battle match</a>
                                            </div>
                                        </div>
                                        <div class="author-info">
                                            <div class="content">
                                                <a href="blog-details.html" class="read-more">READ MORE</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="item">
                                <a href="blog-details.html" class="gallery-picture"></a>
                                <div class="video-section-inner text-center">
                                    <div class="play-video">
                                        <a class="popup-video" href="https://www.youtube.com/watch?v=G4t6TqG5LM8"><i class="fas fa-play"></i></a>
                                    </div>
                                </div>
                                <div class="contents-wrapper">
                                    <div class="contents text-start">
                                        <div class="d-block">
                                            <div class="heading d-flex">
                                                <p class="tag">HIGHLIGHTS</p>
                                            </div>
                                            <div class="gallery-title">
                                                <a href="blog-details.html">You're going to want to hop on
                                                    the Yandi bandwagon</a>
                                            </div>
                                        </div>
                                        <div class="author-info">
                                            <div class="content">
                                                <a href="blog-details.html" class="read-more">READ MORE</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="item small-post three">
                                <span class="post-icon">
                                    <img src="assets/images/icons/volume.svg" alt="">
                                </span>
                                <a href="blog-details.html" class="gallery-picture"></a>
                                <div class="contents-wrapper">
                                    <div class="contents text-start">
                                        <div class="d-block">
                                            <div class="heading d-flex">
                                                <p class="tag">HIGHLIGHTS</p>
                                            </div>
                                            <div class="gallery-title">
                                                <a href="blog-details.html">Clash of Titans in the Upcoming
                                                    Basketball Battle match</a>
                                            </div>
                                        </div>
                                        <div class="author-info">
                                            <div class="content">
                                                <a href="blog-details.html" class="read-more">READ MORE</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item small-post two four">
                                <span class="post-icon">
                                    <img src="assets/images/icons/camera.svg" alt="">
                                </span>
                                <a href="blog-details.html" class="gallery-picture"></a>
                                <div class="contents-wrapper">
                                    <div class="contents text-start">
                                        <div class="d-block">
                                            <div class="heading d-flex">
                                                <p class="tag">HIGHLIGHTS</p>
                                            </div>
                                            <div class="gallery-title">
                                                <a href="blog-details.html">Clash of Titans in the Upcoming
                                                    Basketball Battle match</a>
                                            </div>
                                        </div>
                                        <div class="author-info">
                                            <div class="content">
                                                <a href="blog-details.html" class="read-more">READ MORE</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!--================= Gallery Section End Here =================-->


    <!--================= Sponsors Section Start Here =================-->
    <!-- <div class="rts-sponsors-section pt--100 pb--100">
        <div class="container">
            <div class="sponsors-section-inner">
                <div class="swiper rts-brandSlider swiper-initialized swiper-horizontal swiper-pointer-events">
                    <div class="swiper-wrapper" id="swiper-wrapper-10b4d93b942fd7080" aria-live="off" style="transition-duration: 0ms; transform: translate3d(-2640px, 0px, 0px);"><div class="swiper-slide swiper-slide-duplicate" role="group" aria-label="1 / 6" style="width: 190px; margin-right: 30px;" data-swiper-slide-index="0">
                            <a href="#" class="sponsor-single">
                                <div class="sponsors-logo"><img src="assets/images/brands/7.png" alt="sponsor"></div>
                            </a>
                        </div><div class="swiper-slide swiper-slide-duplicate" role="group" aria-label="2 / 6" style="width: 190px; margin-right: 30px;" data-swiper-slide-index="1">
                            <a href="#" class="sponsor-single">
                                <div class="sponsors-logo"><img src="assets/images/brands/8.png" alt="sponsor"></div>
                            </a>
                        </div><div class="swiper-slide swiper-slide-duplicate" role="group" aria-label="3 / 6" style="width: 190px; margin-right: 30px;" data-swiper-slide-index="2">
                            <a href="#" class="sponsor-single">
                                <div class="sponsors-logo"><img src="assets/images/brands/9.png" alt="sponsor"></div>
                            </a>
                        </div><div class="swiper-slide swiper-slide-duplicate" role="group" aria-label="4 / 6" style="width: 190px; margin-right: 30px;" data-swiper-slide-index="3">
                            <a href="#" class="sponsor-single">
                                <div class="sponsors-logo"><img src="assets/images/brands/10.png" alt="sponsor"></div>
                            </a>
                        </div><div class="swiper-slide swiper-slide-duplicate" role="group" aria-label="5 / 6" style="width: 190px; margin-right: 30px;" data-swiper-slide-index="4">
                            <a href="#" class="sponsor-single">
                                <div class="sponsors-logo"><img src="assets/images/brands/11.png" alt="sponsor"></div>
                            </a>
                        </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" role="group" aria-label="6 / 6" style="width: 190px; margin-right: 30px;" data-swiper-slide-index="5">
                            <a href="#" class="sponsor-single">
                                <div class="sponsors-logo"><img src="assets/images/brands/12.png" alt="sponsor"></div>
                            </a>
                        </div>
                        <div class="swiper-slide swiper-slide-duplicate-active" role="group" aria-label="1 / 6" style="width: 190px; margin-right: 30px;" data-swiper-slide-index="0">
                            <a href="#" class="sponsor-single">
                                <div class="sponsors-logo"><img src="assets/images/brands/7.png" alt="sponsor"></div>
                            </a>
                        </div>
                        <div class="swiper-slide swiper-slide-duplicate-next" role="group" aria-label="2 / 6" style="width: 190px; margin-right: 30px;" data-swiper-slide-index="1">
                            <a href="#" class="sponsor-single">
                                <div class="sponsors-logo"><img src="assets/images/brands/8.png" alt="sponsor"></div>
                            </a>
                        </div>
                        <div class="swiper-slide" role="group" aria-label="3 / 6" style="width: 190px; margin-right: 30px;" data-swiper-slide-index="2">
                            <a href="#" class="sponsor-single">
                                <div class="sponsors-logo"><img src="assets/images/brands/9.png" alt="sponsor"></div>
                            </a>
                        </div>
                        <div class="swiper-slide" role="group" aria-label="4 / 6" style="width: 190px; margin-right: 30px;" data-swiper-slide-index="3">
                            <a href="#" class="sponsor-single">
                                <div class="sponsors-logo"><img src="assets/images/brands/10.png" alt="sponsor"></div>
                            </a>
                        </div>
                        <div class="swiper-slide" role="group" aria-label="5 / 6" style="width: 190px; margin-right: 30px;" data-swiper-slide-index="4">
                            <a href="#" class="sponsor-single">
                                <div class="sponsors-logo"><img src="assets/images/brands/11.png" alt="sponsor"></div>
                            </a>
                        </div>
                        <div class="swiper-slide swiper-slide-prev" role="group" aria-label="6 / 6" style="width: 190px; margin-right: 30px;" data-swiper-slide-index="5">
                            <a href="#" class="sponsor-single">
                                <div class="sponsors-logo"><img src="assets/images/brands/12.png" alt="sponsor"></div>
                            </a>
                        </div>
                    <div class="swiper-slide swiper-slide-duplicate swiper-slide-active" role="group" aria-label="1 / 6" style="width: 190px; margin-right: 30px;" data-swiper-slide-index="0">
                            <a href="#" class="sponsor-single">
                                <div class="sponsors-logo"><img src="assets/images/brands/7.png" alt="sponsor"></div>
                            </a>
                        </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-next" role="group" aria-label="2 / 6" style="width: 190px; margin-right: 30px;" data-swiper-slide-index="1">
                            <a href="#" class="sponsor-single">
                                <div class="sponsors-logo"><img src="assets/images/brands/8.png" alt="sponsor"></div>
                            </a>
                        </div><div class="swiper-slide swiper-slide-duplicate" role="group" aria-label="3 / 6" style="width: 190px; margin-right: 30px;" data-swiper-slide-index="2">
                            <a href="#" class="sponsor-single">
                                <div class="sponsors-logo"><img src="assets/images/brands/9.png" alt="sponsor"></div>
                            </a>
                        </div><div class="swiper-slide swiper-slide-duplicate" role="group" aria-label="4 / 6" style="width: 190px; margin-right: 30px;" data-swiper-slide-index="3">
                            <a href="#" class="sponsor-single">
                                <div class="sponsors-logo"><img src="assets/images/brands/10.png" alt="sponsor"></div>
                            </a>
                        </div><div class="swiper-slide swiper-slide-duplicate" role="group" aria-label="5 / 6" style="width: 190px; margin-right: 30px;" data-swiper-slide-index="4">
                            <a href="#" class="sponsor-single">
                                <div class="sponsors-logo"><img src="assets/images/brands/11.png" alt="sponsor"></div>
                            </a>
                        </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" role="group" aria-label="6 / 6" style="width: 190px; margin-right: 30px;" data-swiper-slide-index="5">
                            <a href="#" class="sponsor-single">
                                <div class="sponsors-logo"><img src="assets/images/brands/12.png" alt="sponsor"></div>
                            </a>
                        </div></div>
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
            </div>
        </div>
    </div> -->
    <!--================= Sponsors Table Section End Here =================-->
@endsection