<link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans|Roboto" rel="stylesheet">
<?php
$logo_style = '';
$hide_bottom_class = 'hide';

if (isset($signature) && $signature['logo'] != '') {
    $sign_logo = base_url() . SIGNATURE_UPLOADS_LOGO . $signature['logo'];
} else {
    $logo_style = 'display: none;';
    $sign_logo = base_url('assets/images/avatar.jpg');
}
if (isset($signature) && $signature['font_style'] != '') {
    $sign_font_style = 'font-family:' . $signature['font_style'] . ';';
} else {
    $sign_font_style = 'font-family:Helvetica, Arial, sans-serif;';
}
if (isset($signature) && $signature['fontsize'] != '') {
    $sign_font_size = $signature['fontsize'];
} else {
    $sign_font_size = '12';
}
if (isset($signature) && $signature['text_color'] != '') {
    $sign_text_color = $signature['text_color'];
} else {
    $sign_text_color = '#4fb218';
}
if (isset($signature) && $signature['p_text_color'] != '') {
    $sign_p_text_color = $signature['p_text_color'];
} else {
    $sign_p_text_color = '#333';
}
if (isset($signature) && $signature['link_color'] != '') {
    $sign_link_color = $signature['link_color'];
} else {
    $sign_link_color = '#333';
}
if (isset($signature) && $signature['iconsize'] != '') {
    $sign_iconsize = $signature['iconsize'];
} else {
    $sign_iconsize = '16';
}
$theme1_style = '';
$theme2_style = 'style="display: none;"';
$theme3_style = 'style="display: none;"';
$theme4_style = 'style="display: none;"';
$theme5_style = 'style="display: none;"';
$theme6_style = 'style="display: none;"';
$theme7_style = 'style="display: none;"';
$theme8_style = 'style="display: none;"';
$theme9_style = 'style="display: none;"';
$theme10_style = 'style="display: none;"';
$theme11_style = 'style="display: none;"';
$theme12_style = 'style="display: none;"';
$theme13_style = 'style="display: none;"';
$theme14_style = 'style="display: none;"';
$theme15_style = 'style="display: none;"';
$social1_style = '';
$social2_style = 'display: none;';
$social3_style = 'display: none;';
$social4_style = 'display: none;';
if (isset($signature)) {
    if ($signature['theme_id'] == 2) {
        $theme1_style = 'style="display: none;"';
        $theme2_style = '';
    } elseif ($signature['theme_id'] == 3) {
        $theme1_style = 'style="display: none;"';
        $theme3_style = '';
    } elseif ($signature['theme_id'] == 4) {
        $theme1_style = 'style="display: none;"';
        $theme4_style = '';
    } elseif ($signature['theme_id'] == 5) {
        $theme1_style = 'style="display: none;"';
        $theme5_style = '';
    } elseif ($signature['theme_id'] == 6) {
        $theme1_style = 'style="display: none;"';
        $theme6_style = '';
    } elseif ($signature['theme_id'] == 7) {
        $theme1_style = 'style="display: none;"';
        $theme7_style = '';
    } elseif ($signature['theme_id'] == 8) {
        $theme1_style = 'style="display: none;"';
        $theme8_style = '';
    } elseif ($signature['theme_id'] == 9) {
        $theme1_style = 'style="display: none;"';
        $theme9_style = '';
    } elseif ($signature['theme_id'] == 10) {
        $theme1_style = 'style="display: none;"';
        $theme10_style = '';
    } elseif ($signature['theme_id'] == 11) {
        $theme1_style = 'style="display: none;"';
        $theme11_style = '';
    } elseif ($signature['theme_id'] == 12) {
        $theme1_style = 'style="display: none;"';
        $theme12_style = '';
    } elseif ($signature['theme_id'] == 13) {
        $theme1_style = 'style="display: none;"';
        $theme13_style = '';
    } elseif ($signature['theme_id'] == 14) {
        $theme1_style = 'style="display: none;"';
        $theme14_style = '';
    } elseif ($signature['theme_id'] == 15) {
        $theme1_style = 'style="display: none;"';
        $theme15_style = '';
    }

    if ($signature['social_icon_set_id'] == 2) {
        $social1_style = 'display: none;';
        $social2_style = '';
        $social3_style = 'display: none;';
        $social4_style = 'display: none;';
    } else if ($signature['social_icon_set_id'] == 3) {
        $social1_style = 'display: none;';
        $social2_style = 'display: none;';
        $social3_style = '';
        $social4_style = 'display: none;';
    } else if ($signature['social_icon_set_id'] == 4) {
        $social1_style = 'display: none;';
        $social2_style = 'display: none;';
        $social3_style = 'display: none;';
        $social4_style = '';
    }
    if ($signature['show_disclaimer'] == 1 || $signature['appstore_link'] != '' || $signature['googleplaytore_link'] != '' || $signature['amazon_link'] != '' || $signature['show_banner'] == 1) {
        $hide_bottom_class = 'show';
    }
}
?>
<?php
if (isset($signature) && $signature['latest_tweet'] == 1) {
    $this->load->view('latest_tweet');
}
?>
<!-- <div class="preview " id="theme-1" <?php echo $theme1_style ?>>
    <?php if (!isset($signature)) { ?>
        <div class="default_signature" style="max-width:600px;margin:20px auto;">
            <table style="margin-top: 0;margin-left: 0;margin-right: 0;margin-bottom: 10px;font-size:<?php echo $sign_font_size ?>px;line-height:<?php echo $sign_font_size + 4 ?>px;" class="change_font">
                <tr>
                    <td min-width="100" valign="top" style="padding-right:15px;">
                        <img src="<?php echo base_url('assets/images/avatar.jpg') ?>" alt="<?php echo site_url() ?>" border="0" class="sig-logo default" style="max-height:100px;width:100px;margin-bottom:0;" data-pin-nopin="true">
                    </td>
                    <td style="padding-left:20px;padding-top:0;border-left:solid 3px #4fb218;" valign="top;" class="change_theme_p">
                        <h1 class="signature_name-target" style="font-size: <?php echo $sign_font_size + 4 ?>px;margin: 0px;text-transform: uppercase;color: #4fb218;font-weight: bold;">John Donga</h1>
                        <span class="signature_jobtitle-target change_font txt" style="color: #333333;padding-bottom: 0;padding-top: 2px;font-weight: 500;margin: 0px;">senior content writer</span>
                        <ul class="change_theme_font" style="margin-top: 10px;margin-left: 0;margin-right: 0;margin-bottom: 0;padding: 0;list-style: none;text-align:left;margin-bottom:10px;">
                            <li style="margin-bottom: 0;margin-right: 10px;margin-left: 0;display:inline-block;color:#333;"><span class="" style="color: #4fb218;">Mobile:</span> <span class="signature_mobilephone-target txt">445-456-7890</span></li>
                            <li style="margin-bottom: 0;margin-right: 10px;margin-left: 0;display:inline-block;color:#333;"><span class="" style="color: #4fb218;">fax:</span> <span class="signature_fax-target txt">921-142-0666</span></li>
                            <li style="margin-bottom: 0;margin-right: 0;margin-left: 0;display:inline-block;color:#333;"><span class="" style="color: #4fb218;">Email:</span> <a href="mailto:john@signaturia.com" class="signature_email-target link" style="color:#333;text-decoration:none;">john@signaturia.com</a></li>
                        </ul>
                        <p class="change_theme_font" style="text-align:left;font-weight: 600;color: #333333;margin-top: 0;margin-left: 0;margin-right: 0;margin-bottom: 0;"><span class="change_theme_font" style="color: #4fb218;display:block;">Signaturia</span><span class="txt">32-black street, winter hour.United Kingdom 08808</span></p>
                        <p class="change_theme_font" style="text-align:left;font-weight: 400;color: #333333;margin-top: 0;margin-left: 0;margin-right: 0;margin-bottom: 0;"><span class="change_theme_font" style="color: #4fb218;">Website:</span> <a href="<?php echo site_url() ?>" style="color:#333;text-decoration:none;" class="link">www.signaturia.com</a></p>
                    </td>
                </tr>
            </table>
            <div class="social-list social_set_1" style="margin: 0;padding: 10px;text-align:left;background:#f5f5f5;border-radius:5px;">
                <?php
                foreach ($social_icons as $key => $social_icon) {
                    if ($key == 10) {
                        break;
                    }
                ?>
                    <a style="text-decoration:none;display:inline-block;" class="social" href="#"> <img width="20px" style="margin-bottom:2px;margin-right:2px; border:none; display:inline;" height="20px" src="<?php echo base_url() . SOCIAL_ICONS_SET_1 . $social_icon['icon1'] ?>" alt="" /></a>
                <?php } ?>
            </div>
            <div class="social-list social_set_2" style="margin: 0;padding: 10px;text-align:left;background:#f5f5f5;border-radius:5px;display: none">
                <?php
                foreach ($social_icons as $key => $social_icon) {
                    if ($key == 10) {
                        break;
                    }
                ?>
                    <a style="text-decoration:none;display:inline-block;" class="social" href="#"> <img width="20px" style="margin-bottom:2px;margin-right:2px; border:none; display:inline;" height="20px" src="<?php echo base_url() . SOCIAL_ICONS_SET_2 . $social_icon['icon2'] ?>" alt="" /></a>
                <?php } ?>
            </div>
            <div class="social-list social_set_3" style="margin: 0;padding: 10px;text-align:left;background:#f5f5f5;border-radius:5px;display: none">
                <?php
                foreach ($social_icons as $key => $social_icon) {
                    if ($key == 10) {
                        break;
                    }
                ?>
                    <a style="text-decoration:none;display:inline-block;" class="social" href="#"> <img width="20px" style="margin-bottom:2px;margin-right:2px; border:none; display:inline;" height="20px" src="<?php echo base_url() . SOCIAL_ICONS_SET_3 . $social_icon['icon3'] ?>" alt="" /></a>
                <?php } ?>
            </div>
            <div class="social-list social_set_4" style="margin: 0;padding: 10px;text-align:left;background:#f5f5f5;border-radius:5px;display: none">
                <?php
                foreach ($social_icons as $key => $social_icon) {
                    if ($key == 10) {
                        break;
                    }
                ?>
                    <a style="text-decoration:none;display:inline-block;" class="social" href="#"> <img width="20px" style="margin-bottom:2px;margin-right:2px; border:none; display:inline;" height="20px" src="<?php echo base_url() . SOCIAL_ICONS_SET_4 . $social_icon['icon4'] ?>" alt="" /></a>
                <?php } ?>
            </div>
            <p class="" style="text-align:left;margin-top:15px;margin-bottom:15px;margin-left:0;margin-right:0;">
                <a href="<?php echo site_url() ?>">
                    <img src="<?php echo base_url('assets/images/banner.png') ?>" alt="" border="0" style="max-width:400px;height:auto;width:100%;" data-pin-nopin="true" />
                </a>
            </p>
            <p class="appstores-container" style="text-align:left;margin-top:15px;margin-bottom:15px;margin-left:0;margin-right:0;">
                <a class="appstore signature_apple_app_store_link-target sig-hide" style="text-decoration:none;" href="#">
                    <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/apple.png') ?>" class="appstore-icon " alt="Download on the App Store" data-pin-nopin="true">
                </a>
                <a class="appstore signature_google_play_link-target sig-hide" style="text-decoration:none;" href="#">
                    <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/google.png') ?>" class="appstore-icon " alt="Get it on Google Play">
                </a>
                <a class="appstore signature_amazon_app_store_link-target sig-hide" style="text-decoration:none;" href="#">
                    <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/amazon.png') ?>" class="appstore-icon" alt="Available at Amazon">
                </a>
            </p>
            <p class="signature_disclaimer-target" style="text-align:left;line-height: 13px;font-weight: 400;font-size: 9px;color: #333333;margin:0;">A disclaimer is generally any statement intended to specify or delimit the scope of rights and obligations that may be exercised and enforced by parties in a legally recognized relationship. In contrast to other terms for legally operative language, the term disclaimer usually implies situations that involve some level of uncertainty, waiver, or risk.</p>
            <p class="latest_tweet"></p>
            <div class="youtube_video"> <?php if (isset($signature) && $signature['youtube_video'] != '') { ?> <iframe width="120" height="90" src="<?php echo $signature['youtube_video'] ?>" frameborder="0" allowfullscreen></iframe> <?php } ?> </div>

        </div>
    <?php } ?>
    <div class="new_signature" style="max-width:600px;margin:20px auto;<?php if (!isset($signature)) echo "display: none;" ?><?php echo $sign_font_style ?>">
        <table style="margin-top: 0;margin-left: 0;margin-right: 0;margin-bottom: 10px;font-size:<?php echo $sign_font_size ?>px;line-height:<?php echo $sign_font_size + 4 ?>px;" class="change_font">
            <tr>
                <td min-width="100" valign="top" style="padding-right:15px;">
                    <img src="<?php echo $sign_logo ?>" alt="<?php echo site_url() ?>" border="0" class="sig-logo default" style="max-height:100px;width:100px;margin-bottom:0;<?php echo $logo_style ?>" data-pin-nopin="true">
                </td>
                <td style="padding-left:20px;padding-top:0;border-left:solid 3px <?php echo $sign_text_color ?>;" valign="top;" class="change_theme_border">
                    <h1 class="signature_name-target change_theme_p" style="font-size: <?php echo $sign_font_size + 4 ?>px;margin: 0px;text-transform: uppercase;color: <?php echo $sign_text_color ?>;font-weight: bold;"><?php if (isset($signature)) echo $signature['name'] ?></h1>
                    <span class="signature_jobtitle-target change_font txt" style="padding-bottom: 0;padding-top: 2px;font-weight: 500;margin: 0px;color:<?php echo $sign_p_text_color ?>;"><?php if (isset($signature)) echo $signature['job_title'] ?></span>
                    <ul class="change_theme_font" style="margin-top: 10px;margin-left: 0;margin-right: 0;margin-bottom: 0;padding: 0;list-style: none;text-align:left;margin-bottom:10px;">
                        <li class="mobile_title" style="margin-bottom: 0;margin-right: 10px;margin-left: 0;<?php
                                                                                                            if (isset($signature) && $signature['mobile_number'] != '')
                                                                                                                echo "display:inline-block;";
                                                                                                            else
                                                                                                                echo "display:none;"
                                                                                                            ?>"><span class="change_theme_p" style="color: <?php echo $sign_text_color ?>;">Mobile:</span> <span class="signature_mobilephone-target txt" style="color:<?php echo $sign_p_text_color ?>;"><?php if (isset($signature)) echo $signature['mobile_number'] ?></span></li>
                        <li class="fax_title" style="margin-bottom: 0;margin-right: 10px;margin-left: 0;<?php
                                                                                                        if (isset($signature) && $signature['fax'] != '')
                                                                                                            echo "display:inline-block;";
                                                                                                        else
                                                                                                            echo "display:none;"
                                                                                                        ?>"><span class="change_theme_p" style="color: <?php echo $sign_text_color ?>;">fax:</span> <span class="signature_fax-target txt" style="color: <?php echo $sign_p_text_color ?>;"><?php if (isset($signature)) echo $signature['fax']; ?></span></li>
                        <li class="email_title" style="margin-bottom: 0;margin-right: 0;margin-left: 0;<?php
                                                                                                        if (isset($signature) && $signature['email'] != '')
                                                                                                            echo "display:inline-block;";
                                                                                                        else
                                                                                                            echo "display:none;"
                                                                                                        ?>"><span class="change_theme_p" style="color: <?php echo $sign_text_color ?>;">Email:</span> <a href="<?php if (isset($signature)) echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=personal&ident=email') ?>" style="color:<?php echo $sign_link_color ?>;text-decoration:none;" class="signature_email-target link"><?php if (isset($signature)) echo $signature['email'] ?></a></li>
                    </ul>
                    <p class="change_theme_font" style="text-align:left;font-weight: 600;margin-top: 0;margin-left: 0;margin-right: 0;margin-bottom: 0;"><span class="signature_companyname-target change_theme_p" style="color: <?php echo $sign_text_color ?>;display:block;"><?php if (isset($signature)) echo $signature['company_name'] ?></span><span class="signature_address-target txt" style="color:<?php echo $sign_p_text_color ?>"><?php if (isset($signature)) echo $signature['address']; ?></span><span class="signature_address2-target txt" style="color:<?php echo $sign_p_text_color ?>;"><?php if (isset($signature)) echo '<br/>' . $signature['address_line2']; ?></span></p>
                    <p class="change_theme_font" style="text-align:left;font-weight: 400;margin-top: 0;margin-left: 0;margin-right: 0;margin-bottom: 0;"><span class="change_theme_p website_title" style="color: <?php echo $sign_text_color ?>;<?php
                                                                                                                                                                                                                                                    if (isset($signature) && $signature['website'] != '')
                                                                                                                                                                                                                                                        echo "";
                                                                                                                                                                                                                                                    else
                                                                                                                                                                                                                                                        echo "display:none;"
                                                                                                                                                                                                                                                    ?>">Website:</span> <a href="<?php if (isset($signature)) echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=personal&ident=website'); ?>" style="color:<?php echo $sign_link_color ?>;text-decoration:none;" class="link signature_website-target"><?php if (isset($signature)) echo $signature['website']; ?></a></p>
                </td>
            </tr>
        </table>
        <div class="social-list social_set_1" style="margin: 0;padding: 10px;text-align:left;background:#f5f5f5;border-radius:5px;<?php echo $social1_style; ?>">
            <?php
            foreach ($social_icons as $key => $social_icon) {
                $style = "display:none;";
                if (isset($signature_socials)) {
                    if (array_key_exists($social_icon['id'], $signature_socials)) {
                        $style = '';
                    }
                }
            ?>

                <a style="<?php echo $style ?> text-decoration:none;" class="social <?php echo "signature_social_" . $social_icon['id'] . "-target" ?> sig-hide" href="<?php echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=social&ident=' . $social_icon['id']) ?>">
                    <img width="<?php echo $sign_iconsize ?>px" style="margin-bottom:2px; border:none; display:inline;" height="<?php echo $sign_iconsize ?>px" data-filename="<?php echo $social_icon['icon1'] ?>" src="<?php echo base_url() . SOCIAL_ICONS_SET_1 . $social_icon['icon1'] ?>" alt="<?php echo $social_icon['name'] ?>">
                </a>
            <?php } ?>
        </div>
        <div class="social-list social_set_2" style="margin: 0;padding: 10px;text-align:left;background:#f5f5f5;border-radius:5px;<?php echo $social2_style; ?>">
            <?php
            foreach ($social_icons as $key => $social_icon) {
                $style = "display:none;";
                if (isset($signature_socials)) {
                    if (array_key_exists($social_icon['id'], $signature_socials)) {
                        $style = '';
                    }
                }
            ?>

                <a style="<?php echo $style ?> text-decoration:none;" class="social <?php echo "signature_social_" . $social_icon['id'] . "-target" ?> sig-hide" href="<?php echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=social&ident=' . $social_icon['id']) ?>">
                    <img width="<?php echo $sign_iconsize ?>px" style="margin-bottom:2px; border:none; display:inline;" height="<?php echo $sign_iconsize ?>px" data-filename="<?php echo $social_icon['icon2'] ?>" src="<?php echo base_url() . SOCIAL_ICONS_SET_2 . $social_icon['icon2'] ?>" alt="<?php echo $social_icon['name'] ?>">
                </a>
            <?php } ?>
        </div>
        <div class="social-list social_set_3" style="margin: 0;padding: 10px;text-align:left;background:#f5f5f5;border-radius:5px;<?php echo $social3_style; ?>">
            <?php
            foreach ($social_icons as $key => $social_icon) {
                $style = "display:none;";
                if (isset($signature_socials)) {
                    if (array_key_exists($social_icon['id'], $signature_socials)) {
                        $style = '';
                    }
                }
            ?>

                <a style="<?php echo $style ?> text-decoration:none;" class="social <?php echo "signature_social_" . $social_icon['id'] . "-target" ?> sig-hide" href="<?php echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=social&ident=' . $social_icon['id']) ?>">
                    <img width="<?php echo $sign_iconsize ?>px" style="margin-bottom:2px; border:none; display:inline;" height="<?php echo $sign_iconsize ?>px" data-filename="<?php echo $social_icon['icon3'] ?>" src="<?php echo base_url() . SOCIAL_ICONS_SET_3 . $social_icon['icon3'] ?>" alt="<?php echo $social_icon['name'] ?>">
                </a>
            <?php } ?>
        </div>
        <div class="social-list social_set_4" style="margin: 0;padding: 10px;text-align:left;background:#f5f5f5;border-radius:5px;<?php echo $social4_style; ?>">
            <?php
            foreach ($social_icons as $key => $social_icon) {
                $style = "display:none;";
                if (isset($signature_socials)) {
                    if (array_key_exists($social_icon['id'], $signature_socials)) {
                        $style = '';
                    }
                }
            ?>
                <a style="<?php echo $style ?> text-decoration:none;" class="social <?php echo "signature_social_" . $social_icon['id'] . "-target" ?> sig-hide" href="<?php echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=social&ident=' . $social_icon['id']) ?>">
                    <img width="<?php echo $sign_iconsize ?>px" style="margin-bottom:2px; border:none; display:inline;" height="<?php echo $sign_iconsize ?>px" data-filename="<?php echo $social_icon['icon4'] ?>" src="<?php echo base_url() . SOCIAL_ICONS_SET_4 . $social_icon['icon4'] ?>" alt="<?php echo $social_icon['name'] ?>">
                </a>
            <?php } ?>
        </div>
        <?php if (isset($signature) && $signature['banner'] != '') { ?>
            <p class="ba-container" style="text-align:left;margin-top:15px;margin-bottom:15px;margin-left:0;margin-right:0;">
                <a href="<?php if (isset($signature)) echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=banner'); ?>" class="signature_banner_url-target">
                    <img src="<?php echo base_url() . SIGNATURE_UPLOADS_BANNER . $signature['banner'] ?>" alt="signaturia.com" border="0" class="sig-ba" data-pin-nopin="true" style="max-width:400px;height:auto;width:100%;" />
                </a>
            </p>
        <?php } else { ?>
            <p class="ba-container" style="display:none;text-align:left;margin-top:15px;margin-bottom:15px;margin-left:0;margin-right:0;">
                <a href="<?php echo site_url('/') ?>" class="signature_banner_url-target">
                    <img src="<?php echo base_url('assets/images/banner.png') ?>" alt="signaturia.com" border="0" class="sig-ba" data-pin-nopin="true" style="max-width:400px;height:auto;width:100%;" />
                </a>
            </p>
        <?php } ?>
        <p class="appstores-container" style="text-align:left;
           margin-top:15px;
           margin-bottom:15px;
           margin-left:0;
           margin-right:0;
           ">
            <?php if (isset($signature) && @$signature['appstore_link'] != '') { ?>
                <a class="appstore signature_apple_app_store_link-target sig-hide" style="text-decoration:none;" href="<?php if (isset($signature)) echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=app&ident=appstore'); ?>">
                    <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/apple.png') ?>" class="appstore-icon " alt="Download on the App Store" data-pin-nopin="true">
                </a>
            <?php } else { ?>
                <a class="appstore signature_apple_app_store_link-target sig-hide" style="text-decoration:none;display: none;" href="#">
                    <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/apple.png') ?>" class="appstore-icon " alt="Download on the App Store" data-pin-nopin="true">
                </a>
            <?php } ?>
            <?php if (isset($signature) && @$signature['googleplaytore_link'] != '') { ?>

                <a class="appstore signature_google_play_link-target sig-hide" style="text-decoration:none;" href="<?php if (isset($signature)) echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=app&ident=googleplaytore'); ?>">
                    <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/google.png') ?>" class="appstore-icon " alt="Get it on Google Play">
                </a>
            <?php } else { ?>

                <a class="appstore signature_google_play_link-target sig-hide" style="text-decoration:none;display: none;" href="#">
                    <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/google.png') ?>" class="appstore-icon " alt="Get it on Google Play">
                </a>
            <?php } ?>
            <?php if (isset($signature) && @$signature['amazon_link'] != '') { ?>

                <a class="appstore signature_amazon_app_store_link-target sig-hide" style="text-decoration:none;" href="<?php if (isset($signature)) echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=app&ident=amazon'); ?>">
                    <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/amazon.png') ?>" class="appstore-icon" alt="Available at Amazon">
                </a>
            <?php } else { ?>

                <a class="appstore signature_amazon_app_store_link-target sig-hide" style="text-decoration:none;display: none;" href="#">
                    <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/amazon.png') ?>" class="appstore-icon" alt="Available at Amazon">
                </a>
            <?php } ?>
        </p>
        <p class="signature_disclaimer-target" style="text-align:left;line-height: 13px;font-weight: 400;font-size: 9px;color: #333333;margin:0;<?php if (isset($signature) && $signature['show_disclaimer'] == 0) echo 'display: none;' ?>"><?php if (isset($signature)) echo $signature['disclaimer'] ?></p>
        <p class="latest_tweet"></p>
        <div class="youtube_video">
            <?php if (isset($signature) && $signature['youtube_video'] != '') { ?>
                <iframe width="120" height="90" src="<?php echo $signature['youtube_video'] ?>" frameborder="0" allowfullscreen></iframe>
            <?php } ?>
        </div>
    </div>
</div>
<div class="preview" id="theme-2" <?php echo $theme2_style ?>>
    <?php if (!isset($signature)) { ?>
        <div class="default_signature" style="max-width:600px;margin:20px auto;">
            <table style="font-size:<?php echo $sign_font_size ?>px;line-height:<?php echo $sign_font_size + 4 ?>px;" class="change_font">
                <tr>
                    <td min-width="70" style="padding-right:15px;"><img src="<?php echo base_url('assets/images/avatar.jpg') ?>" alt="<?php echo site_url('/') ?>" border="0" class="sig-logo default" style="height:70px;border-radius:50%;margin-bottom:0;" data-pin-nopin="true"></td>
                    <td style="padding-left:20px;padding-top:0;border-left:solid 3px #4fb218;" valign="top;">
                        <h1 style="font-size: <?php echo $sign_font_size + 4 ?>px;margin: 0px;text-transform: uppercase;color: #4fb218;font-weight: bold;">John Donga</h1>
                        <span class="txt" style="color: #333333;padding-bottom: 0;padding-top: 2px;font-weight: 500;margin: 0px;">senior content writer</span>
                    </td>
                </tr>
            </table>
            <div style="background: #ededed;width: 100%;margin: 10px 0;height: 4px;"></div>
            <ul style="margin: 0;padding: 0;list-style: none;padding-bottom:0;text-align:left;margin-bottom:15px;font-size:<?php echo $sign_font_size ?>px;line-height:<?php echo $sign_font_size + 4 ?>px;" class="change_font">
                <li style="margin-bottom: 0;margin-right: 10px;margin-left: 0;display:inline-block;color:#333;"><span class="change_theme_p" style="color: #4fb218;">Mobile:</span> <span class="txt">445-456-7890</span></li>
                <li style="margin-bottom: 0;margin-right: 10px;margin-left: 0;display:inline-block;color:#333;"><span class="change_theme_p" style="color: #4fb218;">fax:</span> <span class="txt">921-142-0666</span></li>
                <li style="margin-bottom: 0;margin-right: 0;margin-left: 0;display:inline-block;color:#333;"><span class="change_theme_p" style="color: #4fb218;">Email:</span> <a href="mailto:john@signaturia.com" style="color:#333;text-decoration:none;" class="link">john@signaturia.com</a></li>
            </ul>
            <p style="text-align:left;font-weight: 600;color: #333333;margin:0;font-size:<?php echo $sign_font_size ?>px;line-height:<?php echo $sign_font_size + 4 ?>px;" class="change_font"><span class="change_theme_p" style="color: #4fb218;display:block;">Signaturia</span><span class="txt">32-black street, winter hour.United Kingdom 08808</span></p>
            <p style="text-align:left;font-weight: 400;color: #333333;margin:0;margin-bottom:15px;font-size:<?php echo $sign_font_size ?>px;line-height:<?php echo $sign_font_size + 4 ?>px;" class="change_font"><span class="change_theme_p" style="color: #4fb218;">Website:</span> <a href="<?php echo site_url() ?>" style="color:#333;text-decoration:none;" class="link">www.signaturia.com</a></p>
            <div class="social-list social_set_1" style="margin: 0;padding: 0;padding-bottom:0;text-align:left;">
                <?php
                foreach ($social_icons as $key => $social_icon) {
                    if ($key == 10) {
                        break;
                    }
                ?>
                    <a style="text-decoration:none" class="social signature_twitter-target sig-hide" href="#">
                        <img width="20px" style="margin-bottom:2px;margin-right:2px; border:none; display:inline;" height="20px" data-filename="<?php echo $social_icon['icon1'] ?>" src="<?php echo base_url() . SOCIAL_ICONS_SET_1 . $social_icon['icon1'] ?>" alt="<?php echo $social_icon['name'] ?>">
                    </a>

                <?php } ?>
            </div>
            <div class="social-list social_set_2" style="margin: 0;padding: 0;padding-bottom:0;text-align:left;display: none">
                <?php
                foreach ($social_icons as $key => $social_icon) {
                    if ($key == 10) {
                        break;
                    }
                ?>
                    <a style="text-decoration:none;display:inline-block;" class="social" href="#"> <img width="20px" style="margin-bottom:2px;margin-right:2px; border:none; display:inline;" height="20px" src="<?php echo base_url() . SOCIAL_ICONS_SET_2 . $social_icon['icon2'] ?>" alt="" /></a>
                <?php } ?>
            </div>
            <div class="social-list social_set_3" style="margin: 0;padding: 0;padding-bottom:0;text-align:left;display: none">
                <?php
                foreach ($social_icons as $key => $social_icon) {
                    if ($key == 10) {
                        break;
                    }
                ?>
                    <a style="text-decoration:none;display:inline-block;" class="social" href="#"> <img width="20px" style="margin-bottom:2px;margin-right:2px; border:none; display:inline;" height="20px" src="<?php echo base_url() . SOCIAL_ICONS_SET_3 . $social_icon['icon3'] ?>" alt="" /></a>
                <?php } ?>
            </div>
            <div class="social-list social_set_4" style="margin: 0;padding: 0;padding-bottom:0;text-align:left;display: none">
                <?php
                foreach ($social_icons as $key => $social_icon) {
                    if ($key == 10) {
                        break;
                    }
                ?>
                    <a style="text-decoration:none;display:inline-block;" class="social" href="#"> <img width="20px" style="margin-bottom:2px;margin-right:2px; border:none; display:inline;" height="20px" src="<?php echo base_url() . SOCIAL_ICONS_SET_4 . $social_icon['icon4'] ?>" alt="" /></a>
                <?php } ?>
            </div>
            <div class="hide_bottom_line" style="background: #ededed;width: 100%;margin: 10px 0;height: 4px;"></div>
            <p class="" style="text-align:left;margin-top:15px;margin-bottom:15px;margin-left:0;margin-right:0;"> <a href="<?php echo site_url() ?>"> <img src="<?php echo base_url('assets/images/banner.png') ?>" alt="" border="0" style="max-width:400px;height:auto;width:100%;" data-pin-nopin="true"> </a> </p>
            <p class="appstores-container" style="text-align:left;margin-top:15px;margin-bottom:15px;margin-left:0;margin-right:0;">
                <a class="appstore signature_apple_app_store_link-target sig-hide" style="text-decoration:none;" href="#"> <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/apple.png') ?>" class="appstore-icon " alt="Download on the App Store" data-pin-nopin="true"> </a>
                <a class="appstore signature_google_play_link-target sig-hide" style="text-decoration:none;" href="#"> <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/google.png') ?>" class="appstore-icon " alt="Get it on Google Play"> </a>
                <a class="appstore signature_amazon_app_store_link-target sig-hide" style="text-decoration:none;" href="#"> <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/amazon.png') ?>" class="appstore-icon" alt="Available at Amazon"> </a>
            </p>
            <p class="signature_disclaimer-target" style="text-align:left;line-height: 13px;font-weight: 400;font-size: 9px;color: #333333;margin:0;">A disclaimer is generally any statement intended to specify or delimit the scope of rights and obligations that may be exercised and enforced by parties in a legally recognized relationship. In contrast to other terms for legally operative language, the term disclaimer usually implies situations that involve some level of uncertainty, waiver, or risk.</p>
            <p class="latest_tweet"></p>
            <div class="youtube_video"> <?php if (isset($signature) && $signature['youtube_video'] != '') { ?> <iframe width="120" height="90" src="<?php echo $signature['youtube_video'] ?>" frameborder="0" allowfullscreen></iframe> <?php } ?> </div>

        </div>
    <?php } ?>
    <div class="new_signature" style="max-width:600px;margin:20px auto;<?php if (!isset($signature)) echo "display: none;" ?><?php echo $sign_font_style ?>">
        <table style="font-size:<?php echo $sign_font_size ?>px;line-height:<?php echo $sign_font_size + 4 ?>px;" class="change_font">
            <tr>
                <td min-width="70" style="padding-right:15px;"><img src="<?php echo $sign_logo ?>" alt="<?php echo site_url() ?>" border="0" class="sig-logo default" style="height:70px;border-radius:50%;margin-bottom:0;<?php echo $logo_style ?>" data-pin-nopin="true"></td>
                <td style="padding-left:20px;padding-top:0;border-left:solid 3px <?php echo $sign_text_color ?>;" valign="top;" class="change_theme_border">
                    <h1 style="font-size: <?php echo $sign_font_size + 4 ?>px;margin: 0px;text-transform: uppercase;color: <?php echo $sign_text_color ?>;font-weight: bold;" class='signature_name-target change_theme_p'><?php if (isset($signature)) echo $signature['name'] ?></h1>
                    <span class="signature_jobtitle-target change_font txt" style="padding-bottom: 0;padding-top: 2px;font-weight: 500;margin: 0px;color:<?php echo $sign_p_text_color ?>;"><?php if (isset($signature)) echo $signature['job_title'] ?></span>
                </td>
            </tr>
        </table>
        <div class="" style="background: #ededed;width: 100%;margin: 10px 0;height: 4px;"></div>
        <ul class="change_font" style="margin: 0;padding: 0;list-style: none;padding-bottom:0;text-align:left;margin-bottom:15px;font-size:<?php echo $sign_font_size ?>px;line-height:<?php echo $sign_font_size + 4 ?>px;">
            <li class="mobile_title" style="margin-bottom: 0;margin-right: 10px;margin-left: 0;<?php
                                                                                                if (isset($signature) && $signature['mobile_number'] != '')
                                                                                                    echo "display:inline-block;";
                                                                                                else
                                                                                                    echo "display:none;"
                                                                                                ?>"><span class="change_theme_p" style="color: <?php echo $sign_text_color ?>;">Mobile:</span> <span class='signature_mobilephone-target txt' style="color:<?php echo $sign_p_text_color ?>;"><?php if (isset($signature)) echo $signature['mobile_number'] ?></span></li>
            <li class="fax_title" style="margin-bottom: 0;margin-right: 10px;margin-left: 0;<?php
                                                                                            if (isset($signature) && $signature['fax'] != '')
                                                                                                echo "display:inline-block;";
                                                                                            else
                                                                                                echo "display:none;"
                                                                                            ?>"><span class="change_theme_p" style="color: <?php echo $sign_text_color ?>;">fax:</span> <span class="signature_fax-target txt" style="color:<?php echo $sign_p_text_color ?>;"><?php if (isset($signature)) echo $signature['fax']; ?></span></li>
            <li class="email_title" style="margin-bottom: 0;margin-right: 0;margin-left: 0;<?php
                                                                                            if (isset($signature) && $signature['email'] != '')
                                                                                                echo "display:inline-block;";
                                                                                            else
                                                                                                echo "display:none;";
                                                                                            ?>"><span class="change_theme_p" style="color: <?php echo $sign_text_color ?>;">Email:</span> <a href="<?php if (isset($signature)) echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=personal&ident=email'); ?>" style="color:<?php echo $sign_link_color ?>;text-decoration:none;" class="signature_email-target link"><?php if (isset($signature)) echo $signature['email'] ?></a></li>
        </ul>
        <p class="change_theme_font change_font" style="text-align:left;font-weight: 600;margin:0;font-size:<?php echo $sign_font_size ?>px;line-height:<?php echo $sign_font_size + 4 ?>px;"><span class="signature_companyname-target change_theme_p" style="color: <?php echo $sign_text_color ?>;display:block;"><?php if (isset($signature)) echo $signature['company_name'] ?></span><span class="signature_address-target txt" style="color:<?php echo $sign_p_text_color ?>;"><?php if (isset($signature)) echo $signature['address']; ?></span><span class="signature_address2-target txt" style="color:<?php echo $sign_p_text_color ?>;"><?php if (isset($signature)) echo '<br/>' . $signature['address_line2']; ?></span></p>
        <p class="change_theme_font change_font" style="text-align:left;font-weight: 400;margin:0;margin-bottom:15px;font-size:<?php echo $sign_font_size ?>px;line-height:<?php echo $sign_font_size + 4 ?>px;"><span class="change_theme_p website_title" style="color: <?php echo $sign_text_color ?>;<?php
                                                                                                                                                                                                                                                                                                            if (isset($signature) && $signature['website'] != '')
                                                                                                                                                                                                                                                                                                                echo "";
                                                                                                                                                                                                                                                                                                            else
                                                                                                                                                                                                                                                                                                                echo "display:none;";
                                                                                                                                                                                                                                                                                                            ?>">Website:</span> <a href="<?php if (isset($signature)) echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=personal&ident=website'); ?>" style="color:<?php echo $sign_link_color ?>;text-decoration:none;" class="signature_website-target link"><?php if (isset($signature)) echo $signature['website']; ?></a></p>
        <div class="" style="margin: 0;padding: 0;padding-bottom:0;text-align:left;">
            <p class="social-list social_set_1" style="<?php echo $social1_style; ?>">
                <?php
                foreach ($social_icons as $key => $social_icon) {
                    $style = "display:none;";
                    if (isset($signature_socials)) {
                        if (array_key_exists($social_icon['id'], @$signature_socials)) {
                            $style = '';
                        }
                    }
                ?>
                    <a style="<?php echo $style ?> text-decoration:none; padding-left: 2px" class="social <?php echo "signature_social_" . $social_icon['id'] . "-target" ?> sig-hide" href="<?php echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=social&ident=' . $social_icon['id']) ?>">
                        <img width="<?php echo $sign_iconsize ?>px" style="margin-bottom:2px;margin-right:2px; border:none; display:inline;" height="<?php echo $sign_iconsize ?>px" data-filename="<?php echo $social_icon['icon1'] ?>" src="<?php echo base_url() . SOCIAL_ICONS_SET_1 . $social_icon['icon1'] ?>" alt="<?php echo $social_icon['name'] ?>">
                    </a>
                <?php } ?>
            </p>
            <p class="social-list social_set_2" style="font-size:0; line-height:0;<?php echo $social2_style; ?>">
                <?php
                foreach ($social_icons as $key => $social_icon) {
                    $style = "display:none;";
                    if (isset($signature_socials)) {
                        if (array_key_exists($social_icon['id'], @$signature_socials)) {
                            $style = '';
                        }
                    }
                ?>

                    <a style="<?php echo $style ?> text-decoration:none; padding-left: 2px" class="social <?php echo "signature_social_" . $social_icon['id'] . "-target" ?> sig-hide" href="<?php echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=social&ident=' . $social_icon['id']) ?>">
                        <img width="<?php echo $sign_iconsize ?>px" style="margin-bottom:2px;margin-right:2px; border:none; display:inline;" height="<?php echo $sign_iconsize ?>px" data-filename="<?php echo $social_icon['icon2'] ?>" src="<?php echo base_url() . SOCIAL_ICONS_SET_2 . $social_icon['icon2'] ?>" alt="<?php echo $social_icon['name'] ?>">
                    </a>
                <?php } ?>
            </p>
            <p class="social-list social_set_3" style="font-size:0; line-height:0;<?php echo $social3_style; ?>">
                <?php
                foreach ($social_icons as $key => $social_icon) {
                    $style = "display:none;";
                    if (isset($signature_socials)) {
                        if (array_key_exists($social_icon['id'], @$signature_socials)) {
                            $style = '';
                        }
                    }
                ?>

                    <a style="<?php echo $style ?> text-decoration:none; padding-left: 2px" class="social <?php echo "signature_social_" . $social_icon['id'] . "-target" ?> sig-hide" href="<?php echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=social&ident=' . $social_icon['id']) ?>">
                        <img width="<?php echo $sign_iconsize ?>px" style="margin-bottom:2px;margin-right:2px; border:none; display:inline;" height="<?php echo $sign_iconsize ?>px" data-filename="<?php echo $social_icon['icon3'] ?>" src="<?php echo base_url() . SOCIAL_ICONS_SET_3 . $social_icon['icon3'] ?>" alt="<?php echo $social_icon['name'] ?>">
                    </a>
                <?php } ?>
            </p>
            <p class="social-list social_set_4" style="font-size:0; line-height:0;<?php echo $social4_style; ?>">
                <?php
                foreach ($social_icons as $key => $social_icon) {
                    $style = "display:none;";
                    if (isset($signature_socials)) {
                        if (array_key_exists($social_icon['id'], @$signature_socials)) {
                            $style = '';
                        }
                    }
                ?>

                    <a style="<?php echo $style ?> text-decoration:none; padding-left: 2px" class="social <?php echo "signature_social_" . $social_icon['id'] . "-target" ?> sig-hide" href="<?php echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=social&ident=' . $social_icon['id']) ?>">
                        <img width="<?php echo $sign_iconsize ?>px" style="margin-bottom:2px;margin-right:2px; border:none; display:inline;" height="<?php echo $sign_iconsize ?>px" data-filename="<?php echo $social_icon['icon4'] ?>" src="<?php echo base_url() . SOCIAL_ICONS_SET_4 . $social_icon['icon4'] ?>" alt="<?php echo $social_icon['name'] ?>">
                    </a>
                <?php } ?>
            </p>
            <div class="hide_bottom_line <?php echo $hide_bottom_class ?>" style="background: #ededed;width: 100%;margin: 10px 0;height: 4px;"></div>
        </div>
        <?php if (isset($signature) && $signature['banner'] != '') { ?>
            <p class="ba-container" style="text-align:left;margin-top:15px;margin-bottom:15px;margin-left:0;margin-right:0;">
                <a href="<?php if (isset($signature)) echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=banner'); ?>" class="signature_banner_url-target">
                    <img src="<?php echo base_url() . SIGNATURE_UPLOADS_BANNER . $signature['banner'] ?>" alt="signaturia.com" border="0" class="sig-ba" data-pin-nopin="true" style="max-width:400px;height:auto;width:100%;">
                </a>
            </p>
        <?php } else { ?>
            <p class="ba-container" style="text-align:left;margin-top:15px;margin-bottom:15px;margin-left:0;margin-right:0;display:none">
                <a href="<?php echo site_url('/') ?>" class="signature_banner_url-target">
                    <img src="<?php echo base_url('assets/images/banner.png') ?>" alt="signaturia.com" border="0" class="sig-ba" data-pin-nopin="true" style="max-width:400px;height:auto;width:100%;">
                </a>
            </p>
        <?php } ?>

        <p class="appstores-container" style="text-align:left;margin-top:15px;margin-bottom:15px;margin-left:0;margin-right:0;">
            <?php if (isset($signature) && @$signature['appstore_link'] != '') { ?>
                <a class="appstore signature_apple_app_store_link-target sig-hide" style="text-decoration:none;" href="<?php if (isset($signature)) echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=app&ident=appstore'); ?>">
                    <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/apple.png') ?>" class="appstore-icon " alt="Download on the App Store" data-pin-nopin="true">
                </a>
            <?php } else { ?>
                <a class="appstore signature_apple_app_store_link-target sig-hide" style="text-decoration:none;display: none;" href="#">
                    <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/apple.png') ?>" class="appstore-icon " alt="Download on the App Store" data-pin-nopin="true">
                </a>
            <?php } ?>
            <?php if (isset($signature) && @$signature['googleplaytore_link'] != '') { ?>
                <a class="appstore signature_google_play_link-target sig-hide" style="text-decoration:none;" href="<?php if (isset($signature)) echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=app&ident=googleplaytore'); ?>">
                    <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/google.png') ?>" class="appstore-icon " alt="Get it on Google Play">
                </a>
            <?php } else { ?>
                <a class="appstore signature_google_play_link-target sig-hide" style="text-decoration:none;display: none;" href="#">
                    <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/google.png') ?>" class="appstore-icon " alt="Get it on Google Play">
                </a>
            <?php } ?>
            <?php if (isset($signature) && @$signature['amazon_link'] != '') { ?>
                <a class="appstore signature_amazon_app_store_link-target sig-hide" style="text-decoration:none;" href="<?php if (isset($signature)) echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=app&ident=amazon'); ?>">
                    <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/amazon.png') ?>" class="appstore-icon" alt="Available at Amazon">
                </a>
            <?php } else { ?>
                <a class="appstore signature_amazon_app_store_link-target sig-hide" style="text-decoration:none;display: none;" href="#">
                    <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/amazon.png') ?>" class="appstore-icon" alt="Available at Amazon">
                </a>
            <?php } ?>

        <p class="signature_disclaimer-target" style="text-align:left;line-height: 13px;font-weight: 400;font-size: 9px;color: #333333;margin:0;<?php if (isset($signature) && $signature['show_disclaimer'] == 0) echo 'display: none;' ?>"><?php if (isset($signature)) echo $signature['disclaimer'] ?></p>
        <p class="latest_tweet"></p>
        <div class="youtube_video"> <?php if (isset($signature) && $signature['youtube_video'] != '') { ?> <iframe width="120" height="90" src="<?php echo $signature['youtube_video'] ?>" frameborder="0" allowfullscreen></iframe> <?php } ?> </div>

    </div>
</div>
<div class="preview" id="theme-3" <?php echo $theme3_style ?>>
    <?php if (!isset($signature)) { ?>
        <div class="default_signature" style="max-width:600px;margin:20px auto;">
            <div style="text-align: center;display: block;width: 100%;font-size:<?php echo $sign_font_size ?>px;line-height:<?php echo $sign_font_size + 4 ?>px;" class="change_font">
                <img src="<?php echo base_url('assets/images/avatar.jpg') ?>" alt="<?php echo site_url() ?>" border="0" class="sig-logo default" style="height:70px;border-radius:50%;margin-bottom:15px;" data-pin-nopin="true">
                <h1 style="font-size: <?php echo $sign_font_size + 4 ?>px;margin: 0px;text-transform: uppercase;color: #4fb218;font-weight: bold;">John Donga</h1>
                <span class="txt" style="color: #333333;padding-bottom: 0;padding-top: 2px;font-weight: 500;margin: 0px;">senior content writer</span>
                <div class="" style="background: #ededed;width: 200px;margin: 10px auto;height: 4px;"></div>
            </div>
            <ul style="margin: 0;padding: 0;list-style: none;padding-bottom:0;text-align:center;margin-bottom:15px;font-size:<?php echo $sign_font_size ?>px;line-height:<?php echo $sign_font_size + 4 ?>px;" class="change_font">
                <li style="margin-bottom: 0;margin-right: 5px;margin-left: 0;display:inline-block;color:#333;"><span class="" style="color: #4fb218;">Mobile:</span> <span class="txt">445-456-7890</span></li>
                <li style="margin-bottom: 0;margin-right: 5px;margin-left: 5px;display:inline-block;color:#333;"><span class="" style="color: #4fb218;">fax:</span> <span class="txt">921-142-0666</span></li>
                <li style="margin-bottom: 0;margin-right: 0;margin-left: 5px;display:inline-block;color:#333;"><span class="" style="color: #4fb218;">Email:</span> <a href="mailto:john@signaturia.com" style="color:#333;text-decoration:none;">john@signaturia.com</a></li>
            </ul>
            <p style="text-align:center;line-height: 20px;font-weight: 600;color: #333333;margin:0;font-size:<?php echo $sign_font_size ?>px;line-height:<?php echo $sign_font_size + 4 ?>px;" class="change_font"><span class="" style="color: #4fb218;display:block;">Signaturia</span><span class="txt">32-black street, winter hour.United Kingdom 08808</span></p>
            <p style="text-align:center;line-height: 20px;font-weight: 400;color: #333333;margin:0;margin-bottom:15px;font-size:<?php echo $sign_font_size ?>px;line-height:<?php echo $sign_font_size + 4 ?>px;" class="change_font"><span class="website_title change_theme_p" style="color: #4fb218;">Website:</span> <a href="<?php echo site_url() ?>" style="color:#333;text-decoration:none;" class="link">www.signaturia.com</a></p>
            <div class="social-list social_set_1" style="margin: 0;padding: 0;padding-bottom:0;text-align:center;">
                <?php
                foreach ($social_icons as $key => $social_icon) {
                    if ($key == 10) {
                        break;
                    }
                ?>
                    <a style="text-decoration:none;display:inline-block;" class="social signature_twitter-target sig-hide" href="#">
                        <img width="20px" style="margin-bottom:2px;margin-right:2px; border:none; display:inline;" height="20px" data-filename="<?php echo $social_icon['icon1'] ?>" src="<?php echo base_url() . SOCIAL_ICONS_SET_1 . $social_icon['icon1'] ?>" alt="<?php echo $social_icon['name'] ?>">
                    </a>
                <?php } ?>
            </div>
            <div class="social-list social_set_2" style="margin: 0;padding: 0;padding-bottom:0;text-align:center;display: none">
                <?php
                foreach ($social_icons as $key => $social_icon) {
                    if ($key == 10) {
                        break;
                    }
                ?>
                    <a style="text-decoration:none;display:inline-block;" class="social" href="#"> <img width="20px" style="margin-bottom:2px;margin-right:2px; border:none; display:inline;" height="20px" src="<?php echo base_url() . SOCIAL_ICONS_SET_2 . $social_icon['icon2'] ?>" alt="" /></a>
                <?php } ?>
            </div>
            <div class="social-list social_set_3" style="margin: 0;padding: 0;padding-bottom:0;text-align:center;display: none">
                <?php
                foreach ($social_icons as $key => $social_icon) {
                    if ($key == 10) {
                        break;
                    }
                ?>
                    <a style="text-decoration:none;display:inline-block;" class="social" href="#"> <img width="20px" style="margin-bottom:2px;margin-right:2px; border:none; display:inline;" height="20px" src="<?php echo base_url() . SOCIAL_ICONS_SET_3 . $social_icon['icon3'] ?>" alt="" /></a>
                <?php } ?>
            </div>
            <div class="social-list social_set_4" style="margin: 0;padding: 0;padding-bottom:0;text-align:center;display: none">
                <?php
                foreach ($social_icons as $key => $social_icon) {
                    if ($key == 10) {
                        break;
                    }
                ?>
                    <a style="text-decoration:none;display:inline-block;" class="social" href="#"> <img width="20px" style="margin-bottom:2px;margin-right:2px; border:none; display:inline;" height="20px" src="<?php echo base_url() . SOCIAL_ICONS_SET_4 . $social_icon['icon4'] ?>" alt="" /></a>
                <?php } ?>
            </div>
            <div class="hide_bottom_line" style="background: #ededed;width: 200px;margin: 10px auto;height: 4px;"></div>

            <p class="ba-container" style="text-align:center;margin-top:15px;margin-bottom:15px;margin-left:0;margin-right:0;"> <a href="<?php echo site_url() ?>"> <img src="<?php echo base_url('assets/images/banner.png') ?>" alt="" border="0" style="max-width:400px;height:auto;width:100%;" data-pin-nopin="true"> </a> </p>
            <p class="appstores-container" style="text-align:center;margin-top:15px;margin-bottom:15px;margin-left:0;margin-right:0;">
                <a class="appstore signature_apple_app_store_link-target sig-hide" style="text-decoration:none;" href="#">
                    <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/apple.png') ?>" class="appstore-icon " alt="Download on the App Store" data-pin-nopin="true"> </a> <a class="appstore signature_google_play_link-target sig-hide" style="text-decoration:none;" href="#">
                    <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/google.png') ?>" class="appstore-icon " alt="Get it on Google Play"> </a> <a class="appstore signature_amazon_app_store_link-target sig-hide" style="text-decoration:none;" href="#"> <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/amazon.png') ?>" class="appstore-icon" alt="Available at Amazon"> </a>
            </p>
            <p class="signature_disclaimer-target" style="text-align:center;line-height: 13px;font-weight: 400;font-size: 9px;color: #333333;margin:0;">A disclaimer is generally any statement intended to specify or delimit the scope of rights and obligations that may be exercised and enforced by parties in a legally recognized relationship. In contrast to other terms for legally operative language, the term disclaimer usually implies situations that involve some level of uncertainty, waiver, or risk.</p>
            <p class="latest_tweet"></p>
            <div class="youtube_video"> <?php if (isset($signature) && $signature['youtube_video'] != '') { ?> <iframe width="120" height="90" src="<?php echo $signature['youtube_video'] ?>" frameborder="0" allowfullscreen></iframe> <?php } ?> </div>

        </div>
    <?php } ?>

    <div class="new_signature" style="max-width:600px;margin:20px auto;<?php if (!isset($signature)) echo "display: none;" ?><?php echo $sign_font_style ?>">
        <div class="change_font" style="text-align: center;display: block;width: 100%;font-size:<?php echo $sign_font_size ?>px;line-height:<?php echo $sign_font_size + 4 ?>px;">
            <img src="<?php echo $sign_logo ?>" alt="<?php echo site_url() ?>" border="0" class="sig-logo default" style="height:70px;border-radius:50%;margin-bottom:15px;<?php echo $logo_style ?>" data-pin-nopin="true">
            <h1 style="font-size: <?php echo $sign_font_size + 4 ?>px;margin: 0px;text-transform: uppercase;color: <?php echo $sign_text_color ?>;font-weight: bold;" class="signature_name-target change_theme_p"><?php if (isset($signature)) echo $signature['name']; ?></h1>
            <span class="signature_jobtitle-target change_font txt" style="color: <?php echo $sign_p_text_color ?>;padding-bottom: 0;padding-top: 2px;font-weight: 500;margin: 0px;"><?php if (isset($signature)) echo $signature['job_title'] ?></span>
            <div class="" style="background: #ededed;width: 200px;margin: 10px auto;height: 4px;"></div>
        </div>
        <ul class="change_font" style="margin: 0;padding: 0;list-style: none;padding-bottom:0;text-align:center;margin-bottom:15px;font-size:<?php echo $sign_font_size ?>px;line-height:<?php echo $sign_font_size + 4 ?>px;">
            <li class="mobile_title" style="margin-bottom: 0;margin-right: 5px;margin-left: 0;<?php
                                                                                                if (isset($signature) && $signature['mobile_number'] != '')
                                                                                                    echo "display:inline-block;";
                                                                                                else
                                                                                                    echo "display:none;";
                                                                                                ?>"><span class="change_theme_p" style="color: <?php echo $sign_text_color ?>;">Mobile:</span> <span class="signature_mobilephone-target txt" style="color:<?php echo $sign_p_text_color ?>;"><?php if (isset($signature)) echo $signature['mobile_number'] ?></span></li>
            <li class="fax_title" style="margin-bottom: 0;margin-right: 5px;margin-left: 5px;<?php
                                                                                                if (isset($signature) && $signature['fax'] != '')
                                                                                                    echo "display:inline-block;";
                                                                                                else
                                                                                                    echo "display:none;";
                                                                                                ?>"><span class="change_theme_p" style="color: <?php echo $sign_text_color ?>;">fax:</span> <span class="signature_fax-target txt" style="color:<?php echo $sign_p_text_color ?>;"><?php if (isset($signature)) echo $signature['fax']; ?></span></li>
            <li class="email_title" style="margin-bottom: 0;margin-right: 0;margin-left: 5px;<?php
                                                                                                if (isset($signature) && $signature['email'] != '')
                                                                                                    echo "display:inline-block;";
                                                                                                else
                                                                                                    echo "display:none;";
                                                                                                ?>"><span class="change_theme_p" style="color: <?php echo $sign_text_color ?>;">Email:</span> <a href="<?php if (isset($signature)) echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=personal&ident=email'); ?>" style="color:<?php echo $sign_link_color ?>;text-decoration:none;" class="signature_email-target link"><?php if (isset($signature)) echo $signature['email'] ?></a></li>
        </ul>
        <p class="change_font" style="text-align:center;line-height: 20px;font-weight: 600;margin:0;font-size:<?php echo $sign_font_size ?>px;line-height:<?php echo $sign_font_size + 4 ?>px;"><span class="signature_companyname-target change_theme_p" style="color: <?php echo $sign_text_color ?>;display:block;"><?php if (isset($signature)) echo $signature['company_name'] ?></span><span class="signature_address-target txt" style="color:<?php echo $sign_p_text_color ?>;"><?php if (isset($signature)) echo $signature['address']; ?></span><span class="signature_address2-target txt" style="color:<?php echo $sign_p_text_color ?>;"><?php if (isset($signature)) echo '<br/>' . $signature['address_line2']; ?></span></p>
        <p class="change_font" style="text-align:center;line-height: 20px;font-weight: 400;margin:0;margin-bottom:15px;font-size:<?php echo $sign_font_size ?>px;line-height:<?php echo $sign_font_size + 4 ?>px;"><span class="change_theme_p website_title" style="color: <?php echo $sign_text_color ?>;<?php
                                                                                                                                                                                                                                                                                                            if (isset($signature) && $signature['website'] != '')
                                                                                                                                                                                                                                                                                                                echo "";
                                                                                                                                                                                                                                                                                                            else
                                                                                                                                                                                                                                                                                                                echo "display:none;";
                                                                                                                                                                                                                                                                                                            ?>">Website:</span> <a href="<?php if (isset($signature)) echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=personal&ident=website'); ?>" style="color:<?php echo $sign_link_color ?>;text-decoration:none;" class="signature_website-target link"><?php if (isset($signature)) echo $signature['website']; ?></a></p>
        <div class="" style="margin: 0;padding: 0;padding-bottom:0;text-align:center;">
            <p class="social-list social_set_1" style="font-size:0; line-height:0;<?php echo $social1_style; ?>">
                <?php
                foreach ($social_icons as $key => $social_icon) {
                    $style = "display:none;";
                    if (isset($signature_socials)) {
                        if (array_key_exists($social_icon['id'], @$signature_socials)) {
                            $style = '';
                        }
                    }
                ?>

                    <a style="<?php echo $style ?> text-decoration:none; padding-left: 2px" class="social <?php echo "signature_social_" . $social_icon['id'] . "-target" ?> sig-hide" href="<?php echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=social&ident=' . $social_icon['id']) ?>">
                        <img width="<?php echo $sign_iconsize ?>px" style="margin-bottom:2px;margin-right:2px; border:none; display:inline;" height="<?php echo $sign_iconsize ?>px" data-filename="<?php echo $social_icon['icon1'] ?>" src="<?php echo base_url() . SOCIAL_ICONS_SET_1 . $social_icon['icon1'] ?>" alt="<?php echo $social_icon['name'] ?>">
                    </a>
                <?php } ?>
            </p>
            <p class="social-list social_set_2" style="font-size:0; line-height:0;<?php echo $social2_style; ?>">
                <?php
                foreach ($social_icons as $key => $social_icon) {
                    $style = "display:none;";
                    if (isset($signature_socials)) {
                        if (array_key_exists($social_icon['id'], @$signature_socials)) {
                            $style = '';
                        }
                    }
                ?>

                    <a style="<?php echo $style ?> text-decoration:none; padding-left: 2px" class="social <?php echo "signature_social_" . $social_icon['id'] . "-target" ?> sig-hide" href="<?php echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=social&ident=' . $social_icon['id']) ?>">
                        <img width="<?php echo $sign_iconsize ?>px" style="margin-bottom:2px;margin-right:2px; border:none; display:inline;" height="<?php echo $sign_iconsize ?>px" data-filename="<?php echo $social_icon['icon2'] ?>" src="<?php echo base_url() . SOCIAL_ICONS_SET_2 . $social_icon['icon2'] ?>" alt="<?php echo $social_icon['name'] ?>">
                    </a>
                <?php } ?>
            </p>
            <p class="social-list social_set_3" style="font-size:0; line-height:0;<?php echo $social3_style; ?>">
                <?php
                foreach ($social_icons as $key => $social_icon) {
                    $style = "display:none;";
                    if (isset($signature_socials)) {
                        if (array_key_exists($social_icon['id'], @$signature_socials)) {
                            $style = '';
                        }
                    }
                ?>

                    <a style="<?php echo $style ?> text-decoration:none; padding-left: 2px" class="social <?php echo "signature_social_" . $social_icon['id'] . "-target" ?> sig-hide" href="<?php echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=social&ident=' . $social_icon['id']) ?>">
                        <img width="<?php echo $sign_iconsize ?>px" style="margin-bottom:2px;margin-right:2px; border:none; display:inline;" height="<?php echo $sign_iconsize ?>px" data-filename="<?php echo $social_icon['icon3'] ?>" src="<?php echo base_url() . SOCIAL_ICONS_SET_3 . $social_icon['icon3'] ?>" alt="<?php echo $social_icon['name'] ?>">
                    </a>
                <?php } ?>
            </p>
            <p class="social-list social_set_4" style="font-size:0; line-height:0;<?php echo $social4_style; ?>">
                <?php
                foreach ($social_icons as $key => $social_icon) {
                    $style = "display:none;";
                    if (isset($signature_socials)) {
                        if (array_key_exists($social_icon['id'], @$signature_socials)) {
                            $style = '';
                        }
                    }
                ?>

                    <a style="<?php echo $style ?> text-decoration:none; padding-left: 2px" class="social <?php echo "signature_social_" . $social_icon['id'] . "-target" ?> sig-hide" href="<?php echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=social&ident=' . $social_icon['id']) ?>">
                        <img width="<?php echo $sign_iconsize ?>px" style="margin-bottom:2px;margin-right:2px; border:none; display:inline;" height="<?php echo $sign_iconsize ?>px" data-filename="<?php echo $social_icon['icon4'] ?>" src="<?php echo base_url() . SOCIAL_ICONS_SET_4 . $social_icon['icon4'] ?>" alt="<?php echo $social_icon['name'] ?>">
                    </a>
                <?php } ?>
            </p>
            <div class="hide_bottom_line <?php echo $hide_bottom_class ?>" style="background: #ededed;width: 200px;margin: 10px auto;height: 4px;"></div>
        </div>
        <?php if (isset($signature) && $signature['banner'] != '') { ?>
            <p class="ba-container" style="text-align:center;margin-top:15px;margin-bottom:15px;margin-left:0;margin-right:0;">
                <a href="<?php if (isset($signature)) echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=banner'); ?>" class="signature_banner_url-target">
                    <img src="<?php echo base_url() . SIGNATURE_UPLOADS_BANNER . $signature['banner'] ?>" alt="signaturia.com" border="0" class="sig-ba" data-pin-nopin="true" style="max-width:400px;height:auto;width:100%;">
                </a>
            </p>
        <?php } else { ?>
            <p class="ba-container" style="display:none">
                <a href="<?php echo site_url('/') ?>" class="signature_banner_url-target">
                    <img src="<?php echo base_url('assets/images/banner.png') ?>" alt="signaturia.com" border="0" class="sig-ba" data-pin-nopin="true" style="max-width:400px;height:auto;width:100%;">
                </a>
            </p>
        <?php } ?>

        <p class="appstores-container" style="text-align:center;margin-top:15px;margin-bottom:15px;margin-left:0;margin-right:0;">
            <?php if (isset($signature) && @$signature['appstore_link'] != '') { ?>
                <a class="appstore signature_apple_app_store_link-target sig-hide" style="text-decoration:none;" href="<?php if (isset($signature)) echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=app&ident=appstore'); ?>">
                    <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/apple.png') ?>" class="appstore-icon " alt="Download on the App Store" data-pin-nopin="true">
                </a>
            <?php } else { ?>
                <a class="appstore signature_apple_app_store_link-target sig-hide" style="text-decoration:none;display: none;" href="#">
                    <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/apple.png') ?>" class="appstore-icon " alt="Download on the App Store" data-pin-nopin="true">
                </a>
            <?php } ?>
            <?php if (isset($signature) && @$signature['googleplaytore_link'] != '') { ?>

                <a class="appstore signature_google_play_link-target sig-hide" style="text-decoration:none;" href="<?php if (isset($signature)) echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=app&ident=googleplaytore'); ?>">
                    <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/google.png') ?>" class="appstore-icon " alt="Get it on Google Play">
                </a>
            <?php } else { ?>

                <a class="appstore signature_google_play_link-target sig-hide" style="text-decoration:none;display: none;" href="#">
                    <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/google.png') ?>" class="appstore-icon " alt="Get it on Google Play">
                </a>
            <?php } ?>
            <?php if (isset($signature) && @$signature['amazon_link'] != '') { ?>

                <a class="appstore signature_amazon_app_store_link-target sig-hide" style="text-decoration:none;" href="<?php if (isset($signature)) echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=app&ident=amazon'); ?>">
                    <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/amazon.png') ?>" class="appstore-icon" alt="Available at Amazon">
                </a>
            <?php } else { ?>

                <a class="appstore signature_amazon_app_store_link-target sig-hide" style="text-decoration:none;display: none;" href="#">
                    <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/amazon.png') ?>" class="appstore-icon" alt="Available at Amazon">
                </a>
            <?php } ?>

        </p>
        <p class="signature_disclaimer-target" style="text-align:center;line-height: 13px;font-weight: 400;font-size: 9px;color: #333333;margin:0;<?php if (isset($signature) && $signature['show_disclaimer'] == 0) echo 'display: none;' ?>"><?php if (isset($signature)) echo $signature['disclaimer'] ?></p>
        <p class="latest_tweet"></p>
        <div class="youtube_video"> <?php if (isset($signature) && $signature['youtube_video'] != '') { ?> <iframe width="120" height="90" src="<?php echo $signature['youtube_video'] ?>" frameborder="0" allowfullscreen></iframe> <?php } ?> </div>

    </div>
</div>
<div class="preview" id="theme-4" <?php echo $theme4_style ?>>
    <?php if (!isset($signature)) { ?>
        <div class="default_signature" style="max-width:600px;margin:0 auto;">
            <table style="margin-top: 0;margin-left: 0;margin-right: 0;margin-bottom: 10px;border-spacing: 0;border-collapse: collapse;width:100%;">
                <tbody>
                    <tr>
                        <td>
                            <table style="margin-top: 0;margin-left: 0;margin-right: 0;margin-bottom: 0;border-spacing: 0;border-collapse: collapse;width:100%;">
                                <tbody>
                                    <tr>
                                        <td min-width="60" valign="top" style="padding:0;">
                                            <img src="<?php echo $sign_logo ?>" alt="<?php echo site_url() ?>" border="0" class="sig-logo default" style="height:60px;width:60px;margin-bottom:0;border-radius:50px;" data-pin-nopin="true">
                                        </td>
                                        <td style="padding-left:10px;padding-top:0;padding-right:0;padding-bottom:0;" valign="top;">
                                            <div class="change_font change_theme_background" style="padding-left:30px;padding-right:30px;padding-top:10px;padding-bottom:10px;background:#4fb218;border-radius:50px;margin-bottom:10px;">
                                                <h1 style="font-size: 18px;line-height:22px; margin-left: 0px;margin-right: 0px;margin-top: 0px;margin-bottom: 0;text-transform: uppercase;color: #fff;font-weight: bold;">John Donga</h1>
                                                <h5 class="" style="font-size: 12px;line-height:14px;color: #fff;padding: 0;margin-left: 0px;margin-right: 0px;margin-top: 0px;margin-bottom: 0;font-weight: 600;">senior content writer</h5>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="change_font" style="padding-top:10px;padding-bottom:10px;padding-left:0;padding-right:0;border-top:solid 1px #ddd;">
                                <ul class="" style="margin-top: 0;margin-left: 0;margin-right: 0;margin-bottom: 0;padding: 0;list-style: none;text-align:left;font-size:12px;line-height:16px;margin-bottom:10px;">
                                    <li style="margin-bottom: 0px;margin-right: 10px;margin-left: 0;display:inline-block;color:#333;"><span class="" style="color: #4fb218;">Mobile:</span> 445-456-7890</li>
                                    <li style="margin-bottom: 0px;margin-right: 10px;margin-left: 0;display:inline-block;color:#333;"><span class="" style="color: #4fb218;">fax:</span> 921-142-0666</li>
                                    <li style="margin-bottom: 0px;margin-right: 10px;margin-left: 0;display:inline-block;color:#333;"><span class="" style="color: #4fb218;">Email:</span> <a href="mailto:john@signaturia.com" style="color:#333;text-decoration:none;">john@signaturia.com</a></li>
                                </ul>
                                <div class="social-list social_set_1" style="margin: 0;padding:0;text-align:left;">
                                    <?php
                                    foreach ($social_icons as $key => $social_icon) {
                                        if ($key == 10) {
                                            break;
                                        }
                                    ?>
                                        <a style="text-decoration:none;display:inline-block;" class="social signature_twitter-target sig-hide" href="#">
                                            <img width="20px" style="margin-bottom:2px;margin-right:2px; border:none; display:inline;" height="20px" data-filename="<?php echo $social_icon['icon1'] ?>" src="<?php echo base_url() . SOCIAL_ICONS_SET_1 . $social_icon['icon1'] ?>" alt="<?php echo $social_icon['name'] ?>">
                                        </a>
                                    <?php } ?>
                                </div>
                                <div class="social-list social_set_2" style="margin: 0;padding:0;text-align:left;display: none">
                                    <?php
                                    foreach ($social_icons as $key => $social_icon) {
                                        if ($key == 10) {
                                            break;
                                        }
                                    ?>
                                        <a style="text-decoration:none;display:inline-block;" class="social" href="#"> <img width="20px" style="margin-bottom:2px;margin-right:2px; border:none; display:inline;" height="20px" src="<?php echo base_url() . SOCIAL_ICONS_SET_2 . $social_icon['icon2'] ?>" alt="" /></a>
                                    <?php } ?>
                                </div>
                                <div class="social-list social_set_3" style="margin: 0;padding:0;text-align:left;display: none">
                                    <?php
                                    foreach ($social_icons as $key => $social_icon) {
                                        if ($key == 10) {
                                            break;
                                        }
                                    ?>
                                        <a style="text-decoration:none;display:inline-block;" class="social" href="#"> <img width="20px" style="margin-bottom:2px;margin-right:2px; border:none; display:inline;" height="20px" src="<?php echo base_url() . SOCIAL_ICONS_SET_3 . $social_icon['icon3'] ?>" alt="" /></a>
                                    <?php } ?>
                                </div>
                                <div class="social-list social_set_4" style="margin: 0;padding:0;text-align:left;display: none">
                                    <?php
                                    foreach ($social_icons as $key => $social_icon) {
                                        if ($key == 10) {
                                            break;
                                        }
                                    ?>
                                        <a style="text-decoration:none;display:inline-block;" class="social" href="#"> <img width="20px" style="margin-bottom:2px;margin-right:2px; border:none; display:inline;" height="20px" src="<?php echo base_url() . SOCIAL_ICONS_SET_4 . $social_icon['icon4'] ?>" alt="" /></a>
                                    <?php } ?>
                                </div>
                                <p class="" style="text-align:left;line-height: 16px;font-weight: 400;font-size: 12px;color: #333333;margin-top: 0;margin-left: 0;margin-right: 0;margin-bottom: 0;"><span class="" style="color: #4fb218;display:block;">Signaturia</span>32-black street, winter hour.United Kingdom 08808</p>
                                <p class="" style="text-align:left;line-height: 16px;font-weight: 400;font-size: 12px;color: #333333;margin-top: 0;margin-left: 0;margin-right: 0;margin-bottom: 0;"><span class="website_title" style="color: #4fb218;">Website:</span> <a href="www.signaturia.com" class="link" style="color:#333;text-decoration:none;">www.signaturia.com</a></p>
                                <div class="hide_bottom_line" style="background: #ccc;height: 1px;margin-top: 10px;"></div>

                            </div>
                            <p class="appstores-container" style="text-align:left;margin-top:10px;margin-bottom:10px;margin-left:0;margin-right:0;">
                                <a class="appstore signature_apple_app_store_link-target sig-hide" style="text-decoration:none;" href="http://www.chameleoninfotech.com/theme/htmlsig/signature-temp.html#">
                                    <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/apple.png') ?>" class="appstore-icon " alt="Download on the App Store" data-pin-nopin="true">
                                </a>
                                <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2">
                                <a class="appstore signature_google_play_link-target sig-hide" style="text-decoration:none;" href="http://www.chameleoninfotech.com/theme/htmlsig/signature-temp.html#">
                                    <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/google.png') ?>" class="appstore-icon " alt="Get it on Google Play">
                                </a>
                                <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2">
                                <a class="appstore signature_amazon_app_store_link-target sig-hide" style="text-decoration:none;" href="http://www.chameleoninfotech.com/theme/htmlsig/signature-temp.html#">
                                    <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/amazon.png') ?>" class="appstore-icon" alt="Available at Amazon">
                                </a>
                            </p>
                            <p class="" style="text-align:left;margin-top:15px;margin-bottom:15px;margin-left:0;margin-right:0;">
                                <a href="http://signaturia.com">
                                    <img src="<?php echo base_url('assets/images/banner.png') ?>" alt="" border="0" width="300" data-pin-nopin="true" class="sig-ba">
                                </a>
                            </p>
                            <p class="" style="text-align:left;line-height: 13px;font-weight: 400;font-size: 9px;color: #333333;margin:0;">A disclaimer is generally any statement intended to specify or delimit the scope of rights and obligations that may be exercised and enforced by parties in a legally recognized relationship. In contrast to other terms for legally operative language, the term disclaimer usually implies situations that involve some level of uncertainty, waiver, or risk.</p>
                        </td>
                    </tr>
                </tbody>
            </table>
            <p class="latest_tweet"></p>
            <div class="youtube_video"> <?php if (isset($signature) && $signature['youtube_video'] != '') { ?> <iframe width="120" height="90" src="<?php echo $signature['youtube_video'] ?>" frameborder="0" allowfullscreen></iframe> <?php } ?> </div>

        </div>
    <?php } ?>
    <div class="new_signature" style="max-width:600px;<?php if (!isset($signature)) echo "display: none;" ?><?php echo $sign_font_style ?>">
        <table style="margin-top: 0;margin-left: 0;margin-right: 0;margin-bottom: 10px;border-spacing: 0;border-collapse: collapse;width:100%;">
            <tbody>
                <tr>
                    <td>
                        <table style="margin-top: 0;margin-left: 0;margin-right: 0;margin-bottom: 0;border-spacing: 0;border-collapse: collapse;width:100%;">
                            <tbody>
                                <tr>
                                    <td min-width="60" valign="top" style="padding:0;">
                                        <img src="<?php echo $sign_logo ?>" alt="<?php echo site_url() ?>" border="0" class="sig-logo default" style="height:60px;width:60px;margin-bottom:0;border-radius:50px;<?php echo $logo_style ?>" data-pin-nopin="true">
                                    </td>
                                    <td style="padding-left:10px;padding-top:0;padding-right:0;padding-bottom:0;" valign="top;">
                                        <div class="change_theme_background" style="padding-left:30px;padding-right:30px;padding-top:10px;padding-bottom:10px;background:<?php echo $sign_text_color ?>;border-radius:50px;margin-bottom:10px;">
                                            <h1 style="font-size: <?php echo $sign_font_size + 4 ?>px;line-height:<?php echo $sign_font_size + 8 ?>px; margin-left: 0px;margin-right: 0px;margin-top: 0px;margin-bottom: 0;text-transform: uppercase;color: #fff;font-weight: bold;" class="signature_name-target"><?php if (isset($signature)) echo $signature['name']; ?></h1>
                                            <h5 class="signature_jobtitle-target change_font" style="font-size: 12px;line-height:14px;color: #fff;padding: 0;margin-left: 0px;margin-right: 0px;margin-top: 0px;margin-bottom: 0;font-weight: 600;"><?php if (isset($signature)) echo $signature['job_title'] ?></h5>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div style="padding-top:10px;padding-bottom:10px;padding-left:0;padding-right:0;border-top:solid 1px #ddd;">
                            <ul class="change_font" style="margin-top: 0;margin-left: 0;margin-right: 0;margin-bottom: 0;padding: 0;list-style: none;text-align:left;font-size:<?php echo $sign_font_size ?>px;line-height:<?php echo $sign_font_size + 4 ?>px;margin-bottom:10px;">
                                <li class="mobile_title" style="margin-bottom: 0px;margin-right: 10px;margin-left: 0;<?php
                                                                                                                        if (isset($signature) && $signature['mobile_number'] != '')
                                                                                                                            echo "display:inline-block;";
                                                                                                                        else
                                                                                                                            echo "display:none;";
                                                                                                                        ?>"><span class="change_theme_p" style="color: <?php echo $sign_text_color ?>;">Mobile:</span> <span class="signature_mobilephone-target txt" style="color:<?php echo $sign_p_text_color ?>;"><?php if (isset($signature)) echo $signature['mobile_number'] ?></span></li>
                                <li class="fax_title" style="margin-bottom: 0px;margin-right: 10px;margin-left: 0;<?php
                                                                                                                    if (isset($signature) && $signature['fax'] != '')
                                                                                                                        echo "display:inline-block;";
                                                                                                                    else
                                                                                                                        echo "display:none;";
                                                                                                                    ?>"><span class="change_theme_p" style="color: <?php echo $sign_text_color ?>;">fax:</span> <span class="signature_fax-target txt" style="color:<?php echo $sign_p_text_color ?>;"><?php if (isset($signature)) echo $signature['fax']; ?></span></li>
                                <li class="email_title" style="margin-bottom: 0px;margin-right: 10px;margin-left: 0;<?php
                                                                                                                    if (isset($signature) && $signature['email'] != '')
                                                                                                                        echo "display:inline-block;";
                                                                                                                    else
                                                                                                                        echo "display:none;";
                                                                                                                    ?>"><span class="change_theme_p" style="color: <?php echo $sign_text_color ?>;">Email:</span> <a href="<?php if (isset($signature)) echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=personal&ident=email'); ?>" style="color:<?php echo $sign_link_color ?>;text-decoration:none;" class="signature_email-target link"><?php if (isset($signature)) echo $signature['email'] ?></a></li>
                            </ul>
                            <div class="" style="margin: 0;padding:0;text-align:left;">
                                <p class="social-list social_set_1" style="font-size:0; line-height:0;<?php echo $social1_style; ?>">
                                    <?php
                                    foreach ($social_icons as $key => $social_icon) {
                                        $style = "display:none;";
                                        if (isset($signature_socials)) {
                                            if (array_key_exists($social_icon['id'], @$signature_socials)) {
                                                $style = '';
                                            }
                                        }
                                    ?>

                                        <a style="<?php echo $style ?> text-decoration:none; padding-left: 2px" class="social <?php echo "signature_social_" . $social_icon['id'] . "-target" ?> sig-hide" href="<?php echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=social&ident=' . $social_icon['id']) ?>">
                                            <img width="<?php echo $sign_iconsize ?>px" style="margin-bottom:2px;margin-right:2px; border:none; display:inline;" height="<?php echo $sign_iconsize ?>px" data-filename="<?php echo $social_icon['icon1'] ?>" src="<?php echo base_url() . SOCIAL_ICONS_SET_1 . $social_icon['icon1'] ?>" alt="<?php echo $social_icon['name'] ?>">
                                        </a>
                                    <?php } ?>
                                </p>
                                <p class="social-list social_set_2" style="font-size:0; line-height:0;<?php echo $social2_style; ?>">
                                    <?php
                                    foreach ($social_icons as $key => $social_icon) {
                                        $style = "display:none;";
                                        if (isset($signature_socials)) {
                                            if (array_key_exists($social_icon['id'], @$signature_socials)) {
                                                $style = '';
                                            }
                                        }
                                    ?>

                                        <a style="<?php echo $style ?> text-decoration:none; padding-left: 2px" class="social <?php echo "signature_social_" . $social_icon['id'] . "-target" ?> sig-hide" href="<?php echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=social&ident=' . $social_icon['id']) ?>">
                                            <img width="<?php echo $sign_iconsize ?>px" style="margin-bottom:2px;margin-right:2px; border:none; display:inline;" height="<?php echo $sign_iconsize ?>px" data-filename="<?php echo $social_icon['icon2'] ?>" src="<?php echo base_url() . SOCIAL_ICONS_SET_2 . $social_icon['icon2'] ?>" alt="<?php echo $social_icon['name'] ?>">
                                        </a>
                                    <?php } ?>
                                </p>
                                <p class="social-list social_set_3" style="font-size:0; line-height:0;<?php echo $social3_style; ?>">
                                    <?php
                                    foreach ($social_icons as $key => $social_icon) {
                                        $style = "display:none;";
                                        if (isset($signature_socials)) {
                                            if (array_key_exists($social_icon['id'], @$signature_socials)) {
                                                $style = '';
                                            }
                                        }
                                    ?>

                                        <a style="<?php echo $style ?> text-decoration:none; padding-left: 2px" class="social <?php echo "signature_social_" . $social_icon['id'] . "-target" ?> sig-hide" href="<?php echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=social&ident=' . $social_icon['id']) ?>">
                                            <img width="<?php echo $sign_iconsize ?>px" style="margin-bottom:2px;margin-right:2px; border:none; display:inline;" height="<?php echo $sign_iconsize ?>px" data-filename="<?php echo $social_icon['icon3'] ?>" src="<?php echo base_url() . SOCIAL_ICONS_SET_3 . $social_icon['icon3'] ?>" alt="<?php echo $social_icon['name'] ?>">
                                        </a>
                                    <?php } ?>
                                </p>
                                <p class="social-list social_set_4" style="font-size:0; line-height:0;<?php echo $social4_style; ?>">
                                    <?php
                                    foreach ($social_icons as $key => $social_icon) {
                                        $style = "display:none;";
                                        if (isset($signature_socials)) {
                                            if (array_key_exists($social_icon['id'], @$signature_socials)) {
                                                $style = '';
                                            }
                                        }
                                    ?>

                                        <a style="<?php echo $style ?> text-decoration:none;padding-left: 2px" class="social <?php echo "signature_social_" . $social_icon['id'] . "-target" ?> sig-hide" href="<?php echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=social&ident=' . $social_icon['id']) ?>">
                                            <img width="<?php echo $sign_iconsize ?>px" style="margin-bottom:2px;margin-right:2px; border:none; display:inline;" height="<?php echo $sign_iconsize ?>px" data-filename="<?php echo $social_icon['icon4'] ?>" src="<?php echo base_url() . SOCIAL_ICONS_SET_4 . $social_icon['icon4'] ?>" alt="<?php echo $social_icon['name'] ?>">
                                        </a>
                                    <?php } ?>
                                </p>
                            </div>

                            <p class="change_font" style="text-align:left;font-weight: 400;margin-top: 0;margin-left: 0;margin-right: 0;margin-bottom: 0;font-size:<?php echo $sign_font_size ?>px;line-height:<?php echo $sign_font_size + 4 ?>px;"><span class="signature_companyname-target change_theme_p" style="color: <?php echo $sign_text_color ?>;display:block;"><?php if (isset($signature)) echo $signature['company_name'] ?></span><span class="signature_address-target txt" style="color:<?php echo $sign_p_text_color ?>;"><?php if (isset($signature)) echo $signature['address']; ?></span><span class="signature_address2-target txt" style="color:<?php echo $sign_p_text_color ?>;"><?php if (isset($signature)) echo '<br/>' . $signature['address_line2']; ?></span></p>

                            <p class="change_font" style="text-align:left;font-weight: 400;margin-top: 0;margin-left: 0;margin-right: 0;margin-bottom: 0;margin-bottom:15px;font-size:<?php echo $sign_font_size ?>px;line-height:<?php echo $sign_font_size + 4 ?>px;"><span class="change_theme_p website_title" style="color: <?php echo $sign_text_color ?>;<?php
                                                                                                                                                                                                                                                                                                                                                                if (isset($signature) && $signature['website'] != '')
                                                                                                                                                                                                                                                                                                                                                                    echo "";
                                                                                                                                                                                                                                                                                                                                                                else
                                                                                                                                                                                                                                                                                                                                                                    echo "display:none;";
                                                                                                                                                                                                                                                                                                                                                                ?>">Website:</span> <a href="<?php if (isset($signature)) echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=personal&ident=website'); ?>" style="color:<?php echo $sign_link_color ?>;text-decoration:none;" class="signature_website-target link"><?php if (isset($signature)) echo $signature['website']; ?></a>
                            </p>
                            <div class="hide_bottom_line <?php echo $hide_bottom_class ?>" style="background: #ccc;height: 1px;margin-top: 10px;"></div>

                        </div>
                        <p class="appstores-container" style="text-align:left;margin-top:10px;margin-bottom:10px;margin-left:0;margin-right:0;">
                            <?php if (isset($signature) && @$signature['appstore_link'] != '') { ?>
                                <a class="appstore signature_apple_app_store_link-target sig-hide" style="text-decoration:none;" href="<?php if (isset($signature)) echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=app&ident=appstore'); ?>">
                                    <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/apple.png') ?>" class="appstore-icon " alt="Download on the App Store" data-pin-nopin="true">
                                </a>
                            <?php } else { ?>
                                <a class="appstore signature_apple_app_store_link-target sig-hide" style="text-decoration:none;display: none;" href="#">
                                    <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/apple.png') ?>" class="appstore-icon " alt="Download on the App Store" data-pin-nopin="true">
                                </a>
                            <?php } ?>
                            <?php if (isset($signature) && @$signature['googleplaytore_link'] != '') { ?>

                                <a class="appstore signature_google_play_link-target sig-hide" style="text-decoration:none;" href="<?php if (isset($signature)) echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=app&ident=googleplaytore'); ?>">
                                    <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/google.png') ?>" class="appstore-icon " alt="Get it on Google Play">
                                </a>
                            <?php } else { ?>

                                <a class="appstore signature_google_play_link-target sig-hide" style="text-decoration:none;display: none;" href="#">
                                    <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/google.png') ?>" class="appstore-icon " alt="Get it on Google Play">
                                </a>
                            <?php } ?>
                            <?php if (isset($signature) && @$signature['amazon_link'] != '') { ?>

                                <a class="appstore signature_amazon_app_store_link-target sig-hide" style="text-decoration:none;" href="<?php if (isset($signature)) echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=app&ident=amazon'); ?>">
                                    <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/amazon.png') ?>" class="appstore-icon" alt="Available at Amazon">
                                </a>
                            <?php } else { ?>

                                <a class="appstore signature_amazon_app_store_link-target sig-hide" style="text-decoration:none;display: none;" href="#">
                                    <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/amazon.png') ?>" class="appstore-icon" alt="Available at Amazon">
                                </a>
                            <?php } ?>

                        </p>
                        <?php if (isset($signature) && $signature['banner'] != '') { ?>
                            <p class="ba-container" style="text-align:left;margin-top:15px;margin-bottom:15px;margin-left:0;margin-right:0;">
                                <a href="<?php if (isset($signature)) echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=banner'); ?>" class="signature_banner_url-target">
                                    <img src="<?php echo base_url() . SIGNATURE_UPLOADS_BANNER . $signature['banner'] ?>" alt="signaturia.com" border="0" class="sig-ba" data-pin-nopin="true" style="max-width:400px;height:auto;width:100%;">
                                </a>
                            </p>
                        <?php } else { ?>
                            <p class="ba-container" style="text-align:left;margin-top:15px;margin-bottom:15px;margin-left:0;margin-right:0;display:none">
                                <a href="<?php echo site_url('/') ?>" class="signature_banner_url-target">
                                    <img src="<?php echo base_url('assets/images/banner.png') ?>" alt="signaturia.com" border="0" class="sig-ba" data-pin-nopin="true" style="max-width:400px;height:auto;width:100%;">
                                </a>
                            </p>
                        <?php } ?>
                        <p class="signature_disclaimer-target" style="text-align:left;ine-height: 13px;font-weight: 400;font-size: 9px;color:#333333;margin:0;<?php if (isset($signature) && $signature['show_disclaimer'] == 0) echo 'display: none;' ?>"><?php if (isset($signature)) echo $signature['disclaimer'] ?></p>
                    </td>
                </tr>
            </tbody>
        </table>
        <p class="latest_tweet"></p>
        <div class="youtube_video"> <?php if (isset($signature) && $signature['youtube_video'] != '') { ?> <iframe width="120" height="90" src="<?php echo $signature['youtube_video'] ?>" frameborder="0" allowfullscreen></iframe> <?php } ?> </div>

    </div>
</div>
<div id="theme-5" class="preview" <?php echo $theme5_style ?>>
    <?php if (!isset($signature)) { ?>
        <div class="default_signature" style="max-width:600px;margin:0 auto;">
            <table style="margin-top: 0;margin-left: 0;margin-right: 0;margin-bottom: 10px;border-spacing: 0;border-collapse: collapse;width:100%;">
                <tbody>
                    <tr>
                        <td style="">
                            <table style="margin-top: 0;margin-left: 0;margin-right: 0;margin-bottom: 0;border-spacing: 0;border-collapse: collapse;width:100%;">
                                <tbody>
                                    <tr>
                                        <td min-width="110" valign="top" style="padding:0;">
                                            <img src="<?php echo $sign_logo ?>" alt="<?php echo site_url() ?>" border="0" class="sig-logo default" style="width:110px;margin-bottom:0;" data-pin-nopin="true">
                                        </td>
                                        <td style="background:#eee;padding-left:10px;padding-right:10px;padding-top:10px;padding-bottom:10px;" valign="top;">
                                            <h1 style="font-size: 18px;line-height:22px; margin-left: 0px;margin-right: 0px;margin-top: 0px;margin-bottom: 0;text-transform: uppercase;color: #4fb218;font-weight: bold;" class="signature_name-target change_theme_p">John Donga</h1>
                                            <h5 class="signature_jobtitle-target change_font txt" style="font-size: 12px;line-height:14px;color: #666;padding: 0;margin-left: 0px;margin-right: 0px;margin-top: 0px;margin-bottom: 10px;font-weight: 600;">senior content writer</h5>
                                            <div class="" style="">
                                                <ul class="change_font" style="margin-top: 0;margin-left: 0;margin-right: 0;margin-bottom: 0;padding: 0;list-style: none;text-align:left;font-size:12px;line-height:16px;margin-bottom:10px;">
                                                    <li style="margin-bottom: 0px;margin-right: 10px;margin-left: 0;display:block;color:#333;"><span class="mobile_title change_theme_p" style="color: #4fb218;">Mobile:</span> <span class="signature_mobilephone-target txt">445-456-7890</span></li>
                                                    <li style="margin-bottom: 0px;margin-right: 10px;margin-left: 0;display:block;color:#333;"><span class="fax_title change_theme_p" style="color: #4fb218;">fax:</span> <span class="signature_fax-target txt">921-142-0666</span></li>
                                                    <li style="margin-bottom: 0px;margin-right: 10px;margin-left: 0;display:block;color:#333;"><span class="email_title change_theme_p" style="color: #4fb218;">Email:</span> <a href="mailto:john@signaturia.com" style="color:#333;text-decoration:none;" class="signature_email-target link">john@signaturia.com</a></li>
                                                </ul>
                                                <div class="social-list social_set_1" style="margin: 0;padding:0;text-align:left;">
                                                    <?php
                                                    foreach ($social_icons as $key => $social_icon) {
                                                        if ($key == 10) {
                                                            break;
                                                        }
                                                    ?>
                                                        <a style="text-decoration:none;display:inline-block;" class="social sig-hide" href="#">
                                                            <img width="20px" style="margin-bottom:2px;margin-right:2px; border:none; display:inline;" height="20px" data-filename="<?php echo $social_icon['icon1'] ?>" src="<?php echo base_url() . SOCIAL_ICONS_SET_1 . $social_icon['icon1'] ?>" alt="<?php echo $social_icon['name'] ?>">
                                                        </a>
                                                    <?php } ?>
                                                </div>
                                                <div class="social-list social_set_2" style="margin: 0;padding:0;text-align:left;display: none">
                                                    <?php
                                                    foreach ($social_icons as $key => $social_icon) {
                                                        if ($key == 10) {
                                                            break;
                                                        }
                                                    ?>
                                                        <a style="text-decoration:none;display:inline-block;" class="social" href="#"> <img width="20px" style="margin-bottom:2px;margin-right:2px; border:none; display:inline;" height="20px" src="<?php echo base_url() . SOCIAL_ICONS_SET_2 . $social_icon['icon2'] ?>" alt="" /></a>
                                                    <?php } ?>
                                                </div>
                                                <div class="social-list social_set_3" style="margin: 0;padding:0;text-align:left;display: none">
                                                    <?php
                                                    foreach ($social_icons as $key => $social_icon) {
                                                        if ($key == 10) {
                                                            break;
                                                        }
                                                    ?>
                                                        <a style="text-decoration:none;display:inline-block;" class="social" href="#"> <img width="20px" style="margin-bottom:2px;margin-right:2px; border:none; display:inline;" height="20px" src="<?php echo base_url() . SOCIAL_ICONS_SET_3 . $social_icon['icon3'] ?>" alt="" /></a>
                                                    <?php } ?>
                                                </div>
                                                <div class="social-list social_set_4" style="margin: 0;padding:0;text-align:left;display: none">
                                                    <?php
                                                    foreach ($social_icons as $key => $social_icon) {
                                                        if ($key == 10) {
                                                            break;
                                                        }
                                                    ?>
                                                        <a style="text-decoration:none;display:inline-block;" class="social" href="#"> <img width="20px" style="margin-bottom:2px;margin-right:2px; border:none; display:inline;" height="20px" src="<?php echo base_url() . SOCIAL_ICONS_SET_4 . $social_icon['icon4'] ?>" alt="" /></a>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="change_font" style="text-align:left;line-height: 16px;font-weight: 400;font-size: 12px;color: #333333;margin-top: 10px;margin-left: 0;margin-right: 0;margin-bottom: 0;"><span class="signature_companyname-target change_theme_p" style="color: #4fb218;display:block;">Signaturia</span><span class="signature_address-target txt">32-black street, winter hour.United Kingdom 08808</span><span class="signature_address2-target txt"></span></p>
                            <p class="change_font" style="text-align:left;line-height: 16px;font-weight: 400;font-size: 12px;color: #333333;margin-top: 0;margin-left: 0;margin-right: 0;margin-bottom: 10;"><span class="change_theme_p website_title" style="color: #4fb218;">Website:</span> <a href="<?php echo site_url() ?>" style="color:#333;text-decoration:none;" class="link signature_website-target">www.signaturia.com</a></p>
                            <p class="appstores-container" style="text-align:left;margin-top:10px;margin-bottom:10px;margin-left:0;margin-right:0;">
                                <a class="appstore signature_apple_app_store_link-target sig-hide" style="text-decoration:none;" href="#">
                                    <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/apple.png') ?>" class="appstore-icon " alt="Download on the App Store" data-pin-nopin="true"></a>
                                <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2">
                                <a class="appstore signature_google_play_link-target sig-hide" style="text-decoration:none;" href="#">
                                    <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/google.png') ?>" class="appstore-icon " alt="Get it on Google Play">
                                </a>
                                <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2">
                                <a class="appstore signature_amazon_app_store_link-target sig-hide" style="text-decoration:none;" href="#">
                                    <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/amazon.png') ?>" class="appstore-icon" alt="Available at Amazon">
                                </a>
                            </p>
                            <p class="signature_banner_url-target" style="text-align:left;margin-top:15px;margin-bottom:15px;margin-left:0;margin-right:0;">
                                <a href="#"> <img src="<?php echo base_url('assets/images/banner.png') ?>" alt="" border="0" width="300" data-pin-nopin="true" class="sig-ba"> </a>
                            </p>
                            <p class="signature_disclaimer-target" style="text-align:left;line-height: 13px;font-weight: 400;font-size: 9px;color: #333333;margin:0;">A disclaimer is generally any statement intended to specify or delimit the scope of rights and obligations that may be exercised and enforced by parties in a legally recognized relationship. In contrast to other terms for legally operative language, the term disclaimer usually implies situations that involve some level of uncertainty, waiver, or risk.</p>
                        </td>
                    </tr>
                </tbody>
            </table>
            <p class="latest_tweet"></p>
            <div class="youtube_video"> <?php if (isset($signature) && $signature['youtube_video'] != '') { ?> <iframe width="120" height="90" src="<?php echo $signature['youtube_video'] ?>" frameborder="0" allowfullscreen></iframe> <?php } ?> </div>

        </div>
    <?php } ?>
    <div class="new_signature" style="max-width:600px;<?php if (!isset($signature)) echo "display: none;" ?><?php echo $sign_font_style ?>">
        <table style="margin-top: 0;margin-left: 0;margin-right: 0;margin-bottom: 10px;border-spacing: 0;border-collapse: collapse;width:100%;">
            <tbody>
                <tr>
                    <td style="">
                        <table style="margin-top: 0;margin-left: 0;margin-right: 0;margin-bottom: 0;border-spacing: 0;border-collapse: collapse;width:100%;">
                            <tbody>
                                <tr>
                                    <td min-width="110" valign="top" style="padding:0;">
                                        <img src="<?php echo $sign_logo ?>" alt="<?php echo site_url() ?>" border="0" class="sig-logo default" style="width:110px;margin-bottom:0;<?php echo $logo_style ?>" data-pin-nopin="true">
                                    </td>
                                    <td style="background:#eee;padding-left:10px;padding-right:10px;padding-top:10px;padding-bottom:10px;" valign="top;">
                                        <h1 style="font-size: <?php echo $sign_font_size + 4 ?>px;line-height:<?php echo $sign_font_size + 4 ?>px; margin-left: 0px;margin-right: 0px;margin-top: 0px;margin-bottom: 0;text-transform: uppercase;color: <?php echo $sign_text_color ?>;font-weight: bold;" class="signature_name-target change_theme_p"><?php if (isset($signature)) echo $signature['name'] ?></h1>
                                        <h5 class="signature_jobtitle-target change_font txt" style="font-size: <?php echo $sign_font_size ?>px;line-height:<?php echo $sign_font_size + 4 ?>px;color: <?php echo $sign_p_text_color ?>;padding: 0;margin-left: 0px;margin-right: 0px;margin-top: 0px;margin-bottom: 10px;font-weight: 600;"><?php if (isset($signature)) echo $signature['job_title'] ?></h5>
                                        <div class="" style="">
                                            <ul class="change_font" style="margin-top: 0;margin-left: 0;margin-right: 0;margin-bottom: 0;padding: 0;list-style: none;text-align:left;font-size:<?php echo $sign_font_size ?>px;line-height:<?php echo $sign_font_size + 4 ?>px;margin-bottom:10px;">
                                                <li style="margin-bottom: 0px;margin-right: 10px;margin-left: 0;display:block;color:#333;"><span class="mobile_title change_theme_p" style="color: <?php echo $sign_text_color ?>;<?php
                                                                                                                                                                                                                                    if (isset($signature) && $signature['mobile_number'] != '')
                                                                                                                                                                                                                                        echo "display:inline-block;";
                                                                                                                                                                                                                                    else
                                                                                                                                                                                                                                        echo "display:none;"
                                                                                                                                                                                                                                    ?>">Mobile:</span> <span class="signature_mobilephone-target txt" style="color: <?php echo $sign_p_text_color ?>;"><?php if (isset($signature)) echo $signature['mobile_number'] ?></span></li>
                                                <li style="margin-bottom: 0px;margin-right: 10px;margin-left: 0;display:block;color:#333;"><span class="fax_title change_theme_p" style="color: <?php echo $sign_text_color ?>;<?php
                                                                                                                                                                                                                                if (isset($signature) && $signature['fax'] != '')
                                                                                                                                                                                                                                    echo "display:inline-block;";
                                                                                                                                                                                                                                else
                                                                                                                                                                                                                                    echo "display:none;"
                                                                                                                                                                                                                                ?>">fax:</span> <span class="signature_fax-target txt" style="color: <?php echo $sign_p_text_color ?>;"><?php if (isset($signature)) echo $signature['fax'] ?></span></li>
                                                <li style="margin-bottom: 0px;margin-right: 10px;margin-left: 0;display:block;color:#333;"><span class="email_title change_theme_p" style="color:<?php echo $sign_text_color ?>;<?php
                                                                                                                                                                                                                                if (isset($signature) && $signature['email'] != '')
                                                                                                                                                                                                                                    echo "display:inline-block;";
                                                                                                                                                                                                                                else
                                                                                                                                                                                                                                    echo "display:none;"
                                                                                                                                                                                                                                ?>">Email:</span> <a href="<?php if (isset($signature)) echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=personal&ident=email') ?>" style="color:<?php echo $sign_link_color ?>;text-decoration:none;" class="signature_email-target link"><?php if (isset($signature)) echo $signature['email'] ?></a></li>
                                            </ul>
                                            <div class="social-list social_set_1" style="margin: 0;padding:0;text-align:left;<?php echo $social1_style; ?>">
                                                <?php
                                                foreach ($social_icons as $key => $social_icon) {
                                                    $style = "display:none;";
                                                    if (isset($signature_socials)) {
                                                        if (array_key_exists($social_icon['id'], $signature_socials)) {
                                                            $style = 'display:inline-block;';
                                                        }
                                                    }
                                                ?>

                                                    <a style="<?php echo $style ?> text-decoration:none;" class="social <?php echo "signature_social_" . $social_icon['id'] . "-target" ?> sig-hide" href="<?php echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=social&ident=' . $social_icon['id']) ?>">
                                                        <img width="<?php echo $sign_iconsize ?>px" style="margin-bottom:2px;margin-right:2px; border:none; display:inline;" height="<?php echo $sign_iconsize ?>px" data-filename="<?php echo $social_icon['icon1'] ?>" src="<?php echo base_url() . SOCIAL_ICONS_SET_1 . $social_icon['icon1'] ?>" alt="<?php echo $social_icon['name'] ?>">
                                                    </a>
                                                <?php } ?>
                                            </div>
                                            <div class="social-list social_set_2" style="margin: 0;padding:0;text-align:left;<?php echo $social2_style; ?>">
                                                <?php
                                                foreach ($social_icons as $key => $social_icon) {
                                                    $style = "display:none;";
                                                    if (isset($signature_socials)) {
                                                        if (array_key_exists($social_icon['id'], $signature_socials)) {
                                                            $style = '';
                                                        }
                                                    }
                                                ?>

                                                    <a style="<?php echo $style ?> text-decoration:none;" class="social <?php echo "signature_social_" . $social_icon['id'] . "-target" ?> sig-hide" href="<?php echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=social&ident=' . $social_icon['id']) ?>">
                                                        <img width="<?php echo $sign_iconsize ?>px" style="margin-bottom:2px;margin-right:2px; border:none; display:inline;" height="<?php echo $sign_iconsize ?>px" data-filename="<?php echo $social_icon['icon2'] ?>" src="<?php echo base_url() . SOCIAL_ICONS_SET_2 . $social_icon['icon2'] ?>" alt="<?php echo $social_icon['name'] ?>">
                                                    </a>
                                                <?php } ?>
                                            </div>
                                            <div class="social-list social_set_3" style="margin: 0;padding:0;text-align:left;<?php echo $social3_style; ?>">
                                                <?php
                                                foreach ($social_icons as $key => $social_icon) {
                                                    $style = "display:none;";
                                                    if (isset($signature_socials)) {
                                                        if (array_key_exists($social_icon['id'], $signature_socials)) {
                                                            $style = '';
                                                        }
                                                    }
                                                ?>

                                                    <a style="<?php echo $style ?> text-decoration:none;" class="social <?php echo "signature_social_" . $social_icon['id'] . "-target" ?> sig-hide" href="<?php echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=social&ident=' . $social_icon['id']) ?>">
                                                        <img width="<?php echo $sign_iconsize ?>px" style="margin-bottom:2px;margin-right:2px; border:none; display:inline;" height="<?php echo $sign_iconsize ?>px" data-filename="<?php echo $social_icon['icon3'] ?>" src="<?php echo base_url() . SOCIAL_ICONS_SET_3 . $social_icon['icon3'] ?>" alt="<?php echo $social_icon['name'] ?>">
                                                    </a>
                                                <?php } ?>
                                            </div>
                                            <div class="social-list social_set_4" style="margin: 0;padding:0;text-align:left;<?php echo $social4_style; ?>">
                                                <?php
                                                foreach ($social_icons as $key => $social_icon) {
                                                    $style = "display:none;";
                                                    if (isset($signature_socials)) {
                                                        if (array_key_exists($social_icon['id'], $signature_socials)) {
                                                            $style = '';
                                                        }
                                                    }
                                                ?>
                                                    <a style="<?php echo $style ?> text-decoration:none;" class="social <?php echo "signature_social_" . $social_icon['id'] . "-target" ?> sig-hide" href="<?php echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=social&ident=' . $social_icon['id']) ?>">
                                                        <img width="<?php echo $sign_iconsize ?>px" style="margin-bottom:2px;margin-right:2px; border:none; display:inline;" height="<?php echo $sign_iconsize ?>px" data-filename="<?php echo $social_icon['icon4'] ?>" src="<?php echo base_url() . SOCIAL_ICONS_SET_4 . $social_icon['icon4'] ?>" alt="<?php echo $social_icon['name'] ?>">
                                                    </a>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="change_font" style="text-align:left;line-height: <?php echo $sign_font_size + 4 ?>px;font-weight: 400;font-size: <?php echo $sign_font_size ?>px;color: #333333;margin-top: 10px;margin-left: 0;margin-right: 0;margin-bottom: 0;"><span class="signature_companyname-target change_theme_p" style="color: <?php echo $sign_text_color ?>;display:block;"><?php if (isset($signature)) echo $signature['company_name'] ?></span><span class="signature_address-target txt" style="color:<?php echo $sign_p_text_color ?>;"><?php if (isset($signature)) echo $signature['address']; ?></span><span class="signature_address2-target txt" style="color:<?php echo $sign_p_text_color ?>;"><?php if (isset($signature)) echo '<br/>' . $signature['address_line2']; ?></span></p>
                        <p class="change_font" style="text-align:left;line-height: <?php echo $sign_font_size + 4 ?>px;font-weight: 400;font-size: <?php echo $sign_font_size ?>px;color: #333333;margin-top: 0;margin-left: 0;margin-right: 0;margin-bottom: 10;"><span class="change_theme_p website_title" style="color: <?php echo $sign_text_color ?>;<?php
                                                                                                                                                                                                                                                                                                                                                            if (isset($signature) && $signature['website'] != '')
                                                                                                                                                                                                                                                                                                                                                                echo "";
                                                                                                                                                                                                                                                                                                                                                            else
                                                                                                                                                                                                                                                                                                                                                                echo "display:none;"
                                                                                                                                                                                                                                                                                                                                                            ?>">Website:</span> <a href="<?php if (isset($signature)) echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=personal&ident=website'); ?>" style="color:<?php echo $sign_link_color ?>;text-decoration:none;" class="link signature_website-target"><?php if (isset($signature)) echo $signature['website']; ?></a></p>
                        <p class="appstores-container" style="text-align:left;margin-top:10px;margin-bottom:10px;margin-left:0;margin-right:0;">
                            <?php if (isset($signature) && @$signature['appstore_link'] != '') { ?>
                                <a class="appstore signature_apple_app_store_link-target sig-hide" style="text-decoration:none;" href="<?php if (isset($signature)) echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=app&ident=appstore'); ?>">
                                    <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/apple.png') ?>" class="appstore-icon " alt="Download on the App Store" data-pin-nopin="true">
                                </a>
                            <?php } else { ?>
                                <a class="appstore signature_apple_app_store_link-target sig-hide" style="text-decoration:none;display: none;" href="#">
                                    <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/apple.png') ?>" class="appstore-icon " alt="Download on the App Store" data-pin-nopin="true">
                                </a>
                            <?php } ?>
                            <?php if (isset($signature) && @$signature['googleplaytore_link'] != '') { ?>

                                <a class="appstore signature_google_play_link-target sig-hide" style="text-decoration:none;" href="<?php if (isset($signature)) echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=app&ident=googleplaytore'); ?>">
                                    <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/google.png') ?>" class="appstore-icon " alt="Get it on Google Play">
                                </a>
                            <?php } else { ?>

                                <a class="appstore signature_google_play_link-target sig-hide" style="text-decoration:none;display: none;" href="#">
                                    <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/google.png') ?>" class="appstore-icon " alt="Get it on Google Play">
                                </a>
                            <?php } ?>
                            <?php if (isset($signature) && @$signature['amazon_link'] != '') { ?>

                                <a class="appstore signature_amazon_app_store_link-target sig-hide" style="text-decoration:none;" href="<?php if (isset($signature)) echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=app&ident=amazon'); ?>">
                                    <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/amazon.png') ?>" class="appstore-icon" alt="Available at Amazon">
                                </a>
                            <?php } else { ?>

                                <a class="appstore signature_amazon_app_store_link-target sig-hide" style="text-decoration:none;display: none;" href="#">
                                    <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/amazon.png') ?>" class="appstore-icon" alt="Available at Amazon">
                                </a>
                            <?php } ?>
                        </p>
                        <?php if (isset($signature) && $signature['banner'] != '') { ?>
                            <p class="ba-container" style="text-align:left;margin-top:15px;margin-bottom:15px;margin-left:0;margin-right:0;">
                                <a href="<?php if (isset($signature)) echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=banner'); ?>" class="signature_banner_url-target">
                                    <img src="<?php echo base_url() . SIGNATURE_UPLOADS_BANNER . $signature['banner'] ?>" alt="signaturia.com" border="0" class="sig-ba" data-pin-nopin="true" style="max-width:400px;height:auto;width:100%;" />
                                </a>
                            </p>
                        <?php } else { ?>
                            <p class="ba-container" style="display:none;text-align:left;margin-top:15px;margin-bottom:15px;margin-left:0;margin-right:0;">
                                <a href="<?php echo site_url('/') ?>" class="signature_banner_url-target">
                                    <img src="<?php echo base_url('assets/images/banner.png') ?>" alt="signaturia.com" border="0" class="sig-ba" data-pin-nopin="true" style="max-width:400px;height:auto;width:100%;" />
                                </a>
                            </p>
                        <?php } ?>
                        <p class="signature_disclaimer-target" style="text-align:left;line-height: 13px;font-weight: 400;font-size: 9px;color: #333333;margin:0;<?php if (isset($signature) && $signature['show_disclaimer'] == 0) echo 'display: none;' ?>"><?php if (isset($signature)) echo $signature['disclaimer'] ?></p>
                    </td>
                </tr>
            </tbody>
        </table>
        <p class="latest_tweet"></p>
        <div class="youtube_video"> <?php if (isset($signature) && $signature['youtube_video'] != '') { ?> <iframe width="120" height="90" src="<?php echo $signature['youtube_video'] ?>" frameborder="0" allowfullscreen></iframe> <?php } ?> </div>

    </div>
</div>
<div id="theme-6" class="preview" <?php echo $theme6_style ?>>
    <?php if (!isset($signature)) { ?>
        <div class="default_signature" style="max-width:600px;margin:0 auto;">
            <table style="margin-top: 0;margin-left: 0;margin-right: 0;margin-bottom: 10px;border-spacing: 0;border-collapse: collapse;width:100%;">
                <tbody>
                    <tr>
                        <td style="padding-left:10px;padding-right:10px;padding-top:10px;padding-bottom:10px;background:#eee;">
                            <table style="margin-top: 0;margin-left: 0;margin-right: 0;margin-bottom: 0;border-spacing: 0;border-collapse: collapse;width:100%;">
                                <tbody>
                                    <tr>
                                        <td min-width="80" valign="top" style="padding:0;">
                                            <img src="<?php echo $sign_logo ?>" alt="<?php echo site_url() ?>" border="0" class="sig-logo default" style="max-height:80px;width:80px;margin-bottom:0;" data-pin-nopin="true">
                                        </td>
                                        <td style="padding-left:15px;padding-top:0;padding-right:0;padding-bottom:0;" valign="top;">
                                            <h1 style="font-size: 18px;line-height:22px; margin-left: 0px;margin-right: 0px;margin-top: 0px;margin-bottom: 0;text-transform: uppercase;color: #4fb218;font-weight: bold;" class="signature_name-target change_theme_p">John Donga</h1>
                                            <h5 class="txt change_font signature_jobtitle-target" style="font-size: 12px;line-height:14px;color: #666;padding: 0;margin-left: 0px;margin-right: 0px;margin-top: 0px;margin-bottom: 10px;font-weight: 600;">senior content writer</h5>
                                            <div class="" style="">
                                                <ul class="change_font" style="margin-top: 0;margin-left: 0;margin-right: 0;margin-bottom: 0;padding: 0;list-style: none;text-align:left;font-size:12px;line-height:16px;margin-bottom:10px;">
                                                    <li style="margin-bottom: 0px;margin-right: 10px;margin-left: 0;display:inline-block;color:#333;"><span class="change_theme_p mobile_title" style="color: #4fb218;">Mobile:</span> <span class="txt signature_mobilephone-target">445-456-7890</span></li>
                                                    <li style="margin-bottom: 0px;margin-right: 10px;margin-left: 0;display:inline-block;color:#333;"><span class="change_theme_p fax_title" style="color: #4fb218;">fax:</span> <span class="txt signature_fax-target ">921-142-0666</span></li>
                                                    <li style="margin-bottom: 0px;margin-right: 10px;margin-left: 0;display:inline-block;color:#333;"><span class="change_theme_p email_title" style="color: #4fb218;">Email:</span> <a href="mailto:john@signaturia.com" style="color:#333;text-decoration:none;" class="link signature_email-target">john@signaturia.com</a></li>
                                                </ul>
                                                <p class="change_font" style="text-align:left;line-height: 16px;font-weight: 400;font-size: 12px;color: #333333;margin-top: 0;margin-left: 0;margin-right: 0;margin-bottom: 0;"><span class="change_theme_p signature_companyname-target" style="color: #4fb218;display:block;">Signaturia</span><span class="txt signature_address-target">32-black street, winter hour.United Kingdom 08808</span><span class="txt signature_address2-target"></span></p>
                                                <p class="change_font" style="text-align:left;line-height: 16px;font-weight: 400;font-size: 12px;color: #333333;margin-top: 0;margin-left: 0;margin-right: 0;margin-bottom: 10;"><span class="website_title change_theme_p" style="color: #4fb218;">Website:</span> <a href="http://www.chameleoninfotech.com/theme/htmlsig/www.signaturia.com" style="color:#333;text-decoration:none;" class="link signature_website-target">www.signaturia.com</a></p>
                                                <div class="social-list social_set_1" style="margin: 0;padding:0;text-align:left;">
                                                    <?php
                                                    foreach ($social_icons as $key => $social_icon) {
                                                        if ($key == 10) {
                                                            break;
                                                        }
                                                    ?>
                                                        <a style="text-decoration:none;display:inline-block;" class="social sig-hide" href="#">
                                                            <img width="20px" style="margin-bottom:2px;margin-right:2px; border:none; display:inline;" height="20px" data-filename="<?php echo $social_icon['icon1'] ?>" src="<?php echo base_url() . SOCIAL_ICONS_SET_1 . $social_icon['icon1'] ?>" alt="<?php echo $social_icon['name'] ?>">
                                                        </a>
                                                    <?php } ?>
                                                </div>
                                                <div class="social-list social_set_2" style="margin: 0;padding:0;text-align:left;display: none">
                                                    <?php
                                                    foreach ($social_icons as $key => $social_icon) {
                                                        if ($key == 10) {
                                                            break;
                                                        }
                                                    ?>
                                                        <a style="text-decoration:none;display:inline-block;" class="social" href="#"> <img width="20px" style="margin-bottom:2px;margin-right:2px; border:none; display:inline;" height="20px" src="<?php echo base_url() . SOCIAL_ICONS_SET_2 . $social_icon['icon2'] ?>" alt="" /></a>
                                                    <?php } ?>
                                                </div>
                                                <div class="social-list social_set_3" style="margin: 0;padding:0;text-align:left;display: none">
                                                    <?php
                                                    foreach ($social_icons as $key => $social_icon) {
                                                        if ($key == 10) {
                                                            break;
                                                        }
                                                    ?>
                                                        <a style="text-decoration:none;display:inline-block;" class="social" href="#"> <img width="20px" style="margin-bottom:2px;margin-right:2px; border:none; display:inline;" height="20px" src="<?php echo base_url() . SOCIAL_ICONS_SET_3 . $social_icon['icon3'] ?>" alt="" /></a>
                                                    <?php } ?>
                                                </div>
                                                <div class="social-list social_set_4" style="margin: 0;padding:0;text-align:left;display: none">
                                                    <?php
                                                    foreach ($social_icons as $key => $social_icon) {
                                                        if ($key == 10) {
                                                            break;
                                                        }
                                                    ?>
                                                        <a style="text-decoration:none;display:inline-block;" class="social" href="#"> <img width="20px" style="margin-bottom:2px;margin-right:2px; border:none; display:inline;" height="20px" src="<?php echo base_url() . SOCIAL_ICONS_SET_4 . $social_icon['icon4'] ?>" alt="" /></a>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="appstores-container" style="text-align:left;margin-top:10px;margin-bottom:10px;margin-left:0;margin-right:0;">
                                <a class="appstore signature_apple_app_store_link-target sig-hide" style="text-decoration:none;" href="#">
                                    <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/apple.png') ?>" class="appstore-icon " alt="Download on the App Store" data-pin-nopin="true"></a>
                                <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2">
                                <a class="appstore signature_google_play_link-target sig-hide" style="text-decoration:none;" href="#">
                                    <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/google.png') ?>" class="appstore-icon " alt="Get it on Google Play">
                                </a>
                                <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2">
                                <a class="appstore signature_amazon_app_store_link-target sig-hide" style="text-decoration:none;" href="#">
                                    <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/amazon.png') ?>" class="appstore-icon" alt="Available at Amazon">
                                </a>
                            </p>
                            <p class="signature_banner_url-target" style="text-align:left;margin-top:15px;margin-bottom:15px;margin-left:0;margin-right:0;">
                                <a href="#"> <img src="<?php echo base_url('assets/images/banner.png') ?>" alt="" border="0" width="300" data-pin-nopin="true" class="sig-ba"> </a>
                            </p>
                            <p class="signature_disclaimer-target" style="text-align:left;line-height: 13px;font-weight: 400;font-size: 9px;color: #333333;margin:0;">A disclaimer is generally any statement intended to specify or delimit the scope of rights and obligations that may be exercised and enforced by parties in a legally recognized relationship. In contrast to other terms for legally operative language, the term disclaimer usually implies situations that involve some level of uncertainty, waiver, or risk.</p>
                        </td>
                    </tr>
                </tbody>
            </table>
            <p class="latest_tweet"></p>
            <div class="youtube_video"> <?php if (isset($signature) && $signature['youtube_video'] != '') { ?> <iframe width="120" height="90" src="<?php echo $signature['youtube_video'] ?>" frameborder="0" allowfullscreen></iframe> <?php } ?> </div>

        </div>
    <?php } ?>
    <div class="new_signature" style="max-width:600px;<?php if (!isset($signature)) echo "display: none;" ?><?php echo $sign_font_style ?>">
        <table style="margin-top: 0;margin-left: 0;margin-right: 0;margin-bottom: 10px;border-spacing: 0;border-collapse: collapse;width:100%;">
            <tbody>
                <tr>
                    <td style="padding-left:10px;padding-right:10px;padding-top:10px;padding-bottom:10px;background:#eee;">
                        <table style="margin-top: 0;margin-left: 0;margin-right: 0;margin-bottom: 0;border-spacing: 0;border-collapse: collapse;width:100%;">
                            <tbody>
                                <tr>
                                    <td min-width="80" valign="top" style="padding:0;">
                                        <img src="<?php echo $sign_logo ?>" alt="<?php echo site_url() ?>" border="0" class="sig-logo default" style="max-height:80px;width:80px;margin-bottom:0;<?php echo $logo_style ?>" data-pin-nopin="true">
                                    </td>
                                    <td style="padding-left:15px;padding-top:0;padding-right:0;padding-bottom:0;" valign="top;">
                                        <h1 style="font-size: <?php echo $sign_font_size + 4 ?>px;line-height:<?php echo $sign_font_size + 8 ?>px; margin-left: 0px;margin-right: 0px;margin-top: 0px;margin-bottom: 0;text-transform: uppercase;color: <?php echo $sign_text_color ?>;font-weight: bold;" class="signature_name-target change_theme_p"><?php if (isset($signature)) echo $signature['name'] ?></h1>
                                        <h5 class="txt change_font signature_jobtitle-target" style="font-size: <?php echo $sign_font_size ?>px;line-height:<?php echo $sign_font_size + 4 ?>px;color: <?php echo $sign_p_text_color ?>;padding: 0;margin-left: 0px;margin-right: 0px;margin-top: 0px;margin-bottom: 10px;font-weight: 600;"><?php if (isset($signature)) echo $signature['job_title'] ?></h5>
                                        <div class="" style="">
                                            <ul class="change_font" style="margin-top: 0;margin-left: 0;margin-right: 0;margin-bottom: 0;padding: 0;list-style: none;text-align:left;font-size:<?php echo $sign_font_size ?>px;line-height:<?php echo $sign_font_size + 4 ?>px;margin-bottom:10px;">
                                                <li style="margin-bottom: 0px;margin-right: 10px;margin-left: 0;display:inline-block;color:#333;"><span class="change_theme_p mobile_title" style="color: <?php echo $sign_text_color ?>;<?php
                                                                                                                                                                                                                                            if (isset($signature) && $signature['mobile_number'] != '')
                                                                                                                                                                                                                                                echo "display:inline-block;";
                                                                                                                                                                                                                                            else
                                                                                                                                                                                                                                                echo "display:none;"
                                                                                                                                                                                                                                            ?>">Mobile:</span> <span class="txt signature_mobilephone-target" style="color:<?php echo $sign_p_text_color ?>;"><?php if (isset($signature)) echo $signature['mobile_number'] ?></span></li>
                                                <li style="margin-bottom: 0px;margin-right: 10px;margin-left: 0;display:inline-block;color:#333;"><span class="change_theme_p fax_title" style="color: <?php echo $sign_text_color ?>;<?php
                                                                                                                                                                                                                                        if (isset($signature) && $signature['fax'] != '')
                                                                                                                                                                                                                                            echo "display:inline-block;";
                                                                                                                                                                                                                                        else
                                                                                                                                                                                                                                            echo "display:none;"
                                                                                                                                                                                                                                        ?>">fax:</span> <span class="txt signature_fax-target" style="color:<?php echo $sign_p_text_color ?>;"><?php if (isset($signature)) echo $signature['fax'] ?></span></li>
                                                <li style="margin-bottom: 0px;margin-right: 10px;margin-left: 0;display:inline-block;color:#333;"><span class="change_theme_p email_title" style="color: <?php echo $sign_text_color ?>;<?php
                                                                                                                                                                                                                                        if (isset($signature) && $signature['email'] != '')
                                                                                                                                                                                                                                            echo "display:inline-block;";
                                                                                                                                                                                                                                        else
                                                                                                                                                                                                                                            echo "display:none;"
                                                                                                                                                                                                                                        ?>">Email:</span> <a href="<?php if (isset($signature)) echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=personal&ident=email') ?>" style="color:<?php echo $sign_link_color ?>;text-decoration:none;" class="link signature_email-target"><?php if (isset($signature)) echo $signature['email'] ?></a></li>
                                            </ul>
                                            <p class="change_font" style="text-align:left;line-height: <?php echo $sign_font_size + 4 ?>px;font-weight: 400;font-size: <?php echo $sign_font_size ?>px;color: #333333;margin-top: 0;margin-left: 0;margin-right: 0;margin-bottom: 0;"><span class="change_theme_p signature_companyname-target" style="color: <?php echo $sign_text_color ?>;display:block;"><?php if (isset($signature)) echo $signature['company_name'] ?></span><span class="txt signature_address-target" style="color:<?php echo $sign_p_text_color ?>;"><?php if (isset($signature)) echo $signature['address']; ?></span><span class="signature_address2-target txt" style="color:<?php echo $sign_p_text_color ?>;"><?php if (isset($signature)) echo '<br/>' . $signature['address_line2']; ?></span></p>
                                            <p class="change_font" style="text-align:left;line-height: <?php echo $sign_font_size + 4 ?>px;font-weight: 400;font-size: <?php echo $sign_font_size ?>px;color: #333333;margin-top: 0;margin-left: 0;margin-right: 0;margin-bottom: 10;"><span class="website_title change_theme_p " style="color: <?php echo $sign_text_color ?>;<?php
                                                                                                                                                                                                                                                                                                                                                                                if (isset($signature) && $signature['website'] != '')
                                                                                                                                                                                                                                                                                                                                                                                    echo "";
                                                                                                                                                                                                                                                                                                                                                                                else
                                                                                                                                                                                                                                                                                                                                                                                    echo "display:none;"
                                                                                                                                                                                                                                                                                                                                                                                ?>">Website:</span> <a href="<?php if (isset($signature)) echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=personal&ident=website'); ?>" style="color:<?php echo $sign_link_color ?>;text-decoration:none;" class="link signature_website-target"><?php if (isset($signature)) echo $signature['website']; ?></a></p>
                                            <div class="social-list social_set_1" style="margin: 0;padding:0;text-align:left;<?php echo $social1_style; ?>">
                                                <?php
                                                foreach ($social_icons as $key => $social_icon) {
                                                    $style = "display:none;";
                                                    if (isset($signature_socials)) {
                                                        if (array_key_exists($social_icon['id'], $signature_socials)) {
                                                            $style = 'display:inline-block;';
                                                        }
                                                    }
                                                ?>

                                                    <a style="<?php echo $style ?> text-decoration:none;" class="social <?php echo "signature_social_" . $social_icon['id'] . "-target" ?> sig-hide" href="<?php echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=social&ident=' . $social_icon['id']) ?>">
                                                        <img width="<?php echo $sign_iconsize ?>px" style="margin-bottom:2px;margin-right:2px; border:none; display:inline;" height="<?php echo $sign_iconsize ?>px" data-filename="<?php echo $social_icon['icon1'] ?>" src="<?php echo base_url() . SOCIAL_ICONS_SET_1 . $social_icon['icon1'] ?>" alt="<?php echo $social_icon['name'] ?>">
                                                    </a>
                                                <?php } ?>
                                            </div>
                                            <div class="social-list social_set_2" style="margin: 0;padding:0;text-align:left;<?php echo $social2_style; ?>">
                                                <?php
                                                foreach ($social_icons as $key => $social_icon) {
                                                    $style = "display:none;";
                                                    if (isset($signature_socials)) {
                                                        if (array_key_exists($social_icon['id'], $signature_socials)) {
                                                            $style = '';
                                                        }
                                                    }
                                                ?>

                                                    <a style="<?php echo $style ?> text-decoration:none;" class="social <?php echo "signature_social_" . $social_icon['id'] . "-target" ?> sig-hide" href="<?php echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=social&ident=' . $social_icon['id']) ?>">
                                                        <img width="<?php echo $sign_iconsize ?>px" style="margin-bottom:2px;margin-right:2px; border:none; display:inline;" height="<?php echo $sign_iconsize ?>px" data-filename="<?php echo $social_icon['icon2'] ?>" src="<?php echo base_url() . SOCIAL_ICONS_SET_2 . $social_icon['icon2'] ?>" alt="<?php echo $social_icon['name'] ?>">
                                                    </a>
                                                <?php } ?>
                                            </div>
                                            <div class="social-list social_set_3" style="margin: 0;padding:0;text-align:left;<?php echo $social3_style; ?>">
                                                <?php
                                                foreach ($social_icons as $key => $social_icon) {
                                                    $style = "display:none;";
                                                    if (isset($signature_socials)) {
                                                        if (array_key_exists($social_icon['id'], $signature_socials)) {
                                                            $style = '';
                                                        }
                                                    }
                                                ?>

                                                    <a style="<?php echo $style ?> text-decoration:none;" class="social <?php echo "signature_social_" . $social_icon['id'] . "-target" ?> sig-hide" href="<?php echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=social&ident=' . $social_icon['id']) ?>">
                                                        <img width="<?php echo $sign_iconsize ?>px" style="margin-bottom:2px;margin-right:2px; border:none; display:inline;" height="<?php echo $sign_iconsize ?>px" data-filename="<?php echo $social_icon['icon3'] ?>" src="<?php echo base_url() . SOCIAL_ICONS_SET_3 . $social_icon['icon3'] ?>" alt="<?php echo $social_icon['name'] ?>">
                                                    </a>
                                                <?php } ?>
                                            </div>
                                            <div class="social-list social_set_4" style="margin: 0;padding:0;text-align:left;<?php echo $social4_style; ?>">
                                                <?php
                                                foreach ($social_icons as $key => $social_icon) {
                                                    $style = "display:none;";
                                                    if (isset($signature_socials)) {
                                                        if (array_key_exists($social_icon['id'], $signature_socials)) {
                                                            $style = '';
                                                        }
                                                    }
                                                ?>
                                                    <a style="<?php echo $style ?> text-decoration:none;" class="social <?php echo "signature_social_" . $social_icon['id'] . "-target" ?> sig-hide" href="<?php echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=social&ident=' . $social_icon['id']) ?>">
                                                        <img width="<?php echo $sign_iconsize ?>px" style="margin-bottom:2px;margin-right:2px; border:none; display:inline;" height="<?php echo $sign_iconsize ?>px" data-filename="<?php echo $social_icon['icon4'] ?>" src="<?php echo base_url() . SOCIAL_ICONS_SET_4 . $social_icon['icon4'] ?>" alt="<?php echo $social_icon['name'] ?>">
                                                    </a>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="appstores-container" style="text-align:left;margin-top:10px;margin-bottom:10px;margin-left:0;margin-right:0;">
                            <?php if (isset($signature) && @$signature['appstore_link'] != '') { ?>
                                <a class="appstore signature_apple_app_store_link-target sig-hide" style="text-decoration:none;" href="<?php if (isset($signature)) echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=app&ident=appstore'); ?>">
                                    <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/apple.png') ?>" class="appstore-icon " alt="Download on the App Store" data-pin-nopin="true">
                                </a>
                            <?php } else { ?>
                                <a class="appstore signature_apple_app_store_link-target sig-hide" style="text-decoration:none;display: none;" href="#">
                                    <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/apple.png') ?>" class="appstore-icon " alt="Download on the App Store" data-pin-nopin="true">
                                </a>
                            <?php } ?>
                            <?php if (isset($signature) && @$signature['googleplaytore_link'] != '') { ?>

                                <a class="appstore signature_google_play_link-target sig-hide" style="text-decoration:none;" href="<?php if (isset($signature)) echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=app&ident=googleplaytore'); ?>">
                                    <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/google.png') ?>" class="appstore-icon " alt="Get it on Google Play">
                                </a>
                            <?php } else { ?>

                                <a class="appstore signature_google_play_link-target sig-hide" style="text-decoration:none;display: none;" href="#">
                                    <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/google.png') ?>" class="appstore-icon " alt="Get it on Google Play">
                                </a>
                            <?php } ?>
                            <?php if (isset($signature) && @$signature['amazon_link'] != '') { ?>

                                <a class="appstore signature_amazon_app_store_link-target sig-hide" style="text-decoration:none;" href="<?php if (isset($signature)) echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=app&ident=amazon'); ?>">
                                    <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/amazon.png') ?>" class="appstore-icon" alt="Available at Amazon">
                                </a>
                            <?php } else { ?>

                                <a class="appstore signature_amazon_app_store_link-target sig-hide" style="text-decoration:none;display: none;" href="#">
                                    <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/amazon.png') ?>" class="appstore-icon" alt="Available at Amazon">
                                </a>
                            <?php } ?>
                        </p>
                        <?php if (isset($signature) && $signature['banner'] != '') { ?>
                            <p class="ba-container" style="text-align:left;margin-top:15px;margin-bottom:15px;margin-left:0;margin-right:0;">
                                <a href="<?php if (isset($signature)) echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=banner'); ?>" class="signature_banner_url-target">
                                    <img src="<?php echo base_url() . SIGNATURE_UPLOADS_BANNER . $signature['banner'] ?>" alt="signaturia.com" border="0" class="sig-ba" data-pin-nopin="true" style="max-width:400px;height:auto;width:100%;" />
                                </a>
                            </p>
                        <?php } else { ?>
                            <p class="ba-container" style="display:none;text-align:left;margin-top:15px;margin-bottom:15px;margin-left:0;margin-right:0;">
                                <a href="<?php echo site_url('/') ?>" class="signature_banner_url-target">
                                    <img src="<?php echo base_url('assets/images/banner.png') ?>" alt="signaturia.com" border="0" class="sig-ba" data-pin-nopin="true" style="max-width:400px;height:auto;width:100%;" />
                                </a>
                            </p>
                        <?php } ?>
                        <p class="signature_disclaimer-target" style="text-align:left;line-height: 13px;font-weight: 400;font-size: 9px;color: #333333;margin:0;<?php if (isset($signature) && $signature['show_disclaimer'] == 0) echo 'display: none;' ?>"><?php if (isset($signature)) echo $signature['disclaimer'] ?></p>
                    </td>
                </tr>
            </tbody>
        </table>
        <p class="latest_tweet"></p>
        <div class="youtube_video"> <?php if (isset($signature) && $signature['youtube_video'] != '') { ?> <iframe width="120" height="90" src="<?php echo $signature['youtube_video'] ?>" frameborder="0" allowfullscreen></iframe> <?php } ?> </div>

    </div>
</div>
<div id="theme-7" class="preview" <?php echo $theme7_style ?>>
    <?php if (!isset($signature)) { ?>
        <div class="default_signature" style="max-width:600px;margin: 0 auto;">
            <table style="margin-top: 0;margin-left: 0;margin-right: 0;margin-bottom: 10px;border-spacing: 0;border-collapse: collapse;width:100%;">
                <tbody>
                    <tr>
                        <td>
                            <table style="margin-top: 0;margin-left: 0;margin-right: 0;margin-bottom: 10px;border-spacing: 0;border-collapse: collapse;width:100%;">
                                <tbody>
                                    <tr>
                                        <td min-width="80" valign="top" style="padding:0;"><img src="<?php echo $sign_logo ?>" alt="<?php echo site_url() ?>" border="0" class="sig-logo default" style="max-height:80px;width:80px;margin-bottom:0;" data-pin-nopin="true"></td>
                                        <td class="change_theme_background" style="padding-left:15px;padding-top:10px;padding-right:15px;padding-bottom:10px;background:#4fb218;color:#fff;" valign="top;">
                                            <h1 class="signature_name-target" style="font-size: <?php echo $sign_font_size + 4 ?>px;line-height:<?php echo $sign_font_size + 8 ?>px; margin: 0px;text-transform: uppercase;color: #fff;font-weight: bold;">JOHN DONGA</h1>
                                            <h5 class="signature_jobtitle-target change_font" style="font-size: <?php echo $sign_font_size ?>px;line-height:<?php echo $sign_font_size + 4 ?>px;color: #fff;padding-bottom: 0;padding-top: 2px;font-weight: 500;margin: 0px;">senior content writer</h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td style="padding-top:15px;">
                                            <div class="" style="">
                                                <ul class="change_font" style="margin-top: 0;margin-left: 0;margin-right: 0;margin-bottom: 0;padding: 0;list-style: none;text-align:left;font-size:12px;line-height:16px;margin-bottom:10px;">
                                                    <li style="margin-bottom: 0px;margin-right: 10px;margin-left: 0;display:inline-block;color:#333;"><span class="mobile_title change_theme_p" style="color: #4fb218;">Mobile:</span> <span class="txt signature_mobilephone-target">445-456-7890</span></li>
                                                    <li style="margin-bottom: 0px;margin-right: 10px;margin-left: 0;display:inline-block;color:#333;"><span class="fax_title change_theme_p" style="color: #4fb218;">fax:</span> <span class="txt signature_fax-target">921-142-0666</span></li>
                                                    <li style="margin-bottom: 0px;margin-right: 10px;margin-left: 0;display:inline-block;color:#333;"><span class="email_title change_theme_p" style="color: #4fb218;">Email:</span> <a href="mailto:john@signaturia.com" style="color:#333;text-decoration:none;" class="link signature_email-target">john@signaturia.com</a></li>
                                                </ul>
                                                <p class="change_font" style="text-align:left;line-height: 16px;font-weight: 400;font-size: 12px;color: #333333;margin-top: 0;margin-left: 0;margin-right: 0;margin-bottom: 0;"><span class="change_theme_p signature_companyname-target" style="color: #4fb218;display:block;">Signaturia</span><span class="txt signature_address-target">32-black street, winter hour.United Kingdom 08808</span><span class="txt signature_address2-target"></span></p>
                                                <p class="change_font" style="text-align:left;line-height: 16px;font-weight: 400;font-size: 12px;color: #333333;margin-top: 0;margin-left: 0;margin-right: 0;margin-bottom: 10;"><span class="change_theme_p website_title" style="color: #4fb218;">Website:</span> <a href="<?php echo site_url() ?>" style="color:#333;text-decoration:none;" class="link signature_website-target">www.signaturia.com</a></p>
                                                <div class="social-list social_set_1" style="margin: 0;padding:0;text-align:left;">
                                                    <?php
                                                    foreach ($social_icons as $key => $social_icon) {
                                                        if ($key == 10) {
                                                            break;
                                                        }
                                                    ?>
                                                        <a style="text-decoration:none;display:inline-block;" class="social sig-hide" href="#">
                                                            <img width="20px" style="margin-bottom:2px;margin-right:2px; border:none; display:inline;" height="20px" data-filename="<?php echo $social_icon['icon1'] ?>" src="<?php echo base_url() . SOCIAL_ICONS_SET_1 . $social_icon['icon1'] ?>" alt="<?php echo $social_icon['name'] ?>">
                                                        </a>
                                                    <?php } ?>
                                                </div>
                                                <div class="social-list social_set_2" style="margin: 0;padding:0;text-align:left;display: none">
                                                    <?php
                                                    foreach ($social_icons as $key => $social_icon) {
                                                        if ($key == 10) {
                                                            break;
                                                        }
                                                    ?>
                                                        <a style="text-decoration:none;display:inline-block;" class="social" href="#"> <img width="20px" style="margin-bottom:2px;margin-right:2px; border:none; display:inline;" height="20px" src="<?php echo base_url() . SOCIAL_ICONS_SET_2 . $social_icon['icon2'] ?>" alt="" /></a>
                                                    <?php } ?>
                                                </div>
                                                <div class="social-list social_set_3" style="margin: 0;padding:0;text-align:left;display: none">
                                                    <?php
                                                    foreach ($social_icons as $key => $social_icon) {
                                                        if ($key == 10) {
                                                            break;
                                                        }
                                                    ?>
                                                        <a style="text-decoration:none;display:inline-block;" class="social" href="#"> <img width="20px" style="margin-bottom:2px;margin-right:2px; border:none; display:inline;" height="20px" src="<?php echo base_url() . SOCIAL_ICONS_SET_3 . $social_icon['icon3'] ?>" alt="" /></a>
                                                    <?php } ?>
                                                </div>
                                                <div class="social-list social_set_4" style="margin: 0;padding:0;text-align:left;display: none">
                                                    <?php
                                                    foreach ($social_icons as $key => $social_icon) {
                                                        if ($key == 10) {
                                                            break;
                                                        }
                                                    ?>
                                                        <a style="text-decoration:none;display:inline-block;" class="social" href="#"> <img width="20px" style="margin-bottom:2px;margin-right:2px; border:none; display:inline;" height="20px" src="<?php echo base_url() . SOCIAL_ICONS_SET_4 . $social_icon['icon4'] ?>" alt="" /></a>
                                                    <?php } ?>
                                                </div>
                                                <p class="signature_banner_url-target" style="text-align:left;margin-top:15px;margin-bottom:15px;margin-left:0;margin-right:0;">
                                                    <a href="#"> <img src="<?php echo base_url('assets/images/banner.png') ?>" alt="" border="0" width="300" data-pin-nopin="true" class="sig-ba"> </a>
                                                </p>

                                                <p class="appstores-container" style="text-align:left;margin-top:10px;margin-bottom:10px;margin-left:0;margin-right:0;">
                                                    <a class="appstore signature_apple_app_store_link-target sig-hide" style="text-decoration:none;" href="#">
                                                        <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/apple.png') ?>" class="appstore-icon " alt="Download on the App Store" data-pin-nopin="true"></a>
                                                    <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2">
                                                    <a class="appstore signature_google_play_link-target sig-hide" style="text-decoration:none;" href="#">
                                                        <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/google.png') ?>" class="appstore-icon " alt="Get it on Google Play">
                                                    </a>
                                                    <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2">
                                                    <a class="appstore signature_amazon_app_store_link-target sig-hide" style="text-decoration:none;" href="#">
                                                        <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/amazon.png') ?>" class="appstore-icon" alt="Available at Amazon">
                                                    </a>
                                                </p>

                                                <p class="signature_disclaimer-target" style="text-align:left;line-height: 13px;font-weight: 400;font-size: 9px;color: #333333;margin:0;">A disclaimer is generally any statement intended to specify or delimit the scope of rights and obligations that may be exercised and enforced by parties in a legally recognized relationship. In contrast to other terms for legally operative language, the term disclaimer usually implies situations that involve some level of uncertainty, waiver, or risk.</p>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                </tbody>
            </table>
            <p class="latest_tweet"></p>
            <div class="youtube_video"> <?php if (isset($signature) && $signature['youtube_video'] != '') { ?> <iframe width="120" height="90" src="<?php echo $signature['youtube_video'] ?>" frameborder="0" allowfullscreen></iframe> <?php } ?> </div>

        </div>
    <?php } ?>
    <div class="new_signature" style="max-width:600px;<?php if (!isset($signature)) echo "display: none;" ?><?php echo $sign_font_style ?>">
        <table style="margin-top: 0;margin-left: 0;margin-right: 0;margin-bottom: 10px;border-spacing: 0;border-collapse: collapse;width:100%;">
            <tbody>
                <tr>
                    <td>
                        <table style="margin-top: 0;margin-left: 0;margin-right: 0;margin-bottom: 10px;border-spacing: 0;border-collapse: collapse;width:100%;">
                            <tbody>
                                <tr>
                                    <td min-width="80" valign="top" style="padding:0;"><img src="<?php echo $sign_logo ?>" alt="<?php echo site_url() ?>" border="0" class="sig-logo default" style="max-height:80px;width:80px;margin-bottom:0;<?php echo $logo_style ?>" data-pin-nopin="true"></td>
                                    <td class="change_theme_background" style="padding-left:15px;padding-top:10px;padding-right:15px;padding-bottom:10px;background:<?php echo $sign_text_color ?>;color:#fff;" valign="top;">
                                        <h1 class="signature_name-target" style="font-size: <?php echo $sign_font_size + 4 ?>px;line-height:<?php echo $sign_font_size + 8 ?>px; margin: 0px;text-transform: uppercase;color: #fff;font-weight: bold;"><?php if (isset($signature)) echo $signature['name'] ?></h1>
                                        <h5 class="signature_jobtitle-target change_font" style="font-size: <?php echo $sign_font_size ?>px;line-height:<?php echo $sign_font_size + 4 ?>px;color: #fff;padding-bottom: 0;padding-top: 2px;font-weight: 500;margin: 0px;"><?php if (isset($signature)) echo $signature['job_title'] ?></h5>
                                    </td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td style="padding-top:15px;">
                                        <div class="" style="">
                                            <ul class="change_font" style="margin-top: 0;margin-left: 0;margin-right: 0;margin-bottom: 0;padding: 0;list-style: none;text-align:left;font-size:<?php echo $sign_font_size ?>px;line-height:<?php echo $sign_font_size + 4 ?>px;margin-bottom:10px;">
                                                <li style="margin-bottom: 0px;margin-right: 10px;margin-left: 0;display:inline-block;color:#333;"><span class="mobile_title change_theme_p" style="color: <?php echo $sign_text_color ?>;<?php
                                                                                                                                                                                                                                            if (isset($signature) && $signature['mobile_number'] != '')
                                                                                                                                                                                                                                                echo "display:inline-block;";
                                                                                                                                                                                                                                            else
                                                                                                                                                                                                                                                echo "display:none;"
                                                                                                                                                                                                                                            ?>">Mobile:</span> <span class="txt signature_mobilephone-target" style="color: <?php echo $sign_p_text_color ?>;"><?php if (isset($signature)) echo $signature['mobile_number'] ?></span></li>
                                                <li style="margin-bottom: 0px;margin-right: 10px;margin-left: 0;display:inline-block;color:#333;"><span class="fax_title change_theme_p" style="color: <?php echo $sign_text_color ?>;<?php
                                                                                                                                                                                                                                        if (isset($signature) && $signature['fax'] != '')
                                                                                                                                                                                                                                            echo "display:inline-block;";
                                                                                                                                                                                                                                        else
                                                                                                                                                                                                                                            echo "display:none;"
                                                                                                                                                                                                                                        ?>">fax:</span> <span class="txt signature_fax-target" style="color: <?php echo $sign_p_text_color ?>;"><?php if (isset($signature)) echo $signature['fax'] ?></span></li>
                                                <li style="margin-bottom: 0px;margin-right: 10px;margin-left: 0;display:inline-block;color:#333;"><span class="email_title change_theme_p" style="color: <?php echo $sign_text_color ?>;<?php
                                                                                                                                                                                                                                        if (isset($signature) && $signature['email'] != '')
                                                                                                                                                                                                                                            echo "display:inline-block;";
                                                                                                                                                                                                                                        else
                                                                                                                                                                                                                                            echo "display:none;"
                                                                                                                                                                                                                                        ?>">Email:</span> <a href="<?php if (isset($signature)) echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=personal&ident=email') ?>" style="color:<?php echo $sign_link_color ?>;text-decoration:none;" class="link signature_email-target"><?php if (isset($signature)) echo $signature['email'] ?></a></li>
                                            </ul>
                                            <p class="change_font" style="text-align:left;line-height: <?php echo $sign_font_size + 4 ?>px;font-weight: 400;font-size: <?php echo $sign_font_size ?>px;color: #333333;margin-top: 0;margin-left: 0;margin-right: 0;margin-bottom: 0;"><span class="change_theme_p signature_companyname-target" style="color: <?php echo $sign_text_color ?>;display:block;"><?php if (isset($signature)) echo $signature['company_name'] ?></span><span class="txt signature_address-target" style="color:<?php echo $sign_p_text_color ?>"><?php if (isset($signature)) echo $signature['address']; ?></span><span class="txt signature_address2-target" style="color:<?php echo $sign_p_text_color ?>"><?php if (isset($signature)) echo '<br/>' . $signature['address_line2']; ?></span></p>
                                            <p class="change_font" style="text-align:left;line-height: <?php echo $sign_font_size + 4 ?>px;font-weight: 400;font-size: <?php echo $sign_font_size ?>px;color: #333333;margin-top: 0;margin-left: 0;margin-right: 0;margin-bottom: 10;"><span class="change_theme_p website_title" style="color: <?php echo $sign_text_color ?>;<?php
                                                                                                                                                                                                                                                                                                                                                                                if (isset($signature) && $signature['website'] != '')
                                                                                                                                                                                                                                                                                                                                                                                    echo "";
                                                                                                                                                                                                                                                                                                                                                                                else
                                                                                                                                                                                                                                                                                                                                                                                    echo "display:none;"
                                                                                                                                                                                                                                                                                                                                                                                ?>">Website:</span> <a href="<?php if (isset($signature)) echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=personal&ident=website'); ?>" style="color:<?php echo $sign_link_color ?>;text-decoration:none;" class="link signature_website-target"><?php if (isset($signature)) echo $signature['website']; ?></a></p>
                                            <div class="social-list social_set_1" style="margin: 0;padding:0;text-align:left;<?php echo $social1_style; ?>">
                                                <?php
                                                foreach ($social_icons as $key => $social_icon) {
                                                    $style = "display:none;";
                                                    if (isset($signature_socials)) {
                                                        if (array_key_exists($social_icon['id'], $signature_socials)) {
                                                            $style = 'display:inline-block;';
                                                        }
                                                    }
                                                ?>

                                                    <a style="<?php echo $style ?> text-decoration:none;" class="social <?php echo "signature_social_" . $social_icon['id'] . "-target" ?> sig-hide" href="<?php echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=social&ident=' . $social_icon['id']) ?>">
                                                        <img width="<?php echo $sign_iconsize ?>px" style="margin-bottom:2px;margin-right:2px; border:none; display:inline;" height="<?php echo $sign_iconsize ?>px" data-filename="<?php echo $social_icon['icon1'] ?>" src="<?php echo base_url() . SOCIAL_ICONS_SET_1 . $social_icon['icon1'] ?>" alt="<?php echo $social_icon['name'] ?>">
                                                    </a>
                                                <?php } ?>
                                            </div>
                                            <div class="social-list social_set_2" style="margin: 0;padding:0;text-align:left;<?php echo $social2_style; ?>">
                                                <?php
                                                foreach ($social_icons as $key => $social_icon) {
                                                    $style = "display:none;";
                                                    if (isset($signature_socials)) {
                                                        if (array_key_exists($social_icon['id'], $signature_socials)) {
                                                            $style = '';
                                                        }
                                                    }
                                                ?>

                                                    <a style="<?php echo $style ?> text-decoration:none;" class="social <?php echo "signature_social_" . $social_icon['id'] . "-target" ?> sig-hide" href="<?php echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=social&ident=' . $social_icon['id']) ?>">
                                                        <img width="<?php echo $sign_iconsize ?>px" style="margin-bottom:2px;margin-right:2px; border:none; display:inline;" height="<?php echo $sign_iconsize ?>px" data-filename="<?php echo $social_icon['icon2'] ?>" src="<?php echo base_url() . SOCIAL_ICONS_SET_2 . $social_icon['icon2'] ?>" alt="<?php echo $social_icon['name'] ?>">
                                                    </a>
                                                <?php } ?>
                                            </div>
                                            <div class="social-list social_set_3" style="margin: 0;padding:0;text-align:left;<?php echo $social3_style; ?>">
                                                <?php
                                                foreach ($social_icons as $key => $social_icon) {
                                                    $style = "display:none;";
                                                    if (isset($signature_socials)) {
                                                        if (array_key_exists($social_icon['id'], $signature_socials)) {
                                                            $style = '';
                                                        }
                                                    }
                                                ?>

                                                    <a style="<?php echo $style ?> text-decoration:none;" class="social <?php echo "signature_social_" . $social_icon['id'] . "-target" ?> sig-hide" href="<?php echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=social&ident=' . $social_icon['id']) ?>">
                                                        <img width="<?php echo $sign_iconsize ?>px" style="margin-bottom:2px;margin-right:2px; border:none; display:inline;" height="<?php echo $sign_iconsize ?>px" data-filename="<?php echo $social_icon['icon3'] ?>" src="<?php echo base_url() . SOCIAL_ICONS_SET_3 . $social_icon['icon3'] ?>" alt="<?php echo $social_icon['name'] ?>">
                                                    </a>
                                                <?php } ?>
                                            </div>
                                            <div class="social-list social_set_4" style="margin: 0;padding:0;text-align:left;<?php echo $social4_style; ?>">
                                                <?php
                                                foreach ($social_icons as $key => $social_icon) {
                                                    $style = "display:none;";
                                                    if (isset($signature_socials)) {
                                                        if (array_key_exists($social_icon['id'], $signature_socials)) {
                                                            $style = '';
                                                        }
                                                    }
                                                ?>
                                                    <a style="<?php echo $style ?> text-decoration:none;" class="social <?php echo "signature_social_" . $social_icon['id'] . "-target" ?> sig-hide" href="<?php echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=social&ident=' . $social_icon['id']) ?>">
                                                        <img width="<?php echo $sign_iconsize ?>px" style="margin-bottom:2px;margin-right:2px; border:none; display:inline;" height="<?php echo $sign_iconsize ?>px" data-filename="<?php echo $social_icon['icon4'] ?>" src="<?php echo base_url() . SOCIAL_ICONS_SET_4 . $social_icon['icon4'] ?>" alt="<?php echo $social_icon['name'] ?>">
                                                    </a>
                                                <?php } ?>
                                            </div>
                                            <?php if (isset($signature) && $signature['banner'] != '') { ?>
                                                <p class="ba-container" style="text-align:left;margin-top:15px;margin-bottom:15px;margin-left:0;margin-right:0;">
                                                    <a href="<?php if (isset($signature)) echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=banner'); ?>" class="signature_banner_url-target">
                                                        <img src="<?php echo base_url() . SIGNATURE_UPLOADS_BANNER . $signature['banner'] ?>" alt="signaturia.com" border="0" class="sig-ba" data-pin-nopin="true" style="max-width:400px;height:auto;width:100%;" />
                                                    </a>
                                                </p>
                                            <?php } else { ?>
                                                <p class="ba-container" style="display:none;text-align:left;margin-top:15px;margin-bottom:15px;margin-left:0;margin-right:0;">
                                                    <a href="<?php echo site_url('/') ?>" class="signature_banner_url-target">
                                                        <img src="<?php echo base_url('assets/images/banner.png') ?>" alt="signaturia.com" border="0" class="sig-ba" data-pin-nopin="true" style="max-width:400px;height:auto;width:100%;" />
                                                    </a>
                                                </p>
                                            <?php } ?>

                                            <p class="appstores-container" style="text-align:left;margin-top:10px;margin-bottom:10px;margin-left:0;margin-right:0;">
                                                <?php if (isset($signature) && @$signature['appstore_link'] != '') { ?>
                                                    <a class="appstore signature_apple_app_store_link-target sig-hide" style="text-decoration:none;" href="<?php if (isset($signature)) echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=app&ident=appstore'); ?>">
                                                        <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/apple.png') ?>" class="appstore-icon " alt="Download on the App Store" data-pin-nopin="true">
                                                    </a>
                                                <?php } else { ?>
                                                    <a class="appstore signature_apple_app_store_link-target sig-hide" style="text-decoration:none;display: none;" href="#">
                                                        <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/apple.png') ?>" class="appstore-icon " alt="Download on the App Store" data-pin-nopin="true">
                                                    </a>
                                                <?php } ?>
                                                <?php if (isset($signature) && @$signature['googleplaytore_link'] != '') { ?>

                                                    <a class="appstore signature_google_play_link-target sig-hide" style="text-decoration:none;" href="<?php if (isset($signature)) echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=app&ident=googleplaytore'); ?>">
                                                        <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/google.png') ?>" class="appstore-icon " alt="Get it on Google Play">
                                                    </a>
                                                <?php } else { ?>

                                                    <a class="appstore signature_google_play_link-target sig-hide" style="text-decoration:none;display: none;" href="#">
                                                        <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/google.png') ?>" class="appstore-icon " alt="Get it on Google Play">
                                                    </a>
                                                <?php } ?>
                                                <?php if (isset($signature) && @$signature['amazon_link'] != '') { ?>

                                                    <a class="appstore signature_amazon_app_store_link-target sig-hide" style="text-decoration:none;" href="<?php if (isset($signature)) echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=app&ident=amazon'); ?>">
                                                        <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/amazon.png') ?>" class="appstore-icon" alt="Available at Amazon">
                                                    </a>
                                                <?php } else { ?>

                                                    <a class="appstore signature_amazon_app_store_link-target sig-hide" style="text-decoration:none;display: none;" href="#">
                                                        <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/amazon.png') ?>" class="appstore-icon" alt="Available at Amazon">
                                                    </a>
                                                <?php } ?>
                                            </p>
                                            <p class="signature_disclaimer-target" style="text-align:left;line-height: 13px;font-weight: 400;font-size: 9px;color:#333333;margin:0;<?php if (isset($signature) && $signature['show_disclaimer'] == 0) echo 'display: none;' ?>"><?php if (isset($signature)) echo $signature['disclaimer'] ?></p>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        <p class="latest_tweet"></p>
        <div class="youtube_video"> <?php if (isset($signature) && $signature['youtube_video'] != '') { ?> <iframe width="120" height="90" src="<?php echo $signature['youtube_video'] ?>" frameborder="0" allowfullscreen></iframe> <?php } ?> </div>


    </div>
</div>
<div id="theme-8" class="preview" <?php echo $theme8_style ?>>
    <?php if (!isset($signature)) { ?>
        <div class="default_signature" style="max-width:600px;margin:0 auto;">
            <table style="margin-top: 0;margin-left: 0;margin-right: 0;margin-bottom: 10px;border-spacing: 0;border-collapse: collapse;width:100%;">
                <tr>
                    <td style="">
                        <table style="margin-top: 0;margin-left: 0;margin-right: 0;margin-bottom: 0;border-spacing: 0;border-collapse: collapse;width:100%;">
                            <tr>
                                <td align="center" style="padding-left:0;padding-top:0;padding-bottom:10px;">
                                    <img src="<?php echo base_url('assets/images/logo3.png') ?>" alt="<?php echo site_url() ?>" border="0" class="default sig-logo" style="margin-bottom:0;margin-bottom:0;margin-left:0;margin-right:0;margin-top:0;max-width:100%;max-height:40px;" data-pin-nopin="true">
                                </td>
                            </tr>
                            <tr>
                                <td style="padding-left:0;padding-top:0;padding-right:0;padding-bottom:0;" valign="middle" align="center">
                                    <div class="change_theme_border_1 change_theme_p" style="padding-left:10px;padding-right:10px;padding-top:10px;padding-bottom:10px;background:none;border-radius:0;margin-bottom:10px;text-align:center;border:solid 1px #4fb218;">
                                        <h1 style="font-size: 18px;line-height:22px; margin-left: 0px;margin-right: 0px;margin-top: 0px;margin-bottom: 10px;text-transform: uppercase;color: #4fb218;font-weight: bold; vertical-align:middle;"><span class="signature_name-target change_theme_p">John Donga </span><span class="signature_jobtitle-target add-braces change_font" style="text-transform: none;display:inline-block;font-size: 12px;color: #aaa;padding: 0;margin-left: 0px;margin-right: 0px;margin-top: 0px;margin-bottom: 0;font-weight: 400;">(senior content writer)</span></h1>
                                        <ul class="change_font" style="margin-top: 0;margin-left: 0;margin-right: 0;padding: 0;list-style: none;text-align:center;font-size:12px;line-height:16px;margin-bottom:0;">
                                            <li style="margin-bottom: 0px;margin-right: 10px;margin-left: 0;display:inline-block;color:#333;"><span class="change_theme_p mobile_title" style="color: #4fb218;">Mobile:</span> <span class="txt signature_mobilephone-target">445-456-7890</span></li>
                                            <li style="margin-bottom: 0px;margin-right: 10px;margin-left: 0;display:inline-block;color:#333;"><span class="change_theme_p fax_title" style="color: #4fb218;">fax:</span> <span class="txt signature_fax-target">921-142-0666</span></li>
                                            <li style="margin-bottom: 0px;margin-right: 0;margin-left: 0;display:inline-block;color:#333;"><span class="change_theme_p email_title" style="color: #4fb218;">Email:</span> <a class="link signature_email-target" href="mailto:john@signaturia.com" style="color:#333;text-decoration:none;">john@signaturia.com</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div style="padding-top:0;padding-bottom:0;padding-left:0;padding-right:0;">
                            <p class="change_font" style="text-align:center;line-height: 16px;font-weight: 400;font-size: 12px;color: #333333;margin-top: 0;margin-left: 0;margin-right: 0;margin-bottom: 0;"><span class="change_theme_p signature_companyname-target" style="color: #4fb218;display:block;">Signaturia</span><span class="txt signature_address-target">32-black street, winter hour. United Kingdom 08808</span><span class="txt signature_address2-target"></span></p>
                            <p class="change_font" style="text-align:center;line-height: 16px;font-weight: 400;font-size: 12px;color: #333333;margin-top: 0;margin-left: 0;margin-right: 0;margin-bottom:10px;"><span class="change_theme_p website_title" style="color: #4fb218;">Website:</span> <a href="www.signaturia.com" class="link signature_website-target" style="color:#333;text-decoration:none;">www.signaturia.com</a></p>
                            <div class="social-list social_set_1" style="margin: 0;padding:0;text-align:center;">
                                <?php
                                foreach ($social_icons as $key => $social_icon) {
                                    if ($key == 10) {
                                        break;
                                    }
                                ?>
                                    <a style="text-decoration:none;display:inline-block;" class="social sig-hide" href="#">
                                        <img width="20px" style="margin-bottom:2px;margin-right:2px; border:none; display:inline;" height="20px" data-filename="<?php echo $social_icon['icon1'] ?>" src="<?php echo base_url() . SOCIAL_ICONS_SET_1 . $social_icon['icon1'] ?>" alt="<?php echo $social_icon['name'] ?>">
                                    </a>
                                <?php } ?>
                            </div>
                            <div class="social-list social_set_2" style="margin: 0;padding:0;text-align:center;display: none">
                                <?php
                                foreach ($social_icons as $key => $social_icon) {
                                    if ($key == 10) {
                                        break;
                                    }
                                ?>
                                    <a style="text-decoration:none;display:inline-block;" class="social" href="#"> <img width="20px" style="margin-bottom:2px;margin-right:2px; border:none; display:inline;" height="20px" src="<?php echo base_url() . SOCIAL_ICONS_SET_2 . $social_icon['icon2'] ?>" alt="" /></a>
                                <?php } ?>
                            </div>
                            <div class="social-list social_set_3" style="margin: 0;padding:0;text-align:center;display: none">
                                <?php
                                foreach ($social_icons as $key => $social_icon) {
                                    if ($key == 10) {
                                        break;
                                    }
                                ?>
                                    <a style="text-decoration:none;display:inline-block;" class="social" href="#"> <img width="20px" style="margin-bottom:2px;margin-right:2px; border:none; display:inline;" height="20px" src="<?php echo base_url() . SOCIAL_ICONS_SET_3 . $social_icon['icon3'] ?>" alt="" /></a>
                                <?php } ?>
                            </div>
                            <div class="social-list social_set_4" style="margin: 0;padding:0;text-align:center;display: none">
                                <?php
                                foreach ($social_icons as $key => $social_icon) {
                                    if ($key == 10) {
                                        break;
                                    }
                                ?>
                                    <a style="text-decoration:none;display:inline-block;" class="social" href="#"> <img width="20px" style="margin-bottom:2px;margin-right:2px; border:none; display:inline;" height="20px" src="<?php echo base_url() . SOCIAL_ICONS_SET_4 . $social_icon['icon4'] ?>" alt="" /></a>
                                <?php } ?>
                            </div>

                        </div>
                        <div class="change_theme_border_top_1 hide_bottom_line" style="border-top:solid 1px #4fb218;margin-top:10px;margin-bottom:15px;max-width:600px;"></div>
                        <p class="appstores-container" style="text-align:center;margin-top:10px;margin-bottom:10px;margin-left:0;margin-right:0;">
                            <a class="appstore signature_apple_app_store_link-target sig-hide" style="text-decoration:none;" href="#">
                                <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/apple.png') ?>" class="appstore-icon " alt="Download on the App Store" data-pin-nopin="true"></a>
                            <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2">
                            <a class="appstore signature_google_play_link-target sig-hide" style="text-decoration:none;" href="#">
                                <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/google.png') ?>" class="appstore-icon " alt="Get it on Google Play">
                            </a>
                            <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2">
                            <a class="appstore signature_amazon_app_store_link-target sig-hide" style="text-decoration:none;" href="#">
                                <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/amazon.png') ?>" class="appstore-icon" alt="Available at Amazon">
                            </a>
                        </p>
                        <p class="signature_banner_url-target" style="text-align:center;margin-top:15px;margin-bottom:15px;margin-left:0;margin-right:0;">
                            <a href="#"> <img src="<?php echo base_url('assets/images/banner.png') ?>" alt="" border="0" width="300" data-pin-nopin="true" class="sig-ba"> </a>
                        </p>
                        <p class="signature_disclaimer-target" style="text-align:center;line-height: 13px;font-weight: 400;font-size: 9px;color: #333333;margin:0;">A disclaimer is generally any statement intended to specify or delimit the scope of rights and obligations that may be exercised and enforced by parties in a legally recognized relationship. In contrast to other terms for legally operative language, the term disclaimer usually implies situations that involve some level of uncertainty, waiver, or risk.</p>
                    </td>
                </tr>
            </table>
            <p class="latest_tweet"></p>
            <div class="youtube_video"> <?php if (isset($signature) && $signature['youtube_video'] != '') { ?> <iframe width="120" height="90" src="<?php echo $signature['youtube_video'] ?>" frameborder="0" allowfullscreen></iframe> <?php } ?> </div>


        </div>
    <?php } ?>
    <div class="new_signature" style="max-width:600px;<?php if (!isset($signature)) echo "display: none;" ?><?php echo $sign_font_style ?>">
        <table style="margin-top: 0;margin-left: 0;margin-right: 0;margin-bottom: 10px;border-spacing: 0;border-collapse: collapse;width:100%;">
            <tr>
                <td style="">
                    <table style="margin-top: 0;margin-left: 0;margin-right: 0;margin-bottom: 0;border-spacing: 0;border-collapse: collapse;width:100%;">
                        <tr>
                            <td align="center" style="padding-left:0;padding-top:0;padding-bottom:10px;">
                                <img src="<?php echo $sign_logo ?>" alt="<?php echo site_url() ?>" border="0" class="default sig-logo" style="margin-bottom:0;margin-bottom:0;margin-left:0;margin-right:0;margin-top:0;max-width:100%;max-height:40px;<?php echo $logo_style ?>" data-pin-nopin="true">
                            </td>
                        </tr>
                        <tr>
                            <td style="padding-left:0;padding-top:0;padding-right:0;padding-bottom:0;" valign="middle" align="center">
                                <div class="change_theme_border_1 change_theme_p" style="padding-left:10px;padding-right:10px;padding-top:10px;padding-bottom:10px;background:none;border-radius:0;margin-bottom:10px;text-align:center;border:solid 1px <?php echo $sign_text_color ?>;">
                                    <h1 class="signature_name-target change_theme_p" style="font-size: <?php echo $sign_font_size + 4 ?>px;line-height:<?php echo $sign_font_size + 8 ?>px; margin-left: 0px;margin-right: 0px;margin-top: 0px;margin-bottom: 10px;text-transform: uppercase;color: <?php echo $sign_text_color ?>;font-weight: bold; vertical-align:middle;"><span class="signature_name-target change_theme_p"><?php if (isset($signature)) echo $signature['name'] ?> </span><span class="signature_jobtitle-target change_font add-braces" style="text-transform: none;display:inline-block;font-size: 12px;color: #aaa;padding: 0;margin-left: 0px;margin-right: 0px;margin-top: 0px;margin-bottom: 0;font-weight: 400;"><?php if (isset($signature)) echo '(' . $signature['job_title'] . ')' ?></span></h1>
                                    <ul class="change_font" style="margin-top: 0;margin-left: 0;margin-right: 0;padding: 0;list-style: none;text-align:center;font-size:<?php echo $sign_font_size ?>px;line-height:<?php echo $sign_font_size + 4 ?>px;margin-bottom:0;">
                                        <li style="margin-bottom: 0px;margin-right: 10px;margin-left: 0;display:inline-block;color:#333;"><span class="change_theme_p mobile_title" style="color: <?php echo $sign_text_color ?>;<?php
                                                                                                                                                                                                                                    if (isset($signature) && $signature['mobile_number'] != '')
                                                                                                                                                                                                                                        echo "display:inline-block;";
                                                                                                                                                                                                                                    else
                                                                                                                                                                                                                                        echo "display:none;"
                                                                                                                                                                                                                                    ?>">Mobile:</span> <span class="txt signature_mobilephone-target" style="color: <?php echo $sign_text_color ?>;"><?php if (isset($signature)) echo $signature['mobile_number'] ?></span></li>
                                        <li style="margin-bottom: 0px;margin-right: 10px;margin-left: 0;display:inline-block;color:#333;"><span class="change_theme_p fax_title" style="color: <?php echo $sign_p_text_color ?>;<?php
                                                                                                                                                                                                                                if (isset($signature) && $signature['fax'] != '')
                                                                                                                                                                                                                                    echo "display:inline-block;";
                                                                                                                                                                                                                                else
                                                                                                                                                                                                                                    echo "display:none;"
                                                                                                                                                                                                                                ?>">fax:</span> <span class="txt signature_fax-target" style="color: <?php echo $sign_text_color ?>;"><?php if (isset($signature)) echo $signature['fax'] ?></span></li>
                                        <li style="margin-bottom: 0px;margin-right: 0;margin-left: 0;display:inline-block;color:#333;"><span class="change_theme_p email_title" style="color: <?php echo $sign_p_text_color ?>;<?php
                                                                                                                                                                                                                                if (isset($signature) && $signature['email'] != '')
                                                                                                                                                                                                                                    echo "display:inline-block;";
                                                                                                                                                                                                                                else
                                                                                                                                                                                                                                    echo "display:none;"
                                                                                                                                                                                                                                ?>">Email:</span> <a class="link signature_email-target" href="<?php if (isset($signature)) echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=personal&ident=email') ?>" style="color:<?php echo $sign_link_color ?>;text-decoration:none;"><?php if (isset($signature)) echo $signature['email'] ?></a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td>
                    <div style="padding-top:0;padding-bottom:0;padding-left:0;padding-right:0;">
                        <p class="change_font" style="text-align:center;line-height: <?php echo $sign_font_size + 4 ?>px;font-weight: 400;font-size: <?php echo $sign_font_size ?>px;color: #333333;margin-top: 0;margin-left: 0;margin-right: 0;margin-bottom: 0;"><span class="change_theme_p signature_companyname-target" style="color:<?php echo $sign_text_color ?>;display:block;"><?php if (isset($signature)) echo $signature['company_name'] ?></span><span class="txt signature_address-target" style="color:<?php echo $sign_p_text_color ?>"><?php if (isset($signature)) echo $signature['address']; ?></span><span class="txt signature_address2-target" style="color:<?php echo $sign_p_text_color ?>"><?php if (isset($signature)) echo '<br/>' . $signature['address_line2']; ?></span></p>
                        <p class="change_font" style="text-align:center;line-height: <?php echo $sign_font_size + 4 ?>px;font-weight: 400;font-size: <?php echo $sign_font_size ?>px;color: #333333;margin-top: 0;margin-left: 0;margin-right: 0;margin-bottom:10px;"><span class="change_theme_p website_title" style="color: <?php echo $sign_text_color ?>;<?php
                                                                                                                                                                                                                                                                                                                                                                if (isset($signature) && $signature['website'] != '')
                                                                                                                                                                                                                                                                                                                                                                    echo "";
                                                                                                                                                                                                                                                                                                                                                                else
                                                                                                                                                                                                                                                                                                                                                                    echo "display:none;"
                                                                                                                                                                                                                                                                                                                                                                ?>">Website:</span> <a href="<?php if (isset($signature)) echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=personal&ident=website'); ?>" class="link signature_website-target" style="color:<?php echo $sign_link_color ?>;text-decoration:none;"><?php if (isset($signature)) echo $signature['website']; ?></a></p>
                        <div class="social-list social_set_1" style="margin: 0;padding:0;text-align:center;<?php echo $social1_style; ?>">
                            <?php
                            foreach ($social_icons as $key => $social_icon) {
                                $style = "display:none;";
                                if (isset($signature_socials)) {
                                    if (array_key_exists($social_icon['id'], $signature_socials)) {
                                        $style = 'display:inline-block;';
                                    }
                                }
                            ?>

                                <a style="<?php echo $style ?> text-decoration:none;" class="social <?php echo "signature_social_" . $social_icon['id'] . "-target" ?> sig-hide" href="<?php echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=social&ident=' . $social_icon['id']) ?>">
                                    <img width="<?php echo $sign_iconsize ?>px" style="margin-bottom:2px;margin-right:2px; border:none; display:inline;" height="<?php echo $sign_iconsize ?>px" data-filename="<?php echo $social_icon['icon1'] ?>" src="<?php echo base_url() . SOCIAL_ICONS_SET_1 . $social_icon['icon1'] ?>" alt="<?php echo $social_icon['name'] ?>">
                                </a>
                            <?php } ?>
                        </div>
                        <div class="social-list social_set_2" style="margin: 0;padding:0;text-align:center;<?php echo $social2_style; ?>">
                            <?php
                            foreach ($social_icons as $key => $social_icon) {
                                $style = "display:none;";
                                if (isset($signature_socials)) {
                                    if (array_key_exists($social_icon['id'], $signature_socials)) {
                                        $style = '';
                                    }
                                }
                            ?>

                                <a style="<?php echo $style ?> text-decoration:none;" class="social <?php echo "signature_social_" . $social_icon['id'] . "-target" ?> sig-hide" href="<?php echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=social&ident=' . $social_icon['id']) ?>">
                                    <img width="<?php echo $sign_iconsize ?>px" style="margin-bottom:2px;margin-right:2px; border:none; display:inline;" height="<?php echo $sign_iconsize ?>px" data-filename="<?php echo $social_icon['icon2'] ?>" src="<?php echo base_url() . SOCIAL_ICONS_SET_2 . $social_icon['icon2'] ?>" alt="<?php echo $social_icon['name'] ?>">
                                </a>
                            <?php } ?>
                        </div>
                        <div class="social-list social_set_3" style="margin: 0;padding:0;text-align:center;<?php echo $social3_style; ?>">
                            <?php
                            foreach ($social_icons as $key => $social_icon) {
                                $style = "display:none;";
                                if (isset($signature_socials)) {
                                    if (array_key_exists($social_icon['id'], $signature_socials)) {
                                        $style = '';
                                    }
                                }
                            ?>

                                <a style="<?php echo $style ?> text-decoration:none;" class="social <?php echo "signature_social_" . $social_icon['id'] . "-target" ?> sig-hide" href="<?php echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=social&ident=' . $social_icon['id']) ?>">
                                    <img width="<?php echo $sign_iconsize ?>px" style="margin-bottom:2px;margin-right:2px; border:none; display:inline;" height="<?php echo $sign_iconsize ?>px" data-filename="<?php echo $social_icon['icon3'] ?>" src="<?php echo base_url() . SOCIAL_ICONS_SET_3 . $social_icon['icon3'] ?>" alt="<?php echo $social_icon['name'] ?>">
                                </a>
                            <?php } ?>
                        </div>
                        <div class="social-list social_set_4" style="margin: 0;padding:0;text-align:center;<?php echo $social4_style; ?>">
                            <?php
                            foreach ($social_icons as $key => $social_icon) {
                                $style = "display:none;";
                                if (isset($signature_socials)) {
                                    if (array_key_exists($social_icon['id'], $signature_socials)) {
                                        $style = '';
                                    }
                                }
                            ?>
                                <a style="<?php echo $style ?> text-decoration:none;" class="social <?php echo "signature_social_" . $social_icon['id'] . "-target" ?> sig-hide" href="<?php echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=social&ident=' . $social_icon['id']) ?>">
                                    <img width="<?php echo $sign_iconsize ?>px" style="margin-bottom:2px;margin-right:2px; border:none; display:inline;" height="<?php echo $sign_iconsize ?>px" data-filename="<?php echo $social_icon['icon4'] ?>" src="<?php echo base_url() . SOCIAL_ICONS_SET_4 . $social_icon['icon4'] ?>" alt="<?php echo $social_icon['name'] ?>">
                                </a>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="change_theme_border_top_1 hide_bottom_line <?php echo $hide_bottom_class ?>" style="border-top:solid 1px <?php echo $sign_text_color ?>;margin-top:10px;margin-bottom:15px;max-width:600px;"></div>
                    <p class="appstores-container" style="text-align:center;margin-top:10px;margin-bottom:10px;margin-left:0;margin-right:0;">
                        <?php if (isset($signature) && @$signature['appstore_link'] != '') { ?>
                            <a class="appstore signature_apple_app_store_link-target sig-hide" style="text-decoration:none;" href="<?php if (isset($signature)) echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=app&ident=appstore'); ?>">
                                <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/apple.png') ?>" class="appstore-icon " alt="Download on the App Store" data-pin-nopin="true">
                            </a>
                        <?php } else { ?>
                            <a class="appstore signature_apple_app_store_link-target sig-hide" style="text-decoration:none;display: none;" href="#">
                                <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/apple.png') ?>" class="appstore-icon " alt="Download on the App Store" data-pin-nopin="true">
                            </a>
                        <?php } ?>
                        <?php if (isset($signature) && @$signature['googleplaytore_link'] != '') { ?>

                            <a class="appstore signature_google_play_link-target sig-hide" style="text-decoration:none;" href="<?php if (isset($signature)) echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=app&ident=googleplaytore'); ?>">
                                <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/google.png') ?>" class="appstore-icon " alt="Get it on Google Play">
                            </a>
                        <?php } else { ?>

                            <a class="appstore signature_google_play_link-target sig-hide" style="text-decoration:none;display: none;" href="#">
                                <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/google.png') ?>" class="appstore-icon " alt="Get it on Google Play">
                            </a>
                        <?php } ?>
                        <?php if (isset($signature) && @$signature['amazon_link'] != '') { ?>

                            <a class="appstore signature_amazon_app_store_link-target sig-hide" style="text-decoration:none;" href="<?php if (isset($signature)) echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=app&ident=amazon'); ?>">
                                <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/amazon.png') ?>" class="appstore-icon" alt="Available at Amazon">
                            </a>
                        <?php } else { ?>

                            <a class="appstore signature_amazon_app_store_link-target sig-hide" style="text-decoration:none;display: none;" href="#">
                                <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/amazon.png') ?>" class="appstore-icon" alt="Available at Amazon">
                            </a>
                        <?php } ?>
                    </p>
                    <?php if (isset($signature) && $signature['banner'] != '') { ?>
                        <p class="ba-container" style="text-align:center;margin-top:15px;margin-bottom:15px;margin-left:0;margin-right:0;">
                            <a href="<?php if (isset($signature)) echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=banner'); ?>" class="signature_banner_url-target">
                                <img src="<?php echo base_url() . SIGNATURE_UPLOADS_BANNER . $signature['banner'] ?>" alt="signaturia.com" border="0" class="sig-ba" data-pin-nopin="true" style="max-width:400px;height:auto;width:100%;" />
                            </a>
                        </p>
                    <?php } else { ?>
                        <p class="ba-container" style="display:none;text-align:center;margin-top:15px;margin-bottom:15px;margin-left:0;margin-right:0;">
                            <a href="<?php echo site_url('/') ?>" class="signature_banner_url-target">
                                <img src="<?php echo base_url('assets/images/banner.png') ?>" alt="signaturia.com" border="0" class="sig-ba" data-pin-nopin="true" style="max-width:400px;height:auto;width:100%;" />
                            </a>
                        </p>
                    <?php } ?>

                    <p class="signature_disclaimer-target" style="text-align:center;line-height: 13px;font-weight: 400;font-size: 9px;color:#333333;margin:0;<?php if (isset($signature) && $signature['show_disclaimer'] == 0) echo 'display: none;' ?>"><?php if (isset($signature)) echo $signature['disclaimer'] ?></p>
                </td>
            </tr>
        </table>
        <p class="latest_tweet"></p>
        <div class="youtube_video"> <?php if (isset($signature) && $signature['youtube_video'] != '') { ?> <iframe width="120" height="90" src="<?php echo $signature['youtube_video'] ?>" frameborder="0" allowfullscreen></iframe> <?php } ?> </div>


    </div>
</div>
<div id="theme-9" class="preview" <?php echo $theme9_style ?>>
    <?php if (!isset($signature)) { ?>
        <div class="default_signature" style="max-width:600px;margin:0 auto;">
            <table style="margin-top: 0;margin-left: 0;margin-right: 0;margin-bottom: 10px;border-spacing: 0;border-collapse: collapse;width:100%;">
                <tbody>
                    <tr>
                        <td style="">
                            <table style="margin-top: 0;margin-left: 0;margin-right: 0;margin-bottom: 0;border-spacing: 0;border-collapse: collapse;width:100%;">
                                <tbody>
                                    <tr>
                                        <td min-width="35%" valign="middle" align="center" style="padding-left:0;padding-right:20px;padding-top:0;padding-bottom:0;">
                                            <img src="<?php echo base_url('assets/images/logo3.png') ?>" alt="htmlsig.com" border="0" class="default sig-logo" style="margin-bottom:0;margin-bottom:0;margin-left:0;margin-right:0;margin-top:0;max-width:100%;max-height:40px;" data-pin-nopin="true">
                                        </td>
                                        <td class="change_theme_border_left_1" width="65%" style="padding-left:20px;padding-top:0;padding-right:0;padding-bottom:0;border-left:solid 1px #4fb218;" valign="middle">
                                            <div class="" style="padding-left:0;padding-right:0;padding-top:0;padding-bottom:0;background:none;border-radius:0;margin-bottom:0;text-align:left;">
                                                <h1 style="font-size: 18px;line-height:22px; margin-left: 0px;margin-right: 0px;margin-top: 0px;margin-bottom: 0;text-transform: uppercase;color: #4fb218;font-weight: bold;" class="change_theme_p signature_name-target">John Donga</h1>
                                                <h5 class="signature_jobtitle-target change_font" style="font-size: 12px;line-height:14px;color: #999;padding: 0;margin-left: 0px;margin-right: 0px;margin-top: 0px;margin-bottom: 0;font-weight: 600;">senior content writer</h5>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="change_theme_border_top_1" style="border-top:solid 1px #4fb218;margin-top:10px;margin-bottom:10px;max-width:600px;"></div>
                            <div class="" style="padding-top:0;padding-bottom:0;padding-left:0;padding-right:0;">
                                <ul class="change_font" style="margin-top: 0;margin-left: 0;margin-right: 0;padding: 0;list-style: none;text-align:left;font-size:12px;line-height:16px;margin-bottom:10px;">
                                    <li style="margin-bottom: 0px;margin-right: 10px;margin-left: 0;display:inline-block;color:#333;"><span class="mobile_title change_theme_p" style="color: #4fb218;">Mobile:</span> <span class="txt signature_mobilephone-target">445-456-7890</span></li>
                                    <li style="margin-bottom: 0px;margin-right: 10px;margin-left: 0;display:inline-block;color:#333;"><span class="fax_title change_theme_p" style="color: #4fb218;">fax:</span> <span class="txt signature_fax-target">921-142-0666</span></li>
                                    <li style="margin-bottom: 0px;margin-right: 10px;margin-left: 0;display:inline-block;color:#333;"><span class="email_title change_theme_p" style="color: #4fb218;">Email:</span> <a href="mailto:john@signaturia.com" style="color:#333;text-decoration:none;" class="link signature_email-target">john@signaturia.com</a></li>
                                </ul>
                                <p class="change_font" style="text-align:left;line-height: 16px;font-weight: 400;font-size: 12px;color: #333333;margin-top: 0;margin-left: 0;margin-right: 0;margin-bottom: 0;"><span class="change_theme_p signature_companyname-target" style="color: #4fb218;display:block;">Signaturia</span><span class="txt signature_address-target">32-black street, winter hour. United Kingdom 08808</span><span class="txt signature_address2-target"></span></p>
                                <p class="change_font" style="text-align:left;line-height: 16px;font-weight: 400;font-size: 12px;color: #333333;margin-top: 0;margin-left: 0;margin-right: 0;margin-bottom:10px;"><span class="change_theme_p website_title" style="color: #4fb218;">Website:</span> <a href="www.signaturia.com" style="color:#333;text-decoration:none;" class="link signature_website-target">www.signaturia.com</a></p>
                                <div class="social-list social_set_1" style="margin: 0;padding:0;text-align:left;">
                                    <?php
                                    foreach ($social_icons as $key => $social_icon) {
                                        if ($key == 10) {
                                            break;
                                        }
                                    ?>
                                        <a style="text-decoration:none;display:inline-block;" class="social sig-hide" href="#">
                                            <img width="20px" style="margin-bottom:2px;margin-right:2px; border:none; display:inline;" height="20px" data-filename="<?php echo $social_icon['icon1'] ?>" src="<?php echo base_url() . SOCIAL_ICONS_SET_1 . $social_icon['icon1'] ?>" alt="<?php echo $social_icon['name'] ?>">
                                        </a>
                                    <?php } ?>
                                </div>
                                <div class="social-list social_set_2" style="margin: 0;padding:0;text-align:left;display: none">
                                    <?php
                                    foreach ($social_icons as $key => $social_icon) {
                                        if ($key == 10) {
                                            break;
                                        }
                                    ?>
                                        <a style="text-decoration:none;display:inline-block;" class="social" href="#"> <img width="20px" style="margin-bottom:2px;margin-right:2px; border:none; display:inline;" height="20px" src="<?php echo base_url() . SOCIAL_ICONS_SET_2 . $social_icon['icon2'] ?>" alt="" /></a>
                                    <?php } ?>
                                </div>
                                <div class="social-list social_set_3" style="margin: 0;padding:0;text-align:left;display: none">
                                    <?php
                                    foreach ($social_icons as $key => $social_icon) {
                                        if ($key == 10) {
                                            break;
                                        }
                                    ?>
                                        <a style="text-decoration:none;display:inline-block;" class="social" href="#"> <img width="20px" style="margin-bottom:2px;margin-right:2px; border:none; display:inline;" height="20px" src="<?php echo base_url() . SOCIAL_ICONS_SET_3 . $social_icon['icon3'] ?>" alt="" /></a>
                                    <?php } ?>
                                </div>
                                <div class="social-list social_set_4" style="margin: 0;padding:0;text-align:left;display: none">
                                    <?php
                                    foreach ($social_icons as $key => $social_icon) {
                                        if ($key == 10) {
                                            break;
                                        }
                                    ?>
                                        <a style="text-decoration:none;display:inline-block;" class="social" href="#"> <img width="20px" style="margin-bottom:2px;margin-right:2px; border:none; display:inline;" height="20px" src="<?php echo base_url() . SOCIAL_ICONS_SET_4 . $social_icon['icon4'] ?>" alt="" /></a>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="change_theme_border_top_1 hide_bottom_line" style="border-top:solid 1px #4fb218;margin-top:10px;margin-bottom:15px;max-width:600px;"></div>

                            <p class="appstores-container" style="text-align:left;margin-top:10px;margin-bottom:10px;margin-left:0;margin-right:0;">
                                <a class="appstore signature_apple_app_store_link-target sig-hide" style="text-decoration:none;" href="#">
                                    <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/apple.png') ?>" class="appstore-icon " alt="Download on the App Store" data-pin-nopin="true"></a>
                                <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2">
                                <a class="appstore signature_google_play_link-target sig-hide" style="text-decoration:none;" href="#">
                                    <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/google.png') ?>" class="appstore-icon " alt="Get it on Google Play">
                                </a>
                                <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2">
                                <a class="appstore signature_amazon_app_store_link-target sig-hide" style="text-decoration:none;" href="#">
                                    <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/amazon.png') ?>" class="appstore-icon" alt="Available at Amazon">
                                </a>
                            </p>
                            <p class="signature_banner_url-target" style="text-align:left;margin-top:15px;margin-bottom:15px;margin-left:0;margin-right:0;">
                                <a href="#"> <img src="<?php echo base_url('assets/images/banner.png') ?>" alt="" border="0" width="300" data-pin-nopin="true" class="sig-ba"> </a>
                            </p>
                            <p class="signature_disclaimer-target" style="text-align:left;line-height: 13px;font-weight: 400;font-size: 9px;color: #333333;margin:0;">A disclaimer is generally any statement intended to specify or delimit the scope of rights and obligations that may be exercised and enforced by parties in a legally recognized relationship. In contrast to other terms for legally operative language, the term disclaimer usually implies situations that involve some level of uncertainty, waiver, or risk.</p>
                        </td>
                    </tr>
                </tbody>
            </table>
            <p class="latest_tweet"></p>
            <div class="youtube_video"> <?php if (isset($signature) && $signature['youtube_video'] != '') { ?> <iframe width="120" height="90" src="<?php echo $signature['youtube_video'] ?>" frameborder="0" allowfullscreen></iframe> <?php } ?> </div>


        </div>
    <?php } ?>
    <div class="new_signature" style="max-width:600px;<?php if (!isset($signature)) echo "display: none;" ?><?php echo $sign_font_style ?>">
        <table style="margin-top: 0;margin-left: 0;margin-right: 0;margin-bottom: 10px;border-spacing: 0;border-collapse: collapse;width:100%;">
            <tbody>
                <tr>
                    <td style="">
                        <table style="margin-top: 0;margin-left: 0;margin-right: 0;margin-bottom: 0;border-spacing: 0;border-collapse: collapse;width:100%;">
                            <tbody>
                                <tr>
                                    <td min-width="35%" valign="middle" align="center" style="padding-left:0;padding-right:20px;padding-top:0;padding-bottom:0;">
                                        <img src="<?php echo $sign_logo ?>" alt="htmlsig.com" border="0" class="default sig-logo" style="margin-bottom:0;margin-bottom:0;margin-left:0;margin-right:0;margin-top:0;max-width:100%;max-height:40px;<?php echo $logo_style ?>" data-pin-nopin="true">
                                    </td>
                                    <td class="change_theme_border_left_1" width="65%" style="padding-left:20px;padding-top:0;padding-right:0;padding-bottom:0;border-left:solid 1px <?php echo $sign_text_color ?>;" valign="middle">
                                        <div class="" style="padding-left:0;padding-right:0;padding-top:0;padding-bottom:0;background:none;border-radius:0;margin-bottom:0;text-align:left;">
                                            <h1 style="font-size:<?php echo $sign_font_size + 4 ?>px;line-height:<?php echo $sign_font_size + 8 ?>px; margin-left: 0px;margin-right: 0px;margin-top: 0px;margin-bottom: 0;text-transform: uppercase;color:<?php echo $sign_text_color ?>;font-weight: bold;" class="change_theme_p signature_name-target"><?php if (isset($signature)) echo $signature['name'] ?></h1>
                                            <h5 class="signature_jobtitle-target change_font" style="font-size: <?php echo $sign_font_size ?>px;line-height:<?php echo $sign_font_size + 4 ?>px;color: #999;padding: 0;margin-left: 0px;margin-right: 0px;margin-top: 0px;margin-bottom: 0;font-weight: 600;"><?php if (isset($signature)) echo $signature['job_title'] ?></h5>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="change_theme_border_top_1" style="border-top:solid 1px <?php echo $sign_text_color ?>;margin-top:10px;margin-bottom:10px;max-width:600px;"></div>
                        <div class="" style="padding-top:0;padding-bottom:0;padding-left:0;padding-right:0;">
                            <ul class="change_font" style="margin-top: 0;margin-left: 0;margin-right: 0;padding: 0;list-style: none;text-align:left;font-size:<?php echo $sign_font_size ?>px;line-height:<?php echo $sign_font_size + 4 ?>px;margin-bottom:10px;">
                                <li style="margin-bottom: 0px;margin-right: 10px;margin-left: 0;display:inline-block;color:#333;"><span class="mobile_title change_theme_p" style="color: <?php echo $sign_text_color ?>;<?php
                                                                                                                                                                                                                            if (isset($signature) && $signature['mobile_number'] != '')
                                                                                                                                                                                                                                echo "display:inline-block;";
                                                                                                                                                                                                                            else
                                                                                                                                                                                                                                echo "display:none;"
                                                                                                                                                                                                                            ?>">Mobile:</span> <span class="txt signature_mobilephone-target" style="color: <?php echo $sign_p_text_color ?>;"><?php if (isset($signature)) echo $signature['mobile_number'] ?></span></li>
                                <li style="margin-bottom: 0px;margin-right: 10px;margin-left: 0;display:inline-block;color:#333;"><span class="fax_title change_theme_p" style="color: <?php echo $sign_text_color ?>;<?php
                                                                                                                                                                                                                        if (isset($signature) && $signature['fax'] != '')
                                                                                                                                                                                                                            echo "display:inline-block;";
                                                                                                                                                                                                                        else
                                                                                                                                                                                                                            echo "display:none;"
                                                                                                                                                                                                                        ?>">fax:</span> <span class="txt signature_fax-target" style="color: <?php echo $sign_p_text_color ?>;"><?php if (isset($signature)) echo $signature['fax'] ?></span></li>
                                <li style="margin-bottom: 0px;margin-right: 10px;margin-left: 0;display:inline-block;color:#333;"><span class="email_title change_theme_p" style="color:<?php echo $sign_text_color ?>;<?php
                                                                                                                                                                                                                        if (isset($signature) && $signature['email'] != '')
                                                                                                                                                                                                                            echo "display:inline-block;";
                                                                                                                                                                                                                        else
                                                                                                                                                                                                                            echo "display:none;"
                                                                                                                                                                                                                        ?>">Email:</span> <a href="<?php if (isset($signature)) echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=personal&ident=email') ?>" style="color:<?php echo $sign_link_color ?>;text-decoration:none;" class="link signature_email-target"><?php if (isset($signature)) echo $signature['email'] ?></a></li>
                            </ul>
                            <p class="change_font" style="text-align:left;line-height: <?php echo $sign_font_size + 4 ?>px;font-weight: 400;font-size: <?php echo $sign_font_size ?>px;color: #333333;margin-top: 0;margin-left: 0;margin-right: 0;margin-bottom: 0;"><span class="change_theme_p signature_companyname-target" style="color: <?php echo $sign_text_color ?>;display:block;"><?php if (isset($signature)) echo $signature['company_name'] ?></span><span class="txt signature_address-target" style="color:<?php echo $sign_p_text_color ?>"><?php if (isset($signature)) echo $signature['address']; ?></span><span class="txt signature_address2-target" style="color:<?php echo $sign_p_text_color ?>"><?php if (isset($signature)) echo '<br/>' . $signature['address_line2']; ?></span></p>
                            <p class="change_font" style="text-align:left;line-height: <?php echo $sign_font_size + 4 ?>px;font-weight: 400;font-size: <?php echo $sign_font_size ?>px;color: #333333;margin-top: 0;margin-left: 0;margin-right: 0;margin-bottom:10px;"><span class="change_theme_p website_title" style="color: <?php echo $sign_text_color ?>;<?php
                                                                                                                                                                                                                                                                                                                                                                if (isset($signature) && $signature['website'] != '')
                                                                                                                                                                                                                                                                                                                                                                    echo "";
                                                                                                                                                                                                                                                                                                                                                                else
                                                                                                                                                                                                                                                                                                                                                                    echo "display:none;"
                                                                                                                                                                                                                                                                                                                                                                ?>">Website:</span> <a href="<?php if (isset($signature)) echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=personal&ident=website'); ?>" style="color:<?php echo $sign_link_color ?>;text-decoration:none;" class="link signature_website-target"><?php if (isset($signature)) echo $signature['website']; ?></a></p>

                            <div class="social-list social_set_1" style="margin: 0;padding:0;text-align:left;<?php echo $social1_style; ?>">
                                <?php
                                foreach ($social_icons as $key => $social_icon) {
                                    $style = "display:none;";
                                    if (isset($signature_socials)) {
                                        if (array_key_exists($social_icon['id'], $signature_socials)) {
                                            $style = 'display:inline-block;';
                                        }
                                    }
                                ?>

                                    <a style="<?php echo $style ?> text-decoration:none;" class="social <?php echo "signature_social_" . $social_icon['id'] . "-target" ?> sig-hide" href="<?php echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=social&ident=' . $social_icon['id']) ?>">
                                        <img width="<?php echo $sign_iconsize ?>px" style="margin-bottom:2px;margin-right:2px; border:none; display:inline;" height="<?php echo $sign_iconsize ?>px" data-filename="<?php echo $social_icon['icon1'] ?>" src="<?php echo base_url() . SOCIAL_ICONS_SET_1 . $social_icon['icon1'] ?>" alt="<?php echo $social_icon['name'] ?>">
                                    </a>
                                <?php } ?>
                            </div>
                            <div class="social-list social_set_2" style="margin: 0;padding:0;text-align:left;<?php echo $social2_style; ?>">
                                <?php
                                foreach ($social_icons as $key => $social_icon) {
                                    $style = "display:none;";
                                    if (isset($signature_socials)) {
                                        if (array_key_exists($social_icon['id'], $signature_socials)) {
                                            $style = '';
                                        }
                                    }
                                ?>

                                    <a style="<?php echo $style ?> text-decoration:none;" class="social <?php echo "signature_social_" . $social_icon['id'] . "-target" ?> sig-hide" href="<?php echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=social&ident=' . $social_icon['id']) ?>">
                                        <img width="<?php echo $sign_iconsize ?>px" style="margin-bottom:2px;margin-right:2px; border:none; display:inline;" height="<?php echo $sign_iconsize ?>px" data-filename="<?php echo $social_icon['icon2'] ?>" src="<?php echo base_url() . SOCIAL_ICONS_SET_2 . $social_icon['icon2'] ?>" alt="<?php echo $social_icon['name'] ?>">
                                    </a>
                                <?php } ?>
                            </div>
                            <div class="social-list social_set_3" style="margin: 0;padding:0;text-align:left;<?php echo $social3_style; ?>">
                                <?php
                                foreach ($social_icons as $key => $social_icon) {
                                    $style = "display:none;";
                                    if (isset($signature_socials)) {
                                        if (array_key_exists($social_icon['id'], $signature_socials)) {
                                            $style = '';
                                        }
                                    }
                                ?>

                                    <a style="<?php echo $style ?> text-decoration:none;" class="social <?php echo "signature_social_" . $social_icon['id'] . "-target" ?> sig-hide" href="<?php echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=social&ident=' . $social_icon['id']) ?>">
                                        <img width="<?php echo $sign_iconsize ?>px" style="margin-bottom:2px;margin-right:2px; border:none; display:inline;" height="<?php echo $sign_iconsize ?>px" data-filename="<?php echo $social_icon['icon3'] ?>" src="<?php echo base_url() . SOCIAL_ICONS_SET_3 . $social_icon['icon3'] ?>" alt="<?php echo $social_icon['name'] ?>">
                                    </a>
                                <?php } ?>
                            </div>
                            <div class="social-list social_set_4" style="margin: 0;padding:0;text-align:left;<?php echo $social4_style; ?>">
                                <?php
                                foreach ($social_icons as $key => $social_icon) {
                                    $style = "display:none;";
                                    if (isset($signature_socials)) {
                                        if (array_key_exists($social_icon['id'], $signature_socials)) {
                                            $style = '';
                                        }
                                    }
                                ?>
                                    <a style="<?php echo $style ?> text-decoration:none;" class="social <?php echo "signature_social_" . $social_icon['id'] . "-target" ?> sig-hide" href="<?php echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=social&ident=' . $social_icon['id']) ?>">
                                        <img width="<?php echo $sign_iconsize ?>px" style="margin-bottom:2px;margin-right:2px; border:none; display:inline;" height="<?php echo $sign_iconsize ?>px" data-filename="<?php echo $social_icon['icon4'] ?>" src="<?php echo base_url() . SOCIAL_ICONS_SET_4 . $social_icon['icon4'] ?>" alt="<?php echo $social_icon['name'] ?>">
                                    </a>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="change_theme_border_top_1 hide_bottom_line <?php echo $hide_bottom_class ?>" style="border-top:solid 1px <?php echo $sign_text_color ?>;margin-top:10px;margin-bottom:15px;max-width:600px;"></div>
                        <p class="appstores-container" style="text-align:left;margin-top:10px;margin-bottom:10px;margin-left:0;margin-right:0;">
                            <?php if (isset($signature) && @$signature['appstore_link'] != '') { ?>
                                <a class="appstore signature_apple_app_store_link-target sig-hide" style="text-decoration:none;" href="<?php if (isset($signature)) echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=app&ident=appstore'); ?>">
                                    <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/apple.png') ?>" class="appstore-icon " alt="Download on the App Store" data-pin-nopin="true">
                                </a>
                            <?php } else { ?>
                                <a class="appstore signature_apple_app_store_link-target sig-hide" style="text-decoration:none;display: none;" href="#">
                                    <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/apple.png') ?>" class="appstore-icon " alt="Download on the App Store" data-pin-nopin="true">
                                </a>
                            <?php } ?>
                            <?php if (isset($signature) && @$signature['googleplaytore_link'] != '') { ?>

                                <a class="appstore signature_google_play_link-target sig-hide" style="text-decoration:none;" href="<?php if (isset($signature)) echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=app&ident=googleplaytore'); ?>">
                                    <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/google.png') ?>" class="appstore-icon " alt="Get it on Google Play">
                                </a>
                            <?php } else { ?>

                                <a class="appstore signature_google_play_link-target sig-hide" style="text-decoration:none;display: none;" href="#">
                                    <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/google.png') ?>" class="appstore-icon " alt="Get it on Google Play">
                                </a>
                            <?php } ?>
                            <?php if (isset($signature) && @$signature['amazon_link'] != '') { ?>

                                <a class="appstore signature_amazon_app_store_link-target sig-hide" style="text-decoration:none;" href="<?php if (isset($signature)) echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=app&ident=amazon'); ?>">
                                    <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/amazon.png') ?>" class="appstore-icon" alt="Available at Amazon">
                                </a>
                            <?php } else { ?>

                                <a class="appstore signature_amazon_app_store_link-target sig-hide" style="text-decoration:none;display: none;" href="#">
                                    <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/amazon.png') ?>" class="appstore-icon" alt="Available at Amazon">
                                </a>
                            <?php } ?>
                        </p>
                        <?php if (isset($signature) && $signature['banner'] != '') { ?>
                            <p class="ba-container" style="text-align:left;margin-top:15px;margin-bottom:15px;margin-left:0;margin-right:0;">
                                <a href="<?php if (isset($signature)) echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=banner'); ?>" class="signature_banner_url-target">
                                    <img src="<?php echo base_url() . SIGNATURE_UPLOADS_BANNER . $signature['banner'] ?>" alt="signaturia.com" border="0" class="sig-ba" data-pin-nopin="true" style="max-width:400px;height:auto;width:100%;" />
                                </a>
                            </p>
                        <?php } else { ?>
                            <p class="ba-container" style="display:none;text-align:left;margin-top:15px;margin-bottom:15px;margin-left:0;margin-right:0;">
                                <a href="<?php echo site_url('/') ?>" class="signature_banner_url-target">
                                    <img src="<?php echo base_url('assets/images/banner.png') ?>" alt="signaturia.com" border="0" class="sig-ba" data-pin-nopin="true" style="max-width:400px;height:auto;width:100%;" />
                                </a>
                            </p>
                        <?php } ?>

                        <p class="signature_disclaimer-target" style="text-align:left;line-height: 13px;font-weight: 400;font-size: 9px;color: #333333;margin:0;<?php if (isset($signature) && $signature['show_disclaimer'] == 0) echo 'display: none;' ?>"><?php if (isset($signature)) echo $signature['disclaimer'] ?></p>
                    </td>
                </tr>
            </tbody>
        </table>
        <p class="latest_tweet"></p>
        <div class="youtube_video"> <?php if (isset($signature) && $signature['youtube_video'] != '') { ?> <iframe width="120" height="90" src="<?php echo $signature['youtube_video'] ?>" frameborder="0" allowfullscreen></iframe> <?php } ?> </div>


    </div>
</div>
<div id="theme-10" class="preview" <?php echo $theme10_style ?>>
    <?php if (!isset($signature)) { ?>
        <div class="default_signature" style="max-width:600px;margin:0 auto;">
            <table style="margin-top: 0;margin-left: 0;margin-right: 0;margin-bottom: 10px;border-spacing: 0;border-collapse: collapse;width:100%;">
                <tbody>
                    <tr>
                        <td style="">
                            <table style="margin-top: 0;margin-left: 0;margin-right: 0;margin-bottom: 0;border-spacing: 0;border-collapse: collapse;width:100%;">
                                <tbody>
                                    <tr>
                                        <td colspan="2" style="">
                                            <div class="change_theme_border_bottom_1" style="padding-left:0;padding-right:0;padding-top:0;padding-bottom:10px;background:none;border-radius:0;margin-bottom:10px;text-align:left;border-bottom:solid 1px #4fb218;">
                                                <h1 class="signature_name-target change_theme_p" style="font-size: 18px;line-height:22px; margin-left: 0px;margin-right: 0px;margin-top: 0px;margin-bottom: 0;text-transform: uppercase;color: #4fb218;font-weight: bold;">John Donga</h1>
                                                <h5 class="signature_jobtitle-target change_font" style="font-size: 12px;line-height:14px;color: #999;padding: 0;margin-left: 0px;margin-right: 0px;margin-top: 0px;margin-bottom: 0;font-weight: 600;">senior content writer</h5>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td min-width="50%" valign="middle" align="center" style="padding-left:0;padding-right:10px;padding-top:0;padding-bottom:0;">
                                            <img src="<?php echo base_url('assets/images/logo3.png') ?>" alt="<?php echo site_url() ?>" border="0" class="default sig-logo" style="margin-bottom:0;margin-bottom:10px;margin-left:0;margin-right:0;margin-top:0;max-width:100%;max-height:100px;" data-pin-nopin="true">
                                        </td>
                                        <td class="change_theme_border_left_1" width="50%" style="padding-left:10px;padding-top:0;padding-right:0;padding-bottom:0;border-left:solid 1px #4fb218;" valign="middle">
                                            <div class="" style="padding-top:0;padding-bottom:0;padding-left:0;padding-right:0;">
                                                <ul class="change_font" style="margin-top: 0;margin-left: 0;margin-right: 0;padding: 0;list-style: none;text-align:left;font-size:12px;line-height:16px;margin-bottom:10px;">
                                                    <li style="margin-bottom: 0px;margin-right: 0;margin-left: 0;display:block;color:#333;"><span class="change_theme_p mobile_title" style="color: #4fb218;font-weight:700;">Mobile:</span> <span class="txt signature_mobilephone-target">445-456-7890</span></li>
                                                    <li style="margin-bottom: 0px;margin-right: 0;margin-left: 0;display:block;color:#333;"><span class="change_theme_p fax_title" style="color: #4fb218;font-weight:700;">fax:</span> <span class="txt signature_fax-target">921-142-0666</span></li>
                                                    <li style="margin-bottom: 0px;margin-right: 0;margin-left: 0;display:block;color:#333;"><span class="change_theme_p email_title" style="color: #4fb218;font-weight:700;">Email:</span> <a href="mailto:john@signaturia.com" style="color:#333;text-decoration:none;" class="link signature_email-target">john@signaturia.com</a></li>
                                                </ul>
                                                <p class="change_font" style="text-align:left;line-height: 16px;font-weight: 400;font-size: 12px;color: #333333;margin-top: 0;margin-left: 0;margin-right: 0;margin-bottom: 0;"><span class="change_theme_p signature_companyname-target" style="color: #4fb218;display:block;font-weight:700;">Signaturia</span><span class="txt signature_address-target">32-black street, winter hour. United Kingdom 08808</span><span class="txt signature_address2-target"></span></p>
                                                <p class="change_font" style="text-align:left;line-height: 16px;font-weight: 400;font-size: 12px;color: #333333;margin-top: 0;margin-left: 0;margin-right: 0;margin-bottom:0;"><span class="change_theme_p website_title" style="color: #4fb218;font-weight:700;">Website:</span> <a href="www.signaturia.com" style="color:#333;text-decoration:none;" class="link signature_website-target">www.signaturia.com</a></p>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="change_theme_border_top_1" style="border-top:solid 1px #4fb218;margin-top:10px;margin-bottom:15px;max-width:600px;"></div>
                            <div class="social-list social_set_1" style="margin: 0;padding:0;text-align:left;">
                                <?php
                                foreach ($social_icons as $key => $social_icon) {
                                    if ($key == 10) {
                                        break;
                                    }
                                ?>
                                    <a style="text-decoration:none;display:inline-block;" class="social sig-hide" href="#">
                                        <img width="20px" style="margin-bottom:2px;margin-right:2px; border:none; display:inline;" height="20px" data-filename="<?php echo $social_icon['icon1'] ?>" src="<?php echo base_url() . SOCIAL_ICONS_SET_1 . $social_icon['icon1'] ?>" alt="<?php echo $social_icon['name'] ?>">
                                    </a>
                                <?php } ?>
                            </div>
                            <div class="social-list social_set_2" style="margin: 0;padding:0;text-align:left;display: none">
                                <?php
                                foreach ($social_icons as $key => $social_icon) {
                                    if ($key == 10) {
                                        break;
                                    }
                                ?>
                                    <a style="text-decoration:none;display:inline-block;" class="social" href="#"> <img width="20px" style="margin-bottom:2px;margin-right:2px; border:none; display:inline;" height="20px" src="<?php echo base_url() . SOCIAL_ICONS_SET_2 . $social_icon['icon2'] ?>" alt="" /></a>
                                <?php } ?>
                            </div>
                            <div class="social-list social_set_3" style="margin: 0;padding:0;text-align:left;display: none">
                                <?php
                                foreach ($social_icons as $key => $social_icon) {
                                    if ($key == 10) {
                                        break;
                                    }
                                ?>
                                    <a style="text-decoration:none;display:inline-block;" class="social" href="#"> <img width="20px" style="margin-bottom:2px;margin-right:2px; border:none; display:inline;" height="20px" src="<?php echo base_url() . SOCIAL_ICONS_SET_3 . $social_icon['icon3'] ?>" alt="" /></a>
                                <?php } ?>
                            </div>
                            <div class="social-list social_set_4" style="margin: 0;padding:0;text-align:left;display: none">
                                <?php
                                foreach ($social_icons as $key => $social_icon) {
                                    if ($key == 10) {
                                        break;
                                    }
                                ?>
                                    <a style="text-decoration:none;display:inline-block;" class="social" href="#"> <img width="20px" style="margin-bottom:2px;margin-right:2px; border:none; display:inline;" height="20px" src="<?php echo base_url() . SOCIAL_ICONS_SET_4 . $social_icon['icon4'] ?>" alt="" /></a>
                                <?php } ?>
                            </div>

                            <p class="appstores-container" style="text-align:left;margin-top:10px;margin-bottom:10px;margin-left:0;margin-right:0;">
                                <a class="appstore signature_apple_app_store_link-target sig-hide" style="text-decoration:none;" href="#">
                                    <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/apple.png') ?>" class="appstore-icon " alt="Download on the App Store" data-pin-nopin="true"></a>
                                <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2">
                                <a class="appstore signature_google_play_link-target sig-hide" style="text-decoration:none;" href="#">
                                    <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/google.png') ?>" class="appstore-icon " alt="Get it on Google Play">
                                </a>
                                <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2">
                                <a class="appstore signature_amazon_app_store_link-target sig-hide" style="text-decoration:none;" href="#">
                                    <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/amazon.png') ?>" class="appstore-icon" alt="Available at Amazon">
                                </a>
                            </p>
                            <p class="signature_banner_url-target" style="text-align:left;margin-top:15px;margin-bottom:15px;margin-left:0;margin-right:0;">
                                <a href="#"> <img src="<?php echo base_url('assets/images/banner.png') ?>" alt="" border="0" width="300" data-pin-nopin="true" class="sig-ba"> </a>
                            </p>
                            <p class="signature_disclaimer-target" style="text-align:left;line-height: 13px;font-weight: 400;font-size: 9px;color: #333333;margin:0;">A disclaimer is generally any statement intended to specify or delimit the scope of rights and obligations that may be exercised and enforced by parties in a legally recognized relationship. In contrast to other terms for legally operative language, the term disclaimer usually implies situations that involve some level of uncertainty, waiver, or risk.</p>
                        </td>
                    </tr>
                </tbody>
            </table>
            <p class="latest_tweet"></p>
            <div class="youtube_video"> <?php if (isset($signature) && $signature['youtube_video'] != '') { ?> <iframe width="120" height="90" src="<?php echo $signature['youtube_video'] ?>" frameborder="0" allowfullscreen></iframe> <?php } ?> </div>


        </div>
    <?php } ?>
    <div class="new_signature" style="max-width:600px;<?php if (!isset($signature)) echo "display: none;" ?><?php echo $sign_font_style ?>">
        <table style="margin-top: 0;margin-left: 0;margin-right: 0;margin-bottom: 10px;border-spacing: 0;border-collapse: collapse;width:100%;">
            <tbody>
                <tr>
                    <td style="">
                        <table style="margin-top: 0;margin-left: 0;margin-right: 0;margin-bottom: 0;border-spacing: 0;border-collapse: collapse;width:100%;">
                            <tbody>
                                <tr>
                                    <td colspan="2" style="">
                                        <div class="change_theme_border_bottom_1" style="padding-left:0;padding-right:0;padding-top:0;padding-bottom:10px;background:none;border-radius:0;margin-bottom:10px;text-align:left;border-bottom:solid 1px <?php echo $sign_text_color ?>;">
                                            <h1 class="signature_name-target change_theme_p" style="font-size: <?php echo $sign_font_size + 4 ?>px;line-height:<?php echo $sign_font_size + 8 ?>px; margin-left: 0px;margin-right: 0px;margin-top: 0px;margin-bottom: 0;text-transform: uppercase;color: <?php echo $sign_text_color ?>;font-weight: bold;"><?php if (isset($signature)) echo $signature['name'] ?></h1>
                                            <h5 class="signature_jobtitle-target change_font" style="font-size: <?php echo $sign_font_size ?>px;line-height:<?php echo $sign_font_size + 4 ?>px;color: #999;padding: 0;margin-left: 0px;margin-right: 0px;margin-top: 0px;margin-bottom: 0;font-weight: 600;"><?php if (isset($signature)) echo $signature['job_title'] ?></h5>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td min-width="50%" valign="middle" align="center" style="padding-left:0;padding-right:10px;padding-top:0;padding-bottom:0;">
                                        <img src="<?php echo $sign_logo ?>" alt="<?php echo site_url() ?>" border="0" class="default sig-logo" style="margin-bottom:0;margin-bottom:10px;margin-left:0;margin-right:0;margin-top:0;max-width:100%;max-height:100px;<?php echo $logo_style ?>" data-pin-nopin="true">
                                    </td>
                                    <td class="change_theme_border_left_1" width="50%" style="padding-left:10px;padding-top:0;padding-right:0;padding-bottom:0;border-left:solid 1px <?php echo $sign_text_color ?>;" valign="middle">
                                        <div class="" style="padding-top:0;padding-bottom:0;padding-left:0;padding-right:0;">
                                            <ul class="change_font" style="margin-top: 0;margin-left: 0;margin-right: 0;padding: 0;list-style: none;text-align:left;font-size:<?php echo $sign_font_size ?>px;line-height:<?php echo $sign_font_size + 4 ?>px;margin-bottom:10px;">
                                                <li style="margin-bottom: 0px;margin-right: 0;margin-left: 0;display:block;color:#333;"><span class="change_theme_p mobile_title" style="color: <?php echo $sign_text_color ?>;font-weight:700;<?php
                                                                                                                                                                                                                                                if (isset($signature) && $signature['mobile_number'] != '')
                                                                                                                                                                                                                                                    echo "display:inline-block;";
                                                                                                                                                                                                                                                else
                                                                                                                                                                                                                                                    echo "display:none;"
                                                                                                                                                                                                                                                ?>">Mobile:</span> <span class="txt signature_mobilephone-target" style="color: <?php echo $sign_p_text_color ?>;"><?php if (isset($signature)) echo $signature['mobile_number'] ?></span></li>
                                                <li style="margin-bottom: 0px;margin-right: 0;margin-left: 0;display:block;color:#333;"><span class="change_theme_p fax_title" style="color: <?php echo $sign_text_color ?>;font-weight:700;<?php
                                                                                                                                                                                                                                            if (isset($signature) && $signature['fax'] != '')
                                                                                                                                                                                                                                                echo "display:inline-block;";
                                                                                                                                                                                                                                            else
                                                                                                                                                                                                                                                echo "display:none;"
                                                                                                                                                                                                                                            ?>">fax:</span> <span class="txt signature_fax-target" style="color: <?php echo $sign_p_text_color ?>;"><?php if (isset($signature)) echo $signature['fax'] ?></span></li>
                                                <li style="margin-bottom: 0px;margin-right: 0;margin-left: 0;display:block;color:#333;"><span class="change_theme_p email_title" style="color:<?php echo $sign_text_color ?>;font-weight:700;<?php
                                                                                                                                                                                                                                                if (isset($signature) && $signature['email'] != '')
                                                                                                                                                                                                                                                    echo "display:inline-block;";
                                                                                                                                                                                                                                                else
                                                                                                                                                                                                                                                    echo "display:none;"
                                                                                                                                                                                                                                                ?>">Email:</span> <a href="<?php if (isset($signature)) echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=personal&ident=email') ?>" style="color:<?php echo $sign_link_color ?>;text-decoration:none;" class="link signature_email-target"><?php if (isset($signature)) echo $signature['email'] ?></a></li>
                                            </ul>
                                            <p class="change_font" style="text-align:left;line-height: <?php echo $sign_font_size + 4 ?>px;font-weight: 400;font-size: <?php echo $sign_font_size ?>px;color: #333333;margin-top: 0;margin-left: 0;margin-right: 0;margin-bottom: 0;"><span class="change_theme_p signature_companyname-target" style="color: <?php echo $sign_text_color ?>;display:block;font-weight:700;"><?php if (isset($signature)) echo $signature['company_name'] ?></span><span class="txt signature_address-target" style="color:<?php echo $sign_p_text_color ?>"><?php if (isset($signature)) echo $signature['address']; ?></span><span class="txt signature_address2-target" style="color:<?php echo $sign_p_text_color ?>"><?php if (isset($signature)) echo '<br/>' . $signature['address_line2']; ?></span></p>
                                            <p class="change_font" style="text-align:left;line-height: <?php echo $sign_font_size + 4 ?>px;font-weight: 400;font-size: <?php echo $sign_font_size ?>px;color: #333333;margin-top: 0;margin-left: 0;margin-right: 0;margin-bottom:0;"><span class="change_theme_p website_title" style="color: <?php echo $sign_text_color ?>;font-weight:700;<?php
                                                                                                                                                                                                                                                                                                                                                                                                if (isset($signature) && $signature['website'] != '')
                                                                                                                                                                                                                                                                                                                                                                                                    echo "";
                                                                                                                                                                                                                                                                                                                                                                                                else
                                                                                                                                                                                                                                                                                                                                                                                                    echo "display:none;"
                                                                                                                                                                                                                                                                                                                                                                                                ?>">Website:</span> <a href="<?php if (isset($signature)) echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=personal&ident=website'); ?>" style="color:<?php echo $sign_link_color ?>;text-decoration:none;" class="link signature_website-target"><?php if (isset($signature)) echo $signature['website']; ?></a></p>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="change_theme_border_top_1" style="border-top:solid 1px <?php echo $sign_text_color ?>;margin-top:10px;margin-bottom:15px;max-width:600px;"></div>
                        <div class="social-list social_set_1" style="margin: 0;padding:0;text-align:left;<?php echo $social1_style; ?>">
                            <?php
                            foreach ($social_icons as $key => $social_icon) {
                                $style = "display:none;";
                                if (isset($signature_socials)) {
                                    if (array_key_exists($social_icon['id'], $signature_socials)) {
                                        $style = 'display:inline-block;';
                                    }
                                }
                            ?>

                                <a style="<?php echo $style ?> text-decoration:none;" class="social <?php echo "signature_social_" . $social_icon['id'] . "-target" ?> sig-hide" href="<?php echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=social&ident=' . $social_icon['id']) ?>">
                                    <img width="<?php echo $sign_iconsize ?>px" style="margin-bottom:2px;margin-right:2px; border:none; display:inline;" height="<?php echo $sign_iconsize ?>px" data-filename="<?php echo $social_icon['icon1'] ?>" src="<?php echo base_url() . SOCIAL_ICONS_SET_1 . $social_icon['icon1'] ?>" alt="<?php echo $social_icon['name'] ?>">
                                </a>
                            <?php } ?>
                        </div>
                        <div class="social-list social_set_2" style="margin: 0;padding:0;text-align:left;<?php echo $social2_style; ?>">
                            <?php
                            foreach ($social_icons as $key => $social_icon) {
                                $style = "display:none;";
                                if (isset($signature_socials)) {
                                    if (array_key_exists($social_icon['id'], $signature_socials)) {
                                        $style = '';
                                    }
                                }
                            ?>

                                <a style="<?php echo $style ?> text-decoration:none;" class="social <?php echo "signature_social_" . $social_icon['id'] . "-target" ?> sig-hide" href="<?php echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=social&ident=' . $social_icon['id']) ?>">
                                    <img width="<?php echo $sign_iconsize ?>px" style="margin-bottom:2px;margin-right:2px; border:none; display:inline;" height="<?php echo $sign_iconsize ?>px" data-filename="<?php echo $social_icon['icon2'] ?>" src="<?php echo base_url() . SOCIAL_ICONS_SET_2 . $social_icon['icon2'] ?>" alt="<?php echo $social_icon['name'] ?>">
                                </a>
                            <?php } ?>
                        </div>
                        <div class="social-list social_set_3" style="margin: 0;padding:0;text-align:left;<?php echo $social3_style; ?>">
                            <?php
                            foreach ($social_icons as $key => $social_icon) {
                                $style = "display:none;";
                                if (isset($signature_socials)) {
                                    if (array_key_exists($social_icon['id'], $signature_socials)) {
                                        $style = '';
                                    }
                                }
                            ?>

                                <a style="<?php echo $style ?> text-decoration:none;" class="social <?php echo "signature_social_" . $social_icon['id'] . "-target" ?> sig-hide" href="<?php echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=social&ident=' . $social_icon['id']) ?>">
                                    <img width="<?php echo $sign_iconsize ?>px" style="margin-bottom:2px;margin-right:2px; border:none; display:inline;" height="<?php echo $sign_iconsize ?>px" data-filename="<?php echo $social_icon['icon3'] ?>" src="<?php echo base_url() . SOCIAL_ICONS_SET_3 . $social_icon['icon3'] ?>" alt="<?php echo $social_icon['name'] ?>">
                                </a>
                            <?php } ?>
                        </div>
                        <div class="social-list social_set_4" style="margin: 0;padding:0;text-align:left;<?php echo $social4_style; ?>">
                            <?php
                            foreach ($social_icons as $key => $social_icon) {
                                $style = "display:none;";
                                if (isset($signature_socials)) {
                                    if (array_key_exists($social_icon['id'], $signature_socials)) {
                                        $style = '';
                                    }
                                }
                            ?>
                                <a style="<?php echo $style ?> text-decoration:none;" class="social <?php echo "signature_social_" . $social_icon['id'] . "-target" ?> sig-hide" href="<?php echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=social&ident=' . $social_icon['id']) ?>">
                                    <img width="<?php echo $sign_iconsize ?>px" style="margin-bottom:2px;margin-right:2px; border:none; display:inline;" height="<?php echo $sign_iconsize ?>px" data-filename="<?php echo $social_icon['icon4'] ?>" src="<?php echo base_url() . SOCIAL_ICONS_SET_4 . $social_icon['icon4'] ?>" alt="<?php echo $social_icon['name'] ?>">
                                </a>
                            <?php } ?>
                        </div>

                        <p class="appstores-container" style="text-align:left;margin-top:10px;margin-bottom:10px;margin-left:0;margin-right:0;">
                            <?php if (isset($signature) && @$signature['appstore_link'] != '') { ?>
                                <a class="appstore signature_apple_app_store_link-target sig-hide" style="text-decoration:none;" href="<?php if (isset($signature)) echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=app&ident=appstore'); ?>">
                                    <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/apple.png') ?>" class="appstore-icon " alt="Download on the App Store" data-pin-nopin="true">
                                </a>
                            <?php } else { ?>
                                <a class="appstore signature_apple_app_store_link-target sig-hide" style="text-decoration:none;display: none;" href="#">
                                    <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/apple.png') ?>" class="appstore-icon " alt="Download on the App Store" data-pin-nopin="true">
                                </a>
                            <?php } ?>
                            <?php if (isset($signature) && @$signature['googleplaytore_link'] != '') { ?>

                                <a class="appstore signature_google_play_link-target sig-hide" style="text-decoration:none;" href="<?php if (isset($signature)) echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=app&ident=googleplaytore'); ?>">
                                    <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/google.png') ?>" class="appstore-icon " alt="Get it on Google Play">
                                </a>
                            <?php } else { ?>

                                <a class="appstore signature_google_play_link-target sig-hide" style="text-decoration:none;display: none;" href="#">
                                    <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/google.png') ?>" class="appstore-icon " alt="Get it on Google Play">
                                </a>
                            <?php } ?>
                            <?php if (isset($signature) && @$signature['amazon_link'] != '') { ?>

                                <a class="appstore signature_amazon_app_store_link-target sig-hide" style="text-decoration:none;" href="<?php if (isset($signature)) echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=app&ident=amazon'); ?>">
                                    <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/amazon.png') ?>" class="appstore-icon" alt="Available at Amazon">
                                </a>
                            <?php } else { ?>

                                <a class="appstore signature_amazon_app_store_link-target sig-hide" style="text-decoration:none;display: none;" href="#">
                                    <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/amazon.png') ?>" class="appstore-icon" alt="Available at Amazon">
                                </a>
                            <?php } ?>
                        </p>
                        <?php if (isset($signature) && $signature['banner'] != '') { ?>
                            <p class="ba-container" style="text-align:left;margin-top:15px;margin-bottom:15px;margin-left:0;margin-right:0;">
                                <a href="<?php if (isset($signature)) echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=banner'); ?>" class="signature_banner_url-target">
                                    <img src="<?php echo base_url() . SIGNATURE_UPLOADS_BANNER . $signature['banner'] ?>" alt="signaturia.com" border="0" class="sig-ba" data-pin-nopin="true" style="max-width:400px;height:auto;width:100%;" />
                                </a>
                            </p>
                        <?php } else { ?>
                            <p class="ba-container" style="display:none;text-align:left;margin-top:15px;margin-bottom:15px;margin-left:0;margin-right:0;">
                                <a href="<?php echo site_url('/') ?>" class="signature_banner_url-target">
                                    <img src="<?php echo base_url('assets/images/banner.png') ?>" alt="signaturia.com" border="0" class="sig-ba" data-pin-nopin="true" style="max-width:400px;height:auto;width:100%;" />
                                </a>
                            </p>
                        <?php } ?>
                        <p class="signature_disclaimer-target" style="text-align:left;line-height: 13px;font-weight: 400;font-size: 9px;color: #333333;margin:0;<?php if (isset($signature) && $signature['show_disclaimer'] == 0) echo 'display: none;' ?>"><?php if (isset($signature)) echo $signature['disclaimer'] ?></p>
                    </td>
                </tr>
            </tbody>
        </table>
        <p class="latest_tweet"></p>
        <div class="youtube_video">
            <?php if (isset($signature) && $signature['youtube_video'] != '') { ?>
                <iframe width="120" height="90" src="<?php echo $signature['youtube_video'] ?>" frameborder="0" allowfullscreen></iframe><?php } ?>
        </div>
    </div>
</div>
<div id="theme-11" class="preview" <?php echo $theme11_style ?>>
    <?php if (!isset($signature)) { ?>
        <div class="default_signature" style="max-width:600px;margin:0 auto;">
            <table style="margin-top: 0;margin-left: 0;margin-right: 0;margin-bottom: 10px;border-spacing: 0;border-collapse: collapse;width:100%;">
                <tbody>
                    <tr>
                        <td style="">
                            <table style="margin-top: 0;margin-left: 0;margin-right: 0;margin-bottom: 0;border-spacing: 0;border-collapse: collapse;width:100%;">
                                <tbody>
                                    <tr>
                                        <td min-width="130" valign="top" align="center" style="padding-left:0;padding-right:10px;padding-top:0;padding-bottom:0;">
                                            <img src="<?php echo $sign_logo ?>" alt="<?php echo site_url() ?>" border="0" class="sig-logo default" style="height:100px;width:100px;margin-bottom:0;border-radius:50px;margin-bottom:10px;margin-left:0;margin-right:0;margin-top:0;" data-pin-nopin="true">
                                            <div class="" style="padding-left:0;padding-right:0;padding-top:0;padding-bottom:0;background:none;border-radius:0;margin-bottom:0;text-align:center;">
                                                <h1 class="signature_name-target" style="font-size: 18px;line-height:22px; margin-left: 0px;margin-right: 0px;margin-top: 0px;margin-bottom: 0;text-transform: uppercase;color: #4fb218;font-weight: bold;">John Donga</h1>
                                                <h5 class="signature_jobtitle-target change_font" style="font-size: 12px;line-height:14px;color: #999;padding: 0;margin-left: 0px;margin-right: 0px;margin-top: 0px;margin-bottom: 0;font-weight: 600;">senior content writer</h5>
                                            </div>
                                        </td>
                                        <td class="change_theme_border_left_2" style="padding-left:10px;padding-top:0;padding-right:0;padding-bottom:0;border-left:solid 2px #4fb218;" valign="middle">
                                            <div class="" style="padding-top:0;padding-bottom:0;padding-left:0;padding-right:0;">
                                                <ul class="change_font" style="margin-top: 0;margin-left: 0;margin-right: 0;padding: 0;list-style: none;text-align:left;font-size:12px;line-height:16px;margin-bottom:10px;">
                                                    <li style="margin-bottom: 0px;margin-right: 10px;margin-left: 0;display:inline-block;color:#333;"><span class="change_theme_p mobile_title" style="color: #4fb218;">Mobile:</span> <span class="txt signature_mobilephone-target">445-456-7890</span></li>
                                                    <li style="margin-bottom: 0px;margin-right: 10px;margin-left: 0;display:inline-block;color:#333;"><span class="change_theme_p fax_title" style="color: #4fb218;">fax:</span> <span class="txt signature_fax-target">921-142-0666</span></li>
                                                    <li style="margin-bottom: 0px;margin-right: 10px;margin-left: 0;display:inline-block;color:#333;"><span class="change_theme_p email_title" style="color: #4fb218;">Email:</span> <a href="mailto:john@signaturia.com" style="color:#333;text-decoration:none;" class="link signature_email-target">john@signaturia.com</a></li>
                                                </ul>
                                                <p class="change_font" style="text-align:left;line-height: 16px;font-weight: 400;font-size: 12px;color: #333333;margin-top: 0;margin-left: 0;margin-right: 0;margin-bottom: 0;"><span class="signature_companyname-target change_theme_p " style="color: #4fb218;display:block;">Signaturia</span><span class="txt signature_address-target">32-black street, winter hour.United Kingdom 08808</span><span class="txt signature_address2-target"></span></p>
                                                <p class="change_font" style="text-align:left;line-height: 16px;font-weight: 400;font-size: 12px;color: #333333;margin-top: 0;margin-left: 0;margin-right: 0;margin-bottom:10px;"><span class="change_theme_p website_title" style="color: #4fb218;">Website:</span> <a href="www.signaturia.com" style="color:#333;text-decoration:none;" class="link signature_website-target">www.signaturia.com</a></p>
                                                <div class="social-list social_set_1" style="margin: 0;padding:0;text-align:left;">
                                                    <?php
                                                    foreach ($social_icons as $key => $social_icon) {
                                                        if ($key == 10) {
                                                            break;
                                                        }
                                                    ?>
                                                        <a style="text-decoration:none;display:inline-block;" class="social sig-hide" href="#">
                                                            <img width="20px" style="margin-bottom:2px;margin-right:2px; border:none; display:inline;" height="20px" data-filename="<?php echo $social_icon['icon1'] ?>" src="<?php echo base_url() . SOCIAL_ICONS_SET_1 . $social_icon['icon1'] ?>" alt="<?php echo $social_icon['name'] ?>">
                                                        </a>
                                                    <?php } ?>
                                                </div>
                                                <div class="social-list social_set_2" style="margin: 0;padding:0;text-align:left;display: none">
                                                    <?php
                                                    foreach ($social_icons as $key => $social_icon) {
                                                        if ($key == 10) {
                                                            break;
                                                        }
                                                    ?>
                                                        <a style="text-decoration:none;display:inline-block;" class="social" href="#"> <img width="20px" style="margin-bottom:2px;margin-right:2px; border:none; display:inline;" height="20px" src="<?php echo base_url() . SOCIAL_ICONS_SET_2 . $social_icon['icon2'] ?>" alt="" /></a>
                                                    <?php } ?>
                                                </div>
                                                <div class="social-list social_set_3" style="margin: 0;padding:0;text-align:left;display: none">
                                                    <?php
                                                    foreach ($social_icons as $key => $social_icon) {
                                                        if ($key == 10) {
                                                            break;
                                                        }
                                                    ?>
                                                        <a style="text-decoration:none;display:inline-block;" class="social" href="#"> <img width="20px" style="margin-bottom:2px;margin-right:2px; border:none; display:inline;" height="20px" src="<?php echo base_url() . SOCIAL_ICONS_SET_3 . $social_icon['icon3'] ?>" alt="" /></a>
                                                    <?php } ?>
                                                </div>
                                                <div class="social-list social_set_4" style="margin: 0;padding:0;text-align:left;display: none">
                                                    <?php
                                                    foreach ($social_icons as $key => $social_icon) {
                                                        if ($key == 10) {
                                                            break;
                                                        }
                                                    ?>
                                                        <a style="text-decoration:none;display:inline-block;" class="social" href="#"> <img width="20px" style="margin-bottom:2px;margin-right:2px; border:none; display:inline;" height="20px" src="<?php echo base_url() . SOCIAL_ICONS_SET_4 . $social_icon['icon4'] ?>" alt="" /></a>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="change_theme_border_top_2" style="border-top:solid 2px #4fb218;margin-top:15px;margin-bottom:15px;max-width:600px;"></div>
                            <p class="appstores-container" style="text-align:left;margin-top:10px;margin-bottom:10px;margin-left:0;margin-right:0;">
                                <a class="appstore signature_apple_app_store_link-target sig-hide" style="text-decoration:none;" href="#">
                                    <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/apple.png') ?>" class="appstore-icon " alt="Download on the App Store" data-pin-nopin="true"></a>
                                <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2">
                                <a class="appstore signature_google_play_link-target sig-hide" style="text-decoration:none;" href="#">
                                    <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/google.png') ?>" class="appstore-icon " alt="Get it on Google Play">
                                </a>
                                <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2">
                                <a class="appstore signature_amazon_app_store_link-target sig-hide" style="text-decoration:none;" href="#">
                                    <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/amazon.png') ?>" class="appstore-icon" alt="Available at Amazon">
                                </a>
                            </p>
                            <p class="signature_banner_url-target" style="text-align:left;margin-top:15px;margin-bottom:15px;margin-left:0;margin-right:0;">
                                <a href="#"> <img src="<?php echo base_url('assets/images/banner.png') ?>" alt="" border="0" width="300" data-pin-nopin="true" class="sig-ba"> </a>
                            </p>
                            <p class="signature_disclaimer-target" style="text-align:left;line-height: 13px;font-weight: 400;font-size: 9px;color: #333333;margin:0;">A disclaimer is generally any statement intended to specify or delimit the scope of rights and obligations that may be exercised and enforced by parties in a legally recognized relationship. In contrast to other terms for legally operative language, the term disclaimer usually implies situations that involve some level of uncertainty, waiver, or risk.</p>
                        </td>
                    </tr>
                </tbody>
            </table>
            <p class="latest_tweet"></p>
            <div class="youtube_video"> <?php if (isset($signature) && $signature['youtube_video'] != '') { ?> <iframe width="120" height="90" src="<?php echo $signature['youtube_video'] ?>" frameborder="0" allowfullscreen></iframe> <?php } ?> </div>


        </div>
    <?php } ?>
    <div class="new_signature" style="max-width:600px;<?php if (!isset($signature)) echo "display: none;" ?><?php echo $sign_font_style ?>">
        <table style="margin-top: 0;margin-left: 0;margin-right: 0;margin-bottom: 10px;border-spacing: 0;border-collapse: collapse;width:100%;">
            <tbody>
                <tr>
                    <td style="">
                        <table style="margin-top: 0;margin-left: 0;margin-right: 0;margin-bottom: 0;border-spacing: 0;border-collapse: collapse;width:100%;">
                            <tbody>
                                <tr>
                                    <td min-width="130" valign="top" align="center" style="padding-left:0;padding-right:10px;padding-top:0;padding-bottom:0;">
                                        <img src="<?php echo $sign_logo ?>" alt="<?php echo site_url() ?>" border="0" class="sig-logo default" style="height:100px;width:100px;margin-bottom:0;border-radius:50px;margin-bottom:10px;margin-left:0;margin-right:0;margin-top:0;<?php echo $logo_style ?>" data-pin-nopin="true">
                                        <div class="" style="padding-left:0;padding-right:0;padding-top:0;padding-bottom:0;background:none;border-radius:0;margin-bottom:0;text-align:center;">
                                            <h1 class="signature_name-target" style="font-size: <?php echo $sign_font_size + 4 ?>px;line-height:<?php echo $sign_font_size + 8 ?>px; margin-left: 0px;margin-right: 0px;margin-top: 0px;margin-bottom: 0;text-transform: uppercase;color: <?php echo $sign_text_color ?>;font-weight: bold;"><?php if (isset($signature)) echo $signature['name'] ?></h1>
                                            <h5 class="signature_jobtitle-target change_font" style="font-size: <?php echo $sign_font_size ?>px;line-height:<?php echo $sign_font_size + 4 ?>px;color: #999;padding: 0;margin-left: 0px;margin-right: 0px;margin-top: 0px;margin-bottom: 0;font-weight: 600;"><?php if (isset($signature)) echo $signature['job_title'] ?></h5>
                                        </div>
                                    </td>
                                    <td class="change_theme_border_left_2" style="padding-left:10px;padding-top:0;padding-right:0;padding-bottom:0;border-left:solid 2px <?php echo $sign_text_color ?>;" valign="middle">
                                        <div class="" style="padding-top:0;padding-bottom:0;padding-left:0;padding-right:0;">
                                            <ul class="change_font" style="margin-top: 0;margin-left: 0;margin-right: 0;padding: 0;list-style: none;text-align:left;font-size:<?php echo $sign_font_size ?>px;line-height:<?php echo $sign_font_size + 4 ?>px;margin-bottom:10px;">
                                                <li style="margin-bottom: 0px;margin-right: 10px;margin-left: 0;display:inline-block;color:#333;"><span class="change_theme_p mobile_title" style="color: <?php echo $sign_text_color ?>;<?php
                                                                                                                                                                                                                                            if (isset($signature) && $signature['mobile_number'] != '')
                                                                                                                                                                                                                                                echo "display:inline-block;";
                                                                                                                                                                                                                                            else
                                                                                                                                                                                                                                                echo "display:none;"
                                                                                                                                                                                                                                            ?>">Mobile:</span> <span class="txt signature_mobilephone-target" style="color: <?php echo $sign_p_text_color ?>;"><?php if (isset($signature)) echo $signature['mobile_number'] ?></span></li>
                                                <li style="margin-bottom: 0px;margin-right: 10px;margin-left: 0;display:inline-block;color:#333;"><span class="change_theme_p fax_title" style="color: <?php echo $sign_text_color ?>;<?php
                                                                                                                                                                                                                                        if (isset($signature) && $signature['fax'] != '')
                                                                                                                                                                                                                                            echo "display:inline-block;";
                                                                                                                                                                                                                                        else
                                                                                                                                                                                                                                            echo "display:none;"
                                                                                                                                                                                                                                        ?>">fax:</span> <span class="txt signature_fax-target" style="color: <?php echo $sign_p_text_color ?>;"><?php if (isset($signature)) echo $signature['fax'] ?></span></li>
                                                <li style="margin-bottom: 0px;margin-right: 10px;margin-left: 0;display:inline-block;color:#333;"><span class="change_theme_p email_title" style="color: <?php echo $sign_text_color ?>;<?php
                                                                                                                                                                                                                                        if (isset($signature) && $signature['email'] != '')
                                                                                                                                                                                                                                            echo "display:inline-block;";
                                                                                                                                                                                                                                        else
                                                                                                                                                                                                                                            echo "display:none;"
                                                                                                                                                                                                                                        ?>">Email:</span> <a href="<?php if (isset($signature)) echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=personal&ident=email') ?>" style="color:<?php echo $sign_link_color ?>;text-decoration:none;" class="link signature_email-target"><?php if (isset($signature)) echo $signature['email'] ?></a></li>
                                            </ul>
                                            <p class="change_font" style="text-align:left;line-height: <?php echo $sign_font_size + 4 ?>px;font-weight: 400;font-size: <?php echo $sign_font_size ?>px;color: #333333;margin-top: 0;margin-left: 0;margin-right: 0;margin-bottom: 0;"><span class="signature_companyname-target change_theme_p" style="color: <?php echo $sign_text_color ?>;display:block;"><?php if (isset($signature)) echo $signature['company_name'] ?></span><span class="txt signature_address-target" style="color:<?php echo $sign_p_text_color ?>"><?php if (isset($signature)) echo $signature['address']; ?></span><span class="txt signature_address2-target" style="color:<?php echo $sign_p_text_color ?>"><?php if (isset($signature)) echo '<br/>' . $signature['address_line2']; ?></span></p>
                                            <p class="change_font" style="text-align:left;line-height: <?php echo $sign_font_size + 4 ?>px;font-weight: 400;font-size: <?php echo $sign_font_size ?>px;color: #333333;margin-top: 0;margin-left: 0;margin-right: 0;margin-bottom:10px;"><span class="change_theme_p website_title" style="color: <?php echo $sign_text_color ?>;<?php
                                                                                                                                                                                                                                                                                                                                                                                if (isset($signature) && $signature['website'] != '')
                                                                                                                                                                                                                                                                                                                                                                                    echo "";
                                                                                                                                                                                                                                                                                                                                                                                else
                                                                                                                                                                                                                                                                                                                                                                                    echo "display:none;"
                                                                                                                                                                                                                                                                                                                                                                                ?>">Website:</span> <a href="<?php if (isset($signature)) echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=personal&ident=website'); ?>" style="color:<?php echo $sign_link_color ?>;text-decoration:none;" class="link signature_website-target"><?php if (isset($signature)) echo $signature['website']; ?></a></p>

                                            <div class="social-list social_set_1" style="margin: 0;padding:0;text-align:left;<?php echo $social1_style; ?>">
                                                <?php
                                                foreach ($social_icons as $key => $social_icon) {
                                                    $style = "display:none;";
                                                    if (isset($signature_socials)) {
                                                        if (array_key_exists($social_icon['id'], $signature_socials)) {
                                                            $style = 'display:inline-block;';
                                                        }
                                                    }
                                                ?>
                                                    <a style="<?php echo $style ?> text-decoration:none;" class="social <?php echo "signature_social_" . $social_icon['id'] . "-target" ?> sig-hide" href="<?php echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=social&ident=' . $social_icon['id']) ?>">
                                                        <img width="<?php echo $sign_iconsize ?>px" style="margin-bottom:2px;margin-right:2px; border:none; display:inline;" height="<?php echo $sign_iconsize ?>px" data-filename="<?php echo $social_icon['icon1'] ?>" src="<?php echo base_url() . SOCIAL_ICONS_SET_1 . $social_icon['icon1'] ?>" alt="<?php echo $social_icon['name'] ?>">
                                                    </a>
                                                <?php } ?>
                                            </div>
                                            <div class="social-list social_set_2" style="margin: 0;padding:0;text-align:left;<?php echo $social2_style; ?>">
                                                <?php
                                                foreach ($social_icons as $key => $social_icon) {
                                                    $style = "display:none;";
                                                    if (isset($signature_socials)) {
                                                        if (array_key_exists($social_icon['id'], $signature_socials)) {
                                                            $style = '';
                                                        }
                                                    }
                                                ?>

                                                    <a style="<?php echo $style ?> text-decoration:none;" class="social <?php echo "signature_social_" . $social_icon['id'] . "-target" ?> sig-hide" href="<?php echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=social&ident=' . $social_icon['id']) ?>">
                                                        <img width="<?php echo $sign_iconsize ?>px" style="margin-bottom:2px;margin-right:2px; border:none; display:inline;" height="<?php echo $sign_iconsize ?>px" data-filename="<?php echo $social_icon['icon2'] ?>" src="<?php echo base_url() . SOCIAL_ICONS_SET_2 . $social_icon['icon2'] ?>" alt="<?php echo $social_icon['name'] ?>">
                                                    </a>
                                                <?php } ?>
                                            </div>
                                            <div class="social-list social_set_3" style="margin: 0;padding:0;text-align:left;<?php echo $social3_style; ?>">
                                                <?php
                                                foreach ($social_icons as $key => $social_icon) {
                                                    $style = "display:none;";
                                                    if (isset($signature_socials)) {
                                                        if (array_key_exists($social_icon['id'], $signature_socials)) {
                                                            $style = '';
                                                        }
                                                    }
                                                ?>

                                                    <a style="<?php echo $style ?> text-decoration:none;" class="social <?php echo "signature_social_" . $social_icon['id'] . "-target" ?> sig-hide" href="<?php echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=social&ident=' . $social_icon['id']) ?>">
                                                        <img width="<?php echo $sign_iconsize ?>px" style="margin-bottom:2px;margin-right:2px; border:none; display:inline;" height="<?php echo $sign_iconsize ?>px" data-filename="<?php echo $social_icon['icon3'] ?>" src="<?php echo base_url() . SOCIAL_ICONS_SET_3 . $social_icon['icon3'] ?>" alt="<?php echo $social_icon['name'] ?>">
                                                    </a>
                                                <?php } ?>
                                            </div>
                                            <div class="social-list social_set_4" style="margin: 0;padding:0;text-align:left;<?php echo $social4_style; ?>">
                                                <?php
                                                foreach ($social_icons as $key => $social_icon) {
                                                    $style = "display:none;";
                                                    if (isset($signature_socials)) {
                                                        if (array_key_exists($social_icon['id'], $signature_socials)) {
                                                            $style = '';
                                                        }
                                                    }
                                                ?>
                                                    <a style="<?php echo $style ?> text-decoration:none;" class="social <?php echo "signature_social_" . $social_icon['id'] . "-target" ?> sig-hide" href="<?php echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=social&ident=' . $social_icon['id']) ?>">
                                                        <img width="<?php echo $sign_iconsize ?>px" style="margin-bottom:2px;margin-right:2px; border:none; display:inline;" height="<?php echo $sign_iconsize ?>px" data-filename="<?php echo $social_icon['icon4'] ?>" src="<?php echo base_url() . SOCIAL_ICONS_SET_4 . $social_icon['icon4'] ?>" alt="<?php echo $social_icon['name'] ?>">
                                                    </a>
                                                <?php } ?>
                                            </div>

                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="change_theme_border_top_2" style="border-top:solid 2px <?php echo $sign_text_color ?>;margin-top:15px;margin-bottom:15px;max-width:600px;"></div>
                        <p class="appstores-container" style="text-align:left;margin-top:10px;margin-bottom:10px;margin-left:0;margin-right:0;">
                            <?php if (isset($signature) && @$signature['appstore_link'] != '') { ?>
                                <a class="appstore signature_apple_app_store_link-target sig-hide" style="text-decoration:none;" href="<?php if (isset($signature)) echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=app&ident=appstore'); ?>">
                                    <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/apple.png') ?>" class="appstore-icon " alt="Download on the App Store" data-pin-nopin="true">
                                </a>
                            <?php } else { ?>
                                <a class="appstore signature_apple_app_store_link-target sig-hide" style="text-decoration:none;display: none;" href="#">
                                    <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/apple.png') ?>" class="appstore-icon " alt="Download on the App Store" data-pin-nopin="true">
                                </a>
                            <?php } ?>
                            <?php if (isset($signature) && @$signature['googleplaytore_link'] != '') { ?>

                                <a class="appstore signature_google_play_link-target sig-hide" style="text-decoration:none;" href="<?php if (isset($signature)) echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=app&ident=googleplaytore'); ?>">
                                    <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/google.png') ?>" class="appstore-icon " alt="Get it on Google Play">
                                </a>
                            <?php } else { ?>

                                <a class="appstore signature_google_play_link-target sig-hide" style="text-decoration:none;display: none;" href="#">
                                    <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/google.png') ?>" class="appstore-icon " alt="Get it on Google Play">
                                </a>
                            <?php } ?>
                            <?php if (isset($signature) && @$signature['amazon_link'] != '') { ?>

                                <a class="appstore signature_amazon_app_store_link-target sig-hide" style="text-decoration:none;" href="<?php if (isset($signature)) echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=app&ident=amazon'); ?>">
                                    <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/amazon.png') ?>" class="appstore-icon" alt="Available at Amazon">
                                </a>
                            <?php } else { ?>

                                <a class="appstore signature_amazon_app_store_link-target sig-hide" style="text-decoration:none;display: none;" href="#">
                                    <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/amazon.png') ?>" class="appstore-icon" alt="Available at Amazon">
                                </a>
                            <?php } ?>
                        </p>
                        <?php if (isset($signature) && $signature['banner'] != '') { ?>
                            <p class="ba-container" style="text-align:left;margin-top:15px;margin-bottom:15px;margin-left:0;margin-right:0;">
                                <a href="<?php if (isset($signature)) echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=banner'); ?>" class="signature_banner_url-target">
                                    <img src="<?php echo base_url() . SIGNATURE_UPLOADS_BANNER . $signature['banner'] ?>" alt="signaturia.com" border="0" class="sig-ba" data-pin-nopin="true" style="max-width:400px;height:auto;width:100%;" />
                                </a>
                            </p>
                        <?php } else { ?>
                            <p class="ba-container" style="display:none;text-align:left;margin-top:15px;margin-bottom:15px;margin-left:0;margin-right:0;">
                                <a href="<?php echo site_url('/') ?>" class="signature_banner_url-target">
                                    <img src="<?php echo base_url('assets/images/banner.png') ?>" alt="signaturia.com" border="0" class="sig-ba" data-pin-nopin="true" style="max-width:400px;height:auto;width:100%;" />
                                </a>
                            </p>
                        <?php } ?>
                        <p class="signature_disclaimer-target" style="text-align:left;line-height: 13px;font-weight: 400;font-size: 9px;color: #333333;margin:0;<?php if (isset($signature) && $signature['show_disclaimer'] == 0) echo 'display: none;' ?>"><?php if (isset($signature)) echo $signature['disclaimer'] ?></p>
                    </td>
                </tr>
            </tbody>
            <p class="latest_tweet"></p>
            <div class="youtube_video"> <?php if (isset($signature) && $signature['youtube_video'] != '') { ?> <iframe width="120" height="90" src="<?php echo $signature['youtube_video'] ?>" frameborder="0" allowfullscreen></iframe> <?php } ?> </div>


        </table>
    </div>
</div>
<div id="theme-12" class="preview" <?php echo $theme12_style ?>>
    <?php if (!isset($signature)) { ?>
        <div class="default_signature" style="max-width:600px;">
            <table style="margin-top: 0;margin-left: 0;margin-right: 0;margin-bottom: 10px;border-spacing: 0;border-collapse: collapse;width:100%;">
                <tbody>
                    <tr>
                        <td style="">
                            <div style="height: 1px;padding-left: 20px;margin-bottom: 20px;">
                                <div class="change_theme_background" style="width: 170px;height: 120px;padding: 10px;display: table-cell;vertical-align: middle;background: #52b51b;position: relative;z-index: 1;text-align:center">
                                    <img src="<?php echo base_url('assets/images/footer-logo.png') ?>" alt="htmlsig.com" border="0" class="sig-logo default" style="margin-bottom:0;margin-bottom:0;margin-left:0;margin-right:0;margin-top:0;max-width:150px;max-height:100px;" data-pin-nopin="true">
                                </div>
                            </div>
                            <div style="background: #333;color: #fff;padding: 5px;padding-left: 210px;margin-bottom: 20px;">
                                <div style="height: 60px;display: table-cell;vertical-align: middle;">
                                    <ul class="change_font" style="margin-top: 0;margin-left: 0;margin-right: 0;padding: 0;list-style: none;text-align:left;font-size:12px;line-height:16px;margin-bottom:0;">
                                        <li style="margin-bottom: 5px;margin-right: 10px;margin-left: 0;display: block;color:#fff;"><span class="mobile_title" style="font-weight: bold;">Mobile:</span> <span class="signature_mobilephone-target">445-456-7890</span></li>
                                        <li style="margin-bottom: 5px;margin-right: 10px;margin-left: 0;display: block;color:#fff;"><span class="fax_title" style="font-weight: bold;">fax:</span> <span class="signature_fax-target">921-142-0666</span></li>
                                        <li style="margin-bottom: 0px;margin-right: 0;margin-left: 0;display: block;color:#fff;"><span class="email_title" style="font-weight: bold;">Email:</span> <a href="mailto:john@signaturia.com" style="color:#fff;text-decoration:none;" class="signature_email-target">john@signaturia.com</a></li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <table style="margin-top: 0;margin-left: 0;margin-right: 0;margin-bottom: 0;border-spacing: 0;border-collapse: collapse;width:100%;">
                                <tbody>
                                    <tr>
                                        <td style="width: 170px;min-width: 170px;padding: 10px;padding-left: 20px;text-align: center;">
                                            <h1 class="signature_name-target change_theme_p" style="font-size: 18px;line-height:22px; margin-left: 0px;margin-right: 0px;margin-top: 0px;margin-bottom: 0;text-transform: uppercase;color: #4fb218;font-weight: bold;">John Donga</h1>
                                            <h5 class="signature_jobtitle-target change_font" style="font-size: 12px;line-height:14px;color: #999;padding: 0;margin-left: 0px;margin-right: 0px;margin-top: 0px;margin-bottom: 0;font-weight: 600;">senior content writer</h5>
                                        </td>
                                        <td style="width: 100%;text-align: left;padding: 10px;">
                                            <p class="change_font" style="text-align:left;line-height: 16px;font-weight: 400;font-size: 12px;color: #333333;margin-top: 0;margin-left: 0;margin-right: 0;margin-bottom: 0;"><span class="signature_companyname-target change_theme_p" style="color: #4fb218;display:block;">Signaturia</span><span class="txt signature_address-target">32-black street, winter hour. United Kingdom 08808</span><span class="txt signature_address2-target"></span></p>
                                            <p class="change_font" style="text-align:left;line-height: 16px;font-weight: 400;font-size: 12px;color: #333333;margin-top: 0;margin-left: 0;margin-right: 0;margin-bottom:10px;"><span class="change_theme_p website_title" style="color: #4fb218;">Website:</span> <a href="www.signaturia.com" style="color:#333;text-decoration:none;" class="link signature_website-target">www.signaturia.com</a></p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="change_theme_border_top_1" style="border-top:solid 1px #4fb218;margin-top:0;margin-bottom:15px;max-width:600px;width:100%;"></div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="" style="padding-top:0;padding-bottom:0;padding-left:0;padding-right:0;">
                                <div class="social-list social_set_1" style="margin: 0;padding:0;text-align:left;">
                                    <?php
                                    foreach ($social_icons as $key => $social_icon) {
                                        if ($key == 10) {
                                            break;
                                        }
                                    ?>
                                        <a style="text-decoration:none;display:inline-block;" class="social sig-hide" href="#">
                                            <img width="20px" style="margin-bottom:2px;margin-right:2px; border:none; display:inline;" height="20px" data-filename="<?php echo $social_icon['icon1'] ?>" src="<?php echo base_url() . SOCIAL_ICONS_SET_1 . $social_icon['icon1'] ?>" alt="<?php echo $social_icon['name'] ?>">
                                        </a>
                                    <?php } ?>
                                </div>
                                <div class="social-list social_set_2" style="margin: 0;padding:0;text-align:left;display: none">
                                    <?php
                                    foreach ($social_icons as $key => $social_icon) {
                                        if ($key == 10) {
                                            break;
                                        }
                                    ?>
                                        <a style="text-decoration:none;display:inline-block;" class="social" href="#"> <img width="20px" style="margin-bottom:2px;margin-right:2px; border:none; display:inline;" height="20px" src="<?php echo base_url() . SOCIAL_ICONS_SET_2 . $social_icon['icon2'] ?>" alt="" /></a>
                                    <?php } ?>
                                </div>
                                <div class="social-list social_set_3" style="margin: 0;padding:0;text-align:left;display: none">
                                    <?php
                                    foreach ($social_icons as $key => $social_icon) {
                                        if ($key == 10) {
                                            break;
                                        }
                                    ?>
                                        <a style="text-decoration:none;display:inline-block;" class="social" href="#"> <img width="20px" style="margin-bottom:2px;margin-right:2px; border:none; display:inline;" height="20px" src="<?php echo base_url() . SOCIAL_ICONS_SET_3 . $social_icon['icon3'] ?>" alt="" /></a>
                                    <?php } ?>
                                </div>
                                <div class="social-list social_set_4" style="margin: 0;padding:0;text-align:left;display: none">
                                    <?php
                                    foreach ($social_icons as $key => $social_icon) {
                                        if ($key == 10) {
                                            break;
                                        }
                                    ?>
                                        <a style="text-decoration:none;display:inline-block;" class="social" href="#"> <img width="20px" style="margin-bottom:2px;margin-right:2px; border:none; display:inline;" height="20px" src="<?php echo base_url() . SOCIAL_ICONS_SET_4 . $social_icon['icon4'] ?>" alt="" /></a>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="change_theme_border_top_1 hide_bottom_line" style="border-top:solid 1px #4fb218;margin-top:10px;margin-bottom:15px;max-width:600px;width:100%;"></div>
                            <p class="appstores-container" style="text-align:left;margin-top:10px;margin-bottom:10px;margin-left:0;margin-right:0;">
                                <a class="appstore signature_apple_app_store_link-target sig-hide" style="text-decoration:none;" href="#">
                                    <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/apple.png') ?>" class="appstore-icon " alt="Download on the App Store" data-pin-nopin="true"></a>
                                <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2">
                                <a class="appstore signature_google_play_link-target sig-hide" style="text-decoration:none;" href="#">
                                    <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/google.png') ?>" class="appstore-icon " alt="Get it on Google Play">
                                </a>
                                <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2">
                                <a class="appstore signature_amazon_app_store_link-target sig-hide" style="text-decoration:none;" href="#">
                                    <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/amazon.png') ?>" class="appstore-icon" alt="Available at Amazon">
                                </a>
                            </p>
                            <p style="text-align:left;margin-top:15px;margin-bottom:15px;margin-left:0;margin-right:0;">
                                <a href="#"> <img src="<?php echo base_url('assets/images/banner.png') ?>" alt="" border="0" width="300" data-pin-nopin="true" class="sig-ba"> </a>
                            </p>
                            <p class="signature_disclaimer-target" style="text-align:left;line-height: 13px;font-weight: 400;font-size: 9px;color: #333333;margin:0;">A disclaimer is generally any statement intended to specify or delimit the scope of rights and obligations that may be exercised and enforced by parties in a legally recognized relationship. In contrast to other terms for legally operative language, the term disclaimer usually implies situations that involve some level of uncertainty, waiver, or risk.</p>
                        </td>
                    </tr>
                </tbody>
            </table>
            <p class="latest_tweet"></p>
            <div class="youtube_video">
                <?php if (isset($signature) && $signature['youtube_video'] != '') { ?>
                    <iframe width="120" height="90" src="<?php echo $signature['youtube_video'] ?>" frameborder="0" allowfullscreen></iframe>
                <?php } ?>
            </div>
        </div>
    <?php } ?>
    <div class="new_signature" style="max-width:600px;<?php if (!isset($signature)) echo "display: none;" ?><?php echo $sign_font_style ?>">
        <table style="margin-top: 0;margin-left: 0;margin-right: 0;margin-bottom: 10px;border-spacing: 0;border-collapse: collapse;width:100%;">
            <tbody>
                <tr>
                    <td style="">
                        <div style="height: 1px;padding-left: 20px;margin-bottom: 20px;">
                            <div class="change_theme_background" style="width: 170px;height: 120px;padding: 10px;display: table-cell;vertical-align: middle;background: #52b51b;position: relative;z-index: 1;text-align:center">
                                <img src="<?php echo $sign_logo ?>" alt="<?php echo site_url() ?>" border="0" class="sig-logo default" style="margin-bottom:0;margin-bottom:0;margin-left:0;margin-right:0;margin-top:0;max-width:150px;max-height:100px;<?php echo $logo_style ?>" data-pin-nopin="true">
                            </div>
                        </div>
                        <div style="background: #333;color: #fff;padding: 5px;padding-left: 210px;margin-bottom: 20px;">
                            <div style="height: 60px;display: table-cell;vertical-align: middle;">
                                <ul class="change_font" style="margin-top: 0;margin-left: 0;margin-right: 0;padding: 0;list-style: none;text-align:left;font-size:<?php echo $sign_font_size ?>px;line-height:<?php echo $sign_font_size + 4 ?>px;margin-bottom:0;">
                                    <li style="margin-bottom: 5px;margin-right: 10px;margin-left: 0;display:block;color:#fff;"><span class="mobile_title" style="font-weight: bold;<?php
                                                                                                                                                                                    if (isset($signature) && $signature['mobile_number'] != '')
                                                                                                                                                                                        echo "display:inline-block;";
                                                                                                                                                                                    else
                                                                                                                                                                                        echo "display:none;"
                                                                                                                                                                                    ?>">Mobile:</span> <span class="signature_mobilephone-target"><?php if (isset($signature)) echo $signature['mobile_number'] ?></span></li>
                                    <li style="margin-bottom: 5px;margin-right: 10px;margin-left: 0;display:block;color:#fff;"><span class="fax_title" style="font-weight: bold;<?php
                                                                                                                                                                                if (isset($signature) && $signature['fax'] != '')
                                                                                                                                                                                    echo "display:inline-block;";
                                                                                                                                                                                else
                                                                                                                                                                                    echo "display:none;"
                                                                                                                                                                                ?>">fax:</span> <span class="signature_fax-target"><?php if (isset($signature)) echo $signature['fax'] ?></span></li>
                                    <li style="margin-bottom: 0px;margin-right: 0;margin-left: 0;display:block;color:#fff;"><span class="email_title" style="font-weight: bold;<?php
                                                                                                                                                                                if (isset($signature) && $signature['email'] != '')
                                                                                                                                                                                    echo "display:inline-block;";
                                                                                                                                                                                else
                                                                                                                                                                                    echo "display:none;"
                                                                                                                                                                                ?>">Email:</span> <a href="<?php if (isset($signature)) echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=personal&ident=email') ?>" style="color:#fff;text-decoration:none;" class="signature_email-target"><?php if (isset($signature)) echo $signature['email'] ?></a></li>
                                </ul>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <table style="margin-top: 0;margin-left: 0;margin-right: 0;margin-bottom: 0;border-spacing: 0;border-collapse: collapse;width:100%;">
                            <tbody>
                                <tr>
                                    <td style="width: 170px;min-width: 170px;padding: 10px;padding-left: 20px;text-align: center;">
                                        <h1 class="signature_name-target change_theme_p" style="font-size: <?php echo $sign_font_size + 4 ?>px;line-height:<?php echo $sign_font_size + 8 ?>px; margin-left: 0px;margin-right: 0px;margin-top: 0px;margin-bottom: 0;text-transform: uppercase;color: <?php echo $sign_text_color ?>;font-weight: bold;"><?php if (isset($signature)) echo $signature['name'] ?></h1>
                                        <h5 class="signature_jobtitle-target change_font" style="font-size: <?php echo $sign_font_size ?>px;line-height:<?php echo $sign_font_size + 4 ?>px;color: #999;padding: 0;margin-left: 0px;margin-right: 0px;margin-top: 0px;margin-bottom: 0;font-weight: 600;"><?php if (isset($signature)) echo $signature['job_title'] ?></h5>
                                    </td>
                                    <td style="width: 100%;text-align: left;padding: 10px;">
                                        <p class="change_font" style="text-align:left;line-height: <?php echo $sign_font_size + 4 ?>px;font-weight: 400;font-size: <?php echo $sign_font_size ?>px;color: #333333;margin-top: 0;margin-left: 0;margin-right: 0;margin-bottom: 0;"><span class="signature_companyname-target change_theme_p" style="color: <?php echo $sign_text_color ?>;display:block;"><?php if (isset($signature)) echo $signature['company_name'] ?></span><span class="txt signature_address-target" style="color:<?php echo $sign_p_text_color ?>"><?php if (isset($signature)) echo $signature['address']; ?></span><span class="txt signature_address2-target" style="color:<?php echo $sign_p_text_color ?>"><?php if (isset($signature)) echo '<br/>' . $signature['address_line2']; ?></span></p>
                                        <p class="change_font" style="text-align:left;line-height: <?php echo $sign_font_size + 4 ?>px;font-weight: 400;font-size: <?php echo $sign_font_size ?>px;color: #333333;margin-top: 0;margin-left: 0;margin-right: 0;margin-bottom:10px;"><span class="change_theme_p website_title" style="color: <?php echo $sign_text_color ?>;<?php
                                                                                                                                                                                                                                                                                                                                                                            if (isset($signature) && $signature['website'] != '')
                                                                                                                                                                                                                                                                                                                                                                                echo "";
                                                                                                                                                                                                                                                                                                                                                                            else
                                                                                                                                                                                                                                                                                                                                                                                echo "display:none;"
                                                                                                                                                                                                                                                                                                                                                                            ?>">Website:</span> <a href="<?php if (isset($signature)) echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=personal&ident=website'); ?>" style="color:<?php echo $sign_link_color ?>;text-decoration:none;" class="link signature_website-target"><?php if (isset($signature)) echo $signature['website']; ?></a></p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="change_theme_border_top_1" style="border-top:solid 1px <?php echo $sign_text_color ?>;margin-top:0;margin-bottom:15px;max-width:600px;width:100%;"></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="" style="padding-top:0;padding-bottom:0;padding-left:0;padding-right:0;">
                            <div class="social-list social_set_1" style="margin: 0;padding:0;text-align:left;<?php echo $social1_style; ?>">
                                <?php
                                foreach ($social_icons as $key => $social_icon) {
                                    $style = "display:none;";
                                    if (isset($signature_socials)) {
                                        if (array_key_exists($social_icon['id'], $signature_socials)) {
                                            $style = 'display:inline-block;';
                                        }
                                    }
                                ?>
                                    <a style="<?php echo $style ?> text-decoration:none;" class="social <?php echo "signature_social_" . $social_icon['id'] . "-target" ?> sig-hide" href="<?php echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=social&ident=' . $social_icon['id']) ?>">
                                        <img width="<?php echo $sign_iconsize ?>px" style="margin-bottom:2px;margin-right:2px; border:none; display:inline;" height="<?php echo $sign_iconsize ?>px" data-filename="<?php echo $social_icon['icon1'] ?>" src="<?php echo base_url() . SOCIAL_ICONS_SET_1 . $social_icon['icon1'] ?>" alt="<?php echo $social_icon['name'] ?>">
                                    </a>
                                <?php } ?>
                            </div>
                            <div class="social-list social_set_2" style="margin: 0;padding:0;text-align:left;<?php echo $social2_style; ?>">
                                <?php
                                foreach ($social_icons as $key => $social_icon) {
                                    $style = "display:none;";
                                    if (isset($signature_socials)) {
                                        if (array_key_exists($social_icon['id'], $signature_socials)) {
                                            $style = '';
                                        }
                                    }
                                ?>

                                    <a style="<?php echo $style ?> text-decoration:none;" class="social <?php echo "signature_social_" . $social_icon['id'] . "-target" ?> sig-hide" href="<?php echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=social&ident=' . $social_icon['id']) ?>">
                                        <img width="<?php echo $sign_iconsize ?>px" style="margin-bottom:2px;margin-right:2px; border:none; display:inline;" height="<?php echo $sign_iconsize ?>px" data-filename="<?php echo $social_icon['icon2'] ?>" src="<?php echo base_url() . SOCIAL_ICONS_SET_2 . $social_icon['icon2'] ?>" alt="<?php echo $social_icon['name'] ?>">
                                    </a>
                                <?php } ?>
                            </div>
                            <div class="social-list social_set_3" style="margin: 0;padding:0;text-align:left;<?php echo $social3_style; ?>">
                                <?php
                                foreach ($social_icons as $key => $social_icon) {
                                    $style = "display:none;";
                                    if (isset($signature_socials)) {
                                        if (array_key_exists($social_icon['id'], $signature_socials)) {
                                            $style = '';
                                        }
                                    }
                                ?>

                                    <a style="<?php echo $style ?> text-decoration:none;" class="social <?php echo "signature_social_" . $social_icon['id'] . "-target" ?> sig-hide" href="<?php echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=social&ident=' . $social_icon['id']) ?>">
                                        <img width="<?php echo $sign_iconsize ?>px" style="margin-bottom:2px;margin-right:2px; border:none; display:inline;" height="<?php echo $sign_iconsize ?>px" data-filename="<?php echo $social_icon['icon3'] ?>" src="<?php echo base_url() . SOCIAL_ICONS_SET_3 . $social_icon['icon3'] ?>" alt="<?php echo $social_icon['name'] ?>">
                                    </a>
                                <?php } ?>
                            </div>
                            <div class="social-list social_set_4" style="margin: 0;padding:0;text-align:left;<?php echo $social4_style; ?>">
                                <?php
                                foreach ($social_icons as $key => $social_icon) {
                                    $style = "display:none;";
                                    if (isset($signature_socials)) {
                                        if (array_key_exists($social_icon['id'], $signature_socials)) {
                                            $style = '';
                                        }
                                    }
                                ?>
                                    <a style="<?php echo $style ?> text-decoration:none;" class="social <?php echo "signature_social_" . $social_icon['id'] . "-target" ?> sig-hide" href="<?php echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=social&ident=' . $social_icon['id']) ?>">
                                        <img width="<?php echo $sign_iconsize ?>px" style="margin-bottom:2px;margin-right:2px; border:none; display:inline;" height="<?php echo $sign_iconsize ?>px" data-filename="<?php echo $social_icon['icon4'] ?>" src="<?php echo base_url() . SOCIAL_ICONS_SET_4 . $social_icon['icon4'] ?>" alt="<?php echo $social_icon['name'] ?>">
                                    </a>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="change_theme_border_top_1 hide_bottom_line <?php echo $hide_bottom_class ?>" style="border-top:solid 1px <?php echo $sign_text_color ?>;margin-top:10px;margin-bottom:15px;max-width:600px;width:100%;"></div>
                        <p class="appstores-container" style="text-align:left;margin-top:10px;margin-bottom:10px;margin-left:0;margin-right:0;">
                            <?php if (isset($signature) && @$signature['appstore_link'] != '') { ?>
                                <a class="appstore signature_apple_app_store_link-target sig-hide" style="text-decoration:none;" href="<?php if (isset($signature)) echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=app&ident=appstore'); ?>">
                                    <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/apple.png') ?>" class="appstore-icon " alt="Download on the App Store" data-pin-nopin="true">
                                </a>
                            <?php } else { ?>
                                <a class="appstore signature_apple_app_store_link-target sig-hide" style="text-decoration:none;display: none;" href="#">
                                    <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/apple.png') ?>" class="appstore-icon " alt="Download on the App Store" data-pin-nopin="true">
                                </a>
                            <?php } ?>
                            <?php if (isset($signature) && @$signature['googleplaytore_link'] != '') { ?>

                                <a class="appstore signature_google_play_link-target sig-hide" style="text-decoration:none;" href="<?php if (isset($signature)) echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=app&ident=googleplaytore'); ?>">
                                    <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/google.png') ?>" class="appstore-icon " alt="Get it on Google Play">
                                </a>
                            <?php } else { ?>

                                <a class="appstore signature_google_play_link-target sig-hide" style="text-decoration:none;display: none;" href="#">
                                    <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/google.png') ?>" class="appstore-icon " alt="Get it on Google Play">
                                </a>
                            <?php } ?>
                            <?php if (isset($signature) && @$signature['amazon_link'] != '') { ?>

                                <a class="appstore signature_amazon_app_store_link-target sig-hide" style="text-decoration:none;" href="<?php if (isset($signature)) echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=app&ident=amazon'); ?>">
                                    <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/amazon.png') ?>" class="appstore-icon" alt="Available at Amazon">
                                </a>
                            <?php } else { ?>

                                <a class="appstore signature_amazon_app_store_link-target sig-hide" style="text-decoration:none;display: none;" href="#">
                                    <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/amazon.png') ?>" class="appstore-icon" alt="Available at Amazon">
                                </a>
                            <?php } ?>
                        </p>
                        <?php if (isset($signature) && $signature['banner'] != '') { ?>
                            <p class="ba-container" style="text-align:left;margin-top:15px;margin-bottom:15px;margin-left:0;margin-right:0;">
                                <a href="<?php if (isset($signature)) echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=banner'); ?>" class="signature_banner_url-target">
                                    <img src="<?php echo base_url() . SIGNATURE_UPLOADS_BANNER . $signature['banner'] ?>" alt="signaturia.com" border="0" class="sig-ba" data-pin-nopin="true" style="max-width:400px;height:auto;width:100%;" />
                                </a>
                            </p>
                        <?php } else { ?>
                            <p class="ba-container" style="display:none;text-align:left;margin-top:15px;margin-bottom:15px;margin-left:0;margin-right:0;">
                                <a href="<?php echo site_url('/') ?>" class="signature_banner_url-target">
                                    <img src="<?php echo base_url('assets/images/banner.png') ?>" alt="signaturia.com" border="0" class="sig-ba" data-pin-nopin="true" style="max-width:400px;height:auto;width:100%;" />
                                </a>
                            </p>
                        <?php } ?>
                        <p class="signature_disclaimer-target" style="text-align:left;line-height: 13px;font-weight: 400;font-size: 9px;color: #333333;margin:0;<?php if (isset($signature) && $signature['show_disclaimer'] == 0) echo 'display: none;' ?>"><?php if (isset($signature)) echo $signature['disclaimer'] ?></p>
                    </td>
                </tr>
            </tbody>
        </table>
        <p class="latest_tweet"></p>
        <div class="youtube_video">
            <?php if (isset($signature) && $signature['youtube_video'] != '') { ?>
                <iframe width="120" height="90" src="<?php echo $signature['youtube_video'] ?>" frameborder="0" allowfullscreen></iframe>
            <?php } ?>
        </div>
    </div>
</div>
<div id="theme-13" class="preview" <?php echo $theme13_style ?>>
    <?php if (!isset($signature)) { ?>

        <div class="default_signature" style="max-width:500px;margin:0 0 50px;">
            <table style="margin-top: 0;margin-left: 0;margin-right: 0;margin-bottom: 10px;border-spacing: 0;border-collapse: collapse;width:100%;">
                <tr>
                    <td style="">
                        <table style="margin-top: 0;margin-left: 0;margin-right: 0;margin-bottom: 0;border-spacing: 0;border-collapse: collapse;width:100%;">
                            <tr>
                                <td min-width="130" valign="top" align="center" style="padding-left:0;padding-right:10px;padding-top:0;padding-bottom:0;">
                                    <img src="<?php echo base_url('assets/images/avatar.jpg') ?>" alt="<?php echo site_url() ?>" border="0" class="sig-logo default" style="height:100px;width:100px;margin-bottom:0;border-radius:50px;margin-bottom:10px;margin-left:0;margin-right:0;margin-top:0;" data-pin-nopin="true">
                                </td>
                                <td style="padding-left:0px;padding-top:0;padding-right:0;padding-bottom:0;" valign="top">
                                    <div class="" style="padding-top:0;padding-bottom:0;padding-left:0;padding-right:0;">
                                        <div class="change_theme1_border_bottom_2" style="padding-left:0;padding-right:0;padding-top:0;padding-bottom:10px;background:none;border-radius:0;margin-bottom:10px;text-align:left;border-bottom:solid 2px #25a6e6">
                                            <h1 style="margin: 0;line-height: 20px;">
                                                <span style="font-size: 16px;line-height:20px; margin-left: 0px;margin-right: 0px;margin-top: 0px;margin-bottom: 0;text-transform: uppercase;color: #25a6e6;font-weight: bold;" class="signature_name-target change_theme1_p">John Donga</span>
                                                <span class="signature_jobtitle-target change_font" style="font-size: 16px;line-height:20px;color: #666;padding: 0;margin-left: 0px;margin-right: 0px;margin-top: 0px;margin-bottom: 0;font-weight: 400;">senior content writer</span>
                                            </h1>
                                        </div>
                                        <ul class="change_font" style="margin-top: 0;margin-left: 0;margin-right: 0;padding: 0;list-style: none;text-align:left;font-size:12px;line-height:16px;margin-bottom:10px;">
                                            <li style="margin-bottom: 0px;margin-right: 10px;margin-left: 0;display:inline-block;color:#333;"><span class="mobile_title change_theme1_p" style="color: #25a6e6">M:</span> <span class="signature_mobilephone-target txt">445-456-7890</span></li>
                                            <li style="margin-bottom: 0px;margin-right: 10px;margin-left: 0;display:inline-block;color:#333;"><span class="fax_title change_theme1_p" style="color: #25a6e6">F:</span> <span class="signature_fax-target txt">921-142-0666</span></li>
                                            <li style="margin-bottom: 0px; margin-right: 10px;margin-left: 0;display:inline-block;color:#333;"><span class="email_title change_theme1_p" style="color: #25a6e6">E:</span> <a href="mailto:john@signaturia.com" style="color:#333;text-decoration:none;" class="link signature_email-target">john@signaturia.com</a></li>
                                            <li style="margin-bottom: 0px; margin-right: 10px;margin-left: 0;display:inline-block;color:#333;"><span class="change_theme1_p website_title" style="color: #25a6e6">W:</span> <a href="www.signaturia.com" style="color:#333;text-decoration:none;" class="link signature_website-target">www.signaturia.com</a></li>
                                        </ul>
                                        <p class="change_theme_font" style="text-align:left;font-weight: 600;margin-top: 0;margin-left: 0;margin-right: 0;margin-bottom: 0;"><span class="signature_companyname-target change_theme1_p" style="color: #25a6e6;display:block;">Signaturia</span></p>

                                        <div class="social-list social_set_1" style="margin: 0;padding:0;text-align:left;">
                                            <?php
                                            foreach ($social_icons as $key => $social_icon) {
                                                if ($key == 10) {
                                                    break;
                                                }
                                            ?>
                                                <a style="text-decoration:none;display:inline-block;" class="social sig-hide" href="#">
                                                    <img width="20px" style="margin-bottom:2px;margin-right:2px; border:none; display:inline;" height="20px" data-filename="<?php echo $social_icon['icon1'] ?>" src="<?php echo base_url() . SOCIAL_ICONS_SET_1 . $social_icon['icon1'] ?>" alt="<?php echo $social_icon['name'] ?>">
                                                </a>
                                            <?php } ?>
                                        </div>
                                        <div class="social-list social_set_2" style="margin: 0;padding:0;text-align:left;display: none">
                                            <?php
                                            foreach ($social_icons as $key => $social_icon) {
                                                if ($key == 10) {
                                                    break;
                                                }
                                            ?>
                                                <a style="text-decoration:none;display:inline-block;" class="social" href="#"> <img width="20px" style="margin-bottom:2px;margin-right:2px; border:none; display:inline;" height="20px" src="<?php echo base_url() . SOCIAL_ICONS_SET_2 . $social_icon['icon2'] ?>" alt="" /></a>
                                            <?php } ?>
                                        </div>
                                        <div class="social-list social_set_3" style="margin: 0;padding:0;text-align:left;display: none">
                                            <?php
                                            foreach ($social_icons as $key => $social_icon) {
                                                if ($key == 10) {
                                                    break;
                                                }
                                            ?>
                                                <a style="text-decoration:none;display:inline-block;" class="social" href="#"> <img width="20px" style="margin-bottom:2px;margin-right:2px; border:none; display:inline;" height="20px" src="<?php echo base_url() . SOCIAL_ICONS_SET_3 . $social_icon['icon3'] ?>" alt="" /></a>
                                            <?php } ?>
                                        </div>
                                        <div class="social-list social_set_4" style="margin: 0;padding:0;text-align:left;display: none">
                                            <?php
                                            foreach ($social_icons as $key => $social_icon) {
                                                if ($key == 10) {
                                                    break;
                                                }
                                            ?>
                                                <a style="text-decoration:none;display:inline-block;" class="social" href="#"> <img width="20px" style="margin-bottom:2px;margin-right:2px; border:none; display:inline;" height="20px" src="<?php echo base_url() . SOCIAL_ICONS_SET_4 . $social_icon['icon4'] ?>" alt="" /></a>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
            <p class="latest_tweet"></p>
            <div class="youtube_video">
                <?php if (isset($signature) && $signature['youtube_video'] != '') { ?>
                    <iframe width="120" height="90" src="<?php echo $signature['youtube_video'] ?>" frameborder="0" allowfullscreen></iframe>
                <?php } ?>
            </div>
        </div>
    <?php } ?>
    <div class="new_signature" style="max-width:600px;<?php if (!isset($signature)) echo "display: none;" ?><?php echo $sign_font_style ?>">
        <table style="margin-top: 0;margin-left: 0;margin-right: 0;margin-bottom: 10px;border-spacing: 0;border-collapse: collapse;width:100%;">
            <tr>
                <td style="">
                    <table style="margin-top: 0;margin-left: 0;margin-right: 0;margin-bottom: 0;border-spacing: 0;border-collapse: collapse;width:100%;">
                        <tr>
                            <td min-width="130" valign="top" align="center" style="padding-left:0;padding-right:10px;padding-top:0;padding-bottom:0;">
                                <img src="<?php echo $sign_logo ?>" alt="<?php echo site_url() ?>" border="0" class="sig-logo default" style="height:100px;width:100px;margin-bottom:0;border-radius:50px;margin-bottom:10px;margin-left:0;margin-right:0;margin-top:0;<?php echo $logo_style ?>" data-pin-nopin="true">
                            </td>
                            <td style="padding-left:0px;padding-top:0;padding-right:0;padding-bottom:0;" valign="top">
                                <div class="" style="padding-top:0;padding-bottom:0;padding-left:0;padding-right:0;">
                                    <div class="change_theme_border_bottom_2" style="padding-left:0;padding-right:0;padding-top:0;padding-bottom:10px;background:none;border-radius:0;margin-bottom:10px;text-align:left;border-bottom:solid 2px <?php echo $sign_text_color ?>;">
                                        <h1 style="margin: 0;line-height: 20px;">
                                            <span style="font-size: <?php echo $sign_font_size + 4 ?>px;line-height:<?php echo $sign_font_size + 8 ?>px; margin-left: 0px;margin-right: 0px;margin-top: 0px;margin-bottom: 0;text-transform: uppercase;color: <?php echo $sign_text_color ?>;font-weight: bold;" class="signature_name-target change_theme_p"><?php if (isset($signature)) echo $signature['name'] ?></span>
                                            <span class="signature_jobtitle-target change_font" style="font-size: <?php echo $sign_font_size + 4 ?>px;line-height:<?php echo $sign_font_size + 8 ?>px;color: #666;padding: 0;margin-left: 0px;margin-right: 0px;margin-top: 0px;margin-bottom: 0;font-weight: 400;"><?php if (isset($signature)) echo $signature['job_title'] ?></span>
                                        </h1>
                                    </div>
                                    <ul class="change_font" style="margin-top: 0;margin-left: 0;margin-right: 0;padding: 0;list-style: none;text-align:left;font-size:<?php echo $sign_font_size ?>px;line-height:<?php echo $sign_font_size + 4 ?>px;margin-bottom:10px;">
                                        <li style="margin-bottom: 0px;margin-right: 10px;margin-left: 0;display:inline-block;color:#333;">
                                            <span class="mobile_title change_theme_p" style="color: <?php echo $sign_text_color ?>;<?php
                                                                                                                                    if (isset($signature) && $signature['mobile_number'] != '')
                                                                                                                                        echo "display:inline-block;";
                                                                                                                                    else
                                                                                                                                        echo "display:none;"
                                                                                                                                    ?>">M:</span>
                                            <span class="signature_mobilephone-target txt" style="color: <?php echo $sign_p_text_color ?>;"><?php if (isset($signature)) echo $signature['mobile_number'] ?></span>
                                        </li>
                                        <li style="margin-bottom: 0px;margin-right: 10px;margin-left: 0;display:inline-block;color:#333;">
                                            <span class="fax_title change_theme_p" style="color: <?php echo $sign_text_color ?>;<?php
                                                                                                                                if (isset($signature) && $signature['fax'] != '')
                                                                                                                                    echo "display:inline-block;";
                                                                                                                                else
                                                                                                                                    echo "display:none;"
                                                                                                                                ?>">F:</span>
                                            <span class="signature_fax-target txt" style="color: <?php echo $sign_p_text_color ?>;"><?php if (isset($signature)) echo $signature['fax'] ?></span>
                                        </li>
                                        <li style="margin-bottom: 0px; margin-right: 10px;margin-left: 0;display:inline-block;color:#333;">
                                            <span class="email_title change_theme_p" style="color: <?php echo $sign_text_color ?>;<?php
                                                                                                                                    if (isset($signature) && $signature['email'] != '')
                                                                                                                                        echo "display:inline-block;";
                                                                                                                                    else
                                                                                                                                        echo "display:none;"
                                                                                                                                    ?>">E:</span>
                                            <a href="<?php if (isset($signature)) echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=personal&ident=email') ?>" style="color:<?php echo $sign_link_color ?>;text-decoration:none;" class="link signature_email-target"><?php if (isset($signature)) echo $signature['email'] ?></a>
                                        </li>
                                        <li style="margin-bottom: 0px; margin-right: 10px;margin-left: 0;display:inline-block;color:#333;"><span class="change_theme_p website_title" style="color:<?php echo $sign_text_color ?>;<?php
                                                                                                                                                                                                                                    if (isset($signature) && $signature['website'] != '')
                                                                                                                                                                                                                                        echo "";
                                                                                                                                                                                                                                    else
                                                                                                                                                                                                                                        echo "display:none;"
                                                                                                                                                                                                                                    ?>">W:</span> <a href="<?php if (isset($signature)) echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=personal&ident=website'); ?>" style="color:<?php echo $sign_link_color ?>;text-decoration:none;" class="link signature_website-target"><?php if (isset($signature)) echo $signature['website']; ?></a></li>
                                    </ul>
                                    <p class="change_theme_font" style="text-align:left;font-weight: 600;margin-top: 0;margin-left: 0;margin-right: 0;margin-bottom: 0;"><span class="signature_companyname-target change_theme_p" style="color: <?php echo $sign_text_color ?>;display:block;"><?php if (isset($signature)) echo $signature['company_name'] ?></span></p>
                                    <p class="change_font" style="text-align:left;line-height: <?php echo $sign_font_size + 4 ?>px;font-weight: 400;font-size: <?php echo $sign_font_size ?>px;color: #333333;margin-top: 0;margin-left: 0;margin-right: 0;margin-bottom: 0;">
                                        <span class="txt signature_address-target" style="color:<?php echo $sign_p_text_color ?>"><?php if (isset($signature)) echo $signature['address']; ?></span>
                                        <span class="txt signature_address2-target" style="color:<?php echo $sign_p_text_color ?>"><?php if (isset($signature)) echo '<br/>' . $signature['address_line2']; ?></span>
                                    </p>
                                    <div class="social-list social_set_1" style="margin: 0;padding:0;text-align:left;<?php echo $social1_style; ?>">
                                        <?php
                                        foreach ($social_icons as $key => $social_icon) {
                                            $style = "display:none;";
                                            if (isset($signature_socials)) {
                                                if (array_key_exists($social_icon['id'], $signature_socials)) {
                                                    $style = 'display:inline-block;';
                                                }
                                            }
                                        ?>

                                            <a style="<?php echo $style ?> text-decoration:none;" class="social <?php echo "signature_social_" . $social_icon['id'] . "-target" ?> sig-hide" href="<?php echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=social&ident=' . $social_icon['id']) ?>">
                                                <img width="<?php echo $sign_iconsize ?>px" style="margin-bottom:2px;margin-right:2px; border:none; display:inline;" height="<?php echo $sign_iconsize ?>px" data-filename="<?php echo $social_icon['icon1'] ?>" src="<?php echo base_url() . SOCIAL_ICONS_SET_1 . $social_icon['icon1'] ?>" alt="<?php echo $social_icon['name'] ?>">
                                            </a>
                                        <?php } ?>
                                    </div>
                                    <div class="social-list social_set_2" style="margin: 0;padding:0;text-align:left;<?php echo $social2_style; ?>">
                                        <?php
                                        foreach ($social_icons as $key => $social_icon) {
                                            $style = "display:none;";
                                            if (isset($signature_socials)) {
                                                if (array_key_exists($social_icon['id'], $signature_socials)) {
                                                    $style = '';
                                                }
                                            }
                                        ?>

                                            <a style="<?php echo $style ?> text-decoration:none;" class="social <?php echo "signature_social_" . $social_icon['id'] . "-target" ?> sig-hide" href="<?php echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=social&ident=' . $social_icon['id']) ?>">
                                                <img width="<?php echo $sign_iconsize ?>px" style="margin-bottom:2px;margin-right:2px; border:none; display:inline;" height="<?php echo $sign_iconsize ?>px" data-filename="<?php echo $social_icon['icon2'] ?>" src="<?php echo base_url() . SOCIAL_ICONS_SET_2 . $social_icon['icon2'] ?>" alt="<?php echo $social_icon['name'] ?>">
                                            </a>
                                        <?php } ?>
                                    </div>
                                    <div class="social-list social_set_3" style="margin: 0;padding:0;text-align:left;<?php echo $social3_style; ?>">
                                        <?php
                                        foreach ($social_icons as $key => $social_icon) {
                                            $style = "display:none;";
                                            if (isset($signature_socials)) {
                                                if (array_key_exists($social_icon['id'], $signature_socials)) {
                                                    $style = '';
                                                }
                                            }
                                        ?>

                                            <a style="<?php echo $style ?> text-decoration:none;" class="social <?php echo "signature_social_" . $social_icon['id'] . "-target" ?> sig-hide" href="<?php echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=social&ident=' . $social_icon['id']) ?>">
                                                <img width="<?php echo $sign_iconsize ?>px" style="margin-bottom:2px;margin-right:2px; border:none; display:inline;" height="<?php echo $sign_iconsize ?>px" data-filename="<?php echo $social_icon['icon3'] ?>" src="<?php echo base_url() . SOCIAL_ICONS_SET_3 . $social_icon['icon3'] ?>" alt="<?php echo $social_icon['name'] ?>">
                                            </a>
                                        <?php } ?>
                                    </div>
                                    <div class="social-list social_set_4" style="margin: 0;padding:0;text-align:left;<?php echo $social4_style; ?>">
                                        <?php
                                        foreach ($social_icons as $key => $social_icon) {
                                            $style = "display:none;";
                                            if (isset($signature_socials)) {
                                                if (array_key_exists($social_icon['id'], $signature_socials)) {
                                                    $style = '';
                                                }
                                            }
                                        ?>
                                            <a style="<?php echo $style ?> text-decoration:none;" class="social <?php echo "signature_social_" . $social_icon['id'] . "-target" ?> sig-hide" href="<?php echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=social&ident=' . $social_icon['id']) ?>">
                                                <img width="<?php echo $sign_iconsize ?>px" style="margin-bottom:2px;margin-right:2px; border:none; display:inline;" height="<?php echo $sign_iconsize ?>px" data-filename="<?php echo $social_icon['icon4'] ?>" src="<?php echo base_url() . SOCIAL_ICONS_SET_4 . $social_icon['icon4'] ?>" alt="<?php echo $social_icon['name'] ?>">
                                            </a>
                                        <?php } ?>
                                    </div>

                                </div>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td>
                    <p class="appstores-container" style="text-align:left;margin-top:10px;margin-bottom:10px;margin-left:0;margin-right:0;">
                        <?php if (isset($signature) && @$signature['appstore_link'] != '') { ?>
                            <a class="appstore signature_apple_app_store_link-target sig-hide" style="text-decoration:none;" href="<?php if (isset($signature)) echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=app&ident=appstore'); ?>">
                                <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/apple.png') ?>" class="appstore-icon " alt="Download on the App Store" data-pin-nopin="true">
                            </a>
                        <?php } else { ?>
                            <a class="appstore signature_apple_app_store_link-target sig-hide" style="text-decoration:none;display: none;" href="#">
                                <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/apple.png') ?>" class="appstore-icon " alt="Download on the App Store" data-pin-nopin="true">
                            </a>
                        <?php } ?>
                        <?php if (isset($signature) && @$signature['googleplaytore_link'] != '') { ?>

                            <a class="appstore signature_google_play_link-target sig-hide" style="text-decoration:none;" href="<?php if (isset($signature)) echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=app&ident=googleplaytore'); ?>">
                                <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/google.png') ?>" class="appstore-icon " alt="Get it on Google Play">
                            </a>
                        <?php } else { ?>

                            <a class="appstore signature_google_play_link-target sig-hide" style="text-decoration:none;display: none;" href="#">
                                <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/google.png') ?>" class="appstore-icon " alt="Get it on Google Play">
                            </a>
                        <?php } ?>
                        <?php if (isset($signature) && @$signature['amazon_link'] != '') { ?>

                            <a class="appstore signature_amazon_app_store_link-target sig-hide" style="text-decoration:none;" href="<?php if (isset($signature)) echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=app&ident=amazon'); ?>">
                                <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/amazon.png') ?>" class="appstore-icon" alt="Available at Amazon">
                            </a>
                        <?php } else { ?>

                            <a class="appstore signature_amazon_app_store_link-target sig-hide" style="text-decoration:none;display: none;" href="#">
                                <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/amazon.png') ?>" class="appstore-icon" alt="Available at Amazon">
                            </a>
                        <?php } ?>
                    </p>
                    <?php if (isset($signature) && $signature['banner'] != '') { ?>
                        <p class="ba-container" style="text-align:left;margin-top:15px;margin-bottom:15px;margin-left:0;margin-right:0;">
                            <a href="<?php if (isset($signature)) echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=banner'); ?>" class="signature_banner_url-target">
                                <img src="<?php echo base_url() . SIGNATURE_UPLOADS_BANNER . $signature['banner'] ?>" alt="signaturia.com" border="0" class="sig-ba" data-pin-nopin="true" style="max-width:400px;height:auto;width:100%;" />
                            </a>
                        </p>
                    <?php } else { ?>
                        <p class="ba-container" style="display:none;text-align:left;margin-top:15px;margin-bottom:15px;margin-left:0;margin-right:0;">
                            <a href="<?php echo site_url('/') ?>" class="signature_banner_url-target">
                                <img src="<?php echo base_url('assets/images/banner.png') ?>" alt="signaturia.com" border="0" class="sig-ba" data-pin-nopin="true" style="max-width:400px;height:auto;width:100%;" />
                            </a>
                        </p>
                    <?php } ?>
                    <p class="signature_disclaimer-target" style="text-align:left;line-height: 13px;font-weight: 400;font-size: 9px;color: #333333;margin:0;<?php if (isset($signature) && $signature['show_disclaimer'] == 0) echo 'display: none;' ?>"><?php if (isset($signature)) echo $signature['disclaimer'] ?></p>
                </td>
            </tr>
        </table>
        <p class="latest_tweet"></p>
        <div class="youtube_video">
            <?php if (isset($signature) && $signature['youtube_video'] != '') { ?>
                <iframe width="120" height="90" src="<?php echo $signature['youtube_video'] ?>" frameborder="0" allowfullscreen></iframe>
            <?php } ?>
        </div>
    </div>
</div>
<div id="theme-14" class="preview" <?php echo $theme14_style ?>>
    <?php if (!isset($signature)) { ?>

        <div class="default_signature" style="max-width:500px;margin:0 0 50px;">
            <table style="margin-top: 0;margin-left: 0;margin-right: 0;margin-bottom: 10px;border-spacing: 0;border-collapse: collapse;width:100%;">
                <tr>
                    <td style="">
                        <table style="margin-top: 0;margin-left: 0;margin-right: 0;margin-bottom: 0;border-spacing: 0;border-collapse: collapse;width:100%;">
                            <tr>
                                <td style="padding-left:0px;padding-top:0;padding-right:10px;padding-bottom:0;" valign="top" align="text">
                                    <div class="" style="padding-left:0;padding-right:0;padding-top:0;padding-bottom:0;background:none;border-radius:0;margin-bottom:10px;text-align:left;">
                                        <h1 style="font-size: <?php echo $sign_font_size + 4 ?>px;line-height:<?php echo $sign_font_size + 8 ?>px; margin-left: 0px;margin-right: 0px;margin-top: 0px;margin-bottom: 0;text-transform: uppercase;color: #e91e63;font-weight: bold;" class="signature_name-target change_theme2_p">John Donga</h1>
                                        <h5 class="signature_jobtitle-target change_font" style="font-size: 12px;line-height:14px;color: #999;padding: 0;margin-left: 0px;margin-right: 0px;margin-top: 0px;margin-bottom: 0;font-weight: 600;">senior content writer</h5>
                                    </div>
                                    <img src="<?php echo base_url('assets/images/avatar.jpg') ?>" alt="<?php echo site_url() ?>" border="0" class="sig-logo default" style="height:100px;width:100px;margin-bottom:0;border-radius:50px;margin-bottom:10px;margin-left:0;margin-right:0;margin-top:0;" data-pin-nopin="true">
                                    <div class="" style="padding-top:0;padding-bottom:0;padding-left:0;padding-right:0;">
                                        <p class="change_font" style="text-align:left;line-height: 16px;font-weight: 400;font-size: 12px;color: #333333;margin-top: 0;margin-left: 0;margin-right: 0;margin-bottom: 0;">
                                            <span class="signature_companyname-target" style="display:block;">Signaturia</span>
                                            <a href="www.signaturia.com" style="color:#e91e63;text-decoration:none;" class="change_theme2_p signature_website-target">www.signaturia.com</a>
                                        </p>
                                        <ul class="change_font" style="margin-top: 0;margin-left: 0;margin-right: 0;padding: 0;list-style: none;text-align:left;font-size:12px;line-height:16px;margin-bottom:10px;">
                                            <li style="margin-bottom: 0px;margin-right: 10px;margin-left: 0;display:block;color:#333;"><span class="mobile_title change_theme2_p" style="color: #e91e63;">M:</span> <span class="signature_mobilephone-target txt">445-456-7890</span></li>
                                            <li style="margin-bottom: 0px;margin-right: 10px;margin-left: 0;display:block;color:#333;"><span class="fax_title change_theme2_p" style="color: #e91e63;">F:</span> <span class="signature_fax-target txt">921-142-0666</span></li>
                                            <li style="margin-bottom: 0px; margin-right: 10px;margin-left: 0;display:block;color:#333;"><span class="email_title change_theme2_p" style="color: #e91e63;">E:</span> <a href="mailto:john@signaturia.com" style="color:#333;text-decoration:none;" class="link signature_email-target">john@signaturia.com</a></li>
                                        </ul>
                                        <div class="social-list social_set_1" style="margin: 0;padding:0;text-align:left;">
                                            <?php
                                            foreach ($social_icons as $key => $social_icon) {
                                                if ($key == 10) {
                                                    break;
                                                }
                                            ?>
                                                <a style="text-decoration:none;display:inline-block;" class="social sig-hide" href="#">
                                                    <img width="20px" style="margin-bottom:2px;margin-right:2px; border:none; display:inline;" height="20px" data-filename="<?php echo $social_icon['icon1'] ?>" src="<?php echo base_url() . SOCIAL_ICONS_SET_1 . $social_icon['icon1'] ?>" alt="<?php echo $social_icon['name'] ?>">
                                                </a>
                                            <?php } ?>
                                        </div>
                                        <div class="social-list social_set_2" style="margin: 0;padding:0;text-align:left;display: none">
                                            <?php
                                            foreach ($social_icons as $key => $social_icon) {
                                                if ($key == 10) {
                                                    break;
                                                }
                                            ?>
                                                <a style="text-decoration:none;display:inline-block;" class="social" href="#"> <img width="20px" style="margin-bottom:2px;margin-right:2px; border:none; display:inline;" height="20px" src="<?php echo base_url() . SOCIAL_ICONS_SET_2 . $social_icon['icon2'] ?>" alt="" /></a>
                                            <?php } ?>
                                        </div>
                                        <div class="social-list social_set_3" style="margin: 0;padding:0;text-align:left;display: none">
                                            <?php
                                            foreach ($social_icons as $key => $social_icon) {
                                                if ($key == 10) {
                                                    break;
                                                }
                                            ?>
                                                <a style="text-decoration:none;display:inline-block;" class="social" href="#"> <img width="20px" style="margin-bottom:2px;margin-right:2px; border:none; display:inline;" height="20px" src="<?php echo base_url() . SOCIAL_ICONS_SET_3 . $social_icon['icon3'] ?>" alt="" /></a>
                                            <?php } ?>
                                        </div>
                                        <div class="social-list social_set_4" style="margin: 0;padding:0;text-align:left;display: none">
                                            <?php
                                            foreach ($social_icons as $key => $social_icon) {
                                                if ($key == 10) {
                                                    break;
                                                }
                                            ?>
                                                <a style="text-decoration:none;display:inline-block;" class="social" href="#"> <img width="20px" style="margin-bottom:2px;margin-right:2px; border:none; display:inline;" height="20px" src="<?php echo base_url() . SOCIAL_ICONS_SET_4 . $social_icon['icon4'] ?>" alt="" /></a>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
            <p class="latest_tweet"></p>
            <div class="youtube_video">
                <?php if (isset($signature) && $signature['youtube_video'] != '') { ?>
                    <iframe width="120" height="90" src="<?php echo $signature['youtube_video'] ?>" frameborder="0" allowfullscreen></iframe>
                <?php } ?>
            </div>
        </div>
    <?php } ?>
    <div class="new_signature" style="max-width:500px;<?php if (!isset($signature)) echo "display: none;" ?><?php echo $sign_font_style ?>;margin:0 0 50px;">
        <table style="margin-top: 0;margin-left: 0;margin-right: 0;margin-bottom: 10px;border-spacing: 0;border-collapse: collapse;width:100%;">
            <tr>
                <td style="">
                    <table style="margin-top: 0;margin-left: 0;margin-right: 0;margin-bottom: 0px;border-spacing: 0;border-collapse: collapse;width:100%;">
                        <tr>
                            <td style="padding-left:0px;padding-top:0;padding-right:10px;padding-bottom:0;" valign="top" align="text">
                                <div class="" style="padding-left:0;padding-right:0;padding-top:0;padding-bottom:0;background:none;border-radius:0;margin-bottom:10px;text-align:left;">
                                    <h1 style="font-size: 18px;line-height:22px; margin-left: 0px;margin-right: 0px;margin-top: 0px;margin-bottom: 0;text-transform: uppercase;color: #4fb218;font-weight: bold;" class="signature_name-target change_theme_p"><?php if (isset($signature)) echo $signature['name'] ?></h1>
                                    <h5 class="signature_jobtitle-target change_font" style="font-size: <?php echo $sign_font_size ?>px;line-height:<?php echo $sign_font_size + 4 ?>px;color: #999;padding: 0;margin-left: 0px;margin-right: 0px;margin-top: 0px;margin-bottom: 0;font-weight: 600;"><?php if (isset($signature)) echo $signature['job_title'] ?></h5>
                                </div>
                                <img src="<?php echo $sign_logo ?>" alt="<?php echo site_url() ?>" border="0" class="sig-logo default" style="height:100px;width:100px;margin-bottom:0;border-radius:50px;margin-bottom:10px;margin-left:0;margin-right:0;margin-top:0;<?php echo $logo_style ?>" data-pin-nopin="true">
                                <div class="" style="padding-top:0;padding-bottom:0;padding-left:0;padding-right:0;">
                                    <p class="change_font" style="text-align:left;line-height: <?php echo $sign_font_size + 4 ?>px;font-weight: 400;font-size: <?php echo $sign_font_size ?>px;color: #333333;margin-top: 0;margin-left: 0;margin-right: 0;margin-bottom: 0;">
                                        <span class="signature_companyname-target" style="color: <?php echo $sign_p_text_color ?>;display:block;"><?php if (isset($signature)) echo $signature['company_name'] ?></span>
                                        <span style="display:block">
                                            <a href="<?php if (isset($signature)) echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=personal&ident=website'); ?>" style="color:<?php echo $sign_text_color ?>;text-decoration:none;" class="change_theme_p signature_website-target"><?php if (isset($signature)) echo $signature['website']; ?></a>
                                        </span>
                                        <span class="txt signature_address-target" style="color:<?php echo $sign_p_text_color ?>"><?php if (isset($signature)) echo $signature['address']; ?></span>
                                        <span class="txt signature_address2-target" style="color:<?php echo $sign_p_text_color ?>"><?php if (isset($signature)) echo '<br/>' . $signature['address_line2']; ?></span>
                                    </p>
                                    <ul class="change_font" style="margin-top: 0;margin-left: 0;margin-right: 0;padding: 0;list-style: none;text-align:left;font-size:<?php echo $sign_font_size ?>px;line-height:<?php echo $sign_font_size + 4 ?>px;margin-bottom:10px;">
                                        <li style="margin-bottom: 0px;margin-right: 10px;margin-left: 0;display:block;color:#333;">
                                            <span class="mobile_title change_theme_p" style="color: <?php echo $sign_text_color ?>;<?php
                                                                                                                                    if (isset($signature) && $signature['mobile_number'] != '')
                                                                                                                                        echo "display:inline-block;";
                                                                                                                                    else
                                                                                                                                        echo "display:none;"
                                                                                                                                    ?>">M:</span>
                                            <span class="signature_mobilephone-target txt" style="color: <?php echo $sign_p_text_color ?>;"><?php if (isset($signature)) echo $signature['mobile_number'] ?></span>
                                        </li>
                                        <li style="margin-bottom: 0px;margin-right: 10px;margin-left: 0;display:block;color:#333;">
                                            <span class="fax_title change_theme_p" style="color: <?php echo $sign_text_color ?>;<?php
                                                                                                                                if (isset($signature) && $signature['fax'] != '')
                                                                                                                                    echo "display:inline-block;";
                                                                                                                                else
                                                                                                                                    echo "display:none;"
                                                                                                                                ?>">F:</span>
                                            <span class="signature_fax-target txt" style="color: <?php echo $sign_p_text_color ?>;"><?php if (isset($signature)) echo $signature['fax'] ?></span>
                                        </li>
                                        <li style="margin-bottom: 0px; margin-right: 10px;margin-left: 0;display:block;color:#333;">
                                            <span class="email_title change_theme_p" style="color: <?php echo $sign_text_color ?>;<?php
                                                                                                                                    if (isset($signature) && $signature['email'] != '')
                                                                                                                                        echo "display:inline-block;";
                                                                                                                                    else
                                                                                                                                        echo "display:none;"
                                                                                                                                    ?>">E:</span>
                                            <a href="<?php if (isset($signature)) echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=personal&ident=email') ?>" style="color:<?php echo $sign_link_color ?>;text-decoration:none;" class="link signature_email-target"><?php if (isset($signature)) echo $signature['email'] ?></a>
                                        </li>
                                    </ul>
                                    <div class="social-list social_set_1" style="margin: 0;padding:0;text-align:left;<?php echo $social1_style; ?>">
                                        <?php
                                        foreach ($social_icons as $key => $social_icon) {
                                            $style = "display:none;";
                                            if (isset($signature_socials)) {
                                                if (array_key_exists($social_icon['id'], $signature_socials)) {
                                                    $style = 'display:inline-block;';
                                                }
                                            }
                                        ?>

                                            <a style="<?php echo $style ?> text-decoration:none;" class="social <?php echo "signature_social_" . $social_icon['id'] . "-target" ?> sig-hide" href="<?php echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=social&ident=' . $social_icon['id']) ?>">
                                                <img width="<?php echo $sign_iconsize ?>px" style="margin-bottom:2px;margin-right:2px; border:none; display:inline;" height="<?php echo $sign_iconsize ?>px" data-filename="<?php echo $social_icon['icon1'] ?>" src="<?php echo base_url() . SOCIAL_ICONS_SET_1 . $social_icon['icon1'] ?>" alt="<?php echo $social_icon['name'] ?>">
                                            </a>
                                        <?php } ?>
                                    </div>
                                    <div class="social-list social_set_2" style="margin: 0;padding:0;text-align:left;<?php echo $social2_style; ?>">
                                        <?php
                                        foreach ($social_icons as $key => $social_icon) {
                                            $style = "display:none;";
                                            if (isset($signature_socials)) {
                                                if (array_key_exists($social_icon['id'], $signature_socials)) {
                                                    $style = '';
                                                }
                                            }
                                        ?>

                                            <a style="<?php echo $style ?> text-decoration:none;" class="social <?php echo "signature_social_" . $social_icon['id'] . "-target" ?> sig-hide" href="<?php echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=social&ident=' . $social_icon['id']) ?>">
                                                <img width="<?php echo $sign_iconsize ?>px" style="margin-bottom:2px;margin-right:2px; border:none; display:inline;" height="<?php echo $sign_iconsize ?>px" data-filename="<?php echo $social_icon['icon2'] ?>" src="<?php echo base_url() . SOCIAL_ICONS_SET_2 . $social_icon['icon2'] ?>" alt="<?php echo $social_icon['name'] ?>">
                                            </a>
                                        <?php } ?>
                                    </div>
                                    <div class="social-list social_set_3" style="margin: 0;padding:0;text-align:left;<?php echo $social3_style; ?>">
                                        <?php
                                        foreach ($social_icons as $key => $social_icon) {
                                            $style = "display:none;";
                                            if (isset($signature_socials)) {
                                                if (array_key_exists($social_icon['id'], $signature_socials)) {
                                                    $style = '';
                                                }
                                            }
                                        ?>

                                            <a style="<?php echo $style ?> text-decoration:none;" class="social <?php echo "signature_social_" . $social_icon['id'] . "-target" ?> sig-hide" href="<?php echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=social&ident=' . $social_icon['id']) ?>">
                                                <img width="<?php echo $sign_iconsize ?>px" style="margin-bottom:2px;margin-right:2px; border:none; display:inline;" height="<?php echo $sign_iconsize ?>px" data-filename="<?php echo $social_icon['icon3'] ?>" src="<?php echo base_url() . SOCIAL_ICONS_SET_3 . $social_icon['icon3'] ?>" alt="<?php echo $social_icon['name'] ?>">
                                            </a>
                                        <?php } ?>
                                    </div>
                                    <div class="social-list social_set_4" style="margin: 0;padding:0;text-align:left;<?php echo $social4_style; ?>">
                                        <?php
                                        foreach ($social_icons as $key => $social_icon) {
                                            $style = "display:none;";
                                            if (isset($signature_socials)) {
                                                if (array_key_exists($social_icon['id'], $signature_socials)) {
                                                    $style = '';
                                                }
                                            }
                                        ?>
                                            <a style="<?php echo $style ?> text-decoration:none;" class="social <?php echo "signature_social_" . $social_icon['id'] . "-target" ?> sig-hide" href="<?php echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=social&ident=' . $social_icon['id']) ?>">
                                                <img width="<?php echo $sign_iconsize ?>px" style="margin-bottom:2px;margin-right:2px; border:none; display:inline;" height="<?php echo $sign_iconsize ?>px" data-filename="<?php echo $social_icon['icon4'] ?>" src="<?php echo base_url() . SOCIAL_ICONS_SET_4 . $social_icon['icon4'] ?>" alt="<?php echo $social_icon['name'] ?>">
                                            </a>
                                        <?php } ?>
                                    </div>

                                </div>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td>
                    <p class="appstores-container" style="text-align:left;margin-top:10px;margin-bottom:10px;margin-left:0;margin-right:0;">
                        <?php if (isset($signature) && @$signature['appstore_link'] != '') { ?>
                            <a class="appstore signature_apple_app_store_link-target sig-hide" style="text-decoration:none;" href="<?php if (isset($signature)) echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=app&ident=appstore'); ?>">
                                <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/apple.png') ?>" class="appstore-icon " alt="Download on the App Store" data-pin-nopin="true">
                            </a>
                        <?php } else { ?>
                            <a class="appstore signature_apple_app_store_link-target sig-hide" style="text-decoration:none;display: none;" href="#">
                                <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/apple.png') ?>" class="appstore-icon " alt="Download on the App Store" data-pin-nopin="true">
                            </a>
                        <?php } ?>
                        <?php if (isset($signature) && @$signature['googleplaytore_link'] != '') { ?>

                            <a class="appstore signature_google_play_link-target sig-hide" style="text-decoration:none;" href="<?php if (isset($signature)) echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=app&ident=googleplaytore'); ?>">
                                <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/google.png') ?>" class="appstore-icon " alt="Get it on Google Play">
                            </a>
                        <?php } else { ?>

                            <a class="appstore signature_google_play_link-target sig-hide" style="text-decoration:none;display: none;" href="#">
                                <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/google.png') ?>" class="appstore-icon " alt="Get it on Google Play">
                            </a>
                        <?php } ?>
                        <?php if (isset($signature) && @$signature['amazon_link'] != '') { ?>

                            <a class="appstore signature_amazon_app_store_link-target sig-hide" style="text-decoration:none;" href="<?php if (isset($signature)) echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=app&ident=amazon'); ?>">
                                <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/amazon.png') ?>" class="appstore-icon" alt="Available at Amazon">
                            </a>
                        <?php } else { ?>

                            <a class="appstore signature_amazon_app_store_link-target sig-hide" style="text-decoration:none;display: none;" href="#">
                                <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/amazon.png') ?>" class="appstore-icon" alt="Available at Amazon">
                            </a>
                        <?php } ?>
                    </p>
                    <?php if (isset($signature) && $signature['banner'] != '') { ?>
                        <p class="ba-container" style="text-align:left;margin-top:15px;margin-bottom:15px;margin-left:0;margin-right:0;">
                            <a href="<?php if (isset($signature)) echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=banner'); ?>" class="signature_banner_url-target">
                                <img src="<?php echo base_url() . SIGNATURE_UPLOADS_BANNER . $signature['banner'] ?>" alt="signaturia.com" border="0" class="sig-ba" data-pin-nopin="true" style="max-width:400px;height:auto;width:100%;" />
                            </a>
                        </p>
                    <?php } else { ?>
                        <p class="ba-container" style="display:none;text-align:left;margin-top:15px;margin-bottom:15px;margin-left:0;margin-right:0;">
                            <a href="<?php echo site_url('/') ?>" class="signature_banner_url-target">
                                <img src="<?php echo base_url('assets/images/banner.png') ?>" alt="signaturia.com" border="0" class="sig-ba" data-pin-nopin="true" style="max-width:400px;height:auto;width:100%;" />
                            </a>
                        </p>
                    <?php } ?>
                    <p class="signature_disclaimer-target" style="text-align:left;line-height: 13px;font-weight: 400;font-size: 9px;color: #333333;margin:0;<?php if (isset($signature) && $signature['show_disclaimer'] == 0) echo 'display: none;' ?>"><?php if (isset($signature)) echo $signature['disclaimer'] ?></p>
                </td>
            </tr>
        </table>
        <p class="latest_tweet"></p>
        <div class="youtube_video">
            <?php if (isset($signature) && $signature['youtube_video'] != '') { ?>
                <iframe width="120" height="90" src="<?php echo $signature['youtube_video'] ?>" frameborder="0" allowfullscreen></iframe>
            <?php } ?>
        </div>
    </div>
</div>
<div id="theme-15" class="preview" <?php echo $theme15_style ?>>
    <?php if (!isset($signature)) { ?>
        <div class="default_signature" style="max-width:500px;margin:0 0 50px;">
            <table style="margin-top: 0;margin-left: 0;margin-right: 0;margin-bottom: 10px;border-spacing: 0;border-collapse: collapse;width:100%;">
                <tbody>
                    <tr>
                        <td style="">
                            <table style="margin-top: 0;margin-left: 0;margin-right: 0;margin-bottom: 0;border-spacing: 0;border-collapse: collapse;width:100%;">
                                <tr>
                                    <td min-width="30%" valign="middle" align="center" style="padding-left:0;padding-right:10px;padding-top:0;padding-bottom:0;">
                                        <img src="<?php echo base_url('assets/images/signaturia.png') ?>" alt="<?php echo site_url() ?>" border="0" class="sig-logo default" style="margin-bottom:0;margin-bottom:0;margin-left:0;margin-right:0;margin-top:0;max-width:100%;max-height:100px;" data-pin-nopin="true">
                                    </td>
                                    <td width="70%" class="change_theme3_border_left_1" style="padding-left:20px;padding-top:0;padding-right:0;padding-bottom:0;border-left:solid 1px #999;" valign="middle">
                                        <div class="" style="padding-left:0;padding-right:0;padding-top:0;padding-bottom:0;background:none;border-radius:0;margin-bottom:0;text-align:left;">
                                            <h1 style="font-size: <?php echo $sign_font_size + 4 ?>px;line-height:<?php echo $sign_font_size + 8 ?>px; margin-left: 0px;margin-right: 0px;margin-top: 0px;margin-bottom: 0;text-transform: uppercase;font-weight: bold;" class="signature_name-target change_theme3_p">John Donga</h1>
                                            <h5 class="signature_jobtitle-target change_font" style="font-size: 12px;line-height:14px;color: #999;padding: 0;margin-left: 0px;margin-right: 0px;margin-top: 0px;margin-bottom: 10px;font-weight: 600;">senior content writer</h5>
                                            <div class="" style="padding-top:0;padding-bottom:0;padding-left:0;padding-right:0;">
                                                <ul class="change_font" style="margin-top: 0;margin-left: 0;margin-right: 0;padding: 0;list-style: none;text-align:left;font-size:12px;line-height:16px;margin-bottom:10px;">
                                                    <li style="margin-bottom: 0px;margin-right: 10px;margin-left: 0;display:inline-block;color:#333;"><span class="mobile_title change_theme3_p">M:</span> <span class="signature_mobilephone-target txt">445-456-7890</span></li>
                                                    <li style="margin-bottom: 0px;margin-right: 10px;margin-left: 0;display:inline-block;color:#333;"><span class="fax_title change_theme3_p">F:</span> <span class="signature_fax-target txt">921-142-0666</span></li>
                                                    <li style="margin-bottom: 0px; margin-right: 10px;margin-left: 0;display:inline-block;color:#333;"><span class="email_title change_theme3_p">E:</span> <a href="mailto:john@signaturia.com" style="color:#333;text-decoration:none;" class="link signature_email-target">john@signaturia.com</a></li>
                                                    <li style="margin-bottom: 0px; margin-right: 10px;margin-left: 0;display:inline-block;color:#333;"><span class="website_title change_theme3_p">W:</span> <a href="signaturia.com" style="color:#333;text-decoration:none;" class="link signature_website-target">www.signaturia.com</a></li>
                                                </ul>
                                            </div>
                                            <div class="social-list social_set_1" style="margin: 0;padding:0;text-align:left;">
                                                <?php
                                                foreach ($social_icons as $key => $social_icon) {
                                                    if ($key == 10) {
                                                        break;
                                                    }
                                                ?>
                                                    <a style="text-decoration:none;display:inline-block;" class="social sig-hide" href="#">
                                                        <img width="20px" style="margin-bottom:2px;margin-right:2px; border:none; display:inline;" height="20px" data-filename="<?php echo $social_icon['icon1'] ?>" src="<?php echo base_url() . SOCIAL_ICONS_SET_1 . $social_icon['icon1'] ?>" alt="<?php echo $social_icon['name'] ?>">
                                                    </a>
                                                <?php } ?>
                                            </div>
                                            <div class="social-list social_set_2" style="margin: 0;padding:0;text-align:left;display: none">
                                                <?php
                                                foreach ($social_icons as $key => $social_icon) {
                                                    if ($key == 10) {
                                                        break;
                                                    }
                                                ?>
                                                    <a style="text-decoration:none;display:inline-block;" class="social" href="#"> <img width="20px" style="margin-bottom:2px;margin-right:2px; border:none; display:inline;" height="20px" src="<?php echo base_url() . SOCIAL_ICONS_SET_2 . $social_icon['icon2'] ?>" alt="" /></a>
                                                <?php } ?>
                                            </div>
                                            <div class="social-list social_set_3" style="margin: 0;padding:0;text-align:left;display: none">
                                                <?php
                                                foreach ($social_icons as $key => $social_icon) {
                                                    if ($key == 10) {
                                                        break;
                                                    }
                                                ?>
                                                    <a style="text-decoration:none;display:inline-block;" class="social" href="#"> <img width="20px" style="margin-bottom:2px;margin-right:2px; border:none; display:inline;" height="20px" src="<?php echo base_url() . SOCIAL_ICONS_SET_3 . $social_icon['icon3'] ?>" alt="" /></a>
                                                <?php } ?>
                                            </div>
                                            <div class="social-list social_set_4" style="margin: 0;padding:0;text-align:left;display: none">
                                                <?php
                                                foreach ($social_icons as $key => $social_icon) {
                                                    if ($key == 10) {
                                                        break;
                                                    }
                                                ?>
                                                    <a style="text-decoration:none;display:inline-block;" class="social" href="#"> <img width="20px" style="margin-bottom:2px;margin-right:2px; border:none; display:inline;" height="20px" src="<?php echo base_url() . SOCIAL_ICONS_SET_4 . $social_icon['icon4'] ?>" alt="" /></a>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </tbody>
            </table>
            <p class="latest_tweet"></p>
            <div class="youtube_video">
                <?php if (isset($signature) && $signature['youtube_video'] != '') { ?>
                    <iframe width="120" height="90" src="<?php echo $signature['youtube_video'] ?>" frameborder="0" allowfullscreen></iframe>
                <?php } ?>
            </div>
        </div>
    <?php } ?>
    <div class="new_signature" style="max-width:500px;<?php if (!isset($signature)) echo "display: none;" ?><?php echo $sign_font_style ?>">
        <table style="margin-top: 0;margin-left: 0;margin-right: 0;margin-bottom: 10px;border-spacing: 0;border-collapse: collapse;width:100%;">
            <tbody>
                <tr>
                    <td style="">
                        <table style="margin-top: 0;margin-left: 0;margin-right: 0;margin-bottom: 0;border-spacing: 0;border-collapse: collapse;width:100%;">
                            <tr>
                                <td min-width="30%" valign="middle" align="center" style="padding-left:0;padding-right:10px;padding-top:0;padding-bottom:0;">
                                    <img src="<?php echo $sign_logo ?>" alt="<?php echo site_url() ?>" border="0" class="sig-logo default" style="margin-bottom:0;margin-bottom:0;margin-left:0;margin-right:0;margin-top:0;max-width:100%;max-height:100px;<?php echo $logo_style ?>" data-pin-nopin="true">
                                </td>
                                <td width="70%" class="change_theme_border_left_1" style="padding-left:20px;padding-top:0;padding-right:0;padding-bottom:0;border-left:solid 1px <?php echo $sign_text_color ?>;" valign="middle">
                                    <div class="" style="padding-left:0;padding-right:0;padding-top:0;padding-bottom:0;background:none;border-radius:0;margin-bottom:0;text-align:left;">
                                        <h1 style="font-size: <?php echo $sign_font_size + 4 ?>px;line-height:<?php echo $sign_font_size + 8 ?>px; margin-left: 0px;margin-right: 0px;margin-top: 0px;margin-bottom: 0;text-transform: uppercase;color: #4fb218;font-weight: bold;" class="signature_name-target change_theme_p"><?php if (isset($signature)) echo $signature['name'] ?></h1>
                                        <h5 class="signature_jobtitle-target change_font" style="font-size: <?php echo $sign_font_size ?>px;line-height:<?php echo $sign_font_size + 4 ?>px;color: #999;padding: 0;margin-left: 0px;margin-right: 0px;margin-top: 0px;margin-bottom: 10px;font-weight: 600;"><?php if (isset($signature)) echo $signature['job_title'] ?></h5>

                                        <div class="" style="padding-top:0;padding-bottom:0;padding-left:0;padding-right:0;">
                                            <ul class="change_font" style="margin-top: 0;margin-left: 0;margin-right: 0;padding: 0;list-style: none;text-align:left;font-size:<?php echo $sign_font_size ?>px;line-height:<?php echo $sign_font_size + 4 ?>px;margin-bottom:10px;">
                                                <li style="margin-bottom: 0px;margin-right: 10px;margin-left: 0;display:inline-block;color:#333;">
                                                    <span class="mobile_title change_theme_p" style="color: <?php echo $sign_text_color ?>;<?php
                                                                                                                                            if (isset($signature) && $signature['mobile_number'] != '')
                                                                                                                                                echo "display:inline-block;";
                                                                                                                                            else
                                                                                                                                                echo "display:none;"
                                                                                                                                            ?>">M:</span>
                                                    <span class="signature_mobilephone-target txt" style="color: <?php echo $sign_p_text_color ?>;"><?php if (isset($signature)) echo $signature['mobile_number'] ?></span>
                                                </li>
                                                <li style="margin-bottom: 0px;margin-right: 10px;margin-left: 0;display:inline-block;color:#333;">
                                                    <span class="fax_title change_theme_p" style="color: <?php echo $sign_text_color ?>;<?php
                                                                                                                                        if (isset($signature) && $signature['fax'] != '')
                                                                                                                                            echo "display:inline-block;";
                                                                                                                                        else
                                                                                                                                            echo "display:none;"
                                                                                                                                        ?>">F:</span>
                                                    <span class="signature_fax-target txt" style="color: <?php echo $sign_p_text_color ?>;"><?php if (isset($signature)) echo $signature['fax'] ?></span>
                                                </li>
                                                <li style="margin-bottom: 0px; margin-right: 10px;margin-left: 0;display:inline-block;color:#333;">
                                                    <span class="email_title change_theme_p" style="color: <?php echo $sign_text_color ?>;<?php
                                                                                                                                            if (isset($signature) && $signature['email'] != '')
                                                                                                                                                echo "display:inline-block;";
                                                                                                                                            else
                                                                                                                                                echo "display:none;"
                                                                                                                                            ?>">E:</span>
                                                    <a href="<?php if (isset($signature)) echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=personal&ident=email') ?>" style="color:<?php echo $sign_link_color ?>;text-decoration:none;" class="link signature_email-target"><?php if (isset($signature)) echo $signature['email'] ?></a>
                                                </li>
                                                <li style="margin-bottom: 0px; margin-right: 10px;margin-left: 0;display:inline-block;color:#333;">
                                                    <span class="website_title change_theme_p" style="color:  <?php echo $sign_text_color ?>;<?php
                                                                                                                                                if (isset($signature) && $signature['website'] != '')
                                                                                                                                                    echo "display:inline-block;";
                                                                                                                                                else
                                                                                                                                                    echo "display:none;"
                                                                                                                                                ?>">W:</span> <a href="<?php if (isset($signature)) echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=personal&ident=website'); ?>" style="color:<?php echo $sign_link_color ?>3;text-decoration:none;" class="link signature_website-target"><?php if (isset($signature)) echo $signature['website']; ?></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="social-list social_set_1" style="margin: 0;padding:0;text-align:left;<?php echo $social1_style; ?>">
                                            <?php
                                            foreach ($social_icons as $key => $social_icon) {
                                                $style = "display:none;";
                                                if (isset($signature_socials)) {
                                                    if (array_key_exists($social_icon['id'], $signature_socials)) {
                                                        $style = 'display:inline-block;';
                                                    }
                                                }
                                            ?>

                                                <a style="<?php echo $style ?> text-decoration:none;" class="social <?php echo "signature_social_" . $social_icon['id'] . "-target" ?> sig-hide" href="<?php echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=social&ident=' . $social_icon['id']) ?>">
                                                    <img width="<?php echo $sign_iconsize ?>px" style="margin-bottom:2px;margin-right:2px; border:none; display:inline;" height="<?php echo $sign_iconsize ?>px" data-filename="<?php echo $social_icon['icon1'] ?>" src="<?php echo base_url() . SOCIAL_ICONS_SET_1 . $social_icon['icon1'] ?>" alt="<?php echo $social_icon['name'] ?>">
                                                </a>
                                            <?php } ?>
                                        </div>
                                        <div class="social-list social_set_2" style="margin: 0;padding:0;text-align:left;<?php echo $social2_style; ?>">
                                            <?php
                                            foreach ($social_icons as $key => $social_icon) {
                                                $style = "display:none;";
                                                if (isset($signature_socials)) {
                                                    if (array_key_exists($social_icon['id'], $signature_socials)) {
                                                        $style = '';
                                                    }
                                                }
                                            ?>

                                                <a style="<?php echo $style ?> text-decoration:none;" class="social <?php echo "signature_social_" . $social_icon['id'] . "-target" ?> sig-hide" href="<?php echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=social&ident=' . $social_icon['id']) ?>">
                                                    <img width="<?php echo $sign_iconsize ?>px" style="margin-bottom:2px;margin-right:2px; border:none; display:inline;" height="<?php echo $sign_iconsize ?>px" data-filename="<?php echo $social_icon['icon2'] ?>" src="<?php echo base_url() . SOCIAL_ICONS_SET_2 . $social_icon['icon2'] ?>" alt="<?php echo $social_icon['name'] ?>">
                                                </a>
                                            <?php } ?>
                                        </div>
                                        <div class="social-list social_set_3" style="margin: 0;padding:0;text-align:left;<?php echo $social3_style; ?>">
                                            <?php
                                            foreach ($social_icons as $key => $social_icon) {
                                                $style = "display:none;";
                                                if (isset($signature_socials)) {
                                                    if (array_key_exists($social_icon['id'], $signature_socials)) {
                                                        $style = '';
                                                    }
                                                }
                                            ?>

                                                <a style="<?php echo $style ?> text-decoration:none;" class="social <?php echo "signature_social_" . $social_icon['id'] . "-target" ?> sig-hide" href="<?php echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=social&ident=' . $social_icon['id']) ?>">
                                                    <img width="<?php echo $sign_iconsize ?>px" style="margin-bottom:2px;margin-right:2px; border:none; display:inline;" height="<?php echo $sign_iconsize ?>px" data-filename="<?php echo $social_icon['icon3'] ?>" src="<?php echo base_url() . SOCIAL_ICONS_SET_3 . $social_icon['icon3'] ?>" alt="<?php echo $social_icon['name'] ?>">
                                                </a>
                                            <?php } ?>
                                        </div>
                                        <div class="social-list social_set_4" style="margin: 0;padding:0;text-align:left;<?php echo $social4_style; ?>">
                                            <?php
                                            foreach ($social_icons as $key => $social_icon) {
                                                $style = "display:none;";
                                                if (isset($signature_socials)) {
                                                    if (array_key_exists($social_icon['id'], $signature_socials)) {
                                                        $style = '';
                                                    }
                                                }
                                            ?>
                                                <a style="<?php echo $style ?> text-decoration:none;" class="social <?php echo "signature_social_" . $social_icon['id'] . "-target" ?> sig-hide" href="<?php echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=social&ident=' . $social_icon['id']) ?>">
                                                    <img width="<?php echo $sign_iconsize ?>px" style="margin-bottom:2px;margin-right:2px; border:none; display:inline;" height="<?php echo $sign_iconsize ?>px" data-filename="<?php echo $social_icon['icon4'] ?>" src="<?php echo base_url() . SOCIAL_ICONS_SET_4 . $social_icon['icon4'] ?>" alt="<?php echo $social_icon['name'] ?>">
                                                </a>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="" style="padding-top:0;padding-bottom:0;padding-left:0;padding-right:0;">
                            <p class="change_font" style="text-align:left;line-height: <?php echo $sign_font_size + 4 ?>px;font-weight: 400;font-size: <?php echo $sign_font_size ?>px;color: #333333;margin-top: 0;margin-left: 0;margin-right: 0;margin-bottom: 0;">
                                <span class="signature_companyname-target change_theme_p" style="color: <?php echo $sign_text_color ?>;display:block;"><?php if (isset($signature)) echo $signature['company_name'] ?></span>
                                <span class="txt signature_address-target" style="color:<?php echo $sign_p_text_color ?>"><?php if (isset($signature)) echo $signature['address']; ?></span>
                                <span class="txt signature_address2-target" style="color:<?php echo $sign_p_text_color ?>"><?php if (isset($signature)) echo '<br/>' . $signature['address_line2']; ?></span>
                            </p>
                        </div>
                        <p class="appstores-container" style="text-align:left;margin-top:10px;margin-bottom:10px;margin-left:0;margin-right:0;">
                            <?php if (isset($signature) && @$signature['appstore_link'] != '') { ?>
                                <a class="appstore signature_apple_app_store_link-target sig-hide" style="text-decoration:none;" href="<?php if (isset($signature)) echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=app&ident=appstore'); ?>">
                                    <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/apple.png') ?>" class="appstore-icon " alt="Download on the App Store" data-pin-nopin="true">
                                </a>
                            <?php } else { ?>
                                <a class="appstore signature_apple_app_store_link-target sig-hide" style="text-decoration:none;display: none;" href="#">
                                    <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/apple.png') ?>" class="appstore-icon " alt="Download on the App Store" data-pin-nopin="true">
                                </a>
                            <?php } ?>
                            <?php if (isset($signature) && @$signature['googleplaytore_link'] != '') { ?>

                                <a class="appstore signature_google_play_link-target sig-hide" style="text-decoration:none;" href="<?php if (isset($signature)) echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=app&ident=googleplaytore'); ?>">
                                    <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/google.png') ?>" class="appstore-icon " alt="Get it on Google Play">
                                </a>
                            <?php } else { ?>

                                <a class="appstore signature_google_play_link-target sig-hide" style="text-decoration:none;display: none;" href="#">
                                    <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/google.png') ?>" class="appstore-icon " alt="Get it on Google Play">
                                </a>
                            <?php } ?>
                            <?php if (isset($signature) && @$signature['amazon_link'] != '') { ?>

                                <a class="appstore signature_amazon_app_store_link-target sig-hide" style="text-decoration:none;" href="<?php if (isset($signature)) echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=app&ident=amazon'); ?>">
                                    <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/amazon.png') ?>" class="appstore-icon" alt="Available at Amazon">
                                </a>
                            <?php } else { ?>

                                <a class="appstore signature_amazon_app_store_link-target sig-hide" style="text-decoration:none;display: none;" href="#">
                                    <img style="border:none;" height="35" width="113" src="<?php echo base_url('assets/images/amazon.png') ?>" class="appstore-icon" alt="Available at Amazon">
                                </a>
                            <?php } ?>
                        </p>
                        <?php if (isset($signature) && $signature['banner'] != '') { ?>
                            <p class="ba-container" style="text-align:left;margin-top:15px;margin-bottom:15px;margin-left:0;margin-right:0;">
                                <a href="<?php if (isset($signature)) echo site_url('click?signature_id=' . @$signature['signature_id'] . '&clickable=banner'); ?>" class="signature_banner_url-target">
                                    <img src="<?php echo base_url() . SIGNATURE_UPLOADS_BANNER . $signature['banner'] ?>" alt="signaturia.com" border="0" class="sig-ba" data-pin-nopin="true" style="max-width:400px;height:auto;width:100%;" />
                                </a>
                            </p>
                        <?php } else { ?>
                            <p class="ba-container" style="display:none;text-align:left;margin-top:15px;margin-bottom:15px;margin-left:0;margin-right:0;">
                                <a href="<?php echo site_url('/') ?>" class="signature_banner_url-target">
                                    <img src="<?php echo base_url('assets/images/banner.png') ?>" alt="signaturia.com" border="0" class="sig-ba" data-pin-nopin="true" style="max-width:400px;height:auto;width:100%;" />
                                </a>
                            </p>
                        <?php } ?>
                        <p class="signature_disclaimer-target" style="text-align:left;line-height: 13px;font-weight: 400;font-size: 9px;color: #333333;margin:0;<?php if (isset($signature) && $signature['show_disclaimer'] == 0) echo 'display: none;' ?>"><?php if (isset($signature)) echo $signature['disclaimer'] ?></p>
                    </td>
                </tr>
            </tbody>
        </table>
        <p class="latest_tweet"></p>
        <div class="youtube_video">
            <?php if (isset($signature) && $signature['youtube_video'] != '') { ?>
                <iframe width="120" height="90" src="<?php echo $signature['youtube_video'] ?>" frameborder="0" allowfullscreen></iframe>
            <?php } ?>
        </div>
    </div>
</div> -->
<?php

$edit = 0;
if (isset($signature)) {
    $edit = 1;
}
?>
<script type="text/javascript">
    var edit_sign = <?php echo $edit ?>;
</script>