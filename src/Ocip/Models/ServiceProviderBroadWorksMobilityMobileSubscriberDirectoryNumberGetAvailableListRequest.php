<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderBroadWorksMobilityMobileSubscriberDirectoryNumberGetAvailableListRequest
 *
 * Request a list of available Mobile Subscriber Directory Numbers not yet assigned to any group. This command is applicable only for service providers and will fail for enterprises.
 *         The response is either ServiceProviderBroadWorksMobilityMobileSubscriberDirectoryNumberGetAvailableListResponse or ErrorResponse.
 *
 * @see ServiceProviderBroadWorksMobilityMobileSubscriberDirectoryNumberGetAvailableListResponse
 * @see ErrorResponse
 * @Groups [{"id":"9ae9f7d53e566e21347e23e20e2a2a39:577","type":"sequence"}]
 */
class ServiceProviderBroadWorksMobilityMobileSubscriberDirectoryNumberGetAvailableListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 9ae9f7d53e566e21347e23e20e2a2a39:577
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

