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
?>
<div class="client-wrap">
    <div class="search-client">
        <input type="text" class="form-control" name="signature_search" id="signature_search" placeholder="Search signature...">
        <button class="search-btn" type="button"><i class="zmdi zmdi-search zmdi-hc-fw"></i></button>
    </div>
    <div class="client-inner">
        <div class="lib-sec">
            <h3 class="lib-title"><?php echo $generator['name'] ?> Generators' Signatures</h3>
            <div class="lib-row">
                <div id="signature_list">
                    Loading...
                </div>
            </div>
        </div>
    </div>
</div>
<div class="sig-sec flex-box">
    <div class="preview " id="theme-1">
        <div class="" style="max-width:600px;margin:20px auto;">
            <table style="margin-top: 0;margin-left: 0;margin-right: 0;margin-bottom: 10px;">
                <tr>
                    <td width="100" valign="top" style="padding-right:15px;"><img src="assets/images/avatar.jpg" alt="htmlsig.com" border="0" class="sig-logo default" style="height:100px;width:100px;margin-bottom:0;" data-pin-nopin="true"></td>
                    <td style="padding-left:20px;padding-top:0;border-left:solid 3px #4fb218;" valign="top;">
                        <h1 style="font-size: 18px;margin: 0px;text-transform: uppercase;color: #4fb218;font-weight: bold;">John Donga</h1>
                        <h5 class="" style="font-size: 12px;color: #333333;padding-bottom: 0;padding-top: 2px;font-weight: 500;margin: 0px;">senior content writer</h5>
                        <ul class="" style="margin-top: 10px;margin-left: 0;margin-right: 0;margin-bottom: 0;padding: 0;list-style: none;text-align:left;font-size:12px;margin-bottom:10px;">
                            <li style="margin-bottom: 5px;margin-right: 5px;margin-left: 0;display:inline-block;color:#333;"><span class="" style="color: #4fb218;">Mobile:</span> 445-456-7890</li>
                            <li style="margin-bottom: 5px;margin-right: 5px;margin-left: 5px;display:inline-block;color:#333;"><span class="" style="color: #4fb218;">fax:</span> 921-142-0666</li>
                            <li style="margin-bottom: 5px;margin-right: 5px;margin-left: 5px;display:inline-block;color:#333;"><span class="" style="color: #4fb218;">Email:</span> <a href="mailto:john@signaturia.com" style="color:#333;text-decoration:none;">john@signaturia.com</a></li>
                        </ul>
                        <p class="" style="text-align:left;line-height: 20px;font-weight: 600;font-size: 12px;color: #333333;margin-top: 0;margin-left: 0;margin-right: 0;margin-bottom: 0;"><span class="" style="color: #4fb218;display:block;">Signaturia</span>32-black street, winter hour.United Kingdom 08808</p>
                        <p class="" style="text-align:left;line-height: 20px;font-weight: 400;font-size: 12px;color: #333333;margin-top: 0;margin-left: 0;margin-right: 0;margin-bottom: 0;"><span class="" style="color: #4fb218;">Website:</span> <a href="www.signaturia.com" style="color:#333;text-decoration:none;">www.signaturia.com</a></p>
                    </td>
                </tr>
            </table>
            <div class="" style="margin: 0;padding: 10px;text-align:left;background:#f5f5f5;border-radius:5px;">
                <a style=" text-decoration:none" class="social signature_twitter-target sig-hide" href="#"> <img width="16px" style="margin-bottom:2px; border:none; display:inline;" height="16px" data-filename="twitter.png" src="https://s3.amazonaws.com/htmlsig-assets/round/twitter.png" alt="Twitter"> </a> <span style="white-space:nowrap;" class="signature_twitter-sep social-sep"> <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2"> </span> <a style=" text-decoration:none" class="social signature_facebook-target sig-hide" href="https://htmlsig.com/t/000001BNZ369"> <img width="16px" style="margin-bottom:2px; border:none; display:inline;" height="16px" data-filename="facebook.png" src="https://s3.amazonaws.com/htmlsig-assets/round/facebook.png" alt="Facebook"> </a> <span style="white-space:nowrap;" class="signature_facebook-sep social-sep"> <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2"> </span> <a style=" text-decoration:none" class="social signature_googleplus-target sig-hide" href="#"> <img width="16px" style="margin-bottom:2px; border:none; display:inline;" height="16px" data-filename="googleplus.png" src="https://s3.amazonaws.com/htmlsig-assets/round/googleplus.png" alt="Google +"> </a> <span style="white-space:nowrap;" class="signature_googleplus-sep social-sep"> <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2"> </span> <a style=" text-decoration:none" class="social signature_linkedin-target sig-hide" href="#"> <img width="16px" style="margin-bottom:2px; border:none; display:inline;" height="16px" data-filename="linkedin.png" src="https://s3.amazonaws.com/htmlsig-assets/round/linkedin.png" alt="LinkedIn"> </a> <span style="white-space:nowrap;" class="signature_linkedin-sep social-sep"> <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2"> </span> <a style=" text-decoration:none" class="social signature_instagram-target sig-hide" href="#"> <img width="16px" style="margin-bottom:2px; border:none; display:inline;" height="16px" data-filename="instagram.png" src="https://s3.amazonaws.com/htmlsig-assets/round/instagram.png" alt="Instagram"> </a> <span style="white-space:nowrap;" class="signature_instagram-sep social-sep"> <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2"> </span> <a style=" text-decoration:none" class="social signature_dribbble-target sig-hide" href="#"> <img width="16px" style="margin-bottom:2px; border:none; display:inline;" height="16px" data-filename="dribbble.png" src="https://s3.amazonaws.com/htmlsig-assets/round/dribbble.png" alt="Dribble"> </a> <span style="white-space:nowrap;" class="signature_dribbble-sep social-sep"> <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2"> </span> <a style=" text-decoration:none" class="social signature_skype-target sig-hide" href="#"> <img width="16px" style="margin-bottom:2px; border:none; display:inline;" height="16px" data-filename="skype.png" src="https://s3.amazonaws.com/htmlsig-assets/round/skype.png" alt="Skype"> </a> <span style="white-space:nowrap;" class="signature_skype-sep social-sep"> <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2"> </span> <a style=" text-decoration:none" class="social signature_youtube-target sig-hide" href="#"> <img width="16px" style="margin-bottom:2px; border:none; display:inline;" height="16px" data-filename="youtube.png" src="https://s3.amazonaws.com/htmlsig-assets/round/youtube.png" alt="Youtube"> </a> <span style="white-space:nowrap;" class="signature_youtube-sep social-sep"> <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2"> </span> <a style=" text-decoration:none" class="social signature_vimeo-target sig-hide" href="#"> <img width="16px" style="margin-bottom:2px; border:none; display:inline;" height="16px" data-filename="vimeo.png" src="https://s3.amazonaws.com/htmlsig-assets/round/vimeo.png" alt="Vimeo"> </a> <span style="white-space:nowrap;" class="signature_vimeo-sep social-sep"> <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2"> </span> <a style=" text-decoration:none" class="social signature_flickr-target sig-hide" href="#"> <img width="16px" style="margin-bottom:2px; border:none; display:inline;" height="16px" data-filename="flickr.png" src="https://s3.amazonaws.com/htmlsig-assets/round/flickr.png" alt="Flickr"> </a> <span style="white-space:nowrap;" class="signature_flickr-sep social-sep"> <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2"> </span> <a style="display:none; text-decoration:none" class="social signature_fivehundredpx-target sig-hide" href="#"> <img width="16px" style="margin-bottom:2px; border:none; display:inline;" height="16px" data-filename="fivehundredpx.png" src="https://s3.amazonaws.com/htmlsig-assets/round/fivehundredpx.png" alt="500px"> </a> <span style="white-space:nowrap;" class="signature_fivehundredpx-sep social-sep"> <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2"> </span> <a style="display:none; text-decoration:none" class="social signature_pinterest-target sig-hide" href="#"> <img width="16px" style="margin-bottom:2px; border:none; display:inline;" height="16px" data-filename="pinterest.png" src="https://s3.amazonaws.com/htmlsig-assets/round/pinterest.png" alt="Pinterest"> </a> <span style="white-space:nowrap;" class="signature_pinterest-sep social-sep"> <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2"> </span> <a style="display:none; text-decoration:none" class="social signature_github-target sig-hide" href="#"> <img width="16px" style="margin-bottom:2px; border:none; display:inline;" height="16px" data-filename="github.png" src="https://s3.amazonaws.com/htmlsig-assets/round/github.png" alt="Github"> </a> <span style="white-space:nowrap;" class="signature_github-sep social-sep"> <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2"> </span> <a style="display:none; text-decoration:none" class="social signature_zillow-target sig-hide" href="#"> <img width="16px" style="margin-bottom:2px; border:none; display:inline;" height="16px" data-filename="zillow.png" src="https://s3.amazonaws.com/htmlsig-assets/round/zillow.png" alt="Zillow"> </a> <span style="white-space:nowrap;" class="signature_zillow-sep social-sep"> <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2"> </span> <a style="display:none; text-decoration:none" class="social signature_yelp-target sig-hide" href="#"> <img width="16px" style="margin-bottom:2px; border:none; display:inline;" height="16px" data-filename="yelp.png" src="https://s3.amazonaws.com/htmlsig-assets/round/yelp.png" alt="Yelp"> </a> <span style="white-space:nowrap;" class="signature_yelp-sep social-sep"> <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2"> </span> <a style="display:none; text-decoration:none" class="social signature_tripadvisor-target sig-hide" href="#"> <img width="16px" style="margin-bottom:2px; border:none; display:inline;" height="16px" data-filename="tripadvisor.png" src="https://s3.amazonaws.com/htmlsig-assets/round/tripadvisor.png" alt="TripAdvisor"> </a> <span style="white-space:nowrap;" class="signature_tripadvisor-sep social-sep"> <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2"> </span> <a style="display:none; text-decoration:none" class="social signature_houzz-target sig-hide" href="#"> <img width="16px" style="margin-bottom:2px; border:none; display:inline;" height="16px" data-filename="houzz.png" src="https://s3.amazonaws.com/htmlsig-assets/round/houzz.png" alt="Houzz"> </a> <span style="white-space:nowrap;" class="signature_houzz-sep social-sep"> <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2"> </span> <a style="display:none; text-decoration:none" class="social signature_soundcloud-target sig-hide" href="#"> <img width="16px" style="margin-bottom:2px; border:none; display:inline;" height="16px" data-filename="soundcloud.png" src="https://s3.amazonaws.com/htmlsig-assets/round/soundcloud.png" alt="Soundcloud"> </a> <span style="white-space:nowrap;" class="signature_soundcloud-sep social-sep"> <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2"> </span> <a style="display:none; text-decoration:none" class="social signature_tumblr-target sig-hide" href="#"> <img width="16px" style="margin-bottom:2px; border:none; display:inline;" height="16px" data-filename="tumblr.png" src="https://s3.amazonaws.com/htmlsig-assets/round/tumblr.png" alt="Tumblr"> </a> <span style="white-space:nowrap;" class="signature_tumblr-sep social-sep"> <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2"> </span> <a style="display:none; text-decoration:none" class="social signature_stackoverflow-target sig-hide" href="#"> <img width="16px" style="margin-bottom:2px; border:none; display:inline;" height="16px" data-filename="stackoverflow.png" src="https://s3.amazonaws.com/htmlsig-assets/round/stackoverflow.png" alt="Stack Overflow"> </a> <span style="white-space:nowrap;" class="signature_stackoverflow-sep social-sep"> <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2"> </span> <a style="display:none; text-decoration:none" class="social signature_wordpress-target sig-hide" href="#"> <img width="16px" style="margin-bottom:2px; border:none; display:inline;" height="16px" data-filename="wordpress.png" src="https://s3.amazonaws.com/htmlsig-assets/round/wordpress.png" alt="Wordpress"> </a> <span style="white-space:nowrap;" class="signature_wordpress-sep social-sep"> <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2"> </span> <a style="display:none; text-decoration:none" class="social signature_quora-target sig-hide" href="#"> <img width="16px" style="margin-bottom:2px; border:none; display:inline;" height="16px" data-filename="quora.png" src="https://s3.amazonaws.com/htmlsig-assets/round/quora.png" alt="Quora"> </a> <span style="white-space:nowrap;" class="signature_quora-sep social-sep"> <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2"> </span> <a style="display:none; text-decoration:none" class="social signature_behance-target sig-hide" href="#"> <img width="16px" style="margin-bottom:2px; border:none; display:inline;" height="16px" data-filename="behance.png" src="https://s3.amazonaws.com/htmlsig-assets/round/behance.png" alt="Behance"> </a> <span style="white-space:nowrap;" class="signature_behance-sep social-sep"> <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2"> </span> <a style="display:none; text-decoration:none" class="social signature_imdb-target sig-hide" href="#"> <img width="16px" style="margin-bottom:2px; border:none; display:inline;" height="16px" data-filename="imdb.png" src="https://s3.amazonaws.com/htmlsig-assets/round/imdb.png" alt="IMDB"> </a> <span style="white-space:nowrap;" class="signature_imdb-sep social-sep"> <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2"> </span> <a style="display:none; text-decoration:none" class="social signature_maps-target sig-hide" href="#"> <img width="16px" style="margin-bottom:2px; border:none; display:inline;" height="16px" data-filename="maps.png" src="https://s3.amazonaws.com/htmlsig-assets/round/maps.png" alt="Maps"> </a> <span style="white-space:nowrap;" class="signature_maps-sep social-sep"> <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2"> </span> <a style="display:none; text-decoration:none" class="social signature_bitbucket-target sig-hide" href="#"> <img width="16px" style="margin-bottom:2px; border:none; display:inline;" height="16px" data-filename="bitbucket.png" src="https://s3.amazonaws.com/htmlsig-assets/round/bitbucket.png" alt="Bitbucket"> </a> <span style="white-space:nowrap;" class="signature_bitbucket-sep social-sep"> <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2"> </span> <a style="display:none; text-decoration:none" class="social signature_periscope-target sig-hide" href="#"> <img width="16px" style="margin-bottom:2px; border:none; display:inline;" height="16px" data-filename="periscope.png" src="https://s3.amazonaws.com/htmlsig-assets/round/periscope.png" alt="Periscope"> </a> <span style="white-space:nowrap;" class="signature_periscope-sep social-sep"> <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2"> </span> <a style="display:none; text-decoration:none" class="social signature_snapchat-target sig-hide" href="#"> <img width="16px" style="margin-bottom:2px; border:none; display:inline;" height="16px" data-filename="snapchat.png" src="https://s3.amazonaws.com/htmlsig-assets/round/snapchat.png" alt="SnapChat"> </a> <span style="white-space:nowrap;" class="signature_snapchat-sep social-sep"> <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2"> </span> <a style="display:none; text-decoration:none" class="social signature_spotify-target sig-hide" href="#"> <img width="16px" style="margin-bottom:2px; border:none; display:inline;" height="16px" data-filename="spotify.png" src="https://s3.amazonaws.com/htmlsig-assets/round/spotify.png" alt="Spotify"> </a> <span style="white-space:nowrap;" class="signature_spotify-sep social-sep"> <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2"> </span> <a style="display:none; text-decoration:none" class="social signature_xing-target sig-hide" href="#"> <img width="16px" style="margin-bottom:2px; border:none; display:inline;" height="16px" data-filename="xing.png" src="https://s3.amazonaws.com/htmlsig-assets/round/xing.png" alt="Xing"> </a> <span style="white-space:nowrap;" class="signature_xing-sep social-sep"> <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2"> </span> <a style="display:none; text-decoration:none" class="social signature_whatsapp-target sig-hide" href="#"> <img width="16px" style="margin-bottom:2px; border:none; display:inline;" height="16px" data-filename="whatsapp.png" src="https://s3.amazonaws.com/htmlsig-assets/round/whatsapp.png" alt="Whatsapp"> </a> <span style="white-space:nowrap;" class="signature_whatsapp-sep social-sep"> <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2"> </span>
            </div>
            <p class="" style="text-align:left;margin-top:15px;margin-bottom:15px;margin-left:0;margin-right:0;"> <a href="https://www.htmlsig.com/?utm_source=email&amp;utm_medium=sig&amp;utm_campaign=email%20ba"> <img src="assets/images/banner.png" alt="" border="0" width="300" data-pin-nopin="true"> </a> </p>
            <p class="appstores-container" style="text-align:left;margin-top:15px;margin-bottom:15px;margin-left:0;margin-right:0;">
                <a class="appstore signature_apple_app_store_link-target sig-hide" style="text-decoration:none;" href="#"> <img style="border:none;" height="35" width="113" src="https://s3.amazonaws.com/htmlsig-assets/app-icon/apple.png" class="appstore-icon " alt="Download on the App Store" data-pin-nopin="true"> </a><img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2"> <a class="appstore signature_google_play_link-target sig-hide" style="text-decoration:none;" href="#"> <img style="border:none;" height="35" width="113" src="https://s3.amazonaws.com/htmlsig-assets/app-icon/google.png" class="appstore-icon " alt="Get it on Google Play"> </a><img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2"> <a class="appstore signature_amazon_app_store_link-target sig-hide" style="text-decoration:none;" href="#"> <img style="border:none;" height="35" width="113" src="https://s3.amazonaws.com/htmlsig-assets/app-icon/amazon.png" class="appstore-icon" alt="Available at Amazon"> </a>
            </p>
            <p class="" style="text-align:leftr;line-height: 13px;font-weight: 400;font-size: 9px;color: #333333;margin:0;">A disclaimer is generally any statement intended to specify or delimit the scope of rights and obligations that may be exercised and enforced by parties in a legally recognized relationship. In contrast to other terms for legally operative language, the term disclaimer usually implies situations that involve some level of uncertainty, waiver, or risk.</p>
        </div>
    </div>
