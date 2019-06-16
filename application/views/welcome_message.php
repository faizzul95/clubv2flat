<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>CMS | Website</title>
    <!-- Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Landing page template for creative dashboard">
    <meta name="keywords" content="Landing page template">
	<!-- Favicon icon -->
	<link rel="icon" href="<?= base_url(); ?>/vendor/landingpage/assets/logos/favicon.ico" type="image/png" sizes="16x16">
	<!-- Bootstrap -->
    <link href="<?= base_url(); ?>/vendor/landingpage/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,300,500,700,600" rel="stylesheet" type="text/css">
	<!-- Animate CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>/vendor/landingpage/assets/css/animate.css">
	<!-- Owl Carousel -->
    <link rel="stylesheet" href="<?= base_url(); ?>/vendor/landingpage/assets/css/owl.carousel.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/vendor/landingpage/assets/css/owl.theme.css">
	<!-- Magnific Popup -->
    <link rel="stylesheet" href="<?= base_url(); ?>/vendor/landingpage/assets/css/magnific-popup.css">
	<!-- Full Page Animation -->
    <link rel="stylesheet" href="<?= base_url(); ?>/vendor/landingpage/assets/css/animsition.min.css">
	<!-- Ionic Icons -->
    <link rel="stylesheet" href="<?= base_url(); ?>/vendor/landingpage/assets/css/ionicons.min.css"> 
    <!-- sweet alert framework -->
  <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/vendor/bower_components/sweetalert/dist/sweetalert.css">
	<!-- Main Style css -->
    <link href="<?= base_url(); ?>/vendor/landingpage/assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
  </head>
  <body>
    <div class="wrapper animsition" data-animsition-in-class="fade-in"
      data-animsition-in-duration="1000"
      data-animsition-out-class="fade-out"
      data-animsition-out-duration="1000">
        <div class="container">
          <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
          <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
              <a class="navbar-brand page-scroll" href="#main"><img src="<?= base_url(); ?>/assets/image/kembara1.png" alt="Flat Able Logo" /></a>
              </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a class="page-scroll" href="#main">Home</a></li>
                    <li><a class="page-scroll" href="#services">About</a></li>
                    <li><a class="page-scroll" href="#features">Activity</a></li>
                    <li><a class="page-scroll" href="auth/register">Register</a></li>
                    <li><a class="page-scroll" href="auth">Login</a></li>
                </ul>
            </div>
          </div>
        </nav><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->

    <div class="main" id="main"><!-- Main Section-->
      <div class="hero-section app-hero">
        <div class="container">
          <div class="hero-content app-hero-content text-center">
            <div class="col-md-10 col-md-offset-1 nopadding">
                <h1 class="wow fadeInUp" data-wow-delay="0s">Welcome to Kelab Kembara</h1>
                <p class="wow fadeInUp" data-wow-delay="0.2s">
                  Already register with us ? <br class="hidden-xs"> Check your application here.
                </p>
                  <?php  echo  form_open('index.php/application/checkApp'); ?>
                    <div class ='subscribe-form'>
                    <input class="mail" type="text" name="checkApp" placeholder="Enter Application ID" required autocomplete="off">
                    <input class="submit-button" type="submit" value="Check Application Now">
                    </div>
                  <?php echo form_close(); ?>
            </div>
          <div class="col-md-12">
            <div class="hero-image">
              <img class="img-responsive" src="" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>

      <div class="services-section text-center" id="services"><!-- Services section (small) with icons -->
        <div class="container">
          <div class="col-md-8 col-md-offset-2 nopadding">
          <div class="services-content">
            <h1 class="wow fadeInUp" data-wow-delay="0s">About Us</h1>
            <p class="wow fadeInUp" data-wow-delay="0.2s">
              This club exists to provide a platform for those who are passionate about outdoor activities to explore nature. We aim to create awareness about the importance of taking care of mother nature and spark interest among students of UTIM,Perlis in outdoor activities.
            </p>
          </div>
        </div>
          <div class="col-md-12 text-center">
          <div class="services">
            <div class="col-sm-3 wow fadeInUp" data-wow-delay="0.2s">
              <div>
                <img src="<?= base_url(); ?>/assets/image/group_member/MOHD FAHMY IZWAN BIN ZULKHAFRI.png" height="150" width="150" alt="Team Leader" />
              </div>
              <div class="services-description">
                <h1>MOHD FAHMY IZWAN BIN ZULKHAFRI</h1>
                <p>
                 2016758447
                </p>
              </div>
            </div>
            <div class="col-sm-3 wow fadeInUp" data-wow-delay="0.3s">
              <div>
                <img class="icon-2" src="<?= base_url(); ?>/assets/image/group_member/MUHAMMAD SYAMIM BIN SAMSUDIN.png" height="150" width="150"/>
              </div>
              <div class="services-description">
                <h1>MUHAMMAD SYAMIM BIN SAMSUDIN</h1>
                <p>
                2016579163
                </p>
              </div>
            </div>
            <div class="col-sm-3 wow fadeInUp" data-wow-delay="0.4s">
              <div>
                <img class="icon-3" src="<?= base_url(); ?>/assets/image/group_member/AMRULLAH BIN ABDUL RAHMAN.png" height="150" width="150" />
              </div>
              <div class="services-description">
                <h1>AMRULLAH BIN ABDUL RAHMAN</h1>
                <p>
                  2016552759
                </p>
              </div>
            </div>
            <div class="col-sm-3 wow fadeInUp" data-wow-delay="0.4s">
              <div>
                <img class="icon-3" src="<?= base_url(); ?>/assets/image/group_member/NOR FAEZAH BINTI ABDUL RAZAK.png" height="150" width="150" />
              </div>
              <div class="services-description">
                <h1>NOR FAEZAH BINTI ABDUL RAZAK</h1>
                <p>
                 2016559597
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  <div class="flex-features" id="features">
    <div class="container nopadding">
      <div class="flex-split"><!-- Feature section with flex layout -->
        <div class="f-left wow fadeInUp" data-wow-delay="0s">
          <div class="left-content">
            <img class="img-responsive" src="<?= base_url(); ?>/vendor/landingpage/assets/images/kayak.png" alt="" />
          </div>
        </div>
        <div class="f-right wow fadeInUp" data-wow-delay="0.2s">
          <div class="right-content">
            <h2>Kayak</h2>
            <p>
              Kayak is one of the most exciting sports or recreational activities.
              Activities carried out in juicy areas such as lakes, waterfalls, ponds, rivers, rapids and seas. The most important thing in following a water adventure is safety. To keep up with water activities, safety jackets are important as they are one of the mediums of rescue to individuals.
            </p>
          </div>
        </div>
      </div>

      <div class="flex-split"><!-- Feature section with flex layout -->

        <div class="f-right">
          <div class="right-content wow fadeInUp" data-wow-delay="0.2s">
            <h2>Mountain Climbing</h2>
            <p>
				       Mountain Climbing involve hiking, rock climbing, as well as crossing glaciers. Mountain climbers use the strength of their arms and legs to climb up mountains. Many mountain climbers use ropes and wear special shoes and safety equipment.
            </p>
            <ul>
              <p>The place to climb:<p>
              <li><i class="ion-android-checkbox-outline"></i>Bukit Tabur, Kuala Lumpur</li>
              <li><i class="ion-android-checkbox-outline"></i>Gunung Kinabali, Sabah</li>
            </ul>  
          </div>
        </div>
        <div class="f-left">
          <div class="left-content wow fadeInUp" data-wow-delay="0.3s">
            <img class="img-responsive" src="<?= base_url(); ?>assets\image\club_activity\gunung.png" alt="" />
          </div>
        </div>
      </div>

      <div class="flex-split"><!-- Feature section with flex layout -->
        <div class="f-left wow fadeInUp" data-wow-delay="0.4s">
          <div class="left-content">
            <img class="img-responsive" src="<?= base_url(); ?>assets\image\club_activity\snorkeling.png" alt="" />
          </div>
        </div>
        <div class="f-right wow fadeInUp" data-wow-delay="0.2s">
          <div class="right-content">
            <h2>Snorkeling</h2>
            <p>
              Practice of swimming on or through a body of water while equipped with a diving mask, a shaped breathing tube called a snorkel, and usually swimfins. In cooler waters, a wetsuit may also be worn. Use of this equipment allows the snorkeler to observe underwater attractions for extended periods with relatively little effort and to breathe while face-down at the surface.
            </p>
          </div>
        </div>
      </div>

    </div>
  </div>

     <!-- Counter Section -->
      <div class="counter-section">
        <div class="container">
          <div class="row text-center">
          <div class="col-sm-3 col-xs-6">
            <div class="counter-up">
              <div class="counter-icon">
                <i class="ion-android-download"></i>
              </div>
              <h3><span class="counter">
                 <?php 
                    $query = $this->db->query('SELECT * FROM activity WHERE act_category = "guest"');
                    echo $query->num_rows(); 
                ?>
              </span></h3>
              <div class="counter-text">
                <h4>Public Activity</h4>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-xs-6">
            <div class="counter-up">
              <div class="counter-icon">
                <i class="ion-cube"></i>
              </div>
              <h3><span class="counter">
                <?php 
                    $query = $this->db->query('SELECT * FROM activity WHERE act_category = "member"');
                    echo $query->num_rows(); 
                ?></span></h3>
              <div class="counter-text">
                <h4>Member Activity</h4>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-xs-6">
            <div class="counter-up">
              <div class="counter-icon">
                <i class="ion-ios-people"></i>
              </div>
              <h3><span class="counter">
                <?php 
                    $query = $this->db->query('SELECT * FROM user WHERE usr_role = "member" && usr_status = "active"');
                    echo $query->num_rows(); 
                ?>
              </span></h3>
              <div class="counter-text">
                <h4>Members</h4>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-xs-6">
            <div class="counter-up">
              <div class="counter-icon">
                <i class="ion-ios-paper"></i>
              </div>
              <h3><span class="counter">80</span>+</h3>
              <div class="counter-text">
                <h4>Achievement</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Counter Section Ends -->

