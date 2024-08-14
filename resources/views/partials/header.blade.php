<!--================= Header Section Start Here =================-->
<header id="rtsHeader" class="rts-header1 header-four">
    <div class="navbar-sticky">
        <div class="navbar-part navbar-part1">
            <div class="container">
                <div class="top-bar">
                    <div class="top-bar-inner">
                        <div class="top-bar-left">
                            <!-- <a href="#" class="get-ticket-btn">Get Ticket</a> -->
                            <ul class="social-wrapper">
                                <li><a href="https://www.facebook.com/mdgcup/" target="_blank"><i class="fab fa-facebook"></i> https://www.facebook.com/mdgcup/</a></li>
                                <!-- <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                <li><a href="#">
                                        <svg width="18" height="13" viewBox="0 0 18 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M14.5781 1.66406C16.3828 4.34375 17.2852 7.35156 16.957 10.8242C16.957 10.8242 16.957 10.8516 16.9297 10.8516C15.7266 11.7539 14.3594 12.4375 12.9102 12.875C12.8828 12.9023 12.8828 12.875 12.8555 12.875C12.5547 12.4375 12.2812 12 12.0352 11.5352C12.0352 11.5078 12.0352 11.4805 12.0625 11.4531C12.5 11.2891 12.9102 11.0977 13.3203 10.8516C13.3477 10.8516 13.3477 10.7969 13.3203 10.7695C13.2383 10.7148 13.1562 10.6602 13.0742 10.5781C13.0469 10.5781 13.0469 10.5781 13.0195 10.5781C10.4219 11.7812 7.57812 11.7812 4.95312 10.5781C4.92578 10.5781 4.89844 10.5781 4.89844 10.5781C4.81641 10.6602 4.73438 10.7148 4.65234 10.7695C4.59766 10.7969 4.625 10.8516 4.65234 10.8516C5.03516 11.0977 5.47266 11.2891 5.91016 11.4531C5.9375 11.4805 5.9375 11.5078 5.9375 11.5352C5.69141 12 5.41797 12.4375 5.11719 12.875C5.08984 12.875 5.0625 12.9023 5.0625 12.875C3.61328 12.4375 2.24609 11.7539 1.04297 10.8516C1.01562 10.8516 1.01562 10.8242 1.01562 10.8242C0.742188 7.81641 1.31641 4.78125 3.39453 1.66406C3.39453 1.66406 3.39453 1.66406 3.42188 1.66406C4.46094 1.17188 5.55469 0.84375 6.67578 0.652344C6.70312 0.625 6.73047 0.652344 6.73047 0.652344C6.89453 0.925781 7.03125 1.22656 7.14062 1.5C8.37109 1.30859 9.60156 1.30859 10.832 1.5C10.9414 1.22656 11.0781 0.925781 11.2422 0.652344C11.2422 0.652344 11.2695 0.625 11.2969 0.652344C12.418 0.84375 13.5117 1.17188 14.5508 1.66406C14.5781 1.66406 14.5781 1.66406 14.5781 1.66406ZM6.32031 8.99219C7.11328 8.99219 7.76953 8.25391 7.76953 7.37891C7.76953 6.47656 7.14062 5.76562 6.32031 5.76562C5.52734 5.76562 4.87109 6.47656 4.87109 7.37891C4.87109 8.25391 5.52734 8.99219 6.32031 8.99219ZM11.6523 8.99219C12.4727 8.99219 13.1016 8.25391 13.1016 7.37891C13.1289 6.47656 12.4727 5.76562 11.6523 5.76562C10.8594 5.76562 10.2305 6.47656 10.2305 7.37891C10.2305 8.25391 10.8594 8.99219 11.6523 8.99219Z" fill="white"></path>
                                        </svg>
                                    </a>
                                </li> -->
                            </ul>
                        </div>
                        <div class="top-bar-mid">
                            <!-- <span class="tag">LIVE</span> -->
                            <!-- <div class="live-match">GOLD KING <span>VS</span> ROYAL UP</div> -->
                        </div>
                        <div class="top-bar-right">
                            @guest
                                <a href="{{ route('google-auth') }}" class="login-btn">Sign in</a>
                            @endguest
                            @auth
                                <a href="#">
                                    <img src="{{ $googleUserInfo->picture }}" class="rounded" height="24px"> {{ auth()->user()->name }} |
                                </a>
                            @endauth
                            @if($myTeam)
                                <a href="{{ route('team.index') }}" class="sign-up-btn">
                                    <span class="bg-dark text-white rounded px-3 text-uppercase">My team</span>
                                </a>
                            @else
                                <a href="{{ route('team-registration') }}" class="sign-up-btn">
                                    <span class="bg-dark text-white rounded px-3 text-uppercase">Register your team</span>
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="navbar-inner">
                    <a href="/" class="logo"><img src="assets/images/web-logo.png" alt="sportius-logo"></a>
                    <a href="/" class="logo-sticky"><img src="assets/images/web-logo.png" alt="kester-logo"></a>
                    <div class="rts-menu">
                        <nav class="menus menu-toggle">
                            <ul class="nav__menu">
                                <li class="has-dropdown"><a class="menu-item {{ (\Illuminate\Support\Facades\Route::current()->uri == '/' ? 'active1' : '') }}" href="/">Home</a>
                                    <!-- <ul class="dropdown-ul">
                                        <li class=""><a class="dropdown-link active" href="index.html">Home One (Soccer)</a>
                                        </li>
                                        <li class="dropdown-li"><a class="dropdown-link" href="index-two.html">Home Two (Sports News)</a></li>
                                        <li class="dropdown-li"><a class="dropdown-link" href="index-four.html">Home Four (Basketball)</a></li>
                                        <li class="dropdown-li"><a class="dropdown-link" href="index-five.html">Home Five (Baseball)</a></li>
                                        <li class="dropdown-li"><a class="dropdown-link" href="index-six.html">Home Six (Cricket)</a></li>
                                        <li class="dropdown-li"><a class="dropdown-link" href="index-seven.html">Home Seven (NFL)</a></li>
                                        <li class="dropdown-li"><a class="dropdown-link" href="index-eight.html">Home Eight (Volleyball)</a></li>
                                    </ul> -->
                                </li>
                                <li><a class="menu-item" href="{{ route('about-us') }}">About</a></li>
                                <!-- <li class="has-dropdown"><a class="menu-item" href="#">Pages</a>
                                    <ul class="dropdown-ul mega-dropdown">
                                        <li class="mega-dropdown-li">
                                            <ul class="mega-dropdown-ul">
                                                <li class="dropdown-li"><a class="dropdown-link" href="team.html">Team Details</a>
                                                </li>
                                                <li class="dropdown-li"><a class="dropdown-link" href="team-details.html">Player Details</a>
                                                </li>
                                                <li class="dropdown-li"><a class="dropdown-link" href="history.html">History</a>
                                                </li>
                                                <li class="dropdown-li"><a class="dropdown-link" href="awards.html">Awards</a>
                                                </li>
                                                <li class="dropdown-li"><a class="dropdown-link" href="faq.html">FAQ</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="mega-dropdown-li">
                                            <ul class="mega-dropdown-ul">
                                                <li class="dropdown-li"><a class="dropdown-link" href="gallery.html">Gallery</a>
                                                </li>
                                                <li class="dropdown-li"><a class="dropdown-link" href="event.html">Event</a>
                                                </li>
                                                <li class="dropdown-li"><a class="dropdown-link" href="event-details.html">Event Details</a>
                                                </li>
                                                <li class="dropdown-li"><a class="dropdown-link" href="error.html">Error</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="mega-dropdown-li">
                                            <ul class="mega-dropdown-ul">
                                                <li class="dropdown-li"><a class="dropdown-link" href="match-schedule.html">Match Schedule</a>
                                                </li>
                                                <li class="dropdown-li"><a class="dropdown-link" href="match-result.html">Match
                                                        Result</a>
                                                </li>
                                                <li class="dropdown-li"><a class="dropdown-link" href="league-standings.html">Point Table</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li> -->
                                <!-- <li class="has-dropdown"><a class="menu-item" href="#">Shop</a>
                                    <ul class="dropdown-ul">
                                        <li class="dropdown-li"><a class="dropdown-link" href="shop.html">Shop</a>
                                        </li>
                                        <li class="dropdown-li"><a class="dropdown-link" href="product-details.html">Product Details</a></li>
                                        <li class="dropdown-li"><a class="dropdown-link" href="cart.html">Cart</a>
                                        </li>
                                        <li class="dropdown-li"><a class="dropdown-link" href="checkout.html">Checkout</a></li>
                                        <li class="dropdown-li"><a class="dropdown-link" href="account.html">My
                                                Account</a></li>
                                        <li class="dropdown-li"><a class="dropdown-link" href="thank-you.html">Thank
                                                you</a></li>
                                    </ul>
                                </li> -->
                                <!-- <li class="has-dropdown"><a class="menu-item" href="#">News</a>
                                    <ul class="dropdown-ul">
                                        <li class="dropdown-li"><a class="dropdown-link" href="blog.html">News</a>
                                        </li>
                                        <li class="dropdown-li"><a class="dropdown-link" href="blog-details.html">News
                                                Details</a></li>
                                    </ul>
                                </li> -->
                                <!-- <li><a class="menu-item" href="updates.html">Updates</a></li> -->
                                <li><a class="menu-item" href="{{ route('faq') }}">FAQ</a></li>
                                <li><a class="menu-item" href="{{ route('contact-us') }}">Contact Us</a></li>
                            </ul>
                        </nav>
                    </div>
                    <!-- <div class="header-action-items header-action-items1">
                        <div class="search-part">
                            <div class="search-icon action-item icon"><i class="rt-search"></i></div>
                            <div class="search-input-area">
                                <div class="container">
                                    <div class="search-input-inner">
                                        <div class="select"><select class="custom-select select-hidden">
                                            <option value="hide">All Catagorys</option>
                                            <option value="all">All</option>
                                            <option value="league">League</option>
                                            <option value="club">Club</option>
                                            <option value="team">Team</option>
                                            <option value="player">Player</option>
                                            <option value="match">Match</option>
                                            <option value="score">Score</option>
                                        </select><div class="select-styled">All Catagorys</div><ul class="select-options" style="display: none;"><li rel="hide">All Catagorys</li><li rel="all">All</li><li rel="league">League</li><li rel="club">Club</li><li rel="team">Team</li><li rel="player">Player</li><li rel="match">Match</li><li rel="score">Score</li></ul></div>
                                        <div class="input-div">
                                            <div class="search-input-icon"><i class="rt-search mr--10"></i></div>
                                            <input id="searchInput1" class="search-input" type="text" placeholder="Search by keyword or #">
                                        </div>
                                        <div class="search-close-icon"><i class="rt-xmark"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cart action-item">
                            <div class="cart-nav">
                                <div class="basket-icon cart-icon icon"><a href="#0"><i class="fal fa-shopping-basket"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <a class="hamburger-menu aitem d-block">
                        <div class="hamburger-menu-inner">
                            <span></span>
                            <span class=""></span>
                            <span></span>
                        </div>
                    </a> -->
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="cart-bar">
        <div class="cart-header">
            <h3 class="cart-heading">MY CART (3 ITEMS)</h3>
            <div class="close-cart"><i class="fal fa-times"></i></div>
        </div>
        <div class="product-area">
            <div class="product-item">
                <div class="product-detail">
                    <div class="product-thumb"><img src="assets/images/products/product1.png" alt="product-thumb">
                    </div>
                    <div class="item-wrapper">
                        <span class="product-name">Parachute Jacket</span>
                        <div class="item-wrapper">
                            <span class="product-variation"><span class="color">Green /</span>
                                <span class="size">XL</span></span>
                        </div>
                        <div class="item-wrapper">
                            <span class="product-qnty">3 ×</span>
                            <span class="product-price">$198.00</span>
                        </div>
                    </div>
                </div>
                <div class="cart-edit">
                    <div class="quantity-edit">
                        <button class="button"><i class="fal fa-minus minus"></i></button>
                        <input type="text" class="input" value="3">
                        <button class="button plus">+<i class="fal fa-plus plus"></i></button>
                    </div>
                    <div class="item-wrapper d-flex mr--5 align-items-center">
                        <a href="#" class="product-edit"><i class="fal fa-edit"></i></a>
                        <a href="#" class="delete-cart"><i class="fal fa-times"></i></a>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <div class="product-detail">
                    <div class="product-thumb"><img src="assets/images/products/product2.png" alt="product-thumb">
                    </div>
                    <div class="item-wrapper">
                        <span class="product-name">Narrow Trouser</span>
                        <div class="item-wrapper">
                            <span class="product-variation"><span class="color">Green /</span>
                                <span class="size">XL</span></span>
                        </div>
                        <div class="item-wrapper">
                            <span class="product-qnty">2 ×</span>
                            <span class="product-price">$88.00</span>
                        </div>
                    </div>
                </div>
                <div class="cart-edit">
                    <div class="quantity-edit">
                        <button class="button"><i class="fal fa-minus minus"></i></button>
                        <input type="text" class="input" value="2">
                        <button class="button plus">+<i class="fal fa-plus plus"></i></button>
                    </div>
                    <div class="item-wrapper d-flex mr--5 align-items-center">
                        <a href="#" class="product-edit"><i class="fal fa-edit"></i></a>
                        <a href="#" class="delete-cart"><i class="fal fa-times"></i></a>
                    </div>
                </div>
            </div>
            <div class="product-item last-child">
                <div class="product-detail">
                    <div class="product-thumb"><img src="assets/images/products/product6.png" alt="product-thumb">
                    </div>
                    <div class="item-wrapper">
                        <span class="product-name">Bellyless Hoodie</span>
                        <div class="item-wrapper">
                            <span class="product-variation"><span class="color">Green /</span>
                                <span class="size">XL</span></span>
                        </div>
                        <div class="item-wrapper">
                            <span class="product-qnty">1 ×</span>
                            <span class="product-price">$289.00</span>
                        </div>
                    </div>
                </div>
                <div class="cart-edit">
                    <div class="quantity-edit">
                        <button class="button"><i class="fal fa-minus minus"></i></button>
                        <input type="text" class="input" value="2">
                        <button class="button plus">+<i class="fal fa-plus plus"></i></button>
                    </div>
                    <div class="item-wrapper d-flex mr--5 align-items-center">
                        <a href="#" class="product-edit"><i class="fal fa-edit"></i></a>
                        <a href="#" class="delete-cart"><i class="fal fa-times"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="cart-bottom-area">
            <span class="spend-shipping"><i class="fal fa-truck"></i> SPENT <span class="amount">$199.00</span> MORE
                FOR FREE SHIPPING</span>
            <span class="total-price">TOTAL: <span class="price">$556</span></span>
            <a href="checkout.html" class="checkout-btn cart-btn">PROCEED TO CHECKOUT</a>
            <a href="cart.html" class="view-btn cart-btn">VIEW CART</a>
        </div>
    </div> -->

    <!--================= Slide Bar Start Here =================-->
    <!-- <aside class="slide-bar">
        <div class="offset-sidebar">
            <button class="slide-bar-close ml--30"><i class="fal fa-times"></i></button>
            <div class="offset-widget offset-logo mb-30">
                <a href="index.html">
                    <img src="assets/images/logo.png" alt="logo">
                </a>
            </div>
        </div>
        <nav class="side-mobile-menu side-mobile-menu1">
            <ul id="mobile-menu-active" class="metismenu">
                <li class="has-dropdown firstlvl">
                    <a class="mm-link" href="index.html">Home <i class="rt-angle-down"></i></a>
                    <ul class="sub-menu mm-collapse">
                        <li><a href="index.html">Home Style 1</a></li>
                        <li><a href="index-two.html">Home Style 2</a></li>
                        <li><a href="index-four.html">Home Style 4</a></li>
                        <li><a href="index-five.html">Home Style 5</a></li>
                        <li><a href="index-six.html">Home Style 6</a></li>
                        <li><a href="index-seven.html">Home Style 7</a></li>
                        <li><a href="index-eight.html">Home Style 8</a></li>
                    </ul>
                </li>
                <li><a class="mm-link" href="about.html">About</a></li>
                <li class="has-dropdown firstlvl">
                    <a class="mm-link" href="index.html">Pages <i class="rt-angle-down"></i></a>
                    <ul class="sub-menu mega-dropdown-mobile mm-collapse">
                        <li class="mega-dropdown-li">
                            <ul class="mega-dropdown-ul mm-show mm-collapse">
                                <li class="dropdown-li"><a class="dropdown-link" href="team.html">Team Details</a>
                                </li>
                                <li class="dropdown-li"><a class="dropdown-link" href="team-details.html">Player
                                        Details</a>
                                </li>
                                <li class="dropdown-li"><a class="dropdown-link" href="history.html">History</a>
                                </li>
                                <li class="dropdown-li"><a class="dropdown-link" href="faq.html">FAQ</a>
                                </li>
                            </ul>
                        </li>
                        <li class="mega-dropdown-li">
                            <ul class="mega-dropdown-ul mm-show mm-collapse">
                                <li class="dropdown-li"><a class="dropdown-link" href="gallery.html">Gallery</a>
                                </li>
                                <li class="dropdown-li"><a class="dropdown-link" href="event.html">Event</a>
                                </li>
                                <li class="dropdown-li"><a class="dropdown-link" href="event-details.html">Event
                                        Details</a>
                                </li>
                                <li class="dropdown-li"><a class="dropdown-link" href="error.html">Error</a>
                                </li>
                            </ul>
                        </li>
                        <li class="mega-dropdown-li">
                            <ul class="mega-dropdown-ul mm-show mm-collapse">
                                <li class="dropdown-li"><a class="dropdown-link" href="match-schedule.html">Match
                                        Schedule</a>
                                </li>
                                <li class="dropdown-li"><a class="dropdown-link" href="match-result.html">Match
                                        Result</a>
                                </li>
                                <li class="dropdown-li"><a class="dropdown-link" href="league-standings.html">Point Table</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="has-dropdown firstlvl">
                    <a class="mm-link" href="index.html">Shop <i class="rt-angle-down"></i></a>
                    <ul class="sub-menu mm-collapse">
                        <li><a href="shop.html">Shop</a></li>
                        <li><a href="product-details.html">Product Details</a></li>
                        <li><a href="cart.html">cart</a></li>
                        <li><a href="checkout.html">Checkout</a></li>
                        <li><a href="account.html">My Account</a></li>
                        <li><a href="thank-you.html">Thank You</a></li>
                    </ul>
                </li>
                <li class="has-dropdown firstlvl">
                    <a class="mm-link" href="news-details.html">News <i class="rt-angle-down"></i></a>
                    <ul class="sub-menu mm-collapse">
                        <li><a href="blog.html">News</a></li>
                        <li><a href="blog-details.html">News Details</a></li>
                    </ul>
                </li>
                <li><a class="mm-link" href="contact.html">Contact</a></li>
            </ul>
        </nav>
        <div class="side-bar-social-links">
            <a href="#0" class="platform"><i class="fab fa-facebook-f"></i></a>
            <a href="#0" class="platform"><i class="fab fa-twitter"></i></a>
            <a href="#0" class="platform"><i class="fab fa-behance"></i></a>
            <a href="#0" class="platform"><i class="fab fa-youtube"></i></a>
        </div>
    </aside> -->
    <!--================= Slide Bar Start Here =================-->

    <!--================= Banner Section Start Here =================-->
    @yield('header-content')
    <!--================= Banner Section End Here =================-->

</header>
<!--================= Header Section End Here =================-->