<?php

namespace app\assets;

use yii\web\AssetBundle;

class AppOldAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $css = [
        'front/css/main-empty.min.css',
    ];
    public $js = [];

    public $depends = [
        'yii\web\YiiAsset',
    ];
}
