<?php

use yii\db\Migration;

/**
 * Class m200820_123014_create_menu
 */
class m200820_123014_create_menu extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('menu',[
            'id'=>$this->primaryKey(),
            'title'=>$this->string(150),
            'user_id'=>$this->integer()
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200820_123014_create_menu cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200820_123014_create_menu cannot be reverted.\n";

        return false;
    }
    */
}
