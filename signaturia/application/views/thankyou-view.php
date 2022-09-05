<style>
    .thanks-wrap{text-align: center;min-height:calc(100vh - 164px);}
    .thanks-wrap .main-title .title-line{margin: 10px auto 30px;}
    .thanks-wrap h3{margin: 0 0 30px;}
    .thanks-wrap .thnks-icn{margin: 0 0 30px;}
    .thanks-wrap .thnk-desc{max-width: 600px;margin: 0 auto 30px;}
    .thanks-wrap .thnk-desc h4{font-size: 20px;font-weight: 400;line-height: 30px;}
</style>
<div class="thanks-wrap flex-box pad-wrap">
    <article class="container">
        <img src="assets/images/thumb.png" alt="" class="thnks-icn" />
        <div class="main-title"><h1>Wait - You are not done!</h1><span class="sep"><img src="assets/images/title-dote.png" alt="" /></span>
        </div>
        <div class="thnk-desc">
            <h4>You have to confirm your email<br><br>Be sure to check your spam folder for your confirmation email and mark as a “safe sender”.</h4>
        </div>
        <a class="com-btn" href="<?php echo site_url() ?>">Back to home</a>
        <a class="com-btn" href="<?php echo site_url('resend_verification?key=' . $user_id) ?>">Resend Email</a>
    </article>
</div>
