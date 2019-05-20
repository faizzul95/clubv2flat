<?php
    $dashboard = false;
    $application = false;
    $activity = false;
    $user = false;
    $contactus = false;

    $dashboard = true;
 ?>
 <!DOCTYPE html>
<html lang="en">

<head>
    <title>CMS | Dashboard</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Phoenixcoded">
    <meta name="keywords" content="flat ui, admin , Flat ui, Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="Phoenixcoded">
    <!-- Favicon icon -->
    <link rel="icon" href="../vendor/assets/images/favicon.ico" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="../vendor/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="../vendor/assets/icon/themify-icons/themify-icons.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="../vendor/assets/icon/icofont/css/icofont.css">
    <!-- flag icon framework css -->
    <link rel="stylesheet" type="text/css" href="../vendor/assets/pages/flag-icon/flag-icon.min.css">
    <!-- Menu-Search css -->
    <link rel="stylesheet" type="text/css" href="../vendor/assets/pages/menu-search/css/component.css">
    <!-- Horizontal-Timeline css -->
    <link rel="stylesheet" type="text/css" href="../vendor/assets/pages/dashboard/horizontal-timeline/css/style.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="../vendor/assets/css/style.css">
    <!-- color .css -->
    <link rel="stylesheet" type="text/css" href="../vendor/assets/css/color/color-1.css" id="color"/>

    <!--SVG Icons Animated-->
    <link rel="stylesheet" type="text/css" href="../vendor/assets/icon/SVG-animated/svg-weather.css">
    <!-- Calender css -->
    <link rel="stylesheet" type="text/css" href="../vendor/assets/pages/widget/calender/pignose.calendar.min.css">
</head>

