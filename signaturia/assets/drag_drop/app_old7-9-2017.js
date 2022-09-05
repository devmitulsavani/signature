/*! HtmlEditor app.js
 * ================

 * @Author  Antonio Reina

 * @Email   <paoloantonioreina@gmail.com>
 * @version 0.0.2
 * @license MIT <http://opensource.org/licenses/MIT>
 */
/* global path */

$.cssHooks.backgroundColor = {
    get: function (elem) {
        if (elem.currentStyle)
            var bg = elem.currentStyle["background-color"];
        else if (window.getComputedStyle)
            var bg = document.defaultView.getComputedStyle(elem,
                    null).getPropertyValue("background-color");
        if (bg.search("rgb") == -1)
            return bg;
        else {
            bg = bg.match(/^rgb\((\d+),\s*(\d+),\s*(\d+)\)$/);
            function hex(x) {
                return ("0" + parseInt(x).toString(16)).slice(-2);
            }

        }
    }
}

'use strict';
//Make sure jQuery has been loaded before app.js
if (typeof jQuery === "undefined") {
    throw new Error("HtmlEditor requires jQuery");
}


$(function () {
    //Set up the object
    _init();
    $(document).on('change','.text_area_wrapper',function(){
        $(this).html($(this).val());
    });
});

/* ----------------------------------
 * ----------------------------------
 * All HTMLeditor functions are implemented below.
 */

var btn_id = '';
function _init() {

    $(window).resize(function () {
        $("body").css("min-height", $(window).height() - 90);
        $(".htmlpage").css("min-height", $(window).height() - 160)
    });



    // tinymce.init({
    //     menubar: false,
    //     force_p_newlines: true,
    //     extended_valid_elements : "*[*]",
    //     valid_elements: "*[*]",
    //     selector: "#html5editor",
    //     plugins: [
    //         "advlist autolink lists link charmap anchor",
    //         "visualblocks code ",
    //         "insertdatetime  table contextmenu paste textcolor colorpicker"
    //     ],
    //     toolbar: "styleselect | bold italic |  forecolor backcolor |alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link code",
    // });

    // tinymce.init({
    //     menubar: false,
    //     force_br_newlines: false,
    //     force_p_newlines: false,
    //     forced_root_block: '',
    //     extended_valid_elements : "*[*]",
    // valid_elements: "*[*]",
    //     selector: "#html5editorLite",
    //     plugins: [
    //     ],
    //     toolbar: "forecolor backcolor | alignleft aligncenter alignright alignjustify code",
    // });

    $("body").css("min-height", $(window).height() - 90);
    $(".htmlpage").css("min-height", $(window).height() - 160);
    // $(".htmlpage").sortable({connectWith: ".lyrow", opacity: .35, handle: ".drag"});
    $(".htmlpage, .htmlpage .column").sortable({
        connectWith: ".column", 
        opacity: .35, 
        handle: ".drag",
        stop: function( event, ui ) {
        var element =ui.item;
        if(ui.item[0].dataset.type == 'paragraph'){
         element.addClass('test123');
         var findp = false;
         if(el = element.find('p')){
                    el.attr('contenteditable',"true");                   
                    findp = true;
                }
                if(findp == true){
                    CKEDITOR.inline(el.get(0));
                }    
            }
        }
    });
    $(".sidebar-nav .lyrow").draggable({connectToSortable: ".htmlpage", helper: "clone", handle: ".drag", drag: function (e, t) {
            t.helper.width(400)
        }, stop: function (e, t) {
            $(".htmlpage, .htmlpage .column").sortable({
            connectWith: ".column", 
            opacity: .35, 
            handle: ".drag",
            stop: function( event, ui ) {
                var element =ui.item;
                if(ui.item[0].dataset.type == 'paragraph'){
                 element.addClass('test123');
                 var findp = false;
                 if(el = element.find('p')){
                            el.attr('contenteditable',"true");                   
                            findp = true;
                        }
                        if(findp == true){
                            CKEDITOR.inline(el.get(0));
                        }    
                    }
                }
            });
             
        }});

    $(".sidebar-nav .box").draggable({connectToSortable: ".column", helper: "clone", handle: ".preview", drag: function (e, t) {
            t.helper.width(400)
        }, stop: function (e, t) {                
            //console.log(t.helper[0].last());

            // alert('in1');
    //          var el = $( '<p contenteditable="true">I m editable!</p>' );
    
    // // // Append the element to <body>.
    // $( '.ckContainer' ).html( el );
    // // //console.log(jQuery('.lyrow').find('.ckContainer'));
    // // //CKEDITOR.inline(el.get(0));
    
    // jQuery('.lyrow').each(function(){
    //     jQuery(this).find('.ckContainer').find('p').each(function(){
    //         CKEDITOR.inline($(this)[0]);
    //     });
    // });

    // jQuery('.lyrow').find('.ckContainer').find('p').each(function(){
    //     CKEDITOR.inline(this);
    // });
    // jQuery('.lyrow').find('.ckContainer').find('p').on('click', function(){
    //     var area= jQuery(this).attr('aria-label');
    //     var split = area.split(',');
    //     var editor = split[1].trim();
    //     jQuery('#cke_'+editor).css({'display':'block', 'position': 'absolute'});
    //  });  
           
            /* if ( t.helper.data('type')==="map"|| t.helper.data('type')==="youtube" ) {
             var iframe = t.helper.find('div.view > iframe');

             var iframeId = iframe.assignId();
             $('#'+iframeId).attr('src',iframe.data('url'));
             }
             */

        }});
// $(document).on('click','.ckContainer',function(){
//         $(this).find('.cke_editable').get(0).focus();
//     });
    $(document).on('click', 'a.clone', function (e) {
        e.preventDefault();
        var _s = $(this);

        var _row = _s.parent().clone();
        _row.hide();
        _row.insertAfter(_s.parent());
        _row.slideDown();

    });
    $(document).on('click', 'a.settings', function (e) {
        e.preventDefault();
        var _s = $(this);

        var part_id = _s.parent().parent().assignId();
        part = _s.parent().parent();
        var column = _s.parent().parent().parent('.column');
        console.log(column);
        var row = _s.parent().parent().parent().parent('.row');
        console.log(row);
        prepareEditor(part, row, column,part_id);
    });

    $(document).on('click', 'a.settings_table', function (e) {
        e.preventDefault();
        var _s = $(this);

        var part_id = _s.parent().parent().assignId();
        part = _s.parent().parent();
        var column = _s.parent().parent().parent('.column');
        console.log(column);
        var row = _s.parent().parent().parent().parent('.row');
        console.log(row);
        prepareEditor(part, row, column,part_id);
    });


    $('a.btnpropa').on('click', function () {
        var rel = $(this).attr('rel');
        $('#buttonContainer a.btn').removeClass('btn-default')
                .removeClass('btn-success')
                .removeClass('btn-info')
                .removeClass('btn-danger')
                .removeClass('btn-info')
                .removeClass('btn-primary')
                .removeClass('btn-link')
                .addClass(rel);

    });
    $('a.btnpropb').on('click', function () {
        var rel = $(this).attr('rel');
        $('#buttonContainer a.btn').removeClass('btn-lg')
                .removeClass('btn-md')
                .removeClass('btn-sm')
                .removeClass('btn-xs')
                .addClass(rel);

    });

    $('a.btnprop').on('click', function () {
        var rel = $(this).attr('rel');
        $('#buttonContainer a.btn').toggleClass(rel);

    });

    $('#preferences').on('hidden.bs.modal', function () {
        $('#youtube').hide();
        $('#map').hide();
        $('#image').hide();
        $('#text').hide();
        $('#code').hide();
        $('#buttons').hide();
        // $('.active').removeClass('active');
    });

    $(".save_signature").click(function (e) {
        var signature_type = $(this).attr('data-type');
        downloadLayoutSrc(signature_type);
    });


    $("#clear").click(function (e) {
        e.preventDefault();
        clearDemo()
    });
    $("#devpreview").click(function () {
        $("body").removeClass("edit sourcepreview");
        $("body").addClass("devpreview");
        removeMenuClasses();
        $(this).addClass("active");
        return false
    });


    $("#edit").click(function () {
        $('#add').hide();
        $("body").removeClass("devpreview sourcepreview");
        $("body").removeClass("tablet mobile");
        $("body").addClass("edit");
        removeMenuClasses();
        $(this).addClass("active");
        return false
    });

    $(document).on('click','#gallery',function(){
        // $('#thepref').slideUp();
//        $('#gallary').modal('show');
//        $('#mediagallery').slideDown();
        $('#myModal').modal('show');
        $('#mediagallery').show();
    });


    $("#sourcepreview").click(function () {
        $('#pc').addClass('active');
        $('#add').show();
        $("body").removeClass("edit");
        $("body").addClass("devpreview sourcepreview");
        removeMenuClasses();
        $(this).addClass("active");
        return false
    });



    $('#pc').click(function () {
        $("body").removeClass("tablet mobile");
        $('#app button').removeClass('active');
        $(this).addClass('active');
    });


    $('#mobile').click(function () {
        $("body").removeClass("tablet");
        $('#app button').removeClass('active');
        $(this).addClass('active');
        $("body").addClass("mobile");
    });


    $('#tablet').click(function () {
        $("body").removeClass("mobile");
        $('#app button').removeClass('active');
        $(this).addClass('active');
        $("body").addClass("tablet");
    });

    $(".nav-header").click(function () {
        $(".sidebar-nav .boxes, .sidebar-nav .rows").hide();
        $(this).next().slideDown()
    });


    removeElm();
    gridSystemGenerator();

}

