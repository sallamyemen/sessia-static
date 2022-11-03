<?php

namespace app\services\main;

use Yii;
use yii\web\Cookie;

class SiteService
{
    public static function getCookies()
    {
        $cookies = Yii::$app->request->cookies;
        if ($cookies->has('cookies')) {
            return $cookies->get('cookies');
        }
        return '';
    }

    public function setCookies()
    {
        $cookies = Yii::$app->response->cookies;
        $cookies->add(new Cookie([
            'name' => 'cookies',
            'value' => 'OK',
        ]));
    }
}
