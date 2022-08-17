<?php

namespace app\models;

use yii\db\ActiveRecord;

class Test extends ActiveRecord
{
    public static function tableName()
    {
        return 'test';
    }

    public function rules()
    {
        return [
            [['title', 'descr'], 'required'],
            ['title', 'string', 'max' => '255'],
            ['descr', 'string', 'max' => '10000']
        ];
    }
}