function loadRowSettings(row) {
    //RowSettings
    // paddings
    $('#tabRow input[data-ref="padding-top"]').val(row.css('padding-top'));
    $('#tabRow input[data-ref="padding-left"]').val(row.css('padding-left'));
    $('#tabRow input[data-ref="padding-right"]').val(row.css('padding-right'));
    $('#tabRow input[data-ref="padding-bottom"]').val(row.css('padding-bottom'));
    // margin
    $('#tabRow input[data-ref="margin-top"]').val(row.css('margin-top'));
    $('#tabRow input[data-ref="margin-left"]').val(row.css('margin-left'));
    $('#tabRow input[data-ref="margin-right"]').val(row.css('margin-right'));
    $('#tabRow input[data-ref="margin-bottom"]').val(row.css('margin-bottom'));
    // backgroundColor
    $('#rowbg').val(row.css('background-color'));
    // image
    if($("#rowbgimage").val()!="none"){
        //$('#rowbgimage').val(row.css('background-image').replace(/^url\(['"]?/,'').replace(/['"]?\)$/,''));    
    }
    
    // css class
    $('#rowcss').val(row.attr('class'));
}

function saveRowSettings(row) {
    //RowSettings
    //padding
    row.css('padding-top', $('#tabRow input[data-ref="padding-top"]').val());
    row.css('padding-left', $('#tabRow input[data-ref="padding-left"]').val());
    row.css('padding-right', $('#tabRow input[data-ref="padding-right"]').val());
    row.css('padding-bottom', $('#tabRow input[data-ref="padding-bottom"]').val());
    // margin
    row.css('margin-top', $('#tabRow input[data-ref="margin-top"]').val());
    row.css('margin-left', $('#tabRow input[data-ref="margin-left"]').val());
    row.css('margin-right', $('#tabRow input[data-ref="margin-right"]').val());
    row.css('margin-bottom', $('#tabRow input[data-ref="margin-bottom"]').val());
    // backgroundColor
    row.css('background-color', $('#rowbg').val());
    // image
    if($("#rowbgimage").val()!="none" && $("#rowbgimage").val() != '')
    row.css('background-image',  'url("'+$("#rowbgimage").val()+'")');
    // css class
    // row.removeClass();
    row.addClass($('#rowcss').val());
    //row.attr('css', $('#rowcss').val());
}

