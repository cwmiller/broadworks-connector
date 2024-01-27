<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderGetAvailableTreeDeviceListRequest
 *
 * Requests the list of available tree devices to which a leaf device can be linked to within a specific service provider.
 *         A tree device is a device associated with a device type that has the option 
 *         supportLinks set to "Support Links from Devices". Many leaf devices can be linked to it.
 *         The list returned includes devices created at the system, service provider, and group levels.
 *         The response is either ServiceProviderGetAvailableTreeDeviceListResponse or
 *         ErrorResponse.
 *
 * @see ServiceProviderGetAvailableTreeDeviceListResponse
 * @see ErrorResponse
 * @Groups [{"id":"e19a9072c2dad499e9f28837da5768db:4469","type":"sequence"}]
 */
class ServiceProviderGetAvailableTreeDeviceListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group e19a9072c2dad499e9f28837da5768db:4469
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

