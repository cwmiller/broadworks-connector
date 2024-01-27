<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupGetAvailableLeafDeviceListRequest
 *
 * Requests the list of available leaf devices that can be linked to a tree device within a specific group.
 *         A leaf device is a device associated with a device type that has the option
 *         supportLinks set to "Support Link to Device". It can be linked to only one tree device.
 *         The list returned includes devices created at the system, service provider, and group levels.
 *         The response is either GroupGetAvailableLeafDeviceListResponse or
 *         ErrorResponse.
 *         
 *         Replaced by: GroupGetAvailableLeafDeviceListRequest22.
 *
 * @see GroupGetAvailableLeafDeviceListResponse
 * @see ErrorResponse
 * @see GroupGetAvailableLeafDeviceListRequest22
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:10090","type":"sequence"}]
 */
class GroupGetAvailableLeafDeviceListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:10090
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:10090
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $groupId = null;

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
}

