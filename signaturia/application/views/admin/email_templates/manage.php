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
            <h4><i class="icon-package position-left"></i> <span class="text-semibold">Emai Templates</span> - Edit</h4>
        </div>
    </div>
    <div class="breadcrumb-line">
        <ul class="breadcrumb">
            <li><a href="admin"><i class="icon-home2 position-left"></i> Home</a></li>
            <li class="active">Edit Email Template</li>
        </ul>
    </div>
</div>
<div class="content">
    <?php
    if ($this->session->flashdata('success')) {
        ?>
        <div class="alert bg-success alert-styled-left bootstrap_alert">
            <a class="close" data-dismiss="alert">×</a>
            <strong><?= $this->session->flashdata('success') ?></strong>
        </div>
        <?php
        $this->session->set_flashdata('success', false);
    } else if ($this->session->flashdata('error')) {
        ?>
        <div class="alert bg-danger alert-styled-left bootstrap_alert">
            <a class="close" data-dismiss="alert">×</a>
            <strong><?= $this->session->flashdata('error') ?></strong>
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
                <h5 class="panel-title">Edit <?php  

                if($type == 'share-generator') {
                    echo 'share generator';
                } elseif ($type == 'without-share-generator') {
                    echo 'share generator without passcode';
                } else {
                    echo $type;
                }

                ?> Template</h5>
                <?php
                    if($type == 'coupn') {
                ?>
                <code>Note: Please use {discount}, {coupon_code}, {from_datetime} and {to_datetime} if you needed. If you will remove anything ({discount}, {coupon_code}, {from_datetime} and {to_datetime}) from email template then users will not receive that in email.</code>
                <?php } elseif ($type == 'welcome') { ?> 
                <code>Note: Please use {button_link} if you needed. If you will remove anything {button_link} from email template then users will not receive that in email.</code>
                <?php } elseif ($type == 're-verification') { ?> 
                <code>Note: Please use {button_link} if you needed. If you will remove anything {button_link} from email template then users will not receive that in email.</code>
                <?php } elseif ($type == 'share-generator') { ?> 
                <code>Note: Please use {button_link}, {generator_name} and {passcode} if you needed. If you will remove anything ({button_link}, {generator_name} and {passcode}) from email template then users will not receive that in email.</code>
                <?php } elseif ($type == 'without-share-generator') { ?> 
                <code>Note: Please use {generator_name} if you needed. If you will remove anything {generator_name} from email template then users will not receive that in email.</code>
                <?php } ?>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <div class="col-lg-12">
                        <textarea name="description" id="description" rows="4" cols="4"><?php echo (isset($template['email_template'])) ? $template['email_template'] : set_value('description'); ?></textarea>
                    </div>
                </div>
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