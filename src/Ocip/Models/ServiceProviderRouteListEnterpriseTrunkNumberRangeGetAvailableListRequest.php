<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderRouteListEnterpriseTrunkNumberRangeGetAvailableListRequest
 *
 * Request a list of available number ranges not yet assigned to any group.
 *         The response is either
 * ServiceProviderRouteListEnterpriseTrunkNumberRangeGetAvailableListResponse or
 * ErrorResponse.
 *
 * @see ServiceProviderRouteListEnterpriseTrunkNumberRangeGetAvailableListResponse
 * @see ErrorResponse
 */
class ServiceProviderRouteListEnterpriseTrunkNumberRangeGetAvailableListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

