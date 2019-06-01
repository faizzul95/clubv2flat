<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

    $CI =& get_instance();
    if( ! isset($CI))
    {
        $CI = new CI_Controller();
    }
    $CI->load->helper('url');

?>

<!DOCTYPE html>

<html lang="en-us" class="no-js">

	<head>
		<meta charset="utf-8">
		<title>404 Page Not Found</title>
		<meta name="description" content="Flat able 404 Error page design">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="Phoenixcoded">

        <!-- Favicon -->
        <link rel="shortcut icon" href="<?php echo base_url('vendor/errors/img/favicon.ico')?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('vendor/errors/css/style.css')?>" />
	</head>

	<body class="flat">

        <!-- Canvas for particles animation -->
        <div id="particles-js"></div>

        <!-- Your logo on the top left -->
      <!--   <a href="#" class="logo-link" title="back home">

            <img src="../vendor/errors/img/logo.png" class="logo" alt="Company's logo" />

        </a> -->

        <div class="content">

            <div class="content-box">

                <div class="big-content">

                    <!-- Main squares for the content logo in the background -->
                    <div class="list-square">
                        <span class="square"></span>
                        <span class="square"></span>
                        <span class="square"></span>
                    </div>

                    <!-- Main lines for the content logo in the background -->
                    <div class="list-line">
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                    </div>

                    <!-- The animated searching tool -->
                    <i class="fa fa-search" aria-hidden="true"></i>

                    <!-- div clearing the float -->
                    <div class="clear"></div>

                </div>

                <!-- Your text -->
                <h1>Oops! Error 404 not found.</h1>

                <p>The page you were looking for doesn't exist.<br>
                    We think the page may have moved.</p>

            </div>

        </div>
    <footer class="light">
        <ul>
            <li><a href="<?= base_url(); ?>dashboard">Back to dashboard</a></li>
        </ul>
    </footer>
        <script src="<?php echo base_url('vendor/errors/js/jquery.min.js')?>"></script>
        <script src="<?php echo base_url('vendor/errors/js/bootstrap.min.js')?>"></script>

        <!-- Particles plugin -->
        <script src="<?php echo base_url('vendor/errors/js/particles.js')?>"></script>

    </body>

</html>