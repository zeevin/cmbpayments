<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/10/25
 * Time: 7:25 PM
 * Source: queryAgreement.php
 * Project: cmbpayments
 */

require '../vendor/autoload.php';
$config = require './config.php';

use Zeevin\CmbPayments\Factory;
$app = Factory::mobile($config);

$reqDataObject = new \Zeevin\CmbPayments\Kernel\Object\Agreement\Query();

$reqDataObject->setMerchantSerialNo('Q'.random_int(10000000,99999999))
    ->setDateTime()
    ->setAgrNo('1631');

$ret =  $app->agreement->query($reqDataObject);
print_r($ret);