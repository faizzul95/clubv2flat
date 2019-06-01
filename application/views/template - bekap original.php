<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Phoenixcoded">
    <meta name="keywords" content=", Flat ui, Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="Phoenixcoded">
    <!-- Favicon icon -->
    <link rel="icon" href="<?= base_url(); ?>/vendor/assets/images/favicon.ico" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/vendor/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>vendor/assets/icon/themify-icons/themify-icons.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/vendor/assets/icon/icofont/css/icofont.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/vendor/assets/icon/font-awesome/css/font-awesome.min.css">
     <!-- sweet alert framework -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/vendor/bower_components/sweetalert/dist/sweetalert.css">
    <!-- flag icon framework css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/vendor/assets/pages/flag-icon/flag-icon.min.css">
    <!-- Menu-Search css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/vendor/assets/pages/menu-search/css/component.css">
    <!-- Data Table Css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/vendor/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/vendor/assets/pages/data-table/css/buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/vendor/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/vendor/assets/pages/data-table/extensions/buttons/css/buttons.dataTables.min.css">
     <!-- notify js Fremwork -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/vendor/bower_components/pnotify/dist/pnotify.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/vendor/bower_components/pnotify/dist/pnotify.brighttheme.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/vendor/assets/pages/pnotify/notify.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/vendor/assets/css/style.css">
    <!--SVG Icons Animated-->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/vendor/assets/icon/SVG-animated/svg-weather.css">
    <!-- Calender css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/vendor/assets/pages/widget/calender/pignose.calendar.min.css">
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
                    <i class="icofont icofont-navigation-menu"></i>
                </a>
                <a class="mobile-search morphsearch-search" href="#">
                    <i class="icofont icofont-search"></i>
                </a>
                <a href="dashboard">
                    <img class="img-fluid" src="<?= base_url(); ?>/vendor/assets/images/logo.png" alt="Theme-Logo" />
                </a>
                <a class="mobile-options">
                    <i class="fa fa-arrows-alt"></i>
                </a>
            </div>
            <div class="navbar-container container-fluid">
                <div>
                    <ul class="nav-left">
                        <li>
                            <a id="collapse-menu" href="#">
                                <i class="icofont icofont-navigation-menu"></i>
                            </a>
                        </li>
                        <li>
                            <a class="main-search morphsearch-search" href="#">
                                <!-- themify icon -->
                                <i class="icofont icofont-search"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#!" onclick="javascript:toggleFullScreen()">
                                <i class="fa fa-arrows-alt"></i>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav-right">
                        <li class="user-profile header-notification">
                            <a href="#!">
                                <img src="<?= base_url(); ?>/vendor/assets/images/user.png" alt="User-Profile-Image">
                                <span><?php echo $this->session->userdata('userfname'); ?></span>
                                <i class="fa fa-chevron-down"></i>
                            </a>
                            <ul class="show-notification profile-notification">
                                <li>
                                    <a href="profile">
                                        <i class="icofont icofont-ui-user"></i> Profile
                                    </a>
                                </li>
                               <!--  <li>
                                    <a href="auth-lock-screen.html">
                                        <i class="ti-lock"></i> Lock Screen
                                    </a>
                                </li> -->
                                <li>
                                    <a href="auth/logout">
                                        <i class="icofont icofont-logout"></i> Logout
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
            <img class="img-40" src="<?= base_url(); ?>/vendor/assets/images/user.png" alt="User-Profile-Image">
            <div class="user-details">
                <span id="more-details"><?php echo $this->session->userdata('userfname');; ?><i class="fa fa-chevron-down"></i></span>
            </div>
        </div>
        <div class="main-menu-content">
            <ul class="main-navigation">
                <li class="more-details">
                    <a href="profile"><i class="icofont icofont-ui-user"></i>View Profile</a>
                    <a href="#!"><i class="icofont icofont-settings"></i>Settings</a>
                    <a href="auth/logout"><i class="icofont icofont-logout"></i>Logout</a>
                </li>

                <li class="nav-title" data-i18n="nav.category.navigation">
                    <i class="fa fa-caret-right"></i>
                    <span>Navigation</span>
                </li>
                    <li class="nav-item single-item <?= $this->uri->segment(1) == 'dashboard' ? 'has-class' : ''?>" >
                        <a href="<?= base_url(); ?>dashboard">
                            <i class="icofont icofont-home"></i>
                            <span data-i18n="nav.dash.main">Dashboard</span>
                        </a>
                    </li>
                    <?php if($this->session->userdata('level')==='admin' || $this->session->userdata('level')==='member'):?>
                    <li class="nav-item single-item <?= $this->uri->segment(1) == 'profile' ? 'has-class' : ''?> ">
                        <a href="<?= base_url(); ?>profile">
                            <i class="icofont icofont-ui-user"></i>
                            <span data-i18n="nav.dash.main">Profile</span>
                        </a>
                    </li>
                    <?php endif;?>
                    <?php if($this->session->userdata('level')==='admin' || $this->session->userdata('level')==='superadmin'):?>
                    <li class="nav-item <?= $this->uri->segment(1) == 'application' || $this->uri->segment(1) == 'user'? 'has-class' : ''?>" >
                        <a href="#!">
                            <i class="icofont icofont-law-document"></i>
                            <span data-i18n="nav.navigate.main">Membership</span>
                        </a>
                        <ul class="tree-1">
                            <li <?= $this->uri->segment(2) == 'newlist' ? 'class="has-class"' : ''?> ><a href="<?= base_url(); ?>application/newlist" data-i18n="nav.navigate.navbar">List of New Application</a>
                            <label class="badge badge-info menu-caption"><?php 
                                    $query = $this->db->query('SELECT * FROM application WHERE application_status ="pending"');
                                    echo $query->num_rows(); 
                                ?>
                            </label>
                            </li>
                            <li <?= $this->uri->segment(2) == 'disapprove' ? 'class="has-class"' : ''?> ><a href="<?= base_url(); ?>application/disapprove" data-i18n="nav.navigate.navbar">List of Disapprove Application</a>
                            <label class="badge badge-info menu-caption"><?php 
                                    $query = $this->db->query('SELECT * FROM application WHERE application_status ="reject"');
                                    echo $query->num_rows(); 
                                ?>
                            </label>
                            </li>
                            <li <?= $this->uri->segment(1) == 'user' ? 'class="has-class"' : ''?> ><a href="<?= base_url(); ?>user" data-i18n="nav.navigate.navbar-inverse">List of Club Member</a>
                             <label class="badge badge-info menu-caption"><?php 
                                    $query = $this->db->query('SELECT * FROM user WHERE usr_role ="member" && usr_status = "active"');
                                    echo $query->num_rows(); 
                                ?>
                              </label>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item <?= $this->uri->segment(1) == 'activity' ? 'has-class' : ''?>">
                        <a href="#!">
                            <i class="icofont icofont-law-document"></i>
                            <span data-i18n="nav.navigate.main">Activity</span>
                        </a>
                        <ul class="tree-1">
                            <li <?= $this->uri->segment(2) == 'create' ? 'class="has-class"' : ''?>><a href="<?= base_url(); ?>activity/create" data-i18n="nav.navigate.navbar">Add New Activity</a>
                            </li>
                            <li <?= $this->uri->segment(1) == 'activity' && $this->uri->segment(2) == '' ? 'class="has-class"' : ''?>>
                            <a href="<?= base_url(); ?>activity" data-i18n="nav.navigate.navbar-inverse">List of Activity</a>
                                <label class="badge badge-info menu-caption"><?php 
                                        $query = $this->db->query('SELECT * FROM activity');
                                        echo $query->num_rows(); 
                                    ?>
                                </label>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item single-item <?= $this->uri->segment(1) == 'contactus' ? 'has-class' : ''?>">
                        <a href="<?= base_url(); ?>contactus">
                            <i class="icofont icofont-ui-call"></i>
                            <span data-i18n="nav.widget.main"> Contact Us</span>
                            <label class="badge badge-info menu-caption"><?php 
                                    $query = $this->db->query('SELECT * FROM contactus');
                                    echo $query->num_rows(); 
                                ?>
                            </label>
                        </a>
                    </li>
                    <?php endif;?>
                    <?php if($this->session->userdata('level')==='superadmin'):?>
                    <li class="nav-title" data-i18n="nav.category.navigation">
                        <i class="ti-line-dashed"></i>
                        <span>GENERATOR</span>
                    </li>
                    <li class="nav-item single-item">
                        <a href="<?= base_url(); ?>crud">
                            <i class="ti-cloud-up"></i>
                            <span data-i18n="nav.file-upload.main">CRUD GENERATOR</span>
                        </a>
                    </li>
                    <?php endif;?>
            </ul>
        </div>
    </div>
    <!-- Menu aside end -->

    <!-- Main-body start -->
    <div class="main-body">
        <div class="page-wrapper">
            <?php echo $contents ?>
        </div>
    </div>

    <!-- Session timeout js -->
    <script type="text/javascript" src="<?= base_url(); ?>/vendor/assets/pages/sessionTimeout/sessionTimeout-custom.js"></script>

    </body>
</html>