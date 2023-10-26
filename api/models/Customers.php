<?php

namespace api\models;

class Customers extends \common\models\Customers
{
    public function fields()
    {
        return [
            'customerNumber',
            'customerName',
            'contactLastName',
            'contactFirstName',
            'phone',
            'city',
            'country',
            'orders'
        ];
    }

    public function getOrders()
    {
        return $this->hasMany(Orders::class, ['customerNumber' => 'customerNumber']);
    }
}