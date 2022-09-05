<style>
    press-release-ul:after,
    .press-release-ul li:after,
    .press-release-ul li .press-box:after{content:'';display:block;clear:both;}
    .press-release-ul{list-style:none;margin:0;padding:0;}
    .press-release-ul li{display:block;width:100%;margin:0 0 45px;}
    .press-box{position:relative;padding:0;}
    .press-img{position:relative;top:0;left:0; border-right:5px solid #60c926;float:left;margin:0 25px 0 0;width:34%;height: 220px;overflow: hidden;background: #eee;}
    .press-img img{display:block;}
    .press-img .offer-sec{position: absolute;left: 50%;top: 50%;-webkit-transform: translate(-50%,-50%);-ms-transform: translate(-50%,-50%);transform: translate(-50%,-50%);}
    .offer-sec h2{color: #60c926;font-size: 70px;margin: 0;line-height: 60px;font-weight: 900;}
    .offer-sec h2 span{color: #333;font-size: 20px;display: block;text-align: right;line-height: 20px;padding-right: 10px;font-weight: 400;}
    .press-post{padding:0 0 0;width:61%;float:left;}
    .press-post h3{margin:0 0 10px;padding:0;}
    .press-post h3 a{color:#2d2d2d;margin: 0;line-height:26px;padding:0;font-size:24px;}
    .press-post h3 a:hover{color:#60c926}
    .press-post > p { font-size: 16px; line-height:24px; margin: 15px 0; padding: 0;}
    .press-post ul{margin: 0 0 20px;}
    .press-post ul li{font-size: 16px; line-height:24px; margin: 15px 0; padding: 0;}
    .press-post ul li strong{font-weight: 600;}
    .press-post .com-btn{padding: 10px 30px;min-width: inherit;}
</style>
<div class="pad-wrap min">
      <div class="container">
        <div class="main-title"><h1>Signaturia Offers</h1><span class="sep"><img src="assets/images/title-dote.png" alt="" /></span><p class="title-line">Find out offers and subscribe with plan.</p></div>
          <ul class="press-release-ul">
            <?php foreach ($offers as $key => $package) { ?>
              <li>
                  <div class="press-box">
                    <?php
                        if($package['image'] != '') {
                    ?>
                    <div class="press-img">
                        <img src="<?php echo OFFERS_IMAGES . $package['image'] ?>" alt="<?php echo $package['title'] ?>" />
                    </div>
                    <?php } else {
                        ?>
                        <div class="press-img">
                          <div class="offer-sec"><h2><?php echo $package['coupon_price'] ?>% <span>Off</span></h2></div>
                      </div>
                        <?php
                        } 
                    ?>
                      <div class="press-post">
                            <h3><a href="<?php echo site_url('pricing'); ?>">Special offer on <?php echo $package['title'] ?></a></h3>
                            <p><?php echo $package['description'] ?></p>
                            <h4>
                                <?php echo $package['coupon_price'] ?>% off
                            </h4>
                            <ul>
                                <li><strong>Use Code:</strong> <?php echo $package['coupon_code']?></li>
                            </ul>
                          <a href="<?php echo site_url('sign-up?plan=' . $package['title'].'&coupon='.$package['coupon_code']); ?>" class="com-btn">TRY IT NOW</a>
                      </div>
                  </div>
              </li>
              <?php } ?>
          </ul>
      </div>
    </div>
<div class="pad-wrap min hidden">
    <div class="main-title"><h1>Offers </h1><span class="sep"><img src="assets/images/title-dote.png" alt="" /></span><p class="title-line">All plans include customer support that you can access from your dashboard or our help pages.</p></div>
    <div class="plan-wrap">
        <div class="bg">
            <div class="bottom"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2400 708" preserveAspectRatio="none"><path fill="#ffffff" d="M0.5,80.5l2400-80v628l-2400,80V80.5Z"></path></svg></div>
            <div class="top">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2400 708" preserveAspectRatio="none">
                    <defs>
                        <linearGradient id="gradient_color" gradientTransform="rotate(90)">
                            <stop offset="0%" stop-color="#f44c67"></stop>
                            <stop offset="100%" stop-color="#fb377f"></stop>
                        </linearGradient>
                    </defs>
                    <path fill="#ffffff" d="M0,140L2400,0V568L0,708V140Z"></path>
                </svg>
            </div>
        </div>
        <div class="container">
            <div class="plan-box">
                <div class="row">
                    <div class="sep"><img src="assets/images/sep.png" alt="" /></div>
                    <?php foreach ($offers as $key => $package) { ?>
                        <?php if ($key == 0) { ?>
                            <div class="sep"><img src="assets/images/sep.png" alt="" /></div>
                        <?php } ?>
                        <div class="plan-block">
                            <?php
                                if($package['image'] != '') {
                            ?>
                            <div class="img">
                                <img src="<?php echo OFFERS_IMAGES . $package['image'] ?>" alt="<?php echo $package['title'] ?>" />
                            </div>
                            <?php } ?>
                            Special offer on <h3 class="p-title"><?php echo $package['title'] ?></h3>
                            <div class="p-desc flex-box">
                                <?php echo $package['description'] ?>
                            </div>
                            <div class="p-price">
                                <h3>
                                    <?php echo $package['coupon_price'] ?>%
                                    <span class="time"> OFF</span> 
                                </h3>
                                Apply below Coupon on payment page
                                <h4>
                                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                                        <?php echo $package['coupon_code']?>
                                    <i class="fa fa-quote-right" aria-hidden="true"></i>
                                </h4>
                            </div>
                            <div class="p-btn">
                                <a href="<?php echo site_url('sign-up?plan=' . $package['title'].'&coupon='.$package['coupon_code']); ?>" class="com-btn">TRY IT NOW</a>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="pad-wrap gray">
    <div class="container">
        <div class="main-title"><h1>A few frequently asked questions</h1><span class="sep"><img src="assets/images/title-dote.png" alt=""></span></div>
        <div class="row">
            <div class="col-sm-4">
                <div class="qua-box">
                    <h2 class="qua-title">What is a generator ?</h2>
                    <p class="qua-desc">Generators allow you to quickly get your team to create their signatures in as little steps as possible while respecting the guidelines you set while creating your generator. <a href="#">Learn more</a></p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="qua-box">
                    <h2 class="qua-title">Can I use signaturia for free ?</h2>
                    <p class="qua-desc">Yes of course, we allow you to create a signature for free but after 30 days you lose the ability to make changes to that signature and you are limited to our basic theme.</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="qua-box">
                    <h2 class="qua-title">Can I change or cancel my subscription ?</h2>
                    <p class="qua-desc">Once you create your account you are able to upgrade or cancel your subscription from your account page. Upon canceling your account you will have continued access to your account for the remainder of that period.</p>
                </div>
            </div>
        </div>
    </div>
</div>