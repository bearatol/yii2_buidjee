<?php

namespace app\models;

use yii\db\ActiveRecord;

/**
 * @property int $code
*/
class Country extends ActiveRecord
{
    public static function tableName()
    {
        return "country";
    }

    public function rules()
    {
        return [
            ['code', 'string'],
            ['name', 'string'],
            ['population', 'integer'],
        ];
    }
}