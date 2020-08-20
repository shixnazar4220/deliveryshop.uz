<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "cart".
 *
 * @property int $id
 * @property string|null $title
 * @property int|null $category_id
 * @property string|null $description
 * @property string|null $images
 * @property int|null $created_time
 * @property int|null $hits
 * @property int|null $amount
 * @property string|null $amount_format
 * @property int|null $user_id
 */
class Cart extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cart';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category_id', 'created_time', 'hits', 'amount', 'user_id'], 'integer'],
            [['description', 'images'], 'string'],
            [['title'], 'string', 'max' => 150],
            [['amount_format'], 'string', 'max' => 255],
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
            'category_id' => 'Category ID',
            'description' => 'Description',
            'images' => 'Images',
            'created_time' => 'Created Time',
            'hits' => 'Hits',
            'amount' => 'Amount',
            'amount_format' => 'Amount Format',
            'user_id' => 'User ID',
        ];
    }
}
