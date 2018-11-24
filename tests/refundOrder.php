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

$reqDataObject = new \Zeevin\CmbPayments\Kernel\Object\Refund\DoRefund();
$reqDataObject->setDateTime()->setDate('20181116')->setOrderNo('P201811161204487320')
    ->setRefundSerialNo('R201811161204487320')->setAmount('92');
$ret = $app->refund->do($reqDataObject);
print_r($ret);
