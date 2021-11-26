<!doctype html>
<html lang="en" class="fixed left-sidebar-top">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Helsinki</title>
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('frontEnd/favicon/apple-icon-120x120.png')}}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{asset('frontEnd/favicon/android-icon-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('frontEnd/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('frontEnd/favicon/favicon-16x16.png')}}">
    <!--load progress bar-->
    <script src="{{asset('frontEnd/vendor/pace/pace.min.js')}}"></script>
    <link href="{{asset('frontEnd/vendor/pace/pace-theme-minimal.css')}}" rel="stylesheet" />

    <!--BASIC css-->
    <!-- ========================================================= -->
    <link rel="stylesheet" href="{{asset('frontEnd/vendor/bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('frontEnd/vendor/font-awesome/css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('frontEnd/vendor/animate.css/animate.css')}}">
    <!--SECTION css-->
    <!-- ========================================================= -->
    <!--Notification msj-->
    <link rel="stylesheet" href="{{asset('frontEnd/vendor/toastr/toastr.min.css')}}">
    <!--Magnific popup-->
    <link rel="stylesheet" href="{{asset('frontEnd/vendor/magnific-popup/magnific-popup.css')}}">
    <!--TEMPLATE css-->
    <!-- ========================================================= -->
    <link rel="stylesheet" href="{{asset('frontEnd/stylesheets/css/style.css')}}">


</head>

<body>
    <div class="wrap">
        <!-- page HEADER -->
        <!-- ========================================================= -->
        <div class="page-header">
            <!-- LEFTSIDE header -->
            <div class="leftside-header">
                <div class="logo">
                    <a href="index.html" class="on-click">
                        <img alt="logo" src="{{asset('frontEnd/images/header-logo.png')}}" />
                    </a>
                </div>
                <div id="menu-toggle" class="visible-xs toggle-left-sidebar" data-toggle-class="left-sidebar-open" data-target="html">
                    <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
                </div>
            </div>
            <!-- RIGHTSIDE header -->
            <div class="rightside-header">
                <div class="header-middle"></div>
                <!--SEARCH HEADERBOX-->
                <div class="header-section" id="search-headerbox">
                    <input type="text" name="search" id="search" placeholder="Search...">
                    <i class="fa fa-search search" id="search-icon" aria-hidden="true"></i>
                    <div class="header-separator"></div>
                </div>
                <!--NOCITE HEADERBOX-->
                <div class="header-section hidden-xs" id="notice-headerbox">
                    <!--check list-->

                    <!--messages-->

                    <!--alerts notices-->

                    <div class="header-separator"></div>
                </div>
                <!--USER HEADERBOX -->
                <div class="header-section" id="user-headerbox">
                    <div class="user-header-wrap">
                        <div class="user-photo">
                            <img alt="profile photo" src="{{asset('frontEnd/images/avatar/avatar_user.jpg')}}" />
                        </div>
                        <div class="user-info">
                            <span class="user-name">Jane Doe</span>
                            <span class="user-profile">Admin</span>
                        </div>
                        <i class="fa fa-plus icon-open" aria-hidden="true"></i>
                        <i class="fa fa-minus icon-close" aria-hidden="true"></i>
                    </div>
                    <div class="user-options dropdown-box">
                        <div class="drop-content basic">
                            <ul>
                                <li> <a href="pages_user-profile.html"><i class="fa fa-user" aria-hidden="true"></i> Profile</a></li>
                                <li> <a href="pages_lock-screen.html"><i class="fa fa-lock" aria-hidden="true"></i> Lock Screen</a></li>
                                <li><a href="#"><i class="fa fa-cog" aria-hidden="true"></i> Configurations</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="header-separator"></div>
                <!--Log out -->
                <div class="header-section">
                    <a href="pages_sign-in.html" data-toggle="tooltip" data-placement="left" title="Logout"><i class="fa fa-sign-out log-out" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
        <!-- page BODY -->
        <!-- ========================================================= -->
        <div class="page-body">
            <!-- LEFT SIDEBAR -->
            <!-- ========================================================= -->
            <div class="left-sidebar">
                <!-- left sidebar HEADER -->
                <div class="left-sidebar-header">
                    <div class="left-sidebar-title">Navigation</div>
                    <div class="left-sidebar-toggle c-hamburger c-hamburger--htla hidden-xs" data-toggle-class="left-sidebar-collapsed" data-target="html">
                        <span></span>
                    </div>
                </div>
                <!-- NAVIGATION -->
                <!-- ========================================================= -->
                <div id="left-nav" class="nano">
                    <div class="nano-content">
                        <nav>
                            <ul class="nav nav-left-lines" id="main-nav">
                                <!--HOME-->
                                <li class="active-item"><a href="index.html"><i class="fa fa-home" aria-hidden="true"></i><span>Dashboard</span></a></li>
                                <!--UI ELEMENTENTS-->
                                <li class="has-child-item close-item">
                                    <a><i class="fa fa-cubes" aria-hidden="true"></i><span>UI Elements</span></a>
                                    <ul class="nav child-nav level-1">
                                        <li><a href="ui-elements_panels.html">Panels</a></li>
                                        <li><a href="ui-elements_accordions.html">Accordions</a></li>
                                        <li><a href="ui-elements_tabs.html">Tabs</a></li>
                                        <li><a href="ui-elements_buttons.html">Buttons</a></li>
                                        <li><a href="ui-elements_typography.html">Typography</a></li>
                                        <li><a href="ui-elements_alerts.html">Alerts</a></li>
                                        <li><a href="ui-elements_modals.html">Modals</a></li>
                                        <li><a href="ui-elements_lightbox.html">Lightbox</a></li>
                                        <li class="has-child-item close-item">
                                            <a>Notifications</a>
                                            <ul class="nav child-nav level-2 ">
                                                <li><a href="ui-elements_notifications-pnotify.html">PNotify</a></li>
                                                <li><a href="ui-elements_notifications-toastr.html">Toastr</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="ui-elements_animations-appear.html">Animations</a></li>
                                        <li><a href="ui-elements_badges-tags.html">Badge & Tags</a></li>
                                    </ul>
                                </li>




                                <!--BASIC scripts-->
                                <!-- ========================================================= -->
                                <script src="{{asset('frontEnd/vendor/jquery/jquery-1.12.3.min.js')}}"></script>
                                <script src="{{asset('frontEnd/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
                                <script src="{{asset('frontEnd/vendor/nano-scroller/nano-scroller.js')}}"></script>
                                <!--TEMPLATE scripts-->
                                <!-- ========================================================= -->
                                <script src="{{asset('frontEnd/javascripts/template-script.min.js')}}"></script>
                                <script src="{{asset('frontEnd/javascripts/template-init.min.js')}}"></script>
                                <!-- SECTION script and examples-->
                                <!-- ========================================================= -->
                                <!--Notification msj-->
                                <script src="{{asset('frontEnd/vendor/toastr/toastr.min.js')}}"></script>
                                <!--morris chart-->
                                <script src="{{asset('frontEnd/vendor/chart-js/chart.min.js')}}"></script>
                                <!--Gallery with Magnific popup-->
                                <script src="{{asset('frontEnd/vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
                                <!--Examples-->
                                <script src="{{asset('frontEnd/javascripts/examples/dashboard.js')}}"></script>
</body>

</html>
