<?php

namespace app\controllers;

use app\models\Test;
use yii\web\Controller;

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
        $model = new Test();
        $model->title = 'Пример 3';
        $model->descr = 'Многие думают, что Lorem Ipsum - взятый с потолка псевдо-латинский набор слов, но это не совсем так. Его корни уходят в один фрагмент классической латыни 45 года н.э., то есть более двух тысячелетий назад. Ричард МакКлинток, профессор латыни из колледжа Hampden-Sydney, штат Вирджиния, взял одно из самых странных слов в Lorem Ipsum, "consectetur", и занялся его поисками в классической латинской литературе. В результате он нашёл неоспоримый первоисточник Lorem Ipsum в разделах 1.10.32 и 1.10.33 книги "de Finibus Bonorum et Malorum" ("О пределах добра и зла"), написанной Цицероном в 45 году н.э. Этот трактат по теории этики был очень популярен в эпоху Возрождения. Первая строка Lorem Ipsum, "Lorem ipsum dolor sit amet..", происходит от одной из строк в разделе 1.10.32';
        if ($model->save()) {
            \Yii::$app->session->setFlash('success', 'Данные были записаны');
        } else {
            \Yii::$app->session->setFlash('error', 'Произошла ошибка');
        }
        return $this->render('create');
    }

    public function actionUpdate()
    {
        $this->view->title = "Update";
        $model = Test::findOne(9);
        $model->title = 'Пример 4';
        $model->descr = 'Многие думают, что Lorem Ipsum - взятый с потолка псевдо-латинский набор слов, но это не совсем так. Его корни уходят в один фрагмент классической латыни 45 года н.э., то есть более двух тысячелетий назад. Ричард МакКлинток, профессор латыни из колледжа Hampden-Sydney, штат Вирджиния, взял одно из самых странных слов в Lorem Ipsum, "consectetur", и занялся его поисками в классической латинской литературе. В результате он нашёл неоспоримый первоисточник Lorem Ipsum в разделах 1.10.32 и 1.10.33 книги "de Finibus Bonorum et Malorum" ("О пределах добра и зла"), написанной Цицероном в 45 году н.э. Этот трактат по теории этики был очень популярен в эпоху Возрождения. Первая строка Lorem Ipsum, "Lorem ipsum dolor sit amet..", происходит от одной из строк в разделе 1.10.32';
        if ($model->save()) {
            \Yii::$app->session->setFlash('success', 'Данные были обновленны');
        } else {
            \Yii::$app->session->setFlash('error', 'Произошла ошибка');
        }
        return $this->render('update');
    }

    public function actionDelete()
    {

    }
}