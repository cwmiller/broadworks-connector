<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderRouteListEnterpriseTrunkNumberPrefixGetSummaryListRequest
 *
 * Request a summary table of all enterprise trunk number prefixes in the service
 * provider.
 *         The response is either
 * ServiceProviderRouteListEnterpriseTrunkNumberPrefixGetSummaryListResponse or
 * ErrorResponse.
 *
 * @see ServiceProviderRouteListEnterpriseTrunkNumberPrefixGetSummaryListResponse
 * @see ErrorResponse
 */
class ServiceProviderRouteListEnterpriseTrunkNumberPrefixGetSummaryListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
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

