<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupDeviceManagementGetAccessDeviceCountForDeviceTypeGroupResponse
 *
 * Response to GroupDeviceManagementGetAccessDeviceCountForDeviceTypeGroupRequest.
 *
 * @see GroupDeviceManagementGetAccessDeviceCountForDeviceTypeGroupRequest
 * @Groups [{"id":"7a7d0e1e7f776baf61f0645bc15cbe16:3250","type":"sequence"}]
 */
class GroupDeviceManagementGetAccessDeviceCountForDeviceTypeGroupResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName accessDeviceCount
     * @Type int
     * @Group 7a7d0e1e7f776baf61f0645bc15cbe16:3250
     * @var int|null
     */
    private $accessDeviceCount = null;

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

