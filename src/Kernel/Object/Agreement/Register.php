<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/10/23
 * Time: 4:00 PM
 * Source: Register.php
 * Project: cmbpayments
 */

namespace Zeevin\CmbPayments\Kernel\Object\Agreement;


use Zeevin\CmbPayments\Kernel\Traits\RequestAttributes;

class Register
{
    protected $dateTime;
    protected $merchantSerialNo;
    protected $agrNo;
    protected $branchNo;
    protected $merchantNo;
    protected $mobile;
    protected $userID;
    protected $lon;
    protected $lat;
    protected $riskLevel;
    protected $noticeUrl;
    protected $noticePara;
    protected $returnUrl;

    use RequestAttributes;
    /**
     * @return mixed
     */
    public function getDateTime()
    {
        return $this->dateTime;
    }

    /**
     * @param mixed $dateTime
     *
     * @return Register
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
     * @return Register
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
     * @return Register
     */
    public function setAgrNo($agrNo)
    {
        $this->agrNo = $agrNo;

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
     * @return Register
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
     * @return Register
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * @param mixed $mobile
     *
     * @return Register
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getUserID()
    {
        return $this->userID;
    }

    /**
     * @param mixed $userID
     *
     * @return Register
     */
    public function setUserID($userID)
    {
        $this->userID = $userID;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getLon()
    {
        return $this->lon;
    }

    /**
     * @param mixed $lon
     *
     * @return Register
     */
    public function setLon($lon)
    {
        $this->lon = $lon;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getLat()
    {
        return $this->lat;
    }

    /**
     * @param mixed $lat
     *
     * @return Register
     */
    public function setLat($lat)
    {
        $this->lat = $lat;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getRiskLevel()
    {
        return $this->riskLevel;
    }

    /**
     * @param mixed $riskLevel
     *
     * @return Register
     */
    public function setRiskLevel($riskLevel)
    {
        $this->riskLevel = $riskLevel;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getNoticeUrl()
    {
        return $this->noticeUrl;
    }

    /**
     * @param mixed $noticeUrl
     *
     * @return Register
     */
    public function setNoticeUrl($noticeUrl)
    {
        $this->noticeUrl = $noticeUrl;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getNoticePara()
    {
        return $this->noticePara;
    }

    /**
     * @param mixed $noticePara
     *
     * @return Register
     */
    public function setNoticePara($noticePara)
    {
        $this->noticePara = $noticePara;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getReturnUrl()
    {
        return $this->returnUrl;
    }

    /**
     * @param mixed $returnUrl
     *
     * @return Register
     */
    public function setReturnUrl($returnUrl)
    {
        $this->returnUrl = $returnUrl;

        return $this;
    }
}