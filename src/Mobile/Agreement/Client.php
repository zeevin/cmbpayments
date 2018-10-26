<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/10/23
 * Time: 10:40 AM
 * Source: Client.php
 * Project: cmbpayments
 */

namespace Zeevin\CmbPayments\Mobile\Agreement;


use Zeevin\CmbPayments\Kernel\BaseClient;
use Zeevin\CmbPayments\Kernel\Object\Agreement\Query;
use Zeevin\CmbPayments\Kernel\Object\Agreement\Register;

class Client extends BaseClient
{

    public function register(Register $reqData)
    {
        $this->redirect = true;
        return $this->request('agreement.register',$reqData->prepare());
    }

    public function query(Query $reqData)
    {
        return $this->request('agreement.query',$reqData->prepare());
    }
}