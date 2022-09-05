<script type="text/javascript" src="assets/js/jquery.validate.js"></script>
<script type="text/javascript" src="assets/admin/js/plugins/pickers/daterangepicker.js"></script>
<!-- Page header -->
<div class="page-header page-header-default">
	<div class="page-header-content">
		<div class="page-title">
			<h4>
				<i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Users</span> - 
				<?php
					if (isset($coupon_data))
						echo 'Edit coupon of - "' . $userdata['fullname'] . '"';
					else
						echo 'Add coupon for - "' . $userdata['fullname'] . '"';
				?>
			</h4>
		</div>
	</div>

	<div class="breadcrumb-line">
		<ul class="breadcrumb">
			<li><a href="<?php echo site_url('admin') ?>"><i class="icon-home2 position-left"></i> Home</a></li>
			<li><a href="<?php echo site_url('admin/users') ?>">Users</a></li>
			<li><a href="<?php echo site_url('admin/users/view_coupons/'.$userdata['id']) ?>">Coupons</a></li>
			<li class="active">
				<?php
					if (isset($coupon_data))
						echo 'Edit coupon';
					else
						echo 'Add coupon';
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
			<form class="form-horizontal" id="add_coupon_form" action="" enctype="multipart/form-data" method="post">
				<fieldset class="content-group">
					<legend class="text-bold">coupon Details</legend>
					<!-- <div class="form-group">
						<label class="control-label col-lg-3">Generate coupon <span class="text-danger">*</span></label>
						<div class="col-lg-4">
							<input type="text" class="form-control" name="">
						</div>
					</div> -->
					<div class="form-group">
                        <label class="control-label col-lg-3">Package</label>
                        <div class="col-lg-4">
                            <select name="package" id="package" class="form-control" aria-required="true">
                                <option value="">Select Package</option>

                                <?php foreach ($packages as $key => $value): ?>
                                	<?php
                            			if(isset($coupon_data) && $coupon_data['package_id'] == $value['id']) {
                            				?>
                            				<option selected value="<?php echo $value['id']; ?>"><?php echo $value['title']; ?></option>
                            		<?php
                                		} else {
                                			?>
	                                			<option value="<?php echo $value['id']; ?>"><?php echo $value['title']; ?></option>
                                			<?php
                                		}
                                	?>
                                <?php endforeach ?>
                            </select>
                            <label id="package_error" class="validation-error-label" for="package"></label>   
                        </div>
                        <code><i class="icon-info22"></i> Please select package! if you like apply coupon on this package only.</code>
                    </div>
                    <div class="form-group" id="yearly_price_box">
                        <label class="col-lg-3 control-label">Coupon Discount Percentages <span class="text-danger">*</span></label>
                        <div class="col-lg-2">
                            <input type="text" class="form-control" placeholder="Coupon Discount Percentage" name="coupon_price" id="coupon_price" value="<?php echo (isset($coupon_data['coupon_price'])) ? $coupon_data['coupon_price'] : set_value('coupon_price'); ?>">
                        </div>
                    </div>
					<div class="form-group">
						<label class="control-label col-lg-3">
							Coupon Schedule <span class="text-danger">*</span></label>
						<div class="col-lg-4">
							<div class="input-group">
                                <?php
                                    if(isset($coupon_data)) {
                                        $start_date = $coupon_data['start_datetime'];
                                        $end_date = $coupon_data['end_datetime'];
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
					<!-- <div class="form-group">
						<label class="control-label col-lg-3">Automatic Apply</label>
						<div class="col-lg-9">
							<div class="checkbox">
								<label>
									<input type="checkbox" name="is_auto" id="is_auto" value="1" <?php echo (isset($coupon_data['is_auto']) && $coupon_data['is_auto'] == 1) ? 'checked' : '' ?> class="styled">
									<code><i class="icon-info22"></i> Please check! if you like automatic apply for this user.</code>
								</label>
							</div>
						</div>
					</div> -->
                    <?php 
                        if(!isset($coupon_data)) {
                    ?>
					<!-- Email field -->
					<div class="form-group">
						<label class="control-label col-lg-3">Send Email to user</label>
						<div class="col-lg-9">
							<div class="checkbox">
								<label>
									<input type="checkbox" name="is_email" id="is_email" value="1" class="styled">
									<code><i class="icon-info22"></i> Please check! if you like send email to this user.</code>
								</label>
							</div>
						</div>
					</div>
                    <?php } ?>
                    <div class="form-group">
                        <label class="control-label col-lg-3">Is Active</label>
                        <div class="col-lg-9">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="is_active" id="is_active" value="1" <?php echo (isset($coupon_data['is_active']) && $coupon_data['is_active'] == 1) ? 'checked' : '' ?> class="styled">
                                    <code><i class="icon-info22"></i> Please check for activate coupon.</code>
                                </label>
                            </div>
                        </div>
                    </div>
				</fieldset>
				<div class="text-left">
                    <input type="hidden" name="coupon_id" value="<?php echo isset($coupon_data['coupon_id']) ? $coupon_data['coupon_id'] : 0 ?>">
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
    $("#add_coupon_form").validate({
        rules: {
            coupon_price: {
                required: true,
                userval: /^[1-9][0-9]*$/,
                max:100
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
