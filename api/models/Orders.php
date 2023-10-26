<?php

namespace api\models;

class Orders extends \common\models\Orders
{
    public function fields()
    {
        return [
            'orderNumber',
            'orderDate',
            'status',
            'comments'
        ];
    }
}