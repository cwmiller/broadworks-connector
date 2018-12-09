<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupDeviceManagementGetAccessDeviceCountForDeviceTypeGroupResponse
 *
 * Response to GroupDeviceManagementGetAccessDeviceCountForDeviceTypeGroupRequest.
 *
 * @see GroupDeviceManagementGetAccessDeviceCountForDeviceTypeGroupRequest
 * @Groups [{"id":"15129cd25fa2d5581f4edfd652c24f93:3250","type":"sequence"}]
 */
class GroupDeviceManagementGetAccessDeviceCountForDeviceTypeGroupResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName accessDeviceCount
     * @Type int
     * @Group 15129cd25fa2d5581f4edfd652c24f93:3250
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