function loadColumnSettings(column) {
    // paddings
    $('#tabCol input[data-ref="padding-top"]').val(column.css('padding-top'));
    $('#tabCol input[data-ref="padding-left"]').val(column.css('padding-left'));
    $('#tabCol input[data-ref="padding-right"]').val(column.css('padding-right'));
    $('#tabCol input[data-ref="padding-bottom"]').val(column.css('padding-bottom'));
    // margin
    $('#tabCol input[data-ref="margin-top"]').val(column.css('margin-top'));
    $('#tabCol input[data-ref="margin-left"]').val(column.css('margin-left'));
    $('#tabCol input[data-ref="margin-right"]').val(column.css('margin-right'));
    $('#tabCol input[data-ref="margin-bottom"]').val(column.css('margin-bottom'));
    // backgroundColor
    $('#colbg').val(column.css('background-color'));
    // css class
    $('#colcss').val(column.attr('class'));
}
function saveColumnSettings(column) {
    //CellSettings
    //padding
    column.css('padding-top', $('#tabCol input[data-ref="padding-top"]').val());
    column.css('padding-left', $('#tabCol input[data-ref="padding-left"]').val());
    column.css('padding-right', $('#tabCol input[data-ref="padding-right"]').val());
    column.css('padding-bottom', $('#tabCol input[data-ref="padding-bottom"]').val());
    // margin
    column.css('margin-top', $('#tabCol input[data-ref="margin-top"]').val());
    column.css('margin-left', $('#tabCol input[data-ref="margin-left"]').val());
    column.css('margin-right', $('#tabCol input[data-ref="margin-right"]').val());
    column.css('margin-bottom', $('#tabCol input[data-ref="margin-bottom"]').val());
    // backgroundColor
    column.css('background-color', $('#colbg').val());
    // css class
    column.attr('class', $('#colcss').val());
}
section_id_wrap = '';
function prepareEditor(part, row, column,section_id) {
    section_id_wrap = section_id;
    $('#socialContainer').html('');
            $('#appstoreContainer').html('');
    $('#social').hide();
    var clone = part.clone();
    var confirm = $('#applyChanges');
    $('#preferencesTitle').html(part.data('type'));

    $('.column .box').removeClass('active');
    part.addClass('active');
    confirm.unbind('click');

    var clonedPart = clone.find('div.view').html();
    var type = part.data('type');
    var panel = $('#Settings');
    

    loadRowSettings(row);
    loadColumnSettings(column);

    var o = part.find('div.view').children();
    var oid = o.assignId();
    $('#id').val(oid);
    $('#class').val(o.parent().parent().css('class'));
    $('#class').parent().show();
    $('#id').parent().show();
    switch (type) {

        /*
        case 'header':
            var editor = tinyMCE.get('html5editor');
            editor.setContent(clonedPart);
            $('#text').show();

            confirm.bind('click', function (e) {
                e.preventDefault();
                saveRowSettings(row);
                saveColumnSettings(column);
                o.html(editor.getContent());
                o.attr('id', $('#id').val());
                o.attr('class', $('#class').val());
            });
            break;
        */
        case 'paragraph':

            // var editor = tinyMCE.get('html5editor');
            // editor.setContent(clonedPart);
            $('.css_class_id').show();
            $('#image').hide();
            $('.border_wrap_main').show();
            $('.non_code_control').show();
            $('#verticaldevider').hide();
            $('#horizontaldevider').hide();
            $('#buttons').hide();
            $('#social').hide();
            $('#appstore').hide();
            $('#code').hide();
            $('#text').show();
            $('.line_height_space').show();
            var o = part.find('div.view');
            btn_id = o.assignId();
            var style_css = '';
            var padding_css = '';
            var vertical_align_css = '';
            var line_height = '';
            var letter_spacing = '';
            var content_aling = '';
            var border_style_css = '';
            var border_radious_css ='';
            var background_css = '';
            $(document).on('click','.css_align',function(){
                style_css = $(this).attr('data-align');
                $(confirm).trigger('click');
            });
            $(document).on('change','.css_padding',function(){
                padding_css = $(this).val();
                $(confirm).trigger('click');
            });
            $(document).on('click','.css_vertical_align',function(){
                vertical_align_css = $(this).attr('data-align');
                $(confirm).trigger('click');
            });
            $(document).on('click','.line_height',function(){
                line_height = $(this).attr('data-align');
                $(confirm).trigger('click');
            });
            $(document).on('click','.letter_spacing',function(){
                letter_spacing = $(this).attr('data-align');
                $(confirm).trigger('click');
            });
            $(document).on('click','.align_main',function(){
                content_aling = $(this).attr('data-align');
                $(confirm).trigger('click');
            });
            $(document).on('keyup change','.main_backround_color',function(){
                background_css = $(this).val();
                $(confirm).trigger('click');
            });

            $(document).on('keyup change','.row_padding_center, .main_cell-margin-center, .main_cell_padding_center, .row-margin-center, .cell_padding_center, .cell-margin-center, .row_colbg, .cell_colbg, .row_colorselectorbg, .cell_colorselectorbg, #rowbgimage',function(){
                $(confirm).trigger('click');
            });
            $(document).on('change','.border_style',function(){
                border = $(this).val();
                if(border == 'none'){
                    border_style_css = 'none';
                }else{
                    d_hight = $('#border_size').val();
                    d_color = $('#border_color').val();
                    border_style_css = d_hight+ " " + border + d_color;    
                }
                
                $(confirm).trigger('click');
            });
            $(document).on('keyup change','.border_size',function(){
                border = $('.border_style').val();
                if(border == 'none'){
                    border_style_css = 'none';
                }else{
                    d_hight = $(this).val();
                    d_color = $('#border_color').val();
                    border_style_css = d_hight+ " " + border + d_color;
                }
                $(confirm).trigger('click');
            });
            $(document).on('keyup change','.border_color',function(){

                border = $('.border_style').val();
                if(border == 'none'){
                    border_style_css = 'none';
                }else{
                   d_color = $(this).val();
                    border = $('.border_style').val();
                    d_hight = $('#border_size').val();
                    border_style_css = d_hight+ " " + border + d_color;
                }
                $(confirm).trigger('click');
            });
            $(document).on('keyup change','.main_border_radious',function(){
               border_radious_css = $(this).val();
                $(confirm).trigger('click');
            });
            // $(document).on('keyup','.row-margin-center',function(){
            //     $(confirm).trigger('click');
            // });
            // $(document).on('keyup','.cell_padding_center',function(){
            //     $(confirm).trigger('click');
            // });
            // $(document).on('keyup','.cell-margin-center',function(){
            //     $(confirm).trigger('click');
            // });
            // $(document).on('keyup change','.row_colbg',function(){
            //     $(confirm).trigger('click');
            // });
            // $(document).on('keyup change','.cell_colbg',function(){
            //     $(confirm).trigger('click');
            // });
            // $(document).on('change','.row_colorselectorbg',function(){
            //     $(confirm).trigger('click');
            // });
            // $(document).on('change','.cell_colorselectorbg',function(){
            //     $(confirm).trigger('click');
            // });
            // $(document).on('keyup','#rowbgimage',function(){
            //     $(confirm).trigger('click');
            // });
            confirm.bind('click', function (e) {
                e.preventDefault();
                saveRowSettings(row);
                saveColumnSettings(column);
                // o.html(editor.getContent());
                o.attr('id', $('#id').val());
                $('#'+section_id).parent().parent().css('text-align',style_css); 
                $('#'+section_id).find('.ckContainer').css('padding',padding_css);
                $('#'+section_id).parent().parent().css('vertical-align',vertical_align_css);
                $('#'+section_id).find('.ckContainer').find('p').css('line-height',line_height);
                $('#'+section_id).find('.ckContainer').find('p').css('letter-spacing',letter_spacing);
                $('#'+section_id).find('.ckContainer').find('p').css('text-align',content_aling);
                
                $('#'+section_id).find('.ckContainer').find('p').css('margin-top', $('.margin_top').val());
                $('#'+section_id).find('.ckContainer').find('p').css('margin-left', $('.margin_left').val());
                $('#'+section_id).find('.ckContainer').find('p').css('margin-right', $('.margin_right').val());
                $('#'+section_id).find('.ckContainer').find('p').css('margin-bottom', $('.margin_bottom').val());
                
                $('#'+section_id).find('.ckContainer').find('p').css('padding-top', $('.padding_top').val());
                $('#'+section_id).find('.ckContainer').find('p').css('padding-left', $('.padding_left').val());
                $('#'+section_id).find('.ckContainer').find('p').css('padding-right', $('.padding_right').val());
                $('#'+section_id).find('.ckContainer').find('p').css('padding-bottom', $('.padding_bottom').val());

                $('#'+section_id).find('.ckContainer').find('p').css('border',border_style_css);
                $('#'+section_id).find('.ckContainer').find('p').css('border-radius',border_radious_css);
                $('#'+section_id).find('.ckContainer').find('p').css('background',background_css);
                        
                
                
                
                // $('#'+btn_id).css('text-align',style_css);
                //o.attr('class', $('#class').val());
            });

            break;

        case 'image':
            var style_css = '';
            var padding_css = '';
            var vertical_align_css = '';
            var border_style_css = '';
            var border_radious_css ='';
            var background_css = '';
            var img = part.find('img');
            $('#imgContent').html(img.clone().attr('width', '200'));
            $('#img-url').val(img.attr('src'));
            $('#img-url-link').val(img.attr('data-href'));
           $('#img-width').val(img.innerWidth());
            $('#img-height').val(img.innerHeight());
            $('#img-title').val(img.attr('title'));
            $('#class').val(img.attr('class'));
            $('#img-rel').val(img.attr('rel'));
            $('#img-title').val(img.attr('title'));
            $('.border_wrap_main').show();
            $('.non_code_control').show();
            // $('#img-clickurl').val(img.attr('onClick'));
            $('.css_class_id').show();
            $('#buttons').hide();
            $('#social').hide();
            $('#appstore').hide();
            $('#text').hide();
            $('#image').show();
            $('#verticaldevider').hide();
            $('#horizontaldevider').hide();
            $('.line_height_space').hide();
            $('#code').hide();

            $(document).on('click','.css_align',function(){
                style_css = $(this).attr('data-align');
                $(confirm).trigger('click');
            });

            $(document).on('change','.css_padding',function(){
                padding_css = $(this).val();
                $(confirm).trigger('click');
            });
            $(document).on('click','.css_vertical_align',function(){
                vertical_align_css = $(this).attr('data-align');
                $(confirm).trigger('click');
            });

            // $(document).on('keyup','#img-url',function(){
            //     $(confirm).trigger('click');
            // });
            // $(document).on('keyup','#img-width',function(){
            //     $(confirm).trigger('click');
            // });
            // $(document).on('keyup','#img-height',function(){
            //     $(confirm).trigger('click');
            // });
            // $(document).on('keyup','#img-rel',function(){
            //     $(confirm).trigger('click');
            // });

            $(document).on('keyup change','.row_padding_center, .main_cell-margin-center, .main_cell_padding_center, .row-margin-center, .cell_padding_center, .cell-margin-center, .row_colbg, .cell_colbg, .row_colorselectorbg, .cell_colorselectorbg, #rowbgimage, #img-url, #img-width, #img-height, #img-rel, #img-url-link',function(){
                $(confirm).trigger('click');
            });
            $(document).on('load','img',function(){
                $(confirm).trigger('click');
            });
            $(document).on('change','.border_style',function(){
                border = $(this).val();
                if(border == 'none'){
                    border_style_css = 'none';
                }else{
                    d_hight = $('#border_size').val();
                    d_color = $('#border_color').val();
                    border_style_css = d_hight+ " " + border + d_color;    
                }
                
                $(confirm).trigger('click');
            });
            $(document).on('keyup change','.border_size',function(){
                border = $('.border_style').val();
                if(border == 'none'){
                    border_style_css = 'none';
                }else{
                    d_hight = $(this).val();
                    d_color = $('#border_color').val();
                    border_style_css = d_hight+ " " + border + d_color;
                }
                $(confirm).trigger('click');
            });
            $(document).on('keyup change','.border_color',function(){

                border = $('.border_style').val();
                if(border == 'none'){
                    border_style_css = 'none';
                }else{
                   d_color = $(this).val();
                    border = $('.border_style').val();
                    d_hight = $('#border_size').val();
                    border_style_css = d_hight+ " " + border + d_color;
                }
                $(confirm).trigger('click');
            });
            $(document).on('keyup change','.main_border_radious',function(){
               border_radious_css = $(this).val();
                $(confirm).trigger('click');
            });
            $(document).on('keyup change','.main_backround_color',function(){
                background_css = $(this).val();
                $(confirm).trigger('click');
            });
            confirm.bind('click', function (e) {
                e.preventDefault();
                saveRowSettings(row);
                saveColumnSettings(column);
                img.attr('title', $('#img-title').val());
                img.attr('src', $('#img-url').val());
                img.attr('data-href', $('#img-url-link').val());
                img.css('width', $('#img-width').val());
                img.css('height', $('#img-height').val());
                img.attr('class', $('#class').val());
                img.attr('rel', $('#img-rel').val());
                //    img.attr('onClick', $('#img-clickurl').val());
                o.attr('id', $('#id').val());
                o.removeClass();
                o.addClass($('#class').val());
                $('#'+section_id).parent().parent().css('text-align',style_css); 
                $('#'+section_id).find('.view').css('padding',padding_css);
                $('#'+section_id).parent().parent().css('vertical-align',vertical_align_css);
                
                $('#'+section_id).find('.view').find('img').css('margin-top', $('.margin_top').val());
                $('#'+section_id).find('.view').find('img').css('margin-left', $('.margin_left').val());
                $('#'+section_id).find('.view').find('img').css('margin-right', $('.margin_right').val());
                $('#'+section_id).find('.view').find('img').css('margin-bottom', $('.margin_bottom').val());
                
                $('#'+section_id).find('.view').find('img').css('padding-top', $('.padding_top').val());
                $('#'+section_id).find('.view').find('img').css('padding-left', $('.padding_left').val());
                $('#'+section_id).find('.view').find('img').css('padding-right', $('.padding_right').val());
                $('#'+section_id).find('.view').find('img').css('padding-bottom', $('.padding_bottom').val());

                $('#'+section_id).find('.view').find('img').css('border',border_style_css);
                $('#'+section_id).find('.view').find('img').css('border-radius',border_radious_css);
                $('#'+section_id).find('.view').find('img').css('background',background_css);
                
            });

            break;
        case 'youtube' :
            var iframe = part.find('iframe');
            $('#youtube-video').html(iframe.clone().css('width', '100%'));
            $('#video-url').val(iframe.attr('src'));
            $('#video-width').val(iframe.innerWidth());
            $('#video-height').val(iframe.innerHeight());
            $('.css_class_id').show();
            $('#youtube').show();
            $('.line_height_space').hide();
            confirm.bind('click', function (e) {
                e.preventDefault();
                saveRowSettings(row);
                saveColumnSettings(column);
                o.attr('src', $('#video-url').val());
                o.css('width', $('#video-width').val());
                o.css('height', $('#video-height').val());
                o.attr('id', $('#id').val());
                o.attr('class', $('#class').val());
            });
            break;
        case 'map' :
            var iframe = part.find('iframe');
            var c = iframe.clone();
            $('#map-content').html(c.attr('width', '100%'));
            $('#address');
            $('.css_class_id').show();
            $('#map').show();
            $('#map-width').val(iframe.innerWidth());
            $('#map-height').val(iframe.innerHeight());
            var url = iframe.attr('src');
            var latlon = gup('q', url).split(',');
            var z = gup('z', url);

            $('#latitude').val(latlon[0]);
            $('#longitude').val(latlon[1]);
            $('#zoom').val(z);
            $('.line_height_space').hide();

            //http://maps.google.com/maps?q=12.927923,77.627108&z=15&output=embed
            $('#latitude, #longitude, #zoom').change(function () {
                c.attr('src', 'http://maps.google.com/maps?q=' + $('#latitude').val() + ',' + $('#longitude').val() + '&z=' + $('#zoom').val() + '&output=embed');
            });

            confirm.bind('click', function (e) {
                e.preventDefault();
                saveRowSettings(row);
                saveColumnSettings(column);
                iframe.css('width', $('#map-width').val());
                iframe.css('height', $('#map-height').val());
                iframe.attr('src', 'http://maps.google.com/maps?q=' + $('#latitude').val() + ',' + $('#longitude').val() + '&z=' + $('#zoom').val() + '&output=embed');
                o.attr('id', $('#id').val());
                o.attr('class', $('#class').val());
            });


            break;
        case 'code':
            $('#class').parent().hide();
            $('#id').parent().hide();


            var txt = $('#code');
            $('#codeeditor').remove();
            $('.codeeditor_title').remove();
            txt.append('<div class="set-title codeeditor_title"><h4>Html Code</h4></div><textarea id="codeeditor" class="form-control" style="min-height:150px;width:100%; display:block;">'+style_html(part.find('div.view').html())+'</textarea>');
            $('#text').hide();
            $('.border_wrap_main').hide();
            $('.non_code_control').hide();
            $('#image').hide();
            $('#buttons').hide();
            $('#social').hide();
            $('#appstore').hide();
            $('.line_height_space').hide();
            $('#verticaldevider').hide();
            $('#horizontaldevider').hide();
            txt.show();
            $('.line_height_space').hide();
            $(document).on('keyup change','#codeeditor',function(){
                $(confirm).trigger('click');
            });
            $(document).on('keyup change','.row_padding_center, .main_cell-margin-center, .main_cell_padding_center, .row-margin-center, .cell_padding_center, .cell-margin-center, .row_colbg, .cell_colbg, .row_colorselectorbg, .cell_colorselectorbg, #rowbgimage',function(){
                $(confirm).trigger('click');
            });
            style_css = '';
            vertical_align_css = '';
            $(document).on('click','.css_align',function(){
                style_css = $(this).attr('data-align');
                $(confirm).trigger('click');
            });
            $(document).on('click','.css_vertical_align',function(){
                vertical_align_css = $(this).attr('data-align');
                $(confirm).trigger('click');
            });
            /*

            var code = part.find('div.code');
            var txt = $('#code');
            $('#codeeditor').remove();
            txt.append('<textarea id="codeeditor" style="min-height:150px;width:100%; display:block;">'+style_html(code.data('code'))+'</textarea>');
            txt.show();

            txt.append('<div id="codeeditor" style="min-height:150px;width:100%; display:block;">' + code.data('code') + '</div>');
            var editor = ace.edit("codeeditor");
            editor.setTheme("ace/theme/monokai");
            editor.getSession().setMode("ace/mode/html");
            txt.show();
            confirm.bind('click', function (e) {
                e.preventDefault();
                saveRowSettings(row);
                saveColumnSettings(column);
                code.data('code', editor.getValue());
                code.html(editor.getValue());
            });
            */



            confirm.bind('click', function (e) {
                e.preventDefault();
                saveRowSettings(row);
                saveColumnSettings(column);
                //code.data('code', $('#codeeditor').val());
                $('#'+section_id).parent().parent().css('text-align',style_css); 
                $('#'+section_id).parent().parent().css('vertical-align',vertical_align_css);
                part.find('div.view').html($('#codeeditor').val());

            });
            break;
        case 'button' :
            var style_css = '';
            var padding_css = '';
            var vertical_align_css = '';
            var border_style_css = '';
            var border_radious_css ='';
            var background_css = '';
            var btn = part.find('.view > a.btn');
            btn_id = btn.assignId();
            var clone = btn.clone();
            $('#buttonContainer').html(clone);
            $('#buttonContainer').find('.btn-default').attr('disabled',true);
            $('#buttonId').val(btn_id);
            $('#buttonLabel').val(btn.text());
            $('#buttonHref').val(btn.attr('href'));


            $('.css_class_id').show();
            $('#social').hide();
            $('#verticaldevider').hide();
            $('#horizontaldevider').hide();
            $('.border_wrap_main').show();
            $('.non_code_control').show();
            $('#appstore').hide();
            $('#text').hide();
            $('#image').hide();
            $('#buttons').show();
            $('#code').hide();
            $('.line_height_space').hide();
            $(document).on('click','.css_align',function(){
                style_css = $(this).attr('data-align');
                $(confirm).trigger('click');
            });
            $(document).on('change','.css_padding',function(){
                padding_css = $(this).val();
                $(confirm).trigger('click');
            });
            $(document).on('click','.css_vertical_align',function(){
                vertical_align_css = $(this).attr('data-align');
                $(confirm).trigger('click');
            });

            $(document).on('keyup change','.row_padding_center, .main_cell-margin-center, .main_cell_padding_center, .row-margin-center, .cell_padding_center, .cell-margin-center, .row_colbg, .cell_colbg, .row_colorselectorbg, .cell_colorselectorbg, #rowbgimage',function(){
                $(confirm).trigger('click');
            });

            $(document).on('keyup change','#buttonLabel, #buttonHref, #custombtnwidth, #custombtnheight, #custombtnfont, #custombtnpaddingtop, #colbtn, #colbtncol, #colorselectorbtn, #colorselectorbtncol',function(){
                $(confirm).trigger('click');
            });
            $(document).on('change','.border_style',function(){
                border = $(this).val();
                if(border == 'none'){
                    border_style_css = 'none';
                }else{
                    d_hight = $('#border_size').val();
                    d_color = $('#border_color').val();
                    border_style_css = d_hight+ " " + border + d_color;    
                }
                
                $(confirm).trigger('click');
            });
            $(document).on('keyup change','.border_size',function(){
                border = $('.border_style').val();
                if(border == 'none'){
                    border_style_css = 'none';
                }else{
                    d_hight = $(this).val();
                    d_color = $('#border_color').val();
                    border_style_css = d_hight+ " " + border + d_color;
                }
                $(confirm).trigger('click');
            });
            $(document).on('keyup change','.border_color',function(){

                border = $('.border_style').val();
                if(border == 'none'){
                    border_style_css = 'none';
                }else{
                   d_color = $(this).val();
                    border = $('.border_style').val();
                    d_hight = $('#border_size').val();
                    border_style_css = d_hight+ " " + border + d_color;
                }
                $(confirm).trigger('click');
            });
            $(document).on('keyup change','.main_border_radious',function(){
               border_radious_css = $(this).val();
                $(confirm).trigger('click');
            });
            $(document).on('change','.border_style',function(){
                border = $(this).val();
                if(border == 'none'){
                    border_style_css = 'none';
                }else{
                    d_hight = $('#border_size').val();
                    d_color = $('#border_color').val();
                    border_style_css = d_hight+ " " + border + d_color;    
                }
                
                $(confirm).trigger('click');
            });
            $(document).on('keyup change','.border_size',function(){
                border = $('.border_style').val();
                if(border == 'none'){
                    border_style_css = 'none';
                }else{
                    d_hight = $(this).val();
                    d_color = $('#border_color').val();
                    border_style_css = d_hight+ " " + border + d_color;
                }
                $(confirm).trigger('click');
            });
            $(document).on('keyup change','.border_color',function(){

                border = $('.border_style').val();
                if(border == 'none'){
                    border_style_css = 'none';
                }else{
                   d_color = $(this).val();
                    border = $('.border_style').val();
                    d_hight = $('#border_size').val();
                    border_style_css = d_hight+ " " + border + d_color;
                }
                $(confirm).trigger('click');
            });
            $(document).on('keyup change','.main_border_radious',function(){
               border_radious_css = $(this).val();
                $(confirm).trigger('click');
            });
            $(document).on('keyup change','.main_backround_color',function(){
                background_css = $(this).val();
                $(confirm).trigger('click');
            });
            confirm.bind('click', function (e) {
                e.preventDefault();
                saveRowSettings(row);
                saveColumnSettings(column);
                btn.text($('#buttonLabel').val());
                btn.attr('href', $('#buttonHref').val());
                btn.css('background', $('#colbtn').val());
                btn.css('width', $('#custombtnwidth').val());
                btn.css('height', $('#custombtnheight').val());
                btn.css('font-size', $('#custombtnfont').val());
                btn.css('padding-top', $('#custombtnpaddingtop').val());
                btn.css('color', $('#colbtncol').val());
                //btn.css('align', $('#btnalign').val());

                o.attr('id', $('#id').val());
                btn.attr('class', $('#buttonContainer > a.btn').attr('class'));
                o.attr('class', $('#class').val());
                $('#'+section_id).parent().parent().css('text-align',style_css); 
                $('#'+section_id).find('.view').css('padding',padding_css);
                $('#'+section_id).parent().parent().css('vertical-align',vertical_align_css);
                
                $('#'+section_id).find('.view').find('.button_tag').css('margin-top', $('.margin_top').val());
                $('#'+section_id).find('.view').find('.button_tag').css('margin-left', $('.margin_left').val());
                $('#'+section_id).find('.view').find('.button_tag').css('margin-right', $('.margin_right').val());
                $('#'+section_id).find('.view').find('.button_tag').css('margin-bottom', $('.margin_bottom').val());
                
                $('#'+section_id).find('.view').find('.button_tag').css('padding-top', $('.padding_top').val());
                $('#'+section_id).find('.view').find('.button_tag').css('padding-left', $('.padding_left').val());
                $('#'+section_id).find('.view').find('.button_tag').css('padding-right', $('.padding_right').val());
                $('#'+section_id).find('.view').find('.button_tag').css('padding-bottom', $('.padding_bottom').val());

                $('#'+section_id).find('.view .button_tag').css('border',border_style_css);
                $('#'+section_id).find('.view .button_tag').css('border-radius',border_radious_css);
                $('#'+section_id).find('.view .button_tag').css('background',background_css);
            });


            break;

        case 'horizontal' :
            var align_style_css = '';
            var style_css = 'border-top: 1px solid #ccc;';
            var padding_css = '';
            var vertical_align_css = '';
            var btn = part.find('.horizontal_wrapper > hr');
            btn_id = btn.assignId();
            var clone = btn.clone();
            var width_style_css = '';
            var border_style_css = '';
            var border_radious_css ='';
            var background_css = '';

            $('.css_class_id').show();
            $('.border_wrap_main').hide();
            $('.non_code_control').show();
            $('#social').hide();
            $('#appstore').hide();
            $('#text').hide();
            $('#image').hide();
            $('#buttons').hide();
            $('.line_height_space').hide();
            $('#horizontaldevider').show();
            $('#verticaldevider').hide();
            $('#code').hide();
            $(document).on('click','.css_align',function(){
                align_style_css = $(this).attr('data-align');
                $(confirm).trigger('click');
            });
            $(document).on('change','.devider_style',function(){
                border = $(this).val();
                d_hight = $('#devider_height').val();
                d_color = $('#devider_color').val();
                style_css = d_hight+ " " + border + " " + d_color;
                $(confirm).trigger('click');
            });
            $(document).on('keyup change','.devider_height',function(){
                style_css = $(this).val();
                d_hight = $(this).val();
                border = $('.devider_style').val();
                d_color = $('#devider_color').val();
                style_css = d_hight+ " " + border + " " + d_color;
                $(confirm).trigger('click');
            });
            $(document).on('keyup change','.devider_color',function(){
                d_color = $(this).val();
                border = $('.devider_style').val();
                d_hight = $('#devider_height').val();
                style_css = d_hight+ " " + border + " " + d_color;
                $(confirm).trigger('click');
            });
            $(document).on('keyup change','.devider_width',function(){
                width_style_css = $(this).val();
                $(confirm).trigger('click');
            });
            $(document).on('change','.css_padding',function(){
                padding_css = $(this).val();
                $(confirm).trigger('click');
            });
            $(document).on('click','.css_vertical_align',function(){
                vertical_align_css = $(this).attr('data-align');
                $(confirm).trigger('click');
            });

            $(document).on('keyup change','.row_padding_center, .main_cell-margin-center, .main_cell_padding_center, .row-margin-center, .cell_padding_center, .cell-margin-center, .row_colbg, .cell_colbg, .row_colorselectorbg, .cell_colorselectorbg, #rowbgimage',function(){
                $(confirm).trigger('click');
            });

            $(document).on('keyup change','#buttonLabel, #buttonHref, #custombtnwidth, #custombtnheight, #custombtnfont, #custombtnpaddingtop, #colbtn, #colbtncol, #colorselectorbtn, #colorselectorbtncol',function(){
                $(confirm).trigger('click');
            });

//            //Border Setttings
//            $(document).on('change','.border_style',function(){
//                border = $(this).val();
//                if(border == 'none'){
//                    border_style_css = 'none';
//                }else{
//                    d_hight = $('#border_size').val();
//                    d_color = $('#border_color').val();
//                    border_style_css = d_hight+ " " + border + d_color;    
//                }
//                
//                $(confirm).trigger('click');
//            });
//            $(document).on('keyup change','.border_size',function(){
//                border = $('.border_style').val();
//                if(border == 'none'){
//                    border_style_css = 'none';
//                }else{
//                    d_hight = $(this).val();
//                    d_color = $('#border_color').val();
//                    border_style_css = d_hight+ " " + border + d_color;
//                }
//                $(confirm).trigger('click');
//            });
//            $(document).on('keyup change','.border_color',function(){
//
//                border = $('.border_style').val();
//                if(border == 'none'){
//                    border_style_css = 'none';
//                }else{
//                   d_color = $(this).val();
//                    border = $('.border_style').val();
//                    d_hight = $('#border_size').val();
//                    border_style_css = d_hight+ " " + border + d_color;
//                }
//                $(confirm).trigger('click');
//            });
//            $(document).on('keyup change','.main_border_radious',function(){
//               border_radious_css = $(this).val();
//                $(confirm).trigger('click');
//            });
            $(document).on('keyup change','.main_backround_color',function(){
                background_css = $(this).val();
                $(confirm).trigger('click');
            });
            confirm.bind('click', function (e) {
                e.preventDefault();
                saveRowSettings(row);
                saveColumnSettings(column);
                //btn.css('align', $('#btnalign').val());

                o.attr('id', $('#id').val());
                $('#'+section_id).parent().parent().css('text-align',align_style_css); 
                $('#'+section_id).find('.view').find('.hr_devider').css('border-top',style_css);
                $('#'+section_id).find('.view').find('.hr_devider').css('width',width_style_css);
                $('#'+section_id).find('.view').css('padding',padding_css);
                $('#'+section_id).parent().parent().css('vertical-align',vertical_align_css);
                
                if($('.margin_top').val() == '0px' && $('.margin_bottom').val() == '0px'){
                    $('#'+section_id).find('.view').find('.hr_devider').css('margin-top', '20px');
                    $('#'+section_id).find('.view').find('.hr_devider').css('margin-bottom', '20px');
                }else{
                    $('#'+section_id).find('.view').find('.hr_devider').css('margin-top', $('.margin_top').val());
                    $('#'+section_id).find('.view').find('.hr_devider').css('margin-bottom', $('.margin_bottom').val());
                }

                
                $('#'+section_id).find('.view').find('.hr_devider').css('margin-left', $('.margin_left').val());
                $('#'+section_id).find('.view').find('.hr_devider').css('margin-right', $('.margin_right').val());
                
                
                $('#'+section_id).find('.view').find('.hr_devider').css('padding-top', $('.padding_top').val());
                $('#'+section_id).find('.view').find('.hr_devider').css('padding-left', $('.padding_left').val());
                $('#'+section_id).find('.view').find('.hr_devider').css('padding-right', $('.padding_right').val());
                $('#'+section_id).find('.view').find('.hr_devider').css('padding-bottom', $('.padding_bottom').val());

                //Border Setting
                // $('#'+section_id).find('.horizontal_wrapper hr').css('border',border_style_css);
                // $('#'+section_id).find('.horizontal_wrapper hr').css('border-radius',border_radious_css); 
                // $('#'+section_id).find('.horizontal_wrapper hr').css('background',background_css);
            });


            break;
        case 'social' :
            var style_css = '';
            var padding_css = '';
            var vertical_align_css = '';
            var border_style_css = '';
            var border_radious_css ='';
            var background_css = '';
            $('#appstoreContainer').html('');
            $('#socialContainer').html('');
            var btn = part.find('.social_wrapper > a.social_image');
            btn_id = btn.assignId();
                
            icon = $(part.find('.social_wrapper')).attr('data-icon');
            set = $(part.find('.social_wrapper')).attr('data-set');

            $(part.find('.social_image').each(function(){
                href_val = $(this).attr('data-href');
                if(href_val == 'javascript:void(0);'){
                    href_val = '';
                }
                data_indent = $(this).attr('data-indent');
                image_name = $(this).find('img').attr("src");
                social_title = $(this).find('img').attr("data-name");
                social_media = $(this).find('img').attr("data-name");
                $('#socialContainer').append("<div class='social_media_edit"+btn_id+" ui-draggable form-group "+btn_id+" media_wrap"+social_media+"'  data-name='"+social_media+"'><button type='button' data-name='"+social_media+"' class='btn btn-default enable_media' ><i class='fa fa-close'></i>&nbsp;Delete</button><img src='"+image_name+"' style='width:40px' id='"+btn_id + social_title+"'>"+social_title+"<input type='text' class='social_media_style form-control "+btn_id + social_title+"' id='social_href_"+social_media+"' value='"+href_val+"' data-indent = '"+data_indent+"'></div>");
                // $('.custom_social_media.'+btn_id+'#'+social_media).hide();
            }));
            GetSocialIcons_after(icon,set,part,btn_id);
            //btn_id = btn.assignId();
            var clone = btn.clone();
            // $('#socialContainer').html(clone);
            $('#buttonId').val(btn_id);

            
            $('#socialContainer').addClass(btn_id);

            $('#buttonLabel').val(btn.text());
            $('#buttonHref').val(btn.attr('href'));
            // $('.css_class_id').hide();
            $('#appstore').hide();
            $('#text').hide();
            $('#verticaldevider').hide();
            $('#image').hide();
            $('#buttons').hide();
            $('#social').show();
            $('.border_wrap_main').show();
            $('.non_code_control').show();
            $('.line_height_space').hide();
            $('#verticaldevider').hide();
            $('#horizontaldevider').hide();
            $('#code').hide();
            var font_size = $('.media_size').val();
            $(document).on('click','.css_align',function(){
                style_css = $(this).attr('data-align');
                $(confirm).trigger('click');
            });
            $(document).on('change','.css_padding',function(){
                padding_css = $(this).val();
                $(confirm).trigger('click');
            });
            $(document).on('click','.css_vertical_align',function(){
                vertical_align_css = $(this).attr('data-align');
                $(confirm).trigger('click');
            });
            $(document).on('change','.media_size',function(){
                font_size = $(this).val();
                $(confirm).trigger('click');
            });
            $(document).on('keyup change','.row_padding_center, .main_cell-margin-center, .main_cell_padding_center, .row-margin-center, .cell_padding_center, .cell-margin-center, .row_colbg, .cell_colbg, .row_colorselectorbg, .cell_colorselectorbg, #rowbgimage, .social_media_style',function(){
                $(confirm).trigger('click');
            });
            $(document).on('change','.border_style',function(){
                border = $(this).val();
                if(border == 'none'){
                    border_style_css = 'none';
                }else{
                    d_hight = $('#border_size').val();
                    d_color = $('#border_color').val();
                    border_style_css = d_hight+ " " + border + d_color;    
                }
                
                $(confirm).trigger('click');
            });
            $(document).on('keyup change','.border_size',function(){
                border = $('.border_style').val();
                if(border == 'none'){
                    border_style_css = 'none';
                }else{
                    d_hight = $(this).val();
                    d_color = $('#border_color').val();
                    border_style_css = d_hight+ " " + border + d_color;
                }
                $(confirm).trigger('click');
            });
            $(document).on('keyup change','.border_color',function(){

                border = $('.border_style').val();
                if(border == 'none'){
                    border_style_css = 'none';
                }else{
                   d_color = $(this).val();
                    border = $('.border_style').val();
                    d_hight = $('#border_size').val();
                    border_style_css = d_hight+ " " + border + d_color;
                }
                $(confirm).trigger('click');
            });
            $(document).on('keyup change','.main_border_radious',function(){
               border_radious_css = $(this).val();
                $(confirm).trigger('click');
            });
            $(document).on('keyup change','.main_backround_color',function(){
                background_css = $(this).val();
                $(confirm).trigger('click');
            });
            confirm.bind('click', function (e) {

                e.preventDefault();
                // saveRowSettings(row);
                // saveColumnSettings(column);
                // btn.text($('#buttonLabel').val());
                // btn.attr('href', $('#buttonHref').val());
                // btn.css('background', $('#colbtn').val());
                // btn.css('width', $('#custombtnwidth').val());
                // btn.css('height', $('#custombtnheight').val());
                // btn.css('font-size', $('#custombtnfont').val());
                // btn.css('padding-top', $('#custombtnpaddingtop').val());
                // btn.css('color', $('#colbtncol').val());
                //btn.css('align', $('#btnalign').val());
                $('#'+btn_id+'.deleted').each(function(){
                    $(this).remove();
                });
                var social_html = '<div class="social_icons_wrap">';
                $('.social_media_edit'+btn_id).each(function(){
                        social_media = $(this).attr('data-name');
                        img_src = $('#'+btn_id+social_media).attr('src');
                        img_href = $('.'+btn_id+social_media).val();
                        dat_indent_edit = $('.'+btn_id+social_media).attr('data-indent');
                        if(img_href == ''){
                            img_href = 'javascript:void(0);';
                        }
                        
                        social_html += '<a href="javascript:void(0);" data-indent="'+dat_indent_edit+'" data-href="'+img_href+'" class="social_image social_'+social_media+'"  data-name="'+social_media+'" target="_blank" ><img id="social_img_'+social_media+'" data-name="'+social_media+'" src="'+img_src+'" style="width: 40px;"/></a>';
                });
                social_html += '</div>';
                $(part.find('.social_wrapper')).html(social_html);
                $(part.find('.social_wrapper')).attr('data-icon',$('#socialContainer.'+btn_id).attr('data-icon'));
                $(part.find('.social_wrapper')).attr('data-set',$('#socialContainer.'+btn_id).attr('data-set'));


                // o.attr('id', $('#id').val());
                // btn.attr('class', $('#buttonContainer > a.btn').attr('class'));
                // o.attr('class', $('#class').val());
                $('#'+section_id).parent().parent().css('text-align',style_css); 
                $('#'+section_id).find('.view').css('padding',padding_css);
                $('#'+section_id).parent().parent().css('vertical-align',vertical_align_css);
                console.log(section_id);
                $('#'+section_id).find('.view').find('.social_icons_wrap .social_image img').css('width', font_size);
                $('#'+section_id).find('.view').find('.social_icons_wrap').css('margin-top', $('.margin_top').val());
                $('#'+section_id).find('.view').find('.social_icons_wrap').css('margin-left', $('.margin_left').val());
                $('#'+section_id).find('.view').find('.social_icons_wrap').css('margin-right', $('.margin_right').val());
                $('#'+section_id).find('.view').find('.social_icons_wrap').css('margin-bottom', $('.margin_bottom').val());
                
                $('#'+section_id).find('.view').find('.social_icons_wrap').css('padding-top', $('.padding_top').val());
                $('#'+section_id).find('.view').find('.social_icons_wrap').css('padding-left', $('.padding_left').val());
                $('#'+section_id).find('.view').find('.social_icons_wrap').css('padding-right', $('.padding_right').val());
                $('#'+section_id).find('.view').find('.social_icons_wrap .social_icons_wrap').css('padding-bottom', $('.padding_bottom').val());

                $('#'+section_id).find('.social_wrapper .social_icons_wrap').css('border',border_style_css);
                $('#'+section_id).find('.social_wrapper .social_icons_wrap').css('border-radius',border_radious_css);
                $('#'+section_id).find('.social_wrapper .social_icons_wrap').css('background',background_css);

            });


            break;   
        case 'appstore' :
            var style_css = '';
            var padding_css = '';
            var vertical_align_css = '';
            var border_style_css = '';
            var border_radious_css ='';
            var background_css = '';
            $('#socialContainer').html('');
            $('#appstoreContainer').html('');
            $('.app_store_wrapper').html('');
            var btn = part.find('.media_wrapper > a.appstore');
            btn_id = btn.assignId();
            app_store_cnt = 0;
            var app_store = new Array();
            $(part.find('.appstore').each(function(){
                app_store_cnt++;
                href_val = $(this).attr('data-href');
                if(href_val == 'javascript:void(0);'){
                    href_val = '';
                }
                data_indent = $(this).attr('data-indent');

                image_name = $(this).find('img').attr("src");
                social_title = $(this).find('img').attr("data-name");
                social_media = $(this).attr('data-name');
                app_store.push(social_media);
                $('#appstoreContainer').append("<div class='form-group "+btn_id+" app_wrap"+social_media+"'><button type='button' data-name='"+social_media+"' class='btn btn-default enable_app' ><i class='fa fa-close'></i>&nbsp;Delete</button><img src='"+image_name+"' style='width:100px' >"+social_title+"<input type='text' class='app_store_style  form-control' id='social_href_"+social_media+"' value='"+href_val+"' data-indent = '"+data_indent+"'></div>");
            }));
            if(app_store_cnt <3){
                if(!isInArray('apple', app_store)){
                    $('.app_store_wrapper').append('<a class="appstore signature_apple_app_store_link-target sig-hide media_apple" style="text-decoration:none;" href="javascript:void(0);" data-href="javascript:void(0);" data-name="apple" target="_blank" data-indent="appstore"><img style="border:none;" height="35" width="113" src="http://localhost/htmlsig/assets/images/apple.png" class="appstore-icon " alt="Download on the App Store" data-pin-nopin="true" id="media_apple" data-name="Apple"></a>');
                } 
                if(!isInArray('google', app_store)){
                    $('.app_store_wrapper').append('<a class="appstore signature_google_play_link-target sig-hide media_google" style="text-decoration:none;" href="javascript:void(0);" data-href="javascript:void(0);" data-name="google" target="_blank" data-indent="googleplaytore"><img style="border:none;" height="35" width="113" src="http://localhost/htmlsig/assets/images/google.png" class="appstore-icon " alt="Get it on Google Play" id="media_google" data-name="google"></a>');
                }
                if(!isInArray('amazon', app_store)){
                    $('.app_store_wrapper').append('<a class="appstore signature_amazon_app_store_link-target sig-hide media_amazon" style="text-decoration:none;" href="javascript:void(0);" data-href="javascript:void(0);" data-name="amazon" target="_blank" data-indent="amazon"> <img style="border:none;" height="35" width="113" src="http://localhost/htmlsig/assets/images/amazon.png" class="appstore-icon" alt="Available at Amazon" id="media_amazon" data-name="amazon"></a>');
                }   
            }
            //btn_id = btn.assignId();
            var clone = btn.clone();
            // $('#socialContainer').html(clone);
            $('#buttonId').val(btn_id);
            $('#buttonLabel').val(btn.text());
            $('#buttonHref').val(btn.attr('href'));
            // $('.css_class_id').hide();
            $('#text').hide();
            $('.border_wrap_main').show();
            $('.non_code_control').show();
            $('#image').hide();
            $('#buttons').hide();
            $('#social').hide();
            $('#appstore').show();
            $('.line_height_space').hide();
            $('#verticaldevider').hide();
            $('#horizontaldevider').hide();
            $('#code').hide();
            $(document).on('click','.css_align',function(){
                style_css = $(this).attr('data-align');
                $(confirm).trigger('click');
            });
            $(document).on('change','.css_padding',function(){
                padding_css = $(this).val();
                $(confirm).trigger('click');
            });
            $(document).on('click','.css_vertical_align',function(){
                vertical_align_css = $(this).attr('data-align');
                $(confirm).trigger('click');
            });
            $(document).on('keyup change','.row_padding_center, .main_cell-margin-center, .main_cell_padding_center, .row-margin-center, .cell_padding_center, .cell-margin-center, .row_colbg, .cell_colbg, .row_colorselectorbg, .cell_colorselectorbg, #rowbgimage, .app_store_style',function(){
                $(confirm).trigger('click');
            });
            $(document).on('change','.border_style',function(){
                border = $(this).val();
                if(border == 'none'){
                    border_style_css = 'none';
                }else{
                    d_hight = $('#border_size').val();
                    d_color = $('#border_color').val();
                    border_style_css = d_hight+ " " + border + d_color;    
                }
                
                $(confirm).trigger('click');
            });
            $(document).on('keyup change','.border_size',function(){
                border = $('.border_style').val();
                if(border == 'none'){
                    border_style_css = 'none';
                }else{
                    d_hight = $(this).val();
                    d_color = $('#border_color').val();
                    border_style_css = d_hight+ " " + border + d_color;
                }
                $(confirm).trigger('click');
            });
            $(document).on('keyup change','.border_color',function(){

                border = $('.border_style').val();
                if(border == 'none'){
                    border_style_css = 'none';
                }else{
                   d_color = $(this).val();
                    border = $('.border_style').val();
                    d_hight = $('#border_size').val();
                    border_style_css = d_hight+ " " + border + d_color;
                }
                $(confirm).trigger('click');
            });
            $(document).on('keyup change','.main_border_radious',function(){
               border_radious_css = $(this).val();
                $(confirm).trigger('click');
            });
            $(document).on('keyup change','.main_backround_color',function(){
                background_css = $(this).val();
                $(confirm).trigger('click');
            });
            var element = $('#'+section_id).find('.view').find('.appstore');
            if(element.length >= 3){
                $('.app_store_wrapper').hide();
            }else{
                $('.app_store_wrapper').show();
            }
            $(document).on('click', '.enable_app', function(){
                social_media = $(this).attr('data-name');
                $('#'+section_id_wrap+' .media_'+social_media).addClass('deleted');   
                $('.app_store_wrapper').append($('#'+section_id_wrap+' .media_'+social_media+' img').clone());
                $('.app_store_wrapper img').each(function(){
                    $(this).addClass('add_more_app');
                    $(this).attr('data-id', btn_id);
                });
                // $('.app_store_wrapper img').attr('add_more_app '+btn_id);
               $('.'+btn_id+'.app_wrap'+social_media).remove();  
               var element = $('#'+section_id).find('.view').find('.appstore');
            if(element.length > 3){
                $('.app_store_wrapper').hide();
            }else{
                $('.app_store_wrapper').show();
            }
                $(confirm).trigger('click'); 
                // $('.app_store_style').trigger('keyup');
            });
            // console.log(section_id);
            
            
            // $(document).on('click', '.app_store_wrapper .enable_app', function(){
            //     app_store_name = $(this).attr('data-name');
            //     img_src = $(this).closest('img');
            //     console.log(img_src);
            //     $('#appstoreContainer').append('<div class="form-group app_wrapapple"><button type="button" data-name="social_media" class="btn btn-default enable_app"><i class="fa fa-close"></i>&nbsp;Delete</button><img src="'+img_src+'" style="width:100px">'+app_store_name+'<input type="text" class="app_store_style  form-control" id="social_href_'+app_store_name+'" value="" data-indent="appstore"></div>');
            //     $('.media_content_wrapper').append('<a class="appstore signature_'+app_store_name+'_app_store_link-target sig-hide media_'+app_store_name+'" style="text-decoration:none;" href="javascript:void(0);" data-href="javascript:void(0);" data-name="'+app_store_name+'" target="_blank" data-indent="appstore"><img style="border:none;" height="35" width="113" src="'+src+'" class="appstore-icon " alt="Download on the App Store" data-pin-nopin="true" id="media_'+app_store_name+'" data-name="'+app_store_name+'"></a>');
            //     $(this).remove()
            //     $(confirm).trigger('click'); 
            //     // $('.app_store_style').trigger('keyup');
            // });
            confirm.bind('click', function (e) {

                e.preventDefault();
                
                // saveRowSettings(row);
                // saveColumnSettings(column);
                // btn.text($('#buttonLabel').val());
                // btn.attr('href', $('#buttonHref').val());
                // btn.css('background', $('#colbtn').val());
                // btn.css('width', $('#custombtnwidth').val());
                // btn.css('height', $('#custombtnheight').val());
                // btn.css('font-size', $('#custombtnfont').val());
                // btn.css('padding-top', $('#custombtnpaddingtop').val());
                // btn.css('color', $('#colbtncol').val());
                //btn.css('align', $('#btnalign').val());
                $('#'+section_id_wrap+' .deleted').each(function(){
                    $(this).remove();
                });
                $('.'+btn_id+' .enable_app').each(function(){
                    social_media = $(this).attr('data-name');
                    store_href = $('#social_href_'+social_media).val();
                    if(store_href == ''){
                        store_href = 'javascript:void(0);';
                    }
                        $('#'+section_id + ' .media_'+social_media).attr('data-href',store_href) ;  
                        $('#'+section_id + ' .media_'+social_media).attr('data-indent',$('#social_href_'+social_media).attr('data-indent')) ;  
                });


                // o.attr('id', $('#id').val());
                // btn.attr('class', $('#buttonContainer > a.btn').attr('class'));
                // o.attr('class', $('#class').val());

                $('#'+section_id).parent().parent().css('text-align',style_css); 
                 $('#'+section_id).find('.view').css('padding',padding_css);
                 $('#'+section_id).parent().parent().css('vertical-align',vertical_align_css);

                $('#'+section_id).find('.view').find('.media_content_wrapper').css('margin-top', $('.margin_top').val());
                $('#'+section_id).find('.view').find('.media_content_wrapper').css('margin-left', $('.margin_left').val());
                $('#'+section_id).find('.view').find('.media_content_wrapper').css('margin-right', $('.margin_right').val());
                $('#'+section_id).find('.view').find('.media_content_wrapper').css('margin-bottom', $('.margin_bottom').val());
                
                $('#'+section_id).find('.view').find('.media_content_wrapper').css('padding-top', $('.padding_top').val());
                $('#'+section_id).find('.view').find('.media_content_wrapper').css('padding-left', $('.padding_left').val());
                $('#'+section_id).find('.view').find('.media_content_wrapper').css('padding-right', $('.padding_right').val());
                $('#'+section_id).find('.view').find('.media_content_wrapper').css('padding-bottom', $('.padding_bottom').val());

                $('#'+section_id).find('.view').find('.media_content_wrapper').css('border',border_style_css);
                $('#'+section_id).find('.view').find('.media_content_wrapper').css('border-radius',border_radious_css);
                $('#'+section_id).find('.view').find('.media_content_wrapper').css('background',background_css);
            });


            break;  
    }
    $('.setting-act').slideDown();
    $('.setting-act').show();
    $('.setting_tab').trigger('click');
    $('.tab-content').scrollTop(0)
    
//    $('#preferences').modal('show').draggable();
    // $('#preferences').show();
}
$(document).on('click', '.close_setting_wrapper', function(){
    $('.setting-act').slideUp();
});
$(document).on('click', '.nav_menu_tab', function(){
    $('.setting-act').slideUp();
});
$(document).on('focusin', function(e) {
    if ($(event.target).closest(".mce-window").length) {
        e.stopImmediatePropagation();
    }
});
$(document).on('click', '.enable_media', function(){
    social_media = $(this).attr('data-name');
    $('#'+btn_id+'.social_'+social_media).addClass('deleted');   
    $('.'+btn_id+'.media_wrap'+social_media).remove();   
    console.log('.custom_social_media.'+btn_id+'#test'+social_media); 
    // console.log('.'+btn_id+'#test'+social_media);
    $('.custom_social_media.'+btn_id+'#'+social_media).show();   
    $('.social_media_style').trigger('keyup');
});
$(document).on('click','.add_more_app',function(){
                app_store_name = $(this).attr('data-name');
                img_src = $(this).attr('src');
                main_cls = $(this).attr('data-id');
                $('#appstoreContainer').append('<div class="form-group '+ main_cls+' app_wrap'+app_store_name+'"><button type="button" data-name="'+app_store_name+'" class="btn btn-default enable_app"><i class="fa fa-close"></i>&nbsp;Delete</button><img src="'+img_src+'" style="width:100px">'+app_store_name+'<input type="text" class="app_store_style  form-control" id="social_href_'+app_store_name+'" value="" data-indent="appstore"></div>');
                $('#'+section_id_wrap).find('.view').find('.media_content_wrapper').append('<a class="appstore signature_'+app_store_name+'_app_store_link-target sig-hide media_'+app_store_name+'" style="text-decoration:none;" href="javascript:void(0);" data-href="javascript:void(0);" data-name="'+app_store_name+'" target="_blank" data-indent="appstore"><img style="border:none;" height="35" width="113" src="'+img_src+'" class="appstore-icon " alt="Download on the App Store" data-pin-nopin="true" id="media_'+app_store_name+'" data-name="'+app_store_name+'"></a>');
                $(this).remove();
            });

