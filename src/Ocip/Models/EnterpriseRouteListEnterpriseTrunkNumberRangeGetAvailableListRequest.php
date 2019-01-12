<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseRouteListEnterpriseTrunkNumberRangeGetAvailableListRequest
 *
 * Request a list of number ranges that are assigned to an enterprise and still available for assignment to users within the enterprise. 
 *         The response is either EnterpriseRouteListEnterpriseTrunkNumberRangeGetAvailableListResponse or ErrorResponse.
 *
 * @see EnterpriseRouteListEnterpriseTrunkNumberRangeGetAvailableListResponse
 * @see ErrorResponse
 * @Groups [{"id":"3f28429898a57a7f7846d3877b22df9f:139","type":"sequence"}]
 */
class EnterpriseRouteListEnterpriseTrunkNumberRangeGetAvailableListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 3f28429898a57a7f7846d3877b22df9f:139
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

