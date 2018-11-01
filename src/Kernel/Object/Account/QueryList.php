<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/10/31
 * Time: 5:01 PM
 * Source: QueryList.php
 * Project: cmbpayments
 */

namespace Zeevin\CmbPayments\Kernel\Object\Account;


use Zeevin\CmbPayments\Kernel\Traits\RequestAttributes;

class QueryList
{
    protected $dateTime;
    protected $branchNo;
    protected $merchantNo;
    protected $date;
    protected $operatorNo;
    protected $nextKeyValue;

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
     * @return QueryList
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
     * @return QueryList
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
     * @return QueryList
     */
    public function setDate($date)
    {
        $this->date = $date;

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
     * @return QueryList
     */
    public function setOperatorNo($operatorNo)
    {
        $this->operatorNo = $operatorNo;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getNextKeyValue()
    {
        return $this->nextKeyValue;
    }

    /**
     * @param mixed $nextKeyValue
     *
     * @return QueryList
     */
    public function setNextKeyValue($nextKeyValue)
    {
        $this->nextKeyValue = $nextKeyValue;

        return $this;
    }


}