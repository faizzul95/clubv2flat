 <title>CMS | Update User</title>
                    <div class="page-header">
                        <div class="page-header-title">
                            <h4>Update User</h4>
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
                                <li class="breadcrumb-item"><a href="#!">Update User</a>
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
                                    <form action="User/update_action" method="post">

                                        <h3 class="text-center txt-primary">Personnal Information</h3>
                                            <hr>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Full Name</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" placeholder="Disabled text" value="<?php echo $detail_fullname; ?>">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Phone Number</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" placeholder="Disabled text" value="<?php echo $detail_phone; ?>">
                                            </div>
                                        </div>

                                         <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" placeholder="Disabled text" value="<?php echo $detail_email; ?>">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Address</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" placeholder="Disabled text" value="<?php echo $detail_address; ?>">
                                            </div>
                                        </div>

                                        <h3 class="text-center txt-primary">Account Information</h3>
                                        <hr>

                                      <!--  <div class="form-group">
                                            <label for="varchar">Usr Username <?php //echo form_error('usr_username') ?></label>
                                            <input type="text" class="form-control" name="usr_username" id="usr_username" placeholder="Usr Username" value="<?php //echo $usr_username; ?>" />
                                        </div>
                                        <div class="form-group">
                                            <label for="varchar">Usr Password <?php //echo form_error('usr_password') ?></label>
                                            <input type="text" class="form-control" name="usr_password" id="usr_password" placeholder="Usr Password" value="<?php //echo $usr_password; ?>" />
                                        </div>
                                        <div class="form-group">
                                            <label for="varchar">Usr Role <?php //echo form_error('usr_role') ?></label>
                                            <input type="text" class="form-control" name="usr_role" id="usr_role" placeholder="Usr Role" value="<?php //echo $usr_role; ?>" />
                                        </div> -->
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Username</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" placeholder="Disabled text" value="<?php echo $usr_username; ?>">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Role</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" placeholder="Disabled text" value="<?php echo $usr_role; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Status <?php echo form_error('usr_status') ?></label>
                                            <div class="col-sm-10">
                                                <!-- <input type="text" class="form-control" name="usr_status" id="usr_status" value="<?php //echo $usr_status; ?>"> -->

                                            <?php 
                                                $id = 'id="usr_status" class="form-control"';
                                                echo form_dropdown("usr_status", $this->db->enum_select("user","usr_status"),'',$id); 
                                                ?>

                                            </div>
                                        </div>
                                	    <input type="hidden" name="user_id" value="<?php echo $user_id; ?>" /> 
                                	    <button type="submit" class="btn btn-info"><?php echo $button ?></button> 
                                	    <a href="<?php echo site_url('user') ?>" class="btn btn-danger">Cancel</a>
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
