<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/10/31
 * Time: 2:55 PM
 * Source: Client.php
 * Project: cmbpayments
 */

namespace Zeevin\CmbPayments\Mobile\Refund;


use Zeevin\CmbPayments\Kernel\BaseClient;
use Zeevin\CmbPayments\Kernel\Object\Refund\DoRefund;
use Zeevin\CmbPayments\Kernel\Object\Refund\QueryByDate;
use Zeevin\CmbPayments\Kernel\Support\RC4;

class Client extends BaseClient
{
    public function do(DoRefund $reqData)
    {
        $config_cmb = $this->config->get('cmb');
        if (!$reqData->getPwd())
            $reqData->setPwd(RC4::encrypt($config_cmb['operatorPwd'],$config_cmb['privateKey']));

        if (!$reqData->getOperatorNo())
            $reqData->setOperatorNo($config_cmb['operatorNo']);

        return $this->request('refund.do',$reqData->prepare());
    }

    public function queryByDate(QueryByDate $reqData)
    {
        if (!$reqData->getOperatorNo())
        {
            $config_cmb = $this->config->get('cmb');
            $reqData->setOperatorNo($config_cmb['operatorNo']);

            return $this->request('refund.queryByDate',$reqData->prepare());
        }
    }
}