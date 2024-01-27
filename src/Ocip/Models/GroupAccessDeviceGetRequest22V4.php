<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAccessDeviceGetRequest22V4
 *
 * Requests the configuration of a specified group access device.
 *         The response is either GroupAccessDeviceGetResponse22V4 or ErrorResponse.
 *         Replaced by: GroupAccessDeviceGetRequest24V2
 *
 * @see GroupAccessDeviceGetResponse22V4
 * @see ErrorResponse
 * @see GroupAccessDeviceGetRequest24V2
 * @Groups [{"id":"240b50f54d060859e5e275082fdf49f9:730","type":"choice","children":[{"id":"240b50f54d060859e5e275082fdf49f9:731","type":"sequence"}]}]
 */
class GroupAccessDeviceGetRequest22V4 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 240b50f54d060859e5e275082fdf49f9:731
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group 240b50f54d060859e5e275082fdf49f9:731
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $groupId = null;

    /**
     * @ElementName deviceName
     * @Type string
     * @Group 240b50f54d060859e5e275082fdf49f9:731
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $deviceName = null;

    /**
     * @ElementName deviceExternalId
     * @Type string
     * @Group 240b50f54d060859e5e275082fdf49f9:730
     * @MaxLength 36
     * @var string|null
     */
    protected $deviceExternalId = null;

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
     * Getter for deviceName
     *
     * @return string
     */
    public function getDeviceName()
    {
        return $this->deviceName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deviceName;
    }

    /**
     * Setter for deviceName
     *
     * @param string $deviceName
     * @return $this
     */
    public function setDeviceName($deviceName)
    {
        $this->deviceName = $deviceName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDeviceName()
    {
        $this->deviceName = null;
        return $this;
    }

    /**
     * Getter for deviceExternalId
     *
     * @return string
     */
    public function getDeviceExternalId()
    {
        return $this->deviceExternalId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deviceExternalId;
    }

    /**
     * Setter for deviceExternalId
     *
     * @param string $deviceExternalId
     * @return $this
     */
    public function setDeviceExternalId($deviceExternalId)
    {
        $this->deviceExternalId = $deviceExternalId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDeviceExternalId()
    {
        $this->deviceExternalId = null;
        return $this;
    }
}

