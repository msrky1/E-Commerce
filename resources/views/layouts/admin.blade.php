<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">
    <title>Admin Paneli </title>
    <link rel="icon" href="{{ asset('admin') }}/assets/favicon.ico" type="image/x-icon"> <!-- Favicon-->
    <link rel="stylesheet" href="{{ asset('admin') }}/assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('admin') }}/assets/plugins/morrisjs/morris.css" />
    <link rel="stylesheet" href="{{ asset('admin') }}/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.css" />
    <!-- Custom Css -->
    <link rel="stylesheet" href="{{ asset('admin') }}/assets/css/main.css">
    <link rel="stylesheet" href="{{ asset('admin') }}/assets/css/color_skins.css">

    <!-- Morris Chart Css-->
    <link rel="stylesheet" href="{{ asset('admin') }}/assets/plugins/morrisjs/morris.css" />
    <!-- Colorpicker Css -->
    <link rel="stylesheet"
        href="{{ asset('admin') }}/assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css" />
    <!-- Multi Select Css -->
    <link rel="stylesheet" href="{{ asset('admin') }}/assets/plugins/multi-select/css/multi-select.css">
    <!-- Bootstrap Spinner Css -->
    <link rel="stylesheet" href="{{ asset('admin') }}/assets/plugins/jquery-spinner/css/bootstrap-spinner.css">
    <!-- Bootstrap Tagsinput Css -->
    <link rel="stylesheet" href="{{ asset('admin') }}/assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css">
    <!-- Bootstrap Select Css -->
    <link rel="stylesheet" href="{{ asset('admin') }}/assets/plugins/bootstrap-select/css/bootstrap-select.css" />
    <!-- noUISlider Css -->
    <link rel="stylesheet" href="{{ asset('admin') }}/assets/plugins/nouislider/nouislider.min.css" />
    <!-- Custom Css -->


    <!-- Bootstrap Material Datetime Picker Css -->
    <link
        href="{{ asset('admin') }}/assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css"
        rel="stylesheet" />
    <!-- Bootstrap Select Css -->
    <link href="{{ asset('admin') }}/assets/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
    <!-- Custom Css -->


    <!-- JQuery DataTable Css -->
    <link rel="stylesheet" href="{{ asset('admin') }}/assets/plugins/jquery-datatable/dataTables.bootstrap4.min.css">
    <!-- Custom Css -->

    @livewireStyles
</head>

