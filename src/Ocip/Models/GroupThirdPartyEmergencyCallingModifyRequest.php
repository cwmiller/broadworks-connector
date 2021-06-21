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
 * @Groups [{"id":"f3a93cf15de4abd7903673e44ee3e07b:8448","type":"sequence"}]
 */
class GroupThirdPartyEmergencyCallingModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group f3a93cf15de4abd7903673e44ee3e07b:8448
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group f3a93cf15de4abd7903673e44ee3e07b:8448
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $groupId = null;

    /**
     * @ElementName enableDeviceManagement
     * @Type bool
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:8448
     * @var bool|null
     */
    private $enableDeviceManagement = null;

    /**
     * @ElementName enableRouting
     * @Type bool
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:8448
     * @var bool|null
     */
    private $enableRouting = null;

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


}

