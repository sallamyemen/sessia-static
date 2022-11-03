<?php

namespace app\controllers;

use yii\web\Controller;

/**
 * Site controller
 */
class ProjectController extends Controller
{
    public $layout = 'front';

    public function actionView($project)
    {
        return $this->render('view', [
            'project' => $project,
        ]);
    }
}
