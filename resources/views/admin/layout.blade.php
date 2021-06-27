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
    <link rel="stylesheet" href="{{\Illuminate\Support\Facades\URL::asset('assets/vendor/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.css')}}" />
    <link rel="stylesheet" href="{{\Illuminate\Support\Facades\URL::asset('assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css')}}" />
    <link rel="stylesheet" href="{{\Illuminate\Support\Facades\URL::asset('assets/vendor/morris/morris.css')}}" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{\Illuminate\Support\Facades\URL::asset('assets/stylesheets/theme.css')}}" />

    <!-- Skin CSS -->
    <link rel="stylesheet" href="{{\Illuminate\Support\Facades\URL::asset('assets/stylesheets/skins/default.css')}}" />

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{\Illuminate\Support\Facades\URL::asset('assets/stylesheets/theme-custom.css')}}">

    <!-- Head Libs -->
    <script src="{{\Illuminate\Support\Facades\URL::asset('assets/vendor/modernizr/modernizr.js')}}"></script>

</head>
<body>
<section class="body">

    <!-- start: header -->
    <header class="header">
        <div class="logo-container">
            <a href="../" class="logo">
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

            <ul class="notifications">
                <li>
                    <a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
                        <i class="fa fa-tasks"></i>
                        <span class="badge">3</span>
                    </a>

                    <div class="dropdown-menu notification-menu large">
                        <div class="notification-title">
                            <span class="pull-right label label-default">3</span>
                            Tasks
                        </div>

                        <div class="content">
                            <ul>
                                <li>
                                    <p class="clearfix mb-xs">
                                        <span class="message pull-left">Generating Sales Report</span>
                                        <span class="message pull-right text-dark">60%</span>
                                    </p>
                                    <div class="progress progress-xs light">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                                    </div>
                                </li>

                                <li>
                                    <p class="clearfix mb-xs">
                                        <span class="message pull-left">Importing Contacts</span>
                                        <span class="message pull-right text-dark">98%</span>
                                    </p>
                                    <div class="progress progress-xs light">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100" style="width: 98%;"></div>
                                    </div>
                                </li>

                                <li>
                                    <p class="clearfix mb-xs">
                                        <span class="message pull-left">Uploading something big</span>
                                        <span class="message pull-right text-dark">33%</span>
                                    </p>
                                    <div class="progress progress-xs light mb-xs">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100" style="width: 33%;"></div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
                        <i class="fa fa-envelope"></i>
                        <span class="badge">4</span>
                    </a>

                    <div class="dropdown-menu notification-menu">
                        <div class="notification-title">
                            <span class="pull-right label label-default">230</span>
                            Messages
                        </div>

                        <div class="content">
                            <ul>
                                <li>
                                    <a href="#" class="clearfix">
                                        <figure class="image">
                                            <img src="{{\Illuminate\Support\Facades\URL::asset('assets/images/!sample-user.jpg')}}" alt="Joseph Doe Junior" class="img-circle" />
                                        </figure>
                                        <span class="title">Joseph Doe</span>
                                        <span class="message">Lorem ipsum dolor sit.</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="clearfix">
                                        <figure class="image">
                                            <img src="{{\Illuminate\Support\Facades\URL::asset('assets/images/!sample-user.jpg')}}" alt="Joseph Junior" class="img-circle" />
                                        </figure>
                                        <span class="title">Joseph Junior</span>
                                        <span class="message truncate">Truncated message. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet lacinia orci. Proin vestibulum eget risus non luctus. Nunc cursus lacinia lacinia. Nulla molestie malesuada est ac tincidunt. Quisque eget convallis diam, nec venenatis risus. Vestibulum blandit faucibus est et malesuada. Sed interdum cursus dui nec venenatis. Pellentesque non nisi lobortis, rutrum eros ut, convallis nisi. Sed tellus turpis, dignissim sit amet tristique quis, pretium id est. Sed aliquam diam diam, sit amet faucibus tellus ultricies eu. Aliquam lacinia nibh a metus bibendum, eu commodo eros commodo. Sed commodo molestie elit, a molestie lacus porttitor id. Donec facilisis varius sapien, ac fringilla velit porttitor et. Nam tincidunt gravida dui, sed pharetra odio pharetra nec. Duis consectetur venenatis pharetra. Vestibulum egestas nisi quis elementum elementum.</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="clearfix">
                                        <figure class="image">
                                            <img src="{{\Illuminate\Support\Facades\URL::asset('assets/images/!sample-user.jpg')}}" alt="Joe Junior" class="img-circle" />
                                        </figure>
                                        <span class="title">Joe Junior</span>
                                        <span class="message">Lorem ipsum dolor sit.</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="clearfix">
                                        <figure class="image">
                                            <img src="{{\Illuminate\Support\Facades\URL::asset('assets/images/!sample-user.jpg')}}" alt="Joseph Junior" class="img-circle" />
                                        </figure>
                                        <span class="title">Joseph Junior</span>
                                        <span class="message">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet lacinia orci. Proin vestibulum eget risus non luctus. Nunc cursus lacinia lacinia. Nulla molestie malesuada est ac tincidunt. Quisque eget convallis diam.</span>
                                    </a>
                                </li>
                            </ul>

                            <hr />

                            <div class="text-right">
                                <a href="#" class="view-more">View All</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
                        <i class="fa fa-bell"></i>
                        <span class="badge">3</span>
                    </a>

                    <div class="dropdown-menu notification-menu">
                        <div class="notification-title">
                            <span class="pull-right label label-default">3</span>
                            Alerts
                        </div>

                        <div class="content">
                            <ul>
                                <li>
                                    <a href="#" class="clearfix">
                                        <div class="image">
                                            <i class="fa fa-thumbs-down bg-danger"></i>
                                        </div>
                                        <span class="title">Server is Down!</span>
                                        <span class="message">Just now</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="clearfix">
                                        <div class="image">
                                            <i class="fa fa-lock bg-warning"></i>
                                        </div>
                                        <span class="title">User Locked</span>
                                        <span class="message">15 minutes ago</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="clearfix">
                                        <div class="image">
                                            <i class="fa fa-signal bg-success"></i>
                                        </div>
                                        <span class="title">Connection Restaured</span>
                                        <span class="message">10/10/2014</span>
                                    </a>
                                </li>
                            </ul>

                            <hr />

                            <div class="text-right">
                                <a href="#" class="view-more">View All</a>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>

            <span class="separator"></span>

            <div id="userbox" class="userbox">
                <a href="#" data-toggle="dropdown">
                    <figure class="profile-picture">
                        <img src="{{\Illuminate\Support\Facades\URL::asset('assets/images/!happy-face.png')}}" alt="Joseph Doe" class="img-circle" data-lock-picture="assets/images/!logged-user.jpg" />
                    </figure>
                    <div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@JSOFT.com">
                        <span class="name">John Doe Junior</span>
                        <span class="role">administrator</span>
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
                                <a href="index.html">
                                    <i class="fa fa-home" aria-hidden="true"></i>
                                    <span>Dashboard</span>
                                </a>
                            </li>
                            <li>
                                <a href="mailbox-folder.html">
                                    <span class="pull-right label label-primary">182</span>
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                    <span>Mailbox</span>
                                </a>
                            </li>
                            <li class="nav-parent">
                                <a>
                                    <i class="fa fa-copy" aria-hidden="true"></i>
                                    <span>Pages</span>
                                </a>
                                <ul class="nav nav-children">
                                    <li>
                                        <a href="pages-signup.html">
                                            Sign Up
                                        </a>
                                    </li>
                                    <li>
                                        <a href="pages-signin.html">
                                            Sign In
                                        </a>
                                    </li>
                                    <li>
                                        <a href="pages-recover-password.html">
                                            Recover Password
                                        </a>
                                    </li>
                                    <li>
                                        <a href="pages-lock-screen.html">
                                            Locked Screen
                                        </a>
                                    </li>
                                    <li>
                                        <a href="pages-user-profile.html">
                                            User Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a href="pages-session-timeout.html">
                                            Session Timeout
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/layout/calendar">
                                            Calendar
                                        </a>
                                    </li>
                                    <li>
                                        <a href="pages-timeline.html">
                                            Timeline
                                        </a>
                                    </li>
                                    <li>
                                        <a href="pages-media-gallery.html">
                                            Media Gallery
                                        </a>
                                    </li>
                                    <li>
                                        <a href="pages-invoice.html">
                                            Invoice
                                        </a>
                                    </li>
                                    <li>
                                        <a href="pages-blank.html">
                                            Blank Page
                                        </a>
                                    </li>
                                    <li>
                                        <a href="pages-404.html">
                                            404
                                        </a>
                                    </li>
                                    <li>
                                        <a href="pages-500.html">
                                            500
                                        </a>
                                    </li>
                                    <li>
                                        <a href="pages-log-viewer.html">
                                            Log Viewer
                                        </a>
                                    </li>
                                    <li>
                                        <a href="pages-search-results.html">
                                            Search Results
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-parent">
                                <a>
                                    <i class="fa fa-tasks" aria-hidden="true"></i>
                                    <span>UI Elements</span>
                                </a>
                                <ul class="nav nav-children">
                                    <li>
                                        <a href="ui-elements-typography.html">
                                            Typography
                                        </a>
                                    </li>
                                    <li>
                                        <a href="ui-elements-icons.html">
                                            Icons
                                        </a>
                                    </li>
                                    <li>
                                        <a href="ui-elements-tabs.html">
                                            Tabs
                                        </a>
                                    </li>
                                    <li>
                                        <a href="ui-elements-panels.html">
                                            Panels
                                        </a>
                                    </li>
                                    <li>
                                        <a href="ui-elements-widgets.html">
                                            Widgets
                                        </a>
                                    </li>
                                    <li>
                                        <a href="ui-elements-portlets.html">
                                            Portlets
                                        </a>
                                    </li>
                                    <li>
                                        <a href="ui-elements-buttons.html">
                                            Buttons
                                        </a>
                                    </li>
                                    <li>
                                        <a href="ui-elements-alerts.html">
                                            Alerts
                                        </a>
                                    </li>
                                    <li>
                                        <a href="ui-elements-notifications.html">
                                            Notifications
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/layout/ui">
                                            Modals
                                        </a>
                                    </li>
                                    <li>
                                        <a href="ui-elements-lightbox.html">
                                            Lightbox
                                        </a>
                                    </li>
                                    <li>
                                        <a href="ui-elements-progressbars.html">
                                            Progress Bars
                                        </a>
                                    </li>
                                    <li>
                                        <a href="ui-elements-sliders.html">
                                            Sliders
                                        </a>
                                    </li>
                                    <li>
                                        <a href="ui-elements-carousels.html">
                                            Carousels
                                        </a>
                                    </li>
                                    <li>
                                        <a href="ui-elements-accordions.html">
                                            Accordions
                                        </a>
                                    </li>
                                    <li>
                                        <a href="ui-elements-nestable.html">
                                            Nestable
                                        </a>
                                    </li>
                                    <li>
                                        <a href="ui-elements-tree-view.html">
                                            Tree View
                                        </a>
                                    </li>
                                    <li>
                                        <a href="ui-elements-grid-system.html">
                                            Grid System
                                        </a>
                                    </li>
                                    <li>
                                        <a href="ui-elements-charts.html">
                                            Charts
                                        </a>
                                    </li>
                                    <li>
                                        <a href="ui-elements-animations.html">
                                            Animations
                                        </a>
                                    </li>
                                    <li>
                                        <a href="ui-elements-extra.html">
                                            Extra
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-parent">
                                <a>
                                    <i class="fa fa-list-alt" aria-hidden="true"></i>
                                    <span>Forms</span>
                                </a>
                                <ul class="nav nav-children">
                                    <li>
                                        <a href="forms-basic.html">
                                            Basic
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/layout/form">
                                            Advanced
                                        </a>
                                    </li>
                                    <li>
                                        <a href="forms-validation.html">
                                            Validation
                                        </a>
                                    </li>
                                    <li>
                                        <a href="forms-layouts.html">
                                            Layouts
                                        </a>
                                    </li>
                                    <li>
                                        <a href="forms-wizard.html">
                                            Wizard
                                        </a>
                                    </li>
                                    <li>
                                        <a href="forms-code-editor.html">
                                            Code Editor
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-parent">
                                <a>
                                    <i class="fa fa-table" aria-hidden="true"></i>
                                    <span>Tables</span>
                                </a>
                                <ul class="nav nav-children">
                                    <li>
                                        <a href="tables-basic.html">
                                            Basic
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/layout/list">
                                            Advanced
                                        </a>
                                    </li>
                                    <li>
                                        <a href="tables-responsive.html">
                                            Responsive
                                        </a>
                                    </li>
                                    <li>
                                        <a href="tables-editable.html">
                                            Editable
                                        </a>
                                    </li>
                                    <li>
                                        <a href="tables-ajax.html">
                                            Ajax
                                        </a>
                                    </li>
                                    <li>
                                        <a href="tables-pricing.html">
                                            Pricing
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-parent">
                                <a>
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <span>Maps</span>
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
                                    <i class="fa fa-columns" aria-hidden="true"></i>
                                    <span>Layouts</span>
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
                            <li>
                                <a href="http://themeforest.net/item/JSOFT-responsive-html5-template/4106987?ref=JSOFT" target="_blank">
                                    <i class="fa fa-external-link" aria-hidden="true"></i>
                                    <span>Front-End <em class="not-included">(Not Included)</em></span>
                                </a>
                            </li>
                        </ul>
                    </nav>

                    <hr class="separator" />

                    <div class="sidebar-widget widget-tasks">
                        <div class="widget-header">
                            <h6>Projects</h6>
                            <div class="widget-toggle">+</div>
                        </div>
                        <div class="widget-content">
                            <ul class="list-unstyled m-none">
                                <li><a href="#">JSOFT HTML5 Template</a></li>
                                <li><a href="#">Tucson Template</a></li>
                                <li><a href="#">JSOFT Admin</a></li>
                            </ul>
                        </div>
                    </div>

                    <hr class="separator" />

                    <div class="sidebar-widget widget-stats">
                        <div class="widget-header">
                            <h6>Company Stats</h6>
                            <div class="widget-toggle">+</div>
                        </div>
                        <div class="widget-content">
                            <ul>
                                <li>
                                    <span class="stats-title">Stat 1</span>
                                    <span class="stats-complete">85%</span>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-primary progress-without-number" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;">
                                            <span class="sr-only">85% Complete</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <span class="stats-title">Stat 2</span>
                                    <span class="stats-complete">70%</span>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-primary progress-without-number" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                                            <span class="sr-only">70% Complete</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <span class="stats-title">Stat 3</span>
                                    <span class="stats-complete">2%</span>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-primary progress-without-number" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100" style="width: 2%;">
                                            <span class="sr-only">2% Complete</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
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
<script src="{{\Illuminate\Support\Facades\URL::asset('assets/vendor/jquery-ui/js/jquery-ui-1.10.4.custom.js')}}"></script>
<script src="{{\Illuminate\Support\Facades\URL::asset('assets/vendor/jquery-ui-touch-punch/jquery.ui.touch-punch.js')}}"></script>
<script src="{{\Illuminate\Support\Facades\URL::asset('assets/vendor/jquery-appear/jquery.appear.js')}}"></script>
<script src="{{\Illuminate\Support\Facades\URL::asset('assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js')}}"></script>
<script src="{{\Illuminate\Support\Facades\URL::asset('assets/vendor/jquery-easypiechart/jquery.easypiechart.js')}}"></script>
<script src="{{\Illuminate\Support\Facades\URL::asset('assets/vendor/flot/jquery.flot.js')}}"></script>
<script src="{{\Illuminate\Support\Facades\URL::asset('assets/vendor/flot-tooltip/jquery.flot.tooltip.js')}}"></script>
<script src="{{\Illuminate\Support\Facades\URL::asset('assets/vendor/flot/jquery.flot.pie.js')}}"></script>
<script src="{{\Illuminate\Support\Facades\URL::asset('assets/vendor/flot/jquery.flot.categories.js')}}"></script>
<script src="{{\Illuminate\Support\Facades\URL::asset('assets/vendor/flot/jquery.flot.resize.js')}}"></script>
<script src="{{\Illuminate\Support\Facades\URL::asset('assets/vendor/jquery-sparkline/jquery.sparkline.js')}}"></script>
<script src="{{\Illuminate\Support\Facades\URL::asset('assets/vendor/raphael/raphael.js')}}"></script>
<script src="{{\Illuminate\Support\Facades\URL::asset('assets/vendor/morris/morris.js')}}"></script>
<script src="{{\Illuminate\Support\Facades\URL::asset('assets/vendor/gauge/gauge.js')}}"></script>
<script src="{{\Illuminate\Support\Facades\URL::asset('assets/vendor/snap-svg/snap.svg.js')}}"></script>
<script src="{{\Illuminate\Support\Facades\URL::asset('assets/vendor/liquid-meter/liquid.meter.js')}}"></script>
<script src="{{\Illuminate\Support\Facades\URL::asset('assets/vendor/jqvmap/jquery.vmap.js')}}"></script>
<script src="{{\Illuminate\Support\Facades\URL::asset('assets/vendor/jqvmap/data/jquery.vmap.sampledata.js')}}"></script>
<script src="{{\Illuminate\Support\Facades\URL::asset('assets/vendor/jqvmap/maps/jquery.vmap.world.js')}}"></script>
<script src="{{\Illuminate\Support\Facades\URL::asset('assets/vendor/jqvmap/maps/continents/jquery.vmap.africa.js')}}"></script>
<script src="{{\Illuminate\Support\Facades\URL::asset('assets/vendor/jqvmap/maps/continents/jquery.vmap.asia.js')}}"></script>
<script src="{{\Illuminate\Support\Facades\URL::asset('assets/vendor/jqvmap/maps/continents/jquery.vmap.australia.js')}}"></script>
<script src="{{\Illuminate\Support\Facades\URL::asset('assets/vendor/jqvmap/maps/continents/jquery.vmap.europe.js')}}"></script>
<script src="{{\Illuminate\Support\Facades\URL::asset('assets/vendor/jqvmap/maps/continents/jquery.vmap.north-america.js')}}"></script>
<script src="{{\Illuminate\Support\Facades\URL::asset('assets/vendor/jqvmap/maps/continents/jquery.vmap.south-america.js')}}"></script>

<!-- Theme Base, Components and Settings -->
<script src="{{\Illuminate\Support\Facades\URL::asset('assets/javascripts/theme.js')}}"></script>

<!-- Theme Custom -->
<script src="{{\Illuminate\Support\Facades\URL::asset('assets/javascripts/theme.custom.js')}}"></script>

<!-- Theme Initialization Files -->
<script src="{{\Illuminate\Support\Facades\URL::asset('assets/javascripts/theme.init.js')}}"></script>


<!-- Examples -->
<script src="{{\Illuminate\Support\Facades\URL::asset('assets/javascripts/dashboard/examples.dashboard.js')}}"></script>
</body>
</html>
