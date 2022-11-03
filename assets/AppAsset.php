<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

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

    public $css = [
        'front/vendor/owl-carousel/owl.carousel.css',
        'front/vendor/owl-carousel/owl.theme.default.css',
        'front/vendor/owl-carousel/owl-carousel/owl.theme.green.css',
        'front/vendor/vendor/animate/animate.min.css',
        'front/css/reset.css',
        'front/css/style.css',
    ];

    public $js = [
        'front/vendor/owl-carousel/owl.carousel.min.js',
        'front/vendor/particles/particles.min.js',
        'front/vendor/wow/wow.min.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
    ];
}
