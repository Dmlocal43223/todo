<?php

use yii\db\Migration;

class m220828_114852_create_new_task extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%task}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'description' => $this->string()->notNull(),
            'created_at' => $this->dateTime()->notNull()->defaultValue(new \yii\db\Expression('NOW()')),
            'points' => $this->integer(),
            'status' => $this->integer()->notNull()->defaultValue(0),
            'plan_date' => $this->dateTime()->notNull(),
            'close_information' => $this->string(),
            'completed_at' => $this->dateTime(),
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%task}}');
    }
}