$(document).on('change', '.media_set', function(){
    icon = $(this).val();
    set = $(this).find('option:selected').attr("data-set"); 
    GetSocialIcons_after(icon,set,part,btn_id);
    $('.cell_colbg').trigger('keyup');

});

$(document).on('click','.custom_social_media',function(){
     social_media = $(this).attr('data-name');
                image_name = $(this).attr('src');
                // $('#socialContainer.'+btn_id).append("<div class='ui-draggable form-group "+btn_id+" media_wrap"+social_media+"'><button type='button' data-name='"+social_media+"' class='btn btn-default enable_media' ><i class='fa fa-close'></i>&nbsp;Delete</button><img src='"+image_name+"' style='width:40px' >"+social_media+"<input type='text' class='form-control' id='social_href_"+social_media+"' value=''></div>");
                $('#socialContainer').append("<div class='social_media_edit"+btn_id+" ui-draggable form-group "+btn_id+" media_wrap"+social_media+"' data-name='"+social_media+"' ><button type='button' data-name='"+social_media+"' class='btn btn-default enable_media' ><i class='fa fa-close'></i>&nbsp;Delete</button><img src='"+image_name+"' style='width:40px' id='"+btn_id + social_media+"'>"+social_media+"<input type='text' class='social_media_style form-control "+btn_id + social_media+"' id='social_href_"+social_media+"' value=''></div>");
                $(this).hide();  
                $('.social_media_style').trigger('keyup');
});
$(document).on('hidden.bs.modal', '#preferences', function(){
    $('.appstore').each(function(){
        $(this).removeClass('deleted');
    });

    $('.social_image').each(function(){
        $(this).removeClass('deleted');
    });
})

