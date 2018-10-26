<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/10/25
 * Time: 10:41 AM
 * Source: Client.php
 * Project: cmbpayments
 */

namespace Zeevin\CmbPayments\Mobile\Order;


use Zeevin\CmbPayments\Kernel\BaseClient;
use Zeevin\CmbPayments\Kernel\Object\Order\Pay;
use Zeevin\CmbPayments\Kernel\Object\Order\Query;

class Client extends BaseClient
{
    public function pay(Pay $reqData)
    {
        $this->redirect = true;
        return $this->request('order.pay',$reqData->prepare());
    }

    public function query(Query $reqData)
    {
        return $this->request('order.query',$reqData->prepare());
    }
}