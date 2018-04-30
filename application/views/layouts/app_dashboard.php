<!DOCTYPE html>
<html>

<!-- Mirrored from themesdesign.in/upbond_1.1/layouts/green/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 Apr 2018 12:12:59 GMT -->
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Nesas Information <?php echo isset($title) ? "-" . $title : null; ?></title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="ThemeDesign" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="<?php echo base_url('assets/admin/images/favicon.ico'); ?>">

        <!-- DataTables -->
        <link href="<?php echo base_url('assets/admin/plugins/datatables/jquery.dataTables.min.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/admin/plugins/datatables/buttons.bootstrap.min.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/admin/plugins/datatables/fixedHeader.bootstrap.min.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/admin/plugins/datatables/responsive.bootstrap.min.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/admin/plugins/datatables/dataTables.bootstrap.min.css'); ?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url('assets/admin/plugins/datatables/scroller.bootstrap.min.css'); ?>" rel="stylesheet" type="text/css" />


        <!--Morris Chart CSS -->
        <link rel="stylesheet" href="<?php echo base_url('assets/admin/plugins/morris/morris.css'); ?>">

        <link href="<?php echo base_url('assets/admin/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url('assets/admin/css/icons.css'); ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url('assets/admin/css/style.css'); ?>" rel="stylesheet" type="text/css">

    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">
                <!-- LOGO -->
                <div class="topbar-left">
                    <!--<a href="index.html" class="logo"><span>Up</span>Bond</a>-->
                    <!--<a href="index.html" class="logo-sm"><span>U</span></a>-->
                    <a href="<?php echo base_url(); ?>" class="logo"><img src="<?php echo base_url('assets/admin/images/logo.png'); ?>" height="20" alt="logo"></a>
                    <a href="<?php echo base_url(); ?>" class="logo-sm"><img src="<?php echo base_url('assets/admin/images/logo_sm.png'); ?>" height="30" alt="logo"></a>
                </div>
                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="">
                            <div class="pull-left">
                                <button type="button" class="button-menu-mobile open-left waves-effect waves-light">
                                    <i class="ion-navicon"></i>
                                </button>
                                <span class="clearfix"></span>
                            </div>

                            <ul class="nav navbar-nav navbar-right pull-right">
                                <li class="dropdown hidden-xs">
                                    <a href="#" data-target="#" class="dropdown-toggle waves-effect waves-light notification-icon-box" data-toggle="dropdown" aria-expanded="true">
                                        <i class="ion-ios7-bell"></i> <span class="badge badge-xs badge-danger">17</span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-lg">
                                        <li class="text-center notifi-title">Notification <span class="badge badge-xs badge-success">3</span></li>
                                        <li class="list-group">
                                           <!-- list item-->
                                           <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                  <i class="fa fa-diamond text-danger noti-sm-icon"></i>
                                                  <div class="noti-content">
                                                      <div class="media-heading">Your order is placed</div>
                                                      <p class="m-0">
                                                          <small>Dummy text of the printing and typesetting industry.</small>
                                                      </p>
                                                  </div>
                                              </div>
                                           </a>
                                           <!-- list item-->
                                            <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                  <i class="fa  fa-envelope-o text-primary noti-sm-icon"></i>
                                                  <div class="noti-content">
                                                      <div class="media-heading">New Message received</div>
                                                      <p class="m-0">
                                                          <small>You have 87 unread messages</small>
                                                      </p>
                                                  </div>
                                              </div>
                                            </a>
                                            <!-- list item-->
                                            <a href="javascript:void(0);" class="list-group-item">
                                                <i class="fa fa-fighter-jet text-warning noti-sm-icon"></i>
                                                <div class="noti-content">
                                                    <div class="media-heading">Your item is shipped.</div>
                                                    <p class="m-0">
                                                        <small>It is a long established fact that a reader will</small>
                                                    </p>
                                                </div>
                                            </a>
                                           <!-- last list item -->
                                            <a href="javascript:void(0);" class="list-group-item">
                                              <small class="text-primary">See all notifications</small>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="hidden-xs">
                                    <a href="#" id="btn-fullscreen" class="waves-effect waves-light notification-icon-box"><i class="ion-qr-scanner"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle profile waves-effect waves-light" data-toggle="dropdown" aria-expanded="true">
                                        <img src="<?php echo base_url('assets/admin/images/users/avatar-6.jpg'); ?>" alt="user-img" class="img-circle">
                                        <span class="profile-username">
                                            <?php echo $this->session->userdata('user_username'); ?> <span class="caret"></span>
                                        </span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="<?php echo base_url(); ?>"> Beranda</a></li>
                                        <li class="divider"></li>
                                        <li><a href="<?php echo base_url('logout'); ?>"> Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->

            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">

                    <form class="sidebar-search">
                        <div class="">
                            <input type="text" class="form-control search-bar" placeholder="Search...">
                        </div>
                        <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
                    </form>

                    <div class="user-details">
                        <div class="text-center">
                            <img src="<?php echo base_url('assets/admin/images/users/avatar-6.jpg') ?>" alt="" class="img-circle">
                        </div>
                        <div class="user-info">
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><?php echo $this->session->userdata('user_username'); ?> <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo base_url(); ?>"> Beranda</a></li>
                                    <li class="divider"></li>
                                    <li><a href="<?php echo base_url('logout'); ?>"> Logout</a></li>
                                </ul>
                            </div>

                            <!--<p class="text-muted m-0"><i class="fa fa-dot-circle-o text-success"></i> Online</p>-->
                        </div>
                    </div>
                    <!--- Divider -->


                    <div id="sidebar-menu">
                        <ul>
                          <?php
                          // link for admin
                          if ($this->session->userdata('user_level') == 0) {
                            ?>
                            <li>
                                <a href="<?php echo base_url('administrator'); ?>" class="waves-effect <?php if($pageActive == "administrator"){echo "active";} ?>"><i class="ti-home"></i><span> Dashboard</span></a>
                            </li>

                            <li>
                                <a href="<?php echo base_url('administrator/news'); ?>" class="waves-effect <?php if($pageActive == "news"){echo "active";} ?>"><i class="fa fa-newspaper-o"></i><span> News</a>
                            </li>
                            <?php
                          }

                          // link for students
                          else {
                            ?>
                            <li>
                                <a href="<?php echo base_url('dashboard'); ?>" class="waves-effect <?php if($pageActive == "dashboard"){echo "active";} ?>"><i class="ti-home"></i><span> Dashboard</span></a>
                            </li>

                            <li>
                                <a href="<?php echo base_url('dashboard/discussion'); ?>" class="waves-effect <?php if($pageActive == "discussion"){echo "active";} ?>"><i class="fa fa-comments-o"></i><span> Discussion</a>
                            </li>
                            <?php
                          }
                           ?>


                            <!-- <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-bar-chart"></i><span> Charts </span><span class="pull-right"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="charts-chartjs.html">Chartjs</a></li>
                                    <li><a href="charts-flot.html">Flot Chart</a></li>
                                    <li><a href="charts-morris.html">Morris Chart</a></li>
                                    <li><a href="charts-chartist.html">Chartist Chart</a></li>
                                    <li><a href="charts-other.html">Other Chart</a></li>
                                </ul>
                            </li> -->

                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div> <!-- end sidebarinner -->
            </div>
            <!-- Left Sidebar End -->

            <!-- Start right Content here -->

            <div class="content-page">
                <!-- Start content -->
                <div class="content">

                  <div class="page-content-wrapper ">
                    <div class="">
                        <div class="page-header-title">
                            <h4 class="page-title"><?php echo $title; ?></h4>
                        </div>
                    </div>
                      <div class="container">

                      <?php 
                        $data['data'] = isset($data) ? $data : [];

                        $this->load->view('site/admin/'.$content, $data);
                      ?>

                    </div>
                  </div>

                </div> <!-- content -->

                <footer class="footer">
                     © 2018 - URL SQUAD.
                </footer>

            </div>
            <!-- End Right content here -->

        </div>
        <!-- END wrapper -->


        <!-- jQuery  -->
        <script src="<?php echo base_url('assets/admin/js/jquery.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/admin/js/bootstrap.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/admin/js/modernizr.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/admin/js/detect.js'); ?>"></script>
        <script src="<?php echo base_url('assets/admin/js/fastclick.js'); ?>"></script>
        <script src="<?php echo base_url('assets/admin/js/jquery.slimscroll.js'); ?>"></script>
        <script src="<?php echo base_url('assets/admin/js/jquery.blockUI.js'); ?>"></script>
        <script src="<?php echo base_url('assets/admin/js/waves.js'); ?>"></script>
        <script src="<?php echo base_url('assets/admin/js/wow.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/admin/js/jquery.nicescroll.js'); ?>"></script>
        <script src="<?php echo base_url('assets/admin/js/jquery.scrollTo.min.js'); ?>"></script>

        <!-- Datatables-->
        <script src="<?php echo base_url('assets/admin/plugins/datatables/jquery.dataTables.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/admin/plugins/datatables/dataTables.bootstrap.js'); ?>"></script>
        <script src="<?php echo base_url('assets/admin/plugins/datatables/dataTables.buttons.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/admin/plugins/datatables/buttons.bootstrap.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/admin/plugins/datatables/jszip.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/admin/plugins/datatables/pdfmake.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/admin/plugins/datatables/vfs_fonts.js'); ?>"></script>
        <script src="<?php echo base_url('assets/admin/plugins/datatables/buttons.html5.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/admin/plugins/datatables/buttons.print.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/admin/plugins/datatables/dataTables.fixedHeader.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/admin/plugins/datatables/dataTables.keyTable.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/admin/plugins/datatables/dataTables.responsive.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/admin/plugins/datatables/responsive.bootstrap.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/admin/plugins/datatables/dataTables.scroller.min.js'); ?>"></script>

        <!-- Datatable init js -->
        <script src="<?php echo base_url('assets/admin/pages/datatables.init.js'); ?>"></script>

        <!--Morris Chart-->
        <script src="<?php echo base_url('assets/admin/plugins/morris/morris.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/admin/plugins/raphael/raphael-min.js'); ?>"></script>

        <script src="<?php echo base_url('assets/admin/pages/dashborad.js'); ?>"></script>

        <script src="<?php echo base_url('assets/admin/js/app.js'); ?>"></script>

    </body>

<!-- Mirrored from themesdesign.in/upbond_1.1/layouts/green/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 Apr 2018 12:12:59 GMT -->
</html>
