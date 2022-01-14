<!-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">


        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
    </body>
</html> -->


<!DOCTYPE html>

<html class="no-js" lang="en-US" dir="ltr">
<!--<![endif]-->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mahmut Sarıkaya E-Commerce Deneme Çalışması</title>
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets')}}/dist/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets')}}/dist/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets')}}/dist/images/favicon/favicon-16x16.png">
    <meta name="theme-color" content="#9ed4d6">

    <link rel="stylesheet" type="text/css" media="all"
        href="{{asset('assets')}}/fonts/css.css?family=Inconsolata:300,400,500,700|Unica+One:300,400,500,700">

    <link rel="stylesheet" type="text/css" media="all" href="{{asset('assets')}}/dist/css/app.css">
@livewireStyles

    <!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
    <script src="{{asset('assets')}}/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>

    <script async="" src="{{asset('assets')}}/gtag/js.js?id=UA-72465078-6"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'UA-72465078-6');
    </script>
</head>

<body>
    <div class="nav-container fixed-top nav-sticky">
        <nav class="sub-navbar bg-white d-flex">
            <div class="d-flex align-items-center mr-auto">
                <div class="list-select">
                    <div class="inner-select">
                        <div class="selected pt-1">
                            <img src="{{asset('assets')}}/dist/images/flags/uk.svg" width="18" alt="">
                        </div>
                        <ul>
                            <li>
                                <a href="index.html">
                                    <img src="{{asset('assets')}}/dist/images/flags/uk.svg" width="18" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="rtl/index.htm">
                                    <img src="{{asset('assets')}}/dist/images/flags/sa.svg" width="18" alt="">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="list-select">
                    <div class="inner-select">
                        <div class="selected"><i class="bx bx-dollar"></i></div>
                        <ul>
                            <li><a href="#!"><i class="bx bx-dollar"></i></a></li>
                            <li><a href="#!"><i class="bx bx-bitcoin"></i></a></li>
                            <li><a href="#!"><i class="bx bx-euro"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <ul class="nav list-inline ml-auto">
                <li>
                    <a href="#!" class="px-2">My account</a>
                </li>
                <li>
                    <a href="wishlist.html" class="px-2">My Wishlist</a>
                </li>
            </ul>
        </nav>
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <img src="{{asset('assets')}}/dist/images/logo.png" alt="Sham Theme">
                </a>
                <ul class="nav navbar-icons ml-auto order-lg-2">
                    
                    <li class="nav-item">
                        <a href="#!" class="li-icon" id="trigger-overlay"><i class="bx bx-search"></i></a>
                    </li>
                </ul>
                <button class="navbar-toggler ml-0 ml-sm-3 order-lg-3" type="button" data-toggle="collapse"
                    data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div id="navbar" class="collapse navbar-collapse mr-auto">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item dropdown active">
                            <a class="nav-link dropdown-toggle" href="index.html" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                Home
                            </a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-item active"><a class="nav-link" href="#">Default</a></li>
                                <li class="dropdown-item"><a class="nav-link" href="index-2.html">Default Slider</a>
                                </li>
                                <li class="dropdown-item"><a class="nav-link" href="index-3.html">Overlay Products</a>
                                </li>
                                <li class="dropdown-item"><a class="nav-link" href="index-4.html#instagram">Instagram
                                        section</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                Shop
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="/shop">Ürünler</a></li>
                              
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                eCommerce Pages
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="wishlist.html">Wishlist</a></li>
                                <li><a class="nav-link" href="/cart">Cart</a></li>
                                <li><a class="nav-link" href="/checkout">Checkout</a></li>
                                <li><a class="nav-link" href="order-received.html">Order Received</a></li>
                                <li><a class="nav-link" href="order-tracking.html">Order Tracking</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                Hesap
                            </a>
                            <ul class="dropdown-menu">

                            @if(Route::has('login'))
                     @auth
                     @if(Auth::user()->utype === 'ADM')

                     <li><a class="nav-link" href="{{ route('admin.dashboard') }}">{{Auth::user()->name}} </a></li>

                     <li><a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> Çıkış</a></li>

                     <form id="logout-form" action="{{ route('logout')}}" method="POST">
                         @csrf
                     </form>

                    
                     @else
                     <li><a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> Çıkış</a></li>
       
                     <li><a class="nav-link" href="{{ route('admin.dashboard') }}"> {{Auth::user()->name}}</a></li>
                     
                     <form id="logout-form" action="{{route('logout')}}" method="POST">
                         @csrf
                     </form>
                     @endif


                     @else

                     <li><a class="nav-link" href="{{route('login')}}">Login</a></li>
                     <li><a class="nav-link" href="{{route('register')}}">Register</a></li>


                     @endif

             @endif
                        
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>


               
       

                        
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    {{$slot}}
    <footer class="footer">
        <div class="container">
            <div class="widgets">
                <div class="row">
                    <div class="col-lg-3 col-md-6 widget widget-about">
                        <h3 class="widget-title">Sham</h3>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the
                            standard dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry.
                        </p>
                    </div>
                    <div class="col-lg-3 col-md-6 widget widget-links">
                        <h3 class="widget-title">My Account</h3>
                        <div class="row">
                            <ul class="list-unstyled col-6">
                                <li><a href="#!" class="effect">My Account</a></li>
                                <li><a href="#!" class="effect">My Order</a></li>
                                <li><a href="#!" class="effect">My Wiseliest</a></li>
                                <li><a href="#!" class="effect">My Profile</a></li>
                                <li><a href="#!" class="effect">My Address</a></li>
                                <li><a href="#!" class="effect">My Products</a></li>
                            </ul>
                            <ul class="list-unstyled col-6">
                                <li><a href="#!" class="effect">About Us</a></li>
                                <li><a href="#!" class="effect">Contact</a></li>
                                <li><a href="#!" class="effect">Payment</a></li>
                                <li><a href="#!" class="effect">Blog</a></li>
                                <li><a href="#!" class="effect">FAQ's</a></li>
                                <li><a href="#!" class="effect">Order</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 widget widget-instagram">
                        <h3 class="widget-title">Instagram</h3>
                        <ul class="row">
                            <li class="col-4">
                                <a href="#!">
                                    <img src="{{asset('assets')}}/dist/images/products/23.jpg" class="img-fluid" alt="">
                                </a>
                            </li>
                            <li class="col-4">
                                <a href="#!">
                                    <img src="{{asset('assets')}}/dist/images/products/20.jpg" class="img-fluid" alt="">
                                </a>
                            </li>
                            <li class="col-4">
                                <a href="#!">
                                    <img src="{{asset('assets')}}/dist/images/products/18.jpg" class="img-fluid" alt="">
                                </a>
                            </li>
                            <li class="col-4">
                                <a href="#!">
                                    <img src="{{asset('assets')}}/dist/images/products/19.jpg" class="img-fluid" alt="">
                                </a>
                            </li>
                            <li class="col-4">
                                <a href="#!">
                                    <img src="{{asset('assets')}}/dist/images/products/24.jpg" class="img-fluid" alt="">
                                </a>
                            </li>
                            <li class="col-4">
                                <a href="#!">
                                    <img src="{{asset('assets')}}/dist/images/products/12.jpg" class="img-fluid" alt="">
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 widget widget-newsletter">
                        <h3 class="widget-title">Join our Newsletter</h3>
                        <form action="#!" method="POST" class="inputs-border clearfix">
                            <div class="form-group">
                                <input type="email" name="email" placeholder="Your Email" class="form-control"
                                    autocomplete="off">
                                <button type="submit" class="btn btn-primary">
                                    <i class="bx bx-right-arrow-alt"></i>
                                </button>
                            </div>
                        </form>
                        <ul class="social">
                            <li><a href="#!" target="_blank"><i class="bx bxl-facebook"></i></a></li>
                            <li><a href="#!" target="_blank"><i class="bx bxl-twitter"></i></a></li>
                            <li><a href="#!" target="_blank"><i class="bx bxl-instagram"></i></a></li>
                            <li><a href="#!" target="_blank"><i class="bx bxl-snapchat"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright text-center">
            <p>
                © Copyright 2016-2020. All Rights Reserved.
                <br>
                Created by
                <a href="index.htm" class="effect">
                    Hussam Abd
                </a>
            </p>
        </div>
    </footer>

    <div class="overlay overlay-simplegenie">
        <i class="overlay-close bx bx-x"></i>
        <div class="container">
            <div class="row text-center position-relative">
                <div class="col-lg-7 m-auto col-height-center search-form">
                    <form action="#!" method="POST" class="inputs-bg" id="searchform">
                        <label>
                            <strong>Type a sentence or word you want to search for, And press Enter.</strong>
                            <input type="text" name="q" class="form-control" placeholder="Search..">
                        </label>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <a href="#" class="go-to-top">
        <i class="bx bx-chevrons-down"></i>
    </a>

    <script type="text/javascript" src="{{asset('assets')}}/dist/js/app.js"></script>

    @livewireScripts
</body>

</html>
