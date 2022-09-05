<script type="text/javascript" src="assets/admin/js/plugins/forms/validation/validate.min.js"></script>
<!-- Page header -->
<div class="page-header page-header-default">
    <div class="page-header-content">
        <div class="page-title">
            <h4>
                <i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Users</span> - 
                <?php
                if (isset($userdata))
                    echo "Edit " . $userdata['fullname'] . " Data";
                else
                    echo "Add New";
                ?>
            </h4>
        </div>
    </div>

    <div class="breadcrumb-line">
        <ul class="breadcrumb">
            <li><a href="<?php echo site_url('admin') ?>"><i class="icon-home2 position-left"></i> Home</a></li>
            <li><a href="<?php echo site_url('admin/users') ?>">Users</a></li>
            <li class="active">
                <?php
                if (isset($userdata))
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
    <div class="row">
        <div class="col-md-12">
            <?php
            if ($this->session->flashdata('success')) {
                ?>
                <div class="alert alert-success hide-msg">
                    <button type="button" class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only">Close</span></button>
                    <strong><?php echo $this->session->flashdata('success') ?></strong>
                </div>
            <?php } ?>
            <?php if ($this->session->flashdata('error')) {
                ?>
                <div class="alert alert-danger hide-msg">
                    <button type="button" class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only">Close</span></button>                    
                    <strong><?php echo $this->session->flashdata('error') ?></strong>
                </div>
            <?php } ?>
        </div>
    </div>
    <div class="panel panel-flat">
        <div class="panel-body">
            <form class="form-horizontal" id="add_users_form" action="" enctype="multipart/form-data" method="post">
                <fieldset class="content-group">
                    <legend class="text-bold">Basic Details</legend>

                    <!-- Email field -->
                    <div class="form-group">
                        <label class="control-label col-lg-3">Email <span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <input type="email" name="email" id="email" class="form-control" required="required" placeholder="Please enter email address" value="<?php echo (isset($userdata)) ? $userdata['email'] : set_value('email'); ?>">
                            <?php echo '<label id="email_error" class="validation-error-label" for="email">' . form_error('email') . '</label>'; ?>
                        </div>
                    </div>
                    <!-- /email field -->

                    <?php if (!isset($userdata)) { ?>
                        <div class="form-group has-feedback">
                            <label class="control-label col-lg-3">Password <span class="text-danger">*</span></label>
                            <div class="col-lg-9">
                                <input type="password" name="password" id="password" class="form-control" required="required" placeholder="Please enter password">
                                <div class="form-control-feedback">
                                    <i class="icon-key"></i>
                                </div>
                                <?php echo '<label id="password_error" class="validation-error-label" for="password">' . form_error('password') . '</label>'; ?>
                            </div>
                        </div>
                    <?php } ?>
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
    remoteURL = site_url + "admin/users/checkUniqueEmail";
<?php if (isset($userdata)) { ?>
        var user_id = '<?php echo $userdata['id'] ?>';
        remoteURL += '/' + user_id;
<?php } ?>
    var validator = $("#add_users_form").validate({
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
            email: {
                required: true,
                remote: remoteURL
            },
        },
        messages: {
            email: {
                remote: $.validator.format("Email already exist!")
            }
        }
    });

</script>
