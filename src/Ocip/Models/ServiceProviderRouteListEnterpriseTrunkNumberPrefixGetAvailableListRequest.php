<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderRouteListEnterpriseTrunkNumberPrefixGetAvailableListRequest
 *
 * Request a list of available number prefixes not yet assigned to any group.
 *         The response is either
 * ServiceProviderRouteListEnterpriseTrunkNumberPrefixGetAvailableListResponse or
 * ErrorResponse.
 *
 * @see ServiceProviderRouteListEnterpriseTrunkNumberPrefixGetAvailableListResponse
 * @see ErrorResponse
 */
class ServiceProviderRouteListEnterpriseTrunkNumberPrefixGetAvailableListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

