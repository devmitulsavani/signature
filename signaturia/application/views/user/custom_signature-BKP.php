<style>
    body.log {
        margin-left: 0;
    }

    .custom .sidebar {
        width: 60px;
    }

    .custom .sidebar .navbar-nav li a {
        padding: 0;
        line-height: 50px;
        text-align: center;
    }

    .custom .sidebar .navbar-nav li a span {
        white-space: nowrap;
        position: absolute;
        right: 100%;
        left: inherit;
        top: 0;
        overflow: hidden;
        -webkit-transition: right, left 0.3s linear;
        -o-transition: right, left 0.3s linear;
        transition: right, left 0.3s linear;
    }

    .custom .sidebar .navbar-nav li a:hover,
    .custom .sidebar .navbar-nav li a:focus {
        background: #edf8e7;
    }

    .custom .sidebar .navbar-nav li a:hover span,
    .custom .sidebar .navbar-nav li a:focus span {
        width: auto;
        background: #edf8e7;
        padding-right: 30px;
        left: 100%;
        right: inherit;
    }

    .custom .sidebar .navbar-nav .active a,
    .custom .sidebar .navbar-nav .active a:hover,
    .custom .sidebar .navbar-nav .active a:focus {
        background: #dcf0d1;
    }

    .custom .sidebar .navbar-nav .active a span,
    .custom .sidebar .navbar-nav .active a:hover span,
    .custom .sidebar .navbar-nav .active a:focus span {
        background: #dcf0d1;
    }

    .custom .sidebar .navbar-nav li a i.fa {
        position: inherit;
        left: inherit;
        top: inherit;
    }

    .custom .sidebar .navbar-nav .in-btn {
        padding: 0 5px;
    }

    .custom .sidebar .navbar-nav .in-btn a:hover {
        background: #52b51b;
        border-radius: 3px 0 0 3px;
    }

    .custom .sidebar .navbar-nav .in-btn a:hover span {
        background: #52b51b;
    }

    .custom .dash-cont {
        margin-left: 60px;
    }

    .custom-wrap {
        height: calc(100vh - 71px);
        position: relative;
    }

    .custom-wrap .custom-tools {
        height: calc(100vh - 71px);
        overflow: auto;
        position: absolute;
        left: 0;
        top: 0;
        width: 300px;
        background: #eee;
        border-right: solid 1px #ddd;
    }

    .custom-tools::-webkit-scrollbar {
        display: none
    }



    .custom-wrap .custom-dash {
        height: calc(100vh - 71px);
        margin-left: 300px;
    }

    .custom-wrap .custom-tools {
        height: calc(100vh - 71px);
        overflow-y: hidden;
        position: absolute;
        left: 0;
        top: 0;
        width: 300px;
        background: #eee;
        border-right: solid 1px #ddd;
        overflow-x: hidden;
    }

    .custom * {
        -webkit-transition: all 0s ease;
        -o-transition: all 0s ease;
        transition: all 0s ease;
    }
</style>
<?php
if ($this->session->flashdata('success')) {
?>
    <div class="alert bg-success alert-styled-left bootstrap_alert">
        <a class="close" data-dismiss="alert">×</a>
        <strong><?php echo $this->session->flashdata('success') ?></strong>
    </div>
<?php
    $this->session->set_flashdata('success', false);
} else if ($this->session->flashdata('error')) {
?>
    <div class="alert bg-danger alert-styled-left bootstrap_alert">
        <a class="close" data-dismiss="alert">×</a>
        <strong><?php echo $this->session->flashdata('error') ?></strong>
    </div>
<?php
    $this->session->set_flashdata('error', false);
}
if (isset($my_logo_validation)) {
?>
    <div class="alert bg-danger alert-styled-left bootstrap_alert">
        <a class="close" data-dismiss="alert">×</a>
        <strong><?php echo $my_logo_validation ?></strong>
    </div>
<?php
}
if (isset($signature_banner_validation)) {
?>
    <div class="alert bg-danger alert-styled-left bootstrap_alert">
        <a class="close" data-dismiss="alert">×</a>
        <strong><?php echo $signature_banner_validation ?></strong>
    </div><?php
        }
            ?>
<link rel="stylesheet" href="assets/drag_drop/default.min.css">
<link rel="stylesheet" href="assets/drag_drop/theme.css">
<link rel="stylesheet" type="text/css" href="assets/drag_drop/bootstrap-colorselector.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="assets/drag_drop/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/ace/1.2.0/min/ace.js"></script>
<script src="//tinymce.cachefly.net/4.2/tinymce.min.js"></script>
<script src="https://code.jquery.com/ui/1.10.2/jquery-ui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js"></script>
<script src="assets/drag_drop/bootstrap-colorselector.js"></script>
<script type="text/javascript">
    var path = '';
</script>
<script src="assets/drag_drop/app.js"></script>
<style>
    .lyrow {
        margin-bottom: 10px;
    }
</style>

