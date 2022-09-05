<style type="text/css">
    .error {
        color: red;
    }
</style>
<script type="text/javascript" src="assets/js/jquery.validate.js"></script>

<!-- old ui -->

<!-- <div class="pad-wrap min">
    <div class="container">
        <div class="main-title white-t">
            <h1>Create a Signaturia Account</h1>
            <p class="title-line">Easy and quick account creation fot everyone, Already have <br />an account? <a href="<?php echo site_url('login') ?>" class="link">Log In</a>.</p>
        </div>
        <div class="frm-box">
            <form class="form-horizontal" id="signup_info" method="post" action="">
                <div class="frm-wrap">
                    <?php if ($this->session->flashdata('success')) { ?>
                        <div class="content">
                            <div class="alert bg-success alert-styled-left bootstrap_alert">
                                <a class="close" data-dismiss="alert">×</a>
                                <strong><?= $this->session->flashdata('success') ?></strong>
                            </div>
                        </div>
                    <?php $this->session->set_flashdata('success', false);
                    } else if ($this->session->flashdata('error')) { ?>
                        <div class="content">
                            <div class="alert bg-danger alert-styled-left bootstrap_alert">
                                <a class="close" data-dismiss="alert">×</a>
                                <strong><?= $this->session->flashdata('error') ?></strong>
                            </div>
                        </div>
                    <?php $this->session->set_flashdata('error', false);
                    } else {
                        echo validation_errors();
                    } ?>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="input select input-filled">
                                <select class="selectpicker">
                                    <option value="">Select package</option>
                                    <?php $passed_package = $this->input->get('plan');
                                    if (isset($packages)) {
                                        foreach ($packages as $key => $value) {

                                            $monthly_price = $value['monthly_price'];
                                            if ($value['monthly_discount_price'] != 0 && $value['monthly_discount_price'] != '') {
                                                $monthly_price =   $value['monthly_price'] - ($value['monthly_price'] * $value['monthly_discount_price'] / 100);
                                            }

                                            $string = $value['title'] . '-';
                                            if ($value['type'] == 1) {
                                                $string .= 'Free';
                                            } else {
                                                $string .= 'Billed';
                                            }
                                            if ($monthly_price > 0) {
                                                $string .= '-$' . $monthly_price . '-Monthly';
                                            } else {
                                                $string .= '-$' . $monthly_price;
                                            }
                                            if ($value['id'] == set_value('package')) {
                                    ?>
                                                <option selected="" value="<?php echo $value['id'] . '-monthly'; ?>">
                                                    <?php echo $string; ?>
                                                </option>
                                            <?php
                                            } else {
                                                $selected = '';
                                                if ($passed_package == $value['title']) {
                                                    $selected = 'selected';
                                                }
                                            ?>
                                                <option value="<?php echo $value['id'] . '-monthly'; ?>" <?php echo $selected ?>>
                                                    <?php echo $string; ?>
                                                </option>
                                            <?php
                                            }
                                        }
                                        foreach ($packages as $key => $value) {
                                            $yearly_price = $value['yearly_price'];
                                            if ($value['yearly_discount_price'] != 0 && $value['yearly_discount_price'] != '') {
                                                $yearly_price =   $value['yearly_price'] - ($value['yearly_price'] * $value['yearly_discount_price'] / 100);
                                            }
                                            $string = $value['title'] . '-';
                                            if ($value['type'] == 1) {
                                                $string .= 'Free';
                                            } else {
                                                $string .= 'Billed';
                                            }
                                            $string .= '-$' . $yearly_price . '-yearly';
                                            if ($value['yearly_price'] > 0) {
                                            ?>
                                                <option value="<?php echo $value['id'] . '-monthly'; ?>">
                                                    <?php echo $string; ?>
                                                </option>
                                    <?php
                                            }
                                        }
                                    } ?>
                                </select>
                                <label class="input-label" for="">Plan</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="input">
                                <input class="input-field" type="text" id="firstname" name="firstname" value="<?php echo set_value('firstname') ?>">
                                <label class="input-label" for="">First Name</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="input">
                                <input class="input-field" type="text" id="lastname" name="lastname" value="<?php echo set_value('lastname') ?>">
                                <label class="input-label" for="">Last Name</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="input">
                                <input class="input-field" type="text" id="company" name="company" value="<?php echo set_value('company') ?>">
                                <label class="input-label" for="">Company</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="input">
                                <input class="input-field" type="text" id="title" name="title" value="<?php echo set_value('title') ?>">
                                <label class="input-label" for="">Title</label>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="input">
                                <input class="input-field" type="text" id="email" name="email" value="<?php echo set_value('email') ?>">
                                <label class="input-label" for="">Email</label>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="input">
                                <input class="input-field" type="password" id="password" name="password" value="<?php echo set_value('password') ?>">
                                <label class="input-label" for="">Password</label>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="input">
                                <input class="input-field" type="password" id="confirm_password" name="confirm_password" value="<?php echo set_value('confirm_password') ?>">
                                <label class="input-label" for="">Confirm Password</label>
                            </div>
                        </div>
                    </div>
                    <?php $checked = (set_value('privacy_policy') == 'on') ? 'checked' : '' ?>
                    <div class="checkbox term">
                        <label class="privacy_policy">
                            <input type="checkbox" id="privacy_policy" name="privacy_policy" <?php echo $checked; ?> required><span></span>I have read and agree to the signaturia.com's <a href="#">Terms of Service</a>
                        </label>
                    </div>
                    <div class="btn-wrap mar"><button type="submit" class="com-btn">Sign up</button></div>
                </div>
            </form>
        </div>
    </div>
