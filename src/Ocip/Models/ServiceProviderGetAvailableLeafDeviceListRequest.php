<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderGetAvailableLeafDeviceListRequest
 *
 * Requests the list of available leaf devices that can be linked to a tree device within a specific service provider.
 *         A leaf device is a device associated with a device type that has the option
 *         supportLinks set to "Support Link to Device". It can be linked to only one tree device.
 *         The list returned includes devices created at the system, service provider, and group levels.
 *         The response is either ServiceProviderGetAvailableLeafDeviceListResponse or
 *         ErrorResponse.
 *         
 *         Replaced by: ServiceProviderGetAvailableLeafDeviceListRequest22.
 *
 * @see ServiceProviderGetAvailableLeafDeviceListResponse
 * @see ErrorResponse
 * @see ServiceProviderGetAvailableLeafDeviceListRequest22
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:19322","type":"sequence"}]
 */
class ServiceProviderGetAvailableLeafDeviceListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:19322
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * Getter for serviceProviderId
     *
     * @return string
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @param string $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceProviderId()
    {
        $this->serviceProviderId = null;
        return $this;
    }
}

