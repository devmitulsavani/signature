<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Facebook Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq)
                return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq)
                f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window,
            document, 'script', 'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '467087870333697'); // Insert your pixel ID here.
        fbq('track', 'PageView');
        fbq('track', 'CompleteRegistration');
        fbq('track', 'Lead');
        fbq('track', 'ViewContent');
    </script>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=467087870333697&ev=PageView&noscript=1" /></noscript>
    <!-- DO NOT MODIFY -->
    <!-- End Facebook Pixel Code -->
    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-103031970-1', 'auto');
        ga('send', 'pageview');
    </script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <base href="<?php echo base_url(); ?>">
    <title><?php echo $title; ?></title>
    <link rel="icon" type="image/png" href="assets/image/favicon.png" sizes="16x16">
    <!-- Bootstrap -->
    <link href="assets/css/owl.carousel.css" rel="stylesheet">
    <!-- <link href="assets/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <link href="assets/css/bootstrap-select.css" rel="stylesheet" />
    <link href="assets/css/bootstrap-colorpicker.min.css" rel="stylesheet">
    <!-- <link href="assets/css/style.css" rel="stylesheet"> -->

    <!--new add link -->
    <link href="assets/css/output.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script type="text/javascript">
        site_url = "<?php echo site_url(); ?>";
        base_url = "<?php echo base_url(); ?>";
    </script>
    <style type="text/css">
        .error {
            color: red;
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->

    <!-- remove link -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap-select.js"></script>
    <script src="assets/js/bootstrap-colorpicker.js"></script>
    <script src="assets/js/classie.js"></script>
    <!-- remove link -->


    <!--new added jquery-->
    <script src="assets/Jquery/chart.min.js"></script>
    <!-- slider -->
    <script src="assets/Jquery/jquery-3.6.0.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap-select.js"></script>
    <script src="assets/js/bootstrap-colorpicker.js"></script>
    <script src="assets/js/owl.carousel.js"></script>
    <script src="assets/slider/slick.min.js"></script>
    <script src="assets/Jquery/custom.js"></script>

    <script>
        $('.toggle-view').click(function() {
            $('.toggle-view').removeClass('active');
            $(this).addClass('active');
            var add_class = $(this).attr('data-id');
            if (add_class == 'box-view') {
                $('.list-wrap').removeClass('list-view');
                $('.list-wrap').addClass(add_class);
            } else {
                $('.list-wrap').removeClass('box-view');
                $('.list-wrap').addClass(add_class);
            }
        });
    </script>
</head>






<!-- new ui -->


<body class="log bg-[#EDF1F8]">
    <header class="lg:hidden p-4 bg-white sticky top-0 z-10 shadow-sm">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="flex items-center flex-wrap justify-between">
            <svg class="h-6 w-6 burger-menu cursor-pointer" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <a href="index.html"><img class="max-w-[150px]" src="assets/image/logo.png" alt=""></a>

            <!-- <a class="navbar-brand" href="#">
                <img src="assets/images/signaturia-logo.png" alt="">
            </a> -->


            <!-- **********************search bar****************** -->

            <!-- <div class="sticky top-20 md:top-3 w-full md:w-1/2 md:pr-4 h-min z-10 mb-3">
            <input type="text" class="form-control text-sm p-4 rounded shadow w-full outline-none" placeholder="Search signature...">
            <i class="fa fa-search" aria-hidden="true"></i>
        </div>  -->

            <div class="flex items-center justify-between cursor-pointer space-x-4 relative profile-menu">
                <?php if ($this->session->userdata('htmlsig_user')['profile_pic'] != '' && file_exists(PROFILE_IMAGES . $this->session->userdata('htmlsig_user')['profile_pic'])) { ?>
                    <img class="rounded-[10px]" src="<?php echo PROFILE_IMAGES . $this->session->userdata('htmlsig_user')['profile_pic'] ?>" alt="<?php echo $this->session->userdata('htmlsig_user')['fullname'] ?>" />
                <?php } else { ?>
                    <img class="rounded-[10px]" src="assets/image/Rectangle 145.png" alt="<?php echo $this->session->userdata('htmlsig_user')['fullname'] ?>" />
                <?php } ?>
                <span class="hidden sm:inline-block"><?php echo $this->session->userdata('htmlsig_user')['fullname'] ?></span>
                <ul class="absolute top-[calc(100%+19px)] right-0 hidden profile-items bg-white shadow-md min-w-[190px]">
                    <li><a href="<?php echo site_url('profile') ?>" class="text-primary hover:text-opacity-100 duration-300 ease-in-out text-opacity-70 flex items-center py-3 px-8 rounded-md text-sm font-medium"><svg fill="currentColor" class="w-5 h-5 mr-4" xmlns="http://www.w3.org/2000/svg" id="Outline" viewBox="0 0 24 24">
                                <title>94 user</title>
                                <path d="M12,12A6,6,0,1,0,6,6,6.006,6.006,0,0,0,12,12ZM12,2A4,4,0,1,1,8,6,4,4,0,0,1,12,2Z" />
                                <path d="M12,14a9.01,9.01,0,0,0-9,9,1,1,0,0,0,2,0,7,7,0,0,1,14,0,1,1,0,0,0,2,0A9.01,9.01,0,0,0,12,14Z" />
                            </svg>My Profile</a></li>
                    <li><a href="<?php echo site_url('logout') ?>" class="text-primary hover:text-opacity-100 duration-300 ease-in-out text-opacity-70 flex items-center py-3 px-8 rounded-md text-sm font-medium"><svg fill="currentColor" class="w-5 h-5 mr-4" xmlns="http://www.w3.org/2000/svg" id="Outline" viewBox="0 0 24 24">
                                <title>191 log out</title>
                                <path d="M7,22H5a3,3,0,0,1-3-3V5A3,3,0,0,1,5,2H7A1,1,0,0,0,7,0H5A5.006,5.006,0,0,0,0,5V19a5.006,5.006,0,0,0,5,5H7a1,1,0,0,0,0-2Z" />
                                <path d="M18.538,18.707l4.587-4.586a3.007,3.007,0,0,0,0-4.242L18.538,5.293a1,1,0,0,0-1.414,1.414L21.416,11H6a1,1,0,0,0,0,2H21.417l-4.293,4.293a1,1,0,1,0,1.414,1.414Z" />
                            </svg> Logout</a></li>
                </ul>
                <svg xmlns="http://www.w3.org/2000/svg" class="text-primary" width="3" height="13" viewBox="0 0 3 13">
                    <g id="fi-rr-menu-dots-vertical" transform="translate(-10.064 0.878)">
                        <circle id="Ellipse_40" data-name="Ellipse 40" cx="1.5" cy="1.5" r="1.5" transform="translate(10.064 -0.878)" fill="currentColor" />
                        <circle id="Ellipse_41" data-name="Ellipse 41" cx="1.5" cy="1.5" r="1.5" transform="translate(10.064 4.122)" fill="currentColor" />
                        <circle id="Ellipse_42" data-name="Ellipse 42" cx="1.5" cy="1.5" r="1.5" transform="translate(10.064 9.122)" fill="currentColor" />
                    </g>
                </svg>
            </div>
        </div>

        <!--         
        <div class="dropdown user-drop">
            <a href="#" class="dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                <span class="user-avtar">
                    <?php if ($this->session->userdata('htmlsig_user')['profile_pic'] != '' && file_exists(PROFILE_IMAGES . $this->session->userdata('htmlsig_user')['profile_pic'])) { ?>
                        <img src="<?php echo PROFILE_IMAGES . $this->session->userdata('htmlsig_user')['profile_pic'] ?>" alt="<?php echo $this->session->userdata('htmlsig_user')['fullname'] ?>" />
                    <?php } else { ?>
                        <img src="assets/images/avatar.jpg" alt="<?php echo $this->session->userdata('htmlsig_user')['fullname'] ?>" />
                    <?php } ?>
                </span>
                <span class="user-name"><?php echo $this->session->userdata('htmlsig_user')['fullname'] ?></span><span class="caret"></span>
            </a>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <li><a href="<?php echo site_url('profile') ?>"><i class="zmdi zmdi-settings zmdi-hc-fw"></i> My Profile</a></li>
                <li><a href="<?php echo site_url('logout') ?>"><i class="zmdi zmdi-power zmdi-hc-fw"></i> Logout</a></li>
            </ul>
        </div>
        -->
    </header>

    <div class="dash--wrap <?php echo ($this->router->fetch_class() == 'customsignature' || $this->router->fetch_class() == 'manage_signature') ? "custom" : ""; ?>">
        <div class="fixed h-screen top-0 left-0 px-5 py-9 bg-white w-72 shadow-lg sidebar duration-300 -translate-x-[500px] lg:translate-x-0 z-20">
            <div class="logo">
                <a href="index.html"><img class="max-w-xs" src="assets/image/logo.png" alt=""></a>
            </div>
            <!-- <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button> -->
            <!-- Collect the nav links, forms, and other content for toggling -->
            <?php $controller = $this->router->fetch_class();
            $method = $this->router->fetch_method(); ?>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="my-10 overflow-y-auto h-[calc(100%-100px)] sidebar-items">
                <ul class="space-y-2">
                    <?php
                    if ($this->session->userdata('htmlsig_user')['type'] == 2) {
                    ?>
                        <li><a class="<?php echo ($controller == 'dashboard' && $method == 'index') ? 'bg-primary text-white' : '' ?>  duration-300 ease-in-out flex items-center py-3 px-8 rounded-md text-sm font-medium" href="<?php echo site_url('dashboard') ?>"><svg class="mr-4" id="fi-rr-apps" width="20" height="20" viewBox="0 0 20 20">
                                    <path id="Path_375" data-name="Path 375" d="M5.833,0h-2.5A3.333,3.333,0,0,0,0,3.333v2.5A3.333,3.333,0,0,0,3.333,9.167h2.5A3.333,3.333,0,0,0,9.167,5.833v-2.5A3.333,3.333,0,0,0,5.833,0ZM7.5,5.833A1.667,1.667,0,0,1,5.833,7.5h-2.5A1.667,1.667,0,0,1,1.667,5.833v-2.5A1.667,1.667,0,0,1,3.333,1.667h2.5A1.667,1.667,0,0,1,7.5,3.333Z" fill="currentColor" />
                                    <path id="Path_376" data-name="Path 376" d="M16.667,0h-2.5a3.333,3.333,0,0,0-3.333,3.333v2.5a3.333,3.333,0,0,0,3.333,3.333h2.5A3.333,3.333,0,0,0,20,5.833v-2.5A3.333,3.333,0,0,0,16.667,0Zm1.667,5.833A1.667,1.667,0,0,1,16.667,7.5h-2.5A1.667,1.667,0,0,1,12.5,5.833v-2.5a1.667,1.667,0,0,1,1.667-1.667h2.5a1.667,1.667,0,0,1,1.667,1.667Z" fill="currentColor" />
                                    <path id="Path_377" data-name="Path 377" d="M5.833,10.833h-2.5A3.333,3.333,0,0,0,0,14.167v2.5A3.333,3.333,0,0,0,3.333,20h2.5a3.333,3.333,0,0,0,3.333-3.333v-2.5A3.333,3.333,0,0,0,5.833,10.833ZM7.5,16.667a1.667,1.667,0,0,1-1.667,1.667h-2.5a1.667,1.667,0,0,1-1.667-1.667v-2.5A1.667,1.667,0,0,1,3.333,12.5h2.5A1.667,1.667,0,0,1,7.5,14.167Z" fill="currentColor" />
                                    <path id="Path_378" data-name="Path 378" d="M16.667,10.833h-2.5a3.333,3.333,0,0,0-3.333,3.333v2.5A3.333,3.333,0,0,0,14.167,20h2.5A3.333,3.333,0,0,0,20,16.667v-2.5A3.333,3.333,0,0,0,16.667,10.833Zm1.667,5.833a1.667,1.667,0,0,1-1.667,1.667h-2.5A1.667,1.667,0,0,1,12.5,16.667v-2.5A1.667,1.667,0,0,1,14.167,12.5h2.5a1.667,1.667,0,0,1,1.667,1.667Z" fill="currentColor" />
                                </svg><span>Dashboard</span></a></li>
                        <?php
                        foreach ($this->generators as $key => $value) {
                            $token = $this->my_encryption->safe_b64decode($this->input->get('token'));
                            $explode = explode('::', $token);
                            $generator_id = $value['generator_id'];
                            $activate_key = $this->my_encryption->safe_b64encode($generator_id . '::' . KEY);
                            $url = site_url('manage_signature/create_signature?token=' . $activate_key);
                        ?>
                            <li class="<?php echo ($explode[0] == $generator_id) ? 'active' : '' ?>"><a href="<?php echo $url ?>"><i class="fa fa-sliders" aria-hidden="true"></i><span><?php echo $value['name']; ?></span></a></li>
                        <?php
                        }
                    } else {
                        ?>
                        <?php if ($this->allow_perm['generator'] == 1) { ?>
                            <li class="in--btn"><a class="my-3 hover:bg-primary hover:text-white hover:text-opacity-100 duration-300 ease-in-out text-opacity-70 flex items-center py-3 px-8 rounded-md text-sm font-medium border-2 border-primary" href="<?php echo site_url('generators/add') ?>"><svg class="mr-4" width="20" height="20" viewBox="0 0 20 20">
                                        <path id="fi-rr-add" d="M10,0A10,10,0,1,0,20,10,10,10,0,0,0,10,0Zm0,18.333A8.333,8.333,0,1,1,18.333,10,8.333,8.333,0,0,1,10,18.333ZM14.167,10a.833.833,0,0,1-.833.833h-2.5v2.5a.833.833,0,0,1-1.667,0v-2.5h-2.5a.833.833,0,0,1,0-1.667h2.5v-2.5a.833.833,0,1,1,1.667,0v2.5h2.5A.833.833,0,0,1,14.167,10Z" fill="currentColor" />
                                    </svg></i><span>New Generator</span></a></li>
                        <?php } ?>

                        <li><a class="<?php echo ($controller == 'dashboard' && $method == 'index') ? 'bg-primary text-white' : '' ?> text-primary duration-300 ease-in-out flex items-center py-3 px-8 rounded-md text-sm font-medium" href="<?php echo site_url('dashboard') ?>"><svg class="mr-4" id="fi-rr-apps" width="20" height="20" viewBox="0 0 20 20">
                                    <path id="Path_375" data-name="Path 375" d="M5.833,0h-2.5A3.333,3.333,0,0,0,0,3.333v2.5A3.333,3.333,0,0,0,3.333,9.167h2.5A3.333,3.333,0,0,0,9.167,5.833v-2.5A3.333,3.333,0,0,0,5.833,0ZM7.5,5.833A1.667,1.667,0,0,1,5.833,7.5h-2.5A1.667,1.667,0,0,1,1.667,5.833v-2.5A1.667,1.667,0,0,1,3.333,1.667h2.5A1.667,1.667,0,0,1,7.5,3.333Z" fill="currentColor" />
                                    <path id="Path_376" data-name="Path 376" d="M16.667,0h-2.5a3.333,3.333,0,0,0-3.333,3.333v2.5a3.333,3.333,0,0,0,3.333,3.333h2.5A3.333,3.333,0,0,0,20,5.833v-2.5A3.333,3.333,0,0,0,16.667,0Zm1.667,5.833A1.667,1.667,0,0,1,16.667,7.5h-2.5A1.667,1.667,0,0,1,12.5,5.833v-2.5a1.667,1.667,0,0,1,1.667-1.667h2.5a1.667,1.667,0,0,1,1.667,1.667Z" fill="currentColor" />
                                    <path id="Path_377" data-name="Path 377" d="M5.833,10.833h-2.5A3.333,3.333,0,0,0,0,14.167v2.5A3.333,3.333,0,0,0,3.333,20h2.5a3.333,3.333,0,0,0,3.333-3.333v-2.5A3.333,3.333,0,0,0,5.833,10.833ZM7.5,16.667a1.667,1.667,0,0,1-1.667,1.667h-2.5a1.667,1.667,0,0,1-1.667-1.667v-2.5A1.667,1.667,0,0,1,3.333,12.5h2.5A1.667,1.667,0,0,1,7.5,14.167Z" fill="currentColor" />
                                    <path id="Path_378" data-name="Path 378" d="M16.667,10.833h-2.5a3.333,3.333,0,0,0-3.333,3.333v2.5A3.333,3.333,0,0,0,14.167,20h2.5A3.333,3.333,0,0,0,20,16.667v-2.5A3.333,3.333,0,0,0,16.667,10.833Zm1.667,5.833a1.667,1.667,0,0,1-1.667,1.667h-2.5A1.667,1.667,0,0,1,12.5,16.667v-2.5A1.667,1.667,0,0,1,14.167,12.5h2.5a1.667,1.667,0,0,1,1.667,1.667Z" fill="currentColor" />
                                </svg><span>Dashboard</span></a></li>
                        <?php if ($this->allow_perm['generator'] == 1) { ?>
                            <li><a class="<?php echo ($controller == 'generators' && $method == 'index') ? 'bg-primary text-white text-opacity-100' : '' ?> text-primary hover:bg-primary hover:text-white hover:text-opacity-100 duration-300 ease-in-out flex items-center py-3 px-8 rounded-md text-sm font-medium" href="<?php echo site_url('generators') ?>"><svg class="mr-4" width="20" height="20" viewBox="0 0 20 20">
                                        <g id="fi-rr-settings-sliders" transform="translate(0 0)">
                                            <path id="Path_379" data-name="Path 379" d="M.833,3.958h2.28a3.107,3.107,0,0,0,6,0H19.166a.833.833,0,0,0,0-1.667H9.109a3.107,3.107,0,0,0-6,0H.833a.833.833,0,1,0,0,1.667ZM6.111,1.667A1.458,1.458,0,1,1,4.652,3.125,1.458,1.458,0,0,1,6.111,1.667Z" fill="currentColor" />
                                            <path id="Path_380" data-name="Path 380" d="M19.166,9.166h-2.28a3.106,3.106,0,0,0-5.995,0H.833a.833.833,0,0,0,0,1.667H10.891a3.106,3.106,0,0,0,5.995,0h2.28a.833.833,0,0,0,0-1.667Zm-5.277,2.292A1.458,1.458,0,1,1,15.347,10a1.458,1.458,0,0,1-1.458,1.458Z" fill="currentColor" />
                                            <path id="Path_381" data-name="Path 381" d="M19.166,16.041H9.109a3.107,3.107,0,0,0-6,0H.833a.833.833,0,0,0,0,1.667h2.28a3.107,3.107,0,0,0,6,0H19.166a.833.833,0,0,0,0-1.667ZM6.111,18.333a1.458,1.458,0,1,1,1.458-1.458A1.458,1.458,0,0,1,6.111,18.333Z" fill="currentColor" />
                                        </g>
                                    </svg><span>Generator</span></a></li>
                            <li><a class="<?php echo ($controller == 'employees') ? 'bg-primary text-white text-opacity-100' : '' ?> text-primary hover:bg-primary hover:text-white hover:text-opacity-100 duration-300 ease-in-out flex items-center py-3 px-8 rounded-md text-sm font-medium" href="<?php echo site_url('employees') ?>"><svg class="mr-4" width="15.556" height="19.704" viewBox="0 0 15.556 19.704">
                                        <g id="Group_237" data-name="Group 237" transform="translate(-56.5 -124)">
                                            <g id="fi-rr-user" transform="translate(54 123)">
                                                <path id="Path_382" data-name="Path 382" d="M10.185,10.371A5.185,5.185,0,1,0,5,5.185a5.185,5.185,0,0,0,5.185,5.185Zm0-8.642A3.457,3.457,0,1,1,6.728,5.185a3.457,3.457,0,0,1,3.457-3.457Z" transform="translate(0.093 1)" fill="currentColor" />
                                                <path id="Path_383" data-name="Path 383" d="M10.278,11.667A7.787,7.787,0,0,0,2.5,19.445a.864.864,0,1,0,1.728,0,6.05,6.05,0,1,1,12.1,0,.864.864,0,0,0,1.728,0A7.787,7.787,0,0,0,10.278,11.667Z" transform="translate(0 0.395)" fill="currentColor" />
                                            </g>
                                        </g>
                                    </svg><span>Employees</span></a></li>
                            <li><a class="<?php echo ($controller == 'share-generator') ? 'bg-primary text-white text-opacity-100' : '' ?> text-primary hover:bg-primary hover:text-white hover:text-opacity-100 duration-300 ease-in-out flex items-center py-3 px-8 rounded-md text-sm font-medium" href="<?php echo site_url('share-generator') ?>"><svg class="mr-4" width="20" height="19.978" viewBox="0 0 20 19.978">
                                        <path id="fi-rr-share" d="M16.092,12.208a3.879,3.879,0,0,0-3.2,1.685L7.479,11.447a3.807,3.807,0,0,0,0-2.9l5.41-2.459a3.879,3.879,0,1,0-.688-2.2,3.856,3.856,0,0,0,.067.654L6.52,7.153a3.886,3.886,0,1,0-.012,5.683l5.767,2.6a3.942,3.942,0,0,0-.066.653,3.885,3.885,0,1,0,3.884-3.884Zm0-10.544a2.22,2.22,0,1,1-2.219,2.22,2.22,2.22,0,0,1,2.219-2.22ZM3.885,12.208A2.22,2.22,0,1,1,6.1,9.989a2.22,2.22,0,0,1-2.219,2.22Zm12.208,6.1a2.22,2.22,0,1,1,2.22-2.22,2.22,2.22,0,0,1-2.22,2.22Z" transform="translate(0.022 0.001)" fill="currentColor" />
                                    </svg><span>Share Generator</span></a></li>
                        <?php } ?>
                        <li><a class="<?php echo ($controller == 'create_signature' && $method == 'create_signature') ? 'bg-primary text-white text-opacity-100' : '' ?>text-primary hover:bg-primary hover:text-white hover:text-opacity-100 duration-300 ease-in-out flex items-center py-3 px-8 rounded-md text-sm font-medium" href="<?php echo site_url('create_signature') ?>"><svg class="mr-4" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20">
                                    <defs>
                                        <clipPath id="clip-path">
                                            <rect id="Rectangle_149" data-name="Rectangle 149" width="20" height="20" transform="translate(54 124)" fill="currentColor" stroke="currentColor" stroke-width="1" />
                                        </clipPath>
                                    </defs>
                                    <g id="Mask_Group_7" data-name="Mask Group 7" transform="translate(-54 -124)" clip-path="url(#clip-path)">
                                        <path id="fi-rr-browser" d="M15.833.833H4.167A4.172,4.172,0,0,0,0,5V15a4.172,4.172,0,0,0,4.167,4.167H15.833A4.172,4.172,0,0,0,20,15V5A4.172,4.172,0,0,0,15.833.833ZM4.167,2.5H15.833a2.5,2.5,0,0,1,2.5,2.5v.833H1.667V5a2.5,2.5,0,0,1,2.5-2.5Zm11.667,15H4.167a2.5,2.5,0,0,1-2.5-2.5V7.5H18.333V15A2.5,2.5,0,0,1,15.833,17.5Zm0-6.667a.833.833,0,0,1-.833.833H5A.833.833,0,1,1,5,10H15A.833.833,0,0,1,15.833,10.833ZM12.5,14.167a.833.833,0,0,1-.833.833H5a.833.833,0,1,1,0-1.667h6.667A.833.833,0,0,1,12.5,14.167Zm-10-10A.833.833,0,1,1,3.333,5,.833.833,0,0,1,2.5,4.167Zm2.5,0A.833.833,0,1,1,5.833,5,.833.833,0,0,1,5,4.167Zm2.5,0A.833.833,0,1,1,8.333,5,.833.833,0,0,1,7.5,4.167Z" transform="translate(54 124)" fill="currentColor" />
                                    </g>
                                </svg><span>Create Signature</span></a></li>
                        <?php if ($this->allow_perm['custom_signature'] == 1) { ?>
                            <li><a class="<?php echo (strtolower($controller) == 'customsignature') ? 'bg-primary text-white text-opacity-100' : '' ?>text-primary hover:bg-primary hover:text-white hover:text-opacity-100 duration-300 ease-in-out flex items-center py-3 px-8 rounded-md text-sm font-medium" href="<?php echo site_url('custom_signature') ?>"><svg class="mr-4" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20">
                                        <defs>
                                            <clipPath id="clip-path">
                                                <rect id="Rectangle_150" data-name="Rectangle 150" width="20" height="20" transform="translate(54 124)" fill="currentColor" stroke="currentColor" stroke-width="1" />
                                            </clipPath>
                                        </defs>
                                        <g id="Mask_Group_8" data-name="Mask Group 8" transform="translate(-54 -124)" clip-path="url(#clip-path)">
                                            <g id="fi-rr-edit" transform="translate(54 124)">
                                                <path id="Path_384" data-name="Path 384" d="M15.547.775,5.387,10.935a4.138,4.138,0,0,0-1.22,2.946V15A.833.833,0,0,0,5,15.833H6.119a4.138,4.138,0,0,0,2.946-1.22l10.16-10.16a2.6,2.6,0,0,0,0-3.678,2.662,2.662,0,0,0-3.678,0Zm2.5,2.5L7.887,13.435a2.517,2.517,0,0,1-1.767.732H5.833v-.286a2.517,2.517,0,0,1,.732-1.767l10.16-10.16a.957.957,0,0,1,1.322,0,.936.936,0,0,1,0,1.322Z" fill="currentColor" />
                                                <path id="Path_385" data-name="Path 385" d="M19.167,7.482a.833.833,0,0,0-.833.833V12.5H15A2.5,2.5,0,0,0,12.5,15v3.333H4.167a2.5,2.5,0,0,1-2.5-2.5V4.167a2.5,2.5,0,0,1,2.5-2.5H11.7A.833.833,0,0,0,11.7,0H4.167A4.172,4.172,0,0,0,0,4.167V15.833A4.172,4.172,0,0,0,4.167,20h9.452a4.14,4.14,0,0,0,2.947-1.22l2.213-2.215A4.14,4.14,0,0,0,20,13.619v-5.3A.833.833,0,0,0,19.167,7.482ZM15.387,17.6a2.479,2.479,0,0,1-1.221.667V15A.833.833,0,0,1,15,14.167h3.271a2.513,2.513,0,0,1-.667,1.22Z" fill="currentColor" />
                                            </g>
                                        </g>
                                    </svg><span>custom signature</span></a></li>
                        <?php } ?>
                        <?php if ($this->allow_perm['stat'] == 1) { ?>
                            <li><a class="<?php echo ($controller == 'stats') ? 'bg-primary text-white text-opacity-100' : '' ?> text-primary hover:bg-primary hover:text-white hover:text-opacity-100 duration-300 ease-in-out flex items-center py-3 px-8 rounded-md text-sm font-medium" href="<?php echo site_url('stats-report') ?>"><svg class="mr-4" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20">
                                        <defs>
                                            <clipPath id="clip-path">
                                                <rect id="Rectangle_152" data-name="Rectangle 152" width="20" height="20" transform="translate(54 124)" fill="currentColor" stroke="currentColor" stroke-width="1" />
                                            </clipPath>
                                        </defs>
                                        <g id="Mask_Group_10" data-name="Mask Group 10" transform="translate(-54 -124)" clip-path="url(#clip-path)">
                                            <g id="fi-rr-stats" transform="translate(49.078 120.56)">
                                                <path id="Path_387" data-name="Path 387" d="M26.222,25.082H3.42a1.14,1.14,0,0,1-1.14-1.14V1.14A1.14,1.14,0,0,0,0,1.14v22.8a3.42,3.42,0,0,0,3.42,3.42h22.8a1.14,1.14,0,1,0,0-2.28Z" transform="translate(0 0)" fill="currentColor" />
                                                <path id="Path_388" data-name="Path 388" d="M12.807,19.428a1.14,1.14,0,0,0,1.14-1.14V10.307a1.14,1.14,0,1,0-2.28,0v7.981A1.14,1.14,0,0,0,12.807,19.428Z" transform="translate(4.295 3.374)" fill="currentColor" />
                                                <path id="Path_389" data-name="Path 389" d="M6.14,19.428a1.14,1.14,0,0,0,1.14-1.14V10.307a1.14,1.14,0,1,0-2.28,0v7.981A1.14,1.14,0,0,0,6.14,19.428Z" transform="translate(1.841 3.374)" fill="currentColor" />
                                                <path id="Path_390" data-name="Path 390" d="M16.14,20.961a1.14,1.14,0,0,0,1.14-1.14V6.14a1.14,1.14,0,1,0-2.28,0V19.821A1.14,1.14,0,0,0,16.14,20.961Z" transform="translate(5.522 1.841)" fill="currentColor" />
                                                <path id="Path_391" data-name="Path 391" d="M9.473,20.961a1.14,1.14,0,0,0,1.14-1.14V6.14a1.14,1.14,0,0,0-2.28,0V19.821A1.14,1.14,0,0,0,9.473,20.961Z" transform="translate(3.068 1.841)" fill="currentColor" />
                                            </g>
                                        </g>
                                    </svg><span>Stats</span></a></li>
                        <?php } ?>
                        <li><a class="<?php echo ($controller == 'upgrade') ? 'bg-primary text-white text-opacity-100' : '' ?>text-primary hover:bg-primary hover:text-white hover:text-opacity-100 duration-300 ease-in-out flex items-center py-3 px-8 rounded-md text-sm font-medium" href="<?php echo site_url('upgrade') ?>"><svg class="mr-4" width="18.821" height="16.916" viewBox="0 0 18.821 16.916">
                                    <path id="fi-rr-diamond" d="M18.211,4.048,15.85,1.181A3.263,3.263,0,0,0,13.3,0H5.525A3.261,3.261,0,0,0,2.98,1.167L.576,4.055a2.59,2.59,0,0,0,.1,3.372l6.9,8.689a2.447,2.447,0,0,0,1.843.8h0a2.459,2.459,0,0,0,1.865-.828l6.841-8.592a2.6,2.6,0,0,0,.094-3.447Zm-3.63-2.038,2.367,2.874c.013.016.016.034.028.05H13.14L12.02,1.41H13.3a1.637,1.637,0,0,1,1.284.6ZM9.411,13.475,7.294,6.343h4.235Zm-2.1-8.541L8.434,1.41h1.954l1.12,3.524ZM4.248,2a1.635,1.635,0,0,1,1.277-.59H6.8L5.683,4.934H1.818c.011-.016.014-.035.027-.049ZM1.92,6.572a1.311,1.311,0,0,1-.145-.229h3.9L8.02,14.258ZM10.8,14.265l2.353-7.922h3.911a1.451,1.451,0,0,1-.191.3Z" transform="translate(0.001)" fill="currentColor" />
                                </svg><span>Switch plan</span></a></li>
                    <?php } ?>
                </ul>
            </div><!-- /.navbar-collapse -->
            <div class="fixed left-0 right-0 bottom-0 w-full bg-white hidden lg:flex items-center justify-between pt-4 pb-8 px-10 cursor-pointer profile-menu">
                <?php if ($this->session->userdata('htmlsig_user')['profile_pic'] != '' && file_exists(PROFILE_IMAGES . $this->session->userdata('htmlsig_user')['profile_pic'])) { ?>
                    <img class="rounded-[10px]" src="<?php echo PROFILE_IMAGES . $this->session->userdata('htmlsig_user')['profile_pic'] ?>" alt="<?php echo $this->session->userdata('htmlsig_user')['fullname'] ?>" />
                <?php } else { ?>
                    <img class="rounded-[10px]" src="assets/image/Rectangle 145.png" alt="<?php echo $this->session->userdata('htmlsig_user')['fullname'] ?>" />
                <?php } ?>
                <span class="hidden sm:inline-block"><?php echo $this->session->userdata('htmlsig_user')['fullname'] ?></span>
                <ul class="absolute bottom-full inset-x-3 hidden profile-items bg-white">
                    <li><a href="<?php echo site_url('profile') ?>" class="text-primary hover:bg-primary hover:text-white hover:text-opacity-100 duration-300 ease-in-out text-opacity-70 flex items-center py-3 px-8 rounded-md text-sm font-medium"><svg fill="currentColor" class="w-5 h-5 mr-4" xmlns="http://www.w3.org/2000/svg" id="Outline" viewBox="0 0 24 24">
                                <title>94 user</title>
                                <path d="M12,12A6,6,0,1,0,6,6,6.006,6.006,0,0,0,12,12ZM12,2A4,4,0,1,1,8,6,4,4,0,0,1,12,2Z" />
                                <path d="M12,14a9.01,9.01,0,0,0-9,9,1,1,0,0,0,2,0,7,7,0,0,1,14,0,1,1,0,0,0,2,0A9.01,9.01,0,0,0,12,14Z" />
                            </svg>My Profile</a></li>
                    <li><a href="<?php echo site_url('logout') ?>" class="text-primary hover:bg-primary hover:text-white hover:text-opacity-100 duration-300 ease-in-out text-opacity-70 flex items-center py-3 px-8 rounded-md text-sm font-medium"><svg fill="currentColor" class="w-5 h-5 mr-4" xmlns="http://www.w3.org/2000/svg" id="Outline" viewBox="0 0 24 24">
                                <title>191 log out</title>
                                <path d="M7,22H5a3,3,0,0,1-3-3V5A3,3,0,0,1,5,2H7A1,1,0,0,0,7,0H5A5.006,5.006,0,0,0,0,5V19a5.006,5.006,0,0,0,5,5H7a1,1,0,0,0,0-2Z" />
                                <path d="M18.538,18.707l4.587-4.586a3.007,3.007,0,0,0,0-4.242L18.538,5.293a1,1,0,0,0-1.414,1.414L21.416,11H6a1,1,0,0,0,0,2H21.417l-4.293,4.293a1,1,0,1,0,1.414,1.414Z" />
                            </svg> Logout</a></li>
                </ul>
                <svg xmlns="http://www.w3.org/2000/svg" class="text-primary" width="3" height="13" viewBox="0 0 3 13">
                    <g id="fi-rr-menu-dots-vertical" transform="translate(-10.064 0.878)">
                        <circle id="Ellipse_40" data-name="Ellipse 40" cx="1.5" cy="1.5" r="1.5" transform="translate(10.064 -0.878)" fill="currentColor" />
                        <circle id="Ellipse_41" data-name="Ellipse 41" cx="1.5" cy="1.5" r="1.5" transform="translate(10.064 4.122)" fill="currentColor" />
                        <circle id="Ellipse_42" data-name="Ellipse 42" cx="1.5" cy="1.5" r="1.5" transform="translate(10.064 9.122)" fill="currentColor" />
                    </g>
                </svg>
            </div>
        </div>
        <div class="fixed inset-0 bg-black z-10 opacity-0 duration-300 hidden sidebar-bg"></div>
        <div class="dash-cont">
            <div class="inner-dash">
                <?php echo $body; ?>
            </div>
        </div>
    </div>
</body>

</html>