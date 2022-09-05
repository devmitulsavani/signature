$(document).ready(function () {
    $(".bootstrap_alert").fadeTo(2000, 500).slideUp(500, function () {
        $(".bootstrap_alert").slideUp(500);
    });

    $('#users_tbl').dataTable({
        "aoColumnDefs": [{"bSortable": false, "aTargets": [7]}],
        //"aaSorting"		: [[1, 'asc']],
        "bDestroy": true
    });

    $('#ranks_tbl').dataTable({
        "aoColumnDefs": [{"bSortable": false, "aTargets": [1, 9]}],
        //"aaSorting"		: [[1, 'asc']],
        "bDestroy": true
    });

    $('#supplements_tbl').dataTable({
        "aoColumnDefs": [{"bSortable": false, "aTargets": [1, 10]}],
        //"aaSorting"		: [[1, 'asc']],
        "bDestroy": true
    });

    $('#ranks_tbl').dataTable({
        "aoColumnDefs": [{"bSortable": false, "aTargets": [9]}],
        //"aaSorting"		: [[1, 'asc']],
        "bDestroy": true
    });
    $('#liquids_tbl').dataTable({
        "aoColumnDefs": [{"bSortable": false, "aTargets": [5]}],
        //"aaSorting"		: [[1, 'asc']],
        "bDestroy": true
    });
    $('#flavours_tbl').dataTable({
        "aoColumnDefs": [{"bSortable": false, "aTargets": [5]}],
        //"aaSorting"		: [[1, 'asc']],
        "bDestroy": true
    });
    $('#categories_tbl').dataTable({
        "aoColumnDefs": [{"bSortable": false, "aTargets": [9]}],
//        "aaSorting"		: [[6, 'desc']],
        "bDestroy": true
    });
    $('#properties_tbl').dataTable({
        "aoColumnDefs": [{"bSortable": false, "aTargets": [5]}],
//        "aaSorting"		: [[6, 'desc']],
        "bDestroy": true
    });
    $('#goals_tbl').dataTable({
        "aoColumnDefs": [{"bSortable": false, "aTargets": [6]}],
//        "aaSorting"		: [[6, 'desc']],
        "bDestroy": true
    });
    $('#reviews_tbl').dataTable({
        "aoColumnDefs": [{"bSortable": false, "aTargets": [10]}],
//        "aaSorting"		: [[6, 'desc']],
        "bDestroy": true
    });

    $('.dataTables_length select').select2({
        minimumResultsForSearch: Infinity,
        width: 'auto'
    });
    $('.dataTables_filter input[type=search]').attr('placeholder', 'Type to filter...');
})
