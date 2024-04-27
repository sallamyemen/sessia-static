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
        return $this->render('index');
    }

    public function actionDeleteAccount()
    {
        $this->layout = 'instructions';
        return $this->render('delete-account');
    }

    public function actionNoPage()
    {
        $this->layout = 'empty-page';
        return $this->render('no-page');
    }
}
