 
    <!DOCTYPE html>
    <html lang="en">

    <head>
    <title>CMS | Update Activity</title>

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
    <!-- color .css -->
    <link rel="stylesheet" type="text/css" href="../../../vendor/assets/css/color/color-1.css" id="color"/>
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
                            <li class="header-notification">
                                <a href="#!">
                                    <i class="ti-bell"></i>
                                    <span class="badge">1</span>
                                </a>
                                <ul class="show-notification">
                                    <li>
                                        <h6>Notifications</h6>
                                        <label class="label label-danger">New</label>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <img class="d-flex align-self-center" src="../../../vendor/assets/images/user.png" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">Fahmy Izwan</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="user-profile header-notification">
                                <a href="#!">
                                    <img src="../../../vendor/assets/images/user.png" alt="User-Profile-Image">
                                    <span>Fahmy Izwan</span>
                                    <i class="ti-angle-down"></i>
                                </a>
                                <ul class="show-notification profile-notification">
                                    <li>
                                        <a href="user-profile.html">
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
                            <div class="morphsearch-content">
                                <div class="dummy-column">
                                    <h2>People</h2>
                                    <a class="dummy-media-object" href="#!">
                                        <img class="round" src="http://0.gravatar.com/avatar/81b58502541f9445253f30497e53c280?s=50&d=identicon&r=G" alt="Sara Soueidan" />
                                        <h3>Sara Soueidan</h3>
                                    </a>
                                    <a class="dummy-media-object" href="#!">
                                        <img class="round" src="http://1.gravatar.com/avatar/9bc7250110c667cd35c0826059b81b75?s=50&d=identicon&r=G" alt="Shaun Dona" />
                                        <h3>Shaun Dona</h3>
                                    </a>
                                </div>
                                <div class="dummy-column">
                                    <h2>Popular</h2>
                                    <a class="dummy-media-object" href="#!">
                                        <img src="../../../vendor/assets/images/avatar-1.png" alt="PagePreloadingEffect" />
                                        <h3>Page Preloading Effect</h3>
                                    </a>
                                    <a class="dummy-media-object" href="#!">
                                        <img src="../../../vendor/assets/images/avatar-1.png" alt="DraggableDualViewSlideshow" />
                                        <h3>Draggable Dual-View Slideshow</h3>
                                    </a>
                                </div>
                                <div class="dummy-column">
                                    <h2>Recent</h2>
                                    <a class="dummy-media-object" href="#!">
                                        <img src="../../../vendor/assets/images/avatar-1.png" alt="TooltipStylesInspiration" />
                                        <h3>Tooltip Styles Inspiration</h3>
                                    </a>
                                    <a class="dummy-media-object" href="#!">
                                        <img src="../../../vendor/assets/images/avatar-1.png" alt="NotificationStyles" />
                                        <h3>Notification Styles Inspiration</h3>
                                    </a>
                                </div>
                            </div>
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
                            <a href="user-profile.html"><i class="ti-user"></i>View Profile</a>
                            <a href="#!"><i class="ti-settings"></i>Settings</a>
                            <a href="#!"><i class="ti-layout-sidebar-left"></i>Logout</a>
                        </li>

                        <li class="nav-title" data-i18n="nav.category.navigation">
                            <i class="ti-line-dashed"></i>
                            <span>Navigation</span>
                        </li>
                            <li class="nav-item single-item">
                                <a href="image-crop.html">
                                    <i class="ti-cut"></i>
                                    <span data-i18n="nav.dash.main">Dashboard</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#!">
                                    <i class="ti-layout-cta-right"></i>
                                    <span data-i18n="nav.navigate.main">Activity</span>
                                </a>
                                <ul class="tree-1">
                                    <li><a href="navbar-light.html" data-i18n="nav.navigate.navbar">Add New Activity</a>
                                    </li>
                                    <li><a href="navbar-dark.html" data-i18n="nav.navigate.navbar-inverse">Navbar Inverse</a></li>
                                    <li><a href="navbar-elements.html" data-i18n="nav.navigate.navbar-with-elements">Navbar With Elements</a></li>
                                </ul>
                            </li>
                            <li class="nav-item single-item">
                                <a href="widget.html">
                                    <i class="ti-view-grid"></i>
                                    <span data-i18n="nav.widget.main"> Widget</span>
                                    <label class="label label-danger menu-caption">100+</label>
                                </a>
                            </li>
                            <li class="nav-item single-item">
                                <a href="image-crop.html">
                                    <i class="ti-cut"></i>
                                    <span data-i18n="nav.image-cropper.main"> Image Cropper</span>
                                </a>
                            </li>
                            <li class="nav-item single-item">
                                <a href="file-upload.html">
                                    <i class="ti-cloud-up"></i>
                                    <span data-i18n="nav.file-upload.main">File Upload</span>
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
                            <h4>Update Activity</h4>
                        </div>
                        <div class="page-header-breadcrumb">
                            <ul class="breadcrumb-title">
                                <li class="breadcrumb-item">
                                    <a href="index.html">
                                        <i class="icofont icofont-home"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item"><a href="#!">Activity</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#!">Update Activity</a>
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
                                    <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
                                                    <label for="varchar">Act Name <?php echo form_error('act_name') ?></label>
                                                    <input type="text" class="form-control" name="act_name" id="act_name" placeholder="Act Name" value="<?php echo $act_name; ?>" />
                                                </div>
	    <div class="form-group">
                                                    <label for="act_post_by">Act Post By <?php echo form_error('act_post_by') ?></label>
                                                    <textarea class="form-control" rows="3" name="act_post_by" id="act_post_by" placeholder="Act Post By"><?php echo $act_post_by; ?></textarea>
                                                </div>
	    <div class="form-group">
                                                    <label for="act_description">Act Description <?php echo form_error('act_description') ?></label>
                                                    <textarea class="form-control" rows="3" name="act_description" id="act_description" placeholder="Act Description"><?php echo $act_description; ?></textarea>
                                                </div>
	    <div class="form-group">
                                                    <label for="date">Act Date <?php echo form_error('act_date') ?></label>
                                                    <input type="date" class="form-control" name="act_date" id="act_date" placeholder="Act Date" value="<?php echo $act_date; ?>" />
                                                    </div>
	    <div class="form-group">
                                                    <label for="time">Act Time <?php echo form_error('act_time') ?></label>
                                                    <input type="text" class="form-control" name="act_time" id="act_time" placeholder="Act Time" value="<?php echo $act_time; ?>" />
                                                </div>
	    <div class="form-group">
                                                    <label for="varchar">Act Venue <?php echo form_error('act_venue') ?></label>
                                                    <input type="text" class="form-control" name="act_venue" id="act_venue" placeholder="Act Venue" value="<?php echo $act_venue; ?>" />
                                                </div>
	    <div class="form-group">
                                                    <label for="enum">Act Category <?php echo form_error('act_category') ?></label>
                                                    <input type="text" class="form-control" name="act_category" id="act_category" placeholder="Act Category" value="<?php echo $act_category; ?>" />
                                                </div>
	    <div class="form-group">
                                                    <label for="varchar">Act Image <?php echo form_error('act_image') ?></label>
                                                    <input type="text" class="form-control" name="act_image" id="act_image" placeholder="Act Image" value="<?php echo $act_image; ?>" />
                                                </div>
	    <div class="form-group">
                                                    <label for="int">Act Fee <?php echo form_error('act_fee') ?></label>
                                                    <input type="text" class="form-control" name="act_fee" id="act_fee" placeholder="Act Fee" value="<?php echo $act_fee; ?>" />
                                                </div>
	    <input type="hidden" name="act_id" value="<?php echo $act_id; ?>" /> 
	    <button type="submit" class="btn btn-info"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('activity') ?>" class="btn btn-danger">Cancel</a>
	</form>

    
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