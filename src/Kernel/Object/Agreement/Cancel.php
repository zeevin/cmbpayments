<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/10/25
 * Time: 7:19 PM
 * Source: Query.php
 * Project: cmbpayments
 */

namespace Zeevin\CmbPayments\Kernel\Object\Agreement;


use Zeevin\CmbPayments\Kernel\Traits\RequestAttributes;

class Cancel
{
    protected $dateTime;
    protected $txCode = 'CMQX';
    protected $branchNo;
    protected $merchantNo;
    protected $merchantSerialNo;
    protected $agrNo;

    use RequestAttributes;

    /**
     * @return mixed
     */
    public function getDateTime()
    {
        return $this->dateTime;
    }

    /**
     * @param string $dateTime
     *
     * @return $this
     */
    public function setDateTime($dateTime = '')
    {
        $this->dateTime = $dateTime?$dateTime:date('YmdHis');

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMerchantSerialNo()
    {
        return $this->merchantSerialNo;
    }

    /**
     * @param mixed $merchantSerialNo
     *
     * @return Cancel
     */
    public function setMerchantSerialNo($merchantSerialNo)
    {
        $this->merchantSerialNo = $merchantSerialNo;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAgrNo()
    {
        return $this->agrNo;
    }

    /**
     * @param mixed $agrNo
     *
     * @return Cancel
     */
    public function setAgrNo($agrNo)
    {
        $this->agrNo = $agrNo;

        return $this;
    }

}