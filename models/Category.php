<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;
use app\models\ContactForm;

class Category extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'category';
    }

    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
        ];
    }

    public function getPosts() {

        return $this->hasMany(Post::class, ['category_id' => 'id']);
    }

    public static function getListMap()
    {
        return ArrayHelper::map(self::find()->all(), 'id', 'name');
    }

}
