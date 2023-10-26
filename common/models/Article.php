<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "article".
 *
 * @property int $articleId
 * @property string|null $author
 * @property string|null $title
 * @property string|null $description
 * @property string|null $urlToImage
 * @property string|null $publishedAt
 * @property string|null $content
 *
 * @property Source[] $sources
 */
class Article extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'article';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['publishedAt'], 'safe'],
            [['author'], 'string', 'max' => 100],
            [['title', 'description', 'urlToImage', 'content'], 'string', 'max' => 500],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'articleId' => 'Article ID',
            'author' => 'Author',
            'title' => 'Title',
            'description' => 'Description',
            'urlToImage' => 'Url To Image',
            'publishedAt' => 'Published At',
            'content' => 'Content',
        ];
    }

    /**
     * Gets query for [[Sources]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSource()
    {
        return $this->hasMany(Source::class, ['articleId' => 'articleId']);
    }
}
