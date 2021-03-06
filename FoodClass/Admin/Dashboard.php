<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="description" content="bootstrap default admin template">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="assets/global/plugins/Waves/dist/waves.min.css"/>
    <link rel="stylesheet" href="assets/global/plugins/bootstrap/dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="assets/icons_fonts/font-awesome/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="assets/global/plugins/jqvmap/dist/jqvmap.css"/>
    <link href="assets/global/css/components.min.css" type="text/css" rel="stylesheet"/>
    <link rel="stylesheet" href="assets/layouts/layouts_left_menu/left_menu_layout.min.css"/>
    <link rel="icon" href="assets/favicon/prince.ico" type="image/x-icon"/>
    <link rel="icon" type="image/png" sizes="192x192" href="assets/favicon/prince-192x192.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/prince-180x180.png">

</head>
<body class="nav-medium">
<div class="container body">
    <div class="main_container">
            <!-- Start Loader -->
<div class="page-loader">
    <div class="preloader loading">
        <span class="slice"></span>
        <span class="slice"></span>
        <span class="slice"></span>
        <span class="slice"></span>
        <span class="slice"></span>
        <span class="slice"></span>
    </div>
</div>
<!-- End Loader -->

<!-- Start Scroll Top -->
<a href="javascript:" id="scroll" style="display: none;"><span></span></a>
<!-- End Scroll Top -->

<!-- start Left Menu-->
<?php require("BlockAdmin/LeftMenu.php") ?>
<!-- End Left Menu -->

<!-- start top navigation -->
<div class="top_nav">
    <div class="nav_menu">
        <nav>
            <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                <div class="responsive-logo">
                    <a href="index.html">
                        <img src="assets/global/images/prince_logo.png" alt="main-logo">
                    </a>
                </div>
            </div>

            <div class="topbar-right">
                <div class="nav navbar-nav navbar-right">

                    <div class="header-search right-icon">
                        <form role="search" class="search-box">
                            <input placeholder="Search..." class="form-control" type="text">
                            <a href="javascript:">
                                <i class="fa fa-search"></i>
                            </a>
                        </form>
                    </div>

                    <div class="dropdown header-notification right-icon">
                        <a href="javascript:" class="dropdown-toggle waves-effect waves-light notification-icon"
                           data-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-bell-o" aria-hidden="true"></i>
                            <span class="label label-danger">4</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="text-center">
                                <p class="notification-title">Notification<span
                                            class="label label-primary">4</span></p>
                            </li>
                            <li class="list-group default-scroll">
                                <a href="javascript:;" class="list-group-item">
                                    <div class="media">
                                        <div class="pull-left">
                                            <img src="assets/global/images/user1.jpg" alt="user">
                                        </div>
                                        <div class="media-body">
                                            <h5 class="media-heading"><span>Domance Den</span> posted a photo on
                                                your wall.</h5>
                                        </div>
                                    </div>
                                </a>
                                <a href="javascript:;" class="list-group-item">
                                    <div class="media">
                                        <div class="pull-left">
                                            <img src="assets/global/images/user2.jpg" alt="user">
                                        </div>
                                        <div class="media-body">
                                            <h5 class="media-heading"><span>Wikko Menta</span> commented on your
                                                last video.</h5>
                                        </div>
                                    </div>
                                </a>
                                <a href="javascript:;" class="list-group-item">
                                    <div class="media">
                                        <div class="pull-left">
                                            <img src="assets/global/images/user3.jpg" alt="user">
                                        </div>
                                        <div class="media-body">
                                            <h5 class="media-heading"><span>Jonny Sem</span> posted 4 comments
                                                on your photo.</h5>
                                        </div>
                                    </div>
                                </a>
                                <a href="javascript:;" class="list-group-item">
                                    <div class="media">
                                        <div class="pull-left">
                                            <img src="assets/global/images/user4.jpg" alt="user">
                                        </div>
                                        <div class="media-body">
                                            <h5 class="media-heading"><span>Doli Senga</span> posted a photo on
                                                your wall.</h5>
                                        </div>
                                    </div>
                                </a>
                                <a href="javascript:;" class="list-group-item">
                                    <div class="media">
                                        <div class="pull-left">
                                            <img src="assets/global/images/user5.jpg" alt="user">
                                        </div>
                                        <div class="media-body">
                                            <h5 class="media-heading"><span>Bhura Kenta</span> commented on your
                                                last video.</h5>
                                        </div>
                                    </div>
                                </a>
                                <a href="javascript:;" class="list-group-item">
                                    <div class="media">
                                        <div class="pull-left">
                                            <img src="assets/global/images/user6.jpg" alt="user">
                                        </div>
                                        <div class="media-body">
                                            <h5 class="media-heading"><span>Jolly Baby</span> posted 2 comments
                                                on your photo.</h5>
                                        </div>
                                    </div>
                                </a>

                            </li>
                            <li class="all-notification">
                                <a href="javascript:;" class="list-group-item text-right">
                                    <small>See all notifications</small>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="header-fullscreen right-icon">
                        <a href="javascript:" class="waves-effect waves-light toggle-fullscreen">
                            <i class="fa fa-arrows-alt" aria-hidden="true"></i>
                        </a>
                    </div>

                    <!--<div class="header-chat right-icon">
                        <a href="javascript:" class="waves-effect waves-light">
                            <i class="fa fa-comments-o" aria-hidden="true"></i>
                        </a>
                    </div>-->

                    <div class="dropdown user-profile right-icon">
                        <a href="javascript:" class="dropdown-toggle waves-effect waves-light"
                           data-toggle="dropdown"
                           aria-expanded="false">
                            <img src="assets/global/images/user10.jpg" alt="user">
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="javascript:" class="waves-effect waves-light">
                                    <i class="fa fa-user" aria-hidden="true"></i>Profile</a>
                            </li>
                            <li><a href="javascript:" class="waves-effect waves-light">
                                    <i class="fa fa-cog" aria-hidden="true"></i>Settings</a>
                            </li>
                            <li><a href="javascript:" class="waves-effect waves-light">
                                    <i class="fa fa-lock" aria-hidden="true"></i>Lock screen</a>
                            </li>
                            <li role="separator" class="divider"></li>
                            <li><a href="javascript:" class="waves-effect waves-light">
                                    <i class="fa fa-power-off text-danger" aria-hidden="true"></i> Logout</a>
                            </li>
                        </ul>
                    </div>

                </div>

            </div>
        </nav>
    </div>
