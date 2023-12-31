<?php

namespace frontend\controllers;

use yii\filters\Cors;
use yii\rest\ActiveController;
use yii\web\Response;

class ArticleController extends ActiveController
{
    public $modelClass = 'frontend\models\Article';

    public $serializer = [
        'class' => 'yii\rest\Serializer',
        'collectionEnvelope' => 'items',
    ];

    public function behaviors()
    {
        $behaviors = parent::behaviors();

        $behaviors['corsFilter'] = [
            'class' => Cors::class,
            'cors' => [
                'Origin' => "*"
            ],
        ];

        $behaviors['format'] = [
            'class' => 'yii\filters\ContentNegotiator',
            'formats' => [
                'application/json' => Response::FORMAT_JSON,
//                'application/xml' => Response::FORMAT_XML,
            ],
        ];

        return $behaviors;
    }
}