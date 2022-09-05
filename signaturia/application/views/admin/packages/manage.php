<script type="text/javascript" src="assets/js/jquery.validate.js"></script>
<script type="text/javascript" src="assets/admin/ckeditor/ckeditor.js"></script>
<?php
if (isset($userdata)) {
    $form_action = 'admin/edit_users/' . $userdata[0]['id'];
} else {
    $form_action = 'admin/add_users';
}
?>
<div class="page-header page-header-default">
    <div class="page-header-content">
        <div class="page-title">
            <h4><i class="icon-package position-left"></i> <span class="text-semibold">Packages</span> - <?php echo $heading; ?></h4>
        </div>
    </div>
    <div class="breadcrumb-line">
        <ul class="breadcrumb">
            <li><a href="admin"><i class="icon-home2 position-left"></i> Home</a></li>
            <li><a href="admin/packages"><i class="icon-package position-left"></i> Packages</a></li>
            <li class="active"><?php echo $heading; ?></li>
        </ul>
    </div>
</div>
<div class="content">
    <?php
    if ($this->session->flashdata('success')) {
        ?>
        <div class="content pt0">
            <div class="alert bg-success alert-styled-left bootstrap_alert">
                <a class="close" data-dismiss="alert">×</a>
                <strong><?= $this->session->flashdata('success') ?></strong>
            </div>
        </div>
        <?php
        $this->session->set_flashdata('success', false);
    } else if ($this->session->flashdata('error')) {
        ?>
        <div class="content pt0">
            <div class="alert bg-danger alert-styled-left bootstrap_alert">
                <a class="close" data-dismiss="alert">×</a>
                <strong><?= $this->session->flashdata('error') ?></strong>
            </div>
        </div>
        <?php
        $this->session->set_flashdata('error', false);
    } else {
        echo validation_errors();
    }
    ?>
    <form class="form-horizontal" action="" id="package_info" method="POST" enctype="multipart/form-data">
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title">Add package</h5>
            </div>
            <div class="panel-body">
                <fieldset>
                    <legend class="text-semibold">Basic information</legend>
                    <div class="form-group">
                        <label class="control-label col-lg-3">Image <span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <div class="media no-margin-top">
                                <div class="media-left" id="image_preview_div">
                                    <?php if (isset($package_data) && $package_data['image'] != '') { ?>
                                        <img src="<?php echo PACKAGE_IMAGES . $package_data['image'] ?>" style="width: 58px; height: 58px; border-radius: 2px;" alt="">
                                    <?php } else { ?>
                                        <img src="assets/admin/images/placeholder.jpg" style="width: 58px; height: 58px; border-radius: 2px;" alt="">
                                    <?php } ?>
                                </div>
                                <div class="media-body">
                                    <input type="file" name="image" id="image" class="file-styled" onchange="readURL(this);" <?php if (!isset($package_data)) echo 'required="required"'; ?>>
                                    <span class="help-block">Accepted formats: png, jpg. Max file size 2Mb</span>
                                </div>
                            </div>
                            <?php
                            if (isset($package_img_validation))
                                echo '<label id="image-error" class="validation-error-label" for="image">' . $package_img_validation . '</label>';
                            ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Title:</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" name="title" id="title" placeholder="Package title" value="<?php echo (isset($package_data['title'])) ? $package_data['title'] : set_value('title'); ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Description:</label>
                        <div class="col-lg-9">
                            <textarea name="description" id="description" rows="4" cols="4"><?php echo (isset($package_data['description'])) ? $package_data['description'] : set_value('description'); ?></textarea>
                        </div>
                    </div>
                </fieldset>
                <fieldset>
                    <legend class="text-semibold">Price details</legend>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Is Free:</label>
                        <div class="col-lg-9">
                            <div class="checkbox">
                                <label>
                                    <div class="checker border-primary-600 text-primary-800">
                                        <?php
                                        $class = $display = $hidden = '';
                                        if (isset($package_data['type'])) {
                                            if ($package_data['type'] == 1) {
                                                $class = 'checked';
                                                $display = 'none';
                                                $hidden = '1';
                                            }
                                        }
                                        ?>
                                        <input type="hidden" id="hidden" name="hidden" value="<?php echo $hidden; ?>">
                                        <span class="<?php echo $class ?>">
                                            <input type="checkbox" name="is_free" id="is_free" value="1" class="styled">
                                        </span>
                                    </div>
                                    <code><i class="icon-info22"></i> Please check! if you like allowed  as a free package.</code>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group" id="monthly_price_box" style="display: <?php echo $display; ?>">
                        <label class="col-lg-3 control-label">Monthly Price:</label>
                        <div class="col-lg-2">
                            <input type="text" class="form-control" name="monthly_price" id="monthly_price" placeholder="Monthly Price" value="<?php echo (isset($package_data['monthly_price'])) ? $package_data['monthly_price'] : set_value('monthly_price'); ?>">
                        </div>
                    </div>
                    <div class="form-group" id="yearly_price_box" style="display: <?php echo $display; ?>">
                        <label class="col-lg-3 control-label">Yearly Price:</label>
                        <div class="col-lg-2">
                            <input type="text" class="form-control" placeholder="Yearly Price" name="yearly_price" id="yearly_price" value="<?php echo (isset($package_data['yearly_price'])) ? $package_data['yearly_price'] : set_value('yearly_price'); ?>">
                        </div>
                    </div>
                </fieldset>
                <fieldset>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Discount?</label>
                        <div class="col-lg-9">
                            <div class="checkbox">
                                <label>
                                    <div class="checker border-primary-600 text-primary-800">
                                        <?php
                                        $class = $display = $hidden = '';
                                        if (isset($package_data['discount'])) {
                                            if ($package_data['discount'] == 0) {
                                                $display = 'none';
                                            } else {
                                                $class = 'checked';
                                                $hidden = '1';
                                            }
                                        }
                                        ?>
                                        <span class="<?php echo $class ?>">
                                            <input type="checkbox" name="have_discount" id="have_discount" value="1" class="styled_offer">
                                        </span>
                                    </div>
                                    <code><i class="icon-info22"></i> Please check! if you like give discount to users.</code>
                                </label>
                            </div>
                            <input type="hidden" id="hidden_discount" name="hidden_discount" value="<?php echo $hidden; ?>">
                        </div>
                    </div>
                    <div id="discount-div" style="display: <?php echo $display; ?>">
                    <legend class="text-semibold">Package offers</legend>
                        <div class="form-group" id="monthly_discount_price_box">
                            <label class="col-lg-3 control-label">Discount for monthly package:</label>
                            <div class="col-lg-2">
                                <input type="text" class="form-control" name="monthly_discount_price" id="monthly_discount_percent" placeholder="Monthly Discount %" value="<?php echo (isset($package_data['monthly_discount_price'])) ? $package_data['monthly_discount_price'] : set_value('monthly_discount_price'); ?>">
                            </div>
                        </div>
                        <div class="form-group" id="yearly_discount_price_box">
                            <label class="col-lg-3 control-label">Discount for yearly package:</label>
                            <div class="col-lg-2">
                                <input type="text" class="form-control" name="yearly_discount_price" id="yearly_discount_price" placeholder="Yearly Discount %" value="<?php echo (isset($package_data['yearly_discount_price'])) ? $package_data['yearly_discount_price'] : set_value('yearly_discount_price'); ?>">
                            </div>
                        </div>
                    </div>
                </fieldset>
                <div class="text-right">
                    <button type="submit" class="btn btn-primary">Submit form <i class="icon-arrow-right14 position-right"></i></button>
                </div>
            </div>
        </div>
    </form>
    <?php $this->load->view('Templates/footer'); ?>
