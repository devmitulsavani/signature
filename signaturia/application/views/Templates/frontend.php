<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Facebook Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
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
    <title><?php echo $title; ?></title>
    <base href="<?php echo base_url(); ?>">
    <link rel="icon" type="image/png" href="assets/image/favicon.png" sizes="16x16">
    <!-- Bootstrap -->
    <link href="assets/css/owl.carousel.css" rel="stylesheet">
    <!-- <link href="assets/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <link href="assets/css/bootstrap-select.css" rel="stylesheet" />
    <link href="assets/css/bootstrap-colorpicker.min.css" rel="stylesheet">
    <!-- <link href="assets/css/style.css" rel="stylesheet"> -->

    <!-- slider -->
    <link href="assets/slider/slick.css" rel="stylesheet">
    <link href="assets/slider/slick-theme.css" rel="stylesheet">


    <!--new add link -->
    <link href="assets/css/output.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    <script type="text/javascript">
        site_url = "<?php echo site_url(); ?>"
        site_url = site_url + '/';
        console.log('url is', site_url);
        base_url = "<?php echo base_url(); ?>";
    </script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->

    <!-- Include all compiled plugins (below), or include individual files as needed -->

    <!-- <script src="assets/js/bootstrap.min.js"></script> -->
    <!-- <script src="assets/js/bootstrap-select.js"></script> -->
    <!-- <script src="assets/js/bootstrap-colorpicker.js"></script>
    <script src="assets/js/owl.carousel.js"></script> -->
    <script src="assets/js/classie.js"></script>

    <!--new added jquery-->
    <!-- <script src="assets/Jquery/chart.min.js"></script> -->

    <!-- slider -->
    <!-- <script src="assets/Jquery/jquery-3.6.0.min.js"></script>
    <script src="assets/slider/slick.min.js"></script>
    <script src="assets/Jquery/custom.js"></script> -->

</head>
<?php
$controller = $this->router->fetch_class();
$action = $this->router->fetch_method();
?>

