<?php

use yii\db\Migration;

/**
 * Class m210411_040024_create_table_wordbook
 */
class m210411_040024_create_table_wordbook extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('wordbook', 
        [
            'id' => $this->bigPrimaryKey(),
            'word' => $this->string()->notNull(),
            'pronunciation' => $this->string(),
            'definition' => $this->text()->notNull(),
            'created_at' => $this->dateTime()->null()->defaultExpression('CURRENT_TIMESTAMP'),
            'updated_at' => $this->dateTime()->defaultValue(null)->append('ON UPDATE CURRENT_TIMESTAMP'),
            'created_by' => $this->bigInteger(),
            'updated_by' => $this->bigInteger(),
        ]);

        $this->createIndex('word_index', 'wordbook', 'word');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('wordbook');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210411_040024_create_table_wordbook cannot be reverted.\n";

        return false;
    }
    */
}
