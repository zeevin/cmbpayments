<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/10/25
 * Time: 10:48 AM
 * Source: payOrder.php
 * Project: cmbpayments
 */

require '../vendor/autoload.php';
$config = require './config.php';

use Zeevin\CmbPayments\Factory;
$app = Factory::mobile($config);

$reqDataObject = new \Zeevin\CmbPayments\Kernel\Object\Order\Pay();
$reqDataObject->setDateTime()->setDate()->setOrderNo('P'.date('YmdHis').random_int(1000,9999))
    ->setAmount('0.01')->setPayNoticeUrl('https://iot.init.lu/back.php')->setAgrNo('1631');

echo $app->order->pay($reqDataObject);