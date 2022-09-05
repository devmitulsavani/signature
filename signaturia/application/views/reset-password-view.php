<style type="text/css">
    .error{
        color: red;
    }
</style>
<script type="text/javascript" src="assets/js/jquery.validate.js"></script>
<div class="pad-wrap min">
    <div class="container">
        <div class="main-title"><h1>Reset Password</h1>
            <span class="sep"><img src="assets/images/title-dote.png" alt="" /></span>
        </div>
        <form method="post" action="" class="login-form" id="loginform">
            <div class="frm-wrap">
                <div class="gray-box">
                    <div class="row">
                        <?php
                        if ($this->session->flashdata('success')) {
                            ?>
                            <div class="content col-sm-6">
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
                            <div class="input">
                                <input class="input-field" type="password" id="password" name="password" value="<?php echo set_value('password') ?>"/>
                                <label class="input-label" for="">New password</label>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="input">
                                <input class="input-field" type="password" name="confirm_password" id="confirm_password" value="<?php echo set_value('password') ?>">
                                <label class="input-label" for="">Confirm password</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="btn-wrap mar"><button type="submit" class="com-btn">Reset password</button></div>
            </div>
        </form>
    </div>
</div>
<script type="text/javascript">
    $("#loginform").validate({
        rules: {
            password: {
                required: true,
                minlength: 5
            },
            confirm_password: {
                required: true,
                equalTo: "#password"
            },
        },
        messages: {
            password: {
                minlength: "Password is too short."
            }
        }
        errorPlacement: function (error, element) {
            if (element.attr("name") == "privacy_policy") {
                error.insertAfter($(".privacy_policy"));
            } else {
                element.closest(".input").after(error);
            }
        },
        submitHandler: function (form) {
            form.submit();
        }
    });

    $("#forgotform").validate({
        rules: {
            email: {
                required: true,
                email: true
            },
            password: {
                required: true,
            }
        },
        errorPlacement: function (error, element) {
            if (element.attr("name") == "privacy_policy") {
                error.insertAfter($(".privacy_policy"));
            } else {
                element.closest(".input").after(error);
            }
        },
        submitHandler: function (form) {
            $.ajax({
                url: "<?php site_url() ?>forgot-password",
                type : "POST",
                data : $("#forgotform").serialize(),
                success: function(result1){
                    if(result1 == 3){
                        $('#custom-error').show();
                        $("#custom-error").html('Invalid email address!');
                    } else if(result1 == 1) {
                        $("#sucess-error").html('Reset password link sent!');
                    } else {
                        $('#custom-error').show();
                        $("#custom-error").html('Invalid request! Please try again.');
                    } 
                }
            });
            return false;
        }
    });
</script>