</div> -->

<!-- new ui -->

<section class="mb-32 md:mb-56 mt-6 md:mt-8">
    <div class="container max-w-6xl">
        <div class="flex flex-wrap -mx-4 items-center">
            <div class="md:w-1/2 w-full px-4">
                <img class="w-full" src="assets/image/signup-image.svg" alt="">
            </div>
            <div class="md:w-1/2 w-full px-4 mt-10 md:mt-0">
                <div class="max-w-[394px] mx-auto text-center">
                    <h2 class="text-4xl text-center font-bold leading-[56px] mb-6">Create A Mail
                        Signatory Account</h2>
                    <p class="text-sm font-medium">Easy And Quick Account Creation For Everyone, Already
                        Have An Account? <a href="<?php echo site_url('login') ?>" class="text-secondary">Log In.</a></p>
                </div>
                <form action="" id="signup_info" method="post" class="flex flex-wrap mt-7">
                    <div class="px-3 relative my-4 text-sm w-full">
                        <?php if ($this->session->flashdata('success')) { ?>
                            <div class="content">
                                <div class="alert bg-success alert-styled-left bootstrap_alert">
                                    <a class="close" data-dismiss="alert">×</a>
                                    <strong><?= $this->session->flashdata('success') ?></strong>
                                </div>
                            </div>
                        <?php $this->session->set_flashdata('success', false);
                        } else if ($this->session->flashdata('error')) { ?>
                            <div class="content">
                                <div class="alert bg-danger alert-styled-left bootstrap_alert">
                                    <a class="close" data-dismiss="alert">×</a>
                                    <strong><?= $this->session->flashdata('error') ?></strong>
                                </div>
                            </div>
                        <?php $this->session->set_flashdata('error', false);
                        } else {
                            echo validation_errors();
                        } ?>
                        <select class="w-full outline-none border px-3 pb-3 pt-6 rounded-[3px] appearance-none cursor-pointer focus:border-secondary focus:border" name="" id="">
                            <option value="">Select package</option>
                            <?php $passed_package = $this->input->get('plan');
                            if (isset($packages)) {
                                foreach ($packages as $key => $value) {

                                    $monthly_price = $value['monthly_price'];
                                    if ($value['monthly_discount_price'] != 0 && $value['monthly_discount_price'] != '') {
                                        $monthly_price =   $value['monthly_price'] - ($value['monthly_price'] * $value['monthly_discount_price'] / 100);
                                    }

                                    $string = $value['title'] . '-';
                                    if ($value['type'] == 1) {
                                        $string .= 'Free';
                                    } else {
                                        $string .= 'Billed';
                                    }
                                    if ($monthly_price > 0) {
                                        $string .= '-$' . $monthly_price . '-Monthly';
                                    } else {
                                        $string .= '-$' . $monthly_price;
                                    }
                                    if ($value['id'] == set_value('package')) {
                            ?>
                                        <option selected="" value="<?php echo $value['id'] . '-monthly'; ?>">
                                            <?php echo $string; ?>
                                        </option>
                                    <?php
                                    } else {
                                        $selected = '';
                                        if ($passed_package == $value['title']) {
                                            $selected = 'selected';
                                        }
                                    ?>
                                        <option value="<?php echo $value['id'] . '-monthly'; ?>" <?php echo $selected ?>>
                                            <?php echo $string; ?>
                                        </option>
                                    <?php
                                    }
                                }
                                foreach ($packages as $key => $value) {
                                    $yearly_price = $value['yearly_price'];
                                    if ($value['yearly_discount_price'] != 0 && $value['yearly_discount_price'] != '') {
                                        $yearly_price =   $value['yearly_price'] - ($value['yearly_price'] * $value['yearly_discount_price'] / 100);
                                    }
                                    $string = $value['title'] . '-';
                                    if ($value['type'] == 1) {
                                        $string .= 'Free';
                                    } else {
                                        $string .= 'Billed';
                                    }
                                    $string .= '-$' . $yearly_price . '-yearly';
                                    if ($value['yearly_price'] > 0) {
                                    ?>
                                        <option value="<?php echo $value['id'] . '-monthly'; ?>">
                                            <?php echo $string; ?>
                                        </option>
                            <?php
                                    }
                                }
                            } ?>
                        </select>
                        <span class="absolute top-1 left-7 text-[10px] text-secondary">Select Theme</span>
                        <img class="absolute top-1/2 w-3 right-8 -translate-y-1/2" src="image/arrow.svg" alt="">
                    </div>
                    <div class="w-full md:w-1/2 px-3 my-2 input">
                        <label for="" class="relative block input-populated overflow-hidden">
                            <input class="text-sm block border p-5 w-full outline-none duration-200 ease-in-out placeholder:duration-200 placeholder:ease-in-out placeholder:text-primary focus:pt-7 focus:pb-3 focus:placeholder:text-transparent placeholder:text-opacity-40 focus:border-secondary rounded-[3px]" type="text" placeholder="First Name" id="firstname" name="firstname" value="<?php echo set_value('firstname') ?>">
                            <span class="text-secondary text-xs absolute left-5 opacity-0 duration-200 ease-in-out">First Name</span>
                        </label>
                    </div>
                    <div class="w-full md:w-1/2 px-3 my-2 input">
                        <label for="" class="relative block input-populated overflow-hidden">
                            <input type="text" placeholder="Last Name" class="text-sm block border p-5 w-full outline-none duration-200 ease-in-out placeholder:duration-200 placeholder:ease-in-out placeholder:text-primary focus:pt-7 focus:pb-3 focus:placeholder:text-transparent placeholder:text-opacity-40 focus:border-secondary rounded-[3px]" id="lastname" name="lastname" value="<?php echo set_value('lastname') ?>">
                            <span class="text-secondary text-xs absolute left-5 opacity-0 duration-200 ease-in-out">Last Name</span>
                        </label>
                    </div>
                    <div class="w-full md:w-1/2 px-3 my-2 input">
                        <label for="" class="relative block input-populated overflow-hidden">
                            <input type="text" placeholder="Company" class="text-sm block border p-5 w-full outline-none duration-200 ease-in-out placeholder:duration-200 placeholder:ease-in-out placeholder:text-primary focus:pt-7 focus:pb-3 focus:placeholder:text-transparent placeholder:text-opacity-40 focus:border-secondary rounded-[3px]" id="company" name="company" value="<?php echo set_value('company') ?>">
                            <span class="text-secondary text-xs absolute left-5 opacity-0 duration-200 ease-in-out">Company</span>
                        </label>
                    </div>
                    <div class="w-full md:w-1/2 px-3 my-2 input">
                        <label for="" class="relative block input-populated overflow-hidden">
                            <input type="text" placeholder="Title" class="text-sm block border p-5 w-full outline-none duration-200 ease-in-out placeholder:duration-200 placeholder:ease-in-out placeholder:text-primary focus:pt-7 focus:pb-3 focus:placeholder:text-transparent placeholder:text-opacity-40 focus:border-secondary rounded-[3px]" id="title" name="title" value="<?php echo set_value('title') ?>">
                            <span class="text-secondary text-xs absolute left-5 opacity-0 duration-200 ease-in-out">Title</span>
                        </label>
                    </div>
                    <div class="w-full px-3 my-2 input">
                        <label for="" class="relative block input-populated overflow-hidden">
                            <input type="email" placeholder="Email" class="text-sm block border p-5 w-full outline-none duration-200 ease-in-out placeholder:duration-200 placeholder:ease-in-out placeholder:text-primary focus:pt-7 focus:pb-3 focus:placeholder:text-transparent placeholder:text-opacity-40 focus:border-secondary rounded-[3px]" id="email" name="email" value="<?php echo set_value('email') ?>">
                            <span class="text-secondary text-xs absolute left-5 opacity-0 duration-200 ease-in-out">Email</span>
                        </label>
                    </div>
                    <div class="md:w-1/2 w-full px-3 my-2">
                        <label for="" class="relative block input-populated overflow-hidden input">
                            <input type="password" placeholder="Password" class="text-sm block border p-5 w-full outline-none duration-200 ease-in-out placeholder:duration-200 placeholder:ease-in-out placeholder:text-primary focus:pt-7 focus:pb-3 focus:placeholder:text-transparent placeholder:text-opacity-40 focus:border-secondary rounded-[3px]" id="password" name="password" value="<?php echo set_value('password') ?>">
                            <span class="text-secondary text-xs absolute left-5 opacity-0 duration-200 ease-in-out">Password</span>
                        </label>
                    </div>
                    <div class="md:w-1/2 w-full px-3 my-2">
                        <label for="" class="relative block input-populated overflow-hidden input">
                            <input type="password" placeholder="Confirm Password" class="text-sm block border p-5 w-full outline-none duration-200 ease-in-out placeholder:duration-200 placeholder:ease-in-out placeholder:text-primary focus:pt-7 focus:pb-3 focus:placeholder:text-transparent placeholder:text-opacity-40 focus:border-secondary rounded-[3px]" id="confirm_password" name="confirm_password" value="<?php echo set_value('confirm_password') ?>">
                            <span class="text-secondary text-xs absolute left-5 opacity-0 duration-200 ease-in-out">Confirm Password</span>
                        </label>
                    </div>
                    <?php $checked = (set_value('privacy_policy') == 'on') ? 'checked' : '' ?>
                    <div class="w-full px-4 mt-7 signup-checkbox form-group flex items-center">
                        <input type="checkbox" class="p-0 h-[initial] w-[initial] mb-0 hidden cursor-pointer" id="privacy_policy" name="privacy_policy" <?php echo $checked; ?> required>
                        <label for="scales" class="relative text-sm flex items-start cursor-pointer before:appearance-none before:border-2 before:border-secondary before:p-[7px] before:inline-block before:relative before:align-middle before:cursor-pointer before:mr-[14px] before:bg-white">
                            <p>I Have Read And Agree To The Mailsignatory.Com's <a href="#" class="text-secondary ml-1">Terms Of Service</a></p>
                        </label>
                    </div>
                    <div class="text-center mt-7 w-full">
                        <button type="submit" class="uppercase bg-secondary py-3 px-6 inline-block rounded-md text-base text-white border-2 border-secondary duration-300 ease-in-out hover:bg-white hover:text-secondary">SIGN UP</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript">
    $("#signup_info").validate({
        rules: {
            password: {
                required: true,
                minlength: 5
            },
            package: {
                required: true,
            },
            email: {
                required: true,
                email: true
            },
            confirm_password: {
                required: true,
                equalTo: "#password"
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