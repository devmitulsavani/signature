<div class="row">
  <div class="col-md-6 col-sm-12">
    <div class="box-wrap">
      <div class="box-title">
        <h3>
          <?php if (isset($generator)) echo "Edit generator";
          else echo "Create generator"; ?>
        </h3>
      </div>
      <div class="box-body">
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
        <div class="frm-desc">
          <h3 class="frm-title">Allow Fields for edit</h3>
          <p>You can select for giving restriction to your team to access perticular field to edit.</p>
        </div>
        <?php if ($this->session->flashdata('success_profile')) { ?>
          <div class="alert bg-success alert-styled-left bootstrap_alert">
            <a class="close" data-dismiss="alert">×</a>
            <strong><?php echo $this->session->flashdata('success_profile') ?></strong>
          </div>
        <?php } ?>
        <form class="form-horizontal" id="generator_info" method="post" action="" enctype="multipart/form-data">
          <div class="input">
            <input class="input-field" type="text" id="generator" name="generator" value="<?php if (isset($generator)) echo $generator['name'] ?>" />
            <label class="input-label" for="firstname">Generator Name</label>
          </div>
          <?php if ($signature_main['is_custom'] != 1) {
            if (isset($signature_main)) { ?>
              <div class="rest-block">
                <h5 class="title-text">Main Tab</h5>
                <?php foreach ($signature_main as $key => $value) {
                  if ($signature_main[$key] != '') { ?>
                    <div class="checkbox">
                      <label for="<?php echo $key ?>"><input type="checkbox" id="<?php echo $key ?>" name="main_<?php echo $key ?>" value="<?php echo $key ?>" /><span></span><?php echo $key ?></label>
                    </div>
                <?php }
                }
              }
              if (isset($signature_social)) { ?>
              </div>
              <div class="rest-block"> 
                <h5 class="title-text">Social Tab</h5>
                <?php foreach ($signature_social as $key => $value) { ?>
                  <div class="checkbox">
                    <label for="<?php echo $value['name'] ?>"><input type="checkbox" id="<?php echo $value['name'] ?>" name="Social_<?php echo $value['name'] ?>" value="<?php echo $value['name'] ?>" /><span></span><?php echo $value['name'] ?></label>
                  </div>
                <?php }
              }
              if (isset($signature_declaimer)) { ?>
              </div>
              <div class="rest-block">
                <h5 class="title-text">Declaimer Tab</h5>
                <div class="checkbox">
                  <label for="Declaimer"><input type="checkbox" id="Declaimer" name="Declaimer_Declaimer" value="Declaimer" /><span></span>Declaimer</label>
                </div>
              <?php }
              if (isset($signature_banner)) { ?>
              </div>
              <div class="rest-block">
                <h5 class="title-text">Banner Tab</h5>
                <div class="checkbox">
                  <label for="banner"><input type="checkbox" id="banner" name="Banner_banner" value="banner" /><span></span>Banner</label>
                </div>
              <?php } ?>
              </div>
              <div class="rest-block">
                <h5 class="title-text">Style Style</h5>
                <div class="checkbox">
                  <label for="styles"><input type="checkbox" id="styles" name="Style_style" value="" /><span></span>Style</label>
                </div>
              </div>
              <div class="rest-block">
                <?php if (isset($signature_apps)) { ?>
                  <h5 class="title-text">Apps Tab</h5>
                  <?php foreach ($signature_apps as $key => $value) {
                    if ($signature_apps[$key] != '') { ?>
                      <div class="checkbox">
                        <label for="<?php echo $key ?>"><input type="checkbox" id="<?php echo $key ?>" name="Apps_<?php echo $key ?>" value="<?php echo $key ?>" /><span></span><?php echo $key ?></label>
                      </div>
                <?php }
                  }
                } ?>
              </div>
            <?php } ?>
            <div class="btn-wrap mar text-center"><button type="submit" class="com-btn"><?php if (isset($generator)) echo "Edit generator";
                                                                                        else echo "Create generator"; ?></button></div>
        </form>
      </div>
    </div>
  </div>
</div>
<script src="assets/js/jquery.validate.js"></script>
<script type="text/javascript">
  (function() {
    // trim polyfill : https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/Trim
    if (!String.prototype.trim) {
      (function() {
        // Make sure we trim BOM and NBSP
        var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
        String.prototype.trim = function() {
          return this.replace(rtrim, '');
        };
      })();
    }

    [].slice.call(document.querySelectorAll('input.input-field')).forEach(function(inputEl) {
      // in case the input is already filled..
      if (inputEl.value.trim() !== '') {
        classie.add(inputEl.parentNode, 'input-filled');
      }

      // events:
      inputEl.addEventListener('focus', onInputFocus);
      inputEl.addEventListener('blur', onInputBlur);
    });

    function onInputFocus(ev) {
      classie.add(ev.target.parentNode, 'input-filled');
    }

    function onInputBlur(ev) {
      if (ev.target.value.trim() === '') {
        classie.remove(ev.target.parentNode, 'input-filled');
      }
    }
  })();
  $("#generator_info").validate({
    rules: {
      generator: {
        required: true,
      },
    },
    errorPlacement: function(error, element) {
      if (element.attr("name") == "privacy_policy") {
        error.insertAfter($(".privacy_policy"));
      } else {
        element.closest(".input").after(error);
      }
    },
    submitHandler: function(form) {
      form.submit();
    }
  });
</script>