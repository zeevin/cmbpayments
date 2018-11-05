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

$reqDataObject = new \Zeevin\CmbPayments\Kernel\Object\Order\QuerySingle();
$reqDataObject->setDateTime()->setDate('20181105')->setOrderNo('P2018111050952435098');
$ret = $app->order->querySingle($reqDataObject);
print_r($ret);