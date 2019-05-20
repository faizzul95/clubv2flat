<!DOCTYPE html>
<html lang="en">

<head>
    <title>CMS | Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Phoenixcoded">
    <meta name="keywords" content=", Flat ui, Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="Phoenixcoded">
    <!-- Favicon icon -->
    
    <link rel="icon" href="../../vendor/assets/images/favicon.ico" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="../../vendor/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="../../vendor/assets/icon/themify-icons/themify-icons.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="../../vendor/assets/icon/icofont/css/icofont.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="../../vendor/assets/css/style.css">
    <!-- color .css -->
    <link rel="stylesheet" type="text/css" href="../../vendor/assets/css/color/color-1.css" id="color"/>
</head>

<body class="fix-menu dark-layout">
    <section class="login p-fixed d-flex text-center bg-primary common-img-bg">
        <!-- Container-fluid starts -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Authentication card start -->
                    <div class="login-card card-block auth-body">
                            <div class="text-center">
                                <img src="../../vendor/assets/images/auth/logo.png" alt="logo.png">
                            </div>

                            <?php
                                if($this->session->flashdata('msg')){
                                    ?>
                                    <div class="alert alert-success text-center" style="margin-top:20px;">
                                        <?php echo $this->session->flashdata('msg'); ?>
                                    </div>
                                    <?php
                                }
                            ?>
                        <div class="md-float-material">
                            <?php  echo  form_open('auth/register_application'); ?>
                            <div class="auth-box">
                               <!--  <div class="row m-b-20">
                                    <div class="col-md-12">
                                        <h3 class="text-center txt-primary">Sign up</h3>
                                    </div>
                                </div>
                                <hr/> -->

                                <h3 class="text-center txt-primary">Personnal Information</h3>

                                 <p class="text-inverse center m-b-0"><b><u><i><font color="red">Complete the form below to sign up for our membership activity</font></i></u></b></p>

                                 <hr/>

                                <div class="input-group">
                                    <input type="text" class="form-control" name="detail_fullname" placeholder="Your Full Name" autocomplete="off" required>
                                    <span class="md-line"></span>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="detail_phone" placeholder="Your Phone Number" autocomplete="off" required>
                                            <span class="md-line"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                         <div class="input-group">
                                            <input type="email" class="form-control" name="detail_email" placeholder="Your Email Address" required>
                                            <span class="md-line"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="input-group">
                                    <textarea class="form-control" name="detail_address" placeholder="Your Address"></textarea>
                                    <span class="md-line"></span>
                                </div>

                                <h3 class="text-center txt-primary">Account Information</h3><hr/>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <input type="text" name="username" autocomplete="off" class="form-control" placeholder="Enter Username/Email" required>
                                            <span class="md-line"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <input type="password" minlength="8" autocomplete="off" class="form-control" placeholder="Enter Password" required>
                                            <span class="md-line"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">Sign up now.</button>
                                    </div>
                                </div>

                                <hr/>
                                <div class="row">
                                    <div class="col-md-10">
                                        <p class="text-inverse text-left"><b>Already a member. </b> <a href="../auth" class="text-right f-w-600 text-inverse"> <font color="blue">Click Here</font></a> <b>to login</b></p>
                                    </div>
                                </div>
                            </div>
                            <?php echo form_close(); ?>
                        </div>
                        <!-- end of form -->
                    </div>
                    <!-- Authentication card end -->
                </div>
                <!-- end of col-sm-12 -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container-fluid -->
    </section>
   
    <!-- Required Jquery -->
    <script type="text/javascript" src="../../vendor/bower_components/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="../../vendor/bower_components/jquery-ui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="../../vendor/bower_components/tether/dist/js/tether.min.js"></script>
    <script type="text/javascript" src="../../vendor/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="../../vendor/bower_components/jquery-slimscroll/jquery.slimscroll.js"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="../../vendor/bower_components/modernizr/modernizr.js"></script>
    <script type="text/javascript" src="../../vendor/bower_components/modernizr/feature-detects/css-scrollbars.js"></script>
    <!-- i18next.min.js -->
    <script type="text/javascript" src="../../vendor/bower_components/i18next/i18next.min.js"></script>
    <script type="text/javascript" src="../../vendor/bower_components/i18next-xhr-backend/i18nextXHRBackend.min.js"></script>
    <script type="text/javascript" src="../../vendor/bower_components/i18next-browser-languagedetector/i18nextBrowserLanguageDetector.min.js"></script>
    <script type="text/javascript" src="../../vendor/bower_components/jquery-i18next/jquery-i18next.min.js"></script>
    <!-- Custom js -->
    <script type="text/javascript" src="../../vendor/assets/js/script.js"></script>
</body>

</html>
