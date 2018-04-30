<!DOCTYPE html>
<html>

<!-- Mirrored from themesdesign.in/upbond_1.1/layouts/green/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 Apr 2018 12:13:54 GMT -->
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Nesas Information - Login</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="ThemeDesign" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <link href="<?php echo base_url('assets/admin/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url('assets/admin/css/icons.css') ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url('assets/admin/css/style.css') ?>" rel="stylesheet" type="text/css">

    </head>


    <body>

        <!-- Begin page -->
        <div class="accountbg"></div>
        <div class="wrapper-page">
            <div class="panel panel-color panel-primary panel-pages">

                <div class="panel-body">
                    <h3 class="text-center m-t-0 m-b-15">
                        <a href="<?php echo base_url(); ?>" class="logo logo-admin"><img src="<?php echo base_url('assets/admin/images/logo_dark.png') ?>" height="28" alt="logo"></a>
                    </h3>
                    <h4 class="text-muted text-center m-t-0"><b>Sign In</b></h4>

                    <form class="form-horizontal m-t-20" action="" method="POST">

                        <div class="form-group">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" required="" name="username" value="<?php echo set_value('username'); ?>" placeholder="Username">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-12">
                                <input class="form-control" type="password" required="" name="password" placeholder="Password">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-12">
                                <div class="checkbox checkbox-primary">
                                    <input id="checkbox-signup" type="checkbox">
                                    <label for="checkbox-signup">
                                        Remember me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group text-center m-t-40">
                            <div class="col-xs-12">
                                <button class="btn btn-primary btn-block btn-lg waves-effect waves-light" type="submit" name="loginTrue" value="submit">Log In</button>
                            </div>
                        </div>

                        <div class="form-group m-t-30 m-b-0">
                            <div class="col-sm-7">
                                <a href="pages-recoverpw.html" class="text-muted"><i class="fa fa-lock m-r-5"></i> Forgot your password?</a>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>



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

        <script src="<?php echo base_url('assets/admin/js/app.js') ?>"></script>

    </body>

<!-- Mirrored from themesdesign.in/upbond_1.1/layouts/green/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 Apr 2018 12:13:55 GMT -->
</html>
