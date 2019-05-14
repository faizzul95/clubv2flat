<!DOCTYPE html>
<html lang="en">

<head>
    <title>CMS | Dashboard</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Phoenixcoded">
    <meta name="keywords" content="flat ui, admin , Flat ui, Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="Phoenixcoded">
    <!-- Favicon icon -->
    <link rel="icon" href="../vendor/assets/images/favicon.ico" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="../vendor/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="../vendor/assets/icon/themify-icons/themify-icons.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="../vendor/assets/icon/icofont/css/icofont.css">
    <!-- flag icon framework css -->
    <link rel="stylesheet" type="text/css" href="../vendor/assets/pages/flag-icon/flag-icon.min.css">
    <!-- Menu-Search css -->
    <link rel="stylesheet" type="text/css" href="../vendor/assets/pages/menu-search/css/component.css">
    <!-- Horizontal-Timeline css -->
    <link rel="stylesheet" type="text/css" href="../vendor/assets/pages/dashboard/horizontal-timeline/css/style.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="../vendor/assets/css/style.css">
    <!-- color .css -->
    <link rel="stylesheet" type="text/css" href="../vendor/assets/css/color/color-1.css" id="color"/>
</head>

<body class="fix-menu">
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="ball-scale">
            <div></div>
        </div>
    </div>
    <!-- Pre-loader end -->
