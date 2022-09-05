<div class="box-wrap">
    <div class="box-title">
        <h3>Download and Install Signature</h3>
        <div class="box-act">
            <a href="<?php echo ($signature['is_custom'] == 1) ? site_url('user/dashboard/download_custom/' . $custom_signature['id']) : site_url('user/dashboard/download/' . $signature['signature_id']) ?>" class="box-btn">Download</a>
        </div>
    </div>
    <div class="box-body">
        <div class="down-tab">
            <ul class="nav nav-tabs" role="tablist">
                <?php
                if (!empty($platforms)) {
                    $i = 0;
                    foreach ($platforms as $key => $value) {
                ?>
                        <li role="presentation" class="<?php echo ($i == 0) ? 'active' : ''; ?>">
                            <a href="#<?php echo $key ?>" aria-controls="<?php echo $key ?>" role="tab" data-toggle="tab">
                                <img src="<?php echo PLATFORM_LOGOS . $value['logo'] ?>" alt="" /><?php echo $value['platform'] ?>
                            </a>
                        </li>
                <?php
                        $i++;
                    }
                }
                ?>
            </ul>
            <div class="tab-content">
                <?php
                if (!empty($steps)) {
                    $i = 0;
                    foreach ($steps as $key_1 => $value_1) {
                ?>
                        <div role="tabpanel" class="tab-pane <?php echo ($i == 0) ? 'active' : ''; ?>" id="<?php echo $key_1; ?>">
                            <div class="step-wrap">
                                <!-- <div class="prev-image"><?php $this->load->view('signature_preview') ?></div> -->
                                <div class="prev-image">
                                    <?php
                                    if ($signature['is_custom'] == 0) {
                                        $this->load->view('signature_preview');
                                    } else {
                                        echo file_get_contents(base_url() . CUSTOM_SIGNATURE_IMAGES . "/" . $this->session->userdata('htmlsig_user')['id'] . "/" . $custom_signature['id'] . ".html");
                                    }

                                    ?></div>
                                <!--<div class="prev-image"><img class="" src="<?php echo base_url() . SIGNATURE_IMAGES . 'signature-' . $signature['signature_id'] . '.png' ?>" onerror="this.src=\'assets/images/sign.png\';" alt="Video img"></div>-->
                                <?php
                                $j = 1;
                                foreach ($value_1 as $key => $value) {
                                ?>
                                    <div class="step-block" data-hover="<?php echo $j; ?>">
                                        <h3><?php echo $value['title']; ?></h3>
                                        <p><?php echo $value['step']; ?></p>
                                        <div class="step-img">
                                            <?php
                                            if ($value['file'] != '') {
                                                $type = explode('.', $value['file']);
                                                if ($type[1] == 'mp4') {
                                            ?>
                                                    <video width="400" style="max-width: 400px;" controls>
                                                        <source src="<?php echo PLATFORM_LOGOS . $value['file'] ?>" type="video/mp4">
                                                        <source src="mov_bbb.ogg" type="video/ogg">
                                                        Your browser does not support HTML5 video.
                                                    </video>
                                                <?php
                                                } else {
                                                ?>
                                                    <img src="<?php echo PLATFORM_LOGOS . $value['file'] ?>" alt="">
                                                <?php
                                                }
                                            }
                                            if ($value['link'] != '') {
                                                ?>
                                                <iframe width="400" height="300" style="max-width: 400px;" src="https://<?php echo $value['link']; ?>">
                                                </iframe>
                                            <?php
                                            }
                                            ?>
                                            <!-- <img src="http://help.sigstr.com/wp-content/uploads/2016/08/inbox.png" alt="" /> -->
                                        </div>
                                    </div>
                                <?php
                                    $j++;
                                }
                                ?>
                            </div>
                        </div>
                <?php
                        $i++;
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>