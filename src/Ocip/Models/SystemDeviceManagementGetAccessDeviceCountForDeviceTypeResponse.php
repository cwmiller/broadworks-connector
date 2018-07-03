<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDeviceManagementGetAccessDeviceCountForDeviceTypeResponse
 *
 * Response to SystemDeviceManagementGetAccessDeviceCountForDeviceTypeRequest.
 *
 * @see SystemDeviceManagementGetAccessDeviceCountForDeviceTypeRequest
 */
class SystemDeviceManagementGetAccessDeviceCountForDeviceTypeResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName accessDeviceCount
     * @var int|null
     */
    private $accessDeviceCount = null;

    /**
     * Getter for accessDeviceCount
     *
     * @ElementName accessDeviceCount
     * @return int|null
     */
    public function getAccessDeviceCount()
    {
        return $this->accessDeviceCount;
    }

    /**
     * Setter for accessDeviceCount
     *
     * @ElementName accessDeviceCount
     * @param int|null $accessDeviceCount
     * @return $this
     */
    public function setAccessDeviceCount($accessDeviceCount)
    {
        $this->accessDeviceCount = $accessDeviceCount;
        return $this;
    }


}

