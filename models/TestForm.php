<?php

namespace app\models;

use yii\base\Model;

class TestForm extends Model
{
    public $title;
    public $descr;

    public function rules()
    {
        return [

        ];
    }
}