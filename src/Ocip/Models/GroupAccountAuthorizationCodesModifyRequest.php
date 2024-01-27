<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAccountAuthorizationCodesModifyRequest
 *
 * Change the group's account/authorization codes setting.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"fcf43b3a58ff66521262b4426bab8748:196","type":"sequence"}]
 */
class GroupAccountAuthorizationCodesModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group fcf43b3a58ff66521262b4426bab8748:196
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group fcf43b3a58ff66521262b4426bab8748:196
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $groupId = null;

    /**
     * @ElementName codeType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AccountAuthorizationCodeType
     * @Optional
     * @Group fcf43b3a58ff66521262b4426bab8748:196
     * @var \CWM\BroadWorksConnector\Ocip\Models\AccountAuthorizationCodeType|null
     */
    protected $codeType = null;

    /**
     * @ElementName numberOfDigits
     * @Type int
     * @Optional
     * @Group fcf43b3a58ff66521262b4426bab8748:196
     * @MinInclusive 2
     * @MaxInclusive 14
     * @var int|null
     */
    protected $numberOfDigits = null;

    /**
     * @ElementName allowLocalAndTollFreeCalls
     * @Type bool
     * @Optional
     * @Group fcf43b3a58ff66521262b4426bab8748:196
     * @var bool|null
     */
    protected $allowLocalAndTollFreeCalls = null;

    /**
     * @ElementName mandatoryUsageUserIdList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList
     * @Nillable
     * @Optional
     * @Group fcf43b3a58ff66521262b4426bab8748:196
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $mandatoryUsageUserIdList = null;

    /**
     * @ElementName optionalUsageUserIdList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList
     * @Nillable
     * @Optional
     * @Group fcf43b3a58ff66521262b4426bab8748:196
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $optionalUsageUserIdList = null;

    /**
     * Getter for serviceProviderId
     *
     * @return string
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @param string $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceProviderId()
    {
        $this->serviceProviderId = null;
        return $this;
    }

    /**
     * Getter for groupId
     *
     * @return string
     */
    public function getGroupId()
    {
        return $this->groupId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupId;
    }

    /**
     * Setter for groupId
     *
     * @param string $groupId
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupId()
    {
        $this->groupId = null;
        return $this;
    }

    /**
     * Getter for codeType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AccountAuthorizationCodeType
     */
    public function getCodeType()
    {
        return $this->codeType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->codeType;
    }

    /**
     * Setter for codeType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AccountAuthorizationCodeType $codeType
     * @return $this
     */
    public function setCodeType(\CWM\BroadWorksConnector\Ocip\Models\AccountAuthorizationCodeType $codeType)
    {
        $this->codeType = $codeType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCodeType()
    {
        $this->codeType = null;
        return $this;
    }

    /**
     * Getter for numberOfDigits
     *
     * @return int
     */
    public function getNumberOfDigits()
    {
        return $this->numberOfDigits instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->numberOfDigits;
    }

    /**
     * Setter for numberOfDigits
     *
     * @param int $numberOfDigits
     * @return $this
     */
    public function setNumberOfDigits($numberOfDigits)
    {
        $this->numberOfDigits = $numberOfDigits;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNumberOfDigits()
    {
        $this->numberOfDigits = null;
        return $this;
    }

    /**
     * Getter for allowLocalAndTollFreeCalls
     *
     * @return bool
     */
    public function getAllowLocalAndTollFreeCalls()
    {
        return $this->allowLocalAndTollFreeCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->allowLocalAndTollFreeCalls;
    }

    /**
     * Setter for allowLocalAndTollFreeCalls
     *
     * @param bool $allowLocalAndTollFreeCalls
     * @return $this
     */
    public function setAllowLocalAndTollFreeCalls($allowLocalAndTollFreeCalls)
    {
        $this->allowLocalAndTollFreeCalls = $allowLocalAndTollFreeCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAllowLocalAndTollFreeCalls()
    {
        $this->allowLocalAndTollFreeCalls = null;
        return $this;
    }

    /**
     * Getter for mandatoryUsageUserIdList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null
     */
    public function getMandatoryUsageUserIdList()
    {
        return $this->mandatoryUsageUserIdList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->mandatoryUsageUserIdList;
    }

    /**
     * Setter for mandatoryUsageUserIdList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null $mandatoryUsageUserIdList
     * @return $this
     */
    public function setMandatoryUsageUserIdList(\CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList $mandatoryUsageUserIdList = null)
    {
        if ($mandatoryUsageUserIdList === null) {
            $this->mandatoryUsageUserIdList = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->mandatoryUsageUserIdList = $mandatoryUsageUserIdList;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMandatoryUsageUserIdList()
    {
        $this->mandatoryUsageUserIdList = null;
        return $this;
    }

    /**
     * Getter for optionalUsageUserIdList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null
     */
    public function getOptionalUsageUserIdList()
    {
        return $this->optionalUsageUserIdList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->optionalUsageUserIdList;
    }

    /**
     * Setter for optionalUsageUserIdList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null $optionalUsageUserIdList
     * @return $this
     */
    public function setOptionalUsageUserIdList(\CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList $optionalUsageUserIdList = null)
    {
        if ($optionalUsageUserIdList === null) {
            $this->optionalUsageUserIdList = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->optionalUsageUserIdList = $optionalUsageUserIdList;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetOptionalUsageUserIdList()
    {
        $this->optionalUsageUserIdList = null;
        return $this;
    }
}

