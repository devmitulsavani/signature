<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Share Generator</title>
    <link rel="stylesheet" href="../dist/output.css">
</head>
<body class="bg-[#EDF1F8]">
    <div class="fixed inset-0 bg-black z-10 opacity-0 duration-300 hidden sidebar-bg"></div>
    <div class="p-4 lg:p-6 xl:p-16 lg:ml-72">
        <div class="flex flex-wrap -mx-4">
            <div class="w-1/2 px-4 my-5">
                <span class="text-primary mb-3 min-h-[40px] hidden sm:flex items-center font-semibold pl-5 relative before:w-[10px] before:h-[10px] before:bg-secondary before:inline-block before:absolute before:left-0 before:top-1/2 before:-translate-y-1/2 before:rounded-full text-base">Your Plan Detail</span>
                <div class="bg-white p-4 sm:p-10 rounded-[5px] h-[calc(100%-40px)]">
                    <?php
                    if ($this->session->flashdata('success_profile')) {
                    ?>
                        <div class="alert bg-success alert-styled-left bootstrap_alert">
                            <a class="close" data-dismiss="alert">×</a>
                            <strong><?php echo $this->session->flashdata('success_profile') ?></strong>
                        </div>
                    <?php
                    }
                    ?>
                    <form class="form-horizontal" id="profile_info" method="post" action="" enctype="multipart/form-data">
                        <div class="flex flex-wrap -mx-3">
                            <div class="w-full md:w-1/2 px-3 my-3">
                                <label for="" class="relative block input-populated overflow-hidden">
                                    <input type="text" value="<?php echo @explode(" ", $profile['fullname'])[0] ?>" id="firstname" placeholder="First Name" class="text-sm block border p-5 w-full outline-none duration-200 ease-in-out placeholder:duration-200 placeholder:ease-in-out placeholder:text-primary focus:pt-7 focus:pb-3 focus:placeholder:text-transparent placeholder:text-opacity-40">
                                    <span class="text-secondary text-xs absolute left-5 opacity-0 duration-200 ease-in-out">First Name</span>
                                </label>
                            </div>
                            <div class="w-full md:w-1/2 px-3 my-3">
                                <label for="" class="relative block input-populated overflow-hidden">
                                    <input type="text" value="<?php echo @explode(" ", $profile['fullname'])[1] ?>" id="lastname" placeholder="Last Name" class="text-sm block border p-5 w-full outline-none duration-200 ease-in-out placeholder:duration-200 placeholder:ease-in-out placeholder:text-primary focus:pt-7 focus:pb-3 focus:placeholder:text-transparent placeholder:text-opacity-40">
                                    <span class="text-secondary text-xs absolute left-5 opacity-0 duration-200 ease-in-out">Last Name</span>
                                </label>
                            </div>
                            <div class="w-full md:w-1/2 px-3 my-3">
                                <label for="" class="relative block input-populated overflow-hidden">
                                    <input type="text" placeholder="Company" <?php echo $profile['company'] ?> id="company" class="text-sm block border p-5 w-full outline-none duration-200 ease-in-out placeholder:duration-200 placeholder:ease-in-out placeholder:text-primary focus:pt-7 focus:pb-3 focus:placeholder:text-transparent placeholder:text-opacity-40">
                                    <span class="text-secondary text-xs absolute left-5 opacity-0 duration-200 ease-in-out">Company</span>
                                </label>
                            </div>
                            <div class="w-full md:w-1/2 px-3 my-3">
                                <label for="" class="relative block input-populated overflow-hidden">
                                    <input type="text" placeholder="Title" value="<?php echo $profile['title'] ?>" id="title" class="text-sm block border p-5 w-full outline-none duration-200 ease-in-out placeholder:duration-200 placeholder:ease-in-out placeholder:text-primary focus:pt-7 focus:pb-3 focus:placeholder:text-transparent placeholder:text-opacity-40">
                                    <span class="text-secondary text-xs absolute left-5 opacity-0 duration-200 ease-in-out">Title</span>
                                </label>
                            </div>
                            <div class="w-full px-3 my-3">
                                <label for="" class="relative block input-populated overflow-hidden">
                                    <input type="text" placeholder="Email" value="<?php echo $profile['email'] ?>" id="email" class="text-sm block border p-5 w-full outline-none duration-200 ease-in-out placeholder:duration-200 placeholder:ease-in-out placeholder:text-primary focus:pt-7 focus:pb-3 focus:placeholder:text-transparent placeholder:text-opacity-40">
                                    <span class="text-secondary text-xs absolute left-5 opacity-0 duration-200 ease-in-out">Email</span>
                                </label>
                            </div>
                            <div class="w-full px-3 my-3">
                                <label for="" class="relative input-populated overflow-hidden border rounded p-4 flex items-center justify-between">
                                    <span class="text-gray-400 text-xs">Upload profile image...</span>
                                    <button class="bg-secondary text-white text-sm px-4 py-2 text-right rounded hover:opacity-90"> Select a File</button>
                                </label>
                            </div>
                            <div class="text-center w-full px-3 mt-5">
                                <button type="submit" class="bg-secondary text-white text-sm px-10 py-3 hover:opacity-90 text-right rounded">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="w-1/2 px-4 my-5">
                <span class="text-primary mb-3 min-h-[40px] hidden sm:flex items-center font-semibold pl-5 relative before:w-[10px] before:h-[10px] before:bg-secondary before:inline-block before:absolute before:left-0 before:top-1/2 before:-translate-y-1/2 before:rounded-full text-base">Password</span>
                <div class="bg-white p-4 sm:p-10 rounded-[5px] h-[calc(100%-40px)]">
                    <?php
                    if ($this->session->flashdata('success_password')) {
                    ?>
                        <div class="alert bg-success alert-styled-left bootstrap_alert">
                            <a class="close" data-dismiss="alert">×</a>
                            <strong><?php echo $this->session->flashdata('success_password') ?></strong>
                        </div>
                    <?php
                    }
                    ?>
                    <form class="form-horizontal" id="password_info" method="post" action="<?php echo site_url('profile/change_password'); ?>" enctype="multipart/form-data">
                        <div class="flex flex-wrap -mx-3">
                            <div class="w-full px-3 my-3">
                                <label for="" class="relative block input-populated overflow-hidden">
                                    <input type="text" placeholder="Old Password" value="<?php echo set_value('old_password') ?>" class="text-sm block border p-5 w-full outline-none duration-200 ease-in-out placeholder:duration-200 placeholder:ease-in-out placeholder:text-primary focus:pt-7 focus:pb-3 focus:placeholder:text-transparent placeholder:text-opacity-40">
                                    <span class="text-secondary text-xs absolute left-5 opacity-0 duration-200 ease-in-out">Old Password</span>
                                </label>
                            </div>
                            <div class="w-full px-3 my-3">
                                <label for="" class="relative block input-populated overflow-hidden">
                                    <input type="text" placeholder="New Password" value="<?php echo set_value('new_password') ?>" class="text-sm block border p-5 w-full outline-none duration-200 ease-in-out placeholder:duration-200 placeholder:ease-in-out placeholder:text-primary focus:pt-7 focus:pb-3 focus:placeholder:text-transparent placeholder:text-opacity-40">
                                    <span class="text-secondary text-xs absolute left-5 opacity-0 duration-200 ease-in-out">New Password</span>
                                </label>
                            </div>
                            <div class="w-full px-3 my-3">
                                <label for="" class="relative block input-populated overflow-hidden">
                                    <input type="text" placeholder="Re-type Password" value="<?php echo set_value('confirm_password') ?>" class="text-sm block border p-5 w-full outline-none duration-200 ease-in-out placeholder:duration-200 placeholder:ease-in-out placeholder:text-primary focus:pt-7 focus:pb-3 focus:placeholder:text-transparent placeholder:text-opacity-40">
                                    <span class="text-secondary text-xs absolute left-5 opacity-0 duration-200 ease-in-out">Re-type Password</span>
                                </label>
                            </div>
                            <div class="text-center w-full px-3 mt-5">
                                <button type="submit" class="bg-secondary text-white text-sm px-10 py-3 hover:opacity-90 text-right rounded">Change</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="w-1/2 px-4 my-5">
                <span class="text-primary mb-3 min-h-[40px] hidden sm:flex items-center font-semibold pl-5 relative before:w-[10px] before:h-[10px] before:bg-secondary before:inline-block before:absolute before:left-0 before:top-1/2 before:-translate-y-1/2 before:rounded-full text-base">Remove Your Account</span>
                <?php
                if ($this->session->flashdata('success_password')) {
                ?>
                    <div class="alert bg-success alert-styled-left bootstrap_alert">
                        <a class="close" data-dismiss="alert">×</a>
                        <strong><?php echo $this->session->flashdata('success_password') ?></strong>
                    </div>
                <?php
                }
                ?>
               <form class="form-horizontal" id="delete_account" method="post" action="<?php echo site_url('profile/delete_account'); ?>" enctype="multipart/form-data">
                    <div class="bg-white p-4 sm:p-10 rounded-[5px] h-[calc(100%-40px)]">
                        <p class="text-sm">Please be confirm before delete your account, there is no option for refund and reactivate again deleted account. You must need to do new registration if you would like to continue with our service.</p>

                        <div class="flex flex-wrap -mx-3">
                            <div class="w-full px-3 my-3">
                                <label for="" class="relative block input-populated overflow-hidden">
                                    <textarea class="w-full border rounded outline-none p-5 text-sm" name="" id="" cols="30" rows="3" placeholder="Write somethings for our service."></textarea>
                                </label>
                            </div>
                            <div class="text-center w-full px-3 mt-5">
                                <button type="submit" class="bg-secondary text-white text-sm px-10 py-3 hover:opacity-90 text-right rounded">Remove Now</button>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
        <div class="row hidden">
        <div class="col-md-7">
            <div class="white-box">
                <div class="box-title">
                    <h2 class="title-text">Your plan detail</h2>
                </div>
                <div class="box-body">
                    <br><br>
                    <?php
                        if($current_package_data['paid_type'] == 1) {
                            $type = '(Yearly)';
                            $paid = $current_package_data['yearly_price'];
                        } else { 
                            $type = '(Monthly)';
                            $paid = $current_package_data['monthly_price'];
                        };
                    ?>
                    <p class="text text-center"><?php echo 'You have selected '.$current_package_data['title'].' plan '.$type ?>
                        <?php echo ' Paid Amount $'.number_format($paid, 2); ?>
                    </p>
                    <hr>
                    <form class="form-horizontal" id="package_form" method="get" action="">
                        <div class="frm-wrap">
                            <div class="gray-box">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="input select input-filled">
                                            <select class="selectpicker" name="package" id="package">  
                                                <option value="">Select Package</option>  
                                                <?php
                                                if (isset($packages)) {
                                                    foreach ($packages as $key => $value) {
                                                        $string = $value['title'] . '-';
                                                        if ($value['type'] == 1) {
                                                            $string .= 'Free';
                                                        } else {
                                                            $string .= 'Billed';
                                                        }
                                                        if($current_package['package_id'] != $value['id'] && $current_package['package_type'] != 2) {
                                                            if ($value['yearly_price'] > 0) {
                                                                if($value['monthly_price'] >= $paid) {
                                                                    $string .='-$' . $value['monthly_price'] . '-Monthly';
                                                                    if ($value['id'] == $package_data['id'] && $package_data['package_type'] == 2) {
                                                                        ?>
                                                                        <option selected="" value="<?php echo $value['id'] . '-monthly'; ?>">
                                                                            <?php echo $string; ?>
                                                                        </option>
                                                                        <?php
                                                                    } else {
                                                                        ?>
                                                                        <option value="<?php echo $value['id'] . '-monthly'; ?>">
                                                                            <?php echo $string; ?>
                                                                        </option>
                                                                        <?php
                                                                    }
                                                                }
                                                            }
                                                        }
                                                    }
                                                    foreach ($packages as $key => $value) {
                                                        $string = $value['title'] . '-';
                                                        if ($value['type'] == 1) {
                                                            $string .= 'Free';
                                                        } else {
                                                            $string .= 'Billed';
                                                        }
                                                        $string .='-$' . $value['yearly_price'] . '-Yearly';
                                                        if($current_package['package_id'] != $value['id'] && $current_package['package_type'] != 1) {
                                                            if ($value['yearly_price'] > 0) {
                                                                if($value['yearly_price'] >= $paid) {
                                                                    if ($value['id'] == $package_data['id'] && $package_data['package_type'] == 1) {
                                                                        ?>
                                                                        <option selected="" value="<?php echo $value['id'] . '-yearly'; ?>">
                                                                            <?php echo $string; ?>
                                                                        </option>
                                                                        <?php
                                                                    } else {
                                                                        ?>
                                                                        <option value="<?php echo $value['id'] . '-yearly'; ?>">
                                                                            <?php echo $string; ?>
                                                                        </option>
                                                                        <?php
                                                                    }
                                                                }
                                                            }
                                                        }
                                                    }
                                                }
                                                ?>
                                            </select>
                                            <label class="input-label" for="">Plan</label>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <center>
                        <?php
                            if(isset($package_data)) {
                        ?>
                        <form action="user/charge" method="post" id="payment_info">
                            <script src="https://checkout.stripe.com/checkout.js"></script>
                            <button id="customButton" class="com-btn" style="background: #337ab7;border: solid 1px #31708f">Upgrade your plan</button>
                            <script>
                                $('#customButton').click(function () {
                                    var token = function (res) {
                                        var $input = $('<input type="hidden" name="stripeToken" />').val(res.id);
                                        $('#payment_info').append($input).submit();
                                    };
                                    <?php 
                                        $price = ($package_data['package_type'] == 1) ? $package_data['yearly_price'] : $package_data['monthly_price']; 
                                        $m = ($current_package_data['paid_type'] == 1) ? 365 : 30;
                                        if(isset($current_package_data['paid_for_plan'])) {
                                            if($current_package_data['paid_for_plan'] != 0) {
                                                $amt_days = $current_package_data['paid_for_plan'] / $m; 
                                                $current_plan_remaining_amount = $price - $amt_days * $current_package_data['remaining_days'];
                                                $current_plan_remaining_amount = round($current_plan_remaining_amount);
                                            } else {
                                                $current_plan_remaining_amount = $price;    
                                            }
                                        } else {
                                            $current_plan_remaining_amount = $price;
                                        }
                                    ?>  
                                    StripeCheckout.open({
                                        key: '<?php echo $payment_settings['publishable_key'] ?>',
                                        address: false,
                                        amount: '<?php echo $current_plan_remaining_amount * 100; ?>',
                                        currency: 'usd',
                                        name: '',
                                        image: "<?php echo base_url() ?>/assets/images/logo-icn.png",
                                        description: 'Pay for <?php echo $package_data['title']; ?> <?php echo ($package_data['package_type'] == 1) ? 'yearly' : 'monthly' ?> plan',
                                        panelLabel: 'Pay',
                                        token: token
                                    });
                                    return false;
                                });
                            </script>
                            <input type="hidden" name="desc" value="Paid for <?php echo $package_data['title']; ?> <?php echo ($package_data['package_type'] == 1) ? 'yearly' : 'monthly' ?> plan"/>
                            <input type="hidden" name="package_id" value="<?php echo $package_data['id'] ?>"/>
                            <input type="hidden" name="package_type" value="<?php echo $package_data['package_type'] ?>"/>
                            <input type="hidden" name="package_price" value="<?php echo $current_plan_remaining_amount ?>"/>
                            <input type="hidden" name="user_id" value="<?php echo $this->session->userdata('htmlsig_user')['id'] ?>"/>
                        </form>
                        <?php
                            }
                        ?>
                    </center>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="Jquery/jquery-3.6.0.min.js"></script>
    <script>
        $(".burger-menu, .sidebar-bg").click(function() {
            $(".sidebar").toggleClass("-translate-x-[500px]");
            $(".sidebar-bg").toggleClass("hidden opacity-30");
        });

        $(".preview-btn, .back-btn").click(function() {
            $(".generator-right").toggleClass("hidden bg-[#EDF1F8] flex")
        });

        $('.profile-menu').click(function() {
            $(this).children('.profile-items').slideToggle();
        });
        $(document).click(function(e) {
            var target = e.target;
            if (!$(target).is('.profile-menu') && !$(target).parents().is('.profile-menu')) {
                $('.profile-items').slideUp();
            }
        });


        // from
        $($('.input-populated input')).each(function() {
            if ($(this).val() != '') {
                $(this).parent('.input-populated').addClass('active');
            }
        });
        $('.input-populated input').on('keyup', function() {
            var self = $(this),
                label = self.parent('.input-populated');

            if (self.val() != '') {
                label.addClass('active');
            } else {
                label.removeClass('active');
            }
        });
    </script>
</body>

</html>