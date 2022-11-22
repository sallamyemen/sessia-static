<?php

namespace app\assets;

use yii\web\AssetBundle;

class AppAssetAdmin extends AssetBundle
{
    public $css = [
        'front/libs/bootstrap/css/bootstrap-reboot.min.css',
        'front/libs/bootstrap/css/bootstrap.min.css',
        'front/libs/bootstrap/css/bootstrap-grid.min.css',
    ];
    public $js = [
        'front/libs/bootstrap/js/bootstrap.bundle.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];
}