<div class="custom-wrap">
    <div class="custom-tools">
        <div class="preview-wrap" id="signature_preview">
            <div class="preview-wrap">
                <div class="sidebar-nav" style="float:left">
                    <ul class="nav nav-list ">
                        <li class="nav-header"> <i class="fa fa fa-th"> </i>&nbsp; Grid System </li>
                        <li class="rows" id="estRows">
                            <div class="lyrow"> <a href="#close" class="remove btn btn-danger btn-xs"><i class="glyphicon-remove glyphicon"></i></a> <a class="drag btn btn-default btn-xs"><i class="glyphicon glyphicon-move"></i></a> <a href="#" class="btn btn-info btn-xs clone"><i class="fa fa-clone"></i></a>
                                <div class="preview">
                                    <input type="text" value="12" class="form-control">
                                </div>
                                <div class="view">


                                    <table width="100%">
                                        <tr>
                                            <td class="row clearfix col-md-12">
                                                <div class="column"></div>
                                            </td>
                                        </tr>
                                    </table>


                                </div>
                            </div>
                            <div class="lyrow"> <a href="#close" class="remove btn btn-danger btn-xs"><i class="glyphicon-remove glyphicon"></i></a> <a class="drag btn btn-default btn-xs"><i class="glyphicon glyphicon-move"></i></a> <a href="#" class="btn btn-info btn-xs clone"><i class="fa fa-clone"></i></a>
                                <div class="preview">
                                    <input type="text" value="6 6" class="form-control">
                                </div>
                                <div class="view">

                                    <table width="100%">

                                        <tr>
                                            <td class="row clearfix col-md-6">
                                                <div class="column"></div>
                                            </td>
                                            <td class="row clearfix col-md-6">
                                                <div class="column"></div>
                                            </td>
                                        </tr>

                                    </table>

                                </div>
                            </div>
                            <div class="lyrow"> <a href="#close" class="remove btn btn-danger btn-xs"><i class="glyphicon-remove glyphicon"></i></a> <a class="drag btn btn-default btn-xs"><i class="glyphicon glyphicon-move"></i></a> <a href="#" class="btn btn-info btn-xs clone"><i class="fa fa-clone"></i></a>
                                <div class="preview">
                                    <input type="text" value="8 4" class="form-control">
                                </div>
                                <div class="view">
                                    <table width="100%">

                                        <tr>
                                            <td class="row clearfix col-md-8">
                                                <div class=" column"></div>
                                            </td>
                                            <td class="row clearfix col-md-4">
                                                <div class=" column"></div>
                                            </td>
                                        </tr>

                                    </table>
                                    <br>
                                </div>
                            </div>
                            <div class="lyrow"> <a href="#close" class="remove btn btn-danger btn-xs"><i class="glyphicon-remove glyphicon"></i></a> <a class="drag btn btn-default btn-xs"><i class="glyphicon glyphicon-move"></i></a> <a href="#" class="btn btn-info btn-xs clone"><i class="fa fa-clone"></i></a>
                                <div class="preview">
                                    <input type="text" value="4 8" class="form-control">
                                </div>
                                <div class="view">
                                    <table width="100%">

                                        <tr>
                                            <td class="row clearfix col-md-4">
                                                <div class=" column"></div>
                                            </td>
                                            <td class="row clearfix col-md-8">
                                                <div class=" column"></div>
                                            </td>
                                        </tr>

                                    </table>
                                    <br>
                                </div>
                            </div>
                            <div class="lyrow"> <a href="#close" class="remove btn btn-danger btn-xs"><i class="glyphicon-remove glyphicon"></i></a> <a class="drag btn btn-default btn-xs"><i class="glyphicon glyphicon-move"></i></a> <a href="#" class="btn btn-info btn-xs clone"><i class="fa fa-clone"></i></a>
                                <div class="preview">
                                    <input type="text" value="3 9" class="form-control">
                                </div>
                                <div class="view">
                                    <table width="100%">

                                        <tr>
                                            <td class="row clearfix col-md-3">
                                                <div class=" column"></div>
                                            </td>
                                            <td class="row clearfix col-md-9">
                                                <div class=" column"></div>
                                            </td>
                                        </tr>

                                    </table>
                                    <br>
                                </div>
                            </div>
                            <div class="lyrow"> <a href="#close" class="remove btn btn-danger btn-xs"><i class="glyphicon-remove glyphicon"></i></a> <a class="drag btn btn-default btn-xs"><i class="glyphicon glyphicon-move"></i></a> <a href="#" class="btn btn-info btn-xs clone"><i class="fa fa-clone"></i></a>
                                <div class="preview">
                                    <input type="text" value="9 3" class="form-control">
                                </div>
                                <div class="view">
                                    <table width="100%">

                                        <tr>
                                            <td class="row clearfix col-md-9">
                                                <div class=" column"></div>
                                            </td>
                                            <td class="row clearfix col-md-3">
                                                <div class=" column"></div>
                                            </td>

                                        </tr>

                                    </table>
                                    <br>
                                </div>
                            </div>
                            <div class="lyrow"> <a href="#close" class="remove btn btn-danger btn-xs"><i class="glyphicon-remove glyphicon"></i></a> <a class="drag btn btn-default btn-xs"><i class="glyphicon glyphicon-move"></i></a> <a href="#" class="btn btn-info btn-xs clone"><i class="fa fa-clone"></i></a>
                                <div class="preview">
                                    <input type="text" value="4 4 4" class="form-control">
                                </div>
                                <div class="view">
                                    <table width="100%">

                                        <tr>
                                            <td class="row clearfix col-md-4">
                                                <div class=" column"></div>
                                            </td>
                                            <td class="row clearfix col-md-4">
                                                <div class=" column"></div>
                                            </td>
                                            <td class="row clearfix col-md-4">
                                                <div class=" column"></div>
                                            </td>

                                        </tr>

                                    </table>
                                    <br>
                                </div>
                            </div>
                            <div class="lyrow"> <a href="#close" class="remove btn btn-danger btn-xs"><i class="glyphicon-remove glyphicon"></i></a> <a class="drag btn btn-default btn-xs"><i class="glyphicon glyphicon-move"></i></a> <a href="#" class="btn btn-info btn-xs clone"><i class="fa fa-clone"></i></a>
                                <div class="preview">
                                    <input type="text" value="3 3 3 3" class="form-control">
                                </div>
                                <div class="view">
                                    <table width="100%">

                                        <tr>
                                            <td class="row clearfix col-md-3">
                                                <div class=" column"></div>
                                            </td>
                                            <td class="row clearfix col-md-3">
                                                <div class=" column"></div>
                                            </td>
                                            <td class="row clearfix col-md-3">
                                                <div class=" column"></div>
                                            </td>
                                            <td class="row clearfix col-md-3">
                                                <div class=" column"></div>
                                            </td>

                                        </tr>

                                    </table>
                                    <br>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <br>
                    <ul class="nav nav-list">
                        <li class="nav-header"><i class="fa fa-html5"></i>&nbsp; Html Elements </li>
                        <li class="boxes" id="elmBase">
                            <!-- <div class="box box-element" data-type="header"> <a href="#close" class="remove btn btn-danger btn-xs"><i class="glyphicon glyphicon-remove"></i></a> <a class="drag btn btn-default btn-xs"><i class="glyphicon glyphicon-move"></i></a> <span class="configuration"> <a class="btn btn-xs btn-warning settings"  href="#" ><i class="fa fa-gear"></i></a> </span> <div class="preview"> <i class="fa fa-header fa-2x"></i> <div class="element-desc">header</div> </div> <div class="view"> <h2>HEADER TITLE</h2> </div> </div> -->
                            <div class="box box-element" data-type="paragraph">
                                <a href="#close" class="remove btn btn-danger btn-xs"><i class="glyphicon glyphicon-remove"></i></a> <a class="drag btn btn-default btn-xs"><i class="glyphicon glyphicon-move"></i></a> <span class="configuration"> <a class="btn btn-xs btn-warning settings" href="#"><i class="fa fa-gear"></i></a> </span>
                                <div class="preview"> <i class="fa fa-font fa-2x"></i>
                                    <div class="element-desc">Paragraph</div>
                                </div>
                                <div class="view">
                                    <p>Click me to edit</p>
                                </div>
                            </div>
                            <div class="box box-element" data-type="image"> <a href="#close" class="remove btn btn-danger btn-xs"><i class="glyphicon glyphicon-remove"></i></a> <a class="drag btn btn-default btn-xs"><i class="glyphicon glyphicon-move"></i></a> <span class="configuration"> <a class="btn btn-xs btn-warning settings" href="#"><i class="fa fa-gear"></i></a> </span>
                                <div class="preview"> <i class="fa fa-picture-o fa-2x"></i>
                                    <div class="element-desc">Image</div>
                                </div>
                                <div class="view"> <img src="http://placehold.it/350x150" class="img-responsive" title="default title" /> </div>
                            </div>
                            <div class="box box-element" data-type="button"> <a href="#close" class="remove btn btn-danger btn-xs"><i class="glyphicon glyphicon-remove"></i></a> <a class="drag btn btn-default btn-xs"><i class="glyphicon glyphicon-move"></i></a> <span class="configuration"> <a class="btn btn-xs btn-warning settings" href="#"><i class="fa fa-gear"></i></a> </span>
                                <div class="preview"> <i class="fa  fa-hand-pointer-o fa-2x"></i>
                                    <div class="element-desc">Button</div>
                                </div>
                                <div class="view"> <a class="btn btn-default" href="#">Click Me !</a> </div>
                            </div>
                            <input type='hidden' value='<?php echo base_url(); ?>' id='base_url' />
                            <div class="box box-element" data-type="social"> <a href="#close" class="remove btn btn-danger btn-xs"><i class="glyphicon glyphicon-remove"></i></a> <a class="drag btn btn-default btn-xs"><i class="glyphicon glyphicon-move"></i></a> <span class="configuration"> <a class="btn btn-xs btn-warning settings" href="#"><i class="fa fa-gear"></i></a> </span>
                                <div class="preview"> <i class="fa  fa-hand-pointer-o fa-2x"></i>
                                    <div class="element-desc">Social</div>
                                </div>
                                <div class="view social_wrapper" data-icon='icon1' data-set='icons_set_1'>
                                    <a href="" class="social_image social_facebook" data-name='facebook' target="_blank"><img id='social_img_facebook' data-name="Facebook" src="<?php echo base_url(); ?>assets/images/social/Facebook.png" style="width: 40px;" /></a>
                                    <a href="" class="social_image social_youtube" data-name='youtube' target="_blank"><img id='social_img_youtube' data-name="Youtube" src="<?php echo base_url(); ?>assets/images/social/YouTube.png" style="width: 40px;" /></a>
                                    <a href="" class="social_image social_twitter" data-name='twitter' target="_blank"><img id='social_img_twitter' data-name="Twitter" src="<?php echo base_url(); ?>assets/images/social/Twitter.png" style="width: 40px;" /></a>
                                    <a href="" class="social_image social_google" data-name='google' target="_blank"><img id='social_img_google' data-name="Google+" src="<?php echo base_url(); ?>assets/images/social/Google+.png" style="width: 40px;" /></a>
                                    <a href="" class="social_image social_blogger" data-name='blogger' target="_blank"><img id='social_img_blogger' data-name="Blogger" src="<?php echo base_url(); ?>assets/images/social/Blogger.png" style="width: 40px;" /></a>
                                </div>
                            </div>
                            <div class="box box-element" data-type="appstore"> <a href="#close" class="remove btn btn-danger btn-xs"><i class="glyphicon glyphicon-remove"></i></a> <a class="drag btn btn-default btn-xs"><i class="glyphicon glyphicon-move"></i></a> <span class="configuration"> <a class="btn btn-xs btn-warning settings" href="#"><i class="fa fa-gear"></i></a> </span>
                                <div class="preview"> <i class="fa  fa-hand-pointer-o fa-2x"></i>
                                    <div class="element-desc">App Store</div>
                                </div>
                                <div class="view media_wrapper">
                                    <a class="appstore signature_apple_app_store_link-target sig-hide media_apple" style="text-decoration:none;" href="#" data-name='apple' target="_blank">
                                        <img style="border:none;" height="35" width="113" src="<?php echo base_url(); ?>assets/images/apple.png" class="appstore-icon " alt="Download on the App Store" data-pin-nopin="true" id='media_apple' data-name="Apple">
                                    </a>
                                    <a class="appstore signature_google_play_link-target sig-hide media_google" style="text-decoration:none;" href="#" data-name='google' target="_blank" target="_blank">
                                        <img style="border:none;" height="35" width="113" src="<?php echo base_url(); ?>assets/images/google.png" class="appstore-icon " alt="Get it on Google Play" id='media_google' data-name="Google Play">
                                    </a>
                                    <a class="appstore signature_amazon_app_store_link-target sig-hide media_amazon" style="text-decoration:none;" href="#" data-name='amazon' target="_blank" target="_blank">
                                        <img style="border:none;" height="35" width="113" src="<?php echo base_url(); ?>assets/images/amazon.png" class="appstore-icon" alt="Available at Amazon" id='media_amazon' data-name="Amazon">
                                    </a>
                                </div>
                            </div>
                            <div class="box box-element" data-type="youtube"> <a href="#close" class="remove btn btn-danger btn-xs"><i class="glyphicon glyphicon-remove"></i></a> <a class="drag btn btn-default btn-xs"><i class="glyphicon glyphicon-move"></i></a> <span class="configuration"> <a class="btn btn-xs btn-warning settings" href="#"><i class="fa fa-gear"></i></a> </span>
                                <div class="preview"> <i class="fa  fa fa-youtube-play  fa-2x"></i>
                                    <div class="element-desc">Youtube</div>
                                </div>
                                <div class="view">
                                    <iframe class="img-responsive" src="https://www.youtube.com/embed/WIJaD623dy0" frameborder="0" allowfullscreen data-url=""></iframe>
                                </div>
                            </div>
                            <!-- Vimeo -->
                            <div class="box box-element" data-type="youtube"> <a href="#close" class="remove btn btn-danger btn-xs"><i class="glyphicon glyphicon-remove"></i></a> <a class="drag btn btn-default btn-xs"><i class="glyphicon glyphicon-move"></i></a> <span class="configuration"> <a class="btn btn-xs btn-warning settings" href="#"><i class="fa fa-gear"></i></a> </span>
                                <div class="preview"> <i class="fa  fa-vimeo-square fa-2x"></i>
                                    <div class="element-desc">Vimeo</div>
                                </div>
                                <div class="view">
                                    <iframe class="img-responsive" src="https://player.vimeo.com/video/137463767?byline=0&portrait=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                                </div>
                            </div>
                            <div class="box box-element" data-type="map"> <a href="#close" class="remove btn btn-danger btn-xs"><i class="glyphicon glyphicon-remove"></i></a> <a class="drag btn btn-default btn-xs"><i class="glyphicon glyphicon-move"></i></a> <span class="configuration"> <a class="btn btn-xs btn-warning settings" href="#"><i class="fa fa-gear"></i></a> </span>
                                <div class="preview"> <i class="fa  fa-map-o fa-2x"></i>
                                    <div class="element-desc">Map</div>
                                </div>
                                <div class="view">
                                    <iframe class="img-responsive" src="http://maps.google.com/maps?q=12.927923,77.627108&z=15&output=embed" frameborder="0" allowfullscreen data-url=""></iframe>
                                </div>
                            </div>
                            <div class="box box-element" data-type="code"> <a href="#close" class="remove btn btn-danger btn-xs"><i class="glyphicon glyphicon-remove"></i></a> <a class="drag btn btn-default btn-xs"><i class="glyphicon glyphicon-move"></i></a> <span class="configuration"> <a class="btn btn-xs btn-warning settings" href="#"><i class="fa fa-gear"></i></a> </span>
                                <div class="preview"> <i class="fa">
                                        <>
                                    </i>
                                    <div class="element-desc">Code</div>
                                </div>
                                <div class="view"> i'm html code, change me </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="custom-dash">
        <div class="client-wrap edit" style='overflow:inherit !important;width: 80%;padding-top:0;'>
            <div class="container">
                <div class="row">
                    <div class="htmlpage"> </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="col-sm-12">

    <div class="collapse navbar-collapse">
        <ul class="nav" id="menu-htmleditor">
            <li>
                <div class="btn-group" data-toggle="buttons-radio">
                    <button type="button" id="edit" class="active btn btn-primary"><i class="glyphicon glyphicon-edit "></i> Edit</button>
                    <button type="button" class="btn btn-primary" id="sourcepreview"><i class="glyphicon-eye-open glyphicon"></i> Preview</button>
                    <button type="button" id="save" class="btn btn-warning float-right"><i class="fa fa-save"></i>&nbsp;save</button>
                </div> &nbsp;
                <div class="btn-group" data-toggle="buttons-radio" id='add' style='display: none;'>
                    <button type="button" class="active btn btn-default" id="pc"><i class="fa fa-laptop"></i> Desktop</button>
                    <button type="button" class="btn btn-default" id="tablet"><i class="fa fa-tablet"></i> Tablet</button>
                    <button type="button" class="btn btn-default" id="mobile"><i class="fa fa-mobile"></i> Mobile</button>
                </div>
            </li>
        </ul>
    </div>

