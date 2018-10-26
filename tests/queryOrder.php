<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/10/26
 * Time: 2:27 PM
 * Source: queryOrder.php
 * Project: cmbpayments
 */

require '../vendor/autoload.php';
$config = require './config.php';

use Zeevin\CmbPayments\Factory;
$app = Factory::mobile($config);

$reqDataObject = new \Zeevin\CmbPayments\Kernel\Object\Order\Query();
$reqDataObject->setDateTime()->setDate('20181026')->setOrderNo('P201810261201328719');
$ret = $app->order->query($reqDataObject);
print_r($ret);
