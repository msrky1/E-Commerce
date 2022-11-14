<!DOCTYPE html>

<html class="no-js" lang="tr-TR" dir="ltr">
<!--<![endif]-->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> E Ticaret Deneme Çalışması</title>
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets') }}/dist/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets') }}/dist/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets') }}/dist/images/favicon/favicon-16x16.png">
    <meta name="theme-color" content="#9ed4d6">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

 
        <link rel="preconnect" media="all" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Licorice&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" media="all" href="{{ asset('assets') }}/dist/css/app.css">
    <link rel="stylesheet" type="text/css" media="all" href="{{ asset('assets') }}/dist/css/table.css">

    
    <!--[if lt IE 9]>
 <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
 <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
 <![endif]-->
    <script src="{{ asset('assets') }}/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>

    <script async="" src="{{ asset('assets') }}/gtag/js.js?id=UA-72465078-6"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'UA-72465078-6');
    </script>

    @livewireStyles
</head>

<body>
    <div class="nav-container fixed-top nav-sticky">
        <nav class="sub-navbar bg-white d-flex">
            <div class="d-flex align-items-center mr-auto">
                <div class="list-select">
                    <div class="inner-select">
                        <div class="selected pt-1">
                            <img src="{{ asset('assets') }}/dist/images/flags/uk.svg" width="18" alt="">
                        </div>
                        <ul>
                            <li>
                                <a href="/">
                                    <img src="{{ asset('assets') }}/dist/images/flags/uk.svg" width="18" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="/">
                                    <img src="{{ asset('assets') }}/dist/images/flags/sa.svg" width="18" alt="">
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
               
            
                @livewire('wishlist-count-component')
                @livewire('cart-count-component')
                <li>
                    <a href="/" class="px-2">Hesabım</a>
                </li>
              
            </ul>
        </nav>
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <img src="{{ asset('assets') }}/dist/images/logo.png" alt="Sham Theme">
                </a>
                <ul class="nav navbar-icons ml-auto order-lg-2">
                    <li class="nav-item mr-3 shopping-cart">
                        <a href="#!" class="li-icon" data-toggle="dropdown" aria-haspopup="false"
                            aria-expanded="false">
                            <i class="bx bx-shopping-bag"></i>

                            <span class="badge badge-secondary rounded-circle">
                                @if (Cart::instance('cart')->count() > 0)
                                    {{ Cart::instance('cart')->count() }}

                                @else

                                    0

                                @endif
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right border-0 shadow">
                            <ul class="dropdown-wrap position-relative" data-slimscroll="false">
                                @if (Cart::instance('cart')->count() > 0)

                                    @foreach (Cart::instance('cart')->content() as $item)

                                        <li class="d-flex">
                                            <a href="{{ route('product.details', $item->model->slug) }}">
                                                <img src="{{ asset('storage') }}/products/{{ $item->model->image }}"
                                                    class="img-fluid product-img" alt="{{ $item->model->image }}">
                                            </a>
                                            <div class="ml-3 product-details">
                                                <p class="product-title font-weight-bold text-uppercase mb-2">
                                                    <a
                                                        href="{{ route('product.details', $item->model->slug) }}">{{ $item->model->name }}</a>
                                                </p>
                                                <p class="product-price text-muted">
                                                    <ins>
                                                        <span
                                                            class="amount">{{ $item->model->regular_price }}</span>
                                                    </ins>
                                                </p>
                                            </div>
                                        </li>
                                        <li class="dropdown-footer p-0 text-center text-uppercase font-weight-bold">
                                            <a href="/cart" class="p-3 d-block">Görüntüle</a>
                                        </li>
                                    @endforeach

                                 
                                @elseif(Cart::instance('cart')->count() == 0 )
                                    <br>

                                    <br>
                                    <li class="dropdown-footer p-0 text-center text-uppercase ">

                                        <img width="100" height="100" src="{{ asset('assets') }}/icons/bin.png">
                                        <br>Sepetiniz Boş.
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </li>
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
                        <li class="nav-item"><a class="nav-link" href="/">Anasayfa</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                Ürünler
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="/shop">Ürünler</a></li>
                                <li><a class="nav-link" href="{{ route('admin.categories') }}">Kategoriler</a>
                                </li>


                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                Sayfalar
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="wishlist.html">Favoriler</a></li>
                                <li><a class="nav-link" href="/cart">Sepet</a></li>
                                <li><a class="nav-link" href="order-received.html">Alınan Siparişler</a></li>
                                <li><a class="nav-link" href="order-tracking.html">Siparişini İzle</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                Hesap
                            </a>
                            <ul class="dropdown-menu">

                                @if (Route::has('login'))
                                    @auth
                                        @if (Auth::user()->utype === 'ADM')
                                        <li><a class="nav-link" href="/shop">Ürünler</a></li>


                                            <li><a class="nav-link"
                                                    href="{{ route('admin.dashboard') }}">{{ Auth::user()->name }} </a>
                                            </li>
                                            <li> <a class="nav-link" href="{{ route('admin.products') }}">Tüm Ürünler
                                                </a></li>
                                            <li> <a class="nav-link" href="{{ route('admin.index') }}">Admin </a>
                                            </li>

                                            <li><a class="nav-link" href="{{ route('logout') }}"
                                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                    Çıkış</a></li>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                                @csrf
                                            </form>


                                        @else


                                            <li><a class="nav-link" href="{{ route('user.dashboard') }}">
                                                    {{ Auth::user()->name }}</a></li>
                                            <li><a class="nav-link" href="{{ route('logout') }}"
                                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                    Çıkış</a></li>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                                @csrf
                                            </form>
                                        @endif


                                    @else

                                        <li><a class="nav-link" href="{{ route('login') }}">GİRİŞ YAP</a></li>
                                        <li><a class="nav-link" href="{{ route('register') }}">ÜYE OL</a></li>


                                    @endif

                                    @endif

                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="{{route('about')}}">HAKKIMIZDA</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{route('contact')}}">İLETİŞİM</a></li>






                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        {{ $slot }}
        <footer class="footer">
            <div class="container">
                <div class="widgets">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 widget widget-about">
                            <h3 class="widget-title">Mark Down</h3>
                            <p>
                                Text
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
                                        <img src="{{ asset('assets') }}/dist/images/products/23.jpg"
                                            class="img-fluid" alt="">
                                    </a>
                                </li>
                                <li class="col-4">
                                    <a href="#!">
                                        <img src="{{ asset('assets') }}/dist/images/products/20.jpg"
                                            class="img-fluid" alt="">
                                    </a>
                                </li>
                                <li class="col-4">
                                    <a href="#!">
                                        <img src="{{ asset('assets') }}/dist/images/products/18.jpg"
                                            class="img-fluid" alt="">
                                    </a>
                                </li>
                                <li class="col-4">
                                    <a href="#!">
                                        <img src="{{ asset('assets') }}/dist/images/products/19.jpg"
                                            class="img-fluid" alt="">
                                    </a>
                                </li>
                                <li class="col-4">
                                    <a href="#!">
                                        <img src="{{ asset('assets') }}/dist/images/products/24.jpg"
                                            class="img-fluid" alt="">
                                    </a>
                                </li>
                                <li class="col-4">
                                    <a href="#!">
                                        <img src="{{ asset('assets') }}/dist/images/products/12.jpg"
                                            class="img-fluid" alt="">
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
                    © Copyright 2021-<script>
                     let getData = new Date();

                      console.log(getData.getFullYear())
                    
                     </script>. Tüm Hakları Saklıdır
                    <br>
                   Oluşturan 
                    <a href="/" class="effect">
                       Mahmut Sarıkaya
                    </a>
                </p>
            </div>
        </footer>

        @include('livewire.header-search-component')
        <a href="#" class="go-to-top">
            <i class="bx bx-chevrons-down"></i>
        </a>
        @livewireScripts
        <script type="text/javascript" src="{{ asset('assets') }}/dist/js/app.js"></script>


    </body>

    </html>
