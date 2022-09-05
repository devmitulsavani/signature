<div class="container-fluid">
    <div class="row">
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
        } else {
            echo validation_errors();
        }
        ?>
        <div class="col-md-7">
            <div class="white-box">
                <div class="box-title">
                    <h2 class="title-text"><?php
                        if (isset($generator))
                            echo "Edit generator";
                        else
                            echo "Create generator";
                        ?> 
                    </h2>
                </div>
                <div class="box-body">
                    <?php
                    if ($this->session->flashdata('success_profile')) {
                        ?>
                        <div class="alert bg-success alert-styled-left bootstrap_alert">
                            <a class="close" data-dismiss="alert">×</a>
                            <strong><?php echo $this->session->flashdata('success_profile') ?></strong>
                        </div>
                        <?php
                    }
                    ?>
                    <form class="form-horizontal" id="generator_info" method="post" action="" enctype="multipart/form-data">
                    	<div class="input">
                            <input class="input-field" type="text" id="generator" name="generator" value="<?php if (isset($generator)) echo $generator['name'] ?>"/>
                            <label class="input-label" for="firstname">Generator Name</label>
                        </div>
						<?php
                        if (isset($signature_main)) {
                            ?>
                            <div class="box-title">
                                <h2 class="title-text">Allow Fields for edit (main tab)</h2>
                            </div>
                            <?php
                            foreach ($signature_main as $key => $value) {
                                if ($signature_main[$key] != '') {
                                    ?>
                                    <div class="checkbox">
                                      <label for=""><input type="checkbox" id="<?php echo $key ?>" name="main_<?php echo $key ?>" value="<?php echo $key ?>"/><span></span><?php echo $key ?></label>
                                    </div>
                                    <?php
                                }
                            }
                        }
                        if (isset($signature_social)) {
                            ?>
                            <div class="box-title">
                                <h2 class="title-text">Allow Fields for edit (Social tab)</h2>
                            </div>
                            <br>
                            <?php
                            foreach ($signature_social as $key => $value) {
                                ?>
                                <div class="checkbox">
                                  <label for=""><input type="checkbox" id="<?php echo $value['name'] ?>" name="Social_<?php echo $value['name'] ?>" value="<?php echo $value['name'] ?>"/><span></span><?php echo $value['name'] ?></label>
                                </div>
                                <?php
                            }
                        }
                        if (isset($signature_declaimer)) {
                            ?>
                            <div class="box-title">
                                <h2 class="title-text">Allow Fields for edit (Declaimer tab)</h2>
                            </div>
                            <br>
                            <div class="checkbox">
                              <label for=""><input type="checkbox" id="Declaimer" name="Declaimer_Declaimer" value="Declaimer"/><span></span>Declaimer</label>
                            </div>
                            <?php
                        }
                        if (isset($signature_banner)) {
                            ?>
                            <div class="box-title">
                                <h2 class="title-text">Allow Fields for edit (Banner tab)</h2>
                            </div>
                            <br>
                            <div class="checkbox">
                              <label for=""><input type="checkbox" id="banner" name="Banner_banner" value="banner"/><span></span>Banner</label>
                            </div>
                            <?php
                        }
                        ?>
                        <div class="box-title">
                            <h2 class="title-text">Allow Fields for edit (Style tab)</h2>
                        </div>
                        <br>
                        <div class="checkbox">
                          <label for=""><input type="checkbox" id="styles" name="Style_style" value=""/><span></span>Style</label>
                        </div>
                        <?php
                        if (isset($signature_apps)) {
                            ?>
                            <div class="box-title">
                                <h2 class="title-text">Allow Fields for edit (Apps tab)</h2>
                            </div>
                            <?php
                            foreach ($signature_apps as $key => $value) {
                                if ($signature_apps[$key] != '') {
                                    ?>
                                    <div class="checkbox">
                                      <label for=""><input type="checkbox" id="<?php echo $key ?>" name="Apps_<?php echo $key ?>" value="<?php echo $key ?>"/><span></span><?php echo $key ?></label>
                                    </div>
                                    <?php
                                }
                            }
                        }
                        ?>
                        <div class="btn-wrap mar text-center"><button type="submit" class="com-btn">Create generator</button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="assets/js/jquery.validate.js"></script>
<script type="text/javascript">
    $("#generator_info").validate({
        rules: {
            generator: {
                required: true,
            },
        },
        errorPlacement: function (error, element) {
            if (element.attr("name") == "privacy_policy") {
                error.insertAfter($(".privacy_policy"));
            } else {
                element.closest(".input").after(error);
            }
        },
        submitHandler: function (form) {
            form.submit();
        }
    });
</script>