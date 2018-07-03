<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseRouteListEnterpriseTrunkNumberPrefixGetAvailableListRequest
 *
 * Request a list of number prefixes that are assigned to an enterprise and still
 * available for assignment to users within the enterprise. 
 *         The response is either
 * EnterpriseRouteListEnterpriseTrunkNumberPrefixGetAvailableListResponse or
 * ErrorResponse.
 *
 * @see EnterpriseRouteListEnterpriseTrunkNumberPrefixGetAvailableListResponse
 * @see ErrorResponse
 */
class EnterpriseRouteListEnterpriseTrunkNumberPrefixGetAvailableListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * Getter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @return string|null
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @param string|null $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }


}

