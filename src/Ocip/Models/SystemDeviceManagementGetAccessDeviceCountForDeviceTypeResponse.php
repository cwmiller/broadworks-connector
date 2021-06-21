<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDeviceManagementGetAccessDeviceCountForDeviceTypeResponse
 *
 * Response to SystemDeviceManagementGetAccessDeviceCountForDeviceTypeRequest.
 *
 * @see SystemDeviceManagementGetAccessDeviceCountForDeviceTypeRequest
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:7814","type":"sequence"}]
 */
class SystemDeviceManagementGetAccessDeviceCountForDeviceTypeResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName accessDeviceCount
     * @Type int
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:7814
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

