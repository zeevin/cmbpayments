<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/10/31
 * Time: 2:46 PM
 * Source: ServiceProvider.php
 * Project: cmbpayments
 */

namespace Zeevin\CmbPayments\Mobile\Bill;


use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $app)
    {
        $app['bill'] = function ($app)
        {
            return new Client($app);
        };
    }
}