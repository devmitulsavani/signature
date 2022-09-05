<style>
    .sign-temp{padding-top: 50px;padding-bottom: 50px;}	
	.portfolio-view{}
	.grid {margin:0 -10px;}
	.grid:after {content: '';display: block;clear: both;}
	.grid-sizer, .grid-item {width: 50%;padding:0 10px 30px;}
	.grid-item {float: left;}
	.grid-item img {display: block;max-width: 100%;margin:0 auto;}
	.port-block{background: #fff;border-radius: 10px;padding: 15px;-moz-box-shadow: rgba(0,0,0,0.15) 0 5px 15px;-webkit-box-shadow: rgba(0,0,0,0.15) 0 5px 15px;box-shadow: rgba(0,0,0,0.15) 0 5px 15px;position: relative;height: 100%;}
	@media(max-width:990px){
	.grid-sizer, .grid-item {width: 50%;}
	}
	@media(max-width:767px){
	.grid-sizer, .grid-item {width: 100%;}
	}
</style>

<div class="container sign-temp">     
    <div class="portfolio-view">
        <div class="grid">
            <div class="grid-sizer"></div>
            <div class="grid-item">
                <div class="port-block"><img src="http://signaturia.com/assets/images/1.png" alt=""></div>
            </div>
            <div class="grid-item">
                <div class="port-block"><img src="http://signaturia.com/assets/images/2.png" alt=""></div>
            </div>
            <div class="grid-item">
                <div class="port-block"><img src="http://signaturia.com/assets/images/3.png" alt=""></div>
            </div>
            <div class="grid-item">
                <div class="port-block"><img src="http://signaturia.com/assets/images/4.png" alt=""></div>
            </div>
            <div class="grid-item">
                <div class="port-block"><img src="http://signaturia.com/assets/images/5.png" alt=""></div>
            </div>
            <div class="grid-item">
                <div class="port-block"><img src="http://signaturia.com/assets/images/6.png" alt=""></div>
            </div>
            <div class="grid-item">
                <div class="port-block"><img src="http://signaturia.com/assets/images/7.png" alt=""></div>
            </div>
            <div class="grid-item">
                <div class="port-block"><img src="http://signaturia.com/assets/images/8.png" alt=""></div>
            </div>
        </div>
    </div>
</div>

<script src="http://signaturia.com/assets/js/masonry.pkgd.js"></script> 
<script src="http://signaturia.com/assets/js/imagesloaded.pkgd.js"></script> 
<script type="text/javascript">
var $grid = $('.grid').imagesLoaded(function () {
	$grid.masonry({
		itemSelector: '.grid-item',
		percentPosition: true,
		columnWidth: '.grid-sizer'
	});
});
</script>