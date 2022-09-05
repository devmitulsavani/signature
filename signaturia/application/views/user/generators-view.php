<div class="search-client">
    <input type="text" class="form-control" name="signature_search" id="signature_search" placeholder="Search signature...">
    <button class="search-btn" type="button"><i class="zmdi zmdi-search zmdi-hc-fw"></i></button>
</div>


<!-- <div class="row">
    <div class="col-sm-12">
        <div class="box-wrap">
            <div class="box-title">
                <h3>Generators List</h3>
                <div class="box-act">
                    <a href="<?php echo site_url('generators/add') ?>" data-target="#uploadVid" class="box-btn">Add Generator</a>
                    <a href="<?php echo site_url('custom-generator') ?>" data-target="#uploadVid" class="box-btn">Add Custom Generator</a>
                    <div class="btn-group grid-toggle" role="group" aria-label="...">
                        <button type="button" class="toggle-view active" data-id="box-view"><span class="glyphicon glyphicon-th-large" aria-hidden="true"></span></button>
                        <button type="button" class="toggle-view" data-id="list-view"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span></button>
                    </div>
                </div>
            </div>
            <div class="box-body list-height">
                <div class="list-wrap wide-list box-view">
                    <?php if ($this->session->flashdata('success')) { ?>
                        <div class="alert bg-success alert-styled-left bootstrap_alert">
                            <a class="close" data-dismiss="alert">×</a>
                            <strong><?php echo $this->session->flashdata('success') ?></strong>
                        </div>
                    <?php $this->session->set_flashdata('success', false);
                    } else if ($this->session->flashdata('error')) { ?>
                        <div class="alert bg-danger alert-styled-left bootstrap_alert">
                            <a class="close" data-dismiss="alert">×</a>
                            <strong><?php echo $this->session->flashdata('error') ?></strong>
                        </div>
                    <?php $this->session->set_flashdata('error', false);
                    } else {
                        echo validation_errors();
                    } ?>
                    <div class="row">
                        <div id="signature_list"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade bs-example-modal-sm signature_view_popup" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" data-backdrop="static">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">x</button>
                <h4 class="modal-title" id="myModalLabel">View Signature</h4>
            </div>
            <div class="modal-body text-center" id="signature_view_popup_body">
            </div>
        </div>
    </div>
</div>
<div class="modal fade bs-example-modal-sm generator_link_popup" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" data-backdrop="static">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">x</button>
                <h4 class="modal-title" id="myModalLabel">Generator link</h4>
            </div>
            <div class="modal-body text-center">
                <div id="redirect_generator_link" style="word-wrap: break-word;"></div>
                <button class="com-btn btn" id="copy-button" data-clipboard-target="#redirect_generator_link">Copy</button>
            </div>
        </div>
    </div>
</div> -->

<!-- new ui -->