<body class="theme-black">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30"><img src="{{ asset('admin') }}/assets/images/logo.svg" width="48" height="48"
                    alt="Alpino"></div>
            <p>Lütfen Bekleyin...</p>
        </div>
    </div>
    <div class="overlay_menu">
        <button class="btn btn-primary btn-icon btn-icon-mini btn-round"><i class="zmdi zmdi-close"></i></button>
        <div class="container">
            <div class="row clearfix">
                <div class="card">
                    <div class="body">
                        <div class="input-group mb-0">
                            <input type="text" class="form-control" placeholder="ara...">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="zmdi zmdi-search"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card links">
                    <div class="body">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <h6>Hesap</h6>
                                <ul class="list-unstyled">
                                    <li><a href="{{ route('admin.products.all') }}">Ürünler</a></li>
                                    <li><a href="/hesabım">Hesabım</a></li>
                                    <li><a href="/profilim">Profilim</a></li>
                                    <li><a href="/file-manager">Dosya Yöneticisi</a></li>
                                    <li><a href="/iletisim">İletişim</a></li>
                                    <li><a href="/mail-gonder">Mail Gönderme</a></li>
                                    <li><a href="/users">Kullanıcılar</a></li>
                                    <li><a href="contact.html">Sipariş - Kargolar</a></li>
                                    <li><a href="contact.html">Kargo Takip</a></li>

                                </ul>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <h6>Site Yönetimi</h6>
                                <ul class="list-unstyled">
                                    <li><a href="ui_kit.html">Slider Yönetimi</a></li>
                                    <li><a href="tabs.html">Kuponlar</a></li>
                                    <li><a href="range-sliders.html">En Çok Satış</a></li>
                                    <li><a href="modals.html">Satış Yönetimi</a></li>
                                    <li><a href="alerts.html">SEO </a></li>

                                </ul>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <h6>GÖrsel Denetleme</h6>
                                <ul class="list-unstyled">
                                    <li><a href="image-gallery.html">Görsel Denetim</a></li>
                                    <li><a href="profile.html">Profiller</a></li>
                                    <li><a href="timeline.html">Ürün Portföyü</a></li>

                                </ul>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <h6>Hakkımızda</h6>
                                <ul class="list-unstyled">
                                    <li><a href="http://thememakker.com/about/" target="_blank">Hakkımızda</a></li>
                                    <li><a href="http://thememakker.com/contact/" target="_blank">İletişim</a></li>
                                    <li><a href="http://thememakker.com/admin-templates/" target="_blank">Admin
                                            Templates</a></li>
                                    <li><a href="http://thememakker.com/services/" target="_blank">Servisler</a></li>
                                    <li><a href="http://thememakker.com/portfolio/" target="_blank">Portföy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12">
                    <div class="social">
                        <a class="icon" href="https://www.facebook.com/thememakkerteam" target="_blank"><i
                                class="zmdi zmdi-facebook"></i></a>
                        <a class="icon" href="https://www.behance.net/thememakker" target="_blank"><i
                                class="zmdi zmdi-behance"></i></a>
                        <a class="icon" href="javascript:void(0);"><i class="zmdi zmdi-twitter"></i></a>
                        <a class="icon" href="javascript:void(0);"><i class="zmdi zmdi-linkedin"></i></a>
                        <p>Mahmut Sarıkaya<br> Designed by <a href="http://www.mahmutsarikaya.com/"
                                target="_blank">www.mahmutsarikaya.com</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="overlay"></div><!-- Overlay For Sidebars -->

    <!-- Left Sidebar -->
    <aside id="minileftbar" class="minileftbar">
        <ul class="menu_list">
            <li>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="index.html"><img src="{{ asset('admin') }}/assets/images/logo.svg"
                        alt="Alpino"></a>
            </li>
            <li><a href="javascript:void(0);" class="btn_overlay hidden-sm-down"><i class="zmdi zmdi-search"></i></a>
            </li>
            <li><a href="javascript:void(0);" class="menu-sm"><i class="zmdi zmdi-swap"></i></a></li>
            <li class="menuapp-btn"><a href="javascript:void(0);"><i class="zmdi zmdi-apps"></i></a></li>
            <li class="notifications badgebit">
                <a href="javascript:void(0);">
                    <i class="zmdi zmdi-notifications"></i>
                    <div class="notify">
                        <span class="heartbit"></span>
                        <span class="point"></span>
                    </div>
                </a>
            </li>
            <li class="task badgebit">
                <a href="javascript:void(0);">
                    <i class="zmdi zmdi-flag"></i>
                    <div class="notify">
                        <span class="heartbit"></span>
                        <span class="point"></span>
                    </div>
                </a>
            </li>
            <li><a href="events.html" title="Events"><i class="zmdi zmdi-calendar"></i></a></li>
            <li><a href="mail-inbox.html" title="Inbox"><i class="zmdi zmdi-email"></i></a></li>
            <li><a href="contact.html" title="Contact List"><i class="zmdi zmdi-account-box-phone"></i></a></li>
            <li><a href="chat.html"><i class="zmdi zmdi-comments"></i></a></li>
            <li><a href="javascript:void(0);" class="fullscreen" data-provide="fullscreen"><i
                        class="zmdi zmdi-fullscreen"></i></a></li>
            <li class="power">
                <a href="javascript:void(0);" class="js-right-sidebar"><i
                        class="zmdi zmdi-settings zmdi-hc-spin"></i></a>
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                    class="mega-menu"><i class="zmdi zmdi-power"></i></a>
            </li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                @csrf
            </form>
        </ul>
    </aside>

    <aside class="right_menu">
        <div class="menu-app">
            <div class="slim_scroll">
                <div class="card">
                    <div class="header">
                        <h2><strong>App</strong> Menu</h2>
                    </div>
                    <div class="body">
                        <ul class="list-unstyled menu">
                            <li><a href="events.html"><i class="zmdi zmdi-calendar-note"></i><span>Kalender</span></a>
                            </li>
                            <li><a href="file-dashboard.html"><i class="zmdi zmdi-file-text"></i><span>Dosyalar
                                        Manager</span></a></li>
                            <li><a href="blog-dashboard.html"><i class="zmdi zmdi-blogger"></i><span>Blog</span></a>
                            </li>
                            <li><a href="javascript:void(0)"><i class="zmdi zmdi-arrows"></i><span>Notlarım</span></a>
                            </li>
                            <li><a href="javascript:void(0)"><i class="zmdi zmdi-view-column"></i><span>Görev
                                        Panosu</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="notif-menu">
            <div class="slim_scroll">
                <div class="card">
                    <div class="header">
                        <h2><strong>Mesajlar</strong></h2>
                    </div>
                    <div class="body">
                        <ul class="messages list-unstyled">
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="media">
                                        <img class="media-object rounded-circle"
                                            src="{{ asset('admin') }}/assets/images/xs/avatar1.jpg" alt="">
                                        <div class="media-body">
                                            <span class="name">Alexander <small class="time">35min
                                                    ago</small></span>
                                            <p class="message">New tasks needs to be done</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="media">
                                        <img class="media-object rounded-circle"
                                            src="{{ asset('admin') }}/assets/images/xs/avatar2.jpg" alt="">
                                        <div class="media-body">
                                            <span class="name">Grayson <small class="time">1hr
                                                    ago</small></span>
                                            <p class="message">New tasks needs to be done</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="media">
                                        <img class="media-object rounded-circle"
                                            src="{{ asset('admin') }}/assets/images/xs/avatar3.jpg" alt="">
                                        <div class="media-body">
                                            <span class="name">Sophia <small class="time">31min
                                                    ago</small></span>
                                            <p class="message">New tasks needs to be done</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <div class="header">
                        <h2><strong>Bildirimler</strong></h2>
                    </div>
                    <div class="body">
                        <ul class="notification list-unstyled">
                            <li>
                                <i class="zmdi zmdi-balance-wallet text-success"></i>
                                <strong>+$30 New sale</strong>
                                <p><a href="javascript:void(0)">Admin Template</a></p>
                                <small class="text-muted">7 min ago</small>
                            </li>
                            <li>
                                <i class="zmdi zmdi-edit text-info"></i>
                                <strong>You Edited file</strong>
                                <p><a href="javascript:void(0)">Docs.doc</a></p>
                                <small class="text-muted">15 min ago</small>
                            </li>
                            <li>
                                <i class="zmdi zmdi-delete text-danger"></i>
                                <strong>Project removed</strong>
                                <p><a href="javascript:void(0)">AdminX BS4</a></p>
                                <small class="text-muted">1 hours ago</small>
                            </li>
                            <li>
                                <i class="zmdi zmdi-account text-success"></i>
                                <strong>New user</strong>
                                <p><a href="javascript:void(0)">UI Designer</a></p>
                                <small class="text-muted">1 hours ago</small>
                            </li>
                            <li>
                                <i class="zmdi zmdi-flag text-warning"></i>
                                <strong>Alpino v1.0.0 is available</strong>
                                <p><a href="javascript:void(0)">Update now</a></p>
                                <small class="text-muted">5 hours ago</small>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="task-menu">
            <div class="slim_scroll">
                <div class="card tasks">
                    <div class="header">
                        <h2><strong>Proje </strong> Statüsü</h2>
                    </div>
                    <div class="body m-b-10">
                        <a href="javascript:void(0);">
                            <span class="text-muted">Project Name 1 <span class="float-right">29%</span></span>
                            <div class="progress">
                                <div class="progress-bar l-turquoise" role="progressbar" aria-valuenow="29"
                                    aria-valuemin="0" aria-valuemax="100" style="width: 29%;"></div>
                            </div>
                            <ul class="list-unstyled team-info">
                                <li class="m-r-15"><small class="text-muted">Team</small></li>
                                <li><img src="{{ asset('admin') }}/assets/images/xs/avatar2.jpg" alt="Avatar"></li>
                                <li><img src="{{ asset('admin') }}/assets/images/xs/avatar3.jpg" alt="Avatar"></li>
                                <li><img src="{{ asset('admin') }}/assets/images/xs/avatar4.jpg" alt="Avatar"></li>
                            </ul>
                        </a>
                    </div>
                    <div class="body m-b-10">
                        <a href="javascript:void(0);">
                            <span class="text-muted">Project Name 2 <span class="float-right">78%</span></span>
                            <div class="progress">
                                <div class="progress-bar l-slategray" role="progressbar" aria-valuenow="78"
                                    aria-valuemin="0" aria-valuemax="100" style="width: 78%;"></div>
                            </div>
                            <ul class="list-unstyled team-info">
                                <li class="m-r-15"><small class="text-muted">Team</small></li>
                                <li><img src="{{ asset('admin') }}/assets/images/xs/avatar6.jpg" alt="Avatar"></li>
                                <li><img src="{{ asset('admin') }}/assets/images/xs/avatar7.jpg" alt="Avatar"></li>
                            </ul>
                        </a>
                    </div>
                    <div class="body">
                        <a href="javascript:void(0);">
                            <span class="text-muted">Project Name 4 <span class="float-right">68%</span></span>
                            <div class="progress">
                                <div class="progress-bar l-coral" role="progressbar" aria-valuenow="68"
                                    aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
                            </div>
                            <ul class="list-unstyled team-info">
                                <li class="m-r-15"><small class="text-muted">Team</small></li>
                                <li><img src="{{ asset('admin') }}/assets/images/xs/avatar8.jpg" alt="Avatar"></li>
                                <li><img src="{{ asset('admin') }}/assets/images/xs/avatar9.jpg" alt="Avatar"></li>
                            </ul>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div id="rightsidebar" class="right-sidebar">
            <ul class="nav nav-tabs">
                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#setting">Ayarlar</a>
                </li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab"
                        href="#activity">Aktiviteler</a></li>
            </ul>
            <div class="tab-content slim_scroll">
                <div class="tab-pane slideRight active" id="setting">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Colors</strong> Skins</h2>
                        </div>
                        <div class="body">
                            <ul class="choose-skin list-unstyled m-b-0">
                                <li data-theme="black" class="active">
                                    <div class="black"></div>
                                </li>
                                <li data-theme="purple">
                                    <div class="purple"></div>
                                </li>
                                <li data-theme="blue">
                                    <div class="blue"></div>
                                </li>
                                <li data-theme="cyan">
                                    <div class="cyan"></div>
                                </li>
                                <li data-theme="green">
                                    <div class="green"></div>
                                </li>
                                <li data-theme="orange">
                                    <div class="orange"></div>
                                </li>
                                <li data-theme="blush">
                                    <div class="blush"></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card">
                        <div class="header">
                            <h2><strong>Genel </strong> Ayarlar</h2>
                        </div>
                        <div class="body">
                            <ul class="setting-list list-unstyled m-b-0">
                                <li>
                                    <div class="checkbox">
                                        <input id="checkbox1" type="checkbox">
                                        <label for="checkbox1">Report Panel Usage</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="checkbox">
                                        <input id="checkbox2" type="checkbox" checked="">
                                        <label for="checkbox2">Email Redirect</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="checkbox">
                                        <input id="checkbox3" type="checkbox">
                                        <label for="checkbox3">Notifications</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="checkbox">
                                        <input id="checkbox4" type="checkbox">
                                        <label for="checkbox4">Auto Updates</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="checkbox">
                                        <input id="checkbox5" type="checkbox" checked="">
                                        <label for="checkbox5">Offline</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="checkbox m-b-0">
                                        <input id="checkbox6" type="checkbox">
                                        <label for="checkbox6">Location Permission</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card">
                        <div class="header">
                            <h2><strong>Sol </strong> Menü</h2>
                        </div>
                        <div class="body theme-light-dark">
                            <button class="t-dark btn btn-primary btn-round btn-block">Dark</button>
                        </div>
                    </div>
                </div>
                <div class="tab-pane slideLeft" id="activity">
                    <div class="card activities">
                        <div class="header">
                            <h2><strong>Recent</strong> Activity Feed</h2>
                        </div>
                        <div class="body">
                            <div class="streamline b-accent">
                                <div class="sl-item">
                                    <div class="sl-content">
                                        <div class="text-muted">Just now</div>
                                        <p>Finished task <a href="#" class="text-info">#features 4</a>.</p>
                                    </div>
                                </div>
                                <div class="sl-item b-info">
                                    <div class="sl-content">
                                        <div class="text-muted">10:30</div>
                                        <p><a href="#">@Jessi</a> retwit your post</p>
                                    </div>
                                </div>
                                <div class="sl-item b-primary">
                                    <div class="sl-content">
                                        <div class="text-muted">12:30</div>
                                        <p>Call to customer <a href="#" class="text-info">Jacob</a> and discuss
                                            the
                                            detail.</p>
                                    </div>
                                </div>
                                <div class="sl-item b-warning">
                                    <div class="sl-content">
                                        <div class="text-muted">1 days ago</div>
                                        <p><a href="#" class="text-info">Jessi</a> commented your post.</p>
                                    </div>
                                </div>
                                <div class="sl-item b-primary">
                                    <div class="sl-content">
                                        <div class="text-muted">2 days ago</div>
                                        <p>Call to customer <a href="#" class="text-info">Jacob</a> and discuss
                                            the
                                            detail.</p>
                                    </div>
                                </div>
                                <div class="sl-item b-primary">
                                    <div class="sl-content">
                                        <div class="text-muted">3 days ago</div>
                                        <p>Call to customer <a href="#" class="text-info">Jacob</a> and discuss
                                            the
                                            detail.</p>
                                    </div>
                                </div>
                                <div class="sl-item b-warning">
                                    <div class="sl-content">
                                        <div class="text-muted">4 Week ago</div>
                                        <p><a href="#" class="text-info">Jessi</a> commented your post.</p>
                                    </div>
                                </div>
                                <div class="sl-item b-warning">
                                    <div class="sl-content">
                                        <div class="text-muted">5 days ago</div>
                                        <p><a href="#" class="text-info">Jessi</a> commented your post.</p>
                                    </div>
                                </div>
                                <div class="sl-item b-primary">
                                    <div class="sl-content">
                                        <div class="text-muted">5 Week ago</div>
                                        <p>Call to customer <a href="#" class="text-info">Jacob</a> and discuss
                                            the
                                            detail.</p>
                                    </div>
                                </div>
                                <div class="sl-item b-primary">
                                    <div class="sl-content">
                                        <div class="text-muted">3 Week ago</div>
                                        <p>Call to customer <a href="#" class="text-info">Jacob</a> and discuss
                                            the
                                            detail.</p>
                                    </div>
                                </div>
                                <div class="sl-item b-warning">
                                    <div class="sl-content">
                                        <div class="text-muted">1 Month ago</div>
                                        <p><a href="#" class="text-info">Jessi</a> commented your post.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="leftsidebar" class="sidebar">
            <div class="menu">
                <ul class="list">
                    <li>
                        <div class="user-info m-b-20">
                            <div class="image">
                                @if (Auth::user()->profile_photo_path == null)
                                    <a href=""><img src="{{ asset('admin') }}/assets/images/profile_av.jpg"
                                            alt="User"></a>
                                @else

                                @endif

                            </div>
                            <div class="detail">
                                <h6>{{ Auth::user()->name }} </h6>
                                <p class="m-b-0">{{ Auth::user()->email }}</p>
                                <a href="javascript:void(0);" title="" class=" waves-effect waves-block"><i
                                        class="zmdi zmdi-facebook-box"></i></a>
                                <a href="javascript:void(0);" title="" class=" waves-effect waves-block"><i
                                        class="zmdi zmdi-linkedin-box"></i></a>
                                <a href="javascript:void(0);" title="" class=" waves-effect waves-block"><i
                                        class="zmdi zmdi-instagram"></i></a>
                                <a href="javascript:void(0);" title="" class=" waves-effect waves-block"><i
                                        class="zmdi zmdi-twitter-box"></i></a>
                            </div>
                        </div>
                    </li>
                    <li class="header">Admin | <a href="/"> Siteye Git </a></li>
                    <li> <a href="{{ route('admin.index') }}"><i class="zmdi zmdi-home"></i><span>Admin
                                Paneli</span></a></li>

                    <li><a href="javascript:void(0);" class="menu-toggle"><i
                                class="zmdi zmdi-apps"></i><span>Uygulamalar</span>
                            <span class="badge badge-success float-right">12</span></a>
                        <ul class="ml-menu">
                            <li><a href="{{ route('admin.products.all') }}">Ürünler</a></li>
                            <li><a href="{{ route('sale.price') }}">İndirimler ve Kampanyalar</a></li>

                            <li><a href="{{ route('admin.categories') }}">Kategoriler</a></li>
                            <li><a href="{{ route('admin.home.sliders') }}">Slider Yönetimi</a></li>
                            <li><a href="/hesabım">Hesabım</a></li>
                            <li><a href="/profilim">Profilim</a></li>
                            <li><a href="/file-manager">Dosya Yöneticisi</a></li>
                            <li><a href="/iletisim">İletişim Bilgileri</a></li>
                            <li><a href="/mail-gonder">Mail Gönder</a></li>

                            <li><a href="/kargolar">Sipariş - Kargolar</a></li>
                            <li><a href="/kargo-takip">Kargo Takip</a></li>
                            <li><a href="/kargo-takip">Site Ayarları</a></li>

                        </ul>
                    </li>

                    <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-assignment">
                            </i><span>Kuponlar</span> <span class="badge badge-warning float-right">2</span></a>

                        <ul class="ml-menu">

                            <li><a href="{{ route('admin.coupons') }}">Kuponları Görüntüle</a></li>
                            <li><a href="{{ route('admin.coupons.add') }}">Kupon Ekle</a></li>


                        </ul>
                    </li>


                    <li class="sm_menu_btm"> <a href="javascript:void(0);" class="menu-toggle"><i
                                class="zmdi zmdi-lock"></i><span>Kullanıcı</span> <span
                                class="badge badge-default float-right">5</span></a>
                        <ul class="ml-menu">
                            <li><a href="{{ route('admin.user') }}">Tüm Kullanıcılar</a></li>

                            <li><a href="{{ route('login') }}">Kullanıcı Değiştir</a></li>
                            <li><a href="{{ route('admin.user.add') }}">Kullanıcı Ekle</a></li>
                            <li><a href="forgot-password.html">Şifreni Değiştir</a></li>

                            <li><a href="sign-in.html">Kullanıcı Engelle</a></li>

                        </ul>
                    </li>

                    <li class="sm_menu_btm"> <a href="javascript:void(0);" class="menu-toggle"><i
                                class="zmdi zmdi-map"></i><span>Haritalar</span> <span
                                class="badge badge-default float-right">2</span></a>
                        <ul class="ml-menu">
                            <li><a href="google.html">Google Haritalar</a></li>
                            <li><a href="yandex.html">Yandex Haritalar</a></li>

                        </ul>
                    </li>
                    <li class="sm_menu_btm"> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-copy"></i><span>Sayfalar</span> <span class="badge badge-primary float-right">2</span></a>
                        <ul class="ml-menu">
                            <li><a href="{{route('admin.contact')}}">İletişim</a></li>
                            <li><a href="{{route('admin.about')}}">Hakkımızda</a></li>
                           
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </aside>





    {{ $slot }}




    @livewireScripts

    <!-- Jquery Core Js -->
    <script src="{{ asset('admin') }}/assets/bundles/libscripts.bundle.js"></script>
    <!-- Lib Scripts Plugin Js -->
    <script src="{{ asset('admin') }}/assets/bundles/vendorscripts.bundle.js"></script>
    <!-- Lib Scripts Plugin Js -->

    <!-- Jquery DataTable Plugin Js -->
    <script src="{{ asset('admin') }}/assets/bundles/datatablescripts.bundle.js"></script>
    <script src="{{ asset('admin') }}/assets/plugins/jquery-datatable/buttons/dataTables.buttons.min.js"></script>
    <script src="{{ asset('admin') }}/assets/plugins/jquery-datatable/buttons/buttons.bootstrap4.min.js"></script>
    <script src="{{ asset('admin') }}/assets/plugins/jquery-datatable/buttons/buttons.colVis.min.js"></script>
    <script src="{{ asset('admin') }}/assets/plugins/jquery-datatable/buttons/buttons.html5.min.js"></script>
    <script src="{{ asset('admin') }}/assets/plugins/jquery-datatable/buttons/buttons.print.min.js"></script>

    <script src="{{ asset('admin') }}/assets/bundles/mainscripts.bundle.js"></script>
    <!-- Custom Js -->
    <script src="{{ asset('admin') }}/assets/js/pages/tables/jquery-datatable.js"></script>










    <script src="{{ asset('admin') }}/assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
    <!-- Bootstrap Colorpicker Js -->

    <script src="{{ asset('admin') }}/assets/plugins/jquery-inputmask/jquery.inputmask.bundle.js"></script>
    <!-- Input Mask Plugin Js -->
    <script src="{{ asset('admin') }}/assets/plugins/multi-select/js/jquery.multi-select.js"></script>
    <!-- Multi Select Plugin Js -->
    <script src="{{ asset('admin') }}/assets/plugins/jquery-spinner/js/jquery.spinner.js"></script>
    <!-- Jquery Spinner Plugin Js -->

    <script src="{{ asset('admin') }}/assets/plugins/nouislider/nouislider.js"></script>
    <!-- noUISlider Plugin Js -->



</body>

<!-- Mirrored from www.wrraptheme.com/templates/alpino/main/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 23 Jun 2019 13:50:16 GMT -->

</html>
