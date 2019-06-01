<title>CMS | Add New Contactus</title>
           
<!-- Page header start -->
<div class="page-header">
<div class="page-header-title">
    <h4>Add New Contactus</h4>
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
        <li class="breadcrumb-item"><a href="#!">Add NewContactus</a>
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
                            <label for="varchar">Contact Name <?php echo form_error('contact_name') ?></label>
                            <input type="text" <?php if (form_error('contact_name')) { echo 'class="form-control form-control-danger"'; } else { echo 'class="form-control"'; }  ?> name="contact_name" id="contact_name" autocomplete="off" placeholder="Contact Name" value="<?php echo $contact_name; ?>" />
                        </div>
											      <div class="form-group">
                            <label for="varchar">Contact Email <?php echo form_error('contact_email') ?></label>
                            <input type="text" <?php if (form_error('contact_email')) { echo 'class="form-control form-control-danger"'; } else { echo 'class="form-control"'; }  ?> name="contact_email" id="contact_email" autocomplete="off" placeholder="Contact Email" value="<?php echo $contact_email; ?>" />
                        </div>
											     <div class="form-group">
                            <label for="contact_comment">Contact Comment <?php echo form_error('contact_comment') ?></label>
                            <textarea  <?php if (form_error('contact_comment')) { echo 'class="form-control form-control-danger"'; } else { echo 'class="form-control"'; }  ?> rows="5" name="contact_comment" id="contact_comment" placeholder="Contact Comment"><?php echo $contact_comment; ?></textarea>
                        </div>
											      <div class="form-group">
                            <label for="date">Contact Date Issue <?php echo form_error('contact_date_issue') ?></label>
                            <input type="date"  <?php if (form_error('contact_date_issue')) { echo 'class="form-control form-control-danger"'; } else { echo 'class="form-control"'; }  ?> name="contact_date_issue" id="contact_date_issue" placeholder="Contact Date Issue" value="<?php echo $contact_date_issue; ?>" />
                            </div>
											     <input type="hidden" name="contact_id" value="<?php echo $contact_id; ?>" /> 
											     <button type="submit" class="btn btn-info"><?php echo $button ?></button> 
											     <a href="<?php echo site_url('contactus') ?>" class="btn btn-danger">Cancel</a>
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