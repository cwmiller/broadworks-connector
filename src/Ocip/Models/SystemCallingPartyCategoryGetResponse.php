<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallingPartyCategoryGetResponse
 *
 * Response to SystemCallingPartyCategoryGetRequest.
 *         Contains information of a Calling Party Category defined in system.
 */
class SystemCallingPartyCategoryGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName cpcValue
     * @var string|null
     */
    private $cpcValue = null;

    /**
     * @ElementName isupOliValue
     * @var int|null
     */
    private $isupOliValue = null;

    /**
     * @ElementName gtdOliValue
     * @var string|null
     */
    private $gtdOliValue = null;

    /**
     * @ElementName userCategory
     * @var bool|null
     */
    private $userCategory = null;

    /**
     * @ElementName payPhone
     * @var bool|null
     */
    private $payPhone = null;

    /**
     * @ElementName operator
     * @var bool|null
     */
    private $operator = null;

    /**
     * @ElementName default
     * @var bool|null
     */
    private $default = null;

    /**
     * @ElementName collectCall
     * @var bool|null
     */
    private $collectCall = null;

    /**
     * @ElementName webDisplayKey
     * @var string|null
     */
    private $webDisplayKey = null;

    /**
     * Getter for cpcValue
     *
     * @ElementName cpcValue
     * @return string|null
     */
    public function getCpcValue()
    {
        return $this->cpcValue;
    }

    /**
     * Setter for cpcValue
     *
     * @ElementName cpcValue
     * @param string|null $cpcValue
     * @return $this
     */
    public function setCpcValue($cpcValue)
    {
        $this->cpcValue = $cpcValue;
        return $this;
    }

    /**
     * Getter for isupOliValue
     *
     * @ElementName isupOliValue
     * @return int|null
     */
    public function getIsupOliValue()
    {
        return $this->isupOliValue;
    }

    /**
     * Setter for isupOliValue
     *
     * @ElementName isupOliValue
     * @param int|null $isupOliValue
     * @return $this
     */
    public function setIsupOliValue($isupOliValue)
    {
        $this->isupOliValue = $isupOliValue;
        return $this;
    }

    /**
     * Getter for gtdOliValue
     *
     * @ElementName gtdOliValue
     * @return string|null
     */
    public function getGtdOliValue()
    {
        return $this->gtdOliValue;
    }

    /**
     * Setter for gtdOliValue
     *
     * @ElementName gtdOliValue
     * @param string|null $gtdOliValue
     * @return $this
     */
    public function setGtdOliValue($gtdOliValue)
    {
        $this->gtdOliValue = $gtdOliValue;
        return $this;
    }

    /**
     * Getter for userCategory
     *
     * @ElementName userCategory
     * @return bool|null
     */
    public function getUserCategory()
    {
        return $this->userCategory;
    }

    /**
     * Setter for userCategory
     *
     * @ElementName userCategory
     * @param bool|null $userCategory
     * @return $this
     */
    public function setUserCategory($userCategory)
    {
        $this->userCategory = $userCategory;
        return $this;
    }

    /**
     * Getter for payPhone
     *
     * @ElementName payPhone
     * @return bool|null
     */
    public function getPayPhone()
    {
        return $this->payPhone;
    }

    /**
     * Setter for payPhone
     *
     * @ElementName payPhone
     * @param bool|null $payPhone
     * @return $this
     */
    public function setPayPhone($payPhone)
    {
        $this->payPhone = $payPhone;
        return $this;
    }

    /**
     * Getter for operator
     *
     * @ElementName operator
     * @return bool|null
     */
    public function getOperator()
    {
        return $this->operator;
    }

    /**
     * Setter for operator
     *
     * @ElementName operator
     * @param bool|null $operator
     * @return $this
     */
    public function setOperator($operator)
    {
        $this->operator = $operator;
        return $this;
    }

    /**
     * Getter for default
     *
     * @ElementName default
     * @return bool|null
     */
    public function getDefault()
    {
        return $this->default;
    }

    /**
     * Setter for default
     *
     * @ElementName default
     * @param bool|null $default
     * @return $this
     */
    public function setDefault($default)
    {
        $this->default = $default;
        return $this;
    }

    /**
     * Getter for collectCall
     *
     * @ElementName collectCall
     * @return bool|null
     */
    public function getCollectCall()
    {
        return $this->collectCall;
    }

    /**
     * Setter for collectCall
     *
     * @ElementName collectCall
     * @param bool|null $collectCall
     * @return $this
     */
    public function setCollectCall($collectCall)
    {
        $this->collectCall = $collectCall;
        return $this;
    }

    /**
     * Getter for webDisplayKey
     *
     * @ElementName webDisplayKey
     * @return string|null
     */
    public function getWebDisplayKey()
    {
        return $this->webDisplayKey;
    }

    /**
     * Setter for webDisplayKey
     *
     * @ElementName webDisplayKey
     * @param string|null $webDisplayKey
     * @return $this
     */
    public function setWebDisplayKey($webDisplayKey)
    {
        $this->webDisplayKey = $webDisplayKey;
        return $this;
    }


}

