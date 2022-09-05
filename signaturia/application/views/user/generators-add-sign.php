<?php if ($this->session->flashdata('success')) { ?>
    <div class="alert bg-success alert-styled-left bootstrap_alert">
        <a class="close" data-dismiss="alert">×</a>
        <strong><?php echo $this->session->flashdata('success') ?></strong>
    </div>
<?php $this->session->set_flashdata('success', false);
} else if ($this->session->flashdata('error')) {
?>
    <div class="alert bg-danger alert-styled-left bootstrap_alert">
        <a class="close" data-dismiss="alert">×</a>
        <strong><?php echo $this->session->flashdata('error') ?></strong>
    </div>
<?php $this->session->set_flashdata('error', false);
}
if (isset($my_logo_validation)) { ?>
    <div class="alert bg-danger alert-styled-left bootstrap_alert">
        <a class="close" data-dismiss="alert">×</a>
        <strong><?php echo $my_logo_validation ?></strong>
    </div>
<?php }
if (isset($signature_banner_validation)) { ?>
    <div class="alert bg-danger alert-styled-left bootstrap_alert">
        <a class="close" data-dismiss="alert">×</a>
        <strong><?php echo $signature_banner_validation ?></strong>
    </div>
<?php } ?>


<div class="p-4 lg:p-6 xl:p-16 lg:ml-72 ">

    <div class="flex -mx-4 flex-wrap justify-between">
        <div class="px-4 w-full md:w-1/2">
            <span class="text-primary min-h-[40px] flex items-center mb-5 font-semibold pl-5 relative before:w-[10px] before:h-[10px] before:bg-secondary before:inline-block before:absolute before:left-0 before:top-1/2 before:-translate-y-1/2 before:rounded-full text-base">Create
                Signature</span>
            <div class="relative w-full h-[calc(100%-60px)]">
                <form id="signature_form" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="hidden_sign_type" id="hidden_sign_type" value="1">
                    <input type="hidden" name="hidden_sign_image" id="hidden_sign_image">
                    <input type="hidden" name="latest_tweet_val" id="latest_tweet_val" value="<?php if (isset($signature)) echo $signature['latest_tweet'];
                                                                                                else echo 0; ?>">
                    <input type="hidden" name="youtube_video_link" id="youtube_video_link" value="<?php if (isset($signature)) echo $signature['youtube_video'];
                                                                                                    else echo ''; ?>">

                    <div id="myTabs" class="w-full bg-white rounded-[5px] relative h-full">
                        <div class="white-box-head">
                            <ul id="tabs-nav" class="flex space-x-5 border-b-2 border-[#F2EDEA] font-medium text-base px-9 overflow-y-hidden overflow-x-auto">
                                <li class="active relative cursor-pointer py-5"><a href="#main" aria-controls="main" role="tab" data-toggle="tab">Main</a></li>
                                <li class="relative cursor-pointer py-5"><a href="#social" aria-controls="social" role="tab" data-toggle="tab">Social</a></li>
                                <li class="relative cursor-pointer py-5"><a href="#disclaimer" aria-controls="disclaimer" role="tab" data-toggle="tab">Disclaimer</a></li>
                                <li class="relative cursor-pointer py-5"><a href="#banner" aria-controls="banner" role="tab" data-toggle="tab">Banner</a></li>
                                <li class="relative cursor-pointer py-5"><a href="#style" aria-controls="style" role="tab" data-toggle="tab">Style</a></li>
                                <li class="relative cursor-pointer py-5"><a href="#apps" aria-controls="app" role="tab" data-toggle="tab">Apps</a></li>
                            </ul>
                        </div>
                        <div id="tabs-content" class="white-box-content p-4">
                            <div id="main" class="tab-content">
                                <?php if (in_array('main', $this->permission)) { ?>
                                    <div class="flex flex-wrap">
                                        <?php if (in_array('style', $this->permission)) { ?>
                                            <div class="px-3 relative my-4 text-sm w-full">
                                                <select class="w-full outline-none border px-3 pb-3 pt-6 appearance-none cursor-pointer" name="signature_theme_id" id="signature_theme_id">
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
                                                <span class="absolute top-1 left-7 text-[10px] text-secondary">Select
                                                    Theme</span>
                                                <img class="absolute top-1/2 w-3 right-8 -translate-y-1/2" src="image/arrow.svg" alt="">
                                            </div>
                                        <?php } ?>
                                        <div class="w-full md:w-1/2 px-3 my-3">
                                            <label for="" class="relative block input-populated overflow-hidden">
                                                <input type="text" id="signature_name" value="<?php if (isset($signature)) echo $signature['name'] ?>" placeholder="Name" class="text-sm block border p-5 w-full outline-none duration-200 ease-in-out placeholder:duration-200 placeholder:ease-in-out placeholder:text-primary focus:pt-7 focus:pb-3 focus:placeholder:text-transparent placeholder:text-opacity-40">
                                                <span class="text-secondary text-xs absolute left-5 opacity-0 duration-200 ease-in-out">Name</span>
                                            </label>
                                        </div>
                                        <div class="w-full md:w-1/2 px-3 my-3">
                                            <label for="" class="relative block input-populated overflow-hidden">
                                                <input type="text" id="signature_jobtitle" value="<?php if (isset($signature)) echo $signature['job_title'] ?>" placeholder="Job Title / Designation" class="text-sm block border p-5 w-full outline-none duration-200 ease-in-out placeholder:duration-200 placeholder:ease-in-out placeholder:text-primary focus:pt-7 focus:pb-3 focus:placeholder:text-transparent placeholder:text-opacity-40">
                                                <span class="text-secondary text-xs absolute left-5 opacity-0 duration-200 ease-in-out">Job
                                                    Title / Designation</span>
                                            </label>
                                        </div>
                                        <div class="w-full md:w-1/2 px-3 my-3">
                                            <label for="" class="relative block input-populated overflow-hidden">
                                                <input type="email" id="signature_email" value="<?php if (isset($signature)) echo $signature['email'] ?>" placeholder="Email" class="text-sm block border p-5 w-full outline-none duration-200 ease-in-out placeholder:duration-200 placeholder:ease-in-out placeholder:text-primary focus:pt-7 focus:pb-3 focus:placeholder:text-transparent placeholder:text-opacity-40">
                                                <span class="text-secondary text-xs absolute left-5 opacity-0 duration-200 ease-in-out">Email</span>
                                            </label>
                                        </div>
                                        <div class="w-full md:w-1/2 px-3 my-3">
                                            <label for="" class="relative block input-populated overflow-hidden">
                                                <input type="number" id="signature_mobilephone" value="<?php if (isset($signature)) echo $signature['mobile_number'] ?>" placeholder="Mobile Number" class="text-sm block border p-5 w-full outline-none duration-200 ease-in-out placeholder:duration-200 placeholder:ease-in-out placeholder:text-primary focus:pt-7 focus:pb-3 focus:placeholder:text-transparent placeholder:text-opacity-40">
                                                <span class="text-secondary text-xs absolute left-5 opacity-0 duration-200 ease-in-out">Mobile
                                                    Number</span>
                                            </label>
                                        </div>
                                        <div class="w-full md:w-1/2 px-3 my-3">
                                            <label for="" class="relative block input-populated overflow-hidden">
                                                <input type="text" id="signature_companyname" value="<?php if (isset($signature)) echo $signature['company_name'] ?>" placeholder="Compnay Name" class="text-sm block border p-5 w-full outline-none duration-200 ease-in-out placeholder:duration-200 placeholder:ease-in-out placeholder:text-primary focus:pt-7 focus:pb-3 focus:placeholder:text-transparent placeholder:text-opacity-40">
                                                <span class="text-secondary text-xs absolute left-5 opacity-0 duration-200 ease-in-out">Compnay
                                                    Name</span>
                                            </label>
                                        </div>
                                        <div class="w-full md:w-1/2 px-3 my-3">
                                            <label for="" class="relative block input-populated overflow-hidden">
                                                <input type="text" id="signature_website" value="<?php if (isset($signature)) echo $signature['website'] ?>" placeholder="Website" class="text-sm block border p-5 w-full outline-none duration-200 ease-in-out placeholder:duration-200 placeholder:ease-in-out placeholder:text-primary focus:pt-7 focus:pb-3 focus:placeholder:text-transparent placeholder:text-opacity-40">
                                                <span class="text-secondary text-xs absolute left-5 opacity-0 duration-200 ease-in-out">Website</span>
                                            </label>
                                        </div>

                                        <div class="w-full px-3 my-3">
                                            <label for="" class="relative block input-populated overflow-hidden">
                                                <input type="file" placeholder="Website" onchange="readURL(this);" class="file:mr-4 file:py-2 file:px-4 file:border-0 file:text-sm file:font-semibold file:bg-secondary file:bg-opacity-10 file:text-secondary hover:file:bg-opacity-30 text-sm block border p-5 w-full outline-none duration-200 ease-in-out">
                                            </label>
                                        </div>
                                        <div class="w-full md:w-1/2 px-3 my-3">
                                            <label for="" class="relative block input-populated overflow-hidden">
                                                <input type="number" placeholder="Phone Number" id="signature_phoneno" value="<?php if (isset($signature)) echo $signature['phoneno'] ?>" class="text-sm block border p-5 w-full outline-none duration-200 ease-in-out placeholder:duration-200 placeholder:ease-in-out placeholder:text-primary focus:pt-7 focus:pb-3 focus:placeholder:text-transparent placeholder:text-opacity-40">
                                                <span class="text-secondary text-xs absolute left-5 opacity-0 duration-200 ease-in-out">Phone
                                                    Number</span>
                                            </label>
                                        </div>
                                        <div class="w-full md:w-1/2 px-3 my-3">
                                            <label for="" class="relative block input-populated overflow-hidden">
                                                <input type="text" placeholder="Fax" id="signature_fax" value="<?php if (isset($signature)) echo $signature['fax'] ?>" class="text-sm block border p-5 w-full outline-none duration-200 ease-in-out placeholder:duration-200 placeholder:ease-in-out placeholder:text-primary focus:pt-7 focus:pb-3 focus:placeholder:text-transparent placeholder:text-opacity-40">
                                                <span class="text-secondary text-xs absolute left-5 opacity-0 duration-200 ease-in-out">Fax</span>
                                            </label>
                                        </div>
                                        <div class="w-full px-3 my-3">
                                            <label for="" class="relative block input-populated overflow-hidden">
                                                <input type="text" placeholder="Address" id="signature_address" value="<?php if (isset($signature)) echo $signature['address'] ?>" class="text-sm block border p-5 w-full outline-none duration-200 ease-in-out placeholder:duration-200 placeholder:ease-in-out placeholder:text-primary focus:pt-7 focus:pb-3 focus:placeholder:text-transparent placeholder:text-opacity-40">
                                                <span class="text-secondary text-xs absolute left-5 opacity-0 duration-200 ease-in-out">Address</span>
                                            </label>
                                        </div>
                                        <div class="w-full px-3 my-3">
                                            <label for="" class="relative block input-populated overflow-hidden">
                                                <input type="text" placeholder="Address line 2" id="signature_address2" value="<?php if (isset($signature)) echo $signature['address_line2'] ?>" class="text-sm block border p-5 w-full outline-none duration-200 ease-in-out placeholder:duration-200 placeholder:ease-in-out placeholder:text-primary focus:pt-7 focus:pb-3 focus:placeholder:text-transparent placeholder:text-opacity-40">
                                                <span class="text-secondary text-xs absolute left-5 opacity-0 duration-200 ease-in-out">Address
                                                    line 2</span>
                                            </label>
                                        </div>
                                        <div class="tab-pane w-full active py-5 text-center">
                                            <span class="btn inline-block btn-primary btnNext bg-primary py-3 px-6 rounded-[5px] text-white cursor-pointer uppercase text-sm font-medium">Next</span>
                                        </div>
                                    </div>
                                <?php } else { ?>
                                    <div class="row">
                                        <div class="col-md-12">
                                            Access is not allowed to your package
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                            <div id="social" class="tab-content">
                                <?php if (in_array('social', $this->permission)) { ?>
                                    <div class="px-4 mb-3">
                                        <h3 class="font-semibold text-lg">Paste your social profile url's into the fields
                                            below.</h3>
                                        <p>Please make sure to add http:// or https:// at the beginning as shown in the
                                            examples.</p>
                                    </div>
                                    <!-- <div class="row">
                                        <?php foreach ($social_icons as $icon) { ?>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="input">
                                                    <input class="input-field social-group-require" type="text" id="signature_social_<?php echo $icon['id'] ?>" name="signature_social_<?php echo $icon['id'] ?>" value="<?php if (isset($signature_socials[$icon['id']])) echo $signature_socials[$icon['id']]['url'] ?>" />
                                                    <label class="input-label input-label-juro" for="signature_social_<?php echo $icon['id'] ?>"><?php echo $icon['name'] ?></label>
                                                </div>
                                            </div>
                                        <?php }
                                        ?>
                                    </div> -->
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
                                <?php } else { ?>
                                    <div class="row">
                                        <div class="col-md-12">Access is not allowed to your package</div>
                                    </div>
                                <?php } ?>
                            </div>
                            <div id="disclaimer" class="tab-content p-4 disclaimer">
                                <?php if (in_array('disclaimer', $this->permission)) { ?>
                                    <div class="mb-6">
                                        <label for="" class="block mb-2 font-semibold">Show Disclaimer</label>
                                        <div class="block">
                                            <input type="radio" name="Disclaimer" id="yes" value="1" <?php
                                                                                                        if (isset($signature)) {
                                                                                                            if ($signature['show_disclaimer'] == 1)
                                                                                                                echo 'checked';
                                                                                                        } else {
                                                                                                            echo 'checked';
                                                                                                        }
                                                                                                        ?>>
                                            <label for="yes" class="cursor-pointer">Yes</label>
                                        </div>
                                        <div class="block">
                                            <input type="radio" name="Disclaimer" id="no" value="0" <?php if (isset($signature) && $signature['show_disclaimer'] == 0) echo 'checked' ?>>
                                            <label for="no" class="cursor-pointer">No</label>
                                        </div>
                                    </div>
                                    <div class="mt-6">
                                        <label for="Disclaimer" class="font-semibold">Disclaimer</label>
                                        <textarea class="w-full border outline-none resize-none mt-2 p-2 text-xs" name="" id="" cols="30" rows="10" <?php if (isset($signature) && $signature['show_disclaimer'] == 1) echo $signature['disclaimer']; ?>></textarea>
                                    </div>
                                    <p class="text-xs text-secondary pb-4">Disclaimer in Email Signatures are Not Just
                                        Annoying. But
                                        Legally Meaningless</p>
                                    <div class="flex justify-center space-x-4 w-full py-5">
                                        <div class="tab-pane active text-center">
                                            <span class="btn inline-block btn-primary btnPrevious bg-primary py-3 px-6 rounded-[5px] text-white cursor-pointer uppercase text-sm font-medium">Prev</span>
                                        </div>
                                        <div class="tab-pane active text-center">
                                            <span class="btn inline-block btn-primary btnNext bg-primary py-3 px-6 rounded-[5px] text-white cursor-pointer uppercase text-sm font-medium">Next</span>
                                        </div>
                                    </div>
                                <?php } else { ?>
                                    <div class="frm-cont">Access is not allowed to your package</div>
                                <?php } ?>
                            </div>
                            <div id="banner" class="tab-content p-4 disclaimer">
                                <?php if (in_array('banner', $this->permission)) { ?>
                                    <div class="mb-6">
                                        <label for="" class="block mb-2 font-semibold">Show Banner</label>
                                        <div class="block">
                                            <input type="radio" name="Banner" id="Yes" value="1" <?php if (isset($signature) && $signature['show_banner'] == 1) echo "checked"; ?>>
                                            <label for="Yes" class="cursor-pointer">Yes</label>
                                        </div>
                                        <div class="block">
                                            <input type="radio" name="Banner" id="No" value="0" <?php if (isset($signature) && $signature['show_banner'] == 0) echo "checked"; ?>>
                                            <label for="No" class="cursor-pointer">No</label>
                                        </div>
                                        <div class="my-4">
                                            <label for="" class="relative block input-populated overflow-hidden">
                                                <input type="file" placeholder="Website" onchange="readBannerURL(this);" class="file:mr-4 file:py-2 file:px-4 file:border-0 file:text-sm file:font-semibold file:bg-secondary file:bg-opacity-10 file:text-secondary hover:file:bg-opacity-30 text-sm block border p-3 w-full outline-none duration-200 ease-in-out">
                                            </label>
                                        </div>
                                        <div class="my-4">
                                            <label for="" class="relative block input-populated overflow-hidden">
                                                <input type="text" placeholder="Banner Link" value="<?php if (isset($signature)) echo $signature['banner_url'] ?>" class="text-sm block border p-5 w-full outline-none duration-200 ease-in-out placeholder:duration-200 placeholder:ease-in-out placeholder:text-primary focus:pt-7 focus:pb-3 focus:placeholder:text-transparent placeholder:text-opacity-40">
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
                                <?php } else { ?>
                                    <div class="frm-cont">Access is not allowed to your package</div>
                                <?php } ?>
                            </div>
                            <div id="style" class="tab-content p-4 disclaimer">
                                <?php if (in_array('style', $this->permission)) { ?>
                                    <div class="flex flex-wrap">
                                        <div class="w-full px-3 my-3 relative text-sm">
                                            <select class="w-full outline-none border px-3 pb-3 pt-6 appearance-none cursor-pointer" name="" id="">
                                                <option value="Helvetica, Arial, sans-serif" <?php if (isset($signature) && @$signature['font_style'] == 'Helvetica, Arial, sans-serif') echo 'selected' ?>>Arial</option>
                                                <option value="'Open Sans', sans-serif" <?php if (isset($signature) && @$signature['font_style'] == "'Open Sans', sans-serif") echo 'selected' ?>>Open Sans</option>
                                                <option value="'Lato', sans-serif" <?php if (isset($signature) && @$signature['font_style'] == "'Lato', sans-serif") echo 'selected' ?>>Lato</option>
                                                <option value="'Roboto', sans-serif" <?php if (isset($signature) && @$signature['font_style'] == "'Roboto', sans-serif") echo 'selected' ?>>Roboto</option>
                                            </select>
                                            <span class="absolute top-1 left-7 text-[10px] text-secondary">Font Style</span>
                                            <img class="absolute top-1/2 w-3 right-8 -translate-y-1/2" src="image/arrow.svg" alt="">
                                        </div>
                                        <div class="w-full md:w-1/2 px-3 my-3">
                                            <label for="" class="relative block input-populated overflow-hidden">
                                                <input type="text" placeholder="Title color" id="signature_text_color" class="text-sm block border p-5 w-full outline-none duration-200 ease-in-out placeholder:duration-200 placeholder:ease-in-out placeholder:text-primary focus:pt-7 focus:pb-3 focus:placeholder:text-transparent placeholder:text-opacity-40" value="<?php
                                                                                                                                                                                                                                                                                                                                                                            if (isset($signature) && @$signature['text_color'] != '')
                                                                                                                                                                                                                                                                                                                                                                                echo $signature['text_color'];
                                                                                                                                                                                                                                                                                                                                                                            else
                                                                                                                                                                                                                                                                                                                                                                                echo '#4fb218';
                                                                                                                                                                                                                                                                                                                                                                            ?>">
                                                <span class="text-secondary text-xs absolute left-5 opacity-0 duration-200 ease-in-out">Title
                                                    color</span>
                                            </label>
                                        </div>
                                        <div class="w-full md:w-1/2 px-3 my-3">
                                            <label for="" class="relative block input-populated overflow-hidden">
                                                <input type="text" placeholder="Link Color" id="signature_link_color" class="text-sm block border p-5 w-full outline-none duration-200 ease-in-out placeholder:duration-200 placeholder:ease-in-out placeholder:text-primary focus:pt-7 focus:pb-3 focus:placeholder:text-transparent placeholder:text-opacity-40" value="<?php
                                                                                                                                                                                                                                                                                                                                                                            if (isset($signature) && @$signature['link_color'] != '')
                                                                                                                                                                                                                                                                                                                                                                                echo $signature['link_color'];
                                                                                                                                                                                                                                                                                                                                                                            else
                                                                                                                                                                                                                                                                                                                                                                                echo '#333';
                                                                                                                                                                                                                                                                                                                                                                            ?>">
                                                <span class="text-secondary text-xs absolute left-5 opacity-0 duration-200 ease-in-out">Link
                                                    Color</span>
                                            </label>
                                        </div>
                                        <div class="w-full md:w-1/2 px-3 my-3">
                                            <label for="" class="relative block input-populated overflow-hidden">
                                                <input type="text" placeholder="Text color" id="signature_p_text_color" class="text-sm block border p-5 w-full outline-none duration-200 ease-in-out placeholder:duration-200 placeholder:ease-in-out placeholder:text-primary focus:pt-7 focus:pb-3 focus:placeholder:text-transparent placeholder:text-opacity-40" value="<?php
                                                                                                                                                                                                                                                                                                                                                                            if (isset($signature) && @$signature['p_text_color'] != '')
                                                                                                                                                                                                                                                                                                                                                                                echo $signature['p_text_color'];
                                                                                                                                                                                                                                                                                                                                                                            else
                                                                                                                                                                                                                                                                                                                                                                                echo '#333';
                                                                                                                                                                                                                                                                                                                                                                            ?>">
                                                <span class="text-secondary text-xs absolute left-5 opacity-0 duration-200 ease-in-out">Text
                                                    color</span>
                                            </label>
                                        </div>
                                        <div class="w-full md:w-1/2 px-3 my-3 relative text-sm">
                                            <select class="w-full outline-none border px-3 pb-3 pt-6 appearance-none cursor-pointer" name="signature_fontsize" id="signature_fontsize">
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
                                            <span class="absolute top-1 left-7 text-[10px] text-secondary">Font Size</span>
                                            <img class="absolute top-1/2 w-3 right-8 -translate-y-1/2" src="image/arrow.svg" alt="">
                                        </div>
                                        <div class="w-full md:w-1/2 px-3 my-3 relative text-sm">
                                            <select class="w-full outline-none border px-3 pb-3 pt-6 appearance-none cursor-pointer" name="signature_social_icon_set_id" id="signature_social_icon_set_id">
                                                <option value="1" <?php if (isset($signature) && @$signature['social_icon_set_id'] == '1') echo 'selected' ?>>Icon set one</option>
                                                <option value="2" <?php if (isset($signature) && @$signature['social_icon_set_id'] == '2') echo 'selected' ?>>Icon set Two</option>
                                                <option value="3" <?php if (isset($signature) && @$signature['social_icon_set_id'] == '3') echo 'selected' ?>>Icon set Three</option>
                                                <option value="4" <?php if (isset($signature) && @$signature['social_icon_set_id'] == '4') echo 'selected' ?>>Icon set Four</option>
                                            </select>
                                            <span class="absolute top-1 left-7 text-[10px] text-secondary">Social
                                                icon</span>
                                            <img class="absolute top-1/2 w-3 right-8 -translate-y-1/2" src="image/arrow.svg" alt="">
                                        </div>
                                        <div class="w-full md:w-1/2 px-3 my-3 relative text-sm">
                                            <select class="w-full outline-none border px-3 pb-3 pt-6 appearance-none cursor-pointer" name="signature_iconsize" id="signature_iconsize">
                                                <option value="20" <?php if (isset($signature) && @$signature['iconsize'] == '20') echo 'selected' ?>>20px</option>
                                                <option value="24" <?php if (isset($signature) && @$signature['iconsize'] == '24') echo 'selected' ?>>24px</option>
                                                <option value="30" <?php if (isset($signature) && @$signature['iconsize'] == '30') echo 'selected' ?>>30px</option>
                                                <option value="36" <?php if (isset($signature) && @$signature['iconsize'] == '36') echo 'selected' ?>>36px</option>
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
                                <?php } else { ?>
                                    <div class="row">
                                        <div class="col-md-12">Access is not allowed to your package</div>
                                    </div>
                                <?php } ?>
                            </div>
                            <div id="apps" class="tab-content p-4 disclaimer">
                                <?php if (in_array('style', $this->permission)) { ?>
                                    <div class="w-full px-3 my-4">
                                        <label for="" class="relative block input-populated overflow-hidden">
                                            <input type="text" placeholder="App Store Link" name="signature_apple_app_store_link" id="signature_apple_app_store_link" value="<?php if (isset($signature)) echo $signature['appstore_link']; ?>" class="text-sm block border p-5 w-full outline-none duration-200 ease-in-out placeholder:duration-200 placeholder:ease-in-out placeholder:text-primary focus:pt-7 focus:pb-3 focus:placeholder:text-transparent placeholder:text-opacity-40">
                                            <span class="text-secondary text-xs absolute left-5 opacity-0 duration-200 ease-in-out">App
                                                Store
                                                Link</span>
                                        </label>
                                    </div>
                                    <div class="w-full px-3 my-4">
                                        <label for="" class="relative block input-populated overflow-hidden">
                                            <input type="text" placeholder="App Store Link" name="signature_google_play_link" id="signature_google_play_link" value="<?php if (isset($signature)) echo $signature['googleplaytore_link']; ?>" class="text-sm block border p-5 w-full outline-none duration-200 ease-in-out placeholder:duration-200 placeholder:ease-in-out placeholder:text-primary focus:pt-7 focus:pb-3 focus:placeholder:text-transparent placeholder:text-opacity-40">
                                            <span class="text-secondary text-xs absolute left-5 opacity-0 duration-200 ease-in-out">Google
                                                Play Store Link</span>
                                        </label>
                                    </div>
                                    <div class="w-full px-3 my-4">
                                        <label for="" class="relative block input-populated overflow-hidden">
                                            <input type="text" placeholder="App Store Link" id="signature_amazon_app_store_link" name="signature_amazon_app_store_link" value="<?php if (isset($signature)) echo $signature['amazon_link']; ?>" class="text-sm block border p-5 w-full outline-none duration-200 ease-in-out placeholder:duration-200 placeholder:ease-in-out placeholder:text-primary focus:pt-7 focus:pb-3 focus:placeholder:text-transparent placeholder:text-opacity-40">
                                            <span class="text-secondary text-xs absolute left-5 opacity-0 duration-200 ease-in-out">Amazon
                                                Link</span>
                                        </label>
                                    </div>
                                    <div class="flex justify-center space-x-4 w-full py-5">
                                        <div class="tab-pane active text-center">
                                            <span class="btn inline-block btn-primary btnPrevious bg-primary py-3 px-6 rounded-[5px] text-white cursor-pointer uppercase text-sm font-medium" onclick="submit_form(1);">Prev</span>
                                        </div>
                                    </div>
                                <?php } else { ?>
                                    <div class="row">
                                        <div class="col-md-12">Access is not allowed to your package</div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-6 col-sm-12">
    <div class="box-wrap">
        <div class="box-title">
            <div class="flex justify-between items-center w-full mb-5 min-h-[40px] mt-4 md:mt-0">
                <button class="inline-block md:hidden bg-primary px-6 py-2 text-white rounded-md uppercase text-sm font-medium back-btn">Back</button>
                <span class="text-primary inline-block font-semibold pl-5 relative before:w-[10px] before:h-[10px] before:bg-secondary before:inline-block before:absolute before:left-0 before:top-1/2 before:-translate-y-1/2 before:rounded-full text-base">Theme
                    Preview</span>
                <a href="javascript:void(0);" class="inline-block bg-primary px-6 py-2 text-white rounded-md uppercase text-sm font-medium" onclick="submit_form();">Next</a>
            </div>
        </div>
        <div class="box-body">
            <div class="preview-wrap" id="signature_preview">
                <?php $this->load->view('signature_preview') ?>
            </div>
        </div>

        <div class="preview bg-white w-full p-10 rounded-[5px] md:h-[calc(100%-60px)]" id="theme-1">
            <div class="default_signature sticky h-min top-3" style="max-width:490px;margin-left: auto;margin-right: auto;">
                <table style="margin-top: 0;margin-left: 0;margin-right: 0;margin-bottom: 10px;">
                    <tbody>
                        <tr>
                            <td colspan="1" valign="top" style="padding-right:15px;">
                                <div style="height:80px;width:80px;margin-bottom:0;border-radius: 99px;overflow: hidden;">
                                    <img style="object-fit: cover;transform: scale(1.5); object-position: -20px 15px;" src="assets/image/Image 1.png" alt="htmlsig.com" border="0" class="sig-logo default inline-block w-full h-full" data-pin-nopin="true">
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
                    <?php foreach ($social_icons as $key => $social_icon) {
                        if ($key == 10) {
                            break;
                        } ?>
                        <a style=" text-decoration:none;display:inline-block;" class="social" href="#"> <img width="20px" style="margin-bottom:2px;margin-right:2px; border:none; display:inline;" height="20px" src="<?php echo base_url() . SOCIAL_ICONS_SET_1 . $social_icon['icon1'] ?>" alt="" /></a>
                    <?php } ?>
                </div>

                <p class="" style="text-align:left;margin-top:15px;margin-bottom:15px;margin-left:0;margin-right:0;">
                    <a href="#">
                        <img src="image/Group 254.png" alt="" border="0" style="width: 100%;" data-pin-nopin="true">
                    </a>
                </p>
                <p class="appstores-container" style="text-align:left;margin-top:15px;margin-bottom:15px;margin-left:0;margin-right:0;display: flex;justify-content: space-between;gap: 5px;">
                    <a class="appstore signature_amazon_app_store_link-target sig-hide" style="text-decoration:none;" href="#">
                        <img style="border:none;" src="assets/image/Mask Group 2.png" class="appstore-icon" alt="Available at Amazon">
                    </a>
                    <a class="appstore signature_google_play_link-target sig-hide" style="text-decoration:none;" href="#">
                        <img style="border:none;" src="assets/image/Mask Group 3.png" class="appstore-icon " alt="Get it on Google Play">
                    </a>
                    <a class="appstore signature_apple_app_store_link-target sig-hide" style="text-decoration:none;" href="#">
                        <img style="border:none;" src="assets/image/Mask Group 4.png" class="appstore-icon " alt="Download on the App Store" data-pin-nopin="true">
                    </a>
                </p>
                <p class="signature_disclaimer-target" style="line-height: 15px;font-weight: 500;font-size: 10px;color: #202C39;margin:0;">A
                    disclaimer is generally any statement intended to specify or delimit the scope of rights and obligations
                    that may be exercised and enforced by parties in a legally recognized relationship. In contrast to other
                    terms for legally operative language, the term disclaimer usually implies situations that involve some
                    level of uncertainty, waiver, or risk.
                </p>
            </div>
        </div>
    </div>
</div>
    </div>
</div>



<script src="Jquery/jquery-3.6.0.min.js"></script>
<script src="assets/js/signature.js"></script>
<script src="assets/js/html2canvas.js"></script>
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
</script>
<script type="text/javascript">
    function submit_form() {
        theme_id = $('#signature_theme_id').val();
        if (theme_id == undefined) {
            theme_id = 1;
        }
        html2canvas($('#theme-' + theme_id), {
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
    $('.preview_btn').click(function() {
        $('.client-wrap').addClass('hidden-xs');
        $('.sig-sec').removeClass('hidden-xs');
    });
    $('.back_btn').click(function() {
        $('.client-wrap').removeClass('hidden-xs');
        $('.sig-sec').addClass('hidden-xs');
    });
</script>
<script>
    // tabs
    // Show the first tab and hide the rest
    $('#tabs-nav li:first-child').addClass('active');
    $('.tab-content').hide();
    $('.tab-content:first').show();

    // Click function
    $('#tabs-nav li').click(function() {
        $('#tabs-nav li').removeClass('active');
        $(this).addClass('active');
        $('.tab-content').hide();

        var activeTab = $(this).find('a').attr('href');
        $(activeTab).fadeIn();
        return false;
    });

    $('.btnNext').click(function() {
        $('#tabs-nav > .active').next('li').find('a').trigger('click');
    });
    $('.btnPrevious').click(function() {
        $('#tabs-nav > .active').prev('li').find('a').trigger('click');
    });

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

    // form
    $($('.input-populated input')).each(function() {
        if ($(this).val() != '') {
            $(this).parent('.input-populated').addClass('active');
        }
    });
    $('.input-populated input').on('keyup', function() {
        var self = $(this),
            label = self.parents('.input-populated');

        if (self.val() != '') {
            label.addClass('active');
        } else {
            label.removeClass('active');
        }
    });
</script>