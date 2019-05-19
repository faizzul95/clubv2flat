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
  <link rel="icon" href="../../vendor/landingpage/assets/logos/favicon.ico" type="image/png" sizes="16x16">
  <!-- Bootstrap -->
    <link href="../../vendor/landingpage/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
  <!-- Font -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,300,500,700,600" rel="stylesheet" type="text/css">
  <!-- Animate CSS -->
    <link rel="stylesheet" href="../../vendor/landingpage/assets/css/animate.css">
  <!-- Owl Carousel -->
    <link rel="stylesheet" href="../../vendor/landingpage/assets/css/owl.carousel.css">
    <link rel="stylesheet" href="../../vendor/landingpage/assets/css/owl.theme.css">
  <!-- Magnific Popup -->
    <link rel="stylesheet" href="../../vendor/landingpage/assets/css/magnific-popup.css">
  <!-- Full Page Animation -->
    <link rel="stylesheet" href="../../vendor/landingpage/assets/css/animsition.min.css">
  <!-- Ionic Icons -->
    <link rel="stylesheet" href="../../vendor/landingpage/assets/css/ionicons.min.css"> 
  <!-- Main Style css -->
    <link href="../../vendor/landingpage/assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
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
              <a class="navbar-brand page-scroll" href="#main"><img src="../../vendor/landingpage/assets/logos/logo.png" alt="Flat Able Logo" /></a>
              </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a class="page-scroll" href="#main">Home</a></li>
                    <li><a class="page-scroll" href="#services">About</a></li>
                    <li><a class="page-scroll" href="#features">Activity</a></li>
                    <li><a class="page-scroll" href="../../index.php/auth">Login</a></li>
                </ul>
            </div>
          </div>
        </nav><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->

       <?php if ($this->session->userdata('msg_alert_success')) { ?>
          <script type="text/javascript">
               alert('Congratulation ! your application have been approve');
           </script>
      <?php } elseif ($this->session->userdata('msg_alert_reject')) { ?>
          <script type="text/javascript">
               alert('Your application has been rejected by admin');
           </script>
      <?php } elseif ($this->session->userdata('msg_alert_notfound')) { ?>
           <script type="text/javascript">
               alert('Application ID not found');
           </script>
      <?php } elseif ($this->session->userdata('msg_alert_pending')) { ?>
           <script type="text/javascript">
               alert('Your application still in process.');
           </script>
      <?php } ?>

    <div class="main" id="main"><!-- Main Section-->
      <div class="hero-section app-hero">
        <div class="container">
          <div class="hero-content app-hero-content text-center">
            <div class="col-md-10 col-md-offset-1 nopadding">
                <h1 class="wow fadeInUp" data-wow-delay="0s">Welcome to Club Management System</h1>
                <p class="wow fadeInUp" data-wow-delay="0.2s">
                  Already register with us ? <br class="hidden-xs"> Check your application here.
                </p>
                  <?php  echo  form_open('application/checkApp'); ?>
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
            <h1 class="wow fadeInUp" data-wow-delay="0s">We take care our products for more feature rich</h1>
            <p class="wow fadeInUp" data-wow-delay="0.2s">
              Flat is one of the finest Admin dashboard template in its category. Premium admin dashboard with high end feature rich possibilities.
            </p>
          </div>
        </div>
          <div class="col-md-12 text-center">
          <div class="services">
            <div class="col-sm-4 wow fadeInUp" data-wow-delay="0.2s">
              <div class="services-icon">
                <img src="../../vendor/landingpage/assets/logos/icon1.png" height="60" width="60" alt="Service" />
              </div>
              <div class="services-description">
                <h1>Mega feature rich</h1>
                <p>
                  Flat Able is one of unique dashboard template which come with tons of ready to use feature. We continuous working on it to provide latest updates in digital market.
                </p>
              </div>
            </div>
            <div class="col-sm-4 wow fadeInUp" data-wow-delay="0.3s">
              <div class="services-icon">
                <img class="icon-2" src="../../vendor/landingpage/assets/logos/icon2.png" height="60" width="60" alt="Service" />
              </div>
              <div class="services-description">
                <h1>Fast and Robust</h1>
                <p>
                  We are contantly working on Flat Able and improve its performance too. Your definitely give higher rating to Flat Able for its performance.
                </p>
              </div>
            </div>
            <div class="col-sm-4 wow fadeInUp" data-wow-delay="0.4s">
              <div class="services-icon">
                <img class="icon-3" src="../../vendor/landingpage/assets/logos/icon3.png" height="60" width="60" alt="Service" />
              </div>
              <div class="services-description">
                <h1>FLAT UI-Interface</h1>
                <p>
                  Flat able is first ever admin dashboard template which release in Bootstrap 4 framework. Intuitive feature rich design concept and color combination.
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
            <img class="img-responsive" src="../../vendor/landingpage/assets/images/feature_1.png" alt="" />
          </div>
        </div>
        <div class="f-right wow fadeInUp" data-wow-delay="0.2s">
          <div class="right-content">
            <h2>High performance and flexible code</h2>
            <p>
              Flat Able is full flexible solution for your entire project development. You can easily maintain all of its module/components.
            </p>
            <ul>
              <li><i class="ion-android-checkbox-outline"></i>Neat n clean code structure.</li>
              <li><i class="ion-android-checkbox-outline"></i>Flexible module structure</li>
              <li><i class="ion-android-checkbox-outline"></i>Copy / Paste and Ready to use</li>
            </ul>
            <button class="btn btn-primary btn-action btn-fill">Learn More</button>
          </div>
        </div>
      </div>

      <div class="flex-split"><!-- Feature section with flex layout -->
        <div class="f-right">
          <div class="right-content wow fadeInUp" data-wow-delay="0.2s">
            <h2>Included Software Dependencies</h2>
            <p>
        Bower - Grunt - Sass Dependencies for easy project flow management.
            </p>
            <ul>
              <li><i class="ion-android-checkbox-outline"></i>Grunt - No need to update plugins manually</li>
              <li><i class="ion-android-checkbox-outline"></i>Grunt - Less work you have to performance</li>
              <li><i class="ion-android-checkbox-outline"></i>Sass  - Most Powerful CSS extension language</li>
            </ul>
            <button class="btn btn-primary btn-action btn-fill">Learn More</button>
          </div>
        </div>
        <div class="f-left">
          <div class="left-content wow fadeInUp" data-wow-delay="0.3s">
            <img class="img-responsive" src="../../vendor/landingpage/assets/images/feature_2.png" alt="" />
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
                    $query = $this->db->query('SELECT * FROM user WHERE usr_role = "member"');
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
          <img src="../../vendor/landingpage/assets/logos/logo.png" alt="Flat Able Logo" />
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
  <script type="text/javascript" src="../../vendor/landingpage/assets/js/jquery-2.1.1.js"></script>
  <script type="text/javascript" src="../../vendor/landingpage/assets/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../../vendor/landingpage/assets/js/plugins.js"></script>
  <script type="text/javascript" src="../../vendor/landingpage/assets/js/menu.js"></script>
  <script type="text/javascript" src="../../vendor/landingpage/assets/js/custom.js"></script>
  <script type="text/javascript" src="../../vendor/landingpage/assets/js/script.js"></script>
  </body>
</html>
