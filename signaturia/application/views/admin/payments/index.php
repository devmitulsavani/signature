<script type="text/javascript" src="assets/admin/js/plugins/tables/datatables/datatables.min.js"></script>
<script type="text/javascript" src="assets/admin/js/plugins/forms/selects/select2.min.js"></script>
<script type="text/javascript" src="assets/admin/js/plugins/notifications/sweet_alert.min.js"></script>
<div class="page-header page-header-default">
    <div class="page-header-content">
        <div class="page-title">
            <h4><i class="icon-stats-bars3"></i> <span class="text-semibold">All Payments</span></h4>
        </div>
    </div>
    <div class="breadcrumb-line">
        <ul class="breadcrumb">
            <li><a href="<?php echo site_url('admin/home'); ?>"><i class="icon-home2 position-left"></i> Home</a></li>
            <li class="active">Payments</li>
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
        <table class="table datatable-basic">
            <thead>
                <tr>
                    <th>Sr No.</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Package</th>
                    <!-- <th>Payment_id</th> -->
                    <th>Paid for</th>
                    <th>Paid Amount</th>
                    <th>Paid Date</th>
                    <!-- <th>Status</th> -->
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
            order: [[5, "desc"]],
            ajax: site_url + 'admin/payments/get_users',
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
                // {
                //     data: "payment_id",
                //     visible: true,
                //     sortable: false,
                // },
                {
                    data: "paid_type",
                    visible: true,
                    searchable: false,
                    // sortable: false,
                    render: function (data, type, full, meta) {
                        status = '';
                        if (data == 1) {
                            status = '<span class="label bg-danger">Yearly</span>';
                        } else if (data == 2) {
                            var status = '<span class="label bg-success">Monthly</span>';
                        }
                        return status;
                    }
                },
                {
                    data: "paid_for_plan",
                    visible: true,
                    // sortable: false,
                },
                {
                    data: "paid_date",
                    visible: true,
                },
                // {
                //     data: "is_active",
                //     visible: true,
                //     searchable: false,
                //     sortable: false,
                //     render: function (data, type, full, meta) {
                //         status = '';
                //         if (data == 0) {
                //             status = '<span class="label bg-danger">Blocked</span>';
                //         } else if (data == 1) {
                //             var status = '<span class="label bg-success">Active</span>';
                //         }
                //         return status;

                //     }
                // }
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
</script>