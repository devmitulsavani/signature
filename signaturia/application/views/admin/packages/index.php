<script type="text/javascript" src="assets/admin/js/plugins/tables/datatables/datatables.min.js"></script>
<script type="text/javascript" src="assets/admin/js/plugins/forms/selects/select2.min.js"></script>
<script type="text/javascript" src="assets/admin/js/plugins/notifications/sweet_alert.min.js"></script>
<div class="page-header page-header-default">
    <div class="page-header-content">
        <div class="page-title">
            <h4><i class="icon-package position-left"></i> <span class="text-semibold">Packages</span> - List</h4>
        </div>
    </div>
    <div class="breadcrumb-line">
        <ul class="breadcrumb">
            <li><a href="admin"><i class="icon-home2 position-left"></i> Home</a></li>
            <li class="active">Packages</li>
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
    <!-- Highlighting rows and columns -->
    <div class="panel panel-flat">
        <div class="panel-heading text-right">
            <a href="admin/packages/add" class="btn btn-success btn-labeled"><b><i class="icon-plus-circle2"></i></b> Add Packages</a>
        </div>
        <table class="table datatable-basic dataTable">
            <thead>
                <tr>
                    <th># Sr No.</th>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Type</th>
                    <th>Monthly Price</th>
                    <th>Yearly Price</th>
                    <th>Created</th>
                    <th>Actions</th>
                </tr>
            </thead>
        </table>
    </div>
    <!-- /highlighting rows and columns -->
    <?php $this->load->view('Templates/footer'); ?>
</div>
<script>
    $(function () {
        $('.datatable-basic').dataTable({
            autoWidth: false,
            scrollX: true,
            scrollCollapse: true,
            processing: true,
            serverSide: true,
            language: {
                search: '<span>Filter:</span> _INPUT_',
                lengthMenu: '<span>Show:</span> _MENU_',
                paginate: {'first': 'First', 'last': 'Last', 'next': '&rarr;', 'previous': '&larr;'}
            },
            dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
            order: [[0, "desc"]],
            ajax: 'admin/packages/list_packages',
            columns: [
                {
                    data: "test_id",
                    sortable: false,
                    visible: true
                },
                {
                    data: "image",
                    visible: true,
                    sortable: false,
                    render: function (data, type, full, meta) {
                        var package_image = '';
                        if (full.image != '' && full.image != null) {
                            package_image = '<a href="' + package_image_base_path + full.image + '" data-popup="lightbox"><img src="' + package_image_base_path + full.image + '" height="55px" width="55px" alt="' + full.title + '"></a>';
                        } else {
                            package_image = '<a href="assets/admin/images/no_logo.png" data-popup="lightbox"><img src="assets/admin/images/no_logo.png" height="55px" width="55px" alt="' + full.title + '"></a>';
                        }
                        return package_image;
                    }
                },
                {
                    data: "title",
                    visible: true
                },
                {
                    data: "type",
                    visible: true
                },
                {
                    data: "monthly_price",
                    visible: true
                },
                {
                    data: "yearly_price",
                    visible: true
                },
                {
                    data: "created",
                    visible: true
                },
                {
                    data: "id",
                    visible: true,
                    searchable: false,
                    sortable: false,
                    render: function (data, type, full, meta) {
                        var action = '';
                        action += '<a href="' + site_url + 'admin/packages/edit/' + full.id + '" class="btn border-primary text-primary-600 btn-flat btn-icon btn-rounded btn-sm"><i class="icon-pencil3"></i></a>';
                        action += '&nbsp;&nbsp;<a href="' + site_url + 'admin/packages/settings/' + full.id + '" class="btn border-success text-success-600 btn-flat btn-icon btn-rounded"><i class="icon-gear"></i></a>';
                        action += '&nbsp;&nbsp;<a href="' + site_url + 'admin/packages/delete/' + full.id + '" class="btn border-danger text-danger-600 btn-flat btn-icon btn-rounded" onclick="return confirm_alert(this);"><i class="icon-cross2"></i></a>';
                        return action;
                    }
                }
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
            text: "You will not be able to see this package on admin or frontend, But it will display on users records",
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
