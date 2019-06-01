<title>CMS | Update Menu_access</title>

<!-- Page header start -->
<div class="page-header">
    <div class="page-header-title">
        <h4>Update Menu_access</h4>
    </div>
    <div class="page-header-breadcrumb">
        <ul class="breadcrumb-title">
            <li class="breadcrumb-item">
                <a href="index.html">
                    <i class="icofont icofont-home"></i>
                </a>
            </li>
            <li class="breadcrumb-item"><a href="#!">Menu_access</a>
            </li>
            <li class="breadcrumb-item"><a href="#!">Update Menu_access</a>
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
                                <label for="enum">Id User Level <?php echo form_error('id_user_level') ?></label>
                                <input type="text" class="form-control" name="id_user_level" id="id_user_level" placeholder="Id User Level" value="<?php echo $id_user_level; ?>" />
                            </div>
	    <div class="form-group">
                                <label for="int">Menu Id <?php echo form_error('menu_id') ?></label>
                                <input type="text" class="form-control" name="menu_id" id="menu_id" placeholder="Menu Id" value="<?php echo $menu_id; ?>" />
                            </div>
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-info"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('menu_access') ?>" class="btn btn-danger">Cancel</a>
	</form>


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