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
?>


<!-- <div class="row">
  <div class="col-md-6 col-sm-12">
    <div class="box-wrap">
      <div class="box-title">
        <h3>Signature List</h3>
        <div class="box-act">
          <a href="<?php echo site_url('create_signature') ?>" class="box-btn">Add Signature</a>
          <div class="btn-group grid-toggle" role="group" aria-label="...">
            <button type="button" class="toggle-view active" data-id="box-view"><span class="glyphicon glyphicon-th-large" aria-hidden="true"></span></button>
            <button type="button" class="toggle-view" data-id="list-view"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span></button>
          </div>
        </div>
      </div>
      <div class="box-body list-height">
        <div class="list-wrap box-view">
          <div class="row">
            <div id="signature_list"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-6 col-sm-12">
    <div class="box-wrap">
      <div class="box-title">
        <h3>Signature Preview</h3>
        <div class="box-act">
          <a href="<?php echo site_url('create_signature'); ?>" id="edit-specifc-signature" class="box-btn">Edit</a>
        </div>
      </div>
      <div class="box-body">
        <div class="preview-wrap">
          <div class="preview" id="theme-1">
            <div class="" style="max-width:600px;margin:20px auto;">
              <table style="margin-top: 0;margin-left: 0;margin-right: 0;margin-bottom: 10px;">
                <tr>
                  <td width="100" valign="top" style="padding-right:15px;"><img src="assets/images/avatar.jpg" alt="htmlsig.com" border="0" class="sig-logo default" style="height:100px;width:100px;margin-bottom:0;" data-pin-nopin="true"></td>
                  <td style="padding-left:20px;padding-top:0;border-left:solid 3px #4fb218;" valign="top;">
                    <h1 style="font-size: 18px;margin: 0px;text-transform: uppercase;color: #4fb218;font-weight: bold;">John Donga</h1>
                    <h5 class="" style="font-size: 12px;color: #333333;padding-bottom: 0;padding-top: 2px;font-weight: 500;margin: 0px;">senior content writer</h5>
                    <ul class="" style="margin-top: 10px;margin-left: 0;margin-right: 0;margin-bottom: 0;padding: 0;list-style: none;text-align:left;font-size:12px;margin-bottom:10px;">
                      <li style="margin-bottom: 5px;margin-right: 5px;margin-left: 0;display:inline-block;color:#333;"><span class="" style="color: #4fb218;">Mobile:</span> 445-456-7890</li>
                      <li style="margin-bottom: 5px;margin-right: 5px;margin-left: 5px;display:inline-block;color:#333;"><span class="" style="color: #4fb218;">fax:</span> 921-142-0666</li>
                      <li style="margin-bottom: 5px;margin-right: 5px;margin-left: 5px;display:inline-block;color:#333;"><span class="" style="color: #4fb218;">Email:</span> <a href="mailto:john@signaturia.com" style="color:#333;text-decoration:none;">john@signaturia.com</a></li>
                    </ul>
                    <p class="" style="text-align:left;line-height: 20px;font-weight: 600;font-size: 12px;color: #333333;margin-top: 0;margin-left: 0;margin-right: 0;margin-bottom: 0;"><span class="" style="color: #4fb218;display:block;">Signaturia</span>32-black street, winter hour.United Kingdom 08808</p>
                    <p class="" style="text-align:left;line-height: 20px;font-weight: 400;font-size: 12px;color: #333333;margin-top: 0;margin-left: 0;margin-right: 0;margin-bottom: 0;"><span class="" style="color: #4fb218;">Website:</span> <a href="www.signaturia.com" style="color:#333;text-decoration:none;">www.signaturia.com</a></p>
                  </td>
                </tr>
              </table>
              <div class="" style="margin: 0;padding: 10px;text-align:left;background:#f5f5f5;border-radius:5px;">
                <?php foreach ($social_icons as $key => $social_icon) {
                  if ($key == 10) {
                    break;
                  } ?>
                  <a style="text-decoration:none;display:inline-block;" class="social" href="#"> <img width="20px" style="margin-bottom:2px;margin-right:2px; border:none; display:inline;" height="20px" src="<?php echo base_url() . SOCIAL_ICONS_SET_1 . $social_icon['icon1'] ?>" alt="" /></a>
                <?php } ?>
              </div>
              <p class="" style="text-align:left;margin-top:15px;margin-bottom:15px;margin-left:0;margin-right:0;"> <a href="https://www.htmlsig.com/?utm_source=email&amp;utm_medium=sig&amp;utm_campaign=email%20ba"> <img src="assets/images/banner.png" alt="" border="0" width="300" data-pin-nopin="true"> </a> </p>
              <p class="appstores-container" style="text-align:left;margin-top:15px;margin-bottom:15px;margin-left:0;margin-right:0;">
                <a class="appstore signature_apple_app_store_link-target sig-hide" style="text-decoration:none;" href="#"> <img style="border:none;" height="35" width="113" src="https://s3.amazonaws.com/htmlsig-assets/app-icon/apple.png" class="appstore-icon " alt="Download on the App Store" data-pin-nopin="true"> </a><img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2"> <a class="appstore signature_google_play_link-target sig-hide" style="text-decoration:none;" href="#"> <img style="border:none;" height="35" width="113" src="https://s3.amazonaws.com/htmlsig-assets/app-icon/google.png" class="appstore-icon " alt="Get it on Google Play"> </a><img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2"> <a class="appstore signature_amazon_app_store_link-target sig-hide" style="text-decoration:none;" href="#"> <img style="border:none;" height="35" width="113" src="https://s3.amazonaws.com/htmlsig-assets/app-icon/amazon.png" class="appstore-icon" alt="Available at Amazon"> </a>
              </p>
              <p class="" style="text-align:leftr;line-height: 13px;font-weight: 400;font-size: 9px;color: #333333;margin:0;">A disclaimer is generally any statement intended to specify or delimit the scope of rights and obligations that may be exercised and enforced by parties in a legally recognized relationship. In contrast to other terms for legally operative language, the term disclaimer usually implies situations that involve some level of uncertainty, waiver, or risk.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> -->






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
  //-- document ready function
  $(document).ready(function() {
    render_signs();

    $('#signature_search').bind("keyup change", function() {
      render_signs();
    });
  });

  // function render_signs() {
  //   $('.custom_loader').show();
  //   $.ajax({
  //     url: site_url + "/dashboard/ajax_load_signatures",
  //     dataType: "json",
  //     type: "POST",
  //     data: {
  //       keyword: $('#signature_search').val()
  //     },
  //     success: function(data) {
  //       $('.custom_loader').hide();
  //       str = '';
  //       // main part
  //       $.each(data, function(i, item) {
  //         str += '<div class="list-col">\n\
  //                     <div class="list-block">\n\
  //                       <div class="list-disp">';
  //         if (item.is_custom == 0) {
  //           str += '<a href="javascript:void(0)" onclick="view_sign(' + item.id + ')">\n\
  //                           <div class="list-img"><img class="object-cover" src="<?php echo base_url() . SIGNATURE_IMAGES ?>signature-' + item.id + '.png<?php echo '?' . time(); ?>" onerror="this.src=\'assets/images/sign.png\';" alt="Video img"></div>\n\
  //                           <div class="list-overlay"></div>\n\
  //                         </a>\n\
  //                         <div class="dropdown share-drop">\n\
  //                           <button class="dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">\n\
  //                             <i class="fa fa-cog" aria-hidden="true"></i>\n\
  //                           </button>\n\
  //                           <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">\n\
  //                             <li><a href="<?php echo site_url() ?>edit_signature/' + item.id + '"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 10 10"><path id="fi-rr-pencil" d="M11.469.619A1.818,1.818,0,0,0,8.9.619L2.734,6.785A2.491,2.491,0,0,0,2,8.557V9.587a.5.5,0,0,0,.5.5H3.531A2.49,2.49,0,0,0,5.3,9.354l6.166-6.166a1.818,1.818,0,0,0,0-2.568ZM4.594,8.645a1.515,1.515,0,0,1-1.063.44H3V8.557a1.494,1.494,0,0,1,.441-1.063l4.2-4.2L8.8,4.447Zm6.165-6.166L9.5,3.736,8.35,2.585,9.607,1.328a.814.814,0,0,1,1.151,1.153Z" transform="translate(-2 -0.088)" fill="currentColor"/></svg> Edit</a></li>\n\
  //                             <li><a href="<?php echo site_url() ?>stats-report/' + item.id + '"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 10 10"><g id="Group_284" data-name="Group 284" transform="translate(0)"><path id="Path_414" data-name="Path 414" d="M-1608.081,2098.334h8.651a.91.91,0,0,1,.182.014.409.409,0,0,1,.331.428.416.416,0,0,1-.378.389c-.041,0-.082,0-.122,0h-9c-.344,0-.5-.155-.5-.5q0-4.509,0-9.018a.445.445,0,0,1,.224-.436.41.41,0,0,1,.595.268.871.871,0,0,1,.017.192q0,4.254,0,8.508Z" transform="translate(1608.916 -2089.169)" fill="#202c39"/><path id="Path_415" data-name="Path 415" d="M-1556.583,2162.868l2.489-3.45-.879.063c-.15.011-.3.026-.45.028a.4.4,0,0,1-.411-.348.382.382,0,0,1,.341-.429c.308-.035.619-.052.928-.075l1.239-.091c.057,0,.114-.008.17-.009a.4.4,0,0,1,.429.383q.084,1.083.167,2.165a.4.4,0,0,1-.292.441.4.4,0,0,1-.515-.337c-.025-.244-.041-.49-.061-.735-.014-.169-.027-.338-.043-.533-.042.056-.068.091-.094.126l-2.585,3.585a.417.417,0,0,1-.494.2.645.645,0,0,1-.214-.136c-.5-.462-1-.928-1.495-1.393l-.094-.085c-.027.035-.05.065-.072.1q-.721,1.02-1.443,2.039a.418.418,0,0,1-.567.171.385.385,0,0,1-.173-.517.956.956,0,0,1,.074-.115l1.737-2.455a.427.427,0,0,1,.713-.073l1.516,1.413Z" transform="translate(1562.08 -2156.632)" fill="#202c39"/></g></svg> Stats</a></li>\n\
  //                             <li><a href="<?php echo site_url() ?>dashboard/copy/' + item.id + '"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="13" viewBox="0 0 10 11"><path id="fi-rr-copy-alt" d="M7.5,9.167A2.406,2.406,0,0,0,10,6.875V2.861a1.747,1.747,0,0,0-.586-1.3L8.293.537A2.081,2.081,0,0,0,6.879,0H4.5A2.406,2.406,0,0,0,2,2.292V6.875A2.406,2.406,0,0,0,4.5,9.167ZM3,6.875V2.292A1.442,1.442,0,0,1,4.5.917S6.96.923,7,.928v.906A.961.961,0,0,0,8,2.75h.988C8.993,2.787,9,6.875,9,6.875A1.442,1.442,0,0,1,7.5,8.25h-3A1.442,1.442,0,0,1,3,6.875Zm9-3.208V8.708A2.406,2.406,0,0,1,9.5,11H5a.46.46,0,1,1,0-.917H9.5A1.442,1.442,0,0,0,11,8.708V3.667a.5.5,0,0,1,1,0Z" transform="translate(-2 0)" fill="#202c39"/></svg> Copy</a></li>\n\
  //                             <li><a href="<?php echo site_url() ?>install_sign/' + item.id + '"><svg id="Group_283" data-name="Group 283" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 10 10"><path id="Path_412" data-name="Path 412" d="M454.849,1716.114l-.024-.008-.075-.026a.58.58,0,0,1-.366-.626.565.565,0,0,1,.529-.5h8.77c.42,0,.546.087.695.49v.177l-.016.049a1.04,1.04,0,0,1-.044.12.586.586,0,0,1-.407.321Z" transform="translate(-454.379 -1706.114)" fill="#202c39"/><path id="Path_413" data-name="Path 413" d="M539.945,1387.427a.546.546,0,0,1-.4-.194c-.484-.52-.976-1.051-1.452-1.563l-.685-.739a.59.59,0,0,1-.151-.59.517.517,0,0,1,.394-.4.561.561,0,0,1,.131-.016.516.516,0,0,1,.385.186l.465.5.552.6a.539.539,0,0,1,.039.052l.022.031.035.047.129-.052v-1.477q0-1.813,0-3.627a.559.559,0,0,1,.538-.61h.01a.554.554,0,0,1,.524.549c0,.058,0,.118,0,.176,0,.023,0,.045,0,.068v4.9l.126.093.044-.066.021-.033a.33.33,0,0,1,.033-.048l.027-.029c.328-.356.668-.723,1-1.082a.5.5,0,0,1,.37-.175.562.562,0,0,1,.164.026.522.522,0,0,1,.371.424.6.6,0,0,1-.164.563l-1.245,1.34-.485.523-.122.132c-.091.1-.185.2-.278.3A.559.559,0,0,1,539.945,1387.427Z" transform="translate(-534.946 -1379.569)" fill="#202c39"/></svg> Download</a></li>\n\
  //                             <li><a href="<?php echo site_url() ?>user/dashboard/delete/' + item.id + '" onclick="return confirm(\'Are you sure you want to delete this signature?\')"><svg id="Group_283" data-name="Group 283" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 10 10"><path id="Path_412" data-name="Path 412" d="M454.849,1716.114l-.024-.008-.075-.026a.58.58,0,0,1-.366-.626.565.565,0,0,1,.529-.5h8.77c.42,0,.546.087.695.49v.177l-.016.049a1.04,1.04,0,0,1-.044.12.586.586,0,0,1-.407.321Z" transform="translate(-454.379 -1706.114)" fill="#202c39"/><path id="Path_413" data-name="Path 413" d="M539.945,1387.427a.546.546,0,0,1-.4-.194c-.484-.52-.976-1.051-1.452-1.563l-.685-.739a.59.59,0,0,1-.151-.59.517.517,0,0,1,.394-.4.561.561,0,0,1,.131-.016.516.516,0,0,1,.385.186l.465.5.552.6a.539.539,0,0,1,.039.052l.022.031.035.047.129-.052v-1.477q0-1.813,0-3.627a.559.559,0,0,1,.538-.61h.01a.554.554,0,0,1,.524.549c0,.058,0,.118,0,.176,0,.023,0,.045,0,.068v4.9l.126.093.044-.066.021-.033a.33.33,0,0,1,.033-.048l.027-.029c.328-.356.668-.723,1-1.082a.5.5,0,0,1,.37-.175.562.562,0,0,1,.164.026.522.522,0,0,1,.371.424.6.6,0,0,1-.164.563l-1.245,1.34-.485.523-.122.132c-.091.1-.185.2-.278.3A.559.559,0,0,1,539.945,1387.427Z" transform="translate(-534.946 -1379.569)" fill="#202c39"/></svg> Delete</a></li>\n\
  //                           </ul>\n\
  //                         </div>';
  //         } else {
  //           str += '<a href="javascript:void(0)" onclick="view_sign(' + item.id + ')">\n\
  //                           <div class="list-img"><img class="object-cover" src="<?php echo base_url() . CUSTOM_SIGNATURE_IMAGES ?>' + item.user_id + '/' + item.id + '.png<?php echo '?' . time(); ?>"  alt="Video img" /></div>\n\
  //                         <div class="list-overlay"></div>\n\
  //                           <div class="list-overlay"></div>\n\
  //                         </a>\n\
  //                         <div class="dropdown share-drop">\n\
  //                           <button class="dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">\n\
  //                             <i class="fa fa-cog" aria-hidden="true"></i>\n\
  //                           </button>\n\
  //                           <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">\n\
  //                             <li><a href="<?php echo site_url() ?>custom_signature/' + item.id + '"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 10 10"><path id="fi-rr-pencil" d="M11.469.619A1.818,1.818,0,0,0,8.9.619L2.734,6.785A2.491,2.491,0,0,0,2,8.557V9.587a.5.5,0,0,0,.5.5H3.531A2.49,2.49,0,0,0,5.3,9.354l6.166-6.166a1.818,1.818,0,0,0,0-2.568ZM4.594,8.645a1.515,1.515,0,0,1-1.063.44H3V8.557a1.494,1.494,0,0,1,.441-1.063l4.2-4.2L8.8,4.447Zm6.165-6.166L9.5,3.736,8.35,2.585,9.607,1.328a.814.814,0,0,1,1.151,1.153Z" transform="translate(-2 -0.088)" fill="currentColor"/></svg> Edit</a></li>\n\
  //                             <li><a href="<?php echo site_url() ?>stats-report/' + item.id + '"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 10 10"><g id="Group_284" data-name="Group 284" transform="translate(0)"><path id="Path_414" data-name="Path 414" d="M-1608.081,2098.334h8.651a.91.91,0,0,1,.182.014.409.409,0,0,1,.331.428.416.416,0,0,1-.378.389c-.041,0-.082,0-.122,0h-9c-.344,0-.5-.155-.5-.5q0-4.509,0-9.018a.445.445,0,0,1,.224-.436.41.41,0,0,1,.595.268.871.871,0,0,1,.017.192q0,4.254,0,8.508Z" transform="translate(1608.916 -2089.169)" fill="#202c39"/><path id="Path_415" data-name="Path 415" d="M-1556.583,2162.868l2.489-3.45-.879.063c-.15.011-.3.026-.45.028a.4.4,0,0,1-.411-.348.382.382,0,0,1,.341-.429c.308-.035.619-.052.928-.075l1.239-.091c.057,0,.114-.008.17-.009a.4.4,0,0,1,.429.383q.084,1.083.167,2.165a.4.4,0,0,1-.292.441.4.4,0,0,1-.515-.337c-.025-.244-.041-.49-.061-.735-.014-.169-.027-.338-.043-.533-.042.056-.068.091-.094.126l-2.585,3.585a.417.417,0,0,1-.494.2.645.645,0,0,1-.214-.136c-.5-.462-1-.928-1.495-1.393l-.094-.085c-.027.035-.05.065-.072.1q-.721,1.02-1.443,2.039a.418.418,0,0,1-.567.171.385.385,0,0,1-.173-.517.956.956,0,0,1,.074-.115l1.737-2.455a.427.427,0,0,1,.713-.073l1.516,1.413Z" transform="translate(1562.08 -2156.632)" fill="#202c39"/></g></svg> Stats</a></li>\n\
  //                             <li><a href="<?php echo site_url() ?>dashboard/copy_custom/' + item.id + '"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="13" viewBox="0 0 10 11"><path id="fi-rr-copy-alt" d="M7.5,9.167A2.406,2.406,0,0,0,10,6.875V2.861a1.747,1.747,0,0,0-.586-1.3L8.293.537A2.081,2.081,0,0,0,6.879,0H4.5A2.406,2.406,0,0,0,2,2.292V6.875A2.406,2.406,0,0,0,4.5,9.167ZM3,6.875V2.292A1.442,1.442,0,0,1,4.5.917S6.96.923,7,.928v.906A.961.961,0,0,0,8,2.75h.988C8.993,2.787,9,6.875,9,6.875A1.442,1.442,0,0,1,7.5,8.25h-3A1.442,1.442,0,0,1,3,6.875Zm9-3.208V8.708A2.406,2.406,0,0,1,9.5,11H5a.46.46,0,1,1,0-.917H9.5A1.442,1.442,0,0,0,11,8.708V3.667a.5.5,0,0,1,1,0Z" transform="translate(-2 0)" fill="#202c39"/></svg> Copy</a></li>\n\
  //                             <li><a href="<?php echo site_url() ?>install_sign/' + item.id + '"><svg id="Group_283" data-name="Group 283" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 10 10"><path id="Path_412" data-name="Path 412" d="M454.849,1716.114l-.024-.008-.075-.026a.58.58,0,0,1-.366-.626.565.565,0,0,1,.529-.5h8.77c.42,0,.546.087.695.49v.177l-.016.049a1.04,1.04,0,0,1-.044.12.586.586,0,0,1-.407.321Z" transform="translate(-454.379 -1706.114)" fill="#202c39"/><path id="Path_413" data-name="Path 413" d="M539.945,1387.427a.546.546,0,0,1-.4-.194c-.484-.52-.976-1.051-1.452-1.563l-.685-.739a.59.59,0,0,1-.151-.59.517.517,0,0,1,.394-.4.561.561,0,0,1,.131-.016.516.516,0,0,1,.385.186l.465.5.552.6a.539.539,0,0,1,.039.052l.022.031.035.047.129-.052v-1.477q0-1.813,0-3.627a.559.559,0,0,1,.538-.61h.01a.554.554,0,0,1,.524.549c0,.058,0,.118,0,.176,0,.023,0,.045,0,.068v4.9l.126.093.044-.066.021-.033a.33.33,0,0,1,.033-.048l.027-.029c.328-.356.668-.723,1-1.082a.5.5,0,0,1,.37-.175.562.562,0,0,1,.164.026.522.522,0,0,1,.371.424.6.6,0,0,1-.164.563l-1.245,1.34-.485.523-.122.132c-.091.1-.185.2-.278.3A.559.559,0,0,1,539.945,1387.427Z" transform="translate(-534.946 -1379.569)" fill="#202c39"/></svg> Download</a></li>\n\
  //                             <li><a href="<?php echo site_url() ?>user/dashboard/delete/' + item.id + '" onclick="return confirm(\'Are you sure you want to delete this signature?\')"><svg id="Group_283" data-name="Group 283" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 10 10"><path id="Path_412" data-name="Path 412" d="M454.849,1716.114l-.024-.008-.075-.026a.58.58,0,0,1-.366-.626.565.565,0,0,1,.529-.5h8.77c.42,0,.546.087.695.49v.177l-.016.049a1.04,1.04,0,0,1-.044.12.586.586,0,0,1-.407.321Z" transform="translate(-454.379 -1706.114)" fill="#202c39"/><path id="Path_413" data-name="Path 413" d="M539.945,1387.427a.546.546,0,0,1-.4-.194c-.484-.52-.976-1.051-1.452-1.563l-.685-.739a.59.59,0,0,1-.151-.59.517.517,0,0,1,.394-.4.561.561,0,0,1,.131-.016.516.516,0,0,1,.385.186l.465.5.552.6a.539.539,0,0,1,.039.052l.022.031.035.047.129-.052v-1.477q0-1.813,0-3.627a.559.559,0,0,1,.538-.61h.01a.554.554,0,0,1,.524.549c0,.058,0,.118,0,.176,0,.023,0,.045,0,.068v4.9l.126.093.044-.066.021-.033a.33.33,0,0,1,.033-.048l.027-.029c.328-.356.668-.723,1-1.082a.5.5,0,0,1,.37-.175.562.562,0,0,1,.164.026.522.522,0,0,1,.371.424.6.6,0,0,1-.164.563l-1.245,1.34-.485.523-.122.132c-.091.1-.185.2-.278.3A.559.559,0,0,1,539.945,1387.427Z" transform="translate(-534.946 -1379.569)" fill="#202c39"/></svg> Delete</a></li>\n\
  //                           </ul>\n\
  //                         </div>';
  //         }
  //         str += '<div class="list-name"><h3>' + item.name + '</h3></div>\n\
  //                       <div class="share-pic">';
  //         if (item.logo != '') {
  //           str += '<img src="<?php echo SIGNATURE_UPLOADS_LOGO ?>' + item.logo + '" alt="" onerror="this.src=\'assets/images/avatar.jpg\'" class="fix-img">';
  //         } else {
  //           str += '<img src="assets/images/avatar.jpg" alt="" class="fix-img">';
  //         }
  //         str += '</div>\n\
  //                       </div>\n\
  //                     </div>\n\
  //                   </div>';
  //       });
  //       $('#signature_list').html(str);
  //       $(".fix-img").each(function() {

  //         var img = $(this);
  //         var image_heightA = img.height();
  //         var image_widthA = img.width();
  //         var parent_image_widthA = img.parent().width();
  //         var parent_image_heightA = img.parent().height();
  //         //if(width <= height)

  //         if (image_heightA > parent_image_heightA && image_widthA > parent_image_widthA) {

  //           img.css('width', parent_image_widthA + 'px');
  //           var tem_image_heightA = img.height();

  //           if (tem_image_heightA > parent_image_heightA) {
  //             img.css('width', '100%');
  //           } else {
  //             img.css('width', 'auto');
  //             img.css('height', '100%');
  //           }
  //         } else {
  //           img.css('width', parent_image_widthA + 'px');
  //           var tem_image_heightA = img.height();

  //           if (tem_image_heightA > parent_image_heightA) {
  //             img.css('width', '100%');
  //           } else {
  //             img.css('width', 'auto');
  //             img.css('height', '100%');
  //           }
  //         }
  //       });
  //     }
  //   });

  // }

  function view_sign(id) {
    $('#edit-specifc-signature').attr('href', '<?php echo site_url('edit_signature/') ?>' + id);
    $('.custom_loader').show();
    $.ajax({
      url: site_url + "dashboard/ajax_get_signature",
      //            dataType: "json",
      type: "POST",
      data: {
        id: id
      },
      success: function(data) {
        $('.custom_loader').hide();
        $('#theme-1').html(data);
        /*
         str = '<div style="text-size-adjust: none !important; -ms-text-size-adjust: none !important; -webkit-text-size-adjust: none !important;">';
         if (data.signature.logo != '') {
         str += '<p><img src="<?php echo SIGNATURE_UPLOADS_LOGO ?>' + data.signature.logo + '" alt="" onerror="this.src=\'assets/images/avatar.jpg\'" border="0" class="sig-logo default" style="max-height:80px" data-pin-nopin="true"></p>'
         }
         str += '<p style="font-family: Helvetica, Arial, sans-serif; font-size: 10px; line-height: 12px; color: #212121;">\n\
         <span style="font-weight: bold;" class="txt signature_name-target sig-hide">' + data.signature.name + '</span> ';
         if (data.signature.job_title != '') {
         str += '<span class="title-sep sep" style="display: inline;">/</span>\n\
         <span style="color: #212121;" class="txt signature_jobtitle-target sig-hide">' + data.signature.job_title;
         }
         str += '<span class="email-sep break" style="display: block;"></span> \n\
         <a class="link email signature_email-target sig-hide" href="mailto:' + data.signature.email + '" style="color: #477ccc; text-decoration:none">' + data.signature.email + '</a>';
         if (data.signature.mobile_number != '') {
         str += '<span class="signature_email-sep sep" style="display: inline;"> / </span><span style="color: #212121;" class="txt signature_mobilephone-target sig-hide">' + data.signature.mobile_number + '</span> </p>';
         }
         str += '<p class="company-info" style="font-family: Helvetica, Arial, sans-serif; font-size: 10px; line-height: 12px"> <span style="font-weight: bold; color: #212121;" class="txt signature_companyname-target sig-hide">' + data.signature.company_name + '</span> \n\
         <span class="company-sep break" style="display: block;"></span> ';
         if (data.signature.fax != '') {
         str += '<span style="color: rgb(33, 33, 33); display: inline;" class="txt office-sep sep">Office: </span> <span style="color: #212121;" class="txt signature_officephone-target sig-hide">' + data.signature.office_phone + '</span> ';
         }
         if (data.signature.fax != '') {
         str += '<span style="color: rgb(33, 33, 33); display: inline;" class="txt fax-sep sep">/ </span>\n\
         <span style="color: rgb(33, 33, 33); display: inline;" class="txt fax-title sep">Fax: </span> <span style="color: #212121;" class="txt signature_fax-target sig-hide">' + data.signature.fax + '</span> ';
         }
         str += '<span class="address-sep break" style="display: block;"></span> \n\
         <span style="color: #212121;" class="txt signature_address-target sig-hide">' + data.signature.address + '</span> \n\
         <span class="address2-sep break" style="display: block;"></span> \n\
         <span style="color: #212121;" class="txt signature_address2-target sig-hide">' + data.signature.address_line2 + '</span> \n\
         <span class="website-sep break" style="display: block;"></span> \n\
         <a class="link signature_website-target sig-hide" href="' + data.signature.website + '" style="color: #477ccc; text-decoration:none">' + data.signature.website + '</a> </p>\n\
         <!--<p class="social-list" style="font-size:0; line-height:0;"> <a style=" text-decoration:none" class="social signature_twitter-target sig-hide" href="#"> <img width="16px" style="margin-bottom:2px; border:none; display:inline;" height="16px" data-filename="twitter.png" src="https://s3.amazonaws.com/htmlsig-assets/round/twitter.png" alt="Twitter"> </a> <span style="white-space:nowrap;" class="signature_twitter-sep social-sep"> <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2"> </span> <a style=" text-decoration:none" class="social signature_facebook-target sig-hide" href="https://htmlsig.com/t/000001BNZ369"> <img width="16px" style="margin-bottom:2px; border:none; display:inline;" height="16px" data-filename="facebook.png" src="https://s3.amazonaws.com/htmlsig-assets/round/facebook.png" alt="Facebook"> </a> <span style="white-space:nowrap;" class="signature_facebook-sep social-sep"> <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2"> </span> <a style=" text-decoration:none" class="social signature_googleplus-target sig-hide" href="#"> <img width="16px" style="margin-bottom:2px; border:none; display:inline;" height="16px" data-filename="googleplus.png" src="https://s3.amazonaws.com/htmlsig-assets/round/googleplus.png" alt="Google +"> </a> <span style="white-space:nowrap;" class="signature_googleplus-sep social-sep"> <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2"> </span> <a style=" text-decoration:none" class="social signature_linkedin-target sig-hide" href="#"> <img width="16px" style="margin-bottom:2px; border:none; display:inline;" height="16px" data-filename="linkedin.png" src="https://s3.amazonaws.com/htmlsig-assets/round/linkedin.png" alt="LinkedIn"> </a> <span style="white-space:nowrap;" class="signature_linkedin-sep social-sep"> <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2"> </span> <a style=" text-decoration:none" class="social signature_instagram-target sig-hide" href="#"> <img width="16px" style="margin-bottom:2px; border:none; display:inline;" height="16px" data-filename="instagram.png" src="https://s3.amazonaws.com/htmlsig-assets/round/instagram.png" alt="Instagram"> </a> <span style="white-space:nowrap;" class="signature_instagram-sep social-sep"> <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2"> </span> <a style=" text-decoration:none" class="social signature_dribbble-target sig-hide" href="#"> <img width="16px" style="margin-bottom:2px; border:none; display:inline;" height="16px" data-filename="dribbble.png" src="https://s3.amazonaws.com/htmlsig-assets/round/dribbble.png" alt="Dribble"> </a> <span style="white-space:nowrap;" class="signature_dribbble-sep social-sep"> <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2"> </span> <a style=" text-decoration:none" class="social signature_skype-target sig-hide" href="#"> <img width="16px" style="margin-bottom:2px; border:none; display:inline;" height="16px" data-filename="skype.png" src="https://s3.amazonaws.com/htmlsig-assets/round/skype.png" alt="Skype"> </a> <span style="white-space:nowrap;" class="signature_skype-sep social-sep"> <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2"> </span> <a style=" text-decoration:none" class="social signature_youtube-target sig-hide" href="#"> <img width="16px" style="margin-bottom:2px; border:none; display:inline;" height="16px" data-filename="youtube.png" src="https://s3.amazonaws.com/htmlsig-assets/round/youtube.png" alt="Youtube"> </a> <span style="white-space:nowrap;" class="signature_youtube-sep social-sep"> <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2"> </span> <a style=" text-decoration:none" class="social signature_vimeo-target sig-hide" href="#"> <img width="16px" style="margin-bottom:2px; border:none; display:inline;" height="16px" data-filename="vimeo.png" src="https://s3.amazonaws.com/htmlsig-assets/round/vimeo.png" alt="Vimeo"> </a> <span style="white-space:nowrap;" class="signature_vimeo-sep social-sep"> <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2"> </span> <a style=" text-decoration:none" class="social signature_flickr-target sig-hide" href="#"> <img width="16px" style="margin-bottom:2px; border:none; display:inline;" height="16px" data-filename="flickr.png" src="https://s3.amazonaws.com/htmlsig-assets/round/flickr.png" alt="Flickr"> </a> <span style="white-space:nowrap;" class="signature_flickr-sep social-sep"> <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2"> </span> <a style="display:none; text-decoration:none" class="social signature_fivehundredpx-target sig-hide" href="#"> <img width="16px" style="margin-bottom:2px; border:none; display:inline;" height="16px" data-filename="fivehundredpx.png" src="https://s3.amazonaws.com/htmlsig-assets/round/fivehundredpx.png" alt="500px"> </a> <span style="white-space:nowrap;" class="signature_fivehundredpx-sep social-sep"> <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2"> </span> <a style="display:none; text-decoration:none" class="social signature_pinterest-target sig-hide" href="#"> <img width="16px" style="margin-bottom:2px; border:none; display:inline;" height="16px" data-filename="pinterest.png" src="https://s3.amazonaws.com/htmlsig-assets/round/pinterest.png" alt="Pinterest"> </a> <span style="white-space:nowrap;" class="signature_pinterest-sep social-sep"> <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2"> </span> <a style="display:none; text-decoration:none" class="social signature_github-target sig-hide" href="#"> <img width="16px" style="margin-bottom:2px; border:none; display:inline;" height="16px" data-filename="github.png" src="https://s3.amazonaws.com/htmlsig-assets/round/github.png" alt="Github"> </a> <span style="white-space:nowrap;" class="signature_github-sep social-sep"> <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2"> </span> <a style="display:none; text-decoration:none" class="social signature_zillow-target sig-hide" href="#"> <img width="16px" style="margin-bottom:2px; border:none; display:inline;" height="16px" data-filename="zillow.png" src="https://s3.amazonaws.com/htmlsig-assets/round/zillow.png" alt="Zillow"> </a> <span style="white-space:nowrap;" class="signature_zillow-sep social-sep"> <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2"> </span> <a style="display:none; text-decoration:none" class="social signature_yelp-target sig-hide" href="#"> <img width="16px" style="margin-bottom:2px; border:none; display:inline;" height="16px" data-filename="yelp.png" src="https://s3.amazonaws.com/htmlsig-assets/round/yelp.png" alt="Yelp"> </a> <span style="white-space:nowrap;" class="signature_yelp-sep social-sep"> <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2"> </span> <a style="display:none; text-decoration:none" class="social signature_tripadvisor-target sig-hide" href="#"> <img width="16px" style="margin-bottom:2px; border:none; display:inline;" height="16px" data-filename="tripadvisor.png" src="https://s3.amazonaws.com/htmlsig-assets/round/tripadvisor.png" alt="TripAdvisor"> </a> <span style="white-space:nowrap;" class="signature_tripadvisor-sep social-sep"> <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2"> </span> <a style="display:none; text-decoration:none" class="social signature_houzz-target sig-hide" href="#"> <img width="16px" style="margin-bottom:2px; border:none; display:inline;" height="16px" data-filename="houzz.png" src="https://s3.amazonaws.com/htmlsig-assets/round/houzz.png" alt="Houzz"> </a> <span style="white-space:nowrap;" class="signature_houzz-sep social-sep"> <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2"> </span> <a style="display:none; text-decoration:none" class="social signature_soundcloud-target sig-hide" href="#"> <img width="16px" style="margin-bottom:2px; border:none; display:inline;" height="16px" data-filename="soundcloud.png" src="https://s3.amazonaws.com/htmlsig-assets/round/soundcloud.png" alt="Soundcloud"> </a> <span style="white-space:nowrap;" class="signature_soundcloud-sep social-sep"> <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2"> </span> <a style="display:none; text-decoration:none" class="social signature_tumblr-target sig-hide" href="#"> <img width="16px" style="margin-bottom:2px; border:none; display:inline;" height="16px" data-filename="tumblr.png" src="https://s3.amazonaws.com/htmlsig-assets/round/tumblr.png" alt="Tumblr"> </a> <span style="white-space:nowrap;" class="signature_tumblr-sep social-sep"> <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2"> </span> <a style="display:none; text-decoration:none" class="social signature_stackoverflow-target sig-hide" href="#"> <img width="16px" style="margin-bottom:2px; border:none; display:inline;" height="16px" data-filename="stackoverflow.png" src="https://s3.amazonaws.com/htmlsig-assets/round/stackoverflow.png" alt="Stack Overflow"> </a> <span style="white-space:nowrap;" class="signature_stackoverflow-sep social-sep"> <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2"> </span> <a style="display:none; text-decoration:none" class="social signature_wordpress-target sig-hide" href="#"> <img width="16px" style="margin-bottom:2px; border:none; display:inline;" height="16px" data-filename="wordpress.png" src="https://s3.amazonaws.com/htmlsig-assets/round/wordpress.png" alt="Wordpress"> </a> <span style="white-space:nowrap;" class="signature_wordpress-sep social-sep"> <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2"> </span> <a style="display:none; text-decoration:none" class="social signature_quora-target sig-hide" href="#"> <img width="16px" style="margin-bottom:2px; border:none; display:inline;" height="16px" data-filename="quora.png" src="https://s3.amazonaws.com/htmlsig-assets/round/quora.png" alt="Quora"> </a> <span style="white-space:nowrap;" class="signature_quora-sep social-sep"> <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2"> </span> <a style="display:none; text-decoration:none" class="social signature_behance-target sig-hide" href="#"> <img width="16px" style="margin-bottom:2px; border:none; display:inline;" height="16px" data-filename="behance.png" src="https://s3.amazonaws.com/htmlsig-assets/round/behance.png" alt="Behance"> </a> <span style="white-space:nowrap;" class="signature_behance-sep social-sep"> <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2"> </span> <a style="display:none; text-decoration:none" class="social signature_imdb-target sig-hide" href="#"> <img width="16px" style="margin-bottom:2px; border:none; display:inline;" height="16px" data-filename="imdb.png" src="https://s3.amazonaws.com/htmlsig-assets/round/imdb.png" alt="IMDB"> </a> <span style="white-space:nowrap;" class="signature_imdb-sep social-sep"> <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2"> </span> <a style="display:none; text-decoration:none" class="social signature_maps-target sig-hide" href="#"> <img width="16px" style="margin-bottom:2px; border:none; display:inline;" height="16px" data-filename="maps.png" src="https://s3.amazonaws.com/htmlsig-assets/round/maps.png" alt="Maps"> </a> <span style="white-space:nowrap;" class="signature_maps-sep social-sep"> <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2"> </span> <a style="display:none; text-decoration:none" class="social signature_bitbucket-target sig-hide" href="#"> <img width="16px" style="margin-bottom:2px; border:none; display:inline;" height="16px" data-filename="bitbucket.png" src="https://s3.amazonaws.com/htmlsig-assets/round/bitbucket.png" alt="Bitbucket"> </a> <span style="white-space:nowrap;" class="signature_bitbucket-sep social-sep"> <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2"> </span> <a style="display:none; text-decoration:none" class="social signature_periscope-target sig-hide" href="#"> <img width="16px" style="margin-bottom:2px; border:none; display:inline;" height="16px" data-filename="periscope.png" src="https://s3.amazonaws.com/htmlsig-assets/round/periscope.png" alt="Periscope"> </a> <span style="white-space:nowrap;" class="signature_periscope-sep social-sep"> <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2"> </span> <a style="display:none; text-decoration:none" class="social signature_snapchat-target sig-hide" href="#"> <img width="16px" style="margin-bottom:2px; border:none; display:inline;" height="16px" data-filename="snapchat.png" src="https://s3.amazonaws.com/htmlsig-assets/round/snapchat.png" alt="SnapChat"> </a> <span style="white-space:nowrap;" class="signature_snapchat-sep social-sep"> <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2"> </span> <a style="display:none; text-decoration:none" class="social signature_spotify-target sig-hide" href="#"> <img width="16px" style="margin-bottom:2px; border:none; display:inline;" height="16px" data-filename="spotify.png" src="https://s3.amazonaws.com/htmlsig-assets/round/spotify.png" alt="Spotify"> </a> <span style="white-space:nowrap;" class="signature_spotify-sep social-sep"> <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2"> </span> <a style="display:none; text-decoration:none" class="social signature_xing-target sig-hide" href="#"> <img width="16px" style="margin-bottom:2px; border:none; display:inline;" height="16px" data-filename="xing.png" src="https://s3.amazonaws.com/htmlsig-assets/round/xing.png" alt="Xing"> </a> <span style="white-space:nowrap;" class="signature_xing-sep social-sep"> <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2"> </span> <a style="display:none; text-decoration:none" class="social signature_whatsapp-target sig-hide" href="#"> <img width="16px" style="margin-bottom:2px; border:none; display:inline;" height="16px" data-filename="whatsapp.png" src="https://s3.amazonaws.com/htmlsig-assets/round/whatsapp.png" alt="Whatsapp"> </a> <span style="white-space:nowrap;" class="signature_whatsapp-sep social-sep"> <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2"> </span> </p>\n\
         <p class="ba-container"> <a href="https://www.htmlsig.com/?utm_source=email&amp;utm_medium=sig&amp;utm_campaign=email%20ba"> <img src="https://htmlsigs.s3.amazonaws.com/htmlsig-ba.png" alt="htmlsig.com" border="0" class="sig-ba" height="35" width="300" data-pin-nopin="true"> </a> </p>\n\
         <p class="appstores-container"> <br>\n\
         <a class="appstore signature_apple_app_store_link-target sig-hide" style="text-decoration:none;" href="#"> <img style="border:none;" height="35" width="113" src="https://s3.amazonaws.com/htmlsig-assets/app-icon/apple.png" class="appstore-icon " alt="Download on the App Store" data-pin-nopin="true"> </a><img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2"> <a class="appstore signature_google_play_link-target sig-hide" style="text-decoration:none;" href="#"> <img style="border:none;" height="35" width="113" src="https://s3.amazonaws.com/htmlsig-assets/app-icon/google.png" class="appstore-icon " alt="Get it on Google Play"> </a><img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2"> <a class="appstore signature_amazon_app_store_link-target sig-hide" style="text-decoration:none;" href="#"> <img style="border:none;" height="35" width="113" src="https://s3.amazonaws.com/htmlsig-assets/app-icon/amazon.png" class="appstore-icon" alt="Available at Amazon"> </a> </p>\n\
         <p style="font-family: Helvetica, Arial, sans-serif; color: #212121; font-size: 9px; line-height: 12px;" class="txt signature_disclaimer-target"></p>\n\
         \n\         -->\n\
         </div>'
         $('#theme-1').html(data);*/
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

<!-- <body class="log">
  <nav class="navbar navbar-default">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">
        <img src="assets/images/signaturia-logo.png" alt="">
      </a>
    </div>
    <div class="search-bar">
      <input type="text" class="form-control" placeholder="Search clients...">
      <i class="fa fa-search" aria-hidden="true"></i>
    </div>
    <div class="dropdown user-drop">
      <a href="#" class="dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
        <span class="user-avtar">
          <?php if ($this->session->userdata('htmlsig_user')['profile_pic'] != '' && file_exists(PROFILE_IMAGES . $this->session->userdata('htmlsig_user')['profile_pic'])) { ?>
            <img src="<?php echo PROFILE_IMAGES . $this->session->userdata('htmlsig_user')['profile_pic'] ?>" alt="<?php echo $this->session->userdata('htmlsig_user')['fullname'] ?>" />
          <?php } else { ?>
            <img src="assets/images/avatar.jpg" alt="<?php echo $this->session->userdata('htmlsig_user')['fullname'] ?>" />
          <?php } ?>
        </span>
      </a>
      <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
        <li><a href="<?php echo site_url('profile') ?>"><i class="zmdi zmdi-settings zmdi-hc-fw"></i> My Profile</a></li>
        <li><a href="<?php echo site_url('logout') ?>"><i class="zmdi zmdi-power zmdi-hc-fw"></i> Logout</a></li>
      </ul>
    </div>
  </nav>
  <div class="dash-wrap <?php echo ($this->router->fetch_class() == 'customsignature' || $this->router->fetch_class() == 'manage_signature') ? "custom" : ""; ?>">
    <div class="sidebar">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <?php $controller = $this->router->fetch_class();
      $method = $this->router->fetch_method(); ?>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <?php
          if ($this->session->userdata('htmlsig_user')['type'] == 2) {
          ?>
            <li class="<?php echo ($controller == 'dashboard' && $method == 'index') ? 'active' : '' ?>"><a href="<?php echo site_url('dashboard') ?>"><i class="fa fa-tachometer" aria-hidden="true"></i><span>Dashboard</span></a></li>
            <?php
            foreach ($this->generators as $key => $value) {


              $token = $this->my_encryption->safe_b64decode($this->input->get('token'));
              $explode = explode('::', $token);


              $generator_id = $value['generator_id'];
              $activate_key = $this->my_encryption->safe_b64encode($generator_id . '::' . KEY);
              $url = site_url('manage_signature/create_signature?token=' . $activate_key);
            ?>
              <li class="<?php echo ($explode[0] == $generator_id) ? 'active' : '' ?>"><a href="<?php echo $url ?>"><i class="fa fa-sliders" aria-hidden="true"></i><span><?php echo $value['name']; ?></span></a></li>
            <?php
            }
          } else {
            ?>
            <?php if ($this->allow_perm['generator'] == 1) { ?>
              <li class="in-btn"><a href="<?php echo site_url('generators/add') ?>"><i class="fa fa-plus-square" aria-hidden="true"></i><span>New Generator</span></a></li>
            <?php } ?>

            <li class="<?php echo ($controller == 'dashboard' && $method == 'index') ? 'active' : '' ?>"><a href="<?php echo site_url('dashboard') ?>"><i class="fa fa-tachometer" aria-hidden="true"></i><span>Dashboard</span></a></li>
            <?php if ($this->allow_perm['generator'] == 1) { ?>
              <li class="<?php echo ($controller == 'generators') ? 'active' : '' ?>"><a href="<?php echo site_url('generators') ?>"><i class="fa fa-sliders" aria-hidden="true"></i><span>Generator</span></a></li>
              <li class="<?php echo ($controller == 'employees') ? 'active' : '' ?>"><a href="<?php echo site_url('employees') ?>"><i class="fa fa-users" aria-hidden="true"></i><span>Employees</span></a></li>
              <li class="<?php echo ($controller == 'share-generator') ? 'active' : '' ?>"><a href="<?php echo site_url('share-generator') ?>"><i class="fa fa-share-alt" aria-hidden="true"></i><span>Share Generator</span></a></li>
            <?php } ?>
            <li class="<?php echo ($controller == 'dashboard' && $method == 'create_signature') ? 'active' : '' ?>"><a href="<?php echo site_url('create_signature') ?>"><i class="fa fa-address-card-o" aria-hidden="true"></i><span>Create Signature</span></a></li>
            <?php if ($this->allow_perm['custom_signature'] == 1) { ?>
              <li class="<?php echo (strtolower($controller) == 'customsignature') ? 'active' : '' ?>"><a href="<?php echo site_url('custom_signature') ?>"><i class="fa fa-pencil" aria-hidden="true"></i><span>custom signature</span></a></li>
            <?php } ?>
            <?php if ($this->allow_perm['stat'] == 1) { ?>
              <li class="<?php echo ($controller == 'stats') ? 'active' : '' ?>"><a href="<?php echo site_url('stats-report') ?>"><i class="fa fa-line-chart" aria-hidden="true"></i><span>Stats</span></a></li>
            <?php } ?>
            <li class="<?php echo ($controller == 'upgrade') ? 'active' : '' ?>"><a href="<?php echo site_url('upgrade') ?>"><i class="fa fa-arrow-up" aria-hidden="true"></i><span>Switch plan</span></a></li>
          <?php } ?>
        </ul>
      </div>
    </div>
    <div class="dash-cont">
      <div class="inner-dash">
        <?php echo $body; ?>
      </div>
    </div>
  </div>
</body> -->

<!-- new ui -->

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
?>
<div class="p-4 lg:p-6 xl:p-16 lg:ml-72 ">
  <div style="z-index:1;" class="sticky top-20 md:top-3 w-full md:w-1/2 md:pr-4 h-min mb-3">
    <input type="search" placeholder="Search signature..." class="text-sm p-4 rounded shadow w-full outline-none">
  </div>
  <div class="flex -mx-4 flex-wrap justify-between">
    <!-- change -->
    <div class="px-4 w-full md:w-1/2">
      <!-- change -->
      <div class="flex justify-between items-center mb-5">
        <span class="text-primary min-h-[40px] flex items-center font-semibold pl-5 relative before:w-[10px] before:h-[10px] before:bg-secondary before:inline-block before:absolute before:left-0 before:top-1/2 before:-translate-y-1/2 before:rounded-full text-base">Signature List</span>
        <div class="flex">
          <a class="bg-secondary border-2 border-secondary duration-300 ease-in-out hover:bg-white hover:text-secondary inline-block px-5 py-3 rounded-md text-white mr-4" href="<?php echo site_url('create_signature') ?>" class="box-btn">Add Signature</a>
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
      </div>
      <div class="box-body list-height">
        <div class="bg-white p-10 rounded-[5px] w-full md:h-[calc(100%-60px)]">
          <div class="flex flex-wrap -mx-4 grid-list-main" id="signature_list"></div>
        </div>
      </div>
    </div>
    <div class="fixed inset-0 md:inset-[unset] flex-col justify-center items-center z-20 md:z-0 md:static hidden md:block px-4 w-full md:w-1/2 md:order-1 mb-6 md:mb-0 generator-right h-full md:h-auto lg:sticky lg:top-5">
      <div class="flex justify-between items-center w-full mb-5 min-h-[40px]">
        <button class="inline-block md:hidden bg-primary px-6 py-2 text-white rounded-md uppercase text-sm font-medium back-btn">Back</button>
        <span class="text-primary inline-block font-semibold pl-5 relative before:w-[10px] before:h-[10px] before:bg-secondary before:inline-block before:absolute before:left-0 before:top-1/2 before:-translate-y-1/2 before:rounded-full text-base">Signature Preview</span>
        <a href="<?php echo site_url('create_signature'); ?>" class="inline-block bg-primary px-6 py-2 text-white rounded-md uppercase text-sm font-medium">EDIT</a>
      </div>
      <!-- <div class="box-title">
        <h3>Signature Preview</h3>
        <div class="box-act">
          <a href="<?php echo site_url('create_signature'); ?>" id="edit-specifc-signature" class="box-btn">Edit</a>
        </div>
        </div> -->
      <div class="preview bg-white w-full p-10 rounded-[5px] md:h-[calc(100%-60px)]" id="theme-1">
        <div class="default_signature sticky h-min top-3" style="max-width:490px;margin-left: auto;margin-right: auto;">
          <table style="margin-top: 0;margin-left: 0;margin-right: 0;margin-bottom: 10px;">
            <tbody>
              <tr>
                <td colspan="1" valign="top" style="padding-right:15px;">
                  <div style="height:80px;width:80px;margin-bottom:0;border-radius: 99px;overflow: hidden;">
                    <img style="object-fit: cover;transform: scale(1.5); object-position: -20px 15px;" src="assets/image/Image 1.png" alt="htmlsig.com" border="0" class="sig-logo default inline-block w-full h-full" data-pin-nopin="true">
                  </div>
                </td>
                <td colspan="3" style="padding-left:20px;padding-top:0;" valign="top;">
                  <h2 style="font-size: 16px;line-height:20px; margin: 0px;color: #E55812;font-weight: bold;">
                    Timothy Boyd</h2>
                  <h5 class="" style="font-size: 12px;line-height:16px;color: #202C39;padding-bottom: 0;padding-top: 2px;font-weight: 500;margin: 0px;">
                    Senior content writer</h5>
                  <ul class="" style="margin-top: 10px;margin-left: 0;margin-right: 0;margin-bottom: 0;padding: 0;list-style: none;text-align:left;font-size:12px;font-weight: 500;line-height:16px;margin-bottom:10px;">
                    <li style="margin-bottom: 5px;margin-right: 10px;margin-left: 0;display:inline-block;color:#202C39;">
                      <span class="" style="color: #E55812;">Mobile:</span> (953)517-5264
                    </li>
                    <li style="margin-bottom: 5px;margin-right: 10px;margin-left: 0;display:inline-block;color:#202C39;">
                      <span class="" style="color: #E55812;">Fax:</span> (953)517-5264
                    </li>
                    <li style="margin-bottom: 5px;margin-right: 10px;margin-left: 0;display:inline-block;color:#202C39;">
                      <span class="" style="color: #E55812;">Email:</span> <a href="mailto:timothyboyd@gmail.com" style="color:#333;text-decoration:none;" tabindex="0">timothyboyd@gmail.com</a>
                    </li>
                  </ul>
                </td>
              </tr>
              <tr>
                <td colspan="4" class="border-t-2 border-t-[#E2E2E2] pt-2">
                  <p class="" style="text-align:left;line-height: 16px;font-weight: 500;font-size: 12px;color: #202C39;margin-top: 0;margin-left: 0;margin-right: 0;margin-bottom: 5px;">
                    <span class="" style="color: #E55812;display:block;font-size: 16px;font-weight: 600;margin-bottom: 2px;">Signaturia</span>32-black
                    street, winter hour.United Kingdom 08808
                  </p>
                  <p class="" style="text-align:left;line-height: 16px;font-weight: 500;font-size: 12px;color: #202C39;margin-top: 0;margin-left: 0;margin-right: 0;margin-bottom: 0;">
                    <span class="" style="color: #E55812;">Website:</span> <a href="www.mailsignatory.com" target="_blank" style="color:#333;text-decoration:none;" tabindex="0">www.mailsignatory.com</a>
                  </p>
                </td>
              </tr>
            </tbody>
          </table>


          <div class="" style="margin: 0;padding: 10px;text-align:right;display: flex;justify-content: center;">
            <?php foreach ($social_icons as $key => $social_icon) {
              if ($key == 10) {
                break;
              } ?>
              <a style=" text-decoration:none;display:inline-block;" class="social" href="#"> <img width="20px" style="margin-bottom:2px;margin-right:2px; border:none; display:inline;" height="20px" src="<?php echo base_url() . SOCIAL_ICONS_SET_1 . $social_icon['icon1'] ?>" alt="" /></a>
            <?php } ?>
          </div>

          <p class="" style="text-align:left;margin-top:15px;margin-bottom:15px;margin-left:0;margin-right:0;">
            <a href="#">
              <img src="image/Group 254.png" alt="" border="0" style="width: 100%;" data-pin-nopin="true">
            </a>
          </p>
          <p class="appstores-container" style="text-align:left;margin-top:15px;margin-bottom:15px;margin-left:0;margin-right:0;display: flex;justify-content: space-between;gap: 5px;">
            <a class="appstore signature_amazon_app_store_link-target sig-hide" style="text-decoration:none;" href="#">
              <img style="border:none;" src="assets/image/Mask Group 2.png" class="appstore-icon" alt="Available at Amazon">
            </a>
            <a class="appstore signature_google_play_link-target sig-hide" style="text-decoration:none;" href="#">
              <img style="border:none;" src="assets/image/Mask Group 3.png" class="appstore-icon " alt="Get it on Google Play">
            </a>
            <a class="appstore signature_apple_app_store_link-target sig-hide" style="text-decoration:none;" href="#">
              <img style="border:none;" src="assets/image/Mask Group 4.png" class="appstore-icon " alt="Download on the App Store" data-pin-nopin="true">
            </a>
          </p>
          <p class="signature_disclaimer-target" style="line-height: 15px;font-weight: 500;font-size: 10px;color: #202C39;margin:0;">A
            disclaimer is generally any statement intended to specify or delimit the scope of rights and obligations
            that may be exercised and enforced by parties in a legally recognized relationship. In contrast to other
            terms for legally operative language, the term disclaimer usually implies situations that involve some
            level of uncertainty, waiver, or risk.
          </p>
        </div>
      </div>
    </div>
  </div>
</div>









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
      url: site_url + "/dashboard/ajax_load_signatures",
      dataType: "json",
      type: "POST",
      data: {
        keyword: $('#signature_search').val()
      },
      success: function(data) {
        $('.custom_loader').hide();
        str = '';
        // main part
        // str += '<div class="bg-white p-10 rounded-[5px] w-full md:h-[calc(100%-60px)]">\n\
        //           <div class="flex flex-wrap -mx-4 grid-list-main">';
        $.each(data, function(i, item) {
          if (item.is_custom == 0) {
            str += '<div class="w-full sm:w-1/2 p-4 grid-list-items duration-300">\n\
                      <div class="w-full shadow-sm rounded overflow-hidden bg-white text-center relative h-48">\n\
                        <a class="list-view-none relative after:absolute after:inset-0 after:bg-black after:bg-opacity-25 block" href="javascript:void(0)" onclick="view_sign(' + item.id + ')">\n\
                          <div class="list-img"><img class="object-contain" src="<?php echo base_url() . SIGNATURE_IMAGES ?>signature-' + item.id + '.png<?php echo '?' . time(); ?>" onerror="this.src=\'assets/images/sign.png\';" alt="Video img"></div>\n\
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
                      </div>\n\
                    </div>';
          } else {
            str += '<div class="w-full sm:w-1/2 p-4 grid-list-items duration-300">\n\
                      <div class="w-full shadow-sm rounded overflow-hidden bg-white text-center relative h-48">\n\
                        <a class="list-view-none relative after:absolute after:inset-0 after:bg-black after:bg-opacity-25 block" href="javascript:void(0)" onclick="view_sign(' + item.id + ')">\n\
                          <div class="list-img"><img class="object-contain" src="<?php echo base_url() . CUSTOM_SIGNATURE_IMAGES ?>' + item.user_id + '/' + item.id + '.png<?php echo '?' . time(); ?>" onerror="this.src=\'assets/images/sign.png\';"  alt="Video img" /></div>\n\
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
                             <li><a href="<?php echo site_url() ?>custom_signature/' + item.id + '"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 10 10"><path id="fi-rr-pencil" d="M11.469.619A1.818,1.818,0,0,0,8.9.619L2.734,6.785A2.491,2.491,0,0,0,2,8.557V9.587a.5.5,0,0,0,.5.5H3.531A2.49,2.49,0,0,0,5.3,9.354l6.166-6.166a1.818,1.818,0,0,0,0-2.568ZM4.594,8.645a1.515,1.515,0,0,1-1.063.44H3V8.557a1.494,1.494,0,0,1,.441-1.063l4.2-4.2L8.8,4.447Zm6.165-6.166L9.5,3.736,8.35,2.585,9.607,1.328a.814.814,0,0,1,1.151,1.153Z" transform="translate(-2 -0.088)" fill="currentColor"/></svg> Edit</a></li>\n\
                              <li><a href="<?php echo site_url() ?>stats-report/' + item.id + '"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 10 10"><g id="Group_284" data-name="Group 284" transform="translate(0)"><path id="Path_414" data-name="Path 414" d="M-1608.081,2098.334h8.651a.91.91,0,0,1,.182.014.409.409,0,0,1,.331.428.416.416,0,0,1-.378.389c-.041,0-.082,0-.122,0h-9c-.344,0-.5-.155-.5-.5q0-4.509,0-9.018a.445.445,0,0,1,.224-.436.41.41,0,0,1,.595.268.871.871,0,0,1,.017.192q0,4.254,0,8.508Z" transform="translate(1608.916 -2089.169)" fill="#202c39"/><path id="Path_415" data-name="Path 415" d="M-1556.583,2162.868l2.489-3.45-.879.063c-.15.011-.3.026-.45.028a.4.4,0,0,1-.411-.348.382.382,0,0,1,.341-.429c.308-.035.619-.052.928-.075l1.239-.091c.057,0,.114-.008.17-.009a.4.4,0,0,1,.429.383q.084,1.083.167,2.165a.4.4,0,0,1-.292.441.4.4,0,0,1-.515-.337c-.025-.244-.041-.49-.061-.735-.014-.169-.027-.338-.043-.533-.042.056-.068.091-.094.126l-2.585,3.585a.417.417,0,0,1-.494.2.645.645,0,0,1-.214-.136c-.5-.462-1-.928-1.495-1.393l-.094-.085c-.027.035-.05.065-.072.1q-.721,1.02-1.443,2.039a.418.418,0,0,1-.567.171.385.385,0,0,1-.173-.517.956.956,0,0,1,.074-.115l1.737-2.455a.427.427,0,0,1,.713-.073l1.516,1.413Z" transform="translate(1562.08 -2156.632)" fill="#202c39"/></g></svg> Stats</a></li>\n\
                              <li><a href="<?php echo site_url() ?>dashboard/copy_custom/' + item.id + '"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="13" viewBox="0 0 10 11"><path id="fi-rr-copy-alt" d="M7.5,9.167A2.406,2.406,0,0,0,10,6.875V2.861a1.747,1.747,0,0,0-.586-1.3L8.293.537A2.081,2.081,0,0,0,6.879,0H4.5A2.406,2.406,0,0,0,2,2.292V6.875A2.406,2.406,0,0,0,4.5,9.167ZM3,6.875V2.292A1.442,1.442,0,0,1,4.5.917S6.96.923,7,.928v.906A.961.961,0,0,0,8,2.75h.988C8.993,2.787,9,6.875,9,6.875A1.442,1.442,0,0,1,7.5,8.25h-3A1.442,1.442,0,0,1,3,6.875Zm9-3.208V8.708A2.406,2.406,0,0,1,9.5,11H5a.46.46,0,1,1,0-.917H9.5A1.442,1.442,0,0,0,11,8.708V3.667a.5.5,0,0,1,1,0Z" transform="translate(-2 0)" fill="#202c39"/></svg> Copy</a></li>\n\
                              <li><a href="<?php echo site_url() ?>install_sign/' + item.id + '"><svg id="Group_283" data-name="Group 283" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 10 10"><path id="Path_412" data-name="Path 412" d="M454.849,1716.114l-.024-.008-.075-.026a.58.58,0,0,1-.366-.626.565.565,0,0,1,.529-.5h8.77c.42,0,.546.087.695.49v.177l-.016.049a1.04,1.04,0,0,1-.044.12.586.586,0,0,1-.407.321Z" transform="translate(-454.379 -1706.114)" fill="#202c39"/><path id="Path_413" data-name="Path 413" d="M539.945,1387.427a.546.546,0,0,1-.4-.194c-.484-.52-.976-1.051-1.452-1.563l-.685-.739a.59.59,0,0,1-.151-.59.517.517,0,0,1,.394-.4.561.561,0,0,1,.131-.016.516.516,0,0,1,.385.186l.465.5.552.6a.539.539,0,0,1,.039.052l.022.031.035.047.129-.052v-1.477q0-1.813,0-3.627a.559.559,0,0,1,.538-.61h.01a.554.554,0,0,1,.524.549c0,.058,0,.118,0,.176,0,.023,0,.045,0,.068v4.9l.126.093.044-.066.021-.033a.33.33,0,0,1,.033-.048l.027-.029c.328-.356.668-.723,1-1.082a.5.5,0,0,1,.37-.175.562.562,0,0,1,.164.026.522.522,0,0,1,.371.424.6.6,0,0,1-.164.563l-1.245,1.34-.485.523-.122.132c-.091.1-.185.2-.278.3A.559.559,0,0,1,539.945,1387.427Z" transform="translate(-534.946 -1379.569)" fill="#202c39"/></svg> Download</a></li>\n\
                              <li><a href="<?php echo site_url() ?>user/dashboard/delete/' + item.id + '" onclick="return confirm(\'Are you sure you want to delete this signature?\')"><svg id="Group_283" data-name="Group 283" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 10 10"><path id="Path_412" data-name="Path 412" d="M454.849,1716.114l-.024-.008-.075-.026a.58.58,0,0,1-.366-.626.565.565,0,0,1,.529-.5h8.77c.42,0,.546.087.695.49v.177l-.016.049a1.04,1.04,0,0,1-.044.12.586.586,0,0,1-.407.321Z" transform="translate(-454.379 -1706.114)" fill="#202c39"/><path id="Path_413" data-name="Path 413" d="M539.945,1387.427a.546.546,0,0,1-.4-.194c-.484-.52-.976-1.051-1.452-1.563l-.685-.739a.59.59,0,0,1-.151-.59.517.517,0,0,1,.394-.4.561.561,0,0,1,.131-.016.516.516,0,0,1,.385.186l.465.5.552.6a.539.539,0,0,1,.039.052l.022.031.035.047.129-.052v-1.477q0-1.813,0-3.627a.559.559,0,0,1,.538-.61h.01a.554.554,0,0,1,.524.549c0,.058,0,.118,0,.176,0,.023,0,.045,0,.068v4.9l.126.093.044-.066.021-.033a.33.33,0,0,1,.033-.048l.027-.029c.328-.356.668-.723,1-1.082a.5.5,0,0,1,.37-.175.562.562,0,0,1,.164.026.522.522,0,0,1,.371.424.6.6,0,0,1-.164.563l-1.245,1.34-.485.523-.122.132c-.091.1-.185.2-.278.3A.559.559,0,0,1,539.945,1387.427Z" transform="translate(-534.946 -1379.569)" fill="#202c39"/></svg> Delete</a></li>\n\
                              <span class="block border-8 absolute -bottom-4 right-2 w-2 border-gray-100 border-l-transparent border-r-transparent border-b-transparent"></span>\n\
                            </ul>\n\
                          </div>\n\
                        </div>\n\
                      </div>\n\
                    </div>';
          }
          // str += '<div class="list-name"><h3>' + item.name + '</h3></div>\n\
          //               <div class="share-pic">';
          // if (item.logo != '') {
          //   str += '<img class="w-10 h-10 rounded-full object-cover" src="<?php echo SIGNATURE_UPLOADS_LOGO ?>' + item.logo + '" alt=""onerror="this.src=\'assets/images/avatar.jpg\'" class="fix-img">';
          // } else {
          //   str += '<img src="assets/image/avatar.jpg" alt="" class="fix-img">';
          // }
          str += '      </div>\n\
                        </div>\n\
                      </div>\n\
                    </div>\n\
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

    console.log('chaman')
    $(".preview-btn, .back-btn").click(function() {
      $(".generator-right").toggleClass("hidden bg-[#EDF1F8] flex")
    });


    $(document).ready(function() {
      $('.dashbord-editmenu').click(function() {
        $(this).next('.dashbord-edititems').addClass('block');
      });
    })

    const listViewButton = document.querySelector('.list-view-button');
    const gridViewButton = document.querySelector('.grid-view-button');
    const list = document.querySelector('.grid-list-main');

    listViewButton.onclick = function() {
      gridViewButton.classList.remove('active');
      listViewButton.classList.add('active');
      list.classList.remove('grid-view-filter');
      list.classList.add('list-view-filter');
    }

    gridViewButton.onclick = function() {
      listViewButton.classList.remove('active');
      gridViewButton.classList.add('active');
      list.classList.remove('list-view-filter');
      list.classList.add('grid-view-filter');
    }

  }



  function view_sign(id) {
    $('#edit-specifc-signature').attr('href', '<?php echo site_url('edit_signature/') ?>' + id);
    $('.custom_loader').show();
    $.ajax({
      url: site_url + "dashboard/ajax_get_signature",
      //            dataType: "json",
      type: "POST",
      data: {
        id: id
      },
      success: function(data) {
        $('.custom_loader').hide();
        $('#theme-1').html(data);
        /*
         str = '<div style="text-size-adjust: none !important; -ms-text-size-adjust: none !important; -webkit-text-size-adjust: none !important;">';
         if (data.signature.logo != '') {
         str += '<p><img src="<?php echo SIGNATURE_UPLOADS_LOGO ?>' + data.signature.logo + '" alt="" onerror="this.src=\'assets/images/avatar.jpg\'" border="0" class="sig-logo default" style="max-height:80px" data-pin-nopin="true"></p>'
         }
         str += '<p style="font-family: Helvetica, Arial, sans-serif; font-size: 10px; line-height: 12px; color: #212121;">\n\
         <span style="font-weight: bold;" class="txt signature_name-target sig-hide">' + data.signature.name + '</span> ';
         if (data.signature.job_title != '') {
         str += '<span class="title-sep sep" style="display: inline;">/</span>\n\
         <span style="color: #212121;" class="txt signature_jobtitle-target sig-hide">' + data.signature.job_title;
         }
         str += '<span class="email-sep break" style="display: block;"></span> \n\
         <a class="link email signature_email-target sig-hide" href="mailto:' + data.signature.email + '" style="color: #477ccc; text-decoration:none">' + data.signature.email + '</a>';
         if (data.signature.mobile_number != '') {
         str += '<span class="signature_email-sep sep" style="display: inline;"> / </span><span style="color: #212121;" class="txt signature_mobilephone-target sig-hide">' + data.signature.mobile_number + '</span> </p>';
         }
         str += '<p class="company-info" style="font-family: Helvetica, Arial, sans-serif; font-size: 10px; line-height: 12px"> <span style="font-weight: bold; color: #212121;" class="txt signature_companyname-target sig-hide">' + data.signature.company_name + '</span> \n\
         <span class="company-sep break" style="display: block;"></span> ';
         if (data.signature.fax != '') {
         str += '<span style="color: rgb(33, 33, 33); display: inline;" class="txt office-sep sep">Office: </span> <span style="color: #212121;" class="txt signature_officephone-target sig-hide">' + data.signature.office_phone + '</span> ';
         }
         if (data.signature.fax != '') {
         str += '<span style="color: rgb(33, 33, 33); display: inline;" class="txt fax-sep sep">/ </span>\n\
         <span style="color: rgb(33, 33, 33); display: inline;" class="txt fax-title sep">Fax: </span> <span style="color: #212121;" class="txt signature_fax-target sig-hide">' + data.signature.fax + '</span> ';
         }
         str += '<span class="address-sep break" style="display: block;"></span> \n\
         <span style="color: #212121;" class="txt signature_address-target sig-hide">' + data.signature.address + '</span> \n\
         <span class="address2-sep break" style="display: block;"></span> \n\
         <span style="color: #212121;" class="txt signature_address2-target sig-hide">' + data.signature.address_line2 + '</span> \n\
         <span class="website-sep break" style="display: block;"></span> \n\
         <a class="link signature_website-target sig-hide" href="' + data.signature.website + '" style="color: #477ccc; text-decoration:none">' + data.signature.website + '</a> </p>\n\
         <!--<p class="social-list" style="font-size:0; line-height:0;"> <a style=" text-decoration:none" class="social signature_twitter-target sig-hide" href="#"> <img width="16px" style="margin-bottom:2px; border:none; display:inline;" height="16px" data-filename="twitter.png" src="https://s3.amazonaws.com/htmlsig-assets/round/twitter.png" alt="Twitter"> </a> <span style="white-space:nowrap;" class="signature_twitter-sep social-sep"> <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2"> </span> <a style=" text-decoration:none" class="social signature_facebook-target sig-hide" href="https://htmlsig.com/t/000001BNZ369"> <img width="16px" style="margin-bottom:2px; border:none; display:inline;" height="16px" data-filename="facebook.png" src="https://s3.amazonaws.com/htmlsig-assets/round/facebook.png" alt="Facebook"> </a> <span style="white-space:nowrap;" class="signature_facebook-sep social-sep"> <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2"> </span> <a style=" text-decoration:none" class="social signature_googleplus-target sig-hide" href="#"> <img width="16px" style="margin-bottom:2px; border:none; display:inline;" height="16px" data-filename="googleplus.png" src="https://s3.amazonaws.com/htmlsig-assets/round/googleplus.png" alt="Google +"> </a> <span style="white-space:nowrap;" class="signature_googleplus-sep social-sep"> <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2"> </span> <a style=" text-decoration:none" class="social signature_linkedin-target sig-hide" href="#"> <img width="16px" style="margin-bottom:2px; border:none; display:inline;" height="16px" data-filename="linkedin.png" src="https://s3.amazonaws.com/htmlsig-assets/round/linkedin.png" alt="LinkedIn"> </a> <span style="white-space:nowrap;" class="signature_linkedin-sep social-sep"> <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2"> </span> <a style=" text-decoration:none" class="social signature_instagram-target sig-hide" href="#"> <img width="16px" style="margin-bottom:2px; border:none; display:inline;" height="16px" data-filename="instagram.png" src="https://s3.amazonaws.com/htmlsig-assets/round/instagram.png" alt="Instagram"> </a> <span style="white-space:nowrap;" class="signature_instagram-sep social-sep"> <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2"> </span> <a style=" text-decoration:none" class="social signature_dribbble-target sig-hide" href="#"> <img width="16px" style="margin-bottom:2px; border:none; display:inline;" height="16px" data-filename="dribbble.png" src="https://s3.amazonaws.com/htmlsig-assets/round/dribbble.png" alt="Dribble"> </a> <span style="white-space:nowrap;" class="signature_dribbble-sep social-sep"> <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2"> </span> <a style=" text-decoration:none" class="social signature_skype-target sig-hide" href="#"> <img width="16px" style="margin-bottom:2px; border:none; display:inline;" height="16px" data-filename="skype.png" src="https://s3.amazonaws.com/htmlsig-assets/round/skype.png" alt="Skype"> </a> <span style="white-space:nowrap;" class="signature_skype-sep social-sep"> <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2"> </span> <a style=" text-decoration:none" class="social signature_youtube-target sig-hide" href="#"> <img width="16px" style="margin-bottom:2px; border:none; display:inline;" height="16px" data-filename="youtube.png" src="https://s3.amazonaws.com/htmlsig-assets/round/youtube.png" alt="Youtube"> </a> <span style="white-space:nowrap;" class="signature_youtube-sep social-sep"> <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2"> </span> <a style=" text-decoration:none" class="social signature_vimeo-target sig-hide" href="#"> <img width="16px" style="margin-bottom:2px; border:none; display:inline;" height="16px" data-filename="vimeo.png" src="https://s3.amazonaws.com/htmlsig-assets/round/vimeo.png" alt="Vimeo"> </a> <span style="white-space:nowrap;" class="signature_vimeo-sep social-sep"> <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2"> </span> <a style=" text-decoration:none" class="social signature_flickr-target sig-hide" href="#"> <img width="16px" style="margin-bottom:2px; border:none; display:inline;" height="16px" data-filename="flickr.png" src="https://s3.amazonaws.com/htmlsig-assets/round/flickr.png" alt="Flickr"> </a> <span style="white-space:nowrap;" class="signature_flickr-sep social-sep"> <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2"> </span> <a style="display:none; text-decoration:none" class="social signature_fivehundredpx-target sig-hide" href="#"> <img width="16px" style="margin-bottom:2px; border:none; display:inline;" height="16px" data-filename="fivehundredpx.png" src="https://s3.amazonaws.com/htmlsig-assets/round/fivehundredpx.png" alt="500px"> </a> <span style="white-space:nowrap;" class="signature_fivehundredpx-sep social-sep"> <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2"> </span> <a style="display:none; text-decoration:none" class="social signature_pinterest-target sig-hide" href="#"> <img width="16px" style="margin-bottom:2px; border:none; display:inline;" height="16px" data-filename="pinterest.png" src="https://s3.amazonaws.com/htmlsig-assets/round/pinterest.png" alt="Pinterest"> </a> <span style="white-space:nowrap;" class="signature_pinterest-sep social-sep"> <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2"> </span> <a style="display:none; text-decoration:none" class="social signature_github-target sig-hide" href="#"> <img width="16px" style="margin-bottom:2px; border:none; display:inline;" height="16px" data-filename="github.png" src="https://s3.amazonaws.com/htmlsig-assets/round/github.png" alt="Github"> </a> <span style="white-space:nowrap;" class="signature_github-sep social-sep"> <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2"> </span> <a style="display:none; text-decoration:none" class="social signature_zillow-target sig-hide" href="#"> <img width="16px" style="margin-bottom:2px; border:none; display:inline;" height="16px" data-filename="zillow.png" src="https://s3.amazonaws.com/htmlsig-assets/round/zillow.png" alt="Zillow"> </a> <span style="white-space:nowrap;" class="signature_zillow-sep social-sep"> <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2"> </span> <a style="display:none; text-decoration:none" class="social signature_yelp-target sig-hide" href="#"> <img width="16px" style="margin-bottom:2px; border:none; display:inline;" height="16px" data-filename="yelp.png" src="https://s3.amazonaws.com/htmlsig-assets/round/yelp.png" alt="Yelp"> </a> <span style="white-space:nowrap;" class="signature_yelp-sep social-sep"> <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2"> </span> <a style="display:none; text-decoration:none" class="social signature_tripadvisor-target sig-hide" href="#"> <img width="16px" style="margin-bottom:2px; border:none; display:inline;" height="16px" data-filename="tripadvisor.png" src="https://s3.amazonaws.com/htmlsig-assets/round/tripadvisor.png" alt="TripAdvisor"> </a> <span style="white-space:nowrap;" class="signature_tripadvisor-sep social-sep"> <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2"> </span> <a style="display:none; text-decoration:none" class="social signature_houzz-target sig-hide" href="#"> <img width="16px" style="margin-bottom:2px; border:none; display:inline;" height="16px" data-filename="houzz.png" src="https://s3.amazonaws.com/htmlsig-assets/round/houzz.png" alt="Houzz"> </a> <span style="white-space:nowrap;" class="signature_houzz-sep social-sep"> <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2"> </span> <a style="display:none; text-decoration:none" class="social signature_soundcloud-target sig-hide" href="#"> <img width="16px" style="margin-bottom:2px; border:none; display:inline;" height="16px" data-filename="soundcloud.png" src="https://s3.amazonaws.com/htmlsig-assets/round/soundcloud.png" alt="Soundcloud"> </a> <span style="white-space:nowrap;" class="signature_soundcloud-sep social-sep"> <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2"> </span> <a style="display:none; text-decoration:none" class="social signature_tumblr-target sig-hide" href="#"> <img width="16px" style="margin-bottom:2px; border:none; display:inline;" height="16px" data-filename="tumblr.png" src="https://s3.amazonaws.com/htmlsig-assets/round/tumblr.png" alt="Tumblr"> </a> <span style="white-space:nowrap;" class="signature_tumblr-sep social-sep"> <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2"> </span> <a style="display:none; text-decoration:none" class="social signature_stackoverflow-target sig-hide" href="#"> <img width="16px" style="margin-bottom:2px; border:none; display:inline;" height="16px" data-filename="stackoverflow.png" src="https://s3.amazonaws.com/htmlsig-assets/round/stackoverflow.png" alt="Stack Overflow"> </a> <span style="white-space:nowrap;" class="signature_stackoverflow-sep social-sep"> <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2"> </span> <a style="display:none; text-decoration:none" class="social signature_wordpress-target sig-hide" href="#"> <img width="16px" style="margin-bottom:2px; border:none; display:inline;" height="16px" data-filename="wordpress.png" src="https://s3.amazonaws.com/htmlsig-assets/round/wordpress.png" alt="Wordpress"> </a> <span style="white-space:nowrap;" class="signature_wordpress-sep social-sep"> <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2"> </span> <a style="display:none; text-decoration:none" class="social signature_quora-target sig-hide" href="#"> <img width="16px" style="margin-bottom:2px; border:none; display:inline;" height="16px" data-filename="quora.png" src="https://s3.amazonaws.com/htmlsig-assets/round/quora.png" alt="Quora"> </a> <span style="white-space:nowrap;" class="signature_quora-sep social-sep"> <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2"> </span> <a style="display:none; text-decoration:none" class="social signature_behance-target sig-hide" href="#"> <img width="16px" style="margin-bottom:2px; border:none; display:inline;" height="16px" data-filename="behance.png" src="https://s3.amazonaws.com/htmlsig-assets/round/behance.png" alt="Behance"> </a> <span style="white-space:nowrap;" class="signature_behance-sep social-sep"> <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2"> </span> <a style="display:none; text-decoration:none" class="social signature_imdb-target sig-hide" href="#"> <img width="16px" style="margin-bottom:2px; border:none; display:inline;" height="16px" data-filename="imdb.png" src="https://s3.amazonaws.com/htmlsig-assets/round/imdb.png" alt="IMDB"> </a> <span style="white-space:nowrap;" class="signature_imdb-sep social-sep"> <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2"> </span> <a style="display:none; text-decoration:none" class="social signature_maps-target sig-hide" href="#"> <img width="16px" style="margin-bottom:2px; border:none; display:inline;" height="16px" data-filename="maps.png" src="https://s3.amazonaws.com/htmlsig-assets/round/maps.png" alt="Maps"> </a> <span style="white-space:nowrap;" class="signature_maps-sep social-sep"> <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2"> </span> <a style="display:none; text-decoration:none" class="social signature_bitbucket-target sig-hide" href="#"> <img width="16px" style="margin-bottom:2px; border:none; display:inline;" height="16px" data-filename="bitbucket.png" src="https://s3.amazonaws.com/htmlsig-assets/round/bitbucket.png" alt="Bitbucket"> </a> <span style="white-space:nowrap;" class="signature_bitbucket-sep social-sep"> <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2"> </span> <a style="display:none; text-decoration:none" class="social signature_periscope-target sig-hide" href="#"> <img width="16px" style="margin-bottom:2px; border:none; display:inline;" height="16px" data-filename="periscope.png" src="https://s3.amazonaws.com/htmlsig-assets/round/periscope.png" alt="Periscope"> </a> <span style="white-space:nowrap;" class="signature_periscope-sep social-sep"> <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2"> </span> <a style="display:none; text-decoration:none" class="social signature_snapchat-target sig-hide" href="#"> <img width="16px" style="margin-bottom:2px; border:none; display:inline;" height="16px" data-filename="snapchat.png" src="https://s3.amazonaws.com/htmlsig-assets/round/snapchat.png" alt="SnapChat"> </a> <span style="white-space:nowrap;" class="signature_snapchat-sep social-sep"> <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2"> </span> <a style="display:none; text-decoration:none" class="social signature_spotify-target sig-hide" href="#"> <img width="16px" style="margin-bottom:2px; border:none; display:inline;" height="16px" data-filename="spotify.png" src="https://s3.amazonaws.com/htmlsig-assets/round/spotify.png" alt="Spotify"> </a> <span style="white-space:nowrap;" class="signature_spotify-sep social-sep"> <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2"> </span> <a style="display:none; text-decoration:none" class="social signature_xing-target sig-hide" href="#"> <img width="16px" style="margin-bottom:2px; border:none; display:inline;" height="16px" data-filename="xing.png" src="https://s3.amazonaws.com/htmlsig-assets/round/xing.png" alt="Xing"> </a> <span style="white-space:nowrap;" class="signature_xing-sep social-sep"> <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2"> </span> <a style="display:none; text-decoration:none" class="social signature_whatsapp-target sig-hide" href="#"> <img width="16px" style="margin-bottom:2px; border:none; display:inline;" height="16px" data-filename="whatsapp.png" src="https://s3.amazonaws.com/htmlsig-assets/round/whatsapp.png" alt="Whatsapp"> </a> <span style="white-space:nowrap;" class="signature_whatsapp-sep social-sep"> <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2"> </span> </p>\n\
         <p class="ba-container"> <a href="https://www.htmlsig.com/?utm_source=email&amp;utm_medium=sig&amp;utm_campaign=email%20ba"> <img src="https://htmlsigs.s3.amazonaws.com/htmlsig-ba.png" alt="htmlsig.com" border="0" class="sig-ba" height="35" width="300" data-pin-nopin="true"> </a> </p>\n\
         <p class="appstores-container"> <br>\n\
         <a class="appstore signature_apple_app_store_link-target sig-hide" style="text-decoration:none;" href="#"> <img style="border:none;" height="35" width="113" src="https://s3.amazonaws.com/htmlsig-assets/app-icon/apple.png" class="appstore-icon " alt="Download on the App Store" data-pin-nopin="true"> </a><img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2"> <a class="appstore signature_google_play_link-target sig-hide" style="text-decoration:none;" href="#"> <img style="border:none;" height="35" width="113" src="https://s3.amazonaws.com/htmlsig-assets/app-icon/google.png" class="appstore-icon " alt="Get it on Google Play"> </a><img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2"> <a class="appstore signature_amazon_app_store_link-target sig-hide" style="text-decoration:none;" href="#"> <img style="border:none;" height="35" width="113" src="https://s3.amazonaws.com/htmlsig-assets/app-icon/amazon.png" class="appstore-icon" alt="Available at Amazon"> </a> </p>\n\
         <p style="font-family: Helvetica, Arial, sans-serif; color: #212121; font-size: 9px; line-height: 12px;" class="txt signature_disclaimer-target"></p>\n\
         \n\         -->\n\
         </div>'
         $('#theme-1').html(data);*/
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
