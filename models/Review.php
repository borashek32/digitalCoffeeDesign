<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "review".
 *
 * @property int $id
 * @property string $date
 * @property string $name
 * @property string $text
 */
class Review extends \yii\db\ActiveRecord
{
    public $verifyCode;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'review';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date', 'name', 'review'], 'required'],
            [['date'], 'safe'],
            [['name', 'review'], 'string'],
            ['verifyCode', 'captcha'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'date' => 'Date',
            'name' => 'Name',
            'review' => 'Review',
            'verifyCode' => 'Введите код для отправки сообщения',
        ];
    }
}