</div>
<script type="text/javascript">
    //-- document ready function
    $(document).ready(function() {
        render_signs();
        $('#signature_search').bind("keyup change", function() {
            render_signs();
        });
    });

    function render_signs() {
        $('.custom_loader').show();
        $.ajax({
            url: site_url + "user/generators/ajax_load_signatures/<?php echo $generator['id'] ?>",
            dataType: "json",
            type: "POST",
            data: {
                keyword: $('#signature_search').val()
            },
            success: function(data) {
                $('.custom_loader').hide();
                str = '';
                if (data.length > 0) {
                    $.each(data, function(i, item) {
                        str += '<div class="lib-col">\n\
                      <div class="lib-block">\n\
                        <div class="lib-disp">\n\
                          <a href="javascript:void(0)" onclick="view_sign(' + item.id + ')">\n\
                          <div class="lib-img"><img class="" src="<?php echo base_url() . SIGNATURE_IMAGES ?>signature-' + item.id + '.png" onerror="this.src=\'assets/images/sign.png\';"  alt="Video img"></div>\n\
                          <div class="lib-overlay"></div>\n\
                          </a>\n\
                          <div class="dropdown share-drop">\n\
                            <button class="dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">\n\
                              <i class="fa fa-cog" aria-hidden="true"></i>\n\
                            </button>\n\
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">\n\
                              <li><a href="javascript:void(0)" onclick="view_sign(' + item.id + ')"><i class="fa fa-eye" aria-hidden="true"></i> View</a></li>\n\
                            </ul>\n\
                          </div>\n\
                          <div class="libe-name"><h3>' + item.name + '</h3></div><div class="share-pic">';
                        if (item.logo != '') {
                            str += '<img src="<?php echo SIGNATURE_UPLOADS_LOGO ?>' + item.logo + '" alt="" onerror="this.src=\'assets/images/avatar.jpg\'" class="fix-img">';
                        } else {
                            str += '<img src="assets/images/avatar.jpg" alt="" class="fix-img">';
                        }

                        str += '</div></div>\n\
                      </div>\n\
                    </div>';
                    });
                    $('#signature_list').html(str);
                    $(".fix-img").each(function() {

                        var img = $(this);
                        var image_heightA = img.height();
                        var image_widthA = img.width();
                        var parent_image_widthA = img.parent().width();
                        var parent_image_heightA = img.parent().height();
                        //if(width <= height)

                        if (image_heightA > parent_image_heightA && image_widthA > parent_image_widthA) {

                            img.css('width', parent_image_widthA + 'px');
                            var tem_image_heightA = img.height();

                            if (tem_image_heightA > parent_image_heightA) {
                                img.css('width', '100%');
                            } else {
                                img.css('width', 'auto');
                                img.css('height', '100%');
                            }
                        } else {
                            img.css('width', parent_image_widthA + 'px');
                            var tem_image_heightA = img.height();

                            if (tem_image_heightA > parent_image_heightA) {
                                img.css('width', '100%');
                            } else {
                                img.css('width', 'auto');
                                img.css('height', '100%');
                            }
                        }
                    });
                } else {
                    $('#signature_list').html('<div class="flex-box">No singatures found..</div>');
                }
            }
        });

    }

    function view_sign(id) {
        $('.custom_loader').show();
        $.ajax({
            url: site_url + "dashboard/ajax_get_signature",
            type: "POST",
            data: {
                id: id
            },
            success: function(data) {
                $('.custom_loader').hide();
                $('#theme-1').html(data);
            }
        });
    }
</script>
<script type="text/javascript">
    $(window).load(function() {
        $(".fix-img").each(function() {

            var img = $(this);
            var image_heightA = img.height();
            var image_widthA = img.width();
            var parent_image_widthA = img.parent().width();
            var parent_image_heightA = img.parent().height();
            //if(width <= height)

            if (image_heightA > parent_image_heightA && image_widthA > parent_image_widthA) {

                img.css('width', parent_image_widthA + 'px');
                var tem_image_heightA = img.height();

                if (tem_image_heightA > parent_image_heightA) {
                    img.css('width', '100%');
                } else {
                    img.css('width', 'auto');
                    img.css('height', '100%');
                }
            } else {
                img.css('width', parent_image_widthA + 'px');
                var tem_image_heightA = img.height();

                if (tem_image_heightA > parent_image_heightA) {
                    img.css('width', '100%');
                } else {
                    img.css('width', 'auto');
                    img.css('height', '100%');
                }
            }
        });
    });
</script>