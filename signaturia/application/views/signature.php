<div class="container-fluid generator">
    <!-- <div class="dash-cont"> -->
    <div class="conver-wrap">
        <?php
        if ($this->session->flashdata('success')) {
        ?>
            <div class="alert bg-success alert-styled-left bootstrap_alert">
                <a class="close" data-dismiss="alert">×</a>
                <strong><?php echo $this->session->flashdata('success') ?></strong>
            </div>
        <?php
            $this->session->set_flashdata('success', false);
        } else if ($this->session->flashdata('error')) {
        ?>
            <div class="alert bg-danger alert-styled-left bootstrap_alert">
                <a class="close" data-dismiss="alert">×</a>
                <strong><?php echo $this->session->flashdata('error') ?></strong>
            </div>
        <?php
            $this->session->set_flashdata('error', false);
        }
        if (isset($my_logo_validation)) {
        ?>
            <div class="alert bg-danger alert-styled-left bootstrap_alert">
                <a class="close" data-dismiss="alert">×</a>
                <strong><?php echo $my_logo_validation ?></strong>
            </div>
        <?php
        }
        if (isset($signature_banner_validation)) {
        ?>
            <div class="alert bg-danger alert-styled-left bootstrap_alert">
                <a class="close" data-dismiss="alert">×</a>
                <strong><?php echo $signature_banner_validation ?></strong>
            </div><?php
                }
                    ?>
        <div class="client-wrap">
            <!--                    <div class="act-panel visible-xs">
                                    <div class="preview"><a href="#">Preview <i class="fa fa-drivers-license-o" aria-hidden="true"></i></a></div>
                                </div>-->
            <div class="client-inner" id="client-inner">
                <form id="signature_form" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="hidden_sign_image" id="hidden_sign_image">
                    <div class="white-box">
                        <div class="white-box-head">
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#main" aria-controls="main" role="tab" data-toggle="tab">Main</a></li>
                                <li role="presentation"><a href="#social" aria-controls="social" role="tab" data-toggle="tab">Social</a></li>
                                <li role="presentation"><a href="#disclaimer" aria-controls="disclaimer" role="tab" data-toggle="tab">Disclaimer</a></li>
                                <li role="presentation"><a href="#banner" aria-controls="banner" role="tab" data-toggle="tab">Banner</a></li>
                                <li role="presentation"><a href="#style" aria-controls="style" role="tab" data-toggle="tab">Style</a></li>
                                <li role="presentation"><a href="#app" aria-controls="app" role="tab" data-toggle="tab">Apps</a></li>
                            </ul>
                        </div>
                        <div class="white-box-content person-info-content">
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="main">
                                    <div class="row">
                                        <?php
                                        if (isset($fields->Style)) {
                                            if (isset($signature['style_id'])) {
                                                $name = 'allowed';
                                            } else {
                                                $name = 'not-allowed';
                                            }
                                        } else {
                                            $name = 'not-allowed';
                                        }
                                        if ($name == 'allowed') {
                                        ?>
                                            <div class="col-sm-12">
                                                <div class="input select input-filled">
                                                    <select name="signature_theme_id" id="signature_theme_id" class="selectpicker">
                                                        <option selected="selected" value="1" <?php if (isset($signature) && @$signature['theme_id'] == 1) echo 'selected' ?>>Theme One</option>
                                                        <option value="2" <?php if (isset($signature) && @$signature['theme_id'] == 2) echo 'selected' ?>>Theme Two</option>
                                                        <option value="3" <?php if (isset($signature) && @$signature['theme_id'] == 3) echo 'selected' ?>>Theme Three</option>
                                                        <option value="4" <?php if (isset($signature) && @$signature['theme_id'] == 4) echo 'selected' ?>>Theme Four</option>
                                                        <option value="5" <?php if (isset($signature) && @$signature['theme_id'] == 5) echo 'selected' ?>>Theme Five</option>
                                                        <option value="6" <?php if (isset($signature) && @$signature['theme_id'] == 6) echo 'selected' ?>>Theme Six</option>
                                                        <option value="7" <?php if (isset($signature) && @$signature['theme_id'] == 7) echo 'selected' ?>>Theme Seven</option>
                                                        <option value="8" <?php if (isset($signature) && @$signature['theme_id'] == 8) echo 'selected' ?>>Theme Eight</option>
                                                        <option value="9" <?php if (isset($signature) && @$signature['theme_id'] == 9) echo 'selected' ?>>Theme Nine</option>
                                                        <option value="10" <?php if (isset($signature) && @$signature['theme_id'] == 10) echo 'selected' ?>>Theme Ten</option>
                                                        <option value="11" <?php if (isset($signature) && @$signature['theme_id'] == 11) echo 'selected' ?>>Theme Eleven</option>
                                                        <option value="12" <?php if (isset($signature) && @$signature['theme_id'] == 12) echo 'selected' ?>>Theme Twelve</option>
                                                        <option value="13" <?php if (isset($signature) && @$signature['theme_id'] == 13) echo 'selected' ?>>Theme Thirteen</option>
                                                        <option value="14" <?php if (isset($signature) && @$signature['theme_id'] == 14) echo 'selected' ?>>Theme Fourteen</option>
                                                        <option value="15" <?php if (isset($signature) && @$signature['theme_id'] == 15) echo 'selected' ?>>Theme Fifteen</option>
                                                    </select>
                                                    <label class="input-label" for="signature_theme_id">Select Theme</label>
                                                </div>
                                            </div>
                                        <?php } ?>
                                        <div class="col-md-6 col-sm-12">
                                            <?php
                                            if ($fields->main) {
                                                if (in_array('name', array_map('strtolower', $fields->main))) {
                                                    $name = 'allowed';
                                                } else {
                                                    $name = 'not-allowed';
                                                }
                                            } else {
                                                $name = 'not-allowed';
                                            }

                                            if ($name == 'allowed') {
                                            ?>
                                                <div class="input ">
                                                    <input class="input-field group-require" type="text" id="signature_name" name="signature_name" value="<?php if (isset($signature)) echo $signature['name'] ?>" />
                                                    <label class="input-label input-label-juro" for="signature_name">Name</label>
                                                </div>
                                            <?php
                                            } else {
                                            ?>
                                                <div class="input">
                                                    <input class="input-field group-require" type="text" value="" disabled />
                                                    <label class="input-label input-label-juro" for="signature_name">
                                                        <?php
                                                        if (isset($signature)) {
                                                            if ($signature['name'] != '')
                                                                echo $signature['name'];
                                                            else
                                                                echo 'Name not allowed';
                                                        }
                                                        ?>
                                                    </label>
                                                </div>
                                            <?php
                                            }
                                            ?>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <?php
                                            if ($fields->main) {
                                                if (in_array('job_title', array_map('strtolower', $fields->main))) {
                                                    $name = 'allowed';
                                                } else {
                                                    $name = 'not-allowed';
                                                }
                                            } else {
                                                $name = 'not-allowed';
                                            }

                                            if ($name == 'allowed') {
                                            ?>
                                                <div class="input">
                                                    <input class="input-field group-require" type="text" id="signature_jobtitle" name="signature_jobtitle" value="<?php if (isset($signature)) echo $signature['job_title'] ?>" />
                                                    <label class="input-label input-label-juro" for="signature_jobtitle">Job Title / Designation</label>
                                                </div>
                                            <?php
                                            } else {
                                            ?>
                                                <div class="input">
                                                    <input class="input-field group-require" type="text" value="" disabled />
                                                    <label class="input-label input-label-juro" for="signature_name">
                                                        <?php
                                                        if (isset($signature)) {
                                                            if ($signature['job_title'] != '')
                                                                echo $signature['job_title'];
                                                            else
                                                                echo 'Job title not allowed';
                                                        }
                                                        ?>
                                                    </label>
                                                </div>
                                            <?php
                                            }
                                            ?>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <?php
                                            if ($fields->main) {
                                                if (in_array('email', array_map('strtolower', $fields->main))) {
                                                    $name = 'allowed';
                                                } else {
                                                    $name = 'not-allowed';
                                                }
                                            } else {
                                                $name = 'not-allowed';
                                            }

                                            if ($name == 'allowed') {
                                            ?>
                                                <div class="input">
                                                    <input class="input-field group-require" type="text" id="signature_email" name="signature_email" value="<?php if (isset($signature)) echo $signature['email'] ?>" />
                                                    <label class="input-label input-label-juro" for="signature_email">Email</label>
                                                </div>
                                            <?php
                                            } else {
                                            ?>
                                                <div class="input">
                                                    <input class="input-field group-require" type="text" value="" disabled />
                                                    <label class="input-label input-label-juro" for="signature_name">
                                                        <?php
                                                        if (isset($signature)) {
                                                            if ($signature['email'] != '')
                                                                echo $signature['email'];
                                                            else
                                                                echo 'Email not allowed';
                                                        }
                                                        ?>
                                                    </label>
                                                </div>
                                            <?php
                                            }
                                            ?>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <?php
                                            if ($fields->main) {
                                                if (in_array('mobile_number', array_map('strtolower', $fields->main))) {
                                                    $name = 'allowed';
                                                } else {
                                                    $name = 'not-allowed';
                                                }
                                            } else {
                                                $name = 'not-allowed';
                                            }

                                            if ($name == 'allowed') {
                                            ?>
                                                <div class="input">
                                                    <input class="input-field group-require" type="text" id="signature_mobilephone" name="signature_mobilephone" value="<?php if (isset($signature)) echo $signature['mobile_number'] ?>" />
                                                    <label class="input-label input-label-juro" for="signature_mobilephone">Mobile Number</label>
                                                </div>
                                            <?php
                                            } else {
                                            ?>
                                                <div class="input">
                                                    <input class="input-field group-require" type="text" value="" disabled />
                                                    <label class="input-label input-label-juro" for="signature_name">
                                                        <?php
                                                        if (isset($signature)) {
                                                            if ($signature['mobile_number'] != '')
                                                                echo $signature['mobile_number'];
                                                            else
                                                                echo 'Mobile number not allowed';
                                                        }
                                                        ?>
                                                    </label>
                                                </div>
                                            <?php
                                            }
                                            ?>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <?php
                                            if ($fields->main) {
                                                if (in_array('company_name', array_map('strtolower', $fields->main))) {
                                                    $name = 'allowed';
                                                } else {
                                                    $name = 'not-allowed';
                                                }
                                            } else {
                                                $name = 'not-allowed';
                                            }

                                            if ($name == 'allowed') {
                                            ?>
                                                <div class="input">
                                                    <input class="input-field group-require" type="text" id="signature_companyname" name="signature_companyname" value="<?php if (isset($signature)) echo $signature['company_name'] ?>" />
                                                    <label class="input-label input-label-juro" for="signature_companyname">Compnay Name</label>
                                                </div>
                                            <?php
                                            } else {
                                            ?>
                                                <div class="input">
                                                    <input class="input-field group-require" type="text" value="" disabled />
                                                    <label class="input-label input-label-juro" for="signature_name">
                                                        <?php
                                                        if (isset($signature)) {
                                                            if ($signature['company_name'] != '')
                                                                echo $signature['company_name'];
                                                            else
                                                                echo 'Company name not allowed';
                                                        }
                                                        ?>
                                                    </label>
                                                </div>
                                            <?php
                                            }
                                            ?>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <?php
                                            if ($fields->main) {
                                                if (in_array('website', array_map('strtolower', $fields->main))) {
                                                    $name = 'allowed';
                                                } else {
                                                    $name = 'not-allowed';
                                                }
                                            } else {
                                                $name = 'not-allowed';
                                            }

                                            if ($name == 'allowed') {
                                            ?>
                                                <div class="input">
                                                    <input class="input-field group-require" type="text" id="signature_website" name="signature_website" value="<?php if (isset($signature)) echo $signature['website'] ?>" />
                                                    <label class="input-label input-label-juro" for="signature_website">Website</label>
                                                </div>
                                            <?php
                                            } else {
                                            ?>
                                                <div class="input">
                                                    <input class="input-field group-require" type="text" value="" disabled />
                                                    <label class="input-label input-label-juro" for="signature_name">
                                                        <?php
                                                        if (isset($signature)) {
                                                            if ($signature['website'] != '')
                                                                echo $signature['website'];
                                                            else
                                                                echo 'Website not allowed';
                                                        }
                                                        ?>
                                                    </label>
                                                </div>
                                            <?php
                                            }
                                            ?>
                                        </div>
                                        <div class="col-md-12">
                                            <?php
                                            if ($fields->main) {
                                                if (in_array('logo', array_map('strtolower', $fields->main))) {
                                                    $name = 'allowed';
                                                } else {
                                                    $name = 'not-allowed';
                                                }
                                            } else {
                                                $name = 'not-allowed';
                                            }

                                            if ($name == 'allowed') {
                                            ?>
                                                <div class="input file">
                                                    <div class="custom-file-upload">
                                                        <input type="file" id="ddff" name="my_logo" class="custome-file" onchange="readURL(this);" />
                                                    </div>
                                                    <label class="input-label input-label-juro" for="input-28">Choose file...</label>
                                                </div>
                                            <?php
                                            } else {
                                            ?>
                                                <div class="input file">
                                                    <div class="custom-file-upload">
                                                        <input type="file" class="custome-file" onchange="readURL(this);" disabled />
                                                    </div>
                                                    <label class="input-label input-label-juro" for="input-28">Not editable...</label>
                                                </div>
                                            <?php
                                            }
                                            ?>
                                        </div>
                                        <!--                                                <div class="col-md-6 col-sm-12">
                                        <?php
                                        if ($fields->main) {
                                            if (in_array('office_phone', array_map('strtolower', $fields->main))) {
                                                $name = 'allowed';
                                            } else {
                                                $name = 'not-allowed';
                                            }
                                        } else {
                                            $name = 'not-allowed';
                                        }

                                        if ($name == 'allowed') {
                                        ?>
                                                                                                                                                                                            <div class="input">
                                                                                                                                                                                                <input class="input-field group-require" type="text" id="signature_officephone" name="signature_officephone" value="<?php if (isset($signature)) echo $signature['office_phone'] ?>"/>
                                                                                                                                                                                                <label class="input-label input-label-juro" for="signature_officephone">Phone Number</label>
                                                                                                                                                                                            </div>
                                            <?php
                                        } else {
                                            ?>
                                                                                                                                                                                            <div class="input">
                                                                                                                                                                                                <input class="input-field group-require" type="text" value="" disabled />
                                                                                                                                                                                                <label class="input-label input-label-juro" for="signature_name">
                                            <?php
                                            if (isset($signature)) {
                                                if ($signature['office_phone'] != '')
                                                    echo $signature['office_phone'];
                                                else
                                                    echo 'Office phone number not allowed';
                                            }
                                            ?>
                                                                                                                                                                                                </label>
                                                                                                                                                                                            </div>
                                            <?php
                                        }
                                            ?>
                                                                                        </div>-->
                                        <div class="col-md-12 col-sm-12">
                                            <?php
                                            if ($fields->main) {
                                                if (in_array('fax', array_map('strtolower', $fields->main))) {
                                                    $name = 'allowed';
                                                } else {
                                                    $name = 'not-allowed';
                                                }
                                            } else {
                                                $name = 'not-allowed';
                                            }

                                            if ($name == 'allowed') {
                                            ?>
                                                <div class="input">
                                                    <input class="input-field group-require" type="text" id="signature_fax" name="signature_fax" value="<?php if (isset($signature)) echo $signature['fax'] ?>" />
                                                    <label class="input-label input-label-juro" for="group-require">Fax</label>
                                                </div>
                                            <?php
                                            } else {
                                            ?>
                                                <div class="input">
                                                    <input class="input-field group-require" type="text" value="" disabled />
                                                    <label class="input-label input-label-juro" for="signature_name">
                                                        <?php
                                                        if (isset($signature)) {
                                                            if ($signature['fax'] != '')
                                                                echo $signature['fax'];
                                                            else
                                                                echo 'Fax not allowed';
                                                        }
                                                        ?>
                                                    </label>
                                                </div>
                                            <?php
                                            }
                                            ?>
                                        </div>
                                        <div class="col-md-12">
                                            <?php
                                            if ($fields->main) {
                                                if (in_array('address', array_map('strtolower', $fields->main))) {
                                                    $name = 'allowed';
                                                } else {
                                                    $name = 'not-allowed';
                                                }
                                            } else {
                                                $name = 'not-allowed';
                                            }

                                            if ($name == 'allowed') {
                                            ?>
                                                <div class="input">
                                                    <input class="input-field group-require" type="text" id="signature_address" name="signature_address" value="<?php if (isset($signature)) echo $signature['address'] ?>" />
                                                    <label class="input-label input-label-juro" for="signature_address">Address</label>
                                                </div>
                                            <?php
                                            } else {
                                            ?>
                                                <div class="input">
                                                    <input class="input-field group-require" type="text" value="" disabled />
                                                    <label class="input-label input-label-juro" for="signature_name">
                                                        <?php
                                                        if (isset($signature)) {
                                                            if ($signature['address'] != '')
                                                                echo $signature['address'];
                                                            else
                                                                echo 'Address not allowed';
                                                        }
                                                        ?>
                                                    </label>
                                                </div>
                                            <?php
                                            }
                                            ?>
                                        </div>
                                        <div class="col-md-12">
                                            <?php
                                            if ($fields->main) {
                                                if (in_array('address_line2', array_map('strtolower', $fields->main))) {
                                                    $name = 'allowed';
                                                } else {
                                                    $name = 'not-allowed';
                                                }
                                            } else {
                                                $name = 'not-allowed';
                                            }

                                            if ($name == 'allowed') {
                                            ?>
                                                <div class="input">
                                                    <input class="input-field group-require" type="text" id="signature_address2" name="signature_address2" value="<?php if (isset($signature)) echo $signature['address_line2'] ?>" />
                                                    <label class="input-label input-label-juro" for="signature_address2">Address line 2</label>
                                                </div>
                                            <?php
                                            } else {
                                            ?>
                                                <div class="input">
                                                    <input class="input-field group-require" type="text" value="" disabled />
                                                    <label class="input-label input-label-juro" for="signature_name">
                                                        <?php
                                                        if (isset($signature)) {
                                                            if ($signature['address_line2'] != '')
                                                                echo $signature['address_line2'];
                                                            else
                                                                echo 'Address line2 not allowed';
                                                        }
                                                        ?>
                                                    </label>
                                                </div>
                                            <?php
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="social">
                                    <div class="frm-desc">
                                        <h3 class="frm-title">Paste your social profile url's into the fields below.</h3>
                                        <p>Please make sure to add http:// or https:// at the beginning as shown in the examples.</p>
                                    </div>
                                    <div class="row">
                                        <?php
                                        foreach ($social_icons as $icon) {
                                            $url = '';
                                            if (isset($signature_social_data)) {
                                                foreach ($signature_social_data as $key => $value) {
                                                    if ($icon['id'] == $value['social_icons_id']) {
                                                        $url = $value['url'];
                                                    }
                                                }
                                            }
                                        ?>
                                            <div class="col-md-6 col-sm-12">
                                                <?php
                                                if (isset($fields->Social)) {
                                                    if (in_array(strtolower($icon['name']), array_map('strtolower', $fields->Social))) {
                                                        $name = 'allowed';
                                                    } else {
                                                        $name = 'not-allowed';
                                                    }
                                                } else {
                                                    $name = 'not-allowed';
                                                }

                                                if ($name == 'allowed') {
                                                ?>
                                                    <div class="input">
                                                        <input class="input-field social-group-require" type="text" id="signature_social_<?php echo $icon['id'] ?>" name="signature_social_<?php echo $icon['id'] ?>" value="<?php if (isset($signature_socials[$icon['id']])) echo $signature_socials[$icon['id']]['url'] ?>" />
                                                        <label class="input-label input-label-juro" for="signature_social_<?php echo $icon['id'] ?>"><?php echo $icon['name'] ?></label>
                                                    </div>
                                                <?php
                                                } else {
                                                ?>
                                                    <div class="input">
                                                        <input class="input-field group-require" type="text" id="signature_social_<?php echo $icon['id'] ?>" name="signature_social_<?php echo $icon['id'] ?>" value="<?php if (isset($signature_socials[$icon['id']])) echo $signature_socials[$icon['id']]['url'] ?>" readonly />
                                                        <label class="input-label input-label-juro" for="signature_name">
                                                            <?php
                                                            if ($url != '')
                                                                // echo $url;
                                                                echo $icon['name'];
                                                            else
                                                                echo $icon['name'] . ' not allowed';
                                                            ?>
                                                        </label>
                                                    </div>
                                                <?php
                                                }
                                                ?>
                                            </div>
                                        <?php }
                                        ?>
                                    </div>
                                </div>
                                <?php
                                if (isset($fields->Declaimer)) {
                                    if (isset($signature['disclaimer'])) {
                                        $name = 'allowed';
                                    } else {
                                        $name = 'not-allowed';
                                    }
                                } else {
                                    $name = 'not-allowed';
                                }

                                if ($name == 'not-allowed') {
                                ?>
                                    <div role="tabpanel" class="tab-pane" id="disclaimer">
                                        <div class="frm-cont">
                                            <div class="form-group">
                                                <?php if ($signature['disclaimer'] != '') { ?>
                                                    <label class="label-title">Disclaimer Not editable</label>
                                                <?php } else { ?>
                                                    <label class="label-title">Disclaimer Not allowed</label>
                                                <?php } ?>
                                                <textarea class="form-control group-require" disabled placeholder="Disclaimer text"><?php echo $signature['disclaimer']; ?></textarea>
                                                <p class="green-text">Disclaimer in Email Signatures are Not Just Annoying. But Legally Meaningless</p>
                                            </div>
                                        </div>
                                    </div>
                                <?php } else { ?>
                                    <div role="tabpanel" class="tab-pane" id="disclaimer">
                                        <div class="frm-cont">
                                            <div class="form-group">
                                                <label class="label-title">Show Disclaimer</label>
                                                <label class="radio-label">
                                                    <input type="radio" name="signature_disclaimer_show" id="yes" class="signature_disclaimer_radio" value="1" <?php
                                                                                                                                                                if (isset($signature)) {
                                                                                                                                                                    if ($signature['show_disclaimer'] == 1)
                                                                                                                                                                        echo 'checked';
                                                                                                                                                                } else {
                                                                                                                                                                    echo 'checked';
                                                                                                                                                                }
                                                                                                                                                                ?> /><span></span> Yes
                                                </label>
                                                <label class="radio-label">
                                                    <input type="radio" name="signature_disclaimer_show" id="no" class="signature_disclaimer_radio" value="0" <?php if (isset($signature) && $signature['show_disclaimer'] == 0) echo 'checked' ?> /><span></span> No
                                                </label>
                                            </div>
                                            <div class="form-group">
                                                <label class="label-title">Disclaimer</label>
                                                <textarea class="form-control group-require" name="signature_disclaimer" id="signature_disclaimer" placeholder="Disclaimer text"><?php echo $signature['disclaimer']; ?></textarea>
                                                <p class="green-text">Disclaimer in Email Signatures are Not Just Annoying. But Legally Meaningless</p>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                                <?php
                                if (isset($fields->Banner)) {
                                    if (isset($signature['banner'])) {
                                        $name = 'allowed';
                                    } else {
                                        $name = 'not-allowed';
                                    }
                                } else {
                                    $name = 'not-allowed';
                                }

                                if ($name == 'not-allowed') {
                                ?>
                                    <div role="tabpanel" class="tab-pane" id="banner">
                                        <div class="frm-cont">
                                            <div class="form-group">
                                                <?php if ($signature['banner'] != '') { ?>
                                                    <label class="label-title">Banner Not editable</label>
                                                <?php } else { ?>
                                                    <label class="label-title">Banner Not allowed</label>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php } else { ?>
                                    <div role="tabpanel" class="tab-pane" id="banner">
                                        <div class="frm-desc" style="display: none">
                                            <h3 class="frm-title">Paid Accounts Only</h3>
                                            <p>Please <a href="#">sign up</a> to add a banner to your signature.</p>
                                        </div>
                                        <div class="frm-cont">
                                            <div class="form-group">
                                                <p class="frm-text">Attach a promotional banner to the bottom of your signature. When clicked users will be taken to the link you enter in the banner link field.</p>
                                                <p class="frm-text">Recommended size for the banners is 300px by 60px, anything larger will be resized automatically.</p>
                                            </div>
                                            <div class="form-group">
                                                <label class="label-title">Show Banner</label>
                                                <label class="radio-label">
                                                    <input type="radio" name="signature_show_banner" value="1" class="signature_show_banner" id="yes" <?php if (isset($signature) && $signature['show_banner'] == 1) echo "checked"; ?> /><span></span> Yes
                                                </label>
                                                <label class="radio-label">
                                                    <input type="radio" name="signature_show_banner" value="0" class="signature_show_banner" id="no" <?php if (isset($signature) && $signature['show_banner'] == 0) echo "checked"; ?> /><span></span> No
                                                </label>
                                            </div>
                                            <div class="input file">
                                                <div class="custom-file-upload"><input type="file" id="file" name="signature_banner" class="custome-file" onchange="readBannerURL(this);" /></div>
                                                <label class="input-label input-label-juro" for="signature_banner">Choose file...</label>
                                            </div>
                                            <div class="input">
                                                <input class="input-field" type="text" name="signature_banner_url" id="signature_banner_url" value="<?php if (isset($signature)) echo $signature['banner_url'] ?>" />
                                                <label class="input-label input-label-juro" for="signature_banner_url">Banner Link</label>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                                <?php
                                if (isset($fields->Style)) {
                                    if (isset($signature['style_id'])) {
                                        $name = 'allowed';
                                    } else {
                                        $name = 'not-allowed';
                                    }
                                } else {
                                    $name = 'not-allowed';
                                }

                                if ($name == 'not-allowed') {
                                ?>
                                    <div role="tabpanel" class="tab-pane" id="style">
                                        <div class="frm-cont">
                                            <div class="form-group">
                                                <?php if (!isset($signature['style_id'])) { ?>
                                                    <label class="label-title">Style Not editable</label>
                                                <?php } else { ?>
                                                    <label class="label-title">Style Not allowed</label>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php } else { ?>
                                    <div role="tabpanel" class="tab-pane" id="style">
                                        <div class="frm-desc" style="display: none">
                                            <h3 class="frm-title">Paid Accounts Only</h3>
                                            <p>Please <a href="#">sign up</a> to change themes, colors and other options on your signature.</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12">
                                                <div class="input select input-filled">
                                                    <select name="signature_font_style" id="signature_font_style" class="selectpicker">
                                                        <option value="Helvetica, Arial, sans-serif" <?php if (isset($signature) && @$signature['font_style'] == 'Helvetica, Arial, sans-serif') echo 'selected' ?>>Arial</option>
                                                        <option value="'Open Sans', sans-serif" <?php if (isset($signature) && @$signature['font_style'] == "'Open Sans', sans-serif") echo 'selected' ?>>Open Sans</option>
                                                        <option value="'Lato', sans-serif" <?php if (isset($signature) && @$signature['font_style'] == "'Lato', sans-serif") echo 'selected' ?>>Lato</option>
                                                        <option value="'Roboto', sans-serif" <?php if (isset($signature) && @$signature['font_style'] == "'Roboto', sans-serif") echo 'selected' ?>>Roboto</option>
                                                        <!--<option value="Times New Roman" <?php if (isset($signature) && @$signature['font_style'] == 'Times New Roman') echo 'selected' ?>>Times New Roman</option>-->
                                                    </select>
                                                    <label class="input-label" for="">Font Style</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="input">
                                                    <input id="cp1" type="text" name="signature_text_color" id="signature_text_color" class="input-field sample-selector" value="<?php
                                                                                                                                                                                    if (isset($signature) && @$signature['text_color'] != '')
                                                                                                                                                                                        echo $signature['text_color'];
                                                                                                                                                                                    else
                                                                                                                                                                                        echo '#4fb218';
                                                                                                                                                                                    ?>" />
                                                    <label class="input-label input-label-juro" for="signature_text_color">Title Color</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="input">
                                                    <input id="cp1" type="text" name="signature_link_color" id="signature_link_color" class="input-field sample-selector" value="<?php
                                                                                                                                                                                    if (isset($signature) && @$signature['link_color'] != '')
                                                                                                                                                                                        echo $signature['link_color'];
                                                                                                                                                                                    else
                                                                                                                                                                                        echo '#333';
                                                                                                                                                                                    ?>" />
                                                    <label class="input-label input-label-juro" for="signature_link_color">Link Color</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="input">
                                                    <input type="text" name="signature_p_text_color" id="signature_p_text_color" class="input-field sample-selector" value="<?php
                                                                                                                                                                            if (isset($signature) && @$signature['p_text_color'] != '')
                                                                                                                                                                                echo $signature['p_text_color'];
                                                                                                                                                                            else
                                                                                                                                                                                echo '#333';
                                                                                                                                                                            ?>" />
                                                    <label class="input-label input-label-juro" for="signature_p_text_color">Text Color</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="input select input-filled">
                                                    <select name="signature_fontsize" id="signature_fontsize" class="selectpicker">
                                                        <option value="10" <?php if (isset($signature) && @$signature['fontsize'] == '10') echo 'selected' ?>>10</option>
                                                        <option value="12" <?php
                                                                            if (isset($signature)) {
                                                                                if (@@$signature['fontsize'] == '12')
                                                                                    echo 'selected';
                                                                            } else
                                                                                echo 'selected';
                                                                            ?>>12</option>
                                                        <option value="14" <?php if (isset($signature) && @$signature['fontsize'] == '14') echo 'selected' ?>>14</option>
                                                        <option value="16" <?php if (isset($signature) && @$signature['fontsize'] == '16') echo 'selected' ?>>16</option>
                                                        <option value="18" <?php if (isset($signature) && @$signature['fontsize'] == '18') echo 'selected' ?>>18</option>
                                                        <option value="24" <?php if (isset($signature) && @$signature['fontsize'] == '24') echo 'selected' ?>>24</option>
                                                    </select>
                                                    <label class="input-label" for="">Font Size</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="input select input-filled">
                                                    <select name="signature_social_icon_set_id" id="signature_social_icon_set_id" class="selectpicker">
                                                        <option value="1" <?php if (isset($signature) && @$signature['social_icon_set_id'] == '1') echo 'selected' ?>>Icon set one</option>
                                                        <option value="2" <?php if (isset($signature) && @$signature['social_icon_set_id'] == '2') echo 'selected' ?>>Icon set Two</option>
                                                        <option value="3" <?php if (isset($signature) && @$signature['social_icon_set_id'] == '3') echo 'selected' ?>>Icon set Three</option>
                                                        <option value="4" <?php if (isset($signature) && @$signature['social_icon_set_id'] == '4') echo 'selected' ?>>Icon set Four</option>
                                                    </select>
                                                    <label class="input-label" for="">Social Icon</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="input select input-filled">
                                                    <select name="signature_iconsize" id="signature_iconsize" class="selectpicker">
                                                        <option value="20" <?php if (isset($signature) && @$signature['iconsize'] == '20') echo 'selected' ?>>20px</option>
                                                        <option value="24" <?php if (isset($signature) && @$signature['iconsize'] == '24') echo 'selected' ?>>24px</option>
                                                        <option value="30" <?php if (isset($signature) && @$signature['iconsize'] == '30') echo 'selected' ?>>30px</option>
                                                        <option value="36" <?php if (isset($signature) && @$signature['iconsize'] == '36') echo 'selected' ?>>36px</option>
                                                    </select>
                                                    <label class="input-label" for="signature_iconsize">Icon Size</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>

                                <div role="tabpanel" class="tab-pane" id="app">
                                    <div class="frm-desc" style="display: none">
                                        <h3 class="frm-title">Paid Accounts Only</h3>
                                        <p>Please <a href="#">sign up</a> to add App Store links to your signature.<br>Add your APP download links below:</p>
                                    </div>
                                    <div class="app-icn">

                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <?php
                                            if (isset($fields->Apps)) {
                                                if (in_array('appstore_link', array_map('strtolower', $fields->Apps))) {
                                                    $name = 'allowed';
                                                } else {
                                                    $name = 'not-allowed';
                                                }
                                            } else {
                                                $name = 'not-allowed';
                                            }

                                            if ($name == 'allowed') {
                                            ?>
                                                <div class="input">
                                                    <input class="input-field appicon-require" type="text" name="signature_apple_app_store_link" id="signature_apple_app_store_link" value="<?php if (isset($signature)) echo $signature['appstore_link']; ?>" />
                                                    <label class="input-label input-label-juro" for="signature_apple_app_store_link">App Store Link</label>
                                                </div>
                                            <?php
                                            } else {
                                            ?>
                                                <div class="input">
                                                    <input class="input-field group-require" type="text" value="" disabled />
                                                    <label class="input-label input-label-juro" for="signature_name">
                                                        <?php
                                                        if (isset($signature)) {
                                                            if ($signature['appstore_link'] != '')
                                                                echo $signature['appstore_link'];
                                                            else
                                                                echo 'Appstore link not allowed';
                                                        }
                                                        ?>
                                                    </label>
                                                </div>
                                            <?php
                                            }
                                            ?>
                                        </div>
                                        <div class="col-md-12">
                                            <?php
                                            if (isset($fields->Apps)) {
                                                if (in_array('googleplaytore_link', array_map('strtolower', $fields->Apps))) {
                                                    $name = 'allowed';
                                                } else {
                                                    $name = 'not-allowed';
                                                }
                                            } else {
                                                $name = 'not-allowed';
                                            }

                                            if ($name == 'allowed') {
                                            ?>
                                                <div class="input">
                                                    <input class="input-field appicon-require" type="text" name="signature_google_play_link" id="signature_google_play_link" value="<?php if (isset($signature)) echo $signature['googleplaytore_link']; ?>" />
                                                    <label class="input-label input-label-juro" for="signature_google_play_link">Google Play Store Link</label>
                                                </div>
                                            <?php
                                            } else {
                                            ?>
                                                <div class="input">
                                                    <input class="input-field group-require" type="text" value="" disabled />
                                                    <label class="input-label input-label-juro" for="signature_name">
                                                        <?php
                                                        if (isset($signature)) {
                                                            if ($signature['googleplaytore_link'] != '')
                                                                echo $signature['googleplaytore_link'];
                                                            else
                                                                echo 'Google play store link not allowed';
                                                        }
                                                        ?>
                                                    </label>
                                                </div>
                                            <?php
                                            }
                                            ?>
                                        </div>
                                        <div class="col-md-12">
                                            <?php
                                            if (isset($fields->Apps)) {
                                                if (in_array('amazon_link', array_map('strtolower', $fields->Apps))) {
                                                    $name = 'allowed';
                                                } else {
                                                    $name = 'not-allowed';
                                                }
                                            } else {
                                                $name = 'not-allowed';
                                            }

                                            if ($name == 'allowed') {
                                            ?>
                                                <div class="input">
                                                    <input class="input-field appicon-require" type="text" id="signature_amazon_app_store_link" name="signature_amazon_app_store_link" value="<?php if (isset($signature)) echo $signature['amazon_link']; ?>" />
                                                    <label class="input-label input-label-juro" for="signature_amazon_app_store_link">Amazon Link</label>
                                                </div>
                                            <?php
                                            } else {
                                            ?>
                                                <div class="input">
                                                    <input class="input-field group-require" type="text" value="" disabled />
                                                    <label class="input-label input-label-juro" for="signature_name">
                                                        <?php
                                                        if (isset($signature)) {
                                                            if ($signature['amazon_link'] != '')
                                                                echo $signature['amazon_link'];
                                                            else
                                                                echo 'Amazon link not allowed';
                                                        }
                                                        ?>
                                                    </label>
                                                </div>
                                            <?php
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="sig-sec">
            <div class="act-panel">
                <!--<div class="back-arrow visible-xs"><a href="#"><i class="fa fa-arrow-left" aria-hidden="true"></i>Back</a></div>-->
                <div class="download"><a href="javascript:void(0);" onclick="submit_form();">Download <i class="fa fa-download" aria-hidden="true"></i></a></div>
            </div>
            <div class="preview-wrap" id="signature_preview">
                <?php $this->load->view('signature_preview') ?>
            </div>
        </div>
    </div>
    <!-- </div> -->
</div>
<script src="assets/js/html2canvas.js"></script>
<script src="assets/js/signature.js"></script>
<script type="text/javascript">
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

    function submit_form() {
        theme_id = $('#signature_theme_id').val();
        if (theme_id == undefined) {
            theme_id = 1;
        }
        html2canvas($('#signature_preview'), {
            onrendered: function(canvas) {
                var data = canvas.toDataURL('image/png');
                console.log(data);
                $('#hidden_sign_image').val(data); //-- store sign image in hidden
                $('#signature_form').submit();
            }
        });
    }
    $(function() {
        $('.sample-selector').colorpicker();
    });
</script>