<body class="<?php echo ($controller == 'home' && $action == 'index') ? 'home' : '' ?>font-Prompt text-primary selection:bg-secondary selection:bg-opacity-30">
    <?php if ($this->session->flashdata('success')) { ?>
        <div class="alert alert-box alert-success text-center">
            <button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>
            <span class="text-semibold"><?php echo $this->session->flashdata('success'); ?></span>
        </div>
    <?php } ?>
    <?php if ($this->session->flashdata('error')) { ?>
        <div class="alert alert-box alert-danger text-center">
            <button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>
            <span class="text-semibold"><?php echo $this->session->flashdata('error'); ?></span>
        </div>
    <?php } ?>
    <img class="absolute md:block hidden -z-10 md:-top-20 right-0 opacity-40" src="assets/image/bg1.png" alt="">
    <img class="absolute md:hidden -z-10 top-0 right-0" src="assets/image/767bg1.png" alt="">
    <header class="py-9 relative">
        <div class="container max-w-6xl">
            <div class="flex items-center justify-between">
                <div class="logo">
                    <a class="navbar-brand" href="<?php echo site_url('/') ?>"><img src="assets/image/logo.png" alt=""></a>
                </div>
                <div class="burger-menu md:hidden w-6 h-5 cursor-pointer bg-transparent duration-300 ease-in-out rotate-0 relative z-[51]">
                    <span class="absolute block w-full h-[2px] bg-primary rounded-[2px] duration-150 ease-in-out origin-[left-center] top-0"></span>
                    <span class="absolute block w-full h-[2px] bg-primary rounded-[2px] duration-150 ease-in-out origin-[left-center] top-2"></span>
                    <span class="absolute block w-full h-[2px] bg-primary rounded-[2px] duration-150 ease-in-out origin-[left-center] top-4"></span>
                </div>
                <nav class="w-72 z-50 md:w-full md:bg-transparent bg-white h-full fixed md:static top-0 right-0 shadow-sm md:shadow-none transform translate-x-72 md:translate-x-0 duration-300 ease-in-out">
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <ul class="flex md:items-center md:justify-end md:flex-row flex-col md:space-x-9 space-y-6 md:space-y-0 uppercase font-medium text-sm pt-24 px-4 md:pt-0 md:px-0">
                        <!-- header changes -->
                        <li><a class="relative nav-items <?php echo ($controller == 'home') ? 'active' : '' ?>" href="<?php echo site_url() ?>">home</a></li>
                        <!-- <li class="<?php echo ($controller == 'home') ? 'active' : '' ?>""><a href="<?php echo site_url() ?>">Home</a></li> -->
                        <li><a class="relative nav-items <?php echo ($controller == 'pricing') ? 'active' : '' ?>" href="<?php echo site_url('pricing') ?>">pricing</a></li>
                        <!-- <li class="<?php echo ($controller == 'pricing') ? 'active' : '' ?>"><a href="<?php echo site_url('pricing') ?>">Pricing</a></li> -->
                        <?php $offers_exists = check_offers();
                        if (isset($offers_exists) && count($offers_exists) > 0) { ?>
                            <li style="display: '';" class="<?php echo ($controller == 'offers') ? 'active' : '' ?>"><a href="<?php echo site_url('offers') ?>">Offers</a></li>
                        <?php } ?>
                        <li><a href="http://signaturia.com/helpdesk/" target="_blank">Help</a></li>
                        <li class="<?php echo ($controller == 'try_now') ? 'active' : '' ?>"><a href="<?php echo site_url('try_now') ?>">Try now for free</a></li>
                        <li><a class="relative nav-items <?php echo ($controller == 'sign_up') ? 'active' : '' ?>" href="<?php echo site_url('sign-up') ?>">sign up</a></li>
                        <!-- <li class="<?php echo ($controller == 'sign_up') ? 'active' : '' ?>"><a href="<?php echo site_url('sign-up') ?>">Sign up</a></li> -->
                        <li><a href="<?php echo site_url('login') ?>" class="bg-secondary border-2 border-secondary duration-300 ease-in-out hover:bg-white hover:text-secondary inline-block px-5 py-3 rounded-md text-white">log in</a></li>
                        <!-- <li class="link-btn"><a href="<?php echo site_url('login') ?>">Login</a></li> -->
                    </ul>
                </nav>
                <div class="nav-close-bg fixed inset-0 bg-black opacity-30 hidden duration-300 ease-in-out z-40"></div>
            </div>
        </div><!-- /.navbar-collapse -->
    </header><!-- /.container-fluid -->

    <div>
        <?php echo $body; ?>
    </div>

    <footer class="bg-primary text-white">
        <div class="container max-w-6xl">
            <div class="flex flex-wrap py-12 -mx-4">
                <div class="w-full md:w-1/2 py-4 px-4 text-center text-md-left">
                    <a href="index.html"><img class="max-w-[215px] mx-auto md:mx-0" src="assets/image/footer-logo.png" alt=""></a>
                    <ul class="uppercase flex justify-center md:justify-start space-x-4 sm:space-x-6 md:space-x-10 font-medium my-8 text-sm">
                        <li class="relative duration-300 after:absolute after:bottom-0 after:bg-white after:w-0 after:h-[2px] after:right-0 after:duration-300 hover:after:w-full hover:after:left-0"><a href="index.html">Home</a></li>
                        <li class="relative duration-300 after:absolute after:bottom-0 after:bg-white after:w-0 after:h-[2px] after:right-0 after:duration-300 hover:after:w-full hover:after:left-0"><a href="pricing.html">pricing</a></li>
                        <li class="relative duration-300 after:absolute after:bottom-0 after:bg-white after:w-0 after:h-[2px] after:right-0 after:duration-300 hover:after:w-full hover:after:left-0"><a href="#">help</a></li>
                        <li class="relative duration-300 after:absolute after:bottom-0 after:bg-white after:w-0 after:h-[2px] after:right-0 after:duration-300 hover:after:w-full hover:after:left-0"><a href="signup.html">sign up</a></li>
                    </ul>
                    <ul class="flex md:justify-start justify-center space-x-6 mt-8">
                        <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="23.443" height="18.964" viewBox="0 0 23.443 18.964">
                                    <path id="Icon_awesome-twitter" data-name="Icon awesome-twitter" d="M19.54,7.789c.014.193.014.387.014.58a12.613,12.613,0,0,1-12.7,12.7,12.614,12.614,0,0,1-6.854-2,9.234,9.234,0,0,0,1.078.055,8.939,8.939,0,0,0,5.541-1.907,4.471,4.471,0,0,1-4.173-3.1,5.629,5.629,0,0,0,.843.069,4.721,4.721,0,0,0,1.175-.152A4.464,4.464,0,0,1,.884,9.655V9.6a4.5,4.5,0,0,0,2.018.567A4.47,4.47,0,0,1,1.52,4.2a12.688,12.688,0,0,0,9.2,4.671,5.039,5.039,0,0,1-.111-1.023A4.468,4.468,0,0,1,18.338,4.79a8.788,8.788,0,0,0,2.833-1.078,4.452,4.452,0,0,1-1.962,2.46,8.948,8.948,0,0,0,2.57-.691A9.6,9.6,0,0,1,19.54,7.789Z" transform="translate(0.271 -2.605)" fill="#fff" stroke="#fff" stroke-width="1" />
                                </svg></a></li>
                        <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="19.649" height="19.649" viewBox="0 0 19.649 19.649">
                                    <g id="Icon_feather-instagram" data-name="Icon feather-instagram" transform="translate(0.75 0.75)">
                                        <path id="Path_201" data-name="Path 201" d="M7.537,3h9.075a4.537,4.537,0,0,1,4.537,4.537v9.075a4.537,4.537,0,0,1-4.537,4.537H7.537A4.537,4.537,0,0,1,3,16.612V7.537A4.537,4.537,0,0,1,7.537,3Z" transform="translate(-3 -3)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                        <path id="Path_202" data-name="Path 202" d="M19.285,15.032a3.63,3.63,0,1,1-3.058-3.058,3.63,3.63,0,0,1,3.058,3.058Z" transform="translate(-6.581 -6.529)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                        <path id="Path_203" data-name="Path 203" d="M26.25,9.75h0" transform="translate(-12.184 -5.666)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                    </g>
                                </svg></a></li>
                        <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="20.057" height="20.057" viewBox="0 0 20.057 20.057">
                                    <path id="Icon_awesome-linkedin" data-name="Icon awesome-linkedin" d="M17.7,2.25H1.357A1.367,1.367,0,0,0,0,3.624V19.933a1.367,1.367,0,0,0,1.357,1.374H17.7a1.371,1.371,0,0,0,1.361-1.374V3.624A1.371,1.371,0,0,0,17.7,2.25ZM5.76,18.584H2.935V9.49H5.764v9.094ZM4.347,8.248A1.638,1.638,0,1,1,5.985,6.61,1.638,1.638,0,0,1,4.347,8.248Zm12,10.337H13.523V14.16c0-1.055-.021-2.412-1.468-2.412-1.472,0-1.7,1.149-1.7,2.335v4.5H7.533V9.49h2.71v1.242h.038a2.975,2.975,0,0,1,2.676-1.468c2.858,0,3.39,1.884,3.39,4.335Z" transform="translate(0.5 -1.75)" fill="#fff" stroke="#fff" stroke-width="1" />
                                </svg></a></li>
                    </ul>
                </div>
                <div class="w-full md:w-1/2 py-4 max-w-[475px] mx-auto md:ml-auto text-center md:text-left px-4">
                    <h6 class="text-lg font-medium mb-3">Subscribe To Our Newsletter !</h6>
                    <p class="text-xs">We'll Send You The Bes Of Our Blog Just Once A Month. We Promise.</p>
                    <form action="" class="flex bg-white p-1 md:p-2 rounded mt-5">
                        <input type="email" class="bg-transparent text-sm py-3 px-3 outline-none text-primary w-full" required placeholder="Your Email Address">
                        <input type="submit" value="SUBSCRIBE" class="bg-secondary text-sm px-4 py-2 sm:px-6 sm:py-3 cursor-pointer rounded tracking-widest font-medium">
                    </form>
                </div>
            </div>
        </div>
        <div class="bg-[#1A242E] py-5">
            <div class="container max-w-6xl">
                <div class="sm:flex text-center sm:text-left items-center justify-center md:justify-between flex-wrap">
                    <ul class="sm:flex py-2 space-x-4 text-sm font-normal opacity-20">
                        <li><a href="#">Terms & Conditions</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Legal</a></li>
                    </ul>
                    <p class="text-sm py-2 font-medium">© <script>
                            new Date().getFullYear() > document.write(new Date().getFullYear());
                        </script> Mail Signatory Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- old footer -->

    <!-- <footer>
        <div class="top-part">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 col-lg-3">
                        <div class="footer-nav">
                            <h3 class="footer-title">Company</h3>
                            <ul>
                                <li><a href="#">About Signaturia</a></li>
                                <li><a href="#">Press</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Jobs</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-3">
                        <div class="footer-nav">
                            <h3 class="footer-title">Info</h3>
                            <ul>
                                <li><a href="#">Help Center</a></li>
                                <li><a href="#">Privacy policy</a></li>
                                <li><a href="#">Terms</a></li>
                                <li><a href="#">Blog</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-3">
                        <div class="footer-nav">
                            <h3 class="footer-title">Resources</h3>
                            <ul>
                                <li><a href="#">Email Signature Examples</a></li>
                                <li><a href="#">Professionals Center</a></li>
                                <li><a href="#">Signatures Goodies</a></li>
                                <li><a href="#">Blog</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-3">
                        <div class="footer-nav">
                            <h3 class="footer-title">Email Signatures</h3>
                            <ul>
                                <li><a href="#">Outlook Email Signature</a></li>
                                <li><a href="#">Gmail Email Signature</a></li>
                                <li><a href="#">Android Email Signature</a></li>
                                <li><a href="#">Iphone Email Signature</a></li>
                                <li><a href="#">Mac Mail Signature</a></li>
                                <li><a href="#">Yahoo Email Signature</a></li>
                                <li><a href="#">Email Signature Generator</a></li>
                                <li><a href="#">Email Signature Management</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="foot-sec">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="sec-left">
                                <h3>We’d love to hear from you</h3>
                                <p>Email us: <a href="mailto:support@signaturia.com">support@signaturia.com</a></p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <ul class="social">
                                <li><a href="#" class="fb"></a></li>
                                <li><a href="#" class="twit"></a></li>
                                <li><a href="#" class="in"></a></li>
                                <li><a href="#" class="gp"></a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="copy">
            <div class="container">
                <p>All rights reserved Signaturia 2017</p>
            </div>
        </div>
    </footer> -->
    <!-- <footer>
            <div class="footer-container">
                <div class="container">
                    <div class="footer-logo"><a href="<?php echo site_url('/'); ?>"><img src="assets/images/footer-logo.png" alt="" /></a></div>
                    <ul class="foot-menu">
                        <li><a href="<?php echo site_url('pricing') ?>">Pricing</a></li>
                        <li><a href="http://signaturia.com/helpdesk/" target="_blank">Help</a></li>
                        <li><a href="<?php echo site_url('sign-up') ?>">Sign up</a></li>
                        <li><a href="<?php echo site_url('login') ?>">Login</a></li>
                        <li><a href="#">Terms and Condition</a></li>
                        <li><a href="#">Sitemap</a></li>
                    </ul>
                </div>
            </div>
        </footer> -->
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
        $(window).scroll(function() {
            if ($(this).scrollTop() > 1) {
                $('.navbar').addClass("sticky");
                $('body').addClass("sticky-b");
            } else {
                $('.navbar').removeClass("sticky");
                $('body').removeClass("sticky-b");
            }
        });
        $(document).ready(function() {
            $('.sign-slide').owlCarousel({
                loop: true,
                dots: true,
                nav: false,
                items: 1
            });
            $('.testi-slide').owlCarousel({
                loop: true,
                dots: true,
                nav: false,
                items: 1
            });
            $('.blog-slide').owlCarousel({
                loop: true,
                dots: false,
                nav: true,
                responsiveClass: true,
                responsive: {
                    0: {
                        nav: true,
                        items: 1
                    },
                    600: {
                        nav: true,
                        items: 2
                    },
                    1000: {
                        nav: true,
                        items: 3
                    }
                }
            });
        });
    </script>
    <script>
        (function() {
            // trim polyfill : https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/Trim
            if (!String.prototype.trim) {
                (function() {
                    // Make sure we trim BOM and NBSP
                    var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
                    String.prototype.trim = function() {
                        return this.replace(rtrim, '');
                    };
                })();
            }

            [].slice.call(document.querySelectorAll('input.input-field')).forEach(function(inputEl) {
                // in case the input is already filled..
                if (inputEl.value.trim() !== '') {
                    classie.add(inputEl.parentNode, 'input-filled');
                }

                // events:
                inputEl.addEventListener('focus', onInputFocus);
                inputEl.addEventListener('blur', onInputBlur);
            });

            function onInputFocus(ev) {
                classie.add(ev.target.parentNode, 'input-filled');
            }

            function onInputBlur(ev) {
                if (ev.target.value.trim() === '') {
                    classie.remove(ev.target.parentNode, 'input-filled');
                }
            }
        })();
    </script>
    <script>
        (function($) {

            // Browser supports HTML5 multiple file?
            var multipleSupport = typeof $('<input/>')[0].multiple !== 'undefined',
                isIE = /msie/i.test(navigator.userAgent);

            $.fn.customFile = function() {

                return this.each(function() {

                    var $file = $(this).addClass('custom-file-upload-hidden'), // the original file input
                        $wrap = $('<div class="file-upload-wrapper">'),
                        $input = $('<input type="text" class="file-upload-input input-field"/>'),
                        // Button that will be used in non-IE browsers
                        $button = $('<button type="button" class="file-upload-button">Select a File</button>'),
                        // Hack for IE
                        $label = $('<label class="file-upload-button" for="' + $file[0].id + '">Select a File</label>');

                    // Hide by shifting to the left so we
                    // can still trigger events
                    $file.css({
                        position: 'absolute',
                        left: '-9999px'
                    });

                    $wrap.insertAfter($file)
                        .append($file, $input, (isIE ? $label : $button));

                    // Prevent focus
                    $file.attr('tabIndex', -1);
                    $button.attr('tabIndex', -1);

                    $button.click(function() {
                        $file.focus().click(); // Open dialog
                    });

                    $file.change(function() {

                        var files = [],
                            fileArr, filename;

                        // If multiple is supported then extract
                        // all filenames from the file array
                        if (multipleSupport) {
                            fileArr = $file[0].files;
                            for (var i = 0, len = fileArr.length; i < len; i++) {
                                files.push(fileArr[i].name);
                            }
                            filename = files.join(', ');

                            // If not supported then just take the value
                            // and remove the path to just show the filename
                        } else {
                            filename = $file.val().split('\\').pop();
                        }

                        $input.val(filename) // Set the value
                            .attr('value', filename) // Show filename in title tootlip
                            .focus(); // Regain focus
                        $(".file").addClass("input-filled");
                    });

                    $input.on({
                        blur: function() {
                            $file.trigger('blur');
                        },
                        keydown: function(e) {
                            if (e.which === 13) { // Enter
                                if (!isIE) {
                                    $file.trigger('click');
                                }
                            } else if (e.which === 8 || e.which === 46) { // Backspace & Del
                                // On some browsers the value is read-only
                                // with this trick we remove the old input and add
                                // a clean clone with all the original events attached
                                $file.replaceWith($file = $file.clone(true));
                                $file.trigger('change');
                                $input.val('');
                            } else if (e.which === 9) { // TAB
                                return;
                            } else { // All other keys
                                return false;
                            }
                        }
                    });
                });
            };
        }(jQuery));

        $('.custome-file').customFile();
    </script>
    <script type="text/javascript">
        //-- Html signature keydown event
        $('.group-require').bind("keyup change", function() {
            $('.create_sign_btn').prop("disabled", false); // Element(s) are now enabled.

            //-- Remove default signature div and display new signature div
            $('#default_signature').remove();
            $('#new_signature').show();
            var id = $(this).attr('id');
            //-- if signature is jobtitle then display saparator
            if (id == 'signature_jobtitle' || id == 'signature_name') {
                if ($('#signature_jobtitle').val() != '' && $('#signature_name').val() != '') {
                    $('.title-sep').show();
                } else {
                    $('.title-sep').hide();
                }
            }
            if (id == 'signature_email' || id == 'signature_mobilephone') {
                if ($('#signature_email').val() != '' && $('#signature_mobilephone').val() != '') {
                    $('.signature_email-sep').show();
                } else {
                    $('.signature_email-sep').hide();
                }
            }
            if (id == 'signature_officephone') {
                if ($(this).val() != '') {
                    $('.office-sep').show();
                } else {
                    $('.office-sep').hide();
                }
            }
            if (id == 'signature_fax') {
                if ($(this).val() != '') {
                    $('.fax-title').show();
                } else {
                    $('.fax-title').hide();
                }
            }
            if (id == 'signature_officephone' || id == 'signature_fax') {
                if ($('#signature_officephone').val() != '' && $('#signature_fax').val() != '') {
                    $('.fax-sep').show();
                } else {
                    $('.fax-sep').hide();
                }
            }
            $('.' + id + '-target').html($(this).val());
        });
        //-- Hide/ display socialicon on key change event
        $('.social-group-require').bind("keyup change", function() {
            var id = $(this).attr('id');
            //-- Remove default signature div and display new signature div
            $('#default_signature').remove();
            $('#new_signature').show();

            if ($(this).val() != '') {
                $('.' + id + '-target').show();
            } else {
                $('.' + id + '-target').hide();
            }
        });
        // Display the preview of image on image upload
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('.sig-logo').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $(function() {
            $('.sample-selector').colorpicker();
        });
    </script>
</body>

</html>