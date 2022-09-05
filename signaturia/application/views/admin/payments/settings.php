<script type="text/javascript" src="assets/admin/js/plugins/forms/validation/validate.min.js"></script>
<!-- Page header -->
<div class="page-header page-header-default">
    <div class="page-header-content">
        <div class="page-title">
            <h4>
                <i class="icon-gear position-left"></i> <span class="text-semibold">Payment</span> - settings
            </h4>
        </div>
    </div>

    <div class="breadcrumb-line">
        <ul class="breadcrumb">
            <li><a href="<?php echo site_url('admin') ?>"><i class="icon-home2 position-left"></i> Home</a></li>
            <li class="active">
                settings
            </li>
        </ul>
    </div>
</div>
<!-- /page header -->

<!-- Content area -->
<div class="content">
    <?php if ($this->session->flashdata('success') != '') { ?>
        <div class="alert bg-success alert-styled-left bootstrap_alert">
            <button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>
            <span class="text-semibold">Success!</span> <?php echo $this->session->flashdata('success'); ?>
        </div>
    <?php } else if ($this->session->flashdata('error') != '') { ?>
        <div class="alert bg-danger alert-styled-left bootstrap_alert">
            <button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>
            <span class="text-semibold">Error!</span> <?php echo $this->session->flashdata('error'); ?>
        </div>
    <?php } ?>
    <!-- Form validation -->
    <div class="panel panel-flat">
        <div class="panel-body">
            <form class="form-horizontal" id="payment_setting_info" action="" enctype="multipart/form-data" method="post">
                <fieldset class="content-group">
                    <legend class="text-bold">Stripe Settings</legend>
                    <div class="form-group">
                        <label class="control-label col-lg-2">Secret key<span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <input type="text" name="secret_key" id="secret_key" class="form-control" required="required" placeholder="Please enter secret key" value="<?php echo ($payment_settings['secret_key']) ? $payment_settings['secret_key'] : set_value('secret_key'); ?>">
                            <?php echo '<label id="txt_firstname_error" class="validation-error-label" for="firstname">' . form_error('firstname') . '</label>'; ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-2">Publishable key <span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <input type="text" name="publishable_key" id="publishable_key" class="form-control" required="required" placeholder="Please enter publishable key" value="<?php echo ($payment_settings['publishable_key']) ? $payment_settings['publishable_key'] : set_value('publishable_key'); ?>">
                            <?php echo '<label id="txt_lastname_error" class="validation-error-label" for="lastname">' . form_error('lastname') . '</label>'; ?>
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
    $('document').ready(function () {
        $("#payment_setting_info").validate({
            rules: {
                'secret_key': {
                    required: true,
                },
                'publishable_key': {
                    required: true
                }
            },
            errorPlacement: function (error, element) {
                if (element.attr("name") == "tabs") {
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