<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/10/23
 * Time: 10:44 AM
 * Source: register.php
 * Project: cmbpayments
 */

require '../vendor/autoload.php';
$config = require './config.php';

use Zeevin\CmbPayments\Factory;
$app = Factory::mobile($config);

$reqDataObject = new \Zeevin\CmbPayments\Kernel\Object\Agreement\Cancel();

$reqDataObject->setMerchantSerialNo('Q'.random_int(10000000,99999999))
    ->setDateTime()
    ->setAgrNo('572');

$ret =  $app->agreement->cancel($reqDataObject);
print_r($ret);
