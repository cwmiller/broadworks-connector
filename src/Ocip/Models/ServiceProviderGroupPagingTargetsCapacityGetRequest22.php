<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderGroupPagingTargetsCapacityGetRequest22
 *
 * Request the maximum number of target users per paging group configured for a service provider.
 *         The response is either a ServiceProviderGroupPagingTargetsCapacityGetResponse22
 *         or an ErrorResponse.
 *
 * @see ServiceProviderGroupPagingTargetsCapacityGetResponse22
 * @see ErrorResponse
 * @Groups [{"id":"8ede928f2a9c1318573ba9c7a105655c:530","type":"sequence"}]
 */
class ServiceProviderGroupPagingTargetsCapacityGetRequest22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 8ede928f2a9c1318573ba9c7a105655c:530
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

