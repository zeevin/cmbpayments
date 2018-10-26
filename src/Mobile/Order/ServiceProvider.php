<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/10/25
 * Time: 10:46 AM
 * Source: ServiceProvider.php
 * Project: cmbpayments
 */

namespace Zeevin\CmbPayments\Mobile\Order;


use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $app)
    {
        $app['order'] = function ($app)
        {
            return new Client($app);
        };
    }
}