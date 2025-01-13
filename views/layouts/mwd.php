<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

?>
<!-- preloader Start -->
<div id="preloader">
	<div id="status">
        <?= Html::img('@web/templates/mwd/weddingeventhtml-1/images/header/preloader.gif', ['id' => 'preloader_image', 'alt' => 'loader', 'width' => '200px']) ?>
	</div>
</div>
<!-- Header Wrapper Start -->
<div section-scroll='0' class="wd_scroll_wrap">
    <div class="wd_slider_wrapper ">
        <div id="snow"></div>
        <div class="wd_header_wrapper wd_single_index_menu">
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="wd_logo">
                <?= Html::img('@web/templates/mwd/weddingeventhtml-1/images/header/logo.png', ['alt' => 'Logo', 'title' => 'Logo', 'class' => 'img-responsive']) ?>
                    <button class="wd_menu_btn"><i class="fa fa-bars" aria-hidden="true"></i></button>
                </div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                <div class="wd_mainmenu_wrapper">
                    <div class="wd_main_menu_wrapper">
                        <div class="wd_main_menu wd_single_index_menu">
                            <ul>
                                <li><a href="0">Home</a></li>
                                <li><a href="1">Prolog</a></li>
                                <li><a href="2">Prewed</a></li>
                                <li><a href="3">Events</a></li>
                                <li><a href="4">Rsvp</a></li>
                                <li><a href="5">Family</a></li>
                                <li><a href="6">Gallery</a></li>
                                <li><a href="7">Blog</a></li>
                                <li><a href="8">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="wd_slider_textinfo">
            <?= Html::img('@web/templates/mwd/weddingeventhtml-1/images/header/name.png', ['alt' => 'Slider Image', 'class' => 'img-responsive']) ?>
            <h3>20 may 2018</h3>
            <h1>Save The Date</h1>
            <div class="clearfix"></div>
            <?= Html::img('@web/templates/mwd/weddingeventhtml-1/images/content/heading.png', ['alt' => 'Heading', 'class' => 'img-responsive']) ?>
        </div>
        <div class="wd_single_index_menu_down">
        <ul>
            <li><a href="1" id="headbottom"><i class="fa fa-long-arrow-down" aria-hidden="true"></i></a></li>
        </ul>
        </div>
    </div>
</div>
<!-- Header Wrapper End -->
<?= $content; ?>
<!-- Footer Wrapper Start -->
<div class="wd_footer_wrapper wd_toppadder90 wd_bottompadder100">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
				<div class="wd_footer_infobox">
					<div class="wd_footicon">
						<i class="fa fa-map-marker" aria-hidden="true"></i>
					</div>
					<h2>Home</h2>
					<p>110, B Kalani Bagh, Dewas M.P. INDIA #455001</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
				<div class="wd_footer_infobox">
					<div class="wd_footicon">
						<i class="fa fa-phone" aria-hidden="true"></i>
					</div>
					<h2>Phone</h2>
					<p>+ 91 12345 67890 <br> +91 12345 78945</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
				<div class="wd_footer_infobox">
					<div class="wd_footicon">
						<i class="fa fa-envelope" aria-hidden="true"></i>
					</div>
					<h2>Email Us</h2>
					<p>wedding@example.com <br>event@example.com</p>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="wd_footer_bottom_wrapper wd_toppadder50 wd_bottompadder50">
	<a href="javascript:void(0);" id="scroll" title="Scroll to Top" style="display: none;"><i class="fa fa-long-arrow-up" aria-hidden="true"></i></a>
	<div class="col-md-12">
		<div class="wd_footer_section">
            <?= Html::img('@web/templates/mwd/weddingeventhtml-1/images/header/logo.png', ['alt' => 'Logo', 'class' => 'img-responsive']) ?>
			<p>@ Copyright 2017 All Rights Reserved. By Webstrot</p>
		</div>
	</div>
</div>

<?php
$this->registerJs(
    "
        $(window).on('load', function() {
            var wow = new WOW({
                boxClass: 'wow',
                animateClass: 'animated',
                offset: 0,
                mobile: true,
                live: true
            });
            wow.init();
        });
    ",
    \yii\web\View::POS_READY,
    'wow-init'
);
?>

<script>

</script>
