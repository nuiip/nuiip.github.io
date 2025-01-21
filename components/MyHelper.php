<?php

namespace app\components;

use Yii;
use DateTime;
use Exception;
use yii\helpers\Url;
use yii\base\Component;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\db\Query;
use yii\db\Expression;
use yii\web\NotFoundHttpException;

class MyHelper extends Component {

    public static function getCss(){
        $module = Yii::$app->controller->module->id;
        if (Yii::$app->hasModule($module)) {
            $css = [
                'https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900%7CMontserrat:300,400,500,600,700,800,900',
                'templates/apexhtml-14/app-assets/fonts/feather/style.min.css',
                'templates/apexhtml-14/app-assets/fonts/simple-line-icons/style.css',
                'templates/apexhtml-14/app-assets/fonts/font-awesome/css/font-awesome.min.css',
                'templates/apexhtml-14/app-assets/vendors/css/perfect-scrollbar.min.css',
                'templates/apexhtml-14/app-assets/vendors/css/prism.min.css',
                'templates/apexhtml-14/app-assets/vendors/css/switchery.min.css',
                'templates/apexhtml-14/app-assets/vendors/css/chartist.min.css',
                'templates/apexhtml-14/app-assets/css/bootstrap.css',
                'templates/apexhtml-14/app-assets/css/bootstrap-extended.css',
                'templates/apexhtml-14/app-assets/css/colors.css',
                'templates/apexhtml-14/app-assets/css/components.css',
                'templates/apexhtml-14/app-assets/css/themes/layout-dark.css',
                'templates/apexhtml-14/app-assets/css/plugins/switchery.css',
                'templates/apexhtml-14/app-assets/css/pages/dashboard1.css',
                'templates/apexhtml-14/assets/css/style.css',
            ];
        } else {
            $ctrl  = Yii::$app->controller->id;
            if ($ctrl == 'mwd') {
                $css = [
                    'templates/mwd/weddingeventhtml-1/css/animate.css',
                    'templates/mwd/weddingeventhtml-1/css/bootstrap.css',
                    'templates/mwd/weddingeventhtml-1/css/font-awesome.css',
                    'templates/mwd/weddingeventhtml-1/css/owl.carousel.css',
                    'templates/mwd/weddingeventhtml-1/css/owl.theme.default.css',
                    'templates/mwd/weddingeventhtml-1/css/magnific-popup.css',
                    'templates/mwd/weddingeventhtml-1/css/fonts.css',
                    'templates/mwd/weddingeventhtml-1/css/style.css',
                    'plugins/flip-master/dist/flip.min.css',
                    'css/countdown.css',
                    'https://fonts.cdnfonts.com/css/brittany-signature',
                    'https://fonts.cdnfonts.com/css/garamond',
                    'https://fonts.cdnfonts.com/css/venose',
                    'https://fonts.cdnfonts.com/css/romeo-bohemian',
                ];
            } else {
                $css = [
                    'templates/nuiip/css/base.css?ver=4',
                    'templates/nuiip/css/magnific.css?ver=4',
                    'templates/nuiip/css/animated-headlines.css?ver=4',
                    'templates/nuiip/css/style.css?ver=4',
                    'https://fonts.googleapis.com',
                    'https://fonts.gstatic.com',
                    'https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap',
                    'css/site.css',
                ];   
            }
        }

        return $css;
    }

    public static function getJs(){
        $module = Yii::$app->controller->module->id;
        if (Yii::$app->hasModule($module)) {
            $js = [
                'templates/apexhtml-14/app-assets/vendors/js/vendors.min.js',
                'templates/apexhtml-14/app-assets/vendors/js/switchery.min.js',
                'templates/apexhtml-14/app-assets/vendors/js/chartist.min.js',
                'templates/apexhtml-14/app-assets/js/core/app-menu.js',
                'templates/apexhtml-14/app-assets/js/core/app.js',
                'templates/apexhtml-14/app-assets/js/notification-sidebar.js',
                'templates/apexhtml-14/app-assets/js/customizer.js',
                'templates/apexhtml-14/app-assets/js/scroll-top.js',
                'templates/apexhtml-14/app-assets/js/dashboard1.js',
                'templates/apexhtml-14/assets/js/scripts.js',
            ];
        } else {
            $ctrl  = Yii::$app->controller->id;
            if ($ctrl == 'mwd') {
                $js = [
                    'templates/mwd/weddingeventhtml-1/js/jquery.js"',
                    'templates/mwd/weddingeventhtml-1/js/bootstrap.js',
                    'templates/mwd/weddingeventhtml-1/js/owl.carousel.js',
                    'templates/mwd/weddingeventhtml-1/js/modernizr.js',
                    'templates/mwd/weddingeventhtml-1/js/smoothscroll.js',
                    'templates/mwd/weddingeventhtml-1/js/jquery.magnific-popup.js',
                    'templates/mwd/weddingeventhtml-1/js/wow.js',
                    'templates/mwd/weddingeventhtml-1/js/custom.js',
                    'plugins/flip-master/dist/flip.min.js',
                    // 'js/countdown.js',
                ];
            } else {
                $js = [
                    'templates/nuiip/js/jquery.js?ver=4',
                    'templates/nuiip/js/isotope.js',
                    'templates/nuiip/js/magnific.js',
                    'templates/nuiip/js/animated-headlines.js?ver=4',
                    'templates/nuiip/js/waypoints.js?ver=4',
                    'templates/nuiip/js/init.js?ver=4',
                    'node_modules/js-cookie/dist/js.cookie.min.js',
                    'js/app.js',
                ];
            }
        }

        return $js;
    }

}