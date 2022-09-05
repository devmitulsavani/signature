<script type="text/javascript" src="assets/admin/js/plugins/forms/validation/validate.min.js"></script>
<!-- Page header -->
<div class="page-header page-header-default">
    <div class="page-header-content">
        <div class="page-title">
            <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Social Icon</span> - 
                <?php
                if (isset($social_icon))
                    echo "Edit " . $social_icon['name'] . " Data";
                else
                    echo "Add New";
                ?>
            </h4>
        </div>
    </div>

    <div class="breadcrumb-line">
        <ul class="breadcrumb">
            <li><a href="<?php echo site_url('admin') ?>"><i class="icon-home2 position-left"></i> Home</a></li>
            <li><a href="<?php echo site_url('admin/social_icons') ?>">Social Icons</a></li>
            <li class="active">
                <?php
                if (isset($social_icon))
                    echo "Edit " . $social_icon['name'] . " Data";
                else
                    echo "Add";
                ?>
            </li>
        </ul>
    </div>
</div>
<!-- /page header -->

<!-- Content area -->
<div class="content">
    <!-- Form validation -->
    <div class="panel panel-flat">
        <div class="panel-body">
            <form class="form-horizontal" id="social_icon_form" action="" enctype="multipart/form-data" method="post">
                <fieldset class="content-group">
                    <legend class="text-bold">Basic Details</legend>
                    <div class="form-group">
                        <label class="control-label col-lg-1">Icon Set 1<span class="text-danger">*</span></label>
                        <div class="col-lg-6">
                            <div class="media no-margin-top">
                                <div class="media-left image_preview_div" class="">
                                    <?php if (isset($social_icon) && $social_icon['icon1'] != '') { ?>
                                        <img src="<?php echo SOCIAL_ICONS_SET_1 . $social_icon['icon1'] ?>" style="width: 58px; height: 58px; border-radius: 2px;" alt="">
                                    <?php } else { ?>
                                        <img src="assets/admin/images/placeholder.jpg" style="width: 58px; height: 58px; border-radius: 2px;" alt="">
                                    <?php } ?>
                                </div>
                                <div class="media-body">
                                    <input type="file" name="icon1" id="icon1" class="file-styled" onchange="readURL(this);" <?php if (!isset($social_icon)) echo 'required="required"'; ?>>
                                    <span class="help-block">Accepted formats: png, jpg. Max file size 2Mb</span>
                                </div>
                            </div>
                            <?php
                            if (isset($social_icon_validation1))
                                echo '<label id="icon-error" class="validation-error-label" for="icon">' . $social_icon_validation1 . '</label>';
                            ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-1">Icon Set 2<span class="text-danger">*</span></label>
                        <div class="col-lg-6">
                            <div class="media no-margin-top">
                                <div class="media-left image_preview_div" class="">
                                    <?php if (isset($social_icon) && $social_icon['icon2'] != '') { ?>
                                        <img src="<?php echo SOCIAL_ICONS_SET_2 . $social_icon['icon2'] ?>" style="width: 58px; height: 58px; border-radius: 2px;" alt="">
                                    <?php } else { ?>
                                        <img src="assets/admin/images/placeholder.jpg" style="width: 58px; height: 58px; border-radius: 2px;" alt="">
                                    <?php } ?>
                                </div>
                                <div class="media-body">
                                    <input type="file" name="icon2" id="icon2" class="file-styled" onchange="readURL(this);" <?php if (!isset($social_icon)) echo 'required="required"'; ?>>
                                    <span class="help-block">Accepted formats: png, jpg. Max file size 2Mb</span>
                                </div>
                            </div>
                            <?php
                            if (isset($social_icon_validation2))
                                echo '<label id="icon-error" class="validation-error-label" for="icon">' . $social_icon_validation2 . '</label>';
                            ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-1">Icon Set 3<span class="text-danger">*</span></label>
                        <div class="col-lg-6">
                            <div class="media no-margin-top">
                                <div class="media-left image_preview_div" class="">
                                    <?php if (isset($social_icon) && $social_icon['icon3'] != '') { ?>
                                        <img src="<?php echo SOCIAL_ICONS_SET_3 . $social_icon['icon3'] ?>" style="width: 58px; height: 58px; border-radius: 2px;" alt="">
                                    <?php } else { ?>
                                        <img src="assets/admin/images/placeholder.jpg" style="width: 58px; height: 58px; border-radius: 2px;" alt="">
                                    <?php } ?>
                                </div>
                                <div class="media-body">
                                    <input type="file" name="icon3" id="icon3" class="file-styled" onchange="readURL(this);" <?php if (!isset($social_icon)) echo 'required="required"'; ?>>
                                    <span class="help-block">Accepted formats: png, jpg. Max file size 2Mb</span>
                                </div>
                            </div>
                            <?php
                            if (isset($social_icon_validation3))
                                echo '<label id="icon-error" class="validation-error-label" for="icon">' . $social_icon_validation3 . '</label>';
                            ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-1">Icon Set 4<span class="text-danger">*</span></label>
                        <div class="col-lg-6">
                            <div class="media no-margin-top">
                                <div class="media-left image_preview_div" class="">
                                    <?php if (isset($social_icon) && $social_icon['icon4'] != '') { ?>
                                        <img src="<?php echo SOCIAL_ICONS_SET_4 . $social_icon['icon4'] ?>" style="width: 58px; height: 58px; border-radius: 2px;" alt="">
                                    <?php } else { ?>
                                        <img src="assets/admin/images/placeholder.jpg" style="width: 58px; height: 58px; border-radius: 2px;" alt="">
                                    <?php } ?>
                                </div>
                                <div class="media-body">
                                    <input type="file" name="icon4" id="icon4" class="file-styled" onchange="readURL(this);" <?php if (!isset($social_icon)) echo 'required="required"'; ?>>
                                    <span class="help-block">Accepted formats: png, jpg. Max file size 2Mb</span>
                                </div>
                            </div>
                            <?php
                            if (isset($social_icon_validation4))
                                echo '<label id="icon-error" class="validation-error-label" for="icon">' . $social_icon_validation4 . '</label>';
                            ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-1">Name <span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <input type="text" name="name" id="name" class="form-control" required="required" placeholder="Please Enter Social Icon name" value="<?php echo (isset($social_icon)) ? $social_icon['name'] : set_value('name'); ?>">
                            <?php echo '<label id="txt_name_error" class="validation-error-label" for="name">' . form_error('name') . '</label>'; ?>
                        </div>
                    </div>
                </fieldset>
                <div class="text-left">
                    <button type="submit" class="btn btn-success">Submit <i class="icon-arrow-right14 position-right"></i></button>
                </div>
            </form>
        </div>
    </div>
    <!-- /form validation -->
    <?php $this->load->view('Templates/footer'); ?>
