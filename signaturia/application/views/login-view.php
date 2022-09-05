<style type="text/css">
    .error {
        color: red;
    }
</style>
<script type="text/javascript" src="assets/js/jquery.validate.js"></script>

<!-- <div class="pad-wrap min">
    <div class="container">
        <div class="main-title white-t">
            <h1>login for Signaturia</h1>
            <p class="title-line">Fill the form of login for pintimes control panel, New user? <a href="<?php echo site_url('sign-up') ?>" class="link">Create an account</a>.</p>
        </div>
        <div class="frm-box">
            <form method="post" action="" class="login-form" id="loginform">
                <div class="frm-wrap"> -->
<!-- <?php if ($this->session->flashdata('success')) { ?>
                        <!-- <div class="content col-sm-6"> -->
<div class="alert bg-success alert-styled-left bootstrap_alert">
    <a class="close" data-dismiss="alert">×</a>
    <strong><?= $this->session->flashdata('success') ?></strong>
</div>
<!-- </div> -->
<?php $this->session->set_flashdata('success', false);
        } else if ($this->session->flashdata('error')) { ?>
    <!-- <div class="content col-sm-6"> -->
    <div class="alert bg-danger alert-styled-left bootstrap_alert">
        <a class="close" data-dismiss="alert">×</a>
        <strong><?= $this->session->flashdata('error') ?></strong>
    </div>
    <!-- </div> -->
<?php $this->session->set_flashdata('error', false);
        } else {
            echo validation_errors();
        } ?> -->
<!-- <div class="row">
                        <div class="col-sm-12">
                            <div class="input">
                                <input class="input-field" type="email" id="email" name="email" value="<?php echo (isset($_POST['email'])) ? $_POST['email'] : set_value('email') ?>" />
                                <label class="input-label" for="">Email</label>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="input">
                                <input class="input-field" type="password" name="password" id="password" value="<?php echo (isset($_POST['password'])) ? $_POST['password'] : set_value('password') ?>">
                                <label class="input-label" for="">Password</label>
                            </div>
                        </div>
                    </div>
                    <div class="checkbox remember">
                        <label><input type="checkbox" name="remember_me" value="1"><span></span>Remember me</label>
                    </div>
                    <a href="#" class="link forgot" data-toggle="modal" data-target=".bs-example-modal-sm">Forgot Password?</a>
                    <div class="clearfix"></div>
                    <div class="btn-wrap mar"><button type="submit" class="com-btn">Login</button></div>
                </div>  
            </form>
        </div>
    </div>
</div>  -->

<div class="modal fade bs-example-modal-sm forgot" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" data-backdrop="static">
    <div class="modal-dialog modal-sm" role="document">
        <form method="post" action="" class="login-form" id="forgotform">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">+</button>
                    <h3 class="sure">Forgot your Password?</h3>
                    <p>Not a problem. Just enter your email address, and we'll send you reset link for password.</p>
                    <div class="input">
                        <input class="input-field" type="email" name="email" password="email" />
                        <label class="input-label" for="">Email</label>
                    </div>
                    <label id="custom-error" class="error" for="email"></label>
                    <label id="sucess-error" class="text-success" for="email"></label>
                    <button type="submit" class="com-btn">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>


<!-- new ui -->

