<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/10/25
 * Time: 10:48 AM
 * Source: Order.php
 * Project: cmbpayments
 */

namespace Zeevin\CmbPayments\Kernel\Object\Order;


use Zeevin\CmbPayments\Kernel\Traits\RequestAttributes;

class Pay
{
    protected $dateTime;
    protected $branchNo;
    protected $merchantNo;
    protected $date;
    protected $orderNo;
    protected $amount;
    protected $expireTimeSpan = 5;
    protected $payNoticeUrl;
    protected $payNoticePara;
    protected $returnUrl;
    protected $clientIP;
    protected $cardType;
    protected $agrNo;
    protected $merchantSerialNo;
    protected $userID;
    protected $mobile;
    protected $lon;
    protected $lat;
    protected $riskLevel;
    protected $signNoticeUrl;
    protected $signNoticePara;
    protected $extendInfo;
    protected $extendInfoEncrypType;

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
     * @return Pay
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
     * @return Pay
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
     * @return Pay
     */
    public function setDate($date = '')
    {
        $this->date = $date?$date:date('Ymd');

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
     * @return Pay
     */
    public function setOrderNo($orderNo)
    {
        $this->orderNo = $orderNo;

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
     * @return Pay
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * @return int
     */
    public function getExpireTimeSpan(): int
    {
        return $this->expireTimeSpan;
    }

    /**
     * @param int $expireTimeSpan
     *
     * @return Pay
     */
    public function setExpireTimeSpan(int $expireTimeSpan): Pay
    {
        $this->expireTimeSpan = $expireTimeSpan;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPayNoticeUrl()
    {
        return $this->payNoticeUrl;
    }

    /**
     * @param mixed $payNoticeUrl
     *
     * @return Pay
     */
    public function setPayNoticeUrl($payNoticeUrl)
    {
        $this->payNoticeUrl = $payNoticeUrl;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPayNoticePara()
    {
        return $this->payNoticePara;
    }

    /**
     * @param mixed $payNoticePara
     *
     * @return Pay
     */
    public function setPayNoticePara($payNoticePara)
    {
        $this->payNoticePara = $payNoticePara;

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
     * @return Pay
     */
    public function setReturnUrl($returnUrl)
    {
        $this->returnUrl = $returnUrl;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getClientIP()
    {
        return $this->clientIP;
    }

    /**
     * @param mixed $clientIP
     *
     * @return Pay
     */
    public function setClientIP($clientIP)
    {
        $this->clientIP = $clientIP;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCardType()
    {
        return $this->cardType;
    }

    /**
     * @param mixed $cardType
     *
     * @return Pay
     */
    public function setCardType($cardType)
    {
        $this->cardType = $cardType;

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
     * @return Pay
     */
    public function setAgrNo($agrNo)
    {
        $this->agrNo = $agrNo;

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
     * @return Pay
     */
    public function setMerchantSerialNo($merchantSerialNo)
    {
        $this->merchantSerialNo = $merchantSerialNo;

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
     * @return Pay
     */
    public function setUserID($userID)
    {
        $this->userID = $userID;

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
     * @return Pay
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;

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
     * @return Pay
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
     * @return Pay
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
     * @return Pay
     */
    public function setRiskLevel($riskLevel)
    {
        $this->riskLevel = $riskLevel;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSignNoticeUrl()
    {
        return $this->signNoticeUrl;
    }

    /**
     * @param mixed $signNoticeUrl
     *
     * @return Pay
     */
    public function setSignNoticeUrl($signNoticeUrl)
    {
        $this->signNoticeUrl = $signNoticeUrl;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSignNoticePara()
    {
        return $this->signNoticePara;
    }

    /**
     * @param mixed $signNoticePara
     *
     * @return Pay
     */
    public function setSignNoticePara($signNoticePara)
    {
        $this->signNoticePara = $signNoticePara;

        return $this;
    }

    /**
     * @return array
     */
    public function getExtendInfo()
    {
        return $this->extendInfo?urldecode($this->extendInfo):[];
    }

    /**
     * @param array $extendInfo
     *
     * @return $this
     */
    public function setExtendInfo(array $extendInfo)
    {
        $this->extendInfo = urlencode($extendInfo);

        return $this;
    }

    /**
     * @return mixed
     */
    public function getExtendInfoEncrypType()
    {
        return $this->extendInfoEncrypType;
    }

    /**
     * @param mixed $extendInfoEncrypType
     *
     * @return Pay
     */
    public function setExtendInfoEncrypType($extendInfoEncrypType)
    {
        $this->extendInfoEncrypType = $extendInfoEncrypType;

        return $this;
    }


}