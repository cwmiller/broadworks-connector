<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderGroupPagingTargetsCapacityGetRequest
 *
 * Request the maximum number of target users per paging group configured for a service provider.
 *         The response is either a ServiceProviderGroupPagingTargetsCapacityGetResponse
 *         or an ErrorResponse.
 *
 * @see ServiceProviderGroupPagingTargetsCapacityGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"756d4171668642e53d80bfcb4d781d63:521","type":"sequence"}]
 */
class ServiceProviderGroupPagingTargetsCapacityGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 756d4171668642e53d80bfcb4d781d63:521
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

