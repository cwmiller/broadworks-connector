<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderDeviceManagementGetAccessDeviceCountForDeviceTypeServiceProviderResponse
 *
 * Response to
 * ServiceProviderDeviceManagementGetAccessDeviceCountForDeviceTypeServiceProviderRequest.
 */
class ServiceProviderDeviceManagementGetAccessDeviceCountForDeviceTypeServiceProviderResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
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

