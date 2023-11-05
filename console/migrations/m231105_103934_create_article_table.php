<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%article}}`.
 */
class m231105_103934_create_article_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%article}}', [
            'articleId' => $this->primaryKey(),
            'content' => $this->string(500),
            'publishedAt' => $this->dateTime(),
            'urlToImage' => $this->string(500),
            'description' => $this->string(500),
            'title' => $this->string(500),
            'author' => $this->string(500),

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%article}}');
    }
}