function isInArray(value, array) {
  return array.indexOf(value) > -1;
}
function GetSocialIcons_after(icon,icon_set,part,btn_id) {
                                    var request = $.ajax({
                                        url: "get_social_media",
                                        method: "POST",
                                        data: {set:icon,icon_set},
                                        dataType: "json",
                                        async:false,
                                    });
                                    request.done(function(msg) {
                                        var selected_media = [];
                                        $('.social_media_edit'+btn_id).each(function(){
                                            social_media = $(this).attr('data-name');
                                             selected_media.push(social_media);

                                        });
                                        var all_html = '';
                                        for(var i = 0; i<msg.length; i++){
                                            if(jQuery.inArray(msg[i]['name'], selected_media) !== -1){
                                                $('#'+btn_id+msg[i]['name']).attr('src',$('#base_url').val() +'uploads/social_icons/'+icon_set+'/'+msg[i][icon]);
                                            }
                                            all_html += '<img src="'+$('#base_url').val() +'uploads/social_icons/'+icon_set+'/'+msg[i][icon]+'" id="'+msg[i]['name']+'" data-name="'+msg[i]['name']+'" style="width:35px;margin:5px;" class="custom_social_media '+btn_id+'">';
                                        }
                                        $('.media_wrapper_custom').html(all_html);
                                    });
                                    $('.social_media_edit'+btn_id).each(function(){
                                    social_media = $(this).attr('data-name');
                                    $('.custom_social_media.'+btn_id+'#'+social_media).hide();
            });
                                    $('#socialContainer.'+btn_id).attr('data-icon',icon);
                                    $('#socialContainer.'+btn_id).attr('data-set',icon_set);
                                }

