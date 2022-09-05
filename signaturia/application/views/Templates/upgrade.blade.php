<div class="row">
    <div class="col-md-6 col-sm-12">
        <div class="box-wrap">
            <div class="box-title">
                <h3>Your plan detail</h3>
            </div>
            <div class="box-body">
                <?php $msg_success = $this->session->flashdata('success');
                if ($this->session->flashdata('success')) { ?>
                    <div class="alert bg-success alert-styled-left bootstrap_alert">
                        <a class="close" data-dismiss="alert">×</a>
                        <strong><?php echo $this->session->flashdata('success') ?></strong>
                    </div>
                <?php $this->session->set_flashdata('success', false);
                } else if ($this->session->flashdata('error')) { ?>
                    <div class="alert bg-danger alert-styled-left bootstrap_alert">
                        <a class="close" data-dismiss="alert">×</a>
                        <strong><?php echo $this->session->flashdata('error') ?></strong>
                    </div>
                <?php $this->session->set_flashdata('error', false);
                } else {
                    echo validation_errors();
                } ?>
                <?php if ($coupon) { ?>
                    <div style="border: 1px solid #ddd; padding: 10px 30px;font-size: 17px;text-align: center;background: #dcf0d1;">
                        <?php if ($coupon['package_id'] != '') { ?>
                            <strong>GET</strong>
                            <font style="color: #5a8e3e;"><?php echo number_format($coupon['coupon_price'], 2); ?>%</font> on upgrading to <?php echo $coupon['title']; ?> plan.
                        <?php } else { ?>
                            <strong>GET</strong>
                            <font style="color: #5a8e3e;"><?php echo number_format($coupon['coupon_price'], 2); ?></font> on upgrading your plan.
                        <?php }
                        if ($coupon['coupon_applied'] != '') { ?>
                            <!-- <a href="javascript:void(0);" style="background: #dcf0d1;padding: 10px;border: 1px dashed #ccc;" id="apply_coupon">Have a coupon?</a> -->
                        <?php } else { ?>
                            <!-- <a href="javascript:void(0);" style="background: #dcf0d1;padding: 10px;border: 1px dashed #ccc;" id="apply_coupon">Have a coupon?</a> -->
                        <?php } ?>
                    </div>
                <?php } ?>
                <br><br>
                <?php if ($current_package_data['paid_type'] == 1) {
                    $type = '(Yearly)';
                    $paid = $current_package_data['yearly_price'];
                } else {
                    $type = '(Monthly)';
                    $paid = $current_package_data['monthly_price'];
                } ?>
                <p class="text text-center">
                    <?php if ($current_package_data['type'] == 1) {
                        echo 'You haven\'t purchased any plan! Please upgrade your free plan and access our more features.';
                    } else {
                        echo 'You have selected ' . $current_package_data['title'] . ' plan ' . $type;
                        echo ' Paid Amount $' . number_format($paid, 2);
                    } ?>
                </p>
                <hr>
                <?php if (isset($coupon) && isset($package_data)) {
                    if ($coupon['coupon_applied'] != '' && $msg_success == '') { ?>
                        <div style="border: 1px solid #ddd; padding: 10px 30px;font-size: 12px;text-align: center;background: #fbc6c6;">Your coupon code already applied for <font style="color: #5a8e3e;"><?php echo $coupon['title'] ?></font>, Please upgrade your plan to <?php echo $coupon['title'] ?> plan now.
                            <br>
                            <strong>Note!</strong> You will not get any discount in other plan.
                        </div>
                        <br>
                    <?php } elseif ($package_data['id'] == $coupon['package_id'] && $msg_success == '') { ?>
                        <div class="frm-wrap" id="coupon_box" style="">
                            <div class="gray-box">
                                <form class="form-horizontal" id="coupon_form" method="get" action="">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="input input-filled">
                                                <input class="input-field valid" type="text" id="coupon_code" name="coupon_code" value="" aria-required="true" aria-invalid="false" required="">
                                                <label class="input-label" for="title">Add your coupon code here</label>
                                            </div>
                                        </div>
                                        <input type="hidden" name="package_id" name="package_id" value="<?php echo isset($package_data['id']) ? $package_data['id'] : ''; ?>">
                                        <div class="btn-wrap mar text-center">
                                            <button name="change_password_btn" type="submit" class="com-btn" id="check_coupon">apply coupon</button>
                                            <button name="change_password_btn" type="button" class="com-btn" style="background: #595b5d;border: solid 1px #797e80;" id="cancel_coupon">Cancel</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                <?php }
                } ?>
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
                                                    if ($value['monthly_price'] > 0) {
                                                        if ($value['monthly_price'] >= $paid && $value['monthly_price'] != $paid) {
                                                            $string .= '-$' . $value['monthly_price'] . '-Monthly';
                                                            if (isset($package_data)) {
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
                                                foreach ($packages as $key => $value) {
                                                    $string = $value['title'] . '-';
                                                    if ($value['type'] == 1) {
                                                        $string .= 'Free';
                                                    } else {
                                                        $string .= 'Billed';
                                                    }
                                                    $string .= '-$' . $value['yearly_price'] . '-Yearly';
                                                    if ($value['yearly_price'] > 0) {
                                                        if ($value['yearly_price'] >= $paid && $value['yearly_price'] != $paid) {
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
                    if (isset($package_data)) {
                    ?>
                        <form action="user/charge" method="post" id="payment_info">
                            <script src="https://checkout.stripe.com/checkout.js"></script>
                            <button id="customButton" class="com-btn" style="background: #337ab7;border: solid 1px #31708f">Upgrade your plan</button>
                            <script>
                                $('#customButton').click(function() {
                                    var token = function(res) {
                                        var $input = $('<input type="hidden" name="stripeToken" />').val(res.id);
                                        $('#payment_info').append($input).submit();
                                    };
                                    <?php
                                    $price = ($package_data['package_type'] == 1) ? $package_data['yearly_price'] : $package_data['monthly_price'];
                                    $m = ($current_package_data['paid_type'] == 1) ? 365 : 30;
                                    if (isset($current_package_data['paid_for_plan'])) {
                                        if ($current_package_data['paid_for_plan'] != 0) {
                                            $amt_days = $current_package_data['paid_for_plan'] / $m;
                                            if ($current_package_data['remaining_days'] <= 0) {
                                                $current_package_data['remaining_days'] = 0;
                                            }
                                            $current_plan_remaining_amount = $price - ($amt_days * $current_package_data['remaining_days']);
                                            $current_plan_remaining_amount = round($current_plan_remaining_amount);
                                        } else {
                                            $current_plan_remaining_amount = $price;
                                        }
                                    } else {
                                        $current_plan_remaining_amount = $price;
                                    }
                                    if ($coupon['coupon_applied'] != '') {
                                        if ($package_data['id'] == $coupon['package_id']) {
                                            $current_plan_remaining_amount = $current_plan_remaining_amount - ($current_plan_remaining_amount * $coupon['coupon_price']) / 100;
                                        }
                                    }
                                    ?>
                                    StripeCheckout.open({
                                        key: '<?php echo $payment_settings['publishable_key'] ?>',
                                        address: false,
                                        amount: '<?php echo $current_plan_remaining_amount * 100; ?>',
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
                            <input type="hidden" name="desc" value="Paid for <?php echo $package_data['title']; ?> <?php echo ($package_data['package_type'] == 1) ? 'yearly' : 'monthly' ?> plan" />
                            <input type="hidden" name="package_id" value="<?php echo $package_data['id'] ?>" />
                            <input type="hidden" name="package_type" value="<?php echo $package_data['package_type'] ?>" />
                            <input type="hidden" name="package_price" value="<?php echo $current_plan_remaining_amount ?>" />
                            <input type="hidden" name="user_id" value="<?php echo $this->session->userdata('htmlsig_user')['id'] ?>" />
                            <input type="hidden" name="coupon_applied_id" value="<?php echo $coupon['coupon_applied']; ?>" />
                        </form>
                    <?php
                    }
                    ?>
                </center>
            </div>
        </div>
    </div>
</div>
<script src="assets/js/jquery.validate.js"></script>
<script type="text/javascript">
    $('#package').change(function() {
        $('#package_form').submit();
    });
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

    $("#profile_info").validate({
        rules: {
            firstname: {
                required: true,
            },
            lastname: {
                required: true,
            },
            company: {
                required: true,
            },
            title: {
                required: true,
            },
            email: {
                required: true,
                email: true,
                remote: '<?php echo site_url('profile/checkUniqueEmail'); ?>'
            },
            profile_pic: {
                // required: true,
                extension: "jpg|jpeg|png"
            },
        },
        messages: {
            email: {
                remote: $.validator.format("Email already exist!")
            },
            profile_pic: {
                extension: "Invalid file format of profile picture."
            },
        },
        errorPlacement: function(error, element) {
            if (element.attr("name") == "privacy_policy") {
                error.insertAfter($(".privacy_policy"));
            } else {
                element.closest(".input").after(error);
            }
        },
        submitHandler: function(form) {
            form.submit();
        }
    });

    $("#password_info").validate({
        rules: {
            old_password: {
                required: true,
            },
            new_password: {
                required: true,
                minlength: 5
            },
            confirm_password: {
                required: true,
                equalTo: "#new_password"
            },
        },
        messages: {
            email: {
                remote: $.validator.format("Email already exist!")
            },
            profile_pic: {
                extension: "Invalid file format of profile picture."
            },
        },
        errorPlacement: function(error, element) {
            if (element.attr("name") == "privacy_policy") {
                error.insertAfter($(".privacy_policy"));
            } else {
                element.closest(".input").after(error);
            }
        },
        submitHandler: function(form) {
            form.submit();
        }
    });
</script>
<script>
    ;
    (function($) {

        // Browser supports HTML5 multiple file?
        var multipleSupport = typeof $('<input/>')[0].multiple !== 'undefined',
            isIE = /msie/i.test(navigator.userAgent);

        $.fn.customFile = function() {

            return this.each(function() {

                var $file = $(this).addClass('custom-file-upload-hidden'), // the original file input
                    $wrap = $('<div class="file-upload-wrapper">'),
                    $input = $('<input type="text" class="file-upload-input input-field" readonly />'),
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

    $(document).on('click', '#apply_coupon, #cancel_coupon', function() {
        $('#coupon_box').toggle();
    });

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
        errorPlacement: function(error, element) {
            $('#coupon_code-error').remove();
            if (element.attr("name") == "privacy_policy") {
                error.insertAfter($(".privacy_policy"));
            } else if (element.attr("name") == "package_id") {
                if ($('#coupon_code').val() != '') {
                    $('#coupon_code').closest(".input").after(error);
                }
            } else {
                element.closest(".input").after(error);
            }
        },
        submitHandler: function(form) {
            $.ajax({
                url: "<?php echo site_url('apply_coupon') ?>",
                type: "POST",
                data: $("#coupon_form").serialize(),
                success: function(result) {
                    if (result == '0') {
                        $('#coupon_code').closest(".input").after('<label id="coupon_code-error" class="error" for="coupon_code">Sorry! Your coupon is not valid.</label>');
                    } else if (result == '1') {
                        $('#coupon_code').closest(".input").after('<label id="coupon_code-error" class="error" for="coupon_code">Sorry! Your coupon is not valid for this plan.</label>');
                    } else if (result == '202') {
                        location.reload();
                    } else if (result == '402') {
                        $('#coupon_code').closest(".input").after('<label id="coupon_code-error" class="error" for="coupon_code">Coupon code is already applied, Please upgrade your plan.</label>');
                    }
                }
            });
            return false;
        }
    });

    // $(document).on('click','#check_coupon', function () {
    //     // $("#package_form").validate();
    //     $.ajax({
    //         url: '<?php echo site_url('apply_coupon') ?>',
    //         type: 'POST',
    //         data: {coupon_code : coupon_code},
    //         success: function( data ){
    //             $('#response pre').html( data );
    //         }
    //     });
    // });    
</script>