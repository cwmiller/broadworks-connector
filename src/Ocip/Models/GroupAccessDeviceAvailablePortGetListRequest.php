<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAccessDeviceAvailablePortGetListRequest
 *
 * Request to get the list of available ports in a device.
 *         The response is either GroupAccessDeviceAvailablePortGetListResponse or ErrorResponse.
 *
 * @see GroupAccessDeviceAvailablePortGetListResponse
 * @see ErrorResponse
 * @Groups [{"id":"f3a93cf15de4abd7903673e44ee3e07b:343","type":"sequence"}]
 */
class GroupAccessDeviceAvailablePortGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group f3a93cf15de4abd7903673e44ee3e07b:343
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group f3a93cf15de4abd7903673e44ee3e07b:343
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $groupId = null;

    /**
     * @ElementName accessDevice
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AccessDevice
     * @Group f3a93cf15de4abd7903673e44ee3e07b:343
     * @var \CWM\BroadWorksConnector\Ocip\Models\AccessDevice|null
     */
    protected $accessDevice = null;

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
     * Getter for accessDevice
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AccessDevice
     */
    public function getAccessDevice()
    {
        return $this->accessDevice instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->accessDevice;
    }

    /**
     * Setter for accessDevice
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AccessDevice $accessDevice
     * @return $this
     */
    public function setAccessDevice(\CWM\BroadWorksConnector\Ocip\Models\AccessDevice $accessDevice)
    {
        $this->accessDevice = $accessDevice;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAccessDevice()
    {
        $this->accessDevice = null;
        return $this;
    }


}

