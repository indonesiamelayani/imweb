<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url() ?>assets/plugins/images/favicon.png">
    <title>Cubic Admin Template</title>
    <!-- ===== Bootstrap CSS ===== -->
    <link href="<?php echo base_url() ?>assets/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- ===== Plugin CSS ===== -->
    <link href="<?php echo base_url() ?>assets/plugins/components/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/plugins/components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/plugins/components/css-chart/css-chart.css" rel="stylesheet">
    <!-- ===== Animation CSS ===== -->
    <link href="<?php echo base_url() ?>assets/css/animate.css" rel="stylesheet">
    <!-- ===== Custom CSS ===== -->
    <link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet">
    <!-- ===== Color CSS ===== -->
    <link href="<?php echo base_url() ?>assets/css/colors/default.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="mini-sidebar">
    <!-- ===== Main-Wrapper ===== -->
    <div id="wrapper">
        <div class="preloader">
            <div class="cssload-speeding-wheel"></div>
        </div>
        <!-- ===== Top-Navigation ===== -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
                <a class="navbar-toggle font-20 hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse">
                    <i class="fa fa-bars"></i>
                </a>
                <div class="top-left-part">
                    <a class="logo" href="index.html">
                        <b>
                            <img src="<?php echo base_url() ?>assets/plugins/images/logo.png" alt="home" />
                        </b>
                        <span>
                            <img src="<?php echo base_url() ?>assets/plugins/images/logo-text.png" alt="homepage" class="dark-logo" />
                        </span>
                    </a>
                </div>
                <ul class="nav navbar-top-links navbar-left hidden-xs">
                    <li>
                        <a href="javascript:void(0)" class="sidebartoggler font-20 waves-effect waves-light"><i class="icon-arrow-left-circle"></i></a>
                    </li>
                    <li>
                        <form role="search" class="app-search hidden-xs">
                            <i class="icon-magnifier"></i>
                            <input type="text" placeholder="Search..." class="form-control">
                        </form>
                    </li>
                </ul>
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li class="dropdown">
                        <a class="dropdown-toggle waves-effect waves-light font-20" data-toggle="dropdown" href="javascript:void(0);">
                            <i class="icon-speech"></i>
                            <span class="badge badge-xs badge-danger">6</span>
                        </a>
                        <ul class="dropdown-menu mailbox animated bounceInDown">
                            <li>
                                <div class="drop-title">You have 4 new messages</div>
                            </li>
                            <li>
                                <div class="message-center">
                                    <a href="javascript:void(0);">
                                        <div class="user-img">
                                            <img src="<?php echo base_url() ?>assets/plugins/images/users/1.jpg" alt="user" class="img-circle">
                                            <span class="profile-status online pull-right"></span>
                                        </div>
                                        <div class="mail-contnet">
                                            <h5>Pavan kumar</h5>
                                            <span class="mail-desc">Just see the my admin!</span>
                                            <span class="time">9:30 AM</span>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0);">
                                        <div class="user-img">
                                            <img src="<?php echo base_url() ?>assets/plugins/images/users/2.jpg" alt="user" class="img-circle">
                                            <span class="profile-status busy pull-right"></span>
                                        </div>
                                        <div class="mail-contnet">
                                            <h5>Sonu Nigam</h5>
                                            <span class="mail-desc">I've sung a song! See you at</span>
                                            <span class="time">9:10 AM</span>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0);">
                                        <div class="user-img">
                                            <img src="<?php echo base_url() ?>assets/plugins/images/users/3.jpg" alt="user" class="img-circle"><span class="profile-status away pull-right"></span>
                                        </div>
                                        <div class="mail-contnet">
                                            <h5>Arijit Sinh</h5>
                                            <span class="mail-desc">I am a singer!</span>
                                            <span class="time">9:08 AM</span>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0);">
                                        <div class="user-img">
                                            <img src="<?php echo base_url() ?>assets/plugins/images/users/4.jpg" alt="user" class="img-circle">
                                            <span class="profile-status offline pull-right"></span>
                                        </div>
                                        <div class="mail-contnet">
                                            <h5>Pavan kumar</h5>
                                            <span class="mail-desc">Just see the my admin!</span>
                                            <span class="time">9:02 AM</span>
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <a class="text-center" href="javascript:void(0);">
                                    <strong>See all notifications</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle waves-effect waves-light font-20" data-toggle="dropdown" href="javascript:void(0);">
                            <i class="icon-calender"></i>
                            <span class="badge badge-xs badge-danger">3</span>
                        </a>
                        <ul class="dropdown-menu dropdown-tasks animated slideInUp">
                            <li>
                                <a href="javascript:void(0);">
                                    <div>
                                        <p>
                                            <strong>Task 1</strong>
                                            <span class="pull-right text-muted">40% Complete</span>
                                        </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                                <span class="sr-only">40% Complete (success)</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div>
                                        <p>
                                            <strong>Task 2</strong>
                                            <span class="pull-right text-muted">20% Complete</span>
                                        </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                                <span class="sr-only">20% Complete</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div>
                                        <p>
                                            <strong>Task 3</strong>
                                            <span class="pull-right text-muted">60% Complete</span>
                                        </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                                <span class="sr-only">60% Complete (warning)</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div>
                                        <p>
                                            <strong>Task 4</strong>
                                            <span class="pull-right text-muted">80% Complete</span>
                                        </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                                <span class="sr-only">80% Complete (danger)</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a class="text-center" href="javascript:void(0);">
                                    <strong>See All Tasks</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="right-side-toggle">
                        <a class="right-side-toggler waves-effect waves-light b-r-0 font-20" href="javascript:void(0)">
                            <i class="icon-settings"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- ===== Top-Navigation-End ===== -->
        <!-- ===== Left-Sidebar ===== -->
        <aside class="sidebar">
            <div class="scroll-sidebar">
                <div class="user-profile">
                    <div class="dropdown user-pro-body">
                        <div class="profile-image">
                            <img src="<?php echo base_url() ?>assets/plugins/images/users/hanna.jpg" alt="user-img" class="img-circle">
                            <a href="javascript:void(0);" class="dropdown-toggle u-dropdown text-blue" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <span class="badge badge-danger">
                                    <i class="fa fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="dropdown-menu animated flipInY">
                                <li><a href="javascript:void(0);"><i class="fa fa-user"></i> Profile</a></li>
                                <li><a href="javascript:void(0);"><i class="fa fa-inbox"></i> Inbox</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="javascript:void(0);"><i class="fa fa-cog"></i> Account Settings</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href=""><i class="fa fa-power-off"></i> Logout</a></li>
                            </ul>
                        </div>
                        <p class="profile-text m-t-15 font-16"><a href="javascript:void(0);"> Hanna Gover</a></p>
                    </div>
                </div>
                <nav class="sidebar-nav">
                    <ul id="side-menu">
                        <li>
                            <a class="active waves-effect" href="javascript:void(0);" aria-expanded="false"><i class="icon-screen-desktop fa-fw"></i> <span class="hide-menu"> Dashboard <span class="label label-rounded label-info pull-right">3</span></span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li> <a href="index.html">Modern Version</a> </li>
                                <li> <a href="index2.html">Clean Version</a> </li>
                                <li> <a href="index3.html">Analytical Version</a> </li>
                            </ul>
                        </li>
                        <li>
                            <a class="waves-effect" href="javascript:void(0);" aria-expanded="false"><i class="icon-basket fa-fw"></i> <span class="hide-menu"> eCommerce </span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li> <a href="index4.html">Dashboard</a> </li>
                                <li> <a href="products.html">Products</a> </li>
                                <li> <a href="product-detail.html">Product Detail</a> </li>
                                <li> <a href="product-edit.html">Product Edit</a> </li>
                                <li> <a href="product-orders.html">Product Orders</a> </li>
                                <li> <a href="product-cart.html">Product Cart</a> </li>
                                <li> <a href="product-checkout.html">Product Checkout</a> </li>
                            </ul>
                        </li>
                        <li>
                            <a class="waves-effect" href="javascript:void(0);" aria-expanded="false"><i class="icon-envelope-letter fa-fw"></i> <span class="hide-menu"> Inbox <span class="label label-rounded label-primary pull-right">5</span></span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li> <a href="inbox.html">Mail Box</a> </li>
                                <li> <a href="inbox-detail.html">Mail Details</a> </li>
                                <li> <a href="compose.html">Compose Mail</a> </li>
                                <li> <a href="contact.html">Contact</a> </li>
                                <li> <a href="contact-detail.html">Contact Detail</a> </li>
                            </ul>
                        </li>
                        <li>
                            <a class="waves-effect" href="javascript:void(0);" aria-expanded="false"><i class="icon-equalizer fa-fw"></i> <span class="hide-menu"> UI Elements<span class="label label-rounded label-danger pull-right">18</span></span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="panels-wells.html">Panels and Wells</a></li>
                                <li><a href="panel-ui-block.html">Panels With BlockUI</a></li>
                                <li><a href="portlet-draggable.html">Draggable Portlet</a></li>
                                <li><a href="buttons.html">Buttons</a></li>
                                <li><a href="tabs.html">Tabs</a></li>
                                <li><a href="modals.html">Modals</a></li>
                                <li><a href="progressbars.html">Progress Bars</a></li>
                                <li><a href="notification.html">Notifications</a></li>
                                <li><a href="carousel.html">Carousel</a></li>
                                <li><a href="user-cards.html">User Cards</a></li>
                                <li><a href="timeline.html">Timeline</a></li>
                                <li><a href="timeline-horizontal.html">Horizontal Timeline</a></li>
                                <li><a href="range-slider.html">Range Slider</a></li>
                                <li><a href="ribbons.html">Ribbons</a></li>
                                <li><a href="steps.html">Steps</a></li>
                                <li><a href="session-idle-timeout.html">Session Idle Timeout</a></li>
                                <li><a href="session-timeout.html">Session Timeout</a></li>
                                <li><a href="bootstrap.html">Bootstrap UI</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="waves-effect" href="javascript:void(0);" aria-expanded="false"><i class="icon-notebook fa-fw"></i> <span class="hide-menu"> Forms </span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="form-basic.html">Basic Forms</a></li>
                                <li><a href="form-layout.html">Form Layout</a></li>
                                <li><a href="icheck-control.html">Icheck Control</a></li>
                                <li><a href="form-advanced.html">Form Addons</a></li>
                                <li><a href="form-upload.html">File Upload</a></li>
                                <li><a href="form-dropzone.html">File Dropzone</a></li>
                                <li><a href="form-pickers.html">Form-pickers</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="waves-effect" href="javascript:void(0);" aria-expanded="false"><i class="icon-grid fa-fw"></i> <span class="hide-menu"> Tables</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="basic-table.html">Basic Tables</a></li>
                                <li><a href="table-layouts.html">Table Layouts</a></li>
                                <li><a href="data-table.html">Data Table</a></li>
                                <li><a href="bootstrap-tables.html">Bootstrap Tables</a></li>
                                <li><a href="responsive-tables.html">Responsive Tables</a></li>
                                <li><a href="editable-tables.html">Editable Tables</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="waves-effect" href="javascript:void(0);" aria-expanded="false"><i class="icon-pie-chart fa-fw"></i> <span class="hide-menu"> Charts</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="morris-chart.html">Morris Chart</a></li>
                                <li><a href="peity-chart.html">Peity Charts</a></li>
                                <li><a href="knob-chart.html">Knob Charts</a></li>
                                <li><a href="sparkline-chart.html">Sparkline charts</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="widgets.html" aria-expanded="false"><i class="icon-settings fa-fw"></i> <span class="hide-menu"> Widgets </span></a>
                        </li>
                        <li>
                            <a class="waves-effect" href="javascript:void(0);" aria-expanded="false"><i class="icon-bulb fa-fw"></i> <span class="hide-menu"> Icons</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li> <a href="simple-line.html">Simple Line</a> </li>
                                <li> <a href="fontawesome.html">Fontawesome</a> </li>
                            </ul>
                        </li>
                        <li>
                            <a class="waves-effect" href="javascript:void(0);" aria-expanded="false"><i class="icon-location-pin fa-fw"></i> <span class="hide-menu"> Maps</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li> <a href="map-google.html">Google Map</a> </li>
                                <li> <a href="map-vector.html">Vector Map</a> </li>
                            </ul>
                        </li>
                        <li>
                            <a class="waves-effect" href="javascript:void(0);" aria-expanded="false"><i class="icon-docs fa-fw"></i> <span class="hide-menu"> Pages<span class="label label-rounded label-success pull-right">18</span></span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li> <a href="javascript:void(0);">Error Pages</a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li> <a href="400.html">400</a> </li>
                                        <li> <a href="403.html">403</a> </li>
                                        <li> <a href="404.html">404</a> </li>
                                        <li> <a href="500.html">404</a> </li>
                                        <li> <a href="503.html">404</a> </li>
                                    </ul>
                                </li>
                                <li><a href="starter-page.html">Starter Page</a></li>
                                <li><a href="blank.html">Blank Page</a></li>
                                <li><a href="search-result.html">Search Result</a></li>
                                <li><a href="custom-scroll.html">Custom Scrolls</a></li>
                                <li><a href="login.html">Login Page</a></li>
                                <li><a href="lock-screen.html">Lock Screen</a></li>
                                <li><a href="recoverpw.html">Recover Password</a></li>
                                <li><a href="animation.html">Animations</a></li>
                                <li><a href="profile.html">Profile</a></li>
                                <li><a href="invoice.html">Invoice</a></li>
                                <li><a href="gallery.html">Gallery</a></li>
                                <li><a href="pricing.html">Pricing</a></li>
                                <li><a href="register.html">Register</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="calendar.html" aria-expanded="false"><i class="icon-calender fa-fw"></i> <span class="hide-menu"> Calendar</span></a>
                        </li>
                    </ul>
                </nav>
                <div class="p-30">
                    <span class="hide-menu">
                        <a href="javascript:void(0);" target="_blank" class="btn btn-success">Buy Cubic Admin</a>
                        <a href="javascript:void(0);" target="_blank" class="btn btn-default m-t-15">Check Documentation</a>
                    </span>
                </div>
            </div>
        </aside>
        <!-- ===== Left-Sidebar-End ===== -->
        <!-- ===== Page-Content ===== -->
        <div class="page-wrapper">
            <!-- ===== Page-Container ===== -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8 col-sm-12">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="white-box small-box-widget">
                                    <ul class="list-inline row">
                                        <li class="col-xs-3 p-t-10">
                                            <div class="icon-box bg-primary">
                                                <i class="icon-bag"></i>
                                            </div>
                                        </li>
                                        <li class="col-xs-9 p-l-20">
                                            <h4>New Sales</h4>
                                            <div class="ct-sales-chart"></div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="white-box small-box-widget">
                                    <ul class="list-inline row">
                                        <li class="col-xs-3 p-t-10">
                                            <div class="icon-box bg-success">
                                                <i class="icon-user"></i>
                                            </div>
                                        </li>
                                        <li class="col-xs-9 p-l-20">
                                            <h4>User Quota</h4>
                                            <div class="ct-uq-chart chart-pos"></div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="white-box small-box-widget">
                                    <div class="p-t-10 p-b-10">
                                        <div class="icon-box bg-warning">
                                            <i class="icon-refresh"></i>
                                        </div>
                                        <div class="detail-box">
                                            <h4>Progress<span class="pull-right text-warning font-22 font-normal">42%</span></h4>
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="42" aria-valuemin="0" aria-valuemax="100" style="width: 42%">
                                                    <span class="sr-only">42% Complete</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="white-box small-box-widget">
                                    <div class="p-t-10 p-b-10">
                                        <div class="icon-box bg-danger">
                                            <i class="icon-cloud-download"></i>
                                        </div>
                                        <div class="detail-box">
                                            <h4>Downloading<span class="pull-right text-danger font-22 font-normal">42%</span></h4>
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="42" aria-valuemin="0" aria-valuemax="100" style="width: 42%">
                                                    <span class="sr-only">42% Complete</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="white-box circle-chart-widget">
                            <div class="circle-chart">
                                <div class="c1">
                                    <input class="knob" data-min="0" data-max="100" data-bgColor="#e4edef" data-fgColor="#0283cc" data-displayInput=false data-width="182" data-height="182" data-thickness=".05" data-linecap=round value="58" readonly>
                                </div>
                                <div class="c2">
                                    <input class="knob" data-min="0" data-max="100" data-bgColor="#e4edef" data-fgColor="#e74a25" data-displayInput=false data-width="154" data-height="154" data-thickness=".05" data-linecap=round value="45" readonly>
                                </div>
                                <div class="c3">
                                    <input class="knob" data-min="0" data-max="100" data-bgColor="#e4edef" data-fgColor="#00bbd9" data-displayInput=false data-width="125" data-height="125" data-thickness=".05" data-linecap=round value="32" readonly>
                                </div>
                                <div class="chart-overlap"><i class="icon-trophy"></i></div>
                            </div>
                            <ul class="list-inline m-b-0 m-t-30 t-a-c">
                                <li>
                                    <h6 class="font-15"><i class="fa fa-circle m-r-5 text-primary"></i>58%</h6>
                                </li>
                                <li>
                                    <h6 class="font-15"><i class="fa fa-circle m-r-5 text-danger"></i>45%</h6>
                                </li>
                                <li>
                                    <h6 class="font-15"><i class="fa fa-circle m-r-5 text-info"></i>32%</h6>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box stat-widget">
                            <div class="row">
                                <div class="col-sm-3">
                                    <h4 class="box-title">Sales Report</h4>
                                </div>
                                <div class="col-sm-9">
                                    <select class="custom-select">
                                        <option selected value="0">Feb 04 - Mar 03</option>
                                        <option value="1">Mar 04 - Apr 03</option>
                                        <option value="2">Apr 04 - May 03</option>
                                        <option value="3">May 04 - Jun 03</option>
                                    </select>
                                    <ul class="list-inline">
                                        <li>
                                            <h6 class="font-15"><i class="fa fa-circle m-r-5 text-success"></i>New Sales</h6>
                                        </li>
                                        <li>
                                            <h6 class="font-15"><i class="fa fa-circle m-r-5 text-primary"></i>Existing Sales</h6>
                                        </li>
                                    </ul>
                                </div>
                                <div class="stat chart-pos"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <div class="white-box upload-widget2">
                            <h4 class="box-title">Uploading Process</h4>
                            <ul class="up-file m-t-20">
                                <li>
                                    <i class="icon-picture"></i>
                                    <div class="up-file-progress">
                                        <span>my_photos.png</span>
                                        <span class="pull-right">34%</span>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="34" aria-valuemin="0" aria-valuemax="100" style="width: 34%">
                                                <span class="sr-only">34% Complete</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <i class="icon-camrecorder"></i>
                                    <div class="up-file-progress">
                                        <span>the_kongmovie.avi</span>
                                        <span class="pull-right">67%</span>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100" style="width: 67%">
                                                <span class="sr-only">67% Complete</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <i class="icon-docs"></i>
                                    <div class="up-file-progress">
                                        <span>document.pdf</span>
                                        <span class="pull-right">15%</span>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100" style="width: 15%">
                                                <span class="sr-only">15% Complete</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="up-add-file t-a-c">
                                <a href="javascript:void(0);" class="btn btn-primary font-16"><i class="fa fa-plus p-r-20"></i>Add Files</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="white-box upload-widget">
                            <div class="t-a-c">
                                <div class="complete-chart" id="graph1" data-percent="45" data-size="160" data-line="5" data-rotate="0" data-color="#e74a25" data-text-color="#e74a25"></div>
                                <p class="font-20 m-b-0">Uploading</p>
                                <p class="text-primary font-semibold font-18">Myphotos_friends.png</p>
                                <span class="up-speed m-t-20 m-b-10">Speed: <span class="text-primary font-semibold">450 kbps</span></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="white-box album-widget">
                            <h4 class="box-title">Create Your Album</h4>
                            <div class="alb-photos m-t-30">
                                <div class="alb-item">
                                    <img src="<?php echo base_url() ?>assets/plugins/images/a1.jpg" alt="item">
                                </div>
                                <div class="alb-item">
                                    <img src="<?php echo base_url() ?>assets/plugins/images/a2.jpg" alt="item">
                                </div>
                                <div class="alb-item">
                                    <img src="<?php echo base_url() ?>assets/plugins/images/a3.jpg" alt="item">
                                </div>
                                <div class="alb-item uploading">
                                    <div class="progress m-0">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="34" aria-valuemin="0" aria-valuemax="100" style="width: 34%">
                                            <span class="sr-only">34% Complete</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="alb-item add-more">
                                    <a href="javascript:void(0);"><i class="fa fa-plus text-success"></i></a>
                                </div>
                            </div>
                            <div class="up-add-photo t-a-c">
                                <a href="javascript:void(0);" class="btn btn-primary font-16"><i class="fa fa-plus p-r-20"></i>Add Photos</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 col-sm-12">
                        <div class="white-box activity-widget">
                            <h4 class="box-title">Activity Log</h4>
                            <div class="steamline">
                                <div class="sl-item">
                                    <div class="sl-left">
                                        <div>
                                            <img class="img-circle" alt="user" src="<?php echo base_url() ?>assets/plugins/images/users/hanna.jpg">
                                        </div>
                                    </div>
                                    <div class="sl-right">
                                        <div><a href="javascript:void(0);" class="text-link font-semibold">Hanna Gover</a> left a comment on the article <a href="javascript:void(0);" class="text-link font-semibold">'The best tutorial for creating a blog'.</a></div>
                                        <p>2 min ago</p>
                                    </div>
                                </div>
                                <div class="sl-item">
                                    <div class="sl-left">
                                        <div class="bg-success">
                                            <i class="fa fa-bell" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                    <div class="sl-right">
                                        <div><a href="javascript:void(0);" class="text-link font-semibold">22 New Request</a> please approve or reject the request.</div>
                                        <p>2 min ago</p>
                                    </div>
                                </div>
                                <div class="sl-item">
                                    <div class="sl-left">
                                        <div class="bg-danger">
                                            <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                    <div class="sl-right">
                                        <div><a href="javascript:void(0);" class="text-link font-semibold">Main Disc</a> is running out of space. Please <a href="javascript:void(0);" class="text-link font-semibold">delete</a> unwanted files to continue.</div>
                                        <p>2 min ago</p>
                                    </div>
                                </div>
                                <div class="sl-item m-b-0">
                                    <div class="sl-left">
                                        <div>
                                            <img class="img-circle" alt="user" src="<?php echo base_url() ?>assets/plugins/images/users/jeffery.jpg">
                                        </div>
                                    </div>
                                    <div class="sl-right">
                                        <div>
                                            <a href="javascript:void(0);" class="text-link font-semibold">Daniel Kristeen</a> has submitted an article.
                                            <div class="sl-btn">
                                                <a href="javascript:void(0);" class="btn btn-success btn-outline btn-rounded m-r-20">Approve</a>
                                                <a href="javascript:void(0);" class="btn btn-default btn-outline btn-rounded">Reject</a>
                                            </div>
                                        </div>
                                        <p>2 min ago</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="white-box p-0">
                            <div class="carousel-widget">
                                <div class="image-overlay"></div>
                                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <div class="a-img">
                                                <img src="<?php echo base_url() ?>assets/plugins/images/users/jeffery.jpg" alt="user-img" class="img-circle">
                                                <p class="m-t-15 m-b-5"><a href="javascript:void(0);" class="font-16 font-semibold text-white">Daniel Kristeen</a></p>
                                            </div>
                                            <div class="q-img">
                                                <img src="<?php echo base_url() ?>assets/plugins/images/q.png" alt="q">
                                            </div>
                                            <div class="q-text">
                                                <p class="font-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="a-img">
                                                <img src="<?php echo base_url() ?>assets/plugins/images/users/jeffery.jpg" alt="user-img" class="img-circle">
                                                <p class="m-t-15 m-b-5"><a href="javascript:void(0);" class="font-16 font-semibold text-white">Daniel Kristeen</a></p>
                                            </div>
                                            <div class="q-img">
                                                <img src="<?php echo base_url() ?>assets/plugins/images/q.png" alt="q">
                                            </div>
                                            <div class="q-text">
                                                <p class="font-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="a-img">
                                                <img src="<?php echo base_url() ?>assets/plugins/images/users/jeffery.jpg" alt="user-img" class="img-circle">
                                                <p class="m-t-15 m-b-5"><a href="javascript:void(0);" class="font-16 font-semibold text-white">Daniel Kristeen</a></p>
                                            </div>
                                            <div class="q-img">
                                                <img src="<?php echo base_url() ?>assets/plugins/images/q.png" alt="q">
                                            </div>
                                            <div class="q-text">
                                                <p class="font-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="a-img">
                                                <img src="<?php echo base_url() ?>assets/plugins/images/users/jeffery.jpg" alt="user-img" class="img-circle">
                                                <p class="m-t-15 m-b-5"><a href="javascript:void(0);" class="font-16 font-semibold text-white">Daniel Kristeen</a></p>
                                            </div>
                                            <div class="q-img">
                                                <img src="<?php echo base_url() ?>assets/plugins/images/q.png" alt="q">
                                            </div>
                                            <div class="q-text">
                                                <p class="font-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                            </div>
                                        </div>
                                    </div>
                                    <ol class="carousel-indicators">
                                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                        <li data-target="#myCarousel" data-slide-to="1"></li>
                                        <li data-target="#myCarousel" data-slide-to="2"></li>
                                        <li data-target="#myCarousel" data-slide-to="3"></li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="white-box report-widget">
                            <h4 class="box-title">Completed Tasks</h4>
                            <div class="css-bar css-bar-55 css-bar-xlg css-bar-primary">
                                <div class="data-text">
                                    <h1 class="m-0">55<span class="icon">&#37;</span></h1>
                                    <span class="hr-line"></span>
                                    <div class="font-15">Finished</div>
                                </div>
                            </div>
                            <div class="clear"></div>
                            <a href="javascript:void(0);" class="btn btn-success">Generate Report</a>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-12">
                        <div class="temp-widget">
                            <div class="left-part" style="background-image: url('<?php echo base_url() ?>assets/plugins/images/cloud.jpg');">
                                <div class="temp-image-overlay"></div>
                                <div class="temp-place">
                                    <select class="custom-select">
                                        <option selected value="1">Texas, US</option>
                                        <option value="2">California, US</option>
                                        <option value="3">Illinois, US</option>
                                        <option value="4">Florida, US</option>
                                    </select>
                                </div>
                                <div class="temp-arrow"></div>
                            </div>
                            <div class="right-part">
                                <div class="temp-detail">
                                    <h1 class="text-primary font-light">32<sup>o</sup></h1>
                                    <h3 class="m-t-20">It's a Sunny Day</h3>
                                    <span class="hr-line"></span>
                                    <h4>Rain: 1.2 mm</h4>
                                    <ul class="list-inline temp-days">
                                        <li class="bg-success m-l-0">
                                            <h2 class="font-22 text-white m-b-0 font-semibold">27</h2>
                                            <p class="font-12 font-semibold">MAR</p>
                                        </li>
                                        <li>
                                            <h2 class="font-22 m-b-0 font-semibold">28</h2>
                                            <p class="font-12 font-semibold">MAR</p>
                                        </li>
                                        <li>
                                            <h2 class="font-22 m-b-0 font-semibold">29</h2>
                                            <p class="font-12 font-semibold">MAR</p>
                                        </li>
                                        <li class="m-r-0">
                                            <h2 class="font-22 m-b-0 font-semibold">30</h2>
                                            <p class="font-12 font-semibold">MAR</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ===== Right-Sidebar ===== -->
                <div class="right-sidebar">
                    <div class="slimscrollright">
                        <div class="rpanel-title"> Service Panel <span><i class="icon-close right-side-toggler"></i></span> </div>
                        <div class="r-panel-body">
                            <ul class="hidden-xs">
                                <li><b>Layout Options</b></li>
                                <li>
                                    <div class="checkbox checkbox-danger">
                                        <input id="headcheck" type="checkbox" class="fxhdr">
                                        <label for="headcheck"> Fix Header </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="checkbox checkbox-warning">
                                        <input id="sidecheck" type="checkbox" class="fxsdr">
                                        <label for="sidecheck"> Fix Sidebar </label>
                                    </div>
                                </li>
                            </ul>
                            <ul id="themecolors" class="m-t-20">
                                <li><b>With Light sidebar</b></li>
                                <li><a href="javascript:void(0)" data-theme="default" class="default-theme working">1</a></li>
                                <li><a href="javascript:void(0)" data-theme="green" class="green-theme">2</a></li>
                                <li><a href="javascript:void(0)" data-theme="yellow" class="yellow-theme">3</a></li>
                                <li><a href="javascript:void(0)" data-theme="red" class="red-theme">4</a></li>
                                <li><a href="javascript:void(0)" data-theme="purple" class="purple-theme">5</a></li>
                                <li><a href="javascript:void(0)" data-theme="black" class="black-theme">6</a></li>
                                <li class="db"><b>With Dark sidebar</b></li>
                                <li><a href="javascript:void(0)" data-theme="default-dark" class="default-dark-theme">7</a></li>
                                <li><a href="javascript:void(0)" data-theme="green-dark" class="green-dark-theme">8</a></li>
                                <li><a href="javascript:void(0)" data-theme="yellow-dark" class="yellow-dark-theme">9</a></li>
                                <li><a href="javascript:void(0)" data-theme="red-dark" class="red-dark-theme">10</a></li>
                                <li><a href="javascript:void(0)" data-theme="purple-dark" class="purple-dark-theme">11</a></li>
                                <li><a href="javascript:void(0)" data-theme="black-dark" class="black-dark-theme">12</a></li>
                            </ul>
                            <ul class="m-t-20 chatonline">
                                <li><b>Chat option</b></li>
                                <li>
                                    <a href="javascript:void(0)"><img src="<?php echo base_url() ?>assets/plugins/images/users/1.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="<?php echo base_url() ?>assets/plugins/images/users/2.jpg" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="<?php echo base_url() ?>assets/plugins/images/users/3.jpg" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="<?php echo base_url() ?>assets/plugins/images/users/4.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="<?php echo base_url() ?>assets/plugins/images/users/5.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="<?php echo base_url() ?>assets/plugins/images/users/6.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- ===== Right-Sidebar-End ===== -->
            </div>
            <!-- ===== Page-Container-End ===== -->
            <footer class="footer t-a-c">
                © 2017 Cubic Admin
            </footer>
        </div>
        <!-- ===== Page-Content-End ===== -->
    </div>
    <!-- ===== Main-Wrapper-End ===== -->
    <!-- ==============================
        Required JS Files
        =============================== -->
    <!-- ===== jQuery ===== -->
    <script src="<?php echo base_url() ?>assets/plugins/components/jquery/dist/jquery.min.js"></script>
    <!-- ===== Bootstrap JavaScript ===== -->
    <script src="<?php echo base_url() ?>assets/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- ===== Slimscroll JavaScript ===== -->
    <script src="<?php echo base_url() ?>assets/js/jquery.slimscroll.js"></script>
    <!-- ===== Wave Effects JavaScript ===== -->
    <script src="<?php echo base_url() ?>assets/js/waves.js"></script>
    <!-- ===== Menu Plugin JavaScript ===== -->
    <script src="<?php echo base_url() ?>assets/js/sidebarmenu.js"></script>
    <!-- ===== Custom JavaScript ===== -->
    <script src="<?php echo base_url() ?>assets/js/custom.js"></script>
    <!-- ===== Plugin JS ===== -->
    <script src="<?php echo base_url() ?>assets/plugins/components/chartist-js/dist/chartist.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/components/knob/jquery.knob.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/components/custom-chart/chart.js"></script>
    <script src="<?php echo base_url() ?>assets/js/db3.js"></script>
    <!-- ===== Style Switcher JS ===== -->
    <script src="<?php echo base_url() ?>assets/plugins/components/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>