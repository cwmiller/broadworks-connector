<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderRouteListEnterpriseTrunkNumberPrefixGetSummaryListRequest
 *
 * Request a summary table of all enterprise trunk number prefixes in the service provider.
 *         The response is either ServiceProviderRouteListEnterpriseTrunkPrefixGetSummaryListResponse or ErrorResponse.
 *
 * @see ServiceProviderRouteListEnterpriseTrunkPrefixGetSummaryListResponse
 * @see ErrorResponse
 * @Groups [{"id":"3f28429898a57a7f7846d3877b22df9f:535","type":"sequence"}]
 */
class ServiceProviderRouteListEnterpriseTrunkNumberPrefixGetSummaryListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 3f28429898a57a7f7846d3877b22df9f:535
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

