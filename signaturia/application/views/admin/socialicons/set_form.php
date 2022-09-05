<script type="text/javascript" src="assets/admin/js/plugins/forms/validation/validate.min.js"></script>
<!-- Page header -->
<div class="page-header page-header-default">
    <div class="page-header-content">
        <div class="page-title">
            <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Social Icon</span> - 
                <?php
                if (isset($social_icon))
                    echo "Edit " . $social_icon['set_name'] . " Data";
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
                    echo "Edit " . $social_icon['set_name'] . " Data";
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
    <!-- Form validation -->
    <div class="panel panel-flat">
        <div class="panel-body">
            <form class="form-horizontal" id="social_icon_form" action="" enctype="multipart/form-data" method="post">
                <fieldset class="content-group">
                    <legend class="text-bold">Basic Details</legend>
                    <div class="form-group">
                        <label class="control-label col-lg-3">Name <span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <input type="text" name="name" id="name" class="form-control" required="required" placeholder="Please Enter Social Icon Set name" value="<?php echo (isset($social_icon)) ? $social_icon['set_name'] : set_value('name'); ?>">
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
                $('#image_preview_div').html(html);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    remoteURL = site_url + "admin/social_icons/is_unique_socialicon";
<?php if (isset($social_icon)) { ?>
        var social_icon_id = '<?php echo $social_icon['id'] ?>';
        remoteURL += '/' + social_icon_id;
<?php } ?>
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
                // remote: remoteURL
            },
        },
        messages: {
            name: {
                remote: $.validator.format("Social Icon already exist!")
            }
        }
    });
</script>

