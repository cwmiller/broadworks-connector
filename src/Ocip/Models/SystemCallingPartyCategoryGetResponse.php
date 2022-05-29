<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallingPartyCategoryGetResponse
 *
 * Response to SystemCallingPartyCategoryGetRequest.
 *         Contains information of a Calling Party Category defined in system.
 *
 * @see SystemCallingPartyCategoryGetRequest
 * @Groups [{"id":"89aa8c9a341a3cccb2453b1ee467bf94:136","type":"sequence"}]
 */
class SystemCallingPartyCategoryGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName cpcValue
     * @Type string
     * @Optional
     * @Group 89aa8c9a341a3cccb2453b1ee467bf94:136
     * @MinLength 1
     * @MaxLength 20
     * @var string|null
     */
    protected $cpcValue = null;

    /**
     * @ElementName isupOliValue
     * @Type int
     * @Optional
     * @Group 89aa8c9a341a3cccb2453b1ee467bf94:136
     * @MinInclusive 0
     * @MaxInclusive 255
     * @var int|null
     */
    protected $isupOliValue = null;

    /**
     * @ElementName gtdOliValue
     * @Type string
     * @Optional
     * @Group 89aa8c9a341a3cccb2453b1ee467bf94:136
     * @MinLength 1
     * @MaxLength 3
     * @var string|null
     */
    protected $gtdOliValue = null;

    /**
     * @ElementName userCategory
     * @Type bool
     * @Group 89aa8c9a341a3cccb2453b1ee467bf94:136
     * @var bool|null
     */
    protected $userCategory = null;

    /**
     * @ElementName payPhone
     * @Type bool
     * @Group 89aa8c9a341a3cccb2453b1ee467bf94:136
     * @var bool|null
     */
    protected $payPhone = null;

    /**
     * @ElementName operator
     * @Type bool
     * @Group 89aa8c9a341a3cccb2453b1ee467bf94:136
     * @var bool|null
     */
    protected $operator = null;

    /**
     * @ElementName default
     * @Type bool
     * @Group 89aa8c9a341a3cccb2453b1ee467bf94:136
     * @var bool|null
     */
    protected $default = null;

    /**
     * @ElementName collectCall
     * @Type bool
     * @Group 89aa8c9a341a3cccb2453b1ee467bf94:136
     * @var bool|null
     */
    protected $collectCall = null;

    /**
     * @ElementName webDisplayKey
     * @Type string
     * @Optional
     * @Group 89aa8c9a341a3cccb2453b1ee467bf94:136
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $webDisplayKey = null;

    /**
     * Getter for cpcValue
     *
     * @return string
     */
    public function getCpcValue()
    {
        return $this->cpcValue instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->cpcValue;
    }

    /**
     * Setter for cpcValue
     *
     * @param string $cpcValue
     * @return $this
     */
    public function setCpcValue($cpcValue)
    {
        $this->cpcValue = $cpcValue;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCpcValue()
    {
        $this->cpcValue = null;
        return $this;
    }

    /**
     * Getter for isupOliValue
     *
     * @return int
     */
    public function getIsupOliValue()
    {
        return $this->isupOliValue instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isupOliValue;
    }

    /**
     * Setter for isupOliValue
     *
     * @param int $isupOliValue
     * @return $this
     */
    public function setIsupOliValue($isupOliValue)
    {
        $this->isupOliValue = $isupOliValue;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsupOliValue()
    {
        $this->isupOliValue = null;
        return $this;
    }

    /**
     * Getter for gtdOliValue
     *
     * @return string
     */
    public function getGtdOliValue()
    {
        return $this->gtdOliValue instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->gtdOliValue;
    }

    /**
     * Setter for gtdOliValue
     *
     * @param string $gtdOliValue
     * @return $this
     */
    public function setGtdOliValue($gtdOliValue)
    {
        $this->gtdOliValue = $gtdOliValue;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGtdOliValue()
    {
        $this->gtdOliValue = null;
        return $this;
    }

    /**
     * Getter for userCategory
     *
     * @return bool
     */
    public function getUserCategory()
    {
        return $this->userCategory instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userCategory;
    }

    /**
     * Setter for userCategory
     *
     * @param bool $userCategory
     * @return $this
     */
    public function setUserCategory($userCategory)
    {
        $this->userCategory = $userCategory;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserCategory()
    {
        $this->userCategory = null;
        return $this;
    }

    /**
     * Getter for payPhone
     *
     * @return bool
     */
    public function getPayPhone()
    {
        return $this->payPhone instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->payPhone;
    }

    /**
     * Setter for payPhone
     *
     * @param bool $payPhone
     * @return $this
     */
    public function setPayPhone($payPhone)
    {
        $this->payPhone = $payPhone;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPayPhone()
    {
        $this->payPhone = null;
        return $this;
    }

    /**
     * Getter for operator
     *
     * @return bool
     */
    public function getOperator()
    {
        return $this->operator instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->operator;
    }

    /**
     * Setter for operator
     *
     * @param bool $operator
     * @return $this
     */
    public function setOperator($operator)
    {
        $this->operator = $operator;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetOperator()
    {
        $this->operator = null;
        return $this;
    }

    /**
     * Getter for default
     *
     * @return bool
     */
    public function getDefault()
    {
        return $this->default instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->default;
    }

    /**
     * Setter for default
     *
     * @param bool $default
     * @return $this
     */
    public function setDefault($default)
    {
        $this->default = $default;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDefault()
    {
        $this->default = null;
        return $this;
    }

    /**
     * Getter for collectCall
     *
     * @return bool
     */
    public function getCollectCall()
    {
        return $this->collectCall instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->collectCall;
    }

    /**
     * Setter for collectCall
     *
     * @param bool $collectCall
     * @return $this
     */
    public function setCollectCall($collectCall)
    {
        $this->collectCall = $collectCall;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCollectCall()
    {
        $this->collectCall = null;
        return $this;
    }

    /**
     * Getter for webDisplayKey
     *
     * @return string
     */
    public function getWebDisplayKey()
    {
        return $this->webDisplayKey instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->webDisplayKey;
    }

    /**
     * Setter for webDisplayKey
     *
     * @param string $webDisplayKey
     * @return $this
     */
    public function setWebDisplayKey($webDisplayKey)
    {
        $this->webDisplayKey = $webDisplayKey;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetWebDisplayKey()
    {
        $this->webDisplayKey = null;
        return $this;
    }


}

