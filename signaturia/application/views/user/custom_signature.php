<?php
$controller = $this->router->fetch_class();
$method = $this->router->fetch_method();

?>

<style>
  /* Absolute Center Spinner */
  .loading {
    position: fixed;
    z-index: 999;
    height: 2em;
    width: 2em;
    overflow: show;
    margin: auto;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
  }

  /* Transparent Overlay */
  .loading:before {
    content: '';
    display: block;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.3);
  }

  /* :not(:required) hides these rules from IE9 and below */
  .loading:not(:required) {
    /* hide "loading..." text */
    font: 0/0 a;
    color: transparent;
    text-shadow: none;
    background-color: transparent;
    border: 0;
  }

  .loading:not(:required):after {
    content: '';
    display: block;
    font-size: 10px;
    width: 1em;
    height: 1em;
    margin-top: -0.5em;
    -webkit-animation: spinner 1500ms infinite linear;
    -moz-animation: spinner 1500ms infinite linear;
    -ms-animation: spinner 1500ms infinite linear;
    -o-animation: spinner 1500ms infinite linear;
    animation: spinner 1500ms infinite linear;
    border-radius: 0.5em;
    -webkit-box-shadow: rgba(0, 0, 0, 0.75) 1.5em 0 0 0, rgba(0, 0, 0, 0.75) 1.1em 1.1em 0 0, rgba(0, 0, 0, 0.75) 0 1.5em 0 0, rgba(0, 0, 0, 0.75) -1.1em 1.1em 0 0, rgba(0, 0, 0, 0.5) -1.5em 0 0 0, rgba(0, 0, 0, 0.5) -1.1em -1.1em 0 0, rgba(0, 0, 0, 0.75) 0 -1.5em 0 0, rgba(0, 0, 0, 0.75) 1.1em -1.1em 0 0;
    box-shadow: rgba(0, 0, 0, 0.75) 1.5em 0 0 0, rgba(0, 0, 0, 0.75) 1.1em 1.1em 0 0, rgba(0, 0, 0, 0.75) 0 1.5em 0 0, rgba(0, 0, 0, 0.75) -1.1em 1.1em 0 0, rgba(0, 0, 0, 0.75) -1.5em 0 0 0, rgba(0, 0, 0, 0.75) -1.1em -1.1em 0 0, rgba(0, 0, 0, 0.75) 0 -1.5em 0 0, rgba(0, 0, 0, 0.75) 1.1em -1.1em 0 0;
  }

  /* Animation */

  @-webkit-keyframes spinner {
    0% {
      -webkit-transform: rotate(0deg);
      -moz-transform: rotate(0deg);
      -ms-transform: rotate(0deg);
      -o-transform: rotate(0deg);
      transform: rotate(0deg);
    }

    100% {
      -webkit-transform: rotate(360deg);
      -moz-transform: rotate(360deg);
      -ms-transform: rotate(360deg);
      -o-transform: rotate(360deg);
      transform: rotate(360deg);
    }
  }

  @-moz-keyframes spinner {
    0% {
      -webkit-transform: rotate(0deg);
      -moz-transform: rotate(0deg);
      -ms-transform: rotate(0deg);
      -o-transform: rotate(0deg);
      transform: rotate(0deg);
    }

    100% {
      -webkit-transform: rotate(360deg);
      -moz-transform: rotate(360deg);
      -ms-transform: rotate(360deg);
      -o-transform: rotate(360deg);
      transform: rotate(360deg);
    }
  }

  @-o-keyframes spinner {
    0% {
      -webkit-transform: rotate(0deg);
      -moz-transform: rotate(0deg);
      -ms-transform: rotate(0deg);
      -o-transform: rotate(0deg);
      transform: rotate(0deg);
    }

    100% {
      -webkit-transform: rotate(360deg);
      -moz-transform: rotate(360deg);
      -ms-transform: rotate(360deg);
      -o-transform: rotate(360deg);
      transform: rotate(360deg);
    }
  }

  @keyframes spinner {
    0% {
      -webkit-transform: rotate(0deg);
      -moz-transform: rotate(0deg);
      -ms-transform: rotate(0deg);
      -o-transform: rotate(0deg);
      transform: rotate(0deg);
    }

    100% {
      -webkit-transform: rotate(360deg);
      -moz-transform: rotate(360deg);
      -ms-transform: rotate(360deg);
      -o-transform: rotate(360deg);
      transform: rotate(360deg);
    }
  }
</style>

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
<script type="text/javascript">
  var path = '';
