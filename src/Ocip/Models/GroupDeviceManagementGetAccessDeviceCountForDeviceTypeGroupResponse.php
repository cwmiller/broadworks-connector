<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupDeviceManagementGetAccessDeviceCountForDeviceTypeGroupResponse
 *
 * Response to GroupDeviceManagementGetAccessDeviceCountForDeviceTypeGroupRequest.
 *
 * @see GroupDeviceManagementGetAccessDeviceCountForDeviceTypeGroupRequest
 * @Groups [{"id":"4b0e7857796c636464362260a2f8e5ee:3942","type":"sequence"}]
 */
class GroupDeviceManagementGetAccessDeviceCountForDeviceTypeGroupResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName accessDeviceCount
     * @Type int
     * @Group 4b0e7857796c636464362260a2f8e5ee:3942
     * @var int|null
     */
    protected $accessDeviceCount = null;

    /**
     * Getter for accessDeviceCount
     *
     * @return int
     */
    public function getAccessDeviceCount()
    {
        return $this->accessDeviceCount instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->accessDeviceCount;
    }

    /**
     * Setter for accessDeviceCount
     *
     * @param int $accessDeviceCount
     * @return $this
     */
    public function setAccessDeviceCount($accessDeviceCount)
    {
        $this->accessDeviceCount = $accessDeviceCount;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAccessDeviceCount()
    {
        $this->accessDeviceCount = null;
        return $this;
    }
}

