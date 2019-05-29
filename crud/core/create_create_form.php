<?php 

$string = "<title>CMS | Add New ".ucfirst($table_name)."</title>
           
<!-- Page header start -->
<div class=\"page-header\">
<div class=\"page-header-title\">
    <h4>Add New ".ucfirst($table_name)."</h4>
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
        <li class=\"breadcrumb-item\"><a href=\"#!\">Add New".ucfirst($table_name)."</a>
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
            <div class=\"card-block\">
            <form action=\"<?php echo \$action; ?>\" method=\"post\">";

                foreach ($non_pk as $row) {
                    if ($row["data_type"] == 'text')
                    {
                    $string .= "\n\t\t\t\t\t\t\t\t\t\t\t     <div class=\"form-group\">
                            <label for=\"".$row["column_name"]."\">".label($row["column_name"])." <?php echo form_error('".$row["column_name"]."') ?></label>
                            <textarea  <?php if (form_error('".$row["column_name"]."')) { echo 'class=\"form-control form-control-danger\"'; } else { echo 'class=\"form-control\"'; }  ?> rows=\"5\" name=\"".$row["column_name"]."\" id=\"".$row["column_name"]."\" placeholder=\"".label($row["column_name"])."\"><?php echo $".$row["column_name"]."; ?></textarea>
                        </div>";
                    }else if ($row["data_type"] == 'date')
                    {
                    $string .= "\n\t\t\t\t\t\t\t\t\t\t\t      <div class=\"form-group\">
                            <label for=\"".$row["data_type"]."\">".label($row["column_name"])." <?php echo form_error('".$row["column_name"]."') ?></label>
                            <input type=\"date\"  <?php if (form_error('".$row["column_name"]."')) { echo 'class=\"form-control form-control-danger\"'; } else { echo 'class=\"form-control\"'; }  ?> name=\"".$row["column_name"]."\" id=\"".$row["column_name"]."\" placeholder=\"".label($row["column_name"])."\" value=\"<?php echo $".$row["column_name"]."; ?>\" />
                            </div>";
                    }else if ($row["data_type"] == 'time')
                    {
                    $string .= "\n\t\t\t\t\t\t\t\t\t\t\t      <div class=\"form-group\">
                            <label for=\"".$row["data_type"]."\">".label($row["column_name"])." <?php echo form_error('".$row["column_name"]."') ?></label>
                            <input type=\"time\"  <?php if (form_error('".$row["column_name"]."')) { echo 'class=\"form-control form-control-danger\"'; } else { echo 'class=\"form-control\"'; }  ?> name=\"".$row["column_name"]."\" id=\"".$row["column_name"]."\" placeholder=\"".label($row["column_name"])."\" value=\"<?php echo $".$row["column_name"]."; ?>\" />
                            </div>";
                    }else if ($row["data_type"] == 'int')
                    {
                    $string .= "\n\t\t\t\t\t\t\t\t\t\t\t      <div class=\"form-group\">
                            <label for=\"".$row["data_type"]."\">".label($row["column_name"])." <?php echo form_error('".$row["column_name"]."') ?></label>
                            <input type=\"number\"  <?php if (form_error('".$row["column_name"]."')) { echo 'class=\"form-control form-control-danger\"'; } else { echo 'class=\"form-control\"'; }  ?> name=\"".$row["column_name"]."\" id=\"".$row["column_name"]."\" min=\"0\" placeholder=\"".label($row["column_name"])."\" value=\"<?php echo $".$row["column_name"]."; ?>\" />
                            </div>";
                    }else if ($row["data_type"] == 'enum')
                    {
                    $string .= "\n\t\t\t\t\t\t\t\t\t\t\t    <div class=\"form-group\">
                            <label for=\"".$row["data_type"]."\">".label($row["column_name"])." <?php echo form_error('".$row["column_name"]."') ?></label>
                           
                            <?php 
                                \$id = 'id=\"".$row["column_name"]."\" class=\"form-control\"';
                                echo form_dropdown(\"".$row["column_name"]."\", \$this->db->enum_select(\"".$table_name."\",\"".$row["column_name"]."\"),'',\$id); 
                            ?>

                            </div>";
                    }else
                    {
                    $string .= "\n\t\t\t\t\t\t\t\t\t\t\t      <div class=\"form-group\">
                            <label for=\"".$row["data_type"]."\">".label($row["column_name"])." <?php echo form_error('".$row["column_name"]."') ?></label>
                            <input type=\"text\" <?php if (form_error('".$row["column_name"]."')) { echo 'class=\"form-control form-control-danger\"'; } else { echo 'class=\"form-control\"'; }  ?> name=\"".$row["column_name"]."\" id=\"".$row["column_name"]."\" autocomplete=\"off\" placeholder=\"".label($row["column_name"])."\" value=\"<?php echo $".$row["column_name"]."; ?>\" />
                        </div>";
                    }
                }
                $string .= "\n\t\t\t\t\t\t\t\t\t\t\t     <input type=\"hidden\" name=\"".$pk."\" value=\"<?php echo $".$pk."; ?>\" /> ";
                $string .= "\n\t\t\t\t\t\t\t\t\t\t\t     <button type=\"submit\" class=\"btn btn-info\"><?php echo \$button ?></button> ";
                $string .= "\n\t\t\t\t\t\t\t\t\t\t\t     <a href=\"<?php echo site_url('".$c_url."') ?>\" class=\"btn btn-danger\">Cancel</a>";
                $string .= "\n\t\t\t\t\t\t\t\t\t\t\t </form>


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




$hasil_create_form = createFile($string, $target."views/" . $c_url . "/" . $v_create_form_file);

?>











   
   