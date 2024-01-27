<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupThirdPartyEmergencyCallingModifyRequest
 *
 * Modify the third-party emergency call service settings for the Group.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"4b0e7857796c636464362260a2f8e5ee:8199","type":"sequence"}]
 */
class GroupThirdPartyEmergencyCallingModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 4b0e7857796c636464362260a2f8e5ee:8199
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group 4b0e7857796c636464362260a2f8e5ee:8199
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $groupId = null;

    /**
     * @ElementName enableDeviceManagement
     * @Type bool
     * @Optional
     * @Group 4b0e7857796c636464362260a2f8e5ee:8199
     * @var bool|null
     */
    protected $enableDeviceManagement = null;

    /**
     * @ElementName enableRouting
     * @Type bool
     * @Optional
     * @Group 4b0e7857796c636464362260a2f8e5ee:8199
     * @var bool|null
     */
    protected $enableRouting = null;

    /**
     * @ElementName customerId
     * @Type string
     * @Nillable
     * @Optional
     * @Group 4b0e7857796c636464362260a2f8e5ee:8199
     * @MinLength 1
     * @MaxLength 36
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $customerId = null;

    /**
     * @ElementName secretKey
     * @Type string
     * @Nillable
     * @Optional
     * @Group 4b0e7857796c636464362260a2f8e5ee:8199
     * @MinLength 1
     * @MaxLength 16
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $secretKey = null;

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
     * Getter for enableDeviceManagement
     *
     * @return bool
     */
    public function getEnableDeviceManagement()
    {
        return $this->enableDeviceManagement instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableDeviceManagement;
    }

    /**
     * Setter for enableDeviceManagement
     *
     * @param bool $enableDeviceManagement
     * @return $this
     */
    public function setEnableDeviceManagement($enableDeviceManagement)
    {
        $this->enableDeviceManagement = $enableDeviceManagement;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableDeviceManagement()
    {
        $this->enableDeviceManagement = null;
        return $this;
    }

    /**
     * Getter for enableRouting
     *
     * @return bool
     */
    public function getEnableRouting()
    {
        return $this->enableRouting instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableRouting;
    }

    /**
     * Setter for enableRouting
     *
     * @param bool $enableRouting
     * @return $this
     */
    public function setEnableRouting($enableRouting)
    {
        $this->enableRouting = $enableRouting;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableRouting()
    {
        $this->enableRouting = null;
        return $this;
    }

    /**
     * Getter for customerId
     *
     * @return string|null
     */
    public function getCustomerId()
    {
        return $this->customerId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->customerId;
    }

    /**
     * Setter for customerId
     *
     * @param string|null $customerId
     * @return $this
     */
    public function setCustomerId($customerId = null)
    {
        if ($customerId === null) {
            $this->customerId = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->customerId = $customerId;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCustomerId()
    {
        $this->customerId = null;
        return $this;
    }

    /**
     * Getter for secretKey
     *
     * @return string|null
     */
    public function getSecretKey()
    {
        return $this->secretKey instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->secretKey;
    }

    /**
     * Setter for secretKey
     *
     * @param string|null $secretKey
     * @return $this
     */
    public function setSecretKey($secretKey = null)
    {
        if ($secretKey === null) {
            $this->secretKey = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->secretKey = $secretKey;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSecretKey()
    {
        $this->secretKey = null;
        return $this;
    }
}

