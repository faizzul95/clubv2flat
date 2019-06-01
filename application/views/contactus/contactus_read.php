<title>CMS | Contactus View</title>
   
                    <!-- Page header start -->
                    <div class="page-header">
                        <div class="page-header-title">
                            <h4>View Contactus</h4>
                        </div>
                        <div class="page-header-breadcrumb">
                            <ul class="breadcrumb-title">
                                <li class="breadcrumb-item">
                                    <a href="index.html">
                                        <i class="icofont icofont-home"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item"><a href="#!">Contactus</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#!">View Contactus</a>
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
    
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Contact Name</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" placeholder="Disabled text" value="<?php echo $contact_name; ?>" disabled>
                                                </div>
                                            </div>
    
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Contact Email</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" placeholder="Disabled text" value="<?php echo $contact_email; ?>" disabled>
                                                </div>
                                            </div>
    
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Contact Comment</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" placeholder="Disabled text" value="<?php echo $contact_comment; ?>" disabled>
                                                </div>
                                            </div>
    
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Contact Date Issue</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" placeholder="Disabled text" value="<?php echo $contact_date_issue; ?>" disabled>
                                                </div>
                                            </div>
	  <a href="<?php echo site_url('contactus') ?>" class="btn btn-info btn-square pull-left"><i class="icofont icofont-arrow-left"></i> Back</a>
	

                                    </div>
                                </div>
                                <!-- Basic Form Inputs card end -->
                            </div>
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
    <!-- classie js -->
    <script type="text/javascript" src="<?= base_url(); ?>/vendor/bower_components/classie/classie.js"></script>
    <!-- i18next.min.js -->
    <script type="text/javascript" src="<?= base_url(); ?>/vendor/bower_components/i18next/i18next.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>/vendor/bower_components/i18next-xhr-backend/i18nextXHRBackend.min.js"></script>
    <script type="text/javascriptv" src="<?= base_url(); ?>/vendor/bower_components/i18next-browser-languagedetector/i18nextBrowserLanguageDetector.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>/vendor/bower_components/jquery-i18next/jquery-i18next.min.js"></script>
    <!-- Custom js -->
    <script type="text/javascript" src="<?= base_url(); ?>/vendor/assets/js/script.js"></script>