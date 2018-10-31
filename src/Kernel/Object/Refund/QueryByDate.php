<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/10/31
 * Time: 3:32 PM
 * Source: QueryByDate.php
 * Project: cmbpayments
 */

namespace Zeevin\CmbPayments\Kernel\Object\Refund;


use Zeevin\CmbPayments\Kernel\Traits\RequestAttributes;

class QueryByDate
{
    protected $dateTime;
    protected $branchNo;
    protected $merchantNo;
    protected $beginDate;
    protected $endDate;
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
     * @return QueryByDate
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
     * @return QueryByDate
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getBeginDate()
    {
        return $this->beginDate;
    }

    /**
     * @param mixed $beginDate
     *
     * @return QueryByDate
     */
    public function setBeginDate($beginDate)
    {
        $this->beginDate = $beginDate;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @param mixed $endDate
     *
     * @return QueryByDate
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;

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
     * @return QueryByDate
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
     * @return QueryByDate
     */
    public function setNextKeyValue($nextKeyValue)
    {
        $this->nextKeyValue = $nextKeyValue;

        return $this;
    }

}