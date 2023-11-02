<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%source}}`.
 */
class m231102_182453_create_source_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%source}}', [
            'id' => $this->primaryKey(),
            'articleId' => $this->integer(),
            'name' => $this->string(50)
        ]);
        $this->addForeignKey(
            'fk-source',
            'source',
            'articleId',
            'article',
            'articleId'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%source}}');

        $this->dropForeignKey(
            'fk-source',
            'source'
        );
    }
}
