<?php

use yii\db\Migration;

/**
 * Class m200820_123528_create_product
 */
class m200820_123528_create_product extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('product',[
            'id'=>$this->primaryKey(),
            'title'=>$this->string(150),
            'category_id'=>$this->integer(),
            'description'=>$this->text(),
            'images'=>$this->text(),
            'created_time'=>$this->integer(),
            'hits'=>$this->integer(),
            'amount'=>$this->integer(),
            'amount_format'=>$this->string(),
            'user_id'=>$this->integer()
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200820_123528_create_product cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200820_123528_create_product cannot be reverted.\n";

        return false;
    }
    */
}
