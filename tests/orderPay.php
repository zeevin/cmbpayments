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
    ->setExpireTimeSpan(100)
    ->setAmount('1')->setPayNoticeUrl('http://47.98.159.146/back.php')->setAgrNo('16320099')
    ->setMerchantSerialNo('AG1633003444');
    //->setSignNoticeUrl('http://47.98.159.146/back.php');

echo $app->order->pay($reqDataObject);