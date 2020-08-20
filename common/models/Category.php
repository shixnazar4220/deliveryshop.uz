<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "category".
 *
 * @property int $id
 * @property string|null $title
 * @property int|null $parent_id
 * @property string|null $description
 * @property string|null $image
 * @property int|null $created_time
 * @property int|null $user_id
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['parent_id', 'created_time', 'user_id'], 'integer'],
            [['description'], 'string'],
            [['title'], 'string', 'max' => 150],
            [['image'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'parent_id' => 'Parent ID',
            'description' => 'Description',
            'image' => 'Image',
            'created_time' => 'Created Time',
            'user_id' => 'User ID',
        ];
    }
}
