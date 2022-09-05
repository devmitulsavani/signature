<style>
body.log {margin-left: 0;}
.custom .sidebar {width: 60px;}
.custom .sidebar .navbar-nav li a {padding: 0;line-height: 50px;text-align: center;}
.custom .sidebar .navbar-nav li a span {white-space: nowrap;position: absolute;right: 100%;left: inherit;top: 0;overflow: hidden;-webkit-transition: right, left 0.3s linear;-o-transition: right, left 0.3s linear;transition: right, left 0.3s linear;}
.custom .sidebar .navbar-nav li a:hover, .custom .sidebar .navbar-nav li a:focus {background: #edf8e7;}
.custom .sidebar .navbar-nav li a:hover span, .custom .sidebar .navbar-nav li a:focus span {width: auto;background: #edf8e7;padding-right: 30px;left: 100%;right: inherit;}
.custom .sidebar .navbar-nav .active a, .custom .sidebar .navbar-nav .active a:hover, .custom .sidebar .navbar-nav .active a:focus {background: #dcf0d1;}
.custom .sidebar .navbar-nav .active a span, .custom .sidebar .navbar-nav .active a:hover span, .custom .sidebar .navbar-nav .active a:focus span {background: #dcf0d1;}
.custom .sidebar .navbar-nav li a i.fa {position: inherit;left: inherit;top: inherit;}
.custom .sidebar .navbar-nav .in-btn {padding: 0 5px;}
.custom .sidebar .navbar-nav .in-btn a:hover {background: #52b51b;border-radius: 3px 0 0 3px;}
.custom .sidebar .navbar-nav .in-btn a:hover span {background: #52b51b;}
.custom .dash-cont {margin-left: 60px;}
.custom-wrap {height: calc(100vh - 72px);position: relative;}
.custom-wrap .custom-tools {height: calc(100vh - 71px);position: fixed;left: 60px;top: 71px;width: 350px;background: #eee;border-right: solid 1px #ddd;}
.custom-tools::-webkit-scrollbar {display:none}
.custom-tools .preview-wrap, .custom-tools .sidebar-nav, .custom-tools .tab-content, .custom-tools .tab-content>.active{position: relative;min-height: 100%;}

.dash-wrap .sidebar-nav .nav-tabs li{margin: 0 0 -1px;width: 50%;}
.dash-wrap .sidebar-nav .nav-tabs li a{text-align: center;padding: 0 14px;border: none;line-height: 50px;background: #ddd;color: #333;border-left:solid 1px #ccc;border-bottom:solid 1px #ccc;}
.dash-wrap .sidebar-nav .nav-tabs li a .fa{margin-right: 5px;}
.dash-wrap .sidebar-nav .nav-tabs li.active a, .dash-wrap .sidebar-nav .nav-tabs li.active a:focus, .dash-wrap .sidebar-nav .nav-tabs li.active a:hover{background: #eee;border-top: none;border-bottom:solid 1px #eee;border-left:solid 1px #ccc;color: #52b51b;}
.dash-wrap .sidebar-nav .nav-tabs li:first-child a, .dash-wrap .sidebar-nav .nav-tabs li:first-child.active a, .dash-wrap .sidebar-nav .nav-tabs li:first-child.active a:focus, .dash-wrap .sidebar-nav .nav-tabs li:first-child.active a:hover{border-left:none;}
.dash-wrap .sidebar-nav .tab-pane{padding:14px;}

.preview-wrap .setting-act{position: absolute;bottom: 0;left: 0;right: 0;background: #eee;z-index: 11;height: calc(100vh - 121px);}
.setting-act .setting-header{padding: 10px 15px;background: #333;position: relative;}
.setting-act .setting-header .setting-title{margin: 0;font-size: 14px;text-transform: uppercase;line-height: 16px;font-weight: 600;color: #fff;}
.setting-act .setting-header button.close{position: absolute;right: 0;top:0;bottom: 0;height: 36px;width: 36px;text-align: center;font-weight: 400;color: #fff;text-shadow: none;opacity: 1;background: #333;}
.setting-act .setting-header button.close:hover{background: #000;}
.setting-act .setting-body{}
.dash-wrap .setting-act .nav-tabs{border-bottom:solid 1px #ddd;}
.dash-wrap .setting-act .nav-tabs li{margin: 0 0 -1px;padding: 0;width: 33.333%;}
.dash-wrap .setting-act .nav-tabs li a{line-height:46px;text-align: center;font-size: 14px;}
.dash-wrap .setting-act .nav-tabs li.active a, .dash-wrap .setting-act .nav-tabs li.active a:focus, .dash-wrap .setting-act .nav-tabs li.active a:hover{background: rgba(81, 182, 27, 0.1);}
.setting-act .tab-content{height: calc(100vh - 208px);overflow: auto;}
.setting-act .tab-content::-webkit-scrollbar {display:none}
.setting-act .tab-content>.tab-pane{padding:0;}


.custom-wrap .custom-dash {height: calc(100vh - 71px);margin-left: 350px;padding: 65px 0 15px;position: relative;overflow: auto;}
.custom-dash .custom-act{position: absolute;top: 0;left: 0;right: 0;background: #fff;box-shadow: 0px 0px 5px rgba(0,0,0,0.1);z-index: 1;padding: 8px 0;}
/*.custom-dash .scroll-rev{height: calc(100vh - 71px);}*/
.custom * {-webkit-transition: all 0s ease;-o-transition: all 0s ease;transition: all 0s ease;}

.tools-row{margin: 0 -7px;}
.tools-row:after, .tools-row:before{clear: both;display: block;content:'';}
.tools-row .tools-box{padding: 0 7px;margin: 0 0 14px;width: 33.3333%;float: left;}
.tools-row .tools-box:nth-child(3n+1){clear: both;}

.sidebar-nav .tools-box .box{margin: 0;padding: 10px;text-align: center;border: solid 1px #ddd;border-radius: 5px;background: #fff;min-height: 100px;display: block;width: 100%;}
.sidebar-nav .tools-box .preview .fa{font-size: 40px;margin-bottom: 10px;line-height: 50px;height: 50px;display: block;color: #333;}
.sidebar-nav .tools-box .preview .element-desc{font-size: 12px;color: #333;}


.sidebar-nav .lyrow{margin: 0 0 14px;padding: 10px;text-align: center;border: solid 1px #ddd;border-radius: 5px;background: #fff;display: block;width: 100%;position: relative;}
.sidebar-nav .lyrow .drag{position: absolute;top:0;right: 0;left:0;bottom: 0;width: 100%;min-height: 100%;opacity: 0;}
.sidebar-nav .lyrow .preview{padding: 0 4px;}

.prev-row{margin: 0 -4px;background: #eee;padding: 8px 4px;}
.prev-row:after, .prev-row:before{clear: both;display: block;content:'';}
.prev-row .coll{padding: 0 4px;float: left;}
.prev-row .coll-prev{border: dashed 1px #aaa;background: #ddd;border-radius: 0;width: 100%;top: 0;height: 20px;}
.prev-row .coll-12{width: 100%;}
.prev-row .coll-9{width: 75%;}
.prev-row .coll-8{width: 66.6666%;} 
.prev-row .coll-6{width: 50%;}
.prev-row .coll-4{width: 33.3333%;}
.prev-row .coll-3{width: 25%;}

.prev-wrap{max-width: 600px;margin: 0 auto;}

.devpreview .custom-wrap .custom-tools{display: none;}
.devpreview .custom-wrap .custom-dash{margin: 0;}
.configuration{z-index: 1001;}

.set-title{background: #ddd;padding: 10px 15px;}
.set-title h4{margin: 0;font-size: 12px;font-weight: 700;text-transform: uppercase;}
.set-box{padding: 10px 15px;border-top: solid 1px #ddd;}
.set-box .row{margin-left: -5px;margin-right: -5px;}
.set-box [class*="col-"]{padding-left: 5px;padding-right: 5px;}
.set-box .form-group{margin: 0 0 10px;}
.set-box .form-group.mr-0{margin: 0;}
.set-box label{font-size: 12px;font-weight: 500;margin: 0 0 5px;}
.set-box .form-control{font-size: 12px;font-weight: 500;line-height: 16px;padding: 5px 10px;border-radius: 0px;box-shadow: none;border: solid 1px #ddd;height: auto;}
.set-box select.form-control{padding: 4px 10px;}
.input-grp{position: relative;}
.input-grp .form-control{padding-right: 35px;}
.input-grp .dropdown-colorselector{position: absolute;right: 0;top:0;}
.input-grp .dropdown-colorselector .btn-colorselector{width: 28px;height: 28px;}
.input-grp .dropdown-colorselector>.dropdown-menu{left: inherit;right: 0;top:100%;}
.input-grp .dropdown-menu.dropdown-caret:before{left: inherit;right: 6px;}
.input-grp .dropdown-menu.dropdown-caret:after{left: inherit;right: 7px;}

.align-dgn .btn{padding: 5px 10px;font-size: 12px;font-weight: 500;line-height: 16px;border-left-width: 0;}
.align-dgn .btn-group .btn:first-child{border-left-width: 1px;}
.align-dgn .btn:hover{background: #60c926;border: solid 1px #60c926;color:#fff;}
.align-dgn .btn.active{background: #60c926;border: solid 1px #60c926;color:#fff;}
.align-dgn .btn .fa{font-size: 9px;margin-right: 3px;vertical-align: middle;}
.setting-act .com-btn{padding: 7px 20px;min-width: inherit;font-size: 12px;letter-spacing: 0;}

.img-upload #imgContent{display: inline-block;margin-right: 10px;vertical-align: middle;}
.img-upload #imgContent img{max-width: 100px;max-height: 100px;width: auto;height: auto;}

.modal-footer .com-btn {padding: 7px 20px;min-width: inherit;font-size: 12px;letter-spacing: 0;}
.up-frm{position: relative;text-align: center;}
.up-frm .upload-wrap{position: relative;width: 100%;min-height: 150px;border: dashed 1px #ddd;padding: 30px 10px;background: #f5f5f5;margin: 0 0 15px;}
.upload-wrap h3{font-size: 20px;font-weight: 700;color: #666;margin: 0;text-align: center;line-height: 34px;}
.upload-wrap h3 .fa{font-size: 50px;color: #ccc;display: block;padding: 0;margin: 0;text-align: center;line-height: 50px;}
.upload-wrap h3 span{display: block;}
.upload-wrap h3 span.small{font-size: 14px;font-weight: 400;}
.upload-wrap .input-file{position: absolute;top:0;right: 0;left: 0;bottom: 0;width: 100%;height: 100%;opacity: 0;}
.up-frm .com-btn {padding: 7px 20px;min-width: inherit;font-size: 12px;letter-spacing: 0;margin: 0 0 10px;}
#mediagallery progress{width: 100%;}

.up-gallery{height:315px;overflow-x: hidden;overflow-y: auto;margin: 0 0 15px;}
.up-gallery .row{margin-right: -5px;margin-left: -5px;}
.up-gallery .col-sm-4{padding-left: 5px;padding-right: 5px;}
.up-gallery .col-sm-4:nth-child(3n+1){clear: both;}
.up-gallery .up-block{position: relative;margin: 0 0 10px;border: solid 1px #ddd;}
.up-gallery .up-img{height: 150px;position: relative;padding: 10px;}
.up-gallery .up-img img{max-width: 100%;width: auto;height: auto;max-height: 130px;}
.up-gallery .up-overlay{position: absolute;bottom: 0;left: 0;right: 0;background: rgba(0,0,0,0.5);text-align: center;padding: 3px 10px;}
.up-gallery .up-overlay .image-name{display: none;}
.up-gallery .up-overlay a{color: #fff;display: inline-block;margin: 0 5px;font-size: 14px;}
.up-gallery .up-overlay a .fa{padding: 0;margin: 0;}

.social-cst .form-group, .app-cst .form-group{position: relative;font-size: 0;padding-left: 32px;padding-right: 32px;}
.app-cst .form-group{padding-left: 90px;}
.social-cst .form-group:last-child, .app-cst .form-group:last-child{margin: 0;}
.social-cst .form-group .btn-default, .app-cst .form-group .btn-default{font-size: 0;padding: 0;width: 28px;height: 28px;line-height: 28px;border: none;box-shadow: none;background: #d9534f;color: #fff;text-align: center;position: absolute;right: 0;top: 0;}
.social-cst .form-group .btn-default .fa, .app-cst .form-group .btn-default .fa{font-size: 14px;line-height: 28px;}
.social-cst .form-group .btn-default:hover, .app-cst .form-group .btn-default:hover{background: #c9302c;}
.social-cst .form-group img{position: absolute;left: 0;top: 0;width: 28px !important;}
.app-cst .form-group img{position: absolute;left: 0;top: 0;width: 86px !important;border-radius: 3px;}

.add-social .com-btn{padding: 7px 20px;min-width: inherit;font-size: 12px;letter-spacing: 0;display: block;width: 100%;}
.media_wrapper_custom>img{cursor: pointer;}
.hide-foot{display: none;}
</style>
<?php  exit; ?>
<?php
if ($this->session->flashdata('success')) {
?>
<div class="alert bg-success alert-styled-left bootstrap_alert"> <a class="close" data-dismiss="alert">�</a> <strong><?php echo $this->session->flashdata('success') ?></strong> </div>
<?php
$this->session->set_flashdata('success', false);
} else if ($this->session->flashdata('error')) {
?>
<div class="alert bg-danger alert-styled-left bootstrap_alert"> <a class="close" data-dismiss="alert">�</a> <strong><?php echo $this->session->flashdata('error') ?></strong> </div>
<?php
$this->session->set_flashdata('error', false);
}
if (isset($my_logo_validation)) {
?>
<div class="alert bg-danger alert-styled-left bootstrap_alert"> <a class="close" data-dismiss="alert">�</a> <strong><?php echo $my_logo_validation ?></strong> </div>
<?php
}
if (isset($signature_banner_validation)) {
?>
<div class="alert bg-danger alert-styled-left bootstrap_alert"> <a class="close" data-dismiss="alert">�</a> <strong><?php echo $signature_banner_validation ?></strong> </div>
<?php
}
?>
<link rel="stylesheet" href="assets/drag_drop/default.min.css">
<link rel="stylesheet" href="assets/drag_drop/theme.css">
<link rel="stylesheet" type="text/css" href="assets/drag_drop/bootstrap-colorselector.css" />
  
<!--<script src="assets/drag_drop/bootstrap.min.js"></script> -->
<!--<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>-->

<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
<script src="https://code.jquery.com/ui/1.10.2/jquery-ui.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js"></script> 
<script src="assets/drag_drop/bootstrap-colorselector.js"></script> 
<script src="https://cdn.jsdelivr.net/ace/1.2.0/min/ace.js"></script> 
<script src="//tinymce.cachefly.net/4.2/tinymce.min.js"></script> 

<script src="assets/drag_drop/ckeditor/ckeditor.js"></script>
<script type="text/javascript">var path='';</script>  
<script  src="assets/drag_drop/app.js"></script>
<script src="assets/js/html2canvas.js"></script>
<input type="hidden" name="hidden_sign_type" id="hidden_sign_type" value="1">
<input type="hidden" name="hidden_sign_image" id="hidden_sign_image">
<input type="hidden" name="signature_id" id="signature_id" value="<?php echo $signature_id; ?>">
<div class="custom-wrap">

    <div class="preview-wrap custom-tools" id="signature_preview">
      <div class="preview-wrap">
        <div class="sidebar-nav">
          <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#content" class="nav_menu_tab" aria-controls="content" role="tab" data-toggle="tab"><i class="fa fa-html5"></i> Content</a></li>
            <li role="presentation"><a href="#structure" class="nav_menu_tab" aria-controls="structure" role="tab" data-toggle="tab"><i class="fa fa fa-th"></i> Structure</a></li>
          </ul>

          <!-- Tab panes -->
          <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="content">
              <input type='hidden' value='<?php echo base_url();?>' id='base_url'/>
              <div class="tools-row">
                <div class="tools-box">
                  <div class="box box-element" data-type="paragraph"><a href="#close" class="remove btn btn-danger btn-xs"><i class="glyphicon glyphicon-remove"></i></a><a class="drag btn btn-default btn-xs"><i class="glyphicon glyphicon-move"></i></a><span class="configuration"><a class="btn btn-xs btn-warning settings"  href="#" ><i class="fa fa-gear"></i></a></span>
                    <div class="preview"><i class="fa fa-paragraph"></i><div class="element-desc">Paragraph</div></div>
                    <div class="view ckContainer"><p>Click me to edit</p></div>
                  </div>
                </div>
                <div class="tools-box">
                  <div class="box box-element" data-type="image"><a href="#close" class="remove btn btn-danger btn-xs"><i class="glyphicon glyphicon-remove"></i></a><a class="drag btn btn-default btn-xs"><i class="glyphicon glyphicon-move"></i></a><span class="configuration"><a class="btn btn-xs btn-warning settings"  href="#" ><i class="fa fa-gear"></i></a></span>
                    <div class="preview"><i class="fa fa-picture-o"></i><div class="element-desc">Image</div></div>
                    <div class="view"><img src="http://placehold.it/350x150" class="img-responsive" title="default title" /></div>
                  </div>
                </div>
<!--                <div class="tools-box">
                  <div class="box box-element" data-type="button"> <a href="#close" class="remove btn btn-danger btn-xs"><i class="glyphicon glyphicon-remove"></i></a><a class="drag btn btn-default btn-xs"><i class="glyphicon glyphicon-move"></i></a><span class="configuration"><a class="btn btn-xs btn-warning settings"  href="#" ><i class="fa fa-gear"></i></a></span>
                    <div class="preview"><i class="fa  fa-hand-pointer-o"></i><div class="element-desc">Button</div></div>
                    <div class="view"><a class="btn btn-default button_tag" href="#">Click Me !</a></div>
                  </div>
                </div>-->
                <div class="tools-box">
                  <div class="box box-element" data-type="social"><a href="#close" class="remove btn btn-danger btn-xs"><i class="glyphicon glyphicon-remove"></i></a><a class="drag btn btn-default btn-xs"><i class="glyphicon glyphicon-move"></i></a><span class="configuration"><a class="btn btn-xs btn-warning settings"  href="#" ><i class="fa fa-gear"></i></a></span>
                    <div class="preview"><i class="fa fa-share-alt"></i><div class="element-desc">Social Icon</div></div>
                    <div class="view social_wrapper" data-icon='icon1' data-set='icons_set_1'><a href="" class="social_image social_facebook"  data-name='facebook' target="_blank"><img id='social_img_facebook' data-name="Facebook" src="<?php echo base_url();?>assets/images/social/Facebook.png" style="width: 40px;"/></a><a href="" class="social_image social_youtube" data-name='youtube' target="_blank"><img id='social_img_youtube' data-name="Youtube" src="<?php echo base_url();?>assets/images/social/YouTube.png" style="width: 40px;"/></a> <a href="" class="social_image social_twitter" data-name='twitter' target="_blank"><img id='social_img_twitter' data-name="Twitter" src="<?php echo base_url();?>assets/images/social/Twitter.png" style="width: 40px;"/></a> <a href="" class="social_image social_google" data-name='google' target="_blank"><img id='social_img_google' data-name="Google+" src="<?php echo base_url();?>assets/images/social/Google+.png" style="width: 40px;"/></a> <a href="" class="social_image social_blogger"  data-name='blogger' target="_blank"><img id='social_img_blogger' data-name="Blogger" src="<?php echo base_url();?>assets/images/social/Blogger.png" style="width: 40px;"/></a></div>
                  </div>
                </div>
                <div class="tools-box">
                  <div class="box box-element" data-type="appstore"><a href="#close" class="remove btn btn-danger btn-xs"><i class="glyphicon glyphicon-remove"></i></a><a class="drag btn btn-default btn-xs"><i class="glyphicon glyphicon-move"></i></a><span class="configuration"><a class="btn btn-xs btn-warning settings"  href="#" ><i class="fa fa-gear"></i></a></span>
                    <div class="preview"><i class="fa fa-mobile"></i><div class="element-desc">App Store</div></div>
                    <div class="view media_wrapper">
                        <div class="media_content_wrapper">
                            <a class="appstore signature_apple_app_store_link-target sig-hide media_apple" style="text-decoration:none;" href="#" data-name='apple'  target="_blank">
                              <img style="border:none;" height="35" width="113" src="<?php echo base_url();?>assets/images/apple.png" class="appstore-icon " alt="Download on the App Store" data-pin-nopin="true" id='media_apple' data-name="Apple">
                            </a>
                            <a class="appstore signature_google_play_link-target sig-hide media_google" style="text-decoration:none;" href="#" data-name='google'  target="_blank">
                              <img style="border:none;" height="35" width="113" src="<?php echo base_url();?>assets/images/google.png" class="appstore-icon " alt="Get it on Google Play" id='media_google' data-name="Google Play">
                            </a>
                            <a class="appstore signature_amazon_app_store_link-target sig-hide media_amazon" style="text-decoration:none;" href="#" data-name='amazon'  target="_blank"> <img style="border:none;" height="35" width="113" src="<?php echo base_url();?>assets/images/amazon.png" class="appstore-icon" alt="Available at Amazon" id='media_amazon' data-name="Amazon"></a>
                        </div>
                    </div>
                  </div>
                </div>
                <!-- <div class="tools-box">
                  <div class="box box-element" data-type="youtube"><a href="#close" class="remove btn btn-danger btn-xs"><i class="glyphicon glyphicon-remove"></i></a><a class="drag btn btn-default btn-xs"><i class="glyphicon glyphicon-move"></i></a><span class="configuration"><a class="btn btn-xs btn-warning settings"  href="#" ><i class="fa fa-gear"></i></a></span>
                    <div class="preview"><i class="fa fa-youtube"></i><div class="element-desc">Youtube</div></div>
                    <div class="view">
                      <iframe class="img-responsive" src="https://www.youtube.com/embed/WIJaD623dy0" frameborder="0" allowfullscreen data-url=""></iframe>
                    </div>
                  </div>
                </div>
                <div class="tools-box">
                  <div class="box box-element" data-type="youtube"><a href="#close" class="remove btn btn-danger btn-xs"><i class="glyphicon glyphicon-remove"></i></a><a class="drag btn btn-default btn-xs"><i class="glyphicon glyphicon-move"></i></a><span class="configuration"> <a class="btn btn-xs btn-warning settings"  href="#" ><i class="fa fa-gear"></i></a></span>
                    <div class="preview"><i class="fa  fa-vimeo-square"></i><div class="element-desc">Vimeo</div></div>
                    <div class="view">
                      <iframe class="img-responsive" src="https://player.vimeo.com/video/137463767?byline=0&portrait=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div>
                  </div>
                </div>
                <div class="tools-box">
                  <div class="box box-element" data-type="map"><a href="#close" class="remove btn btn-danger btn-xs"><i class="glyphicon glyphicon-remove"></i></a><a class="drag btn btn-default btn-xs"><i class="glyphicon glyphicon-move"></i></a><span class="configuration"> <a class="btn btn-xs btn-warning settings"  href="#" ><i class="fa fa-gear"></i></a></span>
                    <div class="preview"><i class="fa  fa-map-o"></i><div class="element-desc">Map</div></div>
                    <div class="view">
                      <iframe class="img-responsive" src="http://maps.google.com/maps?q=12.927923,77.627108&z=15&output=embed" frameborder="0" allowfullscreen data-url=""></iframe>
                    </div>
                  </div>
                </div>-->
                <div class="tools-box">
                  <div class="box box-element" data-type="code"><a href="#close" class="remove btn btn-danger btn-xs"><i class="glyphicon glyphicon-remove"></i></a><a class="drag btn btn-default btn-xs"><i class="glyphicon glyphicon-move"></i></a><span class="configuration"> <a class="btn btn-xs btn-warning settings" href="#" ><i class="fa fa-gear"></i></a></span>
                    <div class="preview"><i class="fa fa-code"></i><div class="element-desc">Code</div></div>
                    <div class="view"> i'm html code, change me </div>
                  </div>
                </div>
<!--                <div class="tools-box">
                  <div class="box box-element" data-type="vertical"><a href="#close" class="remove btn btn-danger btn-xs"><i class="glyphicon glyphicon-remove"></i></a><a class="drag btn btn-default btn-xs"><i class="glyphicon glyphicon-move"></i></a><span class="configuration"> <a class="btn btn-xs btn-warning settings" href="#" ><i class="fa fa-gear"></i></a></span>
                    <div class="preview"><i class="fa fa-code"></i><div class="element-desc">Vertical </div></div>
                    <div class="view vertical_wrapper" style="border-left: 1px solid #ccc;"><div class='vr_devider'></div></div>
                  </div>
                </div>-->
              <div class="tools-box">
                  <div class="box box-element" data-type="horizontal"><a href="#close" class="remove btn btn-danger btn-xs"><i class="glyphicon glyphicon-remove"></i></a><a class="drag btn btn-default btn-xs"><i class="glyphicon glyphicon-move"></i></a><span class="configuration"> <a class="btn btn-xs btn-warning settings" href="#" ><i class="fa fa-gear"></i></a></span>
                    <div class="preview"><i class="fa">----</i><div class="element-desc">Divider</div></div>
                    <div class="view horizontal_wrapper"> <hr class='hr_devider' style="border-top: 1px solid #ccc;margin:0 auto;padding:0;"></hr> </div>
                  </div>
                </div>
                <!-- <div class="tools-box">
                  <div class="box box-element" data-type="ul"><a href="#close" class="remove btn btn-danger btn-xs"><i class="glyphicon glyphicon-remove"></i></a><a class="drag btn btn-default btn-xs"><i class="glyphicon glyphicon-move"></i></a><span class="configuration"> <a class="btn btn-xs btn-warning settings" href="#" ><i class="fa fa-gear"></i></a></span>
                    <div class="preview"><i class="fa fa-code"></i><div class="element-desc">UL </div></div>
                    <div class="view ul_wrapper"><h5>
                        <ul>
                          <li>Text 1</li>
                          <li>Text 2</li>
                          <li>Text 3</li>
                        </ul>
                      </h5>
                  </div>
                  </div>
                </div>
                <div class="tools-box">
                  <div class="box box-element" data-type="ol"><a href="#close" class="remove btn btn-danger btn-xs"><i class="glyphicon glyphicon-remove"></i></a><a class="drag btn btn-default btn-xs"><i class="glyphicon glyphicon-move"></i></a><span class="configuration"> <a class="btn btn-xs btn-warning settings" href="#" ><i class="fa fa-gear"></i></a></span>
                    <div class="preview"><i class="fa fa-code"></i><div class="element-desc">OL </div></div>
                    <div class="view ol_wrapper">
                      <h5>
                        <ol>
                          <li>Text 1</li>
                          <li>Text 2</li>
                          <li>Text 3</li>
                        </ol>
                      </h5>
                    </div>
                  </div>
                </div> -->
              </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="structure">
              <div class="lyrow"><a href="#close" class="remove btn btn-danger btn-xs"><i class="glyphicon-remove glyphicon"></i></a><a class="drag btn btn-default btn-xs"><i class="glyphicon glyphicon-move"></i></a><a href="#" class="btn btn-info btn-xs clone"><i class="fa fa-clone"></i></a>
                <div class="preview">
                  <div class="prev-row"><div class="coll coll-12"><div class="coll-prev"></div></div></div>
                </div>
                <div class="view">
                  <table width="100%">
                    <tr>
                      <td class="row" style="width:100%;"><div class="column"></div></td>
                    </tr>
                  </table>
                </div>
              </div>
              <div class="lyrow"><a href="#close" class="remove btn btn-danger btn-xs"><i class="glyphicon-remove glyphicon"></i></a><a class="drag btn btn-default btn-xs"><i class="glyphicon glyphicon-move"></i></a> <a href="#" class="btn btn-info btn-xs clone"><i class="fa fa-clone"></i></a>
                <div class="preview">
                  <div class="prev-row"><div class="coll coll-6"><div class="coll-prev"></div></div><div class="coll coll-6"><div class="coll-prev"></div></div></div>
                </div>
                <div class="view">
                  <table width="100%">
                    <tr >
                      <td class="row" style="width:50%;"><div class="column"></div></td>
                      <td class="row" style="width:50%;"><div class="column"></div></td>
                    </tr>
                  </table>
                </div>
              </div>
              <div class="lyrow"><a href="#close" class="remove btn btn-danger btn-xs"><i class="glyphicon-remove glyphicon"></i></a><a class="drag btn btn-default btn-xs"><i class="glyphicon glyphicon-move"></i></a> <a href="#" class="btn btn-info btn-xs clone"><i class="fa fa-clone"></i></a>
                <div class="preview">
                  <div class="prev-row"><div class="coll coll-8"><div class="coll-prev"></div></div><div class="coll coll-4"><div class="coll-prev"></div></div></div>
                </div>
                <div class="view">
                  <table width="100%">
                    <tr>
                      <td class="row" style="width:66.6666%;"><div class=" column"></div></td>
                      <td class="row" style="width:33.3333%;"><div class=" column"></div></td>
                    </tr>
                  </table>
                </div>
              </div>
              <div class="lyrow"><a href="#close" class="remove btn btn-danger btn-xs"><i class="glyphicon-remove glyphicon"></i></a><a class="drag btn btn-default btn-xs"><i class="glyphicon glyphicon-move"></i></a> <a href="#" class="btn btn-info btn-xs clone"><i class="fa fa-clone"></i></a>
                <div class="preview">
                  <div class="prev-row"><div class="coll coll-4"><div class="coll-prev"></div></div><div class="coll coll-8"><div class="coll-prev"></div></div></div>
                </div>
                <div class="view">
                  <table width="100%">
                    <tr>
                      <td class="row" style="width:33.3333%;"><div class=" column"></div></td>
                      <td class="row" style="width:66.6666%;"><div class=" column"></div></td>
                    </tr>
                  </table>
                </div>
              </div>
              <div class="lyrow"><a href="#close" class="remove btn btn-danger btn-xs"><i class="glyphicon-remove glyphicon"></i></a><a class="drag btn btn-default btn-xs"><i class="glyphicon glyphicon-move"></i></a> <a href="#" class="btn btn-info btn-xs clone"><i class="fa fa-clone"></i></a>
                <div class="preview">
                  <div class="prev-row"><div class="coll coll-3"><div class="coll-prev"></div></div><div class="coll coll-9"><div class="coll-prev"></div></div></div>
                </div>
                <div class="view">
                  <table width="100%">
                    <tr>
                      <td class="row" style="width:25%;"><div class=" column"></div></td>
                      <td class="row" style="width:75%;"><div class=" column"></div></td>
                    </tr>
                  </table>
                </div>
              </div>
              <div class="lyrow"><a href="#close" class="remove btn btn-danger btn-xs"><i class="glyphicon-remove glyphicon"></i></a><a class="drag btn btn-default btn-xs"><i class="glyphicon glyphicon-move"></i></a> <a href="#" class="btn btn-info btn-xs clone"><i class="fa fa-clone"></i></a>
                <div class="preview">
                  <div class="prev-row"><div class="coll coll-9"><div class="coll-prev"></div></div><div class="coll coll-3"><div class="coll-prev"></div></div></div>
                </div>
                <div class="view">
                  <table width="100%">
                    <tr>
                      <td class="row" style="width:75%;"><div class=" column"></div></td>
                      <td class="row" style="width:25%;"><div class=" column"></div></td>
                    </tr>
                  </table>
                </div>
              </div>
              <div class="lyrow"><a href="#close" class="remove btn btn-danger btn-xs"><i class="glyphicon-remove glyphicon"></i></a><a class="drag btn btn-default btn-xs"><i class="glyphicon glyphicon-move"></i></a> <a href="#" class="btn btn-info btn-xs clone"><i class="fa fa-clone"></i></a>
                <div class="preview">
                  <div class="prev-row"><div class="coll coll-4"><div class="coll-prev"></div></div><div class="coll coll-4"><div class="coll-prev"></div></div><div class="coll coll-4"><div class="coll-prev"></div></div></div>
                </div>
                <div class="view">
                  <table width="100%">
                    <tr>
                      <td class="row" style="width:33.3333%;"><div class=" column"></div></td>
                      <td class="row" style="width:33.3333%;"><div class=" column"></div></td>
                      <td class="row" style="width:33.3333%;"><div class=" column"></div></td>
                    </tr>
                  </table>
                </div>
              </div>
              <div class="lyrow"><a href="#close" class="remove btn btn-danger btn-xs"><i class="glyphicon-remove glyphicon"></i></a><a class="drag btn btn-default btn-xs"><i class="glyphicon glyphicon-move"></i></a> <a href="#" class="btn btn-info btn-xs clone"><i class="fa fa-clone"></i></a>
                <div class="preview">
                  <div class="prev-row"><div class="coll coll-3"><div class="coll-prev"></div></div><div class="coll coll-3"><div class="coll-prev"></div></div><div class="coll coll-3"><div class="coll-prev"></div></div><div class="coll coll-3"><div class="coll-prev"></div></div></div>
                </div>
                <div class="view">
                  <table width="100%">
                    <tr>
                      <td class="row" style="width:25%;"><div class="column"></div></td>
                      <td class="row" style="width:25%;"><div class="column"></div></td>
                      <td class="row" style="width:25%;"><div class="column"></div></td>
                      <td class="row" style="width:25%;"><div class="column"></div></td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="setting-act" id="settings-act" style="display:none;">
        <div class="setting-header">
          <button type="button" class="close close_setting_wrapper" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span> </button>
          <h4 class="setting-title" id="preferencesTitle"></h4>
        </div>
        <div class="setting-body">
          <div id="preferencesContent"> 
            <div id="thepref">
              <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#Settings" class='setting_tab' aria-controls="Settings" role="tab" data-toggle="tab">Settings</a> </li>
                <li role="presentation"><a href="#CellSettings" aria-controls="profile" role="tab" data-toggle="tab">Cell settings</a> </li>
                <li role="presentation"><a href="#RowSettings" aria-controls="messages" role="tab" data-toggle="tab">Row settings</a> </li>
              </ul>
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="Settings">
                  <div id="ht" style="display: none;">
                    <textarea id="html5editorLite"></textarea>
                  </div>
                  <!-- fine header -->
                  <!-- <div id="text" style="display: none;">
                    <textarea id="html5editor"></textarea>
                  </div> -->
                  <div id="image" style="display:none">
                    <div class="set-title"><h4>Upload Image</h4></div>
                    <div class="set-box">
                      <div class="img-upload">
                        <div id="imgContent"></div>
                        <a class="com-btn" href="javascript:void(0)" id="gallery"><i class="icon-upload-alt"></i>Upload Impage</a>
                      </div>
                    </div>
                    <div class="set-box">
                      <div class="form-group">
                        <label for="img-url">Url :</label>
                        <input type="text" value="" id="img-url" class="form-control" />
                      </div>
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
                      <div class="form-group mr-0">
                        <label for="img-rel">Rel :</label>
                        <input type="text" value="" id="img-rel" class="form-control" />
                      </div>
                    </div>
                  </div>
                  <div id="social" style="display:none">
                    <div class="set-title"><h4>Social Icon Style</h4></div>
                    <div class="set-box">
                      <div class="row four-box">
                        <div class="col-xs-6">
                          <div class="form-group mr-0">
                            <label>Icon Type</label>
                              <select class="media_set form-control">
                              <option value='icon1' data-set= 'icons_set_1'>Set 1</option>
                              <option value='icon2' data-set= 'icons_set_2'>Set 2</option>
                              <option value='icon3' data-set= 'icons_set_3'>Set 3</option>
                              <option value='icon4' data-set= 'icons_set_4'>Set 4</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-xs-6">
                          <div class="form-group mr-0">
                            <label>Icon Size</label>
                              <select class="media_size form-control">
                              <option value='' data-set= 'icons_set_1'>14px</option>
                              <option value='' data-set= 'icons_set_2'>16px</option>
                              <option value='' data-set= 'icons_set_3'>18px</option>
                              <option value='' data-set= 'icons_set_4'>20px</option>
                              <option value='' data-set= 'icons_set_4'>24px</option>
                              <option value='' data-set= 'icons_set_4'>28px</option>
                              <option value='' data-set= 'icons_set_4'>30px</option>
                              <option value='' data-set= 'icons_set_4'>34px</option>
                              <option value='' data-set= 'icons_set_4'>36px</option>
                              <option value='' data-set= 'icons_set_4'>40px</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="set-title"><h4>Set Social Link</h4></div>
                    <div class="set-box">
                      <div id="socialContainer" class="social-cst"></div>
                    </div>
                    <div class="set-title"><h4>Add Social Link</h4></div>
                    <div class="set-box">
                      <div class='media_wrapper_custom'><img src="assets/images/social/Behance.png" id="behance" data-name='behance' style="width:35px;margin:5px" class="custom_social_media"><img src="assets/images/social/Blogger.png" id="blogger" data-name='blogger' style="width:35px;margin:5px"><img src="assets/images/social/Deliciou.png" id="deliciou" data-name='deliciou' style="width:35px;margin:5px"><img src="assets/images/social/DeviantART.png" id="deviantart" data-name='deviantart' style="width:35px;margin:5px"><img src="assets/images/social/Digg.png" id='digg' data-name='digg' style="width:35px;margin:5px"><img src="assets/images/social/Dribbble.png" id='dribbble' data-name='dribbble' style="width:35px;margin:5px"><img src="assets/images/social/Evernote.png" id='evernote' data-name='evernote' style="width:35px;margin:5px"><img src="assets/images/social/Facebook.png" id='facebook' data-name='facebook' style="width:35px;margin:5px"><img src="assets/images/social/Flickr.png" id='flickr' data-name='flickr' style="width:35px;margin:5px"><img src="assets/images/social/Formspring.png" id='formspring' data-name='formspring' style="width:35px;margin:5px"><img src="assets/images/social/Google+.png" id='google' data-name='google' style="width:35px;margin:5px"><img src="assets/images/social/Instgram.png" id='instgram' data-name='instgram' style="width:35px;margin:5px"><img src="assets/images/social/Linked-in.png" id='linked-in' data-name='linked-in' style="width:35px;margin:5px"><img src="assets/images/social/MySpace.png" id='myspace' data-name='myspace' style="width:35px;margin:5px"><img src="assets/images/social/Picasa.png" id='picasa' data-name='picasa' style="width:35px;margin:5px"><img src="assets/images/social/Pinterest.png" id='pinterest' data-name='pinterest' style="width:35px;margin:5px"><img src="assets/images/social/Instgram.png" id='pocket' data-name='pocket' style="width:35px;margin:5px"><img src="assets/images/social/Skype.png" id='skype' data-name='skype' style="width:35px;margin:5px"><img src="assets/images/social/SoundCloud.png" id='soundcloud' data-name='soundcloud' style="width:35px;margin:5px"><img src="assets/images/social/Tumblr.png" id='tumblr' data-name='tumblr' style="width:35px;margin:5px"><img src="assets/images/social/Twitter.png" id='twitter' data-name='twitter' style="width:35px;margin:5px"><img src="assets/images/social/Instgram.png" id='instgram' data-name='instgram' style="width:35px;margin:5px"><img src="assets/images/social/Vimeo.png" id='vimeo' data-name='vimeo' style="width:35px;margin:5px"><img src="assets/images/social/Wordpress.png" id='wordpress' data-name='wordpress' style="width:35px;margin:5px"><img src="assets/images/social/Yahoo!.png" id='yahoo' data-name='yahoo' style="width:35px;margin:5px"><img src="assets/images/social/YouTube.png" id='youTube' data-name='youTube' style="width:35px;margin:5px"></div>
                    </div>
                  </div>
                  <div id="appstore" style="display:none">
                    <div class="set-title"><h4>Add App Store Link</h4></div>
                    <div class="set-box">
                      <div id="appstoreContainer" class="app-cst"></div>
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
                    <div class="form-group">
                      <label> Label : </label>
                      <input type="text" class="form-control" id="buttonLabel" />
                    </div>
                    <div class="form-group">
                      <label> Href : </label>
                      <input type="text" class="form-control" id="buttonHref" />
                    </div>
                    <span class="btn-group btn-group-xs"> <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" href="#">Styles <span class="caret"></span> </a>
                    <ul class="dropdown-menu">
                      <li class=""><a href="#" class="btnpropa" rel="btn-default">Default</a> </li>
                      <li class=""><a href="#" class="btnpropa" rel="btn-primary">Primary</a> </li>
                      <li class=""><a href="#" class="btnpropa" rel="btn-success">Success</a> </li>
                      <li class=""><a href="#" class="btnpropa" rel="btn-info">Info</a> </li>
                      <li class=""><a href="#" class="btnpropa" rel="btn-warning">Warning</a> </li>
                      <li class=""><a href="#" class="btnpropa" rel="btn-danger">Danger</a> </li>
                      <li class=""><a href="#" class="btnpropa" rel="btn-link">Link</a> </li>
                    </ul>
                    </span> <span class="btn-group btn-group-xs"> <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" href="#">Size <span class="caret"></span> </a>
                    <ul class="dropdown-menu">
                      <li class=""><a href="#" class="btnpropb" rel="btn-lg">Large</a> </li>
                      <li class=""><a href="#" class="btnpropb" rel="btn-default">Default</a> </li>
                      <li class=""><a href="#" class="btnpropb" rel="btn-sm">Small</a> </li>
                      <li class=""><a href="#" class="btnpropb" rel="btn-xs">Mini</a> </li>
                    </ul>
                    </span> <span class="btn-group btn-group-xs"> <a class="btn btn-xs btn-default btnprop" href="#" rel="btn-block">Block</a> <a class="btn btn-xs btn-default btnprop" href="#" rel="active">Active</a> <a class="btn btn-xs btn-default btnprop" href="#" rel="disabled">Disabled</a> </span> <br>
                    <br>
                    <div class="form-group">
                      <label> Custom width / height / font-size / padding top : </label>
                      <br>
                      <span class="btn-group">
                      <input type="text"  id="custombtnwidth" style="width:20%"/>
                      <input type="text"  id="custombtnheight" style="width:20%"/>
                      <input type="text"  id="custombtnfont" style="width:20%"/>
                      <input type="text"  id="custombtnpaddingtop" style="width:20%"/>
                      </span> </div>
                    <!-- <div class="form-group"> <label> Align:  </label> <br> <span class="btn-group"> <select id="btnalign"> <option value="center">center</option> <option value="left">left</option> <option value="right">right</option> </select> </span> </div> -->
                    <div class="form-group">
                      <label>Custom background color :</label>
                      <input type="text" class="form-control colbtn" id="colbtn" />
                      
                      <script type="text/javascript">
                      $('.colbtn').colorpicker();
//                      $('#colorselectorbtn').colorselector({
//                        callback: function(value, color, title) {
//                          $("#colbtn").val(color);
//                        }
//                      });
                      </script> 
                    </div>
                    <div class="form-group">
                      <label>Custom text color :</label>
                      <input type="text" class="form-control colbtncol" id="colbtncol" />
                      
                      <script type="text/javascript">
                          $('.colbtncol').colorpicker();
//                      $('#colorselectorbtncol').colorselector({
//                        callback: function(value, color, title) {
//                          $("#colbtncol").val(color);
//                        }
//                      });
                      </script> 
                    </div>
                  </div>

                  <div id="horizontaldevider" style="display:none">
                    <div id="buttonContainer"></div>
                    <div class="set-title"><h4>Border</h4></div>
                    <div class="set-box">
                      <div class="form-group">
                      <label>Devider Style :</label>
                      <select class="form-control devider_style" id="devider_style">
                          <option value="solid">Solid</option>
                          <option value="dotted">Dotted</option>
                          <option value="dashed">Dashed</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Devider Height :</label>
                      <input type="text" class="form-control devider_height" id="devider_height" value="1px"/>
                    </div>
                    <div class="form-group">
                      <label>Devider Width :</label>
                      <input type="text" class="form-control devider_width" id="devider_width" value="1px"/>
                    </div>
                    <!-- <div class="form-group">
                      <label>Devider Height :</label>
                      <input type="text" class="form-control devider_width" id="devider_width" value=""/>
                    </div> -->
                    <div class="form-group">
                      <label>Custom Devider color :</label>
                      <input type="text" class="form-control devider_color" id="devider_color" />
                      
                      <script type="text/javascript">
                          $('.devider_color').colorpicker();
//                      $('#colorselectorbtncol').colorselector({
//                        callback: function(value, color, title) {
//                          $("#colbtncol").val(color);
//                        }
//                      });
                      </script> 
                    </div>
                    </div>
                    
                    
                    <!-- <div class="form-group"> <label> Align:  </label> <br> <span class="btn-group"> <select id="btnalign"> <option value="center">center</option> <option value="left">left</option> <option value="right">right</option> </select> </span> </div> -->
                    
                    
                    <!-- <div class="form-group">
                      <label>Devider Height :</label>
                      <input type="text" class="form-control devider_width" id="devider_width" value=""/>
                    </div> -->
                    
                  </div>

                  <div id="verticaldevider" style="display:none">
                    <div id="buttonContainer"></div>
                    <br>
                    
                    <!-- <div class="form-group"> <label> Align:  </label> <br> <span class="btn-group"> <select id="btnalign"> <option value="center">center</option> <option value="left">left</option> <option value="right">right</option> </select> </span> </div> -->
                    <div class="form-group">
                      <label>Devider Style :</label>
                      <select class="form-control vertical_devider_style" id="vertical_devider_style">
                          <option value="solid">Solid</option>
                          <option value="dotted">Dotted</option>
                          <option value="dashed">Dashed</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Devider width :</label>
                      <input type="text" class="form-control vertical_devider_width" id="vertical_devider_width" value="1px"/>
                    </div>
                    <!-- <div class="form-group">
                      <label>Devider Height :</label>
                      <input type="text" class="form-control devider_width" id="devider_width" value=""/>
                    </div> -->
                    <div class="form-group">
                      <label>Custom Devider color :</label>
                      <input type="text" class="form-control vertical_devider_color" id="vertical_devider_color" />
                      
                      <script type="text/javascript">
                          $('.vertical_devider_color').colorpicker();
//                      $('#colorselectorbtncol').colorselector({
//                        callback: function(value, color, title) {
//                          $("#colbtncol").val(color);
//                        }
//                      });
                      </script> 
                    </div>
                  </div>

                  <!-- fine bottone-->
                  <div id="code" style="display:none"> </div>
                  <!-- fine code -->
                  <div id="">
                      <div class="set-box line_height_space" style="display: none">
                      <div class="form-group align-dgn mr-0">
                        <label>Line Height</label>
                        <div class="btn-group btn-group-justified" role="group" aria-label="...">
                          <span class='btn btn-default line_height' data-align='0.5' style='cursor:pointer'>0.5</span>
                          <span class='btn btn-default line_height' data-align='1.0' style='cursor:pointer'>1.0</span>
                          <span class='btn btn-default line_height' data-align='1.5'  style='cursor:pointer'>1.5</span>
                          <span class='btn btn-default line_height' data-align='2.0'  style='cursor:pointer'>2.0</span>
                          <span class='btn btn-default line_height' data-align='normal'  style='cursor:pointer'>Normal</span>
                        </div>
                      </div>
                    </div>
                    <div class="set-box line_height_space" style="display: none">
                      <div class="form-group align-dgn mr-0">
                        <label>Letter Space</label>
                        <div class="btn-group btn-group-justified" role="group" aria-label="...">
                          <span class='btn btn-default letter_spacing' data-align='0px' style='cursor:pointer'>0px</span>
                          <span class='btn btn-default letter_spacing' data-align='0.5px' style='cursor:pointer'>0.5px</span>
                          <span class='btn btn-default letter_spacing' data-align='1.0px' style='cursor:pointer'>1.0px</span>
                          <span class='btn btn-default letter_spacing' data-align='1.5px'  style='cursor:pointer'>1.5px</span>
                          <span class='btn btn-default letter_spacing' data-align='2.0px'  style='cursor:pointer'>2.0px</span>
                        </div>
                      </div>
                    </div>
                    <div class="set-box">
                      <div class="form-group align-dgn mr-0">
                        <label>Align</label>
                        <div class="btn-group btn-group-justified" role="group" aria-label="...">
                          <span class='css_align btn btn-default align_main' data-align='justify' style='cursor:pointer'><i class="fa fa-align-justify" aria-hidden="true"></i> justify</span>
                          <span class='css_align btn btn-default align_main' data-align='left' style='cursor:pointer'><i class="fa fa-align-left" aria-hidden="true"></i> Left</span>
                          <span class='css_align btn btn-default align_main' data-align='center' style='cursor:pointer'><i class="fa fa-align-center" aria-hidden="true"></i> Center</span>
                          <span class='css_align btn btn-default align_main' data-align='right'  style='cursor:pointer'><i class="fa fa-align-right" aria-hidden="true"></i> Right</span>
                        </div>
                      </div>
                    </div>
                    <div class="set-title border_wrap_main"><h4>Border</h4></div>
                    <div class="set-box border_wrap_main">
                      <div class="row four-box">
                        <div class="col-xs-4">
                          <div class="form-group mr-0">
                            <label>Border Style :</label>
                            <select class="form-control border_style" id="border_style">
                                <option value="none">Select Border Style</option>
                                <option value="solid">Solid</option>
                                <option value="dotted">Dotted</option>
                                <option value="dashed">Dashed</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-xs-4">
                          <div class="form-group mr-0">
                            <label>Border Size :</label>
                            <input type="text" class="form-control border_size" id="border_size" value="0px"/>
                          </div>
                        </div>
                        <div class="col-xs-4">
                          <!-- <div class="form-group">
                            <label>Devider Height :</label>
                            <input type="text" class="form-control devider_width" id="devider_width" value=""/>
                          </div> -->
                          <div class="form-group mr-0">
                            <label>Border color :</label>
                            <input type="text" class="form-control border_color" id="border_color" />
                            
                            <script type="text/javascript">
                                $('.border_color').colorpicker();
      //                      $('#colorselectorbtncol').colorselector({
      //                        callback: function(value, color, title) {
      //                          $("#colbtncol").val(color);
      //                        }
      //                      });
                            </script> 
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="set-box border_wrap_main">
                      <div class="form-group mr-0">
                        <label>Border Radious :</label>
                        <input type="text" class="form-control main_border_radious" id="main_border_radious" value="0px"/>
                      </div>
                    </div>
                    <div class="set-title"><h4>Margin</h4></div>
                    <div class="set-box">
                      <div class="row four-box">
                        <div class="col-xs-6">
                          <div class="form-group">
                            <label>Top</label>
                            <input type="text" class="form-control text-center main_cell-margin-center margin_top" data-ref="margin-top" value="0px"/>
                          </div>
                        </div>
                        <div class="col-xs-6">
                          <div class="form-group">
                            <label>Right</label>
                            <input type="text" class="form-control text-center main_cell-margin-center margin_right" data-ref="margin-right" value="0px">
                          </div>
                        </div>
                      </div>
                      <div class="row four-box">
                        <div class="col-xs-6">
                          <div class="form-group mr-0">
                            <label>Bottom</label>
                            <input type="text" class="form-control text-center main_cell-margin-center margin_bottom" data-ref="margin-bottom" value="0px">
                          </div>
                        </div>
                        <div class="col-xs-6">
                          <div class="form-group mr-0">
                            <label>Left</label>
                            <input type="text" class="form-control text-center main_cell-margin-center margin_left" data-ref="margin-left" value="0px">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="set-title"><h4>Padding</h4></div>
                    <div class="set-box">
                      <div class="row four-box">
                        <div class="col-xs-6">
                          <div class="form-group">
                            <label>Top</label>
                            <input type="text" class="form-control text-center main_cell_padding_center padding_top" data-ref="padding-top" value="0px"/>
                          </div>
                        </div>
                        <div class="col-xs-6">
                          <div class="form-group">
                            <label>Right</label>
                            <input type="text" class="form-control text-center main_cell_padding_center padding_right" data-ref="padding-right" value="0px">
                          </div>
                        </div>
                      </div>
                      <div class="row four-box">
                        <div class="col-xs-6">
                          <div class="form-group mr-0">
                            <label>Bottom</label>
                            <input type="text" class="form-control text-center main_cell_padding_center padding_bottom" data-ref="padding-bottom" value="0px">
                          </div>
                        </div>
                        <div class="col-xs-6">
                          <div class="form-group mr-0">
                            <label>Left</label>
                            <input type="text" class="form-control text-center main_cell_padding_center padding_left" data-ref="padding-left" value="0px">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="set-box">
                      <div class="form-group">
                      <label>Background Colur:</label>
                      <input type="text" class="form-control main_backround_color" id="main_backround_color" />
                      <script type="text/javascript">
                          $('.main_backround_color').colorpicker();
//                      $('#colorselectorbtncol').colorselector({
//                        callback: function(value, color, title) {
//                          $("#colbtncol").val(color);
//                        }
//                      });
                      </script>
                    </div>
                    </div>
                  </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="CellSettings">
                  <div class="set-box">
                    <div class="form-group mr-0">
                      <label>Background color :</label>
                      <div class="input-grp">
                        <input type="text" class="form-control cell_colbg" id="colbg" />
                      </div>
                      <script type="text/javascript">
                      $('.cell_colbg').colorpicker();
                      </script> 
                    </div>
                  </div>
                  <div class="set-box css_class_id">
                    <div class="form-group align-dgn mr-0">
                      <label>Align</label>
                      <div class="btn-group btn-group-justified" role="group" aria-label="...">
                        <span class='css_align btn btn-default' data-align='justify' style='cursor:pointer'><i class="fa fa-align-justify" aria-hidden="true"></i> justify</span>
                        <span class='css_align btn btn-default' data-align='left' style='cursor:pointer'><i class="fa fa-align-left" aria-hidden="true"></i> Left</span>
                        <span class='css_align btn btn-default' data-align='center' style='cursor:pointer'><i class="fa fa-align-center" aria-hidden="true"></i> Center</span>
                        <span class='css_align btn btn-default' data-align='right'  style='cursor:pointer'><i class="fa fa-align-right" aria-hidden="true"></i> Right</span>
                      </div>
                    </div>
                  </div>
                  <div class="set-box vertical_align">
                    <div class="form-group align-dgn mr-0">
                      <label>Vertical Align</label>
                      <div class="btn-group btn-group-justified" role="group" aria-label="...">
                        <span class='css_vertical_align btn btn-default' data-align='top' style='cursor:pointer'>Top</span>
                        <span class='css_vertical_align btn btn-default' data-align='middle' style='cursor:pointer'>Middle</span>
                        <span class='css_vertical_align btn btn-default' data-align='bottom'  style='cursor:pointer'>Bottom</span>
                      </div>
                    </div>
                  </div>
                  <div id="tabCol">
                    <!--<div class="set-title"><h4>Margin</h4></div>
                    <div class="set-box">
                      <div class="row four-box">
                        <div class="col-xs-6">
                          <div class="form-group">
                            <label>Top</label>
                            <input type="text" class="form-control text-center cell-margin-center" data-ref="margin-top" />
                          </div>
                        </div>
                        <div class="col-xs-6">
                          <div class="form-group">
                            <label>Right</label>
                            <input type="text" class="form-control text-center cell-margin-center" data-ref="margin-right">
                          </div>
                        </div>
                      </div>
                      <div class="row four-box">
                        <div class="col-xs-6">
                          <div class="form-group">
                            <label>Bottom</label>
                            <input type="text" class="form-control text-center cell-margin-center" data-ref="margin-bottom">
                          </div>
                        </div>
                        <div class="col-xs-6">
                          <div class="form-group">
                            <label>Left</label>
                            <input type="text" class="form-control text-center cell-margin-center" data-ref="margin-left">
                          </div>
                        </div>
                      </div>
                    </div>-->
                    <div class="set-title"><h4>Padding</h4></div>
                    <div class="set-box">
                      <div class="row four-box">
                        <div class="col-xs-6">
                          <div class="form-group">
                            <label>Top</label>
                            <input type="text" class="form-control text-center cell_padding_center" data-ref="padding-top" />
                          </div>
                        </div>
                        <div class="col-xs-6">
                          <div class="form-group">
                            <label>Right</label>
                            <input type="text" class="form-control text-center cell_padding_center" data-ref="padding-right">
                          </div>
                        </div>
                      </div>
                      <div class="row four-box">
                        <div class="col-xs-6">
                          <div class="form-group mr-0">
                            <label>Bottom</label>
                            <input type="text" class="form-control text-center cell_padding_center" data-ref="padding-bottom">
                          </div>
                        </div>
                        <div class="col-xs-6">
                          <div class="form-group mr-0">
                            <label>Left</label>
                            <input type="text" class="form-control text-center cell_padding_center" data-ref="padding-left">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="RowSettings">
                  <div class="set-box">
                    <div class="form-group mr-0">
                      <label>Background color :</label>
                      <div class="input-grp">
                        <input type="text" class="form-control row_colbg" id="rowbg" />
                      </div>
                      <script type="text/javascript">
                      $('.row_colbg').colorpicker();
//                      $('#colorselectorrowbg').colorselector({
//                        callback: function(value, color, title) {
//                          $("#rowbg").val(color);
//                        }
//                      });
                      </script> 
                      <!--<div class="form-group"><label>Css class :</label><input type="text" class="form-control" id="rowcss" /></div>-->
                    </div>
                  </div>
                  <div class="set-box">
                    <div class="form-group mr-0">
                      <label>Background image :</label>
                      <input type="text" class="form-control" id="rowbgimage" value='none'/>
                    </div>
                  </div>
                  <div id="tabRow">
                    <!--<div class="set-title"><h4>Margin</h4></div>
                    <div class="set-box">
                      <div class="row four-box">
                        <div class="col-xs-6">
                          <div class="form-group">
                            <label>Top</label>
                            <input type="text" class="form-control text-center row-margin-center" data-ref="margin-top" />
                          </div>
                        </div>
                        <div class="col-xs-6">
                          <div class="form-group">
                            <label>Right</label>
                            <input type="text" class="form-control text-center row-margin-center" data-ref="margin-right">
                          </div>
                        </div>
                      </div>
                      <div class="row four-box">
                        <div class="col-xs-6">
                          <div class="form-group">
                            <label>Bottom</label>
                            <input type="text" class="form-control text-center row-margin-center" data-ref="margin-bottom">
                          </div>
                        </div>
                        <div class="col-xs-6">
                          <div class="form-group">
                            <label>Left</label>
                            <input type="text" class="form-control text-center row-margin-center" data-ref="margin-left">
                          </div>
                        </div>
                      </div>
                    </div>-->
                    <div class="set-title"><h4>Padding</h4></div>
                    <div class="set-box">
                      <div class="row four-box">
                        <div class="col-xs-6">
                          <div class="form-group">
                            <label>Top</label>
                            <input type="text" class="form-control text-center row_padding_center" data-ref="padding-top" />
                          </div>
                        </div>
                        <div class="col-xs-6">
                          <div class="form-group">
                            <label>Right</label>
                            <input type="text" class="form-control text-center row_padding_center" data-ref="padding-right">
                          </div>
                        </div>
                      </div>
                      <div class="row four-box">
                        <div class="col-xs-6">
                          <div class="form-group mr-0">
                            <label>Bottom</label>
                            <input type="text" class="form-control text-center row_padding_center" data-ref="padding-bottom">
                          </div>
                        </div>
                        <div class="col-xs-6">
                          <div class="form-group mr-0">
                            <label>Left</label>
                            <input type="text" class="form-control text-center row_padding_center" data-ref="padding-left">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer hide-foot">
              <button type="button" class="com-btn" id="applyChanges"><i class='fa fa-check'></i>&nbsp;Apply changes</button>
            </div>
          </div>
          <div id="download-layout">
            <div class="container"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="edit custom-dash" style='overflow:inherit !important;'>
      <div class="custom-act">
        <div class="collapse navbar-collapse">
          <ul class="nav" id="menu-htmleditor">
            <li>
              <div class="btn-group" data-toggle="buttons-radio">
                <button type="button" id="edit" class="active btn btn-primary"><i class="glyphicon glyphicon-edit "></i> Edit</button>
                <button type="button" class="btn btn-primary" id="sourcepreview"><i class="glyphicon-eye-open glyphicon"></i> Preview</button>
                <button type="button" id="save" class="btn btn-warning float-right save_signature" data-type="save"><i class="fa fa-save"></i>&nbsp;save</button>
                <button type="button" id="save" class="btn btn-warning float-right save_signature" data-type="download"><i class="fa fa-download"></i>&nbsp;Download</button>
              </div>
              <div class="btn-group" data-toggle="buttons-radio" id='add' style='display: none;'>
                <button type="button" class="active btn btn-default" id="pc"><i class="fa fa-laptop"></i> Desktop</button>
                <button type="button" class="btn btn-default" id="tablet"><i class="fa fa-tablet"></i> Tablet</button>
                <button type="button" class="btn btn-default" id="mobile"><i class="fa fa-mobile"></i> Mobile</button>
              </div>
            </li>
          </ul>
        </div>
      </div>
      <!--<div class="scroll-rev">-->
      
        <div class="prev-wrap">

            <div class="htmlpage"> 
              <?php if($html){
                  echo $html;
                }else{ ?> 

              <div class="lyrow">
                <!-- <a href="#close" class="remove btn btn-danger btn-xs"><i class="glyphicon-remove glyphicon"></i></a><a class="drag btn btn-default btn-xs"><i class="glyphicon glyphicon-move"></i></a><a href="#" class="btn btn-info btn-xs clone"><i class="fa fa-clone"></i></a> -->
                  <div class="preview">
                    <div class="prev-row"><div class="coll coll-12"><div class="coll-prev"></div></div></div>
                  </div>
                  <div class="view">
                    <table width="100%">
                      <tr>
                        <td class="row" style="width:100%;"><div class="column"></div></td>
                      </tr>
                    </table>
                  </div>
                </div>
              <?php } ?>
            </div>
        </div>
      <!--</div>-->
    </div>
</div>
<div class="col-sm-12">
  
</div>
<div class="modal fade" id="download" tabindex="-1" role="dialog" aria-labelledby="download" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span> </button>
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
<!-- <div class="modal fade" id="preferences" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"> -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Upload Image</h4>
      </div>
      <div class="modal-body">
        <div id="mediagallery" style="display:none">
          <div id="contenutoimmagini" class="up-gallery"></div>
          <form enctype="multipart/form-data" id="form-id" class="up-frm">
            <div class="upload-wrap">
              <h3><i class="fa fa-cloud-upload" aria-hidden="true"></i><span>Drag & Drop a file</span><span class="small">or Choose a file</span></h3>
              <input name="nomefile" type="file" class="input-file" />
            </div>
            <input class="button com-btn" type="button" value="Upload" />
          </form>
          <progress value="0"></progress>
          <script type="text/javascript">
          $(document).ready(function() {
            GetSocialIcons('icon1','icons_set_1');
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
//            var view = $(event.target);
//            var viewParentDiv = view.parent(".ckContainer");
//            var uniqueIdforCurrentElement = Math.random().toString();
//            var editor = CKEDITOR.instances[uniqueIdforCurrentElement];
//            if (editor) {
//              editor.destroy(true);
//            }
//            viewParentDiv.attr('contenteditable', true);
//            CKEDITOR.disableAutoInline = true;
//            CKEDITOR.inline(viewParentDiv.get(0));
            
            
          });
          function inserisci(elemento) {
            var link = $(elemento);
            var image = link.data('image');
            $('#img-url').val(image);
            $('#imgContent').children('img').attr('src', image);
            $('#mediagallery').slideUp();
            $('#thepref').slideDown();
            $('#img-url').trigger('keyup');
            $('#myModal').modal('hide');
          }
          function deleteimages(elemento) {
            var link = $(elemento);
            var image = link.data('image');
            var request = $.ajax({
              url: "remove_images",
              method: "POST",
              data : {image:image},
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
          function GetSocialIcons(icon,icon_set) {
            var request = $.ajax({
              url: "get_social_media",
              method: "POST",
              data: {set:icon},
              dataType: "json"
            });
            request.done(function(msg) {
            var social_html = '<div class="social_icons_wrap">';
            var all_html = '';
            for(var i = 0; i<msg.length; i++){
                if(i <= 4){
                  social_html += '<a href="" class="social_image social_'+msg[i]['name']+'"  data-name="'+msg[i]['name']+'" target="_blank" style="'+style_css+'"><img id="social_img_'+msg[i]['name']+'" data-name="'+msg[i]['name']+'" src="'+$('#base_url').val()+'uploads/social_icons/'+icon_set+'/'+msg[i]['icon1']+'" style="width: 40px;"/></a>';
                }
              }
              social_html += '</div>';
              $('.social_wrapper').html(social_html);
              for(var i = 0; i<msg.length; i++){
                var style_css = '';
                if(i <=4){
                  style_css = 'display:none;'
                }
                all_html += '<img src="'+$('#base_url').val()+'uploads/social_icons/'+icon_set+'/'+msg[i]['icon1']+'" id="'+msg[i]['name']+'" data-name="'+msg[i]['name']+'" style="width:35px;margin:5px;'+style_css+'" class="custom_social_media">';
              }
              $('.media_wrapper_custom').html(all_html);
            });
          }
          </script>
          
        </div>
      </div>
      <!--<div class="modal-footer">
        <a class="com-btn" href="javascript:;" onClick="$('#mediagallery').hide();$('#thepref').show();">Return to image settings</a>
      </div>-->
    </div>
  </div>
</div>
<div class='formated_html' id="signature_email_preview"></div>
<!-- </div> -->
