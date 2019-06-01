<title>CMS | Update Menu</title>

<!-- Page header start -->
<div class="page-header">
    <div class="page-header-title">
        <h4>Update Menu</h4>
    </div>
    <div class="page-header-breadcrumb">
        <ul class="breadcrumb-title">
            <li class="breadcrumb-item">
                <a href="index.html">
                    <i class="icofont icofont-home"></i>
                </a>
            </li>
            <li class="breadcrumb-item"><a href="#!">Menu</a>
            </li>
            <li class="breadcrumb-item"><a href="#!">Update Menu</a>
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
                                <label for="varchar">Menu Title <?php echo form_error('menu_title') ?></label>
                                <input type="text" class="form-control" name="menu_title" id="menu_title" placeholder="Menu Title" value="<?php echo $menu_title; ?>" />
                            </div>
	    <div class="form-group">
                                <label for="varchar">Menu Url <?php echo form_error('menu_url') ?></label>
                                <input type="text" class="form-control" name="menu_url" id="menu_url" placeholder="Menu Url" value="<?php echo $menu_url; ?>" />
                            </div>
	    <div class="form-group">
                                <label for="varchar">Menu Icon <?php echo form_error('menu_icon') ?></label>
                                <input type="text" class="form-control" name="menu_icon" id="menu_icon" placeholder="Menu Icon" value="<?php echo $menu_icon; ?>" />
                            </div>
	    <div class="form-group">
                                <label for="int">Is Main Menu <?php echo form_error('is_main_menu') ?></label>
                                <input type="text" class="form-control" name="is_main_menu" id="is_main_menu" placeholder="Is Main Menu" value="<?php echo $is_main_menu; ?>" />
                            </div>
	    <div class="form-group">
                                <label for="enum">Is Active <?php echo form_error('is_active') ?></label>
                                <input type="text" class="form-control" name="is_active" id="is_active" placeholder="Is Active" value="<?php echo $is_active; ?>" />
                            </div>
	    <input type="hidden" name="menu_id" value="<?php echo $menu_id; ?>" /> 
	    <button type="submit" class="btn btn-info"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('menu') ?>" class="btn btn-danger">Cancel</a>
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