</div>
<!-- /content area -->
<script type="text/javascript">
    // Primary file input
    $(".file-styled").uniform({
        fileButtonClass: 'action btn bg-pink'
    });
    // Display the preview of image on image upload
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                var html = '<img src="' + e.target.result + '" style="width: 58px; height: 58px; border-radius: 2px;" alt="">';
                $(input).closest('.form-group').find('.image_preview_div').html(html);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    remoteURL = site_url + "admin/social_icons/is_unique_socialicon";
<?php if (isset($social_icon)) { ?>
        var social_icon_id = '/<?php echo $social_icon['id'] ?>';
        remoteURL += social_icon_id;
        var validator = $("#social_icon_form").validate({
            ignore: 'input[type=hidden], .select2-search__field, #txt_status', // ignore hidden fields
            errorClass: 'validation-error-label',
            successClass: 'validation-valid-label',
            highlight: function (element, errorClass) {
                $(element).removeClass(errorClass);
            },
            unhighlight: function (element, errorClass) {
                $(element).removeClass(errorClass);
            },
            errorPlacement: function (error, element) {
                if (element.parents('div').hasClass("checker") || element.parents('div').hasClass("choice") || element.parent().hasClass('bootstrap-switch-container')) {
                    if (element.parents('label').hasClass('checkbox-inline') || element.parents('label').hasClass('radio-inline')) {
                        error.appendTo(element.parent().parent().parent().parent());
                    } else {
                        error.appendTo(element.parent().parent().parent().parent().parent());
                    }
                }
                // Unstyled checkboxes, radios
                else if (element.parents('div').hasClass('checkbox') || element.parents('div').hasClass('radio')) {
                    error.appendTo(element.parent().parent().parent());
                }
                // Input with icons and Select2
                else if (element.parents('div').hasClass('has-feedback') || element.hasClass('select2-hidden-accessible')) {
                    error.appendTo(element.parent());
                }
                // Inline checkboxes, radios
                else if (element.parents('label').hasClass('checkbox-inline') || element.parents('label').hasClass('radio-inline')) {
                    error.appendTo(element.parent().parent());
                }
                // Input group, styled file input
                else if (element.parent().hasClass('uploader') || element.parents().hasClass('input-group')) {
                    error.appendTo(element.parent().parent());
                } else {
                    error.insertAfter(element);
                }
            },
            validClass: "validation-valid-label",
            success: function (label) {
                label.addClass("validation-valid-label")
            },
            rules: {
                name: {
                    required: true,
                    remote: remoteURL
                },
            },
            messages: {
                name: {
                    remote: $.validator.format("Social Icon already exist!")
                }
            }
        });
<?php } else { ?>
        var validator = $("#social_icon_form").validate({
            ignore: 'input[type=hidden], .select2-search__field, #txt_status', // ignore hidden fields
            errorClass: 'validation-error-label',
            successClass: 'validation-valid-label',
            highlight: function (element, errorClass) {
                $(element).removeClass(errorClass);
            },
            unhighlight: function (element, errorClass) {
                $(element).removeClass(errorClass);
            },
            errorPlacement: function (error, element) {
                if (element.parents('div').hasClass("checker") || element.parents('div').hasClass("choice") || element.parent().hasClass('bootstrap-switch-container')) {
                    if (element.parents('label').hasClass('checkbox-inline') || element.parents('label').hasClass('radio-inline')) {
                        error.appendTo(element.parent().parent().parent().parent());
                    } else {
                        error.appendTo(element.parent().parent().parent().parent().parent());
                    }
                }
                // Unstyled checkboxes, radios
                else if (element.parents('div').hasClass('checkbox') || element.parents('div').hasClass('radio')) {
                    error.appendTo(element.parent().parent().parent());
                }
                // Input with icons and Select2
                else if (element.parents('div').hasClass('has-feedback') || element.hasClass('select2-hidden-accessible')) {
                    error.appendTo(element.parent());
                }
                // Inline checkboxes, radios
                else if (element.parents('label').hasClass('checkbox-inline') || element.parents('label').hasClass('radio-inline')) {
                    error.appendTo(element.parent().parent());
                }
                // Input group, styled file input
                else if (element.parent().hasClass('uploader') || element.parents().hasClass('input-group')) {
                    error.appendTo(element.parent().parent());
                } else {
                    error.insertAfter(element);
                }
            },
            validClass: "validation-valid-label",
            success: function (label) {
                label.addClass("validation-valid-label")
            },
            rules: {
                name: {
                    required: true,
                    remote: remoteURL
                },
                icon1: {
                    required: true,
                },
                icon2: {
                    required: true,
                },
                icon3: {
                    required: true,
                },
                icon4: {
                    required: true,
                }
            },
            messages: {
                name: {
                    remote: $.validator.format("Social Icon already exist!")
                }
            }
        });
<?php } ?>
</script>

