<script type="text/javascript" src="assets/admin/js/plugins/tables/datatables/datatables.min.js"></script>
<script type="text/javascript" src="assets/admin/js/plugins/forms/selects/select2.min.js"></script>
<script type="text/javascript" src="assets/admin/js/plugins/notifications/sweet_alert.min.js"></script>
<div class="page-header page-header-default">
    <div class="page-header-content">
        <div class="page-title">
            <h4><i class="icon-share3"></i> <span class="text-semibold">All Social Icons</span></h4>
        </div>
    </div>
    <div class="breadcrumb-line">
        <ul class="breadcrumb">
            <li><a href="<?php echo site_url('admin/home'); ?>"><i class="icon-home2 position-left"></i> Home</a></li>
            <li><a href="<?php echo site_url('admin/social_icons'); ?>">Icon Sets</a></li>
            <li class="active">Social Icons</li>
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
            <a href="<?php echo site_url('admin/social_icons/add'); ?>" class="btn btn-success btn-labeled"><b><i class="icon-plus-circle2"></i></b> Add Social Icon</a>
        </div>
        <table class="table datatable-basic">
            <thead>
                <tr>
                    <th>Sr No.</th>
                    <th>Icon</th>
                    <th>Name</th>
                    <th>Added By</th>
                    <th>Added on</th>
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
//            order: [[4, "desc"]],
            "ajax": {
                url: site_url + 'admin/social_icons/get_social_icons',
            },
            columns: [
                {
                    data: "sr_no",
                    visible: true,
                    sortable: false,
                },
                {
                    data: "icon",
                    visible: true,
                    sortable: false,
                    render: function (data, type, full, meta) {
                        var social_icon = '';
                        if (full.icon1 != '' && full.icon1 != null) {
                            social_icon = '<a href="' + social_icon_base_1 + full.icon1 + '" data-popup="lightbox"><img src="' + social_icon_base_1 + full.icon1 + '" height="55px" width="55px"></a>';
                        } else {
                            social_icon = '<a href="assets/admin/images/no_logo.png" data-popup="lightbox"><img src="assets/admin/images/no_logo.png" height="55px" width="55px" alt="' + full.firstname + '"></a>';
                        }
                        return social_icon;
                    }
                },
                {
                    data: "name",
                    visible: true,
                },
                {
                    data: "user_role",
                    visible: true,
                    render: function (data, type, full, meta) {
                        if (full.user_role == 2) {
                            return full.fullname;
                        } else {
                            return 'Admin';
                        }
                    }
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
                        action = '';
                        action += '<a href="' + site_url + 'admin/social_icons/edit/' + full.id + '" class="btn border-primary text-primary btn-flat btn-icon btn-rounded btn-xs" title="Edit Social Icon"><i class="icon-pencil7"></i></a>';
                        action += '&nbsp;&nbsp;<a href="' + site_url + 'admin/social_icons/delete/' + full.id + '" class="btn border-danger text-danger btn-flat btn-icon btn-rounded btn-xs" onclick="return confirm_alert(this)" title="Delete Social Icon"><i class="icon-trash"></i></a>';
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
            text: "You will not be able to recover this social_icon!",
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