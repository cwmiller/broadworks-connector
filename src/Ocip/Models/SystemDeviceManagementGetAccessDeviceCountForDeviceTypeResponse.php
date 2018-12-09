<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDeviceManagementGetAccessDeviceCountForDeviceTypeResponse
 *
 * Response to SystemDeviceManagementGetAccessDeviceCountForDeviceTypeRequest.
 *
 * @see SystemDeviceManagementGetAccessDeviceCountForDeviceTypeRequest
 * @Groups [{"id":"b5f5416d9e71f8e4246cda16c4723744:6692","type":"sequence"}]
 */
class SystemDeviceManagementGetAccessDeviceCountForDeviceTypeResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName accessDeviceCount
     * @Type int
     * @Group b5f5416d9e71f8e4246cda16c4723744:6692
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

