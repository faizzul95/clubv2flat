<title>CMS | Profile</title>

        <!-- Page-header start -->
            <div class="page-header">
                <div class="page-header-title">
                    <h4>Profile</h4>
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
                        <li class="breadcrumb-item"><a href="#!">Profile</a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Page-body start -->
            <div class="page-body">
                <div class="row">
                    <div class="col-sm-12">
                        <div>
                            <div class="content social-timeline">
                                <div class="">
                                    <!-- Row Starts -->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <!-- Social wallpaper start -->
                                            <div class="social-wallpaper">
                                                <img src="<?= base_url(); ?>/vendor/assets/images/social/img1.jpg" class="img-fluid width-100" alt="" />
                                                <div class="profile-hvr">
                                                    <i class="icofont icofont-ui-edit p-r-10"></i>
                                                    <i class="icofont icofont-ui-delete"></i>
                                                </div>
                                            </div>
                                            <!-- Social wallpaper end -->
                                        </div>
                                    </div>
                                    <!-- Row end -->
                                    <!-- Row Starts -->
                                    <div class="row">
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-xs-12">
                                            <!-- Social timeline left start -->
                                            <div class="social-timeline-left">
                                                <!-- social-profile card start -->
                                                <div class="card">
                                                    <div class="social-profile">
                                                        <img class="img-fluid width-100" src="<?= base_url(); ?>/assets/image/user_upload/<?php echo $this->session->userdata('image'); ?>" alt="">
                                                        <div class="profile-hvr m-t-15">
                                                            <a class="]"><i class="icofont icofont-ui-edit p-r-10"></i></a>
                                                            <i class="icofont icofont-ui-delete deleteimage-btn"></i>
                                                        </div>
                                                    </div>
                                                    <div class="card-block social-follower">
                                                        <h4><?php echo $detail_fullname; ?></h4>
                                                    </div>
                                                </div>
                                                <!-- social-profile card end -->
                                                <!-- Who to follow card start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5 class="card-header-text">Who to follow</h5>
                                                    </div>
                                                    <div class="card-block user-box">
                                                        <div class="media m-b-10">
                                                            <a class="media-left" href="#!">
                                                                <img class="media-object img-circle" src="<?= base_url(); ?>/vendor/assets/images/avatar-1.png" alt="Generic placeholder image">
                                                                <div class="live-status bg-danger"></div>
                                                            </a>
                                                            <div class="media-body">
                                                                <div class="chat-header">Josephin Doe</div>
                                                                <div class="text-muted social-designation">Softwear Engineer</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Who to follow card end -->
                                            </div>
                                            <!-- Social timeline left end -->
                                        </div>
                                        <div class="col-xl-9 col-lg-8 col-md-8 col-xs-12 ">
                                            <!-- Nav tabs -->
                                            <div class="card social-tabs">
                                                <ul class="nav nav-tabs md-tabs tab-timeline" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" data-toggle="tab" href="#about" role="tab">About</a>
                                                        <div class="slide"></div>
                                                    </li>
                                                   <!--  <li class="nav-item">
                                                        <a class="nav-link active" data-toggle="tab" href="#about" role="tab">About</a>
                                                        <div class="slide"></div>
                                                    </li> -->
                                                </ul>
                                            </div>
                                            <!-- Tab panes -->
                                            <div class="tab-content">
                                                <!-- About tab start -->
                                                <div class="tab-pane active" id="about">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="card">
                                                                <div class="card-header">
                                                                    <h5 class="card-header-text">Personal Information</h5>
                                                                    <button id="edit-btn" type="button" class="btn btn-primary waves-effect waves-light f-right">
                                                                        <i class="icofont icofont-edit"></i>
                                                                    </button>
                                                                </div>
                                                                <div class="card-block">
                                                                    <div id="view-info" class="row">
                                                                        <div class="col-lg-6 col-md-12">
                                                                            <form>
                                                                                <table class="table m-b-0">
                                                                                    <tr>
                                                                                        <th class="social-label b-none p-t-0">Full Name
                                                                                        </th>
                                                                                        <td class="social-user-name b-none p-t-0 text-muted"><?php echo $detail_fullname; ?></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <th class="social-label b-none">Gender</th>
                                                                                        <td class="social-user-name b-none text-muted"><?php echo $detail_gender; ?></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <th class="social-label b-none">Birth Date</th>
                                                                                        <td class="social-user-name b-none text-muted"><?php echo $detail_birth_date; ?></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <th class="social-label b-none">Marital Status</th>
                                                                                        <td class="social-user-name b-none text-muted"><?php echo $detail_marital_status; ?></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <th class="social-label b-none p-b-0">Location</th>
                                                                                        <td class="social-user-name b-none p-b-0 text-muted"><?php echo $detail_address; ?></td>
                                                                                    </tr>
                                                                                </table>
                                                                            </form>
                                                                        </div>

                                                                    </div>
                                                                    <div id="edit-info" class="row">
                                                                        <div class="col-lg-12 col-md-12">
                                                                            <form>
                                                                                <div class="input-group">
                                                                                    <input type="text" name="detail_fullname"  value="<?php echo $detail_fullname; ?>" class="form-control" placeholder="Full Name">
                                                                                </div>
                                                                                <div class="input-group">
                                                                                    <div class="form-radio">
                                                                                        <div class="form-radio">
                                                                                            <label class="md-check p-0">Gender</label>
                                                                                            <div class="radio radio-inline">
                                                                                                <label>
                                                                                                    <input type="radio" name="detail_gender" <?php if ($detail_gender == 'Male' ) echo 'checked' ; ?> value="Male">
                                                                                                    <i class="helper"></i>Male
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio radio-inline">
                                                                                                <label>
                                                                                                    <input type="radio" name="detail_gender" <?php if ($detail_gender == 'Female' ) echo 'checked' ; ?> Value="Female">
                                                                                                    <i class="helper"></i>Female
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="input-group">
                                                                                    <input id="dropper-default" name="detail_birth_date"  value="<?php echo $detail_birth_date; ?>" class="form-control" type="text" placeholder="Birth Date" />
                                                                                </div>
                                                                                <div class="input-group">
                                                                                    <select id="hello-single" name="detail_marital_status" class="form-control">
                                                                                        <option value="">---- Marital Status ----</option>
                                                                                        <option value="Married" <?php if ($detail_marital_status == 'Married' ) echo 'selected' ; ?> >Married</option>
                                                                                        <option value="Single" <?php if ($detail_marital_status == 'Single' ) echo 'selected' ; ?> >Single</option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="md-group-add-on">
                                                                                    <textarea rows="5" name="detail_address" cols="5" class="form-control" placeholder="Address..."> <?php echo $detail_address; ?></textarea>
                                                                                </div>
                                                                                <div class="text-center m-t-20">
                                                                                    <a href="javascript:;" id="edit-save" class="btn btn-primary waves-effect waves-light m-r-20">Save</a>
                                                                                    <a href="javascript:;" id="edit-cancel" class="btn btn-danger waves-effect waves-light">Cancel</a>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <div class="card">
                                                                <div class="card-header">
                                                                    <h5 class="card-header-text">Contact Information</h5>
                                                                    <button id="edit-Contact" type="button" class="btn btn-primary waves-effect waves-light f-right">
                                                                        <i class="icofont icofont-edit"></i>
                                                                    </button>
                                                                </div>
                                                                <div class="card-block">
                                                                    <div id="contact-info" class="row">
                                                                        <div class="col-lg-6 col-md-12">
                                                                            <table class="table m-b-0">
                                                                                <tr>
                                                                                    <th class="social-label b-none p-t-0">Mobile Number</th>
                                                                                    <td class="social-user-name b-none p-t-0 text-muted"><?php echo $detail_phone; ?></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th class="social-label b-none">Email Address</th>
                                                                                    <td class="social-user-name b-none text-muted"><?php echo $detail_email; ?></td>
                                                                                </tr>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                    <div id="edit-contact-info" class="row">
                                                                        <div class="col-lg-12 col-md-12">
                                                                            <form>
                                                                                <div class="input-group">
                                                                                    <input type="text" name="detail_phone" maxlength="12" value="<?php echo $detail_phone; ?>" class="form-control" placeholder="Mobile number">
                                                                                </div>
                                                                                <div class="input-group">
                                                                                    <input type="text" name="detail_email"  value="<?php echo $detail_email; ?>" class="form-control" placeholder="Email address">
                                                                                </div>
                                                                                <div class="text-center m-t-20">
                                                                                    <a href="javascript:;" id="contact-save" class="btn btn-primary waves-effect waves-light m-r-20">Save</a>
                                                                                    <a href="javascript:;" id="contact-cancel" class="btn btn-danger waves-effect waves-light">Cancel</a>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- About tab end -->
                                            </div>
                                            <!-- Row end -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
    <!-- light-box js -->
    <script type="text/javascript" src="<?= base_url(); ?>/vendor/bower_components/ekko-lightbox/dist/ekko-lightbox.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>/vendor/bower_components/lightbox2/dist/js/lightbox.js"></script>
    <!-- Bootstrap date-time-picker js -->
    <script type="text/javascript" src="<?= base_url(); ?>/vendor/assets/pages/advance-elements/moment-with-locales.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>/vendor/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>/vendor/assets/pages/advance-elements/bootstrap-datetimepicker.min.js"></script>
    <!-- Date-range picker js -->
    <script type="text/javascript" src="<?= base_url(); ?>/vendor/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- Date-dropper js -->
    <script type="text/javascript" src="<?= base_url(); ?>/vendor/bower_components/datedropper/datedropper.min.js"></script>
    <!-- i18next.min.js -->
    <script type="text/javascript" src="<?= base_url(); ?>/vendor/bower_components/i18next/i18next.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>/vendor/bower_components/i18next-xhr-backend/i18nextXHRBackend.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>/vendor/bower_components/i18next-browser-languagedetector/i18nextBrowserLanguageDetector.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>/vendor/bower_components/jquery-i18next/jquery-i18next.min.js"></script>
    <!-- Custom js -->
    <script type="text/javascript" src="<?= base_url(); ?>/vendor/assets/pages/social-timeline/social.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>/vendor/assets/js/script.js"></script>
    <!-- sweet alert js -->
    <script type="text/javascript" src="<?= base_url(); ?>/vendor/bower_components/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>/vendor/assets/js/modal.js"></script>
    <!-- sweet alert modal.js intialize js -->
    <!-- modalEffects js nifty modal window effects -->
    <script type="text/javascript" src="<?= base_url(); ?>/vendor/assets/js/modalEffects.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>/vendor/assets/js/classie.js"></script>



 <?php if ($this->session->flashdata('message') == "Update Profile Successfully") { ?>
     <script type="text/javascript">
       swal({
            title: "Updated",
            text: '<?= $this->session->flashdata('message')?>',
            timer: 4000,
            showConfirmButton: true,
            allowOutsideClick: true,
            type: 'success'
        });
    </script>
<?php } ?>


<script type="text/javascript">
    $('body').on('click', '.deleteimage-btn', function(event){
         event.preventDefault();
    var url = $(this).attr('href');
    swal({
        title: "Are you sure?",
        text: "Profile picture will be delete",
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
                  swal("Deleted!", "Profile picture successfully delete", "success");

             }
          });
        } 
      });

    })
</script>