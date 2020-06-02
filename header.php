<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--    <meta name="description" content="The HTML5 Herald">-->
<!--    <meta name="author" content="SitePoint">-->

    <!-- CSRF Token -->
<!--    <meta name="csrf-token" content="{{ csrf_token() }}">-->

    <title><?php echo TITLE; ?></title>

    <!-- Scripts -->
<!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->
<!--    <script src="{{ asset('js/app.js') }}" defer></script>-->

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">
    <!--
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Thambi+2:wght@500&family=Roboto&display=swap" rel="stylesheet">
-->
    <!-- Styles -->
    <link href="<?php echo ASSETS.'css/app.css'; ?>" rel="stylesheet">
    <link href="<?php echo ASSETS.'css/fontawesome/fontawesome.min.css'; ?>" rel="stylesheet">
    <link href="<?php echo ASSETS.'css/fontawesome/solid.min.css' ?>" rel="stylesheet">
    <link href="<?php echo ASSETS.'css/fontawesome/regular.min.css' ?>" rel="stylesheet">
    <link href="<?php echo ASSETS.'css/fontawesome/brands.min.css' ?>" rel="stylesheet">

    <!-- reset and normalize -->
    <link href="<?php echo ASSETS.'normalize.css' ?>" rel="stylesheet">

</head>
<body>
<div id="app">
    <header>
        <div class="top-header">
            <ul class="top-header-list">
                <li class="top-links">
                    <a class="nav-link" href="{{ route('login') }}">
                        <i class="fas fa-sign-in-alt"></i>
                        Login
                    </a>
                </li>
                <li class="top-links">
                    <a class="nav-link" href="{{ route('register') }}">
                        <i class="fas fa-user-plus"></i>
                        Register
                    </a>
                </li>
<!--                <li>-->
<!--                    <a class="nav-link" href="{{ route('profile') }}">-->
<!--                        <i class="fas fa-user"></i> {{ Auth::user()->name }}-->
<!--                    </a>-->
<!--                </li>-->

<!--                <li>-->
<!--                    <a class="nav-link" href="{{ route('logout') }}"-->
<!--                       onclick="event.preventDefault();-->
<!--                                   document.getElementById('logout-form').submit();">-->
<!--                        <i class="fas fa-power-off"></i>-->
<!--                        {{ __('Logout') }}-->
<!--                    </a>-->
<!---->
<!--                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">-->
<!--                        @csrf-->
<!--                    </form>-->
<!--                </li>-->
                <li class="top-links">
                    <a class="nav-link" href="{{ url(route('cart')) }}">
                        <i class="fas fa-shopping-cart"></i>
                        Cart
                        <span class="notification" >0</span></a>
                </li>

                <li class="search-list">
                    <form action="/search" method="POST" role="search">
<!--                        {{ csrf_field() }}-->
                        <input class="search-input" type="text" name="q" placeholder="Search...">
                        <button class="search-button" type="submit"><i class="fas fa-search"></i></button>
                    </form>
                </li>
            </ul>
        </div>
        <div id="logo">
            <a href="/">
                <img src="<?php echo ASSETS.'imgs/logo.png'; ?>" alt="<?php echo TITLE; ?>">
            </a>
        </div>
        <nav>
            <ul class="navbar-nav">
                <li class="nav-item {{ Request::path() ==  '/' ? 'active' : '' }}">
                    <a href="<?php echo INDEX_URL; ?>"><i class="fas fa-home"></i> Home</a>
                </li>
                <li class="nav-item">
                    <a href=""><i class="fab fa-hotjar"></i> Top Selling</a>
                </li>
                <li class="nav-item {{ Request::path() ==  'category/pc' ? 'active' : ''  }}">
                    <a href="<?php echo INDEX_URL.'category/pc'; ?>"><i class="fas fa-desktop"></i> PC Games</a>
                </li>
                <li class="nav-item {{ Request::path() ==  'category/playstation' ? 'active' : ''  }}">
                    <a href="{{ url(route('category', ['category'=>'playstation'])) }}"><i class="fab fa-playstation"></i> Playstation Games</a>
                </li>
                <li class="nav-item {{ Request::path() ==  'category/xbox' ? 'active' : ''  }}">
                    <a href="{{ url(route('category', ['category'=>'xbox'])) }}"><i class="fab fa-xbox"></i> Xbox Games</a>
                </li>
                <li class="nav-item {{ Request::path() ==  'category/nintendo' ? 'active' : ''  }}">
                    <a href="{{ url(route('category', ['category'=>'nintendo'])) }}"><i class="fas fa-magic"></i> Nintendo Games</a>
                </li>
                <li class="nav-item {{ Request::path() ==  'category/giftcards' ? 'active' : ''  }}">
                    <a href="{{ url(route('category', ['category'=>'giftcards'])) }}"><i class="fas fa-gifts"></i> Gift Cards</a>
                </li>
            </ul>
        </nav>
    </header>
    <main class="container">
        <!-- load from pages -->