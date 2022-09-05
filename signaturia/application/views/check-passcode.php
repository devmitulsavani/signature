<style type="text/css">
    .error{
        color: red;
    }
</style>
<script type="text/javascript" src="assets/js/jquery.validate.js"></script>
<div class="pad-wrap min">
    <div class="container">
        <div class="main-title"><h1>Create a signaturia Account</h1><span class="sep"><img src="assets/images/title-dote.png" alt="" /></span><p class="title-line">Easy and quick account creation fot everyone, Already have <br />an account? <a href="<?php echo site_url('login') ?>" class="link">Log In</a>.</p></div>
        <form class="form-horizontal" id="signup_info" method="post" action="">
            <div class="frm-wrap">
                <div class="gray-box">
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
                            <div class="content">
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
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="input">
                                <input class="input-field" type="text" id="email" name="email" value="<?php echo set_value('email') ?>">
                                <label class="input-label" for="">Email</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="input">
                                <input class="input-field" type="password" id="password" name="password" value="<?php echo set_value('password') ?>">
                                <label class="input-label" for="">Password</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="input">
                                <input class="input-field" type="password" id="confirm_password" name="confirm_password" value="<?php echo set_value('confirm_password') ?>">
                                <label class="input-label" for="">Confirm Password</label>
                            </div>
                        </div>
                    </div>
                    <hr />
                    <div class="row">
                        <div class="col-sm-12">
                            <a href="#">Why passcode?</a>
                            <div class="input">
                                <input class="input-field" type="text" id="passcode" name="passcode" value="<?php echo set_value('passcode') ?>">
                                <label class="input-label" for="">Passcode</label>
                            </div>
                        </div>
                    </div>
                </div>
                <?php $checked = (set_value('privacy_policy') == 'on') ? 'checked' : '' ?>
                <div class="checkbox term">
                    <label class="privacy_policy">
                        <input type="checkbox" id="privacy_policy" name="privacy_policy" <?php echo $checked; ?> required ><span></span>I have read and agree to the signaturia.com's <a href="#">Terms of Service</a>
                    </label>
                </div>
                <input type="hidden" name="key" value="<?php echo $key; ?>">
                <div class="btn-wrap mar"><button type="submit" class="com-btn">Sign up</button></div>
            </div>
        </form>
    </div>
</div>
<script type="text/javascript">
    $("#signup_info").validate({
        rules: {
            password: {
                required: true,
                minlength: 5
            },
            email: {
                required: true,
                email: true
            },
            confirm_password: {
                required: true,
                equalTo: "#password"
            },
            passcode: {
                required: true,
            },
            privacy_policy: {
                required: true,
            }
        },
        messages: {
            password: {
                minlength: "Password is too short."
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
            form.submit();
        }
    });
</script>