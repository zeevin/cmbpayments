<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/10/30
 * Time: 2:31 PM
 * Source: refundOrder.php
 * Project: cmbpayments
 */

require '../vendor/autoload.php';
$config = require './config.php';

use Zeevin\CmbPayments\Factory;
$app = Factory::mobile($config);

$reqDataObject = new \Zeevin\CmbPayments\Kernel\Object\Order\Refund();
$reqDataObject->setDateTime()->setDate('20181026')->setOrderNo('P201810261201328719')
    ->setRefundSerialNo('R201810261201328719')->setAmount('0.01');
$ret = $app->order->refund($reqDataObject);
print_r($ret);
