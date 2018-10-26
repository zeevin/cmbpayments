<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/10/23
 * Time: 11:44 AM
 * Source: Factory.php
 * Project: cmbpayments
 */

namespace Zeevin\CmbPayments;


class Factory
{
    /**
     * @param       $name
     * @param array $config
     *
     * @return \Zeevin\CmbPayments\Kernel\ServiceContainer
     */
    public static function make($name,array $config)
    {
        $application = '\\Zeevin\CmbPayments\\'.ucfirst($name).'\\Application';
        return new $application($config);
    }

    /**
     * @param $name
     * @param $arguments
     *
     * @return mixed
     */
    public static function __callStatic($name,$arguments)
    {
        return self::make($name, ...$arguments);
    }
}