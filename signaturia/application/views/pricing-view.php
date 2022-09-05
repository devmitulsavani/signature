<style>
    .plan-block {
        position: relative;
    }

    .offer-tag {
        position: absolute;
        top: 5%;
        left: 22%;
        background: url("assets/images/offer-tag.png") no-repeat;
        background-size: 100%;
        width: 120px;
        height: 80px;
        padding: 11px 7px 11px 45px;
    }

    .offer-tag .off {
        color: #fff;
        font-size: 12px;
        text-align: left;
    }

    .offer-tag .off span {
        text-transform: uppercase;
        font-size: 10px;
        display: inline-block;
        margin-left: 3px;
    }
</style>
<!-- old ui -->

<!-- <div class="pad-wrap min">
    <div class="main-title white-t">
        <h1>Find a plan that works for you.</h1>
        <p class="title-line">All plans include customer support that you can access from your dashboard or our help pages.</p>
    </div>
    <div class="plan-wrap">
        <div class="container">
            <div class="row">
                <?php foreach ($packages as $key => $package) { ?>
                    <div class="col-sm-4">
                        <div class="plan-block">
                            <?php $monthly_price = $yearly_price = 0;
                            if (($package['monthly_discount_price'] != 0 && $package['monthly_discount_price'] != '') || ($package['yearly_discount_price'] != 0 && $package['yearly_discount_price'] != '')) { ?>
                                <div class="offer-tag">
                                    <?php if ($package['monthly_discount_price'] != 0 && $package['monthly_discount_price'] != '') {
                                        $monthly_price = $package['monthly_price'] - ($package['monthly_price'] * $package['monthly_discount_price'] / 100); ?>
                                        <div class="mnt off"><?php echo $package['monthly_discount_price']; ?>%<span>/month</span></div>
                                    <?php  }
                                    if ($package['yearly_discount_price'] != 0 && $package['yearly_discount_price'] != '') {
                                        $yearly_price = $package['yearly_price'] - ($package['yearly_price'] * $package['yearly_discount_price'] / 100); ?>
                                        <div class="yr off"><?php echo $package['yearly_discount_price']; ?>%<span>/year</span></div>
                                    <?php } ?>
                                </div>
                            <?php } ?>
                            <h3 class="p-title"><?php echo $package['title'] ?></h3>
                            <div class="p-price">
                                <?php
                                $monthly_p = ($monthly_price != 0) ? $monthly_price : $package['monthly_price'];
                                $yearly_p = ($yearly_price != 0) ? $yearly_price : $package['yearly_price'];
                                ?>
                                <h3>
                                    <span class="dlr">$</span>
                                    <?php echo $monthly_p ?>
                                    <span class="time"> /month</span>
                                </h3>
                                <span class="or">(or $<?php echo $yearly_p ?>/year)</span>
                            </div>
                            <div class="p-desc">
                                <?php echo $package['description'] ?>
                            </div>

                            <div class="p-btn"><a href="<?php echo site_url('sign-up?plan=' . $package['title']); ?>" class="com-btn">Sing up</a></div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <div class="container qua-wrap">
        <div class="main-title">
            <h1>A few frequently asked questions</h1><span class="sep"><img src="images/title-dote.png" alt=""></span>
        </div>
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <div class="qua-box">
                    <h2 class="qua-title">What is a generator ?</h2>
                    <p class="qua-desc">Generators allow you to quickly get your team to create their signatures in as little steps as possible while respecting the guidelines you set while creating your generator. <a href="#">Learn more</a></p>
                </div>
                <div class="qua-box">
                    <h2 class="qua-title">Can I use htmlsig for free ?</h2>
                    <p class="qua-desc">Yes of course, we allow you to create a signature for free but after 30 days you lose the ability to make changes to that signature and you are limited to our basic theme.</p>
                </div>
                <div class="qua-box">
                    <h2 class="qua-title">Can I change or cancel my subscription ?</h2>
                    <p class="qua-desc">Once you create your account you are able to upgrade or cancel your subscription from your account page. Upon canceling your account you will have continued access to your account for the remainder of that period.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="main-title">
            <h1>Join with us to get updates about all <br>the latest news about signaturia</h1>
        </div>
        <div class="news-block">
            <div class="newslatter">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Enter email address">
                    <span class="input-group-btn">
                        <button class="com-btn" type="button">Subscribe</button>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div> -->


<!-- new ui -->

<section class="mb-32 md:mb-56 mt-6 md:mt-8">
    <div class="container max-w-6xl">
        <div class="max-w-[550px] mx-auto text-center">
            <h1 class="text-3xl mb-4 md:text-[44px] md:leading-[60px] font-bold">Pricing To Suit <br>
                All Sizes Of Business</h1>
            <p class="text-sm font-medium">Lorem Ipsum Is Simply Dummy Text Of The Printing And Typesetting Industry.</p>
        </div>
        <div class="Pricing-silde mt-10 ">
            <?php foreach ($packages as $key => $package) { ?>
                <div class="px-4 pb-8">
                    <div class="bg-white px-5 xl:px-8 py-12 rounded-[10px] h-full shadow-md text-center relative">
                        <div class="relative z-10">
                            <div class="min-h-[125px] flex items-end">
                                <img class="mx-auto" src="assets/image/<?php echo $package['image'] ?>" alt="">
                            </div>
                            <?php $monthly_price = $yearly_price = 0;
                            if (($package['monthly_discount_price'] != 0 && $package['monthly_discount_price'] != '') || ($package['yearly_discount_price'] != 0 && $package['yearly_discount_price'] != '')) { ?>
                                <div class="offer-tag">
                                    <?php if ($package['monthly_discount_price'] != 0 && $package['monthly_discount_price'] != '') {
                                        $monthly_price = $package['monthly_price'] - ($package['monthly_price'] * $package['monthly_discount_price'] / 100); ?>
                                        <div class="mnt off"><?php echo $package['monthly_discount_price']; ?>%<span>/month</span></div>
                                    <?php  }
                                    if ($package['yearly_discount_price'] != 0 && $package['yearly_discount_price'] != '') {
                                        $yearly_price = $package['yearly_price'] - ($package['yearly_price'] * $package['yearly_discount_price'] / 100); ?>
                                        <div class="yr off"><?php echo $package['yearly_discount_price']; ?>%<span>/year</span></div>
                                    <?php } ?>
                                </div>
                            <?php } ?>
                            <h6 class="text-xl my-6 font-medium"><?php echo $package['title'] ?></h6>
                            <?php
                            $monthly_p = ($monthly_price != 0) ? $monthly_price : $package['monthly_price'];
                            $yearly_p = ($yearly_price != 0) ? $yearly_price : $package['yearly_price'];
                            ?>
                            <h3 class="flex items-end justify-center font-semibold">
                                <span class="self-start inline-block font-normal text-xl mr-1 -mt-2">$</span>
                                <span class="inline-block text-[40px] mr-1 leading-9"><?php echo $monthly_p ?></span>/Month
                            </h3>
                            <span class="opacity-60 font-semibold block my-4">(or $<?php echo $yearly_p ?>/year)</span>
                            <!-- <p class="max-w-[256px] mx-auto text-sm font-medium w-full leading-6 min-h-[150px] flex items-center"><?php echo $package['description'] ?></p> -->
                            <div class="max-w-[256px] mx-auto text-sm font-medium w-full leading-6 min-h-[150px] flex items-center justify-center">
                                <?php echo $package['description'] ?>
                            </div>
                            <a href="<?php echo site_url('sign-up?plan=' . $package['title']); ?>" class="inline-block mt-8 bg-secondary py-3 px-6 rounded text-white text-base shadow-md duration-300 border-2 border-secondary hover:bg-white hover:text-secondary">SIGN UP</a>
                        </div>
                        <img class="absolute bottom-0 w-full left-0 right-0" src="assets/image/theme/<?php echo $package['image'] ?>" alt="">
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<section class="mb-32 md:mb-56 relative">
    <img class="absolute -z-10 -top-64 left-0 opacity-40" src="assets/image/pricingfooter.png" alt="">
    <div class="container max-w-6xl">
        <h2 class="max-w-[390px] mx-auto text-center text-3xl mb-4 md:text-[44px] md:leading-[60px] font-bold">A Few Frequently Asked Questions</h2>
        <div class="max-w-2xl mx-auto product-faq mt-10 space-y-5">
            <div class="bg-white p-7 border border-primary shadow-md Accordion_item">
                <div class="accordion title_tab js-accordion-title cursor-pointer flex items-center justify-between">
                    <h6 class="mb-0 font-semibold md:text-lg text-base">What Is A Generator ?</h6>
                    <img class="faq-close hidden" src="assets/image/faq-close.svg" alt="">
                    <img class="faq-open" src="assets/image/faq-open.svg" alt="">
                </div>
                <div class="accordion-content panel inner_content pt-3">
                    <p class="mb-0 text-sm">Generators Allow You To Quickly Get Your Team To Create Their Signatures In As
                        Little Steps As Possible While Respecting The Guidelines You Set While Creating
                        Your Generator.</p>
                </div>
            </div>
            <div class="bg-white p-7 border border-primary shadow-md Accordion_item">
                <div class="accordion title_tab js-accordion-title cursor-pointer flex items-center justify-between">
                    <h6 class="mb-0 font-semibold md:text-lg text-base">Can I Use Signaturia For Free ?</h6>
                    <img class="faq-close hidden" src="assets/image/faq-close.svg" alt="">
                    <img class="faq-open" src="assets/image/faq-open.svg" alt="">
                </div>
                <div class="accordion-content panel inner_content pt-3">
                    <p class="mb-0 text-sm">Yes of course, we allow you to create a signature for free but after 30 days you lose the ability to make changes to that signature and you are limited to our basic theme.</p>
                </div>
            </div>
            <div class="bg-white p-7 border border-primary shadow-md Accordion_item">
                <div class="accordion title_tab js-accordion-title cursor-pointer flex items-center justify-between">
                    <h6 class="mb-0 font-semibold md:text-lg text-base">Can I change or cancel my subscription ?</h6>
                    <img class="faq-close hidden" src="assets/image/faq-close.svg" alt="">
                    <img class="faq-open" src="assets/image/faq-open.svg" alt="">
                </div>
                <div class="accordion-content panel inner_content pt-3">
                    <p class="mb-0 text-sm">Once you create your account you are able to upgrade or cancel your subscription from your account page. Upon canceling your account you will have continued access to your account for the remainder of that period.</p>
                </div>
            </div>
        </div>
    </div>
</section>