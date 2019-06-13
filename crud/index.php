<?php
error_reporting(0);
require_once 'core/harviacode.php';
require_once 'core/helper.php';
require_once 'core/process.php';

$crud = true;
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>CMS | Codeigniter CRUD Generator</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Phoenixcoded">
    <meta name="keywords" content=", Flat ui, Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
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
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="../vendor/assets/css/style.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="../vendor/assets/icon/font-awesome/css/font-awesome.min.css">
    <!-- color .css -->
    <link rel="stylesheet" type="text/css" href="../vendor/assets/css/color/color-1.css" id="color"/>
</head>

<body class="fix-menu">
    <!-- Pre-loader start -->
   <!--  <div class="theme-loader">
        <div class="ball-scale">
            <div></div>
        </div>
    </div> -->
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
                    <img class="img-fluid" src="../vendor/assets/images/logo.png" alt="Theme-Logo" />
                </a>
                <a class="mobile-options">
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
                                <img src="../vendor/assets/images/user.png" alt="User-Profile-Image">
                                <span>Super Admin</span>
                                <i class="fa fa-chevron-down"></i>
                            </a>
                             <ul class="show-notification profile-notification">
                                <li>
                                    <a href="../profile">
                                        <i class="icofont icofont-ui-user"></i> Profile
                                    </a>
                                </li>
                               <!--  <li>
                                    <a href="auth-lock-screen.html">
                                        <i class="ti-lock"></i> Lock Screen
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
            <img class="img-40" src="../vendor/assets/images/user.png" alt="User-Profile-Image">
            <div class="user-details">
                <span id="more-details">Super Admin<i class="fa fa-chevron-down"></i></span>
            </div>
        </div>
        <div class="main-menu-content">
            <ul class="main-navigation">
                 <li class="more-details">
                    <a href="../profile"><i class="icofont icofont-ui-user"></i>View Profile</a>
                    <a href="#!"><i class="icofont icofont-settings"></i>Settings</a>
                    <a href="" data-toggle="modal" data-target="#myModal"><i class="icofont icofont-logout"></i>Logout</a>
                </li>

                <li class="nav-title" data-i18n="nav.category.navigation">
                    <i class="fa fa-caret-right"></i>
                    <span>Main Menu</span>
                </li>
                    <li class="nav-item single-item" >
                        <a href="../dashboard">
                            <i class="icofont icofont-dashboard-web"></i>
                            <span data-i18n="nav.dash.main">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-title" data-i18n="nav.category.navigation">
                        <i class="fa fa-caret-right"></i>
                        <span>User Access Control</span>
                    </li>
                    <li class="nav-item single-item">
                        <a href="../menu">
                            <i class="icofont icofont-settings-alt"></i>
                            <span data-i18n="nav.file-upload.main">Menu Management</span>
                        </a>
                    </li>
                     </li>
                    <li class="nav-item single-item">
                        <a href="../user_level">
                            <i class="icofont icofont-settings-alt"></i>
                            <span data-i18n="nav.file-upload.main">Menu User Access</span>
                        </a>
                    </li>


                     <li class="nav-title" data-i18n="nav.category.navigation">
                        <i class="fa fa-caret-right"></i>
                        <span>GENERATOR</span>
                    </li>
                    <li class="nav-item single-item has-class">
                        <a href="../crud">
                            <i class="icofont icofont-settings-alt"></i>
                            <span data-i18n="nav.file-upload.main">C.R.U.D Generator</span>
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
                            <h4>CRUD Generator</h4>
                        </div>
                        <div class="page-header-breadcrumb">
                            <ul class="breadcrumb-title">
                                <li class="breadcrumb-item">
                                    <a href="index.html">
                                        <i class="icofont icofont-home"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item"><a href="#!">CRUD</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#!">CRUD Generator</a>
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
                                         <div class="row">
                                        <div class="col-md-12">
                                            <form action="index.php" method="POST">

                                                <div class="form-group">
                                                    <label>Select Table - <a class="btn btn-info" href="<?php echo $_SERVER['PHP_SELF'] ?>">Refresh</a></label>
                                                    <select id="table_name" name="table_name" class="form-control" onchange="setname()">
                                                        <option value="">Please Select</option>
                                                        <?php
                                                        $table_list = $hc->table_list();
                                                        $table_list_selected = isset($_POST['table_name']) ? $_POST['table_name'] : '';
                                                        foreach ($table_list as $table) {
                                                            ?>
                                                            <option value="<?php echo $table['table_name'] ?>" <?php echo $table_list_selected == $table['table_name'] ? 'selected="selected"' : ''; ?>><?php echo $table['table_name'] ?></option>
                                                            <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <div class="row">
                                                        <?php $jenis_tabel = isset($_POST['jenis_tabel']) ? $_POST['jenis_tabel'] : 'reguler_table'; ?>
                                                        <div class="col-md-7">
                                                            <div class="radio" style="margin-bottom: 0px; margin-top: 0px">
                                                                <label>
                                                                    <input type="radio" name="jenis_tabel" value="datatables" <?php echo $jenis_tabel == 'datatables' ? 'checked' : 'checked'; ?>>
                                                                    Serverside Datatables
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="checkbox">
                                                        <?php $export_excel = isset($_POST['export_excel']) ? $_POST['export_excel'] : ''; ?>
                                                        <label>
                                                            <input type="checkbox" name="export_excel" value="1" <?php echo $export_excel == '1' ? 'checked' : '' ?>>
                                                            Export Excel
                                                        </label>
                                                    </div>
                                                </div>    

                                                <div class="form-group">
                                                    <div class="checkbox">
                                                        <?php $export_word = isset($_POST['export_word']) ? $_POST['export_word'] : ''; ?>
                                                        <label>
                                                            <input type="checkbox" name="export_word" value="1" <?php echo $export_word == '1' ? 'checked' : '' ?>>
                                                            Export Word
                                                        </label>
                                                    </div>
                                                </div>    

                                                <div class="form-group">
                                                    <label>Custom Controller Name</label>
                                                    <input type="text" id="controller" name="controller" value="<?php echo isset($_POST['controller']) ? $_POST['controller'] : '' ?>" class="form-control" placeholder="Controller Name" />
                                                </div>
                                                <div class="form-group">
                                                    <label>Custom Model Name</label>
                                                    <input type="text" id="model" name="model" value="<?php echo isset($_POST['model']) ? $_POST['model'] : '' ?>" class="form-control" placeholder="Controller Name" />
                                                </div>
                                                <input type="submit" value="Generate" name="generate" class="btn btn-primary" onclick="javascript: return confirm('This will overwrite the existing files. Continue ?')" />

                                                <!-- <input type="submit" value="Generate All" name="generateall" class="btn btn-danger" onclick="javascript: return confirm('WARNING !! This will generate code for ALL TABLE and overwrite the existing files\
                                                \nPlease double check before continue. Continue ?')" /> -->
                                                
                                                <!-- <a href="core/setting.php" class="btn btn-default">Setting</a> -->
                                            </form>
                                            <br>

                                            <?php
                                            foreach ($hasil as $h) {
                                                echo '<p>' . $h . '</p>';
                                            }
                                            ?>
                                        </div>
                                    </div>
    
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
    <!-- i18next.min.js -->
    <script type="text/javascript" src="../vendor/bower_components/i18next/i18next.min.js"></script>
    <script type="text/javascript" src="../vendor/bower_components/i18next-xhr-backend/i18nextXHRBackend.min.js"></script>
    <script type="text/javascriptv" src="../vendor/bower_components/i18next-browser-languagedetector/i18nextBrowserLanguageDetector.min.js"></script>
    <script type="text/javascript" src="../vendor/bower_components/jquery-i18next/jquery-i18next.min.js"></script>
    <!-- Custom js -->
    <script type="text/javascript" src="../vendor/assets/js/script.js"></script>

    <script type="text/javascript">
            function capitalize(s) {
                return s && s[0].toUpperCase() + s.slice(1);
            }

            function setname() {
                var table_name = document.getElementById('table_name').value.toLowerCase();
                if (table_name != '') {
                    document.getElementById('controller').value = capitalize(table_name);
                    document.getElementById('model').value = capitalize(table_name) + '_model';
                } else {
                    document.getElementById('controller').value = '';
                    document.getElementById('model').value = '';
                }
            }
        </script>

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
          <h6>This will end this session</h6>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          <!-- <button type="button" class="btn btn-info" data-dismiss="modal">Logout</button> -->
          <a href="../auth/logout" type="button" class="btn btn-info">Logout</a>
        </div>
      </div>
    </div>
  </div>
</div>