</div>
<script>
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
                $('#image_preview_div').html(html);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    $(document).on('click', '.styled', function () {
        if ($(this).parent().attr('class') == 'checked') {
            $(this).parent().removeClass('checked');
            $(this).prop('checked', false);
            $('#monthly_price_box').show();
            $('#yearly_price_box').show();
            $('#hidden').val('');
        } else {
            $(this).parent().addClass('checked');
            $(this).prop('checked', true);
            $('#monthly_price_box').hide();
            $('#yearly_price_box').hide();
            $('#hidden').val(1);
            $("#package_info").validate({
                rules: {
                    title: {
                        required: true,
                    },
                    description: {
                        required: true,
                    }
                },
                submitHandler: function (form) {
                    form.submit();
                }
            });
        }
    });

    $(document).on('click', '.styled_offer', function () {
        if ($(this).parent().attr('class') == 'checked') {
            $(this).parent().removeClass('checked');
            $(this).prop('checked', false);
            $('#hidden_discount').val('');
            $('#discount-div').hide();
            $("#package_info").validate({
                rules: {
                    title: {
                        required: true,
                    },
                    description: {
                        required: true,
                    },
                    monthly_price: {
                        required: true,
                        userval: /^\d{0,4}(\.\d{0,2})?$/
                    },
                    yearly_price: {
                        required: true,
                        userval: /^\d{0,4}(\.\d{0,2})?$/
                    }
                },
                messages: {
                    monthly_price: {
                        userval: "Invalid monthly price",
                    },
                    yearly_price: {
                        userval: "Invalid yearly price",
                    }
                },
                errorPlacement: function (error, element) {
                    if (element.attr("name") == "banner_image") {
                        error.insertAfter($(".uploader"));
                    } else {
                        error.insertAfter(element);
                    }
                },
                submitHandler: function (form) {
                    form.submit();
                }
            });
        } else {
            $(this).parent().addClass('checked');
            $(this).prop('checked', true);
            $('#discount-div').show();
            $('#hidden_discount').val(1);
        }
    });

    $('document').ready(function () {
        CKEDITOR.replace('description', {
            height: '400px'
        });
        $("#package_info").validate({
            rules: {
                title: {
                    required: true,
                },
                description: {
                    required: true,
                },
                monthly_price: {
                    required: true,
                    userval: /^\d{0,4}(\.\d{0,2})?$/
                },
                yearly_price: {
                    required: true,
                    userval: /^\d{0,4}(\.\d{0,2})?$/
                },
                yearly_discount_price: {
                    userval: /^(0?[0-9]|[1-9][0-9])$/,
                    max: 99
                },
                monthly_discount_price: {
                    userval: /^(0?[0-9]|[1-9][0-9])$/,
                    max: 99
                }
            },
            messages: {
                monthly_price: {
                    userval: "Invalid monthly price",
                },
                yearly_price: {
                    userval: "Invalid yearly price",
                },
                monthly_discount_price: {
                    userval: "Invalid monthly discount price",
                },
                yearly_discount_price: {
                    userval: "Invalid yearly discount price",
                }
            },
            errorPlacement: function (error, element) {
                if (element.attr("name") == "banner_image") {
                    error.insertAfter($(".uploader"));
                } else {
                    error.insertAfter(element);
                }
            },
            submitHandler: function (form) {
                form.submit();
            }
        });
    });
</script>