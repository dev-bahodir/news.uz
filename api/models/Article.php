<?php

namespace api\models;

class Article extends \common\models\Article
{
    public function fields()
    {
        return [
            'source',
            'author',
            'title',
            'description',
            'urlToImage',
            'publishedAt',
            'content'
        ];
    }
    public function getSource()
    {
        return $this->hasMany(Source::class, ['articleId' => 'articleId']);
    }
}