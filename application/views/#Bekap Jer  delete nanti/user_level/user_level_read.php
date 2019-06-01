<title>CMS | Access View</title>

<!-- Page header start -->
<div class="page-header">
    <div class="page-header-title">
        <h4>Access for : <?php echo $level['nama_level']; ?></h4>
    </div>
    <div class="page-header-breadcrumb">
        <ul class="breadcrumb-title">
            <li class="breadcrumb-item">
                <a href="index.html">
                    <i class="icofont icofont-home"></i>
                </a>
            </li>
            <li class="breadcrumb-item"><a href="#!">User_level</a>
            </li>
            <li class="breadcrumb-item"><a href="#!">View User_level</a>
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
                            <div class="col-sm-12">

                                <table class="table table-bordered table-striped" id="mytable">
                                        <thead>
                                            <tr>
                                                <th width="30px">No</th>
                                                <th>Module Name</th>
                                                <th width="100px">Give Access</th>
                                            </tr>
                                            <?php
                                            $no = 1;
                                            $level = $this->uri->segment(3);
                                            foreach ($menu as $m) {
                                                echo "<tr>
                                                <td>$no</td>
                                                <td>$m->menu_title</td>
                                                <td align='center'><input type='checkbox' ". check_access($level, $m->menu_id)." onClick='give_access($m->menu_id)'></td>
                                                </tr>";
                                                $no++;
                                            }
                                            ?>
                                        </thead>

                                    </table>
                            </div>
                        </div>
<a href="<?php echo site_url('user_level') ?>" class="btn btn-info btn-square pull-left"><i class="icofont icofont-arrow-left"></i> Back</a>


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
     <!-- sweet alert js -->
    <script type="text/javascript" src="<?= base_url(); ?>/vendor/bower_components/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>/vendor/assets/js/modal.js"></script>
        <!-- sweet alert modal.js intialize js -->
    <!-- Custom js -->
    <script type="text/javascript" src="<?= base_url(); ?>/vendor/assets/js/script.js"></script>


<script type="text/javascript">
    function give_access(menu_id){
        //alert(menu_id);
        var menu_id = menu_id;
        var level = '<?php echo $this->uri->segment(3); ?>';
        //alert(level);
        $.ajax({
            url:"<?php echo base_url()?>user_level/give_access_ajax",
            data:"menu_id=" + menu_id + "&level="+ level ,
            success: function(html)
            { 
               setTimeout(function () {
                swal({
                    title: 'Update Success',
                    timer: 1000,
                    showConfirmButton: false,
                    allowOutsideClick: true,
                    type: 'success'
                });
                }, 250);
            }
        });
    }    
</script>