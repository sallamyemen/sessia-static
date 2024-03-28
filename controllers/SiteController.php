<?php

namespace app\controllers;

use yii\web\Controller;

/**
 * Site controller
 */
class SiteController extends Controller
{
    public $layout = 'front';

    public function actions(): array
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function actionIndex()
    {
        $this->layout = 'front-empty';
//        Yii::$app->cache->flush();
//        Yii::app()->cache->gc();
//        $cache=new CFileCache();
//        $cache->flush();
        return $this->render('index');
    }

    public function actionDeleteAccount()
    {
        $this->layout = 'instructions';
        return $this->render('delete-account');
    }
}
