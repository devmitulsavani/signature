<script type="text/javascript" src="assets/js/jquery.validate.js"></script>
<script type="text/javascript" src="assets/admin/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="assets/admin/js/plugins/forms/selects/select2.min.js"></script>
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
    <form class="form-horizontal" action="" id="package_setting_info" method="POST" enctype="multipart/form-data">
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title">Add Settings</h5>
            </div>
            <div class="panel-body">
                <fieldset>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Allow tabs:</label>
                        <div class="col-lg-10">
                            <select multiple="multiple" class="select" name="tabs[]" id="tabs">
                                <option value="main" <?php echo (isset($settings)) ? (in_array('main', explode(',', $settings))) ? 'selected' : '' : '' ?>>Main</option>
                                <option value="social" <?php echo (isset($settings)) ? (in_array('social', explode(',', $settings))) ? 'selected' : '' : '' ?>>Social</option>
                                <option value="disclaimer"<?php echo (isset($settings)) ? (in_array('disclaimer', explode(',', $settings))) ? 'selected' : '' : '' ?>>Disclaimer</option>
                                <option value="banner" <?php echo (isset($settings)) ? (in_array('banner', explode(',', $settings))) ? 'selected' : '' : '' ?>>Banner</option>
                                <option value="style" <?php echo (isset($settings)) ? (in_array('style', explode(',', $settings))) ? 'selected' : '' : '' ?>>Style</option>
                                <option value="apps" <?php echo (isset($settings)) ? (in_array('apps', explode(',', $settings))) ? 'selected' : '' : '' ?>>Apps</option>
                            </select>
                            <div class="uploader"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Allow Stat:</label>
                        <div class="col-lg-10">
                            <input type="checkbox" name="allow_stat" value="1" <?php echo ($package_data['stat'] == 1) ? 'checked' : '' ?>>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Allow Generator:</label>
                        <div class="col-lg-10">
                            <input type="checkbox" name="allow_generator" value="1" <?php echo ($package_data['generator'] == 1) ? 'checked' : '' ?>>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Allow Custom Signature:</label>
                        <div class="col-lg-10">
                            <input type="checkbox" name="allow_custom_signature" value="1" <?php echo ($package_data['custom_signature'] == 1) ? 'checked' : '' ?>>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Total Signatures:</label>
                        <div class="col-sm-2">
                            <select class="form-control" name="signatures">
                                <option value="">Select</option>
                                <option value="10" <?php echo (isset($settings)) ? ($package_data['signatures'] == 10) ? 'selected' : '' : '' ?>>10</option>
                                <option value="20" <?php echo (isset($settings)) ? ($package_data['signatures'] == 20) ? 'selected' : '' : '' ?>>20</option>
                                <option value="30" <?php echo (isset($settings)) ? ($package_data['signatures'] == 30) ? 'selected' : '' : '' ?>>30</option>
                                <option value="40" <?php echo (isset($settings)) ? ($package_data['signatures'] == 40) ? 'selected' : '' : '' ?>>40</option>
                                <option value="50" <?php echo (isset($settings)) ? ($package_data['signatures'] == 50) ? 'selected' : '' : '' ?>>50</option>
                                <option value="0" <?php echo (isset($settings)) ? ($package_data['signatures'] == 0) ? 'selected' : '' : '' ?>>No limit</option>
                            </select>
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
    $('document').ready(function () {
        $("#package_setting_info").validate({
            rules: {
                'tabs[]': {
                    required: true,
                },
                'signatures': {
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
    $('.select').select2({
        minimumResultsForSearch: Infinity
    });
</script>