<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallingPartyCategoryModifyRequest
 *
 * Modify a Calling Party Category in system.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemCallingPartyCategoryModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName category
     * @var string|null
     */
    private $category = null;

    /**
     * @ElementName cpcValue
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $cpcValue = null;

    /**
     * @ElementName isupOliValue
     * @Nillable
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $isupOliValue = null;

    /**
     * @ElementName gtdOliValue
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
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
     * @ElementName becomeDefault
     * @var bool|null
     */
    private $becomeDefault = null;

    /**
     * @ElementName collectCall
     * @var bool|null
     */
    private $collectCall = null;

    /**
     * @ElementName webDisplayKey
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $webDisplayKey = null;

    /**
     * Getter for category
     *
     * @ElementName category
     * @return string|null
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Setter for category
     *
     * @ElementName category
     * @param string|null $category
     * @return $this
     */
    public function setCategory($category)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * Getter for cpcValue
     *
     * @ElementName cpcValue
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getCpcValue()
    {
        return $this->cpcValue;
    }

    /**
     * Setter for cpcValue
     *
     * @ElementName cpcValue
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $cpcValue
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
     * @Nillable
     * @return int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getIsupOliValue()
    {
        return $this->isupOliValue;
    }

    /**
     * Setter for isupOliValue
     *
     * @ElementName isupOliValue
     * @Nillable
     * @param int|null|\CWM\BroadWorksConnector\Ocip\Nil $isupOliValue
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
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getGtdOliValue()
    {
        return $this->gtdOliValue;
    }

    /**
     * Setter for gtdOliValue
     *
     * @ElementName gtdOliValue
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $gtdOliValue
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
     * Getter for becomeDefault
     *
     * @ElementName becomeDefault
     * @return bool|null
     */
    public function getBecomeDefault()
    {
        return $this->becomeDefault;
    }

    /**
     * Setter for becomeDefault
     *
     * @ElementName becomeDefault
     * @param bool|null $becomeDefault
     * @return $this
     */
    public function setBecomeDefault($becomeDefault)
    {
        $this->becomeDefault = $becomeDefault;
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
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getWebDisplayKey()
    {
        return $this->webDisplayKey;
    }

    /**
     * Setter for webDisplayKey
     *
     * @ElementName webDisplayKey
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $webDisplayKey
     * @return $this
     */
    public function setWebDisplayKey($webDisplayKey)
    {
        $this->webDisplayKey = $webDisplayKey;
        return $this;
    }


}

