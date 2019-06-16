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
     <!-- Date-time picker css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/vendor/assets/pages/advance-elements/css/bootstrap-datetimepicker.css">
    <!-- Date-range picker css  -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/vendor/bower_components/bootstrap-daterangepicker/daterangepicker.css" />
    <!-- Date-Dropper css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/vendor/bower_components/datedropper/datedropper.min.css" />
   
    
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
                    <!-- <i class="fa fa-arrows-alt"></i> -->
                    <i class="fa fa-ellipsis-h"></i>
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
                                <img src="<?= base_url(); ?>/assets/image/user_upload/<?php echo $this->session->userdata('image'); ?>" style="border-radius: 50%;" alt="User-Profile-Image">
                                <span><?php echo $this->session->userdata('userfname'); ?></span>
                                <i class="fa fa-chevron-down"></i>
                            </a>
                            <ul class="show-notification profile-notification">
                                <?php if($this->session->userdata('level')!='superadmin'):?>
                                <li>
                                    <a href="<?= base_url(); ?>profile">
                                        <i class="icofont icofont-ui-user"></i> Profile
                                    </a>
                                </li>
                                <?php endif;?>
                                <!-- <li>
                                    <a href="#!">
                                        <i class="icofont icofont-settings"></i>Settings
                                    </a>
                                </li> -->
                                <li>
                                    <a href="" data-toggle="modal" data-target="#myModal">
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
            <img class="img-40" src="<?= base_url(); ?>/assets/image/user_upload/<?php echo $this->session->userdata('image'); ?>" style="border-radius: 50%;" alt="User-Profile-Image">
            <div class="user-details">
                <span id="more-details"><?php echo $this->session->userdata('userfname');; ?>
                <i class="fa fa-chevron-down"></i>
            </span>
            </div>
        </div>
        <div class="main-menu-content">
            <ul class="main-navigation">
                <li class="more-details">
                    <?php if($this->session->userdata('level')!='superadmin'):?>
                    <a href="<?= base_url(); ?>profile"><i class="icofont icofont-ui-user"></i>View Profile</a>
                    <?php endif;?>
                    <!-- <a href="#!"><i class="icofont icofont-settings"></i>Settings</a> -->
                    <a href="" data-toggle="modal" data-target="#myModal"><i class="icofont icofont-logout"></i>Logout</a>
                </li>

                <li class="nav-title" data-i18n="nav.category.navigation">
                    <i class="fa fa-caret-right"></i>
                    <span>Main Menu</span>
                </li>

                <?php
                    // chek settingan tampilan menu
                    $setting = 'yes';
                    if($setting=='yes'){
                        // cari level user
                        $id_user_level = $this->session->userdata('level');
                        $sql_menu = "SELECT * 
                        FROM menu 
                        WHERE menu_id in(SELECT menu_id FROM menu_access WHERE id_user_level='$id_user_level') AND is_main_menu=0 AND is_active='y'";
                    }else{
                        $sql_menu = "SELECT * FROM menu WHERE is_active='y' AND is_main_menu=0'";
                    }

                    $main_menu = $this->db->query($sql_menu)->result();
                    
                    foreach ($main_menu as $menu){
                        // check is have sub menu
                        $this->db->where('is_main_menu',$menu->menu_id);
                        $this->db->where('is_active','y');
                        $submenu = $this->db->get('menu');
                        if($submenu->num_rows()>0){
                            // display sub menu

                            $currentPage = $this->uri->segment(1);
                            if ($currentPage == $menu->menu_url) {
                                  echo "<li class='nav-item has-class'>
                                    <a href='#'>
                                        <i class='$menu->menu_icon'></i>
                                        <span data-i18n='nav.navigate.main'>$menu->menu_title</span>
                                    </a>
                                    <ul class='tree-1'>";
                                    foreach ($submenu->result() as $sub){
                                        $currentsubPage = $this->uri->segment(2);
                                        $subID =explode("/",$sub->menu_url,2);
                                        error_reporting(0);
                                        if ($currentsubPage == $subID[1]) {
                                        echo "<li class='has-class'><a href='".base_url()."$sub->menu_url' data-i18n='nav.navigate.navbar'>$sub->menu_title</a>
                                        
                                        </li>";
                                        }else{
                                             echo "<li><a href='".base_url()."$sub->menu_url' data-i18n='nav.navigate.navbar'>$sub->menu_title</a>
                                           
                                        </li>";
                                        }
                                    }
                                    echo" </ul>
                                 </li>";

                            }else{
                                echo "<li class='nav-item'>
                                    <a href='#'>
                                        <i class='$menu->menu_icon'></i>
                                        <span data-i18n='nav.navigate.main'>$menu->menu_title</span>
                                    </a>
                                    <ul class='tree-1'>";
                                    foreach ($submenu->result() as $sub){
                                        echo "<li ><a href='".base_url()."$sub->menu_url' data-i18n='nav.navigate.navbar'>$sub->menu_title</a>
                                        </li>";
                                    }
                                echo" </ul>
                                </li>";
                            }

                        }else{
                            // display main menu
                            $currentPage = $this->uri->segment(1);
                            if ($currentPage == $menu->menu_url) {
                                 echo '<li class="nav-item single-item has-class">';
                            }else{
                                 echo '<li class="nav-item single-item">';
                            }
                            echo anchor($menu->menu_url,"<i class='$menu->menu_icon'></i>".strtoupper($menu->menu_title));
                            echo "</li>";
                        }
                    }
                ?>
                    <?php if($this->session->userdata('level')==='superadmin'):?>
                    <li class="nav-title" data-i18n="nav.category.navigation">
                        <i class="fa fa-caret-right"></i>
                        <span>User Access Control</span>
                    </li>
                    <li class="nav-item single-item <?= $this->uri->segment(1) == 'menu' ? 'has-class' : ''?>">
                        <a href="<?= base_url(); ?>menu">
                            <i class="icofont icofont-settings-alt"></i>
                            <span data-i18n="nav.file-upload.main">Menu Management</span>
                        </a>
                    </li>
                     </li>
                    <li class="nav-item single-item <?= $this->uri->segment(1) == 'user_level' ? 'has-class' : ''?>">
                        <a href="<?= base_url(); ?>user_level">
                            <i class="icofont icofont-settings-alt"></i>
                            <span data-i18n="nav.file-upload.main">Menu User Access</span>
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


 <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Are your sure ?</h4>
        </div>
        <div class="modal-body">
          <h6>Select "Logout" below if you are ready to end your current session.</h6>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          <!-- <button type="button" class="btn btn-info" data-dismiss="modal">Logout</button> -->
          <a href="<?= base_url(); ?>auth/logout" type="button" class="btn btn-info">Logout</a>
        </div>
      </div>
    </div>
  </div>
</div>

