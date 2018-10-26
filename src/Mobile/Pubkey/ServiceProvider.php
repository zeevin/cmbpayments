<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/10/24
 * Time: 5:39 PM
 * Source: ServiceProvider.php
 * Project: cmbpayments
 */

namespace Zeevin\CmbPayments\Mobile\Pubkey;


use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $app)
    {
        $app['pubkey'] = function ($app)
        {
            return new Client($app);
        };
    }
}