<script type="text/javascript" src="assets/js/jquery.validate.js"></script>
<script type="text/javascript" src="assets/admin/js/plugins/pickers/daterangepicker.js"></script>
<!-- Page header -->
<div class="page-header page-header-default">
	<div class="page-header-content">
		<div class="page-title">
			<h4>
				<i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Users</span> - 
				<?php
					if (isset($userdata))
						echo 'Add coupen for - "' . $userdata['fullname'] . '"';
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
						echo 'Add coupen';
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
	<!-- Form validation -->
	<div class="panel panel-flat">
		<div class="panel-body">
			<form class="form-horizontal" id="add_coupen_form" action="" enctype="multipart/form-data" method="post">
				<fieldset class="content-group">
					<legend class="text-bold">Coupen Details</legend>
					<!-- <div class="form-group">
						<label class="control-label col-lg-3">Generate Coupen <span class="text-danger">*</span></label>
						<div class="col-lg-4">
							<input type="text" class="form-control" name="">
						</div>
					</div> -->
                    <div class="form-group" id="yearly_price_box">
                        <label class="col-lg-3 control-label">Coupen Price:</label>
                        <div class="col-lg-2">
                            <input type="text" class="form-control" placeholder="Yearly Price" name="coupen_price" id="coupen_price" value="<?php echo (isset($userdata['coupen_price'])) ? $userdata['coupen_price'] : set_value('coupen_price'); ?>">
                        </div>
                    </div>
					<div class="form-group">
						<label class="control-label col-lg-3">
							Coupen Schedule <span class="text-danger">*</span></label>
						<div class="col-lg-4">
							<div class="input-group">
                                <?php
                                    if($userdata['coupen_id'] != '') {
                                        $start_date = $userdata['start_datetime'];
                                        $end_date = $userdata['end_datetime'];
                                    } else {
                                        $start_date = date('Y-m-d H:i:s');  
                                        $date = strtotime($start_date);
                                        $date = strtotime("+7 day", $date);
                                        $end_date = date('Y/m/d', $date);
                                    }
                                ?>
								<span class="input-group-addon"><i class="icon-calendar22"></i></span>
								<input type="text" class="form-control daterange-time" value="<?php echo $start_date; ?> # <?php echo $end_date; ?>" name="coupen_schedule"> 
							</div>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-lg-3">Automatic Apply <span class="text-danger">*</span></label>
						<div class="col-lg-9">
							<div class="checkbox">
								<label>
									<input type="checkbox" name="is_auto" id="is_auto" value="1" <?php echo (isset($userdata['is_auto']) && $userdata['is_auto'] == 1) ? 'checked' : '' ?> class="styled">
									<code><i class="icon-info22"></i> Please check! if you like automatic apply for this user.</code>
								</label>
							</div>
						</div>
					</div>
                    <?php 
                        if($userdata['coupen_id'] == '') {
                    ?>
					<!-- Email field -->
					<div class="form-group">
						<label class="control-label col-lg-3">Send Email to user <span class="text-danger">*</span></label>
						<div class="col-lg-9">
							<div class="checkbox">
								<label>
									<input type="checkbox" name="is_email" id="is_free" value="1" class="styled">
									<code><i class="icon-info22"></i> Please check! if you like send email to this user.</code>
								</label>
							</div>
						</div>
					</div>
                    <?php } ?>
                    <div class="form-group">
                        <label class="control-label col-lg-3">Is Active <span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="is_active" id="is_active" value="1" <?php echo (isset($userdata['coupen_activate']) && $userdata['coupen_activate'] == 1) ? 'checked' : '' ?> class="styled">
                                    <code><i class="icon-info22"></i> Please check for activate coupen.</code>
                                </label>
                            </div>
                        </div>
                    </div>
				</fieldset>
				<div class="text-left">
                    <input type="hidden" name="coupen_id" value="<?php echo isset($userdata['coupen_id']) ? $userdata['coupen_id'] : 0 ?>">
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

	$(document).on('click', '.styled', function () {
		if ($(this).parent().attr('class') == 'checked') {
			$(this).parent().removeClass('checked');
			$(this).prop('checked', false);
		} else {
			$(this).parent().addClass('checked');
			$(this).prop('checked', true);
		}
	});
 $('document').ready(function () {
    $("#add_coupen_form").validate({
            rules: {
                coupen_price: {
                    required: true,
                    userval: /^\d{0,4}(\.\d{0,2})?$/
                }
            },
            messages: {
                coupen_price: {
                    userval: "Invalid coupen price"
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

	$(function () {
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
});
</script>
