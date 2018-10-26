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


$reqDataObject = new \Zeevin\CmbPayments\Kernel\Object\Agreement\Register();
$data = $reqDataObject
    ->setDateTime()
    ->setMobile('13600010059')
    ->setMerchantSerialNo('C'.random_int(10000000,99999999))
    ->setAgrNo('1631') //163:20181024
    ->setUserID('163')
    ->setRiskLevel('3')
    ->setNoticeUrl('https://iot.init.lu/back.php');

echo $app->agreement->register($data);

