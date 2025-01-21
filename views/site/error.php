<?php

/** @var yii\web\View $this */
/** @var string $name */
/** @var string $message */
/** @var Exception$exception */

use yii\helpers\Html;
use \Statickidz\GoogleTranslate;

$this->title = $name;
$trans = new GoogleTranslate();
?>
<!-- /CV Content Side -->
<div class="cv__content">
    
    <section id="hero-header" class="section_header">
        <div class="content">
            <div class="left_hero_header">
                <div class="circle">
                    <div class="bg_img" data-bg-img="templates/nuiip/img/avatar/fp-1.png"></div>
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
                                <b><?= $trans->translate('en', 'id', $message); ?></b>
                                <b><?= $trans->translate('en', 'it', $message); ?></b>
                                <b><?= $trans->translate('en', 'fr', $message); ?></b>
                                <b><?= $trans->translate('en', 'es', $message); ?></b>
                                <b><?= $trans->translate('en', 'ru', $message); ?></b>
                                <b><?= $trans->translate('en', 'ja', $message); ?></b>
                                <b><?= $trans->translate('en', 'ar', $message); ?></b>
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
