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
 * @Groups [{"id":"de4d76f01f337fe4694212ec9f771753:5893","type":"sequence"}]
 */
class ServiceProviderGroupPagingTargetsCapacityGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group de4d76f01f337fe4694212ec9f771753:5893
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $serviceProviderId = null;

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

