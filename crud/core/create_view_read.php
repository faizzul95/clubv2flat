<?php 

$string = "<title>CMS | ".ucfirst($table_name)." View</title>
   
                    <!-- Page header start -->
                    <div class=\"page-header\">
                        <div class=\"page-header-title\">
                            <h4>View ".ucfirst($table_name)."</h4>
                        </div>
                        <div class=\"page-header-breadcrumb\">
                            <ul class=\"breadcrumb-title\">
                                <li class=\"breadcrumb-item\">
                                    <a href=\"index.html\">
                                        <i class=\"icofont icofont-home\"></i>
                                    </a>
                                </li>
                                <li class=\"breadcrumb-item\"><a href=\"#!\">".ucfirst($table_name)."</a>
                                </li>
                                <li class=\"breadcrumb-item\"><a href=\"#!\">View ".ucfirst($table_name)."</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Page header end -->
                    <!-- Page body start -->
                    <div class=\"page-body\">
                        <div class=\"row\">
                            <div class=\"col-sm-12\">
                                <!-- Basic Form Inputs card start -->
                                <div class=\"card\">
                                    <div class=\"card-block\">";
                                    foreach ($non_pk as $row) {
                                        $string .= "\n    
                                            <div class=\"form-group row\">
                                                <label class=\"col-sm-2 col-form-label\">".label($row["column_name"])."</label>
                                                <div class=\"col-sm-10\">
                                                    <input type=\"text\" class=\"form-control\" placeholder=\"Disabled text\" value=\"<?php echo $".$row["column_name"]."; ?>\" disabled>
                                                </div>
                                            </div>";
                                    }

                                    $string .= "\n\t  <a href=\"<?php echo site_url('".$c_url."') ?>\" class=\"btn btn-info btn-square pull-left\"><i class=\"icofont icofont-arrow-left\"></i> Back</a>";

$string .= "\n\t

                                    </div>
                                </div>
                                <!-- Basic Form Inputs card end -->
                            </div>
                        </div>
                    </div>

  <!-- Required Jquery -->
    <script type=\"text/javascript\" src=\"<?= base_url(); ?>/vendor/bower_components/jquery/dist/jquery.min.js\"></script>
    <script type=\"text/javascript\" src=\"<?= base_url(); ?>/vendor/bower_components/jquery-ui/jquery-ui.min.js\"></script>
    <script type=\"text/javascript\" src=\"<?= base_url(); ?>/vendor/bower_components/tether/dist/js/tether.min.js\"></script>
    <script type=\"text/javascript\" src=\"<?= base_url(); ?>/vendor/bower_components/bootstrap/dist/js/bootstrap.min.js\"></script>
    <!-- jquery slimscroll js -->
    <script type=\"text/javascript\" src=\"<?= base_url(); ?>/vendor/bower_components/jquery-slimscroll/jquery.slimscroll.js\"></script>
    <!-- modernizr js -->
    <script type=\"text/javascript\" src=\"<?= base_url(); ?>/vendor/bower_components/modernizr/modernizr.js\"></script>
    <script type=\"text/javascript\" src=\"<?= base_url(); ?>/vendor/bower_components/modernizr/feature-detects/css-scrollbars.js\"></script>
    <!-- classie js -->
    <script type=\"text/javascript\" src=\"<?= base_url(); ?>/vendor/bower_components/classie/classie.js\"></script>
    <!-- i18next.min.js -->
    <script type=\"text/javascript\" src=\"<?= base_url(); ?>/vendor/bower_components/i18next/i18next.min.js\"></script>
    <script type=\"text/javascript\" src=\"<?= base_url(); ?>/vendor/bower_components/i18next-xhr-backend/i18nextXHRBackend.min.js\"></script>
    <script type=\"text/javascriptv\" src=\"<?= base_url(); ?>/vendor/bower_components/i18next-browser-languagedetector/i18nextBrowserLanguageDetector.min.js\"></script>
    <script type=\"text/javascript\" src=\"<?= base_url(); ?>/vendor/bower_components/jquery-i18next/jquery-i18next.min.js\"></script>
    <!-- Custom js -->
    <script type=\"text/javascript\" src=\"<?= base_url(); ?>/vendor/assets/js/script.js\"></script>";


$hasil_view_read = createFile($string, $target."views/" . $c_url . "/" . $v_read_file);

?>











    









