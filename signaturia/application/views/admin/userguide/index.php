<script type="text/javascript" src="assets/admin/js/plugins/tables/datatables/datatables.min.js"></script>
<script type="text/javascript" src="assets/admin/js/plugins/forms/selects/select2.min.js"></script>
<script type="text/javascript" src="assets/admin/js/plugins/notifications/sweet_alert.min.js"></script>
<div class="page-header page-header-default">
    <div class="page-header-content">
        <div class="page-title">
            <h4><i class="icon-book3"></i> <span class="text-semibold">All Guide Platforms</span></h4>
        </div>
    </div>
    <div class="breadcrumb-line">
        <ul class="breadcrumb">
            <li><a href="<?php echo site_url('admin/home'); ?>"><i class="icon-home2 position-left"></i> Home</a></li>
            <li class="active">Users</li>
        </ul>
    </div>
</div>
<div class="content">
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
        <div class="panel-heading text-right">
            <a href="<?php echo site_url('admin/user_guide/add_platform'); ?>" class="btn btn-success btn-labeled"><b><i class="icon-plus-circle2"></i></b> Add guide source</a>
        </div>
        <table class="table datatable-basic">
            <thead>
                <tr>
                    <th>Sr No.</th>
                    <th>Logo</th>
                    <th>Platform</th>
                    <th>Action</th>
                </tr>
            </thead>
        </table>
    </div>
    <?php $this->load->view('Templates/footer'); ?>
</div>
<script>
    $(function () {
        $('.datatable-basic').dataTable({
            autoWidth: false,
            processing: true,
            serverSide: true,
            language: {
                search: '<span>Filter:</span> _INPUT_',
                lengthMenu: '<span>Show:</span> _MENU_',
                paginate: {'first': 'First', 'last': 'Last', 'next': '&rarr;', 'previous': '&larr;'},
            },
            dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
            order: [[0, "desc"]],
            ajax: site_url + 'admin/user_guide/get_guide_platforms',
            columns: [
                {
                    data: "sr_no",
                    visible: true,
                    sortable: false,
                },
                {
                    data: "logo",
                    visible: true,
                    sortable: false,
                    render: function (data, type, full, meta) {
                        var package_image = '';
                        if (full.logo != '' && full.logo != null) {
                            package_image = '<a href="<?php echo PLATFORM_LOGOS ?>' + full.logo + '" data-popup="lightbox"><img src="<?php echo PLATFORM_LOGOS ?>' + full.logo + '" height="55px" width="55px" alt="' + full.title + '"></a>';
                        } else {
                            package_image = '<a href="assets/admin/images/no_logo.png" data-popup="lightbox"><img src="assets/admin/images/no_logo.png" height="55px" width="55px" alt="' + full.title + '"></a>';
                        }
                        return package_image;
                    }
                },
                {
                    data: "platform",
                    visible: true,
                },
                {
                    data: "is_active",
                    visible: true,
                    searchable: false,
                    sortable: false,
                    render: function (data, type, full, meta) {
                        action = '';
                        // if (full.is_active == 1) {
                            action += '<a href="' + site_url + 'admin/user_guide/edit_platform/' + full.id + '" class="btn border-primary text-primary btn-flat btn-icon btn-rounded btn-xs" title="Edit platform"><i class="icon-pencil7"></i></a>';
                            action += '&nbsp;&nbsp;<a href="' + site_url + 'admin/user_guide/steps/' + full.id + '" class="btn border-success text-success btn-flat btn-icon btn-rounded btn-xs"  title="Add steps"><i class="icon-stairs"></i></a>';
                            action += '&nbsp;&nbsp;<a href="' + site_url + 'admin/user_guide/delete/' + full.id + '" class="btn border-danger text-danger btn-flat btn-icon btn-rounded btn-xs" onclick="return confirm_alert(this)" title="Delete platform"><i class="icon-trash"></i></a>';
                        // } else {
                            // action += '<a href="' + site_url + 'admin/users/block/' + full.id + '" class="btn border-teal text-teal-600 btn-flat btn-icon btn-rounded btn-xs" title="Unblock User" onclick="return block_alert(this,\'unblock\')" ><i class="icon-checkmark4"></i></a>';
                            // action += '&nbsp;&nbsp;<a href="' + site_url + 'admin/userss/delete/' + full.id + '" class="btn border-danger text-danger btn-flat btn-icon btn-rounded btn-xs" onclick="return confirm_alert(this)" title="Delete User"><i class="icon-trash"></i></a>';
                        // }
                        return action;
                    }
                },
            ]
        });

        $('.dataTables_length select').select2({
            minimumResultsForSearch: Infinity,
            width: 'auto'
        });

    });
    function confirm_alert(e) {
        swal({
            title: "Are you sure?",
            text: "You will not be able to recover this platform!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#FF7043",
            confirmButtonText: "Yes, delete it!"
        },
                function (isConfirm) {
                    if (isConfirm) {
                        window.location.href = $(e).attr('href');
                        return true;
                    } else {
                        return false;
                    }
                });
        return false;
    }
</script>