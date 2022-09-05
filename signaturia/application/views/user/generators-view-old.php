<!-- <div class="search-client">
    <input type="text" class="form-control" name="signature_search" id="signature_search" placeholder="Search signature...">
    <button class="search-btn" type="button"><i class="zmdi zmdi-search zmdi-hc-fw"></i></button>
</div> -->
<div class="container-fluid generator">
    <div class="lib-sec">
        <h3 class="lib-title filter">Generators
            <div class="btn-group" role="group" aria-label="...">
                <button type="button" class="btn btn-default toggle-view active" data-id="lib-grid"><i class="fa fa-th-large" aria-hidden="true"></i></button>
                <button type="button" class="btn btn-default toggle-view" data-id="lib-listing"><i class="fa fa-th-list" aria-hidden="true"></i></button>
            </div>
        </h3>
        <div class="lib-row lib-grid">
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
            } else {
                echo validation_errors();
            }
            ?>
            <div class="lib-col">
                <div class="lib-block">
                    <div class="lib-disp">
                        <div class="lib-add">
                            <a href="<?php echo site_url('generators/add') ?>" data-target="#uploadVid"><span class="icn"><i class="fa fa-plus-square" aria-hidden="true"></i><span>Add Generator</span></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="signature_list">
            </div>
        </div>
    </div>
</div>
<div class="modal fade bs-example-modal-sm signature_view_popup" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" data-backdrop="static">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">x</button>
                <h4 class="modal-title" id="myModalLabel">View Signature</h4>
            </div>
            <div class="modal-body text-center" id="signature_view_popup_body">
            </div>
        </div>
    </div>
</div>
<div class="modal fade bs-example-modal-sm generator_link_popup" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" data-backdrop="static">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">x</button>
                <h4 class="modal-title" id="myModalLabel">Generator link</h4>
            </div>
            <div class="modal-body text-center">
                <div id="redirect_generator_link" style="word-wrap: break-word;"></div>
                <button class="com-btn btn" id="copy-button" data-clipboard-target="#redirect_generator_link">Copy</button>
            </div>
        </div>
    </div>
</div>
<script src="assets/js/clipboard.js"></script>
<script type="text/javascript">
    //-- Click event of toggle buttons
    $('.toggle-view').click(function() {
        $('.toggle-view').removeClass('active');
        $(this).addClass('active');
        var add_class = $(this).attr('data-id');
        if (add_class == 'lib-grid') {
            $('.lib-row').removeClass('lib-listing');
            $('.lib-row').addClass(add_class);
        } else {
            $('.lib-row').removeClass('lib-grid');
            $('.lib-row').addClass(add_class);
        }
    });
    (function() {
        new Clipboard('#copy-button');
    })();
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
            url: site_url + "generator/ajax_load_generators",
            dataType: "json",
            type: "POST",
            data: {
                keyword: $('#signature_search').val()
            },
            success: function(data) {
                $('.custom_loader').hide();
                str = '';
                $.each(data, function(i, item) {
                    str += '<div class="lib-col">\n\
                      <div class="lib-block">\n\
                        <div class="lib-disp">\n\
                          <a href="javascript:void(0)" onclick="view_sign(' + item.signature_id + ')">\n\
                          <div class="lib-img"><img class="" src="<?php echo base_url() . SIGNATURE_IMAGES ?>signature-' + item.signature_id + '.png" onerror="this.src=\'assets/images/sign.png\';"  alt="Video img"></div>\n\
                          <div class="lib-overlay"></div>\n\
                                                  <div class="libe-name"><h3>' + item.name + '</h3></div>\n\
                          </a>\n\
                          <div class="dropdown share-drop">\n\
                            <button class="dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">\n\
                              <i class="fa fa-cog" aria-hidden="true"></i>\n\
                            </button>\n\
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">\n\
                              <li><a href="javascript:void(0)" onclick="view_sign(' + item.signature_id + ')"><i class="fa fa-eye" aria-hidden="true"></i> View</a></li>\n\
                              <li><a href="<?php echo site_url() ?>generators/edit/' + item.id + '"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a></li>\n\
                              <li><a href="javascript:void(0)" onclick="copy_link(' + item.id + ')"><i class="fa fa-line-chart" aria-hidden="true"></i> Copylink</a></li>\n\
                              <li><a href="<?php echo site_url('generators/view_signatures') ?>/' + item.id + '"><i class="fa fa-address-card-o" aria-hidden="true"></i> View Signatures</a></li>\n\
                              <li><a href="<?php echo site_url('share-generator') ?>/' + item.id + '"><i class="fa fa-share-alt" aria-hidden="true"></i> Share Generator</a></li>\n\
                              <li><a href="<?php echo site_url() ?>user/generators/download/' + item.id + '"><i class="fa fa-envelope-o" aria-hidden="true"></i> Download</a></li>\n\
                              <li><a href="<?php echo site_url() ?>user/generators/delete/' + item.id + '" onclick="return confirm(\'Are you sure you want to delete this generator?\')"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</a></li>\n\
                            </ul>\n\
                          </div><div class="share-pic">';
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
                $('#signature_view_popup_body').html(data);
                $('.signature_view_popup').modal();
            }
        });
    }

    function copy_link(id) {
        $('.custom_loader').show();
        $.ajax({
            url: site_url + "user/generators/ajax_get_url",
            type: "POST",
            data: {
                id: id
            },
            success: function(data) {
                $('.custom_loader').hide();
                $('#redirect_generator_link').html(data);
                $(".generator_link_popup").modal();
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