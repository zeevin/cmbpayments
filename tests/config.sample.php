<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/10/23
 * Time: 10:45 AM
 * Source: config.php
 * Project: cmbpayments
 */

return [
    'http' =>
        [
            'allow_redirects' => true,
        ],
    'cmb'  =>
        [
            'privateKey' => 'xxxx',
            'branchNo'   => '0000',
            'merchantNo' => '0000',
            'operatorNo' => '00000',
            'operatorPwd'=> '00000',
            'endpoint'   => [
                'agreement' => [
                    'register' => 'http://121.15.180.66:801/mobilehtml/DebitCard/M_NetPay/OneNetRegister/NP_BindCard.aspx',
                    'query'    => 'http://121.15.180.72/CmbBank_B2B/UI/NetPay/DoBusiness.ashx',
                    'cancel'   => 'http://121.15.180.72/CmbBank_B2B/UI/NetPay/DoBusiness.ashx',
                ],
                'pubkey'    => 'http://121.15.180.72/CmbBank_B2B/UI/NetPay/DoBusiness.ashx',
                'order'     => [
                    'pay'    => 'http://121.15.180.66:801/NetPayment/BaseHttp.dll?MB_EUserPay',
                    'querySingle'  => 'http://121.15.180.66:801/NetPayment_dl/BaseHttp.dll?QuerySingleOrder',
                ],
                'refund' =>[
                    'do' => 'http://121.15.180.66:801/NetPayment_dl/BaseHttp.dll?DoRefund',
                    'queryByDate' => 'http://121.15.180.66:801/NetPayment_dl/BaseHttp.dll?QueryRefundByDate',
                    'querySettled' =>'http://121.15.180.66:801/netpayment_dl/BaseHttp.dll?QuerySettledRefund'
                ]
            ],
        ],

    'cache' =>
        [
            //http://doctrine-orm.readthedocs.io/projects/doctrine-orm/en/latest/reference/caching.html
            'default' => 'file',
            'prefix'  => 'cmbCache_',
            'stores'  => [
                'file'      => [
                    'driver' => 'file',
                    'patch'  => __DIR__.DIRECTORY_SEPARATOR.'cache',
                ],
                'memcached' => [
                    'server' => '127.0.0.1',
                    'port'   => 11211,
                ],
                'redis'     => [
                    'driver'   => 'predis',
                    'host'     => '127.0.0.1',
                    'password' => null,
                    'port'     => 6379,
                    'database' => 0,
                ],
            ],
        ],
];
