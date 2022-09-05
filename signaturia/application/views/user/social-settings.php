<div class="col-lg-12">
    <div class="box-wrapper social-setting">
        <div class="box-wrapper-head">
            <h2 class="title-css">Social Settings</h2>
        </div>    

        <div class="box-content">
            <div class="social-setting-wrapper">
                <ul class="social-setting-ul">
                    <?php
                    /*
                      $social_media = [
                      1 => 'facebook',
                      2 => 'twitter',
                      3 => 'pinterest',
                      4 => 'linkedin',
                      5 => 'instagram',
                      6 => 'google'
                      ]; */
                    $social_media = [
                        1 => 'twitter',
                        2 => 'facebook'
                    ];

//                    for ($i = 1; $i <= 6; $i++) {
                    for ($i = 1; $i <= 1; $i++) {
                        ?>
                        <li>
                            <div class="social-setting-ul-inr">
                                <h4><i class="fa fa-<?= $social_media[$i] ?>"></i> <?= ucfirst($social_media[$i]) ?></h4>
                                <div class="social-setting-ul-content">
                                    <?php if (isset($networks[$i])) { ?>
                                        <div class="socila-option-div">
                                            <span><img src="<?= $networks[$i]['image_url'] ?>" alt="" /></span>
                                            Connected<br/>
                                            <a href="<?php echo site_url() ?>user/social_settings/<?= (!empty($networks[$i]['id'])) ? $networks[$i]['id'] : '' ?>">Disconnect</a>
                                        </div>
                                        <?php
                                    } else {
                                        ?>
                                        <a class="btn btn-primary" href="<?= site_url('user/social_settings/connect/' . $social_media[$i]) ?>">Connect</a>
                                    <?php } ?>
                                </div>	
                            </div>                                      
                        </li>
                        <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>	
</div>
