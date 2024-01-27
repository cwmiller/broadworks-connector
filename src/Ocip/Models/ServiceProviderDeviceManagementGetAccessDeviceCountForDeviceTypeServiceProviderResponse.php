<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderDeviceManagementGetAccessDeviceCountForDeviceTypeServiceProviderResponse
 *
 * Response to ServiceProviderDeviceManagementGetAccessDeviceCountForDeviceTypeServiceProviderRequest.
 *
 * @see ServiceProviderDeviceManagementGetAccessDeviceCountForDeviceTypeServiceProviderRequest
 * @Groups [{"id":"e19a9072c2dad499e9f28837da5768db:3065","type":"sequence"}]
 */
class ServiceProviderDeviceManagementGetAccessDeviceCountForDeviceTypeServiceProviderResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName accessDeviceCount
     * @Type int
     * @Group e19a9072c2dad499e9f28837da5768db:3065
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

