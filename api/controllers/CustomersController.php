<?php

namespace api\controllers;

use yii\filters\Cors;
use yii\rest\ActiveController;
use yii\web\Response;

class CustomersController extends ActiveController
{
    public $modelClass = 'api\models\Customers';

    public $serializer = [
        'class' => 'yii\rest\Serializer',
        'collectionEnvelope' => 'items',
    ];

    public function behaviors()
    {
        $behaviors = parent::behaviors();

        $behaviors['corsFilter'] = [
            'class' => Cors::class,
            'cors' => [],
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