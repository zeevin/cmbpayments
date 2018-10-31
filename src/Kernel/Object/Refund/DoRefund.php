<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/10/29
 * Time: 4:03 PM
 * Source: Refund.php
 * Project: cmbpayments
 */

namespace Zeevin\CmbPayments\Kernel\Object\Refund;


use Zeevin\CmbPayments\Kernel\Traits\RequestAttributes;

class DoRefund
{
    protected $dateTime;
    protected $branchNo;
    protected $merchantNo;
    protected $date;
    protected $orderNo;
    protected $refundSerialNo;
    protected $amount;
    protected $desc;
    protected $operatorNo;
    protected $encrypType = 'RC4';
    protected $pwd;

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
     * @return DoRefund
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
     * @return DoRefund
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;

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
     * @return DoRefund
     */
    public function setDate($date)
    {
        $this->date = $date;

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
     * @return DoRefund
     */
    public function setOrderNo($orderNo)
    {
        $this->orderNo = $orderNo;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getRefundSerialNo()
    {
        return $this->refundSerialNo;
    }

    /**
     * @param mixed $refundSerialNo
     *
     * @return DoRefund
     */
    public function setRefundSerialNo($refundSerialNo)
    {
        $this->refundSerialNo = $refundSerialNo;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param mixed $amount
     *
     * @return DoRefund
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDesc()
    {
        return $this->desc;
    }

    /**
     * @param mixed $desc
     *
     * @return DoRefund
     */
    public function setDesc($desc)
    {
        $this->desc = $desc;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getOperatorNo()
    {
        return $this->operatorNo;
    }

    /**
     * @param mixed $operatorNo
     *
     * @return DoRefund
     */
    public function setOperatorNo($operatorNo)
    {
        $this->operatorNo = $operatorNo;

        return $this;
    }

    /**
     * @return string
     */
    public function getEncrypType(): string
    {
        return $this->encrypType;
    }

    /**
     * @param string $encrypType
     *
     * @return DoRefund
     */
    public function setEncrypType(string $encrypType): DoRefund
    {
        $this->encrypType = $encrypType;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPwd()
    {
        return $this->pwd;
    }

    /**
     * @param $pwd
     *
     * @return $this
     */
    public function setPwd($pwd)
    {
        $this->pwd = $pwd;

        return $this;
    }

}