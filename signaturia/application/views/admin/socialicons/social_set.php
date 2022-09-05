<script type="text/javascript" src="assets/admin/js/plugins/tables/datatables/datatables.min.js"></script>
<script type="text/javascript" src="assets/admin/js/plugins/forms/selects/select2.min.js"></script>
<script type="text/javascript" src="assets/admin/js/plugins/notifications/sweet_alert.min.js"></script>
<div class="page-header page-header-default">
    <div class="page-header-content">
        <div class="page-title">
            <h4><i class="icon-share3"></i> <span class="text-semibold">All Icons Sets</span></h4>
        </div>
    </div>
    <div class="breadcrumb-line">
        <ul class="breadcrumb">
            <li><a href="<?php echo site_url('admin/home'); ?>"><i class="icon-home2 position-left"></i> Home</a></li>
            <li class="active">Icons Sets</li>
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
            <a href="<?php echo site_url('admin/social_icons/add_set'); ?>" class="btn btn-success btn-labeled"><b><i class="icon-plus-circle2"></i></b> Add Social Icon Set</a>
        </div>
        <table class="table datatable-basic">
            <thead>
                <tr>
                    <th>Sr No.</th>
                    <th>Name</th>
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
            ajax: site_url + 'admin/social_icons/get_social_set',
            columns: [
                {
                    data: "sr_no",
                    visible: true,
                    sortable: false,
                },
                {
                    data: "set_name",
                    visible: true,
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
                        action += '<a href="' + site_url + 'admin/social_icons/edit_set/' + full.id + '" class="btn border-primary text-primary btn-flat btn-icon btn-rounded btn-xs" title="Edit Social Icon Set"><i class="icon-pencil7"></i></a>';
                        if(full.is_delete == 0){
                            action += '&nbsp;&nbsp;<a href="' + site_url + 'admin/social_icons/icons/' + full.id + '" class="btn border-warning text-warning btn-flat btn-icon btn-rounded btn-xs" title="View Social Icon"><i class="icon-eye"></i></a>';
                            action += '&nbsp;&nbsp;<a href="' + site_url + 'admin/social_icons/delete_set/' + full.id + '" class="btn border-danger text-danger btn-flat btn-icon btn-rounded btn-xs" onclick="return confirm_alert(this)" title="Delete Social Icon Set"><i class="icon-trash"></i></a>';
                        } else {
                            action += '&nbsp;&nbsp;<a href="' + site_url + 'admin/social_icons/active_set/' + full.id + '" class="btn border-success text-success btn-flat btn-icon btn-rounded btn-xs" title="Active Social Icon Set"><i class="icon-checkmark4"></i></a>';
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
            text: "You will be able to recover this social icon set!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#FF7043",
            confirmButtonText: "Yes, deactivate it!"
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