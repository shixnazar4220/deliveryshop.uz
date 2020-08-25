<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web/shoptheme/';
    public $css = [
        'style.css',
    ];
    public $js = [
        'js/jquery.min.js',
        'js/bootstrap.min.js',
        'js/owl.carousel.min.js',
        'js/mobile-menu.js',
        'js/jquery-ui.js',
        'js/main.js',
        'js/countdown.js',
        'js/revolution-slider.js',
        'js/scriptmain.js',

    ];


//    public $depends = [
//        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
//    ];
}