<div class="p-4 lg:p-6 xl:p-16 lg:ml-72">
    <div class="flex -mx-4 flex-wrap justify-between">
        <div class="px-4 w-full">
            <div class="flex justify-between items-center mb-5">
                <span class="text-primary min-h-[40px] flex items-center font-semibold pl-5 relative before:w-[10px] before:h-[10px] before:bg-secondary before:inline-block before:absolute before:left-0 before:top-1/2 before:-translate-y-1/2 before:rounded-full text-base">Signature List</span>
                <ul class="flex">
                    <li class="dashview-button duration-300 active cursor-pointer p-4 bg-white hover:bg-primary text-primary hover:text-white rounded rounded-r-none grid-view-button"><svg xmlns="http://www.w3.org/2000/svg" width="16.001" height="15.998" viewBox="0 0 16.001 15.998">
                            <g id="Group_275" data-name="Group 275" transform="translate(588.56 -33.007)">
                                <path id="Path_398" data-name="Path 398" d="M-581.132,37.292q0,1.4,0,2.8a1.412,1.412,0,0,1-1.478,1.483q-2.24,0-4.48,0a1.41,1.41,0,0,1-1.469-1.474q0-2.811,0-5.621a1.409,1.409,0,0,1,1.469-1.473q2.249,0,4.5,0a1.408,1.408,0,0,1,1.46,1.464C-581.13,35.413-581.132,36.353-581.132,37.292Zm-6.285,0q0,1.392,0,2.784c0,.268.087.358.348.358h4.445c.261,0,.349-.091.349-.357q0-2.784,0-5.569c0-.273-.087-.358-.366-.358h-4.409c-.285,0-.367.084-.367.375Q-587.417,35.908-587.417,37.292Z" fill="currentColor" />
                                <path id="Path_399" data-name="Path 399" d="M-332.714,252.566q0,1.392,0,2.784a1.413,1.413,0,0,1-1.487,1.492q-2.231,0-4.462,0a1.412,1.412,0,0,1-1.478-1.483q0-2.8,0-5.6a1.41,1.41,0,0,1,1.478-1.482q2.24,0,4.48,0a1.41,1.41,0,0,1,1.469,1.473C-332.712,250.686-332.714,251.626-332.714,252.566Zm-1.143-.021q0-1.374,0-2.749c0-.3-.079-.382-.378-.382h-4.374c-.314,0-.39.076-.391.387q0,2.758,0,5.515c0,.3.079.382.378.382h4.391c.289,0,.373-.083.373-.369Q-333.856,253.938-333.856,252.546Z" transform="translate(-239.847 -207.838)" fill="currentColor" />
                                <path id="Path_400" data-name="Path 400" d="M-336.455,39.3c-.738,0-1.475,0-2.213,0a1.413,1.413,0,0,1-1.483-1.478q0-1.668,0-3.337a1.409,1.409,0,0,1,1.474-1.469q2.24,0,4.48,0a1.409,1.409,0,0,1,1.474,1.469q0,1.677,0,3.355a1.41,1.41,0,0,1-1.465,1.46C-334.944,39.3-335.7,39.3-336.455,39.3Zm.026-5.142h-2.2c-.3,0-.384.078-.384.375q0,1.624,0,3.248c0,.3.081.375.385.375h4.373c.3,0,.384-.079.384-.376q0-1.624,0-3.248c0-.3-.081-.375-.385-.375Z" transform="translate(-239.838 -0.005)" fill="currentColor" />
                                <path id="Path_401" data-name="Path 401" d="M-584.837,314.516c.744,0,1.487,0,2.231,0A1.411,1.411,0,0,1-581.129,316q0,1.66,0,3.319a1.412,1.412,0,0,1-1.48,1.481q-2.231,0-4.462,0a1.413,1.413,0,0,1-1.486-1.493q0-1.651,0-3.3a1.413,1.413,0,0,1,1.489-1.49Q-585.952,314.514-584.837,314.516Zm-.006,1.143h-2.231c-.244,0-.339.092-.34.33q0,1.669,0,3.337c0,.238.1.331.339.331h4.462c.249,0,.34-.094.34-.348q0-1.651,0-3.3c0-.261-.09-.349-.357-.349Z" transform="translate(-0.003 -271.796)" fill="currentColor" />
                            </g>
                        </svg>
                    </li>
                    <li class="dashview-button duration-300 cursor-pointer p-4 bg-white hover:bg-primary text-primary hover:text-white rounded rounded-l-none list-view-button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16.269" height="14" viewBox="0 0 16.269 14">
                            <g id="fi-rr-list" transform="translate(1.1 0.484)">
                                <path id="Path_395" data-name="Path 395" d="M6.6,5.449h9.68a.673.673,0,0,0,.6-.724.673.673,0,0,0-.6-.724H6.6a.673.673,0,0,0-.6.724A.673.673,0,0,0,6.6,5.449Z" transform="translate(-1.72 -3.28)" fill="currentColor" />
                                <path id="Path_396" data-name="Path 396" d="M16.284,11H6.6a.736.736,0,0,0,0,1.449h9.68a.736.736,0,0,0,0-1.449Z" transform="translate(-1.72 -5.209)" fill="currentColor" />
                                <path id="Path_397" data-name="Path 397" d="M16.284,18H6.6a.736.736,0,0,0,0,1.449h9.68a.736.736,0,0,0,0-1.449Z" transform="translate(-1.72 -7.137)" fill="currentColor" />
                                <circle id="Ellipse_36" data-name="Ellipse 36" cx="2" cy="2" r="2" transform="translate(-1.1 -0.484)" fill="currentColor" />
                                <circle id="Ellipse_37" data-name="Ellipse 37" cx="2" cy="2" r="2" transform="translate(-1.1 4.516)" fill="currentColor" />
                                <circle id="Ellipse_38" data-name="Ellipse 38" cx="2" cy="2" r="2" transform="translate(-1.1 9.516)" fill="currentColor" />
                            </g>
                        </svg>
                    </li>
                </ul>
            </div>
            <div class="lg:p-10 rounded-[5px] w-full md:h-[calc(100%-60px)]">
                <div class="flex flex-wrap -mx-4 grid-list-main">
                    <div class="w-full sm:w-1/4 p-4 grid-list-items duration-300">
                        <a href="<?php echo site_url('generators/add') ?>" class="w-full add-signbox h-48 rounded-[3px] bg-[#EDF1F8] text-center flex flex-col items-center justify-center p-2 gap-3">
                            <div class="p-2 bg-primary inline-block rounded"><svg xmlns="http://www.w3.org/2000/svg" width="11.679" height="11.679" viewBox="0 0 11.679 11.679">
                                    <path id="Icon_awesome-plus" data-name="Icon awesome-plus" d="M10.845,6.838H7.091V3.084a.834.834,0,0,0-.834-.834H5.423a.834.834,0,0,0-.834.834V6.838H.834A.834.834,0,0,0,0,7.673v.834a.834.834,0,0,0,.834.834H4.588V13.1a.834.834,0,0,0,.834.834h.834a.834.834,0,0,0,.834-.834V9.341h3.754a.834.834,0,0,0,.834-.834V7.673A.834.834,0,0,0,10.845,6.838Z" transform="translate(0 -2.25)" fill="#fff" />
                                </svg></div>
                            <p class="text-primary text-xs">Add Signature</p>
                        </a>
                    </div>
                    <div class="w-full sm:w-1/4 p-4 grid-list-items duration-300">
                        <a href="<?php echo site_url('custom-generator') ?>" class="w-full add-signbox h-48 rounded-[3px] bg-[#EDF1F8] text-center flex flex-col items-center justify-center p-2 gap-3">
                            <div class="p-2 bg-primary inline-block rounded"><svg xmlns="http://www.w3.org/2000/svg" width="11.679" height="11.679" viewBox="0 0 11.679 11.679">
                                    <path id="Icon_awesome-plus" data-name="Icon awesome-plus" d="M10.845,6.838H7.091V3.084a.834.834,0,0,0-.834-.834H5.423a.834.834,0,0,0-.834.834V6.838H.834A.834.834,0,0,0,0,7.673v.834a.834.834,0,0,0,.834.834H4.588V13.1a.834.834,0,0,0,.834.834h.834a.834.834,0,0,0,.834-.834V9.341h3.754a.834.834,0,0,0,.834-.834V7.673A.834.834,0,0,0,10.845,6.838Z" transform="translate(0 -2.25)" fill="#fff" />
                                </svg></div>
                            <p class="text-primary text-xs">Add Custom Signature</p>
                        </a>
                    </div>
                    <div class="list-wrap box-view">
                        <?php if ($this->session->flashdata('success')) { ?>
                            <div class="alert bg-success alert-styled-left bootstrap_alert">
                                <a class="close" data-dismiss="alert">×</a>
                                <strong><?php echo $this->session->flashdata('success') ?></strong>
                            </div>
                        <?php $this->session->set_flashdata('success', false);
                        } else if ($this->session->flashdata('error')) { ?>
                            <div class="alert bg-danger alert-styled-left bootstrap_alert">
                                <a class="close" data-dismiss="alert">×</a>
                                <strong><?php echo $this->session->flashdata('error') ?></strong>
                            </div>
                        <?php $this->session->set_flashdata('error', false);
                        } else {
                            echo validation_errors();
                        } ?>
                        <div class="bg-white p-10 rounded-[5px] w-full md:h-[calc(100%-60px)]">
                            <div class="flex flex-wrap -mx-4 grid-list-main" id="signature_list"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<div class="modal fade bs-example-modal-sm signature_view_popup" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" data-backdrop="static">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">x</button>
                <h4 class="modal-title" id="myModalLabel">View Signature</h4>
            </div>
            <div class="modal-body text-center" id="signature_view_popup_body">
            </div>
        </div>
    </div>
