<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDeviceManagementSwitchDeviceTypeRequest
 *
 * Switch the device type for all devices at the specified scope for a device type.
 *         To switch all the device type's device profiles for the system, neither
 * the serviceProviderId and groupId should be present.
 *         To switch all the device type's device profiles for a service provider,
 * only serviceProviderId should be specified.
 *         To switch all the device type's device profiles for a group,
 * serviceProviderId and groupId should specified.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemDeviceManagementSwitchDeviceTypeRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName svcProviderId
     * @var string|null
     */
    private $svcProviderId = null;

    /**
     * @ElementName groupId
     * @var string|null
     */
    private $groupId = null;

    /**
     * @ElementName fromDeviceType
     * @var string|null
     */
    private $fromDeviceType = null;

    /**
     * @ElementName toDeviceType
     * @var string|null
     */
    private $toDeviceType = null;

    /**
     * Getter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @return string|null
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @param string|null $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * Getter for svcProviderId
     *
     * @ElementName svcProviderId
     * @return string|null
     */
    public function getSvcProviderId()
    {
        return $this->svcProviderId;
    }

    /**
     * Setter for svcProviderId
     *
     * @ElementName svcProviderId
     * @param string|null $svcProviderId
     * @return $this
     */
    public function setSvcProviderId($svcProviderId)
    {
        $this->svcProviderId = $svcProviderId;
        return $this;
    }

    /**
     * Getter for groupId
     *
     * @ElementName groupId
     * @return string|null
     */
    public function getGroupId()
    {
        return $this->groupId;
    }

    /**
     * Setter for groupId
     *
     * @ElementName groupId
     * @param string|null $groupId
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * Getter for fromDeviceType
     *
     * @ElementName fromDeviceType
     * @return string|null
     */
    public function getFromDeviceType()
    {
        return $this->fromDeviceType;
    }

    /**
     * Setter for fromDeviceType
     *
     * @ElementName fromDeviceType
     * @param string|null $fromDeviceType
     * @return $this
     */
    public function setFromDeviceType($fromDeviceType)
    {
        $this->fromDeviceType = $fromDeviceType;
        return $this;
    }

    /**
     * Getter for toDeviceType
     *
     * @ElementName toDeviceType
     * @return string|null
     */
    public function getToDeviceType()
    {
        return $this->toDeviceType;
    }

    /**
     * Setter for toDeviceType
     *
     * @ElementName toDeviceType
     * @param string|null $toDeviceType
     * @return $this
     */
    public function setToDeviceType($toDeviceType)
    {
        $this->toDeviceType = $toDeviceType;
        return $this;
    }


}

