<?php

namespace app\models;

/**
 * This is the model class for table "post".
 *
 * @property int $id
 * @property int $category_id
 * @property string|null $date
 * @property string $img
 * @property string $title
 * @property string $quote
 * @property string $text
 */
class Post extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'post';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date'], 'safe'],
            [['img', 'title', 'quote', 'text'], 'required'],
            [['img', 'title', 'quote', 'text'], 'string'],
            [['category_id'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category_id' => 'Category',
            'date' => 'Date',
            'img' => 'Img',
            'title' => 'Title',
            'quote' => 'Quote',
            'text' => 'Text',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory() {
        return $this->hasOne(Category::class, ['id' => 'category_id']);
    }

}
