<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/10/31
 * Time: 3:35 PM
 * Source: refundQueryByDate.php
 * Project: cmbpayments
 */

require '../vendor/autoload.php';
$config = require './config.php';

use Zeevin\CmbPayments\Factory;
$app = Factory::mobile($config);

$reqDataObject = new \Zeevin\CmbPayments\Kernel\Object\Refund\QueryByDate();
$reqDataObject->setDateTime()->setBeginDate('20181104')->setEndDate('20181105');
$ret = $app->refund->queryByDate($reqDataObject);
print_r($ret);