function handleSaveLayout() {
    var e = $(".htmlpage").html();
    if (e != window.htmlpageHtml) {
        saveLayout();
        window.htmlpageHtml = e
    }
}

function gridSystemGenerator() {
    $(".lyrow .preview input").bind("keyup", function () {
        var e = 0;
        var t = "";
        var n = false;
        var r = $(this).val().split(" ", 12);
        $.each(r, function (r, i) {
            if (!n) {
                if (parseInt(i) <= 0)
                    n = true;
                e = e + parseInt(i);
                t += '<div class="col-md-' + i + ' column"></div>'
            }
        });
        if (e == 12 && !n) {
            $(this).parent().next().children().html(t);
            $(this).parent().find('.drag').show()
        } else {
            $(this).parent().find('.drag').hide()
        }
    })
}
function removeElm() {
    $(".htmlpage").delegate(".remove", "click", function (e) {
        var b = $(this).parent().css('border');
        $(this).parent().css('border', '2px solid red');

        if (confirm("Are you sure you want to delete the selected part?")) {
            e.preventDefault();
            $('.setting-act').slideUp();
            $(this).parent().remove();

            if (!$(".htmlpage .lyrow").length > 0) {
                clearDemo();
            }
        } else {
            e.preventDefault();
            $(this).parent().css('border', b);
        }
    })
}
function clearDemo() {
    $(".htmlpage").empty()
}
function removeMenuClasses() {
    $("#menu-htmleditor li button").removeClass("active")
}
function changeStructure(e, t) {
    $("#download-layout ." + e).removeClass(e).addClass(t)
}
function cleanHtml(e) {
    $(e).parent().append($(e).children().html());
}