<!-- Footer Section -->
  <div class="footer">
    <div class="container">
        <div class="col-md-12 text-center">
          <!-- <img src="<?= base_url(); ?>/vendor/landingpage/assets/logos/logo.png" alt="Flat Able Logo" /> -->
        <div class="footer-text">
          <p>
            Copyright © 2019 Club Management System.
          </p>
        </div>
      </div>
      </div>
    </div>

  <!-- Scroll To Top -->

    <a id="back-top" class="back-to-top page-scroll" href="#main">
    <i class="ion-ios-arrow-thin-up"></i>
    </a>
  <!-- Scroll To Top Ends-->
    </div><!-- Main Section -->
  </div><!-- Wrapper-->

<!-- Jquery and Js Plugins -->
  <script type="text/javascript" src="<?= base_url(); ?>/vendor/landingpage/assets/js/jquery-2.1.1.js"></script>
  <script type="text/javascript" src="<?= base_url(); ?>/vendor/landingpage/assets/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="<?= base_url(); ?>/vendor/landingpage/assets/js/plugins.js"></script>
  <script type="text/javascript" src="<?= base_url(); ?>/vendor/landingpage/assets/js/menu.js"></script>
  <script type="text/javascript" src="<?= base_url(); ?>/vendor/landingpage/assets/js/custom.js"></script>
  <script type="text/javascript" src="../../../../../vendor/landingpage/assets/js/script.js"></script>
   <!-- sweet alert modal.js intialize js -->
   <!-- sweet alert js -->
  <script type="text/javascript" src="<?= base_url(); ?>/vendor/bower_components/sweetalert/dist/sweetalert.min.js"></script>
  <script type="text/javascript" src="<?= base_url(); ?>/vendor/assets/js/modal.js"></script>
  <!-- modalEffects js nifty modal window effects -->
  <script type="text/javascript" src="<?= base_url(); ?>/vendor/assets/js/modalEffects.js"></script>
  <script type="text/javascript" src="<?= base_url(); ?>/vendor/assets/js/classie.js"></script>

   <?php if ($this->session->flashdata('message')) { ?>
             <?php if ($this->session->flashdata('message') == "Your application have been approve.") { ?>
                 <script type="text/javascript">
                   swal({
                        title: "Congratulation !",
                        text: '<?= $this->session->flashdata('message')?>',
                        timer: 4000,
                        showConfirmButton: true,
                        allowOutsideClick: true,
                        type: 'success'
                    });
                </script>
            <?php }else if($this->session->flashdata('message') == "Your application has been rejected by admin.") { ?>
                <script type="text/javascript">
                    setTimeout(function () {
                        swal({
                            title: "We are sorry",
                            text: '<?= $this->session->flashdata('message')?>\n Please Contact Administrator.',
                            timer: 6000,
                            showConfirmButton: true,
                            allowOutsideClick: true,
                            type: 'error'
                        });
                        }, 250);
                </script>
             <?php }else if($this->session->flashdata('message') == "Your application still in process.") { ?>
                <script type="text/javascript">
                    setTimeout(function () {
                        swal({
                            title: "We are sorry",
                            text: '<?= $this->session->flashdata('message')?>\n Please Contact Administrator.',
                            timer: 6000,
                            showConfirmButton: true,
                            allowOutsideClick: true,
                            type: 'info'
                        });
                        }, 250);
                </script>
            <?php }else{ ?>
               <script type="text/javascript">
                    setTimeout(function () {
                        swal({
                            title: "<?= $this->session->flashdata('message')?>",
                            text: 'Please register first',
                            timer: 4000,
                            showConfirmButton: true,
                            allowOutsideClick: true,
                            type: 'info'
                        });
                        }, 250);
                </script>
            <?php } ?>
        <?php } ?>

  </body>
</html>
