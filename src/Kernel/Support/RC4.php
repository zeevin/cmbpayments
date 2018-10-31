<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/10/31
 * Time: 11:37 AM
 * Source: RC4.php
 * Project: cmbpayments
 */

namespace Zeevin\CmbPayments\Kernel\Support;


class RC4
{
    public static function encrypt(string $text,string $key,int $option = OPENSSL_RAW_DATA)
    {
        return strtoupper(bin2hex(openssl_encrypt($text,'rc4',$key,$option)));
    }
}