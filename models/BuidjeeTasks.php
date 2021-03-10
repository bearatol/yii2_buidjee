<?php


namespace app\models;

use \yii\db\ActiveRecord;

/**
 * Class BuidjeeTasks
 * @package app\models
 */
class BuidjeeTasks extends ActiveRecord
{
    public static function tableName()
    {
        return "tasks";
    }

    public function rules()
    {
        return [
            ['id', 'integer'],
            ['status', 'string'],
            ['task_text', 'string'],
            ['login', 'string'],
            ['email', 'string'],
        ];
    }
}