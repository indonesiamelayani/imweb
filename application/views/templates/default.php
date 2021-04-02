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
    <title>Indonesia Melayani</title>
    <!-- ===== Bootstrap CSS ===== -->
    <link href="<?php echo base_url() ?>assets/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- ===== Plugin CSS ===== -->
    <link href="<?php echo base_url() ?>assets/plugins/components/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/components/dropify/dist/css/dropify.min.css">
    <!-- <link href="<?php echo base_url() ?>assets/plugins/components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet"> -->
    <link href="<?php echo base_url() ?>assets/plugins/components/css-chart/css-chart.css" rel="stylesheet">
    <!-- ===== Animation CSS ===== -->
    <link href="<?php echo base_url() ?>assets/css/animate.css" rel="stylesheet">
    <!-- ===== Custom CSS ===== -->
    <link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet">
    <!-- ===== Color CSS ===== -->
    <link href="<?php echo base_url() ?>assets/css/colors/red.css" id="theme" rel="stylesheet">
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
                </ul>
                <ul class="nav navbar-top-links navbar-left hidden-xs">
                    <li>
                        <a class="dropdown-toggle waves-effect waves-light font-20" data-toggle="dropdown" href="javascript:void(0);">
                            Hi , ADMIN
                        </a>
                    </li>
                </ul>
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li class="dropdown">
                        <a class="dropdown-toggle waves-effect waves-light font-20" data-toggle="dropdown" href="javascript:void(0);">
                            <i class="icon-power"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-tasks animated slideInUp">
                            <li class="divider"></li>
                            <li>
                                <a class="text-center" href="javascript:void(0);">
                                    <strong>Log OUt</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
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
                            <a href="#" aria-expanded="false">
                                <i class="icon-screen-desktop fa-fw"></i>
                                <span class="hide-menu"> Home </span>
                            </a>
                        </li>
                        <li>
                            <a href="#" aria-expanded="false">
                                <i class="icon-docs fa-fw"></i>
                                <span class="hide-menu"> Halaman </span>
                            </a>
                        </li>
                        <li>
                            <a href="#" aria-expanded="false">
                                <i class="icon-notebook fa-fw"></i>
                                <span class="hide-menu"> Artikel </span>
                            </a>
                        </li>
                        <li>
                            <a href="#" aria-expanded="false">
                                <i class="icon-screen-desktop fa-fw"></i>
                                <span class="hide-menu"> Banner </span>
                            </a>
                        </li>
                        <li>
                            <a href="#" aria-expanded="false">
                                <i class="icon-chart fa-fw"></i>
                                <span class="hide-menu"> Infografis </span>
                            </a>
                        </li>
                        <li>
                            <a href="#" aria-expanded="false">
                                <i class="icon-grid fa-fw"></i>
                                <span class="hide-menu"> Galeri </span>
                            </a>
                        </li>
                        <li>
                            <a href="#" aria-expanded="false">
                                <i class="icon-pie-chart fa-fw"></i>
                                <span class="hide-menu"> Polling </span>
                            </a>
                        </li>
                        <li>
                            <a href="#" aria-expanded="false">
                                <i class="icon-info fa-fw"></i>
                                <span class="hide-menu"> Tentang IM </span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url() ?>admin/user" aria-expanded="false">
                                <i class="icon-people fa-fw"></i>
                                <span class="hide-menu"> User </span>
                            </a>
                        </li>

                    </ul>
                </nav>
            </div>
        </aside>
        <!-- ===== Left-Sidebar-End ===== -->
        <!-- ===== Page-Content ===== -->
        <?php $this->load->view($content); ?>
        <!-- ===== Page-Content-End ===== -->

        <footer class="footer t-a-c">
            © 2021 Indonesia Melayani
        </footer>

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
    <script src="<?php echo base_url() ?>assets/js/db3.js"></script>
    <!-- ===== Style Switcher JS ===== -->
    <script src="<?php echo base_url() ?>assets/plugins/components/styleswitcher/jQuery.style.switcher.js"></script>
    <!-- jQuery file upload -->
    <script src="<?php echo base_url() ?>assets/plugins/components/dropify/dist/js/dropify.min.js"></script>
    <script>
        $(function() {
            // Basic
            $('.dropify').dropify();
            // Translated
            $('.dropify-fr').dropify({
                messages: {
                    default: 'Glissez-déposez un fichier ici ou cliquez',
                    replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                    remove: 'Supprimer',
                    error: 'Désolé, le fichier trop volumineux'
                }
            });
            // Used events
            var drEvent = $('#input-file-events').dropify();
            drEvent.on('dropify.beforeClear', function(event, element) {
                return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
            });
            drEvent.on('dropify.afterClear', function(event, element) {
                alert('File deleted');
            });
            drEvent.on('dropify.errors', function(event, element) {
                console.log('Has Errors');
            });
            var drDestroy = $('#input-file-to-destroy').dropify();
            drDestroy = drDestroy.data('dropify')
            $('#toggleDropify').on('click', function(e) {
                e.preventDefault();
                if (drDestroy.isDropified()) {
                    drDestroy.destroy();
                } else {
                    drDestroy.init();
                }
            })
        });
    </script>
</body>

</html>