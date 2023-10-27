<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "orders".
 *
 * @property int $orderNumber
 * @property string $orderDate
 * @property string $requiredDate
 * @property string|null $shippedDate
 * @property string $status
 * @property string|null $comments
 * @property int $customerNumber
 *
 * @property Customers $customerNumber0
 * @property Orderdetails[] $orderdetails
 * @property Products[] $productCodes
 */
class Orders extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'orders';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['orderNumber', 'orderDate', 'requiredDate', 'status', 'customerNumber'], 'required'],
            [['orderNumber', 'customerNumber'], 'integer'],
            [['orderDate', 'requiredDate', 'shippedDate'], 'safe'],
            [['comments'], 'string'],
            [['status'], 'string', 'max' => 15],
            [['orderNumber'], 'unique'],
            [['customerNumber'], 'exist', 'skipOnError' => true, 'targetClass' => Customers::class, 'targetAttribute' => ['customerNumber' => 'customerNumber']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'orderNumber' => 'Order Number',
            'orderDate' => 'Order Date',
            'requiredDate' => 'Required Date',
            'shippedDate' => 'Shipped Date',
            'status' => 'Status',
            'comments' => 'Comments',
            'customerNumber' => 'Customer Number',
        ];
    }

    /**
     * Gets query for [[CustomerNumber0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCustomerNumber()
    {
        return $this->hasOne(Customers::class, ['customerNumber' => 'customerNumber']);
    }

    /**
     * Gets query for [[Orderdetails]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrderdetails()
    {
        return $this->hasMany(Orderdetails::class, ['orderNumber' => 'orderNumber']);
    }

    /**
     * Gets query for [[ProductCodes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProductCodes()
    {
        return $this->hasMany(Products::class, ['productCode' => 'productCode'])->viaTable('orderdetails', ['orderNumber' => 'orderNumber']);
    }
}
