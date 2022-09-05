<script type="text/javascript" src="assets/admin/js/plugins/tables/datatables/datatables.min.js"></script>
<script type="text/javascript" src="assets/admin/js/plugins/forms/selects/select2.min.js"></script>
<script type="text/javascript" src="assets/admin/js/plugins/notifications/sweet_alert.min.js"></script>
<div class="page-header page-header-default">
    <div class="page-header-content">
        <div class="page-title">
            <h4><i class="icon-envelop4"></i> <span class="text-semibold">Email Templates</span></h4>
        </div>
    </div>
    <div class="breadcrumb-line">
        <ul class="breadcrumb">
            <li><a href="admin"><i class="icon-home2 position-left"></i> Home</a></li>
            <li class="active">Email Templates</li>
        </ul>
    </div>
</div>
<!-- /page header -->
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
    <div class="row">
            <div class="col-md-4">
                <div class="panel">
                    <div class="panel-body text-center">
                        <div class="icon-object border-success text-success"><i class="icon-puzzle4"></i></div>
                        <h5 class="text-semibold">Coupon email template</h5>
                        <p class="mb-15">
                            Please click on below link for edit coupon email template.
                        </p>
                        <a href="<?php echo site_url('admin/email_templates/edit/coupon') ?>" class="btn bg-success-400">Email Template</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel">
                    <div class="panel-body text-center">
                        <div class="icon-object border-primary text-primary"><i class="icon-hyperlink"></i></div>
                        <h5 class="text-semibold">Verification email template</h5>
                        <p class="mb-15">
                            Please click on below link for edit verification email template.
                        </p>
                        <a href="<?php echo site_url('admin/email_templates/edit/welcome') ?>" class="btn bg-primary-400">Email Template</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel">
                    <div class="panel-body text-center">
                        <div class="icon-object border-warning text-warning"><i class="icon-hyperlink"></i></div>
                        <h5 class="text-semibold">Re-verification email template</h5>
                        <p class="mb-15">
                            Please click on below link for edit re-verification email template.
                        </p>
                        <a href="<?php echo site_url('admin/email_templates/edit/re-verification') ?>" class="btn bg-warning-400">Email Template</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel">
                    <div class="panel-body text-center">
                        <div class="icon-object border-info text-info"><i class="icon-equalizer"></i></div>
                        <h5 class="text-semibold">Share generator email template (with passcode) <br> Non-Registered employee</h5>
                        <p class="mb-15">
                            Please click on below link for edit share generator email template.
                        </p>
                        <a href="<?php echo site_url('admin/email_templates/edit/share-generator') ?>" class="btn bg-info-400">
                            Email Template
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel">
                    <div class="panel-body text-center">
                        <div class="icon-object border-slate text-slate"><i class="icon-equalizer"></i></div>
                        <h5 class="text-semibold">Share generator email template (without passcode) <br> Registered employee</h5>
                        <p class="mb-15">
                            Please click on below link for edit share generator email template.
                        </p>
                        <a href="<?php echo site_url('admin/email_templates/edit/without-share-generator') ?>" class="btn bg-slate-400">
                            Email Template
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $this->load->view('Templates/footer'); ?>
</div>