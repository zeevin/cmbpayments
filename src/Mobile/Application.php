<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/10/23
 * Time: 11:25 AM
 * Source: Application.php
 * Project: cmbpayments
 */

namespace Zeevin\CmbPayments\Mobile;


use Zeevin\CmbPayments\Kernel\Providers\CacheProvider;
use Zeevin\CmbPayments\Kernel\ServiceContainer;


class Application extends ServiceContainer
{
    protected $providers
        = [
            CacheProvider::class,
            Agreement\ServiceProvider::class,
            Pubkey\ServiceProvider::class,
            Order\ServiceProvider::class,
        ];
}