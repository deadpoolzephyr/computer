<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Class m210113_154949_content
 */
class m210113_154949_content extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        return $this->createTable('content', [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING,
            'body' => Schema::TYPE_TEXT,
            'created_at' => Schema::TYPE_DATETIME,
            'updated_at' => Schema::TYPE_DATETIME,
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        return $this->dropTable('content') ;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210113_154949_content cannot be reverted.\n";

        return false;
    }
    */
}
