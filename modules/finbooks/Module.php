<?php

namespace app\modules\finbooks;

/**
 * finbooks module definition class
 */
class Module extends \yii\base\Module
{
    /**
     * {@inheritdoc}
     */
    public $controllerNamespace = 'app\modules\finbooks\controllers';
    public $defaultRoute = 'dashboard'; // Custom default controller

    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();
        // custom initialization code goes here
    }
}