</script>
<script src="assets/drag_drop/app.js"></script>
<script src="assets/js/html2canvas.js"></script>
<input type="hidden" name="hidden_sign_type" id="hidden_sign_type" value="1">
<input type="hidden" name="hidden_sign_image" id="hidden_sign_image">
<input type="hidden" name="hidden_sign_image" id="user_id" value="<?php echo base64_encode($this->session->userdata('htmlsig_user')['id']); ?>">
<input type="hidden" name="signature_id" id="signature_id" value="<?php echo $signature_id; ?>">
<input type="hidden" name="generator_id" id="generator_id" value="<?php echo $generator_id; ?>">
<div class="modal fade bs-example-modal-sm twitter_modal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" data-backdrop="static">
  <!-- <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-body text-center">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">+</button>
                <h3 class="sure">Get latest Tweet?</h3>
                <p>You have not connected your twitter account yet! Please connect your account to get latest tweet. Click on below link to conncet</p>
                <a target="_blank" href="<?php echo site_url('user/social_settings') ?>" class="com-btn" onclick="return close_modal();">Connect</a>
            </div>
        </div>
    </div> -->
  <div class="p-4 lg:p-6 xl:p-16 lg:ml-72 ">
    <div class="flex flex-wrap -mx-4">
      <div class="w-full md:w-1/2 px-4">
        <span class="text-primary min-h-[40px] hidden sm:flex items-center font-semibold pl-5 relative before:w-[10px] before:h-[10px] before:bg-secondary before:inline-block before:absolute before:left-0 before:top-1/2 before:-translate-y-1/2 before:rounded-full text-base">Your Plan Detail</span>
        <div class="bg-white p-4 sm:p-10 rounded-[5px] h-[calc(100vh-200px)]">
        </div>
      </div>
      <div class="w-full md:w-1/2 px-4">
        <span class="text-primary min-h-[40px] hidden sm:flex items-center font-semibold pl-5 relative before:w-[10px] before:h-[10px] before:bg-secondary before:inline-block before:absolute before:left-0 before:top-1/2 before:-translate-y-1/2 before:rounded-full text-base">Your Plan Detail</span>
        <div class="bg-white p-4 sm:p-10 rounded-[5px] h-[calc(100vh-200px)]">
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-4 col-sm-5 col-xs-6">
    <div class="box-wrap">
      <div class="box-title">
        <h3>Custom Signature</h3>
      </div>
      <div class="box-body list-height" id="signature_preview">
        <div class="preview-wrap">
          <div class="sidebar-nav">
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active"><a href="#content" class="nav_menu_tab" aria-controls="content" role="tab" data-toggle="tab"><i class="fa fa-html5"></i> Content</a></li>
              <li role="presentation"><a href="#structure" class="nav_menu_tab" aria-controls="structure" role="tab" data-toggle="tab"><i class="fa fa fa-th"></i> Structure</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="content">
                <input type='hidden' value='<?php echo base_url(); ?>' id='base_url' />
                <div class="tools-row">
                  <div class="tools-box">
                    <div class="box box-element" data-type="paragraph"><a href="#close" class="remove btn btn-danger btn-xs"><i class="glyphicon glyphicon-remove"></i></a><a class="drag btn btn-default btn-xs"><i class="glyphicon glyphicon-move"></i></a><span class="configuration"><a class="btn btn-xs btn-warning settings" href="#"><i class="fa fa-gear"></i></a></span>
                      <div class="preview"><i class="fa fa-paragraph"></i>
                        <div class="element-desc">Paragraph</div>
                      </div>
                      <div class="view ckContainer">
                        <p>Click me to edit</p>
                      </div>
                    </div>
                  </div>
                  <div class="tools-box">
                    <div class="box box-element" data-type="image"><a href="#close" class="remove btn btn-danger btn-xs"><i class="glyphicon glyphicon-remove"></i></a><a class="drag btn btn-default btn-xs"><i class="glyphicon glyphicon-move"></i></a><span class="configuration"><a class="btn btn-xs btn-warning settings" href="#"><i class="fa fa-gear"></i></a></span>
                      <div class="preview"><i class="fa fa-picture-o"></i>
                        <div class="element-desc">Image</div>
                      </div>
                      <div class="view"><a href='javascript:void(0)' class='image_href'><img src="http://placehold.it/350x150" class="image_banner" title="default title" data-href='' /></a></div>
                    </div>
                  </div>
                  <div class="tools-box">
                    <div class="box box-element" data-type="social"><a href="#close" class="remove btn btn-danger btn-xs"><i class="glyphicon glyphicon-remove"></i></a><a class="drag btn btn-default btn-xs"><i class="glyphicon glyphicon-move"></i></a><span class="configuration"><a class="btn btn-xs btn-warning settings" href="#"><i class="fa fa-gear"></i></a></span>
                      <div class="preview"><i class="fa fa-share-alt"></i>
                        <div class="element-desc">Social Icon</div>
                      </div>
                      <div class="view social_wrapper" data-icon='icon1' data-set='icons_set_1'><a href="javascript:void(0);" class="social_image social_facebook" data-name='facebook' target="_blank"><img id='social_img_facebook' data-name="Facebook" src="<?php echo base_url(); ?>assets/images/social/Facebook.png" style="width: 40px;" /></a><a href="javascript:void(0);" class="social_image social_youtube" data-name='youtube' target="_blank"><img id='social_img_youtube' data-name="Youtube" src="<?php echo base_url(); ?>assets/images/social/YouTube.png" style="width: 40px;" /></a> <a href="javascript:void(0);" class="social_image social_twitter" data-name='twitter' target="_blank"><img id='social_img_twitter' data-name="Twitter" src="<?php echo base_url(); ?>assets/images/social/Twitter.png" style="width: 40px;" /></a> <a href="javascript:void(0);" class="social_image social_google" data-name='google' target="_blank"><img id='social_img_google' data-name="Google+" src="<?php echo base_url(); ?>assets/images/social/Google+.png" style="width: 40px;" /></a> <a href="javascript:void(0);" class="social_image social_blogger" data-name='blogger' target="_blank"><img id='social_img_blogger' data-name="Blogger" src="<?php echo base_url(); ?>assets/images/social/Blogger.png" style="width: 40px;" /></a></div>
                    </div>
                  </div>
                  <div class="tools-box">
                    <div class="box box-element" data-type="appstore"><a href="#close" class="remove btn btn-danger btn-xs"><i class="glyphicon glyphicon-remove"></i></a><a class="drag btn btn-default btn-xs"><i class="glyphicon glyphicon-move"></i></a><span class="configuration"><a class="btn btn-xs btn-warning settings" href="#"><i class="fa fa-gear"></i></a></span>
                      <div class="preview"><i class="fa fa-mobile"></i>
                        <div class="element-desc">App Store</div>
                      </div>
                      <div class="view media_wrapper">
                        <div class="media_content_wrapper">
                          <a class="appstore signature_apple_app_store_link-target sig-hide media_apple" style="text-decoration:none;" href="javascript:void(0);" data-href="javascript:void(0);" data-name='apple' target="_blank" data-indent="appstore">
                            <img style="border:none;" height="35" width="113" src="<?php echo base_url(); ?>assets/images/apple.png" class="appstore-icon " alt="Download on the App Store" data-pin-nopin="true" id='media_apple' data-name="Apple">
                          </a>
                          <a class="appstore signature_google_play_link-target sig-hide media_google" style="text-decoration:none;" href="javascript:void(0);" data-href="javascript:void(0);" data-name='google' target="_blank" data-indent="googleplaytore">
                            <img style="border:none;" height="35" width="113" src="<?php echo base_url(); ?>assets/images/google.png" class="appstore-icon " alt="Get it on Google Play" id='media_google' data-name="google">
                          </a>
                          <a class="appstore signature_amazon_app_store_link-target sig-hide media_amazon" style="text-decoration:none;" href="javascript:void(0);" data-href="javascript:void(0);" data-name='amazon' target="_blank" data-indent="amazon">
                            <img style="border:none;" height="35" width="113" src="<?php echo base_url(); ?>assets/images/amazon.png" class="appstore-icon" alt="Available at Amazon" id='media_amazon' data-name="amazon"></a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php if ($controller == 'customsignature' && $method == 'custom_signature') { ?>
                    <div class="tools-box">
                      <div class="box box-element" data-type="youtube"><a href="#close" class="remove btn btn-danger btn-xs"><i class="glyphicon glyphicon-remove"></i></a><a class="drag btn btn-default btn-xs"><i class="glyphicon glyphicon-move"></i></a><span class="configuration"><a class="btn btn-xs btn-warning settings" href="#"><i class="fa fa-gear"></i></a></span>
                        <div class="preview"><i class="fa fa-youtube"></i>
                          <div class="element-desc">Youtube</div>
                        </div>
                        <div class="view">
                          <iframe class="img-responsive" src="https://www.youtube.com/embed/WIJaD623dy0" frameborder="0" allowfullscreen data-url=""></iframe>
                        </div>
                      </div>
                    </div>

                    <div class="tools-box">
                      <div class="box box-element" data-type="twitter"><a href="#close" class="remove btn btn-danger btn-xs"><i class="glyphicon glyphicon-remove"></i></a><a class="drag btn btn-default btn-xs"><i class="glyphicon glyphicon-move"></i></a><span class="configuration"><a class="btn btn-xs btn-warning settings" href="#"><i class="fa fa-gear"></i></a></span>
                        <div class="preview"><i class="fa fa-twitter"></i>
                          <div class="element-desc">Twit</div>
                        </div>
                        <div class="view">
                          <p class="latest_tweet"></p>
                        </div>
                      </div>
                    </div>
                  <?php } ?>
                  <div class="tools-box">
                    <div class="box box-element" data-type="code"><a href="#close" class="remove btn btn-danger btn-xs"><i class="glyphicon glyphicon-remove"></i></a><a class="drag btn btn-default btn-xs"><i class="glyphicon glyphicon-move"></i></a><span class="configuration"> <a class="btn btn-xs btn-warning settings" href="#"><i class="fa fa-gear"></i></a></span>
                      <div class="preview"><i class="fa fa-code"></i>
                        <div class="element-desc">Code</div>
                      </div>
                      <div class="view"> i'm html code, change me </div>
                    </div>
                  </div>
                  <div class="tools-box">
                    <div class="box box-element" data-type="horizontal"><a href="#close" class="remove btn btn-danger btn-xs"><i class="glyphicon glyphicon-remove"></i></a><a class="drag btn btn-default btn-xs"><i class="glyphicon glyphicon-move"></i></a><span class="configuration"> <a class="btn btn-xs btn-warning settings" href="#"><i class="fa fa-gear"></i></a></span>
                      <div class="preview"><i class="fa">----</i>
                        <div class="element-desc">Divider</div>
                      </div>
                      <div class="view horizontal_wrapper">
                        <hr class='hr_devider' style="border-top: 1px solid #ccc;margin:20px 0;padding:0;">
                        </hr>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div role="tabpanel" class="tab-pane" id="structure">
                <div class="lyrow"><a href="#close" class="remove btn btn-danger btn-xs"><i class="glyphicon-remove glyphicon"></i></a><a class="drag btn btn-default btn-xs"><i class="glyphicon glyphicon-move"></i></a><a href="#" class="btn btn-info btn-xs clone"><i class="fa fa-clone"></i></a>
                  <div class="preview">
                    <div class="prev-row">
                      <div class="coll coll-12">
                        <div class="coll-prev"></div>
                      </div>
                    </div>
                  </div>
                  <div class="view">
                    <table width="100%">
                      <tr>
                        <td class="row" style="width:100%;">
                          <div class="column"></div>
                        </td>
                      </tr>
                    </table>
                  </div>
                </div>
                <div class="lyrow"><a href="#close" class="remove btn btn-danger btn-xs"><i class="glyphicon-remove glyphicon"></i></a><a class="drag btn btn-default btn-xs"><i class="glyphicon glyphicon-move"></i></a> <a href="#" class="btn btn-info btn-xs clone"><i class="fa fa-clone"></i></a>
                  <div class="preview">
                    <div class="prev-row">
                      <div class="coll coll-6">
                        <div class="coll-prev"></div>
                      </div>
                      <div class="coll coll-6">
                        <div class="coll-prev"></div>
                      </div>
                    </div>
                  </div>
                  <div class="view">
                    <table width="100%">
                      <tr>
                        <td class="row" style="width:50%;">
                          <div class="column"></div>
                        </td>
                        <td class="row" style="width:50%;">
                          <div class="column"></div>
                        </td>
                      </tr>
                    </table>
                  </div>
                </div>
                <div class="lyrow"><a href="#close" class="remove btn btn-danger btn-xs"><i class="glyphicon-remove glyphicon"></i></a><a class="drag btn btn-default btn-xs"><i class="glyphicon glyphicon-move"></i></a> <a href="#" class="btn btn-info btn-xs clone"><i class="fa fa-clone"></i></a>
                  <div class="preview">
                    <div class="prev-row">
                      <div class="coll coll-8">
                        <div class="coll-prev"></div>
                      </div>
                      <div class="coll coll-4">
                        <div class="coll-prev"></div>
                      </div>
                    </div>
                  </div>
                  <div class="view">
                    <table width="100%">
                      <tr>
                        <td class="row" style="width:66.6666%;">
                          <div class=" column"></div>
                        </td>
                        <td class="row" style="width:33.3333%;">
                          <div class=" column"></div>
                        </td>
                      </tr>
                    </table>
                  </div>
                </div>
                <div class="lyrow"><a href="#close" class="remove btn btn-danger btn-xs"><i class="glyphicon-remove glyphicon"></i></a><a class="drag btn btn-default btn-xs"><i class="glyphicon glyphicon-move"></i></a> <a href="#" class="btn btn-info btn-xs clone"><i class="fa fa-clone"></i></a>
                  <div class="preview">
                    <div class="prev-row">
                      <div class="coll coll-4">
                        <div class="coll-prev"></div>
                      </div>
                      <div class="coll coll-8">
                        <div class="coll-prev"></div>
                      </div>
                    </div>
                  </div>
                  <div class="view">
                    <table width="100%">
                      <tr>
                        <td class="row" style="width:33.3333%;">
                          <div class=" column"></div>
                        </td>
                        <td class="row" style="width:66.6666%;">
                          <div class=" column"></div>
                        </td>
                      </tr>
                    </table>
                  </div>
                </div>
                <div class="lyrow"><a href="#close" class="remove btn btn-danger btn-xs"><i class="glyphicon-remove glyphicon"></i></a><a class="drag btn btn-default btn-xs"><i class="glyphicon glyphicon-move"></i></a> <a href="#" class="btn btn-info btn-xs clone"><i class="fa fa-clone"></i></a>
                  <div class="preview">
                    <div class="prev-row">
                      <div class="coll coll-3">
                        <div class="coll-prev"></div>
                      </div>
                      <div class="coll coll-9">
                        <div class="coll-prev"></div>
                      </div>
                    </div>
                  </div>
                  <div class="view">
                    <table width="100%">
                      <tr>
                        <td class="row" style="width:25%;">
                          <div class=" column"></div>
                        </td>
                        <td class="row" style="width:75%;">
                          <div class=" column"></div>
                        </td>
                      </tr>
                    </table>
                  </div>
                </div>
                <div class="lyrow"><a href="#close" class="remove btn btn-danger btn-xs"><i class="glyphicon-remove glyphicon"></i></a><a class="drag btn btn-default btn-xs"><i class="glyphicon glyphicon-move"></i></a> <a href="#" class="btn btn-info btn-xs clone"><i class="fa fa-clone"></i></a>
                  <div class="preview">
                    <div class="prev-row">
                      <div class="coll coll-9">
                        <div class="coll-prev"></div>
                      </div>
                      <div class="coll coll-3">
                        <div class="coll-prev"></div>
                      </div>
                    </div>
                  </div>
                  <div class="view">
                    <table width="100%">
                      <tr>
                        <td class="row" style="width:75%;">
                          <div class=" column"></div>
                        </td>
                        <td class="row" style="width:25%;">
                          <div class=" column"></div>
                        </td>
                      </tr>
                    </table>
                  </div>
                </div>
                <div class="lyrow"><a href="#close" class="remove btn btn-danger btn-xs"><i class="glyphicon-remove glyphicon"></i></a><a class="drag btn btn-default btn-xs"><i class="glyphicon glyphicon-move"></i></a> <a href="#" class="btn btn-info btn-xs clone"><i class="fa fa-clone"></i></a>
                  <div class="preview">
                    <div class="prev-row">
                      <div class="coll coll-4">
                        <div class="coll-prev"></div>
                      </div>
                      <div class="coll coll-4">
                        <div class="coll-prev"></div>
                      </div>
                      <div class="coll coll-4">
                        <div class="coll-prev"></div>
                      </div>
                    </div>
                  </div>
                  <div class="view">
                    <table width="100%">
                      <tr>
                        <td class="row" style="width:33.3333%;">
                          <div class=" column"></div>
                        </td>
                        <td class="row" style="width:33.3333%;">
                          <div class=" column"></div>
                        </td>
                        <td class="row" style="width:33.3333%;">
                          <div class=" column"></div>
                        </td>
                      </tr>
                    </table>
                  </div>
                </div>
                <div class="lyrow"><a href="#close" class="remove btn btn-danger btn-xs"><i class="glyphicon-remove glyphicon"></i></a><a class="drag btn btn-default btn-xs"><i class="glyphicon glyphicon-move"></i></a> <a href="#" class="btn btn-info btn-xs clone"><i class="fa fa-clone"></i></a>
                  <div class="preview">
                    <div class="prev-row">
                      <div class="coll coll-3">
                        <div class="coll-prev"></div>
                      </div>
                      <div class="coll coll-3">
                        <div class="coll-prev"></div>
                      </div>
                      <div class="coll coll-3">
                        <div class="coll-prev"></div>
                      </div>
                      <div class="coll coll-3">
                        <div class="coll-prev"></div>
                      </div>
                    </div>
                  </div>
                  <div class="view">
                    <table width="100%">
                      <tr>
                        <td class="row" style="width:25%;">
                          <div class="column"></div>
                        </td>
                        <td class="row" style="width:25%;">
                          <div class="column"></div>
                        </td>
                        <td class="row" style="width:25%;">
                          <div class="column"></div>
                        </td>
                        <td class="row" style="width:25%;">
                          <div class="column"></div>
                        </td>
                      </tr>
                    </table>
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
                      <div id="image" style="display:none">
                        <div class="set-title">
                          <h4>Upload Image</h4>
                        </div>
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
                          <div class="form-group">
                            <label for="img-url">Banner Link :</label>
                            <input type="text" value="" id="img-url-link" class="form-control" />
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
                        <div class="set-title">
                          <h4>Social Icon Style</h4>
                        </div>
                        <div class="set-box">
                          <div class="row four-box">
                            <div class="col-xs-6">
                              <div class="form-group mr-0">
                                <label>Icon Type</label>
                                <select class="media_set form-control">
                                  <option value='icon1' data-set='icons_set_1'>Set 1</option>
                                  <option value='icon2' data-set='icons_set_2'>Set 2</option>
                                  <option value='icon3' data-set='icons_set_3'>Set 3</option>
                                  <option value='icon4' data-set='icons_set_4'>Set 4</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-xs-6">
                              <div class="form-group mr-0">
                                <label>Icon Size</label>
                                <select class="media_size form-control">
                                  <option value='14px' data-set='icons_set_1'>14px</option>
                                  <option value='16px' data-set='icons_set_2'>16px</option>
                                  <option value='18px' data-set='icons_set_3'>18px</option>
                                  <option value='20px' data-set='icons_set_4'>20px</option>
                                  <option value='24px' data-set='icons_set_4'>24px</option>
                                  <option value='28px' data-set='icons_set_4'>28px</option>
                                  <option value='30px' data-set='icons_set_4'>30px</option>
                                  <option value='34px' data-set='icons_set_4'>34px</option>
                                  <option value='36px' data-set='icons_set_4'>36px</option>
                                  <option value='40px' data-set='icons_set_4' selected>40px</option>
                                </select>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="set-title">
                          <h4>Set Social Link</h4>
                        </div>
                        <div class="set-box">
                          <div id="socialContainer" class="social-cst"></div>
                        </div>
                        <div class="set-title">
                          <h4>Add Social Link</h4>
                        </div>
                        <div class="set-box">
                          <div class='media_wrapper_custom'><img src="assets/images/social/Behance.png" id="behance" data-name='behance' style="width:35px;margin:5px" class="custom_social_media"><img src="assets/images/social/Blogger.png" id="blogger" data-name='blogger' style="width:35px;margin:5px"><img src="assets/images/social/Deliciou.png" id="deliciou" data-name='deliciou' style="width:35px;margin:5px"><img src="assets/images/social/DeviantART.png" id="deviantart" data-name='deviantart' style="width:35px;margin:5px"><img src="assets/images/social/Digg.png" id='digg' data-name='digg' style="width:35px;margin:5px"><img src="assets/images/social/Dribbble.png" id='dribbble' data-name='dribbble' style="width:35px;margin:5px"><img src="assets/images/social/Evernote.png" id='evernote' data-name='evernote' style="width:35px;margin:5px"><img src="assets/images/social/Facebook.png" id='facebook' data-name='facebook' style="width:35px;margin:5px"><img src="assets/images/social/Flickr.png" id='flickr' data-name='flickr' style="width:35px;margin:5px"><img src="assets/images/social/Formspring.png" id='formspring' data-name='formspring' style="width:35px;margin:5px"><img src="assets/images/social/Google+.png" id='google' data-name='google' style="width:35px;margin:5px"><img src="assets/images/social/Instgram.png" id='instgram' data-name='instgram' style="width:35px;margin:5px"><img src="assets/images/social/Linked-in.png" id='linked-in' data-name='linked-in' style="width:35px;margin:5px"><img src="assets/images/social/MySpace.png" id='myspace' data-name='myspace' style="width:35px;margin:5px"><img src="assets/images/social/Picasa.png" id='picasa' data-name='picasa' style="width:35px;margin:5px"><img src="assets/images/social/Pinterest.png" id='pinterest' data-name='pinterest' style="width:35px;margin:5px"><img src="assets/images/social/Instgram.png" id='pocket' data-name='pocket' style="width:35px;margin:5px"><img src="assets/images/social/Skype.png" id='skype' data-name='skype' style="width:35px;margin:5px"><img src="assets/images/social/SoundCloud.png" id='soundcloud' data-name='soundcloud' style="width:35px;margin:5px"><img src="assets/images/social/Tumblr.png" id='tumblr' data-name='tumblr' style="width:35px;margin:5px"><img src="assets/images/social/Twitter.png" id='twitter' data-name='twitter' style="width:35px;margin:5px"><img src="assets/images/social/Instgram.png" id='instgram' data-name='instgram' style="width:35px;margin:5px"><img src="assets/images/social/Vimeo.png" id='vimeo' data-name='vimeo' style="width:35px;margin:5px"><img src="assets/images/social/Wordpress.png" id='wordpress' data-name='wordpress' style="width:35px;margin:5px"><img src="assets/images/social/Yahoo!.png" id='yahoo' data-name='yahoo' style="width:35px;margin:5px"><img src="assets/images/social/YouTube.png" id='youTube' data-name='youTube' style="width:35px;margin:5px"></div>
                        </div>
                      </div>
                      <div id="appstore" style="display:none">
                        <div class="set-title">
                          <h4>Set App Store Link</h4>
                        </div>
                        <div class="set-box">
                          <div id="appstoreContainer" class="app-cst"></div>
                        </div>
                        <div class="set-title">
                          <h4>Add App Store Link</h4>
                        </div>
                        <div class="set-box">
                          <div class='app_store_wrapper'></div>
                        </div>
                      </div>
                      <!-- fine settaggi immagine -->
                      <div id="youtube" class="youtube_settings" style="display:none">
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
                      <div id="twitter" style="display:none">
                        <div id="buttonContainer"></div>
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
                            <input type="text" id="custombtnwidth" style="width:20%" />
                            <input type="text" id="custombtnheight" style="width:20%" />
                            <input type="text" id="custombtnfont" style="width:20%" />
                            <input type="text" id="custombtnpaddingtop" style="width:20%" />
                          </span>
                        </div>
                        <div class="form-group">
                          <label>Custom background color :</label>
                          <input type="text" class="form-control colbtn" id="colbtn" />

                          <script type="text/javascript">
                            $('.colbtn').colorpicker();
                          </script>
                        </div>
                        <div class="form-group">
                          <label>Custom text color :</label>
                          <input type="text" class="form-control colbtncol" id="colbtncol" />

                          <script type="text/javascript">
                            $('.colbtncol').colorpicker();
                          </script>
                        </div>
                      </div>

                      <div id="horizontaldevider" style="display:none">
                        <div id="buttonContainer"></div>
                        <div class="set-title">
                          <h4>Border</h4>
                        </div>
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
                            <input type="text" class="form-control devider_height" id="devider_height" value="1px" />
                          </div>
                          <div class="form-group">
                            <label>Devider Width :</label>
                            <input type="text" class="form-control devider_width" id="devider_width" value="1px" />
                          </div>
                          <div class="form-group">
                            <label>Custom Devider color :</label>
                            <input type="text" class="form-control devider_color" id="devider_color" />

                            <script type="text/javascript">
                              $('.devider_color').colorpicker();
                            </script>
                          </div>
                        </div>
                      </div>

                      <div id="verticaldevider" style="display:none">
                        <div id="buttonContainer"></div>
                        <br>
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
                          <input type="text" class="form-control vertical_devider_width" id="vertical_devider_width" value="1px" />
                        </div>
                        <div class="form-group">
                          <label>Custom Devider color :</label>
                          <input type="text" class="form-control vertical_devider_color" id="vertical_devider_color" />

                          <script type="text/javascript">
                            $('.vertical_devider_color').colorpicker();
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
                              <span class='btn btn-default line_height' data-align='1.5' style='cursor:pointer'>1.5</span>
                              <span class='btn btn-default line_height' data-align='2.0' style='cursor:pointer'>2.0</span>
                              <span class='btn btn-default line_height' data-align='normal' style='cursor:pointer'>Normal</span>
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
                              <span class='btn btn-default letter_spacing' data-align='1.5px' style='cursor:pointer'>1.5px</span>
                              <span class='btn btn-default letter_spacing' data-align='2.0px' style='cursor:pointer'>2.0px</span>
                            </div>
                          </div>
                        </div>
                        <div class="set-box non_code_control">
                          <div class="form-group align-dgn mr-0">
                            <label>Align</label>
                            <div class="btn-group btn-group-justified" role="group" aria-label="...">
                              <span class='css_align btn btn-default align_main' data-align='justify' style='cursor:pointer'><i class="fa fa-align-justify" aria-hidden="true"></i> justify</span>
                              <span class='css_align btn btn-default align_main' data-align='left' style='cursor:pointer'><i class="fa fa-align-left" aria-hidden="true"></i> Left</span>
                              <span class='css_align btn btn-default align_main' data-align='center' style='cursor:pointer'><i class="fa fa-align-center" aria-hidden="true"></i> Center</span>
                              <span class='css_align btn btn-default align_main' data-align='right' style='cursor:pointer'><i class="fa fa-align-right" aria-hidden="true"></i> Right</span>
                            </div>
                          </div>
                        </div>
                        <div class="set-title border_wrap_main">
                          <h4>Border</h4>
                        </div>
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
                                <input type="text" class="form-control border_size" id="border_size" value="0px" />
                              </div>
                            </div>
                            <div class="col-xs-4">
                              <div class="form-group mr-0">
                                <label>Border color :</label>
                                <input type="text" class="form-control border_color" id="border_color" />

                                <script type="text/javascript">
                                  $('.border_color').colorpicker();
                                </script>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="set-box border_wrap_main">
                          <div class="form-group mr-0">
                            <label>Border Radious :</label>
                            <input type="text" class="form-control main_border_radious" id="main_border_radious" value="0px" />
                          </div>
                        </div>
                        <div class="set-title non_code_control">
                          <h4>Margin</h4>
                        </div>
                        <div class="set-box non_code_control">
                          <div class="row four-box">
                            <div class="col-xs-6">
                              <div class="form-group">
                                <label>Top</label>
                                <input type="text" class="form-control text-center main_cell-margin-center margin_top" data-ref="margin-top" value="0px" />
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
                        <div class="set-title non_code_control">
                          <h4>Padding</h4>
                        </div>
                        <div class="set-box non_code_control">
                          <div class="row four-box">
                            <div class="col-xs-6">
                              <div class="form-group">
                                <label>Top</label>
                                <input type="text" class="form-control text-center main_cell_padding_center padding_top" data-ref="padding-top" value="0px" />
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
                        <div class="set-box non_code_control">
                          <div class="form-group">
                            <label>Background Colur:</label>
                            <input type="text" class="form-control main_backround_color" id="main_backround_color" />
                            <script type="text/javascript">
                              $('.main_backround_color').colorpicker();
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
                            <span class='css_align btn btn-default' data-align='right' style='cursor:pointer'><i class="fa fa-align-right" aria-hidden="true"></i> Right</span>
                          </div>
                        </div>
                      </div>
                      <div class="set-box vertical_align">
                        <div class="form-group align-dgn mr-0">
                          <label>Vertical Align</label>
                          <div class="btn-group btn-group-justified" role="group" aria-label="...">
                            <span class='css_vertical_align btn btn-default' data-align='top' style='cursor:pointer'>Top</span>
                            <span class='css_vertical_align btn btn-default' data-align='middle' style='cursor:pointer'>Middle</span>
                            <span class='css_vertical_align btn btn-default' data-align='bottom' style='cursor:pointer'>Bottom</span>
                          </div>
                        </div>
                      </div>
                      <div id="tabCol">
                        <div class="set-title">
                          <h4>Padding</h4>
                        </div>
                        <div class="set-box">
                          <div class="row four-box">
                            <div class="col-xs-6">
                              <div class="form-group">
                                <label>Top</label>
                                <input type="text" class="form-control text-center cell_padding_center cell_padding_top" data-ref="padding-top" />
                              </div>
                            </div>
                            <div class="col-xs-6">
                              <div class="form-group">
                                <label>Right</label>
                                <input type="text" class="form-control text-center cell_padding_center cell_padding_right" data-ref="padding-right">
                              </div>
                            </div>
                          </div>
                          <div class="row four-box">
                            <div class="col-xs-6">
                              <div class="form-group mr-0">
                                <label>Bottom</label>
                                <input type="text" class="form-control text-center cell_padding_center cell_padding_bottom" data-ref="padding-bottom">
                              </div>
                            </div>
                            <div class="col-xs-6">
                              <div class="form-group mr-0">
                                <label>Left</label>
                                <input type="text" class="form-control text-center cell_padding_center cell_padding_left" data-ref="padding-left">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="RowSettings">
                      <div class="set-box">
                        <div class="form-group mr-0">
                          <label>Font Style :</label>
                          <div class="input-grp">
                            <select name="signature_font_style" id="signature_font_style" class="form-control">
                              <option value="Helvetica, Arial, sans-serif">Arial</option>
                              <option value="'Open Sans', sans-serif">Open Sans</option>
                              <option value="'Lato', sans-serif">Lato</option>
                              <option value="'Roboto', sans-serif">Roboto</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="set-box">
                        <div class="form-group mr-0">
                          <label>Background color :</label>
                          <div class="input-grp">
                            <input type="text" class="form-control row_colbg" id="rowbg" />
                          </div>
                          <script type="text/javascript">
                            $('.row_colbg').colorpicker();
                          </script>
                        </div>
                      </div>
                      <div class="set-box">
                        <div class="form-group mr-0">
                          <label>Background image :</label>
                          <input type="text" class="form-control rowbgimage" id="rowbgimage" value='none' />
                        </div>
                      </div>
                      <div id="tabRow">
                        <div class="set-title">
                          <h4>Padding</h4>
                        </div>
                        <div class="set-box">
                          <div class="row four-box">
                            <div class="col-xs-6">
                              <div class="form-group">
                                <label>Top</label>
                                <input type="text" class="form-control text-center row_padding_center row_padding_top" data-ref="padding-top" />
                              </div>
                            </div>
                            <div class="col-xs-6">
                              <div class="form-group">
                                <label>Right</label>
                                <input type="text" class="form-control text-center row_padding_center row_padding_right" data-ref="padding-right">
                              </div>
                            </div>
                          </div>
                          <div class="row four-box">
                            <div class="col-xs-6">
                              <div class="form-group mr-0">
                                <label>Bottom</label>
                                <input type="text" class="form-control text-center row_padding_center row_padding_bottom" data-ref="padding-bottom">
                              </div>
                            </div>
                            <div class="col-xs-6">
                              <div class="form-group mr-0">
                                <label>Left</label>
                                <input type="text" class="form-control text-center row_padding_center row_padding_left" data-ref="padding-left">
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
      </div>
    </div>
  </div>
  <div class="col-md-8 col-sm-7 col-xs-6">
    <div class="box-wrap">
      <div class="box-title">
        <!-- <h3></h3> -->
        <div class="box-act" id="menu-htmleditor">
          <button type="button" id="edit" class="active box-btn">Edit</button>
          <button type="button" class="box-btn" id="sourcepreview">Preview</button>
          <?php if ($custom_generator == 1) { ?>
            <button type="button" id="save" class="box-btn save_signature" data-type="generator">Next</button>
          <?php } elseif ($share_generator == 1) { ?>
            <button type="button" id="save" class="box-btn download_generator" data-type="download-generator">Download</button>
          <?php } else { ?>
            <button type="button" id="save" class="box-btn save_signature" data-type="save">save</button>
            <button type="button" id="save" class="box-btn save_signature" data-type="download">Download</button>
          <?php } ?>
          <!-- <div class="btn-group" data-toggle="buttons-radio" id='add' style='display: none;'>
              <button type="button" class="active btn btn-default" id="pc"><i class="fa fa-laptop"></i> Desktop</button>
              <button type="button" class="btn btn-default" id="tablet"><i class="fa fa-tablet"></i> Tablet</button>
              <button type="button" class="btn btn-default" id="mobile"><i class="fa fa-mobile"></i> Mobile</button>
            </div> -->
        </div>
      </div>
      <div class="box-body">
        <a href="" id='auto_download' style='display:none'></a>
        <div class="edit custom-dash" style='overflow:inherit !important;'>
          <div class="prev-wrap">
            <div class="htmlpage">
              <?php if ($html) {
                echo $html;
              } else { ?>
                <div class="lyrow">
                  <div class="preview">
                    <div class="prev-row">
                      <div class="coll coll-12">
                        <div class="coll-prev"></div>
                      </div>
                    </div>
                  </div>
                  <div class="view">
                    <table width="100%">
                      <tr>
                        <td class="row" style="width:100%;">
                          <div class="column art-board"></div>
                        </td>
                      </tr>
                    </table>
                  </div>
                </div>
              <?php } ?>
              <div style="display:none" class="internal_settings">
              </div>
            </div>
          </div>
          <!--</div>-->
        </div>
      </div>
    </div>
  </div>
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
              GetSocialIcons('icon1', 'icons_set_1');
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
                  $('#contenutoimmagini').scrollTop(0);
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
              $('#contenutoimmagini').scrollTop(0);
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
                var social_html = '<div class="social_icons_wrap">';
                var all_html = '';
                for (var i = 0; i < msg.length; i++) {
                  if (i <= 4) {
                    social_html += '<a href="javascript:void(0);" data-href = "javascript:void(0);" class="social_image social_' + msg[i]['name'] + '"  data-name="' + msg[i]['name'] + '" target="_blank" style="' + style_css + '" data-indent="' + msg[i]['id'] + '"><img id="social_img_' + msg[i]['name'] + '" data-name="' + msg[i]['name'] + '" src="' + $('#base_url').val() + 'uploads/social_icons/' + icon_set + '/' + msg[i]['icon1'] + '" style="width: 40px;"/></a>';
                  }
                }
                social_html += '</div>';
                $('.preview-wrap .social_wrapper').html(social_html);
                for (var i = 0; i < msg.length; i++) {
                  var style_css = '';
                  if (i <= 4) {
                    style_css = 'display:none;'
                  }
                  all_html += '<img src="' + $('#base_url').val() + 'uploads/social_icons/' + icon_set + '/' + msg[i]['icon1'] + '" id="' + msg[i]['name'] + '" data-name="' + msg[i]['name'] + '" style="width:35px;margin:5px;' + style_css + '" class="custom_social_media">';
                }
                $('.preview-wrap .media_wrapper_custom').html(all_html);
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
<div class='formated_html' id="signature_email_preview" style="opacity: 0.0;"></div>
<!-- <textarea id="final_html"></textarea> -->
<!-- </div> -->
<div class="loading" style='display:none;'></div>