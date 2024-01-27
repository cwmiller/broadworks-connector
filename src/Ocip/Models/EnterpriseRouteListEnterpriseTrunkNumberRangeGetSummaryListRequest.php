<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseRouteListEnterpriseTrunkNumberRangeGetSummaryListRequest
 *
 * Request a summary table of all enterprise trunk number ranges in the enterprise.
 *         The response is either EnterpriseRouteListEnterpriseTrunkNumberRangeGetSummaryListResponse or ErrorResponse.
 *
 * @see EnterpriseRouteListEnterpriseTrunkNumberRangeGetSummaryListResponse
 * @see ErrorResponse
 * @Groups [{"id":"500f9871ed90b8ab3fbd262883ab503b:176","type":"sequence"}]
 */
class EnterpriseRouteListEnterpriseTrunkNumberRangeGetSummaryListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 500f9871ed90b8ab3fbd262883ab503b:176
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

