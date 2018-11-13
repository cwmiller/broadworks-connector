<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseRouteListEnterpriseTrunkNumberRangeGetSummaryListRequest
 *
 * Request a summary table of all enterprise trunk number ranges in the enterprise.
 *         The response is either
 * EnterpriseRouteListEnterpriseTrunkNumberRangeGetSummaryListResponse or
 * ErrorResponse.
 *
 * @see EnterpriseRouteListEnterpriseTrunkNumberRangeGetSummaryListResponse
 * @see ErrorResponse
 */
class EnterpriseRouteListEnterpriseTrunkNumberRangeGetSummaryListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

