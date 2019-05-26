<?php
    $dashboard = false;
    $application = false;
    $activity = false;
    $user = false;
    $contactus = false;
    $profile = false;

    $application = true;
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>CMS | List Of User</title>
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
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="../vendor/assets/icon/font-awesome/css/font-awesome.min.css">
    <!-- flag icon framework css -->
    <link rel="stylesheet" type="text/css" href="../vendor/assets/pages/flag-icon/flag-icon.min.css">
    <!-- Menu-Search css -->
    <link rel="stylesheet" type="text/css" href="../vendor/assets/pages/menu-search/css/component.css">
    <!-- Data Table Css -->
    <link rel="stylesheet" type="text/css" href="../vendor/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="../vendor/assets/pages/data-table/css/buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="../vendor/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="../vendor/assets/pages/data-table/extensions/buttons/css/buttons.dataTables.min.css">
    <!-- sweet alert framework -->
    <link rel="stylesheet" type="text/css" href="../vendor/bower_components/sweetalert/dist/sweetalert.css">

     <!-- notify js Fremwork -->
    <link rel="stylesheet" type="text/css" href="../vendor/bower_components/pnotify/dist/pnotify.css">
    <link rel="stylesheet" type="text/css" href="../vendor/bower_components/pnotify/dist/pnotify.mobile.css">
    <link rel="stylesheet" type="text/css" href="../vendor/assets/pages/pnotify/notify.css">

    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="../vendor/assets/css/style.css">
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
                    <li <?php if($profile) { ?> class="nav-item single-item has-class" <?php }else{ ?> class="nav-item single-item"<?php } ?> >
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

    <!-- Main-body start -->
    <div class="main-body">
        <div class="page-wrapper">
            <!-- Page-header start -->
            <div class="page-header">
                <div class="page-header-title">
                    <h4> List Of User</h4>
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
                        <li class="breadcrumb-item"><a href="#!">List Of User</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Page-header end -->

            <!-- Page-body start -->
            <div class="page-body">
                <div class="row">
                    <div class="col-sm-12">

                    <?php if ($this->session->userdata('message')) { ?>
                         <?php if ($this->session->userdata('message') == "Record Not Found") { ?>
                             <div id="message" class="alert alert-danger icons-alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <i class="icofont icofont-error"></i>
                                </button>
                                <p><strong>Error !</strong> <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?></p>
                            </div>
                        <?php }else{ ?>
                             <div id="message" class="alert alert-success icons-alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <i class="icofont icofont-error"></i>
                                </button> <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?></p>
                            </div>
                        <?php } ?>
                    <?php } ?>

            <!-- Basic Button table start -->
                        <div class="card">
                            <div class="card-header">
                                    <?php //echo anchor(site_url('user/create'), '<i class="icofont icofont-ui-add"></i> Create', 'class="btn btn-info"'); ?>
                            		<?php echo anchor(site_url('user/excel'), '<i class="icofont icofont-download-alt"></i> Export as Excel', 'class="btn btn-success btn-square"'); ?>
                            		<?php echo anchor(site_url('user/word'), '<i class="icofont icofont-download-alt"></i> Export as Word', 'class="btn btn-inverse btn-square"'); ?>
                            </div>
                            <div class="card-block">
                                <div class="dt-responsive table-responsive">
                                     <div class="dt-responsive table-responsive">
                                        <table id="mytable" class="table table-striped table-bordered nowrap">

                                        <thead>
                                            <tr>
                                               <th>No</th>
                                                <th>Name</th>
                                                <th>Phone Number</th>
                                                <th>Address</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                               <th>No</th>
                                                <th>Name</th>
                                                <th>Phone Number</th>
                                                <th>Address</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
	    
                                    </table>
                                 </div>
                            </div>
                        </div>
                        <!-- Basic Button table end -->
                    </div>
                </div>
            </div>
            <!-- Page-body start -->
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
        <!-- data-table js -->
        <script src="../vendor/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="../vendor/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
        <script src="../vendor/assets/pages/data-table/js/jszip.min.js"></script>
        <script src="../vendor/assets/pages/data-table/js/pdfmake.min.js"></script>
        <script src="../vendor/assets/pages/data-table/js/vfs_fonts.js"></script>
        <script src="../vendor/assets/pages/data-table/extensions/buttons/js/dataTables.buttons.min.js"></script>
        <script src="../vendor/assets/pages/data-table/extensions/buttons/js/buttons.flash.min.js"></script>
        <script src="../vendor/assets/pages/data-table/extensions/buttons/js/jszip.min.js"></script>
        <script src="../vendor/assets/pages/data-table/extensions/buttons/js/pdfmake.min.js"></script>
        <script src="../vendor/assets/pages/data-table/extensions/buttons/js/vfs_fonts.js"></script>
        <script src="../vendor/assets/pages/data-table/extensions/buttons/js/buttons.colVis.min.js"></script>
        <script src="../vendor/bower_components/datatables.net-buttons/js/buttons.print.min.js"></script>
        <script src="../vendor/bower_components/datatables.net-buttons/js/buttons.html5.min.js"></script>
        <script src="../vendor/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script src="../vendor/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="../vendor/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
        <!-- i18next.min.js -->
        <script type="text/javascript" src="../vendor/bower_components/i18next/i18next.min.js"></script>
        <script type="text/javascript" src="../vendor/bower_components/i18next-xhr-backend/i18nextXHRBackend.min.js"></script>
        <script type="text/javascript" src="../vendor/bower_components/i18next-browser-languagedetector/i18nextBrowserLanguageDetector.min.js"></script>
        <script type="text/javascript" src="../vendor/bower_components/jquery-i18next/jquery-i18next.min.js"></script>
         <!-- pnotify js -->
        <script type="text/javascript" src="../vendor/bower_components/pnotify/dist/pnotify.js"></script>
        <script type="text/javascript" src="../vendor/bower_components/pnotify/dist/pnotify.desktop.js"></script>
        <script type="text/javascript" src="../vendor/assets/pages/pnotify/notify.js"></script>
        <!-- sweet alert js -->
        <script type="text/javascript" src="../vendor/bower_components/sweetalert/dist/sweetalert.min.js"></script>
        <script type="text/javascript" src="../vendor/assets/js/modal.js"></script>
        <!-- sweet alert modal.js intialize js -->
        <!-- modalEffects js nifty modal window effects -->
        <script type="text/javascript" src="../vendor/assets/js/modalEffects.js"></script>
        <script type="text/javascript" src="../vendor/assets/js/classie.js"></script>
        <!-- Custom js -->
        <script src="../vendor/assets/pages/data-table/extensions/buttons/js/extension-btns-custom.js"></script>
        <script type="text/javascript" src="../vendor/assets/js/script.js"></script>

        <script type="text/javascript">
            $(document).ready(function() {
                $.fn.dataTableExt.oApi.fnPagingInfo = function(oSettings)
                {
                    return {
                        "iStart": oSettings._iDisplayStart,
                        "iEnd": oSettings.fnDisplayEnd(),
                        "iLength": oSettings._iDisplayLength,
                        "iTotal": oSettings.fnRecordsTotal(),
                        "iFilteredTotal": oSettings.fnRecordsDisplay(),
                        "iPage": Math.ceil(oSettings._iDisplayStart / oSettings._iDisplayLength),
                        "iTotalPages": Math.ceil(oSettings.fnRecordsDisplay() / oSettings._iDisplayLength)
                    };
                };

                var t = $("#mytable").dataTable({
                    oLanguage: {
                        sProcessing: "loading..."
                    },
                    processing: true,
                    serverSide: true,
                    ajax: {"url": "user/json", "type": "POST"},
                    columns: [
                        {
                            "data": "app_id",
                            "orderable": false
                        }
                        // ,{"data": "usr_username"},{"data": "usr_password"},{"data": "usr_role"},{"data": "usr_status"},

                        ,{"data": "detail_fullname"},{"data": "detail_phone"},{"data": "detail_address"},{"data": "usr_status"},
                        {
                            "data" : "action",
                            "orderable": false,
                            "className" : "text-center"
                        }
                    ],
                    order: [[0, 'desc']],
                    rowCallback: function(row, data, iDisplayIndex) {
                        var info = this.fnPagingInfo();
                        var page = info.iPage;
                        var length = info.iLength;
                        var index = page * length + (iDisplayIndex + 1);
                        $('td:eq(0)', row).html(index);
                    }
                });
            });
        </script>

           <script type="text/javascript">
            $('body').on('click', '.delete-btn', function(event){
                 event.preventDefault();
            var url = $(this).attr('href');
            swal({
                title: "Are you sure?",
                text: "Member will be deleted",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Yes, delete !",
                cancelButtonText: "Cancel",
                closeOnConfirm: false,
                closeOnCancel: true,
                allowOutsideClick: true  
              },

              function(isConfirm) {
              if (isConfirm) {
                 $.ajax({
                     url: url,
                     error: function() {
                        alert('Something is wrong');
                     },
                     success: function(data) {
                          swal("Deleted!", "Member has been deleted.", "success");

                     }
                  });
                } 
                 $('#mytable').DataTable().ajax.reload();
              });

            })
        </script>
    </body>
</html>