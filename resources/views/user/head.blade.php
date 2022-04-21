<!DOCTYPE html>
<html lang="zxx">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Male_Fashion">
        <meta name="keywords" content="Male_Fashion, unica, creative, html">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Male-Fashion | Template</title>
    
        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
        rel="stylesheet">
    
        <!-- Css Styles -->
        <link rel="stylesheet" href="{{url('../public/home')}}/css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="{{url('../public/home')}}/css/font-awesome.min.css" type="text/css">
        <link rel="stylesheet" href="{{url('../public/home')}}/css/elegant-icons.css" type="text/css">
        <link rel="stylesheet" href="{{url('../public/home')}}/css/magnific-popup.css" type="text/css">
        <link rel="stylesheet" href="{{url('../public/home')}}/css/nice-select.css" type="text/css">
        <link rel="stylesheet" href="{{url('../public/home')}}/css/owl.carousel.min.css" type="text/css">
        <link rel="stylesheet" href="{{url('../public/home')}}/css/slicknav.min.css" type="text/css">
        <link rel="stylesheet" href="{{url('../public/home')}}/css/style.css" type="text/css">
    </head>
<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__option">
            @if(Auth::check())
                {{Auth::user()->userimage}}
                {{Auth::user()->username}}
                <a href="">Logout</a> 
            @else
                <div class="offcanvas__links">
                    <a href='{{route('login')}}'>Log in</a>
                </div>
            @endif
            <div class="offcanvas__top__hover">
                <span>Usd <i class="arrow_carrot-down"></i></span>
                <ul>
                    <li>USD</li>
                    <li>EUR</li>
                    <li>USD</li>
                </ul>
            </div>
        </div>
        <div class="offcanvas__nav__option">
            <a href="#" class="search-switch"><img src="{{url('../public/home')}}/img/icon/search.png" alt=""></a>
            <a href="#"><img src="{{url('../public/home')}}/img/icon/heart.png" alt=""></a>
            <a href="#"><img src="{{url('../public/home')}}/img/icon/cart.png" alt=""> <span>0</span></a>
            <div class="price">$0.00</div>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__text">
            <p>Free shipping, 30-day return or refund guarantee.</p>
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-7">
                        <div class="header__top__left">
                            <p>Free shipping, 30-day return or refund guarantee.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-5">
                        <div class="header__top__right">
                            <div class="header__top__links">
                                @if(Auth::check())
                                <a href="{{route('manage')}}">{{Auth::user()->username}}</a>
                                <a href="{{route('logout')}}">Logout</a> 
                            @else
                                <div class="offcanvas__links">
                                    <a href='{{route('login')}}'>Log in</a>
                                    <a href="">FAQs</a>
                                </div>
                            @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="header__logo">
                        <a href="{{route('home')}}"><img src="{{url('../public/home')}}/img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li><a href="{{route('shop')}}">Shop</a></li>
                            <li><a href="{{route('blog')}}">Blog</a></li>
                            <li><a href="{{route('contact')}}">Contacts</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="header__nav__option">
                        <a href="#" class="search-switch"><img src="{{url('../public/home')}}/img/icon/search.png" alt=""></a>
                        <a href="#"><img src="{{url('../public/home')}}/img/icon/heart.png" alt=""></a>
                        <a href="{{route('mycart')}}"><img src="{{url('../public/home')}}/img/icon/cart.png" alt=""> <span>0</span></a>
                        <div class="price">$0.00</div>
                    </div>
                </div>
            </div>
            <div class="canvas__open"><i class="fa fa-bars"></i></div>
        </div>
    </header>
    <!-- Header Section End -->