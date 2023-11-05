<?php

use yii\db\Migration;

/**
 * Class m231105_104423_insert_source_table
 */
class m231105_104423_insert_source_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->batchInsert('source', ['articleId', 'name'],
            [
                [
                    1,
                    'Nieuwsblad.be'
                ],
                [
                    2,
                    'Columbia Journalism Review'
                ],
                [
                    3,
                    'Khan.co.kr'
                ],
                [
                    4,
                    'The Week Magazine'
                ],
                [
                    5,
                    'BBC News'
                ],
                [
                    6,
                    'The Times of Israel'
                ],
                [
                    7,
                    'Hvg.hu'
                ],
                [
                    8,
                    'Kanobu.ru'
                ],
                [
                    9,
                    'Fox News'
                ],
                [
                    10,
                    'Origo.hu'
                ],
                [
                    11,
                    'The Week Magazine'
                ],
                [
                    12,
                    'STERN.de'
                ],
            ]
        );

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m231105_104423_insert_source_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m231105_104423_insert_source_table cannot be reverted.\n";

        return false;
    }
    */
}