function cleanRow(row) {

    row.children('.remove , .drag, .preview').remove();
    row.find('div.ui-sortable').removeClass('ui-sortable');

    // row.children('.view').find('br').remove();

    row.children('.view').children('.row').children('.column').each(function () {
        // se ci dovessero essere righe nella colonna allora :
        var col = $(this);

        col.removeClass('column');
        col.children('.lyrow').each(function () {
            cleanRow($(this));
        });
        col.children('.box-element').each(function () {
            var element = $(this);
            console.log(element.children('.preview').html());
            element.children('.remove , .drag, .configuration, .preview').remove();
            element.parent().append(element.children('.view').html());
            element.remove();
        });
    });
    row.parent().append(row.children('.view').html());
    row.remove();
}

function downloadLayoutSrc(signature_type) {
    //  var e = "";
    $('.loading').show();
    $("#download-layout").children().html($(".htmlpage").html());
    // var t = $("#download-layout").children();
    $("#download-layout").children('.container').each(function (i) {
        var container = $(this);
        container.children('.lyrow').each(function (i) {
            var row = $(this);
            cleanRow(row);
        });
    });
    $("#download-layout .preview").remove();
    $('textarea#model').val($(".htmlpage").html());
    var imagedata = '';
    $('textarea#src').val(style_html($("#download-layout").html()));
    $('.formated_html').html($('textarea#src').val());
    $('.formated_html').find('.remove').remove();
    $('.formated_html').find('.drag').remove();
    $('.formated_html').find('.clone').remove();
    $('.formated_html').find('.configuration').remove();
    $('.formated_html').find('.container').css({'width':'630px'});
    $('.formated_html').find('p').removeAttr('class').removeAttr('contenteditable').removeAttr('tabindex').removeAttr('spellcheck').removeAttr('role').removeAttr('aria-label').removeAttr('title').removeAttr('aria-describedby');
    $('.formated_html .social_image').each(function(){
        if($(this).attr('data-href') != 'javascript:void(0);'){
            var social_link = $('#base_url').val()+'custom_click?signature_id=&clickable=social&ident='+ $(this).attr('data-indent') + '&url='+$(this).attr('data-href');
        }else{
            var social_link = $(this).attr('data-href');
        }
        $(this).attr('href',social_link);
    });
    $('.formated_html .appstore').each(function(){

        if($(this).attr('data-href') != 'javascript:void(0);'){
            var store_link = $('#base_url').val()+'custom_click?signature_id=&clickable=app&ident='+ $(this).attr('data-indent') + '&url='+$(this).attr('data-href');
        }else{
            var store_link = $(this).attr('data-href');
        }
        $(this).attr('href',store_link);
    });
    $('.formated_html .ckContainer p a').each(function(){
        var data_href = $(this).attr('href');
        if(data_href.indexOf("mailto:") != -1){
            email_link = $('#base_url').val()+'custom_click?signature_id=&clickable=personal&ident=email&url='+data_href;    
        }else if(data_href.indexOf("http://") != -1 || data_href.indexOf("https://") != -1){
            email_link = $('#base_url').val()+'custom_click?signature_id=&clickable=personal&ident=website&url='+data_href;    
        }
        $(this).attr('href', email_link);
    })
    $('.formated_html .image_banner').each(function(){
        var data_href = $(this).attr('data-href');
        if(data_href != '' && data_href != 'javascript:void(0);'){  
            href_link = $('#base_url').val()+'custom_click?signature_id=&clickable=banner&url='+data_href;    
            $(this).parent().attr('href',href_link)
        }else{
            $(this).parent().attr('href','javascript:void(0);');
        }          
    })
    $('.htmlpage .social_image').each(function(){
        $(this).attr('data-href',$(this).attr('data-href'));
        $(this).attr('href',$(this).attr('javascript:void(0);'));
    });
    $('.htmlpage .appstore').each(function(){
        $(this).attr('data-href',$(this).attr('data-href'));
        $(this).attr('href',$(this).attr('javascript:void(0);'));
    });
    // $('.formated_html').find('.column').css({'border':'none'});
    html2canvas($('#signature_email_preview'), {
    // html2canvas($('#src'), {
            onrendered: function (canvas) {
                imagedata = canvas.toDataURL('image/png');
                console.log(imagedata);
                $.ajax({
                type: "POST",
                url: "SaveCustomSignature",
                data:{'signature_type':signature_type,'signature_id': $('#signature_id').val(),'html' : $(".htmlpage").html(),'email_html' : $(".formated_html").html(),'image_data':imagedata},
                success: function(result){
                   $('.formated_html').html('');
                   if(signature_type == 'save'){
                        window.location = 'dashboard'; 
                   }else{
                        window.location = 'install_sign/'+result; 
                   }
                   
                }
                });
                 //alert(imagedata);
                // $('#hidden_sign_type').val(type); //-- Store sign type in databasez
                //$('#signature_form').submit();
            }
        });
    


    


   // $('textarea#src').val(style_html($("#download-layout").html()));
    //$('#download').modal('show');

}

