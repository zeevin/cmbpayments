<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/10/31
 * Time: 3:52 PM
 * Source: refundQuerySettled.php
 * Project: cmbpayments
 */

require '../vendor/autoload.php';
$config = require './config.php';

use Zeevin\CmbPayments\Factory;
$app = Factory::mobile($config);

$reqDataObject = new \Zeevin\CmbPayments\Kernel\Object\Refund\QuerySettled();
$reqDataObject->setDateTime()->setDate('20181026')->setOrderNo('P201810261201328719');
$ret = $app->refund->querySettled($reqDataObject);
print_r($ret);
