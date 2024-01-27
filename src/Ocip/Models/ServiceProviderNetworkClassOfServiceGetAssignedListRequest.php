<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderNetworkClassOfServiceGetAssignedListRequest
 *
 * Get a list of Network Classes of Service assigned to a service provider.
 *         The response is either a ServiceProviderNetworkClassOfServiceGetAssignedListResponse 
 *         or an ErorResponse.
 *
 * @see ServiceProviderNetworkClassOfServiceGetAssignedListResponse
 * @see ErorResponse
 * @Groups [{"id":"e19a9072c2dad499e9f28837da5768db:5095","type":"sequence"}]
 */
class ServiceProviderNetworkClassOfServiceGetAssignedListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group e19a9072c2dad499e9f28837da5768db:5095
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

