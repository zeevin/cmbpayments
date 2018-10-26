<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/10/23
 * Time: 5:52 PM
 * Source: RequestAttributes.php
 * Project: cmbpayments
 */

namespace Zeevin\CmbPayments\Kernel\Traits;


trait RequestAttributes
{
    public function prepare()
    {
        $reqDataArray = [];
        $reflect = new \ReflectionClass($this);
        $props = $reflect->getProperties(\ReflectionProperty::IS_PROTECTED);

        foreach ($props as $prop)
        {
            $prop->setAccessible(true);
            $reqDataArray[$prop->getName()] = $prop->getValue($this)?:'';
        }

        return $reqDataArray;
    }

}