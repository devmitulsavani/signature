<div class="p-4 lg:p-6 xl:p-16 lg:ml-72 ">
    <div class="flex -mx-4 flex-wrap justify-between">
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
        <!-- <div class="fixed inset-0 md:inset-[unset] flex-col  justify-center items-center z-20 md:z-0 md:static hidden md:block px-4 w-full md:w-1/2 md:order-1 md:mb-0 generator-right md:h-auto lg:sticky lg:top-5">
            <div class="flex flex-wrap justify-between items-center w-full mb-5 min-h-[40px] mt-4 md:mt-0">
                <button class="inline-block md:hidden bg-primary px-6 py-2 text-white rounded-md uppercase text-xs sm:text-sm font-medium back-btn">Back</button>
                <span class="text-primary inline-block font-semibold pl-5 relative before:w-[10px] before:h-[10px] before:bg-secondary before:inline-block before:absolute before:left-0 before:top-1/2 before:-translate-y-1/2 before:rounded-full text-base">Theme Preview</span>
                <div class="flex items-center gap-3 w-full sm:w-min justify-center mt-3 sm:mt-0">
                    <button class="inline-block bg-primary px-6 py-2 text-white rounded-md uppercase text-xs sm:text-sm font-medium">Save</button>
                    <button class="inline-block bg-primary px-6 py-2 text-white rounded-md uppercase text-xs sm:text-sm font-medium">Download</button>
                </div>
            </div>
            <div class="overflow-y-auto mt-5 md:mt-0 preview bg-white w-full p-10 rounded-[5px] md:h-[calc(100%-60px)]" id="theme-1">
                <div class="default_signature sticky top-3 h-min" style="max-width:490px;margin-left: auto;margin-right: auto;">
                    <table style="margin-top: 0;margin-left: 0;margin-right: 0;margin-bottom: 10px;">
                        <tbody>
                            <tr>
                                <td colspan="1" valign="top" style="padding-right:15px;">
                                    <div style="height:80px;width:80px;margin-bottom:0;border-radius: 99px;overflow: hidden;">
                                        <img style="object-fit: cover;transform: scale(1.5); object-position: -20px 15px;" src="image/Image 1.png" alt="htmlsig.com" border="0" class="sig-logo default inline-block w-full h-full" data-pin-nopin="true">
                                    </div>
                                </td>
                                <td colspan="3" style="padding-left:20px;padding-top:0;" valign="top;">
                                    <h2 style="font-size: 16px;line-height:20px; margin: 0px;color: #E55812;font-weight: bold;">
                                        Timothy Boyd</h2>
                                    <h5 class="" style="font-size: 12px;line-height:16px;color: #202C39;padding-bottom: 0;padding-top: 2px;font-weight: 500;margin: 0px;">
                                        Senior content writer</h5>
                                    <ul class="" style="margin-top: 10px;margin-left: 0;margin-right: 0;margin-bottom: 0;padding: 0;list-style: none;text-align:left;font-size:12px;font-weight: 500;line-height:16px;margin-bottom:10px;">
                                        <li style="margin-bottom: 5px;margin-right: 10px;margin-left: 0;display:inline-block;color:#202C39;">
                                            <span class="" style="color: #E55812;">Mobile:</span> (953)517-5264
                                        </li>
                                        <li style="margin-bottom: 5px;margin-right: 10px;margin-left: 0;display:inline-block;color:#202C39;">
                                            <span class="" style="color: #E55812;">Fax:</span> (953)517-5264
                                        </li>
                                        <li style="margin-bottom: 5px;margin-right: 10px;margin-left: 0;display:inline-block;color:#202C39;">
                                            <span class="" style="color: #E55812;">Email:</span> <a href="mailto:timothyboyd@gmail.com" style="color:#333;text-decoration:none;" tabindex="0">timothyboyd@gmail.com</a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="4" class="border-t-2 border-t-[#E2E2E2] pt-2">
                                    <p class="" style="text-align:left;line-height: 16px;font-weight: 500;font-size: 12px;color: #202C39;margin-top: 0;margin-left: 0;margin-right: 0;margin-bottom: 5px;">
                                        <span class="" style="color: #E55812;display:block;font-size: 16px;font-weight: 600;margin-bottom: 2px;">Signaturia</span>32-black
                                        street, winter hour.United Kingdom 08808
                                    </p>
                                    <p class="" style="text-align:left;line-height: 16px;font-weight: 500;font-size: 12px;color: #202C39;margin-top: 0;margin-left: 0;margin-right: 0;margin-bottom: 0;">
                                        <span class="" style="color: #E55812;">Website:</span> <a href="www.mailsignatory.com" target="_blank" style="color:#333;text-decoration:none;" tabindex="0">www.mailsignatory.com</a>
                                    </p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="" style="margin: 0;padding: 10px;text-align:right;display: flex;justify-content: center;">
                        <a style=" text-decoration:none;display:inline-block;" class="social" href="#"> <img style="margin-bottom:2px;margin-right:0; border:none; display:inline;" src="image/facebook.png" alt=""> </a>
                        <a style=" text-decoration:none;display:inline-block;" class="social" href="#"> <img style="margin-bottom:2px;margin-right:0; border:none; display:inline;" src="image/twiter.png" alt=""> </a>
                        <a style=" text-decoration:none;display:inline-block;" class="social" href="#"> <img style="margin-bottom:2px;margin-right:0; border:none; display:inline;" src="image/googleplus.png" alt=""> </a>
                        <a style=" text-decoration:none;display:inline-block;" class="social" href="#"> <img style="margin-bottom:2px;margin-right:0; border:none; display:inline;" src="image/printers.png" alt=""> </a>
                        <a style=" text-decoration:none;display:inline-block;" class="social" href="#"> <img style="margin-bottom:2px;margin-right:0; border:none; display:inline;" src="image/dribbble.png" alt=""> </a>
                    </div>
                    <p class="" style="text-align:left;margin-top:15px;margin-bottom:15px;margin-left:0;margin-right:0;">
                        <a href="#">
                            <img src="image/Group 254.png" alt="" border="0" style="width: 100%;" data-pin-nopin="true">
                        </a>
                    </p>
                    <p class="appstores-container" style="text-align:left;margin-top:15px;margin-bottom:15px;margin-left:0;margin-right:0;display: flex;justify-content: space-between;gap: 5px;">
                        <a class="appstore signature_amazon_app_store_link-target sig-hide" style="text-decoration:none;" href="#">
                            <img style="border:none;" src="image/Mask Group 2.png" class="appstore-icon" alt="Available at Amazon">
                        </a>
                        <a class="appstore signature_google_play_link-target sig-hide" style="text-decoration:none;" href="#">
                            <img style="border:none;" src="image/Mask Group 3.png" class="appstore-icon " alt="Get it on Google Play">
                        </a>
                        <a class="appstore signature_apple_app_store_link-target sig-hide" style="text-decoration:none;" href="#">
                            <img style="border:none;" src="image/Mask Group 4.png" class="appstore-icon " alt="Download on the App Store" data-pin-nopin="true">
                        </a>
                    </p>
                    <p class="signature_disclaimer-target" style="line-height: 15px;font-weight: 500;font-size: 10px;color: #202C39;margin:0;">A
                        disclaimer is generally any statement intended to specify or delimit the scope of rights and obligations
                        that may be exercised and enforced by parties in a legally recognized relationship. In contrast to other
                        terms for legally operative language, the term disclaimer usually implies situations that involve some
                        level of uncertainty, waiver, or risk.</p>
                </div>
            </div>
        </div> -->
        <div class="px-4 w-full md:w-1/2" id="client-inner">
            <form id="signature_form" method="post" enctype="multipart/form-data">
                <input type="hidden" name="hidden_sign_image" id="hidden_sign_image">
                <span class="text-primary min-h-[40px] flex items-center mb-5 font-semibold pl-5 relative before:w-[10px] before:h-[10px] before:bg-secondary before:inline-block 
                before:absolute before:left-0 before:top-1/2 before:-translate-y-1/2 before:rounded-full text-base">Create Signature</span>
                <div class="relative w-full h-[calc(100%-60px)]">
                    <div id="myTabs" class="w-full bg-white rounded-[5px] relative h-full">

                        <div class="white-box-head">
                            <ul id="tabs-nav" role="tablist" class="flex space-x-5 border-b-2 border-[#F2EDEA] font-medium text-base px-9 overflow-y-hidden overflow-x-auto">
                                <li role="presentation" class="active relative cursor-pointer py-5"><a href="#main" aria-controls="main" role="tab" data-toggle="tab">Main</a></li>
                                <li role="presentation" class="relative cursor-pointer py-5"><a href="#social" aria-controls="social" role="tab" data-toggle="tab">Social</a></li>
                                <li role="presentation" class="relative cursor-pointer py-5"><a href="#disclaimer" aria-controls="disclaimer" role="tab" data-toggle="tab">Disclaimer</a></li>
                                <li role="presentation" class="relative cursor-pointer py-5"><a href="#banner" aria-controls="banner" role="tab" data-toggle="tab">Banner</a></li>
                                <li role="presentation" class="relative cursor-pointer py-5"><a href="#style" aria-controls="style" role="tab" data-toggle="tab">Style</a></li>
                                <li role="presentation" class="relative cursor-pointer py-5"><a href="#app" aria-controls="app" role="tab" data-toggle="tab">Apps</a></li>
                            </ul>
                        </div>
                        <div id="tabs-content" class="white-box-content p-4">
                            <div role="tabpanel" id="main" class="tab-content">
                                <div class="flex flex-wrap">
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
                                        <div class="px-3 relative my-4 text-sm w-full">
                                            <select class="selectpicker" class="w-full outline-none border px-3 pb-3 pt-6 appearance-none cursor-pointer" name="signature_theme_id" id="signature_theme_id">
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
                                            <span class="absolute top-1 left-7 text-[10px] text-secondary">Select Theme</span>
                                            <img class="absolute top-1/2 w-3 right-8 -translate-y-1/2" src="image/arrow.svg" alt="">
                                        </div>
                                    <?php } ?>
                                    <div class="w-full md:w-1/2 px-3 my-3">
                                        <?php
                                        global $fields; 
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
                                            <label for="" class="relative block input-populated overflow-hidden">
                                                <input type="text" placeholder="Name" id="signature_name" name="signature_name" value="<?php if (isset($signature)) echo $signature['name'] ?>" class="text-sm block border p-5 w-full outline-none duration-200 ease-in-out placeholder:duration-200 placeholder:ease-in-out placeholder:text-primary focus:pt-7 focus:pb-3 focus:placeholder:text-transparent placeholder:text-opacity-40">
                                                <span for="signature_name" class="text-secondary text-xs absolute left-5 opacity-0 duration-200 ease-in-out">Name</span>
                                            </label>
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
                                    <div class="w-full md:w-1/2 px-3 my-3">
                                        <label for="" class="relative block input-populated overflow-hidden">
                                            <input type="text" placeholder="Job Title / Designation" class="text-sm block border p-5 w-full outline-none duration-200 ease-in-out placeholder:duration-200 placeholder:ease-in-out placeholder:text-primary focus:pt-7 focus:pb-3 focus:placeholder:text-transparent placeholder:text-opacity-40">
                                            <span class="text-secondary text-xs absolute left-5 opacity-0 duration-200 ease-in-out">Job
                                                Title / Designation</span>
                                        </label>
                                    </div>
                                    <div class="w-full md:w-1/2 px-3 my-3">
                                        <label for="" class="relative block input-populated overflow-hidden">
                                            <input type="email" placeholder="Email" class="text-sm block border p-5 w-full outline-none duration-200 ease-in-out placeholder:duration-200 placeholder:ease-in-out placeholder:text-primary focus:pt-7 focus:pb-3 focus:placeholder:text-transparent placeholder:text-opacity-40">
                                            <span class="text-secondary text-xs absolute left-5 opacity-0 duration-200 ease-in-out">Email</span>
                                        </label>
                                    </div>
                                    <div class="w-full md:w-1/2 px-3 my-3">
                                        <label for="" class="relative block input-populated overflow-hidden">
                                            <input type="number" placeholder="Mobile Number" class="text-sm block border p-5 w-full outline-none duration-200 ease-in-out placeholder:duration-200 placeholder:ease-in-out placeholder:text-primary focus:pt-7 focus:pb-3 focus:placeholder:text-transparent placeholder:text-opacity-40">
                                            <span class="text-secondary text-xs absolute left-5 opacity-0 duration-200 ease-in-out">Mobile
                                                Number</span>
                                        </label>
                                    </div>
                                    <div class="w-full md:w-1/2 px-3 my-3">
                                        <label for="" class="relative block input-populated overflow-hidden">
                                            <input type="text" placeholder="Compnay Name" class="text-sm block border p-5 w-full outline-none duration-200 ease-in-out placeholder:duration-200 placeholder:ease-in-out placeholder:text-primary focus:pt-7 focus:pb-3 focus:placeholder:text-transparent placeholder:text-opacity-40">
                                            <span class="text-secondary text-xs absolute left-5 opacity-0 duration-200 ease-in-out">Compnay
                                                Name</span>
                                        </label>
                                    </div>
                                    <div class="w-full md:w-1/2 px-3 my-3">
                                        <label for="" class="relative block input-populated overflow-hidden">
                                            <input type="text" placeholder="Website" class="text-sm block border p-5 w-full outline-none duration-200 ease-in-out placeholder:duration-200 placeholder:ease-in-out placeholder:text-primary focus:pt-7 focus:pb-3 focus:placeholder:text-transparent placeholder:text-opacity-40">
                                            <span class="text-secondary text-xs absolute left-5 opacity-0 duration-200 ease-in-out">Website</span>
                                        </label>
                                    </div>
                                    <div class="w-full px-3 my-3">
                                        <label for="" class="relative block input-populated overflow-hidden">
                                            <input type="file" placeholder="Website" class="file:mr-4 file:py-2 file:px-4 file:border-0 file:text-sm file:font-semibold file:bg-secondary file:bg-opacity-10 file:text-secondary hover:file:bg-opacity-30 text-sm block border p-5 w-full outline-none duration-200 ease-in-out">
                                        </label>
                                    </div>
                                    <div class="w-full md:w-1/2 px-3 my-3">
                                        <label for="" class="relative block input-populated overflow-hidden">
                                            <input type="number" placeholder="Phone Number" class="text-sm block border p-5 w-full outline-none duration-200 ease-in-out placeholder:duration-200 placeholder:ease-in-out placeholder:text-primary focus:pt-7 focus:pb-3 focus:placeholder:text-transparent placeholder:text-opacity-40">
                                            <span class="text-secondary text-xs absolute left-5 opacity-0 duration-200 ease-in-out">Phone
                                                Number</span>
                                        </label>
                                    </div>
                                    <div class="w-full md:w-1/2 px-3 my-3">
                                        <label for="" class="relative block input-populated overflow-hidden">
                                            <input type="text" placeholder="Fax" class="text-sm block border p-5 w-full outline-none duration-200 ease-in-out placeholder:duration-200 placeholder:ease-in-out placeholder:text-primary focus:pt-7 focus:pb-3 focus:placeholder:text-transparent placeholder:text-opacity-40">
                                            <span class="text-secondary text-xs absolute left-5 opacity-0 duration-200 ease-in-out">Fax</span>
                                        </label>
                                    </div>
                                    <div class="w-full px-3 my-3">
                                        <label for="" class="relative block input-populated overflow-hidden">
                                            <input type="text" placeholder="Address" class="text-sm block border p-5 w-full outline-none duration-200 ease-in-out placeholder:duration-200 placeholder:ease-in-out placeholder:text-primary focus:pt-7 focus:pb-3 focus:placeholder:text-transparent placeholder:text-opacity-40">
                                            <span class="text-secondary text-xs absolute left-5 opacity-0 duration-200 ease-in-out">Address</span>
                                        </label>
                                    </div>
                                    <div class="w-full px-3 my-3">
                                        <label for="" class="relative block input-populated overflow-hidden">
                                            <input type="text" placeholder="Address line 2" class="text-sm block border p-5 w-full outline-none duration-200 ease-in-out placeholder:duration-200 placeholder:ease-in-out placeholder:text-primary focus:pt-7 focus:pb-3 focus:placeholder:text-transparent placeholder:text-opacity-40">
                                            <span class="text-secondary text-xs absolute left-5 opacity-0 duration-200 ease-in-out">Address
                                                line 2</span>
                                        </label>
                                    </div>
                                    <div class="tab-pane w-full active py-5 text-center">
                                        <span class="btn inline-block btn-primary btnNext bg-primary py-3 px-6 rounded-[5px] text-white cursor-pointer uppercase text-sm font-medium">Next</span>
                                    </div>
                                </div>
                            </div>
                            <div id="social" class="tab-content">
                                <div class="px-4 mb-3">
                                    <h3 class="font-semibold text-lg">Paste your social profile url's into the fields below.</h3>
                                    <p>Please make sure to add http:// or https:// at the beginning as shown in the examples.</p>
                                </div>
                                <div class="flex flex-wrap">
                                    <div class="w-full md:w-1/2 px-3 my-3">
                                        <label for="" class="relative block input-populated overflow-hidden">
                                            <input type="text" placeholder="Behance" class="text-sm block border p-5 w-full outline-none duration-200 ease-in-out placeholder:duration-200 placeholder:ease-in-out placeholder:text-primary focus:pt-7 focus:pb-3 focus:placeholder:text-transparent placeholder:text-opacity-40">
                                            <span class="text-secondary text-xs absolute left-5 opacity-0 duration-200 ease-in-out">Behance</span>
                                        </label>
                                    </div>
                                    <div class="w-full md:w-1/2 px-3 my-3">
                                        <label for="" class="relative block input-populated overflow-hidden">
                                            <input type="text" placeholder="Blogger" class="text-sm block border p-5 w-full outline-none duration-200 ease-in-out placeholder:duration-200 placeholder:ease-in-out placeholder:text-primary focus:pt-7 focus:pb-3 focus:placeholder:text-transparent placeholder:text-opacity-40">
                                            <span class="text-secondary text-xs absolute left-5 opacity-0 duration-200 ease-in-out">Blogger</span>
                                        </label>
                                    </div>
                                    <div class="w-full md:w-1/2 px-3 my-3">
                                        <label for="" class="relative block input-populated overflow-hidden">
                                            <input type="text" placeholder="Deliciou" class="text-sm block border p-5 w-full outline-none duration-200 ease-in-out placeholder:duration-200 placeholder:ease-in-out placeholder:text-primary focus:pt-7 focus:pb-3 focus:placeholder:text-transparent placeholder:text-opacity-40">
                                            <span class="text-secondary text-xs absolute left-5 opacity-0 duration-200 ease-in-out">Deliciou</span>
                                        </label>
                                    </div>
                                    <div class="w-full md:w-1/2 px-3 my-3">
                                        <label for="" class="relative block input-populated overflow-hidden">
                                            <input type="text" placeholder="DeviantART" class="text-sm block border p-5 w-full outline-none duration-200 ease-in-out placeholder:duration-200 placeholder:ease-in-out placeholder:text-primary focus:pt-7 focus:pb-3 focus:placeholder:text-transparent placeholder:text-opacity-40">
                                            <span class="text-secondary text-xs absolute left-5 opacity-0 duration-200 ease-in-out">DeviantART</span>
                                        </label>
                                    </div>
                                    <div class="w-full md:w-1/2 px-3 my-3">
                                        <label for="" class="relative block input-populated overflow-hidden">
                                            <input type="text" placeholder="Digg" class="text-sm block border p-5 w-full outline-none duration-200 ease-in-out placeholder:duration-200 placeholder:ease-in-out placeholder:text-primary focus:pt-7 focus:pb-3 focus:placeholder:text-transparent placeholder:text-opacity-40">
                                            <span class="text-secondary text-xs absolute left-5 opacity-0 duration-200 ease-in-out">Digg</span>
                                        </label>
                                    </div>
                                    <div class="w-full md:w-1/2 px-3 my-3">
                                        <label for="" class="relative block input-populated overflow-hidden">
                                            <input type="text" placeholder="Dribbble" class="text-sm block border p-5 w-full outline-none duration-200 ease-in-out placeholder:duration-200 placeholder:ease-in-out placeholder:text-primary focus:pt-7 focus:pb-3 focus:placeholder:text-transparent placeholder:text-opacity-40">
                                            <span class="text-secondary text-xs absolute left-5 opacity-0 duration-200 ease-in-out">Dribbble</span>
                                        </label>
                                    </div>
                                    <div class="w-full md:w-1/2 px-3 my-3">
                                        <label for="" class="relative block input-populated overflow-hidden">
                                            <input type="text" placeholder="Evernote" class="text-sm block border p-5 w-full outline-none duration-200 ease-in-out placeholder:duration-200 placeholder:ease-in-out placeholder:text-primary focus:pt-7 focus:pb-3 focus:placeholder:text-transparent placeholder:text-opacity-40">
                                            <span class="text-secondary text-xs absolute left-5 opacity-0 duration-200 ease-in-out">Evernote</span>
                                        </label>
                                    </div>
                                    <div class="w-full md:w-1/2 px-3 my-3">
                                        <label for="" class="relative block input-populated overflow-hidden">
                                            <input type="text" placeholder="Facebook" class="text-sm block border p-5 w-full outline-none duration-200 ease-in-out placeholder:duration-200 placeholder:ease-in-out placeholder:text-primary focus:pt-7 focus:pb-3 focus:placeholder:text-transparent placeholder:text-opacity-40">
                                            <span class="text-secondary text-xs absolute left-5 opacity-0 duration-200 ease-in-out">Facebook</span>
                                        </label>
                                    </div>
                                    <div class="w-full md:w-1/2 px-3 my-3">
                                        <label for="" class="relative block input-populated overflow-hidden">
                                            <input type="text" placeholder="Flickr" class="text-sm block border p-5 w-full outline-none duration-200 ease-in-out placeholder:duration-200 placeholder:ease-in-out placeholder:text-primary focus:pt-7 focus:pb-3 focus:placeholder:text-transparent placeholder:text-opacity-40">
                                            <span class="text-secondary text-xs absolute left-5 opacity-0 duration-200 ease-in-out">Flickr</span>
                                        </label>
                                    </div>
                                    <div class="w-full md:w-1/2 px-3 my-3">
                                        <label for="" class="relative block input-populated overflow-hidden">
                                            <input type="text" placeholder="Formspring" class="text-sm block border p-5 w-full outline-none duration-200 ease-in-out placeholder:duration-200 placeholder:ease-in-out placeholder:text-primary focus:pt-7 focus:pb-3 focus:placeholder:text-transparent placeholder:text-opacity-40">
                                            <span class="text-secondary text-xs absolute left-5 opacity-0 duration-200 ease-in-out">Formspring</span>
                                        </label>
                                    </div>
                                    <div class="w-full md:w-1/2 px-3 my-3">
                                        <label for="" class="relative block input-populated overflow-hidden">
                                            <input type="text" placeholder="GooglePlus" class="text-sm block border p-5 w-full outline-none duration-200 ease-in-out placeholder:duration-200 placeholder:ease-in-out placeholder:text-primary focus:pt-7 focus:pb-3 focus:placeholder:text-transparent placeholder:text-opacity-40">
                                            <span class="text-secondary text-xs absolute left-5 opacity-0 duration-200 ease-in-out">GooglePlus</span>
                                        </label>
                                    </div>
                                    <div class="w-full md:w-1/2 px-3 my-3">
                                        <label for="" class="relative block input-populated overflow-hidden">
                                            <input type="text" placeholder="Instgram" class="text-sm block border p-5 w-full outline-none duration-200 ease-in-out placeholder:duration-200 placeholder:ease-in-out placeholder:text-primary focus:pt-7 focus:pb-3 focus:placeholder:text-transparent placeholder:text-opacity-40">
                                            <span class="text-secondary text-xs absolute left-5 opacity-0 duration-200 ease-in-out">Instgram</span>
                                        </label>
                                    </div>
                                    <div class="w-full md:w-1/2 px-3 my-3">
                                        <label for="" class="relative block input-populated overflow-hidden">
                                            <input type="text" placeholder="Linked-in" class="text-sm block border p-5 w-full outline-none duration-200 ease-in-out placeholder:duration-200 placeholder:ease-in-out placeholder:text-primary focus:pt-7 focus:pb-3 focus:placeholder:text-transparent placeholder:text-opacity-40">
                                            <span class="text-secondary text-xs absolute left-5 opacity-0 duration-200 ease-in-out">Linked-in</span>
                                        </label>
                                    </div>
                                    <div class="w-full md:w-1/2 px-3 my-3">
                                        <label for="" class="relative block input-populated overflow-hidden">
                                            <input type="text" placeholder="MySpace" class="text-sm block border p-5 w-full outline-none duration-200 ease-in-out placeholder:duration-200 placeholder:ease-in-out placeholder:text-primary focus:pt-7 focus:pb-3 focus:placeholder:text-transparent placeholder:text-opacity-40">
                                            <span class="text-secondary text-xs absolute left-5 opacity-0 duration-200 ease-in-out">MySpace</span>
                                        </label>
                                    </div>
                                    <div class="w-full md:w-1/2 px-3 my-3">
                                        <label for="" class="relative block input-populated overflow-hidden">
                                            <input type="text" placeholder="Picasa" class="text-sm block border p-5 w-full outline-none duration-200 ease-in-out placeholder:duration-200 placeholder:ease-in-out placeholder:text-primary focus:pt-7 focus:pb-3 focus:placeholder:text-transparent placeholder:text-opacity-40">
                                            <span class="text-secondary text-xs absolute left-5 opacity-0 duration-200 ease-in-out">Picasa</span>
                                        </label>
                                    </div>
                                    <div class="w-full md:w-1/2 px-3 my-3">
                                        <label for="" class="relative block input-populated overflow-hidden">
                                            <input type="text" placeholder="Pinterest" class="text-sm block border p-5 w-full outline-none duration-200 ease-in-out placeholder:duration-200 placeholder:ease-in-out placeholder:text-primary focus:pt-7 focus:pb-3 focus:placeholder:text-transparent placeholder:text-opacity-40">
                                            <span class="text-secondary text-xs absolute left-5 opacity-0 duration-200 ease-in-out">Pinterest</span>
                                        </label>
                                    </div>
                                    <div class="w-full md:w-1/2 px-3 my-3">
                                        <label for="" class="relative block input-populated overflow-hidden">
                                            <input type="text" placeholder="Pocket" class="text-sm block border p-5 w-full outline-none duration-200 ease-in-out placeholder:duration-200 placeholder:ease-in-out placeholder:text-primary focus:pt-7 focus:pb-3 focus:placeholder:text-transparent placeholder:text-opacity-40">
                                            <span class="text-secondary text-xs absolute left-5 opacity-0 duration-200 ease-in-out">Pocket</span>
                                        </label>
                                    </div>
                                    <div class="w-full md:w-1/2 px-3 my-3">
                                        <label for="" class="relative block input-populated overflow-hidden">
                                            <input type="text" placeholder="Skype" class="text-sm block border p-5 w-full outline-none duration-200 ease-in-out placeholder:duration-200 placeholder:ease-in-out placeholder:text-primary focus:pt-7 focus:pb-3 focus:placeholder:text-transparent placeholder:text-opacity-40">
                                            <span class="text-secondary text-xs absolute left-5 opacity-0 duration-200 ease-in-out">Skype</span>
                                        </label>
                                    </div>
                                    <div class="w-full md:w-1/2 px-3 my-3">
                                        <label for="" class="relative block input-populated overflow-hidden">
                                            <input type="text" placeholder="SoundCloud" class="text-sm block border p-5 w-full outline-none duration-200 ease-in-out placeholder:duration-200 placeholder:ease-in-out placeholder:text-primary focus:pt-7 focus:pb-3 focus:placeholder:text-transparent placeholder:text-opacity-40">
                                            <span class="text-secondary text-xs absolute left-5 opacity-0 duration-200 ease-in-out">SoundCloud</span>
                                        </label>
                                    </div>
                                    <div class="w-full md:w-1/2 px-3 my-3">
                                        <label for="" class="relative block input-populated overflow-hidden">
                                            <input type="text" placeholder="Tumblr" class="text-sm block border p-5 w-full outline-none duration-200 ease-in-out placeholder:duration-200 placeholder:ease-in-out placeholder:text-primary focus:pt-7 focus:pb-3 focus:placeholder:text-transparent placeholder:text-opacity-40">
                                            <span class="text-secondary text-xs absolute left-5 opacity-0 duration-200 ease-in-out">Tumblr</span>
                                        </label>
                                    </div>
                                    <div class="w-full md:w-1/2 px-3 my-3">
                                        <label for="" class="relative block input-populated overflow-hidden">
                                            <input type="text" placeholder="Twitter" class="text-sm block border p-5 w-full outline-none duration-200 ease-in-out placeholder:duration-200 placeholder:ease-in-out placeholder:text-primary focus:pt-7 focus:pb-3 focus:placeholder:text-transparent placeholder:text-opacity-40">
                                            <span class="text-secondary text-xs absolute left-5 opacity-0 duration-200 ease-in-out">Twitter</span>
                                        </label>
                                    </div>
                                    <div class="w-full md:w-1/2 px-3 my-3">
                                        <label for="" class="relative block input-populated overflow-hidden">
                                            <input type="text" placeholder="Vimeo" class="text-sm block border p-5 w-full outline-none duration-200 ease-in-out placeholder:duration-200 placeholder:ease-in-out placeholder:text-primary focus:pt-7 focus:pb-3 focus:placeholder:text-transparent placeholder:text-opacity-40">
                                            <span class="text-secondary text-xs absolute left-5 opacity-0 duration-200 ease-in-out">Vimeo</span>
                                        </label>
                                    </div>
                                    <div class="w-full md:w-1/2 px-3 my-3">
                                        <label for="" class="relative block input-populated overflow-hidden">
                                            <input type="text" placeholder="Wordpress" class="text-sm block border p-5 w-full outline-none duration-200 ease-in-out placeholder:duration-200 placeholder:ease-in-out placeholder:text-primary focus:pt-7 focus:pb-3 focus:placeholder:text-transparent placeholder:text-opacity-40">
                                            <span class="text-secondary text-xs absolute left-5 opacity-0 duration-200 ease-in-out">Wordpress</span>
                                        </label>
                                    </div>
                                    <div class="w-full md:w-1/2 px-3 my-3">
                                        <label for="" class="relative block input-populated overflow-hidden">
                                            <input type="text" placeholder="Yahoo" class="text-sm block border p-5 w-full outline-none duration-200 ease-in-out placeholder:duration-200 placeholder:ease-in-out placeholder:text-primary focus:pt-7 focus:pb-3 focus:placeholder:text-transparent placeholder:text-opacity-40">
                                            <span class="text-secondary text-xs absolute left-5 opacity-0 duration-200 ease-in-out">Yahoo</span>
                                        </label>
                                    </div>
                                    <div class="w-full md:w-1/2 px-3 my-3">
                                        <label for="" class="relative block input-populated overflow-hidden">
                                            <input type="text" placeholder="YouTube" class="text-sm block border p-5 w-full outline-none duration-200 ease-in-out placeholder:duration-200 placeholder:ease-in-out placeholder:text-primary focus:pt-7 focus:pb-3 focus:placeholder:text-transparent placeholder:text-opacity-40">
                                            <span class="text-secondary text-xs absolute left-5 opacity-0 duration-200 ease-in-out">YouTube</span>
                                        </label>
                                    </div>
                                    <div class="w-full md:w-1/2 px-3 my-3">
                                        <label for="" class="relative block input-populated overflow-hidden">
                                            <input type="text" placeholder="xzc" class="text-sm block border p-5 w-full outline-none duration-200 ease-in-out placeholder:duration-200 placeholder:ease-in-out placeholder:text-primary focus:pt-7 focus:pb-3 focus:placeholder:text-transparent placeholder:text-opacity-40">
                                            <span class="text-secondary text-xs absolute left-5 opacity-0 duration-200 ease-in-out">xzc</span>
                                        </label>
                                    </div>
                                    <div class="flex justify-center space-x-4 w-full py-5">
                                        <div class="tab-pane active text-center">
                                            <span class="btn inline-block btn-primary btnPrevious bg-primary py-3 px-6 rounded-[5px] text-white cursor-pointer uppercase text-sm font-medium">Prev</span>
                                        </div>
                                        <div class="tab-pane active text-center">
                                            <span class="btn inline-block btn-primary btnNext bg-primary py-3 px-6 rounded-[5px] text-white cursor-pointer uppercase text-sm font-medium">Next</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="disclaimer" class="tab-content p-4 disclaimer">
                                <div class="mb-6">
                                    <label for="" class="block mb-2 font-semibold">Show Disclaimer</label>
                                    <div class="block">
                                        <input type="radio" name="Disclaimer" id="yes">
                                        <label for="yes" class="cursor-pointer">Yes</label>
                                    </div>
                                    <div class="block">
                                        <input type="radio" name="Disclaimer" id="no">
                                        <label for="no" class="cursor-pointer">No</label>
                                    </div>
                                </div>
                                <div class="mt-6">
                                    <label for="Disclaimer" class="font-semibold">Disclaimer</label>
                                    <textarea class="w-full border outline-none resize-none mt-2 p-2 text-xs" name="" id="" cols="30" rows="10"></textarea>
                                </div>
                                <p class="text-xs text-secondary pb-4">Disclaimer in Email Signatures are Not Just Annoying. But
                                    Legally Meaningless</p>
                                <div class="flex justify-center space-x-4 w-full py-5">
                                    <div class="tab-pane active text-center">
                                        <span class="btn inline-block btn-primary btnPrevious bg-primary py-3 px-6 rounded-[5px] text-white cursor-pointer uppercase text-sm font-medium">Prev</span>
                                    </div>
                                    <div class="tab-pane active text-center">
                                        <span class="btn inline-block btn-primary btnNext bg-primary py-3 px-6 rounded-[5px] text-white cursor-pointer uppercase text-sm font-medium">Next</span>
                                    </div>
                                </div>
                            </div>
                            <div id="banner" class="tab-content p-4 disclaimer">
                                <div class="mb-6">
                                    <label for="" class="block mb-2 font-semibold">Show Disclaimer</label>
                                    <div class="block">
                                        <input type="radio" name="Banner" id="Yes">
                                        <label for="Yes" class="cursor-pointer">Yes</label>
                                    </div>
                                    <div class="block">
                                        <input type="radio" name="Banner" id="No">
                                        <label for="No" class="cursor-pointer">No</label>
                                    </div>
                                    <div class="my-4">
                                        <label for="" class="relative block input-populated overflow-hidden">
                                            <input type="file" placeholder="Website" class="file:mr-4 file:py-2 file:px-4 file:border-0 file:text-sm file:font-semibold file:bg-secondary file:bg-opacity-10 file:text-secondary hover:file:bg-opacity-30 text-sm block border p-3 w-full outline-none duration-200 ease-in-out">
                                        </label>
                                    </div>
                                    <div class="my-4">
                                        <label for="" class="relative block input-populated overflow-hidden">
                                            <input type="text" placeholder="Banner Link" class="text-sm block border p-5 w-full outline-none duration-200 ease-in-out placeholder:duration-200 placeholder:ease-in-out placeholder:text-primary focus:pt-7 focus:pb-3 focus:placeholder:text-transparent placeholder:text-opacity-40">
                                            <span class="text-secondary text-xs absolute left-5 opacity-0 duration-200 ease-in-out">Banner
                                                Link</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="flex justify-center space-x-4 w-full py-5">
                                    <div class="tab-pane active text-center">
                                        <span class="btn inline-block btn-primary btnPrevious bg-primary py-3 px-6 rounded-[5px] text-white cursor-pointer uppercase text-sm font-medium">Prev</span>
                                    </div>
                                    <div class="tab-pane active text-center">
                                        <span class="btn inline-block btn-primary btnNext bg-primary py-3 px-6 rounded-[5px] text-white cursor-pointer uppercase text-sm font-medium">Next</span>
                                    </div>
                                </div>
                            </div>
                            <div id="style" class="tab-content p-4 disclaimer">
                                <div class="flex flex-wrap">
                                    <div class="w-full px-3 my-3 relative text-sm">
                                        <select class="w-full outline-none border px-3 pb-3 pt-6 appearance-none cursor-pointer" name="" id="">
                                            <option value="">Open Sans</option>
                                            <option value="">Lato</option>
                                            <option value="">Roboto</option>
                                            <option value="">Times New Roman</option>
                                        </select>
                                        <span class="absolute top-1 left-7 text-[10px] text-secondary">Font Style</span>
                                        <img class="absolute top-1/2 w-3 right-8 -translate-y-1/2" src="image/arrow.svg" alt="">
                                    </div>
                                    <div class="w-full md:w-1/2 px-3 my-3">
                                        <label for="" class="relative block input-populated overflow-hidden">
                                            <input type="text" placeholder="Title color" class="text-sm block border p-5 w-full outline-none duration-200 ease-in-out placeholder:duration-200 placeholder:ease-in-out placeholder:text-primary focus:pt-7 focus:pb-3 focus:placeholder:text-transparent placeholder:text-opacity-40">
                                            <span class="text-secondary text-xs absolute left-5 opacity-0 duration-200 ease-in-out">Title
                                                color</span>
                                        </label>
                                    </div>
                                    <div class="w-full md:w-1/2 px-3 my-3">
                                        <label for="" class="relative block input-populated overflow-hidden">
                                            <input type="text" placeholder="Link Color" class="text-sm block border p-5 w-full outline-none duration-200 ease-in-out placeholder:duration-200 placeholder:ease-in-out placeholder:text-primary focus:pt-7 focus:pb-3 focus:placeholder:text-transparent placeholder:text-opacity-40">
                                            <span class="text-secondary text-xs absolute left-5 opacity-0 duration-200 ease-in-out">Link
                                                Color</span>
                                        </label>
                                    </div>
                                    <div class="w-full md:w-1/2 px-3 my-3">
                                        <label for="" class="relative block input-populated overflow-hidden">
                                            <input type="text" placeholder="Text color" class="text-sm block border p-5 w-full outline-none duration-200 ease-in-out placeholder:duration-200 placeholder:ease-in-out placeholder:text-primary focus:pt-7 focus:pb-3 focus:placeholder:text-transparent placeholder:text-opacity-40">
                                            <span class="text-secondary text-xs absolute left-5 opacity-0 duration-200 ease-in-out">Text
                                                color</span>
                                        </label>
                                    </div>
                                    <div class="w-full md:w-1/2 px-3 my-3 relative text-sm">
                                        <select class="w-full outline-none border px-3 pb-3 pt-6 appearance-none cursor-pointer" name="" id="">
                                            <option value="">10</option>
                                            <option value="">12</option>
                                            <option value="">14</option>
                                            <option value="">16</option>
                                            <option value="">18</option>
                                            <option value="">24</option>
                                        </select>
                                        <span class="absolute top-1 left-7 text-[10px] text-secondary">Font Size</span>
                                        <img class="absolute top-1/2 w-3 right-8 -translate-y-1/2" src="image/arrow.svg" alt="">
                                    </div>
                                    <div class="w-full md:w-1/2 px-3 my-3 relative text-sm">
                                        <select class="w-full outline-none border px-3 pb-3 pt-6 appearance-none cursor-pointer" name="" id="">
                                            <option value="">Icon set one</option>
                                            <option value="">Icon set Two</option>
                                            <option value="">Icon set Three</option>
                                            <option value="">Icon set Four</option>
                                        </select>
                                        <span class="absolute top-1 left-7 text-[10px] text-secondary">Social icon</span>
                                        <img class="absolute top-1/2 w-3 right-8 -translate-y-1/2" src="image/arrow.svg" alt="">
                                    </div>
                                    <div class="w-full md:w-1/2 px-3 my-3 relative text-sm">
                                        <select class="w-full outline-none border px-3 pb-3 pt-6 appearance-none cursor-pointer" name="" id="">
                                            <option value="">20px</option>
                                            <option value="">24px</option>
                                            <option value="">30px</option>
                                            <option value="">36px</option>
                                        </select>
                                        <span class="absolute top-1 left-7 text-[10px] text-secondary">Icon Size</span>
                                        <img class="absolute top-1/2 w-3 right-8 -translate-y-1/2" src="image/arrow.svg" alt="">
                                    </div>
                                    <div class="flex justify-center space-x-4 w-full py-5">
                                        <div class="tab-pane active text-center">
                                            <span class="btn inline-block btn-primary btnPrevious bg-primary py-3 px-6 rounded-[5px] text-white cursor-pointer uppercase text-sm font-medium">Prev</span>
                                        </div>
                                        <div class="tab-pane active text-center">
                                            <span class="btn inline-block btn-primary btnNext bg-primary py-3 px-6 rounded-[5px] text-white cursor-pointer uppercase text-sm font-medium">Next</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="apps" class="tab-content p-4 disclaimer">
                                <div class="w-full px-3 my-4">
                                    <label for="" class="relative block input-populated overflow-hidden">
                                        <input type="text" placeholder="App Store Link" class="text-sm block border p-5 w-full outline-none duration-200 ease-in-out placeholder:duration-200 placeholder:ease-in-out placeholder:text-primary focus:pt-7 focus:pb-3 focus:placeholder:text-transparent placeholder:text-opacity-40">
                                        <span class="text-secondary text-xs absolute left-5 opacity-0 duration-200 ease-in-out">App Store
                                            Link</span>
                                    </label>
                                </div>
                                <div class="w-full px-3 my-4">
                                    <label for="" class="relative block input-populated overflow-hidden">
                                        <input type="text" placeholder="App Store Link" class="text-sm block border p-5 w-full outline-none duration-200 ease-in-out placeholder:duration-200 placeholder:ease-in-out placeholder:text-primary focus:pt-7 focus:pb-3 focus:placeholder:text-transparent placeholder:text-opacity-40">
                                        <span class="text-secondary text-xs absolute left-5 opacity-0 duration-200 ease-in-out">Google
                                            Play Store Link</span>
                                    </label>
                                </div>
                                <div class="w-full px-3 my-4">
                                    <label for="" class="relative block input-populated overflow-hidden">
                                        <input type="text" placeholder="App Store Link" class="text-sm block border p-5 w-full outline-none duration-200 ease-in-out placeholder:duration-200 placeholder:ease-in-out placeholder:text-primary focus:pt-7 focus:pb-3 focus:placeholder:text-transparent placeholder:text-opacity-40">
                                        <span class="text-secondary text-xs absolute left-5 opacity-0 duration-200 ease-in-out">Amazon
                                            Link</span>
                                    </label>
                                </div>
                                <div class="flex justify-center space-x-4 w-full py-5">
                                    <div class="tab-pane active text-center">
                                        <span class="btn inline-block btn-primary btnPrevious bg-primary py-3 px-6 rounded-[5px] text-white cursor-pointer uppercase text-sm font-medium">Prev</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
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