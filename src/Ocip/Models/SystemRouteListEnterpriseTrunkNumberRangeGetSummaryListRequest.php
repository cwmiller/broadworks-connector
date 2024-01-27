<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemRouteListEnterpriseTrunkNumberRangeGetSummaryListRequest
 *
 * Request a summary table of all enterprise trunk number ranges in the system. 
 *         If resellerId is specified, the number ranges assigned to the enterprises/service providers 
 *         within the reseller are returned.
 *         If reseller administrator sends the request and resellerId is not specified, the administrator's resellerId is used.
 *         
 *         The response is either SystemRouteListEnterpriseTrunkNumberRangeGetSummaryListResponse or ErrorResponse.
 *
 * @see SystemRouteListEnterpriseTrunkNumberRangeGetSummaryListResponse
 * @see ErrorResponse
 * @Groups [{"id":"500f9871ed90b8ab3fbd262883ab503b:786","type":"sequence"}]
 */
class SystemRouteListEnterpriseTrunkNumberRangeGetSummaryListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName resellerId
     * @Type string
     * @Optional
     * @Group 500f9871ed90b8ab3fbd262883ab503b:786
     * @MinLength 1
     * @MaxLength 36
     * @var string|null
     */
    protected $resellerId = null;

    /**
     * Getter for resellerId
     *
     * @return string
     */
    public function getResellerId()
    {
        return $this->resellerId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->resellerId;
    }

    /**
     * Setter for resellerId
     *
     * @param string $resellerId
     * @return $this
     */
    public function setResellerId($resellerId)
    {
        $this->resellerId = $resellerId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetResellerId()
    {
        $this->resellerId = null;
        return $this;
    }
}

