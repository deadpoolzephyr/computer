<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Class m210113_154950_computer
 */
class m210113_154950_computer extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        return $this->createTable('computer', [
            'id' => Schema::TYPE_PK,
            'type' => Schema::TYPE_STRING,
            'brand' => Schema::TYPE_STRING,
            'model' => Schema::TYPE_STRING,
            'cpu' => Schema::TYPE_STRING,
            'gpu' => Schema::TYPE_STRING,
            'ram' => Schema::TYPE_STRING,
            'created_at' => Schema::TYPE_DATETIME,
            'updated_at' => Schema::TYPE_DATETIME,
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        return $this->dropTable('computer') ;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210113_154950_computer cannot be reverted.\n";

        return false;
    }
    */
}
