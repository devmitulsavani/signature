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
            <h4><i class="icon-book3 position-left"></i> <span class="text-semibold">User Guide</span> - <?php echo $heading; ?></h4>
        </div>
    </div>
    <div class="breadcrumb-line">
        <ul class="breadcrumb">
            <li><a href="admin"><i class="icon-home2 position-left"></i> Home</a></li>
            <li><a href="admin/user_guide"><i class="icon-book3 position-left"></i> User Guide</a></li>
            <li><a href="admin/user_guide/steps/<?php echo $platform_info['id']; ?>"> Steps of <?php echo $platform_info['platform']; ?></a></li>
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
    <form class="form-horizontal" action="" id="step_info" method="POST" enctype="multipart/form-data">
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title"><?php echo $heading; ?></h5>
            </div>
            <div class="panel-body">
                <fieldset>
                    <legend class="text-semibold">Basic information</legend>
                    <div class="form-group">
                        <label class="col-lg-1 control-label">Step Title: <span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" name="title" id="title" placeholder="Step title" value="<?php echo (isset($step_info['title'])) ? $step_info['title'] : set_value('title'); ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-1 control-label">Step Description: <span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <textarea class="form-control" name="description" id="description" placeholder="Step description"><?php echo (isset($step_info['step'])) ? $step_info['step'] : set_value('description'); ?></textarea>
                        </div>
                    </div>
                </fieldset>
                <fieldset>
                    <legend class="text-semibold">Media information</legend>
                    <div class="form-group">
                        <label class="control-label col-lg-1">File: <span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <div class="media no-margin-top">
                                <div class="media-left" id="image_preview_div">
                                    <?php if (isset($step_info) && $step_info['file'] != '') { 
                                            $type = explode('.', $step_info['file']);
                                            if($type[1] == 'mp4') {
                                                ?>
                                                    <video width="400" controls>
                                                        <source src="<?php echo PLATFORM_LOGOS . $step_info['file'] ?>" type="video/mp4">
                                                        <source src="mov_bbb.ogg" type="video/ogg">
                                                        Your browser does not support HTML5 video.
                                                    </video>
                                                <?php
                                            } else {
                                        ?>
                                            <img src="<?php echo PLATFORM_LOGOS . $step_info['file'] ?>" style="width: 58px; height: 58px; border-radius: 2px;" alt="">
                                        <?php 
                                            }
                                        } else { ?>
                                        <img src="assets/admin/images/placeholder.jpg" style="width: 58px; height: 58px; border-radius: 2px;" alt="">
                                    <?php } ?>
                                </div>
                                <div class="media-body">
                                    <input type="file" name="file" id="file" class="file-styled" onchange="readURL(this);">
                                    <span class="help-block">Accepted formats: png, jpg, jpeg, mp4. Max file size 2Mb</span>
                                </div>
                            </div>
                            <?php
                            if (isset($package_img_validation))
                                echo '<label id="image-error" class="validation-error-label" for="image">' . $package_img_validation . '</label>';
                            ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-1 control-label">Youtube Link: <span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" name="youtube_link" id="youtube_link" placeholder="www.youtube.com/embed/XGSy3_Czz8k" value="<?php echo (isset($step_info['link'])) ? $step_info['link'] : set_value('youtube_link'); ?>">
                            <label class="error"></label>
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
    $('document').ready(function () {
        $("#step_info").validate({
            rules: {
                title: {
                    required: true,
                },
                description: {
                    required: true,
                },
                file: {
                    extension: "jpg|png|jpeg|mp4",
                    maxFileSize: {
                        "unit": "MB",
                        "size": 10
                    }
                },
                // youtube_link: {
                //     userval: /^www\.youtube\.com\/embed\/\S*$/,
                // }
            },
            messages: {
                youtube_link: {
                    userval: "Invalid youtube url",
                }
            },
            errorPlacement: function (error, element) {
                if (element.attr("name") == "file") {
                    error.insertAfter($(".uploader"));
                } else {
                    error.insertAfter(element);
                }
            },
            submitHandler: function (form) {
                var url = $('#youtube_link').val();
                if (url != '') {        
                    var regExp = /^www\.youtube\.com\/embed\/\S*$/;
                    var match = url.match(regExp);
                    if (match) {
                        form.submit();
                    } else {
                        $('.error').html('Invalid youtube url link').show();
                    }
                } else {
                    form.submit();
                }
            }
        });
    });
</script>