<body class="fix-menu">
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="ball-scale">
            <div></div>
        </div>
    </div>
    <!-- Pre-loader end -->

    <!-- Menu header start -->
    <nav class="navbar header-navbar">
        <div class="navbar-wrapper">
            <div class="navbar-logo">
                <a class="mobile-menu" id="mobile-collapse" href="#!">
                    <i class="ti-menu"></i>
                </a>
                <a class="mobile-search morphsearch-search" href="#">
                    <i class="ti-search"></i>
                </a>
                <a href="dashboard">
                    <img class="img-fluid" src="../vendor/assets/images/logo.png" alt="Theme-Logo" />
                </a>
                <a class="mobile-options">
                    <i class="ti-more"></i>
                </a>
            </div>
            <div class="navbar-container container-fluid">
                <div>
                    <ul class="nav-left">
                        <li>
                            <a id="collapse-menu" href="#">
                                <i class="ti-menu"></i>
                            </a>
                        </li>
                        <li>
                            <a class="main-search morphsearch-search" href="#">
                                <!-- themify icon -->
                                <i class="ti-search"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#!" onclick="javascript:toggleFullScreen()">
                                <i class="ti-fullscreen"></i>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav-right">
                        <li class="user-profile header-notification">
                            <a href="#!">
                                <img src="../vendor/assets/images/user.png" alt="User-Profile-Image">
                                <span><?php echo $this->session->userdata('userfname'); ?></span>
                                <i class="ti-angle-down"></i>
                            </a>
                            <ul class="show-notification profile-notification">
                                <li>
                                    <a href="profile">
                                        <i class="ti-user"></i> Profile
                                    </a>
                                </li>
                                <li>
                                    <a href="auth-lock-screen.html">
                                        <i class="ti-lock"></i> Lock Screen
                                    </a>
                                </li>
                                <li>
                                    <a href="auth/logout">
                                        <i class="ti-layout-sidebar-left"></i> Logout
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <!-- search -->
                    <div id="morphsearch" class="morphsearch">
                        <form class="morphsearch-form">
                            <input class="morphsearch-input" type="search" placeholder="Search..." />
                            <button class="morphsearch-submit" type="submit">Search</button>
                        </form>
                        <!-- /morphsearch-content -->
                        <span class="morphsearch-close"><i class="icofont icofont-search-alt-1"></i></span>
                    </div>
                    <!-- search end -->
                </div>
            </div>
        </div>
    </nav>
    <!-- Menu header end -->

    <!-- Menu aside start -->
    <div class="main-menu">
        <div class="main-menu-header">
            <img class="img-40" src="../vendor/assets/images/user.png" alt="User-Profile-Image">
            <div class="user-details">
                <span id="more-details"><?php echo $this->session->userdata('userfname');; ?><i class="ti-angle-down"></i></span>
            </div>
        </div>
        <div class="main-menu-content">
            <ul class="main-navigation">
                <li class="more-details">
                    <a href="profile"><i class="ti-user"></i>View Profile</a>
                    <a href="#!"><i class="ti-settings"></i>Settings</a>
                    <a href="auth/logout"><i class="ti-layout-sidebar-left"></i>Logout</a>
                </li>

                <li class="nav-title" data-i18n="nav.category.navigation">
                    <i class="ti-line-dashed"></i>
                    <span>Navigation</span>
                </li>
                    <li <?php if($dashboard) { ?> class="nav-item single-item has-class" <?php }else{ ?> class="nav-item single-item"<?php } ?> >
                        <a href="dashboard">
                            <i class="icofont icofont-home"></i>
                            <span data-i18n="nav.dash.main">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item single-item">
                                <a href="profile">
                                    <i class="icofont icofont-ui-user"></i>
                                    <span data-i18n="nav.dash.main">Profile</span>
                                </a>
                    </li>
                    <?php if($this->session->userdata('level')==='admin'):?>
                    <li <?php if($application) { ?> class="nav-item has-class" <?php }else{ ?> class="nav-item"<?php } ?> >
                        <a href="#!">
                            <i class="ti-layout-cta-right"></i>
                            <span data-i18n="nav.navigate.main">Membership</span>
                        </a>
                        <ul class="tree-1">
                            <li><a href="application/newlist" data-i18n="nav.navigate.navbar">List of New Application</a>
                            <label class="badge badge-info menu-caption"><?php 
                                    $query = $this->db->query('SELECT * FROM application WHERE application_status ="pending"');
                                    echo $query->num_rows(); 
                                ?>
                            </label>
                            </li>
                            <li><a href="application/disapprove" data-i18n="nav.navigate.navbar">List of Disapprove Application</a>
                            <label class="badge badge-info menu-caption"><?php 
                                    $query = $this->db->query('SELECT * FROM application WHERE application_status ="reject"');
                                    echo $query->num_rows(); 
                                ?>
                            </label>
                            </li>
                            <li <?php if($application) { ?> class="has-class" <?php } ?> ><a href="user" data-i18n="nav.navigate.navbar-inverse">List of Club Member</a>
                             <label class="badge badge-info menu-caption"><?php 
                                    $query = $this->db->query('SELECT * FROM user WHERE usr_role ="member" AND usr_status = "active"');
                                    echo $query->num_rows(); 
                                ?>
                              </label>
                            </li>
                        </ul>
                    </li>
                    <li <?php if($activity) { ?> class="nav-item has-class" <?php }else{ ?> class="nav-item"<?php } ?>>
                        <a href="#!">
                            <i class="ti-layout-cta-right"></i>
                            <span data-i18n="nav.navigate.main">Activity</span>
                        </a>
                        <ul class="tree-1">
                            <li><a href="activity/create" data-i18n="nav.navigate.navbar">Add New Activity</a>
                            </li>
                            <li <?php if($activity) { ?> class="has-class" <?php } ?>>
                            <a href="activity" data-i18n="nav.navigate.navbar-inverse">List of Activity</a>
                                <label class="badge badge-info menu-caption"><?php 
                                        $query = $this->db->query('SELECT * FROM activity');
                                        echo $query->num_rows(); 
                                    ?>
                                </label>
                            </li>
                        </ul>
                    </li>
                    <li <?php if($contactus) { ?> class="nav-item single-item has-class" <?php }else{ ?> class="nav-item single-item"<?php } ?>>
                        <a href="contactus">
                            <i class="ti-view-grid"></i>
                            <span data-i18n="nav.widget.main"> Contact Us</span>
                            <label class="badge badge-info menu-caption"><?php 
                                    $query = $this->db->query('SELECT * FROM contactus');
                                    echo $query->num_rows(); 
                                ?>
                            </label>
                        </a>
                    </li>
                    <li class="nav-title" data-i18n="nav.category.navigation">
                        <i class="ti-line-dashed"></i>
                        <span>GENERATOR</span>
                    </li>
                    <li class="nav-item single-item">
                        <a href="../crud/index.php">
                            <i class="ti-cloud-up"></i>
                            <span data-i18n="nav.file-upload.main">CRUD GENERATOR</span>
                        </a>
                    </li>
                    <?php endif;?>
            </ul>
        </div>
    </div>
    <!-- Menu aside end -->

    <div class="main-body">
        <div class="page-wrapper">
            <div class="page-header">
                <div class="page-header-title">
                    <h4>Dashboard</h4>
                </div>
                <div class="page-header-breadcrumb">
                    <ul class="breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="index.html">
                                <i class="icofont icofont-home"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Dashboard</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="page-body">
                <div class="row">
                    <!-- Documents card start -->
                    <div class="col-md-6 col-xl-3">
                        <div class="card client-blocks dark-primary-border">
                            <div class="card-block">
                                <h5>New Application</h5>
                                <ul>
                                    <li>
                                        <i class="icofont icofont-document-folder"></i>
                                    </li>
                                    <li class="text-right text-success">
                                        <?php 
                                            $query = $this->db->query('SELECT * FROM application WHERE  application_status ="pending"');
                                            echo $query->num_rows(); 
                                        ?>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Documents card end -->
                    <!-- New clients card start -->
                    <div class="col-md-6 col-xl-3">
                        <div class="card client-blocks warning-border">
                            <div class="card-block">
                                <h5>Member</h5>
                                <ul>
                                    <li>
                                        <i class="icofont icofont-ui-user-group text-warning"></i>
                                    </li>
                                    <li class="text-right text-warning">
                                        <?php 
                                            $query = $this->db->query('SELECT * FROM user WHERE usr_role ="member"');
                                            echo $query->num_rows(); 
                                        ?>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- New clients card end -->
                    <!-- New files card start -->
                    <div class="col-md-6 col-xl-3">
                        <div class="card client-blocks success-border">
                            <div class="card-block">
                                <h5>Public Activity</h5>
                                <ul>
                                    <li>
                                        <i class="icofont icofont-files text-success"></i>
                                    </li>
                                    <li class="text-right text-success">
                                        <?php 
                                            $query = $this->db->query('SELECT * FROM activity WHERE act_category = "guest"');
                                            echo $query->num_rows(); 
                                        ?>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- New files card end -->
                    <!-- Open Project card start -->
                    <div class="col-md-6 col-xl-3">
                        <div class="card client-blocks">
                            <div class="card-block">
                                <h5>Member Activity</h5>
                                <ul>
                                    <li>
                                        <i class="icofont icofont-ui-folder text-primary"></i>
                                    </li>
                                    <li class="text-right text-primary">
                                        <?php 
                                            $query = $this->db->query('SELECT * FROM activity WHERE act_category = "member"');
                                            echo $query->num_rows(); 
                                        ?>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Open Project card end -->
                    <!-- Calender card start -->
                    <div class="col-md-12 col-xl-8">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card borderless-card">
                                    <div class="row">
                                        <div class="col-sm-5 weather-card-1  text-center">
                                            <div class="mob-bg-calender bg-facebook">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <h4>Sunday</h4>
                                                        <h1 class="weather-temp">23</h1>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <svg version="1.1" id="cloudDrizzle" class="climacon climacon_cloudDrizzle" viewBox="15 15 70 70">
                                                            <g class="climacon_iconWrap climacon_iconWrap-cloudDrizzle">
                                                                <g class="climacon_wrapperComponent climacon_wrapperComponent-drizzle">
                                                                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-left" d="M42.001,53.644c1.104,0,2,0.896,2,2v3.998c0,1.105-0.896,2-2,2c-1.105,0-2.001-0.895-2.001-2v-3.998C40,54.538,40.896,53.644,42.001,53.644z" />
                                                                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-middle" d="M49.999,53.644c1.104,0,2,0.896,2,2v4c0,1.104-0.896,2-2,2s-1.998-0.896-1.998-2v-4C48.001,54.54,48.896,53.644,49.999,53.644z" />
                                                                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-right" d="M57.999,53.644c1.104,0,2,0.896,2,2v3.998c0,1.105-0.896,2-2,2c-1.105,0-2-0.895-2-2v-3.998C55.999,54.538,56.894,53.644,57.999,53.644z" />
                                                                </g>
                                                                <g class="climacon_wrapperComponent climacon_wrapperComponent-cloud">
                                                                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M63.999,64.944v-4.381c2.387-1.386,3.998-3.961,3.998-6.92c0-4.418-3.58-8-7.998-8c-1.603,0-3.084,0.481-4.334,1.291c-1.232-5.316-5.973-9.29-11.664-9.29c-6.628,0-11.999,5.372-11.999,12c0,3.549,1.55,6.729,3.998,8.926v4.914c-4.776-2.769-7.998-7.922-7.998-13.84c0-8.836,7.162-15.999,15.999-15.999c6.004,0,11.229,3.312,13.965,8.203c0.664-0.113,1.336-0.205,2.033-0.205c6.627,0,11.998,5.373,11.998,12C71.997,58.864,68.655,63.296,63.999,64.944z" />
                                                                </g>
                                                            </g>
                                                        </svg>
                                                        <span class="weather-temp">8°</span>
                                                        <h5>New York , NY , USA</h5>
                                                        <span class="d-block">6:00 AM</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-7 p-l-0">
                                            <div class="weather-calender">
                                                <div class="widget-calender"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Calender card end -->
                </div>
            </div>
        </div>
    </div>
    <!-- Required Jquery -->
    <script type="text/javascript" src="../vendor/bower_components/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="../vendor/bower_components/jquery-ui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="../vendor/bower_components/tether/dist/js/tether.min.js"></script>
    <script type="text/javascript" src="../vendor/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="../vendor/bower_components/jquery-slimscroll/jquery.slimscroll.js"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="../vendor/bower_components/modernizr/modernizr.js"></script>
    <script type="text/javascript" src="../vendor/bower_components/modernizr/feature-detects/css-scrollbars.js"></script>
    <!-- classie js -->
    <script type="text/javascript" src="../vendor/bower_components/classie/classie.js"></script>
    <!-- Calender js -->
    <script type="text/javascript" src="../vendor/bower_components/moment/min/moment.min.js"></script>
    <script type="text/javascript" src="../vendor/assets/pages/widget/calender/pignose.calendar.min.js"></script>
    <!-- Morris Chart js -->
    <script src="../vendor/bower_components/raphael/raphael.min.js"></script>
    <script src="../vendor/bower_components/morris.js/morris.js"></script>
    <!-- Todo js -->
    <script type="text/javascript" src="../vendor/assets/pages/todo/todo.js"></script>
    <!-- Horizontal-Timeline js -->
    <script type="text/javascript" src="../vendor/assets/pages/dashboard/horizontal-timeline/js/main.js"></script>
    <!-- i18next.min.js -->
    <script type="text/javascript" src="../vendor/bower_components/i18next/i18next.min.js"></script>
    <script type="text/javascript" src="../vendor/bower_components/i18next-xhr-backend/i18nextXHRBackend.min.js"></script>
    <script type="text/javascript" src="../vendor/bower_components/i18next-browser-languagedetector/i18nextBrowserLanguageDetector.min.js"></script>
    <script type="text/javascript" src="../vendor/bower_components/jquery-i18next/jquery-i18next.min.js"></script>
    <!-- sweet alert js -->
    <script type="text/javascript" src="../vendor/bower_components/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript" src="../vendor/assets/js/modal.js"></script>
    <!-- sweet alert modal.js intialize js -->
    <!-- modalEffects js nifty modal window effects -->
    <script type="text/javascript" src="assets/js/modalEffects.js"></script>
    <script type="text/javascript" src="assets/js/classie.js"></script>
    <!-- Custom js -->

    <!-- <script type="text/javascript" src="../vendor/assets/pages/widget/custom-widget.js"></script> -->
    <script type="text/javascript" src="../vendor/assets/pages/dashboard/project-dashboard.js"></script>
    <script type="text/javascript" src="../vendor/assets/js/script.js"></script>
</body>

</html>
