<!DOCTYPE html>
<html lang="en">
    <head>
        <?php $this->load->view('Templates/header'); ?>
        <link rel="shortcut icon" type="image/png" href="assets/images/fevicon.png"/>
        <script type="text/javascript">
            //-- Set common javascript vairable
            var site_url = "<?php echo site_url('/') ?>";
            var base_url = "<?php echo base_url() ?>";
            var social_icon_base_1 = base_url + '<?php echo SOCIAL_ICONS_SET_1 ?>';
            var social_icon_base_2 = base_url + '<?php echo SOCIAL_ICONS_SET_2 ?>';
            var social_icon_base_3 = base_url + '<?php echo SOCIAL_ICONS_SET_3 ?>';
            var social_icon_base_4 = base_url + '<?php echo SOCIAL_ICONS_SET_4 ?>';
            var package_image_base_path = base_url + '<?php echo PACKAGE_IMAGES ?>';

            $(document).ready(function () {
                //--Hide the alert message 
                window.setTimeout(function () {
                    $(".hide-msg").fadeTo(500, 0).slideUp(500, function () {
                        $(this).remove();
                    });
                }, 7000);
            });
        </script>
        <style type="text/css">
            .error{
                color: red;
                font-weight: bold;
            }
        </style>
    </head>
    <body>
        <!-- Main navbar -->
        <div class="navbar navbar-inverse">
            <div class="navbar-header">
                <a class="navbar-brand" href="<?php echo site_url('admin/home'); ?>" style="padding: 3px 13px">
                    <!-- <h5>HTML SIGNATURE</h5> -->
                    <img src="assets/images/footer-logo.png" style="height: 34px;">
                </a>
                <ul class="nav navbar-nav visible-xs-block">
                    <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
                    <li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
                </ul>
            </div>
            <div class="navbar-collapse collapse" id="navbar-mobile">
                <ul class="nav navbar-nav">
                    <li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown dropdown-user">
                        <a class="dropdown-toggle" data-toggle="dropdown">
                            <img src="assets/admin/images/placeholder.jpg" alt="<?php echo $this->session->userdata('htmlsig_admin')['fullname'] ?>">
                            <span><?php echo $this->session->userdata('htmlsig_admin')['fullname'] ?></span>
                            <i class="caret"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="<?php echo site_url('/') ?>" target="_blank"><i class="icon-cog5"></i> Visit Site</a></li>
                            <!--<li><a href="<?php echo site_url('admin/account_profile') ?>"><i class="icon-cog5"></i> Manage Profile</a></li>-->
                            <li><a href="<?php echo site_url('admin/change_password') ?>"><i class="icon-key"></i> Change password</a></li>
                            <li><a href="<?php echo site_url('admin/logout') ?>"><i class="icon-switch2"></i> Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /main navbar -->
        <!-- Page container -->
        <div class="page-container">
            <!-- Page content -->
            <div class="page-content">
                <!-- Main sidebar -->
                <div class="sidebar sidebar-main">
                    <div class="sidebar-content">
                        <!-- User menu -->
                        <div class="sidebar-user">
                            <div class="category-content">
                                <div class="media">
                                    <a class="media-left"><img src="assets/admin/images/placeholder.jpg" class="img-circle img-sm" alt="<?php echo $this->session->userdata('htmlsig_admin')['fullname'] ?>"></a>
                                    <div class="media-body">
                                        <span class="media-heading text-semibold">Signaturia</span>
                                        <div class="text-size-mini text-muted">
                                            <i class="icon-user text-size-small"></i> &nbsp;Admin
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /user menu -->

                        <!-- Main navigation -->
                        <div class="sidebar-category sidebar-category-visible">
                            <div class="category-content no-padding">
                                <ul class="navigation navigation-main navigation-accordion">
                                    <?php
                                    $controller = $this->router->fetch_class();
                                    $action = $this->router->fetch_method();
                                    ?>
                                    <li class="<?php echo ($controller == 'home' && $action == 'index') ? 'active' : ''; ?>"><a href="<?php echo site_url('admin/home'); ?>"><i class="icon-home4"></i> <span>Dashboard</span></a></li>
                                    <li class="<?php echo ($controller == 'packages') ? 'active' : ''; ?>"><a href="<?php echo site_url('admin/packages'); ?>"><i class="icon-package"></i> <span>Manage Packages</span></a></li>
                                    <li class="<?php echo ($controller == 'social_icons') ? 'active' : ''; ?>"><a href="<?php echo site_url('admin/social_icons'); ?>"><i class="icon-share3"></i> <span>Manage Social Icons</span></a></li>
                                    <li class="<?php echo ($controller == 'users') ? 'active' : ''; ?>"><a href="<?php echo site_url('admin/users'); ?>"><i class="icon-users2"></i> <span>Manage Users</span></a></li>
                                    <li class="<?php echo ($controller == 'payments') ? 'active' : ''; ?>"><a href="<?php echo site_url('admin/payments'); ?>"><i class="icon-stats-bars3"></i> <span>Payments report</span></a></li>
                                    <li class="<?php echo ($controller == 'payment_settings') ? 'active' : ''; ?>"><a href="<?php echo site_url('admin/payment_settings'); ?>"><i class="icon-gear"></i> <span>Payment settings</span></a></li>
                                    <li class="<?php echo ($controller == 'email_templates') ? 'active' : ''; ?>"><a href="<?php echo site_url('admin/email_templates'); ?>"><i class="icon-envelop4"></i> <span>Email Templates</span></a></li>
                                    <li class="<?php echo ($controller == 'user_guide') ? 'active' : ''; ?>"><a href="<?php echo site_url('admin/user_guide'); ?>"><i class="icon-book3"></i> <span>User guide</span></a></li>
                                    <li class="<?php echo ($controller == 'user_guide') ? 'active' : ''; ?>"><a href="<?php echo site_url('admin/offers'); ?>"><i class="icon-stars"></i> <span>Offers</span></a></li>
                                    <li class="<?php echo ($controller == 'user_guide') ? 'active' : ''; ?>"><a href="<?php echo site_url('admin/users/add_admin'); ?>"><i class="icon-user"></i> <span>Create Admin</span></a></li>
                                    <li><a href="<?php echo site_url('admin/logout'); ?>"><i class="icon-switch2"></i> <span>Logout</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- /main navigation -->
                    </div>
                </div>
                <!-- /main sidebar -->
                <!-- Main content -->
                <div class="content-wrapper">
                    <!-- Page header -->
                    <?php echo $body; ?>
                </div>
                <!-- /main content -->
            </div>
            <!-- /page content -->
        </div>
        <!-- /page container -->
    </body>
</html>
