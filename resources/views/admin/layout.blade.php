<!doctype html>
<html class="fixed">
<head>

    <!-- Basic -->
    <meta charset="UTF-8">

    <title>Dashboard | JSOFT Themes | JSOFT-Admin</title>
    <meta name="keywords" content="HTML5 Admin Template" />
    <meta name="description" content="JSOFT Admin - Responsive HTML5 Template">
    <meta name="author" content="JSOFT.net">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <!-- Web Fonts  -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{\Illuminate\Support\Facades\URL::asset('assets/vendor/bootstrap/css/bootstrap.css')}}" />
    <link rel="stylesheet" href="{{\Illuminate\Support\Facades\URL::asset('assets/vendor/font-awesome/css/font-awesome.css')}}" />
    <link rel="stylesheet" href="{{\Illuminate\Support\Facades\URL::asset('assets/vendor/magnific-popup/magnific-popup.css')}}" />
    <link rel="stylesheet" href="{{\Illuminate\Support\Facades\URL::asset('assets/vendor/bootstrap-datepicker/css/datepicker3.css')}}" />

    <!-- Specific Page Vendor CSS -->
    @yield('page-css')

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{\Illuminate\Support\Facades\URL::asset('assets/stylesheets/theme.css')}}" />

    <!-- Skin CSS -->
    <link rel="stylesheet" href="{{\Illuminate\Support\Facades\URL::asset('assets/stylesheets/skins/default.css')}}" />

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{\Illuminate\Support\Facades\URL::asset('assets/stylesheets/theme-custom.css')}}">

    <!-- Head Libs -->
    <script src="{{\Illuminate\Support\Facades\URL::asset('assets/vendor/modernizr/modernizr.js')}}"></script>

    <-- Font Awesome-->
    <script src="https://kit.fontawesome.com/8b03973819.js" crossorigin="anonymous"></script>

</head>
<body>
<section class="body">

    <!-- start: header -->
    <header class="header">
        <div class="logo-container">
            <a href="/admin" class="logo">
                <img src="{{\Illuminate\Support\Facades\URL::asset('assets/images/logo.png')}}" height="35" alt="JSOFT Admin" />
            </a>
            <div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
                <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
            </div>
        </div>

        <!-- start: search & user box -->
        <div class="header-right">

            <form action="pages-search-results.html" class="search nav-form">
                <div class="input-group input-search">
                    <input type="text" class="form-control" name="q" id="" placeholder="Search...">
                    <span class="input-group-btn">
								<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
							</span>
                </div>
            </form>

            <span class="separator"></span>

            <div id="userbox" class="userbox">
                <a href="#" data-toggle="dropdown">
                    <figure class="profile-picture">
                        <img src="{{\Illuminate\Support\Facades\URL::asset('assets/images/!happy-face.png')}}" alt="Nhật đẹp zai không sợ ai" class="img-circle" data-lock-picture="assets/images/!logged-user.jpg" />
                    </figure>
                    <div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@JSOFT.com">
                        <span class="name">Nguyễn Tiến Nhật</span>
                        <span class="role">Administrator</span>
                    </div>

                    <i class="fa custom-caret"></i>
                </a>

                <div class="dropdown-menu">
                    <ul class="list-unstyled">
                        <li class="divider"></li>
                        <li>
                            <a role="menuitem" tabindex="-1" href="pages-user-profile.html"><i class="fa fa-user"></i> My Profile</a>
                        </li>
                        <li>
                            <a role="menuitem" tabindex="-1" href="#" data-lock-screen="true"><i class="fa fa-lock"></i> Lock Screen</a>
                        </li>
                        <li>
                            <a role="menuitem" tabindex="-1" href="pages-signin.html"><i class="fa fa-power-off"></i> Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- end: search & user box -->
    </header>
    <!-- end: header -->

    <div class="inner-wrapper">
        <!-- start: sidebar -->
        <aside id="sidebar-left" class="sidebar-left">

            <div class="sidebar-header">
                <div class="sidebar-title">
                    Navigation
                </div>
                <div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
                    <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
                </div>
            </div>

            <div class="nano">
                <div class="nano-content">
                    <nav id="menu" class="nav-main" role="navigation">
                        <ul class="nav nav-main">
                            <li class="nav-active">
                                <a href="/admin">
                                    <i class="fa fa-home" aria-hidden="true"></i>
                                    <span>Dashboard</span>
                                </a>
                            </li>
                            <li class="nav-parent">
                                <a>
                                    <i class="fas fa-stream" aria-hidden="true"></i>
                                    <span>Categories</span>
                                </a>
                                <ul class="nav nav-children">
                                    <li>
                                        <a href="maps-google-maps.html">
                                            Basic
                                        </a>
                                    </li>
                                    <li>
                                        <a href="maps-google-maps-builder.html">
                                            Map Builder
                                        </a>
                                    </li>
                                    <li>
                                        <a href="maps-vector.html">
                                            Vector
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-parent">
                                <a>
                                    <i class="fas fa-clipboard-list"></i>
                                    <span>Order</span>
                                </a>
                                <ul class="nav nav-children">
                                    <li>
                                        <a href="layouts-default.html">
                                            Default
                                        </a>
                                    </li>
                                    <li>
                                        <a href="layouts-boxed.html">
                                            Boxed
                                        </a>
                                    </li>
                                    <li>
                                        <a href="layouts-menu-collapsed.html">
                                            Menu Collapsed
                                        </a>
                                    </li>
                                    <li>
                                        <a href="layouts-scroll.html">
                                            Scroll
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-parent">
                                <a>
                                    <i class="fa fa-align-left" aria-hidden="true"></i>
                                    <span>Menu Levels</span>
                                </a>
                                <ul class="nav nav-children">
                                    <li>
                                        <a>First Level</a>
                                    </li>
                                    <li class="nav-parent">
                                        <a>Second Level</a>
                                        <ul class="nav nav-children">
                                            <li class="nav-parent">
                                                <a>Third Level</a>
                                                <ul class="nav nav-children">
                                                    <li>
                                                        <a>Third Level Link #1</a>
                                                    </li>
                                                    <li>
                                                        <a>Third Level Link #2</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a>Second Level Link #1</a>
                                            </li>
                                            <li>
                                                <a>Second Level Link #2</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>

                    <hr class="separator" />
                </div>

            </div>

        </aside>
        <section role="main" class="content-body">
            @yield('header-content')
            @yield('body-content')
        </section>
    </div>
