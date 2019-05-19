<!DOCTYPE html>
<html lang="en">

<head> 
    <title>CMS | User View</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Phoenixcoded">
    <meta name="keywords" content=", Flat ui, Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="Phoenixcoded">
    <!-- Favicon icon -->
    <link rel="icon" href="../../../vendor/assets/images/favicon.ico" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="../../../vendor/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="../../../vendor/assets/icon/themify-icons/themify-icons.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="../../../vendor/assets/icon/icofont/css/icofont.css">
    <!-- flag icon framework css -->
    <link rel="stylesheet" type="text/css" href="../../../vendor/assets/pages/flag-icon/flag-icon.min.css">
    <!-- Menu-Search css -->
    <link rel="stylesheet" type="text/css" href="../../../vendor/assets/pages/menu-search/css/component.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="../../../vendor/assets/css/style.css">
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
                    <a href="index">
                        <img class="img-fluid" src="../../../vendor/assets/images/logo.png" alt="Theme-Logo" />
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
                                    <img src="../../../vendor/assets/images/user.png" alt="User-Profile-Image">
                                    <span>Fahmy Izwan</span>
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
                                        <a href="#!">
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
                    <img class="img-40" src="../../../vendor/assets/images/user.png" alt="User-Profile-Image">
                    <div class="user-details">
                        <span>Fahmy Izwan</span>
                        <span id="more-details">Programmer<i class="ti-angle-down"></i></span>
                    </div>
                </div>
                <div class="main-menu-content">
                    <ul class="main-navigation">
                        <li class="more-details">
                            <a href="profile"><i class="ti-user"></i>View Profile</a>
                            <a href="#!"><i class="ti-settings"></i>Settings</a>
                            <a href="#!"><i class="ti-layout-sidebar-left"></i>Logout</a>
                        </li>

                        <li class="nav-title" data-i18n="nav.category.navigation">
                            <i class="ti-line-dashed"></i>
                            <span>Navigation</span>
                        </li>
                            <li class="nav-item single-item">
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
                            <li class="nav-item">
                                <a href="#!">
                                    <i class="ti-layout-cta-right"></i>
                                    <span data-i18n="nav.navigate.main">Membership</span>
                                </a>
                                <ul class="tree-1">
                                    <li><a href="application/newlist" data-i18n="nav.navigate.navbar">List of New Application</a>
                                    </li>
                                    <li><a href="application/disapprove" data-i18n="nav.navigate.navbar">List of Disapprove Application</a>
                                    </li>
                                    <li><a href="application" data-i18n="nav.navigate.navbar-inverse">List of Club Member</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#!">
                                    <i class="ti-layout-cta-right"></i>
                                    <span data-i18n="nav.navigate.main">Activity</span>
                                </a>
                                <ul class="tree-1">
                                    <li><a href="activity/create" data-i18n="nav.navigate.navbar">Add New Activity</a>
                                    </li>
                                    <li><a href="activity" data-i18n="nav.navigate.navbar-inverse">List of Activity</a></li>
                                </ul>
                            </li>
                            <li class="nav-item single-item">
                                <a href="widget.html">
                                    <i class="ti-view-grid"></i>
                                    <span data-i18n="nav.widget.main"> Widget</span>
                                    <label class="label label-danger menu-caption">100+</label>
                                </a>
                            </li>
                            <li class="nav-title" data-i18n="nav.category.navigation">
                                <i class="ti-line-dashed"></i>
                                <span>GENERATOR</span>
                            </li>
                            <li class="nav-item single-item">
                                <a href="../../../crud/index.php">
                                    <i class="ti-cloud-up"></i>
                                    <span data-i18n="nav.file-upload.main">CRUD GENERATOR</span>
                                </a>
                            </li>
                    </ul>
                </div>
            </div>
            <!-- Menu aside end -->


            <!-- Main-body start -->
            <div class="main-body">
                <div class="page-wrapper">
                    <!-- Page header start -->
                    <div class="page-header">
                        <div class="page-header-title">
                            <h4>View User</h4>
                        </div>
                        <div class="page-header-breadcrumb">
                            <ul class="breadcrumb-title">
                                <li class="breadcrumb-item">
                                    <a href="index.html">
                                        <i class="icofont icofont-home"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item"><a href="#!">User</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#!">View User</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Page header end -->
                    <!-- Page body start -->
                    <div class="page-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- Basic Form Inputs card start -->
                                <div class="card">
                                    <div class="card-block">
    
                                            <h3 class="text-center txt-primary">Personnal Information</h3>
                                            <hr>

                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Full Name</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" placeholder="Disabled text" value="<?php echo $detail_fullname; ?>" disabled>
                                                </div>
                                            </div>
    
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Phone Number</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" placeholder="Disabled text" value="<?php echo $detail_phone; ?>" disabled>
                                                </div>
                                            </div>

                                             <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Email</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" placeholder="Disabled text" value="<?php echo $detail_email; ?>" disabled>
                                                </div>
                                            </div>
    
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Address</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" placeholder="Disabled text" value="<?php echo $detail_address; ?>" disabled>
                                                </div>
                                            </div>

                                            <h3 class="text-center txt-primary">Account Information</h3>
                                            <hr>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Username</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" placeholder="Disabled text" value="<?php echo $usr_username; ?>" disabled>
                                                </div>
                                            </div>
    
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Role</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" placeholder="Disabled text" value="<?php echo $usr_role; ?>" disabled>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Status</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" placeholder="Disabled text" value="<?php echo $usr_status; ?>" disabled>
                                                </div>
                                            </div>
	  <a href="<?php echo site_url('user') ?>" class="btn btn-info btn-square pull-right"><i class="icofont icofont-arrow-left"></i> Back</a>
	

                                    </div>
                                </div>
                                <!-- Basic Form Inputs card end -->
                            </div>
                        </div>
                    </div>
                    <!-- Page body end -->
                </div>
            </div>
            <!-- Main-body end -->
    

  <!-- Required Jquery -->
    <script type="text/javascript" src="../../../vendor/bower_components/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="../../../vendor/bower_components/jquery-ui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="../../../vendor/bower_components/tether/dist/js/tether.min.js"></script>
    <script type="text/javascript" src="../../../vendor/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="../../../vendor/bower_components/jquery-slimscroll/jquery.slimscroll.js"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="../../../vendor/bower_components/modernizr/modernizr.js"></script>
    <script type="text/javascript" src="../../../vendor/bower_components/modernizr/feature-detects/css-scrollbars.js"></script>
    <!-- classie js -->
    <script type="text/javascript" src="../../../vendor/bower_components/classie/classie.js"></script>
    <!-- i18next.min.js -->
    <script type="text/javascript" src="../../../vendor/bower_components/i18next/i18next.min.js"></script>
    <script type="text/javascript" src="../../../vendor/bower_components/i18next-xhr-backend/i18nextXHRBackend.min.js"></script>
    <script type="text/javascriptv" src="../../../vendor/bower_components/i18next-browser-languagedetector/i18nextBrowserLanguageDetector.min.js"></script>
    <script type="text/javascript" src="../../../vendor/bower_components/jquery-i18next/jquery-i18next.min.js"></script>
    <!-- Custom js -->
    <script type="text/javascript" src="../../../vendor/assets/js/script.js"></script>
</body>

</html>