$('#srcSave').click(function () {
    ///   $.post(path + '/save.php', {html: style_html($("#download-layout").html())}, function (data) {       }, 'html');
});


function getIndent(level) {
    var result = '',
            i = level * 4;
    if (level < 0) {
        throw "Level is below 0";
    }
    while (i--) {
        result += ' ';
    }
    return result;
}

function style_html(html) {
    html = html.trim();
    var result = '',
            indentLevel = 0,
            tokens = html.split(/</);
    for (var i = 0, l = tokens.length; i < l; i++) {
        var parts = tokens[i].split(/>/);
        if (parts.length === 2) {
            if (tokens[i][0] === '/') {
                indentLevel--;
            }
            result += getIndent(indentLevel);
            if (tokens[i][0] !== '/') {
                indentLevel++;
            }

            if (i > 0) {
                result += '<';
            }

            result += parts[0].trim() + ">\n";
            if (parts[1].trim() !== '') {
                result += getIndent(indentLevel) + parts[1].trim().replace(/\s+/g, ' ') + "\n";
            }

            if (parts[0].match(/^(img|hr|br)/)) {
                indentLevel--;
            }
        } else {
            result += getIndent(indentLevel) + parts[0] + "\n";
        }
    }
    return result;
}

function s4() {
    return Math.floor((1 + Math.random()) * 0x10000)
            .toString(16)
            .substring(1);
}

function gup(name, url) {
    if (!url)
        url = location.href;
    name = name.replace(/[\[]/, "\\\[").replace(/[\]]/, "\\\]");
    var regexS = "[\\?&]" + name + "=([^&#]*)";
    var regex = new RegExp(regexS);
    var results = regex.exec(url);
    return results == null ? null : results[1];
}


(function ($) {

    $.fn.assignId = function () {
        var _self = $(this);
        var id = _self.attr('id');
        if (typeof id === typeof undefined || id === false) {

            id = s4() + '-' + s4() + '-' + s4() + '-' + s4();
            _self.attr('id', id);

        }
        return id;
    };

})(jQuery);