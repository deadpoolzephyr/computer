<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Class m210113_154951_store
 */
class m210113_154951_store extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        return $this->createTable('store', [
            'id' => Schema::TYPE_PK,
            'device_id' => Schema::TYPE_INTEGER,
            'store_name' => Schema::TYPE_STRING,
            'price' => Schema::TYPE_FLOAT,
            'created_at' => Schema::TYPE_DATETIME,
            'updated_at' => Schema::TYPE_DATETIME,
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        return $this->dropTable('store') ;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210113_154951_store cannot be reverted.\n";

        return false;
    }
    */
}
