<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/10/23
 * Time: 11:08 AM
 * Source: ServiceProvider.php
 * Project: cmbpayments
 */

namespace Zeevin\CmbPayments\Mobile\Agreement;


use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $app)
    {
        $app['agreement'] = function ($app)
        {
            return new Client($app);
        };
    }
}