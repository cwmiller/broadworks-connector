<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupDeviceManagementGetAccessDeviceCountForDeviceTypeGroupResponse
 *
 * Response to GroupDeviceManagementGetAccessDeviceCountForDeviceTypeGroupRequest.
 *
 * @see GroupDeviceManagementGetAccessDeviceCountForDeviceTypeGroupRequest
 * @Groups [{"id":"f3a93cf15de4abd7903673e44ee3e07b:4206","type":"sequence"}]
 */
class GroupDeviceManagementGetAccessDeviceCountForDeviceTypeGroupResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName accessDeviceCount
     * @Type int
     * @Group f3a93cf15de4abd7903673e44ee3e07b:4206
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

