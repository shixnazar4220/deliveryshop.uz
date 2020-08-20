<?php

use yii\db\Migration;

/**
 * Class m200820_123456_create_category
 */
class m200820_123456_create_category extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('category',[
            'id'=>$this->primaryKey(),
            'title'=>$this->string(150),
            'parent_id'=>$this->integer(),
            'description'=>$this->text(),
            'image'=>$this->string(255),
            'created_time'=>$this->integer(),
            'user_id'=>$this->integer()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200820_123456_create_category cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200820_123456_create_category cannot be reverted.\n";

        return false;
    }
    */
}
