<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseRouteListEnterpriseTrunkNumberPrefixGetAvailableListRequest
 *
 * Request a list of number prefixes that are assigned to an enterprise and still available for assignment to users within the enterprise. 
 *         The response is either EnterpriseRouteListEnterpriseTrunkNumberPrefixGetAvailableListResponse or ErrorResponse.
 *
 * @see EnterpriseRouteListEnterpriseTrunkNumberPrefixGetAvailableListResponse
 * @see ErrorResponse
 * @Groups [{"id":"3f28429898a57a7f7846d3877b22df9f:68","type":"sequence"}]
 */
class EnterpriseRouteListEnterpriseTrunkNumberPrefixGetAvailableListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 3f28429898a57a7f7846d3877b22df9f:68
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

