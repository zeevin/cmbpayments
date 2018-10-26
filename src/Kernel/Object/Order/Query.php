<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/10/26
 * Time: 2:18 PM
 * Source: Query.php
 * Project: cmbpayments
 */

namespace Zeevin\CmbPayments\Kernel\Object\Order;


use Zeevin\CmbPayments\Kernel\Traits\RequestAttributes;

class Query
{
    protected $dateTime;
    protected $branchNo;
    protected $merchantNo;
    protected $type = 'B';
    protected $bankSerialNo;
    protected $date;
    protected $orderNo;
    protected $operatorNo;

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
     * @return Query
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
     * @return Query
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;

        return $this;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     *
     * @return Query
     */
    public function setType(string $type): Query
    {
        $this->type = $type;

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
     * @return Query
     */
    public function setBankSerialNo($bankSerialNo)
    {
        $this->bankSerialNo = $bankSerialNo;

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
     * @return Query
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
     * @return Query
     */
    public function setOrderNo($orderNo)
    {
        $this->orderNo = $orderNo;

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
     * @return Query
     */
    public function setOperatorNo($operatorNo)
    {
        $this->operatorNo = $operatorNo;

        return $this;
    }


}