<div class="container max-w-6xl">
    <div class="flex flex-wrap -mx-4 items-center">
        <div class="md:w-1/2 w-full px-4 md:order-1">
            <img class="w-full" src="assets/image/login-banner.svg" alt="">
        </div>
        <div class="md:w-1/2 w-full px-4 mt-10 md:mt-0">
            <div class="max-w-[394px] mx-auto text-center">
                <h2 class="text-4xl text-center font-bold leading-[56px] mb-6">Welcome To
                    Mail Signatory</h2>
                <p class="text-sm font-medium">Fill The Form Of Login For Pintimes Control Panel, New User?
                    <a href="signup.html" class="text-secondary">Create An Account</a>
                </p>
            </div>
            <form method="post" id="loginform" action="" class="flex flex-wrap mt-7">
                <?php if ($this->session->flashdata('success')) { ?>
                    <!-- <div class="content col-sm-6"> -->
                    <div class="alert bg-success alert-styled-left bootstrap_alert">
                        <a class="close" data-dismiss="alert">×</a>
                        <strong><?= $this->session->flashdata('success') ?></strong>
                    </div>
                    <!-- </div> -->
                <?php $this->session->set_flashdata('success', false);
                } else if ($this->session->flashdata('error')) { ?>
                    <!-- <div class="content col-sm-6"> -->
                    <div class="alert bg-danger alert-styled-left bootstrap_alert">
                        <a class="close" data-dismiss="alert">×</a>
                        <strong><?= $this->session->flashdata('error') ?></strong>
                    </div>
                    <!-- </div> -->
                <?php $this->session->set_flashdata('error', false);
                } else {
                    echo validation_errors();
                } ?>
                <div class="w-full px-3 my-2">
                    <label for="" class="relative block input-populated overflow-hidden">
                        <input type="email" placeholder="Email" id="email" name="email" value="<?php echo (isset($_POST['email'])) ? $_POST['email'] : set_value('email') ?>" class="text-sm block border p-5 w-full outline-none duration-200 ease-in-out placeholder:duration-200 placeholder:ease-in-out placeholder:text-primary focus:pt-7 focus:pb-3 focus:placeholder:text-transparent placeholder:text-opacity-40 focus:border-secondary rounded-[3px]">
                        <span class="text-secondary text-xs absolute left-5 opacity-0 duration-200 ease-in-out">Email</span>
                    </label>
                </div>
                <div class="w-full px-3 my-2">
                    <label for="" class="relative block input-populated overflow-hidden">
                        <input type="password" placeholder="Password" name="password" id="password" value="<?php echo (isset($_POST['password'])) ? $_POST['password'] : set_value('password') ?>" class="text-sm block border p-5 w-full outline-none duration-200 ease-in-out placeholder:duration-200 placeholder:ease-in-out placeholder:text-primary focus:pt-7 focus:pb-3 focus:placeholder:text-transparent placeholder:text-opacity-40 focus:border-secondary rounded-[3px]">
                        <span class="text-secondary text-xs absolute left-5 opacity-0 duration-200 ease-in-out">Password</span>
                    </label>
                </div>
                <div class="w-full px-4 mt-7 flex justify-between items-center">
                    <div class="signup-checkbox form-group flex items-center">
                        <input type="checkbox" id="scales" class="p-0 h-[initial] w-[initial] mb-0 hidden cursor-pointer" name="remember_me" value="1">
                        <label for="scales" class="relative text-sm flex items-start cursor-pointer before:appearance-none before:border-2 before:border-secondary before:p-[7px] before:inline-block before:relative before:align-middle before:cursor-pointer before:mr-[10px] before:bg-white">Remember Me</label>
                    </div>
                    <a href="#" class="text-sm text-secondary font-medium forgot-password" data-toggle="modal" data-target=".bs-example-modal-sm">Forgot Password?</a>
                </div>
                <div class="text-center mt-7 w-full">
                    <button type="submit" href="#" class="uppercase bg-secondary py-3 px-6 inline-block rounded-md text-base text-white border-2 border-secondary duration-300 ease-in-out hover:bg-white hover:text-secondary shadow-md"> LOG IN</button>
                </div>
            </form>
        </div>
    </div>
</div>




<script type="text/javascript">
    $("#loginform").validate({
        rules: {
            email: {
                required: true,
                email: true
            },
            password: {
                required: true,
            }
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
        errorPlacement: function(error, element) {
            if (element.attr("name") == "privacy_policy") {
                error.insertAfter($(".privacy_policy"));
            } else {
                element.closest(".input").after(error);
            }
        },
        submitHandler: function(form) {
            $.ajax({
                url: "<?php site_url() ?>forgot-password",
                type: "POST",
                data: $("#forgotform").serialize(),
                success: function(result1) {
                    if (result1 == 3) {
                        $('#custom-error').show();
                        $("#custom-error").html('Invalid email address!');
                    } else if (result1 == 1) {
                        $("#sucess-error").html('Reset password link sent!');
                    } else {
                        $('#custom-error').show();
                        $("#custom-error").html('Invalid request! Please try again.');
                    }
                    location.reload();
                }
            });
            return false;
        }
    });
</script>