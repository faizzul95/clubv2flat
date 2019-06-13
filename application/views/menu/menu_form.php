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
                          <span class="mytooltip tooltip-effect-5">
                                <i class="icofont icofont-question-circle" style="color: #6da5ff" data-toggle="modal" data-target="#exampleModal" title="Click to see example of icon"></i>
                                    <span class="tooltip-content clearfix">
                                        <span class="tooltip-text">Click to preview example of icon class
                                    </span>
                                </span>
                            </span>

                        <input type="text" class="form-control" name="menu_icon" id="menu_icon" placeholder="Menu Icon" value="<?php echo $menu_icon; ?>" />
                    </div>
                    <div class="form-group">
                        <label for="int">Is Main Menu <?php echo form_error('is_main_menu') ?></label>
                        <select name="is_main_menu" class="form-control" <?php if (form_error('is_main_menu')) { echo 'class="form-control form-control-danger"'; } else { echo 'class="form-control"'; }  ?>>
                                <option value="0">MAIN MENU</option>
                                <?php
                                $menuselect = $this->db->get_where('menu', array('is_main_menu' => 0))->result();
                                foreach ($menuselect as $m){
                                    echo "<option value='$m->menu_id' ";
                                    echo $m->menu_id==$is_main_menu?'selected':'';
                                    echo ">".  strtoupper($m->menu_title)."</option>";
                                }
                                ?>
                            </select>
                    </div>
                    <div class="form-group">
                        <label for="enum">Active Status<?php echo form_error('is_active') ?></label>
                        <?php echo form_dropdown('is_active',array('y'=>'ACTIVE','n'=>'INACTIVE'),$is_active,array('class'=>'form-control'))?>
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


    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Icon Class Name</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <div class="page-body">
                <div class="row">
                    <div class="col-sm-12">
                        <!-- Abstarct icons card start -->
                        <div class="card">
                            <div class="card-header">
                                <h5>ABSTRACT [50 ICONS]</h5>
                                
                                
                            </div>
                            <div class="card-block">
                                <div class="data-table-main icon-list-demo">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-angry-monster"></i> icofont icofont-angry-monster
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-bathtub"></i>icofont icofont-bathtub
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-bow"></i>icofont icofont-bow
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brain-alt"></i>icofont icofont-brain-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-butterfly-alt"></i>icofont icofont-butterfly-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-castle"></i>icofont icofont-castle
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-circuit"></i>icofont icofont-circuit
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-dart"></i>icofont icofont-dart
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-dice-alt"></i>icofont icofont-dice-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-disability-race"></i>icofont icofont-disability-race
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-diving-goggle"></i>icofont icofont-diving-goggle
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-fire-alt"></i>icofont icofont-fire-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-flame-torch"></i>icofont icofont-flame-torch
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-flora-flower"></i>icofont icofont-flora-flower
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-flora"></i>icofont icofont-flora
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-gift-box"></i>icofont icofont-gift-box
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-halloween-pumpkin"></i>icofont icofont-halloween-pumpkin
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-hand-power"></i>icofont icofont-hand-power
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-hand-thunder"></i>icofont icofont-hand-thunder
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-king-crown"></i>icofont icofont-king-crown
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-king-monster"></i>icofont icofont-king-monster
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-love"></i>icofont icofont-love
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-magician-hat"></i>icofont icofont-magician-hat
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-native-american"></i>icofont icofont-native-american
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-open-eye"></i>icofont icofont-open-eye
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-owl-look"></i>icofont icofont-owl-look
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-phoenix"></i>icofont icofont-phoenix
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-queen-crown"></i>icofont icofont-queen-crown
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-robot-face"></i>icofont icofont-robot-face
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-sand-clock"></i>icofont icofont-sand-clock
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-shield-alt"></i>icofont icofont-shield-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-ship-wheel"></i>icofont icofont-ship-wheel
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-skull-danger"></i>icofont icofont-skull-danger
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-skull-face"></i>icofont icofont-skull-face
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-snail"></i>icofont icofont-snail
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-snow-alt"></i>icofont icofont-snow-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-snow-flake"></i>icofont icofont-snow-flake
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-snowmobile"></i>icofont icofont-snowmobile
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-space-shuttle"></i>icofont icofont-space-shuttle
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-star-shape"></i>icofont icofont-star-shape
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-swirl"></i>icofont icofont-swirl
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-tattoo-wing"></i>icofont icofont-tattoo-wing
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-throne"></i>icofont icofont-throne
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-touch"></i>icofont icofont-touch
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-tree-alt"></i>icofont icofont-tree-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-triangle"></i>icofont icofont-triangle
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-unity-hand"></i>icofont icofont-unity-hand
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-weed"></i>icofont icofont-weed
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-woman-bird"></i>icofont icofont-woman-bird
                                        </div>
                                    </div>
                                    <!-- end of data table -->
                                </div>
                            </div>
                        </div>
                        <!-- Abstarct icons card end -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <!-- Animal [101 Icons] start -->
                        <div class="card">
                            <div class="card-header">
                                <h5>ANIMAL [101 ICONS]</h5>
                                
                                
                            </div>
                            <div class="card-block">
                                <div class="data-table-main icon-list-demo">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-animal-bat"></i> icofont icofont-animal-bat
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-animal-bear-tracks"></i>icofont icofont-animal-bear-tracks
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-animal-bear"></i>icofont icofont-animal-bear
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-animal-bird-alt"></i>icofont icofont-animal-bird-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-animal-bird"></i>icofont-animal-bird
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-animal-bone"></i>icofont icofont-animal-bone
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-animal-bull"></i>icofont icofont-animal-bull
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-animal-camel-alt"></i>icofont icofont-animal-camel-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-animal-camel-head"></i>icofont-animal-camel-head
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-animal-camel"></i>icofont-animal-camel
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-animal-cat-alt-1"></i>icofont icofont-animal-cat-alt-1
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-animal-cat-alt-2"></i>icofont icofont-animal-cat-alt-2
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-animal-cat-alt-3"></i>icofont icofont-animal-cat-alt-3
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-animal-cat-alt-4"></i>icofont icofont-animal-cat-alt-4
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-animal-cat-with-dog"></i>icofont icofont-animal-cat-with-dog
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-animal-cat"></i>icofont icofont-animal-cat
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-animal-cow-head"></i>icofont icofont-animal-cow-head
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-animal-cow"></i>icofont icofont-animal-cow
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-animal-crab "></i>icofont icofont-animal-crab
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-animal-crocodile"></i>icofont icofont-animal-crocodile
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-animal-deer-head"></i>icofont icofont-animal-deer-head
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-animal-dog-alt"></i>icofont icofont-animal-dog-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-animal-dog-barking"></i>icofont icofont-animal-dog-barking
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-animal-dog"></i>icofont icofont-animal-dog
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-animal-dolphin"></i>icofont icofont-animal-dolphin
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-animal-eagle-head"></i>icofont icofont-animal-eagle-head
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-animal-duck-tracks"></i>icofont icofont-animal-duck-tracks
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-animal-elephant-alt"></i>icofont icofont-animal-elephant-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-animal-duck-tracks"></i>icofont icofont-animal-duck-tracks
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-animal-eaten-fish"></i>icofont icofont-animal-eaten-fish
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-animal-elephant-head-alt"></i>icofont icofont-animal-elephant-head-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-animal-elephant-head"></i>icofont icofont-animal-elephant-head
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-animal-elephant"></i>icofont icofont-animal-elephant
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-animal-elk"></i>icofont icofont-animal-elk
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-animal-fish-alt-1"></i>icofont icofont-animal-fish-alt-1
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-animal-fish-alt-2"></i>icofont icofont-animal-fish-alt-2
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-animal-fish-alt-3"></i>icofont icofont-animal-fish-alt-3
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-animal-fish-alt-4"></i>icofont icofont-animal-fish-alt-4
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-animal-fish"></i>icofont icofont-animal-fish
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-animal-fox"></i>icofont icofont-animal-fox
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-animal-fox-alt "></i>icofont icofont-animal-fox-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-animal-frog"></i>icofont icofont-animal-frog
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-animal-frog-tracks"></i>icofont icofont-animal-frog-tracks
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-animal-froggy"></i>icofont icofont-animal-froggy
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-animal-giraffe"></i>icofont icofont-animal-giraffe
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-animal-giraffe-alt "></i>icofont icofont-animal-giraffe-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-animal-goat-head"></i>icofont icofont-animal-goat-head
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-animal-goat-head-alt-1"></i>icofont icofont-animal-goat-head-alt-1
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-animal-goat-head-alt-2"></i>icofont icofont-animal-goat-head-alt-2
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-animal-gorilla"></i>icofont icofont-animal-gorilla
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-animal-hen-tracks"></i>icofont icofont-animal-hen-tracks
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-animal-horse-head-alt-1 "></i>icofont icofont-animal-horse-head-alt-1
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-animal-horse-head-alt-2 "></i>icofont icofont-animal-horse-head-alt-2
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-animal-horse-tracks"></i>icofont icofont-animal-horse-tracks
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-animal-jellyfish"></i>icofont icofont-animal-jellyfish
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-animal-kangaroo"></i>icofont icofont-animal-kangaroo
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-animal-lemur"></i>icofont icofont-animal-lemur
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-animal-lion "></i>icofont icofont-animal-lion
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-animal-lion-alt "></i>icofont icofont-animal-lion-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-animal-lion-head-alt "></i>icofont icofont-animal-lion-head-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-animal-monkey "></i>icofont icofont-animal-monkey
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-animal-monkey-alt-1 "></i>icofont icofont-animal-monkey-alt-1
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-animal-monkey-alt-2 "></i>icofont icofont-animal-monkey-alt-2
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-animal-monkey-alt-3 "></i>icofont icofont-animal-monkey-alt-3
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-animal-octopus "></i>icofont icofont-animal-octopus
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-animal-octopus-alt  "></i>icofont icofont-animal-octopus-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-animal-owl  "></i>icofont icofont-animal-owl
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-animal-panda "></i>icofont icofont-animal-panda
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-animal-panda-alt"></i>icofont icofont-animal-panda-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-animal-panther"></i>icofont icofont-animal-panther
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-animal-parrot"></i>icofont icofont-animal-parrot
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-animal-parrot-lip"></i>icofont icofont-animal-parrot-lip
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-animal-paw  "></i>icofont icofont-animal-paw
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-animal-pelican  "></i>icofont icofont-animal-pelican
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-animal-penguin"></i>icofont icofont-animal-penguin
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-animal-pig "></i>icofont icofont-animal-pig
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-animal-pig-alt "></i>icofont icofont-animal-pig-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-animal-pigeon "></i>icofont icofont-animal-pigeon
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-animal-pigeon-alt "></i>icofont icofont-animal-pigeon-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-animal-pigeons "></i>icofont icofont-animal-pigeons
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-animal-rabbit-running "></i>icofont icofont-animal-rabbit-running
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-animal-rat-alt "></i>icofont icofont-animal-rat-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-animal-rhino  "></i>icofont icofont-animal-rhino
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-animal-rhino-head  "></i>icofont icofont-animal-rhino-head
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-animal-rooster  "></i>icofont icofont-animal-rooster
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-animal-seahorse "></i>icofont icofont-animal-seahorse
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-animal-seal "></i>icofont icofont-animal-seal
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-animal-shrimp "></i>icofont icofont-animal-shrimp
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-animal-snail "></i>icofont icofont-animal-snail
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-animal-snail-alt-1 "></i>icofont icofont-animal-snail-alt-1
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-animal-snail-alt-2 "></i>icofont icofont-animal-snail-alt-2
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-animal-snake  "></i>icofont icofont-animal-snake
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-animal-squid "></i>icofont icofont-animal-squid
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-animal-squirrel "></i>icofont icofont-animal-squirrel
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-animal-tiger "></i>icofont icofont-animal-tiger
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-animal-tiger-alt "></i>icofont icofont-animal-tiger-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-animal-turtle"></i>icofont icofont-animal-turtle
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-animal-whale "></i>icofont icofont-animal-whale
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-animal-woodpecker  "></i>icofont icofont-animal-woodpecker
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-animal-zebra "></i>icofont icofont-animal-zebra
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Animal [101 Icons] end -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <!-- Brand [210 Icons] Start -->
                        <div class="card">
                            <div class="card-header">
                                <h5>Brand [210 ICONS]</h5>
                                
                                
                            </div>
                            <div class="card-block">
                                <div class="data-table-main icon-list-demo">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-acer"></i>icofont icofont-brand-acer
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-adidas"></i>icofont icofont-brand-adidas
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-adobe"></i>icofont icofont-brand-adobe
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-air-new-zealand "></i>icofont icofont-brand-air-new-zealand
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-airbnb "></i>icofont icofont-brand-airbnb
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-aircell "></i>icofont icofont-brand-aircell
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-airtel "></i>icofont icofont-brand-airtel
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-alcatel "></i>icofont icofont-brand-alcatel
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-alibaba "></i>icofont icofont-brand-alibaba
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-aliexpress"></i>icofont icofont-brand-aliexpress
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-alipay  "></i>icofont icofont-brand-alipay
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-amazon"></i>icofont icofont-brand-amazon
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-amd "></i>icofont icofont-brand-amd
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-american-airlines"></i>icofont icofont-brand-american-airlines
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-android"></i>icofont icofont-brand-android
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-android-robot"></i>icofont icofont-brand-android-robot
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-aol"></i>icofont icofont-brand-aol
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-apple"></i>icofont icofont-brand-apple
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-appstore "></i>icofont icofont-brand-appstore
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-asus "></i>icofont icofont-brand-asus
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-ati"></i>icofont icofont-brand-ati
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-att"></i>icofont icofont-brand-att
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-audi "></i>icofont icofont-brand-audi
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-axiata"></i>icofont icofont-brand-axiata
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-bada"></i>icofont icofont-brand-bada
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-bbc"></i>icofont icofont-brand-bbc
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-bing "></i>icofont icofont-brand-bing
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-blackberry"></i>icofont icofont-brand-blackberry
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-bmw "></i>icofont icofont-brand-bmw
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-box"></i>icofont icofont-brand-box
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-burger-king"></i>icofont icofont-brand-burger-king
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-business-insider"></i>icofont icofont-brand-business-insider
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-buzzfeed"></i>icofont iicofont-brand-buzzfeed
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-cannon "></i>icofont icofont-brand-cannon
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-casio"></i>icofont icofont-brand-casio
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-china-mobile"></i>icofont icofont-brand-china-mobile
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-china-telecom"></i>icofont icofont-brand-china-telecom
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-china-unicom "></i>icofont icofont-brand-china-unicom
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-ati"></i>icofont icofont-brand-ati
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-cisco "></i>icofont icofont-brand-cisco
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-citibank "></i>icofont icofont-brand-citibank
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-cnet "></i>icofont icofont-brand-cnet
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-cnn"></i>icofont icofont-brand-cnn
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-cocal-cola"></i>icofont icofont-brand-cocal-cola
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-compaq"></i>icofont icofont-brand-compaq
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-copy"></i>icofont icofont-brand-copy
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-debian "></i>icofont icofont-brand-debian
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-delicious"></i>icofont icofont-brand-delicious
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-dell"></i>icofont icofont-brand-dell
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-designbump"></i>icofont icofont-brand-designbump
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-designfloat"></i>icofont icofont-brand-designfloat
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-disney"></i>icofont icofont-brand-disney
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-dodge"></i>icofont icofont-brand-dodge
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-designbump"></i>icofont icofont-brand-dove
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-ebay"></i>icofont icofont-brand-ebay
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-eleven"></i>icofont icofont-brand-eleven
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-emirates"></i>icofont icofont-brand-emirates
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-espn"></i>icofont icofont-brand-espn
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-etihad-airways"></i>icofont icofont-brand-etihad-airways
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-etisalat"></i>icofont icofont-brand-etisalat
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-etsy"></i>icofont icofont-brand-etsy
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-facebook "></i>icofont icofont-brand-facebook
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-fastrack "></i>icofont icofont-brand-fastrack
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-fedex"></i>icofont icofont-brand-fedex
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-ferrari"></i>icofont icofont-brand-ferrari
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-fitbit"></i>icofont icofont-brand-fitbit
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-flikr"></i>icofont icofont-brand-flikr
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-forbes "></i>icofont icofont-brand-forbes
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-foursquare "></i>icofont icofont-brand-foursquare
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-fox"></i>icofont icofont-brand-fox
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-foxconn"></i>icofont icofont-brand-foxconn
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-fujitsu "></i>icofont icofont-brand-fujitsu
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-general-electric"></i>icofont icofont-brand-general-electric
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-gillette "></i>icofont icofont-brand-gillette
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-gizmodo"></i>icofont icofont-brand-gizmodo
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-gnome"></i>icofont icofont-brand-gnome
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-google"></i>icofont icofont-brand-google
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-gopro"></i>icofont icofont-brand-gopro
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-gucci "></i>icofont icofont-brand-gucci
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-hallmark"></i>icofont icofont-brand-hallmark
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-hi5"></i>icofont icofont-brand-hi5
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-honda"></i>icofont icofont-brand-honda
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-hp "></i>icofont icofont-brand-hp
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-hsbc"></i>icofont icofont-brand-hsbc
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-htc"></i>icofont icofont-brand-htc
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-huawei"></i>icofont icofont-brand-huawei
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-hulu"></i>icofont icofont-brand-hulu
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-hyundai"></i>icofont icofont-brand-hyundai
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-ibm"></i>icofont icofont-brand-ibm
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-icofont"></i>icofont icofont-brand-icofont
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-icq"></i>icofont icofont-brand-icq
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-ikea"></i>icofont icofont-brand-ikea
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-imdb"></i>icofont icofont-brand-imdb
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-indiegogo"></i>icofont icofont-brand-indiegogo
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-intel"></i>icofont icofont-brand-intel
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-ipair"></i>icofont icofont-brand-ipair
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-jaguar"></i>icofont icofont-brand-jaguar
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-java"></i>icofont icofont-brand-java
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-joomla"></i>icofont icofont-brand-joomla
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-joomshaper"></i>icofont icofont-brand-joomshaper
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-kickstarter"></i>icofont icofont-brand-kickstarter
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-kik"></i>icofont icofont-brand-kik
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-lastfm"></i>icofont icofont-brand-lastfm
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-lego"></i>icofont icofont-brand-lego
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-lenovo"></i>icofont icofont-brand-lenovo
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-levis"></i>icofont icofont-brand-levis
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-lexus"></i>icofont icofont-brand-lexus
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-lg"></i>icofont icofont-brand-lg
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-life-hacker"></i>icofont icofont-brand-life-hacker
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-line-messenger"></i>icofont icofont-brand-line-messenger
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-linkedin"></i>icofont icofont-brand-linkedin
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-linux "></i>icofont icofont-brand-linux
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-linux-mint"></i>icofont icofont-brand-linux-mint
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-lionix"></i>icofont icofont-brand-lionix
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-live-messenger"></i>icofont icofont-brand-live-messenger
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-loreal"></i>icofont icofont-brand-loreal
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-louis-vuitton"></i>icofont icofont-brand-louis-vuitton
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-mac-os"></i>icofont icofont-brand-mac-os
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-marvel-app"></i>icofont icofont-brand-marvel-app
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-mashable"></i>icofont icofont-brand-mashable
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-mazda"></i>icofont icofont-brand-mazda
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-mcdonals"></i>icofont icofont-brand-mcdonals
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-mercedes"></i>icofont icofont-brand-mercedes
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-marvel-app"></i>icofont icofont-brand-micromax
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-microsoft"></i>icofont icofont-brand-microsoft
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-mobileme"></i>icofont icofont-brand-mobileme
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-mobily"></i>icofont icofont-brand-mobily
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-motorola"></i>icofont icofont-brand-motorola
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-msi"></i>icofont icofont-brand-msi
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-mts"></i>icofont icofont-brand-mts
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-myspace "></i>icofont icofont-brand-myspace
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-mytv"></i>icofont icofont-brand-mytv
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-nasa"></i>icofont icofont-brand-nasa
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-natgeo"></i>icofont icofont-brand-natgeo
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-nbc"></i>icofont icofont-brand-nbc
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-nescafe"></i>icofont icofont-brand-nescafe
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-nestle"></i>icofont icofont-brand-nestle
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-netflix"></i>icofont icofont-brand-netflix
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-nexus"></i>icofont icofont-brand-nexus
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-nike"></i>icofont icofont-brand-nike
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-nokia"></i>icofont icofont-brand-nokia
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-nvidia"></i>icofont icofont-brand-nvidia
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-omega"></i>icofont icofont-brand-omega
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-opensuse"></i>icofont icofont-brand-opensuse
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-oracle"></i>icofont icofont-brand-oracle
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-panasonic"></i>icofont icofont-brand-panasonic
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-paypal"></i>icofont icofont-brand-paypal
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-pepsi "></i>icofont icofont-brand-pepsi
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-philips"></i>icofont icofont-brand-philips
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-pizza-hut"></i>icofont icofont-brand-pizza-hut
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-playstation"></i>icofont icofont-brand-playstation
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-puma"></i>icofont icofont-brand-puma
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-qatar-air"></i>icofont icofont-brand-qatar-air
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-qvc"></i>icofont icofont-brand-qvc
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-readernaut"></i>icofont icofont-brand-readernaut
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-redbull"></i>icofont icofont-brand-redbull
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-reebok"></i>icofont icofont-brand-reebok
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-reuters"></i>icofont icofont-brand-reuters
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-samsung"></i>icofont icofont-brand-samsung
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-sap "></i>icofont icofont-brand-sap
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-saudia-airlines"></i>icofont icofont-brand-saudia-airlines
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-scribd"></i>icofont icofont-brand-scribd
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-shell "></i>icofont icofont-brand-shell
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-siemens "></i>icofont icofont-brand-siemens
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-sk-telecom "></i>icofont icofont-brand-sk-telecom
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-slideshare"></i>icofont icofont-brand-slideshare
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-smashing-magazine"></i>icofont icofont-brand-smashing-magazine
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-snapchat"></i>icofont icofont-brand-snapchat
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-sony "></i>icofont icofont-brand-sony
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-sony-ericsson"></i>icofont icofont-brand-sony-ericsson
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-soundcloud"></i>icofont icofont-brand-soundcloud
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-sprint"></i>icofont icofont-brand-sprint
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-squidoo"></i>icofont icofont-brand-squidoo
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-starbucks"></i>icofont icofont-brand-starbucks
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-stc"></i>icofont icofont-brand-stc
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-steam"></i>icofont icofont-brand-steam
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-suzuki"></i>icofont icofont-brand-suzuki
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-symbian"></i>icofont icofont-brand-symbian
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-t-mobile"></i>icofont icofont-brand-t-mobile
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-tango "></i>icofont icofont-brand-tango
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-target"></i>icofont icofont-brand-target
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-tata-indicom"></i>icofont icofont-brand-tata-indicom
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-techcrunch"></i>icofont icofont-brand-techcrunch
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-telenor"></i>icofont icofont-brand-telenor
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-teliasonera"></i>icofont icofont-brand-teliasonera
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-tesla"></i>icofont icofont-brand-tesla
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-the-verge"></i>icofont icofont-brand-the-verge
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-thenextweb"></i>icofont icofont-brand-thenextweb
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-toshiba"></i>icofont icofont-brand-toshiba
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-toyota"></i>icofont icofont-brand-toyota
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-tribenet"></i>icofont icofont-brand-tribenet
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-ubuntu"></i>icofont icofont-brand-ubuntu
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-unilever"></i>icofont icofont-brand-unilever
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-vaio"></i>icofont icofont-brand-vaio
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-verizon"></i>icofont icofont-brand-verizon
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-viber"></i>icofont icofont-brand-viber
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-vodafone"></i>icofont icofont-brand-vodafone
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-volkswagen"></i>icofont icofont-brand-volkswagen
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-walmart"></i>icofont icofont-brand-walmart
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-warnerbros"></i>icofont icofont-brand-warnerbros
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-whatsapp"></i>icofont icofont-brand-whatsapp
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-wikipedia"></i>icofont icofont-brand-wikipedia
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-windows"></i>icofont icofont-brand-windows
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-wire"></i>icofont icofont-brand-wire
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-wordpress"></i>icofont icofont-brand-wordpress
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-xiaomi"></i>icofont icofont-brand-xiaomi
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-yahoobuzz"></i>icofont icofont-brand-yahoobuzz
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-yamaha"></i>icofont icofont-brand-yamaha
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-youtube"></i>icofont icofont-brand-youtube
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-zain"></i>icofont icofont-brand-zain
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-social-envato"></i>icofont icofont-social-envato
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Brand [210 Icons] end -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <!-- Business [33 Icons] Start -->
                        <div class="card">
                            <div class="card-header">
                                <h5>BUSINESS [33 ICONS]</h5>
                                
                                
                            </div>
                            <div class="card-block">
                                <div class="data-table-main icon-list-demo">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-bank-alt"></i>icofont icofont-bank-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-barcode"></i>icofont icofont-barcode
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-basket"></i>icofont icofont-basket
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-bill-alt"></i>icofont icofont-bill-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-billboard"></i>icofont icofont-billboard
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-briefcase-alt-1"></i>icofont icofont-briefcase-alt-1
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-briefcase-alt-2"></i>icofont icofont-briefcase-alt-2
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-building-alt"></i>icofont icofont-building-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-businessman"></i>icofont icofont-businessman
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-businesswoman"></i>icofont icofont-businesswoman
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cart-alt"></i>icofont icofont-cart-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-chair"></i>icofont icofont-chair
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-clip"></i>icofont icofont-clip
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-coins"></i>icofont icofont-coins
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-company"></i>icofont icofont-company
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-contact-add"></i>icofont icofont-contact-add
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-deal"></i>icofont icofont-deal
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-bank-alt"></i>icofont icofont-bank-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-files"></i>icofont icofont-files
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-growth"></i>icofont icofont-growth
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-id-card"></i>icofont icofont-id-card
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-idea"></i>icofont icofont-idea
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-list"></i>icofont icofont-list
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-meeting-add"></i>icofont icofont-meeting-add
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-money-bag"></i>icofont icofont-money-bag
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-people"></i>icofont icofont-people
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-pie-chart "></i>icofont icofont-pie-chart
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-presentation-alt "></i>icofont icofont-presentation-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-stamp"></i>icofont icofont-stamp
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-stock-mobile"></i>icofont icofont-stock-mobile
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-support"></i>icofont icofont-support
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-tasks-alt"></i>icofont icofont-tasks-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-wheel"></i>icofont icofont-wheel
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Business [33 Icons] end -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <!-- Chart [12 Icons] Start -->
                        <div class="card">
                            <div class="card-header">
                                <h5>CHART [12 ICONS]</h5>
                                
                                
                            </div>
                            <div class="card-block">
                                <div class="data-table-main icon-list-demo">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-chart-arrows-axis"></i>icofont icofont-chart-arrows-axis
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-chart-bar-graph"></i>icofont icofont-chart-bar-graph
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-chart-flow"></i>icofont icofont-chart-flow
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-chart-flow-alt-1"></i>icofont icofont-chart-flow-alt-1
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-chart-flow-alt-2"></i>icofont icofont-chart-flow-alt-2
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-chart-histogram"></i>icofont icofont-chart-histogram
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-chart-histogram-alt"></i>icofont icofont-chart-histogram-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-chart-line "></i>icofont icofont-chart-line
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-chart-line-alt"></i>icofont icofont-chart-line-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-chart-pie"></i>icofont icofont-chart-pie
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-chart-pie-alt"></i>icofont icofont-chart-pie-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-chart-radar-graph"></i>icofont icofont-chart-radar-graph
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Chart [12 Icons] end -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <!-- Construction [58 Icons] Start -->
                        <div class="card">
                            <div class="card-header">
                                <h5>CONSTRUCTION [58 ICONS]</h5>
                                
                                
                            </div>
                            <div class="card-block">
                                <div class="data-table-main icon-list-demo">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-architecture"></i>icofont icofont-architecture
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-architecture-alt"></i>icofont icofont-architecture-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-barricade"></i>icofont icofont-barricade
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-bricks"></i>icofont icofont-bricks
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-calculations "></i>icofont icofont-calculations
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cement-mix"></i>icofont icofont-cement-mix
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cement-mixer"></i>icofont icofont-cement-mixer
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-danger-zone"></i>icofont icofont-danger-zone
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-drill "></i>icofont icofont-drill
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-eco-energy"></i>icofont icofont-eco-energy
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-eco-environmen"></i>icofont icofont-eco-environmen
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-energy-air"></i>icofont icofont-energy-air
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-energy-oil"></i>icofont icofont-energy-oil
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-energy-savings"></i>icofont icofont-energy-savings
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-energy-solar"></i>icofont icofont-energy-solar
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-energy-water"></i>icofont icofont-energy-water
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-engineer"></i>icofont icofont-engineer
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-fire-extinguisher-alt"></i>icofont icofont-fire-extinguisher-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-fix-tools "></i>icofont icofont-fix-tools
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-glue-oil "></i>icofont icofont-glue-oil
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-hammer-alt"></i>icofont icofont-hammer-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-help-robot"></i>icofont icofont-help-robot
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-industries"></i>icofont icofont-industries
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-industries-alt-1"></i>icofont icofont-industries-alt-1
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-industries-alt-2"></i>icofont icofont-industries-alt-2
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-industries-alt-3"></i>icofont icofont-industries-alt-3
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-industries-alt-4"></i>icofont icofont-industries-alt-4
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-industries-alt-5 "></i>icofont icofont-industries-alt-5
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-labour"></i>icofont icofont-labour
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-mining"></i>icofont icofont-mining
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-paint-brush"></i>icofont icofont-paint-brush
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-pollution"></i>icofont icofont-pollution
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-power-zone"></i>icofont icofont-power-zone
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-radio-active"></i>icofont icofont-radio-active
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-recycle-alt "></i>icofont icofont-recycle-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-recycling-man"></i>icofont icofont-recycling-man
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-safety-hat"></i>icofont icofont-safety-hat
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-safety-hat-light"></i>icofont icofont-safety-hat-light
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-saw"></i>icofont icofont-saw
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-screw-driver "></i>icofont icofont-screw-driver
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-settings-alt"></i>icofont icofont-settings-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-tools-alt-1 "></i>icofont icofont-tools-alt-1
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-tools-alt-2 "></i>icofont icofont-tools-alt-2
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-tools-bag"></i>icofont icofont-tools-bag
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-trowel"></i>icofont icofont-trowel
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-under-construction"></i>icofont icofont-under-construction
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-under-construction-alt "></i>icofont icofont-under-construction-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-vehicle-cement"></i>icofont icofont-vehicle-cement
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-vehicle-crane"></i>icofont icofont-vehicle-crane
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-vehicle-delivery-van "></i>icofont icofont-vehicle-delivery-van
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-vehicle-dozer"></i>icofont icofont-vehicle-dozer
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-vehicle-excavator "></i>icofont icofont-vehicle-excavator
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-vehicle-trucktor"></i>icofont icofont-vehicle-trucktor
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-vehicle-wrecking "></i>icofont icofont-vehicle-wrecking
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-worker "></i>icofont icofont-worker
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-worker-group"></i>icofont icofont-worker-group
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-wrench "></i>icofont icofont-wrench
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Construction [58 Icons] end -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <!-- Currency [100 Icons] Start -->
                        <div class="card">
                            <div class="card-header">
                                <h5>CURRENCY [100 ICONS]</h5>
                                
                                
                            </div>
                            <div class="card-block">
                                <div class="data-table-main icon-list-demo">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cur-afghani"></i>icofont icofont-cur-afghani
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cur-afghani-false"></i>icofont icofont-cur-afghani-false
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cur-afghani-minus"></i>icofont icofont-cur-afghani-minus
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cur-afghani-plus"></i>icofont icofont-cur-afghani-plus
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cur-afghani-true "></i>icofont icofont-cur-afghani-true
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cur-baht "></i>icofont icofont-cur-baht
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cur-baht-false"></i>icofont icofont-cur-baht-false
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cur-baht-minus"></i>icofont icofont-cur-baht-minus
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cur-baht-plus"></i>icofont icofont-cur-baht-plus
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cur-baht-true "></i>icofont icofont-cur-baht-true
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cur-bitcoin"></i>icofont icofont-cur-bitcoin
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cur-bitcoin-false"></i>icofont icofont-cur-bitcoin-false
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cur-bitcoin-minus"></i>icofont icofont-cur-bitcoin-minus
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cur-bitcoin-plus"></i>icofont icofont-cur-bitcoin-plus
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cur-bitcoin-true"></i>icofont icofont-cur-bitcoin-true
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cur-dollar"></i>icofont icofont-cur-dollar
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cur-dollar-flase"></i>icofont icofont-cur-dollar-flase
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cur-dollar-minus"></i>icofont icofont-cur-dollar-minus
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cur-dollar-plus"></i>icofont icofont-cur-dollar-plus
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cur-dollar-true"></i>icofont icofont-cur-dollar-true
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cur-dong"></i>icofont icofont-cur-dong
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cur-dong-false"></i>icofont icofont-cur-dong-false
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cur-dong-minus"></i>icofont icofont-cur-dong-minus
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cur-dong-plus "></i>icofont icofont-cur-dong-plus
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cur-dong-true"></i>icofont icofont-cur-dong-true
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cur-euro "></i>icofont icofont-cur-euro
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cur-euro-false"></i>icofont icofont-cur-euro-false
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cur-euro-minus "></i>icofont icofont-cur-euro-minus
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cur-euro-plus"></i>icofont icofont-cur-euro-plus
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cur-euro-true"></i>icofont icofont-cur-euro-true
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cur-frank"></i>icofont icofont-cur-frank
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cur-frank-false"></i>icofont icofont-cur-frank-false
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cur-frank-minus"></i>icofont icofont-cur-frank-minus
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cur-frank-plus"></i>icofont icofont-cur-frank-plus
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cur-frank-true"></i>icofont icofont-cur-frank-true
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cur-hryvnia"></i>icofont icofont-cur-hryvnia
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cur-hryvnia-false"></i>icofont icofont-cur-hryvnia-false
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cur-hryvnia-minus"></i>icofont icofont-cur-hryvnia-minus
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cur-hryvnia-plus"></i>icofont icofont-cur-hryvnia-plus
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cur-hryvnia-true"></i>icofont icofont-cur-hryvnia-true
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cur-lira"></i>icofont icofont-cur-lira
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cur-lira-false"></i>icofont icofont-cur-lira-false
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cur-lira-minus"></i>icofont icofont-cur-lira-minus
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cur-lira-plus"></i>icofont icofont-cur-lira-plus
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cur-lira-true"></i>icofont icofont-cur-lira-true
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cur-peseta"></i>icofont icofont-cur-peseta
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cur-peseta-false"></i>icofont icofont-cur-peseta-false
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cur-peseta-minus"></i>icofont icofont-cur-peseta-minus
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cur-peseta-plus"></i>icofont icofont-cur-peseta-plus
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cur-peseta-true"></i>icofont icofont-cur-peseta-true
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cur-peso"></i>icofont icofont-cur-peso
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cur-peso-false"></i>icofont icofont-cur-peso-false
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cur-peso-minus"></i>icofont icofont-cur-peso-minus
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cur-peso-plus"></i>icofont icofont-cur-peso-plus
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cur-peso-true"></i>icofont icofont-cur-peso-true
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cur-pound"></i>icofont icofont-cur-pound
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cur-pound-false"></i>icofont icofont-cur-pound-false
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cur-pound-minus"></i>icofont icofont-cur-pound-minus
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cur-pound-plus"></i>icofont icofont-cur-pound-plus
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cur-pound-true"></i>icofont icofont-cur-pound-true
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cur-renminbi"></i>icofont icofont-cur-renminbi
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cur-renminbi-false"></i>icofont icofont-cur-renminbi-false
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cur-renminbi-minus"></i>icofont icofont-cur-renminbi-minus
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cur-renminbi-plus"></i>icofont icofont-cur-renminbi-plus
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cur-renminbi-true"></i>icofont icofont-cur-renminbi-true
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cur-riyal "></i>icofont icofont-cur-riyal
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cur-riyal-false"></i>icofont icofont-cur-riyal-false
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cur-riyal-minus "></i>icofont icofont-cur-riyal-minus
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cur-riyal-plus"></i>icofont icofont-cur-riyal-plus
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cur-riyal-true"></i>icofont icofont-cur-riyal-true
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cur-rouble "></i>icofont icofont-cur-rouble
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cur-rouble-false"></i>icofont icofont-cur-rouble-false
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cur-rouble-minus"></i>icofont icofont-cur-rouble-minus
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cur-rouble-plus"></i>icofont icofont-cur-rouble-plus
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cur-rouble-true"></i>icofont icofont-cur-rouble-true
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cur-rupee"></i>icofont icofont-cur-rupee
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cur-rupee-false"></i>icofont icofont-cur-rupee-false
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cur-rupee-minus"></i>icofont icofont-cur-rupee-minus
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cur-rupee-true"></i>icofont icofont-cur-rupee-true
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cur-taka"></i>icofont icofont-cur-taka
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cur-taka-false"></i>icofont icofont-cur-taka-false
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cur-taka-minus"></i>icofont icofont-cur-taka-minus
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cur-taka-plus"></i>icofont icofont-cur-taka-plus
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cur-taka-true"></i>icofont icofont-cur-taka-true
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cur-turkish-lira"></i>icofont icofont-cur-turkish-lira
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cur-turkish-lira-false"></i>icofont icofont-cur-turkish-lira-false
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cur-turkish-lira-minus"></i>icofont icofont-cur-turkish-lira-minus
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cur-turkish-lira-plus"></i>icofont icofont-cur-turkish-lira-plus
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cur-turkish-lira-true"></i>icofont icofont-cur-turkish-lira-true
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cur-won"></i>icofont icofont-cur-won
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cur-won-false"></i>icofont icofont-cur-won-false
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cur-won-minus"></i>icofont icofont-cur-won-minus
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cur-won-plus"></i>icofont icofont-cur-won-plus
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cur-won-true"></i>icofont icofont-cur-won-true
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cur-yen"></i>icofont icofont-cur-yen
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cur-yen-false"></i>icofont icofont-cur-yen-false
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cur-yen-minus"></i>icofont icofont-cur-yen-minus
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cur-yen-plus"></i>icofont icofont-cur-yen-plus
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cur-yen-true"></i>icofont icofont-cur-yen-true
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Currency [100 Icons] end -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <!-- Device [35 Icons] Start -->
                        <div class="card">
                            <div class="card-header">
                                <h5>DEVICE [35 ICONS]</h5>
                                
                                
                            </div>
                            <div class="card-block">
                                <div class="data-table-main icon-list-demo">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-android-nexus"></i>icofont icofont-android-nexus
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-android-tablet"></i>icofont icofont-android-tablet
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-apple-watch"></i>icofont icofont-apple-watch
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-drwaing-tablet"></i>icofont icofont-drwaing-tablet
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-earphone"></i>icofont icofont-earphone
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-flash-drive"></i>icofont icofont-flash-drive
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-game-control "></i>icofont icofont-game-control
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-headphone-alt "></i>icofont icofont-headphone-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-htc-one"></i>icofont icofont-htc-one
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-imac"></i>icofont icofont-imac
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-ipad-touch"></i>icofont icofont-ipad-touch
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-iphone"></i>icofont icofont-iphone
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-ipod-nano "></i>icofont icofont-ipod-nano
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-ipod-touch"></i>icofont icofont-ipod-touch
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-keyboard-alt"></i>icofont icofont-keyboard-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-keyboard-wireless"></i>icofont icofont-keyboard-wireless
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-laptop-alt"></i>icofont icofont-laptop-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-macbook"></i>icofont icofont-macbook
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-magic-mouse"></i>icofont icofont-magic-mouse
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-microphone-alt"></i>icofont icofont-microphone-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-monitor"></i>icofont icofont-monitor
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-mouse"></i>icofont icofont-mouse
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-nintendo"></i>icofont icofont-nintendo
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-playstation"></i>icofont icofont-playstation
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-psvita"></i>icofont icofont-psvita
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-radio-mic"></i>icofont icofont-radio-mic
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-refrigerator "></i>icofont icofont-refrigerator
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-samsung-galaxy "></i>icofont icofont-samsung-galaxy
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-surface-tablet"></i>icofont icofont-surface-tablet
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-washing-machine"></i>icofont icofont-washing-machine
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-wifi-router"></i>icofont icofont-wifi-router
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-wii-u"></i>icofont icofont-wii-u
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-windows-lumia"></i>icofont icofont-windows-lumia
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-wireless-mouse"></i>icofont icofont-wireless-mouse
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-xbox-360"></i>icofont icofont-xbox-360
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Device [35 Icons] end -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <!-- Directional [116 Icons] Start -->
                        <div class="card">
                            <div class="card-header">
                                <h5>DIRECTIONAL [116 ICONS]</h5>
                                
                                
                            </div>
                            <div class="card-block">
                                <div class="data-table-main icon-list-demo">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-arrow-down"></i>icofont icofont-arrow-down
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-arrow-left"></i>icofont icofont-arrow-left
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-arrow-right"></i>icofont icofont-arrow-right
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-arrow-up "></i>icofont icofont-arrow-up
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-block-down"></i>icofont icofont-block-down
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-block-left"></i>icofont icofont-block-left
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-block-right"></i>icofont icofont-block-right
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-block-up"></i>icofont icofont-block-up
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-bubble-down"></i>icofont icofont-bubble-down
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-bubble-left"></i>icofont icofont-bubble-left
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-bubble-right"></i>icofont icofont-bubble-right
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-bubble-up"></i>icofont icofont-bubble-up
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-caret-down"></i>icofont icofont-caret-down
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-caret-left"></i>icofont icofont-caret-left
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-caret-right "></i>icofont icofont-caret-right
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-caret-up"></i>icofont icofont-caret-up
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-circled-down"></i>icofont icofont-circled-down
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-circled-left"></i>icofont icofont-circled-left
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-circled-right"></i>icofont icofont-circled-right
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-circled-up"></i>icofont icofont-circled-up
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-collapse"></i>icofont icofont-collapse
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cursor-drag"></i>icofont icofont-cursor-drag
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-curved-double-left"></i>icofont icofont-curved-double-left
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-curved-double-right"></i>icofont icofont-curved-double-right
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-curved-down"></i>icofont icofont-curved-down
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-curved-left"></i>icofont icofont-curved-left
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-curved-right"></i>icofont icofont-curved-right
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-curved-up"></i>icofont icofont-curved-up
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-dotted-down"></i>icofont icofont-dotted-down
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-dotted-left"></i>icofont icofont-dotted-left
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-dotted-right"></i>icofont icofont-dotted-right
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-dotted-up"></i>icofont icofont-dotted-up
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-double-left"></i>icofont icofont-double-left
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-double-right"></i>icofont icofont-double-right
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-drag"></i>icofont icofont-drag
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-drag1"></i>icofont icofont-drag1
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-drag3"></i>icofont icofont-drag3
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-expand-alt"></i>icofont icofont-expand-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-hand-down"></i>icofont icofont-hand-down
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-hand-drag"></i>icofont icofont-hand-drag
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-hand-drag1"></i>icofont icofont-hand-drag1
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-hand-drag2"></i>icofont icofont-hand-drag2
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-hand-drawn-alt-down"></i>icofont icofont-hand-drawn-alt-down
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-hand-drawn-alt-left"></i>icofont icofont-hand-drawn-alt-left
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-hand-drawn-alt-right"></i>icofont icofont-hand-drawn-alt-right
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-hand-drawn-alt-up"></i>icofont icofont-hand-drawn-alt-up
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-hand-drawn-down"></i>icofont icofont-hand-drawn-down
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-hand-drawn-left"></i>icofont icofont-hand-drawn-left
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-hand-drawn-right"></i>icofont icofont-hand-drawn-right
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-hand-drawn-up"></i>icofont icofont-hand-drawn-up
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-hand-left"></i>icofont icofont-hand-left
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-hand-right"></i>icofont icofont-hand-right
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-hand-up"></i>icofont icofont-hand-up
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-line-block-down"></i>icofont icofont-line-block-down
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-line-block-left"></i>icofont icofont-line-block-left
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-line-block-right"></i>icofont icofont-line-block-right
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-line-block-up"></i>icofont icofont-line-block-up
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-long-arrow-down"></i>icofont icofont-long-arrow-down
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-long-arrow-left"></i>icofont icofont-long-arrow-left
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-long-arrow-left"></i>icofont icofont-long-arrow-left
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-long-arrow-up"></i>icofont icofont-long-arrow-up
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-rounded-collapse "></i>icofont icofont-rounded-collapse
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-rounded-double-left"></i>icofont icofont-rounded-double-left
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-rounded-double-right"></i>icofont icofont-rounded-double-right
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-rounded-down"></i>icofont icofont-rounded-down
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-rounded-expand "></i>icofont icofont-rounded-expand
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-rounded-left"></i>icofont icofont-rounded-left
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-rounded-left-down"></i>icofont icofont-rounded-left-down
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-rounded-left-up"></i>icofont icofont-rounded-left-up
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-rounded-right"></i>icofont icofont-rounded-right
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-rounded-right-down"></i>icofont icofont-rounded-right-down
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-rounded-right-up"></i>icofont icofont-rounded-right-up
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-rounded-up"></i>icofont icofont-rounded-up
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-scroll-bubble-down"></i>icofont icofont-scroll-bubble-down
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-scroll-bubble-left"></i>icofont icofont-scroll-bubble-left
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-scroll-bubble-right "></i>icofont icofont-scroll-bubble-right
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-scroll-bubble-up "></i>icofont icofont-scroll-bubble-up
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-scroll-double-down"></i>icofont icofont-scroll-double-down
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-scroll-double-left"></i>icofont icofont-scroll-double-left
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-scroll-double-right"></i>icofont icofont-scroll-double-right
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-scroll-double-up"></i>icofont icofont-scroll-double-up
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-scroll-down"></i>icofont icofont-scroll-down
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-scroll-left"></i>icofont icofont-scroll-left
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-scroll-long-down"></i>icofont icofont-scroll-long-down
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-scroll-long-left"></i>icofont icofont-scroll-long-left
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-scroll-long-right"></i>icofont icofont-scroll-long-right
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-scroll-long-up"></i>icofont icofont-scroll-long-up
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-scroll-right"></i>icofont icofont-scroll-right
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-scroll-up"></i>icofont icofont-scroll-up
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-simple-down"></i>icofont icofont-simple-down
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-simple-left"></i>icofont icofont-simple-left
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-simple-left-down"></i>icofont icofont-simple-left-down
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-simple-left-up"></i>icofont icofont-simple-left-up
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-simple-right"></i>icofont icofont-simple-right
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-simple-right-down"></i>icofont icofont-simple-right-down
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-simple-right-up"></i>icofont icofont-simple-right-up
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-simple-up"></i>icofont icofont-simple-up
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-square-down"></i>icofont icofont-square-down
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-square-left"></i>icofont icofont-square-left
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-square-right"></i>icofont icofont-square-right
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-square-up"></i>icofont icofont-square-up
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-stylish-down"></i>icofont icofont-stylish-down
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-stylish-left"></i>icofont icofont-stylish-left
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-stylish-right"></i>icofont icofont-stylish-right
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-stylish-up"></i>icofont icofont-stylish-up
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-swoosh-down"></i>icofont icofont-swoosh-down
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-swoosh-left"></i>icofont icofont-swoosh-left
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-swoosh-right"></i>icofont icofont-swoosh-right
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-swoosh-up"></i>icofont icofont-swoosh-up
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-thin-double-left"></i>icofont icofont-thin-double-left
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-thin-double-right"></i>icofont icofont-thin-double-right
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-thin-down"></i>icofont icofont-thin-down
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-thin-left"></i>icofont icofont-thin-left
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-thin-right"></i>icofont icofont-thin-right
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-thin-up"></i>icofont icofont-thin-up
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Directional [116 Icons] end -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <!-- Education [34 Icons] Start -->
                        <div class="card">
                            <div class="card-header">
                                <h5>EDUCATION [34 ICONS]</h5>
                                
                            </div>
                            <div class="card-block">
                                <div class="data-table-main icon-list-demo">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-atom"></i>icofont icofont-atom
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-award"></i>icofont icofont-award
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-bell-alt"></i>icofont icofont-bell-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-book-alt"></i>icofont icofont-book-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brainstorming"></i>icofont icofont-brainstorming
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-certificate-alt-1"></i>icofont icofont-certificate-alt-1
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-certificate-alt-2"></i>icofont icofont-certificate-alt-2
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-dna-alt-2"></i>icofont icofont-dna-alt-2
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-education"></i>icofont icofont-education
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-electron"></i>icofont icofont-electron
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-fountain-pen"></i>icofont icofont-fountain-pen
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-globe-alt"></i>icofont icofont-globe-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-graduate-alt"></i>icofont icofont-graduate-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-group-students"></i>icofont icofont-group-students
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-hat"></i>icofont icofont-hat
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-hat-alt"></i>icofont icofont-hat-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-instrument"></i>icofont icofont-instrument
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-lamp-light"></i>icofont icofont-lamp-light
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-microscope-alt"></i>icofont icofont-microscope-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-paper"></i>icofont icofont-paper
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-pen-alt-4"></i>icofont icofont-pen-alt-4
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-pen-nib"></i>icofont icofont-pen-nib
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-pencil-alt-5"></i>icofont icofont-pencil-alt-5
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-quill-pen"></i>icofont icofont-quill-pen
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-read-book"></i>icofont icofont-read-book
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-read-book-alt"></i>icofont icofont-read-book-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-school-bag"></i>icofont icofont-school-bag
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-school-bus"></i>icofont icofont-school-bus
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-student"></i>icofont icofont-student
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-student-alt"></i>icofont icofont-student-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-teacher"></i>icofont icofont-teacher
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-test-bulb"></i>icofont icofont-test-bulb
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-test-tube-alt"></i>icofont icofont-test-tube-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-university"></i>icofont icofont-university
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Education [34 Icons] end -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <!-- Emoticon [20 Icons] Start -->
                        <div class="card">
                            <div class="card-header">
                                <h5>EMOTICON [20 ICONS]</h5>
                                
                                
                            </div>
                            <div class="card-block">
                                <div class="data-table-main icon-list-demo">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-emo-angry"></i>icofont icofont-emo-angry
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-emo-astonished"></i>icofont icofont-emo-astonished
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-emo-confounded"></i>icofont icofont-emo-confounded
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-emo-confused"></i>icofont icofont-emo-confused
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-emo-crying"></i>icofont icofont-emo-crying
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-emo-dizzy"></i>icofont icofont-emo-dizzy
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-emo-expressionless"></i>icofont icofont-emo-expressionless
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-emo-heart-eyes"></i>icofont icofont-emo-heart-eyes
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-emo-laughing"></i>icofont icofont-emo-laughing
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-emo-nerd-smile"></i>icofont icofont-emo-nerd-smile
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-emo-open-mouth"></i>icofont icofont-emo-open-mouth
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-emo-rage"></i>icofont icofont-emo-rage
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-emo-rolling-eyes"></i>icofont icofont-emo-rolling-eyes
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-emo-sad"></i>icofont icofont-emo-sad
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-emo-simple-smile"></i>icofont icofont-emo-simple-smile
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-emo-slightly-smile"></i>icofont icofont-emo-slightly-smile
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-emo-smirk"></i>icofont icofont-emo-smirk
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-emo-stuck-out-tongue"></i>icofont icofont-emo-stuck-out-tongue
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-emo-wink-smile"></i>icofont icofont-emo-wink-smile
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-emo-worried"></i>icofont icofont-emo-worried
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Emoticon [20 Icons] end -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <!-- File Type [40 Icons] Start -->
                        <div class="card">
                            <div class="card-header">
                                <h5>FILE TYPE [40 ICONS]</h5>
                                
                                
                            </div>
                            <div class="card-block">
                                <div class="data-table-main icon-list-demo">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-file-audio"></i>icofont icofont-file-audio
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-file-avi-mp4"></i>icofont icofont-file-avi-mp4
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-file-bmp "></i>icofont icofont-file-bmp
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-file-code"></i>icofont icofont-file-code
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-file-css"></i>icofont icofont-file-css
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-file-document"></i>icofont icofont-file-document
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-file-eps"></i>icofont icofont-file-eps
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-file-excel"></i>icofont icofont-file-excel
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-file-exe"></i>icofont icofont-file-exe
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-file-file"></i>icofont icofont-file-file
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-file-flv"></i>icofont icofont-file-flv
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-file-gif"></i>icofont icofont-file-gif
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-file-html5"></i>icofont icofont-file-html5
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-file-image"></i>icofont icofont-file-image
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-file-iso"></i>icofont icofont-file-iso
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-file-java"></i>icofont icofont-file-java
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-file-javascript"></i>icofont icofont-file-javascript
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-file-jpg"></i>icofont icofont-file-jpg
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-file-midi"></i>icofont icofont-file-midi
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-file-mov"></i>icofont icofont-file-mov
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-file-mp3"></i>icofont icofont-file-mp3
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-file-pdf"></i>icofont icofont-file-pdf
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-file-php"></i>icofont icofont-file-php
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-file-png"></i>icofont icofont-file-png
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-file-powerpoint"></i>icofont icofont-file-powerpoint
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-file-presentation"></i>icofont icofont-file-presentation
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-file-psb"></i>icofont icofont-file-psb
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-file-psd"></i>icofont icofont-file-psd
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-file-python"></i>icofont icofont-file-python
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-file-ruby"></i>icofont icofont-file-ruby
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-file-spreadsheet"></i>icofont icofont-file-spreadsheet
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-file-sql"></i>icofont icofont-file-sql
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-file-svg"></i>icofont icofont-file-svg
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-file-text"></i>icofont icofont-file-text
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-file-tiff"></i>icofont icofont-file-tiff
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-file-video"></i>icofont icofont-file-video
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-file-wave"></i>icofont icofont-file-wave
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-file-wmv"></i>icofont icofont-file-wmv
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-file-word"></i>icofont icofont-file-word
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-file-zip"></i>icofont icofont-file-zip
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- File Type [40 Icons] end -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <!-- Food [97 Icons] Start -->
                        <div class="card">
                            <div class="card-header">
                                <h5>FOOD [97 ICONS]</h5>
                                
                                
                            </div>
                            <div class="card-block">
                                <div class="data-table-main icon-list-demo">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-apple"></i>icofont icofont-apple
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-arabian-coffee"></i>icofont icofont-arabian-coffee
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-artichoke"></i>icofont icofont-artichoke
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-asparagus"></i>icofont icofont-asparagus
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-avocado"></i>icofont icofont-avocado
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-baby-food"></i>icofont icofont-baby-food
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-banana"></i>icofont icofont-banana
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-bbq"></i>icofont icofont-bbq
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-beans"></i>icofont icofont-beans
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-beer"></i>icofont icofont-beer
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-bell-pepper-capsicum"></i>icofont icofont-bell-pepper-capsicum
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-birthday-cake"></i>icofont icofont-birthday-cake
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-bread"></i>icofont icofont-bread
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-broccoli"></i>icofont icofont-broccoli
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-burger"></i>icofont icofont-burger
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cabbage"></i>icofont icofont-cabbage
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-carrot"></i>icofont icofont-carrot
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cauli-flower"></i>icofont icofont-cauli-flower
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cheese"></i>icofont icofont-cheese
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-chef"></i>icofont icofont-chef
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cherry"></i>icofont icofont-cherry
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-chicken"></i>icofont icofont-chicken
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-chicken-fry"></i>icofont icofont-chicken-fry
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cocktail"></i>icofont icofont-cocktail
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-coconut"></i>icofont icofont-coconut
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-coffee-alt"></i>icofont icofont-coffee-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-coffee-mug"></i>icofont icofont-coffee-mug
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-coffee-pot"></i>icofont icofont-coffee-pot
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cola"></i>icofont icofont-cola
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-corn"></i>icofont icofont-corn
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-croissant"></i>icofont icofont-croissant
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-crop-plant"></i>icofont icofont-crop-plant
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cucumber"></i>icofont icofont-cucumber
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cup-cake"></i>icofont icofont-cup-cake
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-dining-table"></i>icofont icofont-dining-table
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-donut"></i>icofont icofont-donut
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-egg-plant"></i>icofont icofont-egg-plant
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-egg-poached"></i>icofont icofont-egg-poached
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-farmer"></i>icofont icofont-farmer
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-farmer1"></i>icofont icofont-farmer1
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-fast-food"></i>icofont icofont-fast-food
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-fish"></i>icofont icofont-fish
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-food-basket "></i>icofont icofont-food-basket
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-food-cart"></i>icofont icofont-food-cart
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-fork-and-knife"></i>icofont icofont-fork-and-knife
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-french-fries"></i>icofont icofont-french-fries
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-fresh-juice"></i>icofont icofont-fresh-juice
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-fruits"></i>icofont icofont-fruits
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-grapes"></i>icofont icofont-grapes
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-honey"></i>icofont icofont-honey
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-hot-dog"></i>icofont icofont-hot-dog
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-hotel-alt"></i>icofont icofont-hotel-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-ice-cream"></i>icofont icofont-ice-cream
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-ice-cream-alt"></i>icofont icofont-ice-cream-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-ketchup"></i>icofont icofont-ketchup
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-kiwi"></i>icofont icofont-kiwi
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-layered-cake"></i>icofont icofont-layered-cake
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-lemon-alt"></i>icofont icofont-lemon-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-lobster"></i>icofont icofont-lobster
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-mango"></i>icofont icofont-mango
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-milk"></i>icofont icofont-milk
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-mushroom"></i>icofont icofont-mushroom
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-noodles"></i>icofont icofont-noodles
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-onion"></i>icofont icofont-onion
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-orange"></i>icofont icofont-orange
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-pear"></i>icofont icofont-pear
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-peas"></i>icofont icofont-peas
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-pepper"></i>icofont icofont-pepper
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-pie-alt"></i>icofont icofont-pie-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-pineapple"></i>icofont icofont-pineapple
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-pizza"></i>icofont icofont-pizza
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-pizza-slice"></i>icofont icofont-pizza-slice
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-plant"></i>icofont icofont-plant
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-popcorn"></i>icofont icofont-popcorn
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-potato"></i>icofont icofont-potato
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-pumpkin"></i>icofont icofont-pumpkin
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-raddish"></i>icofont icofont-raddish
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-restaurant"></i>icofont icofont-restaurant
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-restaurant-menu"></i>icofont icofont-restaurant-menu
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-salt-and-pepper"></i>icofont icofont-salt-and-pepper
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-sandwich"></i>icofont icofont-sandwich
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-sausage"></i>icofont icofont-sausage
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-shrimp"></i>icofont icofont-shrimp
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-sof-drinks"></i>icofont icofont-sof-drinks
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-soup-bowl"></i>icofont icofont-soup-bowl
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-spoon-and-fork"></i>icofont icofont-spoon-and-fork
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-steak"></i>icofont icofont-steak
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-strawberry"></i>icofont icofont-strawberry
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-sub-sandwich"></i>icofont icofont-sub-sandwich
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-sushi"></i>icofont icofont-sushi
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-taco"></i>icofont icofont-taco
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-tea"></i>icofont icofont-tea
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-tea-pot"></i>icofont icofont-tea-pot
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-tomato"></i>icofont icofont-tomato
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-waiter-alt"></i>icofont icofont-waiter-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-watermelon"></i>icofont icofont-watermelon
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-wheat"></i>icofont icofont-wheat
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Food [97 Icons] end -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <!-- Kids & Toys [21 Icons] Start -->
                        <div class="card">
                            <div class="card-header">
                                <h5>KIDS &amp; TOYS [21 ICONS]</h5>
                                
                                
                            </div>
                            <div class="card-block">
                                <div class="data-table-main icon-list-demo">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-abc"></i>icofont icofont-abc
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-baby-cloth"></i>icofont icofont-baby-cloth
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-baby-milk-bottle"></i>icofont icofont-baby-milk-bottle
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-baby-trolley"></i>icofont icofont-baby-trolley
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-back-pack"></i>icofont icofont-back-pack
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-candy"></i>icofont icofont-candy
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cycling"></i>icofont icofont-cycling
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-holding-hands"></i>icofont icofont-holding-hands
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-infant-nipple"></i>icofont icofont-infant-nipple
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-kids-scooter"></i>icofont icofont-kids-scooter
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-safety-pin"></i>icofont icofont-safety-pin
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-teddy-bear"></i>icofont icofont-teddy-bear
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-toy-ball"></i>icofont icofont-toy-ball
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-toy-cat"></i>icofont icofont-toy-cat
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-toy-duck"></i>icofont icofont-toy-duck
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-toy-elephant"></i>icofont icofont-toy-elephant
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-toy-hand"></i>icofont icofont-toy-hand
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-toy-horse"></i>icofont icofont-toy-horse
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-toy-lattu "></i>icofont icofont-toy-lattu
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-toy-train "></i>icofont icofont-toy-train
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-unique-idea"></i>icofont icofont-unique-idea
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Kids & Toys [21 Icons] end -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <!-- Law [37 Icons] Start -->
                        <div class="card">
                            <div class="card-header">
                                <h5>LAW [37 ICONS]</h5>
                                
                                
                            </div>
                            <div class="card-block">
                                <div class="data-table-main icon-list-demo">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-bag-alt"></i>icofont icofont-bag-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-burglar"></i>icofont icofont-burglar
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cannon-firing"></i>icofont icofont-cannon-firing
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cc-camera"></i>icofont icofont-cc-camera
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cop"></i>icofont icofont-cop
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cop-badge"></i>icofont icofont-cop-badge
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-court"></i>icofont icofont-court
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-court-hammer"></i>icofont icofont-court-hammer
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-finger-print"></i>icofont icofont-finger-print
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-handcuff"></i>icofont icofont-handcuff
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-handcuff-alt"></i>icofont icofont-handcuff-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-investigation"></i>icofont icofont-investigation
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-investigator"></i>icofont icofont-investigator
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-jail"></i>icofont icofont-jail
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-judge"></i>icofont icofont-judge
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-law"></i>icofont icofont-law
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-law-alt-1"></i>icofont icofont-law-alt-1
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-law-alt-2"></i>icofont icofont-law-alt-2
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-law-alt-3"></i>icofont icofont-law-alt-3
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-law-book"></i>icofont icofont-law-book
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-law-document"></i>icofont icofont-law-document
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-lawyer"></i>icofont icofont-lawyer
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-lawyer-alt-1"></i>icofont icofont-lawyer-alt-1
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-lawyer-alt-2"></i>icofont icofont-lawyer-alt-2
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-order"></i>icofont icofont-order
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-pistol"></i>icofont icofont-pistol
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-police"></i>icofont icofont-police
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-police-badge"></i>icofont icofont-police-badge
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-police-cap"></i>icofont icofont-police-cap
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-police-car-alt-1"></i>icofont icofont-police-car-alt-1
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-police-car-alt-2"></i>icofont icofont-police-car-alt-2
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-police-hat"></i>icofont icofont-police-hat
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-police-van"></i>icofont icofont-police-van
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-protect"></i>icofont icofont-protect
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-scales"></i>icofont icofont-scales
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-thief"></i>icofont icofont-thief
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-thief-alt"></i>icofont icofont-thief-alt
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Law [37 Icons] end -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <!-- Mathematical [41 Icons] Start -->
                        <div class="card">
                            <div class="card-header">
                                <h5>MATHEMATICAL [41 ICONS]</h5>
                                
                                
                            </div>
                            <div class="card-block">
                                <div class="data-table-main icon-list-demo">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-abacus"></i>icofont icofont-abacus
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-abacus-alt"></i>icofont icofont-abacus-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-angle"></i>icofont icofont-angle
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-calculator-alt-1"></i>icofont icofont-calculator-alt-1
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-calculator-alt-2"></i>icofont icofont-calculator-alt-2
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-circle-ruler"></i>icofont icofont-circle-ruler
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-circle-ruler-alt"></i>icofont icofont-circle-ruler-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-compass-alt-1"></i>icofont icofont-compass-alt-1
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-compass-alt-2"></i>icofont icofont-compass-alt-2
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-compass-alt-3"></i>icofont icofont-compass-alt-3
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-compass-alt-4"></i>icofont icofont-compass-alt-4
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-degrees"></i>icofont icofont-degrees
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-degrees-alt-1"></i>icofont icofont-degrees-alt-1
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-degrees-alt-2"></i>icofont icofont-degrees-alt-2
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-golden-ratio"></i>icofont icofont-golden-ratio
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-marker-alt-1"></i>icofont icofont-marker-alt-1
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-marker-alt-2"></i>icofont icofont-marker-alt-2
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-marker-alt-3"></i>icofont icofont-marker-alt-3
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-mathematical"></i>icofont icofont-mathematical
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-mathematical-alt-1"></i>icofont icofont-mathematical-alt-1
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-mathematical-alt-2"></i>icofont icofont-mathematical-alt-2
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-pen-alt-1"></i>icofont icofont-pen-alt-1
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-pen-alt-2"></i>icofont icofont-pen-alt-2
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-pen-alt-3"></i>icofont icofont-pen-alt-3
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-pen-holder"></i>icofont icofont-pen-holder
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-pen-holder-alt-1"></i>icofont icofont-pen-holder-alt-1
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-pencil-alt-1"></i>icofont icofont-pencil-alt-1
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-pencil-alt-2"></i>icofont icofont-pencil-alt-2
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-pencil-alt-3"></i>icofont icofont-pencil-alt-3
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-pencil-alt-4"></i>icofont icofont-pencil-alt-4
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-ruler"></i>icofont icofont-ruler
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-ruler-alt-1"></i>icofont icofont-ruler-alt-1
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-ruler-alt-2"></i>icofont icofont-ruler-alt-2
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-ruler-compass"></i>icofont icofont-ruler-compass
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-ruler-compass-alt"></i>icofont icofont-ruler-compass-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-ruler-pencil"></i>icofont icofont-ruler-pencil
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-ruler-pencil-alt-1"></i>icofont icofont-ruler-pencil-alt-1
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-ruler-pencil-alt-2"></i>icofont icofont-ruler-pencil-alt-2
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-rulers"></i>icofont icofont-rulers
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-rulers-alt"></i>icofont icofont-rulers-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-square-root"></i>icofont icofont-square-root
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Mathematical [41 Icons] end-->
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <!-- Medical [48 Icons] Start -->
                        <div class="card">
                            <div class="card-header">
                                <h5>MEDICAL [48 ICONS]</h5>
                                
                                
                            </div>
                            <div class="card-block">
                                <div class="data-table-main icon-list-demo">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-aids"></i>icofont icofont-aids
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-ambulance"></i>icofont icofont-ambulance
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-autism"></i>icofont icofont-autism
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-bandage"></i>icofont icofont-bandage
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-bed-patient"></i>icofont icofont-bed-patient
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-blind"></i>icofont icofont-blind
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-blood"></i>icofont icofont-blood
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-blood-drop"></i>icofont icofont-blood-drop
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-blood-test"></i>icofont icofont-blood-test
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-capsule"></i>icofont icofont-capsule
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-crutches"></i>icofont icofont-crutches
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-dna"></i>icofont icofont-dna
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-dna-alt-1"></i>icofont icofont-dna-alt-1
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-doctor"></i>icofont icofont-doctor
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-doctor-alt"></i>icofont icofont-doctor-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-drug"></i>icofont icofont-drug
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-drug-pack"></i>icofont icofont-drug-pack
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-eye-alt"></i>icofont icofont-eye-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-first-aid-alt"></i>icofont icofont-first-aid-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-garbage"></i>icofont icofont-garbage
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-heart-alt"></i>icofont icofont-heart-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-heartbeat"></i>icofont icofont-heartbeat
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-herbal"></i>icofont icofont-herbal
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-hospital"></i>icofont icofont-hospital
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-icu"></i>icofont icofont-icu
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-injection-syringe"></i>icofont icofont-injection-syringe
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-laboratory"></i>icofont icofont-laboratory
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-medical-sign"></i>icofont icofont-medical-sign
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-medical-sign-alt"></i>icofont icofont-medical-sign-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-nurse"></i>icofont icofont-nurse
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-nurse-alt"></i>icofont icofont-nurse-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-nursing-home"></i>icofont icofont-nursing-home
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-operation-theater"></i>icofont icofont-operation-theater
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-paralysis-disability"></i>icofont icofont-paralysis-disability
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-pills"></i>icofont icofont-pills
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-prescription"></i>icofont icofont-prescription
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-pulse"></i>icofont icofont-pulse
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-stethoscope"></i>icofont icofont-stethoscope
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-stethoscope-alt"></i>icofont icofont-stethoscope-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-stretcher"></i>icofont icofont-stretcher
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-surgeon"></i>icofont icofont-surgeon
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-surgeon-alt"></i>icofont icofont-surgeon-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-tablets"></i>icofont icofont-tablets
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-test-bottle"></i>icofont icofont-test-bottle
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-test-tube"></i>icofont icofont-test-tube
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-thermometer-alt"></i>icofont icofont-thermometer-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-tooth"></i>icofont icofont-tooth
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-xray"></i>icofont icofont-xray
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Medical [48 Icons] end -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <!-- Mobile Ui [94 Icons] Start -->
                        <div class="card">
                            <div class="card-header">
                                <h5>MOBILE UI [94 ICONS]</h5>
                                
                                
                            </div>
                            <div class="card-block">
                                <div class="data-table-main icon-list-demo">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-ui-add"></i>icofont icofont-ui-add
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-ui-alarm"></i>icofont icofont-ui-alarm
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-ui-battery"></i>icofont icofont-ui-battery
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-ui-block"></i>icofont icofont-ui-block
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-ui-bluetooth"></i>icofont icofont-ui-bluetooth
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-ui-brightness"></i>icofont icofont-ui-brightness
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-ui-browser"></i>icofont icofont-ui-browser
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-ui-calculator"></i>icofont icofont-ui-calculator
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-ui-calendar"></i>icofont icofont-ui-calendar
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-ui-call"></i>icofont icofont-ui-call
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-ui-camera"></i>icofont icofont-ui-camera
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-ui-cart"></i>icofont icofont-ui-cart
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-ui-cell-phone"></i>icofont icofont-ui-cell-phone
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-ui-chat"></i>icofont icofont-ui-chat
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-ui-check"></i>icofont icofont-ui-check
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-ui-clip"></i>icofont icofont-ui-clip
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-ui-clip-board"></i>icofont icofont-ui-clip-board
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-ui-clock"></i>icofont icofont-ui-clock
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-ui-close"></i>icofont icofont-ui-close
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-ui-contact-list"></i>icofont icofont-ui-contact-list
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-ui-copy"></i>icofont icofont-ui-copy
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-ui-cut"></i>icofont icofont-ui-cut
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-ui-delete"></i>icofont icofont-ui-delete
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-ui-dial-phone"></i>icofont icofont-ui-dial-phone
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-ui-edit"></i>icofont icofont-ui-edit
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-ui-email"></i>icofont icofont-ui-email
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-ui-file"></i>icofont icofont-ui-file
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-ui-fire-wall"></i>icofont icofont-ui-fire-wall
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-ui-flash-light"></i>icofont icofont-ui-flash-light
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-ui-flight"></i>icofont icofont-ui-flight
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-ui-folder"></i>icofont icofont-ui-folder
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-ui-game"></i>icofont icofont-ui-game
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-ui-handicapped"></i>icofont icofont-ui-handicapped
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-ui-head-phone"></i>icofont icofont-ui-head-phone
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-ui-home"></i>icofont icofont-ui-home
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-ui-image"></i>icofont icofont-ui-image
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-ui-keyboard"></i>icofont icofont-ui-keyboard
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-ui-laoding"></i>icofont icofont-ui-laoding
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-ui-lock"></i>icofont icofont-ui-lock
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-ui-love"></i>icofont icofont-ui-love
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-ui-love-add"></i>icofont icofont-ui-love-add
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-ui-love-broken"></i>icofont icofont-ui-love-broken
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-ui-love-remove"></i>icofont icofont-ui-love-remove
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-ui-map"></i>icofont icofont-ui-map
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-ui-message"></i>icofont icofont-ui-message
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-ui-messaging"></i>icofont icofont-ui-messaging
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-ui-movie"></i>icofont icofont-ui-movie
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-ui-music"></i>icofont icofont-ui-music
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-ui-music-player"></i>icofont icofont-ui-music-player
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-ui-mute"></i>icofont icofont-ui-mute
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-ui-network"></i>icofont icofont-ui-network
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-ui-next"></i>icofont icofont-ui-next
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-ui-note"></i>icofont icofont-ui-note
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-ui-office"></i>icofont icofont-ui-office
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-ui-password"></i>icofont icofont-ui-password
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-ui-pause"></i>icofont icofont-ui-pause
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-ui-play"></i>icofont icofont-ui-play
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-ui-play-stop"></i>icofont icofont-ui-play-stop
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-ui-pointer"></i>icofont icofont-ui-pointer
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-ui-power"></i>icofont icofont-ui-power
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-ui-press"></i>icofont icofont-ui-press
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-ui-previous"></i>icofont icofont-ui-previous
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-ui-rate-add"></i>icofont icofont-ui-rate-add
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-ui-rate-blank"></i>icofont icofont-ui-rate-blank
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-ui-rate-remove"></i>icofont icofont-ui-rate-remove
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-ui-rating"></i>icofont icofont-ui-rating
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-ui-record"></i>icofont icofont-ui-record
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-ui-remove"></i>icofont icofont-ui-remove
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-ui-reply"></i>icofont icofont-ui-reply
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-ui-rotation"></i>icofont icofont-ui-rotation
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-ui-rss"></i>icofont icofont-ui-rss
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-ui-search"></i>icofont icofont-ui-search
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-ui-settings"></i>icofont icofont-ui-settings
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-ui-social-link"></i>icofont icofont-ui-social-link
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-ui-tag"></i>icofont icofont-ui-tag
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-ui-text-chat"></i>icofont icofont-ui-text-chat
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-ui-text-loading"></i>icofont icofont-ui-text-loading
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-ui-theme"></i>icofont icofont-ui-theme
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-ui-timer"></i>icofont icofont-ui-timer
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-ui-touch-phone"></i>icofont icofont-ui-touch-phone
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-ui-travel"></i>icofont icofont-ui-travel
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-ui-unlock"></i>icofont icofont-ui-unlock
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-ui-user"></i>icofont icofont-ui-user
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-ui-user-group"></i>icofont icofont-ui-user-group
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-ui-v-card"></i>icofont icofont-ui-v-card
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-ui-video"></i>icofont icofont-ui-video
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-ui-video-chat"></i>icofont icofont-ui-video-chat
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-ui-video-message"></i>icofont icofont-ui-video-message
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-ui-video-play"></i>icofont icofont-ui-video-play
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-ui-volume"></i>icofont icofont-ui-volume
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-ui-weather"></i>icofont icofont-ui-weather
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-ui-wifi"></i>icofont icofont-ui-wifi
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-ui-zoom-in"></i>icofont icofont-ui-zoom-in
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-ui-zoom-out"></i>icofont icofont-ui-zoom-out
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Mobile Ui [94 Icons] end -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <!-- Multimedia [33 Icons] Start -->
                        <div class="card">
                            <div class="card-header">
                                <h5>MULTIMEDIA [33 ICONS]</h5>
                                
                                
                            </div>
                            <div class="card-block">
                                <div class="data-table-main icon-list-demo">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cassette"></i>icofont icofont-cassette
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cassette-player"></i>icofont icofont-cassette-player
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-forward"></i>icofont icofont-forward
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-game"></i>icofont icofont-game
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-guiter"></i>icofont icofont-guiter
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-headphone-alt-1"></i>icofont icofont-headphone-alt-1
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-headphone-alt-2"></i>icofont icofont-headphone-alt-2
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-headphone-alt-3"></i>icofont icofont-headphone-alt-3
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-listening"></i>icofont icofont-listening
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-megaphone"></i>icofont icofont-megaphone
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-megaphone-alt"></i>icofont icofont-megaphone-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-movie"></i>icofont icofont-movie
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-mp3-player"></i>icofont icofont-mp3-player
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-multimedia"></i>icofont icofont-multimedia
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-music-disk"></i>icofont icofont-music-disk
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-music-note"></i>icofont icofont-music-note
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-pause"></i>icofont icofont-pause
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-play-alt-1"></i>icofont icofont-play-alt-1
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-play-alt-2"></i>icofont icofont-play-alt-2
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-play-alt-3"></i>icofont icofont-play-alt-3
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-play-pause"></i>icofont icofont-play-pause
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-record"></i>icofont icofont-record
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-retro-music-disk"></i>icofont icofont-retro-music-disk
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-rewind"></i>icofont icofont-rewind
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-song-notes"></i>icofont icofont-song-notes
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-sound-wave"></i>icofont icofont-sound-wave
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-sound-wave-alt"></i>icofont icofont-sound-wave-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-stop"></i>icofont icofont-stop
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-video-alt"></i>icofont icofont-video-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-video-cam"></i>icofont icofont-video-cam
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-volume-bar"></i>icofont icofont-volume-bar
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-volume-mute"></i>icofonticofont-volume-mute
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-youtube-play"></i>icofont icofont-youtube-play
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Multimedia [33 Icons] end -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <!-- Payment [47 Icons] Start -->
                        <div class="card">
                            <div class="card-header">
                                <h5>PAYMENT [47 ICONS]</h5>
                                
                                
                            </div>
                            <div class="card-block">
                                <div class="data-table-main icon-list-demo">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-amazon"></i>icofont icofont-amazon
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-amazon-alt"></i>icofont icofont-amazon-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-american-express"></i>icofont icofont-american-express
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-american-express-alt"></i>icofont icofont-american-express-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-apple-pay"></i>icofont icofont-apple-pay
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-apple-pay-alt"></i>icofont icofont-apple-pay-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-bank-transfer"></i>icofont icofont-bank-transfer
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-bank-transfer-alt"></i>icofont icofont-bank-transfer-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-braintree"></i>icofont icofont-braintree
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-braintree-alt"></i>icofont icofont-braintree-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cash-on-delivery"></i>icofont icofont-cash-on-delivery
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cash-on-delivery-alt"></i>icofont icofont-cash-on-delivery-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-checkout"></i>icofont icofont-checkout
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-checkout-alt"></i>icofont icofont-checkout-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-diners-club"></i>icofont icofont-diners-club
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-diners-club-alt-1"></i>icofont icofont-diners-club-alt-1
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-diners-club-alt-2"></i>icofont icofont-diners-club-alt-2
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-diners-club-alt-3"></i>icofont icofont-diners-club-alt-3
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-discover"></i>icofont icofont-discover
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-discover-alt"></i>icofont icofont-discover-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-eway"></i>icofont icofont-eway
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-eway-alt"></i>icofont icofont-eway-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-google-wallet"></i>icofont icofont-google-wallet
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-google-wallet-alt-1"></i>icofont icofont-google-wallet-alt-1
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-google-wallet-alt-2"></i>icofont icofont-google-wallet-alt-2
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-google-wallet-alt-3"></i>icofont icofont-google-wallet-alt-3
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-jcb"></i>icofont icofont-jcb
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-jcb-alt"></i>icofont icofont-jcb-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-maestro"></i>icofont icofont-maestro
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-maestro-alt"></i>icofont icofont-maestro-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-mastercard"></i>icofont icofont-mastercard
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-mastercard-alt"></i>icofont icofont-mastercard-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-payoneer"></i>icofont icofont-payoneer
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-payoneer-alt"></i>icofont icofont-payoneer-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-paypal"></i>icofont icofont-paypal
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-paypal-alt"></i>icofont icofont-paypal-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-sage"></i>icofont icofont-sage
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-sage-alt"></i>icofont icofont-sage-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-skrill"></i>icofont icofont-skrill
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-skrill-alt"></i>icofont icofont-skrill-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-stripe"></i>icofont icofont-stripe
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-stripe-alt"></i>icofont icofont-stripe-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-visa"></i>icofont icofont-visa
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-visa-alt"></i>icofont icofont-visa-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-visa-electron"></i>icofont icofont-visa-electron
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-western-union"></i>icofont icofont-western-union
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-western-union-alt"></i>icofont icofont-western-union-alt
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Payment [47 Icons] end -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <!-- Person [32 Icons] Start -->
                        <div class="card">
                            <div class="card-header">
                                <h5>PERSON [32 ICONS]</h5>
                                
                                
                            </div>
                            <div class="card-block">
                                <div class="data-table-main icon-list-demo">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-boy"></i>icofont icofont-boy
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-business-man"></i>icofont icofont-business-man
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-business-man-alt-1"></i>icofont icofont-business-man-alt-1
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-business-man-alt-2"></i>icofont icofont-business-man-alt-2
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-business-man-alt-3"></i>icofont icofont-business-man-alt-3
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-funky-man"></i>icofont icofont-funky-man
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-girl"></i>icofont icofont-girl
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-girl-alt"></i>icofont icofont-girl-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-hotel-boy"></i>icofont icofont-hotel-boy
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-hotel-boy-alt"></i>icofont icofont-hotel-boy-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-man-in-glasses"></i>icofont icofont-man-in-glasses
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-user"></i>icofont icofont-user
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-user-alt-1"></i>icofont icofont-user-alt-1
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-user-alt-2"></i>icofont icofont-user-alt-2
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-user-alt-3"></i>icofont icofont-user-alt-3
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-user-alt-4"></i>icofont icofont-user-alt-4
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-user-alt-5"></i>icofont icofont-user-alt-5
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-user-alt-6"></i>icofont icofont-user-alt-6
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-user-alt-7"></i>icofont icofont-user-alt-7
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-user-female"></i>icofont icofont-user-female
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-user-male"></i>icofont icofont-user-male
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-user-suited"></i>icofont icofont-user-suited
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-header-users"></i>icofont icofont-header-users
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-header-users-alt-1"></i>icofont icofont-header-users-alt-1
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-header-users-alt-2"></i>icofont icofont-header-users-alt-2
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-header-users-alt-3"></i>icofont icofont-header-users-alt-3
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-header-users-alt-4"></i>icofont icofont-header-users-alt-4
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-header-users-alt-5"></i>icofont icofont-header-users-alt-5
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-header-users-alt-6"></i>icofont icofont-header-users-alt-6
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-header-users-social"></i>icofont icofont-header-users-social
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-waiter"></i>icofont icofont-waiter
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-woman-in-glasses"></i>icofont icofont-woman-in-glasses
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Person [32 Icons] end -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <!-- Search [11 Icons] Start -->
                        <div class="card">
                            <div class="card-header">
                                <h5>SEARCH [11 ICONS]</h5>
                                
                                
                            </div>
                            <div class="card-block">
                                <div class="data-table-main icon-list-demo">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-document-search"></i>icofont icofont-document-search
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-folder-search"></i>icofont icofont-folder-search
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-home-search"></i>icofont icofont-home-search
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-job-search"></i>icofont icofont-job-search
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-map-search"></i>icofont icofont-map-search
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-restaurant-search"></i>icofont icofont-restaurant-search
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-search"></i>icofont icofont-search
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-search-alt-1"></i>icofont icofont-search-alt-1
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-search-alt-2"></i>icofont icofont-search-alt-2
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-stock-search"></i>icofont icofont-stock-search
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-user-search"></i>icofont icofont-user-search
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Search [11 Icons] end -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <!-- Social [112 Icons] Start -->
                        <div class="card">
                            <div class="card-header">
                                <h5>SOCIAL [112 ICONS]</h5>
                                
                                
                            </div>
                            <div class="card-block">
                                <div class="data-table-main icon-list-demo">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brand-drupal"></i>icofont icofont-brand-drupal
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-social-500px"></i>icofont icofont-social-500px
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-social-aim"></i>icofont icofont-social-aim
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-social-badoo"></i>icofont icofont-social-badoo
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-social-baidu-tieba"></i>icofont icofont-social-baidu-tieba
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-social-bbm-messenger"></i>icofont icofont-social-bbm-messenger
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-social-bebo"></i>icofont icofont-social-bebo
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-social-behance"></i>icofont icofont-social-behance
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-social-blogger"></i>icofont icofont-social-blogger
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-social-bootstrap"></i>icofont icofont-social-bootstrap
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-social-brightkite"></i>icofont icofont-social-brightkite
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-social-cloudapp"></i>icofont icofont-social-cloudapp
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-social-concrete5"></i>icofont icofont-social-concrete5
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-social-delicious"></i>icofont icofont-social-delicious
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-social-designbump"></i>icofont icofont-social-designbump
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-social-designfloat"></i>icofont icofont-social-designfloat
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-social-deviantart"></i>icofont icofont-social-deviantart
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-social-digg"></i>icofont icofont-social-digg
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-social-dotcms"></i>icofont icofont-social-dotcms
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-social-dribbble"></i>icofont icofont-social-dribbble
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-social-dribble"></i>icofont icofont-social-dribble
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-social-dropbox"></i>icofont icofont-social-dropbox
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-social-ebuddy"></i>icofont icofont-social-ebuddy
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-social-ello"></i>icofont icofont-social-ello
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-social-ember"></i>icofont icofont-social-ember
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-social-evernote"></i>icofont icofont-social-evernote
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-social-facebook"></i>icofont icofont-social-facebook
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-social-facebook-messenger"></i>icofont icofont-social-facebook-messenger
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-social-feedburner"></i>icofont icofont-social-feedburner
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-social-flikr"></i>icofont icofont-social-flikr
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-social-folkd"></i>icofont icofont-social-folkd
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-social-foursquare"></i>icofont icofont-social-foursquare
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-social-friendfeed"></i>icofont icofont-social-friendfeed
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-social-ghost"></i>icofont icofont-social-ghost
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-social-github"></i>icofont icofont-social-github
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-social-gnome"></i>icofont icofont-social-gnome
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-social-google-buzz"></i>icofont icofont-social-google-buzz
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-social-google-hangouts"></i>icofont icofont-social-google-hangouts
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-social-google-map"></i>icofont icofont-social-google-map
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-social-google-plus"></i>icofont icofont-social-google-plus
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-social-google-talk"></i>icofont icofont-social-google-talk
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-social-hype-machine"></i>icofont icofont-social-hype-machine
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-social-instagram"></i>icofont icofont-social-instagram
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-social-kakaotalk"></i>icofont icofont-social-kakaotalk
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-social-kickstarter"></i>icofont icofont-social-kickstarter
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-social-kik"></i>icofont icofont-social-kik
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-social-kiwibox"></i>icofont icofont-social-kiwibox
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-social-line"></i>icofont icofont-social-line
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-social-linkedin"></i>icofont icofont-social-linkedin
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-social-linux-mint"></i>icofont icofont-social-linux-mint
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-social-livejournal"></i>icofont icofont-social-livejournal
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-social-magento"></i>icofont icofont-social-magento
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-social-meetme"></i>icofont icofont-social-meetme
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-social-meetup"></i>icofont icofont-social-meetup
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-social-mixx"></i>icofont icofont-social-mixx
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-social-newsvine"></i>icofont icofont-social-newsvine
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-social-nimbuss"></i>icofont icofont-social-nimbuss
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-social-odnoklassniki"></i>icofont icofont-social-odnoklassniki
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-social-opencart"></i>icofont icofont-social-opencart
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-social-oscommerce"></i>icofont icofont-social-oscommerce
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-social-pandora"></i>icofont icofont-social-pandora
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-social-photobucket"></i>icofont icofont-social-photobucket
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-social-picasa"></i>icofont icofont-social-picasa
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-social-pinterest"></i>icofont icofont-social-pinterest
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-social-prestashop"></i>icofont icofont-social-prestashop
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-social-qik"></i>icofont icofont-social-qik
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-social-qq"></i>icofont icofont-social-qq
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-social-readernaut"></i>icofont icofont-social-readernaut
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-social-reddit"></i>icofont icofont-social-reddit
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-social-renren"></i>icofont icofont-social-renren
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-social-rss"></i>icofont icofont-social-rss
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-social-shopify"></i>icofont icofont-social-shopify
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-social-silverstripe"></i>icofont icofont-social-silverstripe
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-social-skype"></i>icofont icofont-social-skype
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-social-slack"></i>icofont icofont-social-slack
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-social-slashdot"></i>icofont icofont-social-slashdot
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-social-slidshare"></i>icofont icofont-social-slidshare
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-social-smugmug"></i>icofont icofont-social-smugmug
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-social-snapchat"></i>icofont icofont-social-snapchat
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-social-soundcloud"></i>icofont icofont-social-soundcloud
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-social-spotify"></i>icofont icofont-social-spotify
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-social-stack-exchange"></i>icofont icofont-social-stack-exchange
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-social-stack-overflow"></i>icofont icofont-social-stack-overflow
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-social-steam"></i>icofont icofont-social-steam
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-social-stumbleupon"></i>icofont icofont-social-stumbleupon
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-social-tagged"></i>icofont icofont-social-tagged
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-social-technorati"></i>icofont icofont-social-technorati
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-social-telegram"></i>icofont icofont-social-telegram
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-social-tinder"></i>icofont icofont-social-tinder
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-social-trello"></i>icofont icofont-social-trello
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-social-tumblr"></i>icofont icofont-social-tumblr
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-social-twitch"></i>icofont icofont-social-twitch
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-social-twitter"></i>icofont icofont-social-twitter
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-social-typo3"></i>icofont icofont-social-typo3
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-social-ubercart"></i>icofont icofont-social-ubercart
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-social-viber"></i>icofont icofont-social-viber
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-social-viddler"></i>icofont icofont-social-viddler
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-social-vimeo"></i>icofont icofont-social-vimeo
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-social-vine"></i>icofont icofont-social-vine
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-social-virb"></i>icofont icofont-social-virb
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-social-virtuemart"></i>icofont icofont-social-virtuemart
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-social-vk"></i>icofont icofont-social-vk
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-social-wechat"></i>icofont icofont-social-wechat
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-social-weibo"></i>icofont icofont-social-weibo
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-social-whatsapp"></i>icofont icofont-social-whatsapp
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-social-xing"></i>icofont icofont-social-xing
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-social-yahoo"></i>icofont icofont-social-yahoo
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-social-yelp"></i>icofont icofont-social-yelp
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-social-youku"></i>icofont icofont-social-youku
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-social-youtube"></i>icofont icofont-social-youtube
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-social-youtube-play"></i>icofont icofont-social-youtube-play
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-social-zencart"></i>icofont icofont-social-zencart
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Social [112 Icons] end -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <!-- Sport [89 Icons] Start -->
                        <div class="card">
                            <div class="card-header">
                                <h5>SPORT [89 ICONS]</h5>
                                
                                
                            </div>
                            <div class="card-block">
                                <div class="data-table-main icon-list-demo">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-badminton-birdie"></i>icofont icofont-badminton-birdie
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-baseball"></i>icofont icofont-baseball
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-baseballer"></i>icofont icofont-baseballer
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-basketball"></i>icofont icofont-basketball
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-basketball-hoop"></i>icofont icofont-basketball-hoop
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-billiard-ball"></i>icofont icofont-billiard-ball
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-boot-alt-1"></i>icofont icofont-boot-alt-1
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-boot-alt-2"></i>icofont icofont-boot-alt-2
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-bowling"></i>icofont icofont-bowling
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-bowling-alt"></i>icofont icofont-bowling-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-canoe"></i>icofont icofont-canoe
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cheer-leader"></i>icofont icofont-cheer-leader
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-climbing"></i>icofont icofont-climbing
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-corner"></i>icofont icofont-corner
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cyclist"></i>icofont icofont-cyclist
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-dumbbell"></i>icofont icofont-dumbbell
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-dumbbell-alt"></i>icofont icofont-dumbbell-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-field"></i>icofont icofont-field
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-field-alt"></i>icofont icofont-field-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-football-alt"></i>icofont icofont-football-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-foul"></i>icofont icofont-foul
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-goal"></i>icofont icofont-goal
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-goal-keeper"></i>icofont icofont-goal-keeper
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-golf"></i>icofont icofont-golf
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-golf-alt"></i>icofont icofont-golf-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-golf-bag"></i>icofont icofont-golf-bag
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-golf-field"></i>icofont icofont-golf-field
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-golfer"></i>icofont icofont-golfer
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-gym"></i>icofont icofont-gym
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-gym-alt-1"></i>icofont icofont-gym-alt-1
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-gym-alt-2"></i>icofont icofont-gym-alt-2
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-gym-alt-3"></i>icofont icofont-gym-alt-3
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-hand-grippers"></i>icofont icofont-hand-grippers
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-heart-beat-alt"></i>icofont icofont-heart-beat-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-helmet"></i>icofont icofont-helmet
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-hockey"></i>icofont icofont-hockey
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-hockey-alt"></i>icofont icofont-hockey-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-ice-skate"></i>icofont icofont-ice-skate
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-jersey"></i>icofont icofont-jersey
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-jersey-alt"></i>icofont icofont-jersey-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-jumping"></i>icofont icofont-jumping
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-kick"></i>icofont icofont-kick
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-leg"></i>icofont icofont-leg
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-match-review"></i>icofont icofont-match-review
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-medal-alt"></i>icofont icofont-medal-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-muscle"></i>icofont icofont-muscle
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-muscle-alt"></i>icofont icofont-muscle-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-offside"></i>icofont icofont-offside
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-olympic"></i>icofont icofont-olympic
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-olympic-logo"></i>icofont icofont-olympic-logo
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-padding"></i>icofont icofont-padding
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-penalty-card"></i>icofont icofont-penalty-card
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-racer"></i>icofont icofont-racer
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-racing-car"></i>icofont icofont-racing-car
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-racing-flag"></i>icofont icofont-racing-flag
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-racing-flag-alt"></i>icofont icofont-racing-flag-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-racings-wheel"></i>icofont icofont-racings-wheel
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-referee"></i>icofont icofont-referee
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-refree-jersey"></i>icofont icofont-refree-jersey
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-result"></i>icofont icofont-result
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-rugby"></i>icofont icofont-rugby
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-rugby-ball"></i>icofont icofont-rugby-ball
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-rugby-player"></i>icofont icofont-rugby-player
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-runner"></i>icofont icofont-runner
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-runner-alt-1"></i>icofont icofont-runner-alt-1
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-runner-alt-2"></i>icofont icofont-runner-alt-2
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-score-board"></i>icofont icofont-score-board
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-skiing-man"></i>icofont icofont-skiing-man
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-skydiving-goggles"></i>icofont icofont-skydiving-goggles
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-snow-mobile"></i>icofont icofont-snow-mobile
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-steering"></i>icofont icofont-steering
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-substitute"></i>icofont icofont-substitute
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-swimmer"></i>icofont icofont-swimmer
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-table-tennis"></i>icofont icofont-table-tennis
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-team"></i>icofont icofont-team
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-team-alt"></i>icofont icofont-team-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-tennis"></i>icofont icofont-tennis
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-tennis-player"></i>icofont icofont-tennis-player
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-time"></i>icofont icofont-time
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-track"></i>icofont icofont-track
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-tracking"></i>icofont icofont-tracking
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-trophy"></i>icofont icofont-trophy
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-trophy-alt"></i>icofont icofont-trophy-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-volleyball"></i>icofont icofont-volleyball
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-volleyball-alt"></i>icofont icofont-volleyball-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-volleyball-fire"></i>icofont icofont-volleyball-fire
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-water-bottle"></i>icofont icofont-water-bottle
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-whisle"></i>icofont icofont-whisle
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-win-trophy"></i>icofont icofont-win-trophy
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Sport [89 Icons] end -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <!-- Text Editor [51 Icons] Start -->
                        <div class="card">
                            <div class="card-header">
                                <h5>TEXT EDITOR [51 ICONS]</h5>
                                
                                
                            </div>
                            <div class="card-block">
                                <div class="data-table-main icon-list-demo">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-align-center"></i>icofont icofont-align-center
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-align-left"></i>icofont icofont-align-left
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-align-right"></i>icofont icofont-align-right
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-all-caps"></i>icofont icofont-all-caps
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-bold"></i>icofont icofont-bold
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brush"></i>icofont icofont-brush
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-clip-board"></i>icofont icofont-clip-board
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-code-alt"></i>icofont icofont-code-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-color-bucket"></i>icofont icofont-color-bucket
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-color-picker"></i>icofont icofont-color-picker
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-copy-alt"></i>icofont icofont-copy-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-copy-black"></i>icofont icofont-copy-black
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cut"></i>icofont icofont-cut
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-delete-alt"></i>icofont icofont-delete-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-edit-alt"></i>icofont icofont-edit-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-eraser-alt"></i>icofont icofont-eraser-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-file-alt"></i>icofont icofont-file-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-font"></i>icofont icofont-font
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-header"></i>icofont icofont-header
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-indent"></i>icofont icofont-indent
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-italic-alt"></i>icofont icofont-italic-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-justify-all"></i>icofont icofont-justify-all
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-justify-center"></i>icofont icofont-justify-center
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-justify-left"></i>icofont icofont-justify-left
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-justify-right"></i>icofont icofont-justify-right
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-line-height"></i>icofont icofont-line-height
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-link-alt"></i>icofont icofont-link-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-listine-dots"></i>icofont icofont-listine-dots
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-listing-box"></i>icofont icofont-listing-box
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-listing-number"></i>icofont icofont-listing-number
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-marker"></i>icofont icofont-marker
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-outdent"></i>icofont icofont-outdent
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-paper-clip"></i>icofont icofont-paper-clip
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-paragraph"></i>icofont icofont-paragraph
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-pin"></i>icofont icofont-pin
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-printer"></i>icofont icofont-printer
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-redo"></i>icofont icofont-redo
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-rotation"></i>icofont icofont-rotation
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-save"></i>icofont icofont-save
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-small-cap"></i>icofont icofont-small-cap
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-strike-through"></i>icofont icofont-strike-through
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-sub-listing"></i>icofont icofont-sub-listing
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-subscript"></i>icofont icofont-subscript
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-superscript"></i>icofont icofont-superscript
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-table"></i>icofont icofont-table
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-text-height"></i>icofont icofont-text-height
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-text-width"></i>icofont icofont-text-width
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-trash"></i>icofont icofont-trash
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-underline"></i>icofont icofont-underline
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-undo"></i>icofont icofont-undo
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-unlink"></i>icofont icofont-unlink
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Text Editor [51 Icons] end -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <!-- Transport [54 Icons] Start -->
                        <div class="card">
                            <div class="card-header">
                                <h5>TRANSPORT [54 ICONS]</h5>
                                
                                
                            </div>
                            <div class="card-block">
                                <div class="data-table-main icon-list-demo">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-air-balloon"></i>icofont icofont-air-balloon
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-airplane"></i>icofont icofont-airplane
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-airplane-alt"></i>icofont icofont-airplane-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-ambulance-crescent"></i>icofont icofont-ambulance-crescent
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-ambulance-cross"></i>icofont icofont-ambulance-cross
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-articulated-truck"></i>icofont icofont-articulated-truck
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-auto-rickshaw"></i>icofont icofont-auto-rickshaw
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-bicycle-alt-1"></i>icofont icofont-bicycle-alt-1
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-bicycle-alt-2"></i>icofont icofont-bicycle-alt-2
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-bull-dozer"></i>icofont icofont-bull-dozer
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-bus-alt-1"></i>icofont icofont-bus-alt-1
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-bus-alt-2"></i>icofont icofont-bus-alt-2
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-bus-alt-3"></i>icofont icofont-bus-alt-3
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cable-car"></i>icofont icofont-cable-car
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-car-alt-1"></i>icofont icofont-car-alt-1
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-car-alt-2"></i>icofont icofont-car-alt-2
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-car-alt-3"></i>icofont icofont-car-alt-3
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-car-alt-4"></i>icofont icofont-car-alt-4
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-concrete-mixer"></i>icofont icofont-concrete-mixer
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-delivery-time"></i>icofont icofont-delivery-time
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-excavator"></i>icofont icofont-excavator
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-fast-delivery"></i>icofont icofont-fast-delivery
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-fire-truck"></i>icofont icofont-fire-truck
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-fire-truck-alt"></i>icofont icofont-fire-truck-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-fork-lift"></i>icofont icofont-fork-lift
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-free-delivery"></i>icofont icofont-free-delivery
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-golf-cart"></i>icofont icofont-golf-cart
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-helicopter"></i>icofont icofont-helicopter
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-motor-bike"></i>icofont icofont-motor-bike
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-motor-bike-alt"></i>icofont icofont-motor-bike-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-motor-biker"></i>icofont icofont-motor-biker
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-oil-truck"></i>icofont icofont-oil-truck
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-police-car"></i>icofont icofont-police-car
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-rickshaw"></i>icofont icofont-rickshaw
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-rocket-alt-1"></i>icofont icofont-rocket-alt-1
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-rocket-alt-2"></i>icofont icofont-rocket-alt-2
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-sail-boat"></i>icofont icofont-sail-boat
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-scooter"></i>icofont icofont-scooter
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-sea-plane"></i>icofont icofont-sea-plane
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-ship-alt"></i>icofont icofont-ship-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-speed-boat"></i>icofont icofont-speed-boat
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-taxi"></i>icofont icofont-taxi
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-tow-truck"></i>icofont icofont-tow-truck
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-tractor"></i>icofont icofont-tractor
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-traffic-light"></i>icofont icofont-traffic-light
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-train-line"></i>icofont icofont-train-line
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-train-steam"></i>icofont icofont-train-steam
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-tram"></i>icofont icofont-tram
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-truck"></i>icofont icofont-truck
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-truck-alt"></i>icofont icofont-truck-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-truck-loaded"></i>icofont icofont-truck-loaded
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-van"></i>icofont icofont-van
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-van-alt"></i>icofont icofont-van-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-yacht"></i>icofont icofont-yacht
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Transport [54 Icons] end -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <!-- Travel [16 Icons] Start -->
                        <div class="card">
                            <div class="card-header">
                                <h5>TRAVEL [16 ICONS]</h5>
                                
                                
                            </div>
                            <div class="card-block">
                                <div class="data-table-main icon-list-demo">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-5-star-hotel"></i>icofont icofont-5-star-hotel
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-anchor-alt"></i>icofont icofont-anchor-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-beach-bed"></i>icofont icofont-beach-bed
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-camping-vest"></i>icofont icofont-camping-vest
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-coconut-alt"></i>icofont icofont-coconut-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-direction-sign"></i>icofont icofont-direction-sign
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-hill-side"></i>icofont icofont-hill-side
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-island-alt"></i>icofont icofont-island-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-long-drive"></i>icofont icofont-long-drive
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-map-pins"></i>icofont icofont-map-pins
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-plane-ticket"></i>icofont icofont-plane-ticket
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-sail-boat-alt-1"></i>icofont icofont-sail-boat-alt-1
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-sail-boat-alt-2"></i>icofont icofont-sail-boat-alt-2
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-sandals-female"></i>icofont icofont-sandals-female
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-sandals-male"></i>icofont icofont-sandals-male
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-travelling"></i>icofont icofont-travelling
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Travel [16 Icons] end -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <!-- Weather [81 Icons] Start -->
                        <div class="card">
                            <div class="card-header">
                                <h5>WEATHER [81 ICONS]</h5>
                                
                                
                            </div>
                            <div class="card-block">
                                <div class="data_table_main icon-list-demo">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-breakdown"></i>icofont icofont-breakdown
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-celsius"></i>icofont icofont-celsius
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-clouds"></i>icofont icofont-clouds
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cloudy"></i>icofont icofont-cloudy
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-compass-alt"></i>icofont icofont-compass-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-dust"></i>icofont icofont-dust
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-eclipse"></i>icofont icofont-eclipse
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-fahrenheit"></i>icofont icofont-fahrenheit
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-forest-fire"></i>icofont icofont-forest-fire
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-full-night"></i>icofont icofont-full-night
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-full-sunny"></i>icofont icofont-full-sunny
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-hail"></i>icofont icofont-hail
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-hail-night"></i>icofont icofont-hail-night
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-hail-rainy"></i>icofont icofont-hail-rainy
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-hail-rainy-night"></i>icofont icofont-hail-rainy-night
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-hail-rainy-sunny"></i>icofont icofont-hail-rainy-sunny
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-hail-sunny"></i>icofont icofont-hail-sunny
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-hail-thunder"></i>icofont icofont-hail-thunder
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-hail-thunder-night"></i>icofont icofont-hail-thunder-night
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-hail-thunder-sunny"></i>icofont icofont-hail-thunder-sunny
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-hill"></i>icofont icofont-hill
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-hill-night"></i>icofont icofont-hill-night
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-hill-sunny"></i>icofont icofont-hill-sunny
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-hurricane"></i>icofont icofont-hurricane
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-island"></i>icofont icofont-island
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-meteor"></i>icofont icofont-meteor
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-night"></i>icofont icofont-night
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-rainy"></i>icofont icofont-rainy
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-rainy-night"></i>icofont icofont-rainy-night
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-rainy-sunny"></i>icofont icofont-rainy-sunny
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-rainy-thunder"></i>icofont icofont-rainy-thunder
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-showy-night-hail"></i>icofont icofont-showy-night-hail
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-snow"></i>icofont icofont-snow
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-snow-temp"></i>icofont icofont-snow-temp
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-snowy"></i>icofont icofont-snowy
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-snowy-hail"></i>icofont icofont-snowy-hail
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-snowy-night"></i>icofont icofont-snowy-night
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-snowy-night-rainy"></i>icofont icofont-snowy-night-rainy
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-snowy-rainy"></i>icofont icofont-snowy-rainy
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-snowy-sunny"></i>icofont icofont-snowy-sunny
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-snowy-sunny-hail"></i>icofont icofont-snowy-sunny-hail
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-snowy-sunny-rainy"></i>icofont icofont-snowy-sunny-rainy
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-snowy-thunder"></i>icofont icofont-snowy-thunder
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-snowy-thunder-night"></i>icofont icofont-snowy-thunder-night
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-snowy-thunder-sunny"></i>icofont icofont-snowy-thunder-sunny
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-snowy-windy"></i>icofont icofont-snowy-windy
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-snowy-windy-night"></i>icofont icofont-snowy-windy-night
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-snowy-windy-sunny"></i>icofont icofont-snowy-windy-sunny
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-sun-alt"></i>icofont icofont-sun-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-sun-rise"></i>icofont icofont-sun-rise
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-sun-set"></i>icofont icofont-sun-set
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-sunny"></i>icofont icofont-sunny
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-sunny-day-temp"></i>icofont icofont-sunny-day-temp
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-thermometer"></i>icofont icofont-thermometer
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-thinder-light"></i>icofont icofont-thinder-light
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-tornado"></i>icofont icofont-tornado
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-umbrella-alt"></i>icofont icofont-umbrella-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-volcano"></i>icofont icofont-volcano
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-wave"></i>icofont icofont-wave
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-wind"></i>icofont icofont-wind
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-wind-scale-0"></i>icofont icofont-wind-scale-0
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-wind-scale-1"></i>icofont icofont-wind-scale-1
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-wind-scale-10"></i>icofont icofont-wind-scale-10
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-wind-scale-11"></i>icofont icofont-wind-scale-11
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-wind-scale-12"></i>icofont icofont-wind-scale-12
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-wind-scale-2"></i>icofont icofont-wind-scale-2
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-wind-scale-3"></i>icofont icofont-wind-scale-3
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-wind-scale-4"></i>icofont icofont-wind-scale-4
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-wind-scale-5"></i>icofont icofont-wind-scale-5
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-wind-scale-6"></i>icofont icofont-wind-scale-6
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-wind-scale-7"></i>icofont icofont-wind-scale-7
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-wind-scale-8"></i>icofont icofont-wind-scale-8
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-wind-scale-9"></i>icofont icofont-wind-scale-9
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-wind-waves"></i>icofont icofont-wind-waves
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-windy"></i>icofont icofont-windy
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-windy-hail"></i>icofont icofont-windy-hail
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-windy-night"></i>icofont icofont-windy-night
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-windy-raining"></i>icofont icofont-windy-raining
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-windy-sunny"></i>icofont icofont-windy-sunny
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-windy-thunder"></i>icofont icofont-windy-thunder
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-windy-thunder-raining"></i>icofont icofont-windy-thunder-raining
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- WEATHER [81 ICONS] end -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <!-- Web Application [433 Icons] Start -->
                        <div class="card">
                            <div class="card-header">
                                <h5>WEB APPLICATION [433 ICONS]</h5>
                                
                                
                            </div>
                            <div class="card-block">
                                <div class="data-table-main icon-list-demo">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-addons"></i>icofont icofont-addons
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-address-book"></i>icofont icofont-address-book
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-adjust"></i>icofont icofont-adjust
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-alarm"></i>icofont icofont-alarm
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-anchor"></i>icofont icofont-anchor
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-archive"></i>icofont icofont-archive
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-at"></i>icofont icofont-at
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-attachment"></i>icofont icofont-attachment
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-audio"></i>icofont icofont-audio
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-auto-mobile"></i>icofont icofont-auto-mobile
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-automation"></i>icofont icofont-automation
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-baby"></i>icofont icofont-baby
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-badge"></i>icofont icofont-badge
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-bag"></i>icofont icofont-bag
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-ban"></i>icofont icofont-ban
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-bank"></i>icofont icofont-bank
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-bar-code"></i>icofont icofont-bar-code
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-bars"></i>icofont icofont-bars
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-battery-empty"></i>icofont icofont-battery-empty
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-battery-full"></i>icofont icofont-battery-full
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-battery-half"></i>icofont icofont-battery-half
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-battery-low"></i>icofont icofont-battery-low
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-beach"></i>icofont icofont-beach
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-beaker"></i>icofont icofont-beaker
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-bear"></i>icofont icofont-bear
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-beard"></i>icofont icofont-beard
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-bed"></i>icofont icofont-bed
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-bell"></i>icofont icofont-bell
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-beverage"></i>icofont icofont-beverage
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-bicycle"></i>icofont icofont-bicycle
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-bill"></i>icofont icofont-bill
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-bin"></i>icofont icofont-bin
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-binary"></i>icofont icofont-binary
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-binoculars"></i>icofont icofont-binoculars
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-bird"></i>icofont icofont-bird
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-birds"></i>icofont icofont-birds
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-black-board"></i>icofont icofont-black-board
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-bluetooth"></i>icofont icofont-bluetooth
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-bolt"></i>icofont icofont-bolt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-bomb"></i>icofont icofont-bomb
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-book"></i>icofont icofont-book
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-book-mark"></i>icofont icofont-book-mark
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-book-mark"></i>icofont icofont-book-mark
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-boot"></i>icofont icofont-boot
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-box"></i>icofont icofont-box
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-brain"></i>icofont icofont-brain
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-briefcase"></i>icofont icofont-briefcase
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-broken"></i>icofont icofont-broken
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-bucket"></i>icofont icofont-bucket
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-bucket1"></i>icofont icofont-bucket1
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-bucket2"></i>icofont icofont-bucket2
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-bug"></i>icofont icofont-bug
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-building"></i>icofont icofont-building
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-bullet"></i>icofont icofont-bullet
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-bullhorn"></i>icofont icofont-bullhorn
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-bullseye"></i>icofont icofont-bullseye
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-bus"></i>icofont icofont-bus
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-butterfly"></i>icofont icofont-butterfly
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cab"></i>icofont icofont-cab
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-calculator"></i>icofont icofont-calculator
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-calendar"></i>icofont icofont-calendar
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-camera"></i>icofont icofont-camera
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-camera-alt"></i>icofont icofont-camera-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-car"></i>icofont icofont-car
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-card"></i>icofont icofont-card
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cart"></i>icofont icofont-cart
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cc"></i>icofont icofont-cc
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-certificate"></i>icofont icofont-certificate
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-charging"></i>icofont icofont-charging
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-chat"></i>icofont icofont-chat
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-check"></i>icofont icofont-check
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-check-alt"></i>icofont icofont-check-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-check-circled"></i>icofont icofont-check-circled
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-checked"></i>icofont icofont-checked
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-children-care"></i>icofont icofont-children-care
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-clock-time"></i>icofont icofont-clock-time
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-close"></i>icofont icofont-close
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-close-circled"></i>icofont icofont-close-circled
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-close-line"></i>icofont icofont-close-line
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-close-line-circled"></i>icofont icofont-close-line-circled
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-close-line-squared"></i>icofont icofont-close-line-squared
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-close-line-squared-alt"></i>icofont icofont-close-line-squared-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-close-squared"></i>icofont icofont-close-squared
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-close-squared-alt"></i>icofont icofont-close-squared-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cloud"></i>icofont icofont-cloud
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cloud-download"></i>icofont icofont-cloud-download
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cloud-refresh"></i>icofont icofont-cloud-refresh
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cloud-upload"></i>icofont icofont-cloud-upload
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-code"></i>icofont icofont-code
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-code-not-allowed"></i>icofont icofont-code-not-allowed
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-coffee-cup"></i>icofont icofont-coffee-cup
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-comment"></i>icofont icofont-comment
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-compass"></i>icofont icofont-compass
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-computer"></i>icofont icofont-computer
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-connection"></i>icofont icofont-connection
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-console"></i>icofont icofont-console
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-contacts"></i>icofont icofont-contacts
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-contrast"></i>icofont icofont-contrast
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-copy"></i>icofont icofont-copy
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-copyright"></i>icofont icofont-copyright
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-credit-card"></i>icofont icofont-credit-card
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-crop"></i>icofont icofont-crop
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-crown"></i>icofont icofont-crown
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cube"></i>icofont icofont-cube
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-cubes"></i>icofont icofont-cubes
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-culinary"></i>icofont icofont-culinary
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-dashboard"></i>icofont icofont-dashboard
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-dashboard-web"></i>icofont icofont-dashboard-web
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-data"></i>icofont icofont-data
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-database"></i>icofont icofont-database
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-database-add"></i>icofont icofont-database-add
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-database-locked"></i>icofont icofont-database-locked
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-database-remove"></i>icofont icofont-database-remove
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-delete"></i>icofont icofont-delete
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-diamond"></i>icofont icofont-diamond
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-dice"></i>icofont icofont-dice
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-disabled"></i>icofont icofont-disabled
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-disc"></i>icofont icofont-disc
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-diskette"></i>icofont icofont-diskette
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-document-folder"></i>icofont icofont-document-folder
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-download"></i>icofont icofont-download
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-download-alt"></i>icofont icofont-download-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-downloaded"></i>icofont icofont-downloaded
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-earth"></i>icofont icofont-earth
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-ebook"></i>icofont icofont-ebook
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-edit"></i>icofont icofont-edit
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-eject"></i>icofont icofont-eject
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-email"></i>icofont icofont-email
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-envelope"></i>icofont icofont-envelope
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-envelope-open"></i>icofont icofont-envelope-open
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-eraser"></i>icofont icofont-eraser
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-error"></i>icofont icofont-error
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-exchange"></i>icofont icofont-exchange
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-exclamation"></i>icofont icofont-exclamation
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-exclamation-circle"></i>icofont icofont-exclamation-circle
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-exclamation-square"></i>icofont icofont-exclamation-square
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-exclamation-tringle"></i>icofont icofont-exclamation-tringle
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-exit"></i>icofont icofont-exit
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-expand"></i>icofont icofont-expand
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-external"></i>icofont icofont-external
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-external-link"></i>icofont icofont-external-link
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-eye"></i>icofont icofont-eye
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-eye-blocked"></i>icofont icofont-eye-blocked
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-eye-dropper"></i>icofont icofont-eye-dropper
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-favourite"></i>icofont icofont-favourite
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-fax"></i>icofont icofont-fax
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-female"></i>icofont icofont-female
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-file"></i>icofont icofont-file
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-film"></i>icofont icofont-film
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-filter"></i>icofont icofont-filter
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-fire"></i>icofont icofont-fire
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-fire-burn"></i>icofont icofont-fire-burn
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-fire-extinguisher"></i>icofont icofont-fire-extinguisher
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-first-aid"></i>icofont icofont-first-aid
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-flag"></i>icofont icofont-flag
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-flag-alt-1"></i>icofont icofont-flag-alt-1
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-flag-alt-2"></i>icofont icofont-flag-alt-2
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-flash"></i>icofont icofont-flash
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-flash-light"></i>icofont icofont-flash-light
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-flask"></i>icofont icofont-flask
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-focus"></i>icofont icofont-focus
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-folder"></i>icofont icofont-folder
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-folder-open"></i>icofont icofont-folder-open
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-foot-print"></i>icofont icofont-foot-print
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-football"></i>icofont icofont-football
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-football-american"></i>icofont icofont-football-american
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-game-console"></i>icofont icofont-game-console
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-game-pad"></i>icofont icofont-game-pad
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-gavel"></i>icofont icofont-gavel
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-gear"></i>icofont icofont-gear
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-gears"></i>icofont icofont-gears
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-gift"></i>icofont icofont-gift
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-glass"></i>icofont icofont-glass
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-globe"></i>icofont icofont-globe
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-graduate"></i>icofont icofont-graduate
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-graffiti"></i>icofont icofont-graffiti
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-grocery"></i>icofont icofont-grocery
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-group"></i>icofont icofont-group
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-hammer"></i>icofont icofont-hammer
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-hand"></i>icofont icofont-hand
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-hanger"></i>icofont icofont-hanger
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-hard-disk"></i>icofont icofont-hard-disk
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-headphone"></i>icofont icofont-headphone
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-heart"></i>icofont icofont-heart
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-heart-beat"></i>icofont icofont-heart-beat
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-history"></i>icofont icofont-history
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-home"></i>icofont icofont-home
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-horn"></i>icofont icofont-horn
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-hotel"></i>icofont icofont-hotel
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-hour-glass"></i>icofont icofont-hour-glass
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-id"></i>icofont icofont-id
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-image"></i>icofont icofont-image
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-inbox"></i>icofont icofont-inbox
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-infinite"></i>icofont icofont-infinite
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-info"></i>icofont icofont-info
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-info-circle"></i>icofont icofont-info-circle
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-info-square"></i>icofont icofont-info-square
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-institution"></i>icofont icofont-institution
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-interface"></i>icofont icofont-interface
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-invisible"></i>icofont icofont-invisible
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-italic"></i>icofont icofont-italic
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-jacket"></i>icofont icofont-jacket
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-jar"></i>icofont icofont-jar
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-jewlery"></i>icofont icofont-jewlery
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-karate"></i>icofont icofont-karate
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-key"></i>icofont icofont-key
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-key-hole"></i>icofont icofont-key-hole
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-keyboard"></i>icofont icofont-keyboard
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-kid"></i>icofont icofont-kid
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-label"></i>icofont icofont-label
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-lamp"></i>icofont icofont-lamp
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-laptop"></i>icofont icofont-laptop
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-layers"></i>icofont icofont-layers
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-layout"></i>icofont icofont-layout
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-leaf"></i>icofont icofont-leaf
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-leaflet"></i>icofont icofont-leaflet
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-learn"></i>icofont icofont-learn
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-legal"></i>icofont icofont-legal
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-lego"></i>icofont icofont-lego
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-lemon"></i>icofont icofont-lemon
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-lens"></i>icofont icofont-lens
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-letter"></i>icofont icofont-letter
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-letterbox"></i>icofont icofont-letterbox
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-library"></i>icofont icofont-library
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-license"></i>icofont icofont-license
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-life-bouy"></i>icofont icofont-life-bouy
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-life-buoy"></i>icofont icofont-life-buoy
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-life-jacket"></i>icofont icofont-life-jacket
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-life-ring"></i>icofont icofont-life-ring
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-light-bulb"></i>icofont icofont-light-bulb
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-lighter"></i>icofont icofont-lighter
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-lightning-ray"></i>icofont icofont-lightning-ray
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-like"></i>icofont icofont-like
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-link"></i>icofont icofont-link
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-live-support"></i>icofont icofont-live-support
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-location-arrow"></i>icofont icofont-location-arrow
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-location-pin"></i>icofont icofont-location-pin
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-lock"></i>icofont icofont-lock
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-login"></i>icofont icofont-login
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-logout"></i>icofont icofont-logout
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-lollipop"></i>icofont icofont-lollipop
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-look"></i>icofont icofont-look
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-loop"></i>icofont icofont-loop
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-luggage"></i>icofont icofont-luggage
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-lunch"></i>icofont icofont-lunch
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-lungs"></i>icofont icofont-lungs
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-magic"></i>icofont icofont-magic
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-magic-alt"></i>icofont icofont-magic-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-magnet"></i>icofont icofont-magnet
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-mail"></i>icofont icofont-mail
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-mail-box"></i>icofont icofont-mail-box
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-male"></i>icofont icofont-male
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-map"></i>icofont icofont-map
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-math"></i>icofont icofont-math
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-maximize"></i>icofont icofont-maximize
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-measure"></i>icofont icofont-measure
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-medal"></i>icofont icofont-medal
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-medical"></i>icofont icofont-medical
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-medicine"></i>icofont icofont-medicine
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-mega-phone"></i>icofont icofont-mega-phone
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-memorial"></i>icofont icofont-memorial
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-memory-card"></i>icofont icofont-memory-card
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-mic"></i>icofont icofont-mic
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-mic-mute"></i>icofont icofont-mic-mute
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-micro-chip"></i>icofont icofont-micro-chip
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-microphone"></i>icofont icofont-microphone
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-microscope"></i>icofont icofont-microscope
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-military"></i>icofont icofont-military
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-mill"></i>icofont icofont-mill
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-minus"></i>icofont icofont-minus
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-minus-circle"></i>icofont icofont-minus-circle
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-minus-square"></i>icofont icofont-minus-square
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-mobile-phone"></i>icofont icofont-mobile-phone
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-molecule"></i>icofont icofont-molecule
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-money"></i>icofont icofont-money
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-moon"></i>icofont icofont-moon
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-mop"></i>icofont icofont-mop
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-muffin"></i>icofont icofont-muffin
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-music"></i>icofont icofont-music
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-music-alt"></i>icofont icofont-music-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-music-notes"></i>icofont icofont-music-notes
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-mustache"></i>icofont icofont-mustache
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-mute-volume"></i>icofont icofont-mute-volume
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-navigation"></i>icofont icofont-navigation
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-navigation-menu"></i>icofont icofont-navigation-menu
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-network"></i>icofont icofont-network
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-network-tower"></i>icofont icofont-network-tower
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-news"></i>icofont icofont-news
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-newspaper"></i>icofont icofont-newspaper
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-no-smoking"></i>icofont icofont-no-smoking
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-not-allowed"></i>icofont icofont-not-allowed
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-notebook"></i>icofont icofont-notebook
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-notepad"></i>icofont icofont-notepad
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-notification"></i>icofont icofont-notification
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-numbered"></i>icofont icofont-numbered
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-opposite"></i>icofont icofont-opposite
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-optic"></i>icofont icofont-optic
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-options"></i>icofont icofont-options
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-package"></i>icofont icofont-package
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-page"></i>icofont icofont-page
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-paint"></i>icofont icofont-paint
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-paper-plane"></i>icofont icofont-paper-plane
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-paperclip"></i>icofont icofont-paperclip
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-papers"></i>icofont icofont-papers
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-paw"></i>icofont icofont-paw
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-pay"></i>icofont icofont-pay
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-pen"></i>icofont icofont-pen
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-pencil"></i>icofont icofont-pencil
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-penguin-linux"></i>icofont icofont-penguin-linux
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-pestle"></i>icofont icofont-pestle
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-phone"></i>icofont icofont-phone
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-phone-circle"></i>icofont icofont-phone-circle
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-picture"></i>icofont icofont-picture
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-pie"></i>icofont icofont-pie
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-pine"></i>icofont icofont-pine
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-pixels"></i>icofont icofont-pixels
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-play"></i>icofont icofont-play
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-plugin"></i>icofont icofont-plugin
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-plus"></i>icofont icofont-plus
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-plus-circle"></i>icofont icofont-plus-circle
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-plus-square"></i>icofont icofont-plus-square
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-polygonal"></i>icofont icofont-polygonal
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-power"></i>icofont icofont-power
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-presentation"></i>icofont icofont-presentation
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-price"></i>icofont icofont-price
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-print"></i>icofont icofont-print
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-puzzle"></i>icofont icofont-puzzle
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-qr-code"></i>icofont icofont-qr-code
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-queen"></i>icofont icofont-queen
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-question"></i>icofont icofont-question
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-question-circle"></i>icofont icofont-question-circle
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-question-square"></i>icofont icofont-question-square
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-quote-left"></i>icofont icofont-quote-left
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-quote-right"></i>icofont icofont-quote-right
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-radio"></i>icofont icofont-radio
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-random"></i>icofont icofont-random
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-recycle"></i>icofont icofont-recycle
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-refresh"></i>icofont icofont-refresh
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-repair"></i>icofont icofont-repair
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-reply"></i>icofont icofont-reply
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-reply-all"></i>icofont icofont-reply-all
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-resize"></i>icofont icofont-resize
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-responsive"></i>icofont icofont-responsive
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-retweet"></i>icofont icofont-retweet
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-road"></i>icofont icofont-road
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-robot"></i>icofont icofont-robot
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-rocket"></i>icofont icofont-rocket
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-royal"></i>icofont icofont-royal
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-rss-feed"></i>icofont icofont-rss-feed
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-safety"></i>icofont icofont-safety
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-sale-discount"></i>icofont icofont-sale-discount
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-satellite"></i>icofont icofont-satellite
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-send-mail"></i>icofont icofont-send-mail
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-server"></i>icofont icofont-server
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-settings"></i>icofont icofont-settings
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-share"></i>icofont icofont-share
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-share-alt"></i>icofont icofont-share-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-share-boxed"></i>icofont icofont-share-boxed
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-shield"></i>icofont icofont-shield
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-ship"></i>icofont icofont-ship
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-shopping-cart"></i>icofont icofont-shopping-cart
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-sign-in"></i>icofont icofont-sign-in
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-sign-out"></i>icofont icofont-sign-out
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-signal"></i>icofont icofont-signal
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-site-map"></i>icofont icofont-site-map
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-smart-phone"></i>icofont icofont-smart-phone
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-soccer"></i>icofont icofont-soccer
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-sort"></i>icofont icofont-sort
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-sort-alt"></i>icofont icofont-sort-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-space"></i>icofont icofont-space
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-spanner"></i>icofont icofont-spanner
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-speech-comments"></i>icofont icofont-speech-comments
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-speed-meter"></i>icofont icofont-speed-meter
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-spinner"></i>icofont icofont-spinner
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-spinner-alt-1"></i>icofont icofont-spinner-alt-1
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-spinner-alt-2"></i>icofont icofont-spinner-alt-2
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-spinner-alt-3"></i>icofont icofont-spinner-alt-3
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-spinner-alt-4"></i>icofont icofont-spinner-alt-4
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-spinner-alt-5"></i>icofont icofont-spinner-alt-5
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-spinner-alt-6"></i>icofont icofont-spinner-alt-6
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-spreadsheet"></i>icofont icofont-spreadsheet
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-square"></i>icofont icofont-square
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-ssl-security"></i>icofont icofont-ssl-security
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-star"></i>icofont icofont-star
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-star-alt-1"></i>icofont icofont-star-alt-1
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-star-alt-2"></i>icofont icofont-star-alt-2
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-street-view"></i>icofont icofont-street-view
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-sun"></i>icofont icofont-sun
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-support-faq"></i>icofont icofont-support-faq
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-tack-pin"></i>icofont icofont-tack-pin
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-tag"></i>icofont icofont-tag
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-tags"></i>icofont icofont-tags
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-tasks"></i>icofont icofont-tasks
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-telephone"></i>icofont icofont-telephone
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-telescope"></i>icofont icofont-telescope
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-terminal"></i>icofont icofont-terminal
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-thumbs-down"></i>icofont icofont-thumbs-down
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-thumbs-up"></i>icofont icofont-thumbs-up
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-tick-boxed"></i>icofont icofont-tick-boxed
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-tick-mark"></i>icofont icofont-tick-mark
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-ticket"></i>icofont icofont-ticket
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-tie"></i>icofont icofont-tie
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-toggle-off"></i>icofont icofont-toggle-off
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-toggle-on"></i>icofont icofont-toggle-on
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-tools"></i>icofont icofont-tools
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-transparent"></i>icofont icofont-transparent
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-tree"></i>icofont icofont-tree
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-umbrella"></i>icofont icofont-umbrella
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-unlock"></i>icofont icofont-unlock
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-unlocked"></i>icofont icofont-unlocked
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-upload"></i>icofont icofont-upload
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-upload-alt"></i>icofont icofont-upload-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-usb"></i>icofont icofont-usb
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-usb-drive"></i>icofont icofont-usb-drive
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-vector-path"></i>icofont icofont-vector-path
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-verification-check"></i>icofont icofont-verification-check
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-video"></i>icofont icofont-video
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-video-clapper"></i>icofont icofont-video-clapper
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-volume-down"></i>icofont icofont-volume-down
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-volume-off"></i>icofont icofont-volume-off
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-volume-up"></i>icofont icofont-volume-up
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-wall"></i>icofont icofont-wall
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-wall-clock"></i>icofont icofont-wall-clock
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-wallet"></i>icofont icofont-wallet
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-warning"></i>icofont icofont-warning
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-warning-alt"></i>icofont icofont-warning-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-water-drop"></i>icofont icofont-water-drop
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-web"></i>icofont icofont-web
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-wheelchair"></i>icofont icofont-wheelchair
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-wifi"></i>icofont icofont-wifi
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-wifi-alt"></i>icofont icofont-wifi-alt
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-world"></i>icofont icofont-world
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-zigzag"></i>icofont icofont-zigzag
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-6 outer-ellipsis"><i class="icofont icofont-zipped"></i>icofont icofont-zipped
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Web Application [433 Icons] end -->
                    </div>
                </div>
                <!-- Modal start-->
                <div class="modal fade modal-icon" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel">Ion Icons</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <div class="icon-list-demo">
                                            <i id="icon" class="fa fa-wpbeginner fa-lg"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            Name
                                            <input class="form-control" type="text" id="name" value="fa fa-wpbeginner">
                                        </div>
                                        <div class="form-group">
                                            Code
                                            <input class="form-control" type="text" id="code" value='<i class="fa fa-wpbeginner"></i>'>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal end -->
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>