<!-- Menu header start -->
        <nav class="navbar header-navbar">
            <div class="navbar-wrapper">
                <div class="navbar-logo">
                    <a class="mobile-menu" id="mobile-collapse" href="#!">
                        <i class="ti-menu"></i>
                    </a>
                    <a class="mobile-search morphsearch-search" href="#">
                        <i class="ti-search"></i>
                    </a>
                    <a href="index">
                        <img class="img-fluid" src="../vendor/assets/images/logo.png" alt="Theme-Logo" />
                    </a>
                    <a class="mobile-options">
                        <i class="ti-more"></i>
                    </a>
                </div>
                <div class="navbar-container container-fluid">
                    <div>
                        <ul class="nav-left">
                            <li>
                                <a id="collapse-menu" href="#">
                                    <i class="ti-menu"></i>
                                </a>
                            </li>
                            <li>
                                <a class="main-search morphsearch-search" href="#">
                                    <!-- themify icon -->
                                    <i class="ti-search"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#!" onclick="javascript:toggleFullScreen()">
                                    <i class="ti-fullscreen"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav-right">
                            <li class="user-profile header-notification">
                                <a href="#!">
                                    <img src="../vendor/assets/images/user.png" alt="User-Profile-Image">
                                    <span>Fahmy Izwan</span>
                                    <i class="ti-angle-down"></i>
                                </a>
                                <ul class="show-notification profile-notification">
                                    <li>
                                        <a href="user-profile.html">
                                            <i class="ti-user"></i> Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a href="auth-lock-screen.html">
                                            <i class="ti-lock"></i> Lock Screen
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#!">
                                            <i class="ti-layout-sidebar-left"></i> Logout
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <!-- search -->
                        <div id="morphsearch" class="morphsearch">
                            <form class="morphsearch-form">
                                <input class="morphsearch-input" type="search" placeholder="Search..." />
                                <button class="morphsearch-submit" type="submit">Search</button>
                            </form>
                            <!-- /morphsearch-content -->
                            <span class="morphsearch-close"><i class="icofont icofont-search-alt-1"></i></span>
                        </div>
                        <!-- search end -->
                    </div>
                </div>
            </div>
        </nav>
        <!-- Menu header end -->
         <!-- Menu aside start -->
        <div class="main-menu">
            <div class="main-menu-header">
                <img class="img-40" src="../vendor/assets/images/user.png" alt="User-Profile-Image">
                <div class="user-details">
                    <span>Fahmy Izwan</span>
                    <span id="more-details">Programmer<i class="ti-angle-down"></i></span>
                </div>
            </div>
            <div class="main-menu-content">
                <ul class="main-navigation">
                    <li class="more-details">
                        <a href="profile"><i class="ti-user"></i>View Profile</a>
                        <a href="#!"><i class="ti-settings"></i>Settings</a>
                        <a href="#!"><i class="ti-layout-sidebar-left"></i>Logout</a>
                    </li>

                    <li class="nav-title" data-i18n="nav.category.navigation">
                        <i class="ti-line-dashed"></i>
                        <span>Navigation</span>
                    </li>
                        <li class="nav-item single-item has-class">
                            <a href="dashboard">
                                <i class="icofont icofont-home"></i>
                                <span data-i18n="nav.dash.main">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item single-item">
                                    <a href="profile">
                                        <i class="icofont icofont-ui-user"></i>
                                        <span data-i18n="nav.dash.main">Profile</span>
                                    </a>
                                </li>
                        <li class="nav-item">
                            <a href="#!">
                                <i class="ti-layout-cta-right"></i>
                                <span data-i18n="nav.navigate.main">Membership</span>
                            </a>
                            <ul class="tree-1">
                                <li><a href="application/newlist" data-i18n="nav.navigate.navbar">List of New Application</a>
                                </li>
                                <li><a href="application/disapprove" data-i18n="nav.navigate.navbar">List of Disapprove Application</a>
                                </li>
                                <li><a href="application" data-i18n="nav.navigate.navbar-inverse">List of Club Member</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#!">
                                <i class="ti-layout-cta-right"></i>
                                <span data-i18n="nav.navigate.main">Activity</span>
                            </a>
                            <ul class="tree-1">
                                <li><a href="activity/create" data-i18n="nav.navigate.navbar">Add New Activity</a>
                                </li>
                                <li><a href="activity" data-i18n="nav.navigate.navbar-inverse">List of Activity</a></li>
                            </ul>
                        </li>
                        <li class="nav-item single-item">
                            <a href="widget.html">
                                <i class="ti-view-grid"></i>
                                <span data-i18n="nav.widget.main"> Widget</span>
                                <label class="label label-danger menu-caption">100+</label>
                            </a>
                        </li>
                        <li class="nav-title" data-i18n="nav.category.navigation">
                            <i class="ti-line-dashed"></i>
                            <span>GENERATOR</span>
                        </li>
                        <li class="nav-item single-item">
                            <a href="../crud/index.php">
                                <i class="ti-cloud-up"></i>
                                <span data-i18n="nav.file-upload.main">CRUD GENERATOR</span>
                            </a>
                        </li>
                </ul>
            </div>
        </div>
        <!-- Menu aside end -->
    <div class="main-body">
        <div class="page-wrapper">
            <div class="page-header">
                <div class="page-header-title">
                    <h4>Dashboard</h4>
                </div>
                <div class="page-header-breadcrumb">
                    <ul class="breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="index.html">
                                <i class="icofont icofont-home"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Dashboard</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="page-body">
                <div class="row">
                    <!-- Documents card start -->
                    <div class="col-md-6 col-xl-3">
                        <div class="card client-blocks dark-primary-border">
                            <div class="card-block">
                                <h5>Total Member</h5>
                                <ul>
                                    <li>
                                        <i class="icofont icofont-document-folder"></i>
                                    </li>
                                    <li class="text-right">
                                        133
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Documents card end -->
                    <!-- New clients card start -->
                    <div class="col-md-6 col-xl-3">
                        <div class="card client-blocks warning-border">
                            <div class="card-block">
                                <h5>New Application</h5>
                                <ul>
                                    <li>
                                        <i class="icofont icofont-ui-user-group text-warning"></i>
                                    </li>
                                    <li class="text-right text-warning">
                                        23
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- New clients card end -->
                    <!-- New files card start -->
                    <div class="col-md-6 col-xl-3">
                        <div class="card client-blocks success-border">
                            <div class="card-block">
                                <h5>Activity</h5>
                                <ul>
                                    <li>
                                        <i class="icofont icofont-files text-success"></i>
                                    </li>
                                    <li class="text-right text-success">
                                        240
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- New files card end -->
                    <!-- Open Project card start -->
                    <div class="col-md-6 col-xl-3">
                        <div class="card client-blocks">
                            <div class="card-block">
                                <h5>Open Projects</h5>
                                <ul>
                                    <li>
                                        <i class="icofont icofont-ui-folder text-primary"></i>
                                    </li>
                                    <li class="text-right text-primary">
                                        169
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Open Project card end -->
                    <!-- Morris chart start -->
                    <div class="col-md-12 col-xl-8">
                        <div class="card">
                            <div class="card-header">
                                <button class="btn btn-primary btn-sm">Week</button>
                                <button class="btn btn-primary btn-sm">Month</button>
                                <button class="btn btn-primary btn-sm">Year</button>
                            </div>
                            <div class="card-block">
                                <div id="morris-extra-area" style="height:470px;"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Morris chart end -->
                    <!-- Todo card start -->
                    <div class="col-md-12 col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <h5>Create Your Daily Task</h5>
                                <label class="label label-success">Today</label>
                            </div>
                            <div class="card-block">
                                <div class="input-group input-group-button">
                                    <input type="text" class="form-control add_task_todo" placeholder="Create your task list" name="task-insert">
                                    <span class="input-group-addon" id="basic-addon1">
                              <button id="add-btn" class="btn btn-primary">Add Task</button>
                              </span>
                                </div>
                                <div class="new-task">
                                    <div class="to-do-list">
                                        <div class="checkbox-fade fade-in-primary">
                                            <label class="check-task">
                                                <input type="checkbox" value="">
                                                <span class="cr">
                                    <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                                    </span>
                                                <span>Hey.. Attach your new file</span>
                                            </label>
                                        </div>
                                        <div class="f-right">
                                            <a href="#!" class="delete_todolist"><i class="icofont icofont-ui-delete" ></i></a>
                                        </div>
                                    </div>
                                    <div class="to-do-list">
                                        <div class="checkbox-fade fade-in-primary">
                                            <label class="check-task">
                                                <input type="checkbox" value="">
                                                <span class="cr">
                                    <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                                    </span>
                                                <span>New Attachment has error</span>
                                            </label>
                                        </div>
                                        <div class="f-right">
                                            <a href="#!" class="delete_todolist"><i class="icofont icofont-ui-delete"></i></a>
                                        </div>
                                    </div>
                                    <div class="to-do-list">
                                        <div class="checkbox-fade fade-in-primary">
                                            <label class="check-task">
                                                <input type="checkbox" value="">
                                                <span class="cr">
                                    <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                                    </span>
                                                <span>Have to submit early</span>
                                            </label>
                                        </div>
                                        <div class="f-right">
                                            <a href="#!" class="delete_todolist"><i class="icofont icofont-ui-delete"></i></a>
                                        </div>
                                    </div>
                                    <div class="to-do-list">
                                        <div class="checkbox-fade fade-in-primary">
                                            <label class="check-task">
                                                <input type="checkbox" value="">
                                                <span class="cr">
                                    <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                                    </span>
                                                <span>10 pages has to be completed</span>
                                            </label>
                                        </div>
                                        <div class="f-right">
                                            <a href="#!" class="delete_todolist"><i class="icofont icofont-ui-delete"></i></a>
                                        </div>
                                    </div>
                                    <div class="to-do-list">
                                        <div class="checkbox-fade fade-in-primary">
                                            <label class="check-task">
                                                <input type="checkbox" value="">
                                                <span class="cr">
                                    <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                                    </span>
                                                <span>Navigation working</span>
                                            </label>
                                        </div>
                                        <div class="f-right">
                                            <a href="#!" class="delete_todolist"><i class="icofont icofont-ui-delete"></i></a>
                                        </div>
                                    </div>
                                    <div class="to-do-list">
                                        <div class="checkbox-fade fade-in-primary">
                                            <label class="check-task">
                                                <input type="checkbox" value="">
                                                <span class="cr">
                                    <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                                    </span>
                                                <span>Files submited successfully</span>
                                            </label>
                                        </div>
                                        <div class="f-right">
                                            <a href="#!" class="delete_todolist"><i class="icofont icofont-ui-delete"></i></a>
                                        </div>
                                    </div>
                                    <div class="to-do-list">
                                        <div class="checkbox-fade fade-in-primary">
                                            <label class="check-task">
                                                <input type="checkbox" value="">
                                                <span class="cr">
                                    <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                                    </span>
                                                <span>Work Complete Before Time</span>
                                            </label>
                                        </div>
                                        <div class="f-right">
                                            <a href="#!" class="delete_todolist"><i class="icofont icofont-ui-delete"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Todo card end -->
                    <!-- User chat box start -->
                    <div class="col-md-12 col-xl-4">
                        <div class="card widget-chat-box">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-sm-2">
                                        <i class="icofont icofont-navigation-menu pop-up"></i>
                                    </div>
                                    <div class="col-sm-8 text-center">
                                        <h5>
                                   John Henry
                                        </h5>
                                    </div>
                                    <div class="col-sm-2 text-right">
                                        <i class="icofont icofont-ui-edit"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="card-block">
                                <p class="text-center">12:05 A.M.</p>
                                <div class="media">
                                    <img class="d-flex mr-3 img-circle img-60 img-thumbnail" src="../vendor/assets/images/user-card/img-round1.jpg" alt="Generic placeholder image">
                                    <div class="media-body send-chat">
                                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at
                                        <span class="time">3 min ago</span>
                                    </div>
                                </div>
                                <div class="media col-sm-8 offset-md-4">
                                    <div class="media-body  receive-chat">
                                        Cras sit amet nibh libero, in gravida nulla.vel metus scelerisque ante
                                        <span class="time">
                                        <i class="icofont icofont-check m-r-5"></i>Seen 2 sec ago
                                        </span>
                                    </div>
                                </div>
                                <div class="media">
                                    <img class="d-flex mr-3 img-circle img-60 img-thumbnail" src="../vendor/assets/images/user-card/img-round1.jpg" alt="Generic placeholder image">
                                    <div class="media-body send-chat">
                                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at
                                        <span class="time">3 min ago</span>
                                    </div>
                                </div>                                                                
                            </div>
                            <div class="card-footer">
                                <input type="text" class="form-control" placeholder="Your Message">
                            </div>
                        </div>
                    </div>
                    <!-- User chat box end -->
                    <!-- Horizontal Timeline start -->
                    <div class="col-md-12 col-xl-8">
                        <div class="card">
                        <div class="card-header">
                            <h5>Steps To Follow</h5>
                        </div>
                            <div class="card-block">
                                <div class="cd-horizontal-timeline">
                                    <div class="timeline">
                                        <div class="events-wrapper">
                                            <div class="events">
                                                <ol>
                                                    <li><a href="#0" data-date="16/01/2014" class="selected">16 Jan</a></li>
                                                    <li><a href="#0" data-date="28/02/2014">28 Feb</a></li>
                                                    <li><a href="#0" data-date="20/04/2014">20 Mar</a></li>
                                                    <li><a href="#0" data-date="20/05/2014">20 May</a></li>
                                                    <li><a href="#0" data-date="09/07/2014">09 Jul</a></li>
                                                    <li><a href="#0" data-date="30/08/2014">30 Aug</a></li>
                                                    <li><a href="#0" data-date="15/09/2014">15 Sep</a></li>
                                                    <li><a href="#0" data-date="01/11/2014">01 Nov</a></li>
                                                    <li><a href="#0" data-date="10/12/2014">10 Dec</a></li>
                                                    <li><a href="#0" data-date="19/01/2015">29 Jan</a></li>
                                                    <li><a href="#0" data-date="03/03/2015">3 Mar</a></li>
                                                </ol>
                                                <span class="filling-line" aria-hidden="true"></span>
                                            </div>
                                            <!-- .events -->
                                        </div>
                                        <!-- .events-wrapper -->
                                        <ul class="cd-timeline-navigation">
                                            <li><a href="#0" class="prev inactive">Prev</a></li>
                                            <li><a href="#0" class="next">Next</a></li>
                                        </ul>
                                        <!-- .cd-timeline-navigation -->
                                    </div>
                                    <!-- .timeline -->
                                    <div class="events-content">
                                        <ol>
                                            <li class="selected" data-date="16/01/2014">
                                                <h2>Horizontal Timeline</h2>
                                                <em>January 16th, 2014</em>
                                                <p class="m-b-0">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                                                </p>
                                                <div class="m-t-20 d-timeline-btn">
                                                    <button class="btn btn-danger">Read More</button>
                                                    <button class="btn btn-primary f-right"><i class="icofont icofont-plus m-r-0"></i></button>
                                                </div>
                                            </li>
                                            <li data-date="28/02/2014">
                                                <h2>Event title here</h2>
                                                <em>February 28th, 2014</em>
                                                <p class="m-b-0">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                                                </p>
                                                <div class="m-t-20 d-timeline-btn">
                                                    <button class="btn btn-danger">Read More</button>
                                                    <button class="btn btn-primary f-right"><i class="icofont icofont-plus m-r-0"></i></button>
                                                </div>
                                            </li>
                                            <li data-date="20/04/2014">
                                                <h2>Event title here</h2>
                                                <em>March 20th, 2014</em>
                                                <p class="m-b-0">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                                                </p>
                                                <div class="m-t-20 d-timeline-btn">
                                                    <button class="btn btn-danger">Read More</button>
                                                    <button class="btn btn-primary f-right"><i class="icofont icofont-plus m-r-0"></i></button>
                                                </div>
                                            </li>
                                            <li data-date="20/05/2014">
                                                <h2>Event title here</h2>
                                                <em>May 20th, 2014</em>
                                                <p class="m-b-0">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                                                </p>
                                                <div class="m-t-20 d-timeline-btn">
                                                    <button class="btn btn-danger">Read More</button>
                                                    <button class="btn btn-primary f-right"><i class="icofont icofont-plus m-r-0"></i></button>
                                                </div>
                                            </li>
                                            <li data-date="09/07/2014">
                                                <h2>Event title here</h2>
                                                <em>July 9th, 2014</em>
                                                <p class="m-b-0">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                                                </p>
                                                <div class="m-t-20 d-timeline-btn">
                                                    <button class="btn btn-danger">Read More</button>
                                                    <button class="btn btn-primary f-right"><i class="icofont icofont-plus m-r-0"></i></button>
                                                </div>
                                            </li>
                                            <li data-date="30/08/2014">
                                                <h2>Event title here</h2>
                                                <em>August 30th, 2014</em>
                                                <p class="m-b-0">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                                                </p>
                                                <div class="m-t-20 d-timeline-btn">
                                                    <button class="btn btn-danger">Read More</button>
                                                    <button class="btn btn-primary f-right"><i class="icofont icofont-plus m-r-0"></i></button>
                                                </div>
                                            </li>
                                            <li data-date="15/09/2014">
                                                <h2>Event title here</h2>
                                                <em>September 15th, 2014</em>
                                                <p class="m-b-0">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                                                </p>
                                                <div class="m-t-20 d-timeline-btn">
                                                    <button class="btn btn-danger">Read More</button>
                                                    <button class="btn btn-primary f-right"><i class="icofont icofont-plus m-r-0"></i></button>
                                                </div>
                                            </li>
                                            <li data-date="01/11/2014">
                                                <h2>Event title here</h2>
                                                <em>November 1st, 2014</em>
                                                <p class="m-b-0">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                                                </p>
                                                <div class="m-t-20 d-timeline-btn">
                                                    <button class="btn btn-danger">Read More</button>
                                                    <button class="btn btn-primary f-right"><i class="icofont icofont-plus m-r-0"></i></button>
                                                </div>
                                            </li>
                                            <li data-date="10/12/2014">
                                                <h2>Event title here</h2>
                                                <em>December 10th, 2014</em>
                                                <p class="m-b-0">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                                                </p>
                                                <div class="m-t-20 d-timeline-btn">
                                                    <button class="btn btn-danger">Read More</button>
                                                    <button class="btn btn-primary f-right"><i class="icofont icofont-plus m-r-0"></i></button>
                                                </div>
                                            </li>
                                            <li data-date="19/01/2015">
                                                <h2>Event title here</h2>
                                                <em>January 19th, 2015</em>
                                                <p class="m-b-0">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                                                </p>
                                                <div class="m-t-20 d-timeline-btn">
                                                    <button class="btn btn-danger">Read More</button>
                                                    <button class="btn btn-primary f-right"><i class="icofont icofont-plus m-r-0"></i></button>
                                                </div>
                                            </li>
                                            <li data-date="03/03/2015">
                                                <h2>Event title here</h2>
                                                <em>March 3rd, 2015</em>
                                                <p class="m-b-0">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                                                </p>
                                                <div class="m-t-20 d-timeline-btn">
                                                    <button class="btn btn-danger">Read More</button>
                                                    <button class="btn btn-primary f-right"><i class="icofont icofont-plus m-r-0"></i></button>
                                                </div>
                                            </li>
                                        </ol>
                                    </div>
                                    <!-- .events-content -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Horizontal Timeline end -->
                </div>
            </div>
        </div>
    </div>
    <!-- Warning Section Starts -->
    <!-- Older IE warning message -->
    <!--[if lt IE 9]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="../vendor/assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="../vendor/assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="../vendor/assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="../vendor/assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="../vendor/assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
    <!-- Warning Section Ends -->
    <!-- Required Jquery -->
    <script type="text/javascript" src="../vendor/bower_components/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="../vendor/bower_components/jquery-ui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="../vendor/bower_components/tether/dist/js/tether.min.js"></script>
    <script type="text/javascript" src="../vendor/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="../vendor/bower_components/jquery-slimscroll/jquery.slimscroll.js"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="../vendor/bower_components/modernizr/modernizr.js"></script>
    <script type="text/javascript" src="../vendor/bower_components/modernizr/feature-detects/css-scrollbars.js"></script>
    <!-- classie js -->
    <script type="text/javascript" src="../vendor/bower_components/classie/classie.js"></script>
    <!-- Morris Chart js -->
    <script src="../vendor/bower_components/raphael/raphael.min.js"></script>
    <script src="../vendor/bower_components/morris.js/morris.js"></script>
    <!-- Todo js -->
    <script type="text/javascript" src="../vendor/assets/pages/todo/todo.js"></script>
    <!-- Horizontal-Timeline js -->
    <script type="text/javascript" src="../vendor/assets/pages/dashboard/horizontal-timeline/js/main.js"></script>
    <!-- i18next.min.js -->
    <script type="text/javascript" src="../vendor/bower_components/i18next/i18next.min.js"></script>
    <script type="text/javascript" src="../vendor/bower_components/i18next-xhr-backend/i18nextXHRBackend.min.js"></script>
    <script type="text/javascript" src="../vendor/bower_components/i18next-browser-languagedetector/i18nextBrowserLanguageDetector.min.js"></script>
    <script type="text/javascript" src="../vendor/bower_components/jquery-i18next/jquery-i18next.min.js"></script>
    <!-- Custom js -->
    <script type="text/javascript" src="../vendor/assets/pages/dashboard/project-dashboard.js"></script>
    <script type="text/javascript" src="../vendor/assets/js/script.js"></script>
</body>

</html>
