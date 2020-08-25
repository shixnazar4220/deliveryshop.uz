<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property int $id
 * @property string|null $title
 * @property int|null $category_id
 * @property string|null $description
 * @property string|null $images
 * @property int|null $created_time
 * @property int|null $hits
 * @property float|null $amount
 * @property float $old_amount
 * @property int $newproduct
 * @property string|null $amount_format
 * @property int|null $user_id
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category_id', 'created_time', 'hits', 'newproduct', 'user_id'], 'integer'],
            [['description', 'images'], 'string'],
            [['amount', 'old_amount'], 'number'],
            [['old_amount', 'newproduct'], 'required'],
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
            'old_amount' => 'Old Amount',
            'newproduct' => 'Newproduct',
            'amount_format' => 'Amount Format',
            'user_id' => 'User ID',
        ];
    }
}
