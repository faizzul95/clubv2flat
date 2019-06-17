<title>CMS | Add New Join_member_activity</title>
           
<!-- Page header start -->
<div class="page-header">
<div class="page-header-title">
    <h4>Add New Join_member_activity</h4>
</div>
<div class="page-header-breadcrumb">
    <ul class="breadcrumb-title">
        <li class="breadcrumb-item">
            <a href="index.html">
                <i class="icofont icofont-home"></i>
            </a>
        </li>
        <li class="breadcrumb-item"><a href="#!">Join_member_activity</a>
        </li>
        <li class="breadcrumb-item"><a href="#!">Add NewJoin_member_activity</a>
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
                            <label for="int">Act Id <?php echo form_error('act_id') ?></label>
                            <input type="number"  <?php if (form_error('act_id')) { echo 'class="form-control form-control-danger"'; } else { echo 'class="form-control"'; }  ?> name="act_id" id="act_id" min="0" placeholder="Act Id" value="<?php echo $act_id; ?>" />
                            </div>
											      <div class="form-group">
                            <label for="int">User Id <?php echo form_error('user_id') ?></label>
                            <input type="number"  <?php if (form_error('user_id')) { echo 'class="form-control form-control-danger"'; } else { echo 'class="form-control"'; }  ?> name="user_id" id="user_id" min="0" placeholder="User Id" value="<?php echo $user_id; ?>" />
                            </div>
											      <div class="form-group">
                            <label for="date">Join Date <?php echo form_error('join_date') ?></label>
                            <input type="date"  <?php if (form_error('join_date')) { echo 'class="form-control form-control-danger"'; } else { echo 'class="form-control"'; }  ?> name="join_date" id="join_date" placeholder="Join Date" value="<?php echo $join_date; ?>" />
                            </div>
											    <div class="form-group">
                            <label for="enum">Join Status <?php echo form_error('join_status') ?></label>
                           
                            <?php 
                                $id = 'id="join_status" class="form-control"';
                                echo form_dropdown("join_status", $this->db->enum_select("join_member_activity","join_status"),'',$id); 
                            ?>

                            </div>
											     <input type="hidden" name="member_activity_id" value="<?php echo $member_activity_id; ?>" /> 
											     <button type="submit" class="btn btn-info"><?php echo $button ?></button> 
											     <a href="<?php echo site_url('join_member_activity') ?>" class="btn btn-danger">Cancel</a>
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