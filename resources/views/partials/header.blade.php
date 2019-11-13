<header>
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-4">
                    <div class="left-header clearfix">
                        <ul>
                            <li><p><i class="fa fa-phone" aria-hidden="true"></i>0323-7464982 - 0303-4924682</p></li>
                            <li class="hd-none"><p><i class="fa fa-clock-o" aria-hidden="true"></i>24 / 7
                                </p></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-sm-8">
                    <div class="right-header">
                        <ul>
                            <li><a href="/cart"><i class="fa fa-shopping-cart"></i>My cart</a></li>
                            @if(\Auth::User())
                                <li><a href="/my-account"><i class="fa fa-user"></i>My account</a></li>
                                <li><a href="/my-orders"><i class="fa fa-usd"></i>My Orders</a></li>
                            @endif
                            {{--@if(\Auth::User())--}}
                            <li><a href="/checkout"><i class="fa fa-usd"></i>Check out</a></li>
                            {{--@endif--}}
                            @if(!\Auth::User())
                                <li><a href="/login"><i class="fa fa-lock"></i>Login</a></li>
                                <li><a href="/register"><i class="fa fa-user"></i>Sign Up</a></li>
                            @endif
                            @if(\Auth::User())

                                <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout</a></li>

                                <form id="logout-form" class="hide" action="{{ route('logout') }}" method="POST">
                                    @csrf
                                </form>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom header-bottom-one" id="sticky-menu">
        <div class="container relative">
            <div class="row">
                <div class="col-sm-2 col-md-2 col-xs-4">
                    <div class="logo">
                        {{--<a href="/"><img src="/img/logo.png" alt=""/></a>--}}
                        <a href="/">
                            <svg version="1.1" class="Isolation_Mode logo_anim" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                             y="0px" viewBox="3103.4 -414.7 2324.4 1454.4" style="enable-background:new 3103.4 -414.7 2324.4 1454.4;" xml:space="preserve">
                            <style type="text/css">
                                .st0{fill:#FFC20E;}
                                .st1{fill:#ED1C24;}
                                .st2{fill:#F7941E;}
                                .st3{fill:#FFCF01;}
                                .st4{fill:#FFFFFF;}
                            </style>
                                                    <g>
                                                        <g>
                                                            <path class="st0" d="M3916.1,147.3h1420c50.6,0,91.7-41,91.7-91.7s-41-91.7-91.7-91.7h-1420c-50.6,0-91.7,41-91.7,91.7
                                        S3865.4,147.3,3916.1,147.3z"/>
                                                        </g>
                                                        <g>
                                                            <path class="st1" d="M4204.5,697.7h930c50.6,0,91.7-41,91.7-91.7s-41-91.7-91.7-91.7h-930c-50.6,0-91.7,41-91.7,91.7
                                        S4153.9,697.7,4204.5,697.7z"/>
                                                        </g>
                                                        <g>
                                                            <path class="st2" d="M4071.9,414.7h1166.5c50.6,0,91.7-41,91.7-91.7s-41-91.7-91.7-91.7H4071.9c-50.6,0-91.7,41-91.7,91.7
                                        S4021.2,414.7,4071.9,414.7z"/>
                                                        </g>
                                                        <g>
                                                            <path class="st3" d="M3900.6,146l1325.5,266.7c49.9,8.5,97.3-25,105.8-74.9s-25-97.3-74.9-105.8L3931.5-34.7
                                        c-49.9-8.5-97.3,25-105.8,74.9S3850.7,137.4,3900.6,146z"/>
                                                        </g>
                                                        <g>
                                                            <path class="st2" d="M4056.9,413.4l1067.4,282.3c49.9,8.5,97.3-25,105.8-74.9s-25-97.3-74.9-105.8L4087.8,232.7
                                        c-49.9-8.5-97.3,25-105.8,74.9S4007,404.8,4056.9,413.4z"/>
                                                        </g>
                                                        <g>
                                                            <path class="st4" d="M3195.1-231.3h583.6c50.6,0,91.7-41,91.7-91.7s-41-91.7-91.7-91.7h-583.6c-50.6,0-91.7,41-91.7,91.7
                                        S3144.5-231.3,3195.1-231.3z"/>
                                                        </g>
                                                        <g>
                                                            <path class="st4" d="M3717.8-262.6l109.5,127.9c33.3,38.1,91.2,42,129.3,8.6c38.1-33.3,42-91.2,8.6-129.3l-109.5-127.9
                                        c-33.3-38.1-91.2-42-129.3-8.6C3688.4-358.6,3684.5-300.7,3717.8-262.6z"/>
                                                        </g>
                                                        <g>
                                                            <circle class="st4" cx="4422.6" cy="893" r="146.7"/>
                                                        </g>
                                                        <g>
                                                            <circle class="st4" cx="4932.1" cy="893" r="146.7"/>
                                                        </g>
                                                    </g>
                        </svg>
                        </a>
                    </div>
                </div>
                <div class="col-sm-10 col-md-10 col-xs-8 static">
                    <div class="all-manu-area">
                        <div class="mainmenu clearfix hidden-sm hidden-xs">
                            <nav>
                                <ul>
                                    <li><a href="/">Home</a></li>
                                    <li><a href="about">About Us</a></li>
                                    <li><a href="/categories">Shop</a>
                                        <ul>
                                            <li><a href="/sub-category/8/men-fashion">Men's Fashion</a></li>
                                            <li><a href="/sub-category/10/womens-fashion">Women's Fashion</a></li>
                                            <li><a href="/sub-category/12/babies-care">Baby Care</a></li>
                                            <li><a href="/sub-category/9/tv-&-home-appliances">Home Appliances</a></li>
                                            <li><a href="/sub-category/4/phone-and-tablets">Phone & Tablets</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="javascript:void(0);">Pages</a>
                                        <ul>
                                            <li><a href="/cart">Shopping-Cart</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="/contact">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                        <!-- mobile menu start -->
                        <div class="mobile-menu-area hidden-lg hidden-md">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul>
                                        <li><a href="/">Home</a></li>
                                        <li><a href="about">About Us</a></li>
                                        <li><a href="/categories">Categories</a></li>
                                        <li><a href="javascript:void(0);">Pages</a>
                                            <ul>
                                                @if(\Auth::User())
                                                    <li><a href="/my-account">My Account</a></li>
                                                @endif
                                                <li><a href="/cart">Shopping-Cart</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="/contact">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <!-- mobile menu end -->
                        <div class="right-header re-right-header">
                            <ul>
                                <li class="re-icon tnm"><i class="fa fa-search" aria-hidden="true"></i>
                                    <form method="get" id="searchform" action="/search-results">
                                        <input type="text" name="search" id="search" placeholder="Search product..."/>
                                        <button type="submit"><i class="pe-7s-search"></i></button>
                                    </form>
                                </li>
                                <li><a href="javascript:void(0);"><i class="fa fa-shopping-cart"></i></a>
                                    <ul class="drop-cart">
                                        <li class="checkout-btn text-center">
                                            <a href="/cart">Go to cart</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>