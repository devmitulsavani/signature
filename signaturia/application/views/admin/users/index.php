<script type="text/javascript" src="assets/admin/js/plugins/tables/datatables/datatables.min.js"></script>
<script type="text/javascript" src="assets/admin/js/plugins/forms/selects/select2.min.js"></script>
<script type="text/javascript" src="assets/admin/js/plugins/notifications/sweet_alert.min.js"></script>
<div class="page-header page-header-default">
    <div class="page-header-content">
        <div class="page-title">
            <h4><i class="icon-users2"></i> <span class="text-semibold">All Users</span></h4>
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
            <a href="<?php echo site_url('admin/users/add'); ?>" class="btn btn-success btn-labeled"><b><i class="icon-plus-circle2"></i></b> Add User</a>
        </div>
        <table class="table datatable-basic">
            <thead>
                <tr>
                    <th>Sr No.</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Package</th>
                    <th>Signatures</th>
                    <th>Added On</th>
                    <th>Status</th>
                    <th>Payment Status</th>
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
            scrollX: true,
            language: {
                search: '<span>Filter:</span> _INPUT_',
                lengthMenu: '<span>Show:</span> _MENU_',
                paginate: {'first': 'First', 'last': 'Last', 'next': '&rarr;', 'previous': '&larr;'},
            },
            dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
            order: [[5, "desc"]],
            ajax: site_url + 'admin/users/get_users',
            columns: [
                {
                    data: "sr_no",
                    visible: true,
                    sortable: false,
                },
                {
                    data: "fullname",
                    visible: true,
                },
                {
                    data: "email",
                    visible: true,
                },
                {
                    data: "title",
                    visible: true,
                },
                {
                    data: "created",
                    visible: true,
                    sortable: false,
                },
                {
                    data: "created",
                    visible: true,
                },
                {
                    data: "is_active",
                    visible: true,
                    searchable: false,
                    sortable: false,
                    render: function (data, type, full, meta) {
                        status = '';
                        if (full.is_verified == 0) {
                            status = '<span class="label bg-info">Email not verified</span>';
                        } else if (data == 0) {
                            status = '<span class="label bg-danger">Blocked</span>';
                        } else if (data == 1) {
                            var status = '<span class="label bg-success">Active</span>';
                        }
                        return status;

                    }
                },
                {
                    data: "is_active",
                    visible: true,
                    searchable: false,
                    sortable: false,
                    render: function (data, type, full, meta) {
                        status = '';

                        if (full.trans_id == '' || full.trans_id == null) {
                            if (full.type == 1) {
                                status = '<span class="label label-default">Free</span>';
                            } else if (full.type == 0) {
                                var status = '<span class="label bg-danger">Not Paid</span>';
                            }
                        } else {
                            if (full.type == 1) {
                                status = '<span class="label label-default">Free</span>';
                            } else if (full.type == 0) {
                                var status = '<span class="label bg-success">Paid</span>';
                            }
                        }
                        return status;
                    }
                },
                {
                    data: "is_active",
                    visible: true,
                    searchable: false,
                    sortable: false,
                    render: function (data, type, full, meta) {
                        action = '';
                        if (full.is_active == 1) {
                            action += '<a href="' + site_url + 'admin/users/edit/' + full.id + '" class="btn border-primary text-primary btn-flat btn-icon btn-rounded btn-xs" title="Edit User"><i class="icon-pencil7"></i></a>';
                            action += '&nbsp;&nbsp;<a href="' + site_url + 'admin/users/block/' + full.id + '" class="btn border-slate  text-slate-600 btn-flat btn-icon btn-rounded btn-xs" onclick="return block_alert(this,\'block\')" title="Block User"><i class="icon-blocked"></i></a>';
                            action += '&nbsp;&nbsp;<a href="' + site_url + 'admin/users/delete/' + full.id + '" class="btn border-danger text-danger btn-flat btn-icon btn-rounded btn-xs" onclick="return confirm_alert(this)" title="Delete User"><i class="icon-trash"></i></a>';
                            // action += '&nbsp;&nbsp;<a href="' + site_url + 'admin/users/add_coupon/' + full.id + '" class="btn border-teal-400 teal-400 btn-flat btn-icon btn-rounded btn-xs" title="Add coupon"><i class="icon-puzzle4"></i></a>';
                            action += '&nbsp;&nbsp;<a href="' + site_url + 'admin/users/view_coupons/' + full.id + '" class="btn border-teal-400 teal-400 btn-flat btn-icon btn-rounded btn-xs" title="Add coupon"><i class="icon-puzzle4"></i></a>';
                        } else {
                            if (full.is_verified == 0) {
                                action += '&nbsp;&nbsp;<a href="' + site_url + 'admin/users/verify/' + full.id + '" class="btn border-teal text-teal-600 btn-flat btn-icon btn-rounded btn-xs" onclick="return verify_alert(this)" title="Verify User Email"><i class="icon-checkmark4"></i></a>';
                                action += '&nbsp;&nbsp;<a href="' + site_url + 'admin/users/delete/' + full.id + '" class="btn border-danger text-danger btn-flat btn-icon btn-rounded btn-xs" onclick="return confirm_alert(this)" title="Delete User"><i class="icon-trash"></i></a>';
                            } else {
                                action += '<a href="' + site_url + 'admin/users/block/' + full.id + '" class="btn border-teal text-teal-600 btn-flat btn-icon btn-rounded btn-xs" title="Unblock User" onclick="return block_alert(this,\'unblock\')" ><i class="icon-checkmark4"></i></a>';
                                action += '&nbsp;&nbsp;<a href="' + site_url + 'admin/users/delete/' + full.id + '" class="btn border-danger text-danger btn-flat btn-icon btn-rounded btn-xs" onclick="return confirm_alert(this)" title="Delete User"><i class="icon-trash"></i></a>';
                            }
                        }
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
            text: "You will not be able to recover this user!",
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
    function block_alert(e, type) {
        swal({
            title: "Are you sure?",
            text: "The user will be " + type + "ed!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#FF7043",
            confirmButtonText: "Yes, " + type + " it!"
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
    function verify_alert(e) {
        swal({
            title: "Are you sure?",
            text: "You want to verify user's email and change status to verify!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#FF7043",
            confirmButtonText: "Yes, verify it!"
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