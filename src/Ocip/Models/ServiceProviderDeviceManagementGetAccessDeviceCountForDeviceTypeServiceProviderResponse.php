<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderDeviceManagementGetAccessDeviceCountForDeviceTypeServiceProviderResponse
 *
 * Response to
 * ServiceProviderDeviceManagementGetAccessDeviceCountForDeviceTypeServiceProviderRequest.
 *
 * @see
 * ServiceProviderDeviceManagementGetAccessDeviceCountForDeviceTypeServiceProviderRequest
 */
class ServiceProviderDeviceManagementGetAccessDeviceCountForDeviceTypeServiceProviderResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName accessDeviceCount
     * @Type int
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

