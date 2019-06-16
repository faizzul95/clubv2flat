 <title>CMS | Dashboard</title>
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
                                            $query = $this->db->query('SELECT * FROM user WHERE usr_role = "member" && usr_status = "active"');
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

                    <!-- Blur user-card start -->
                    <div class="col-md-12 col-xl-4 m-b-30">
                        <div class="widget-main-card blur-user-card">
                            <img src="<?= base_url(); ?>/assets/image/user_upload/<?php echo $this->session->userdata('image'); ?>" style="border-radius: 50%;"  width="150" height="150" alt="">
                            <h3><?php echo $this->session->userdata('userfname'); ?></h3>
                            
                            <a href="profile">
                                <button class="btn btn-info">Settings</button>
                            </a>

                            <div class="blur-footer">
                                <div class="row text-center">
                                    <div class="col-xs-6 col-sm-6 col-lg-6">
                                        <h4>15</h4>
                                        <span>Public Activity</span>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-lg-6">
                                        <h4>32</h4>
                                        <span>Member Activity</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Blur user-card end -->

                    <!-- Calender card start -->
                    <div class="col-md-12 col-xl-8">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card borderless-card">
                                    <div class="row">
                                        <div class="col-sm-12 p-l-0">
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


                     <!-- System clock start -->
                    <!-- <div class="col-sm-12">
                        <div class="card borderless-card">
                            <div class="card-block clock-widget">
                                <div id="current-time"></div> -->
                                <!-- <h5>Sunday 30th April , 2017</h5> -->
                                <!-- <h5> -->
                                    <?php //date_default_timezone_set("Asia/Kuala_Lumpur"); 
                                        // echo strtoupper(date('l')) . " ";
                                        // echo date('jS') . " ";
                                        // echo date('M') . ", ";
                                        // echo date('Y');
                                    ?>    
                                <!-- </h5> -->
                               <!--  <i class="icofont icofont-ui-alarm basic-alarm"></i>
                                <i class="icofont icofont-ui-alarm bg-alarm"></i>
                            </div>
                        </div>
                    </div> -->
                    <!-- System clock end -->
                </div>
            </div>

         <!-- Required Jquery -->
    <script type="text/javascript" src="<?= base_url(); ?>/vendor/bower_components/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>/vendor/bower_components/jquery-ui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>/vendor/bower_components/tether/dist/js/tether.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>/vendor/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="<?= base_url(); ?>/vendor/bower_components/jquery-slimscroll/jquery.slimscroll.js"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="<?= base_url(); ?>/vendor/bower_components/modernizr/modernizr.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>/vendor/bower_components/modernizr/feature-detects/css-scrollbars.js"></script>
    <!-- Morris Chart js -->
<!--     <script src="<?= base_url(); ?>/vendor/bower_components/raphael/raphael.min.js"></script>
    <script src="<?= base_url(); ?>/vendor/bower_components/morris.js/morris.js"></script> -->
    <!-- Calender js -->
    <script type="text/javascript" src="<?= base_url(); ?>/vendor/bower_components/moment/min/moment.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>/vendor/assets/pages/widget/calender/pignose.calendar.min.js"></script>
    <!-- i18next.min.js -->
    <script type="text/javascript" src="<?= base_url(); ?>/vendor/bower_components/i18next/i18next.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>/vendor/bower_components/i18next-xhr-backend/i18nextXHRBackend.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>/vendor/bower_components/i18next-browser-languagedetector/i18nextBrowserLanguageDetector.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>/vendor/bower_components/jquery-i18next/jquery-i18next.min.js"></script>
    <!-- sweet alert js -->
    <script type="text/javascript" src="<?= base_url(); ?>/vendor/bower_components/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>/vendor/assets/js/modal.js"></script>
    <!-- sweet alert modal.js intialize js -->
    <!-- modalEffects js nifty modal window effects -->
    <script type="text/javascript" src="<?= base_url(); ?>/vendor/assets/js/modalEffects.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>/vendor/assets/js/classie.js"></script>
    <!-- Custom js -->

    <!-- <script type="text/javascript" src="<?= base_url(); ?>/vendor/assets/pages/widget/custom-widget.js"></script> -->
    <script type="text/javascript" src="<?= base_url(); ?>/vendor/assets/pages/dashboard/project-dashboard.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>/vendor/assets/js/script.js"></script>

    <script type="text/javascript">
        $(function() {
            $('.widget-calender').pignoseCalendar();
        });
    </script>