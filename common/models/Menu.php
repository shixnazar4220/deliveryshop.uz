<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "menu".
 *
 * @property int $id
 * @property string|null $title
 * @property int|null $user_id
 */
class Menu extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'menu';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id'], 'integer'],
            [['title'], 'string', 'max' => 150],
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
            'user_id' => 'User ID',
        ];
    }
}
