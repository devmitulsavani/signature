<script type="text/javascript" src="assets/js/jquery.validate.js"></script>
<script type="text/javascript" src="assets/admin/js/plugins/pickers/daterangepicker.js"></script>
<script type="text/javascript" src="assets/admin/ckeditor/ckeditor.js"></script>
<!-- Page header -->
<div class="page-header page-header-default">
    <div class="page-header-content">
        <div class="page-title">
            <h4>
                <i class="icon-star-full2 position-left"></i> <span class="text-semibold">Offers</span> - 
                <?php
                if (isset($offer_data))
                    echo "Edit Offer";
                else
                    echo "Add New Offer";
                ?>
            </h4>
        </div>
    </div>

    <div class="breadcrumb-line">
        <ul class="breadcrumb">
            <li><a href="<?php echo site_url('admin') ?>"><i class="icon-home2 position-left"></i> Home</a></li>
            <li><a href="<?php echo site_url('admin/offers') ?>"><i class="icon-stars position-left"></i> Offers</a></li>
            <li class="active">
                <?php
                if (isset($offer_data))
                    echo "Edit";
                else
                    echo "Add"
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
            <form class="form-horizontal" id="add_offer_form" action="" enctype="multipart/form-data" method="post">
                <fieldset class="content-group">
                    <legend class="text-bold">Basic Details</legend>
                    <div class="form-group">
                        <label class="control-label col-lg-3">Package <span class="text-danger">*</span></label>
                        <div class="col-lg-4">
                            <select name="package" required="required" class="form-control"  <?php if (isset($userdata)) echo "disabled" ?>>
                                <option value="">Select Package</option>
                                <?php
                                foreach ($packages as $package) {
                                    $selected = '';
                                    if (isset($offer_data) && $offer_data['package_id'] = $package['id']) {
                                        $selected = 'selected';
                                    }
                                    echo "<option value='" . $package['id'] . "' " . $selected . ">" . $package['title'] . "</option>";
                                }
                                ?>
                            </select>
                            <?php echo '<label id="package_error" class="validation-error-label" for="package">' . form_error('package') . '</label>'; ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-3">Discount <span class="text-danger">*</span></label>
                        <div class="col-lg-4">
                            <input type="text" name="coupon_price" id="coupon_price" class="form-control" value="<?php echo (isset($offer_data['coupon_price'])) ? $offer_data['coupon_price'] : '' ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-3">
                            Coupon Schedule <span class="text-danger">*</span></label>
                        <div class="col-lg-4">
                            <div class="input-group">
                                <?php
                                    if(isset($offer_data)) {
                                        $start_date = $offer_data['start_datetime'];
                                        $end_date = $offer_data['end_datetime'];
                                    } else {
                                        $start_date = date('Y-m-d H:i:s');  
                                        $date = strtotime($start_date);
                                        $date = strtotime("+7 day", $date);
                                        $end_date = date('Y/m/d', $date);
                                    }
                                ?>
                                <span class="input-group-addon"><i class="icon-calendar22"></i></span>
                                <input type="text" class="form-control daterange-time" value="<?php echo $start_date; ?> - <?php echo $end_date; ?>" name="coupon_schedule"> 
                            </div>
                        </div>
                    </div>
                </fieldset>
                <fieldset>
                    <legend class="text-bold">Offer Description</legend>
                    <div class="form-group">
                        <label class="control-label col-lg-3">Image <span class="text-danger">*</span></label>
                        <div class="col-lg-4">
                            <div class="media no-margin-top">
                                <div class="media-left" id="image_preview_div">
                                    <?php if (isset($offer_data) && $offer_data['image'] != '') { ?>
                                        <img src="<?php echo OFFERS_IMAGES . $offer_data['image'] ?>" style="width: 58px; height: 58px; border-radius: 2px;" alt="">
                                    <?php } else { ?>
                                        <img src="assets/admin/images/placeholder.jpg" style="width: 58px; height: 58px; border-radius: 2px;" alt="">
                                    <?php } ?>
                                </div>
                                <div class="media-body">
                                    <input type="file" name="image" id="image" class="file-styled" onchange="readURL(this);" <?php if (!isset($offer_data)) echo 'required="required"'; ?>>
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
                        <label class="col-lg-3 control-label">Description:</label>
                        <div class="col-lg-9">
                            <textarea name="description" id="description" rows="4" cols="4"><?php echo (isset($offer_data['description'])) ? $offer_data['description'] : set_value('description'); ?></textarea>
                        </div>
                    </div>
                </fieldset>
                <fieldset>
                    <legend class="text-bold">Others</legend>
                    <div class="form-group">
                        <label class="control-label col-lg-3">Show on Offers page?</label>
                        <div class="col-lg-9">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="show_on_offer_page" id="show_on_offer_page" value="1" <?php echo (isset($offer_data['show_on_offer_page']) && $offer_data['show_on_offer_page'] == 1) ? 'checked' : '' ?> class="styled">
                                    <code><i class="icon-info22"></i> Please check for display this offer on offers page.</code>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-3">Is Active</label>
                        <div class="col-lg-9">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="is_active" id="is_active" value="1" <?php echo (isset($offer_data['is_active']) && $offer_data['is_active'] == 1) ? 'checked' : '' ?> class="styled">
                                    <code><i class="icon-info22"></i> Please check for activate coupon.</code>
                                </label>
                            </div>
                        </div>
                    </div>
                </fieldset>
                <div class="text-left">
                    <button type="submit" class="btn btn-success">Submit <i class="icon-arrow-right14 position-right"></i></button>
                </div>
            </form>
        </div>
    </div>
    <?php $this->load->view('Templates/footer'); ?>
</div>

<script type="text/javascript">
    $("#add_offer_form").validate({
        rules: {
            coupon_price: {
                required: true,
                userval: /^(0?[0-9]|[1-9][0-9])$/,
                max: 100
            },
            description: {
                required: true,
            },
            package: {
                required: true,
            }
        },
        messages: {
            coupon_price: {
                userval: "Invalid coupon discount percentage",
                max: "Invalid coupon discount percentage"
            }
        },
        errorPlacement: function (error, element) {
            if (element.attr("name") == "image") {
                error.insertAfter($(".uploader"));
            } else {
                error.insertAfter(element);
            }
        },
        submitHandler: function (form) {
            form.submit();
        }
    });

    $(function () {
        CKEDITOR.replace('description', {
            height: '400px'
        });

        $('.daterange-time').daterangepicker({
            timePicker: true,
            applyClass: 'bg-slate-600',
            cancelClass: 'btn-default',
            timePicker24Hour: true,
            locale: {
                format: 'YYYY-MM-DD hh:mm'
            }
        });
    });

    $(".file-styled").uniform({
        fileButtonClass: 'action btn bg-pink'
    });

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
</script>
