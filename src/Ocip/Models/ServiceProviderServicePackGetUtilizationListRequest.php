<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderServicePackGetUtilizationListRequest
 *
 * Request to get the service pack utilization for a service provider.
 *         For each service pack, a table of groups utilizing the pack is returned.
 *         The response is either ServiceProviderServicePackGetUtilizationListResponse or ErrorResponse.
 *
 * @see ServiceProviderServicePackGetUtilizationListResponse
 * @see ErrorResponse
 * @Groups [{"id":"8f3ed38751e86ebcc639b5bc5cdef0ec:5184","type":"sequence"}]
 */
class ServiceProviderServicePackGetUtilizationListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 8f3ed38751e86ebcc639b5bc5cdef0ec:5184
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

