<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\Test;

class TestController extends Controller
{
    public $defaultAction = 'read';
    public function actionRead()
    {
        $this->view->title = 'Read';
        $model = Test::find()->all();
        return $this->render('index', [
            'model' => $model
        ]);
    }

    public function actionCreate()
    {
        $this->view->title = 'Create';
        return $this->render('create');
    }
}