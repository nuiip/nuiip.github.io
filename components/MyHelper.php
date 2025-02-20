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
use Google\ApiCore\ApiException;
use Google\Cloud\Translate\V3\AdaptiveMtDataset;
use Google\Cloud\Translate\V3\Client\TranslationServiceClient;
use Google\Cloud\Translate\V3\GetAdaptiveMtDatasetRequest;
use Google\Cloud\Translate\V2\TranslateClient;


class MyHelper extends Component {

    public static function getCss(){
        if (Yii::$app->requestedRoute) {
            $parts = explode('/', Yii::$app->requestedRoute);
            if (isset($parts[0]) && Yii::$app->hasModule($parts[0])) {
                $css = [
                    'templates/modernize-50/assets/css/styles.css',
                    'templates/modernize-50/assets/libs/owl.carousel/dist/assets/owl.carousel.min.css',
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
        if (Yii::$app->requestedRoute) {
            $parts = explode('/', Yii::$app->requestedRoute);
            if (isset($parts[0]) && Yii::$app->hasModule($parts[0])) {
                $js = [
                    'templates/modernize-50/assets/js/vendor.min.js',
                    'templates/modernize-50/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js',
                    'templates/modernize-50/assets/libs/simplebar/dist/simplebar.min.js',
                    'templates/modernize-50/assets/js/theme/app.init.js',
                    'templates/modernize-50/assets/js/theme/theme.js',
                    'templates/modernize-50/assets/js/theme/app.min.js',
                    'templates/modernize-50/assets/js/theme/sidebarmenu.js',
                    'https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js',
                    'js/app.js',
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
                        'js/app.js',
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
                    'js/app.js',
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
    
    public static function mmTranslates($text, $origin, $targets) {
        $translations = [];
    
        foreach ($targets as $target) {
            $url = "https://api.mymemory.translated.net/get?q=" . urlencode($text) . "&langpair=$origin|$target";
            $response = file_get_contents($url);
            $result = json_decode($response, true);
    
            if (isset($result['responseData']['translatedText'])) {
                $translations[$target] = strtolower($result['responseData']['translatedText']);
            } else {
                $translations[$target] = "Translation error";
            }
        }
    
        return $translations;
    }
    public static function libreTranslate($text, $origin, $targets) {
        $translations = [];
        $url = "https://libretranslate.com/translate"; // Use your self-hosted URL if needed
        foreach ($targets as $target) {
            $data = [
                "q" => $text,
                "source" => $origin,
                "target" => $target,
                "format" => "text"
            ];
            var_dump($data);exit;
            $options = [
                "http" => [
                    "header" => "Content-Type: application/json\r\n",
                    "method" => "POST",
                    "content" => json_encode($data)
                ]
            ];
    
            $context = stream_context_create($options);
            $response = file_get_contents($url, false, $context);
            $result = json_decode($response, true);
            var_dump($response);exit;
    
            $translations[$target] = $result["translatedText"] ?? "Translation error";
        }
    
        return $translations;
    }

    public static function goTranslate($text, $origin, $target) {
        $translate = new TranslationServiceClient([
            'key' => 'AIzaSyBraBi-ZIGZ6EuZMRz4fJXbx2eyuC2zOH4'
        ]);
        
        // Translate text from english to french.
        $result = $translate->translate($text, [
            'target' => $target
        ]);

        return $result;
    }

}