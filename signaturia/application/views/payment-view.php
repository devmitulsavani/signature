<style type="text/css">
    .error{
        color: red;
    }
</style>
<script type="text/javascript" src="assets/js/jquery.validate.js"></script>
<div class="pad-wrap min">
    <div class="container">
        <div class="main-title"><h1>Payfor a signaturia Account</h1><span class="sep"><img src="assets/images/title-dote.png" alt="" /></span><p class="title-line">You have selected <a><?php echo $package_data['title']; ?></a> Plan, You can change plan from below or pay for selected plan. If already paid please <a href="<?php echo site_url('login') ?>" class="link">Log In</a>.</p>

        </div>
        <form class="form-horizontal" id="signup_info" method="post" action="">
            <div class="frm-wrap">
                <div class="gray-box">
                    <div class="row">
                        <?php
                        if ($this->session->flashdata('success')) {
                            ?>
                            <div class="content">
                                <div class="alert bg-success alert-styled-left bootstrap_alert">
                                    <a class="close" data-dismiss="alert">×</a>
                                    <strong><?= $this->session->flashdata('success') ?></strong>
                                </div>
                            </div>
                            <?php
                            $this->session->set_flashdata('success', false);
                        } else if ($this->session->flashdata('error')) {
                            ?>
                            <div class="content col-sm-6">
                                <div class="alert bg-danger alert-styled-left bootstrap_alert">
                                    <a class="close" data-dismiss="alert">×</a>
                                    <strong><?= $this->session->flashdata('error') ?></strong>
                                </div>
                            </div>
                            <?php
                            $this->session->set_flashdata('error', false);
                        } else {
                            echo validation_errors();
                        }
                        ?>
                        <div class="col-sm-12">
                            <?php
                               // print_r($packages);print_r($package_data);die('stop');
                                ?>
                            <div class="input select input-filled">
                                <?php
                                // p($package_data, 1);
                                ?>
                                <select class="selectpicker" name="package" id="package">    
                                    <?php
                                    if (isset($packages)) {
                                        foreach ($packages as $key => $value) {
                                            $monthly_price = $value['monthly_price'];
                                            if($value['monthly_discount_price'] != 0 && $value['monthly_discount_price'] != '') {
                                                $monthly_price =   $value['monthly_price'] - ($value['monthly_price'] * $value['monthly_discount_price'] / 100);
                                            }
                                            $string = $value['title'] . '-';
                                            if ($value['type'] == 1) {
                                                $string .= 'Free';
                                            } else {
                                                $string .= 'Billed';
                                            }
                                            if ($value['yearly_price'] > 0) {
                                                $string .='-$' . $monthly_price . '-Monthly';
                                                if ($value['id'] == $package_data['package_id'] && $package_data['package_type'] == 2) {
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
                                        foreach ($packages as $key => $value) {
                                            $yearly_price = $value['yearly_price'];
                                            if($value['yearly_discount_price'] != 0 && $value['yearly_discount_price'] != '') { 
                                                $yearly_price =   $value['yearly_price'] - ($value['yearly_price'] * $value['yearly_discount_price'] / 100);
                                            }
                                            $string = $value['title'] . '-';
                                            if ($value['type'] == 1) {
                                                $string .= 'Free';
                                            } else {
                                                $string .= 'Billed';
                                            }
                                            $string .='-$' . $yearly_price . '-Yearly';
                                            if ($value['yearly_price'] > 0) {
                                                if ($value['id'] == $package_data['package_id'] && $package_data['package_type'] == 1) {
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
                                    ?>
                                </select>
                                <label class="input-label" for="">Plan</label>
                                <?php //echo $this->session->userdata('is_offer');echo $this->session->userdata('package_id');echo "package id = ".$package_data['package_id'];echo "package_type = ".$package_data['package_type']; ?>
                            </div> 
                        </div>
                    </div>
                </div>
                <div class="btn-wrap mar"><button type="submit" class="com-btn">Change plan</button></div>
                <!-- <form action="change" method="POST">
                  <script
                    src="https://checkout.stripe.com/checkout.js" class="com-btn"
                    data-key="pk_test_813t12JrVGQ3S7mtOPLYJEwp" // your publishable keys
                    data-image="http://img05.deviantart.net/dbae/i/2010/140/3/7/gogole_by_roon1305.jpg" // your company Logo
                    data-name="PHPGang.com"
                    data-description="Download Script ($15.00)"
                    data-amount="1500">
                  </script>
                </form> -->
            </div>
        </form>
        <hr>
        <center>
            <?php 

                if($package_data['package_type'] == 1) {
                    $price = $package_data['yearly_price'];
                    if($package_data['yearly_discount_price'] != 0 && $package_data['yearly_discount_price'] != '') {
                        $price = $package_data['yearly_price'] - ($package_data['yearly_price'] * $package_data['yearly_discount_price'] / 100);
                    }
                } else {
                    $price = $package_data['monthly_price'];
                    if($package_data['monthly_discount_price'] != 0 && $package_data['monthly_discount_price'] != '') {
                        $price = $package_data['monthly_price'] - ($package_data['monthly_price'] * $package_data['monthly_discount_price'] / 100);
                    }
                } 

                // $price = ($package_data['package_type'] == 1) ? $package_data['yearly_price'] : $package_data['monthly_price'];  
            $offers = check_offers();
            if(isset($offers)) {
                ?>
                    <?php
                            $plan_amount = $price * 100;
                            $offer_apllied = false;
                            if($this->session->has_userdata('is_offer')){
                                if($this->session->userdata('package_id')==$package_data['package_id']){ //&& $this->session->userdata('package_type')==$package_data['package_type']){
                                    $coupon_discount_price = $this->session->userdata('coupon_price'); 
                                    $plan_amount = $plan_amount - ($plan_amount * $coupon_discount_price)/100; 
                                    $offer_apllied = true;
                                }else{
                                    $array_items = array('is_offer','package_id','coupon_price','package_type');
                                    $this->session->unset_userdata($array_items);
                                }
                            }
                    ?>
                    <?php if($offer_apllied){ ?>
                                <div class="frm-wrap">
                                <div class="gray-box">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h2 style="color:#60c926;">Coupon Applied <b><?php echo $coupon_discount_price; ?>% OFF</b></h2>
                                        <p>Your coupon already applied please pay now.</a></p>
                                    </div>
                                    <div class="btn-wrap mar text-center">
                                        <h4>Payable Amount : <b>$ <?php echo $plan_amount / 100; ?></b></h4>
                                        <hr>
                                        <p style="color:#60c926;">You Saved Amount : <b>$ <?php echo $price - ($plan_amount / 100); ?></b></p>
                                    </div>                           
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <a href="javascript:void(0);" id="apply_coupon">Have a coupon?</a>
                    <br>
                    <div class="frm-wrap" id="coupon_box" style="display: none;">
                        <div class="gray-box">
                            <form class="form-horizontal" id="coupon_form" method="get" action="">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="input input-filled">
                                            <input class="input-field valid" type="text" id="coupon_code" name="coupon_code" value="" aria-required="true" aria-invalid="false" required="">
                                            <label class="input-label" for="title">Add your coupon code here</label>
                                        </div>
                                        <p>Note: Coupon is valid for only offered plans <a target="_blank" href="<?php echo site_url('offers'); ?>">view more</a></p>
                                    </div>
                                    <input type="hidden" name="package_id" name="package_id" value="<?php echo isset($package_data['id']) ? $package_data['id'] : '' ; ?>">
                                    <input type="hidden" name="user_id" value="<?php echo $package_data['user_id'] ?>"/>
                                    <div class="btn-wrap mar text-center">
                                        <button name="change_password_btn" type="submit" class="com-btn" id="check_coupon">apply coupon</button>
                                        <button name="change_password_btn" type="button" class="com-btn" style="background: #595b5d;border: solid 1px #797e80;" id="cancel_coupon">Cancel</button>
                                    </div>

                            
                                </div>
                            </form>
                        </div>
                    </div>
                    <br>
                    <label>Or</label>
                    
                <?php        
            } else {
                ?>
                    <label>Or</label>
                <?php
            }
        ?>
            <form action="charge" method="post">
                <script src="https://checkout.stripe.com/checkout.js"></script>
                <button id="customButton" class="com-btn" style="background: #337ab7;border: solid 1px #31708f">Pay now</button>
                <br><br>
                <!--<p style="color:#fc5b5b;">Note : If you any offer ! please use your coupon code (coupon code is mandatory).</p>-->
                <script>
                    $('#customButton').click(function () {
                        var token = function (res) {
                            var $input = $('<input type="hidden" name="stripeToken" />').val(res.id);
                            $('form').append($input).submit();
                        };
                        

                        <?php /*
                            $plan_amount = $price * 100;

                            if($this->session->has_userdata('is_offer')){
                                if($this->session->userdata('package_id')==$package_data['package_id'] && $this->session->userdata('package_type')==$package_data['package_type']){
                                    $coupon_discount_price = $this->session->userdata('coupon_price'); 
                                    $plan_amount = ($plan_amount * $coupon_discount_price)/100; 
                                }else{
                                    $array_items = array('is_offer','package_id','coupon_price','package_type');
                                    $this->session->unset_userdata($array_items);
                                }
                            }*/
                        ?>
                        StripeCheckout.open({
                            key: '<?php echo $payment_settings['publishable_key'] ?>',
                            address: false,
                            amount: '<?php echo $plan_amount; ?>',
                            currency: 'usd',
                            name: '',
                            image: "<?php echo site_url() ?>assets/images/logo-icn.png",
                            description: 'Pay for <?php echo $package_data['title']; ?> <?php echo ($package_data['package_type'] == 1) ? 'yearly' : 'monthly' ?> plan',
                            panelLabel: 'Pay',
                            token: token
                        });
                        return false;
                    });
                </script>
              <!--  <script
                   src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                   data-key="pk_test_813t12JrVGQ3S7mtOPLYJEwp" // your publishable keys
                   data-image="http://chameleoninfosoft.com/assets/images/logo2.png" // your company Logo
                   data-name="Signaturia"
                   data-description="<?php echo $package_data['title']; ?> Plan ($<?php echo number_format($package_data['yearly_price'], 2); ?>)"
                   data-amount="1500">
               </script> -->
                <input type="hidden" name="desc" value="Paid for <?php echo $package_data['title']; ?> <?php echo ($package_data['package_type'] == 1) ? 'yearly' : 'monthly' ?> plan"/>
                <input type="hidden" name="package_id" value="<?php echo $package_data['id'] ?>"/>
                <input type="hidden" name="package_type" value="<?php echo $package_data['package_type'] ?>"/>
                <input type="hidden" name="package_price" value="<?php echo $price; ?>"/>
                <input type="hidden" name="user_email" value="<?php echo $package_data['email']; ?>"/>
                <input type="hidden" name="user_id" value="<?php echo $package_data['user_id'] ?>"/>
            </form>
        </center>
    </div>
</div>
<script type="text/javascript">
    $("#coupon_form").validate({
        ignore: [],
        rules: {
            coupon_code: {
                required: true,
            },
            package_id: {
                required: true,
            },
        },
        messages: {
            coupon_code: {
                required: 'Please enter coupon code!'
            },
            package_id: {
                required: 'Please select plan!',
            },
        },
        errorPlacement: function (error, element) {
            $('#coupon_code-error').remove();
            if (element.attr("name") == "privacy_policy") {
                error.insertAfter($(".privacy_policy"));
            } else if(element.attr("name") == "package_id") {
                if($('#coupon_code').val() != '') {
                    $('#coupon_code').closest(".input").after(error);
                }
            } else {
                element.closest(".input").after(error);
            }
        },
        submitHandler: function (form) {
            $.ajax({
                url: "<?php echo site_url('offers/apply_coupon') ?>",
                type : "POST",
                data : $("#coupon_form").serialize(),
                success: function(result){
                    if(result == '0') {
                        $('#coupon_code').closest(".input").after('<label id="coupon_code-error" class="error" for="coupon_code">Sorry! Your coupon is not valid.</label>');
                    } else if (result == '1') {
                        $('#coupon_code').closest(".input").after('<label id="coupon_code-error" class="error" for="coupon_code">Sorry! Your coupon is not valid for this plan.</label>');
                    } else if (result == '2') {
                        location.reload();
                        //$('#coupon_code').closest(".input").after('<label id="coupon_code-error" class="error" for="coupon_code">Your coupon already applied please pay now.</label>');
                    } else if(result == '202'){
                        location.reload();
                    }
                }
            });
            return false;
        }
    });

    $(document).on('click','#apply_coupon, #cancel_coupon', function () {
        $('#coupon_box').toggle();
    });
</script>