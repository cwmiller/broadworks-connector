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
 * @Groups [{"id":"500f9871ed90b8ab3fbd262883ab503b:143","type":"sequence"}]
 */
class EnterpriseRouteListEnterpriseTrunkNumberRangeGetAvailableListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 500f9871ed90b8ab3fbd262883ab503b:143
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

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

