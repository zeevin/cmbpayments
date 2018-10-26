<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/10/24
 * Time: 5:48 PM
 * Source: getPubkey.php
 * Project: cmbpayments
 */

require '../vendor/autoload.php';
$config = require './config.php';

use Zeevin\CmbPayments\Factory;
$app = Factory::mobile($config);


$reqDataObject = new \Zeevin\CmbPayments\Kernel\Object\Pubkey();
$data = $reqDataObject->setDateTime();

$ret = $app->pubkey->get($data);

echo $ret;
