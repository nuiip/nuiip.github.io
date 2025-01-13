<?php
/**
 * @link https://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license https://www.yiiframework.com/license/
 */

namespace app\assets;

use Yii;
use yii\web\AssetBundle;
use app\components\MyHelper;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $css;
    public $scss;
    public $js;
    public $depends;

    public function __construct()
    {
        $this->css = MyHelper::getCss();
        $this->js = MyHelper::getJs();
        $this->depends = [
            'yii\web\YiiAsset',
            // 'yii\bootstrap5\BootstrapAsset'
        ];
        parent::__construct();
    }
}
