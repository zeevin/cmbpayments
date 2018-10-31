<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/10/31
 * Time: 2:56 PM
 * Source: ServiceProvider.php
 * Project: cmbpayments
 */

namespace Zeevin\CmbPayments\Mobile\Refund;


use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $app)
    {
        $app['refund'] = function ($app)
        {
            return new Client($app);
        };
    }
}