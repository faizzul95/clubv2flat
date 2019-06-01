<title>CMS | Add New Activity</title>
           
<!-- Page header start -->
<div class="page-header">
<div class="page-header-title">
    <h4>Add New Activity</h4>
</div>
<div class="page-header-breadcrumb">
    <ul class="breadcrumb-title">
        <li class="breadcrumb-item">
            <a href="index.html">
                <i class="icofont icofont-home"></i>
            </a>
        </li>
        <li class="breadcrumb-item"><a href="#!">Activity</a>
        </li>
        <li class="breadcrumb-item"><a href="#!">Add NewActivity</a>
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
                            <label for="varchar">Act Name <?php echo form_error('act_name') ?></label>
                            <input type="text" <?php if (form_error('act_name')) { echo 'class="form-control form-control-danger"'; } else { echo 'class="form-control"'; }  ?> name="act_name" id="act_name" autocomplete="off" placeholder="Act Name" value="<?php echo $act_name; ?>" />
                        </div>
											     <div class="form-group">
                            <label for="act_post_by">Act Post By <?php echo form_error('act_post_by') ?></label>
                            <textarea  <?php if (form_error('act_post_by')) { echo 'class="form-control form-control-danger"'; } else { echo 'class="form-control"'; }  ?> rows="5" name="act_post_by" id="act_post_by" placeholder="Act Post By"><?php echo $act_post_by; ?></textarea>
                        </div>
											     <div class="form-group">
                            <label for="act_description">Act Description <?php echo form_error('act_description') ?></label>
                            <textarea  <?php if (form_error('act_description')) { echo 'class="form-control form-control-danger"'; } else { echo 'class="form-control"'; }  ?> rows="5" name="act_description" id="act_description" placeholder="Act Description"><?php echo $act_description; ?></textarea>
                        </div>
											      <div class="form-group">
                            <label for="date">Act Date <?php echo form_error('act_date') ?></label>
                            <input type="date"  <?php if (form_error('act_date')) { echo 'class="form-control form-control-danger"'; } else { echo 'class="form-control"'; }  ?> name="act_date" id="act_date" placeholder="Act Date" value="<?php echo $act_date; ?>" />
                            </div>
											      <div class="form-group">
                            <label for="time">Act Time <?php echo form_error('act_time') ?></label>
                            <input type="time"  <?php if (form_error('act_time')) { echo 'class="form-control form-control-danger"'; } else { echo 'class="form-control"'; }  ?> name="act_time" id="act_time" placeholder="Act Time" value="<?php echo $act_time; ?>" />
                            </div>
											      <div class="form-group">
                            <label for="varchar">Act Venue <?php echo form_error('act_venue') ?></label>
                            <input type="text" <?php if (form_error('act_venue')) { echo 'class="form-control form-control-danger"'; } else { echo 'class="form-control"'; }  ?> name="act_venue" id="act_venue" autocomplete="off" placeholder="Act Venue" value="<?php echo $act_venue; ?>" />
                        </div>
											    <div class="form-group">
                            <label for="enum">Act Category <?php echo form_error('act_category') ?></label>
                           
                            <?php 
                                $id = 'id="act_category" class="form-control"';
                                echo form_dropdown("act_category", $this->db->enum_select("activity","act_category"),'',$id); 
                            ?>

                            </div>
											      <div class="form-group">
                            <label for="varchar">Act Image <?php echo form_error('act_image') ?></label>
                            <input type="text" <?php if (form_error('act_image')) { echo 'class="form-control form-control-danger"'; } else { echo 'class="form-control"'; }  ?> name="act_image" id="act_image" autocomplete="off" placeholder="Act Image" value="<?php echo $act_image; ?>" />
                        </div>
											      <div class="form-group">
                            <label for="int">Act Fee <?php echo form_error('act_fee') ?></label>
                            <input type="number"  <?php if (form_error('act_fee')) { echo 'class="form-control form-control-danger"'; } else { echo 'class="form-control"'; }  ?> name="act_fee" id="act_fee" min="0" placeholder="Act Fee" value="<?php echo $act_fee; ?>" />
                            </div>
											     <input type="hidden" name="act_id" value="<?php echo $act_id; ?>" /> 
											     <button type="submit" class="btn btn-info"><?php echo $button ?></button> 
											     <a href="<?php echo site_url('activity') ?>" class="btn btn-danger">Cancel</a>
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