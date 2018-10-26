<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/10/24
 * Time: 5:21 PM
 * Source: Client.php
 * Project: cmbpayments
 */

namespace Zeevin\CmbPayments\Mobile\Pubkey;


use Zeevin\CmbPayments\Kernel\BaseClient;
use Zeevin\CmbPayments\Kernel\Object\Pubkey;

class Client extends BaseClient
{

    public function get(Pubkey $reqData)
    {
        $app = $this->app;
        $cache = $app['cache'];
        $cacheConfig = $app['config']->get('cache');
        $key = $cacheConfig['prefix'].'pk';
        if (!($ret = $cache->fetch($key)))
        {
            $data = $this->request('pubkey',$reqData->prepare());
            if($this->signature($data['rspData']) == $data['sign'])
            {
                $ret = $data['rspData']['fbPubKey'];
                $cache->save($key,$ret,86400);
            }

        }
        return $ret;
    }


}