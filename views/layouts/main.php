<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

$module = Yii::$app->controller->module->id;
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
<?php if (Yii::$app->hasModule($module)) : ?>
<body class="vertical-layout vertical-menu 2-columns  navbar-sticky" data-menu="vertical-menu" data-col="2-columns">
<?php else : ?>
<body class="d-flex flex-column h-100">
<?php endif; ?>
<?php $this->beginBody() ?>

<div class="deebo_fn_main">
			
	<?php
        if (Yii::$app->hasModule($module)) {
			echo $this->render('apex-14', [
				'content' => $content
			]);
		} else {
			if ($ctrl == 'mwd'){
				echo $this->render($ctrl, [
					'content' => $content
				]);
			} else {
				echo $this->render('nuiip', [
					'content' => $content
				]);
			}
		}
	?>

</div>

<?php
	$this->registerJs(
		"
			$( document ).ready(function() {
				var lightMode = getCookie('light-mode');
				console.log(lightMode);
				if (lightMode){
					$('body').addClass(lightMode);
					$('#skin_switcher').attr('checked', false);
				} else {
					$('body').removeClass(lightMode);
					$('#skin_switcher').attr('checked', true);
				}
			});
		",
		\yii\web\View::POS_READY,
		'my-event-handler'
	);
?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