</div>
<div class="modal fade" id="download" tabindex="-1" role="dialog" aria-labelledby="download" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title"><i class='fa fa-save'></i>&nbsp;Save as </h4>
            </div>
            <div class="modal-body" id='sourceCode'>
                <textarea id="src" rows="10"></textarea>
                <textarea id="model" rows="10" class="form-control"></textarea>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><i class='fa fa-close'></i>&nbsp;Close</button>
                <button type="button" class="btn btn-success" id="srcSave"><i class='fa fa-save'></i>&nbsp;Save</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="preferences" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="preferencesTitle"></h4>
            </div>
            <div class="modal-body" id="preferencesContent">
                <!--<iframe src="media-popup.php" style="width:100%; height:300px ; display:none;" frameborder="0" ></iframe>-->
                <div id="mediagallery" style="overflow:auto;height:400px; display:none">
                    <!-- <input type="text" name="nome" value="" placeholder="name of images"><input class="btn btn-info" type="submit" value="search">  -->
                    <div id="contenutoimmagini"></div>
                    <form enctype="multipart/form-data" id="form-id">
                        <input name="nomefile" type="file" />
                        <input class="button" type="button" value="Upload" />
                    </form>
                    <progress value="0"></progress>
                    <br>
                    <script type="text/javascript">
                        $(document).ready(function() {
                            $('.button').click(function() {
                                var formx = document.getElementById('form-id');
                                var formData = new FormData(formx);
                                $.ajax({
                                    url: 'upload_media',
                                    type: 'POST',
                                    xhr: function() {
                                        var myXhr = $.ajaxSettings.xhr();
                                        if (myXhr.upload) {
                                            myXhr.upload.addEventListener('progress', progressHandlingFunction, false);
                                        }
                                        return myXhr;
                                    },
                                    success: completeHandler,
                                    error: errorHandler,
                                    data: formData,
                                    cache: false,
                                    contentType: false,
                                    processData: false
                                });

                                function completeHandler() {
                                    loadimages();
                                }

                                function errorHandler() {
                                    alert('errore caricamento');
                                }

                                function progressHandlingFunction(e) {
                                    if (e.lengthComputable) {
                                        $('progress').attr({
                                            value: e.loaded,
                                            max: e.total
                                        });
                                    }
                                }
                            });
                            loadimages();
                            GetSocialIcons('icon1', 'icons_set_1');
                        });

                        function inserisci(elemento) {
                            var link = $(elemento);
                            var image = link.data('image');
                            $('#img-url').val(image);
                            $('#imgContent').children('img').attr('src', image);
                            $('#mediagallery').slideUp();
                            $('#thepref').slideDown();
                        }

                        function deleteimages(elemento) {
                            var link = $(elemento);
                            var image = link.data('image');
                            var request = $.ajax({
                                url: "remove_images",
                                method: "POST",
                                data: {
                                    image: image
                                },
                                dataType: "html"
                            });
                            request.done(function(msg) {
                                loadimages();
                            });
                        }

                        function loadimages() {
                            var request = $.ajax({
                                url: "load_images",
                                method: "POST",
                                dataType: "html"
                            });
                            request.done(function(msg) {
                                $("#contenutoimmagini").html(msg);
                            });
                        }

                        function GetSocialIcons(icon, icon_set) {
                            var request = $.ajax({
                                url: "get_social_media",
                                method: "POST",
                                data: {
                                    set: icon
                                },
                                dataType: "json"
                            });
                            request.done(function(msg) {
                                var social_html = '';
                                var all_html = '';
                                for (var i = 0; i < msg.length; i++) {
                                    if (i <= 4) {
                                        social_html += '<a href="" class="social_image social_' + msg[i]['name'] + '"  data-name="' + msg[i]['name'] + '" target="_blank" style="' + style_css + '"><img id="social_img_' + msg[i]['name'] + '" data-name="' + msg[i]['name'] + '" src="' + $('#base_url').val() + 'uploads/social_icons/' + icon_set + '/' + msg[i]['icon1'] + '" style="width: 40px;"/></a>';
                                    }

                                }
                                $('.social_wrapper').html(social_html);
                                for (var i = 0; i < msg.length; i++) {
                                    var style_css = '';
                                    if (i <= 4) {
                                        style_css = 'display:none;'
                                    }
                                    all_html += '<img src="' + $('#base_url').val() + 'uploads/social_icons/' + icon_set + '/' + msg[i]['icon1'] + '" id="' + msg[i]['name'] + '" data-name="' + msg[i]['name'] + '" style="width:35px;margin:5px;' + style_css + '" class="custom_social_media">';

                                }
                                $('.media_wrapper_custom').html(all_html);
                            });
                        }
                    </script> <a class="btn btn-info" href="javascript:;" onclick="$('#mediagallery').hide();$('#thepref').show();">Return to image settings</a>
                </div>
                <div id="thepref">
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#Settings" aria-controls="Settings" role="tab" data-toggle="tab">Settings</a>
                        </li>
                        <li role="presentation"><a href="#CellSettings" aria-controls="profile" role="tab" data-toggle="tab">Cell settings</a>
                        </li>
                        <li role="presentation"><a href="#RowSettings" aria-controls="messages" role="tab" data-toggle="tab">Row settings</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="Settings">
                            <div class="panel panel-body">
                                <div id="ht" style="display: none;">
                                    <textarea id="html5editorLite"></textarea>
                                </div>
                                <!-- fine header -->
                                <div id="text" style="display: none;">
                                    <textarea id="html5editor"></textarea>
                                </div>
                                <div id="image" style="display:none">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div id="imgContent"> </div> <a class="btn btn-default form-control" href="javascript:void(0)" id="gallery"><i class="icon-upload-alt"></i>&nbsp;Browse ...</a>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="form-group">
                                                <label for="img-url">Url :</label>
                                                <input type="text" value="" id="img-url" class="form-control" />
                                            </div>
                                            <!-- <div class="form-group"> <label for="img-url">Click Url:</label> <input type="text" value="" id="img-clickurl" class="form-control" /> </div> -->
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="img-width">Width :</label>
                                                        <input type="text" value="" id="img-width" class="form-control" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="img-height">Height :</label>
                                                        <input type="text" value="" id="img-height" class="form-control" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="img-title">Title : </label>
                                                <input type="text" value="" id="img-title" class="form-control" />
                                            </div>
                                            <div class="form-group">
                                                <label for="img-rel">Rel :</label>
                                                <input type="text" value="" id="img-rel" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="social" style="display:none">
                                    <div class="row">

                                        <div class="col-md-12">
                                            <div>
                                                <select class="media_set">
                                                    <option value='icon1' data-set='icons_set_1'>Set 1</option>
                                                    <option value='icon2' data-set='icons_set_2'>Set 2</option>
                                                    <option value='icon3' data-set='icons_set_3'>Set 3</option>
                                                    <option value='icon4' data-set='icons_set_4'>Set 4</option>
                                                </select>
                                            </div>
                                            <div id="socialContainer"></div>
                                            <div class="form-group">

                                                <input type="button" value="Add More" id="Add More" class="form-control" />
                                            </div>
                                            <div class='media_wrapper_custom'>
                                                <img src="assets/images/social/Behance.png" id="behance" data-name='behance' style="width:35px;margin:5px" class="custom_social_media">
                                                <img src="assets/images/social/Blogger.png" id="blogger" data-name='blogger' style="width:35px;margin:5px">
                                                <img src="assets/images/social/Deliciou.png" id="deliciou" data-name='deliciou' style="width:35px;margin:5px">
                                                <img src="assets/images/social/DeviantART.png" id="deviantart" data-name='deviantart' style="width:35px;margin:5px">
                                                <img src="assets/images/social/Digg.png" id='digg' data-name='digg' style="width:35px;margin:5px">

                                                <img src="assets/images/social/Dribbble.png" id='dribbble' data-name='dribbble' style="width:35px;margin:5px">
                                                <img src="assets/images/social/Evernote.png" id='evernote' data-name='evernote' style="width:35px;margin:5px">
                                                <img src="assets/images/social/Facebook.png" id='facebook' data-name='facebook' style="width:35px;margin:5px">
                                                <img src="assets/images/social/Flickr.png" id='flickr' data-name='flickr' style="width:35px;margin:5px">
                                                <img src="assets/images/social/Formspring.png" id='formspring' data-name='formspring' style="width:35px;margin:5px">
                                                <img src="assets/images/social/Google+.png" id='google' data-name='google' style="width:35px;margin:5px">
                                                <img src="assets/images/social/Instgram.png" id='instgram' data-name='instgram' style="width:35px;margin:5px">
                                                <img src="assets/images/social/Linked-in.png" id='linked-in' data-name='linked-in' style="width:35px;margin:5px">

                                                <img src="assets/images/social/MySpace.png" id='myspace' data-name='myspace' style="width:35px;margin:5px">

                                                <img src="assets/images/social/Picasa.png" id='picasa' data-name='picasa' style="width:35px;margin:5px">

                                                <img src="assets/images/social/Pinterest.png" id='pinterest' data-name='pinterest' style="width:35px;margin:5px">

                                                <img src="assets/images/social/Instgram.png" id='pocket' data-name='pocket' style="width:35px;margin:5px">

                                                <img src="assets/images/social/Skype.png" id='skype' data-name='skype' style="width:35px;margin:5px">

                                                <img src="assets/images/social/SoundCloud.png" id='soundcloud' data-name='soundcloud' style="width:35px;margin:5px">

                                                <img src="assets/images/social/Tumblr.png" id='tumblr' data-name='tumblr' style="width:35px;margin:5px">

                                                <img src="assets/images/social/Twitter.png" id='twitter' data-name='twitter' style="width:35px;margin:5px">

                                                <img src="assets/images/social/Instgram.png" id='instgram' data-name='instgram' style="width:35px;margin:5px">

                                                <img src="assets/images/social/Vimeo.png" id='vimeo' data-name='vimeo' style="width:35px;margin:5px">

                                                <img src="assets/images/social/Wordpress.png" id='wordpress' data-name='wordpress' style="width:35px;margin:5px">

                                                <img src="assets/images/social/Yahoo!.png" id='yahoo!' data-name='yahoo!' style="width:35px;margin:5px">

                                                <img src="assets/images/social/YouTube.png" id='youTube' data-name='youTube' style="width:35px;margin:5px">

                                            </div>
                                            <!-- <div class="form-group"> <label for="img-url">Click Url:</label> <input type="text" value="" id="img-clickurl" class="form-control" /> </div> -->
                                            <!-- <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="img-width">Width :</label>
                                                                <input type="text" value="" id="img-width" class="form-control" /> </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="img-height">Height :</label>
                                                                <input type="text" value="" id="img-height" class="form-control" /> </div>
                                                        </div>
                                                    </div> -->
                                            <!-- <div class="form-group">
                                                        <label for="img-title">Title : </label>
                                                        <input type="text" value="" id="img-title" class="form-control" /> </div>
                                                    <div class="form-group">
                                                        <label for="img-rel">Rel :</label>
                                                        <input type="text" value="" id="img-rel" class="form-control" /> </div> -->
                                        </div>
                                    </div>
                                </div>

                                <div id="appstore" style="display:none">
                                    <div class="row">

                                        <div class="col-md-12">
                                            <div id="appstoreContainer"></div>
                                            <!-- <div class="form-group">
                                                        <label for="img-url">Url :</label>
                                                        <input type="text" value="" id="img-url" class="form-control" /> 
                                                    </div> -->
                                            <!-- <div class="form-group"> <label for="img-url">Click Url:</label> <input type="text" value="" id="img-clickurl" class="form-control" /> </div> -->
                                            <!-- <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="img-width">Width :</label>
                                                                <input type="text" value="" id="img-width" class="form-control" /> </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="img-height">Height :</label>
                                                                <input type="text" value="" id="img-height" class="form-control" /> </div>
                                                        </div>
                                                    </div> -->
                                            <!-- <div class="form-group">
                                                        <label for="img-title">Title : </label>
                                                        <input type="text" value="" id="img-title" class="form-control" /> </div>
                                                    <div class="form-group">
                                                        <label for="img-rel">Rel :</label>
                                                        <input type="text" value="" id="img-rel" class="form-control" /> </div> -->
                                        </div>
                                    </div>
                                </div>

                                <!-- fine settaggi immagine -->
                                <div id="youtube" style="display:none">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id="youtube-video"> </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <form>
                                                <div class="form-group">
                                                    <label for="video-url">Video id :</label>
                                                    <input type="text" value="" id="video-url" class="form-control" />
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="video-width">Width :</label>
                                                            <input type="text" value="" id="video-width" class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="video-height">Height :</label>
                                                            <input type="text" value="" id="video-height" class="form-control" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- fine settagio youtube -->
                                <div id="map" style="display:none">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id="map-content"> </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <form>
                                                <div class="form-group">
                                                    <label for="address">Latitude :</label>
                                                    <input type="text" value="" id="latitude" class="form-control" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="address">Longitude :</label>
                                                    <input type="text" value="" id="longitude" class="form-control" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="address">Zoom :</label>
                                                    <input type="text" value="" id="zoom" class="form-control" />
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="img-width">Width :</label>
                                                            <input type="text" value="" id="map-width" class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="img-height">Height :</label>
                                                            <input type="text" value="" id="map-height" class="form-control" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div id="buttons" style="display:none">
                                    <div id="buttonContainer"></div>
                                    <br>
                                    <div class="form-group">
                                        <label> Label : </label>
                                        <input type="text" class="form-control" id="buttonLabel" />
                                    </div>
                                    <div class="form-group">
                                        <label> Href : </label>
                                        <input type="text" class="form-control" id="buttonHref" />
                                    </div> <span class="btn-group btn-group-xs"> <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" href="#">Styles <span class="caret"></span>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class=""><a href="#" class="btnpropa" rel="btn-default">Default</a>
                                            </li>
                                            <li class=""><a href="#" class="btnpropa" rel="btn-primary">Primary</a>
                                            </li>
                                            <li class=""><a href="#" class="btnpropa" rel="btn-success">Success</a>
                                            </li>
                                            <li class=""><a href="#" class="btnpropa" rel="btn-info">Info</a>
                                            </li>
                                            <li class=""><a href="#" class="btnpropa" rel="btn-warning">Warning</a>
                                            </li>
                                            <li class=""><a href="#" class="btnpropa" rel="btn-danger">Danger</a>
                                            </li>
                                            <li class=""><a href="#" class="btnpropa" rel="btn-link">Link</a>
                                            </li>
                                        </ul>
                                    </span> <span class="btn-group btn-group-xs"> <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" href="#">Size <span class="caret"></span>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class=""><a href="#" class="btnpropb" rel="btn-lg">Large</a>
                                            </li>
                                            <li class=""><a href="#" class="btnpropb" rel="btn-default">Default</a>
                                            </li>
                                            <li class=""><a href="#" class="btnpropb" rel="btn-sm">Small</a>
                                            </li>
                                            <li class=""><a href="#" class="btnpropb" rel="btn-xs">Mini</a>
                                            </li>
                                        </ul>
                                    </span> <span class="btn-group btn-group-xs"> <a class="btn btn-xs btn-default btnprop" href="#" rel="btn-block">Block</a> <a class="btn btn-xs btn-default btnprop" href="#" rel="active">Active</a> <a class="btn btn-xs btn-default btnprop" href="#" rel="disabled">Disabled</a> </span>
                                    <br>
                                    <br>
                                    <div class="form-group">
                                        <label> Custom width / height / font-size / padding top : </label>
                                        <br> <span class="btn-group"> <input type="text" id="custombtnwidth" style="width:20%" /> <input type="text" id="custombtnheight" style="width:20%" /> <input type="text" id="custombtnfont" style="width:20%" /> <input type="text" id="custombtnpaddingtop" style="width:20%" /> </span>
                                    </div>
                                    <!-- <div class="form-group"> <label> Align:  </label> <br> <span class="btn-group"> <select id="btnalign"> <option value="center">center</option> <option value="left">left</option> <option value="right">right</option> </select> </span> </div> -->
                                    <div class="form-group">
                                        <label>Custom background color :</label>
                                        <input type="text" class="form-control" id="colbtn" />
                                        <select id="colorselectorbtn">
                                            <option value="1" data-value="1" data-color="#A0522D">sienna</option>
                                            <option value="2" data-value="2" data-color="#CD5C5C">indianred</option>
                                            <option value="3" data-value="3" data-color="#FF4500">orangered</option>
                                            <option value="4" data-value="4" data-color="#008B8B">darkcyan</option>
                                            <option value="5" data-value="5" data-color="#B8860B">darkgoldenrod</option>
                                            <option value="6" data-value="6" data-color="#32CD32">limegreen</option>
                                            <option value="7" data-value="7" data-color="#FFD700">gold</option>
                                            <option value="8" data-value="8" data-color="#48D1CC">mediumturquoise</option>
                                            <option value="9" data-value="9" data-color="#87CEEB">skyblue</option>
                                            <option value="10" data-value="10" data-color="#FF69B4">hotpink</option>
                                            <option value="11" data-value="11" data-color="#87CEFA">lightskyblue</option>
                                            <option value="12" data-value="12" data-color="#6495ED">cornflowerblue</option>
                                            <option value="13" data-value="13" data-color="#DC143C">crimson</option>
                                            <option value="14" data-value="14" data-color="#FF8C00">darkorange</option>
                                            <option value="15" data-value="15" data-color="#C71585">mediumvioletred</option>
                                            <option value="16" data-value="16" data-color="#000000">black</option>
                                            <option value="17" data-value="17" data-color="#575757">grigio scuro</option>
                                            <option value="18" data-value="18" data-color="#f2f2f2">grigio chiaro</option>
                                            <option value="19" data-value="19" data-color="#efefef">marroncino</option>
                                            <option value="20" data-value="20" data-color="#e7e0d8">marrone</option>
                                            <option value="21" data-value="21" data-color="#d7d0c6">marrone scuro</option>
                                            <option value="22" data-value="22" data-color="#263459">blu scuro</option>
                                            <option value="23" data-value="23" data-color="#ffffff">bianco</option>
                                        </select>
                                        <script type="text/javascript">
                                            $('#colorselectorbtn').colorselector({
                                                callback: function(value, color, title) {
                                                    $("#colbtn").val(color);
                                                }
                                            });
                                        </script>
                                    </div>
                                    <div class="form-group">
                                        <label>Custom text color :</label>
                                        <input type="text" class="form-control" id="colbtncol" />
                                        <select id="colorselectorbtncol">
                                            <option value="1" data-value="1" data-color="#A0522D">sienna</option>
                                            <option value="2" data-value="2" data-color="#CD5C5C">indianred</option>
                                            <option value="3" data-value="3" data-color="#FF4500">orangered</option>
                                            <option value="4" data-value="4" data-color="#008B8B">darkcyan</option>
                                            <option value="5" data-value="5" data-color="#B8860B">darkgoldenrod</option>
                                            <option value="6" data-value="6" data-color="#32CD32">limegreen</option>
                                            <option value="7" data-value="7" data-color="#FFD700">gold</option>
                                            <option value="8" data-value="8" data-color="#48D1CC">mediumturquoise</option>
                                            <option value="9" data-value="9" data-color="#87CEEB">skyblue</option>
                                            <option value="10" data-value="10" data-color="#FF69B4">hotpink</option>
                                            <option value="11" data-value="11" data-color="#87CEFA">lightskyblue</option>
                                            <option value="12" data-value="12" data-color="#6495ED">cornflowerblue</option>
                                            <option value="13" data-value="13" data-color="#DC143C">crimson</option>
                                            <option value="14" data-value="14" data-color="#FF8C00">darkorange</option>
                                            <option value="15" data-value="15" data-color="#C71585">mediumvioletred</option>
                                            <option value="16" data-value="16" data-color="#000000">black</option>
                                            <option value="17" data-value="17" data-color="#575757">grigio scuro</option>
                                            <option value="18" data-value="18" data-color="#f2f2f2">grigio chiaro</option>
                                            <option value="19" data-value="19" data-color="#efefef">marroncino</option>
                                            <option value="20" data-value="20" data-color="#e7e0d8">marrone</option>
                                            <option value="21" data-value="21" data-color="#d7d0c6">marrone scuro</option>
                                            <option value="22" data-value="22" data-color="#263459">blu scuro</option>
                                            <option value="23" data-value="23" data-color="#ffffff">bianco</option>
                                        </select>
                                        <script type="text/javascript">
                                            $('#colorselectorbtncol').colorselector({
                                                callback: function(value, color, title) {
                                                    $("#colbtncol").val(color);
                                                }
                                            });
                                        </script>
                                    </div>
                                </div>
                                <!-- fine bottone-->
                                <div id="code" style="display:none"> </div>
                                <!-- fine code -->
                                <div class="row css_class_id">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label> ID : </label>
                                            <input type="text" readonly class="form-control" id="id" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="class"> Css class : </label>
                                            <input type="text" name="class" id="class" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="CellSettings">
                            <div class="panel panel-body">
                                <table width="100%" cellpadding="5" cellspacing="0" style="border:1px solid #cccccc" id="tabCol">
                                    <tr>
                                        <td>&nbsp;Margin</td>
                                        <td></td>
                                        <td>
                                            <input type="text" size="4" class="form-control text-center" data-ref="margin-top" />
                                        </td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td bgcolor="#f2f2f2">Padding</td>
                                        <td bgcolor="#f2f2f2">
                                            <input type="text" size="4" class="form-control text-center" data-ref="padding-top" />
                                        </td>
                                        <td bgcolor="#f2f2f2"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="text" size="4" class="form-control text-center" data-ref="margin-left">
                                        </td>
                                        <td bgcolor="#f2f2f2">
                                            <input type="text" size="4" class="form-control text-center" data-ref="padding-left">
                                        </td>
                                        <td bgcolor="#f2f2f2"></td>
                                        <td bgcolor="#f2f2f2">
                                            <input type="text" size="4" class="form-control text-center" data-ref="padding-right">
                                        </td>
                                        <td>
                                            <input type="text" size="4" class="form-control text-center" data-ref="margin-right">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td bgcolor="#f2f2f2"></td>
                                        <td bgcolor="#f2f2f2">
                                            <input type="text" size="4" class="form-control text-center" data-ref="padding-bottom">
                                        </td>
                                        <td bgcolor="#f2f2f2"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <input type="text" size="4" class="form-control text-center" data-ref="margin-bottom">
                                        </td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </table>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Background color :</label>
                                            <input type="text" class="form-control" id="colbg" />
                                            <select id="colorselectorbg">
                                                <option value="1" data-value="1" data-color="#A0522D">sienna</option>
                                                <option value="2" data-value="2" data-color="#CD5C5C">indianred</option>
                                                <option value="3" data-value="3" data-color="#FF4500">orangered</option>
                                                <option value="4" data-value="4" data-color="#008B8B">darkcyan</option>
                                                <option value="5" data-value="5" data-color="#B8860B">darkgoldenrod</option>
                                                <option value="6" data-value="6" data-color="#32CD32">limegreen</option>
                                                <option value="7" data-value="7" data-color="#FFD700">gold</option>
                                                <option value="8" data-value="8" data-color="#48D1CC">mediumturquoise</option>
                                                <option value="9" data-value="9" data-color="#87CEEB">skyblue</option>
                                                <option value="10" data-value="10" data-color="#FF69B4">hotpink</option>
                                                <option value="11" data-value="11" data-color="#87CEFA">lightskyblue</option>
                                                <option value="12" data-value="12" data-color="#6495ED">cornflowerblue</option>
                                                <option value="13" data-value="13" data-color="#DC143C">crimson</option>
                                                <option value="14" data-value="14" data-color="#FF8C00">darkorange</option>
                                                <option value="15" data-value="15" data-color="#C71585">mediumvioletred</option>
                                                <option value="16" data-value="16" data-color="#000000">black</option>
                                                <option value="17" data-value="17" data-color="#575757">grigio scuro</option>
                                                <option value="18" data-value="18" data-color="#f2f2f2">grigio chiaro</option>
                                                <option value="19" data-value="19" data-color="#efefef">marroncino</option>
                                                <option value="20" data-value="20" data-color="#e7e0d8">marrone</option>
                                                <option value="21" data-value="21" data-color="#d7d0c6">marrone scuro</option>
                                                <option value="22" data-value="22" data-color="#263459">blu scuro</option>
                                                <option value="23" data-value="23" data-color="#ffffff">bianco</option>
                                            </select>
                                            <script type="text/javascript">
                                                $('#colorselectorbg').colorselector({
                                                    callback: function(value, color, title) {
                                                        $("#colbg").val(color);
                                                    }
                                                });
                                            </script>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <!-- <div class="form-group"> <label>Css class :</label> <input type="text" class="form-control" id="colcss" /> </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="RowSettings">
                            <div class="panel panel-body">
                                <table width="100%" cellpadding="5" cellspacing="0" style="border:1px solid #cccccc" id="tabRow">
                                    <tr>
                                        <td>&nbsp;Margin</td>
                                        <td></td>
                                        <td>
                                            <input type="text" size="4" class="form-control text-center" data-ref="margin-top" />
                                        </td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td bgcolor="#f2f2f2">Padding</td>
                                        <td bgcolor="#f2f2f2">
                                            <input type="text" size="4" class="form-control text-center" data-ref="padding-top" />
                                        </td>
                                        <td bgcolor="#f2f2f2"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="text" size="4" class="form-control text-center" data-ref="margin-left">
                                        </td>
                                        <td bgcolor="#f2f2f2">
                                            <input type="text" size="4" class="form-control text-center" data-ref="padding-left">
                                        </td>
                                        <td bgcolor="#f2f2f2"></td>
                                        <td bgcolor="#f2f2f2">
                                            <input type="text" size="4" class="form-control text-center" data-ref="padding-right">
                                        </td>
                                        <td>
                                            <input type="text" size="4" class="form-control text-center" data-ref="margin-right">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td bgcolor="#f2f2f2"></td>
                                        <td bgcolor="#f2f2f2">
                                            <input type="text" size="4" class="form-control text-center" data-ref="padding-bottom">
                                        </td>
                                        <td bgcolor="#f2f2f2"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <input type="text" size="4" class="form-control text-center" data-ref="margin-bottom">
                                        </td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </table>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Background color :</label>
                                            <input type="text" class="form-control" id="rowbg" />
                                            <select id="colorselectorrowbg">
                                                <option value="1" data-value="1" data-color="#A0522D">sienna</option>
                                                <option value="2" data-value="2" data-color="#CD5C5C">indianred</option>
                                                <option value="3" data-value="3" data-color="#FF4500">orangered</option>
                                                <option value="4" data-value="4" data-color="#008B8B">darkcyan</option>
                                                <option value="5" data-value="5" data-color="#B8860B">darkgoldenrod</option>
                                                <option value="6" data-value="6" data-color="#32CD32">limegreen</option>
                                                <option value="7" data-value="7" data-color="#FFD700">gold</option>
                                                <option value="8" data-value="8" data-color="#48D1CC">mediumturquoise</option>
                                                <option value="9" data-value="9" data-color="#87CEEB">skyblue</option>
                                                <option value="10" data-value="10" data-color="#FF69B4">hotpink</option>
                                                <option value="11" data-value="11" data-color="#87CEFA">lightskyblue</option>
                                                <option value="12" data-value="12" data-color="#6495ED">cornflowerblue</option>
                                                <option value="13" data-value="13" data-color="#DC143C">crimson</option>
                                                <option value="14" data-value="14" data-color="#FF8C00">darkorange</option>
                                                <option value="15" data-value="15" data-color="#C71585">mediumvioletred</option>
                                                <option value="16" data-value="16" data-color="#000000">black</option>
                                                <option value="17" data-value="17" data-color="#575757">grigio scuro</option>
                                                <option value="18" data-value="18" data-color="#f2f2f2">grigio chiaro</option>
                                                <option value="19" data-value="19" data-color="#efefef">marroncino</option>
                                                <option value="20" data-value="20" data-color="#e7e0d8">marrone</option>
                                                <option value="21" data-value="21" data-color="#d7d0c6">marrone scuro</option>
                                                <option value="22" data-value="22" data-color="#263459">blu scuro</option>
                                                <option value="23" data-value="23" data-color="#ffffff">bianco</option>
                                            </select>
                                            <script type="text/javascript">
                                                $('#colorselectorrowbg').colorselector({
                                                    callback: function(value, color, title) {
                                                        $("#rowbg").val(color);
                                                    }
                                                });
                                            </script>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Css class :</label>
                                            <input type="text" class="form-control" id="rowcss" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Background image :</label>
                                    <input type="text" class="form-control" id="rowbgimage" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class='fa fa-close'></i>&nbsp;Close</button>
                    <button type="button" class="btn btn-primary" id="applyChanges"><i class='fa fa-check'></i>&nbsp;Apply changes</button>
                </div>
            </div>
        </div>
    </div>
    <div id="download-layout">
        <div class="container"></div>
    </div>
</div>