</section>

<!-- Vendor -->
<script src="{{\Illuminate\Support\Facades\URL::asset('assets/vendor/jquery/jquery.js')}}"></script>
<script src="{{\Illuminate\Support\Facades\URL::asset('assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js')}}"></script>
<script src="{{\Illuminate\Support\Facades\URL::asset('assets/vendor/bootstrap/js/bootstrap.js')}}"></script>
<script src="{{\Illuminate\Support\Facades\URL::asset('assets/vendor/nanoscroller/nanoscroller.js')}}"></script>
<script src="{{\Illuminate\Support\Facades\URL::asset('assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
<script src="{{\Illuminate\Support\Facades\URL::asset('assets/vendor/magnific-popup/magnific-popup.js')}}"></script>
<script src="{{\Illuminate\Support\Facades\URL::asset('assets/vendor/jquery-placeholder/jquery.placeholder.js')}}"></script>

<!-- Specific Page Vendor -->
@yield('page-js')
<!-- Theme Base, Components and Settings -->
<script src="{{\Illuminate\Support\Facades\URL::asset('assets/javascripts/theme.js')}}"></script>

<!-- Theme Custom -->
<script src="{{\Illuminate\Support\Facades\URL::asset('assets/javascripts/theme.custom.js')}}"></script>

<!-- Theme Initialization Files -->
<script src="{{\Illuminate\Support\Facades\URL::asset('assets/javascripts/theme.init.js')}}"></script>


<!-- Examples -->
<script src="{{\Illuminate\Support\Facades\URL::asset('assets/javascripts/dashboard/examples.dashboard.js')}}"></script>

<script src="{{URL::asset('assets/javascripts/tables/examples.datatables.default.js')}}"></script>
<script src="{{\Illuminate\Support\Facades\URL::asset('assets/javascripts/tables/examples.datatables.row.with.details.js')}}"></script>
<script src="{{\Illuminate\Support\Facades\URL::asset('assets/javascripts/tables/examples.datatables.tabletools.js')}}"></script>
</body>
</html>
