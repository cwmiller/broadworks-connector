<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDeviceManagementGetAccessDeviceCountForDeviceTypeResponse
 *
 * Response to SystemDeviceManagementGetAccessDeviceCountForDeviceTypeRequest.
 *
 * @see SystemDeviceManagementGetAccessDeviceCountForDeviceTypeRequest
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:7930","type":"sequence"}]
 */
class SystemDeviceManagementGetAccessDeviceCountForDeviceTypeResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName accessDeviceCount
     * @Type int
     * @Group da582a1f8028404e70d260cf1f891033:7930
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

