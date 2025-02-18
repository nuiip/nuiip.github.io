<?php

/** @var yii\web\View $this */
/** @var string $name */
/** @var string $message */
/** @var Exception$exception */

use Yii;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;
use yii\helpers\Url;
use app\assets\AppAsset;
use app\widgets\Alert;
use app\components\MyHelper;

$module = Yii::$app->controller->module->id;
$ctrl  = Yii::$app->controller->id;
AppAsset::register($this);

$this->title = $name;

$text = urlencode($message);
$origin = "en";
$targets = ["id", "fr", "es", "de", "it", "ru", "ja", "ar"]; // French, Spanish, German, Italian, Japanese
$transRess = MyHelper::mmTranslates($text, $origin, $targets);

$this->registerCssFile('@web/templates/nuiip/css/base.css?ver=4');
$this->registerCssFile('@web/templates/nuiip/css/magnific.css?ver=4');
$this->registerCssFile('@web/templates/nuiip/css/animated-headlines.css?ver=4');
$this->registerCssFile('@web/templates/nuiip/css/style.css?ver=4');
$this->registerCssFile('https://fonts.googleapis.com');
$this->registerCssFile('https://fonts.gstatic.com');
$this->registerCssFile('https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

?>
<!-- /CV Content Side -->
<div class="cv__content">

    <section id="hero-header" class="section_header">
        <div class="content">
            <div class="left_hero_header">
                <div class="circle">
                    <div class="bg_img" data-bg-img="<?=Url::to('@web/templates/nuiip/img/avatar/fp-1.png');?>"></div>
                    <?= Html::img('@web/templates/nuiip/img/thumb/square.jpg') ?>
                    <div class="circle_holder_blue"><span></span></div>
                    <div class="circle_holder_orange"><span></span></div>
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
            <div class="right_hero_header">
                <div class="my_self">
                    <h4><?= Html::encode($this->title) ?></h4>
                    <h2>
                        <!-- It is animation title. You can change animation variation by changing extra class to one of next classes: zoom, rotate-1, letters type, letters rotate-2, loading-bar, slide, clip, letters rotate-3, letters scale, push. cd-headline class can not be removed.  -->
                        <span class="cd-headline clip">
                            <span class="cd-words-wrapper">
                                <b class="is-visible"><?= nl2br(Html::encode($message)) ?></b>
                                <b><?= ucwords($transRess['id']); ?></b>
                                <b><?= ucwords($transRess['fr']); ?></b>
                                <b><?= ucwords($transRess['es']); ?></b>
                                <b><?= ucwords($transRess['de']); ?></b>
                                <b><?= ucwords($transRess['it']); ?></b>
                                <b><?= ucwords($transRess['ru']); ?></b>
                                <b><?= ucwords($transRess['ja']); ?></b>
                                <b><?= ucwords($transRess['ar']); ?></b>
                            </span>
                        </span>
                    </h2>
                    <p>This error occurred while the Web server was processing your request.</p>
                    <p>Please contact us if you think this is a server error. Thank you.</p>
                    <?= Html::a('Go Back', '#', ['class' => 'btn btn-default', 'onclick' => 'window.history.back();']) ?>
                </div>
            </div>
        </div>
    </section>

</div>
<!-- /CV Content Side -->

<?php
    $this->registerJsFile(
        '@web/templates/nuiip/js/jquery.js?ver=4',
        ['depends' => [\yii\web\JqueryAsset::class]]
    );
    $this->registerJsFile(
        '@web/templates/nuiip/js/isotope.js',
        ['depends' => [\yii\web\JqueryAsset::class]]
    );
    $this->registerJsFile(
        '@web/templates/nuiip/js/magnific.js',
        ['depends' => [\yii\web\JqueryAsset::class]]
    );
    $this->registerJsFile(
        '@web/templates/nuiip/js/animated-headlines.js?ver=4',
        ['depends' => [\yii\web\JqueryAsset::class]]
    );
    $this->registerJsFile(
        '@web/templates/nuiip/js/waypoints.js?ver=4',
        ['depends' => [\yii\web\JqueryAsset::class]]
    );
    $this->registerJsFile(
        '@web/templates/nuiip/js/init.js?ver=4',
        ['depends' => [\yii\web\JqueryAsset::class]]
    );
    $this->registerJsFile(
        '@web/templates/nuiip/js/init.js?ver=4',
        ['depends' => [\yii\web\JqueryAsset::class]]
    );
?>