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
 * @Groups [{"id":"22021b993135fadb1ded1619493a5a0c:160","type":"sequence"}]
 */
class SystemCallingPartyCategoryModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName category
     * @Type string
     * @Group 22021b993135fadb1ded1619493a5a0c:160
     * @var string|null
     */
    private $category = null;

    /**
     * @ElementName cpcValue
     * @Type string
     * @Nillable
     * @Optional
     * @Group 22021b993135fadb1ded1619493a5a0c:160
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $cpcValue = null;

    /**
     * @ElementName isupOliValue
     * @Type int
     * @Nillable
     * @Optional
     * @Group 22021b993135fadb1ded1619493a5a0c:160
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $isupOliValue = null;

    /**
     * @ElementName gtdOliValue
     * @Type string
     * @Nillable
     * @Optional
     * @Group 22021b993135fadb1ded1619493a5a0c:160
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $gtdOliValue = null;

    /**
     * @ElementName userCategory
     * @Type bool
     * @Optional
     * @Group 22021b993135fadb1ded1619493a5a0c:160
     * @var bool|null
     */
    private $userCategory = null;

    /**
     * @ElementName payPhone
     * @Type bool
     * @Optional
     * @Group 22021b993135fadb1ded1619493a5a0c:160
     * @var bool|null
     */
    private $payPhone = null;

    /**
     * @ElementName operator
     * @Type bool
     * @Optional
     * @Group 22021b993135fadb1ded1619493a5a0c:160
     * @var bool|null
     */
    private $operator = null;

    /**
     * @ElementName becomeDefault
     * @Type bool
     * @Optional
     * @Group 22021b993135fadb1ded1619493a5a0c:160
     * @var bool|null
     */
    private $becomeDefault = null;

    /**
     * @ElementName collectCall
     * @Type bool
     * @Optional
     * @Group 22021b993135fadb1ded1619493a5a0c:160
     * @var bool|null
     */
    private $collectCall = null;

    /**
     * @ElementName webDisplayKey
     * @Type string
     * @Nillable
     * @Optional
     * @Group 22021b993135fadb1ded1619493a5a0c:160
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $webDisplayKey = null;

    /**
     * Getter for category
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->category instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->category;
    }

    /**
     * Setter for category
     *
     * @param string $category
     * @return $this
     */
    public function setCategory($category)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCategory()
    {
        $this->category = null;
        return $this;
    }

    /**
     * Getter for cpcValue
     *
     * @return string|null
     */
    public function getCpcValue()
    {
        return $this->cpcValue instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->cpcValue;
    }

    /**
     * Setter for cpcValue
     *
     * @param string|null $cpcValue
     * @return $this
     */
    public function setCpcValue($cpcValue)
    {
        if ($cpcValue === null) {
            $this->cpcValue = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->cpcValue = $cpcValue;
        }
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
     * @return int|null
     */
    public function getIsupOliValue()
    {
        return $this->isupOliValue instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isupOliValue;
    }

    /**
     * Setter for isupOliValue
     *
     * @param int|null $isupOliValue
     * @return $this
     */
    public function setIsupOliValue($isupOliValue)
    {
        if ($isupOliValue === null) {
            $this->isupOliValue = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->isupOliValue = $isupOliValue;
        }
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
     * @return string|null
     */
    public function getGtdOliValue()
    {
        return $this->gtdOliValue instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->gtdOliValue;
    }

    /**
     * Setter for gtdOliValue
     *
     * @param string|null $gtdOliValue
     * @return $this
     */
    public function setGtdOliValue($gtdOliValue)
    {
        if ($gtdOliValue === null) {
            $this->gtdOliValue = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->gtdOliValue = $gtdOliValue;
        }
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
     * Getter for becomeDefault
     *
     * @return bool
     */
    public function getBecomeDefault()
    {
        return $this->becomeDefault instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->becomeDefault;
    }

    /**
     * Setter for becomeDefault
     *
     * @param bool $becomeDefault
     * @return $this
     */
    public function setBecomeDefault($becomeDefault)
    {
        $this->becomeDefault = $becomeDefault;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetBecomeDefault()
    {
        $this->becomeDefault = null;
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
     * @return string|null
     */
    public function getWebDisplayKey()
    {
        return $this->webDisplayKey instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->webDisplayKey;
    }

    /**
     * Setter for webDisplayKey
     *
     * @param string|null $webDisplayKey
     * @return $this
     */
    public function setWebDisplayKey($webDisplayKey)
    {
        if ($webDisplayKey === null) {
            $this->webDisplayKey = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->webDisplayKey = $webDisplayKey;
        }
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

