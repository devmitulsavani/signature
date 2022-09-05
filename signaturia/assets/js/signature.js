//-- Signature previous next button click
$('.next_btn').click(function () {
    var data_id = $(this).attr('data-id');
    $('a[href="#' + data_id + '"]').trigger('click');
    $('#client-inner').animate({
        scrollTop: 0
    }, 500);

});
//-- Html signature keydown event
$('.group-require').bind("keyup change", function () {
    $('.create_sign_btn').prop("disabled", false); // Element(s) are now enabled.

    //-- Remove default signature div and display new signature div
    $('.default_signature').remove();
    $('.new_signature').show();

    if (edit_sign == 0) {
        if (!$('.sig-logo').hasClass('logo-selected')) {
            $('.sig-logo').hide();
        }
    }
    var id = $(this).attr('id');
    if (id == 'signature_disclaimer' || id == 'signature_apple_app_store_link' || id == 'signature_google_play_link' || id == 'signature_amazon_app_store_link') {
        if ($('.hide_bottom_line').hasClass('hide')) {
            $('.hide_bottom_line').removeClass('hide');
            $('.hide_bottom_line').addClass('show');
        }
    } else {
        if (!$('.hide_bottom_line').hasClass('show')) {
            $('.hide_bottom_line').addClass('hide');
        }
    }
    //-- if signature is jobtitle then display saparator
    if (id == 'signature_jobtitle' || id == 'signature_name') {
        if ($('#signature_jobtitle').val() != '' && $('#signature_name').val() != '') {
            $('.title-sep').show();
        } else {
            $('.title-sep').hide();
        }
    }
    if (id == 'signature_email') {
        if ($('#signature_email').val() != '') {
            $('.email_title').css('display', 'inline-block');
        } else {
            $('.email_title').hide();
        }
    }
    if (id == 'signature_mobilephone') {
        if ($('#signature_mobilephone').val() != '') {
            $('.mobile_title').css('display', 'inline-block');
        } else {
            $('.mobile_title').hide();
        }
    }
    if (id == 'signature_fax') {
        if ($(this).val() != '') {
            $('.fax_title').css('display', 'inline-block');
        } else {
            $('.fax_title').hide();
        }
    }
    if (id == 'signature_website') {
        if ($(this).val() != '') {
            $('.website_title').show();
        } else {
            $('.website_title').hide();
        }
    }
    if (id == 'signature_officephone') {
        if ($(this).val() != '') {
            $('.office-sep').show();
        } else {
            $('.office-sep').hide();
        }
    }

    if (id == 'signature_officephone' || id == 'signature_fax') {
        if ($('#signature_officephone').val() != '' && $('#signature_fax').val() != '') {
            $('.fax-sep').show();
        } else {
            $('.fax-sep').hide();
        }
    }
    if (id == 'signature_address2') {
        $('.' + id + '-target').html('<br/>' + $(this).val());
    } else {
        $('.' + id + '-target').html($(this).val());
        if (id + '-target' == 'signature_jobtitle-target') {
            $('#theme-8 .' + id + '-target').html('(' + $(this).val() + ')');
        }
    }

});
//-- Hide/Display socialicon on key change event
$('.social-group-require').bind("keyup change", function () {
    var id = $(this).attr('id');
    //-- Remove default signature div and display new signature div
    $('.default_signature').remove();
    $('.new_signature').show();
    if ($(this).val() != '') {
        $('.' + id + '-target').show();
//            $('.' + id + '-target').attr('href', $(this).val());
    } else {
        $('.' + id + '-target').hide();
//            $('.' + id + '-target').attr('href', '');
    }
});
//-- Hide/Display App Icon on key change event
$('.appicon-require').bind("keyup change", function () {
    var id = $(this).attr('id');
    //-- Remove default signature div and display new signature div
    $('.default_signature').remove();
    $('.new_signature').show();
    if ($(this).val() != '') {
        $('.' + id + '-target').show();
    } else {
        $('.' + id + '-target').hide();
    }
});
//--disclaimer on off
$('.signature_disclaimer_radio').change(function () {
    if (this.value == 1) {
        $('.signature_disclaimer-target').show();
    } else {
        $('.signature_disclaimer-target').hide();
    }
});
//--banner on off
$('.signature_show_banner').change(function () {
    if (this.value == 1) {
        $('.ba-container').show();
    } else {
        $('.ba-container').hide();
    }
});
$('.signature_banner_url').bind("keyup change", function () {
    if ($(this).val != '') {
        $('.signature_banner_url-target').attr('href', $(this).val());
    }
});
//--Tab style start
//--change theme dropdown
$('#signature_theme_id').change(function () {
    val = $(this).val();
    if (val == 1) {
        $('#theme-1').show();
        $('#theme-2').hide();
        $('#theme-3').hide();
        $('#theme-4').hide();
        $('#theme-5').hide();
        $('#theme-6').hide();
        $('#theme-7').hide();
        $('#theme-8').hide();
        $('#theme-8').hide();
        $('#theme-9').hide();
        $('#theme-10').hide();
        $('#theme-11').hide();
        $('#theme-12').hide();
        $('#theme-13').hide();
        $('#theme-14').hide();
        $('#theme-15').hide();
    } else if (val == 2) {
        $('#theme-1').hide();
        $('#theme-2').show();
        $('#theme-3').hide();
        $('#theme-4').hide();
        $('#theme-5').hide();
        $('#theme-6').hide();
        $('#theme-7').hide();
        $('#theme-8').hide();
        $('#theme-9').hide();
        $('#theme-10').hide();
        $('#theme-11').hide();
        $('#theme-12').hide();
        $('#theme-13').hide();
        $('#theme-14').hide();
        $('#theme-15').hide();

    } else if (val == 3) {
        $('#theme-1').hide();
        $('#theme-2').hide();
        $('#theme-3').show();
        $('#theme-4').hide();
        $('#theme-5').hide();
        $('#theme-6').hide();
        $('#theme-7').hide();
        $('#theme-8').hide();
        $('#theme-9').hide();
        $('#theme-10').hide();
        $('#theme-11').hide();
        $('#theme-12').hide();
        $('#theme-13').hide();
        $('#theme-14').hide();
        $('#theme-15').hide();

    } else if (val == 4) {
        $('#theme-1').hide();
        $('#theme-2').hide();
        $('#theme-3').hide();
        $('#theme-4').show();
        $('#theme-5').hide();
        $('#theme-6').hide();
        $('#theme-7').hide();
        $('#theme-8').hide();
        $('#theme-9').hide();
        $('#theme-10').hide();
        $('#theme-11').hide();
        $('#theme-12').hide();
        $('#theme-13').hide();
        $('#theme-14').hide();
        $('#theme-15').hide();

    } else if (val == 5) {
        $('#theme-1').hide();
        $('#theme-2').hide();
        $('#theme-3').hide();
        $('#theme-4').hide();
        $('#theme-5').show();
        $('#theme-6').hide();
        $('#theme-7').hide();
        $('#theme-8').hide();
        $('#theme-9').hide();
        $('#theme-10').hide();
        $('#theme-11').hide();
        $('#theme-12').hide();
        $('#theme-13').hide();
        $('#theme-14').hide();
        $('#theme-15').hide();

    } else if (val == 6) {
        $('#theme-1').hide();
        $('#theme-2').hide();
        $('#theme-3').hide();
        $('#theme-4').hide();
        $('#theme-5').hide();
        $('#theme-6').show();
        $('#theme-7').hide();
        $('#theme-8').hide();
        $('#theme-9').hide();
        $('#theme-10').hide();
        $('#theme-11').hide();
        $('#theme-12').hide();
        $('#theme-13').hide();
        $('#theme-14').hide();
        $('#theme-15').hide();

    } else if (val == 7) {
        $('#theme-1').hide();
        $('#theme-2').hide();
        $('#theme-3').hide();
        $('#theme-4').hide();
        $('#theme-5').hide();
        $('#theme-6').hide();
        $('#theme-7').show();
        $('#theme-8').hide();
        $('#theme-9').hide();
        $('#theme-10').hide();
        $('#theme-11').hide();
        $('#theme-12').hide();
        $('#theme-13').hide();
        $('#theme-14').hide();
        $('#theme-15').hide();


    } else if (val == 8) {
        $('#theme-1').hide();
        $('#theme-2').hide();
        $('#theme-3').hide();
        $('#theme-4').hide();
        $('#theme-5').hide();
        $('#theme-6').hide();
        $('#theme-7').hide();
        $('#theme-8').show();
        $('#theme-9').hide();
        $('#theme-10').hide();
        $('#theme-11').hide();
        $('#theme-12').hide();
        $('#theme-13').hide();
        $('#theme-14').hide();
        $('#theme-15').hide();


    } else if (val == 9) {
        $('#theme-1').hide();
        $('#theme-2').hide();
        $('#theme-3').hide();
        $('#theme-4').hide();
        $('#theme-5').hide();
        $('#theme-6').hide();
        $('#theme-7').hide();
        $('#theme-8').hide();
        $('#theme-9').show();
        $('#theme-10').hide();
        $('#theme-11').hide();
        $('#theme-12').hide();
        $('#theme-13').hide();
        $('#theme-14').hide();
        $('#theme-15').hide();

    } else if (val == 10) {
        $('#theme-1').hide();
        $('#theme-2').hide();
        $('#theme-3').hide();
        $('#theme-4').hide();
        $('#theme-5').hide();
        $('#theme-6').hide();
        $('#theme-7').hide();
        $('#theme-8').hide();
        $('#theme-9').hide();
        $('#theme-10').show();
        $('#theme-11').hide();
        $('#theme-12').hide();
        $('#theme-13').hide();
        $('#theme-14').hide();
        $('#theme-15').hide();

    } else if (val == 11) {
        $('#theme-1').hide();
        $('#theme-2').hide();
        $('#theme-3').hide();
        $('#theme-4').hide();
        $('#theme-5').hide();
        $('#theme-6').hide();
        $('#theme-7').hide();
        $('#theme-8').hide();
        $('#theme-9').hide();
        $('#theme-10').hide();
        $('#theme-11').show();
        $('#theme-12').hide();
        $('#theme-13').hide();
        $('#theme-14').hide();
        $('#theme-15').hide();

    } else if (val == 12) {
        $('#theme-1').hide();
        $('#theme-2').hide();
        $('#theme-3').hide();
        $('#theme-4').hide();
        $('#theme-5').hide();
        $('#theme-6').hide();
        $('#theme-7').hide();
        $('#theme-8').hide();
        $('#theme-9').hide();
        $('#theme-10').hide();
        $('#theme-11').hide();
        $('#theme-12').show();
        $('#theme-13').hide();
        $('#theme-14').hide();
        $('#theme-15').hide();

    } else if (val == 13) {
        $('#theme-1').hide();
        $('#theme-2').hide();
        $('#theme-3').hide();
        $('#theme-4').hide();
        $('#theme-5').hide();
        $('#theme-6').hide();
        $('#theme-7').hide();
        $('#theme-8').hide();
        $('#theme-9').hide();
        $('#theme-10').hide();
        $('#theme-11').hide();
        $('#theme-12').hide();
        $('#theme-13').show();
        $('#theme-14').hide();
        $('#theme-15').hide();

    } else if (val == 14) {
        $('#theme-1').hide();
        $('#theme-2').hide();
        $('#theme-3').hide();
        $('#theme-4').hide();
        $('#theme-5').hide();
        $('#theme-6').hide();
        $('#theme-7').hide();
        $('#theme-8').hide();
        $('#theme-9').hide();
        $('#theme-10').hide();
        $('#theme-11').hide();
        $('#theme-12').hide();
        $('#theme-13').hide();
        $('#theme-14').show();
        $('#theme-15').hide();

    } else if (val == 15) {
        $('#theme-1').hide();
        $('#theme-2').hide();
        $('#theme-3').hide();
        $('#theme-4').hide();
        $('#theme-5').hide();
        $('#theme-6').hide();
        $('#theme-7').hide();
        $('#theme-8').hide();
        $('#theme-9').hide();
        $('#theme-10').hide();
        $('#theme-11').hide();
        $('#theme-12').hide();
        $('#theme-13').hide();
        $('#theme-14').hide();
        $('#theme-15').show();


    }
});
//-- Style tab title color change event
$('#signature_text_color').change(function () {
    $('.change_theme_p').css("color", $(this).val());
    $('.change_theme_border').css("border-left", 'solid 3px ' + $(this).val());
    $('.change_theme_border_1').css("border", 'solid 1px ' + $(this).val());
    $('.change_theme_border_top_1').css("border-top", 'solid 1px ' + $(this).val());
    $('.change_theme_border_bottom_1').css("border-bottom", 'solid 1px ' + $(this).val());
    $('.change_theme_border_bottom_2').css("border-bottom", 'solid 2px ' + $(this).val());
    $('.change_theme_border_left_1').css("border-left", 'solid 1px ' + $(this).val());
    $('.change_theme_border_left_2').css("border-left", 'solid 2px ' + $(this).val());
    $('.change_theme_border_top_2').css("border-top", 'solid 2px ' + $(this).val());
    $('.change_theme_background').css("background", $(this).val());
//    $('.signature_disclaimer-target').css("color", $(this).val());
});
//-- Style tab text color change event
$('#signature_p_text_color').change(function () {
    $('.txt').css("color", $(this).val());
});
//-- Style tab link color change event
$('#signature_link_color').change(function () {
    $('.link').css("color", $(this).val());
});
//-- Style tab font color change event
$('#signature_font_style').change(function () {
    $('.new_signature').css("font-family", $(this).val());
    $('.default_signature').css("font-family", $(this).val());
//    $('.change_theme_p').css("font-family", $(this).val());
//    $('.signature_disclaimer-target').css("font-family", $(this).val());
});
//-- Style tab font color change event
$('#signature_fontsize').change(function () {
//    $('.change_theme_font').css("font-size", $(this).val() + 'px');
    $('.change_font').css("font-size", $(this).val() + 'px');
    var fontsize = parseInt($(this).val()) + 4;
    $('.change_font').css("line-height", fontsize + 'px');
    $('.signature_name-target').css("font-size", fontsize + 'px');
    var linesize = fontsize + 4;
    $('.signature_name-target').css("line-height", linesize + 'px');
});
//--Social icon set change event
$('#signature_social_icon_set_id').change(function () {
    val = $(this).val();
    if (val == 1) {
        $('.social_set_1').show();
        $('.social_set_2').hide();
        $('.social_set_3').hide();
        $('.social_set_4').hide();
    } else if (val == 2) {
        $('.social_set_1').hide();
        $('.social_set_2').show();
        $('.social_set_3').hide();
        $('.social_set_4').hide();
    } else if (val == 3) {
        $('.social_set_1').hide();
        $('.social_set_2').hide();
        $('.social_set_3').show();
        $('.social_set_4').hide();
    } else if (val == 4) {
        $('.social_set_1').hide();
        $('.social_set_2').hide();
        $('.social_set_3').hide();
        $('.social_set_4').show();
    }
});
//-- Style tab font color change event
$('#signature_iconsize').change(function () {
    $('.social').children('img').css("width", $(this).val() + 'px');
    $('.social').children('img').css("height", $(this).val() + 'px');
});
// Display the preview of image on image upload
function readURL(input) {
    //-- Remove default signature div and display new signature div
    $('.default_signature').remove();
    $('.new_signature').show();
    $('.sig-logo').show();
    $('.sig-logo').addClass('logo-selected');
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('.sig-logo').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
// Display the preview of image on image upload
function readBannerURL(input) {
    //-- Remove default signature div and display new signature div
    $('.default_signature').remove();
    $('.new_signature').show();
    $('.hide_bottom_line').removeClass('hide');
    $('.hide_bottom_line').addClass('show');
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('.sig-ba').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
}

