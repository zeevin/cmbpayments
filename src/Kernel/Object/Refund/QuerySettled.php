<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/10/31
 * Time: 3:43 PM
 * Source: QuerySettledRefund.php
 * Project: cmbpayments
 */

namespace Zeevin\CmbPayments\Kernel\Object\Refund;


use Zeevin\CmbPayments\Kernel\Traits\RequestAttributes;

class QuerySettled
{
    protected $dateTime;
    protected $branchNo;
    protected $merchantNo;

    protected $type = 'C';
    protected $orderNo;
    protected $date;
    protected $merchantSerialNo;
    protected $bankSerialNo;

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
    public function getBranchNo()
    {
        return $this->branchNo;
    }

    /**
     * @param mixed $branchNo
     *
     * @return QuerySettled
     */
    public function setBranchNo($branchNo)
    {
        $this->branchNo = $branchNo;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMerchantNo()
    {
        return $this->merchantNo;
    }

    /**
     * @param mixed $merchantNo
     *
     * @return QuerySettled
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     *
     * @return QuerySettled
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getOrderNo()
    {
        return $this->orderNo;
    }

    /**
     * @param mixed $orderNo
     *
     * @return QuerySettled
     */
    public function setOrderNo($orderNo)
    {
        $this->orderNo = $orderNo;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     *
     * @return QuerySettled
     */
    public function setDate($date)
    {
        $this->date = $date;

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
     * @return QuerySettled
     */
    public function setMerchantSerialNo($merchantSerialNo)
    {
        $this->merchantSerialNo = $merchantSerialNo;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getBankSerialNo()
    {
        return $this->bankSerialNo;
    }

    /**
     * @param mixed $bankSerialNo
     *
     * @return QuerySettled
     */
    public function setBankSerialNo($bankSerialNo)
    {
        $this->bankSerialNo = $bankSerialNo;

        return $this;
    }
}