</div>
<div class="clearfix"></div>
<!-- End top navigation -->
    <!-- Start Contain Section -->
    <div class="container-fluid right_color">
        <div class="page-main-header">
            <!-- Page Title -->
            <!--  Breadcrumb -->
            <ol class="breadcrumb">
                <li><a href="#"></a>Trang chủ</li>
                <li class="text-info">Dashboard</li>
            </ol>
        </div>

        <div class="contain-section dashboard_v1">

            <div class="row">
                <div class="col-lg-8 col-md-6 col-sm-12 col-xs-12">
                    <div class="section-body">
                        <canvas id="line-basic"></canvas>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="section-body">
                        <div class="section-header">
                            <h2>Tops Profile</h2>
                        </div>
                        <div class="events">
                            <a class="date">
                                <p class="month">Feb</p>
                                <p class="day">14</p>
                            </a>
                            <div class="event-body">
                                <a class="title" href="javascript:">Item Title Here</a>
                                <p>It is a long established fact that a reader will be distracted by the readable
                                    content.</p>
                            </div>
                        </div>
                        <div class="events">
                            <a class="date">
                                <p class="month">March</p>
                                <p class="day">30</p>
                            </a>
                            <div class="event-body">
                                <a class="title" href="javascript:">Item Title Here</a>
                                <p>It is a long established fact that a reader will be distracted by the readable
                                    content.</p>
                            </div>
                        </div>
                        <div class="events">
                            <a class="date">
                                <p class="month">April</p>
                                <p class="day">19</p>
                            </a>
                            <div class="event-body">
                                <a class="title" href="javascript:">Item Title Here</a>
                                <p>It is a long established fact that a reader will be distracted by the readable
                                    content.</p>
                            </div>
                        </div>
                        <div class="events">
                            <a class="date">
                                <p class="month">May</p>
                                <p class="day">05</p>
                            </a>
                            <div class="event-body">
                                <a class="title" href="javascript:">Item Title Here</a>
                                <p>It is a long established fact that a reader will be distracted by the readable
                                    content.</p>
                            </div>
                        </div>
                        <div class="events margin-b-0">
                            <a class="date">
                                <p class="month">May</p>
                                <p class="day">22</p>
                            </a>
                            <div class="event-body">
                                <a class="title" href="javascript:">Item Title Here</a>
                                <p>It is a long established fact that a reader will be distracted by the readable
                                    content.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="section-body">
                        <div class="section-header">
                            <h2>Weekly Summary</h2>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                            <span class="sparkbar">10,9,3,7,4,2,9,7,6,5,4,3,4,5,6,7,8,9,3,2,8,7,9,9,10,9</span>
                            <h5 class="bottom-title">Sales Progress</h5>
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-xs-12 text-center">
                                    <span class="sparkpie">1,1,2,3,4,2</span>
                                    <h5 class="bottom-title">New Traffic</h5>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12 text-center">
                                    <span class="sparkpie">2,1,3,2,1,1</span>
                                    <h5 class="bottom-title">Bounce Rates</h5>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12 text-center">
                                    <span class="sparkpie">3,2,1,2,2,1</span>
                                    <h5 class="bottom-title">Device Share</h5>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="user-card">
                        <div class="container-box">
                            <img src="assets/global/images/user-card.jpg" alt="user background" class="hero-image">

                            <div class="information">
                                <img src="assets/global/images/user2.jpg" alt="user" class="avatar">
                                <div class="name">Loncatda Bhula</div>
                                <div class="position">Creative Manager</div>

                                <div class="stats">
                                        <span class="followers">
                                            <span class="value">480</span>
                                            <span class="label">Followers</span>
                                        </span>

                                    <span class="following">
                                            <span class="value">300</span>
                                            <span class="label">Following</span>
                                        </span>

                                    <span class="stories">
                                            <span class="value">43</span>
                                            <span class="label">Tags</span>
                                        </span>
                                </div>
                                <div class="stats">
                                        <span class="followers">
                                            <span class="value">123</span>
                                            <span class="label">Facebook</span>
                                        </span>

                                    <span class="following">
                                            <span class="value">43</span>
                                            <span class="label">Twitter</span>
                                        </span>

                                    <span class="stories">
                                            <span class="value">102</span>
                                            <span class="label">Whatsapp</span>
                                        </span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                    <div class="section-body">
                        <div class="map-height vector-map" id="world-map"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                    <div class="testimonial section-body">
                        <div class="content">
                            <img src="assets/global/images/user10.jpg" alt="Avtar">
                            <div class="author">John Denis</div>
                            <div class="author-position">Founder-Group.</div>
                            <div class="text">
                                <i class="fa fa-quote-left"></i> Contrary to popular belief, Lorem Ipsum is not simply
                                random text. It has roots in a piece of classical Latin literature from 45 BC, making it
                                over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in
                                Virginia.
                                <i class="fa fa-quote-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="section-body alert-left-icon">
                        <div class="alert alert-primary alert-dismissible" role="alert">
                            <div class="icon-box"><i class="fa fa-cogs"></i></div>
                            <div class="right-text">
                                <p class="icon-text"> Primary Box</p>
                                <p>Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                        <div class="alert alert-success alert-dismissible" role="alert">
                            <div class="icon-box"><i class="fa fa-check-square-o" aria-hidden="true"></i></div>
                            <div class="right-text">
                                <p class="icon-text"> Success Box</p>
                                <p>Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                        <div class="alert alert-warning alert-dismissible" role="alert">
                            <div class="icon-box"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i></div>
                            <div class="right-text">
                                <p class="icon-text"> Warning Box</p>
                                <p>Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                        <div class="alert alert-danger alert-dismissible m-b-0" role="alert">
                            <div class="icon-box"><i class="fa fa-comments" aria-hidden="true"></i></div>
                            <div class="right-text">
                                <p class="icon-text"> Error Box</p>
                                <p>Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-5 col-md-4 col-sm-6 col-xs-12">
                    <div class="section-body">
                        <span>iMacs</span>
                        <div class="progress">
                            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60"
                                 aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                60%
                            </div>
                        </div>

                        <span>iPhone</span>
                        <div class="progress">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40"
                                 aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                                40%
                            </div>
                        </div>

                        <span>iBooks</span>
                        <div class="progress">
                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20"
                                 aria-valuemin="0" aria-valuemax="100" style="width: 20%;">
                                20%
                            </div>
                        </div>

                        <span>Android</span>
                        <div class="progress">
                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60"
                                 aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                60%
                            </div>
                        </div>

                        <span>Samsung</span>
                        <div class="progress">
                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80"
                                 aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
                                80%
                            </div>
                        </div>

                        <span>Sony</span>
                        <div class="progress">
                            <div class="progress-bar progress-bar-purple" role="progressbar" aria-valuenow="65"
                                 aria-valuemin="0" aria-valuemax="100" style="width: 65%">
                                65%
                            </div>
                        </div>

                        <span>Vivo</span>
                        <div class="progress m-b-0">
                            <div class="progress-bar progress-bar-pink" role="progressbar" aria-valuenow="65"
                                 aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                                50%
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
    <!-- End Contain Section -->

    <!-- Start Footer Section -->
    <footer class="footer">
        © 2018 All rights reserved. Template designed by <a class="text-primary" href="javascript:">Prince</a>
    </footer>
    <!-- End Footer Section -->
</div>
</div>

<!-- Start core js -->
<script src="assets/global/plugins/jquery/dist/jquery.min.js"></script>
<script src="assets/global/plugins/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="assets/global/plugins/Waves/dist/waves.min.js"></script>
<script src="assets/global/plugins/screenfull.js/dist/screenfull.min.js"></script>
<script src="assets/global/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
<!-- Start core javascript -->

<!-- Start global js -->
<script src="assets/global/js/left-menu.min.js"></script>
<!-- End global js -->

<!-- Start page plugin js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
<script src="assets/global/plugins/chart.js/dist/Chart.min.js"></script>
<script src="assets/global/plugins/chart.js/samples/utils.js"></script>
<script src="assets/global/plugins/jquery.sparkline/jquery.sparkline.js"></script>
<script src="assets/global/plugins/jqvmap/dist/jquery.vmap.js"></script>
<script src="assets/global/plugins/jqvmap/dist/maps/jquery.vmap.world.js"></script>
<script src="assets/global/plugins/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
<!-- End page plugin js -->

<!-- Start page js -->
<script src="assets/global/js/dashboard_v1.min.js"></script>
<!-- End page js -->

</body>
</html>