</div>
<div class="modal fade bs-example-modal-sm generator_link_popup" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" data-backdrop="static">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">x</button>
                <h4 class="modal-title" id="myModalLabel">Generator link</h4>
            </div>
            <div class="modal-body text-center">
                <div id="redirect_generator_link" style="word-wrap: break-word;"></div>
                <button class="com-btn btn" id="copy-button" data-clipboard-target="#redirect_generator_link">Copy</button>
            </div>
        </div>
    </div>
</div>



<script src="assets/js/clipboard.js"></script>
<script type="text/javascript">
    //-- Click event of toggle buttons
    $('.toggle-view').click(function() {
        $('.toggle-view').removeClass('active');
        $(this).addClass('active');
        var add_class = $(this).attr('data-id');
        if (add_class == 'lib-grid') {
            $('.lib-row').removeClass('lib-listing');
            $('.lib-row').addClass(add_class);
        } else {
            $('.lib-row').removeClass('lib-grid');
            $('.lib-row').addClass(add_class);
        }
    });
    (function() {
        new Clipboard('#copy-button');
    })();
    //-- document ready function
    $(document).ready(function() {
        render_signs();

        $('#signature_search').bind("keyup change", function() {
            render_signs();
        });
    });

    function render_signs() {
        $('.custom_loader').show();
        $.ajax({
            url: site_url + "/generator/ajax_load_generators",
            dataType: "json",
            type: "POST",
            data: {
                keyword: $('#signature_search').val()
            },
            success: function(data) {
                $('.custom_loader').hide();
                str = '';
                $.each(data, function(i, item) {
                    str += '<div class="list-col">\n\
                      <div class="list-block">\n\
                        <div class="list-disp">\n';
                    if (item.is_custom == 0) {
                        str += '<div class="w-full sm:w-1/2 p-4 grid-list-items duration-300">\n\
                                    <div class="w-full shadow-sm rounded overflow-hidden bg-white text-center relative h-48">\n\
                                    <a class="list-view-none relative after:absolute after:inset-0 after:bg-black after:bg-opacity-25 block" href="javascript:void(0)" onclick="view_sign(' + item.signature_id + ')">\n\
                                        <div class="list-img"><img class="object-contain" src="<?php echo base_url() . SIGNATURE_IMAGES ?>signature-' + item.signature_id + '.png" onerror="this.src=\'assets/images/sign.png\';"  alt="Video img"></div>\n\
                                        <div class="list-overlay"></div>\n\
                                    </a>\n\
                                    <div class="px-2 xl:px-5 py-2 bg-white absolute list-view-static inset-x-0 bottom-0 flex justify-between items-center">\n\
                                    <a href="javascript:void(0)" class="flex items-center gap-3">\n\
                                        <img class="w-10 h-10 rounded-full object-cover" src="<?php echo SIGNATURE_UPLOADS_LOGO ?>' + item.logo + '" alt=""onerror="this.src=\'assets/images/avatar.jpg\'" class="fix-img">\n\
                                        <div class="list-name"><h3>' + item.name + '</h3></div>\n\
                                    </a>\n\
                                    <div class="relative">\n\
                                        <svg id="fi-rr-menu-dots-vertical" class="cursor-pointer dashbord-editmenu" xmlns="http://www.w3.org/2000/svg" width="3" height="13" viewBox="0 0 3 13">\n\
                                        <circle id="Ellipse_40" data-name="Ellipse 40" cx="1.5" cy="1.5" r="1.5" fill="#202c39"/>\n\
                                        <circle id="Ellipse_41" data-name="Ellipse 41" cx="1.5" cy="1.5" r="1.5" transform="translate(0 5)" fill="#202c39"/>\n\
                                        <circle id="Ellipse_42" data-name="Ellipse 42" cx="1.5" cy="1.5" r="1.5" transform="translate(0 10)" fill="#202c39"/>\n\
                                        </svg>\n\
                                        <ul class="hidden dashbord-edititems text-xs absolute bottom-full right-full translate-x-4 -translate-y-3 min-w-[88px] bg-white shadow py-2 rounded" aria-labelledby="dropdownMenu1">\n\
                                        <li><a class="flex items-center gap-2 px-4 py-1 hover:bg-secondary hover:bg-opacity-20" href="<?php echo site_url() ?>edit_signature/' + item.id + '"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 10 10"><path id="fi-rr-pencil" d="M11.469.619A1.818,1.818,0,0,0,8.9.619L2.734,6.785A2.491,2.491,0,0,0,2,8.557V9.587a.5.5,0,0,0,.5.5H3.531A2.49,2.49,0,0,0,5.3,9.354l6.166-6.166a1.818,1.818,0,0,0,0-2.568ZM4.594,8.645a1.515,1.515,0,0,1-1.063.44H3V8.557a1.494,1.494,0,0,1,.441-1.063l4.2-4.2L8.8,4.447Zm6.165-6.166L9.5,3.736,8.35,2.585,9.607,1.328a.814.814,0,0,1,1.151,1.153Z" transform="translate(-2 -0.088)" fill="currentColor"/></svg> Edit</a></li>\n\
                                        <li><a class="flex items-center gap-2 px-4 py-1 hover:bg-secondary hover:bg-opacity-20" href="<?php echo site_url() ?>stats-report/' + item.id + '"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 10 10"><g id="Group_284" data-name="Group 284" transform="translate(0)"><path id="Path_414" data-name="Path 414" d="M-1608.081,2098.334h8.651a.91.91,0,0,1,.182.014.409.409,0,0,1,.331.428.416.416,0,0,1-.378.389c-.041,0-.082,0-.122,0h-9c-.344,0-.5-.155-.5-.5q0-4.509,0-9.018a.445.445,0,0,1,.224-.436.41.41,0,0,1,.595.268.871.871,0,0,1,.017.192q0,4.254,0,8.508Z" transform="translate(1608.916 -2089.169)" fill="#202c39"/><path id="Path_415" data-name="Path 415" d="M-1556.583,2162.868l2.489-3.45-.879.063c-.15.011-.3.026-.45.028a.4.4,0,0,1-.411-.348.382.382,0,0,1,.341-.429c.308-.035.619-.052.928-.075l1.239-.091c.057,0,.114-.008.17-.009a.4.4,0,0,1,.429.383q.084,1.083.167,2.165a.4.4,0,0,1-.292.441.4.4,0,0,1-.515-.337c-.025-.244-.041-.49-.061-.735-.014-.169-.027-.338-.043-.533-.042.056-.068.091-.094.126l-2.585,3.585a.417.417,0,0,1-.494.2.645.645,0,0,1-.214-.136c-.5-.462-1-.928-1.495-1.393l-.094-.085c-.027.035-.05.065-.072.1q-.721,1.02-1.443,2.039a.418.418,0,0,1-.567.171.385.385,0,0,1-.173-.517.956.956,0,0,1,.074-.115l1.737-2.455a.427.427,0,0,1,.713-.073l1.516,1.413Z" transform="translate(1562.08 -2156.632)" fill="#202c39"/></g></svg> Stats</a></li>\n\
                                        <li><a class="flex items-center gap-2 px-4 py-1 hover:bg-secondary hover:bg-opacity-20" href="<?php echo site_url() ?>dashboard/copy/' + item.id + '"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="13" viewBox="0 0 10 11"><path id="fi-rr-copy-alt" d="M7.5,9.167A2.406,2.406,0,0,0,10,6.875V2.861a1.747,1.747,0,0,0-.586-1.3L8.293.537A2.081,2.081,0,0,0,6.879,0H4.5A2.406,2.406,0,0,0,2,2.292V6.875A2.406,2.406,0,0,0,4.5,9.167ZM3,6.875V2.292A1.442,1.442,0,0,1,4.5.917S6.96.923,7,.928v.906A.961.961,0,0,0,8,2.75h.988C8.993,2.787,9,6.875,9,6.875A1.442,1.442,0,0,1,7.5,8.25h-3A1.442,1.442,0,0,1,3,6.875Zm9-3.208V8.708A2.406,2.406,0,0,1,9.5,11H5a.46.46,0,1,1,0-.917H9.5A1.442,1.442,0,0,0,11,8.708V3.667a.5.5,0,0,1,1,0Z" transform="translate(-2 0)" fill="#202c39"/></svg> Copy</a></li>\n\
                                        <li><a class="flex items-center gap-2 px-4 py-1 hover:bg-secondary hover:bg-opacity-20" href="<?php echo site_url() ?>install_sign/' + item.id + '"><svg id="Group_283" data-name="Group 283" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 10 10"><path id="Path_412" data-name="Path 412" d="M454.849,1716.114l-.024-.008-.075-.026a.58.58,0,0,1-.366-.626.565.565,0,0,1,.529-.5h8.77c.42,0,.546.087.695.49v.177l-.016.049a1.04,1.04,0,0,1-.044.12.586.586,0,0,1-.407.321Z" transform="translate(-454.379 -1706.114)" fill="#202c39"/><path id="Path_413" data-name="Path 413" d="M539.945,1387.427a.546.546,0,0,1-.4-.194c-.484-.52-.976-1.051-1.452-1.563l-.685-.739a.59.59,0,0,1-.151-.59.517.517,0,0,1,.394-.4.561.561,0,0,1,.131-.016.516.516,0,0,1,.385.186l.465.5.552.6a.539.539,0,0,1,.039.052l.022.031.035.047.129-.052v-1.477q0-1.813,0-3.627a.559.559,0,0,1,.538-.61h.01a.554.554,0,0,1,.524.549c0,.058,0,.118,0,.176,0,.023,0,.045,0,.068v4.9l.126.093.044-.066.021-.033a.33.33,0,0,1,.033-.048l.027-.029c.328-.356.668-.723,1-1.082a.5.5,0,0,1,.37-.175.562.562,0,0,1,.164.026.522.522,0,0,1,.371.424.6.6,0,0,1-.164.563l-1.245,1.34-.485.523-.122.132c-.091.1-.185.2-.278.3A.559.559,0,0,1,539.945,1387.427Z" transform="translate(-534.946 -1379.569)" fill="#202c39"/></svg> Download</a></li>\n\
                                        <li><a class="flex items-center gap-2 px-4 py-1 hover:bg-secondary hover:bg-opacity-20" href="<?php echo site_url() ?>user/dashboard/delete/' + item.id + '" onclick="return confirm(\'Are you sure you want to delete this signature?\')"><svg id="Group_283" data-name="Group 283" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 10 10"><path id="Path_412" data-name="Path 412" d="M454.849,1716.114l-.024-.008-.075-.026a.58.58,0,0,1-.366-.626.565.565,0,0,1,.529-.5h8.77c.42,0,.546.087.695.49v.177l-.016.049a1.04,1.04,0,0,1-.044.12.586.586,0,0,1-.407.321Z" transform="translate(-454.379 -1706.114)" fill="#202c39"/><path id="Path_413" data-name="Path 413" d="M539.945,1387.427a.546.546,0,0,1-.4-.194c-.484-.52-.976-1.051-1.452-1.563l-.685-.739a.59.59,0,0,1-.151-.59.517.517,0,0,1,.394-.4.561.561,0,0,1,.131-.016.516.516,0,0,1,.385.186l.465.5.552.6a.539.539,0,0,1,.039.052l.022.031.035.047.129-.052v-1.477q0-1.813,0-3.627a.559.559,0,0,1,.538-.61h.01a.554.554,0,0,1,.524.549c0,.058,0,.118,0,.176,0,.023,0,.045,0,.068v4.9l.126.093.044-.066.021-.033a.33.33,0,0,1,.033-.048l.027-.029c.328-.356.668-.723,1-1.082a.5.5,0,0,1,.37-.175.562.562,0,0,1,.164.026.522.522,0,0,1,.371.424.6.6,0,0,1-.164.563l-1.245,1.34-.485.523-.122.132c-.091.1-.185.2-.278.3A.559.559,0,0,1,539.945,1387.427Z" transform="translate(-534.946 -1379.569)" fill="#202c39"/></svg> Delete</a></li>\n\
                                        <span class="block border-8 absolute -bottom-4 right-2 w-2 border-gray-100 border-l-transparent border-r-transparent border-b-transparent"></span>\n\
                                        </ul>\n\
                                    </div>\n\
                                    </div>\n\
                                </div>';
                        // str += '<a href="javascript:void(0)" onclick="view_sign(' + item.signature_id + ')">\n\
                        //   <div class="list-img"><img class="" src="<?php echo base_url() . SIGNATURE_IMAGES ?>signature-' + item.signature_id + '.png" onerror="this.src=\'assets/images/sign.png\';"  alt="Video img"></div>\n\
                        //   <div class="list-overlay"></div>\n\
                        //   </a>\n\
                        //   <div class="dropdown share-drop">\n\
                        //     <button class="dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">\n\
                        //       <i class="fa fa-cog" aria-hidden="true"></i>\n\
                        //     </button>\n\
                        //     <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">\n\
                        //       <li><a href="javascript:void(0)" onclick="view_sign(' + item.signature_id + ')"><i class="fa fa-eye" aria-hidden="true"></i> View</a></li>\n\
                        //       <li><a href="<?php echo site_url() ?>generators/edit/' + item.id + '"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a></li>\n\
                        //       <li><a href="share-generator/' + item.id + '"><i class="fa fa-line-chart" aria-hidden="true"></i> Share Generator</a></li>\n\
                        //       <li><a href="<?php echo site_url('generators/view_signatures') ?>/' + item.id + '"><i class="fa fa-address-card-o" aria-hidden="true"></i> View Signatures</a></li>\n\
                        //       <li><a href="<?php echo site_url() ?>user/generators/download/' + item.id + '"><i class="fa fa-envelope-o" aria-hidden="true"></i> Download</a></li>\n\
                        //       <li><a href="<?php echo site_url() ?>user/generators/delete/' + item.id + '" onclick="return confirm(\'Are you sure you want to delete this generator?\')"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</a></li>\n\
                        //     </ul>\n\
                        //   </div>';
                    } else {
                        str += '<div class="w-full sm:w-1/2 p-4 grid-list-items duration-300">\n\
                        <div class="w-full shadow-sm rounded overflow-hidden bg-white text-center relative h-48">\n\
                        <a class="list-view-none relative after:absolute after:inset-0 after:bg-black after:bg-opacity-25 block" href="javascript:void(0)" onclick="view_sign(' + item.signature_id + ')">\n\
                          <div class="list-img"><img class="" src="<?php echo base_url() . CUSTOM_SIGNATURE_IMAGES ?>' + item.user_id + '/' + item.signature_id + '.png" onerror="this.src=\'assets/images/sign.png\';"  alt="Video img"></div>\n\
                          <div class="list-overlay"></div>\n\
                        </a>\n\
                        <div class="relative">\n\
                            <svg id="fi-rr-menu-dots-vertical" class="cursor-pointer dashbord-editmenu" xmlns="http://www.w3.org/2000/svg" width="3" height="13" viewBox="0 0 3 13">\n\
                                <circle id="Ellipse_40" data-name="Ellipse 40" cx="1.5" cy="1.5" r="1.5" fill="#202c39"/>\n\
                                <circle id="Ellipse_41" data-name="Ellipse 41" cx="1.5" cy="1.5" r="1.5" transform="translate(0 5)" fill="#202c39"/>\n\
                                <circle id="Ellipse_42" data-name="Ellipse 42" cx="1.5" cy="1.5" r="1.5" transform="translate(0 10)" fill="#202c39"/>\n\
                            </svg>\n\
                            <ul class="hidden dashbord-edititems text-xs absolute bottom-full right-full translate-x-4 -translate-y-3 min-w-[88px] bg-white shadow py-2 rounded" aria-labelledby="dropdownMenu1">\n\
                                <li><a class="flex items-center gap-2 px-4 py-1 hover:bg-secondary hover:bg-opacity-20" href="<?php echo site_url() ?>edit_signature/' + item.id + '"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 10 10"><path id="fi-rr-pencil" d="M11.469.619A1.818,1.818,0,0,0,8.9.619L2.734,6.785A2.491,2.491,0,0,0,2,8.557V9.587a.5.5,0,0,0,.5.5H3.531A2.49,2.49,0,0,0,5.3,9.354l6.166-6.166a1.818,1.818,0,0,0,0-2.568ZM4.594,8.645a1.515,1.515,0,0,1-1.063.44H3V8.557a1.494,1.494,0,0,1,.441-1.063l4.2-4.2L8.8,4.447Zm6.165-6.166L9.5,3.736,8.35,2.585,9.607,1.328a.814.814,0,0,1,1.151,1.153Z" transform="translate(-2 -0.088)" fill="currentColor"/></svg> Edit</a></li>\n\
                                <li><a class="flex items-center gap-2 px-4 py-1 hover:bg-secondary hover:bg-opacity-20" href="<?php echo site_url() ?>stats-report/' + item.id + '"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 10 10"><g id="Group_284" data-name="Group 284" transform="translate(0)"><path id="Path_414" data-name="Path 414" d="M-1608.081,2098.334h8.651a.91.91,0,0,1,.182.014.409.409,0,0,1,.331.428.416.416,0,0,1-.378.389c-.041,0-.082,0-.122,0h-9c-.344,0-.5-.155-.5-.5q0-4.509,0-9.018a.445.445,0,0,1,.224-.436.41.41,0,0,1,.595.268.871.871,0,0,1,.017.192q0,4.254,0,8.508Z" transform="translate(1608.916 -2089.169)" fill="#202c39"/><path id="Path_415" data-name="Path 415" d="M-1556.583,2162.868l2.489-3.45-.879.063c-.15.011-.3.026-.45.028a.4.4,0,0,1-.411-.348.382.382,0,0,1,.341-.429c.308-.035.619-.052.928-.075l1.239-.091c.057,0,.114-.008.17-.009a.4.4,0,0,1,.429.383q.084,1.083.167,2.165a.4.4,0,0,1-.292.441.4.4,0,0,1-.515-.337c-.025-.244-.041-.49-.061-.735-.014-.169-.027-.338-.043-.533-.042.056-.068.091-.094.126l-2.585,3.585a.417.417,0,0,1-.494.2.645.645,0,0,1-.214-.136c-.5-.462-1-.928-1.495-1.393l-.094-.085c-.027.035-.05.065-.072.1q-.721,1.02-1.443,2.039a.418.418,0,0,1-.567.171.385.385,0,0,1-.173-.517.956.956,0,0,1,.074-.115l1.737-2.455a.427.427,0,0,1,.713-.073l1.516,1.413Z" transform="translate(1562.08 -2156.632)" fill="#202c39"/></g></svg> Stats</a></li>\n\
                                <li><a class="flex items-center gap-2 px-4 py-1 hover:bg-secondary hover:bg-opacity-20" href="<?php echo site_url() ?>dashboard/copy/' + item.id + '"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="13" viewBox="0 0 10 11"><path id="fi-rr-copy-alt" d="M7.5,9.167A2.406,2.406,0,0,0,10,6.875V2.861a1.747,1.747,0,0,0-.586-1.3L8.293.537A2.081,2.081,0,0,0,6.879,0H4.5A2.406,2.406,0,0,0,2,2.292V6.875A2.406,2.406,0,0,0,4.5,9.167ZM3,6.875V2.292A1.442,1.442,0,0,1,4.5.917S6.96.923,7,.928v.906A.961.961,0,0,0,8,2.75h.988C8.993,2.787,9,6.875,9,6.875A1.442,1.442,0,0,1,7.5,8.25h-3A1.442,1.442,0,0,1,3,6.875Zm9-3.208V8.708A2.406,2.406,0,0,1,9.5,11H5a.46.46,0,1,1,0-.917H9.5A1.442,1.442,0,0,0,11,8.708V3.667a.5.5,0,0,1,1,0Z" transform="translate(-2 0)" fill="#202c39"/></svg> Copy</a></li>\n\
                                <li><a class="flex items-center gap-2 px-4 py-1 hover:bg-secondary hover:bg-opacity-20" href="<?php echo site_url() ?>install_sign/' + item.id + '"><svg id="Group_283" data-name="Group 283" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 10 10"><path id="Path_412" data-name="Path 412" d="M454.849,1716.114l-.024-.008-.075-.026a.58.58,0,0,1-.366-.626.565.565,0,0,1,.529-.5h8.77c.42,0,.546.087.695.49v.177l-.016.049a1.04,1.04,0,0,1-.044.12.586.586,0,0,1-.407.321Z" transform="translate(-454.379 -1706.114)" fill="#202c39"/><path id="Path_413" data-name="Path 413" d="M539.945,1387.427a.546.546,0,0,1-.4-.194c-.484-.52-.976-1.051-1.452-1.563l-.685-.739a.59.59,0,0,1-.151-.59.517.517,0,0,1,.394-.4.561.561,0,0,1,.131-.016.516.516,0,0,1,.385.186l.465.5.552.6a.539.539,0,0,1,.039.052l.022.031.035.047.129-.052v-1.477q0-1.813,0-3.627a.559.559,0,0,1,.538-.61h.01a.554.554,0,0,1,.524.549c0,.058,0,.118,0,.176,0,.023,0,.045,0,.068v4.9l.126.093.044-.066.021-.033a.33.33,0,0,1,.033-.048l.027-.029c.328-.356.668-.723,1-1.082a.5.5,0,0,1,.37-.175.562.562,0,0,1,.164.026.522.522,0,0,1,.371.424.6.6,0,0,1-.164.563l-1.245,1.34-.485.523-.122.132c-.091.1-.185.2-.278.3A.559.559,0,0,1,539.945,1387.427Z" transform="translate(-534.946 -1379.569)" fill="#202c39"/></svg> Download</a></li>\n\
                                <li><a class="flex items-center gap-2 px-4 py-1 hover:bg-secondary hover:bg-opacity-20" href="<?php echo site_url() ?>user/dashboard/delete/' + item.id + '" onclick="return confirm(\'Are you sure you want to delete this signature?\')"><svg id="Group_283" data-name="Group 283" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 10 10"><path id="Path_412" data-name="Path 412" d="M454.849,1716.114l-.024-.008-.075-.026a.58.58,0,0,1-.366-.626.565.565,0,0,1,.529-.5h8.77c.42,0,.546.087.695.49v.177l-.016.049a1.04,1.04,0,0,1-.044.12.586.586,0,0,1-.407.321Z" transform="translate(-454.379 -1706.114)" fill="#202c39"/><path id="Path_413" data-name="Path 413" d="M539.945,1387.427a.546.546,0,0,1-.4-.194c-.484-.52-.976-1.051-1.452-1.563l-.685-.739a.59.59,0,0,1-.151-.59.517.517,0,0,1,.394-.4.561.561,0,0,1,.131-.016.516.516,0,0,1,.385.186l.465.5.552.6a.539.539,0,0,1,.039.052l.022.031.035.047.129-.052v-1.477q0-1.813,0-3.627a.559.559,0,0,1,.538-.61h.01a.554.554,0,0,1,.524.549c0,.058,0,.118,0,.176,0,.023,0,.045,0,.068v4.9l.126.093.044-.066.021-.033a.33.33,0,0,1,.033-.048l.027-.029c.328-.356.668-.723,1-1.082a.5.5,0,0,1,.37-.175.562.562,0,0,1,.164.026.522.522,0,0,1,.371.424.6.6,0,0,1-.164.563l-1.245,1.34-.485.523-.122.132c-.091.1-.185.2-.278.3A.559.559,0,0,1,539.945,1387.427Z" transform="translate(-534.946 -1379.569)" fill="#202c39"/></svg> Delete</a></li>\n\
                                <span class="block border-8 absolute -bottom-4 right-2 w-2 border-gray-100 border-l-transparent border-r-transparent border-b-transparent"></span>\n\
                            </ul>\n\
                        </div>\n\
                        </div>\n\
                        </div>';
                    }
                    // str += '<div class="list-name"><h3>' + item.name + '</h3></div>\n\
                    //       <div class="share-pic">';

                    // if (item.logo != '') {
                    //     str += '<img src="<?php echo SIGNATURE_UPLOADS_LOGO ?>' + item.logo + '" alt="" onerror="this.src=\'assets/images/avatar.jpg\'" class="fix-img">';
                    // } else {
                    //     str += '<img src="assets/images/avatar.jpg" alt="" class="fix-img">';
                    // }

                    str += '</div></div>\n\
                      </div>\n\
                    </div>';
                });
                $('#signature_list').html(str);

                $(".fix-img").each(function() {

                    var img = $(this);
                    var image_heightA = img.height();
                    var image_widthA = img.width();
                    var parent_image_widthA = img.parent().width();
                    var parent_image_heightA = img.parent().height();
                    //if(width <= height)

                    if (image_heightA > parent_image_heightA && image_widthA > parent_image_widthA) {

                        img.css('width', parent_image_widthA + 'px');
                        var tem_image_heightA = img.height();

                        if (tem_image_heightA > parent_image_heightA) {
                            img.css('width', '100%');
                        } else {
                            img.css('width', 'auto');
                            img.css('height', '100%');
                        }
                    } else {
                        img.css('width', parent_image_widthA + 'px');
                        var tem_image_heightA = img.height();

                        if (tem_image_heightA > parent_image_heightA) {
                            img.css('width', '100%');
                        } else {
                            img.css('width', 'auto');
                            img.css('height', '100%');
                        }
                    }
                });
            }

        });

    }

    function view_sign(id) {
        $('.custom_loader').show();
        $.ajax({
            url: site_url + "dashboard/ajax_get_signature",
            type: "POST",
            data: {
                id: id
            },
            success: function(data) {
                $('.custom_loader').hide();
                $('#signature_view_popup_body').html(data);
                $('.signature_view_popup').modal();
            }
        });
    }

    function copy_link(id) {
        $('.custom_loader').show();
        $.ajax({
            url: site_url + "user/generators/ajax_get_url",
            type: "POST",
            data: {
                id: id
            },
            success: function(data) {
                $('.custom_loader').hide();
                $('#redirect_generator_link').html(data);
                $(".generator_link_popup").modal();
            }
        });
    }
</script>
<script type="text/javascript">
    $(window).load(function() {
        $(".fix-img").each(function() {

            var img = $(this);
            var image_heightA = img.height();
            var image_widthA = img.width();
            var parent_image_widthA = img.parent().width();
            var parent_image_heightA = img.parent().height();
            //if(width <= height)

            if (image_heightA > parent_image_heightA && image_widthA > parent_image_widthA) {

                img.css('width', parent_image_widthA + 'px');
                var tem_image_heightA = img.height();

                if (tem_image_heightA > parent_image_heightA) {
                    img.css('width', '100%');
                } else {
                    img.css('width', 'auto');
                    img.css('height', '100%');
                }
            } else {
                img.css('width', parent_image_widthA + 'px');
                var tem_image_heightA = img.height();

                if (tem_image_heightA > parent_image_heightA) {
                    img.css('width', '100%');
                } else {
                    img.css('width', 'auto');
                    img.css('height', '100%');
                }
            }
        });
    });
</script>