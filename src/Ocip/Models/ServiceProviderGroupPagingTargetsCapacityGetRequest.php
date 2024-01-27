<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderGroupPagingTargetsCapacityGetRequest
 *
 * Request the maximum number of target users per paging group configured for a service provider.
 *         The response is either a ServiceProviderGroupPagingTargetsCapacityGetResponse
 *         or an ErrorResponse.
 *         
 *         Replaced by: ServiceProviderGroupPagingTargetsCapacityGetRequest22 in AS data mode.
 *
 * @see ServiceProviderGroupPagingTargetsCapacityGetResponse
 * @see ErrorResponse
 * @see ServiceProviderGroupPagingTargetsCapacityGetRequest22
 * @Groups [{"id":"240b50f54d060859e5e275082fdf49f9:6860","type":"sequence"}]
 */
class ServiceProviderGroupPagingTargetsCapacityGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 240b50f54d060859e5e275082fdf49f9:6860
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

