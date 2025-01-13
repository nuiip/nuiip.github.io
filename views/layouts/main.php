<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

$ctrl  = Yii::$app->controller->id;
AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<div class="deebo_fn_main">
			
	<?php 
		if ($ctrl == 'mwd') :
			echo $this->render($ctrl, [
				'content' => $content
			]);
		else :
	?>
	<!-- Light/Dark Switcher -->
	<div class="deebo_fn_switcher_wrap">
		<label>
			<span class="light">Light</span>
				<span class="checkbox_wrap">
					<input type="checkbox" id="skin_switcher" checked>
					<span class="slider round"></span>
				</span>
			<span class="dark">Dark</span>
		</label>
	</div>
	<!-- /Light/Dark Switcher -->
	
	
	<!-- Overlay -->
	<div class="right_bar_overlay"></div>
	<!--/ Overlay -->

	<!-- MODALBOX -->
	<div class="deebo_fn_modalbox">
		<a class="extra_closer" href="#"></a>
		<div class="box_inner">
			<a class="closer" href="#"><span></span></a>
			<div class="modal_content">

				<div class="modal_in">
					<!-- Content comes from JS -->
				</div>

				<div class="fn__nav" data-from="" data-index="">
					<a href="#" class="prev">
						<span class="text">Prev</span>
						<span class="arrow_wrapper"><span class="arrow"></span></span>
					</a>
					<a href="#" class="next">
						<span class="text">Next</span>
						<span class="arrow_wrapper"><span class="arrow"></span></span>
					</a>
				</div>
			</div>
		</div>
	</div>
	<!-- /MODALBOX --> 

	<!-- Overlay -->
	<div class="right_bar_overlay"></div>
	<!--/ Overlay -->

	<!-- MODALBOX -->
	<div class="deebo_fn_modalbox">
		<a class="extra_closer" href="#"></a>
		<div class="box_inner">
			<a class="closer" href="#"><span></span></a>
			<div class="modal_content">

				<div class="modal_in">
					<!-- Content comes from JS -->
				</div>

				<div class="fn__nav" data-from="" data-index="">
					<a href="#" class="prev">
						<span class="text">Prev</span>
						<span class="arrow_wrapper"><span class="arrow"></span></span>
					</a>
					<a href="#" class="next">
						<span class="text">Next</span>
						<span class="arrow_wrapper"><span class="arrow"></span></span>
					</a>
				</div>
			</div>
		</div>
	</div>
	<!-- /MODALBOX --> 

	<!-- Modal CV Card -->
	<div class="deebo_fn_cv">

		<!-- CV Inner -->
		<div class="deebo_fn__cv">

			<!-- CV Background -->
			<div class="cv__bg"></div>
			<div class="cv__bg2"></div>
			<!-- /CV Background -->

			<!-- CV Left Side -->
			<div class="cv__header">
				<div class="in">
					<div class="avatar">
					<?= Html::img('@web/templates/nuiip/img/avatar/fp-1.png') ?>
					</div>
					<h3><span>Iip</span> Priatna</h3>
					<p class="quote">I'm a passionate front-end web developer who excels at creating pixel-perfect web interfaces. I’m available for a freelance job. <a href="#contact" class="anchor">Hire me</a></p>
					<ul class="contact_info">
						<li>
							<span class="icon">
								<?= Html::img('@web/templates/nuiip/svg/location.svg', ['class' => 'fn__svg']) ?>
							</span>
							<p>Majalengka, West Java</p>
						</li>
						<li>
							<span class="icon">
								<?= Html::img('@web/templates/nuiip/svg/call.svg', ['class' => 'fn__svg']) ?>
							</span>
							<p>(+62) 838 2677 7777</p>
						</li>
						<li>
							<span class="icon">
								<?= Html::img('@web/templates/nuiip/svg/message.svg', ['class' => 'fn__svg']) ?>
							</span>
							<p>ipriatna94@gmail.com</p>
						</li>
					</ul>
					<ul class="social">
						<li>
							<a href="#" target="_blank" title="twitter.com">
							<?= Html::img('@web/templates/nuiip/svg/twitter.svg', ['class' => 'fn__svg']) ?>
							</a>
						</li>
						<li>
							<a href="#" target="_blank" title="facebook.com">
								<?= Html::img('@web/templates/nuiip/svg/facebook-logo.svg', ['class' => 'fn__svg']) ?>
							</a>
						</li>
						<li>
							<a href="#" target="_blank" title="instagram.com">
							<?= Html::img('@web/templates/nuiip/svg/instagram.svg', ['class' => 'fn__svg']) ?>
							</a>
						</li>
						<li>
							<a href="#" target="_blank" title="printerest.com">
								<?= Html::img('@web/templates/nuiip/svg/pinterest.svg', ['class' => 'fn__svg']) ?>
							</a>
						</li>
						<li>
							<a href="#" target="_blank" title="youtube.com">
								<?= Html::img('@web/templates/nuiip/svg/youtube.svg', ['class' => 'fn__svg']) ?>
							</a>
						</li>
					</ul>
				</div>
			</div>
			<!-- /CV Left Side -->

            <?php if (!empty($this->params['breadcrumbs'])): ?>
            <?= Breadcrumbs::widget(['links' => $this->params['breadcrumbs']]) ?>
            <?php endif ?>
            <?= Alert::widget() ?>
            <?= $content ?>

		</div>
		<!-- CV Inner -->
	</div>
	<!-- /Modal CV Card -->
	 <?php endif; ?>

</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
